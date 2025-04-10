<footer class="footer_section pt-3 pb-3">
    <div class="container">
        <ul class="footer_list lg_list mb-4">
            <li class="lg_button lgButton" data-lg_id="1"><a href="/lg/1" class="lgBtn">Русский</a></li>
            <li class="lg_button lgButton" data-lg_id="2"><a href="/lg/2" class="lgBtn">Українська</a></li>
            <li class="lg_button lgButton" data-lg_id="3"><a href="/lg/3" class="lgBtn">Татар</a></li>
        </ul>
        <div class="row mb-3">
            <div class="col-lg-3">
                <div class="footer_box">
                    <h2 class="footer_item_title">{{ footer.footer_title_1 }}</h2>
                    <ul class="footer_list">
                        <li><a href="/home">{{ footer.footer_menu_item_1 }}</a></li>
                        <li><a href="/about">{{ footer.footer_menu_item_2 }}</a></li>
                        <li><a href="/eva-kovriki">{{ footer.footer_menu_item_3 }}</a></li>
                        <li><a href="/reviews">{{ footer.footer_menu_item_4 }}</a></li>
                        <li><a href="/shipping">{{ footer.footer_menu_item_5 }}</a></li>
                        <li><a href="/feedback">{{ footer.footer_menu_item_6 }}</a></li>
                        <li><a href="/cart">{{ footer.footer_menu_item_7 }}</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="footer_box">
                    <h2 class="footer_item_title">{{ footer.footer_title_2 }}</h2>
                    <ul class="footer_list">
                        <li><a href="#"><i class="icon fas fa-map-marker-alt mr-1"></i>{{ footer.footer_contact_item_1 }}</a></li>
                        <li><a href="tel:+79781747827"><i class="icon fas fa-phone mr-1"></i>+7(978)174-78-27</a></li>
                        <li><a href=""><i class="icon fas fa-envelope"></i>info@eva-crimea.ru</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="footer_box">
                    <h2 class="footer_item_title">{{ footer.footer_title_3 }}</h2>
                    <ul class="footer_list">
                        <li><a href="https://vk.com/eva_krym"><i class="icon fab fa-vk mr-1"></i>Ева-крым</a></a></li>
                        <li><a href="viber://pa?chatURI=<URI>"</a><i class="icon fab fa-viber mr-1"></i>Viber</a></a></li>
                        <li><a href="https://wa.me/79781747827"><i class="icon fab fa-whatsapp mr-1"></i>WhatsApp</a>
                        <li class="nav-item pl-1"><a href="https://eva-crimea.ru" target="_blank" title="Переход на основной сайт ГК EVA-Крым" class="footer_list">ГК EVA-Крым</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 footer__right">
                <img src="../../img/logo_footer.png">
                <img src="../../img/logo-sertificate-black.png">
                <div>
                    
                    © 2019 -
                    <script type="text/javascript">document.write(new Date().getFullYear());</script><br>
                    <b>ЕВА-Крым.рф</b> by <a href="https://eva-crimea.ru" target="_blank" title="Группа компаний ЕВА-Крым"><b>EVA-Crimea Group</b></a><br>
                    Разработка сайта студия <a title="Создание сайтов и продвижение"><b>E-Design</b></a><br>
                    Сайт размещен на хостинге <a  title="Хостинг, облако, домены, почта"><b>E-Cloud</b></a>
                </div>
            </div>
        </div>
                             
    </div>
</footer>

<div id="quick_order" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-primary">{{ footer.modal_title_2 }}</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body modalBody pt-3">
                <p class="response_text responseText">{{ footer.response_text }}</p>
                <form action="/contact/quick" method="POST" class="form" onsubmit="sendForm(this, event)">
                    <div class="input_group inp_before">
                        <input type="text" name="name" size="40" placeholder="{{ footer.modal_name }}" class="inpItem" required="required">
                        <span class="input_addon"><i class="fas fa-user"></i></span>
                    </div>
                    <div class="input_group inp_before">
                        <input type="text" name="phone" size="40" placeholder="{{ footer.modal_phone }}" class="inpItem" required="required" mask="phone">
                        <span class="input_addon"><i class="fas fa-phone"></i></span>
                    </div>
                    <div class="input_group inp_before">
                        <input type="text" name="car_model" size="40" placeholder="{{ footer.modal_car_model }}" class="inpItem" required="required">
                        <span class="input_addon"><i class="fas fa-car"></i></span>
                    </div>
                    <div class="btn_box">
                        <div></div>
                        <button type="submit" class="btn" onclick="yaCounter54516133.reachGoal('quickOrder', '', ''); return true;">{{ footer.modal_send }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div id="orderCallModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-primary">{{ footer.modal_title_1 }}</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body modalBody pt-3">
                <p class="response_text responseText">{{ footer.response_call_text }}</p>
                <form action="/contact/call" method="POST" class="form" onsubmit="sendForm(this, event)">
                    <div class="input_group inp_before">
                        <input type="text" name="name" size="40" placeholder="{{ footer.modal_name }}" class="inpItem" required="required">
                        <span class="input_addon"><i class="fas fa-user"></i></span>
                    </div>
                    <div class="input_group inp_before">
                        <input type="text" name="phone" size="40" placeholder="{{ footer.modal_phone }}" class="inpItem" required="required"  mask="phone">
                        <span class="input_addon"><i class="fas fa-phone"></i></span>
                    </div>
                    <div class="g-recaptcha" data-sitekey="6LcD34wcAAAAACqJtTkqQkH-4ZKjpPp66XKupyMM"></div>
                    <p class="response_text recaptchaError active"></p>
                    <div class="btn_box">
                        <div></div>
                        <button type="submit" class="btn" onclick="yaCounter54516133.reachGoal('orderCall', '', ''); return true;">{{ footer.modal_send }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



<script src="/js/jquery.fancybox.js" async></script>
<script src="/js/jquery.maskedinput.js" async></script>
<!-- script src="/js/nice-select.js" async></script -->
<script src="/js/script.js?v1.14" async></script>
<script src="/js/cals.js" async></script>
<script type="text/javascript">
    function getActiveMenu() {
        let pathname = window.location.pathname;
        let pat_url = pathname.split("/")[1];
        $(".m_" + pat_url).addClass("active");
    };
    getActiveMenu();
    function getActiveLang() {
        let lg_id = $('html').attr('data-lang_id');
        $('.lgButton[data-lg_id="' + lg_id + '"]').addClass("active");
    };
    getActiveLang();
    $('.lgBtn').click(function(e) {
        let path = location.pathname;
        let paths = path.split('/');
        let href = $(this).attr('href');
        let new_href = '/' + paths[1] + href;
        // console.log(new_href);
        $.get(new_href, function() {
            location.reload();
        });
        e.preventDefault();
        return false;
    });
</script>

<script>new Image().src="https://counter.yadro.ru/hit?r"+escape(document.referrer)+((typeof(screen)=="undefined")?"":";s"+screen.width+"*"+screen.height+"*"+(screen.colorDepth?screen.colorDepth:screen.pixelDepth))+";u"+escape(document.URL)+";h"+escape(document.title.substring(0,150))+";"+Math.random();</script>

</body>
</html>
