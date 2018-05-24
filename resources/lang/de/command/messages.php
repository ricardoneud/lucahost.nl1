<?php

return [
    'location' => [
        'no_location_found' => 'Shortcode wurde nicht gefunden.',
        'ask_short' => 'Location Short Code',
        'ask_long' => 'Location Beschreibung',

        'created' => 'Neue  Location (:name) mit der ID :id erstellt.',
        'deleted' => 'Location gelöscht.',
    ],
    'user' => [
        'search_users' => 'Gib einen Benutzernamen, eine UUID oder eine Email an',
        'select_search_user' => 'ID des Benutzers (Gib \'0\' ein, um erneut zu suchen)',

        'deleted' => 'Benutzer erfolgreich gelöscht.',
        'confirm_delete' => 'Bist du dir wirklich sicher?',
        'no_users_found' => 'Es wurden keine Benutzer gefunden.',
        'multiple_found' => 'Es wurden mehrere Accounts gefunden.',
        'ask_admin' => 'Ist dieser Benutzer ein Administrator?',
        'ask_email' => 'Email Adresse',
        'ask_username' => 'Benutzername',
        'ask_name_first' => 'Vorname',
        'ask_name_last' => 'Nachname',
        'ask_password' => 'Passwort',

        'ask_password_tip' => 'Wenn du das wirklich tun willst, drücke Strg+C und benutze das `--no-password` Flag.',
        'ask_password_help' => 'Das Passwort muss Zahlen, Groß- und Kleinbuchstaben enthalten und mindestens 8 Zeichen lang sein.',
        '2fa_help_text' => [
            'Dieser Befehl deaktiviert die 2-Faktor-Authentifizierung für das Konto eines Benutzers, wenn sie aktiviert ist. Dies sollte nur dann als Befehl zur Wiederherstellung eines Kontos verwendet werden, wenn der Benutzer von seinem Konto ausgeschlossen ist.',
            'Wenn das nicht das ist, was du tun wolltest, drücke Strg+C um den Prozess zu beenden.',

        ],
        '2fa_disabled' => '2-Faktor-Authentifizierung wurde für :email deaktiviert.',
    ],
    'schedule' => [

        'output_line' => 'Geplanter Job für die erste Aufgabe in `:schedule` (:hash).',
    ],
    'maintenance' => [
        'deleting_service_backup' => 'Lösche Service Backup Datei :file.',
    ],
    'server' => [
        'rebuild_failed' => 'Neubauanforderung für ":name" (#:id) auf Node ":node" ist gescheitert mit Fehler: :message',

    ],
    'environment' => [
        'mail' => [
            'ask_smtp_host' => 'SMTP Host (z.B. smtp.google.com)',
            'ask_smtp_port' => 'SMTP Port',
            'ask_smtp_username' => 'SMTP Benutzername',

            'ask_smtp_password' => 'SMTP Passwort',

            'ask_mailgun_domain' => 'Mailgun Domain',
            'ask_mailgun_secret' => 'Mailgun Secret',
            'ask_mandrill_secret' => 'Mandrill Secret',
            'ask_postmark_username' => 'Postmark API Key',
            'ask_driver' => 'Welcher Treiber soll für das Senden von E-Mails verwendet werden?',
            'ask_mail_from' => 'E-Mail Adressen E-Mails ausgehen von',
            'ask_mail_name' => 'Name von welchem E-Mails erscheinen sollen',
            'ask_encryption' => 'Zu verwendende Verschlüsselungsmethode',
        ],
        'database' => [

            'host_warning' => 'Es wird dringend empfohlen, "localhost" nicht als Datenbank-Host zu verwenden, da wir häufige Socket-Verbindungsprobleme gesehen haben. Wenn du eine lokale Verbindung verwenden willst, solltest du "127.0.0.1" verwenden.',
            'host' => 'Datenbank Host',
            'port' => 'Datenbank Port',
            'database' => 'Datenbank Name',
            'username_warning' => 'Die Verwendung des "root"-Accounts für MySQL-Verbindungen ist nicht nur sehr verpönt, sondern auch von dieser Anwendung nicht erlaubt. Sie müssen einen MySQL-Benutzer für diese Software erstellt haben.',
            'username' => 'Datenbank Benutzername',
            'password_defined' => 'Es scheint so, als ob du bereits ein MySQL-Verbindungspasswort definiert hast, möchtest du es ändern?',
            'password' => 'Datenbank Passwort',
            'connection_error' => 'Die Verbindung zum MySQL-Server kann mit den angegebenen Anmeldeinformationen nicht hergestellt werden. Der zurückgegebene Fehler war ":error".',
            'creds_not_saved' => 'Deine Verbindungsdaten wurden NICHT gespeichert. Du musst gültige Verbindungsinformationen angeben, bevor du fortfahren kannst.',
            'try_again' => 'Zurückgehen und es nochmal versuchen?',


        ],
        'app' => [
            'app_url_help' => 'Die Anwendungs URL MUSS mit https:// oder http:// beginnen, je nach dem ob du SSL verwendest oder nicht. Solltest du das Schema nicht beinhalten, werden deine E-Mails und anderer Inhalt an die falsche Stelle verlinken.',
            'app_url' => 'Anwendungs URL',
            'timezone_help' => 'Die Zeitzone sollte einer von PHP\'s unterstützten Zeitzonen entsprechen. Solltest du dir unsicher sein, informiere dich bei http://php.net/manual/de/timezones.php .',
            'timezone' => 'Anwendungs Zeitzone',
            'cache_driver' => 'Cache Treiber',
            'session_driver' => 'Sitzungstreiber',
            'using_redis' => 'Du hast für eine oder mehr Optionen den Redis Treiber ausgewählt, bitte stelle gültige Verbindungsinformationen unten zur Verfügung. In den meisten fällen kannst du die Standartwerte verwenden, es sei denn du hast dein Setup modifiziert.',
            'redis_host' => 'Redis Host',
            'redis_password' => 'Redis Passwort',
            'redis_pass_help' => 'Normalerweise hat eine Redis Server Instanz kein Passwort, da diese Lokal läuft und von aussen nicht erreichbar ist. Sollte das der Fall sein, drücke einfach Enter ohne etwas einzugeben.',
            'redis_port' => 'Redis Port',
            'redis_pass_defined' => 'Ein Passwort für Redis scheint schon definiert zu sein, möchtest du es ändern ?',
        ],
    ],
];
