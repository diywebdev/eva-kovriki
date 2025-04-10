<section id="cart">
    <div class="container">
        <h2 class="section_title mb-5">{{ tr.title }}</h2>
        
        <p><h7 style="color: red;">!!!Уважаемые Клиенты. На сайте предоставлена широкая база автомобилей и лекал к ним, более 90% лекал в наличии к заказу, но к сожалению, весь объем моделей и лекал к ним невозможно охватить. 
        Фактическое наличие лекала на выбранный Вами автомобиль сообщит менеджер при обратном звонке для уточнения деталей заказа. Спасибо за покупки.</h7> </p>
        
        
        <div style="text-align: center;"><big>Заказ №<b><span class="order_number">{{ order_number }}</span></b></big> от <b>{{ order_date }}</b></big></div><br>
        {% if cart | length %}
        <div class="cart_box" id="cartBox">
            <div class="cart_table_box cartTableBox">
                <table class="table cart_table cartTable">
                    <thead>
                        <tr>
                            <td class="cart_img headtd">{{ tr.td_1 }}</td>
                            <td class="cart_title headtd">{{ tr.td_2 }}</td>
                            <td class="cart_desc headtd">{{ tr.td_3 }}</td>
                            <td class="cart_count headtd">{{ tr.td_4 }}</td>
                            <td class="cart_price headtd">{{ tr.td_5 }}</td>
                            <td class="cart_remove headtd"></td>
                        </tr>
                    </thead>
                    <tbody>
                        {% for key,c in cart %}
                        <tr class="cartTr" data-id="{{ key }}">
                            <td class="cart_img bodytd">
                                <div class="cart_img_box">
                                    <img src="https://ева-крым.рф/update2/resize.php?w=155&photo=/uploads/{{ c.img }}">
                                </div>
                            </td>
                            <td class="cart_title bodytd">
                                <p class="name">{{ c.name }}</p>
                            </td>
                            <td class="cart_desc bodytd">
                                <div class="text_description">
                                    {% if c.car_type %} {{ c.car_type }}<br>   {% endif %}
                                    {{ c.complact | raw }}:<br>
                                    {{ c.trunk }}{% if c.trunk %},<br> {% endif %}
                                    {{ c.saddle }}{% if c.saddle %}, <br>{% endif %}
                                    Форма ячейки: {{ c.type }},<br>
                                    Коврик: {{ c.body_color }},<br>
                                    Окантовка: {{ c.border_color }}<br>
                                    Тип коврика: {{ c.types }}<br>
                                    Тунель: {{ c.tunnel }}<br>
                                    {% if c.prize %}
                                    Подарок: {{ c.prize }}<br>
                                    {% endif %}
                                    {% if c.icon %}
                                        {{ c.icon }} {{ c.icon_count }} шт.
                                    {% endif %}
                                </div>
                            </td>
                            <td class="cart_count bodytd">
                                <div class="count_box countBox" style="display: flex">
                                    <button type="button" class="btn count_btn countMinusBtn"><i class="icon fas fa-minus"></i></button>
                                    <input type="text" name="count" class="count_inp countInp" value="{{ c.count }}" min="1" mask="number">
                                    <input type="hidden" class="count_inp priceInp" value="{{ c.price }}">
                                    <button type="button" class="btn count_btn countPlusBtn"><i class="icon fas fa-plus"></i></button>
                                </div>
                            </td>
                            <td class="cart_price bodytd">
                                <p><span class="thisPrice">{{ c.price * c.count }}</span> {{ tr.currency }}</p>
                            </td>
                            <td class="cart_remove bodytd">
                                <button type="button" class="cart_remove_btn cartRemoveBtn"><i class="icon fas fa-times"></i></button>
                            </td>
                        </tr>
                        {% endfor %}
                        <tr class="cartHid">
                            <td class="bodytdnew" colspan="4" align="right">Предварительная стоимость:</td>
                            <td class="bodytd"><span class="predPrice">{{ c.price * c.count }}</span> {{ tr.currency }}</td>
                        </tr>
                    <tr>
                        <td class="bodytdnew" colspan="4" align="right">В том числе стоимость доставки:</td>
                        <td class="bodytd"><span class="deliveryPrice">0</span> {{ tr.currency }}</td>
                    </tr>
                        {% if price_value %}
                        <tr>
                            <td class="bodytdnew" colspan="4" align="right">Скидка дня:</td>
                            <td class="bodytd"><span class="salePrice">{{ price_value }}</span> %</td>
                        </tr>
                        {% endif %}
                        <tr>
                            <td class="bodytdnew" colspan="4" align="right"><b>Итого:</b></td>
                            <td class="bodytd" ><span class="allPrice">{{ c.price * c.count }}</span> {{ tr.currency }}</td>
                        </tr>

                    </tbody>
                </table>
            </div>
            <form action="/cart/order" method="POST" class="row cart_form" onsubmit="sendCartForm(this, event)">
                        <input type="hidden" name="order_number" value="{{ order_number }}">
                
                <div class="col-lg-12"><font color="red">
                    <p>
            <input type="checkbox" name="privacy" required="required"> Я ознакомлен и согласен с <a href="/politika.pdf" target="_blank">Политикой конфиденциальности</a> на обработку персональных данных<br> 
            <input type="checkbox" name="privacy" required="required"> Я ознакомлен и согласен с <a href="/usloviya.pdf" target="_blank">Условиями</a> оплаты, доставки и возврата а также гарантией<br>
            <input type="checkbox" name="privacy" required="required"> Я подтверждаю свои намерения о покупке а также корректность введенных контактных данных
        </p> !!!Уважаемы Клиенты. Наблюдаются временные затруднения с доставкой писем на почтовые ящики сервиса gmail.com. Используйте почтовые ящики сервисов mail.ru, яндекс и др.</font>
