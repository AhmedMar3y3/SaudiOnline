@component(layout('dashboard') . 'components.sidebarItem')
    @slot('can', ['permission' => 'read_teams'])
    @slot('url', route('dashboard.teams.index'))
    @slot('name', trans('teams::teams.plural'))
    @slot('isActive', request()->routeIs('*teams*'))
    @slot('icon', 'fas fa-users')
    @slot('tree', [
        [
        'name' => trans('teams::teams.actions.list'),
        'url' => route('dashboard.teams.index'),
        'can' => ['permission' => 'read_teams'],
        'isActive' => request()->routeIs('*teams.index'),
        'module' => 'Teams',
        ],
        [
        'name' => trans('teams::teams.actions.create'),
        'url' => route('dashboard.teams.create'),
        'can' => ['permission' => 'create_teams'],
        'isActive' => request()->routeIs('*teams.create'),
        'module' => 'Teams',
        ],
        ])
    @endcomponent
