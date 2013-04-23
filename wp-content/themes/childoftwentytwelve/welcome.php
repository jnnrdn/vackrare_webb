<!-- Welcome message to be displayed on the front index page -->

<?php $page = get_page_by_title( 'Front page' ); ?>
<?php print_r($page); ?>

<div id="front-page-intro" class="clear">

  <article id="intro-elements">

    <div class="entry-content">

      <?php echo apply_filters( 'the_content', $page->post_content ); ?>

    </div> <!-- .entry-content -->

  </article> <!-- #intro-elements -->

</div> <!-- #front-page-intro -->
