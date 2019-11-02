@extends('form::layouts.layout')

@section('content')
    <h3>View Client</h3>
    <a href="{{ route('clients.index') }}" class="btn btn-secondary" style="margin-bottom: 15px;">Back</a>
    <br>
    <a class="btn btn-primary" href="{{ route('clients.edit',['client' => $client->id]) }}">Edit</a>
    <a class="btn btn-danger" href="{{ route('clients.destroy',['client' => $client->id]) }}"
       onclick="event.preventDefault();if(confirm('Want to delete this client?')){document.getElementById('form-delete').submit();}">Excluir</a>
    {{ Form::open(['route' => ['clients.destroy', $client->id], 'method' => 'DELETE', 'id' => 'form-delete']) }}
{{--    <form id="form-delete"style="display: none" action="{{ route('clients.destroy',['client' => $client->id]) }}" method="post">--}}
{{--        {{ csrf_field() }}--}}
{{--        {{ method_field('DELETE') }}--}}
{{--    </form>--}}
    {{ Form::close() }}
    <table class="table table-bordered">
        <tbody>
        <tr>
            <th scope="row">ID</th>
            <td>{{$client->id}}</td>
        </tr>
        <tr>
            <th scope="row">Name</th>
            <td>{{$client->name}}</td>
        </tr>
        <tr>
            <th scope="row">Document</th>
            <td>{{$client->document_number_formatted}}</td>
        </tr>
        <tr>
            <th scope="row">E-mail</th>
            <td>{{$client->email}}</td>
        </tr>
        <tr>
            <th scope="row">Phone</th>
            <td>{{$client->phone}}</td>
        </tr>
        <tr>
            <th scope="row">Marital Status</th>
            <td>
                @switch($client->marital_status)
                    @case(1)
                    Single
                    @break

                    @case(2)
                    Married
                    @break

                    @case(3)
                    Divorced
                    @break
                @endswitch
            </td>
        </tr>
        <tr>
            <th scope="row">Date Birth </th>
            <td>{{$client->date_birth_formatted}}</td>
        </tr>
        <tr>
            <th scope="row">Sex</th>
            <td>{{$client->sex_formatted }}</td>
        </tr>
        <tr>
            <th scope="row">Physical Disability</th>
            <td>{{$client->physical_disability}}</td>
        </tr>
        <tr>
            <th scope="row">Defaulting</th>
            <td>{{$client->defaulter?'Yes': 'No'}}</td>
        </tr>
        </tbody>
    </table>
@endsection
