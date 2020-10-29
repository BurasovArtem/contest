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
		<main id="main">
			<div class="left_block">
				<div class="mirror_elem">
					<img src="images/mirror_question.png" id="mirror">
				</div>
				<img class="helm" src="images/helm.png">
			</div>
			<div class="right_block">
				<div class="output">
					<div class="top_output_content">
						<div>
							<p id="output_title"></p>
							<p id="output_description"></p>
						</div>
						<div class="button_block">
							<div onclick="location.reload()" class="back_button">
								<img src="images/reload.svg">
								<p>Пройти еще раз</p>
							</div>
							<div class="social">
								<a href="#" class="item" target="blank"><img src="images/social/twitter.svg"></a>
								<a href="#" class="item" target="blank"><img src="images/social/vk.svg"></a>
								<a href="#" class="item" target="blank"><img src="images/social/facebook.svg"></a>
							</div>
						</div>
					</div>
					<div class="bottom_output_content">
						<div>
							<p id="output_promo"></p>
							<p id="output_time"></p>
						</div>
						<button>Купить шины со скидкой</button>
						<div class="output_footer">
							<a class="team" href="#">
								Команда проекта
								<img class="team_popup" src="images/team.svg" />
							</a>
							<p class="link"><a href="https://lifehacker.ru/" target="blank">Лайфхакер</a>&nbsp | &nbsp<a href="https://cordiant.ru/" target="blank">Cordiant</a>&nbsp © 2020</p>
						</div>
					</div>
				</div>

				<div class="question_content"></div>
				<div class="right_footer">
					<a href="https://lifehacker.ru/" target="blank">Лайфхакер</a>&nbsp | &nbsp<a href="https://cordiant.ru/" target="blank">Cordiant</a>&nbsp © 2020
				</div>
			</div>
		</main>
	</body>
</html>