<?php

// Home
Breadcrumbs::for('home', function ($trail) {
    $trail->push('ホーム', route('home'));
});

// Home > About
Breadcrumbs::for('about', function ($trail) {
    $trail->parent('home');
    $trail->push('このサイトについて', route('about'));
});

// Home > post
Breadcrumbs::for('post', function ($trail,$title) {
    $trail->parent('home');
    $trail->push($title, route('post'));
});