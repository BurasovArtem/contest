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
	</head>
	<body>
		<header>
			<img class="logo_lifehacker" src="images/logo_lifehacker.svg">
			<img class="logo_cordiant" src="images/logo_cordiant.svg">
		</header>
		<main>
			<div class="left_block" id="left_block">
				<div class="mirror_elem">
					<img src="images/mirror_question.png" id="mirror">
				</div>
				<img class="helm" src="images/helm.png">
			</div>
			<div class="right_block">
				<div class="question_content">

					<div class="counter_container">
						<p id="question_counter">5 / 9</p>
					</div>

					<div id="question_container" style="display: none">
						<p class="title">Где эта дорога?</p>
						<div id="questions">
							<div class="question_item">В стране Великих озёр — Канаде. Фото явно сделано на водах Гурона</div>
							<div class="question_item">Сердцем чувствую, что это Байкал</div>
							<div class="question_item">Нордический пейзаж говорит, что это река Гломма в Норвегии</div>
						</div>
					</div>

					<div id="result_container">
						<p class="title">Мимо! Это воды Байкала</p>
						<p class="description">Чтобы чувствовать себя уверенно даже на голом льду, используйте шины Cordiant Snow Cross 2. Благодаря COR-технологиям шипы проникают глубоко в лёд и увеличивают сцепление на 10%, а динамику разгона — на 20% !</p>
						<button>Далее</button>
					</div>

				</div>
				<div class="right_footer">
					<a href="#">Лайфхакер</a>&nbsp | &nbsp<a href="#">Cordiant</a>&nbsp © 2020
				</div>
			</div>
		</main>
	</body>
</html>