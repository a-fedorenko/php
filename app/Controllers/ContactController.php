<?php
$address = config('configs');
$title ='Contact Us'; 
$subtitle ='Our Address';

render('contact/index', compact('title', 'subtitle', 'address'));
