<h2><?php echo $data['Company']['title'] ?></h2>
<?php echo  $data['Company']['body'] ?>
<h3>Категории</h3>

<?php foreach($data['Mark'] as $item): ?>
	<a href="/<?=$lang?>marks/<?=$item['id']?>"><?= $item['title'] ?></a><br>
<?php endforeach; ?>
