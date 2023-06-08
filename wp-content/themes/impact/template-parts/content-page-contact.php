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
<article id="post-<?php the_ID(); ?>" class="contact">
    <div class="container" data-aos="fade-up">

        <div class="section-header">
            <?php the_title( '<h2>', '</h2>' ); ?>
            <p></p>
        </div>

        <div class="row gx-lg-0 gy-4">

            <div class="col-lg-4">

                <div class="info-container d-flex flex-column align-items-center justify-content-center">
                    <div class="info-item d-flex">
                        <i class="bi bi-geo-alt flex-shrink-0"></i>
                        <div>
                            <h4>Місцезнаходження:</h4>
                            <p>Вул центральна, с.Лідихів, Тернопільська обл</p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="info-item d-flex">
                        <i class="bi bi-envelope flex-shrink-0"></i>
                        <div>
                            <h4>Електрона пошта:</h4>
                            <p>lidyhiv_zosh@ukr.net</p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="info-item d-flex">
                        <i class="bi bi-phone flex-shrink-0"></i>
                        <div>
                            <h4>Телефон:</h4>
                            <p>+380 662 766 218</p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="info-item d-flex">
                        <i class="bi bi-clock flex-shrink-0"></i>
                        <div>
                            <h4>Години роботи:</h4>
                            <p>Пон-Пят: 08:00Год-17:00Год</p>
                        </div>
                    </div><!-- End Info Item -->
                </div>

            </div>

            <div class="col-lg-8">
                <form action="contact.php" method="post" role="form" class="php-email-form">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Ваше ім'я" required>
                        </div>
                        <div class="col-md-6 form-group mt-3 mt-md-0">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Ваша пошта" required>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Тема" required>
                    </div>
                    <div class="form-group mt-3">
                        <textarea class="form-control" name="message" rows="7" placeholder="Повідомлення" required></textarea>
                    </div>
                    <div class="my-3">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Ваше повідомлення було відправлене. Дякую!</div>
                    </div>
                    <div class="text-center"><button type="submit">Надіслати повідомлення</button></div>
                </form>
            </div><!-- End Contact Form -->

        </div>

    </div>
</article>
