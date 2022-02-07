<?php
require_once 'vendor/autoload.php';
use App\classes\Home;
use App\classes\PasswordGenerator;
use App\classes\Blog;
use App\classes\Product;
use App\classes\Pattern;
use App\classes\FileUpolad;


if (isset($_GET['pages']))
{
    if ($_GET['pages']=='home')
    {
        include 'pages/home.php';
    }
    elseif ($_GET['pages']== 'password-reset')
    {
        include 'pages/password-reset.php';
    }
    elseif ($_GET['pages']== 'blog')
    {
        $blog  = new Blog();
        $blogs = $blog->getAllBlog();
        include 'pages/blog.php';
    }
    elseif ($_GET['pages']== 'product')
    {
        $product  = new Product();
        $products = $product->getAllProduct();
        include 'pages/product.php';
    }
    elseif ($_GET['pages']== 'detail')
    {
       $product  = new Product();
       $result = $product->getProductById($_GET['id']);
       include 'pages/detail.php';
    }

    elseif ($_GET['pages']== 'pattern')
    {
        include 'pages/pattern.php';
    }

    elseif ($_GET['pages']== 'file-upload')
    {
        include 'pages/fileUpload.php';
    }

} elseif (isset($_POST['pattern_btn']))
{
    $pattern =new Pattern($_POST);
    $result  =$pattern->index();
    include 'pages/pattern.php';
}
elseif (isset($_POST['img_btn']))
{
    $fileUpload =new FileUpload($_POST);
    $fileUpload->index();

}


elseif (isset($_POST['btn']))
{
    $passwordGenerator = new PasswordGenerator($_POST);
    $result            = $passwordGenerator->newPassword();
    include 'pages/password-reset.php';
}
else{
    $home =new Home();
    $home->index();
}

