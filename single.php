<?php 

  if( have_posts() ):
    while( have_posts() ): the_post();
    <?php get_template_part( 'template-parts/content', get_post_format() );?>
    endwhile;
  endif;

?>
