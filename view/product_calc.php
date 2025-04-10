<form action="/eva_kovriki/add_cart/{{ car.id }}" method="POST" class="row form" id="calcForm">
    <div class="col-xl-2 col-lg-4 col-md-6 order-md-1 order-2">
        <p class="calc_title md">{{ tr.product_order_sub_step_1 }} {{ tr.product_order_sub_title_1 }}</p>
        <p class="calc_title sm">{{ tr.product_order_sub_step_5 }} {{ tr.product_order_sub_title_1 }}</p>
        <input type="hidden" name="name" value="{{ car.title }}">
        {% if car.id == 0 %}
        <div class="input_group for_select">
            <select name="car_type" id="selectAutoType">
                <option value="0" disabled="disabled" selected="selected">{{ tr.product_order_type_1 }}</option>
                <option value="sedan">{{ tr.product_order_type_2 }}</option>
                <option value="geep">{{ tr.product_order_type_3 }}</option>
            </select>
        </div>
        {% endif %}
        <ul class="list calc_item_list">
            <li class="custom-control custom-checkbox mb-3 complact">
                <input type="checkbox" class="custom-control-input complactInp calcPaymentInp" data-price="{{ price.complact }}" data-price-geep="{{ price_1.complact }}" data-value="all" id="complactCheck" name="complact[]" checked="checked" value="complact|{{ tr.product_order_sub_title_1_text_1 }}">
                <label class="custom-control-label" for="complactCheck">{{ tr.product_order_sub_title_1_text_1 }}</label><br>
                <label class="product_label_price text-primary" data-price="{{ price.complact }}" data-price-geep="{{ price_1.complact }}"><span>{{ price.complact }}</span> {{ tr.product_order_currancy }}</label>
                <button type="button" class="calc_collapse_btn text-primary" data-toggle="collapse" data-target="#noComplact">{{ tr.product_order_sub_title_1_text_5 }}</button>
                <div id="noComplact" class="collapse no_complect_collapse">
                    <ul class="list calc_item_list pt-1">
                        <li class="custom-control custom-checkbox mb-3">
                            <input type="checkbox" class="custom-control-input complactInp calcPaymentInp" data-price="{{ price.no_complact_1 }}" data-price-geep="{{ price_1.no_complact_1 }}" data-value="single" id="noComplact1" name="complact[]" value="no_complact_1|{{ tr.product_order_sub_title_1_text_6 }}">
                            <label class="custom-control-label" for="noComplact1">{{ tr.product_order_sub_title_1_text_6 }}</label><br>
                            <label class="product_label_price text-primary" data-price="{{ price.no_complact_1 }}" data-price-geep="{{ price_1.no_complact_1 }}"><span>{{ price.no_complact_1 }}</span> {{ tr.product_order_currancy }}</label>
                        </li>
                        <li class="custom-control custom-checkbox mb-3">
                            <input type="checkbox" class="custom-control-input complactInp calcPaymentInp" data-price="{{ price.no_complact_2 }}" data-price-geep="{{ price_1.no_complact_2 }}" data-value="single" id="noComplact2" name="complact[]" value="no_complact_2|{{ tr.product_order_sub_title_1_text_7 }}">
                            <label class="custom-control-label" for="noComplact2">{{ tr.product_order_sub_title_1_text_7 }}</label><br>
                            <label class="product_label_price text-primary" data-price="{{ price.no_complact_2 }}" data-price-geep="{{ price_1.no_complact_2 }}"><span>{{ price.no_complact_2 }}</span> {{ tr.product_order_currancy }}</label>
                        </li>
                        <li class="custom-control custom-checkbox pb-1" style="border-bottom: 1px solid #d8a238;">
                            <input type="checkbox" class="custom-control-input complactInp calcPaymentInp" data-price="{{ price.no_complact_3 }}" data-price-geep="{{ price_1.no_complact_3 }}" data-value="single" id="noComplact3" name="complact[]" value="no_complact_3|{{ tr.product_order_sub_title_1_text_8 }}">
                            <label class="custom-control-label" for="noComplact3">{{ tr.product_order_sub_title_1_text_8 }}</label><br>
                            <label class="product_label_price text-primary" data-price="{{ price.no_complact_3 }}" data-price-geep="{{ price_1.no_complact_3 }}"><span>{{ price.no_complact_3 }}</span> {{ tr.product_order_currancy }}</label>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="custom-control custom-checkbox mb-3 complact1">
                <input type="checkbox" class="custom-control-input calcPaymentInp" data-price="{{ price.complact_1 }}" data-price-geep="{{ price_1.complact_1 }}" id="complact1" name="complact[]" value="complact_1|{{ tr.product_order_sub_title_1_text_11 }}">
                <label class="custom-control-label" for="complact1">{{ tr.product_order_sub_title_1_text_11 }}</label><br>
                <label class="product_label_price text-primary" data-price="{{ price.complact_1 }}" data-price-geep="{{ price_1.complact_1 }}"><span>{{ price.complact_1 }}</span> {{ tr.product_order_currancy }}</label>
            </li>
            <li class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input calcPaymentInp" data-price="{{ price.trunk }}" data-price-geep="{{ price_1.trunk }}" id="trunkCheck" name="trunk" value="trunk|{{ tr.product_order_sub_title_1_text_2 }}">
                <label class="custom-control-label" for="trunkCheck">{{ tr.product_order_sub_title_1_text_2 }}</label><br>
                <label class="product_label_price text-primary" data-price="{{ price.trunk }}" data-price-geep="{{ price_1.trunk }}"><span>{{ price.trunk }}</span> {{ tr.product_order_currancy }}</label>
            </li>
            <div id="saddleOne">
            <li class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input calcPaymentInp" data-type="type_1" data-price="{{ price.saddle }}" data-price-geep="{{ price_1.saddle }}" id="saddleCheck" name="saddle" value="saddle|{{ tr.product_order_sub_title_1_text_4 }}">
                <label class="custom-control-label" for="saddleCheck">{{ tr.product_order_sub_title_1_text_4 }}</label><br>
                <label class="product_label_price text-primary" data-price="{{ price.saddle }}" data-price-geep="{{ price_1.saddle }}"><span>{{ price.saddle }}</span> {{ tr.product_order_currancy }}
                    <svg width="1em" height="1em" viewBox="0 0 16 16" style="z-index: 1; cursor: pointer;" class="openPrimer" data-url="/img/sandlePrimer/type1.jpg" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10.5 8.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                        <path fill-rule="evenodd" d="M2 4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1.172a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 9.172 2H6.828a2 2 0 0 0-1.414.586l-.828.828A2 2 0 0 1 3.172 4H2zm.5 2a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1zm9 2.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0z"/>
                    </svg>
                </label>
            </li>
                <li class="custom-control custom-checkbox mb-3">
                    <input type="checkbox" class="custom-control-input calcPaymentInp" data-type="type_2"
                           data-price="{{ price.saddle_2 }}" data-price-geep="{{ price_1.saddle_2 }}" id="saddle2Check"
                           name="saddle" value="saddle_2|{{ tr.product_order_sub_title_1_text_41 }}">
                    <label class="custom-control-label" for="saddle2Check">{{ tr.product_order_sub_title_1_text_41 }}                    </label><br>
                    <label class="product_label_price text-primary" data-price="{{ price.saddle_2 }}"
                           data-price-geep="{{ price_1.saddle_2 }}"><span>{{ price.saddle_2 }}</span> {{
                        tr.product_order_currancy }}
                        <svg width="1em" height="1em" viewBox="0 0 16 16" style="z-index: 1; cursor: pointer;" class="openPrimer" data-url="/img/sandlePrimer/type3.jpg" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10.5 8.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                            <path fill-rule="evenodd" d="M2 4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1.172a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 9.172 2H6.828a2 2 0 0 0-1.414.586l-.828.828A2 2 0 0 1 3.172 4H2zm.5 2a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1zm9 2.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0z"/>
                        </svg>
                    </label>
                </li>
            <li class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input calcPaymentInp" data-type="type_3" data-price="{{ price.saddle_3 }}" data-price-geep="{{ price_1.saddle_3 }}" id="saddle3Check" name="saddle" value="saddle_3|{{ tr.product_order_sub_title_1_text_42 }}">
                <label class="custom-control-label" for="saddle3Check">{{ tr.product_order_sub_title_1_text_42 }}
                    </label><br>
                <label class="product_label_price text-primary" data-price="{{ price.saddle_3 }}" data-price-geep="{{ price_1.saddle_3 }}"><span>{{ price.saddle_3 }}</span> {{ tr.product_order_currancy }}
                    <svg width="1em" height="1em" viewBox="0 0 16 16" style="z-index: 1; cursor: pointer;" class="openPrimer" data-url="/img/sandlePrimer/type2.jpg" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10.5 8.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                        <path fill-rule="evenodd" d="M2 4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1.172a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 9.172 2H6.828a2 2 0 0 0-1.414.586l-.828.828A2 2 0 0 1 3.172 4H2zm.5 2a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1zm9 2.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0z"/>
                    </svg>
                </label>
            </li>
            <li class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input calcPaymentInp" data-type="type_4" data-price="{{ price.saddle_4 }}" data-price-geep="{{ price_1.saddle_4 }}" id="saddle4Check" name="saddle" value="saddle_4|{{ tr.product_order_sub_title_1_text_43 }}">
                <label class="custom-control-label" for="saddle4Check">{{ tr.product_order_sub_title_1_text_43 }}</label><br>
                <label class="product_label_price text-primary" data-price="{{ price.saddle_4 }}" data-price-geep="{{ price_1.saddle_4 }}"><span>{{ price.saddle_4 }}</span> {{ tr.product_order_currancy }}
                    <svg width="1em" height="1em" viewBox="0 0 16 16" style="z-index: 1; cursor: pointer;" class="openPrimer" data-url="/img/sandlePrimer/type4.jpg" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10.5 8.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                        <path fill-rule="evenodd" d="M2 4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1.172a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 9.172 2H6.828a2 2 0 0 0-1.414.586l-.828.828A2 2 0 0 1 3.172 4H2zm.5 2a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1zm9 2.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0z"/>
                    </svg>
                </label>
            </li>
            </div>
            <li class="custom-control custom-checkbox mb-3 forCountGroup">
                <input type="checkbox" class="custom-control-input calcPaymentInp forCount" data-price="{{ price.icon }}" data-price-geep="{{ price_1.icon }}" id="iconCheck" name="icon" value="icon|{{ tr.product_order_sub_title_1_text_3 }}">
                <label class="custom-control-label" for="iconCheck">{{ tr.product_order_sub_title_1_text_3 }}</label><br>
                <label class="product_label_price text-primary" data-price="{{ price.icon }}" data-price-geep="{{ price_1.icon }}"><span>{{ price.icon }}</span> {{ tr.product_order_currancy }}</label>
                <label class="product_label_price text-primary count_box">{{ tr.select_quantity }}</label>
                <div class="count_box countBox mt-1">
                    <button type="button" class="btn count_btn countMinusBtn"><i class="icon fas fa-minus"></i></button>
                    <input type="text" name="icon_count" class="count_inp countInp" value="1" min="1" mask="number">
                    <input type="hidden" class="count_inp priceInp" value="{{ price.icon }}" data-price-geep="{{ price_1.icon }}">
                    <button type="button" class="btn count_btn countPlusBtn"><i class="icon fas fa-plus"></i></button>
                </div>
            </li>
            <li>
                <input type="hidden" name="price" value="{{ price.complact }}" id="allPriceInp">
                <h1 class="all_calc_price text-primary"><span id="allPrice" data-price-geep="{{ price_1.complact }}">{{ price.complact }}</span> {{ tr.product_order_currancy }}</h1>
            </li>
        </ul>
    </div>
    <div class="col-xl-6 col-lg-8 col-md-6 order-md-2 order-1">
        <p class="calc_title md">{{ tr.product_order_sub_step_2 }} {{ tr.product_order_sub_title_2 }}</p>
        <p class="calc_title sm">{{ tr.product_order_sub_step_1 }} {{ tr.product_order_sub_title_2 }}</p>
        <div class="row no-gutters calc_center_box">
            <div class="col-lg-3 col-sm-6 matItemCol">
                <div class="mat_item mat_item_sota matItem active" data-type="sota" style="background-image: url('https://www.duffcar.ru/images/mat/sota.png');"></div>
                <p class="mat_title">{{ tr.product_order_sub_title_2_text_1 }}</p>
                <input type="radio" name="type" value="{{ tr.product_order_sub_title_2_text_1 }}" checked="checked" style="display: none;">
            </div>
            <div class="col-lg-3 col-sm-6 matItemCol">
                <div class="mat_item mat_item_romb matItem" data-type="romb" style="background-image: url('https://www.duffcar.ru/images/mat/romb.png');"></div>
                <p class="mat_title">{{ tr.product_order_sub_title_2_text_2 }}</p>
                <input type="radio" name="type" value="{{ tr.product_order_sub_title_2_text_2 }}" style="display: none;">
            </div>
            <div class="col-lg-6">
                <div class="calc_view_box" id="calcViewBox">
                    <figure class="body" id="figureBody"><img src="/img/calculate/body/sota/black.png" class=""></figure>
                    <figure class="border" id="figureBorder"><img src="/img/calculate/border/black.png" class=""></figure>
                    <figure class="icon" id="figureIcon"><img src="/img/calculate/icon.png" class=""></figure>
                    <figure class="saddle" id="figureSaddle"><img src="/img/calculate/saddle.png" class="" style="width: 87px;"></figure>
                </div>
            </div>
        </div>
        <br>
        <p class="calc_title md">{{ tr.product_order_sub_step_5 }} {{ tr.product_order_sub_title_5 }}</p>
        <p class="calc_title sm">{{ tr.product_order_sub_step_2 }} {{ tr.product_order_sub_title_5 }}</p>
        <div class="row no-gutters calc_center_box">
            <div class="col-lg-4 col-sm-6 typeItemCol">
                <div class="mat_item typeItem active" data-type="type1" style="background-image: url('/img/calculate/type_1.png');"></div>
                <p class="mat_title">{{ tr.product_order_sub_title_3_text_1 }}<br>{{ price.type_1 }} {{ tr.product_order_currancy }}</p>
                <input type="radio" name="types" class="calcPaymentInp" data-price="{{ price.type_1 }}" value="type_1|{{ tr.product_order_sub_title_3_text_1 }}" checked="checked" style="display: none;">
            </div>
            <div class="col-lg-4 col-sm-6 typeItemCol">
                <div class="mat_item typeItem" data-type="type2" style="background-image: url('/img/calculate/type_2.png');"></div>
                <p class="mat_title">{{ tr.product_order_sub_title_3_text_2 }}<br>{{ price.type_2 }} {{ tr.product_order_currancy }}</p>
                <input type="radio" name="types" class="calcPaymentInp" data-price="{{ price.type_2 }}" value="type_2|{{ tr.product_order_sub_title_3_text_2 }}" style="display: none;">
            </div>
            <div class="col-lg-4 col-sm-6 typeItemCol">
                <div class="mat_item typeItem" data-type="type3" style="background-image: url('/img/calculate/type_3.png');"></div>
                <p class="mat_title">{{ tr.product_order_sub_title_3_text_3 }}<br>+{{ price.type_3 }} %</p>
                <input type="radio" name="types" class="calcPaymentInp" data-price="{{ price.type_3 }}" value="type_3|{{ tr.product_order_sub_title_3_text_3 }}" style="display: none;">
            </div>
        </div>
        <br>
        <p class="calc_title md">{{ tr.product_order_sub_step_6 }} {{ tr.product_order_sub_title_6 }}  {{ tr.product_order_sub_step_7 }} {{ tr.product_order_sub_title_7 }}</p>
        <p class="calc_title sm">{{ tr.product_order_sub_step_3 }} {{ tr.product_order_sub_title_6 }}  {{ tr.product_order_sub_step_4 }} {{ tr.product_order_sub_title_7 }}</p>
        <div class="row no-gutters calc_center_box prize_calc">
            <div class="col-lg-4 col-sm-6 tunnelItemCol">
                <div class="mat_item tunnelItem active" data-type="type1" style="background-image: url('/img/calculate/tunel_no.png');"></div>
                <p class="mat_title">{{ tr.product_order_sub_title_4_text_2 }}<br>{{ price.tunnel_2 }} {{ tr.product_order_currancy }}</p>
                <input type="radio" name="tunnel" class="calcPaymentInp" data-price="{{ price.tunnel_2 }}" value="tunnel_2|{{ tr.product_order_sub_title_4_text_2 }}" checked="checked" style="display: none;">
            </div>
            <div class="col-lg-4 col-sm-6 tunnelItemCol">
                <div class="mat_item tunnelItem" data-type="type1" style="background-image: url('/img/calculate/tunel_yes.png');"></div>
                <p class="mat_title">{{ tr.product_order_sub_title_4_text_1 }}<br>{{ price.tunnel_1 }} {{ tr.product_order_currancy }}</p>
                <input type="radio" name="tunnel" class="calcPaymentInp" data-price="{{ price.tunnel_1 }}" value="tunnel_1|{{ tr.product_order_sub_title_4_text_1 }}" style="display: none;">
            </div>
            <div class="col-lg-4 col-sm-6 prizeSelect">
                <div class="mat_item prizeItem" data-type="prize" style="background-image: url('/img/calculate/prize.png');"></div>
                <p class="mat_title">{{ tr.product_order_sub_title_5_text_1 }}<br>{{ price.prize }} {{ tr.product_order_currancy }}<br><a href="/prize" target="_blank">(Подробнее о подарке)</a></p>
                <input type="checkbox" name="prize" class="calcPaymentInp" data-price="{{ price.prize }}" value="prize|{{ tr.product_order_sub_title_5_text_1 }}" style="display: none;">
                <input type="hidden" name="prize_active" class="prize_active" data-price="{{ price.prize_active }}" value="{{ price.prize_active }}">
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-md-6 order-md-3 order-3">
        <p class="calc_title md">{{ tr.product_order_sub_step_3 }} {{ tr.product_order_sub_title_3 }}</p>
        <p class="calc_title sm">{{ tr.product_order_sub_step_6 }} {{ tr.product_order_sub_title_3 }}</p>
        <div class="calc_right_box">
            <ul class="lists calc_body_color_list calcBodyColorList active" data-type="sota">
                <li class="calc_body_color_item calcBodyColorItem active" data-color="black">
                    <div class="calc_color_item_img" style="background-image: url('/img/calculate/body/sota/black.png');"></div>
                    <p>{{ tr.product_order_color_black }}</p>
                    <input type="radio" name="body_color" value="{{ tr.product_order_color_black }}" class="calc_radio_inp calcRadioInp" checked="checked">
                </li>
                <li class="calc_body_color_item calcBodyColorItem" data-color="gray">
                    <div class="calc_color_item_img" style="background-image: url('/img/calculate/body/sota/gray.png');"></div>
                    <p>{{ tr.product_order_color_gray }}</p>
                    <input type="radio" name="body_color" value="{{ tr.product_order_color_gray }}" class="calc_radio_inp calcRadioInp">
                </li>
                <li class="calc_body_color_item calcBodyColorItem" data-color="dark_blue">
                    <div class="calc_color_item_img" style="background-image: url('/img/calculate/body/sota/dark_blue.png');"></div>
                    <p>{{ tr.product_order_color_dark_blue }}</p>
                    <input type="radio" name="body_color" value="{{ tr.product_order_color_dark_blue }}" class="calc_radio_inp calcRadioInp">
                </li>
                <li class="calc_body_color_item calcBodyColorItem" data-color="brown">
                    <div class="calc_color_item_img" style="background-image: url('/img/calculate/body/sota/brown.png');"></div>
                    <p>{{ tr.product_order_color_brown }}</p>
                    <input type="radio" name="body_color" value="{{ tr.product_order_color_brown }}" class="calc_radio_inp calcRadioInp">
                </li>
                <li class="calc_body_color_item calcBodyColorItem" data-color="beige">
                    <div class="calc_color_item_img" style="background-image: url('/img/calculate/body/sota/beige.png');"></div>
                    <p>{{ tr.product_order_color_beige }}</p>
                    <input type="radio" name="body_color" value="{{ tr.product_order_color_beige }}" class="calc_radio_inp calcRadioInp">
                </li>
                <li class="calc_body_color_item calcBodyColorItem" data-color="dark_beige">
                    <div class="calc_color_item_img" style="background-image: url('/img/calculate/body/sota/dark_beige.png');"></div>
                    <p>{{ tr.product_order_color_dark_beige }}</p>
                    <input type="radio" name="body_color" value="{{ tr.product_order_color_dark_beige }}" class="calc_radio_inp calcRadioInp">
                </li>
                <li class="calc_body_color_item calcBodyColorItem" data-color="blue">
                    <div class="calc_color_item_img" style="background-image: url('/img/calculate/body/sota/blue.png');"></div>
                    <p>{{ tr.product_order_color_blue }}</p>
                    <input type="radio" name="body_color" value="{{ tr.product_order_color_blue }}" class="calc_radio_inp calcRadioInp">
                </li>
                <li class="calc_body_color_item calcBodyColorItem" data-color="red">
                    <div class="calc_color_item_img" style="background-image: url('/img/calculate/body/sota/red.png');"></div>
                    <p>{{ tr.product_order_color_red }}</p>
                    <input type="radio" name="body_color" value="{{ tr.product_order_color_red }}" class="calc_radio_inp calcRadioInp">
                </li>
                <li class="calc_body_color_item calcBodyColorItem" data-color="green">
                    <div class="calc_color_item_img" style="background-image: url('/img/calculate/body/sota/green.png');"></div>
                    <p>{{ tr.product_order_color_dark_green }}</p>
                    <input type="radio" name="body_color" value="{{ tr.product_order_color_dark_green }}" class="calc_radio_inp calcRadioInp">
                </li>
                <li class="calc_body_color_item calcBodyColorItem" data-color="purple">
                    <div class="calc_color_item_img" style="background-image: url('/img/calculate/body/sota/purple.png');"></div>
                    <p>{{ tr.product_order_color_purple }}</p>
                    <input type="radio" name="body_color" value="{{ tr.product_order_color_purple }}" class="calc_radio_inp calcRadioInp">
                </li>
                <li class="calc_body_color_item calcBodyColorItem" data-color="orange">
                    <div class="calc_color_item_img" style="background-image: url('/img/calculate/body/sota/orange.png');"></div>
                    <p>{{ tr.product_order_color_orange }}</p>
                    <input type="radio" name="body_color" value="{{ tr.product_order_color_orange }}" class="calc_radio_inp calcRadioInp">
                </li>
                <li class="calc_body_color_item calcBodyColorItem" data-color="yellow">
                    <div class="calc_color_item_img" style="background-image: url('/img/calculate/body/sota/yellow.png');"></div>
                    <p>{{ tr.product_order_color_yellow }}</p>
                    <input type="radio" name="body_color" value="{{ tr.product_order_color_yellow }}" class="calc_radio_inp calcRadioInp">
                </li>
            </ul>
            <ul class="lists calc_body_color_list calcBodyColorList" data-type="romb">
                <li class="calc_body_color_item calcBodyColorItem" data-color="black">
                    <div class="calc_color_item_img" style="background-image: url('/img/calculate/body/romb/black.png');"></div>
                    <p>{{ tr.product_order_color_black }}</p>
                    <input type="radio" name="body_color" value="{{ tr.product_order_color_black }}" class="calc_radio_inp calcRadioInp">
                </li>
                <li class="calc_body_color_item calcBodyColorItem" data-color="gray">
                    <div class="calc_color_item_img" style="background-image: url('/img/calculate/body/romb/gray.png');"></div>
                    <p>{{ tr.product_order_color_gray }}</p>
                    <input type="radio" name="body_color" value="{{ tr.product_order_color_gray }}" class="calc_radio_inp calcRadioInp">
                </li>
                <li class="calc_body_color_item calcBodyColorItem" data-color="beige">
                    <div class="calc_color_item_img" style="background-image: url('/img/calculate/body/romb/beige.png');"></div>
                    <p>{{ tr.product_order_color_beige }}</p>
                    <input type="radio" name="body_color" value="{{ tr.product_order_color_beige }}" class="calc_radio_inp calcRadioInp">
                </li>
                <li class="calc_body_color_item calcBodyColorItem" data-color="blue">
                    <div class="calc_color_item_img" style="background-image: url('/img/calculate/body/romb/blue.png');"></div>
                    <p>{{ tr.product_order_color_blue }}</p>
                    <input type="radio" name="body_color" value="{{ tr.product_order_color_blue }}" class="calc_radio_inp calcRadioInp">
                </li>
                <li class="calc_body_color_item calcBodyColorItem" data-color="red">
                    <div class="calc_color_item_img" style="background-image: url('/img/calculate/body/romb/red.png');"></div>
                    <p>{{ tr.product_order_color_red }}</p>
                    <input type="radio" name="body_color" value="{{ tr.product_order_color_red }}" class="calc_radio_inp calcRadioInp">
                </li>
                <li class="calc_body_color_item calcBodyColorItem" data-color="green">
                    <div class="calc_color_item_img" style="background-image: url('/img/calculate/body/romb/green.png');"></div>
                    <p>{{ tr.product_order_color_dark_green }}</p>
                    <input type="radio" name="body_color" value="{{ tr.product_order_color_dark_green }}" class="calc_radio_inp calcRadioInp">
                </li>
                <li class="calc_body_color_item calcBodyColorItem" data-color="purple">
                    <div class="calc_color_item_img" style="background-image: url('/img/calculate/body/romb/purple.png');"></div>
                    <p>{{ tr.product_order_color_purple }}</p>
                    <input type="radio" name="body_color" value="{{ tr.product_order_color_purple }}" class="calc_radio_inp calcRadioInp">
                </li>
                <li class="calc_body_color_item calcBodyColorItem" data-color="orange">
                    <div class="calc_color_item_img" style="background-image: url('/img/calculate/body/romb/orange.png');"></div>
                    <p>{{ tr.product_order_color_orange }}</p>
                    <input type="radio" name="body_color" value="{{ tr.product_order_color_orange }}" class="calc_radio_inp calcRadioInp">
                </li>
                <li class="calc_body_color_item calcBodyColorItem" data-color="white">
                    <div class="calc_color_item_img" style="background-image: url('/img/calculate/body/romb/white.png');"></div>
                    <p>{{ tr.product_order_color_white }}</p>
                    <input type="radio" name="body_color" value="{{ tr.product_order_color_white }}" class="calc_radio_inp calcRadioInp">
                </li>
                <li class="calc_body_color_item calcBodyColorItem" data-color="burgundy">
                    <div class="calc_color_item_img" style="background-image: url('/img/calculate/body/romb/burgundy.png');"></div>
                    <p>{{ tr.product_order_color_burgundy }}</p>
                    <input type="radio" name="body_color" value="{{ tr.product_order_color_burgundy }}" class="calc_radio_inp calcRadioInp">
                </li>
                <li class="calc_body_color_item calcBodyColorItem" data-color="dark_beige">
                    <div class="calc_color_item_img" style="background-image: url('/img/calculate/body/romb/dark_beige.png');"></div>
                    <p>{{ tr.product_order_color_dark_beige }}</p>
                    <input type="radio" name="body_color" value="{{ tr.product_order_color_dark_beige }}" class="calc_radio_inp calcRadioInp">
                </li>
                <li class="calc_body_color_item calcBodyColorItem" data-color="yellow">
                    <div class="calc_color_item_img" style="background-image: url('/img/calculate/body/romb/yellow.png');"></div>
                    <p>{{ tr.product_order_color_yellow }}</p>
                    <input type="radio" name="body_color" value="{{ tr.product_order_color_yellow }}" class="calc_radio_inp calcRadioInp">
                </li>
            </ul>
        </div>
        <p class="calc_title md">{{ tr.product_order_sub_step_4 }} {{ tr.product_order_sub_title_4 }}</p>
        <p class="calc_title sm">{{ tr.product_order_sub_step_7 }} {{ tr.product_order_sub_title_4 }}</p>
        <div class="calc_right_box">
            <p class="calc_title" style="display: none;">Диагональ</p>
            <ul class="lists calc_border_color_list calcBorderColorList" style="display: none;">
                <li class="calc_border_color_item calcBorderColorItem imageModal" data-color="green_new" data-url="/img/calculate/kant/cant-black-green1.png" title="{{ tr.product_order_title_text }}">
                    <div class="calc_color_item_img" style="background-image: url('/img/calculate/kant/cant-black-green1.png');"></div>
                    <p>{{ tr.product_order_color_green_new }}</p>
                    <input type="radio" name="border_color" value="Диагональ:черно-{{ tr.product_order_color_green_new }}" class="calc_radio_inp calcRadioInp" checked="checked">
                </li>
                <li class="calc_border_color_item calcBorderColorItem imageModal" data-color="gray_new" data-url="/img/calculate/kant/cant-black-seriy1.png" title="{{ tr.product_order_title_text }}">
                    <div class="calc_color_item_img" style="background-image: url('/img/calculate/kant/cant-black-seriy1.png');"></div>
                    <p>{{ tr.product_order_color_gray_new }}</p>
                    <input type="radio" name="border_color" value="Диагональ:черно-{{ tr.product_order_color_gray_new }}" class="calc_radio_inp calcRadioInp">
                </li>
                <li class="calc_border_color_item calcBorderColorItem imageModal" data-color="orange_new" data-url="/img/calculate/kant/cant-black-orang1.png" title="{{ tr.product_order_title_text }}">
                    <div class="calc_color_item_img" style="background-image: url('/img/calculate/kant/cant-black-orang1.png');"></div>
                    <p>{{ tr.product_order_color_orange_new }}</p>
                    <input type="radio" name="border_color" value="Диагональ:черно-{{ tr.product_order_color_orange_new }}" class="calc_radio_inp calcRadioInp">
                </li>
                <li class="calc_border_color_item calcBorderColorItem imageModal" data-color="brown_new" data-url="/img/calculate/kant/cant-black-korich1.png" title="{{ tr.product_order_title_text }}">
                    <div class="calc_color_item_img" style="background-image: url('/img/calculate/kant/cant-black-korich1.png');"></div>
                    <p>{{ tr.product_order_color_brown_new }}</p>
                    <input type="radio" name="border_color" value="Диагональ:черно-{{ tr.product_order_color_brown_new }}" class="calc_radio_inp calcRadioInp">
                </li>
                <li class="calc_border_color_item calcBorderColorItem imageModal" data-color="beige_new" data-url="/img/calculate/kant/cant-black-begeviy1.png" title="{{ tr.product_order_title_text }}">
                    <div class="calc_color_item_img" style="background-image: url('/img/calculate/kant/cant-black-begeviy1.png');"></div>
                    <p>{{ tr.product_order_color_beige_new }}</p>
                    <input type="radio" name="border_color" value="Диагональ:черно-{{ tr.product_order_color_beige_new }}" class="calc_radio_inp calcRadioInp">
                </li>
                <li class="calc_border_color_item calcBorderColorItem imageModal" data-color="blue_new" data-url="/img/calculate/kant/cant-black-blue1.png" title="{{ tr.product_order_title_text }}">
                    <div class="calc_color_item_img" style="background-image: url('/img/calculate/kant/cant-black-blue1.png');"></div>
                    <p>{{ tr.product_order_color_blue_new }}</p>
                    <input type="radio" name="border_color" value="Диагональ:черно-{{ tr.product_order_color_blue_new }}" class="calc_radio_inp calcRadioInp">
                </li>
                <li class="calc_border_color_item calcBorderColorItem imageModal" data-color="yellow_new" data-url="/img/calculate/kant/cant-black-yelow1.png" title="{{ tr.product_order_title_text }}">
                    <div class="calc_color_item_img" style="background-image: url('/img/calculate/kant/cant-black-yelow1.png');"></div>
                    <p>{{ tr.product_order_color_yellow_new }}</p>
                    <input type="radio" name="border_color" value="Диагональ:черно-{{ tr.product_order_color_yellow_new }}" class="calc_radio_inp calcRadioInp">
                </li>
                <li class="calc_border_color_item calcBorderColorItem imageModal" data-color="red_new" data-url="/img/calculate/kant/cant-black-red1.png" title="{{ tr.product_order_title_text }}">
                    <div class="calc_color_item_img" style="background-image: url('/img/calculate/kant/cant-black-red1.png');"></div>
                    <p>{{ tr.product_order_color_red_new }}</p>
                    <input type="radio" name="border_color" value="Диагональ:черно-{{ tr.product_order_color_red_new }}" class="calc_radio_inp calcRadioInp">
                </li>
            </ul>
            <p class="calc_title">Стандартные</p>
            <ul class="lists calc_border_color_list calcBorderColorList">
                <li class="calc_border_color_item calcBorderColorItem active" data-color="black">
                    <div class="calc_color_item_img black"></div>
                    <p>{{ tr.product_order_color_black }}</p>
                    <input type="radio" name="border_color" value="Стандартная: {{ tr.product_order_color_black }}" class="calc_radio_inp calcRadioInp" checked="checked">
                </li>
                <li class="calc_border_color_item calcBorderColorItem" data-color="gray">
                    <div class="calc_color_item_img gray"></div>
                    <p>{{ tr.product_order_color_gray }}</p>
                    <input type="radio" name="border_color" value="Стандартная: {{ tr.product_order_color_gray }}" class="calc_radio_inp calcRadioInp">
                </li>
                <li class="calc_border_color_item calcBorderColorItem" data-color="light_gray">
                    <div class="calc_color_item_img light_gray"></div>
                    <p>{{ tr.product_order_color_light_gray }}</p>
                    <input type="radio" name="border_color" value="Стандартная: {{ tr.product_order_color_light_gray }}" class="calc_radio_inp calcRadioInp">
                </li>
                <li class="calc_border_color_item calcBorderColorItem" data-color="brown">
                    <div class="calc_color_item_img brown"></div>
                    <p>{{ tr.product_order_color_brown }}</p>
                    <input type="radio" name="border_color" value="Стандартная: {{ tr.product_order_color_brown }}" class="calc_radio_inp calcRadioInp">
                </li>
                <li class="calc_border_color_item calcBorderColorItem" data-color="beige">
                    <div class="calc_color_item_img beige"></div>
                    <p>{{ tr.product_order_color_beige }}</p>
                    <input type="radio" name="border_color" value="Стандартная: {{ tr.product_order_color_beige }}" class="calc_radio_inp calcRadioInp">
                </li>
                <li class="calc_border_color_item calcBorderColorItem" data-color="blue">
                    <div class="calc_color_item_img blue"></div>
                    <p>{{ tr.product_order_color_blue }}</p>
                    <input type="radio" name="border_color" value="Стандартная: {{ tr.product_order_color_blue }}" class="calc_radio_inp calcRadioInp">
                </li>
                <li class="calc_border_color_item calcBorderColorItem" data-color="dark_blue">
                    <div class="calc_color_item_img dark_blue"></div>
                    <p>{{ tr.product_order_color_dark_blue }}</p>
                    <input type="radio" name="border_color" value="Стандартная: {{ tr.product_order_color_dark_blue }}" class="calc_radio_inp calcRadioInp">
                </li>
                <li class="calc_border_color_item calcBorderColorItem" data-color="red">
                    <div class="calc_color_item_img red"></div>
                    <p>{{ tr.product_order_color_red }}</p>
                    <input type="radio" name="border_color" value="Стандартная: {{ tr.product_order_color_red }}" class="calc_radio_inp calcRadioInp">
                </li>
                <li class="calc_border_color_item calcBorderColorItem" data-color="yellow">
                    <div class="calc_color_item_img yellow"></div>
                    <p>{{ tr.product_order_color_yellow }}</p>
                    <input type="radio" name="border_color" value="Стандартная: {{ tr.product_order_color_yellow }}" class="calc_radio_inp calcRadioInp">
                </li>
                <li class="calc_border_color_item calcBorderColorItem" data-color="green">
                    <div class="calc_color_item_img green"></div>
                    <p> {{ tr.product_order_color_green }}</p>
                    <input type="radio" name="border_color" value="Стандартная: {{ tr.product_order_color_green }}" class="calc_radio_inp calcRadioInp">
                </li>
                <li class="calc_border_color_item calcBorderColorItem" data-color="dark_green">
                    <div class="calc_color_item_img dark_green"></div>
                    <p>{{ tr.product_order_color_dark_green }}</p>
                    <input type="radio" name="border_color" value="Стандартная: {{ tr.product_order_color_dark_green }}" class="calc_radio_inp calcRadioInp">
                </li>
                <li class="calc_border_color_item calcBorderColorItem" data-color="orange">
                    <div class="calc_color_item_img orange"></div>
                    <p>{{ tr.product_order_color_orange }}</p>
                    <input type="radio" name="border_color" value="Стандартная: {{ tr.product_order_color_orange }}" class="calc_radio_inp calcRadioInp">
                </li>
                <li class="calc_border_color_item calcBorderColorItem" data-color="white">
                    <div class="calc_color_item_img white"></div>
                    <p>{{ tr.product_order_color_white }}</p>
                    <input type="radio" name="border_color" value="Стандартная: {{ tr.product_order_color_white }}" class="calc_radio_inp calcRadioInp">
                </li>
                <li class="calc_border_color_item calcBorderColorItem" data-color="purple">
                    <div class="calc_color_item_img purple"></div>
                    <p>{{ tr.product_order_color_purple }}</p>
                    <input type="radio" name="border_color" value="Стандартная: {{ tr.product_order_color_purple }}" class="calc_radio_inp calcRadioInp">
                </li>
            </ul>
        </div>
    </div>
    <div class="col-12 order-4">
        <div class="btn_box">
            <div></div>
            <button type="submit" class="btn order_btn">{{ tr.product_order_send_btn }}</button>
            <div></div>
        </div>
    </div>
</form>
<div class="modal fade" id="modaleImage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <img src="/img/calculate/body/sota/black.png" style="width: 100%">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>