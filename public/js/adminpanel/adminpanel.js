function setHeiHeight() {
    $('body').css({
        height: $(window).height() + 'px'
    });
}

$(function(){
	setHeiHeight(); // устанавливаем высоту окна при первой загрузке страницы
	$(window).resize( setHeiHeight ); // обновляем при изменении размеров окна
});

// tinymce plugin
tinymce.init({
mode : "exact",
elements: 'contentArticle',
theme: 'modern',
height: 300,
convert_urls : false,
plugins: [
  'advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker',
  'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
  'save table contextmenu directionality emoticons template paste textcolor'
],
toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons'
});
// end

// Exit admin panel
$(function(){
	$("#logOut").click(function(){
		$.ajax({
			url: "/adminpanel/ajax/",
			type: "POST",
			data: ({flag: 'logOutAdminPanel'}),
			dataType: "html",
			success: function() {
				window.location.reload();
			}
		});
	});
});

// Imgs manager
$(function(){
	$('.img-prev img').click(function() {
		var img = $(this).attr('alt');
		$('#sourse').val('/public/uploads/' + img);
	});

	$('.img-prev button').click(function() {
		var img = $(this).attr('data-img');
		$.ajax({
			url: "/adminpanel/ajax/",
			type: "POST",
			data: {flag: "delImg", img: img},
			success: function() {
				window.location.reload();
			}
		});
	});
});

$(function(){
	$("#changeAuthData").click(function() {
		var data = $("#changeAuthDataForm").serialize();
		$.ajax({
			url: "/adminpanel/ajax/",
			type: "POST",
			data: data,
			dataType: "json",
			success: function(data) {
				if (data["new_login"] == "error") {
					$("#new_login").css({border: "2px solid #E74545"});
				} else { $("#new_login").css({border: "1px solid #C5C5C5"}); }
				if (data["old_pass"] == "error") {
					$("#old_pass").css({border: "2px solid #E74545"});
				} else { $("#old_pass").css({border: "1px solid #C5C5C5"}); }
				if (data["new_pass"] == "error") {
					$("#new_pass").css({border: "2px solid #E74545"});
				} else { $("#new_pass").css({border: "1px solid #C5C5C5"}); }
				if (data["re_pass"] == "error") {
					$("#re_pass").css({border: "2px solid #E74545"});
				} else { $("#re_pass").css({border: "1px solid #C5C5C5"}); }
				if (data["success"] == "success") {
					alert("Данные изменены!");
				}
			}
		});
	});
});

// CMS Module
$(function(){
	$('#addStaticPage').click(function(){
		var data = $('#dataFormAddPage').serialize();
		$.ajax({
			url: "/adminpanel/ajax/",
			type: "POST",
			data: data,
			success: function() {
				window.location.reload();
			}
		});
	});
});

$(function(){
	$('#editStaticPage').click(function(){
		var data = $('#dataFormEditPage').serialize();
		$.ajax({
			url: "/adminpanel/ajax/",
			type: "POST",
			data: data,
			success: function(){
				window.location.reload();
			}
		});
	});

	$('.delStaticPage').click(function(){
		var page_id = $(this).attr('id');
		$.ajax({
			url: "/adminpanel/ajax/",
			type: "POST",
			data: {flag: "delStaticPage", page_id: page_id},
			success: function(){
				window.location.reload();
			}
		});
	});
});