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
<div class="container body pt-4 pb-4">
    <?php the_content() ?>
</div>

<?php get_footer(); ?>