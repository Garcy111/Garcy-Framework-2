$(function(){
	var btnUpload=$('#upload');
	var status=$('#status');
	new AjaxUpload(btnUpload, {
		action: '/upload/',
		name: 'uploadimg',
		onSubmit: function(file, ext){
			 if (! (ext && /^(jpg|png|jpeg|gif)$/.test(ext))){ 
				status.text('Только JPG, PNG или GIF файлы');
				return false;
			}
			status.text('Загрузка...');
		},
		onComplete: function(file, response){
			//On completion clear the status
			status.text('');
			//Add uploaded file to list
			if(response==="success"){
				status.text('Файл загружен!');
				// $('<li></li>').appendTo('#files').html(file).addClass('success');
				window.location.reload();
			} else{
				status.text('Ошибка');
				$('<li></li>').appendTo('#files').text(file).addClass('error');
			}
		}
	});
	
});