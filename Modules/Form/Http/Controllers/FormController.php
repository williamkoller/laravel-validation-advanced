<?php

namespace Modules\Form\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Form\Entities\Client;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function listAll()
    {
        $clients = Client::all(); // chama o model com todos os registros
        return view('form::admin.clients.index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function createClients(Request $request)
    {
        $clientType = Client::getClientType($request->client_type);

        return view('form::admin.clients.create', ['client' => new Client(), 'clientType' => $clientType]);
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        return view('form::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function editClients($id)
    {
        return view('form::admin.clients.edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
