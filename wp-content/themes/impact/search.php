<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package impact
 */

get_header();
?>

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
                    <?php if ( have_posts() ) : ?>
                        <header class="page-header">
                            <h1 class="page-title">
                                <?php
                                printf( esc_html__( 'Search Results for: %s', 'impact' ), '<span>' . get_search_query() . '</span>' );
                                ?>
                            </h1>
                        </header>
                        <?php
                        while ( have_posts() ) :
                            the_post();
                            get_template_part( 'template-parts/content', 'search' );
                        endwhile;
                        ?>

                        <div class="pagin">
                            <?php the_posts_pagination([
                                'prev_next'    => true,
                                'prev_text'    => __('« Попередня'),
                                'next_text'    => __('Наступна »'),
                                'type'         => 'list',
                            ]);?>
                        </div>
                        <?php else :
                            get_template_part( 'template-parts/content', 'none' );
                        endif; ?>
                </div>
            </div>
        </section>
	</main>

<?php
get_sidebar();
get_footer();


