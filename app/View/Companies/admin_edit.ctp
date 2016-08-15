<div class="admin_add">
	<div class="ad_up">
		<h2>Редактирование компании</h2>
	</div>
<?php 
echo $this->Form->create('Company', array('type' => 'file'));
echo $this->Form->input('title', array('label' => 'Название:'));
?>
<?php if(isset($this->request->query['lang']) && $this->request->query['lang'] == 'ru'): ?>
<?php echo $this->Form->input('img', array('label' => 'Логотип:', 'type' => 'file'));?>
<?php endif ?>
<?php
echo $this->Form->input('body', array('label' => 'Текст:', 'id' => 'editor'));
echo $this->Form->input('address', array('label' => 'Адрес:'));
echo $this->Form->input('phone', array('label' => 'Телефон:'));
echo $this->Form->input('email', array('label' => 'E-mail:'));
echo $this->Form->input('keywords', array('label' => 'Ключевые слова:'));
echo $this->Form->input('description', array('label' => 'Описание:'));
echo $this->Form->end('Создать');
?>
<script type="text/javascript">
	 CKEDITOR.replace( 'editor' );
</script>
</div>