<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>E-Commerce | Dwi Rental</title>

	<link rel="shortcut icon" href="<?php echo AST; ?>/img/mobil.jpg" type="image/x-icon">
	<link rel="stylesheet" href="<?php echo AST; ?>/css/style.css">
</head>

<body>

	<aside>

		<header>
			<img src="<?php echo AST; ?>/img/mobil.jpg" class="brand">
			<div class="user">Dwi Gustantia</div>
		</header>

		<nav>
			<ul>
				<li>
					<a href="<?php echo URL; ?>/dashboard">
						<img class="icon" src="<?php echo AST; ?>/img/home.jpg" alt=""> Home
					</a>
				</li>
				<li>
					<a href="<?php echo URL; ?>/karyawan">
						<img class="icon" src="<?php echo AST; ?>/img/icon_kar.jpg" alt=""> Karyawan
					</a>
				</li>
				<li>
					<a href="<?php echo URL; ?>/sewa">
						<img class="icon" src="<?php echo AST; ?>/img/icon_sewa.jpg" alt=""> Sewa
					</a>
				</li>
				<li>
					<a href="<?php echo URL; ?>/customer">
						<img class="icon" src="<?php echo AST; ?>/img/icon_cus.jpg" alt=""> Customer
					</a> 
				</li>
				<li>
					<a href="<?php echo URL; ?>/mobil">
						<img class="icon" src="<?php echo AST; ?>/img/icon_mob.jpg" alt=""> Mobil
					</a>
				</li>
			</ul>
		</nav>

	</aside>

	<main>
		<article>
			<?php require_once ROOT . "app/views/" . $view . ".php"; ?>
		</article>

		<footer>
			Copyright &copy; 2023. Designed by Ms. Dwi Gustantia
		</footer>
	</main>

</body>

</html>