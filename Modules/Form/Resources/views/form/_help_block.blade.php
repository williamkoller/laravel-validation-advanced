@if($errors->has($field))
    <span class="help-block">{{ $erroors->first($field) }}</span>
@endif
