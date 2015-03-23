<?php
/*
The Default Loop (used by index.php and category.php)
=====================================================

If you require only post excerpts to be shown in index and category pages, then use the [---more---] line within blog posts.

If you require different templates for different post types, then simply duplicate this template, save the copy as, e.g. "content-aside.php", and modify it the way you like it. (The function-call "get_post_format()" within index.php, category.php and single.php will redirect WordPress to use your custom content template.)

Alternatively, notice that index.php, category.php and single.php have a post_class() function-call that inserts different classes for different post types into the <section> tag (e.g. <section id="" class="format-aside">). Therefore you can simply use e.g. .format-aside {your styles} in css/bst-plus.css style the different formats in different ways.
*/
?>
<?php tha_content_before(); ?>
<?php tha_content_top(); ?>
<?php if(have_posts()): while(have_posts()): the_post();?>
    <?php tha_entry_before(); ?>
    <article role="article" id="post_<?php the_ID()?>">
        <header>
            <h2><a href="<?php the_permalink(); ?>"><?php the_title()?></a></h2>
            <h4>
              <em>
                <span class="text-muted author"><?php _e('By', 'bst-plus'); echo " "; the_author() ?>,</span>
                <time  class="text-muted" datetime="<?php the_time('d-m-Y')?>"><?php the_time('jS F Y') ?></time>
              </em>
            </h4>
            <?php tha_entry_top(); ?>
        </header>
        <section>
            <?php the_post_thumbnail(); ?>
            <?php the_content( __( '&hellip; ' . __('Continue reading', 'bst-plus' ) . ' <i class="glyphicon glyphicon-arrow-right"></i>', 'bst-plus' ) ); ?>
        </section>
        <footer>
            <p class="text-muted" style="margin-bottom: 20px;">
                <i class="glyphicon glyphicon-folder-open"></i>&nbsp; <?php _e('Category', 'bst-plus'); ?>: <?php the_category(', ') ?><br/>
                <i class="glyphicon glyphicon-comment"></i>&nbsp; <?php _e('Comments', 'bst-plus'); ?>: <?php comments_popup_link(__('None', 'bst-plus'), '1', '%'); ?>
            </p>
        </footer>
    </article>
    <?php tha_entry_bottom(); ?>
<?php endwhile; ?>
<?php tha_entry_after(); ?>

<?php if ( function_exists('bst_plus_pagination') ) { bst_plus_pagination(); } else if ( is_paged() ) { ?>
  <ul class="pagination">
    <li class="older"><?php next_posts_link('<i class="glyphicon glyphicon-arrow-left"></i> ' . __('Previous', 'bst-plus')) ?></li>
    <li class="newer"><?php previous_posts_link(__('Next', 'bst-plus') . ' <i class="glyphicon glyphicon-arrow-right"></i>') ?></li>
  </ul>
<?php } ?>
<?php else: wp_redirect(get_bloginfo('siteurl').'/404', 404); exit; endif; ?>
