<?php
function elevation_custom_styles(){ 
  global $elevation_options;
  global $post_id;
  $page_thumbnail_image = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID(), 'full' ) );

    switch( $elevation_options['elevation_preset_colors'] ){
                    case 1: 
                    $elevation_color = "#ff5722";
                    break;
                    case 2: 
                    $elevation_color = "#ff7302";
                    break;
                    case 3: 
                    $elevation_color = "#40d47e";
                    break;
                    case 4: 
                    $elevation_color = "#16a085";
                    break;
                    case 5: 
                    $elevation_color = "#f1c311";
                    break;
                    case 6: 
                    $elevation_color = "#9b59b6";
                    break;
                    case 7: 
                    $elevation_color = "#34495e";
                    break;
                    case 8: 
                    $elevation_color = "#d35400";
                    break;
                    case 9: 
                    $elevation_color = "#795548";
                    break;
                    case 10: 
                    $elevation_color = "#9b59b6";
                    break;

                    case 11: 
                    $elevation_color = $elevation_options['elevation_presets_custom_color'];
                    break;
                    default:
                    $elevation_color = "#ff5722";
                    break;
                }
?>
  <style type="text/css">
          body {
               font-family:   <?php echo $elevation_options['body_font']['font-family'];?>;
               font-size:     <?php echo $elevation_options['body_font']['font-size'];?>;
          }

          #preloader{
               background: #333 url('<?php echo esc_html( $elevation_options[ 'preloader' ]['url']);?>') no-repeat center center !important;
          }
          #page-head {
                background: url('<?php echo esc_html( $elevation_options[ 'blog_header_image' ]['url']);?>') no-repeat fixed center top !important;
                background-size: cover !important;
          }          
          .events-banner{
            background: url('<?php echo esc_html( $elevation_options[ 'events_left_image' ]['url']);?>');
          }
          #error-banner {
                background: url('<?php echo esc_html( $elevation_options[ 'settings_404_parallax_image' ]['url']);?>') no-repeat fixed center top !important;
                background-size: cover !important;
          }
          p{
               font-family: <?php echo $elevation_options['paragraph_typography']['font-family'];?>;
               color: <?php echo $elevation_options['paragraph_typography']['color'];?>;
               font-size: <?php echo $elevation_options['paragraph_typography']['font-size'];?>;
               font-weight: <?php echo $elevation_options['paragraph_typography']['font-weight'];?>;
               line-height: <?php echo $elevation_options['paragraph_typography']['line-height'];?>;
          }
          h1, h2, h3, h4, h5, h6 {
               font-family: <?php echo $elevation_options['heading_google_font']['font-family'];?>;
          }



          a:hover, .action .btn:hover {
            color: <?php echo esc_attr( $elevation_color );?> !important;
          }
          .navbar-default .navbar-nav>.active>a, .navbar-default .navbar-nav>.open>a, .navbar-default .navbar-nav>.active>a, .navbar-default .navbar-nav>.active>a:focus, .navbar-default .navbar-nav>.active>a:hover, .navbar-default .navbar-nav>li>a:focus, .navbar-default .navbar-nav>li>a:hover, .events-slider .event-item time, .entry-title a:hover, .designation a, .widget-contact li:before, .post-meta a, .entry-footer .edit-link a, .post-tag a, .logged-in-as a:last-child { 
            color: <?php echo esc_attr( $elevation_color );?>;
          }
          .btn, .causes-slider .progress-bar, .target:before, .target:after, .events .section-sub-title:before, .events .section-sub-title:after, .causes-slider .owl-page.active, .section-border:before, .section-border:after, .section-border span:before, .section-border span:after, .target:before, .target:after, .events .section-sub-title:before, .events .section-sub-title:after, .events-slider .event-title:before, .events-slider .event-title:after, .widget-title:before, .widget-title:after, .post-meta:before, .post-meta:after, .leave-comment #reply-title:before, .post-comment #reply-title:before, .leave-comment #reply-title:after, .post-comment #reply-title:after, .scroll-to-top, .elevation-button, .elevation-amount-button, 
            input[type="button"], 
            input[type="submit"], 
          .elevation-amount-button.active, .elevation-amount-button:hover {
            background-color: <?php echo esc_attr( $elevation_color );?>;
          }
          .section-border {
            border-left: 1px solid <?php echo esc_attr( $elevation_color );?>;
            border-right: 1px solid <?php echo esc_attr( $elevation_color );?>;
          }
          .itemFilter .current {
            border-color: <?php echo esc_attr( $elevation_color );?>;
          }
          .donate-count .btn:hover,
          .wpcf7-form .submit-btn input {
           background-color: <?php echo esc_attr( $elevation_color );?>; 
         }
         .border-style {
           border-left: 1px solid <?php echo esc_attr( $elevation_color );?>;
           border-right: 1px solid <?php echo esc_attr( $elevation_color );?>;
         }
        .wpcf7-form .wpcf7-form-control:focus,
        .search-form input:focus {
          border-color: <?php echo esc_attr( $elevation_color );?>;
        }

        /* Custom CSS */
        <?php if (isset($elevation_options['custom_css'])){
             echo $elevation_options['custom_css'];
        }?>

  </style>
<?php 

}
add_action( 'wp_head', 'elevation_custom_styles');
