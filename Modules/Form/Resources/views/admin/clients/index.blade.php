@extends('form::layouts.layout')

@section('content')
    <title>List All Clients to Application</title>
    <h3>List All Clients</h3>
    <br/><br/>
    <a class="btn btn-default" href="{{ route('clients.create') }}">Create new</a>
    <div class="">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>CNPJ/CPF</th>
                <th>Date Birth</th>
                <th>E-mail</th>
                <th>Phone</th>
                <th>Sex</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($clients as $client)
                <tr>
                    <td>{{ $client->id }}</td>
                    <td>{{ $client->name }}</td>
                    <td>{{ $client->document_number_formatted }}</td>
                    <td>{{ $client->date_birth_formatted }}</td>
                    <td>{{ $client->email }}</td>
                    <td>{{ $client->phone }}</td>
                    <td>{{ $client->sex }}</td>
                    <td>
                        <a href="{{ route('clients.edit', ['clients' => $client->id]) }}">Edit</a> |
                        <a href="{{ route('clients.show', ['clients' => $client->id]) }}">View</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    {{$clients->links()}}
@stop
