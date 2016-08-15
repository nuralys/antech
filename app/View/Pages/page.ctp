<div class="cr ov">
	<div class="ov">
		<div class="h_heading">
			<h1><?=$title_for_layout?></h1>
		</div>
		
		<div class="content about_content">
			<?=$page['Page']['body'] ?>

			<?php if(isset($this->request->params['pass'][0]) && $this->request->params['pass'][0] == 'investors'): ?>
			<div class="form_part">
				<form action="/pages/request" method="post" accept-charset="utf-8">
					<fieldset>Связаться с нами</fieldset>
					<div class="form_line">
						<div class="form_row">
							<div class="form_margin">
								<input type="text" name="data[Page][fio]" placeholder="Имя...">
							</div>	
						</div>
						<div class="form_row">
							<div class="form_margin">
								<input type="text" name="data[Page][email]" placeholder="Почта...">
							</div>	
						</div>
						<div class="form_row">
							<div class="form_margin">
								<input type="text" name="data[Page][phone]" placeholder="Номер...">
							</div>	
						</div>
					</div>
					<div class="form_text">
						<textarea name="data[Page][body]" placeholder="Сообщение..."></textarea>
					</div>
					<div class="ov">
						<button class="send_form" type="submit">Отправить</button>
					</div>
				</form>
			</div>
		<?php endif ?>
		</div>				
	</div>
</div>