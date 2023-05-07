<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo wp_get_document_title(); ?></title>
	<?php wp_head(); ?>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body <?php body_class();?>>
	<header class="">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse"
			        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
			        aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<?php the_custom_logo();?>
				<?php wp_nav_menu( [
					'theme_location'  => 'header_menu',
					'container'       => '',
//					'container_class' => 'collapse navbar-collapse',
//					'container_id'    => 'navbarSupportedContent',
					'menu_class'      => 'navbar-nav me-auto mb-2 mb-lg-0',
					'walker'          => new Cocojambo_Walker
				] ); ?>

				<p class="header-phone <?php  if (false === get_theme_mod('cocojambo_show_site_phone'))  echo ' hidden-header-phone'; ?>">
					<span> <?php echo __('Phone:', 'cocojambo') ?> <?php echo  get_theme_mod('cocojambo_site_phone')?> </span> </p>
				<form class="d-flex">
					<input class="form-control me-2" type="search" placeholder="<?php echo __('Search', 'cocojambo') ?>" aria-label="Search">
					<button class="btn btn-outline-success" type="submit"><?php echo __('Search', 'cocojambo') ?></button>
				</form>
					<div class="dropdown text-end">
						<a href="#" class="d-block link-dark text-decoration-none dropdown-toggle"
						   data-bs-toggle="dropdown"
						   aria-expanded="false">
							<img src="https://github.com/mdo.png" alt="mdo" width="32" height="32"
							     class="rounded-circle">
						</a>
						<ul class="dropdown-menu text-small">
							<li><a class="dropdown-item" href="#"><?php echo __('New project', 'cocojambo') ?></a></li>
							<li><a class="dropdown-item" href="#">Settings</a></li>
							<li><a class="dropdown-item" href="#">Profile</a></li>
							<li>
								<hr class="dropdown-divider">
							</li>
							<li><a class="dropdown-item" href="#">Sign out</a></li>
						</ul>
					</div>

			</div>


		</nav>
	</header>
<div class="b-example-divider"></div>
