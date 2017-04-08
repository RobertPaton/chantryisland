(function() {
	var galleryButton = document.querySelector('#gallery'),
		volunteerButton = document.querySelector('#volunteers'),
		restoreButton = document.querySelector('#restoration'),
		galleryImage = document.querySelector('#galleryBig'),
		buttonSmall = document.querySelectorAll('#buttonTest');

	function changeColor() {
		this.style.color = '#98866E';
		return false;
	}

	function galleryRestore() {
		volunteerButton.style.color = '';
		restoreButton.style.color = '';
		return false;
	}

	function volunteerRestore() {
		galleryButton.style.color = '';
		restoreButton.style.color = '';
		return false;
	}

	function restoreRestore() {
		galleryButton.style.color = '';
		volunteerButton.style.color = '';
		return false;
	}

	function getJson(url) {
		httpRequest = new XMLHttpRequest();

		if(!httpRequest) {
			alert('Error. Browser is too old.');
			return false;
		}

		httpRequest.onreadystatechange = displayText;
		httpRequest.open('GET', url);
		httpRequest.send();
	}

	function displayText() {
		if(httpRequest.readyState === XMLHttpRequest.DONE) {
			if(httpRequest.status === 200) {
				var response = httpRequest.responseText;
				galleryImage.innerHTML = response;
			}else{
				console.log('There was a problem with your request.');
			}
		}
	}


	$('.imgSmall').click(function(){
	      $('.modal-body').empty();
	  	var title = $(this).parent('a');
	  	$('.modal-title').html(title);
	  	$($(this).parents('div').html()).appendTo('.modal-body');
	  	$('#myModal').modal({show:true});
	});
	

})();