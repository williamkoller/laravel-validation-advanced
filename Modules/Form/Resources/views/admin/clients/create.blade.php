@extends('form::layouts.layout')
@section('content')
    <h3>Create New Clients</h3>
    <h4>{{ $clientType == \Modules\Form\Entities\Client::TYPE_INDIVIDUAL ? 'Physical Person' : 'Legal Person' }}</h4>
    <a href="{{ route('clients.index') }}">Back</a>
    <a href="{{ route('clients.create', ['client_type' => \Modules\Form\Entities\Client::TYPE_INDIVIDUAL]) }}">Physical Person</a>
    <a href="{{ route('clients.create', ['client_type' => \Modules\Form\Entities\Client::TYPE_LEGAL]) }}">Legal Person</a>
    @include('form::form._form_errors')
    <form method="POST" action="{{ route('clients.store') }}">
        @include('form::admin.clients._form')
        <button type="submit" class="btn btn-default">Create</button>
        @csrf
    </form>

@stop
