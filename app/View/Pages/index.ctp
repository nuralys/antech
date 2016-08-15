<div class="companies_structure">
	<div class="stucture_heading">
		<h2>Структура компании ASTANA N-TECH</h2>
	</div>
	<div class="margin_minus">
	<div class="structure_slider">
		<?php foreach($companies as $item): ?>
			<div>
				<a class="structure_sl" href="/<?=$lang?>companies/view/<?=$item['Company']['id']?>">
					<figure class="img_scale">
					<img class="sublogo1" src="/img/company/thumbs/<?=$item['Company']['img']?>">									
					</figure>
				</a>
			</div> 
		<?php endforeach ?>
	</div>
	</div>
</div>
<div class="ov">					
	<div class="content_part">
		<div class="h_heading">
			<h3><?php echo __('О компании')?></h3>
		</div>
		<div class="content">
			<figure class="about_img"><img src="/img/about.jpg"></figure>
			<p><?= $this->Text->truncate(strip_tags($main['Page']['body']), 310, array('ellipsis' => '...', 'exact' => true)) ?></p>
			<div class="but_right">
				<a class="btn" href="/<?=$lang?>page/about"><?php echo __('Подробнее')?></a>
			</div>
		</div>
	</div>
	<aside class="com_left">
		<div class="wr">
			<div class="h_heading">
				<h3>
					<?=__('Лента новостей')?>
				</h3>
			</div>
			<ul class="news_right">
			<?php foreach($news as $item): ?>
				<li class="new_right_part">
					<a href="/<?=$lang?>news/view/<?=$item['News']['id']?>">
						<figure class="news_figure">
							<img src="/img/news/thumbs/<?=$item['News']['img']?>">
						</figure>
					</a>
					<div class="news_right_des">
						<a class="heading" href="/<?=$lang?>news/view/<?=$item['News']['id']?>"><?=$item['News']['title']?></a>
						<p><?= $this->Text->truncate(strip_tags($item['News']['body']), 55, array('ellipsis' => '...', 'exact' => true)) ?></p>
						<div class="ov">
							<span class="fl_l"><?php echo $this->Time->format($item['News']['date'], '%d.%m.%Y', 'invalid'); ?></span>
							<!-- <span class="fl_r">15:27</span> -->
						</div>
					</div>
				</li>
				<?php endforeach ?>
			</ul>
			<div class="but_right">
				<a class="btn" href="/<?=$lang?>news"><?=__('Все новости')?></a>
			</div>								
		</div>						
	</aside>
</div>
<div class="h_heading">
		<h3>
			Наши партнеры
		</h3>
	</div>
	<div class="partner_carousel">
		<div>
				<img src="img/partner1.jpg">
		</div>
		<div>
				<img src="img/partner2.jpg">
		</div>
		<div>
				<img src="img/partner3.jpg">
		</div>
		<div>
				<img src="img/partner4.jpg">
		</div>
		<div>
				<img src="img/partner5.jpg">
		</div>
		<div>
				<img src="img/partner6.jpg">
		</div>
			<div>
				<img src="img/partner4.jpg">
		</div>
		<div>
				<img src="img/partner5.jpg">
		</div>
			<div>
				<img src="img/partner5.jpg">
		</div>
	</div>