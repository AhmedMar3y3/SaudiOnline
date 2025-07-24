<x-layout :title="Illuminate\Support\Str::limit($video->name, $limit = 50, $end = '...')" :breadcrumbs="['dashboard.videos.edit', $video]">

    {{ BsForm::resource('videos::videos')->putModel($video, route('dashboard.videos.update', $video), ['files' => true, 'data-parsley-validate']) }}
    @component(layout('dashboard') . 'components.box')
        @slot('title', trans('videos::videos.actions.edit'))

        @include('videos::videos.partials.form')

        @slot('footer')
            {{ BsForm::submit()->label(trans('videos::videos.actions.save')) }}
        @endslot
    @endcomponent
    {{ BsForm::close() }}

</x-layout>
