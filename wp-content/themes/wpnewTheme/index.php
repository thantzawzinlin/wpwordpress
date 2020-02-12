<?php get_header(); ?>
    <div class="container">
        <div class="main">        
            <?php if(have_posts()):?>
                <?php while(have_posts()):the_post(); ?>
                    <article class="post">
                        <h3>
                            <a href="<?php the_permalink();?>">
                            <?php the_title(); ?>
                            </a>
                        </h3>
                        <div class="meta">
                        Created By 
                        <a href="<?php get_author_posts_url(get_the_author_meta('ID')) ; ?>">
                        <?php the_author(); ?>
                        </a>
                        On <?php the_date("F j, Y, g:i a"); ?>
                        </div>
                        <?php if(has_post_thumbnail()) : ?>

                            <div class="post_thumbnail">
                                <?php the_post_thumbnail(); ?>
                            </div>
                        <?php endif; ?>
                        <?php the_excerpt(); ?>
                         <a href="<?php the_permalink();?>" class="button">
                           Read More
                        </a>
                    </article>
                <?php endwhile; ?>
            <?php else : ?>

            <?php echo wpautop('Sorry,NO posts were found');?>

               

            <?php endif;?>
            
        </div>
        
   
   <?php get_footer(); ?>