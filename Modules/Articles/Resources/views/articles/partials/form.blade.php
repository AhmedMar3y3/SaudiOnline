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
<meta name="csrf-token" content="{{ csrf_token() }}">
<textarea rows="3" data-parsley-minlength="3" name="content" cols="50" id="content" class="form-control textarea summernote" style="resize: vertical;"></textarea>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">

<script>
$(document).ready(function() {
    var editor = $('.textarea').summernote({
        height: 300,
        toolbar: [
            ['style', ['bold', 'italic', 'underline']],
            ['insert', ['picture', 'link', 'video']],
            ['view', ['fullscreen']]
        ],
        callbacks: {
            onImageUpload: function(files) {
                uploadImages(files, editor);
            }
        }
    });

    function uploadImages(files, editor) {
        console.log('Uploading', files.length, 'files');
        let data = new FormData();
        for (let i = 0; i < files.length; i++) {
            data.append('files[]', files[i]);
        }

        $.ajax({
            url: '/dashboard/upload-image',
            method: 'POST',
            data: data,
            processData: false,
            contentType: false,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(response) {
                console.log('Server response:', response);
                response.forEach(function(url) {
                    console.log('Inserting image URL:', url);
                    editor.summernote('insertImage', url);
                });
            },
            error: function(xhr, status, error) {
                console.error('Image upload failed:', xhr.status, xhr.responseText);
                alert('Failed to upload image. Check the console for details.');
            }
        });
    }
});
</script>
@if (\Module::collections()->has('Categories'))
    <select2 name="category_id" label="@lang('categories::categories.singular')" remote-url="{{ route('categories.select') }}"
        @isset($admin)
             value="{{ $admin->categories()->orderBy('id', 'desc')->first()->id ?? old('category_id') }}"
             @endisset
        :required="true"></select2>
@endif

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
