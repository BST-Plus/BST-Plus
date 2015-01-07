<?php
/*
Example loop for custom post type "Resource"
============================================
(This is here actually the same as "content-single.php" - you modify it how you like.)
*/
?>

<?php tha_content_before(); ?>
<?php tha_content_top(); ?>
<?php if(have_posts()): while(have_posts()): the_post(); ?>
<?php tha_entry_before(); ?>
<article role="article" id="post_<?php the_ID()?>" <?php post_class()?>>
<header>
<h2><?php the_title()?></h2>
<h4>
<em>
<span class="text-muted" class="author"><?php _e('By', 'bst-plus'); echo " "; the_author() ?>,</span>
<time class="text-muted" datetime="<?php the_time('d-m-Y')?>"><?php the_time('jS F Y') ?></time>
</em>
</h4>
<p class="text-muted" style="margin-bottom: 30px;">
<i class="glyphicon glyphicon-folder-open"></i>&nbsp; <?php _e('Filed under', 'bst-plus'); ?>: <?php the_category(', ') ?><br/>
<i class="glyphicon glyphicon-comment"></i>&nbsp; <?php _e('Comments', 'bst-plus'); ?>: <?php comments_popup_link(__('None', 'bst-plus'), '1', '%'); ?>
</p>
<?php tha_entry_top(); ?>
</header>
<section>
<?php the_post_thumbnail(); ?>
<?php the_content()?>
</section>
<?php tha_entry_bottom(); ?>
</article>
<?php comments_template('/includes/loops/comments.php'); ?>
<?php tha_entry_bottom(); ?>
<?php endwhile; ?>
<?php tha_entry_after(); ?>
<?php else: ?>
<?php wp_redirect(get_bloginfo('siteurl').'/404', 404); exit; ?>
<?php endif; ?>
