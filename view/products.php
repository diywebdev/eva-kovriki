<section id="section_1">
    <div class="container">
        <h2 class="section_title">{{ tr.products_title }}</h2>
        <h4 class="section_under_title">{{ tr.products_under_title }}</h4>
        <form action="/eva_kovriki/search" method="POST" class="row search_form_products">
            <div class="col-md-10">
                <div class="input_group inp_before">
                    <input type="text" name="search" size="40" placeholder="{{ tr.search_label }}" class="inpItem" required="required">
                    <span class="input_addon"><i class="fas fa-search"></i></span>
                </div>
            </div>
            <div class="col-md-2">
                <button class="btn search_btn">{{ tr.search_btn }}</button>
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
        
        
        <div class="models_box">
            <div class="titles_box row">
                {% for man in mans %}
                <div class="car_logo_item col-xl-2 col-md-3 col-sm-4 col-6">
                    <a href="/eva-kovriki/model/{{ man.title }}">
                        <div class="img"><img src="/uploads/{{ man.logo }}" title="{{ man.title }}"></div>
                        <p class="man_title">{{ man.title }}</p>
                    </a>
                </div>
                {% endfor %}
                <div class="car_logo_item col-xl-2 col-md-3 col-sm-4 col-6">
                    <a href="/eva-kovriki/model/0">
                        <div class="img"><img src="/uploads/0b84ee4bb54a4cb24886bc8a7191f0ca.png" title="{{ tr.category_other }}"></div>
                        <p class="man_title">{{ tr.category_other }}</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>