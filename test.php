<!DOCTYPE html>
<html>
	<head>
		<title>Тест</title>
		<meta charset="utf-8">
		<?php
			require_once "php/check_mobile.php";
			if ( check_mobile() ) {
				?>
					<link rel="stylesheet" type="text/css" href="styles/mobile/styles.css">
					<link rel="stylesheet" type="text/css" href="styles/mobile/test.css">
				<?php
			}
			else {
				?>
					<link rel="stylesheet" type="text/css" href="styles/styles.css">
					<link rel="stylesheet" type="text/css" href="styles/test.css">
				<?php
			}
		?>
		<script type="text/javascript" src="scripts/script.js"></script>
		<script type="text/javascript" src="scripts/data.js"></script>
	</head>
	<body>
		<header>
			<img class="logo_lifehacker" src="images/logo_lifehacker.svg">
			<img class="logo_cordiant" src="images/logo_cordiant.svg">
		</header>
		<main>
			<div class="left_block">
				<div class="mirror_elem">
					<img src="images/mirror_question.png" id="mirror">
				</div>
				<img class="helm" src="images/helm.png">
			</div>
			<div class="right_block">
				
				<div class="question_content" style="display: none"></div>
				<div class="right_footer">
					<a href="#">Лайфхакер</a>&nbsp | &nbsp<a href="#">Cordiant</a>&nbsp © 2020
				</div>
			</div>
		</main>
	</body>
</html>