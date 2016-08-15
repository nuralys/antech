<h2><?php echo $data['Company']['title'] ?></h2>
<?php echo  $data['Company']['body'] ?>
<h3>Категории</h3>

<?php foreach($data['Category'] as $item): ?>
	<a href="/<?=$lang?>category/<?=$item['id']?>"><?= $item['title'] ?></a><br>
<?php endforeach; ?>
