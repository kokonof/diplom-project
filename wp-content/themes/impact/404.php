<?php
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
                        <li><a href="index.html">Головна</a></li>
                        <li>Внутрішння сторінка</li>
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
                                <h3 class="sidebar-title">Пошук</h3>
                                <?php get_search_form();?>
                           </div>
                           <div class="sidebar-item categories">
                               <h3 class="sidebar-title"><?php esc_html_e( 'Категорія', 'impact' ); ?></h3>
                               <ul class="mt-3">
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
                                           <?php echo get_the_post_thumbnail($recent["ID"], array( '', 60))?>
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
<?php
get_footer();


