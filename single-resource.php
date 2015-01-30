<?php
/*
A templates for your custom post type
====================================
If you don't create a custom template for your custom post type, then WordPress will 
use "single.php". (Note, what we are talking about here are "Custom POST Types".)

Therefore what you need to do is (as I have done here in this example template):

(a) Replicate your "single.php" file, SAVEAS "single-resource.php" (in this exmple).
Note that the name of the custom post type is used, in the singular.

(b) Edit the file "single-resource.php" any way you like it. Add in some special CSS 
classes (and style them in your styledheet).

(c) Create a unique LOOP (or WordPress will use the loop "includes/loops/content.php").

(d) You may also need a custome "archive-resource.php" (but I have not created one here yet).
*/
get_template_part('includes/header'); ?>

<div class="container">
  <div class="row">
    <div class="col-xs-12 col-sm-8">
      <div id="content" role="main">
        <?php get_template_part('includes/loops/content', 'resource'); ?>
      </div><!-- /#content -->
    </div>
    <div class="col-xs-6 col-sm-4" id="sidebar" role="navigation">
      <?php get_template_part('includes/sidebar'); ?>
    </div>
  </div>
</div>

<?php get_template_part('includes/footer'); ?>
