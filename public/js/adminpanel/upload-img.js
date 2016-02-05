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
				var img = "'" + file + "'";
				$('.imgs-prev').prepend('<div class="img-prev"><img onclick="setSourse(' + img + ')" src="/public/uploads/min/' + file + '" alt="' + file + '"><button onclick="delImg('+ img +')" data-img="' + file + '">Удалить</button></div>');
			} else{
				status.text('Ошибка');
				$('<li></li>').appendTo('#files').text(file).addClass('error');
			}
		}
	});

// Imgs manager
$('.img-prev img').click(function() {
	var img = $(this).attr('alt');
	$('#sourse').val('/public/uploads/' + img);
});

$('.img-prev button').click(function() {
	var img = $(this).attr('data-img');
	var that = this;
	$.ajax({
		url: "/adminpanel/ajax/",
		type: "POST",
		data: {flag: "delImg", img: img},
		success: function() {
			$(that).parent().slideUp(300);
		}
	});
});

});

function setSourse(img){
	$('#sourse').val('/public/uploads/' + img);
}

function delImg(img){
	$.ajax({
		url: "/adminpanel/ajax/",
		type: "POST",
		data: {flag: "delImg", img: img},
		success: function() {
			window.location.reload();
		}
	});
}