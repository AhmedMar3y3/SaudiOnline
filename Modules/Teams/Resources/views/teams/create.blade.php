<x-layout :title="trans('teams::teams.actions.create')" :breadcrumbs="['dashboard.teams.create']">

    {{ BsForm::resource('teams::teams')->post(route('dashboard.teams.store'), ['files' => true, 'data-parsley-validate']) }}
    @component(layout('dashboard') . 'components.box')
        @slot('title', trans('teams::teams.actions.create'))

        @include('teams::teams.partials.form')

        @slot('footer')
            {{ BsForm::submit()->label(trans('teams::teams.actions.save')) }}
        @endslot
    @endcomponent
    {{ BsForm::close() }}

</x-layout>
