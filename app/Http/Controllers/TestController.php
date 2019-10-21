<?php

namespace App\Http\Controllers;

use \Goutte;

class TestController extends Controller
{

    public function index()
    {
        return 'this';
    }

    public function test()
    {
        $crawler = Goutte::request('GET', 'http://nicesnippets.com');

        $crawler->filter('.blog-post-item h2 a')->each(function ($node) {

        dump($node->text());

        });

    }

}