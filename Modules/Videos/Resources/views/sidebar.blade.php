@component(layout('dashboard') . 'components.sidebarItem')
    @slot('can', ['permission' => 'read_videos'])
    @slot('url', route('dashboard.videos.index'))
    @slot('name', trans('videos::videos.plural'))
    @slot('isActive', request()->routeIs('*videos*'))
    @slot('icon', 'fas fa-video')
    @slot('tree', [
        [
        'name' => trans('videos::videos.actions.list'),
        'url' => route('dashboard.videos.index'),
        'can' => ['permission' => 'read_videos'],
        'isActive' => request()->routeIs('*videos.index'),
        'module' => 'Videos',
        ],
        [
        'name' => trans('videos::videos.actions.create'),
        'url' => route('dashboard.videos.create'),
        'can' => ['permission' => 'create_videos'],
        'isActive' => request()->routeIs('*videos.create'),
        'module' => 'Videos',
        ],
        ])
    @endcomponent
