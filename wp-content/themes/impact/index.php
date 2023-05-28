<?php echo get_header();  ?>
<main id="main">
    <div class="breadcrumbs">
        <div class="page-header d-flex align-items-center" style="background-image: url('');">
            <div class="container position-relative">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h2>Blog</h2>
                        <p>Odio et unde deleniti. Deserunt numquam exercitationem. Sit quaerat ipsum dolorem.</p>
                    </div>
                </div>
            </div>
        </div>
        <nav>
            <div class="container">
                <ol>
                    <li><a href="index.html">Home</a></li>
                    <li>Blog</li>
                </ol>
            </div>
        </nav>
    </div>
    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">
            <div class="row gy-4 posts-list">
	            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <div class="col-xl-4 col-md-6">
                        <article>
                            <div class="post-img">
	                            <?php the_post_thumbnail('blogs_thumb') ?>
                            </div>
                            <p class="post-category">
                                <?php
                                $categories = '';
                                foreach (get_the_category() as $category) {
	                                $categories .= $category->name .', ';
                                }
                                echo substr($categories,0,-2);?>
                            </p>

                            <h2 class="title">
                                <a href="<?php the_permalink(); ?>"><?php   the_title(); ?></a>
                            </h2>

                            <div class="d-flex align-items-center">
                                <img src="<?php echo get_avatar_url( $GLOBALS['current_user'], array( 'size' => 48, 'default'=>'wavatar', ) ); ?>" alt="" class="img-fluid post-author-img flex-shrink-0">
                                <div class="post-meta">
                                    <p class="post-author-list"><?php the_author(); ?></p>
                                    <p class="post-date">
                                        <time datetime=""><?php the_date(); ?></time>
                                    </p>
                                </div>
                            </div>

                        </article>
                    </div>
	            <?php endwhile; ?>
		            <div class="pagin">
			            <?php the_posts_pagination([
				            'prev_next'    => true,
				            'prev_text'    => __('« Попередня'),
				            'next_text'    => __('Наступна »'),
				            'type'         => 'list',
			            ]);?>
                    </div>
	            <?php else: ?>
                    <p>Записів поки що немає...</p>
	            <?php endif; ?>
            </div>
        </div>
    </section>

</main>
<?php echo get_footer() ?>
