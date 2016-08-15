<div class="companies_structure">
	<div class="stucture_heading">
		<h2>Структура компании <?=$data['Company']['title'] ?></h2>
	</div>
	<div class="margin_minus">
	<div class="structure_slider">
		<?php foreach($companies as $item): ?>	
			<div>
				<a class="structure_sl" href="/<?=$lang?>companies/view/<?=$item['Company']['id']?>">
					<figure class="img_scale">
					<img class="sublogo1" src="/img/company/<?=$item['Company']['img']?>">									
					</figure>
				</a>
			</div> 
		<?php endforeach ?>			
	</div>
	</div>
</div>
<div class="h_heading">
	<h2><?php echo $data['Company']['title'] ?></h2>
</div>	
<div class="sub_about">
	<?php echo  $data['Company']['body'] ?>
	<div class="center_btn">
	<a class="btn" href="<?=$data['Company']['link']?>">Подробнее</a>
	</div>
</div>
<div class="h_heading">
	<h3>Контакты</h3>
</div>
<div class="sub_contacts">	
	<div class="map">
		<?=$data['Company']['map']?>
	</div>
	<ul class="cont_list">
		<li>
			<p><?=$data['Company']['address']?></p>
		</li>
		<li>
			<p><?=$data['Company']['phone']?></p>
		</li>
		<li>
			<p><?=$data['Company']['email']?></p>
		</li>	
	</ul>
</div>