<section id="section_1">


    <div class="container">
        
        <div class="row">
            <div class="col-12">
                    <nav aria-label="breadcrumb">
                      <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/home">Главная</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ man.title }}</li>
                      </ol>
                    </nav>
            </div>
        </div>        
        
        <div class="row">
            
           
            <div class="col-md-3 order-md-1 order-sm-2">
                {% include 'category_list.php' %}
            </div>
            <div class="col-md-9 order-md-2 order-sm-1">
                
                <div class="row">
                    <div class="col-md-10 col-sm-12">
                        <h4 class="section_under_title text-left">{{ tr.category_left_title_1 }} <span class="marka">{{ man.title }}</span> {{ tr.category_left_title_2 }}</h4>    
                    </div>   
                    <div class="col-md-2 col-sm-12">
                        <img src="/uploads/{{ man.logo }}" alt="{{ man.title }}">    
                    </div>
                </div> 
                
             
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
                                <div id="loading-gif"><img  width="24" src="/update2/loading.gif"> загрузка марок автомобилей...</div>
                                <form action="/update2/go.php">
                                   <div id="car-menu"></div>
                                   <input id="cat-id" value="{{ man.id }}" type="hidden">
                                </form> 
                                
                                <script>
                                           var cat_id = $("#cat-id").val();

                                
                                           carMenu(cat_id,'0','0');
                                </script>
                
                <div class="category_box">
                    <!-- ul class="lists marka_list">
                        <li class="marka_list_item markaListItem active" data-filter="all">{{ tr.category_all_models_btn }}</li>
                        {% for cat in cats %}
                        <li class="marka_list_item markaListItem" data-filter=".category-{{ cat.id }}">{{ cat.title }}</li>
                        {% endfor %}
                    </ul -->
                    <div class="marka_box" id="mixContainer">
                        {% for cat in cats %}
                        

                        
                        
                        <div id="category-{{ cat.id }}" class="marka_row mix category-{{ cat.id }}">
                            <h4 class="marka_row_title">{{ cat.title }}</h4>
                            <div class="row">
                                {% for car in cat.childs %}
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <a href="/eva-kovriki/models/{{ car.title_url }}" class="product_box">
                                        <figure class="image_1"><img src="/update2/resize.php?photo=/uploads/{{ car.car }}&w=155" title="{{ car.title }}" alt="{{ car.title }}"></figure>
                                        <span style="display: block; text-align: center; width: 100%; padding: 9px 15px; border: 1px solid #cb0e3e;">Выбрать</span>
                                        <h2>{{ car.title }}</h2>
                                    </a>
                                </div>
                                {% endfor %}
                            </div>
                        </div>
                        {% endfor %}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script type="text/javascript">
    function getActiveItem() {
        var pathname = window.location.pathname;
        var pat_url = pathname.split("/")[3];
        $('.leftCategoryItem[data-id="' + pat_url + '"]').addClass("active");
        console.log(pat_url)
    };
    getActiveItem();
</script>