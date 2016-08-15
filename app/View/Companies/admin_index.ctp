<a href="/admin/companies/add">Добавить материал</a><br>
<table>
<th>Название</th><th>Редактировать</th><th>Удаление</th>
<?php foreach ($data as $item) : ?>
	<tr>
	<td>
	<?php  foreach($item['titleTranslation'] as $title): ?>
		<?= $title['locale'] .': '. $title['content']; ?><br>
	<?php endforeach; ?>
	 
	</td>
	
	<td>
	<a href="/admin/companies/edit/<?=$item['Company']['id']?>?lang=ru"> рус</a> |
	 <a href="/admin/companies/edit/<?=$item['Company']['id']?>?lang=kz"> каз</a> |
	 <a href="/admin/companies/edit/<?=$item['Company']['id']?>?lang=en"> eng</a></td>
	 <td>
<div class="news_del">	<?php echo $this->Form->postLink('Удалить', array('action' => 'admin_delete', $item['Company']['id']), array('confirm' => 'Подтвердите удаление')); ?>
			</div> 
	</td>
	</tr>
<?php endforeach; ?>
</table>
