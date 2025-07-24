<?php

Breadcrumbs::for('dashboard.teams.index', function ($breadcrumb) {
    $breadcrumb->parent('dashboard.home');
    $breadcrumb->push(trans('teams::teams.plural'), route('dashboard.teams.index'));
});

Breadcrumbs::for('dashboard.teams.create', function ($breadcrumb) {
    $breadcrumb->parent('dashboard.teams.index');
    $breadcrumb->push(trans('teams::teams.actions.create'), route('dashboard.teams.create'));
});

Breadcrumbs::for('dashboard.teams.show', function ($breadcrumb, $team) {
    $breadcrumb->parent('dashboard.teams.index');
    $breadcrumb->push(Illuminate\Support\Str::limit($team->name, $limit = 50, $end = '...'), route('dashboard.teams.show', $team));
});

Breadcrumbs::for('dashboard.teams.edit', function ($breadcrumb, $team) {
    $breadcrumb->parent('dashboard.teams.show', $team);
    $breadcrumb->push(trans('teams::teams.actions.edit'), route('dashboard.teams.edit', $team));
});
