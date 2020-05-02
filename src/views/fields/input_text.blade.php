<div class="form-group row">
    <div class="col-12">
        @if($field->information)
            @include('formgen.info.field_info', ['fieldInfo' => $field->information])
        @endif
    </div>
    <div class="col-6">
        <label>
            {{ ucfirst($field->name) }}
        </label>
    </div>
    <div class="col-6">
        <input class="form-control {{ $errors->has($field->name) ? 'is-invalid' : '' }}" type="{{ $field->elementType }}" name="{{ $field->name }}" 
               value="{{ !$field->example ? old($field->name, $entity->{$field->name}) : ''}}"
        >
        <input hidden="" class="{{ $errors->has($field->name) ? 'is-invalid' : '' }}">
        <div class="invalid-feedback">@if($errors->has($field->name)) {{ $errors->first($field->name) }} @endif</div>
    </div>
</div>
