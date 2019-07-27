@extends('form::layouts.layout')
@section('content')
    <h3>Create New Clients</h3>
    <h4>{{ $clientType == \Modules\Form\Entities\Client::TYPE_INDIVIDUAL ? 'Pessoa Física' : 'Pessoa Juridica' }}</h4>
    <a href="{{ route('clients.index') }}">Back</a>
    <a href="{{ route('clients.create', ['client_type' => \Modules\Form\Entities\Client::TYPE_INDIVIDUAL]) }}">Pessoa Física</a>
    <a href="{{ route('clients.create', ['client_type' => \Modules\Form\Entities\Client::TYPE_LEGAL]) }}">Pessoa Juridica</a>
    @include('form::form._form_errors')
{{--    <form method="POST" action="{{ route('clients.store') }}">--}}
    {{ Form::open(['route' => 'clients.store']) }}
        @include('form::admin.clients._form')
        <button type="submit" class="btn btn-default">Create</button>
        @csrf
{{--    </form>--}}
    {{ Form::close() }}
@stop
