<x-layout :title="Illuminate\Support\Str::limit($team->name, $limit = 50, $end = '...')" :breadcrumbs="['dashboard.teams.edit', $team]">

    {{ BsForm::resource('teams::teams')->putModel($team, route('dashboard.teams.update', $team), ['files' => true, 'data-parsley-validate']) }}
    @component(layout('dashboard') . 'components.box')
        @slot('title', trans('teams::teams.actions.edit'))

        @include('teams::teams.partials.form')

        @slot('footer')
            {{ BsForm::submit()->label(trans('teams::teams.actions.save')) }}
        @endslot
    @endcomponent
    {{ BsForm::close() }}

</x-layout>
