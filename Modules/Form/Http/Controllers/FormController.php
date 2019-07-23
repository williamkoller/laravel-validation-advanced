<?php

namespace Modules\Form\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use Modules\Form\Entities\Client;
use Modules\Form\Http\Requests\ClientRequest;


class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $clients = Client::all(); // chama o model com todos os registros
        return view('form::admin.clients.index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create(Request $request)
    {
        $clientType = Client::getClientType($request->client_type);

        return view('form::admin.clients.create', ['client' => new Client(), 'clientType' => $clientType]); // passa uma estância vazia no model Client()
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $data = $this->_validate($request);
        $data['defaulter'] = $request->has('defaulter'); // verifica se tem algo vindo na requisição
        $data['client_type'] = Client::getClientType($request->client_type);
        Client::create($data);
        return redirect()->route('clients.index');
    }

    /**
     * Show the specified resource.
     * @param Client $client
     * @return Response
     */
    public function show(Client $client)
    {
        return view('form::admin.clients.show', compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param Client $client
     * @return Response
     */
    public function edit(Client $client)
    {
        $clientType = $client->client_type;
        return view('form::admin.clients.edit', compact('client','clientType'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $client
     * @return Response
     * @throws \Illuminate\Validation\ValidationException
     */
    public function update(ClientRequest $request, Client $client)
    {
        $data = $request->only(array_keys($request->rules()));
        $data = $this->_validate($request);
        $data['defaulter'] = $request->has('defaulter');
        $client->fill($data);
        $client->save();

        return redirect()->route('clients.index')->with('message', 'Client updated with success');

    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     * @throws \Exception
     */
    public function destroy(Client $client)
    {
        $client->delete();
        return redirect()->route('clients.index')->with('message', 'Client deleted with success');
    }

    /**
     * @param Request $request
     * @return mixed
     * @throws \Illuminate\Validation\ValidationException
     */
    private function _validate(Request $request)
    {
        $clientType = Client::getClientType($request->client_type);
        $documentNumberType = $clientType == Client::TYPE_INDIVIDUAL ? 'cpf' : 'cnpj';
        $client = $request->route('client');
        $clientId = $client instanceof Client ? $client->id : null;
        $rules = [
            'name' => 'required|max:255',
            'document_number' => "required|unique:clients,document_number,$clientId|document_number:$documentNumberType",
            'email' => 'required|email',
            'phone' => 'required'
        ];
        $maritalStatus = implode(',', array_keys(Client::MARITAL_STATUS));
        $rulesIndividual = [
            'date_birth' => 'required|date',
            'marital_status' => "required|in:$maritalStatus",
            'sex' => 'required|in:m,f',
            'physical_disability' => 'max:255'
        ];
        $rulesLegal = [
            'company_name' => 'required|max:255'
        ];
        return $this->validate($request, $clientType == Client::TYPE_INDIVIDUAL ?
            $rules + $rulesIndividual : $rules + $rulesLegal);
    }


}
