<?php namespace App\Http\Controllers;

use App\Blog;

class BlogController extends MainController{

    public function index(Blog $blog)
    {
        $this->data['records'] = $blog->getActive();

        return view('blog.index', $this->data);
    }

    public function cart($slug, Blog $blog)
    {
        $this->data['record'] = $blog->getBySlug($slug);

       return view('blog.cart', $this->data);
    }
}