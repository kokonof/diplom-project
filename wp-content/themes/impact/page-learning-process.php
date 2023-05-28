
<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package impact
 */

get_header();

//	<section id="contact" class="contact">
//		<div class="container" data-aos="fade-up">
//
//			<div class="section-header">
//				<h2>Зворотній звязок</h2>
//				<p>Nulla dolorum nulla nesciunt rerum facere sed ut inventore quam porro nihil id ratione ea sunt quis dolorem dolore earum</p>
//			</div>
//
//			<div class="row gx-lg-0 gy-4">
//
//				<div class="col-lg-4">
//
//					<div class="info-container d-flex flex-column align-items-center justify-content-center">
//						<div class="info-item d-flex">
//							<i class="bi bi-geo-alt flex-shrink-0"></i>
//							<div>
//								<h4>Location:</h4>
//								<p>A108 Adam Street, New York, NY 535022</p>
//							</div>
//						</div><!-- End Info Item -->
//
//						<div class="info-item d-flex">
//							<i class="bi bi-envelope flex-shrink-0"></i>
//							<div>
//								<h4>Email:</h4>
//								<p>info@example.com</p>
//							</div>
//						</div><!-- End Info Item -->
//
//						<div class="info-item d-flex">
//							<i class="bi bi-phone flex-shrink-0"></i>
//							<div>
//								<h4>Call:</h4>
//								<p>+1 5589 55488 55</p>
//							</div>
//						</div><!-- End Info Item -->
//
//						<div class="info-item d-flex">
//							<i class="bi bi-clock flex-shrink-0"></i>
//							<div>
//								<h4>Open Hours:</h4>
//								<p>Mon-Sat: 11AM - 23PM</p>
//							</div>
//						</div><!-- End Info Item -->
//					</div>
//
//				</div>
//
//				<div class="col-lg-8">
//					<form action="forms/contact.php" method="post" role="form" class="php-email-form">
//						<div class="row">
//							<div class="col-md-6 form-group">
//								<input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
//							</div>
//							<div class="col-md-6 form-group mt-3 mt-md-0">
//								<input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
//							</div>
//						</div>
//						<div class="form-group mt-3">
//							<input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
//						</div>
//						<div class="form-group mt-3">
//							<textarea class="form-control" name="message" rows="7" placeholder="Message" required></textarea>
//						</div>
//						<div class="my-3">
//							<div class="loading">Loading</div>
//							<div class="error-message"></div>
//							<div class="sent-message">Your message has been sent. Thank you!</div>
//						</div>
//						<div class="text-center"><button type="submit">Send Message</button></div>
//					</form>
//				</div><!-- End Contact Form -->
//
//			</div>
//
//		</div>
//	</section><!-- End Contact Section -->

?>
	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page-learning-process' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
