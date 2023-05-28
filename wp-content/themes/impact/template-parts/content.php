<article id="post-<?php the_ID(); ?>">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
        <div class="page-header d-flex align-items-center" style="background-image: url("<?php echo get_template_directory_uri();?>/assets/img/blog/blog-1.jpg");">
        <div class="container position-relative">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-6 text-center">
                    <h2>Blog Details</h2>
                    <p>Odio et unde deleniti. Deserunt numquam exercitationem. Officiis quo odio sint voluptas consequatur ut a odio voluptatem. Sit dolorum debitis veritatis natus dolores. Quasi ratione sint. Sit quaerat ipsum dolorem.</p>
                </div>
            </div>
        </div>
    </div>
    <nav>
        <div class="container">
            <ol>
                <li><a href="#">Home</a></li>
                <li><?php echo the_title()?></li>
            </ol>
        </div>
    </nav>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Blog Details Section ======= -->
    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">

            <div class="row g-5">

                <div class="col-lg-8">

                    <article class="blog-details">

                        <div class="post-img">
	                        <?php the_post_thumbnail(); ?>
                        </div>

                        <h2 class="title"><?php echo the_title()?></h2>

                        <div class="meta-top">
                            <ul>
                                <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) )?>"><?php esc_html( the_author() ) ?></a></li>
                                <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-details.html"><time datetime="<?php echo esc_html( get_the_date() );?>"><?php echo esc_html( get_the_date() );?></time></a></li>
                                <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-details.html">12 Comments</a></li>
                            </ul>
                        </div><!-- End meta top -->

                        <div class="content">
<!--	                        --><?php
	                        the_content(
		                        sprintf(
			                        wp_kses(
			                        /* translators: %s: Name of current post. Only visible to screen readers */
				                        __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'impact' ),
				                        array(
					                        'span' => array(
						                        'class' => array(),
					                        ),
				                        )
			                        ),
			                        wp_kses_post( get_the_title() )
		                        )
	                        );

	                        wp_link_pages(
		                        array(
			                        'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'impact' ),
			                        'after'  => '</div>',
		                        )
	                        );
