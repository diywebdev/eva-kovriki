<section class="container-fluid">
	<div class="container">
		<h1 class="section_title mb-3">{{ tr.title }}</h1>
		<div class="row">
			<div class="col-md-6">
				<form action="/contact/send" method="POST" class="form contact_form" id="sendContactForm">
					<p class="contact_response_text responseText">{{ tr.response_text }}</p>
					<div class="input_group inp_before">
						<input type="text" name="name" size="40" placeholder="{{ tr.name }}" class="inpItem" required="required">
						<span class="input_addon"><i class="fas fa-user"></i></span>
					</div>
					<div class="input_group inp_before">
						<input type="text" name="phone" size="40" placeholder="{{ tr.phone }}" class="inpItem" required="required"  mask="phone">
						<span class="input_addon"><i class="fas fa-phone"></i></span>
					</div>
					<div class="input_group inp_before">
						<input type="text" name="email" size="40" placeholder="{{ tr.email }}" class="inpItem" required="required">
						<span class="input_addon"><i class="fas fa-envelope"></i></span>
					</div>
					<div class="input_group">
						<textarea name="text" placeholder="{{ tr.text }}" class="inpItem" required="required"></textarea>
					</div>
                    <div class="g-recaptcha" data-sitekey="6LcD34wcAAAAACqJtTkqQkH-4ZKjpPp66XKupyMM"></div>
                    <h2 id="recaptchaError"></h2>
                    <div class="btn_box pb-4">
						<div></div>
						<button type="submit" class="btn">{{ tr.send }}</button>
					</div>
                    </form>
			</div>
			<div class="col-md-6">
				<div class="contact_row_box">
					<div class="icon_box text-primary"><i class="icon fas fa-map-marker-alt"></i></div>
					<div class="text">
						<h2>{{ tr.addres_title }}</h2>
						<p>{{ tr.addres }}</p>
					</div>
				</div>
				<div class="contact_row_box">
					<div class="icon_box text-primary"><i class="icon fas fa-phone"></i></div>
					<div class="text">
						<h2>{{ tr.phone_title }}</h2>
						<p>+7(978)174-78-27</p>
					</div>
				</div>
                <div class="contact_row_box" data-toggle="modal" data-target="#orderCallModal">
                    <div class="icon_box text-primary"><i class="icon fas fa-phone"></i></div>
                    <div class="text">
                        <h2>{{ tr.call_btn }}</h2>
                        <p>Жми здесь!</p>
                    </div>
                </div>
				<div class="contact_row_box">
					<div class="icon_box text-primary"><i class="icon fab fa-vk"></i></div>
					<div class="text">
						<h2>{{ tr.vk_title }}</h2>
						<p><a href="https://vk.com/eva_krym" target="_blanck">Ева-крым</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="container-fluid">
	<div class="container">
		<h1 class="section_title mb-3">Региональные дилеры на территории Крыма</h1>
		<h5>Стань первым!!!</h5>
		<h5>Спешите стать первым в своем регионе и продавать продукт на прямую от производителя ковриков №1 в Крыму. Получите  специальные условия, собственный сайт и коммерческую почту  бесплатно.</h5>
		<style>
			/* Стили таблицы (IKSWEB) */
			table.iksweb{text-decoration: none;border-collapse:collapse;width:100%;text-align:center;}
			table.iksweb th{font-weight:500;font-size:14px; color:#ffffff;background-color:#354251;}
			table.iksweb td{font-size:13px;color:#354251;}
			table.iksweb td,table.iksweb th{white-space:pre-wrap;padding:10px 5px;line-height:13px;vertical-align: middle;border: 1px solid #354251;}	
			table.iksweb tr:hover{background-color:#f9fafb}
			table.iksweb tr:hover td{color:#00000;cursor:default;}
			.mobile-table{width: 100%; max-width: 100%; overflow-x: auto;}
		</style>
		<div class="mobile-table mb-3">
    <table class="iksweb">
	<tbody>
		<tr>
			<td colspan="6">Дилерская сеть ЕВА-Крым.рф, производителя ковриков и аксессуаров EVAtuning в Крыму</td>
		</tr>
		<tr>
		    <td>Логотип</td>
			<td>Регион (АО)</td>
			<td>Сайт</td>
			<td>Email</td>
			<td>Телефон</td>
			<td>Статус</td>
		</tr>
		<tr>
		    <td><img src="https://юбк.ева-крым.рф/icon.png"></td>
			<td>Бахчисарай</td>
			<td><a href="https://ева-крым.рф" target="_blank" title="Купить коврики EVAtuning в Бахчисарае">https://бахчисарай.ева-крым.рф</a></td>
			<td>bahchisaraj@eva-crimea.ru</td>
			<td>+7(978)174-78-27</td>
			<td>Доступно</td>
		</tr>
		<tr>
		    <td><img src="https://юбк.ева-крым.рф/icon.png"></td>
			<td>Белогорск</td>
			<td><a href="https://ева-крым.рф" target="_blank" title="Купить коврики EVAtuning в Белогорске">https://белогорск.ева-крым.рф</a></td>
			<td>belogorsk@eva-crimea.ru</td>
			<td>+7(978)174-78-27</td>
			<td>Доступно</td>
		</tr>
		<tr>
		    <td><img src="https://юбк.ева-крым.рф/icon.png"></td>
			<td>Кировское</td>
			<td><a href="https://ева-крым.рф" target="_blank" title="Купить коврики EVAtuning в Кировском">https://кировское.ева-крым.рф</a></td>
			<td>kirovskoe@eva-crimea.ru</td>
			<td>+7(978)174-78-27</td>
			<td>Доступно</td>
		</tr>
		<tr>
		    <td><img src="https://юбк.ева-крым.рф/icon.png"></td>
			<td>Красногвардейск</td>
			<td><a href="https://ева-крым.рф" target="_blank" title="Купить коврики EVAtuning в Красногвардейске">https://красногвардейск.ева-крым.рф</a></td>
			<td>krasnogvardejsk@eva-crimea.ru</td>
			<td>+7(978)174-78-27</td>
			<td>Доступно</td>
		</tr>
		<tr>
		    <td><img src="https://юбк.ева-крым.рф/icon.png"></td>
			<td>Ленино</td>
			<td><a href="https://ева-крым.рф" target="_blank" title="Купить коврики EVAtuning в Ленино">https://ленино.ева-крым.рф</a></td>
			<td>lenino@eva-crimea.ru</td>
			<td>+7(978)174-78-27</td>
			<td>Доступно</td>
		</tr>
		<tr>
		    <td><img src="https://юбк.ева-крым.рф/icon.png"></td>
			<td>Нижнегорск</td>
			<td><a href="https://ева-крым.рф" target="_blank" title="Купить коврики EVAtuning в Нижнегорске">https://нижнегорск.ева-крым.рф</a></td>
			<td>nizhnegorsk@eva-crimea.ru</td>
			<td>+7(978)174-78-27</td>
			<td>Доступно</td>
		</tr>
		<tr>
		    <td><img src="https://юбк.ева-крым.рф/icon.png"></td>
			<td>Первомайск</td>
			<td><a href="https://ева-крым.рф" target="_blank" title="Купить коврики EVAtuning в Первомайске">https://первомайск.ева-крым.рф</a></td>
			<td>pervomajsk@eva-crimea.ru</td>
			<td>+7(978)174-78-27</td>
			<td>Доступно</td>
		</tr>
		<tr>
		    <td><img src="https://юбк.ева-крым.рф/icon.png"></td>
			<td>Раздольное</td>
			<td><a href="https://ева-крым.рф" target="_blank" title="Купить коврики EVAtuning в Раздольном">https://раздольное.ева-крым.рф</a></td>
			<td>razdolnoe@eva-crimea.ru</td>
			<td>+7(978)174-78-27</td>
			<td>Доступно</td>
		</tr>
			<tr>
		    <td><img src="https://юбк.ева-крым.рф/icon.png"></td>
			<td>Советское</td>
			<td><a href="https://ева-крым.рф" target="_blank" title="Купить коврики EVAtuning в Советском">https://советское.ева-крым.рф</a></td>
			<td>sovetskoe@eva-crimea.ru</td>
			<td>+7(978)174-78-27</td>
			<td>Доступно</td>
		</tr>
		<tr>
		    <td><img src="https://юбк.ева-крым.рф/icon.png"></td>
			<td>Черноморское</td>
			<td><a href="https://ева-крым.рф" target="_blank" title="Купить коврики EVAtuning в Черноморском">https://черноморское.ева-крым.рф</a></td>
			<td>chernomorskoe@eva-crimea.ru</td>
			<td>+7(978)174-78-27</td>
			<td>Доступно</td>
		</tr>
			<tr>
		    <td><img src="https://юбк.ева-крым.рф/icon.png"></td>
			<td>Алушта</td>
			<td><a href="https://ева-крым.рф" target="_blank" title="Купить коврики EVAtuning в Алуште">https://алушта.ева-крым.рф</a></td>
			<td>alushta@eva-crimea.ru</td>
			<td>+7(978)174-78-27</td>
			<td>Доступно</td>
		</tr>
			<tr>
		    <td><img src="https://юбк.ева-крым.рф/icon.png"></td>
			<td>Армянск</td>
			<td><a href="https://ева-крым.рф" target="_blank" title="Купить коврики EVAtuning в Армянске">https://армянск.ева-крым.рф</a></td>
			<td>armyansk@eva-crimea.ru</td>
			<td>+7(978)174-78-27</td>
			<td>Доступно</td>
		</tr>
		<tr>
		    <td><img src="https://юбк.ева-крым.рф/icon.png"></td>
			<td>Джанкой</td>
			<td><a href="https://ева-крым.рф" target="_blank" title="Купить коврики EVAtuning в Джанкое">https://джанкой.ева-крым.рф</a></td>
			<td>dzhankoj@eva-crimea.ru</td>
			<td>+7(978)174-78-27</td>
			<td>Доступно</td>
		</tr>
		<tr>
		    <td><img src="https://юбк.ева-крым.рф/icon.png"></td>
			<td>Евпатория</td>
			<td><a href="https://ева-крым.рф" target="_blank" title="Купить коврики EVAtuning в Евпатории">https://евпатория.ева-крым.рф</a></td>
			<td>evpatoriya@eva-crimea.ru</td>
			<td>+7(978)174-78-27</td>
			<td>Доступно</td>
		</tr>
			<tr>
		    <td><img src="https://юбк.ева-крым.рф/icon.png"></td>
			<td>Керчь</td>
			<td><a href="https://ева-крым.рф" target="_blank" title="Купить коврики EVAtuning в Керчи">https://керчь.ева-крым.рф</a></td>
			<td>kerch@eva-crimea.ru</td>
			<td>+7(978)174-78-27</td>
			<td>Доступно</td>
		</tr>
		<tr>
		    <td><img src="https://юбк.ева-крым.рф/icon.png"></td>
			<td>Красноперекопск</td>
			<td><a href="https://ева-крым.рф" target="_blank" title="Купить коврики EVAtuning в Красноперекопске">https://красноперекопск.ева-крым.рф</a></td>
			<td>krasnoperekopsk@eva-crimea.ru</td>
			<td>+7(978)174-78-27</td>
			<td>Доступно</td>
		</tr>
		<tr>
		    <td><img src="https://юбк.ева-крым.рф/icon.png"></td>
			<td>Саки</td>
			<td><a href="https://ева-крым.рф" target="_blank" title="Купить коврики EVAtuning в Саках">https://саки.ева-крым.рф</a></td>
			<td>saki@eva-crimea.ru</td>
			<td>+7(978)174-78-27</td>
			<td>Доступно</td>
		</tr>
		<tr>
		    <td><img src="https://юбк.ева-крым.рф/icon.png"></td>
			<td>Симферополь</td>
			<td><a href="https://ева-крым.рф" target="_blank" title="Купить коврики EVAtuning в Симферополе">https://симферополь.ева-крым.рф</a></td>
			<td>simferopol@eva-crimea.ru</td>
			<td>+7(978)174-78-27</td>
			<td>Доступно</td>
		</tr>
		<tr>
		    <td><img src="https://юбк.ева-крым.рф/icon.png"></td>
			<td>Севастополь</td>
			<td><a href="https://ева-крым.рф" target="_blank" title="Купить коврики EVAtuning в Севастополе">https://севастополь.ева-крым.рф</a></td>
			<td>sevastopol@eva-crimea.ru</td>
			<td>+7(978)174-78-27</td>
			<td>Доступно</td>
		</tr>
		<tr>
		    <td><img src="https://юбк.ева-крым.рф/icon.png"></td>
			<td>Судак</td>
			<td><a href="https://ева-крым.рф" target="_blank" title="Купить коврики EVAtuning в Судаке">https://судак.ева-крым.рф</a></td>
			<td>sudak@eva-crimea.ru</td>
			<td>+7(978)174-78-27</td>
			<td>Доступно</td>
		</tr>	
		</tr>
			<tr>
		    <td><img src="https://юбк.ева-крым.рф/icon.png"></td>
			<td>Феодосия</td>
			<td><a href="https://ева-крым.рф" target="_blank" title="Купить коврики EVAtuning в Феодосии">https://феодосия.ева-крым.рф</a></td>
			<td>feodosiya@eva-crimea.ru</td>
			<td>+7(978)174-78-27</td>
			<td>Доступно</td>
		</tr>
		<tr>
		    <td><img src="https://юбк.ева-крым.рф/icon.png"></td>
			<td>Ялта</td>
			<td><a href="https://ева-крым.рф" target="_blank" title="Купить коврики EVAtuning в Ялте">https://ялта.ева-крым.рф</a></td>
			<td>yalta@eva-crimea.ru</td>
			<td>+7(978)174-78-27</td>
			<td>Доступно</td>
		</tr>	
	</tbody>
    </table>
			<h5>Выберите Ваш регион и подайте заявку в форме выше, если регион Доступен то Вы становитесь дилером региона.</h5>
		</div>
	</div>
</section>