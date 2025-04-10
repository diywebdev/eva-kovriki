<div id="adminAboutContent">
	<h3>Ծառայություններ</h3>
	<form action="/admin_service/{{ action }}" method="POST" enctype="multipart/form-data" class="inner_admin_content form">
		<div class="row">
			<div class="col-4 admin_form_group">
				<p class="lang_label">AM</p>
				<input type="text" value="{{ cat.title_am }}" name="title_am" placeholder="Վերնագիր">
			</div>
			<div class="col-4 admin_form_group">
				<p class="lang_label">RU</p>
				<input type="text" name="title_ru" value="{{ cat.title_ru }}" placeholder="Заголовок">
			</div>
			<div class="col-4 admin_form_group">
				<p class="lang_label">EN</p>
				<input type="text" name="title_en" value="{{ cat.title_en }}" placeholder="Title">
			</div>
		</div>
		<div class="row">
            <div class="col-4 admin_form_group">
                <input type="number" name="pos" value="{{ cat.pos }}" placeholder="ID">
            </div>
            <div class="col-4 admin_form_group">
                <button type="submit" class="btn">Պահպանել</button>
            </div>
		</div>
	</form>
</div>