//	                        ?>

                        </div><!-- End post content -->

                        <div class="meta-bottom">
                            <i class="bi bi-folder"></i>
                            <?php echo get_the_category_list(', ')?> &nbsp;&nbsp;
                            <i class="bi bi-tags"></i>
	                        <?php echo get_the_tag_list('', ', ')?>
                        </div><!-- End meta bottom -->

                    </article><!-- End blog post -->

                    <div class="post-author d-flex align-items-center">
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/blog/blog-author.jpg" class="rounded-circle flex-shrink-0" alt="">
                        <div>
                            <h4><?php esc_html( the_author() ) ?></h4>
                            <div class="social-links">
                                <a href="https://twitters.com/#"><i class="bi bi-twitter"></i></a>
                                <a href="https://facebook.com/#"><i class="bi bi-facebook"></i></a>
                                <a href="https://instagram.com/#"><i class="biu bi-instagram"></i></a>
                            </div>
                            <p>
                                Quas repellat voluptatem officia numquam sint aspernatur voluptas. Esse et accusantium ut unde voluptas.
                            </p>
                        </div>
                    </div><!-- End post author -->

                    <div class="comments">

                        <h4 class="comments-count">
	                        <?php
	                        $impact_comment_count = get_comments_number();
	                        if ( '1' === $impact_comment_count ) {
		                        printf(
		                        /* translators: 1: title. */
			                        esc_html__( 'One thought on &ldquo;%1$s&rdquo;', 'impact' ),
			                        '<span>' . wp_kses_post( get_the_title() ) . '</span>'
		                        );
	                        } else {
		                        printf(
		                        /* translators: 1: comment count number, 2: title. */
			                        esc_html( _nx( '%1$s thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', $impact_comment_count, 'comments title', 'impact' ) ),
			                        number_format_i18n( $impact_comment_count ), // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
			                        '<span>' . wp_kses_post( get_the_title() ) . '</span>'
		                        );
	                        }
	                        ?>
                        </h4>

                        <?php
                        // If comments are open or we have at least one comment, load up the comment template.
                        if ( comments_open() || get_comments_number() ) :
	                        comments_template();
                        endif;

                        ?>
                    </div><!-- End blog comments -->

                </div>

                <div class="col-lg-4">

                    <div class="sidebar">

                        <div class="sidebar-item search-form">
                            <h3 class="sidebar-title">Search</h3>
                            <form action="" class="mt-3">
                                <input type="text">
                                <button type="submit"><i class="bi bi-search"></i></button>
                            </form>
                        </div><!-- End sidebar search formn-->

                        <div class="sidebar-item categories">
                            <h3 class="sidebar-title">Categories</h3>
                            <ul class="mt-3">
                                <li><a href="#">General <span>(25)</span></a></li>
                                <li><a href="#">Lifestyle <span>(12)</span></a></li>
                                <li><a href="#">Travel <span>(5)</span></a></li>
                                <li><a href="#">Design <span>(22)</span></a></li>
                                <li><a href="#">Creative <span>(8)</span></a></li>
                                <li><a href="#">Educaion <span>(14)</span></a></li>
                            </ul>
                        </div><!-- End sidebar categories-->

                        <div class="sidebar-item recent-posts">
                            <h3 class="sidebar-title">Recent Posts</h3>

                            <div class="mt-3">

                                <div class="post-item mt-3">
                                    <img src="<?php echo get_template_directory_uri();?>/assets/img/blog/blog-recent-1.jpg" alt="">
                                    <div>
                                        <h4><a href="blog-details.html">Nihil blanditiis at in nihil autem</a></h4>
                                        <time datetime="2020-01-01">Jan 1, 2020</time>
                                    </div>
                                </div><!-- End recent post item-->

                                <div class="post-item">
                                    <img src="<?php echo get_template_directory_uri();?>/assets/img/blog/blog-recent-2.jpg" alt="">
                                    <div>
                                        <h4><a href="blog-details.html">Quidem autem et impedit</a></h4>
                                        <time datetime="2020-01-01">Jan 1, 2020</time>
                                    </div>
                                </div><!-- End recent post item-->

                                <div class="post-item">
                                    <img src="<?php echo get_template_directory_uri();?>/assets/img/blog/blog-recent-3.jpg" alt="">
                                    <div>
                                        <h4><a href="blog-details.html">Id quia et et ut maxime similique occaecati ut</a></h4>
                                        <time datetime="2020-01-01">Jan 1, 2020</time>
                                    </div>
                                </div><!-- End recent post item-->

                                <div class="post-item">
                                    <img src="<?php echo get_template_directory_uri();?>/assets/img/blog/blog-recent-4.jpg" alt="">
                                    <div>
                                        <h4><a href="blog-details.html">Laborum corporis quo dara net para</a></h4>
                                        <time datetime="2020-01-01">Jan 1, 2020</time>
                                    </div>
                                </div><!-- End recent post item-->

                                <div class="post-item">
                                    <img src="<?php echo get_template_directory_uri();?>/assets/img/blog/blog-recent-5.jpg" alt="">
                                    <div>
                                        <h4><a href="blog-details.html">Et dolores corrupti quae illo quod dolor</a></h4>
                                        <time datetime="2020-01-01">Jan 1, 2020</time>
                                    </div>
                                </div><!-- End recent post item-->

                            </div>

                        </div><!-- End sidebar recent posts-->

                        <div class="sidebar-item tags">
                            <h3 class="sidebar-title">Tags</h3>
                            <ul class="mt-3">
                                <li><a href="#">App</a></li>
                                <li><a href="#">IT</a></li>
                                <li><a href="#">Business</a></li>
                                <li><a href="#">Mac</a></li>
                                <li><a href="#">Design</a></li>
                                <li><a href="#">Office</a></li>
                                <li><a href="#">Creative</a></li>
                                <li><a href="#">Studio</a></li>
                                <li><a href="#">Smart</a></li>
                                <li><a href="#">Tips</a></li>
                                <li><a href="#">Marketing</a></li>
                            </ul>
                        </div><!-- End sidebar tags-->

                    </div><!-- End Blog Sidebar -->

                </div>
            </div>

        </div>
    </section><!-- End Blog Details Section -->

</article><!-- End #main -->
