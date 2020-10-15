<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bookstore</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="<?php assets('css/animate.css'); ?>">

    <link rel="stylesheet" href="<?php assets('css/owl.carousel.min.css'); ?>">
    <link rel="stylesheet" href="<?php assets('css/owl.theme.default.min.css'); ?>">
    <link rel="stylesheet" href="<?php assets('css/magnific-popup.css'); ?>">

    <link rel="stylesheet" href="<?php assets('css/flaticon.css'); ?>">
    <link rel="stylesheet" href="<?php assets('css/style.css'); ?>">
</head>
<body>

<div class="container-fluid px-md-5  pt-4 pt-md-5">
    <div class="row justify-content-between">
        <div class="col-md-8 order-md-last">
            <div class="row">
                <div class="col-md-6 text-center">
                    <a class="navbar-brand" href="index.html">Publishing <span>Company</span> <small>Book Publishing Company</small></a>
                </div>
                <div class="col-md-6 d-md-flex justify-content-end mb-md-0 mb-3">
                    <form action="#" class="searchform order-lg-last">
                        <div class="form-group d-flex">
                            <input type="text" class="form-control pl-3" placeholder="Search">
                            <button type="submit" placeholder="" class="form-control search"><span class="fa fa-search"></span></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-4 d-flex">
            <div class="social-media">
                <p class="mb-0 d-flex">
                    <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
                    <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
                    <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
                </p>
            </div>
        </div>
    </div>
</div>
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container-fluid">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="fa fa-bars"></span> Menu
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav m-auto">
                <li class="nav-item active"><a href="<?php url(''); ?>" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="<?php url('books'); ?>" class="nav-link">Books</a></li>
                <li class="nav-item"><a href="authors.html" class="nav-link">Author</a></li>
                <li class="nav-item"><a href="<?php url('contact-us'); ?>" class="nav-link">Contact</a></li>
                <?php if(auth()):?>
                <li class="nav-item"><a href="<?php url('logout'); ?>" class="nav-link">Logout</a></li>
                <?php else: ?>
                <li class="nav-item"><a href="<?php url('register'); ?>" class="nav-link">Register</a></li>
                <li class="nav-item"><a href="<?php url('login'); ?>" class="nav-link">Login</a></li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>
<!-- END nav -->

