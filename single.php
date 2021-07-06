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


<div class="container mt-5">
    <div class="row">
        <div class="col-3">
            <span class="share pb-10">Partilhar:</span>
            <div class="social-links">
                <a href="https://www.facebook.com/sharer/sharer.php?s=https://basicamente.pt/pt/blog/headless-commerce" target="popup" onclick="window.open('https://www.facebook.com/sharer.php?u=https://basicamente.pt/pt/blog/headless-commerce', 'popup', 'width=600,height=600'); return false;" class="fa fa-facebook-f fa-xs text-decoration-none"></a>
                <a href="https://twitter.com/intent/tweet/?text=Headless Commerce&amp;url=https://basicamente.pt/pt/blog/headless-commerce" target="popup" onclick="window.open('https://twitter.com/intent/tweet/?text=Headless Commerce&amp;url=https://basicamente.pt/pt/blog/headless-commerce', 'popup', 'width=600,height=600'); return false;" class="fa fa-twitter fa-xs text-decoration-none"></a>
                <a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=https://basicamente.pt/pt/blog/headless-commerce" target="popup" onclick="window.open('http://www.linkedin.com/shareArticle?mini=true&amp;url=https://basicamente.pt/pt/blog/headless-commerce', 'popup', 'width=600,height=600'); return false;" class="fa fa-linkedin fa-xs text-decoration-none"></a>
            </div>
        </div>
        <div class="col-9">
            <?php the_post_thumbnail("large", ['class' => 'w-100 img-fluid']) ?>

            <?php the_content(); ?>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <h1 class="h1title text-center pb-0 mb-0">Últimos Insights</h1>
    </div>
    <div class="row mb-4 mt-4">
        <?php
        $the_query = new WP_Query('posts_per_page=4');
        while ($the_query->have_posts()) : $the_query->the_post();
        ?>
            <div class="col-md-3">
                <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                    <?php the_post_thumbnail("", ["class" => "img-fluid w-100"]); ?>
                </a>
                <h5 class="text-truncate pt-2" title="<?php the_title_attribute(); ?>"><a class="text-decoration-none linknegro" href="<?php the_permalink(); ?>"><?php the_title_attribute(); ?></a></h5>
                <p class="tiempo"><?php the_time('F j, Y') ?></p>
                <a class="text-decoration-none minilink" href="<?php the_permalink(); ?>">LER MAIS <i class="fa fa-angle-right"></i></a>
            </div>
        <?php
        endwhile;
        wp_reset_postdata();
        ?>
    </div>
</div>




<?php get_footer(); ?>