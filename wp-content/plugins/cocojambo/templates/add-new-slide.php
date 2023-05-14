<div class="wrap">
	<h2>
		<?php _e('Set Slide','cocojambo'); ?>
	</h2>
	<p><?php  /** @var Cocojambo_Admin $posts */
		echo __( 'Number of articles: ', 'wfmpanel' ) . $posts->found_posts ?></p>

	<!-- Pagination -->
	<div class="pagination">
		<?php
		$big = 999999999; // need an unlikely integer

		/** @var int $page */
		echo paginate_links( array(
			'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
			'format' => '?paged=%#%',
			'current' => $page,
			'total' => $posts->max_num_pages,
			'prev_text' => '&laquo;',
			'next_text' => '&raquo;',
			'mid_size' => 5
		) );
		?>
	</div>
	<!-- Pagination -->
	<table class="wp-list-table widefat fixed striped table-view-list posts">
		<thead>
		<tr>
			<th class="manage-column column-title column-primary"
			    style="width: 50%;"><?php _e( 'Title', 'cocojambo' ); ?>
			</th>
			<th class="manage-column column-categories" style="width: 50%;">
				<?php _e( 'Slide', 'cocojambo' ); ?>
			</th>
		</tr>
		</thead>
		<tbody>

		<?php
		if ( $posts->have_posts() ) : while ( $posts->have_posts() ) : $posts->the_post(); ?>
			<tr>
				<td class="title column-title has-row-actions column-primary page-title"
				    data-colname="<?php _e( 'Title', 'cocojambo' ); ?>">
					<a href="<?php the_permalink(); ?>"><?php the_title() ?></a>
					<button type="button" class="toggle-row"><span
							class="screen-reader-text"><?php _e( 'Show more details', 'cocojambo' ); ?></span>
					</button>
				</td>
				<td class="column-slides" data-colname="<?php _e( 'Slides', 'cocojambo' ); ?>">
					<select name="" id="">
						<option value="">Lorem ipsum dolor sit amet.</option>
						<option value="">Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.</option>
						<option value="">Lorem ipsum dolor sit amet.</option>
					</select>
				</td>
			</tr>
		<?php endwhile; else : ?>
			<p><?php _e( 'No entries found', 'cocojambo' ) ?></p>
		<?php endif; ?>

		</tbody>
	</table>
	<!-- Pagination -->
	<div class="pagination">
		<?php
		$big = 999999999; // need an unlikely integer

		echo paginate_links( array(
			'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
			'format' => '?paged=%#%',
			'current' => $page,
			'total' => $posts->max_num_pages,
			'prev_text' => '&laquo;',
			'next_text' => '&raquo;',
			'mid_size' => 5
		) );
		?>
	</div>
	<!-- Pagination -->
</div>