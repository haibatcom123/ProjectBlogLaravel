<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view("index");
    }

    public function create()
    {
        
    }

   
    public function store(Request $request)
    {
        
    }

    public function show(BlogPost $blogPost)
    {
        
    }

    
    public function edit(BlogPost $blogPost)
    {
        
    }

    
    public function update(Request $request, BlogPost $blogPost)
    {
       
    }

    
    public function destroy(BlogPost $blogPost)
    {
        
    }
}
