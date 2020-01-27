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
				<li>
					<a href="/bio">Bio</a>
				</li>
				<li>
					<a href="/films">Notable films</a>
				</li>
				<li>
					<a href="/press">Press</a>
				</li>
				<li>
					<a href="/Press">Videos</a>
				</li>
				<li>
					<a href="/gallery">Gallery</a>
				</li>
			</ul>
		</section>
		<a href="/" class="logo-wrapper">
			<?php 
				$customLogoID = get_theme_mod( 'custom_logo' );
				$customLogoURL = wp_get_attachment_image_url( $customLogoID , 'full' );
			?>
			<img src="<?= $customLogoURL;?>" class="nav-logo" alt="<?= bloginfo('name');?>" title="<?= bloginfo('name');?>" />
		</a>
		<nav class="main-nav">
			<ul class="menu-items">
				<?php
					// Default is 'primary' nav. 
					// To use another nav, create one in /config/theme-configs/register-nav-menus.php and change variable below.
					echo Utils::render_template('config/theme-includes/menu.php', array(
						'menuLocation' => 'primary',
					));
				?>
			</ul>
		</nav>
	</div>
</header>
<aside class="component-representation component" data-component-name="Representation">
	<div class="representation-container">
		<h2>
			<a href="#togglerepresentation">Representation</a>
		</h2>
		<ul>
			<li>
				<h3>Manager:</h3>
				<p>
					MKS&amp;D<br>
					Elise Koseff<br>
					(424) 832-3272<br>
					<a href="mailto:elise@mksd.com">elise@mksd.com</a>
				</p>
			</li>
			<li>
				<h3>Talent agents:</h3>
				<p>
					Paradigm Agency<br>
					Ellen Gilbert<br>
					(212) 897-6400<br>
					<a href="mailto:egilbert@paradigmagency.com">egilbert@paradigmagency.com</a>
				</p>
			</li>
			<li>
				<h3>Publicist:</h3>
				<p>
					Jill Frito PR<br>
					Jill Frito<br>
					(917) 410-5441<br>
					<a href="mailto:jfritzo@jillfritzopr.com">jfritzo@jillfritzopr.com</a>
				</p>
				<p>
					Paradigm Agency<br>
					Rachel Altman<br>
					(212) 897-6400<br>
					<a href="mailto:raltman@paradigmagency.com">raltman@paradigmagency.com</a>
				</p>
			</li>
			<?php
				// Default is 'primary' nav. 
				// To use another nav, create one in /config/theme-configs/register-nav-menus.php and change variable below.
				// echo Utils::render_template('config/theme-includes/menu.php', array(
				// 	'menuLocation' => 'representation',
				// ));
			?>
		</ul>
	</div>
</aside>