</div>
                <div class="col-lg-6">
                    <div class="input_group inp_before focus">
                        <input type="text" name="name" size="40" placeholder="{{ tr.name }}" class="" required="required">
                        <span class="input_addon"><i class="fas fa-user"></i></span>
                    </div>
                    <div class="input_group inp_before focus">
                        <input type="text" name="email" size="40" placeholder="{{ tr.email }}" class="" required="required" mask="email">
                        <span class="input_addon"><i class="fas fa-envelope"></i></span>
                    </div>
                    <div class="input_group focus">
                        <textarea name="text" placeholder="{{ tr.comment }}" class="" ></textarea>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="input_group inp_before focus">
                        <input type="text" name="phone" size="40" placeholder="{{ tr.phone }}" class="" required="required" mask="phone">
                        <span class="input_addon"><i class="fas fa-phone"></i></span>
                    </div>
                    <div class="form_group for_region" style="margin-bottom: 11px">
                        <div class="input_group for_select focus mb-0">
                            <select name="region" class="cartRegionSelect" >
                                <option value="0">{{ tr.region_type }}</option>
                                <option value="0">{{ tr.region_0 }}</option>
                                {% for val, region in regions %}
                                <option value="{{ val }}">{{ region }}</option>
                                {% endfor %}
                            </select>
                            <div class="regions_price_list" style="display: none;">
                                {% for val, price in regions_price %}
                                <input type="hidden" disabled name="{{ val }}" value="{{ price }}" class="regionPriceListInp">
                                {% endfor %}
                            </div>
                        </div>
                        <p class="mb-0 pl-3 region_price_text regionPriceText">
                            <span class="deliveryPrice">0</span>
                            <span>{{ tr.region_price_text }}</span>
                        </p>
                    </div>
                    <div class="input_group inp_before focus">
                        <input type="text" name="addres" size="40" placeholder="{{ tr.addres_shiping }}" class="cartRegionTypeInp" >
                        <span class="input_addon"><i class="fas fa-map-marker-alt"></i></span>
                    </div>
                    <div class="input_group for_select focus">
                        <select name="oplata" class="cartPaymentSelect" required="required">
                            <option value="0">{{ tr.oplata_type }}</option>
                            <option value="{{ tr.oplata_0 }}">{{ tr.oplata_0 }}</option>
                            <option value="{{ tr.oplata_1 }}">{{ tr.oplata_1 }}</option>
                            <option value="{{ tr.oplata_2 }}">{{ tr.oplata_2 }}</option>
                        </select>
                    </div>
                </div>
                <div class="col-12">
                    <div class="input_group">
                        <h3 class="all_price allPriceText text-primary">{{ tr.sum_text }} <span class="allPrice">0</span> {{ tr.currency }}</h3>
                        <input type="hidden" name="all_price" value="" id="allPriceInp">
                        <textarea name="table" style="display: none;" id="tableHtml"></textarea>
                    </div>
                    <div class="btn_box pt-4 mb-5">
                        <div></div>
                        <button type="submit" class="btn order_btn">{{ tr.order_btn }}</button>
                        <div></div>
                    </div>
                </div>
            </form>
        </div>
        {% else %}
        <h2 class="empty_cart">{{ tr.empty_cart }}</h2>
        {% endif %}
        <h2 class="send_order text-primary sendOrder">{{ tr.send_order }}</h2>
    </div>
</section>