<a href="/admin/marks/add">Добавить материал</a><br>
<table>
<th>Название</th><th>Редактировать</th><th>Удаление</th>
	<?php foreach ($data as $item) : ?>
	<tr>
		<td><?php  foreach($item['titleTranslation'] as $title): ?>
		<?= $title['locale'] .': '. $title['content']; ?><br>
	<?php endforeach; ?></td> 
		<td><a href="/admin/marks/edit/<?=$item['Mark']['id']?>?lang=ru"> рус</a> | 
		<a href="/admin/marks/edit/<?=$item['Mark']['id']?>?lang=kz"> каз</a> |
		<a href="/admin/marks/edit/<?=$item['Mark']['id']?>?lang=en"> анг</a>
		</td>
		<td><?php echo $this->Form->postLink('Удалить', array('action' => 'admin_delete', $item['Mark']['id']), array('confirm' => 'Подтвердите удаление')); ?></td>
	</tr>
	<?php endforeach; ?>
</table>