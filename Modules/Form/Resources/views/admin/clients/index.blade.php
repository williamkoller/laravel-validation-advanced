@extends('form::layouts.layout')

@section('content')
    <h3>List All Clients</h3>
    <br/><br/>
    <a class="btn btn-default" href="{{ route('admin.clients.createClients') }}">Create new</a>
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
                    <td>{{ $client->document_number }}</td>
                    <td>{{ $client->date_birth }}</td>
                    <td>{{ $client->email }}</td>
                    <td>{{ $client->phone }}</td>
                    <td>{{ $client->sex }}</td>
                    <td>
                        <a href="{{ route('admin.clients.editClients', ['clients' => $client->id]) }}">Edit</a> |
                        <a href="{{ route('admin.clients.listAll', ['clients' => $client->id]) }}">View</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@stop
