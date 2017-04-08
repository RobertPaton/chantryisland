(function() {
	var marineText = document.querySelector('#marineText'),
		touringText = document.querySelector('#touringText');
		heritageButton = document.querySelector('#heritage'),
		touringButton = document.querySelector('#touring'),
		imageButton = document.querySelector('#image'),
		newsButton = document.querySelector('#news'),
		imageContent = document.querySelector('#addImages'),
		newsContent = document.querySelector('#addNews');

	function showmarineText() {
		marineText.style.display = 'block';
		return false;
	}

	function showtouringText() {
		touringText.style.display = 'block';
		return false;
	}

	function hidemarineText() {
		marineText.style.display = '';
		return false;
	}

	function hidetouringText() {
		touringText.style.display = '';
		return false;
	}

	function changeColor() {
		this.style.color = '#98866E';
		return false;
	}

	function restoreColor1() {
		heritageButton.style.color = '';
		return false;
	}

	function restoreColor2() {
		touringButton.style.color = '';
		return false;
	}

	//Change Content
	heritageButton.addEventListener('click', showmarineText, false);
	touringButton.addEventListener('click', showtouringText, false);

	heritageButton.addEventListener('click', hidetouringText, false);
	touringButton.addEventListener('click', hidemarineText, false);

	//Change Color
	heritageButton.addEventListener('click', changeColor, false);
	touringButton.addEventListener('click', changeColor, false);

	//Restore Color
	heritageButton.addEventListener('click', restoreColor2, false);
	touringButton.addEventListener('click', restoreColor1, false);
})();