<?php // Global Footer ?>

<section class="component-row-full component-footer component-row">
	<div class="flex-grid component-alignment-top component-row-wide padding-global-top-2x padding-global-bottom-2x padding-left-1x padding-right-1x padding-desktop-left-0x padding-desktop-right-0x">
		<div class="flex-desktop-3-12 flex-tablet-landscape-3-12 flex-tablet-portrait-3-12 flex-12-12 padding-bottom-2x padding-tablet-portrait-bottom-0x">
			<?php
				echo Utils::render_template('components/component_footer/footer-nav.php');
			?>
		</div>
		<div class="flex-desktop-1-12 flex-tablet-landscape-1-12 flex-tablet-portrait-1-12 flex-0-12"></div>
		<div class="flex-desktop-3-12 flex-tablet-landscape-3-12 flex-tablet-portrait-3-12 flex-12-12 padding-bottom-2x padding-tablet-portrait-bottom-0x">
			<?php
				//To make this into a share component, change componentType value to "share"
				// echo Utils::render_template('components/component_footer/footer-contact.php', array(
				// 	'displayTitle'	=> 'Contact us:'
				// ));
			?>			
		</div>
		<div class="flex-desktop-1-12 flex-tablet-landscape-1-12 flex-tablet-portrait-1-12 flex-0-12"></div>
		<div class="flex-desktop-4-12 flex-tablet-landscape-4-12 flex-tablet-portrait-4-12 flex-12-12">
			<?php
				//To make this into a share component, change componentType value to "share"
				// echo Utils::render_template('components/component_social-media/social-media.php', array(
				// 	"iconStyle" 	=> '',
				// 	"displayTitle"		=> 'Follow us:',
				// 	"displayTitleClass" => 'subheadline2 color-default-white ',
				// 	"alignment"			=> 'align-left',
				// 	"colorClass"		=> 'color-default-white'
				// ));
			?>
		</div>
	</div>
	<section 
		class="component-row component-background-center-center padding-top-4x padding-bottom-2x"
		data-section-id="section-778"
		data-logo-color="logo-color-dark"
		style="">
		<div class="flex-grid component-row-wide component-alignment-top">
			<section class="component-column flex-0-12 flex-tablet-landscape-2-12 component-background-center-center"></section>
			<section class="component-column flex-12-12 flex-tablet-landscape-10-12 component-background-center-center">
				<div class="component-representation-footer component">
					<?php

						if (have_rows('representation_groups', 'options')):
							?>
							<ul>
								<?php
									while (have_rows('representation_groups', 'options')): the_row();
										$pCount = count(get_sub_field('representation_group_text', 'options'));
										?>
										<li class="pCount<?= $pCount ?>">
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
			</section>
			<section class="component-column flex-12-12 component-background-center-center" data-section-id="section-557" style="">
				<div class="component-source component  padding-top-4x  padding-tablet-portrait-top-4x ">
					<a href="/privacypolicy" class="footer-link">Privacy policy</a> | &nbsp;&nbsp;
					<a href="https://attck.com/?utm_source=NicoleBerger&amp;utm_medium=Website&amp;utm_campaign=Footer%20Link" class="footer-link">Website by ATTCK</a>
				</div>
			</section>
		</div>
	</section>
	<div class="flex-grid component-row-wide padding-global-bottom-2x padding-left-1x padding-right-1x padding-desktop-left-0x padding-desktop-right-0x">
		<div class="flex-desktop-12-12 flex-tablet-landscape-12-12 flex-tablet-portrait-12-12 flex-12-12">
			<small class="align-center display-block"><?= get_field('footer_copyright', 'options');?></small>
		</div>
	</div>
</section>