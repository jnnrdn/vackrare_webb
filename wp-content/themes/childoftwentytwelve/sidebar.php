<?php
/**
 * The sidebar containing the main widget area.
 *
 * If no active widgets in sidebar, let's hide it completely.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>

	<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
		<div id="secondary" class="widget-area" role="complementary">

      <aside id="social-icons" class"widget clear">
        <h3 class="widget-title">Connect with us</h3>
        <ul>
          <li class="social-twitter">
            <a href="#" title="Follow me on Twitter" target="_blank">Follow me on Twitter</a>
          </li>
          <li class="social-facebook">
            <a href="#" title="Follow me on Facebook" target="_blank">Follow me on Facebook</a>
          </li>
          <li class="social-linkedin">
            <a href="#" title="Follow me on LinkedIn" target="_blank">Follow me on LinkedIn</a>
          </li>
          <li class="social-aboutme">
            <a href="#" title="Follow me on Aboutme" target="_blank">Follow me on About.me</a>
          </li>
          <li class="social-github">
            <a href="#" title="See my stuff on GitHub" target="_blank">See my stuff on GitHub</a>
          </li>
        </ul>
      </aside>

			<?php dynamic_sidebar( 'sidebar-1' ); ?>
		</div><!-- #secondary -->
	<?php endif; ?>
