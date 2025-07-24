@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


{{ BsForm::text('name')->value(Settings::get('name'))->attribute(['data-parsley-maxlength' => '191', 'data-parsley-minlength' => '3']) }}
{{ BsForm::textarea('description')->rows(3)->attribute('class', 'form-control')->value(Settings::get('description'))->attribute(['data-parsley-minlength' => '3']) }}
{{ BsForm::textarea('meta_description')->rows(3)->attribute('class', 'form-control')->value(Settings::get('meta_description'))->attribute(['data-parsley-minlength' => '3']) }}
{{ BsForm::text('keywords')->value(Settings::get('keywords'))->note(trans('settings::settings.notes.keywords')) }}


<div class="row">
    <div class="col-md-6">
        {{ BsForm::image('logo')->collection('logo')->files(optional(Settings::instance('logo'))->getMediaResource('logo'))->notes(trans('settings::settings.messages.images_note')) }}
    </div>
    <div class="col-md-6">
        {{ BsForm::image('favicon')->collection('favicon')->files(optional(Settings::instance('favicon'))->getMediaResource('favicon'))->notes(trans('settings::settings.messages.images_note')) }}
    </div>
</div>

{{--    <select2 name="privacy_policy" --}}
{{--             label="@lang('settings::settings.attributes.privacy_policy')" --}}
{{--             remote-url="{{ route('pages.select') }}" --}}
{{--             value="{{ (new Modules\Settings\Entities\Setting)->get('privacy_policy', old('privacy_policy',null)) }}" --}}
{{--             :required="false" --}}
{{--    ></select2> --}}

{{--    <select2 name="terms" --}}
{{--             label="@lang('settings::settings.attributes.terms')" --}}
{{--             remote-url="{{ route('pages.select') }}" --}}
{{--             value="{{ (new Modules\Settings\Entities\Setting)->get('terms', old('terms',null)) }}" --}}
{{--             :required="false" --}}
{{--    ></select2> --}}
