<?php

Breadcrumbs::for('dashboard.videos.index', function ($breadcrumb) {
    $breadcrumb->parent('dashboard.home');
    $breadcrumb->push(trans('videos::videos.plural'), route('dashboard.videos.index'));
});

Breadcrumbs::for('dashboard.videos.create', function ($breadcrumb) {
    $breadcrumb->parent('dashboard.videos.index');
    $breadcrumb->push(trans('videos::videos.actions.create'), route('dashboard.videos.create'));
});

Breadcrumbs::for('dashboard.videos.show', function ($breadcrumb, $video) {
    $breadcrumb->parent('dashboard.videos.index');
    $breadcrumb->push(Illuminate\Support\Str::limit($video->name, $limit = 50, $end = '...'), route('dashboard.videos.show', $video));
});

Breadcrumbs::for('dashboard.videos.edit', function ($breadcrumb, $video) {
    $breadcrumb->parent('dashboard.videos.show', $video);
    $breadcrumb->push(trans('videos::videos.actions.edit'), route('dashboard.videos.edit', $video));
});
