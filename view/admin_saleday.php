<div class="admin_price">
	<form action="/admin_saleday/save" method="POST" enctype="multipart/form-data" class="row form">
		<div class="col-md-6 offset-md-3">
			<h3 class="text-center">Скидки дня</h3>
			<div class="form_group">
				<label>{{ sale[0].name }}</label>
				<input type="text" name="{{ sale[0].id }}" value="{{ sale[0].value }}" placeholder="Վերնագիր (AM)">
			</div>
            <div class="form_group">
                <label>{{ sale[1].name }}</label>
                <input type="text" name="{{ sale[1].id }}" value="{{ sale[1].value }}" placeholder="Վերնագիր (AM)">
            </div>
            <div class="form_group">
                <label>{{ sale[2].name }}</label>
                <input type="text" name="{{ sale[2].id }}" value="{{ sale[2].value }}" placeholder="Վերնագիր (AM)">
            </div>
            <div class="form_group">
                <label>{{ sale[3].name }}</label>
                <input type="text" name="{{ sale[3].id }}" value="{{ sale[3].value }}" placeholder="Վերնագիր (AM)">
            </div>
            <div class="form_group">
                <label>{{ sale[4].name }}</label>
                <input type="text" name="{{ sale[4].id }}" value="{{ sale[4].value }}" placeholder="Վերնագիր (AM)">
            </div>
            <div class="form_group">
                <label>{{ sale[5].name }}</label>
                <input type="text" name="{{ sale[5].id }}" value="{{ sale[5].value }}" placeholder="Վերնագիր (AM)">
            </div>
            <div class="form_group">
                <label>{{ sale[6].name }}</label>
                <input type="text" name="{{ sale[6].id }}" value="{{ sale[6].value }}" placeholder="Վերնագիր (AM)">
            </div>

			<div class="input_group inputGroup" style="display: none">
				<div class="btn_box">
					<div></div>
					<button type="button" class="btn fileBtn">Նկար</button>
					<div></div>
				</div>
				<input type="file" name="img" class="fileInput" style="display: none;">
				<div class="image_list imageList">
                    {% if sale.img %}
					<div class="tpl"><img src="/uploads/{{ sale.img }}"></div>
                    {% endif %}
				</div>
			</div>
		</div>
		<div class="col-md-6 offset-md-3">
			<div class="btn_box mt-2">
                <a href="/admin_saleday/delete" class="btn btn-danger confirmHref">Сбросить всё</a>
				<button class="btn">Сохранить</button>
			</div>
		</div>
	</form>
</div>