<?php
/*
Template Name: Full Width Page
*/
?>

<?php get_template_part('includes/header'); ?>

<div class="container">
  <div class="row">

    <div class="col-sm-12">
      <div id="content" role="main">
        <?php get_template_part('includes/loops/content', 'page'); ?>
      </div><!-- /#content -->
    </div>
    
  </div><!-- /.row -->
</div><!-- /.container -->

<?php get_template_part('includes/footer'); ?>