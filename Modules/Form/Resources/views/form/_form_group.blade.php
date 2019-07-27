<div class="form-group {{ $errors->has($field)?' has-danger': '' }}">

{{ $slot }}
    @include('form::form._help_block', ['field' => $field])

</div>
