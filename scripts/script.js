window.onload = () => {
	createQuestion(1);
}

function createQuestion(count) {
	let question_content_old = document.querySelector('.question_content'),
		mirror = document.querySelector('#mirror'),
		helm = document.querySelector('.helm'),
		right_block = document.querySelector('.right_block'),
		left_block = document.querySelector('.left_block');
	question_content_old.style.display = 'none';
	mirror.setAttribute('src', './images/mirror_question.png');

	let max_count = Object.keys(data).length;
	if (count > max_count) {
		let sum = result.reduce((partial_sum, a) => partial_sum + a,0),
			right_footer = document.querySelector('.right_footer'),
			output_container = document.querySelector('.output'),
			output_title = document.querySelector('#output_title'),
			output_description = document.querySelector('#output_description'),
			output_promo = document.querySelector('#output_promo'),
			output_time = document.querySelector('#output_time');

		left_block.style.backgroundImage = 'none';	
		mirror.style.display = 'none';
		helm.style.display = 'none';
		right_footer.style.display = 'none';
		output_container.style.display = 'flex';
		left_block.style.backgroundSize = '100% 100%';

		if (sum <= 2) {
			output_title.innerText = output[3].title;
			output_description.innerHTML = output[3].description;
			output_promo.innerHTML = output[3].promo;
			output_time.innerHTML = output[3].time;
			left_block.style.backgroundImage = 'url(./images/3_result.png)';
		} 
		else if (sum <= 4) {
			output_title.innerText = output[2].title;
			output_description.innerHTML = output[2].description;
			output_promo.innerHTML = output[2].promo;
			output_time.innerHTML = output[2].time;
			left_block.style.backgroundSize = '175% 100%';
			left_block.style.backgroundImage = 'url(./images/2_result.png)';
		} 
		else {
			output_title.innerText = output[1].title;
			output_description.innerHTML = output[1].description;
			output_promo.innerHTML = output[1].promo;
			output_time.innerHTML = output[1].time;
			left_block.style.backgroundSize = '125% 100%';
			left_block.style.backgroundImage = 'url(./images/1_result.png)';
		}
	} else {
		let question_content = document.createElement('div'),
			counter_container = document.createElement('div'),
			question_counter = document.createElement('p');

		let question_container = document.createElement('div'),
			question_title = document.createElement('p'),
			questions = document.createElement('div'),
			question_item1 = document.createElement('div'),
			question_item2 = document.createElement('div'),
			question_item3 = document.createElement('div');

		let result_container = document.createElement('div'),
			result_title = document.createElement('p'),
			result_description = document.createElement('div'),
			next_button = document.createElement('button');

		right_block.prepend(question_content);

		question_content.appendChild(counter_container);
		question_content.appendChild(question_container);
		question_content.appendChild(result_container);

		counter_container.appendChild(question_counter);

		question_container.appendChild(question_title);
		question_container.appendChild(questions);
		questions.appendChild(question_item1);
		questions.appendChild(question_item2);
		questions.appendChild(question_item3);

		result_container.appendChild(result_title);
		result_container.appendChild(result_description);
		result_container.appendChild(next_button);

		question_content.classList.add('question_content');

		counter_container.classList.add('counter_container');
		question_counter.id = 'question_counter';

		question_container.id = 'question_container';
		question_title.classList.add('title');
		questions.id = 'questions';
		question_item1.classList.add('question_item');
		question_item2.classList.add('question_item');
		question_item3.classList.add('question_item');

		result_container.id = 'result_container';
		result_title.id = 'result_title';
		result_description.id = 'result_description';

		question_counter.innerText = count + ' / ' + max_count;

		question_title.innerText = 'Где эта дорога?';

		next_button.innerText = 'Далее';
		next_button.setAttribute('onclick', "createQuestion("+(count+1)+")");

		left_block.style.backgroundImage = 'url(./images/'+ count +'_question.jpg)';

		result_container.style.display = 'none';


		// debug
		// let out = document.querySelector('.output'),
		// 	footer = document.querySelector('.right_footer'),
		// 	question = document.querySelector('.question_content')
		// question_container.style.display = 'none';
		// counter_container.style.display = 'none';
		// footer.style.display = 'none';
		// out.style.display = 'flex';
		// question.style.height = 0;
		// 

		let itemData = data[count];

		for(i in itemData) {
			questions.childNodes[i-1].innerText = itemData[i].question;
			questions.childNodes[i-1].setAttribute('value', itemData[i].point);
			questions.childNodes[i-1].setAttribute('onclick', "openResult("+i+", "+ count +")");
		}
	}
}

function openResult(number, count) {
	let question_container = document.querySelector('#question_container'),
		result_container = document.querySelector('#result_container'),
		result_title = document.querySelector('#result_title'),
		result_description = document.querySelector('#result_description'),
		mirror = document.querySelector('#mirror');
	question_container.style.display = 'none';
	result_container.style.display = 'flex';
	result_title.innerText = data[count][number].result;
	result_description.innerHTML = feedback[count];
	result.push(data[count][number].point);
	if (data[count][number].point == 0) { mirror.setAttribute('src', './images/mirror_false.png'); }
	else { mirror.setAttribute('src', './images/mirror_true.png'); }
}