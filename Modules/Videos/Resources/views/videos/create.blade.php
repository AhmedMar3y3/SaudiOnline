<x-layout :title="trans('videos::videos.actions.create')" :breadcrumbs="['dashboard.videos.create']">

    {{ BsForm::resource('videos::videos')->post(route('dashboard.videos.store'), ['files' => true, 'data-parsley-validate']) }}
    @component(layout('dashboard') . 'components.box')
        @slot('title', trans('videos::videos.actions.create'))

        @include('videos::videos.partials.form')

        @slot('footer')
            {{ BsForm::submit()->label(trans('videos::videos.actions.save')) }}
        @endslot
    @endcomponent
    {{ BsForm::close() }}

</x-layout>
