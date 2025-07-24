@component(layout('dashboard') . 'components.sidebarItem')
    @slot('can', ['permission' => 'read_slieds'])
    @slot('url', route('dashboard.slieds.index'))
    @slot('name', trans('slieds::slieds.plural'))
    @slot('isActive', request()->routeIs('*slieds*'))
    @slot('icon', 'fas fa-book')
    @slot('tree', [
        [
        'name' => trans('slieds::slieds.actions.list'),
        'url' => route('dashboard.slieds.index'),
        'can' => ['permission' => 'read_slieds'],
        'isActive' => request()->routeIs('*slieds.index'),
        'module' => 'Slieds',
        ],
        [
        'name' => trans('slieds::slieds.actions.create'),
        'url' => route('dashboard.slieds.create'),
        'can' => ['permission' => 'create_slieds'],
        'isActive' => request()->routeIs('*slieds.create'),
        'module' => 'Slieds',
        ],
        ])
    @endcomponent
