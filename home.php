<?php get_header(); ?>

<div class="container-fluid pagetitle">
    <div class="container">
        <div class="row pt-4 pb-4">
            <div class="col-12">
                <h1 class="texttitle"><?php wp_title("") ?></h1>
            </div>
        </div>
    </div>
</div>

<div class="container posts">
    <?php
    if (have_posts()) :
        while (have_posts()) : the_post();
    ?>
            <div class="row mb-4 mt-4">
                <div class="col-12 col-md-4">
                    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                        <?php the_post_thumbnail("", ["class" => "img-fluid w-100"]); ?>
                    </a>
                </div>
                <div class="col-12 col-md-8">
                    <h3><a class="text-decoration-none linknegro" href="<?php the_permalink(); ?>"><?php the_title_attribute(); ?></a></h3>
                    <?php the_category(); ?>
                    <p><?php the_excerpt(); ?></p>
                    <a class="text-decoration-none minilink" href="<?php the_permalink(); ?>">LER MAIS <i class="fa fa-angle-right"></i></a>
                </div>
            </div>
    <?php
        endwhile;
    endif;
    ?>
</div>

<?php get_footer(); ?>