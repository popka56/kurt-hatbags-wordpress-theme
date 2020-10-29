<?php get_header(); ?>

<main>

  <div class="page-header" style="background-image: url('<?php print_r(get_the_post_thumbnail_url(5)) ?>');">
    <div class="page-header-text">
      <h1>Error 404</h1>
      <p>This page does not exist!!!</p>
      <!-- <a class="button" href="#">Buy Now</a> -->
    </div>
    <video autoplay playsinline muted loop poster="<?php print_r(get_header_image()) ?>/screenshot.png">
      <source src="<?php print_r(get_header_video_url()); ?>" type="video/mp4">
      Your browser does not support HTML5 video.
    </video>
  </div>
</main>

<?php get_footer(); ?>