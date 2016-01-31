<nav>
<ul class="nav">
	<li {if $controller == 'Index'} class="click" {/if}><a href="/adminpanel/">Главная</a></li>
	<li {if $controller == 'Pages'} class="click" {/if}><a href="/adminpanel/pages/">Страницы</a></li>
	<li {if $controller == 'Blog'} class="click" {/if}><a href="/adminpanel/blog/">Блог</a></li>
</ul>
</nav>