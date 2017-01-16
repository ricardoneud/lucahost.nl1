{-- Copyright (c) 2015 - 2016 Dane Everitt <dane@daneeveritt.com> --}}

{{-- Permission is hereby granted, free of charge, to any person obtaining a copy --}}
{{-- of this software and associated documentation files (the "Software"), to deal --}}
{{-- in the Software without restriction, including without limitation the rights --}}
{{-- to use, copy, modify, merge, publish, distribute, sublicense, and/or sell --}}
{{-- copies of the Software, and to permit persons to whom the Software is --}}
{{-- furnished to do so, subject to the following conditions: --}}

{{-- The above copyright notice and this permission notice shall be included in all --}}
{{-- copies or substantial portions of the Software. --}}

{{-- THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR --}}
{{-- IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, --}}
{{-- FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE --}}
{{-- AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER --}}
{{-- LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, --}}
{{-- OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE --}}
{{-- SOFTWARE. --}}
@extends('layouts.master')

@section('title')
    {{ trans('base.api.index.header') }}
@endsection

@section('content-header')
    <h1>{{ trans('base.api.index.header') }}<small>{{ trans('base.api.index.header_sub')}}</small></h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('index') }}">{{ trans('strings.home') }}</a></li>
        <li class="active">{{ trans('strings.api_access') }}</li>
    </ol>
@endsection

@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">{{ trans('base.api.index.list')}}</h3>
            </div>
            <div class="box-body table-responsive no-padding">
                <table class="table table-hover">
                    <tbody>
                        <tr>
                            <th>{{ trans('strings.public_key') }}</th>
                            <th>{{ trans('strings.memo') }}</th>
                            <th class="text-center hidden-sm hidden-xs">{{ trans('strings.created') }}</th>
                            <th class="text-center hidden-sm hidden-xs">{{ trans('strings.expires') }}</th>
                            <th></th>
                        </tr>
                        @foreach ($keys as $key)
                            <tr>
                                <td><code>{{ $key->public }}</code></td>
                                <td>{{ $key->memo }}</td>
                                <td class="text-center hidden-sm hidden-xs">
                                    {{ (new Carbon($key->created_at))->toDayDateTimeString() }}
                                </td>
                                <td class="text-center hidden-sm hidden-xs">
                                    @if(is_null($key->expires_at))
                                        <span class="label label-default">never</span>
                                    @else
                                        {{ (new Carbon($key->expires_at))->toDayDateTimeString() }}
                                    @endif
                                </td>
                                <td class="text-center">
                                    <a href="#delete" class="text-danger" data-action="delete" data-attr="{{ $key->public}}"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="box-footer">
                <a href="{{ route('account.api.new') }}">
                    <button class="btn btn-sm btn-success">{{ trans('base.api.index.create_new') }}</button>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
