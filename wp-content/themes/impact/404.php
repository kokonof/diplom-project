<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package impact
 */

get_header();
?>

	<main id="primary">

        <div class="breadcrumbs">
            <div class="page-header d-flex align-items-center" style="background-image: url('');">
                <div class="container position-relative">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-6 text-center">
                            <h2><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'impact' ); ?></h2>
                            <p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'impact' ); ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <nav>
                <div class="container">
                    <ol>
                        <li><a href="index.html">Home</a></li>
                        <li>Sample Inner Page</li>
                    </ol>
                </div>
            </nav>
        </div>
    <section class="blog">
       <div class="container" data-aos="fade-up">
           <div class="row">
               <div class="col-md-8">
                   <p>
                       You can duplicate this sample page and create any number of inner pages you like!
                   </p>
               </div>
               <div class="col-md-4">
                   <div class="sidebar">
                       <div class="sidebar-item search-form">
                            <h3 class="sidebar-title">Search</h3>
		                    <?php get_search_form();?>
                       </div>

                    <?php the_widget( 'WP_Widget_Recent_Posts' ); ?>

                   <div class="">
                       <h2 class="widget-title"><?php esc_html_e( 'Most Used Categories', 'impact' ); ?></h2>
                       <ul>
				           <?php
				           wp_list_categories(
					           array(
						           'orderby'    => 'count',
						           'order'      => 'DESC',
						           'show_count' => 1,
						           'title_li'   => '',
						           'number'     => 10,
					           )
				           );
				           ?>
                       </ul>
                   </div><!-- .widget -->

		           <?php
		           /* translators: %1$s: smiley */
		           $impact_archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'impact' ), convert_smilies( ':)' ) ) . '</p>';
		           the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$impact_archive_content" );

		           the_widget( 'WP_Widget_Tag_Cloud' );
		           ?>



                       <!-- End sidebar search formn-->

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


                       <div class="sidebar-item recent-posts">
                           <h3 class="sidebar-title">Recent Posts</h3>

                           <div class="mt-3">

                               <div class="post-item mt-3">
                                   <img src="http://wordpress/wp-content/themes/impact/assets/img/blog/blog-recent-1.jpg" alt="">
                                   <div>
                                       <h4><a href="blog-details.html">Nihil blanditiis at in nihil autem</a></h4>
                                       <time datetime="2020-01-01">Jan 1, 2020</time>
                                   </div>
                               </div><!-- End recent post item-->

                               <div class="post-item">
                                   <img src="http://wordpress/wp-content/themes/impact/assets/img/blog/blog-recent-2.jpg" alt="">
                                   <div>
                                       <h4><a href="blog-details.html">Quidem autem et impedit</a></h4>
                                       <time datetime="2020-01-01">Jan 1, 2020</time>
                                   </div>
                               </div><!-- End recent post item-->

                               <div class="post-item">
                                   <img src="http://wordpress/wp-content/themes/impact/assets/img/blog/blog-recent-3.jpg" alt="">
                                   <div>
                                       <h4><a href="blog-details.html">Id quia et et ut maxime similique occaecati ut</a></h4>
                                       <time datetime="2020-01-01">Jan 1, 2020</time>
                                   </div>
                               </div><!-- End recent post item-->

                               <div class="post-item">
                                   <img src="http://wordpress/wp-content/themes/impact/assets/img/blog/blog-recent-4.jpg" alt="">
                                   <div>
                                       <h4><a href="blog-details.html">Laborum corporis quo dara net para</a></h4>
                                       <time datetime="2020-01-01">Jan 1, 2020</time>
                                   </div>
                               </div><!-- End recent post item-->

                               <div class="post-item">
                                   <img src="http://wordpress/wp-content/themes/impact/assets/img/blog/blog-recent-5.jpg" alt="">
                                   <div>
                                       <h4><a href="blog-details.html">Et dolores corrupti quae illo quod dolor</a></h4>
                                       <time datetime="2020-01-01">Jan 1, 2020</time>
                                   </div>
                               </div><!-- End recent post item-->

                           </div>

                       </div><!-- End sidebar recent posts-->
                   </div>
               </div>
           </div>
       </div>
    </section>
<?php
get_footer();


