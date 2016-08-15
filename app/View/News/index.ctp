<div class="cr ov">
	<div class="h_heading">
		<h3 class="fl_l">
			<?=__('Наши новости')?>
		</h3>
	</div>
	<ul class="news_ul">
	<?php foreach($data as $item): ?>
		<li>
			<div class="news_mini">
				<figure>
					<a href="/<?=$lang?>news/view/<?=$item['News']['id']?>"><img src="/img/news/thumbs/<?=$item['News']['img']?>"></a>
				</figure>
				<a href="/<?=$lang?>news/view/<?=$item['News']['id']?>" class="heading">
					<?= $this->Text->truncate(strip_tags($item['News']['title']), 73, array('ellipsis' => '...', 'exact' => true)) ?>
				</a>
				<p>
					<?= $this->Text->truncate(strip_tags($item['News']['body']), 94, array('ellipsis' => '...', 'exact' => true)) ?>
				</p>
				<span class="date">
					<?php echo $this->Time->format($item['News']['date'], '%d.%m.%Y', 'invalid'); ?>
				</span>
			</div>
		</li>
		<?php endforeach ?>
	</ul>
</div>