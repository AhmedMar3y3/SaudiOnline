<?php

Breadcrumbs::for('dashboard.slieds.index', function ($breadcrumb) {
    $breadcrumb->parent('dashboard.home');
    $breadcrumb->push(trans('slieds::slieds.plural'), route('dashboard.slieds.index'));
});

Breadcrumbs::for('dashboard.slieds.create', function ($breadcrumb) {
    $breadcrumb->parent('dashboard.slieds.index');
    $breadcrumb->push(trans('slieds::slieds.actions.create'), route('dashboard.slieds.create'));
});

Breadcrumbs::for('dashboard.slieds.show', function ($breadcrumb, $video) {
    $breadcrumb->parent('dashboard.slieds.index');
    $breadcrumb->push(Illuminate\Support\Str::limit($video->id, $limit = 50, $end = '...'), route('dashboard.slieds.show', $video));
});

Breadcrumbs::for('dashboard.slieds.edit', function ($breadcrumb, $video) {
    $breadcrumb->parent('dashboard.slieds.show', $video);
    $breadcrumb->push(trans('slieds::slieds.actions.edit'), route('dashboard.slieds.edit', $video));
});
