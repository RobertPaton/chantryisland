(function() {
	var bodyContent = document.querySelector('#contentBody'),
	userContent = document.querySelector('#userBody'),
	contentButton = document.querySelector('#content'),
	userButton = document.querySelector('#user'),
	imageButton = document.querySelector('#image'),
	newsButton = document.querySelector('#news'),
	delimagebutton = document.querySelector('#imageDel'),
	delnewsButton = document.querySelector('#newsDel'),
	deleventButton = document.querySelector('#eventDel'),
	imageContent = document.querySelector('#addImages'),
	newsContent = document.querySelector('#addNews'),
	delimageContent = document.querySelector('#deleteImage'),
	delnewsContent = document.querySelector('#deleteNews'),
	addButton = document.querySelector('#add'),
	editButton = document.querySelector('#edit'),
	deleteButton = document.querySelector('#delete'),
	addContent = document.querySelector('#addUser'),
	editContent = document.querySelector('#editUser'),
	deleteContent = document.querySelector('#deleteUser'),
	eventButton = document.querySelector('#event'),
	addeventContent = document.querySelector('#addEvent'),
	deleteeventContent = document.querySelector('#deleteEvent');

	function showContentBody() {
		bodyContent.style.display = 'block';
		return false;
	}

	function showuserBody() {
		userContent.style.display = 'block';
		return false;
	}

	function showcontentImage() {
		imageContent.style.display = 'block';
		return false;
	}

	function showcontentNews() {
		newsContent.style.display = 'block';
		return false;
	}

	function showcontentEvent() {
		addeventContent.style.display = 'block';
		return false;
	}

	function showdeleteImage() {
		delimageContent.style.display = 'block';
		return false;
	}

	function showdeleteNews() {
		delnewsContent.style.display = 'block';
		return false;
	}

	function showdeleteEvent() {
		deleteeventContent.style.display = 'block';
		return false;
	}

	function showcontentAdd() {
		addContent.style.display = 'block';
		return false;
	}

	function showcontentEdit() {
		editContent.style.display = 'block';
		return false;
	}

	function showcontentDelete() {
		deleteContent.style.display = 'block';
		return false;
	}

	function hidecontentbody() {
		bodyContent.style.display = '';
		return false;
	}

	function hideuserBody() {
		userContent.style.display = '';
		return false;
	}

	function hidecontentImage() {
		imageContent.style.display = '';
		return false;
	}

	function hidecontentNews() {
		newsContent.style.display = '';
		return false;
	}

	function hidecontentAdd() {
		addContent.style.display = '';
		return false;
	}

	function hidedeleteImage() {
		delimageContent.style.display = '';
		return false;
	}

	function hidedeleteNews() {
		delnewsContent.style.display = '';
		return false;
	}

	function hidecontentEdit() {
		editContent.style.display = '';
		return false;
	}

	function hidecontentDelete() {
		deleteContent.style.display = '';
		return false;
	}

	function hidecontentEvent() {
		addeventContent.style.display = '';
		return false;
	}


	function hidedeleteEvent() {
		deleteeventContent.style.display = '';
		return false;
	}

	contentButton.addEventListener('click', showContentBody, false);
	userButton.addEventListener('click', showuserBody, false);

	contentButton.addEventListener('click', hideuserBody, false);
	userButton.addEventListener('click', hidecontentbody, false);

	imageButton.addEventListener('click', showcontentImage, false);
	newsButton.addEventListener('click', showcontentNews, false);

	delimagebutton.addEventListener('click', showdeleteImage, false);
	delnewsButton.addEventListener('click', showdeleteNews, false);

	eventButton.addEventListener('click', showcontentEvent, false);
	deleventButton.addEventListener('click', showdeleteEvent, false);

	imageButton.addEventListener('click', hidecontentNews, false);
	imageButton.addEventListener('click', hidecontentEvent, false);
	imageButton.addEventListener('click', hidedeleteNews, false);
	imageButton.addEventListener('click', hidedeleteImage, false);
	imageButton.addEventListener('click', hidedeleteEvent, false);

	newsButton.addEventListener('click', hidecontentImage, false);
	newsButton.addEventListener('click', hidedeleteNews, false);
	newsButton.addEventListener('click', hidecontentEvent, false);
	newsButton.addEventListener('click', hidedeleteEvent, false);
	newsButton.addEventListener('click', hidedeleteImage, false);

	eventButton.addEventListener('click', hidecontentNews, false);
	eventButton.addEventListener('click', hidedeleteNews, false);
	eventButton.addEventListener('click', hidedeleteImage, false);
	eventButton.addEventListener('click', hidedeleteEvent, false);
	eventButton.addEventListener('click', hidecontentImage, false);

	deleventButton.addEventListener('click', hidecontentNews, false);
	deleventButton.addEventListener('click', hidedeleteNews, false);
	deleventButton.addEventListener('click', hidedeleteImage, false);
	deleventButton.addEventListener('click', hidecontentEvent, false);
	deleventButton.addEventListener('click', hidecontentImage, false);

	delimagebutton.addEventListener('click', hidedeleteNews, false);
	delimagebutton.addEventListener('click', hidecontentNews, false);
	delimagebutton.addEventListener('click', hidecontentImage, false);
	delimagebutton.addEventListener('click', hidedeleteEvent, false);
	delimagebutton.addEventListener('click', hidecontentEvent, false);

	delnewsButton.addEventListener('click', hidedeleteImage, false);
	delnewsButton.addEventListener('click', hidecontentImage, false);
	delnewsButton.addEventListener('click', hidecontentNews, false);
	delnewsButton.addEventListener('click', hidedeleteEvent, false);
	delnewsButton.addEventListener('click', hidecontentEvent, false);

	addButton.addEventListener('click', showcontentAdd, false);
	editButton.addEventListener('click', showcontentEdit, false);
	deleteButton.addEventListener('click', showcontentDelete, false);

	addButton.addEventListener('click', hidecontentEdit, false);
	addButton.addEventListener('click', hidecontentDelete, false);

	editButton.addEventListener('click', hidecontentAdd, false);
	editButton.addEventListener('click', hidecontentDelete, false);

	deleteButton.addEventListener('click', hidecontentEdit, false);
	deleteButton.addEventListener('click', hidecontentAdd, false);
})();