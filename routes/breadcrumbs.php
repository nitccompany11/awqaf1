<?php

    use Diglactic\Breadcrumbs\Breadcrumbs;

    use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

    // Home
    Breadcrumbs::for('dashboard', function (BreadcrumbTrail $trail) {
        $trail->push(trans('admin.dashboard'), url('admin'));
    });

    Breadcrumbs::for('mainbred', function (BreadcrumbTrail $trail, $title, $url) {
        $trail->parent('dashboard');
        $trail->push($title, $url);
    });

    Breadcrumbs::for('mainbreda', function (BreadcrumbTrail $trail, $title, $url, $title2, $url2) {
        $trail->parent('mainbred', $title2, $url2);
        $trail->push($title, $url);
    });