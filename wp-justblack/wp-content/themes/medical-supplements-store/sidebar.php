<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package Medical Supplements Store
 */
?>
<div id="sidebar">    
    <?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>
        <aside id="archives" class="widget">
            <h3 class="widget-title"><?php esc_html_e( 'Archives', 'medical-supplements-store' ); ?></h3>
            <ul>
                <?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
            </ul>
        </aside>
        <aside id="meta" class="widget">
            <h3 class="widget-title"><?php esc_html_e( 'Meta', 'medical-supplements-store' ); ?></h3>
            <ul>
                <?php wp_register(); ?>
                <li><?php wp_loginout(); ?></li>
                <?php wp_meta(); ?>
            </ul>
        </aside>
    <?php endif; // end sidebar widget area ?>	
</div>