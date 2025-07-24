<x-layout :title="trans('teams::teams.plural')" :breadcrumbs="['dashboard.teams.index']">

    {{-- @include('teams::teams.partials.filter') --}}

    @component(layout('dashboard') . 'components.table-box')
        @slot('title', trans('teams::teams.actions.list'))
        @slot('tools')
            @include('teams::teams.partials.actions.create')
        @endslot

        <thead>
            <tr>
                <th>@lang('teams::teams.attributes.name')</th>
                <th>@lang('teams::teams.attributes.title')</th>
                <th style="width: 160px">...</th>
            </tr>
        </thead>
        <tbody>
            @forelse($teams as $team)
                <tr>
                    <td>
                        {{ $team->name }}
                    </td>
                    <td>
                        {{ $team->title }}
                    </td>

                    <td style="width: 160px">
                        @include('teams::teams.partials.actions.show')
                        @include('teams::teams.partials.actions.edit')
                        @include('teams::teams.partials.actions.delete')
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="100" class="text-center">@lang('teams::teams.empty')</td>
                </tr>
            @endforelse
        </tbody>
    @endcomponent

</x-layout>
