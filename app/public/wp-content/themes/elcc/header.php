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
      <a class="navbar-brand" href="#">ELCC</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url(''); ?>"
              <?php if(is_front_page()) echo 'class="nav-active"' ?>
            >Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('/blog'); ?>"
              <?php if(get_post_type() == 'post') echo 'class="nav-active"' ?>
            >Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('/products'); ?>"
              <?php if(get_post_type() == 'product') echo 'class="nav-active"' ?>
            >Products</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('/about'); ?>"
            <?php if(is_page('about')) echo 'class="nav-active"' ?>
            >About</a>
          </li>
        </ul>
      </div>
    </nav>
