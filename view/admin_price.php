<div class="admin_price">
	<form action="/admin_price/save" method="POST" class="row form">
		<div class="col-md-6">
			<h3 class="text-center">Седан</h3>
			<div class="form_group">
				<label>Коллекция ковров</label>
				<input type="number" name="1[complact]" value="{{ price[0].complact }}" placeholder="Коллекция ковров">
			</div>
			<div class="form_group">
				<label>Коврик водителя</label>
				<input type="number" name="1[no_complact_1]" value="{{ price[0].no_complact_1 }}" placeholder="Коврик водителя">
			</div>
			<div class="form_group">
				<label>Два ковра впереди</label>
				<input type="number" name="1[no_complact_2]" value="{{ price[0].no_complact_2 }}" placeholder="Два ковра впереди">
			</div>
			<div class="form_group">
				<label>Три ковра сзади</label>
				<input type="number" name="1[no_complact_3]" value="{{ price[0].no_complact_3 }}" placeholder="Три ковра сзади">
			</div>
            <div class="form_group">
                <label>Передний ряд (коммерческий транспорт)</label>
                <input type="number" name="1[complact_1]" value="{{ price[0].complact_1 }}" placeholder="Передний ряд (коммерческий транспорт)">
            </div>
			<div class="form_group">
				<label>Коврик на багажник</label>
				<input type="number" name="1[trunk]" value="{{ price[0].trunk }}" placeholder="Коврик на багажник">
			</div>
            <div class="form_group">
                <label>Подпятник (пластик)</label>
                <input type="number" name="1[saddle]" value="{{ price[0].saddle }}" placeholder="Подпятник">
            </div>
            <div class="form_group">
                <label>Подпятник (алюминиевый)</label>
                <input type="number" name="1[saddle_2]" value="{{ price[0].saddle_2 }}" placeholder="Подпятник">
            </div>
            <div class="form_group">
                <label>Подпятник (металический)</label>
                <input type="number" name="1[saddle_3]" value="{{ price[0].saddle_3 }}" placeholder="Подпятник">
            </div>
            <div class="form_group">
                <label>Подпятник (Z-металический)</label>
                <input type="number" name="1[saddle_4]" value="{{ price[0].saddle_4 }}" placeholder="Подпятник">
            </div>
			<div class="form_group">
				<label>Фирменный знак</label>
				<input type="number" name="1[icon]" value="{{ price[0].icon }}" placeholder="Фирменный знак">
			</div>
            <div class="form_group">
                <label>Тип 2d(с разрезом)</label>
                <input type="number" name="1[type_1]" value="{{ price[0].type_1 }}" placeholder="2d(с разрезом)">
            </div>
            <div class="form_group">
                <label>Тип 2d(с 3d с лапкой)</label>
                <input type="number" name="1[type_2]" value="{{ price[0].type_2 }}" placeholder="2d(с 3d с лапкой)">
            </div>
            <div class="form_group">
                <label>Тип 3d(с бортами) %</label>
                <input type="number" name="1[type_3]" value="{{ price[0].type_3 }}" placeholder="3d(с бортами)">
            </div>
            <div class="form_group">
                <label>С тунелем</label>
                <input type="number" name="1[tunnel_1]" value="{{ price[0].tunnel_1 }}" placeholder="С тунелем">
            </div>
            <div class="form_group">
                <label>Без тунеля</label>
                <input type="number" name="1[tunnel_2]" value="{{ price[0].tunnel_2 }}" placeholder="Без тунеля">
            </div>
            <div class="form_group">
                <label>Активировать подарок</label><br>
                <input type="radio" name="1[prize_active]" value="1" {% if price[0].prize_active=='1' %}checked="checked"{% endif %}> Да
                <input type="radio" name="1[prize_active]" value="0" {% if price[0].prize_active=='0' %}checked="checked"{% endif %}placeholder="Подарок"> Нет
            </div>
            <div class="form_group">
                <label>Подарок</label>
                <input type="number" name="1[prize]" value="{{ price[0].prize }}" placeholder="Подарок">
            </div>
		</div>
		<div class="col-md-6">
			<h3 class="text-center">Внедорожник</h3>
			<div class="form_group">
				<label>Коллекция ковров</label>
				<input type="number" name="2[complact]" value="{{ price[1].complact }}" placeholder="Коллекция ковров">
			</div>
			<div class="form_group">
				<label>Коврик водителя</label>
				<input type="number" name="2[no_complact_1]" value="{{ price[1].no_complact_1 }}" placeholder="Коврик водителя">
			</div>
			<div class="form_group">
				<label>Два ковра впереди</label>
				<input type="number" name="2[no_complact_2]" value="{{ price[1].no_complact_2 }}" placeholder="Два ковра впереди">
			</div>
			<div class="form_group">
				<label>Три ковра сзади</label>
				<input type="number" name="2[no_complact_3]" value="{{ price[1].no_complact_3 }}" placeholder="Три ковра сзади">
			</div>
            <div class="form_group">
                <label>Передний ряд (коммерческий транспорт)</label>
                <input type="number" name="2[complact_1]" value="{{ price[1].complact_1 }}" placeholder="Передний ряд (коммерческий транспорт)">
            </div>
			<div class="form_group">
				<label>Коврик на багажник</label>
				<input type="number" name="2[trunk]" value="{{ price[1].trunk }}" placeholder="Коврик на багажник">
			</div>
            <div class="form_group">
                <label>Подпятник (пластик)</label>
                <input type="number" name="2[saddle]" value="{{ price[1].saddle }}" placeholder="Подпятник">
            </div>
            <div class="form_group">
                <label>Подпятник (алюминиевый)</label>
                <input type="number" name="2[saddle_2]" value="{{ price[1].saddle_2 }}" placeholder="Подпятник">
            </div>
            <div class="form_group">
                <label>Подпятник (металический)</label>
                <input type="number" name="2[saddle_3]" value="{{ price[1].saddle_3 }}" placeholder="Подпятник">
            </div>
            <div class="form_group">
                <label>Подпятник (Z-металический)</label>
                <input type="number" name="2[saddle_4]" value="{{ price[1].saddle_4 }}" placeholder="Подпятник">
            </div>
			<div class="form_group">
				<label>Фирменный знак</label>
				<input type="number" name="2[icon]" value="{{ price[1].icon }}" placeholder="Фирменный знак">
			</div>
            <div class="form_group">
                <label>Тип 2d(с разрезом)</label>
                <input type="number" name="2[type_1]" value="{{ price[1].type_1 }}" placeholder="2d(с разрезом)">
            </div>
            <div class="form_group">
                <label>Тип 2d(с 3d с лапкой)</label>
                <input type="number" name="2[type_2]" value="{{ price[1].type_2 }}" placeholder="2d(с 3d с лапкой)">
            </div>
            <div class="form_group">
                <label>Тип 3d(с бортами) %</label>
                <input type="number" name="2[type_3]" value="{{ price[1].type_3 }}" placeholder="3d(с бортами)">
            </div>
            <div class="form_group">
                <label>С тунелем</label>
                <input type="number" name="2[tunnel_1]" value="{{ price[1].tunnel_1 }}" placeholder="С тунелем">
            </div>
            <div class="form_group">
                <label>Без тунеля</label>
                <input type="number" name="2[tunnel_2]" value="{{ price[1].tunnel_2 }}" placeholder="Без тунеля">
            </div>
            <div class="form_group">
                <label>Активировать подарок</label><br>
                <input type="radio" name="2[prize_active]" value="1" {% if price[1].prize_active=='1' %}checked="checked"{% endif %}> Да
                <input type="radio" name="2[prize_active]" value="0" {% if price[1].prize_active=='0' %}checked="checked"{% endif %}placeholder="Подарок"> Нет
            </div>
            <div class="form_group">
                <label>Подарок</label>
                <input type="number" name="2[prize]" value="{{ price[1].prize }}" placeholder="Подарок">
            </div>
		</div>
		<div class="col-12">
			<div class="btn_box mt-2">
				<div></div>
				<button class="btn">Сохранить</button>
				<div></div>
			</div>
		</div>
	</form>
</div>