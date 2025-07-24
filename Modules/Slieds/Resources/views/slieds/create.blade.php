<x-layout :title="trans('slieds::slieds.actions.create')" :breadcrumbs="['dashboard.slieds.create']">

    {{ BsForm::resource('slieds::slieds')->post(route('dashboard.slieds.store'), ['files' => true, 'data-parsley-validate']) }}
    @component(layout('dashboard') . 'components.box')
        @slot('title', trans('slieds::slieds.actions.create'))

        @include('slieds::slieds.partials.form')

        @slot('footer')
            {{ BsForm::submit()->label(trans('slieds::slieds.actions.save')) }}
        @endslot
    @endcomponent
    {{ BsForm::close() }}

</x-layout>
