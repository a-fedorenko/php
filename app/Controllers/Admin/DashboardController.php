<?php

class DashboardController 
{
    public function index()
    {
        render('admin/index', ['admin'=>"Dashboard"], 'admin');
    }
}