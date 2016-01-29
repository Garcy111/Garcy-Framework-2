<h1>Настройки</h1>

<h2>Изменить логин / пароль</h2>
<form id="changeAuthDataForm">
	<input type="hidden" name="flag" value="changeAuthData">
	<p>Новый логин:</p>
	<input type="text" id="new_login" name="new_login">
	<p>Старый пароль:</p>
	<input type="password" id="old_pass" name="old_pass">
	<p>Новый пароль:</p>
	<input type="password" id="new_pass" name="new_pass">
	<p>Повторите пароль:</p>
	<input type="password" id="re_pass" name="re_pass">
</form>
<button id="changeAuthData" class="btn">Изменить</button>