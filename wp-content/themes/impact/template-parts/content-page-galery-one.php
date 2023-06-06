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
   <?php the_content(); ?>
        </div>

        <div class="row justify-content-between gy-4 mt-4">

            <div class="col-lg-8">
                <div class="portfolio-description">
                    <h2>Рух – це здорово!</h2>
                    <p>
                        Учні пришкільного табору «Краплинка» долучилися до Всеукраїнського спортивно-оздоровчого заходу
                        «Рух – це здорово!» та провели день спорту.

                    </p>
                    <p>
                        Під час якого було проведені різноманітні спортивні естафети.
                    </p>



                </div>
            </div>

            <div class="col-lg-3">
                <div class="portfolio-info">
                    <h3>Gallery  information</h3>
                    <ul>
                        <li><strong>Category</strong> <span>Sport</span></li>
                        <li><strong>Date</strong> <span>01 March, 2020</span></li>
                        <li><a href="#" class="btn-visit align-self-start">Visit Website</a></li>
                    </ul>
                </div>
            </div>

        </div>

    </div>
</section>
