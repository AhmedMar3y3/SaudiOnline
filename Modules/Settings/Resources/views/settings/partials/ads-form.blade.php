@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

{{ BsForm::text('ads_link')->value(Settings::get('ads_link')) }}
<div class="row">
  <div class="col-md-6">
      {{ BsForm::image('ads_image')->collection('ads_image')->files(optional(Settings::instance('ads_image'))->getMediaResource('ads_image'))->notes(trans('settings::settings.messages.images_note')) }}
  </div>
</div>
