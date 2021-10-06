<?php get_header() ?>
<main class="container page section">
    <?php while(have_posts()): the_post(); ?>
        <h1 class="text-center text-primary"><?php the_title(); ?></h1>

<!--        --><?php //the_post_thumbnail() ?><!--    -->
<!--    //check if an image exist-->
        <?php
            if(has_post_thumbnail()):
                echo "<p> There's an image</p>";
            else:
                echo "<p>No image</p>";
            endif;
        ?>

        <div class="text-center">
            <?php the_content(); ?>
        </div>

    <?php endwhile; ?>
</main>
<?php get_footer() ?>