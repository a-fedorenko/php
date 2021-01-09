<?php

class AboutController 
{
    public function index()
    {
        render('about/index', ['title'=>"About MySport Site"]);
    }
}

