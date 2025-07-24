@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

{{ BsForm::text('reshade_link')->value(Settings::get('reshade_link')) }}
<div class="row">
  <div class="col-md-6">
      {{ BsForm::image('reshade_image')->collection('reshade_image')->files(optional(Settings::instance('reshade_image'))->getMediaResource('reshade_image'))->notes(trans('settings::settings.messages.images_note')) }}
  </div>
</div>
