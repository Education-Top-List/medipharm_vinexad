<?php 
/*
Template Name: page-template-trangchu
*/
get_header(); 
?>	
<div class="page-wrapper">
	<div class="g_content">
		<div class="container">
			<div class="content_left">
				<div class="three_categories">
					<div class="row">
						<div class="col-sm-4">
							<div class="wrap_item_threecat">
								<?php 
								$cat6_query = array(
									'posts_per_page' => 1,
									'cat' => 6,
									'orderby' => 'post_date',
									'order' => 'DESC',
									'post_type' => 'post',
									'post_status' => 'publish'
								);
								$do_cat6_query = new WP_Query();
								$do_cat6_query->query($cat6_query);
								?>
								<?php if(have_posts()) : 
									while($do_cat6_query->have_posts()) : $do_cat6_query->the_post();
										?>
										<div class="hot_big_post pw">
											<p class="cat_title"> <a href="<?php echo get_category_link(6); ?>"><span><i class="fa fa-leaf" aria-hidden="true"></i><?php echo get_cat_name(6); ?></span></a></p>
											<?php  $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );  ?>
											<figure class="thumbnail" style="background:url('<?php echo $image[0]; ?>');">
												<a href="<?php the_permalink(); ?>"><!-- <?php //the_post_thumbnail();?> --></a> 
											</figure>
											<div class="textwidget">
												<h2><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
												<div class="excerpt">
													<p><?php echo excerpt(20); ?></p>
												</div>
												<ul class="list_post_others">
													<?php 
													$cat6_related_post = array(
														'order' => 'DESC',
														'cat' => 6,
														'posts_per_page'=>3,
														'offset'=>1
													);
													$do_cat6_related_post = new WP_Query();
													$do_cat6_related_post->query($cat6_related_post);
													?>
													<?php 
													if(have_posts()) : 
														while($do_cat6_related_post->have_posts()) : $do_cat6_related_post->the_post();
															?>
															<li><a href="<?php the_permalink();?>"><?php the_title(); ?></a></li>
															<?php  
														endwhile;
													else:
													endif;
													?>
												</ul>
											</div>
										</div>
										<?php
									endwhile;
								else:
								endif;
								?>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="wrap_item_threecat">
								<?php 
								$cat6_query = array(
									'posts_per_page' => 1,
									'cat' => 33,
									'orderby' => 'post_date',
									'order' => 'DESC',
									'post_type' => 'post',
									'post_status' => 'publish'
								);
								$do_cat6_query = new WP_Query();
								$do_cat6_query->query($cat6_query);
								?>
								<?php if(have_posts()) : 
									while($do_cat6_query->have_posts()) : $do_cat6_query->the_post();
										?>
										<div class="hot_big_post pw">
											<p class="cat_title"> <a href="<?php echo get_category_link(33); ?>"><span><i class="fa fa-leaf" aria-hidden="true"></i><?php echo get_cat_name(33); ?></span></a></p>
											<?php  $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );  ?>
											<figure class="thumbnail" style="background:url('<?php echo $image[0]; ?>');">
												<a href="<?php the_permalink(); ?>"><!-- <?php //the_post_thumbnail();?> --></a> 
											</figure>
											<div class="textwidget">
												<h2><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
												<div class="excerpt">
													<p><?php echo excerpt(20); ?></p>
												</div>
												<ul class="list_post_others">
													<?php 
													$cat6_related_post = array(
														'order' => 'DESC',
														'cat' => 33,
														'posts_per_page'=>3,
														'offset'=>1
													);
													$do_cat6_related_post = new WP_Query();
													$do_cat6_related_post->query($cat6_related_post);
													?>
													<?php 
													if(have_posts()) : 
														while($do_cat6_related_post->have_posts()) : $do_cat6_related_post->the_post();
															?>
															<li><a href="<?php the_permalink();?>"><?php the_title(); ?></a></li>
															<?php  
														endwhile;
													else:
													endif;
													?>
												</ul>
											</div>
										</div>
										<?php
									endwhile;
								else:
								endif;
								?>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="wrap_item_threecat">
								<?php 
								$cat6_query = array(
									'posts_per_page' => 1,
									'cat' => 34,
									'orderby' => 'post_date',
									'order' => 'DESC',
									'post_type' => 'post',
									'post_status' => 'publish'
								);
								$do_cat6_query = new WP_Query();
								$do_cat6_query->query($cat6_query);
								?>
								<?php if(have_posts()) : 
									while($do_cat6_query->have_posts()) : $do_cat6_query->the_post();
										?>
										<div class="hot_big_post pw">
											<p class="cat_title"> <a href="<?php echo get_category_link(34); ?>"><span><i class="fa fa-leaf" aria-hidden="true"></i><?php echo get_cat_name(34); ?></span></a></p>
											<?php  $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );  ?>
											<figure class="thumbnail" style="background:url('<?php echo $image[0]; ?>');">
												<a href="<?php the_permalink(); ?>"><!-- <?php //the_post_thumbnail();?> --></a> 
											</figure>
											<div class="textwidget">
												<h2><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
												<div class="excerpt">
													<p><?php echo excerpt(20); ?></p>
												</div>
												<ul class="list_post_others">
													<?php 
													$cat6_related_post = array(
														'order' => 'DESC',
														'cat' => 34,
														'posts_per_page'=>3,
														'offset'=>1
													);
													$do_cat6_related_post = new WP_Query();
													$do_cat6_related_post->query($cat6_related_post);
													?>
													<?php 
													if(have_posts()) : 
														while($do_cat6_related_post->have_posts()) : $do_cat6_related_post->the_post();
															?>
															<li><a href="<?php the_permalink();?>"><?php the_title(); ?></a></li>
															<?php  
														endwhile;
													else:
													endif;
													?>
												</ul>
											</div>
										</div>
										<?php
									endwhile;
								else:
								endif;
								?>
							</div>
						</div>
					</div>
				</div><!-- hot_big_post_area -->
				<div class="focal_week">
					<div class="lb_focal_week">
						Tin tức hot
					</div>
					<?php 
					$arg_focal_week = array(
						'posts_per_page' => 5,
						'cat' => 7,
						'orderby' => 'post_date',
						'order' => 'DESC',
						'post_type' => 'post',
						'post_status' => 'publish'
					);
					$focal_week_query = new WP_Query();
					$focal_week_query->query($arg_focal_week);
					?>
					<ul>
						<?php if(have_posts()) : 
							while($focal_week_query->have_posts()) : $focal_week_query->the_post();
								?>
								<li class="item_focal_week pw">
									<figure class="thumbnail"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail();?></a> </figure>
									<h2><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
								</li>
								<?php  
							endwhile;
						else:
						endif;
						?>
					</ul>
				</div>
				<div class="cat_post_area_idx">
					<div class="row">
						<div class="col-md-6 col-sm-6 col-xs-12">
							<?php 
							$argsQuery = array(
								'posts_per_page'   => 3,
								'category__not_in' => array(6,7),
								'cat' => 2
							);?>
							<div class="common_diseases">
								<h2><a href="<?php echo get_category_link(2); ?>"><span><i class="fa fa-leaf" aria-hidden="true"></i><?php echo get_cat_name(2);  ?></span></a></h2>
								<div class="list_post_content">
									<?php
									$wp_query = new WP_Query(); $wp_query->query($argsQuery);
									if(have_posts()): 
										while($wp_query->have_posts()) : $wp_query->the_post(); 
											get_template_part('content');		
										endwhile;
									else:
									endif;
									?>
									<?php wp_reset_postdata();?>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<?php 
							$argsQuery = array(
								'posts_per_page'   => 3,
								'category__not_in' => array(4,6,7),
								'cat' => 3
							);?>
							<div class="common_diseases">
								<h2><a href="<?php echo get_category_link(3); ?>"><span><i class="fa fa-leaf" aria-hidden="true"></i><?php echo get_cat_name(3);  ?></span></a></h2>
								<div class="list_post_content">
									<?php
									$wp_query = new WP_Query(); $wp_query->query($argsQuery);
									if(have_posts()): 
										while($wp_query->have_posts()) : $wp_query->the_post(); 
											get_template_part('content');		
										endwhile;
									else:
									endif;
									?>
									<?php wp_reset_postdata();?>
								</div>
							</div>
						</div>
					</div>
					
				</div>
				<div class="">
					
				</div>
			</div><!-- content_left -->
		</div> 	<!-- container -->
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
</div>
</div>
<?php get_footer(); ?>
