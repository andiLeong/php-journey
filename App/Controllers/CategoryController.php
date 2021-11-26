<?php

namespace App\Controllers;

use Core\App;

class CategoryController
{

    public function index()
    {
        $categories = App::get('database')->all('categories');
        return view('category.index', [
            'categories' => $categories,
        ]);
    }

    public function create()
    {
        return view('category.create');
    }

    public function store()
    {
        App::get('database')->create('categories',[
            'updated_at' => now(),
            'created_at' => now(),
            'name' => $_POST['name'],
            'slug' => ucfirst($_POST['name']),
        ]);

        header('location: /category');
    }
}