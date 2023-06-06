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

        </div>

        <div class="row justify-content-between gy-4 mt-4">

            <div class="col-lg-8">
	            <?php the_content(); ?>
            </div>

            <div class="col-lg-3">
                <div class="portfolio-info">
                    <h3>Де козак, там і слава</h3>
                    <ul>
                        <li><strong>Категорії</strong> <span>Життя школи, Фотоальбом</span></li>
                        <li><strong>Дата</strong> <span><?php the_date() ?></span></li>
<!--                        <li><a href="#" class="btn-visit align-self-start">Visit Website</a></li>-->
                    </ul>
                </div>
            </div>

        </div>

    </div>
</section>
