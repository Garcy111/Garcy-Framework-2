function setHeiHeight() {
    $('body').css({
        height: $(window).height() + 'px'
    });
}

$(function(){
	setHeiHeight(); // устанавливаем высоту окна при первой загрузке страницы
	$(window).resize( setHeiHeight ); // обновляем при изменении размеров окна
});
$(function(){
	$('#logIn').click(function(){
		var login = $('#login').val();
		var password = $('#password').val();
		$.ajax({
			url: "/adminpanel/ajax/",
			type: "POST",
			data: ({flag: 'logInAdminPanel', login: login, password: password}),
			dataType: "html",
			success: function(data) {
				if(data === ''){
					window.location.reload();
				}else{
					alert(data);
				}
			}
		});
	});
});