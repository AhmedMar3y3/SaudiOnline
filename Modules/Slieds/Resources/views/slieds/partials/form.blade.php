@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

{{ BsForm::text('link')->placeholder(trans('slieds::slieds.attributes.link')) }}

<input type="file" name="image" id="">
