<?php
/*
The Page Loop
=============
*/
?>
<?php tha_content_before(); ?>
<?php tha_content_top(); ?>
<?php if(have_posts()): while(have_posts()): the_post(); ?>
	<?php tha_entry_before(); ?>
    <article role="article" id="post_<?php the_ID()?>" <?php post_class()?>>
        <header>
        	<?php tha_entry_top(); ?>
            <h2><?php the_title()?></h2>
        </header>
        <?php the_content()?>
    </article>
    <?php tha_entry_bottom(); ?>
<?php endwhile; else: ?>
<?php tha_entry_after(); ?>
<?php wp_redirect(get_bloginfo('siteurl').'/404', 404); ?>
<?php exit; ?>
<?php endif; ?>