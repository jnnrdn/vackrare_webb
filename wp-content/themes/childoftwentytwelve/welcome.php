<!-- Welcome message to be displayed on the front index page -->

<?php $page = get_page_by_title( 'Front page' ); ?>

<div id="front-page-intro" class="clear">
  <?php if ( get_the_post_thumbnail($page->ID) ) : ?>

    <figure>
      <?php echo get_the_post_thumbnail($page->ID); ?>
    </figure>

  <?php endif ?>

  <article id="intro-elements">

    <div class="entry-content">

      <?php echo apply_filters( 'the_content', $page->post_content ); ?>

    </div> <!-- .entry-content -->

  </article> <!-- #intro-elements -->

</div> <!-- #front-page-intro -->
