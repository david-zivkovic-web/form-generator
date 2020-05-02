@php
    $form = $entity->entityForm();
    $formFieldsEmptyStatus = ! ($form->formFields->count() > 0);
    $fields = $form->formFields->count() > 0 ? $form->formFields : $form->exampleFields;
@endphp
<form method="{{ $form->method }}" action="{{ $form->action }}">
    @if($form->method == 'POST')
    @csrf()
    @endif
    @if($formFieldsEmptyStatus)
        @include('formgen.info.form_info', ['info' => $form->information])
    @endif
    @foreach($fields as $field)
        @include('formgen.fields.'.$field->view, ['field' => $field, 'entity' => $entity])
    @endforeach
    <button class="btn btn-dark" type="submit" @if($formFieldsEmptyStatus) disabled @endif>
        submit
    </button>
</form>
