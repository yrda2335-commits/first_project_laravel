<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;

$workshops = [
    [
        'id' => 1,
        'title' => 'Mastering Tailwind CSS & Modern Blade Components',
        'category' => 'Frontend',
        'instructor' => 'Ali Abdelaziz',
        'date' => 'Aug 20, 2026',
        'level' => 'Intermediate',
        'description' => 'Learn how to build reusable Blade component libraries and modern Apple-style UI.'
    ],

    [
        'id' => 2,
        'title' => 'Laravel 11 Fundamentals & Architecture',
        'category' => 'Backend',
        'instructor' => 'Eng. Ahmed Taha',
        'date' => 'Aug 25, 2026',
        'level' => 'Beginner',
        'description' => 'Deep dive into Laravel request lifecycle, routing, layouts, and Blade slots.'
    ],

    [
        'id' => 3,
        'title' => 'Building AI Powered Web Applications',
        'category' => 'AI',
        'instructor' => 'Mohamed Hassan',
        'date' => 'Sep 01, 2026',
        'level' => 'Intermediate',
        'description' => 'Learn how to integrate AI features into modern web applications.'
    ],
];
Route::get('/', function () use ($workshops) {
    return view('home', [
        'workshops' => $workshops
    ]);
})->name('home');

Route::get('/workshops', function () use ($workshops) {
    return view('workshops', [
        'workshops' => $workshops
    ]);
})->name('workshops');