<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

$container = get_theme_mod('understrap_container_type');
?>

<?php get_template_part('sidebar-templates/sidebar', 'footerfull'); ?>

<div class="wrapper" id="wrapper-footer">

	<div class="<?php echo esc_attr($container); ?>">

		<div class="row">
			<div class="col-md-12">

				<footer class="site-footer" id="colophon">

					<!-- Footer -->
					<footer id="custom-footer" class="text-center text-lg-start bg-light text-muted">
						<!-- Section: Social media -->
						<div class="d-flex justify-content-center justify-content-lg-between p-4">
							<!-- Left -->
							<div class="me-5 d-none d-lg-block">
								<span>Get connected with us on social networks:</span>
							</div>
							<!-- Left -->

							<!-- Right -->
							<div class="social">
								<a href="" class="me-4 text-reset">
									<i class="fa fa-facebook"></i>
								</a>
								<a href="" class="me-4 text-reset">
									<i class="fa fa-twitter"></i>
								</a>
								<a href="" class="me-4 text-reset">
									<i class="fa fa-instagram"></i>
								</a>
								<a href="" class="me-4 text-reset">
									<i class="fa fa-google"></i>
								</a>
								<a href="" class="me-4 text-reset">
									<i class="fa fa-linkedin"></i>
								</a>
								<a href="" class="me-4 text-reset">
									<i class="fa fa-github"></i>
								</a>
							</div>
							<!-- Right -->
						</div>
						<!-- Section: Social media -->

						<!-- Section: Links  -->
						<section class="">
							<div class="container text-center text-md-start mt-5">
								<!-- Grid row -->
								<div class="row mt-3">
									<!-- Grid column -->
									<div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
										<!-- Content -->
										<h6 class="text-uppercase fw-bold mb-4">
											<i class="fas fa-gem me-3"></i>Back To The 80s
										</h6>
										<p>
											Here you can use rows and columns to organize your footer content. Lorem ipsum
											dolor sit amet, consectetur adipisicing elit.
										</p>
									</div>
									<!-- Grid column -->

									<!-- Grid column -->
									<div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
										<!-- Links -->
										<h6 class="text-uppercase fw-bold mb-4">
											Products
										</h6>
										<p>
											<a href="#!" class="text-reset">Angular</a>
										</p>
										<p>
											<a href="#!" class="text-reset">React</a>
										</p>
										<p>
											<a href="#!" class="text-reset">Vue</a>
										</p>
										<p>
											<a href="#!" class="text-reset">Laravel</a>
										</p>
									</div>
									<!-- Grid column -->

									<!-- Grid column -->
									<div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
										<!-- Links -->
										<h6 class="text-uppercase fw-bold mb-4">
											Useful links
										</h6>
										<p>
											<a href="#!" class="text-reset">Pricing</a>
										</p>
										<p>
											<a href="#!" class="text-reset">Settings</a>
										</p>
										<p>
											<a href="#!" class="text-reset">Orders</a>
										</p>
										<p>
											<a href="#!" class="text-reset">Help</a>
										</p>
									</div>
									<!-- Grid column -->

									<!-- Grid column -->
									<div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
										<!-- Links -->
										<h6 class="text-uppercase fw-bold mb-4">
											Contact
										</h6>
										<p><i class="fa fa-map-marker"></i> New York, NY 10012, US</p>
										<p>
											<i class="fa fa-envelope"></i>
											info@example.com
										</p>
										<p><i class="fa fa-phone"></i> + 01 234 567 88</p>
										<p><i class="fa fa-print"></i> + 01 234 567 89</p>
									</div>
									<!-- Grid column -->
								</div>
								<!-- Grid row -->
							</div>
						</section>
						<!-- Section: Links  -->
					</footer>
					<!-- Footer -->

				</footer><!-- #colophon -->

			</div>
			<!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<div id="ctaModal" class="modal" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Join Our Newsletter</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<p>Sign Up Now!</p>
				<form>
					<div class="form-group">
						<label for="exampleInputEmail1">Email address</label>
						<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
						<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary">Sign Me Up</button>
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>

<?php wp_footer(); ?>

</body>

</html>