<?php 
  get_header(); 
  $page_id = url_to_postid(site_url('index'));
  ?>

<main>

  <div class="page-header" style="background-image: url('<?php print_r(get_the_post_thumbnail_url($page_id)) ?>');">
    <div class="page-header-text">
      <h1><?php echo get_the_title($page_id); ?></h1>
      <h2><?php echo get_the_content("", false, $page_id); ?></h2>
      <!-- <a class="button" href="#">Buy Now</a> -->
    </div>
    <video autoplay playsinline muted loop poster="<?php print_r(get_header_image()) ?>/screenshot.png">
      <source src="<?php print_r(get_header_video_url()); ?>" type="video/mp4">
      Your browser does not support HTML5 video.
    </video>
  </div>

  <div class="page-body">
  <?php
    while(have_posts()){
      the_post(); 
  ?>
    <div class="post" style="background-image: url('<?php print_r(get_field("background_image")) ?>');">
      <?php
      if(get_field("cover_image_position") == "Right")
      {
        ?>
          <div class="post-text-wrapper">
            <h1><?php the_title(); ?></h1>
            <?php print_r(the_content()); ?>
          </div>
          <div class="cover-image-wrapper">
          <?php
            echo "<img class='cover-img' style='' src='" . get_field("cover_image") . "'>";
          ?>
          </div>
        <?php
      }
      else if(get_field("cover_image_position") == "Left")
      {
        ?>
          <div class="cover-image-wrapper">
          <?php
            echo "<img class='cover-img' style='' src='" . get_field("cover_image") . "'>";
          ?>
          </div>
          <div class="post-text-wrapper">
            <h1><?php the_title(); ?></h1>
            <?php print_r(the_content()); ?>
          </div>
        <?php
      }
      else{
        ?>
        <div class="post-text-wrapper" style="width: 100%;">
          <h1><?php the_title(); ?></h1>
          <?php print_r(the_content()); ?>
        </div>
        <?php
      }
      ?>
    </div>
  <?php 
    }
  ?>
  </div>

</main>

<?php get_footer(); ?>