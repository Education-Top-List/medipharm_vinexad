

<div class="scrolltop">

	<i class="fa fa-angle-up" aria-hidden="true"></i>	

</div>

<footer class="footer">

	<div class="container">

		<div class="row">

			<?php if(is_active_sidebar('footer1')) :?>

				<div class="footer-widget-area col-md-4">

					<?php dynamic_sidebar('footer1'); ?>

				</div>

			<?php endif ?>

			<?php if(is_active_sidebar('footer2')) :?>

				<div class="footer-widget-area  col-md-4">

					<?php dynamic_sidebar('footer2'); ?>

				</div>

			<?php endif ?>

			<?php if(is_active_sidebar('footer3')) :?>

				<div class="footer-widget-area  col-md-4">

					<?php dynamic_sidebar('footer3'); ?>

				</div>

			<?php endif ?>

		</div>

		<div class="copyright">

			<p>© 2018 Bản quyền thuộc về Xukoda</p>

		</div>

	</div>

</footer>

<?php wp_footer(); ?>

<!-- POPUP -->

<div class="fixed_show_popup">

	<div class="wrap_showp">

		<p>Tôi muốn hỏi</p><img src="<?php echo BASE_URL;?>/images/img_product.png" alt=""><p>Tôi muốn mua</p>

	</div>



</div>

<div class="popup popup_order">

	<div class="content_popup">

		<div class="wrap_content_p">

			<h1>Đặt mua sản phẩm</h1>

			<?php echo do_shortcode('[contact-form-7 id="198" title="Form đặt mua"]'); ?>

			<img src="<?php echo BASE_URL;?>/images/xukoda.png" alt="">

			<div class="close_popup"><i class="fa fa-times" aria-hidden="true" data-dismiss="modal"></i></div>

		</div>

	</div>

</div>

<div class="popup popup_question">

	<div class="content_popup">

		<div class="wrap_content_p">

			<h1>Hỏi đáp chuyên gia</h1>

			<?php echo do_shortcode('[contact-form-7 id="197" title="Form hỏi đáp chuyên gia"]'); ?>

			<img src="<?php echo BASE_URL;?>/images/chuyengia.jpg" alt="">

			<div class="close_popup"><i class="fa fa-times" aria-hidden="true" data-dismiss="modal"></i></div>

		</div>

	</div>

</div>

<!-- END POPUP -->



<!-- MESSENGER -->

<div class="messenger_fb">

	<a href="https://m.me/580614228948763" target="_blank">

		<img src="<?php echo BASE_URL;?>/images/messenger_icon.png" alt="">

	</a>

</div>

<script>      

	window.fbAsyncInit = function() {

		FB.init({

			appId      : '1953938748210615',

			xfbml      : true,

			version    : 'v2.6'

		});

	};



	(function(d, s, id){

		var js, fjs = d.getElementsByTagName(s)[0];

		if (d.getElementById(id)) {return;}

		js = d.createElement(s); js.id = id;

		js.src = "//connect.facebook.net/en_US/sdk.js";

		fjs.parentNode.insertBefore(js, fjs);

	}(document, 'script', 'facebook-jssdk'));      

</script>

<!-- END  MESSENGER -->



<?php get_template_part('order_fixedf'); ?>



<script src="<?php echo BASE_URL; ?>/js/wow.min.js"></script>

<script src="<?php echo BASE_URL; ?>/js/slick.js"></script>

<script src="<?php echo BASE_URL; ?>/js/custom.js"></script>



</body>

</html>





