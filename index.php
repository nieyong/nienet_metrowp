
<?php  get_header();?>

<div id="container">
  <div id="content">
    <div class="page-header fix">
      <h1>
        <?php wp_title(''); ?>
      </h1>
    </div>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="box fix">
      <?php get_template_part ('left-meta'); ?>
      <div class="text show fix">
        <div <?php post_class() ?> id="post-<?php the_ID(); ?>">
          <?php if(has_post_thumbnail()): ?>
          <div class="thumb right"> <a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php _e('Permanent Link To', 'MetroWP');?> <?php the_title_attribute(); ?>">
            <?php the_post_thumbnail(array(70,70));?>
            </a> </div>
          <!--/thumb-->
          <?php else:?>
          <div class="thumb right"> <a class="w" href="<?php the_permalink(); ?>" rel="bookmark" title="<?php _e('Permanent Link To', 'MetroWP');?> <?php the_title_attribute(); ?>">W</a> </div>
          <?php endif; ?>
          <div class="post-title">
            <h2>
            <a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php _e('Permanent Link to','MetroWP');?> <?php the_title_attribute(); ?>">
            <?php the_title(); ?>
            </a> </div>
          </h2>
          <div class="fix"><span class="meta-info">
            <?php _e('in','MetroWP');?>
            <?php the_category(', ') ?>
            ,
            <?php _e('by','MetroWP');?>
            <?php the_author(); ?>
            </span></div>
          <div class="post-content fix">
            <?php the_content(); ?>
            <?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'MetroWP' ), 'after' => '</div>' ) ); ?>
            <div class="tags fix">
              <?php the_tags(__('Tagged with: ', 'MetroWP'),' &bull; ',''); ?>
              &nbsp; </div>
            <!--/tag--> 
          </div>
          <!--/post-content--> 
        </div>
        <!--/post--> 
      </div>
      <!--/text --> 
    </div>
    <?php endwhile;  ?>
    <?php  else: ?>
    <div class="text shadow border fix">
      <h2 class="center">
        <?php _e('Sorry,nothing found~','MetroWP');?>
      </h2>
      <p class="center">
        <?php _e('try something else.', 'MetroWP');?>
      </p>
      <p class="center">
        <?php _e('still nothing found?try google it. ', 'MetroWP');?>
      </p>
      <div class="center">
        <?php get_search_form(); ?>
      </div>
    </div>
    <?php endif; ?>
    <div class="clear"></div>
    <?php get_template_part('page-nav'); ?>
  </div>
  <!--/content -->
  <div id="sidebar">
    <?php get_sidebar(); ?>
  </div>
  <!-- sidebar--> 
</div>
<!--/container -->
<?php	get_footer(); ?>
