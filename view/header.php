<html lang="{% if LG == 1 %}ru{% elseif LG == 2 %}uk{% elseif LG == 3 %}tt{% endif %}" data-lang_id="{{ LG }}">
<head>
    <title>{{ title }}</title>
    <meta name="yandex-verification" content="489e77d401a06b57" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{ description }}">
    <meta name="keywords" content="купить, коврики ева, в ялте, коврики ева, в крыму, дефлекторы окон в ялте, цена, спойлер капота, спойлер заднего стекла, купить пороги в ялте, евпатория, феодосия, симферополь, севастополь, керчь,">
    
    <!-- meta property="og:title" content="{{ fb_meta.title }}">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ fb_meta.url }}">
    <meta property="og:image" content="{{ fb_meta.image }}">
    <meta property="og:site_name" content="ЕВА-Крым.рф Производитель ковриков EVA и аксессуаров в Крыму" -->

    <link rel="stylesheet" href="/css/fontawesome/fontawesome-all.css">
    <link rel="stylesheet" href="/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="/css/nice-select.css">
    <link rel="stylesheet" href="/css/app.css?v1.1">
    <link rel="stylesheet" href="/css/media.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <!-- <script src="/js/app.js"></script> -->
    <!--<script src="/js/jquery-3.3.1.min.js" async></script>-->
    <script src="/js/jquery-3.3.1.min.js"></script>
