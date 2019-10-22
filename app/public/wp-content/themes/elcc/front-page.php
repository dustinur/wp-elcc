<?php get_header(); ?>

<header>
    <div class="bg-header jumbotron jumbotron-fluid" style="background: #676f7a url(<?php echo get_template_directory_uri(); ?>/img/bg-1.jpg) 45%/cover no-repeat;">
    <div class="container">
        <h1 class="display-4">English Language & Cultural Center</h1>
        <p class="lead">
        Learn English Your Style with the Most Effective English Programs
        </p>
        <h1>
            <a href="mailto:JohnnyZ@ELCC-USA.COM" class="btn btn-primary pb-2" style="font-size: .5em;">Contact Us</a>
        </h1>
    </div>
    </div>
</header>

<div class="container p-5">
    <h2>Products</h2>
    <div class="row">
        <?php

        $args = array(
            'post_type' => 'product',
        );

        $blogposts = new WP_Query($args);

        while ($blogposts->have_posts()) {
            $blogposts->the_post();
            ?>

            <div class="col-xs-12 col-md-6 col-lg-4">
                <div class="card mt-4" style="width: 18rem;">
                    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" class="card-img-top" />
                    <div class="card-body">
                        <h5 class="card-title"><?php the_title(); ?></h5>
                        <p class="card-text">
                            <?php echo wp_trim_words(get_the_excerpt(), 30); ?>
                        </p>
                        <a href="<?php the_permalink(); ?>" class="btn btn-primary">View</a>
                    </div>
                </div>
            </div>

        <?php }
            wp_reset_query();
        ?>

    </div>
</div>


<?php get_footer(); ?>