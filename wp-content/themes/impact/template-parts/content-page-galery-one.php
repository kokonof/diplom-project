<?php

if ( get_edit_post_link() ) : ?>

	<?php
	edit_post_link(
		sprintf(
			wp_kses(
			/* translators: %s: Name of current post. Only visible to screen readers */
				__( 'Edit <span class="">%s</span>', 'impact' ),
				array(
					'span' => array(
						'class' => array(),
					),
				)
			),
			wp_kses_post( get_the_title() )
		),
		'<span class="btn btn-info">',
		'</span>'
	);
	?>
<?php endif; ?>
<section id="portfolio-details-<?php the_ID(); ?>" class="portfolio-details">
    <div class="container aos-init aos-animate" data-aos="fade-up">
        <h2><?php the_title( '<h2>', '</h2>' ); ?></h2>
        <div class="position-relative h-100">
            <div class="slides-1 portfolio-details-slider swiper swiper-initialized swiper-horizontal swiper-pointer-events">
                <div class="swiper-wrapper align-items-center" id="swiper-wrapper-fc361029101089ba45d" aria-live="off" style="transform: translate3d(-6480px, 0px, 0px); transition-duration: 600ms;"><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev" data-swiper-slide-index="0" role="group" aria-label="1 / 4">
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/portfolio/app-1.jpg" alt="">
                    </div><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="1" role="group" aria-label="2 / 4">
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/portfolio/product-1.jpg" alt="">
                    </div><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next" data-swiper-slide-index="2" role="group" aria-label="3 / 4">
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/portfolio/branding-1.jpg" alt="">
                    </div><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="3" role="group" aria-label="4 / 4">
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/portfolio/books-1.jpg" alt="">
                    </div>

                    <div class="swiper-slide swiper-slide-prev" data-swiper-slide-index="0" role="group" aria-label="1 / 4">
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/portfolio/app-1.jpg" alt="">
                    </div>

                    <div class="swiper-slide swiper-slide-active" data-swiper-slide-index="1" role="group" aria-label="2 / 4">
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/portfolio/product-1.jpg" alt="">
                    </div>

                    <div class="swiper-slide swiper-slide-next" data-swiper-slide-index="2" role="group" aria-label="3 / 4">
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/portfolio/branding-1.jpg" alt="">
                    </div>

                    <div class="swiper-slide" data-swiper-slide-index="3" role="group" aria-label="4 / 4">
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/portfolio/books-1.jpg" alt="">
                    </div>

                    <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev" data-swiper-slide-index="0" role="group" aria-label="1 / 4">
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/portfolio/app-1.jpg" alt="">
                    </div><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="1" role="group" aria-label="2 / 4">
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/portfolio/product-1.jpg" alt="">
                    </div><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next" data-swiper-slide-index="2" role="group" aria-label="3 / 4">
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/portfolio/branding-1.jpg" alt="">
                    </div><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="3" role="group" aria-label="4 / 4">
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/portfolio/books-1.jpg" alt="">
                    </div></div>
                <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal"><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 1"></span><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 2" aria-current="true"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 3"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 4"></span></div>
                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
            <div class="swiper-button-prev" tabindex="0" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-fc361029101089ba45d"></div>
            <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-fc361029101089ba45d"></div>

        </div>

        <div class="row justify-content-between gy-4 mt-4">

            <div class="col-lg-8">
                <div class="portfolio-description">
                    <h2>This is an example of portfolio detail</h2>
                    <p>
                        Autem ipsum nam porro corporis rerum. Quis eos dolorem eos itaque inventore commodi labore quia quia. Exercitationem repudiandae officiis neque suscipit non officia eaque itaque enim. Voluptatem officia accusantium nesciunt est omnis tempora consectetur dignissimos. Sequi nulla at esse enim cum deserunt eius.
                    </p>
                    <p>
                        Amet consequatur qui dolore veniam voluptatem voluptatem sit. Non aspernatur atque natus ut cum nam et. Praesentium error dolores rerum minus sequi quia veritatis eum. Eos et doloribus doloremque nesciunt molestiae laboriosam.
                    </p>

                    <div class="testimonial-item">
                        <p>
                            <i class="bi bi-quote quote-icon-left"></i>
                            Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                            <i class="bi bi-quote quote-icon-right"></i>
                        </p>
                        <div>
                            <img src="<?php echo get_template_directory_uri();?>/assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                            <h3>Sara Wilsson</h3>
                            <h4>Designer</h4>
                        </div>
                    </div>

                    <p>
                        Impedit ipsum quae et aliquid doloribus et voluptatem quasi. Perspiciatis occaecati earum et magnam animi. Quibusdam non qui ea vitae suscipit vitae sunt. Repudiandae incidunt cumque minus deserunt assumenda tempore. Delectus voluptas necessitatibus est.

                    </p><p>
                        Sunt voluptatum sapiente facilis quo odio aut ipsum repellat debitis. Molestiae et autem libero. Explicabo et quod necessitatibus similique quis dolor eum. Numquam eaque praesentium rem et qui nesciunt.
                    </p>

                </div>
            </div>

            <div class="col-lg-3">
                <div class="portfolio-info">
                    <h3>Project information</h3>
                    <ul>
                        <li><strong>Category</strong> <span>Web design</span></li>
                        <li><strong>Client</strong> <span>ASU Company</span></li>
                        <li><strong>Project date</strong> <span>01 March, 2020</span></li>
                        <li><strong>Project URL</strong> <a href="#">www.example.com</a></li>
                        <li><a href="#" class="btn-visit align-self-start">Visit Website</a></li>
                    </ul>
                </div>
            </div>

        </div>

    </div>
</section>
