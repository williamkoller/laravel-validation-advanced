@extends('form::layouts.layout')
@section('content')
    <h3>Edit Clients</h3>
    @include('form::form._form_errors')
    <a href="{{ route('clients.index') }}">Back</a>
{{--    <form method="post" action="{{ route('clients.update', ['client' => $client->id]) }}">--}}
    {{ Form::model($client,['route' => ['clients.update', $client->id], 'method' => 'PUT']) }}
{{--        {{ method_field('PUT') }}--}}
        @include('form::admin.clients._form')
        <button type="submit" class="btn btn-default">Salvar</button>
{{--    </form>--}}
    {{ Form::close() }}

@stop
