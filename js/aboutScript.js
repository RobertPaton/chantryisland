(function() {
	var	aboutButton = document.querySelector('#about'),
		newsButton = document.querySelector('#news'),
		eventsButton = document.querySelector('#events'),
		islandButton = document.querySelector('#island'),
		lighthouseButton = document.querySelector('#lighthouse'),
		birdbutton = document.querySelector('#bird'),
		islandText = document.querySelector('#islandText'),
		lighthouseText = document.querySelector('#lighthouseText'),
		birdText = document.querySelector('#birdText'),
		aboutContent = document.querySelector('#aboutText'),
		newsContent = document.querySelector('#newsBody'),
		eventsContent = document.querySelector('#eventsBody');

	function showislandText() {
		islandText.style.display = 'block';
		return false;
	}

	function showlighthouseText() {
		lighthouseText.style.display = 'block';
		return false;
	}

	function showbirdText() {
		birdText.style.display = 'block';
		return false;
	}

	function showaboutContent() {
		aboutContent.style.display = 'block';
		return false;
	}

	function shownewscontent() {
		newsContent.style.display = 'block';
		return false;
	}

	function showeventsContent() {
		eventsContent.style.display = 'block';
		return false;
	}

	function hideislandText() {
		islandText.style.display = '';
		return false;
	}

	function hidelighthouseText() {
		lighthouseText.style.display = '';
		return false;
	}

	function hidebirdText() {
		birdText.style.display = '';
		return false;
	}

	function hideaboutContent() {
		aboutContent.style.display = '';
		return false;
	}

	function hidenewsContent() {
		newsContent.style.display = '';
		return false;
	}

	function hideeventsContent() {
		eventsContent.style.display = '';
		return false;
	}

	function changeColor() {
		this.style.color = '#98866E';
		return false;
	}

	function restoreColor() {
		aboutButton.style.color = '';
		eventsButton.style.color = '';
		return false;
	}

	function restoreColor1() {
		newsButton.style.color = '';
		aboutButton.style.color = '';
		return false;
	}

	function restoreColor2() {
		newsButton.style.color = '';
		eventsButton.style.color = '';	
	}

	//Change Content
	islandButton.addEventListener('click', showislandText, false);
	lighthouseButton.addEventListener('click', showlighthouseText, false);
	birdbutton.addEventListener('click', showbirdText, false);


	islandButton.addEventListener('click', hidelighthouseText, false);
	islandButton.addEventListener('click', hidebirdText, false);


	lighthouseButton.addEventListener('click', hideislandText, false);
	lighthouseButton.addEventListener('click', hidebirdText, false);

	
	birdbutton.addEventListener('click', hideislandText, false);
	birdbutton.addEventListener('click', hidelighthouseText, false);

	aboutButton.addEventListener('click', showaboutContent, false);
	newsButton.addEventListener('click', shownewscontent, false);
	eventsButton.addEventListener('click', showeventsContent, false);

	aboutButton.addEventListener('click', hidenewsContent, false);
	aboutButton.addEventListener('click', hideeventsContent, false);
	newsButton.addEventListener('click', hideaboutContent, false);
	newsButton.addEventListener('click', hideeventsContent, false);
	eventsButton.addEventListener('click', hideaboutContent, false);
	eventsButton.addEventListener('click', hidenewsContent, false);


	//Change Color
	aboutButton.addEventListener('click', changeColor, false);
	newsButton.addEventListener('click', changeColor, false);
	eventsButton.addEventListener('click', changeColor, false);

	//Restore Color
	aboutButton.addEventListener('click', restoreColor2, false);
	newsButton.addEventListener('click', restoreColor, false);
	eventsButton.addEventListener('click', restoreColor1, false);
})();