@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
{{ BsForm::text('name')->attribute(['data-parsley-maxlength' => '191', 'data-parsley-minlength' => '3']) }}
{{ BsForm::text('sub_name')->attribute('class', 'form-control')->attribute(['data-parsley-minlength' => '3']) }}
{{ BsForm::text('link')->attribute('class', 'form-control')->attribute(['data-parsley-minlength' => '3']) }}
