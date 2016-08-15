<div class="cr ov">
	<div class="ov">
		<div class="h_heading">
			<h1><?=$title_for_layout?></h1>
		</div>
		<figure class="fl_l" style="margin-right:12px">
			<img src="/img/about.jpg" width="450x";>
		</figure>
		<div class="content about_content">
			<?=$page['Page']['body'] ?>

			<?php if(isset($this->request->params['pass'][0]) && $this->request->params['pass'][0] == 'investors'): ?>
			<div class="form_part">
				<form>
					<fieldset>Связаться с нами</fieldset>
					<div class="form_line">
						<div class="form_row">
							<div class="form_margin">
								<input type="text" placeholder="Имя...">
							</div>	
						</div>
						<div class="form_row">
							<div class="form_margin">
								<input type="text" placeholder="Почта...">
							</div>	
						</div>
						<div class="form_row">
							<div class="form_margin">
								<input type="text" placeholder="Номер...">
							</div>	
						</div>
					</div>
					<div class="form_text">
						<textarea placeholder="Сообщение..."></textarea>
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