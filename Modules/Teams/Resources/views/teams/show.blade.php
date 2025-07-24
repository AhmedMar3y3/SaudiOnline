<x-layout :title="Illuminate\Support\Str::limit($team->name, $limit = 50, $end = '...')" :breadcrumbs="['dashboard.teams.show', $team]">

    <div class="row">
        <div class="col-md-6">
            @component(layout('dashboard') . 'components.box')
                @slot('bodyClass', 'p-0')

                <table class="table table-middle">
                    <tbody>
                        <tr>
                            <th width="200">@lang('teams::teams.attributes.name')</th>
                            <td>{{ $team->name }}</td>
                        </tr>
                        <tr>
                            <th width="200">@lang('teams::teams.attributes.title')</th>
                            <td>{{ $team->title }}</td>
                        </tr>

                        <tr>
                            <th width="200">@lang('teams::teams.attributes.image')</th>
                            <td>
                                @if ($team->getFirstMedia('default'))
                                    <file-preview :media="{{ $team->getMediaResource('default') }}"></file-preview>
                                @endif
                            </td>
                        </tr>
                    </tbody>
                </table>

                @slot('footer')
                    @include('teams::teams.partials.actions.edit')
                    @include('teams::teams.partials.actions.delete')
                @endslot
            @endcomponent

        </div>
    </div>

</x-layout>>
