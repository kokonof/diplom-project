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
<!-- ======= Portfolio Section ======= -->
<section id="portfolio-<?php the_ID(); ?>" class="portfolio sections-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-header">
            <h2><?php the_title( '<h2>', '</h2>' ); ?></h2>
            <p>Quam sed id excepturi ccusantium dolorem ut quis dolores nisi llum nostrum enim velit qui ut et autem uia reprehenderit sunt deleniti</p>
        </div>

        <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order" data-aos="fade-up" data-aos-delay="100">

            <div>
                <ul class="portfolio-flters">
                    <li data-filter="*" class="filter-active">Всі</li>
                    <li data-filter=".filter-app">Шкільне життя</li>
                    <li data-filter=".filter-product">Product</li>
                    <li data-filter=".filter-branding">Branding</li>
                    <li data-filter=".filter-books">Books</li>
                </ul><!-- End Portfolio Filters -->
            </div>

            <div class="row gy-4 portfolio-container">

                <div class="col-xl-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <a href="<?php echo get_option('home'); ?>/wp-content/uploads/2023/06/1570865800_img_20191010_120153.jpg"
                           data-gallery="portfolio-gallery-app" class="glightbox">
                            <img src="<?php echo get_option('home'); ?>/wp-content/uploads/2023/06/1570865800_img_20191010_120153.jpg"
                                 class="img-fluid" alt=""></a>
                        <div class="portfolio-info">
                            <h4><a href="<?php echo get_option('home'); ?>/galery-one/" title="More Details">Де козак, там і слава</a></h4>
                            <p>Фестиваль козацької пісні "Де козак, там і слава"</p>
                        </div>
                    </div>
                </div><!-- End Portfolio Item -->

                <div class="col-xl-4 col-md-6 portfolio-item filter-product">
                    <div class="portfolio-wrap">
                        <a href="<?php echo get_template_directory_uri();?>/assets/img/portfolio/product-1.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="<?php echo get_template_directory_uri();?>/assets/img/portfolio/product-1.jpg" class="img-fluid" alt=""></a>
                        <div class="portfolio-info">
                            <h4><a href="portfolio-details.html" title="More Details">Product 1</a></h4>
                            <p>Lorem ipsum, dolor sit amet consectetur</p>
                        </div>
                    </div>
                </div><!-- End Portfolio Item -->

                <div class="col-xl-4 col-md-6 portfolio-item filter-branding">
                    <div class="portfolio-wrap">
                        <a href="<?php echo get_template_directory_uri();?>/assets/img/portfolio/branding-1.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="<?php echo get_template_directory_uri();?>/assets/img/portfolio/branding-1.jpg" class="img-fluid" alt=""></a>
                        <div class="portfolio-info">
                            <h4><a href="portfolio-details.html" title="More Details">Branding 1</a></h4>
                            <p>Lorem ipsum, dolor sit amet consectetur</p>
                        </div>
                    </div>
                </div><!-- End Portfolio Item -->

                <div class="col-xl-4 col-md-6 portfolio-item filter-books">
                    <div class="portfolio-wrap">
                        <a href="<?php echo get_template_directory_uri();?>/assets/img/portfolio/books-1.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="<?php echo get_template_directory_uri();?>/assets/img/portfolio/books-1.jpg" class="img-fluid" alt=""></a>
                        <div class="portfolio-info">
                            <h4><a href="portfolio-details.html" title="More Details">Books 1</a></h4>
                            <p>Lorem ipsum, dolor sit amet consectetur</p>
                        </div>
                    </div>
                </div><!-- End Portfolio Item -->

            </div><!-- End Portfolio Container -->

        </div>

    </div>
</section><!-- End Portfolio Section -->
