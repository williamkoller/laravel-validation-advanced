<div class="form-group {{ $errors->has($field)?' has-error': '' }}">
    {{ $slot }}
    @include('form::form.help_block', ['field' => $field])
</div>
