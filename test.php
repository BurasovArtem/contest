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
								<div class="back_icon">
									<svg width="40" height="40" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg" id="reload">
									<path d="M22.7161 2.71582C13.1883 2.71582 5.4403 10.472 5.4403 19.9997V20.0569L2.01944 14.9052C1.6847 14.399 0.998893 14.2602 0.492703 14.5949C-0.0134861 14.9297 -0.15228 15.6155 0.182458 16.1217L5.14638 23.5921C5.326 23.8615 5.61175 24.0329 5.93016 24.0738C5.97915 24.0819 6.01997 24.0819 6.06895 24.0819C6.33838 24.0819 6.59964 23.9839 6.80374 23.7962L13.7026 17.5831C14.1517 17.1749 14.1925 16.4809 13.7843 16.0237C13.376 15.5747 12.6821 15.5338 12.2249 15.9421L7.64467 20.0814V19.9997C7.64467 11.6803 14.4048 4.92019 22.7161 4.92019C31.0274 4.92019 37.7956 11.6803 37.7956 19.9997C37.7956 28.3192 31.0355 35.0793 22.7242 35.0793C18.6992 35.0793 14.9109 33.5117 12.0697 30.6624C11.637 30.2297 10.9431 30.2297 10.5104 30.6624C10.0776 31.0951 10.0776 31.7891 10.5104 32.2218C13.7761 35.4875 18.1114 37.2837 22.7242 37.2837C32.2439 37.2837 40 29.5357 40 19.9997C40 10.4638 32.2439 2.71582 22.7161 2.71582Z" fill="#7DBFFF"/>
									</svg>
								</div>
								<p>Пройти еще раз</p>
							</div>
							<div class="social">
								<a href="https://twitter.com/ru_lh?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" class="item" target="blank"><img src="images/social/twitter.svg"></a>
								<a href="https://vk.com/lifehacker_ru" class="item" target="blank"><img src="images/social/vk.svg"></a>
								<a href="https://www.facebook.com/lifehacker.ru" class="item" target="blank"><img src="images/social/facebook.svg"></a>
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