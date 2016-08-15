<div class="admin_add">
	<div class="ad_up">
		<h2>Добавление материала</h2>
	</div>
<?php 
echo $this->Form->create('Mark');
echo $this->Form->input('title', array('label' => 'Название:'));
?>
<div class="input select">
<label for="MarkCategoryId">Категории:</label>
	<select required name="data[Mark][category_id]" id="MarkCategoryId">
		<option value="">Выберите категорию</option>
		<?php foreach($categories as $key => $value): ?>
			<option value="<?=$key?>"><?=$value?></option>
		<?php endforeach ?>
	</select>
</div>
<?
echo $this->Form->end('Создать');
?>
</div>