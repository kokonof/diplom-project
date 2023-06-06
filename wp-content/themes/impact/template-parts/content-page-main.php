<!-- ======= Hero Section ======= -->
<section id="hero" class="hero">
	<div class="container position-relative">
		<div class="row gy-5" data-aos="fade-in">
			<div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
				<h2>Запрошуємо до <span>Школи!</span></h2>
				<p>Тут ви можете ознайомитися з сайтом і його пропозиціями для вас.</p>
				<div class="d-flex justify-content-center justify-content-lg-start">
					<a href="#box" class="btn-get-started">Познайомимось </a>
					<a href="https://www.youtube.com/watch?v=G76s0KgFEZ4" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Перегляньте відео</span></a>
				</div>
			</div>
			<div class="col-lg-6 order-1 order-lg-2">
				<img src="<?php echo get_template_directory_uri();?>/assets/img/hero-img.svg" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="100">
			</div>
		</div>
	</div>

	<div id="box" class="icon-boxes position-relative">
		<div class="container position-relative">
			<div class="row gy-4 mt-5">

				<div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
					<div class="icon-box">
						<div class="icon"><i class="bi bi-easel"></i></div>
						<h4 class="title"><a class="stretched-link">Lorem Ipsum</a></h4>
					</div>
				</div><!--End Icon Box -->

				<div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
					<div class="icon-box">
						<div class="icon"><i class="bi bi-gem"></i></div>
						<h4 class="title"><a class="stretched-link">Sed ut perspiciatis</a></h4>
					</div>
				</div><!--End Icon Box -->

				<div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
					<div class="icon-box">
						<div class="icon"><i class="bi bi-geo-alt"></i></div>
						<h4 class="title"><a class="stretched-link">Magni Dolores</a></h4>
					</div>
				</div><!--End Icon Box -->

				<div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="500">
					<div class="icon-box">
						<div class="icon"><i class="bi bi-command"></i></div>
						<h4 class="title"><a class="stretched-link">Nemo Enim</a></h4>
					</div>
				</div><!--End Icon Box -->

			</div>
		</div>
	</div>

	</div>
</section>
<!-- End Hero Section -->

<main id="main">

	<!-- ======= Call To Action Section ======= -->
	<section id="call-to-action" class="call-to-action">
		<div class="container text-center" data-aos="zoom-out" style="background: url('<?php echo get_template_directory_uri();?>/assets/img/cta-bg.jpg')">
			<a href="https://www.youtube.com/watch?v=G76s0KgFEZ4" class="glightbox play-btn"></a>
			<h3>Святкування дня Вишиванки</h3>
<!--			<p> </p>-->
<!--			<a class="cta-btn" href="#">Святкування дня Вишиванки</a>-->
		</div>
	</section><!-- End Call To Action Section -->

	<!-- ======= Our Team Section ======= -->
	<section id="team" class="team">
		<div class="container" data-aos="fade-up">

			<div class="section-header">
				<h2>Наші вчителі</h2>
				<p>Декілька вчителів з нашої великої дружньої команди</p>
			</div>

			<div class="row gy-4">

				<div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
					<div class="member">
						<img src="<?php echo get_template_directory_uri();?>/assets/img/team/team-1.jpg" class="img-fluid" alt="">
						<h4>Симоненко Руслан</h4>
						<span>Директор, Хімія</span>
					</div>
				</div><!-- End Team Member -->

				<div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
					<div class="member">
						<img src="<?php echo get_template_directory_uri();?>/assets/img/team/team-2.jpg" class="img-fluid" alt="">
						<h4>Ящук Катерина</h4>
						<span>Історія</span>
					</div>
				</div><!-- End Team Member -->

				<div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
					<div class="member">
						<img src="<?php echo get_template_directory_uri();?>/assets/img/team/team-3.jpg" class="img-fluid" alt="">
						<h4>Мірошник Віктор</h4>
						<span>Алгебра, Геометрія</span>
					</div>
				</div><!-- End Team Member -->

				<div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
					<div class="member">
						<img src="<?php echo get_template_directory_uri();?>/assets/img/team/team-4.jpg" class="img-fluid" alt="">
						<h4>Мартиненко Юлія</h4>
						<span>Фізика</span>
					</div>
				</div><!-- End Team Member -->

			</div>

		</div>
	</section>

	<section id="recent-posts" class="recent-posts sections-bg">
		<div class="container" data-aos="fade-up">

			<div class="section-header">
				<h2>Останні новини</h2>
			</div>

			<div class="row gy-4">
                <?php $recent_posts = wp_get_recent_posts( array( 'numberposts' => '3' ) );
                foreach( $recent_posts as $recent ){ ?>
                    <div class="col-xl-4 col-md-6">
                        <article>
                            <div class="post-img">
                                <?php echo get_the_post_thumbnail($recent["ID"], 'blogs_thumb')?>
                            </div>
                            <p class="post-category"> <?php
	                            $categories = '';
	                            foreach (get_the_category($recent["ID"]) as $category) {
		                            $categories .= $category->name .', ';
	                            }
	                            echo substr($categories,0,-2);?></p>
                            <h2 class="title">
                                <h4><a href="<?php echo get_option('home'); echo '/'. $recent["post_name"]?>"><?php echo $recent["post_title"]?></a></h4>
                            </h2>
                            <div class="d-flex align-items-center">
                                <img src=" <?php echo get_avatar_url( $GLOBALS['current_user'], array( 'size' => 60, 'default'=>'wavatar', ) ); ?>" alt="" class="img-fluid post-author-img flex-shrink-0">
                                <div class="post-meta">
                                    <p class="post-author"><?php esc_html( the_author() ) ?></p>
                                    <p class="post-date">
                                        <time datetime="2022-01-01"><?php echo $recent["post_date"]?></time>
                                    </p>
                                </div>
                            </div>
                        </article>
                    </div>
                <?php } ?>
			</div>
		</div>
	</section>
