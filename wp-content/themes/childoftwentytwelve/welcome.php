<!-- Welcome message to be displayed on the front index page -->

<?php $page = get_page_by_title( 'Front page' ); ?>

<div id="front-page-intro" class="clear">
  <?php if ( get_the_post_thumbnail($page->ID) ) : ?>

    <figure class="entry-page-image">
      <?php echo get_the_post_thumbnail($page->ID); ?>
    </figure> <!-- .entry-page-image -->

  <?php endif ?>

  <article id="intro-elements">

    <div class="entry-content">

      <?php echo apply_filters( 'the_content', $page->post_content ); ?>

    </div> <!-- .entry-content -->

  </article> <!-- #intro-elements -->

</div> <!-- #front-page-intro -->

<div class="hide-button">
  <a href="#" title="Hide the welcome message">Hide</a>
</div> <!-- .hide-button -->