<!-- script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script --> 

    <script src="/js/bootstrap.js" async></script>
    <script src="/js/owl.carousel.min.js" async></script>
    <script src="/js/mixitup.js" async></script>
    <!-- js-скрипт гугл капчи -->
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(70720342, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/70720342" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<script>
                function carMenu(manufacturer, model, generation){
                    
                    

                    $('#car-menu').html(
                    '<div class="row">'+
                    '<div id="man-col" class="col-sm"><select onChange="changeBrand(0)" class="form-control" name="manufacturer" id="manufacturer">' +
                    '<option value="0">Выбрать марку</option>' +
                    '</select></div>'+
                    '<div class="col-sm"><select onChange="changeModel()" class="form-control" name="seria" id="seria">' +
                    '<option value="0">Выбрать модель</option>' +
                    '</select></div>'+
                    '<div class="col-sm"><select id="model" class="form-control" name="model">' +
                    '<option value="0">Выбрать поколение</option>' +
                    '</select></div>'+
                    '<div class="col-sm"><button class="form-control" id="submit" type="submit">Показать</button></div>'+
                    '</div>'
                    );
                    
                        $.get( "/update2/load.menu.php", {act: 'load-brands', manufacturer: manufacturer}, function( data ) {

                            $('#manufacturer').append(data);
                            $("#loading-gif").html('');
                        });		  
                        
                        $('#seria, #model, #submit').prop('disabled', 'disabled');


                    

                    if(manufacturer){
                        $('#man-col').hide();
                          
                        changeBrand(manufacturer);
                    }
                    
                   
                    

                }
                
                function changeBrand(brand){
                    
                    $("#loading-gif").html('<img width="24" src="/update2/loading.gif"> загрузка моделей автомобилей...');

                     
                    if(!brand){
                        var brand = $("#manufacturer").val();
                    }

                    
                    $.get( "/update2/load.menu.php", {act: 'load-seria', brand_id: brand}, function( data ) {

                            $('#seria').html('<option value="0">Выбрать модель</option>');
                            $('#model').html('<option value="0">Выбрать поколение</option>');
                            
                            
                                $('#seria').prop('disabled', false);
                            
                           

                            $('#seria').append(data);

                            $("#loading-gif").html('');
                    });	
                    
                    
                    
                }
                
                function changeModel(){
                    
                                        $("#loading-gif").html('<img width="24" src="/update2/loading.gif"> загрузка поколений автомобилей...');

                    
                    var brand = $("#manufacturer").val();
                    var seria = $("#seria").val();
                    
                   

                            if(seria == 0){
                            $('.mix').show('slow');    
                            }else{
                            $('.mix').hide('slow');
                            }
                            
                    
                            
                            $('#category-' + seria).show('slow');

 
                /*$('#mixContainer').mixitup('filter', '.category-' + seria);*/
                    
                    $.get( "/update2/load.menu.php", {act: 'load-model', brand_id: brand, seria_id: seria}, function( data ) {

                            $('#model').html('<option value="0">Выбрать поколение</option>');
                            
                            $('#model, #submit').prop('disabled', false);


                            $('#model').append(data);
                            $("#loading-gif").html('');
                    });	
                    
                                        

                    
                }
                

           
           </script>
           
<script type="application/ld+json">
    { "@context": "http://schema.org";,
      "@type": "Product",
      "name": "{{ title }}",
      "aggregateRating":
        {"@type": "AggregateRating",
         "ratingValue": "5",
         "reviewCount": "{{ pagerating }}"
        }
    }
</script>
           
</head>
<body>
<header class="sticky-top headerWhite">
    <nav class="navbar navbar_for_number navbar-expand-lg navbar-light bg-light nav_bar_no_mobile">
        <button type="button" class="btn lg-dropdown-btn dropdown-toggle" data-toggle="dropdown">
            {% if LG == 1 %}
                <span>Русский</span>
            {% elseif LG == 2 %}
                <span>Українська</span>
            {% elseif LG == 3 %}
                <span>Татар</span>
            {% endif %}
        </button>
        <div class="dropdown-menu lg-dropdown bg-light">
            <a href="/lg/1" class="dropdown-item {% if LG == 1 %}d-none{% endif %} text-white lgBtn">Русский</a>
            <a href="/lg/2" class="dropdown-item {% if LG == 2 %}d-none{% endif %} text-white lgBtn">Українська</a>
            <a href="/lg/3" class="dropdown-item {% if LG == 3 %}d-none{% endif %} text-white lgBtn">Татар</a>
        </div>
        <div class="container">
            <ul class="navbar-nav mr-auto pt-1 pb-1">
                <li class="nav-item pr-3">
                    <div class="dropdown">
                        <div class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fas fa-map-marker-alt text-primary"></i>
                            <span class="pl-2">{{ header.addres_1 }}</span>
                        </div>
                        <div class="dropdown-menu bg-light">
                            
                            <span class="dropdown-item text-white">{{ header.addres_3 }}</span>
                            <noscript><span class="dropdown-item text-white">{{ header.addres_4 }}</span></noscript>
                            <span class="dropdown-item text-white">{{ header.addres_5 }}</span>
                            <noscript><span class="dropdown-item text-white">{{ header.addres_6 }}</span></noscript>
                            <noscript><span class="dropdown-item text-white">{{ header.addres_7 }}</span></noscript>
                            <noscript><span class="dropdown-item text-white">{{ header.addres_8 }}</span></noscript>
                            <noscript><span class="dropdown-item text-white">{{ header.addres_9 }}</span></noscript>
                            <noscript><span class="dropdown-item text-white">{{ header.addres_10 }}</span></noscript>
                            <noscript><span class="dropdown-item text-white">{{ header.addres_11 }}</span></noscript>
                            <noscript><span class="dropdown-item text-white">{{ header.addres_12 }}</span></noscript>
                            <noscript><span class="dropdown-item text-white">{{ header.addres_13 }}</span></noscript>
                            <noscript><span class="dropdown-item text-white">{{ header.addres_14 }}</span></noscript>
                            <noscript><span class="dropdown-item text-white">{{ header.addres_15 }}</span></noscript>
                            <noscript><span class="dropdown-item text-white">{{ header.addres_16 }}</span></noscript>
                            <noscript><span class="dropdown-item text-white">{{ header.addres_17 }}</span></noscript>
                            <noscript><span class="dropdown-item text-white">{{ header.addres_18 }}</span></noscript>
                            <noscript><span class="dropdown-item text-white">{{ header.addres_19 }}</span></noscript>
                            <noscript><span class="dropdown-item text-white">{{ header.addres_20 }}</span></noscript>
                            <noscript><span class="dropdown-item text-white">{{ header.addres_21 }}</span></noscript>
                            <noscript><span class="dropdown-item text-white">{{ header.addres_22 }}</span></noscript>
                            <noscript><span class="dropdown-item text-white">{{ header.addres_23 }}</span></noscript>
                        </div>
                    </div>
                </li>
                <li class="nav-item pr-3">
                    <div class="dropdown">
                        <div class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fas fa-phone text-primary"></i>
                            <a href="tel:+79781747827" class="white pl-2">+7(978)174-78-27</a>
                        </div>
                        <div class="dropdown-menu bg-light">
                            <a href="mailto:info@eva-crimea.ru" class="dropdown-item text-white">info@eva-crimea.ru</a>
                            <a href="viber://pa?chatURI=<+79781747827>" class="dropdown-item text-white">Пишите нам в Viber</a>
                            <a href="https://wa.me/79781747827" class="dropdown-item text-white">Пишите нам в WhatsApp</a>
                            <a href="https://vk.com/eva_krym" class="dropdown-item text-white">Группа в ВК</a>
                            <a href="https://eva-crimea.ru" target="_blank" title="Переход на основной сайт ГК EVA-Крым" class="dropdown-item text-white">ГК EVA-Крым</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <form action="/eva-kovriki/search" method="POST" class="search_form">
                        <input type="text" name="search" placeholder="{{ header.search_label }}">
                        <button class="search_btn"><i class="icon fas fa-search"></i></button>
                    </form>
                </li>
            </ul>
        </div>
    </nav>
    <div class="navbar_contact_button">
        <div class="border_tr"></div>
        <div class="cont_btn">
            <a href="/cart" style="display: contents;color: #FFFFFF;">
                <img src="/img/basket.png" class="imgHead" title="{{ header.cart }}">
                {% if header.count %}
                    <div class="navbar-nav flex-column">
                        <span class="textHeader">Покупок: <span class="allCount">{{ header.count }}</span></span>
                        <span class="textHeader">На сумму: <span class="allPrice">{{ header.price }}</span> руб</span>
                    </div>
                {% else %}
                    {{ header.cart }}
                {% endif %}
            </a>
        </div>
    </div>
    
   
    
    <div class="navbar navbar-expand-lg text-dark">
        <div class="container pt-1 pb-1">
            <div class="logo">
                <a href="/"><img src="/img/logo.png" alt="Коврики эва-крым.рф купить в Ялте крыму"></a>
            </div>
            <div class="nav_icon" onclick="$('.menu').toggleClass('open');"><i class="fa fa-bars"></i></div>
            <ul class="navbar-nav mr-auto pt-1 pb-1 menu pl-3">
                <li class="nav-item pl-1"><a href="/home" class="text-dark font-weight-bolder m_home">{{ header.home }}</a></li>
                <li class="nav-item pl-1"><a href="/about" class="text-dark font-weight-bolder m_about">{{ header.about }}</a></li>
                <li class="nav-item pl-1"><a href="/eva-kovriki" class="text-dark font-weight-bolder m_products">{{ header.products }}</a></li>
                <li class="nav-item pl-1"><a href="/reviews" class="text-dark font-weight-bolder m_reviews">{{ header.reviews }}</a></li>
                <li class="nav-item pl-1"><a href="/shipping" class="text-dark font-weight-bolder m_shipping">{{ header.shipping }}</a></li>
                <li class="nav-item pl-1"><a href="/feedback" class="text-dark font-weight-bolder m_feedback">{{ header.feedback }}</a></li>
                <li class="nav-item pl-1"><a href="/contact" class="text-dark font-weight-bolder m_contact">{{ header.contact }}</a></li>
                <li class="nav-item pl-1"><a href="/cart" class="text-dark font-weight-bolder m_cart">{{ header.cart }}</a></li>
            </ul>

        </div>
        
    </div>
   
  
</header>