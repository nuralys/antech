<header>
	<canvas id="demo-canvas"></canvas>
	<div class="cr">
		<ul class="lang">
			<li <?= (Configure::read('Config.language') == 'kz')? "class='active'" : "" ?>><a href="/kz">kz</a></li>
			<li <?= (Configure::read('Config.language') == 'ru')? "class='active'" : "" ?>><a href="/">ru</a></li>
			<li <?= (Configure::read('Config.language') == 'en')? "class='active'" : "" ?>><a href="/en">en</a></li>
		</ul>
		<div class="h_center">
			<a class="logo" href="/<?=$lang?>">
				<img src="/img/logo.png">
			</a>
			<nav class="nav">
				<ul class="menu">
					<li <?= ($this->request->params['controller']=='pages' && $this->request->params['action']=='index')? "class='active'" : "" ?>>
						<a href="/<?=$lang?>">
						<?=__('Главная')?>
						</a>
					</li>
					<li <?= (isset($this->request->params['pass'][0]) && $this->request->params['pass'][0]=='about')? "class='active'" : "" ?>>
						<a href="/<?=$lang?>page/about">
						<?=__('О компании')?>
						</a>
					</li>
					<li <?= ($this->request->params['controller']=='news')? "class='active'" : "" ?>>
						<a href="/<?=$lang?>news">
						<?=__('Новости')?>
						</a>
					</li>
					<li <?= (isset($this->request->params['pass'][0]) && $this->request->params['pass'][0]=='investors')? "class='active'" : "" ?>>
						<a href="/<?=$lang?>page/investors">
						<?=__('Инвесторам')?>
						</a>
					</li>
					<li <?= (isset($this->request->params['pass'][0]) && $this->request->params['pass'][0]=='vacancy')? "class='active'" : "" ?>>
						<a href="/<?=$lang?>page/vacancy">
						<?=__('Вакансии')?>
						</a>
					</li>
					<li <?= (isset($this->request->params['pass'][0]) && $this->request->params['pass'][0]=='contacts')? "class='active'" : "" ?>>
						<a href="/<?=$lang?>page/contacts">
						<?=__('Контакты')?>
						</a>
					</li>
				</ul>
			</nav>
		</div>
		<div class="animated fadeInUp">
			<h1><span>Управляющая компания ASTANA N-TECH</span></h1>
			<a class="h_more" href="/<?=$lang?>page/about"><?=__('Подробнее')?></a>
		</div>
	</div>
</header>