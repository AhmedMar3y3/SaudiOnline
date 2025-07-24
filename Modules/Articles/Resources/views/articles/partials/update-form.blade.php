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
{{ BsForm::textarea('content')->rows(3)->attribute('class', 'form-control textarea')->attribute(['data-parsley-minlength' => '3']) }}

<div class="form-group">

    <label for="image">{{ trans('articles::articles.attributes.image') }}</label>
    <input type="file" name="image" id="image" class="form-control">
    <div class="form-text">
        {{ trans('articles::articles.messages.images_note') }}
    </div>
</div>

{{-- @isset($article)
    {{ BsForm::image('image')->collection('default')->files($article->getMediaResource('default'))->notes(trans('articles::articles.messages.images_note')) }}
@else
    {{ BsForm::image('image')->collection('default')->notes(trans('articles::articles.messages.images_note')) }}
@endisset --}}
