{{--{{ csrf_field() }}--}}
{{ Form::hidden('client_type', $clientType) }}
{{--<input type="hidden" name="client_type" value="{{ $clientType }}">--}}
@component('form::form._form_group',['field' => 'name'])
    {{ Form::label('name', 'Nome',['class' => 'control-label']) }}
    {{ Form::text('name',null,['class' => 'form-control']) }}
{{--    <label for="name">Name</label>--}}
{{--    <input class="form-control" id="name" name="name" value="{{ old('name', $client->name) }}">--}}

@endcomponent
@component('form::form._form_group',['field' => 'document_number'])
    {{ Form::label('document_number', 'Documento',['class' => 'control-label']) }}
    {{ Form::text('document_number',null,['class' => 'form-control']) }}
{{--    <label for="document_number">Document</label>--}}
{{--    <input class="form-control" id="document_number" name="document_number" value="{{ old('document_number', $client->document_number) }}">--}}
@endcomponent
@component('form::form._form_group',['field' => 'email'])
    {{ Form::label('email', 'E-mail',['class' => 'control-label']) }}
    {{ Form::text('email', null,['class' => 'form-control']) }}
{{--    <label for="email">E-mail</label>--}}
{{--    <input class="form-control" id="email" name="email" value="{{ old('email', $client->email) }}">--}}
@endcomponent
@component('form::form._form_group',['field' => 'phone'])
    {{ Form::label('phone', 'Telefone',['class' => 'control-label']) }}
    {{ Form::text('phone',null,['class' => 'form-control']) }}
{{--    <label for="phone">Phone</label>--}}
{{--    <input class="form-control" id="phone" name="phone" value="{{ old( 'phone', $client->phone) }}">--}}
@endcomponent
@if($clientType == \Modules\Form\Entities\Client::TYPE_INDIVIDUAL)
    @php
        $maritalStatus = $client->marital_status;
    @endphp
@component('form::form._form_group',['field' => 'marital_status'])
        {{ Form::label('marital_status', 'Estado Cívil',['class' => 'control-label']) }}
{{--        <label for="marital_status">Marital Status</label>--}}
        {{  Form::select('marital_status', [
        '' => 'Selecione o estado cívil',
         1 => 'Solteiro',
         2 => 'Casado',
         3 => 'Divorciado',
        ], null, ['class' => 'form-control'])
        }}
{{--        <select class="form-control" name="marital_status" id="marital_status" value="{{ $maritalStatus }}">--}}
{{--            <option value="">Select Marital Status</option>--}}
{{--            <option value="1"{{ old('marital_status', $maritalStatus) == 1 ? 'selected="selected"' : '' }}>Single</option>--}}
{{--            <option value="2"{{ old('marital_status', $maritalStatus) == 2 ? 'selected="selected"' : '' }}>Married</option>--}}
{{--            <option value="3"{{ old('marital_status', $maritalStatus) == 3 ? 'selected="selected"' : '' }}>Divorced</option>--}}

{{--        </select>--}}
@endcomponent

@component('form::form._form_group',['field' => 'date_birth'])
        {{ Form::label('date_birth', 'Data Nasc',['class' => 'control-label']) }}
        {{ Form::date('date_birth', null,['class' => 'form-control']) }}
{{--        <label for="date_birth">Date Birth</label>--}}
{{--        <input class="form-control" id="date_birth" name="date_birth" type="date" value="{{ old('date_birth', $client->date_birth) }}">--}}
@endcomponent

    @php
        $sex = $client->sex
    @endphp
    <div class="radio {{$errors->has('sex')?' has-danger':''}}">
        <label>
            {{ Form::radio('sex', 'm') }} Masculino
{{--            <input type="radio" name="sex" value="m" {{ old('sex', $sex) == 'm'?'checked="checked"' : ''}}> Male--}}
        </label>
    </div>

    <div class="radio {{$errors->has('sex'?' has-danger':'')}}">
        <label>
            {{ Form::radio('sex', 'f') }} Feminino
{{--            <input type="radio" name="sex" value="f" {{ old('sex', $sex) == 'f'?'checked="checked"' : ''}}> Female--}}
        </label>
    </div>
    <div class="{{$errors->has('sex'?' has-danger':'')}}">
        @include('form::form._help_block', ['field' => 'sex'])

    </div>
    @component('form::form._form_group',['field' => 'physical_disability'])
        {{ Form::label('physical_disability', 'Deficiência Física',['class' => 'control-label']) }}
        {{ Form::text('physical_disability', null,['class' => 'form-control']) }}
{{--        <label for="physical_disability">Physical Disability</label>--}}
{{--        <input class="form-control" id="physical_disability" name="physical_disability" value="{{ old('physical_disability', $client->physical_disability) }}">--}}
    @endcomponent
    @else
    @component('form::form._form_group',['field' => 'company_name'])
            {{ Form::label('company_name', 'Nome Fantasia',['class' => 'control-label']) }}
            {{ Form::text('company_name', null,['class' => 'form-control']) }}
{{--            <label for="company_name">Company Name</label>--}}
{{--            <input class="form-control" id="company_name" name="company_name" value="{{ old('company_name', $client->company_name) }}">--}}
    @endcomponent
    @endif

<div class="checkbox">
    <label>
        {{ Form::checkbox('defaulter') }} Inadimplente?
        {{--        <input id="defaulter" name="defaulter" type="checkbox" {{ old('defaulter', $client->defaulter) ? 'checked="checked"' : '' }}> Defaulter?--}}
    </label>
</div>
