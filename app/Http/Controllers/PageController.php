<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return '<h1>Главная страница</h1>';
    }

    public function about()
    {
        return 'Страница о нашем проекте';
    }

    public function show(string $id)
    {
        return 'Страница пользователя №' . $id;
    }

    public function hello(string $name = 'гость')
    {
        return 'Привет, ' . $name . '!';
    }

    public function comment(string $post, string $comment)
    {
        return "Статья №{$post}, комментарий №{$comment}";
    }

    public function postShow(string $id)
    {
        return 'Просмотр статьи №' . $id;
    }
}
