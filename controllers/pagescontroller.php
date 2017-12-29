<?php 

class PagesController
{
    public function home ()
    {
       return view('index');
    }
    
    public function about ()
    {
        $company = 'Laracasts';
        return view('about', ['company' => $company]);
    }
    
    public function contact ()
    {
        return view('contact');
    }
    
    
}