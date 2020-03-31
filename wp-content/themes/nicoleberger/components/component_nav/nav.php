<?php 
	//Global Nav 
?>
<header class="component-header component" data-component-name="Nav">
	<div class="header-inner">
		<div class="hamburger-wrapper">
			<mark class="hamburger"></mark>
		</div>
		<section class="component-nav-modal">
			<ul>
				<?php
					echo Utils::render_template('config/theme-includes/menu.php', array(
						'menuLocation' => 'primary',
					));
				?>
			</ul>
		</section>
		<a href="/" class="logo-wrapper">
			<?php 
				$customLogoID = get_theme_mod( 'custom_logo' );
				$customLogoURL = wp_get_attachment_image_url( $customLogoID , 'full' );
				// NOTE: Using SVG instead of the editor setting because it doesn't support SVG uploads
			?>
			<img src="<?= get_template_directory_uri() ?>/../nicoleberger/dist/assets/images/NicoleBerger-logo.svg" class="nav-logo" alt="<?= bloginfo('name');?>" title="<?= bloginfo('name');?>" />
		</a>
		<a href="https://www.instagram.com/officialnicoleberger" target="_blank" class="icon-instagram"><img src="<?= get_template_directory_uri() ?>/../nicoleberger/dist/assets/images/icon_Instagram.png"></a>
		<a href="#togglerepresentation" target="_blank" class="icon-representation"><img src="<?= get_template_directory_uri() ?>/../nicoleberger/dist/assets/images/Representation-Positive.png"></a>
	</div>
</header>
<aside class="component-representation component" data-component-name="Representation">
	<div class="representation-container">
		<h2>
			<a href="#togglerepresentation">Representation</a>
		</h2>
		<?php
			if (have_rows('representation_groups', 'options')):
				?>
				<ul>
					<?php
						while (have_rows('representation_groups', 'options')): the_row();
					?>
					<li>
						<h3><?php the_sub_field('representation_group_title'); ?></h3>
						<?php
							if (have_rows('representation_group_text', 'options')):
								while (have_rows('representation_group_text', 'options')): the_row();
									?>
									<p>
										<?php the_sub_field('representation_group_text_value'); ?>
									</p>
									<?php
								endwhile;
							endif;
						?>
					</li>
					<?php
						endwhile;
						// Default is 'primary' nav. 
						// To use another nav, create one in /config/theme-configs/register-nav-menus.php and change variable below.
						// echo Utils::render_template('config/theme-includes/menu.php', array(
						// 	'menuLocation' => 'representation',
						// ));
					?>
				</ul>
				<?php
			endif;
		?>
	</div>
</aside>
<div class="component-video-modal">
	<a href="#close" class="video-close">
		<img src="/wp-content/themes/nicoleberger/dist/assets/images/x.svg">
	</a>
	<iframe src=""></iframe>
</div>
