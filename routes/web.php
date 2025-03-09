<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/service', function () {
    return view('service');
});
Route::get('/event', function () {
    return view('event', ['title' => 'event', 'posts' => [
        [
            'id' => '1',
            'title' => 'Noteworthy technology acquisitions 2021',
            'body' => 'Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.'
        ],
        [
            'id' => '2',
            'title' => 'Noteworthy technology acquisitions 2021',
            'body' => 'Join us for a transformative event dedicated to raising awareness about mental health. This gathering aims to foster understanding, reduce stigma, and promote well-being through engaging discussions, expert talks, and interactive activities. Attendees will have the opportunity to learn about coping strategies, mindfulness practices, and the importance of mental health in daily life. We encourage open conversations about mental wellness, providing a safe space for individuals to share their experiences and find support. Together, we can create a healthier, more empathetic community. Don’t miss out on this important opportunity to make a difference!'
        ],
        [
            'id' => '3',
            'title' => 'Noteworthy technology acquisitions 2021',
            'body' => 'Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.'
        ],
        [
            'id' => '4',
            'title' => 'Noteworthy technology acquisitions 2021',
            'body' => 'Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.'
        ],
        [
            'id' => '5',
            'title' => 'Noteworthy technology acquisitions 2021',
            'body' => 'Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.'
        ],
    ]]);
});
Route::get('/event/{id}', function ($id) {
    $posts = [
        [
            'id' => '1',
            'title' => 'Noteworthy technology acquisitions 2021',
            'body' => 'Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.'
        ],
        [
            'id' => '2',
            'title' => 'Noteworthy technology acquisitions 2021',
            'body' => 'Join us for a transformative event dedicated to raising awareness about mental health. This gathering aims to foster understanding, reduce stigma, and promote well-being through engaging discussions, expert talks, and interactive activities. Attendees will have the opportunity to learn about coping strategies, mindfulness practices, and the importance of mental health in daily life. We encourage open conversations about mental wellness, providing a safe space for individuals to share their experiences and find support. Together, we can create a healthier, more empathetic community. Don’t miss out on this important opportunity to make a difference!'
        ],
        [
            'id' => '3',
            'title' => 'Noteworthy technology acquisitions 2021',
            'body' => 'Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.'
        ],
        [
            'id' => '4',
            'title' => 'Noteworthy technology acquisitions 2021',
            'body' => 'Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.'
        ],
        [
            'id' => '5',
            'title' => 'Noteworthy technology acquisitions 2021',
            'body' => 'Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.'
        ],
    ];
    $post = Arr::first($posts, function ($post) use ($id) {
        return $post['id'] == $id;
    });
    return view('eventDetail', ['post' => $post]);
});
Route::get('/content', function () {
    return view('content');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/eventDetail', function () {
    return view('eventDetail');
});
