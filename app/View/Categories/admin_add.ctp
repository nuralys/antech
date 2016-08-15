<div class="admin_add">
	<div class="ad_up">
		<h2>Добавление категории</h2>
	</div>
<?php 
echo $this->Form->create('Category', array('type' => 'file'));
echo $this->Form->input('title', array('label' => 'Название:'));
echo $this->Form->input('img', array('label' => 'Логотип:', 'type' => 'file'));
?>
<div class="input select">
<label for="CategoryCompanyId">Компании:</label>
	<select required name="data[Category][company_id]" id="CategoryCompanyId">
		<option value="">Выберите компанию</option>
		<?php foreach($companies as $key => $value): ?>
			<option value="<?=$key?>"><?=$value?></option>
		<?php endforeach ?>
	</select>
</div>
<?
echo $this->Form->end('Создать');
?>
</div>