<article id="post-<?php the_ID(); ?>">
    <div class="breadcrumbs">
        <div class="page-header d-flex align-items-center" style="background-image: url("<?php echo get_template_directory_uri();?>/assets/img/blog/blog-1.jpg");">
        <div class="container position-relative">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-6 text-center">
                    <h2>Деталі блогу</h2>
                    <p></p>
                </div>
            </div>
        </div>
    </div>
    <nav>
        <div class="container">
            <ol>
                <li><a href="#">Головна</a></li>
                <li><?php echo the_title()?></li>
            </ol>
        </div>
    </nav>
    </div>
    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">
            <div class="row g-5">
                <div class="col-lg-8">
                    <article class="blog-details">
                        <div class="post-img">
	                        <?php the_post_thumbnail('spec_thumb'); ?>
                        </div>
                        <h2 class="title"><?php echo the_title()?></h2>
                        <div class="meta-top">
                            <ul>
                                <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) )?>"><?php esc_html( the_author() ) ?></a></li>
                                <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-details.html"><time datetime="<?php echo esc_html( get_the_date() );?>"><?php echo esc_html( get_the_date() );?></time></a></li>
                                <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-details.html">12 Comments</a></li>
                            </ul>
                        </div>
                        <div class="content">
                            <?php the_content(
		                        sprintf(
			                        wp_kses(
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
	                        ); ?>
                        </div>
                        <div class="meta-bottom">
                            <i class="bi bi-folder"></i>
                            <?php echo get_the_category_list(', ')?> &nbsp;&nbsp;
                            <i class="bi bi-tags"></i>
	                        <?php echo get_the_tag_list('', ', ')?>
                        </div>
                    </article>
                    <div class="post-author d-flex align-items-center">
                        <img src="<?php echo get_avatar_url( $GLOBALS['current_user'], array( 'size' => 120, 'default'=>'wavatar', ) ); ?>" class="rounded-circle flex-shrink-0" alt="">
                        <div>
                            <h4><?php esc_html( the_author() ) ?></h4>
                            <div class="social-links">
                                <a href="https://twitters.com/#"><i class="bi bi-twitter"></i></a>
                                <a href="https://facebook.com/#"><i class="bi bi-facebook"></i></a>
                                <a href="https://instagram.com/#"><i class="biu bi-instagram"></i></a>
                            </div>
                            <p>
                                Вітаю вас на нашому шкільному сайті! Ми дуже раді вітати вас в нашій спільноті,
                                де навчання, розвиток та творчість займають центральне місце.
                            </p>
                        </div>
                    </div>
                    <div class="comments">
                        <h4 class="comments-count">
	                        <?php
	                        $impact_comment_count = get_comments_number();
	                        if ( '1' === $impact_comment_count ) {
		                        printf( esc_html__( 'One thought on &ldquo;%1$s&rdquo;', 'impact' ),
			                        '<span>' . wp_kses_post( get_the_title() ) . '</span>'
		                        );
	                        } else {
		                        printf( esc_html( _nx( '%1$s thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', $impact_comment_count, 'comments title', 'impact' ) ),
			                        number_format_i18n( $impact_comment_count ),
			                        '<span>' . wp_kses_post( get_the_title() ) . '</span>'
		                        );
	                        } ?>
                        </h4>
                        <?php if ( comments_open() || get_comments_number() ) :
	                        comments_template();
                        endif; ?>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="sidebar">
                        <div class="sidebar-item search-form">
                            <h3 class="sidebar-title">Пошук</h3>
			                <?php get_search_form();?>
                        </div>
                        <div class="sidebar-item categories">
                            <h3 class="sidebar-title"><?php esc_html_e( 'Categories', 'impact' ); ?></h3>
                            <ul class="mt-3">
				                <?php wp_list_categories(
					                array(
						                'orderby'    => 'count',
						                'order'      => 'DESC',
						                'show_count' => 1,
						                'title_li'   => '',
						                'number'     => 10,
					                )
				                ); ?>
                            </ul>
                        </div>
                        <div class="sidebar-item search-form">
                            <h3 class=" post-item sidebar-title">Архів</h3>
                            <select class="form-select" name="archive-dropdown" onchange="document.location.href=this.options[this.selectedIndex].value;">
                                <option value=""><?php echo esc_attr( __( 'Select Month' ) ); ?></option>
				                <?php wp_get_archives( 'type=monthly&format=option&show_post_count=1' ); ?>
                            </select>
                        </div>
		                <?php
		                $tags = get_tags();
		                $html = '  <div class="sidebar-item tags"><h3 class="sidebar-title">Tags</h3><ul class="mt-3">';
		                foreach ( $tags as $tag ) {
			                $tag_link = get_tag_link( $tag->term_id );
			                $html .= "<li><a href='{$tag_link}' title='{$tag->name} Tag' class='{$tag->slug}'>";
			                $html .= "{$tag->name}</a></li>";
		                }
		                $html .= '</ul></div>';
		                echo $html;
		                ?>
                        <div class="sidebar-item recent-posts">
                            <h3 class="sidebar-title">
                                Останні повідомлення</h3>
                            <div class="mt-3">
				                <?php $recent_posts = wp_get_recent_posts( array( 'numberposts' => '5' ) );
				                foreach( $recent_posts as $recent ){ ?>
                                    <div class="post-item post-item-bottom">
						                <?php echo get_the_post_thumbnail($recent["ID"], 'recent_thumb')?>
                                        <div>
                                            <h4><a href="http://wordpress/<?php echo $recent["post_name"]?>"><?php echo $recent["post_title"]?></a></h4>
                                            <time datetime="<?php echo $recent["post_date"]?>"><?php echo $recent["post_date"]?></time>
                                        </div>
                                    </div>
				                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</article>
