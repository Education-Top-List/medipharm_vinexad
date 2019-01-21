<?php 
/*
Template Name: page-template-trangchu
*/
get_header(); 
?>	
<div class="page-wrapper">
	<div id="content">
		<div class="content_post_admin">
			<?php 
		$my_postid = 16;//This is page id or post id
		$content_post = get_post($my_postid);
		$content = $content_post->post_content;
		$content = apply_filters('the_content', $content);
		$content = str_replace(']]>', ']]&gt;', $content);
		echo $content;
		?>
	</div>
	<div class="g_content">
		<div class="content_left">
			<div class="list_post_news">
				<div class="container">
					<?php if(get_locale() == 'en_US'){?> <h2 class="title_tg_top">New Posts</h2>
					<?php }  else if(get_locale() == 'vi'){ ?><h2 class="title_tg_top">Bài viết mới nhất</h2> <?php } ?>
					<div class="row">
						<?php 
						$arg_cmt_post_q = array(
							'posts_per_page' => 3,
							'orderby' => 'post_date',
							'order' => 'DESC',
							'post_type' => 'post',
							'post_status' => 'publish',
							'post__not_in' => array(622,615,688,690)
						);
						$cmt_post_q = new WP_Query();
						$cmt_post_q->query($arg_cmt_post_q);
						?>
						<?php if(have_posts()) : ?>
							<ul class="most-commented">
								<?php
								while ($cmt_post_q->have_posts()) : $cmt_post_q->the_post(); ?>
									<li>
										<div class="post_cmt_wrapper pw">
											<div class="wrap_thumb">
												<?php  $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );  ?>
												<figure class="thumbnail" style="background:url('<?php echo $image[0]; ?>');"> 
													<a href="<?php the_permalink();?>"></a>
												</figure>	
											</div>

											<h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a> </h3>
											<div class="wrap_cmt_count">
												<div class="cat_post">
													<?php 
													$categories = get_the_category();
													$seperator = ", ";
													$output = '';
													if($categories){
														foreach ($categories as $category){
															$output .= '<a href="' . get_category_link($category->term_id) . '"> '. $category-> cat_name . ' </a>' .  $seperator;

														}
														echo trim($output , $seperator);
													}
													?>
													|   <span class="wpb-comment-count"><b><?php the_time('d/m/y');?></b><a href="<?php the_permalink();?>"></a></span>
												</div>

											</div>


											<div class="excerpt">
												<p><?php echo excerpt(50); ?></p>
											</div>
										</div>

									</li>
								<?php endwhile; ?>
							<?php endif; ?> 
						</ul>
					</div>
				</div>
			</div>
			<div class="list_post_highlight">
				<div class="container">
					<?php if(get_locale() == 'en_US'){?> <h2 class="title_tg_top">Featured posts</h2>
					<?php }  else if(get_locale() == 'vi'){ ?><h2 class="title_tg_top">Bài viết nổi bật</h2> <?php } ?>
					<div class="row">
						<?php 
						$arg_cmt_post_q = array(
							'posts_per_page' => 6,
							'meta_key' => 'wpb_post_views_count',
							'orderby' => 'meta_value_num',
							'order' => 'DESC',
							'post_type' => 'post',
							'post_status' => 'publish',
							'post__not_in' => array(622,615,688,690)
						);
						$cmt_post_q = new WP_Query();
						$cmt_post_q->query($arg_cmt_post_q);
						?>
						<?php if(have_posts()) : ?>
							<ul>
								<?php
								while ($cmt_post_q->have_posts()) : $cmt_post_q->the_post(); ?>
									<li class="col-sm-4">
										<div class="post_cmt_wrapper pw">
											<div class="wrap_thumb">
												<?php  $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );  ?>
												<figure class="thumbnail" style="background:url('<?php echo $image[0]; ?>');"> 
													<a href="<?php the_permalink();?>"></a>
												</figure>	
											</div>
											<div class="cat_post">
												<?php 
												$categories = get_the_category();
												$seperator = ", ";
												$output = '';
												if($categories){
													foreach ($categories as $category){
														$output .= '<a href="' . get_category_link($category->term_id) . '"> '. $category-> cat_name . ' </a>' .  $seperator;

													}
													echo trim($output , $seperator);
												}
												?>
											</div>
											<h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a> </h3>
											<div class="excerpt">
												<p><?php echo excerpt(30); ?></p>
											</div>
										</div>

									</li>
								<?php endwhile; ?>
							<?php endif; ?> 
						</ul>
					</div>
				</div>
			</div>

			<div class="list_post_other">
				<div class="container">
					<?php if(get_locale() == 'en_US'){?> <h2 class="title_tg_top">Featured posts</h2>
					<?php }  else if(get_locale() == 'vi'){ ?><h2 class="title_tg_top">Bài viết khác</h2> <?php } ?>
					
						<?php if(have_posts()) : ?>
							<?php
							$args = array(
								'posts_per_page' => 5,
								'post__not_in' => array(622,615,688,690)
							);
							$the_query = new WP_Query( $args ); 
							?>
							<ul>
								<?php	while($the_query->have_posts()):  $the_query->the_post(); 
									get_template_part('content');
								endwhile;
								?>
						<?php endif; ?> 
					</ul>
			</div>
		</div>

	</div><!-- content_left -->
</div>

</div>
</div>
<?php get_footer(); ?>
