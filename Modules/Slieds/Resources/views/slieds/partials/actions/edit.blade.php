@if (auth()->user()->hasPermission('update_articles'))
    <a href="{{ route('dashboard.slieds.edit', $slied) }}" class="btn btn-outline-primary btn-hover-primary btn-sm">
        <i class="fas fa-edit fa fa-fw"></i>
    </a>
@else
    <button type="button" disabled class="btn btn-outline-primary btn-hover-primary btn-sm">
        <i class="fas fa-edit fa fa-fw"></i>
    </button>
@endcan
