@if (auth()->user()->hasPermission('show_articles'))
    <a href="{{ route('dashboard.videos.show', $video) }}" class="btn btn-outline-warning btn-hover-warning btn-sm">
        <i class="fas fa fa-fw fa-eye"></i>
    </a>
@else
    <button type="button" disabled class="btn btn-outline-warning btn-hover-warning btn-sm">
        <i class="fas fa fa-fw fa-eye"></i>
    </button>
@endcan
