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


