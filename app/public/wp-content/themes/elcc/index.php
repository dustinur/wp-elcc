<?php get_header(); ?>

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