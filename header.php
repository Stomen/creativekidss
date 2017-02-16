<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>
<body>
	<div class="wrapper">
		<header>
			<div class="center">
					<div class="logo">
                        <a href="<?php echo get_home_url(); ?>">
                            <span>Creative Kids</span>
                            <span>Reggio Emilia Preschool</span>
                        </a>
					</div>
				<nav>
					<?php wp_nav_menu(array('menu' => 'main') ); ?>
					<!--<ul>
						<li>О нас</li>
						<li>Reggio Emilia</li>
						<li>Музыка и мастера</li>
						<li>Студии</li>
						<li>Галерея</li>
						<li>События</li>
						<li>Детские праздники</li>
						<li>Контакты</li>
					</ul>-->
				</nav>
			</div>
		</header>