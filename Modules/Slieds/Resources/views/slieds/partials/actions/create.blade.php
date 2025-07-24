@if (auth()->user()->hasPermission('create_articles'))
    <a href="{{ route('dashboard.slieds.create') }}" class="btn btn-primary font-weight-bolder">
        <i class="fas fa fa-fw fa-plus"></i>
        @lang('slieds::slieds.actions.create')
    </a>
@else
    <button type="button" disabled class="btn btn-primary font-weight-bolder">
        <i class="fas fa fa-fw fa-plus"></i>
        @lang('slieds::slieds.actions.create')
    </button>
@endif
