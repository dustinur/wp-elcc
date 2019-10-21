<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

<?php wp_head(); ?>

    <title>ELCC</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="<?php echo site_url(''); ?>"
              >Home <span class="sr-only">(current)</span></a
            >
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('/blog'); ?>">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('products'); ?>">Products</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('about'); ?>">About</a>
          </li>
        </ul>
      </div>
    </nav>
    <header>
        <div class="bg-header jumbotron jumbotron-fluid" style="background: #676f7a url(<?php echo get_template_directory_uri(); ?>/img/bg-1.jpg) 45%/cover no-repeat;">
        <div class="container">
            <h1 class="display-4">Fluid jumbotron</h1>
            <p class="lead">
            This is a modified jumbotron that occupies the entire horizontal space
            of its parent.
            </p>
        </div>
        </div>
    </header>