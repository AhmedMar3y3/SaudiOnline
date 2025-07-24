@if (auth()->user()->hasPermission('create_teams'))
    <a href="{{ route('dashboard.teams.create') }}" class="btn btn-primary font-weight-bolder">
        <i class="fas fa fa-fw fa-plus"></i>
        @lang('teams::teams.actions.create')
    </a>
@else
    <button type="button" disabled class="btn btn-primary font-weight-bolder">
        <i class="fas fa fa-fw fa-plus"></i>
        @lang('teams::teams.actions.create')
    </button>
@endif
