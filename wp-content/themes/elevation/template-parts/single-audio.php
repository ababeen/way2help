<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Elevation
 */
?>
  <article <?php post_class();?>>
    <?php echo elevation_post_date();?>

    <div class="post-content media-body">
    
      <?php $audio_code = candor_framework_meta( '_elevation_audio_code' ); 
      if($audio_code ){?>
          <div class="post-thumbnail">
              <div class="entry-audio">
                  <?php echo  $audio_code; ?>
              </div>
          </div>
      <?php } ?>
      
      <h3 class="entry-title"><?php the_title();?></h3><!-- /.entry-title -->
      
      <?php echo elevation_entry_post_meta();?>

      <div class="entry-content">
        <?php the_content();?>
      </div><!-- /.entry-content -->
     
      <?php echo elevation_single_post_entry_footer();?>

    </div><!-- /.post-content -->
  </article><!-- /.post -->