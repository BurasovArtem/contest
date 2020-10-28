window.onload = () => {
	createQuestion(1);
}

function createQuestion(count) {
	let question_content_old = document.querySelector('.question_content');
	question_content_old.style.display = 'none';

	let max_count = Object.keys(data).length;
	if (count > max_count) {
		let sum = result.reduce((partial_sum, a) => partial_sum + a,0),
			right_footer = document.querySelector('.right_footer');
		right_footer.style.display = 'none';
		if (sum <= 2) {
			console.log('0-2')
		} 
		else if (sum <= 4) {
			console.log('3-4')
		} 
		else {
			console.log('5-6')
		}
	} else {
		let right_block = document.querySelector('.right_block');
		let left_block = document.querySelector('.left_block');

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

		let itemData = data[count];

		for(i in itemData) {
			questions.childNodes[i-1].innerText = itemData[i].question;
			questions.childNodes[i-1].setAttribute('value', itemData[i].point);
			questions.childNodes[i-1].setAttribute('onclick', "openResult("+i+", "+ count +")");
		}
	}
}

function openResult(number, count) {
	let question_container = document.getElementById('question_container'),
		result_container = document.getElementById('result_container'),
		result_title = document.getElementById('result_title'),
		result_description = document.getElementById('result_description');
	question_container.style.display = 'none';
	result_container.style.display = 'flex';
	result_title.innerText = data[count][number].result;
	result_description.innerText = feedback[count];
	result.push(data[count][number].point);
}

function nextQuestion() {

}

function endGame() {

}