<section id="home_slider">
    <div class="owl-carousel owl-theme header_carusel headerCarusel">
        <div class="owl_item_in" style="background-image: url('/img/slide1.jpg')">
            <h2 class="font-weight-bolder display-4">{{ tr.slider_1_title }}</h2>
            <h1 class="text-primary display-4 font-weight-bolder mt-3">{{ tr.slider_1_text }}</h1>
            <div class="slide_buttons">
                <a href="/eva-kovriki" class="btn p-3 mt-4 mr-4 font-weight-bolder">{{ tr.slider_btn_1 }}</a>
                <button class="btn p-3 mt-4 font-weight-bolder" data-toggle="modal" data-target="#quick_order">{{ tr.slider_btn_2 }}</button>
            </div>
        </div>
        <div class="owl_item_in" style="background-image: url('/img/slide2.jpg')">
            <h2 class="font-weight-bolder display-4">{{ tr.slider_2_title }}</h2>
            <h1 class="text-primary display-4 font-weight-bolder mt-3">{{ tr.slider_2_text }}</h1>
            <div class="slide_buttons">
                <a href="/products" class="btn p-3 mt-4 mr-4 font-weight-bolder">{{ tr.slider_btn_1 }}</a>
                <button class="btn p-3 mt-4 font-weight-bolder" data-toggle="modal" data-target="#quick_order">{{ tr.slider_btn_2 }}</button>
            </div>
        </div>
        <div class="owl_item_in" style="background-image: url('/img/slide3.jpg')">
            <h2 class="font-weight-bolder display-4">{{ tr.slider_3_title }}</h2>
            <h1 class="text-primary display-4 font-weight-bolder mt-3">{{ tr.slider_3_text }}</h1>
            <div class="slide_buttons">
                <a href="/eva-kovriki" class="btn p-3 mt-4 mr-4 font-weight-bolder">{{ tr.slider_btn_1 }}</a>
                <button class="btn p-3 mt-4 font-weight-bolder" data-toggle="modal" data-target="#quick_order">{{ tr.slider_btn_2 }}</button>
            </div>
        </div>
    </div>
    
</section>

                    

<section id="section_menu">
    <div class="container">
        
        <form action="/eva_kovriki/search" method="POST" class="row search_form_products">
                        <div class="col-md-10">
                            <div class="input_group inp_before">
                                <input type="text" name="search" size="40" value="" placeholder="Поиск" class="inpItem" required="required">
                                <span class="input_addon"><i class="fas fa-search"></i></span>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <button class="btn search_btn">Искать</button>
                        </div>
                    </form>
        
                                <div id="loading-gif"><img width="24" src="/update2/loading.gif"> загрузка марок автомобилей...</div>
        
        <form action="/update2/go.php">
           <div id="car-menu"></div>
        </form>
                                <script>
                                           var cat_id = $("#cat-id").val();

                                
                                           carMenu(cat_id,'0','0');
                                </script>
    </div>    
</section>

<section id="section_1">
    <div class="container">
        <h2 class="section_title">{{ tr.category_title }}</h2>
        <h4 class="section_under_title">{{ tr.category_sub_title }}</h4>
        <div class="models_box">
            <div class="titles_box row">
                {% for man in mans %}
                <div class="car_logo_item col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
                    <a href="/eva-kovriki/model/{{ man.title }}">
                        <div class="img"><img src="/uploads/{{ man.logo }}" title="{{ man.title }}"></div>
                        <p class="man_title">{{ man.title }}</p>
                    </a>
                </div>
                {% endfor %}
                <div class="car_logo_item col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
                    <a href="/eva-kovriki/models/0">
                        <div class="img"><img src="/uploads/0b84ee4bb54a4cb24886bc8a7191f0ca.png" title="{{ tr.category_other }}"></div>
                        <p class="man_title">{{ tr.category_other }}</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- section id="section_8" class="mb-5">
    <div class="container-fluid">
        <div class="owl-carousel owl-theme header_video_carusel headerImageCarusel">
            <div class="image_item">
                <a class="img_out" data-fancybox="gallery" href="img/gallery/1.jpg">
                    <img src="img/gallery/1.jpg">
                    <div class="layout">
                        <div class="border">
                            <i class="fa fa-search "></i>
                        </div>
                    </div>
                </a>
            </div>
            <div class="image_item">
                <a class="img_out" data-fancybox="gallery" href="img/gallery/2.jpg">
                    <img src="img/gallery/2.jpg">
                    <div class="layout">
                        <div class="border">
                            <i class="fa fa-search "></i>
                        </div>
                    </div>
                </a>
            </div>
            <div class="image_item">
                <a class="img_out" data-fancybox="gallery" href="img/gallery/3.jpg">
                    <img src="img/gallery/3.jpg">
                    <div class="layout">
                        <div class="border">
                            <i class="fa fa-search "></i>
                        </div>
                    </div>
                </a>
            </div>
            <div class="image_item">
                <a class="img_out" data-fancybox="gallery" href="img/gallery/4.jpg">
                    <img src="img/gallery/4.jpg">
                    <div class="layout">
                        <div class="border">
                            <i class="fa fa-search "></i>
                        </div>
                    </div>
                </a>
            </div>
            <div class="image_item">
                <a class="img_out" data-fancybox="gallery" href="img/gallery/5.jpg">
                    <img src="img/gallery/5.jpg">
                    <div class="layout">
                        <div class="border">
                            <i class="fa fa-search "></i>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section -->

<!-- <section id="section_7">
    <div class="container">
        <div class="owl-carousel owl-theme header_video_carusel headerVideoCarusel">
            <div class="video_item">
                <video controls preload="metadata" poster="/video/poster/1.jpg">
                    <source src="/video/1.mp4" type="video/mp4"/>
                </video>
            </div>
            <div class="video_item">
                <video controls preload="metadata" poster="/video/poster/2.jpg">
                    <source src="/video/2.mp4" type="video/mp4"/>
                </video>
            </div>
            <div class="video_item">
                <video controls preload="metadata" poster="/video/poster/3.jpg">
                    <source src="/video/3.mp4" type="video/mp4"/>
                </video>
            </div>
            <div class="video_item">
                <video controls preload="metadata" poster="/video/poster/4.jpg">
                    <source src="/video/4.mp4" type="video/mp4"/>
                </video>
            </div>
            <div class="video_item">
                <video controls preload="metadata" poster="/video/poster/5.jpg">
                    <source src="/video/5.mp4" type="video/mp4"/>
                </video>
            </div>
            <div class="video_item">
                <video controls preload="metadata" poster="/video/poster/6.jpg">
                    <source src="/video/6.mp4" type="video/mp4"/>
                </video>
            </div>
            <div class="video_item">
                <video controls preload="metadata" poster="/video/poster/7.jpg">
                    <source src="/video/7.mp4" type="video/mp4"/>
                </video>
            </div>
        </div>
    </div>
</section> -->