<?php get_header(); ?>
    <div class="main">
        <div class="container">
            <?php if(have_posts()):?>
                <?php while(have_posts()):the_post(); ?>
                    <h3><?php the_title(); ?></h3>
                    <div class="meta">
                    Created By <?php the_author(); ?>
                    On <?php the_date("F j, Y, g:i a"); ?>
                    </div>
                    <?php the_content(); ?>
                <?php endwhile; ?>
            <?php else : ?>

            <?php echo wpautop('Sorry,NO posts were found');?>



            <?php endif;?>
        </div>
    </div>
   <?php get_footer(); ?>