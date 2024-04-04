<?php

namespace Pterodactyl\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Contracts\Encryption\Encrypter;
use Pterodactyl\Console\Kernel;
use Pterodactyl\Models\ApiKey;
use Pterodactyl\Models\User;
use Pterodactyl\Services\Api\KeyCreationService;


class CreateApiKey extends Command
{

    public function __construct(
        private KeyCreationService $apiKeyCreationService,
        private Encrypter $encrypter
    ) {
        parent::__construct();
    }

    protected $signature = 'p:panel-api:create-key
        {--username= : The username for which to create an API key for}
        {--password= : The password for the user account.}
        {--description= : The description to assign to the API key.}
        {--app_token : Generate an application token instead of a user token.}
        {--file_output= : The location of the file output for the API key (outputs the API key to stdout by default).}
        {--allocations=[r, rw]: API permissions for reading and writing allocations.}
        {--database_hosts=[r, rw]: API permissions for reading and writing database hosts.}
        {--eggs=[r, rw]: API permissions for reading and writing eggs.}
        {--locations=[r, rw]: API permissions for reading and writing locations.}
        {--nests=[r, rw]: API permissions for reading and writing nests.}
        {--nodes=[r, rw]: API permissions for reading and writing nodes.}
        {--server_databases=[r, rw]: API permissions for reading and writing server databases.}
        {--servers=[r, rw]: API permissions for reading and writing servers.}
        {--users=[r, rw]: API permissions for reading and writing users.}';

    protected $description = 'Allows the creation of a new API key for the Panel.';

    /**
     * Execute a command to create a new API key for the Panel for the specified user.
     * 
     * @throws \Pterodactyl\Exceptions\Model\ModelNotFoundException
     */
    public function handle(): void
    {
        $appToken = $this->option('app_token');

        $username = $this->option('username') ?? $this->ask(trans('command/messages.user.ask_username'));
        $password = $this->option('password') ?? $this->secret(trans('command/messages.user.ask_password'));
        $description = $this->option('description') ?? $this->ask(trans('command/messages.API_key.ask_API_key_description'));

        $permissions = [
            'r_allocations'         => $this->option('allocations')         === 'rw' ? 3 : ($this->option('allocations')         === 'r' ? 1 : 0),
            'r_database_hosts'      => $this->option('database_hosts')      === 'rw' ? 3 : ($this->option('database_hosts')      === 'r' ? 1 : 0),
            'r_eggs'                => $this->option('eggs')                === 'rw' ? 3 : ($this->option('eggs')                === 'r' ? 1 : 0),
            'r_locations'           => $this->option('locations')           === 'rw' ? 3 : ($this->option('locations')           === 'r' ? 1 : 0),
            'r_nests'               => $this->option('nests')               === 'rw' ? 3 : ($this->option('nests')               === 'r' ? 1 : 0),
            'r_nodes'               => $this->option('nodes')               === 'rw' ? 3 : ($this->option('nodes')               === 'r' ? 1 : 0),
            'r_server_databases'    => $this->option('server_databases')    === 'rw' ? 3 : ($this->option('server_databases')    === 'r' ? 1 : 0),
            'r_servers'             => $this->option('servers')             === 'rw' ? 3 : ($this->option('servers')             === 'r' ? 1 : 0),
            'r_users'               => $this->option('users')               === 'rw' ? 3 : ($this->option('users')               === 'r' ? 1 : 0)
        ];

        try {
            $user = User::query()->where($this->getField($username), $username)->firstOrFail();
        } catch (ModelNotFoundException $e) {
            $this->line(trans('command/messages.user.error_user_auth_invalid'));
            throw $e;
        }

        if($appToken)
        {
            $this->apiKeyCreationService->setKeyType(ApiKey::TYPE_APPLICATION);
        }
        else
        {
            $this->apiKeyCreationService->setKeyType(ApiKey::TYPE_ACCOUNT);
        }

        $dataToPush = [
            'memo' => $description,
            'user_id' => $user->id,
        ];

        # Unused variable, could have validation for the key creation but kinda useless
        $apiKeyCreated = $this->apiKeyCreationService->handle($dataToPush, $permissions);

        # Get the key from the database to ensure proper creation
        try {
            $mostRecentApiKey = ApiKey::query()->where('user_id', $user->id)->latest()->firstOrFail();
        } catch (\Throwable $th) {
            throw $th;
        }

        $this->table(['Field', 'Value'], [
            ['user_id', $user->id],
            ['identifier', $mostRecentApiKey->identifier],
            ['token', $this->encrypter->decrypt($mostRecentApiKey->token)],
            ['memo', $mostRecentApiKey->memo],
            ['Permissions', $permissions['r_allocations']],
            ['Permissions', $permissions['r_database_hosts']],
            ['Permissions', $permissions['r_eggs']],
            ['Permissions', $permissions['r_locations']],
            ['Permissions', $permissions['r_nests']],
            ['Permissions', $permissions['r_nodes']],
            ['Permissions', $permissions['r_server_databases']],
            ['Permissions', $permissions['r_servers']],
            ['Permissions', $permissions['r_users']],
        ]);

        if($this->option('file_output'))
        {
            $fileOutput = $this->option('file_output');
            file_put_contents($fileOutput, $this->encrypter->decrypt($mostRecentApiKey->identifier . $mostRecentApiKey->token));
        }
    }

    /**
     * Determine if the user is logging in using an email or username.
     */
    protected function getField(string $input = null): string
    {
        return ($input && str_contains($input, '@')) ? 'email' : 'username';
    }
}
