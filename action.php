<?php
require_once 'vendor/autoload.php';

use App\classes\Home;

if(isset($_GET['pages']))
{
    if($_GET['pages'] == 'home')
    {
        include 'pages/home.php';
    }
    elseif ($_GET['pages']== 'password-reset')
    {
        include 'pages/password-reset.php';
    }
    elseif ($_GET['pages']=='blog')
    {
        $blog = new Blog();
        $blogs= $blog->getAllBlog();
        include 'pages/blog.php';
    }
}