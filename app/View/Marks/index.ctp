<h2><?php echo $company['Company']['title'] ?></h2>
<?php echo  $company['Company']['body'] ?>
<h3>Продукции</h3>
<?php foreach($data['Product'] as $item): ?>
	<a href="/<?=$lang?>products/<?=$item['id']?>"><?= $item['title'] ?></a><br>
<?php endforeach; ?>

