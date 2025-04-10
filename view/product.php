<section class="single_product">
    <div class="container">

    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/home">Главная</a></li>
        <li class="breadcrumb-item"><a href="/eva-kovriki/model/{{ man.title }}">{{ man.title }}</a></li>
        <li class="breadcrumb-item active" aria-current="page">{{ tr.product_title }} {{ car.title }}</li>
      </ol>
    </nav>
                        
                        
                <div class="row">
                    <div class="col-md-10 col-sm-12">
                        <h2 class="single_product_title">{{ tr.product_title }} {{ car.title }}</h2>
                    </div>   
                    <div style="text-align: center;" class="col-md-2 col-sm-12">
                        <img src="/uploads/{{ man.logo }}" alt="{{ man.title }}">    
                    </div>
                </div> 


  
        
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single_product_left">
                    <figure class="image_1"><img src="/uploads/{{ car.car }}" title="{{ car.title }}"></figure>
                </div>
            </div>
            <div class="col-lg-8 col-md-6">
                <div class="single_product_right">
                    <div class="text_box">
                        <p>{{ tr.product_text_1_1 }} <strong>{{ car.title }}</strong> {{ tr.product_text_1_2 }}</p>
                        <p>{{ tr.product_text_2_1 }} <strong>{{ car.title }}</strong> {{ tr.product_text_2_2 }}</p>
                    </div>
                </div>
            </div>
        </div>
        <h2 class="single_product_title">{{ tr.product_order_title }}</h2>
        {% include 'product_calc.php' %}
    </div>
</section>
<ul class="list" style="display: none;">
    <li><input type="text" value="19000"></li> <!-- Седан -->
    <li><input type="text" value="21000"></li> <!-- Внедорожник -->
    <li><input type="text" value="7000"></li> <!-- 1 Водительский коврик -->
    <li><input type="text" value="12000"></li> <!-- 2 Пассажирский коврик -->
    <li><input type="text" value="12000"></li> <!-- 3 Комплект задних ковриков -->
    <li><input type="text" value="14000"></li> <!-- Багажник -->
    <li><input type="text" value="1000"></li> <!-- Иконка -->
    <li><input type="text" value="5000"></li> <!-- Подпятник -->
</ul>

<!-- section id="section_3" class="mt-5">
    <<div class="container">
        <h2 class="section_title text-light mb-5">Ինչպես պատվիրել</h2>
        <div class="row">
            <div class="col-12 col-sm-12 col-md-6 col-lg-3">
                <div class="how_it_work_item">
                    <div class="img">
                        <img src="/img/how-works-img-1.jpg">
                    </div>
                    <div class="how_it_work_title pt-4 pb-4">
                        <div class="number bg-primary">1</div>
                        <div class="title text-secondary">Կատարվում է նախնական պատվեր</div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-3">
                <div class="how_it_work_item">
                    <div class="how_it_work_title pt-4 pb-4">
                        <div class="number bg-primary">2</div>
                        <div class="title text-secondary">Աշխատակիցը զանգահարում է Ձեզ</div>
                    </div>
                    <div class="img">
                        <img src="/img/how-works-img-2.jpg">
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-3">
                <div class="how_it_work_item">
                    <div class="img">
                        <img src="/img/how-works-img-3.jpg">
                    </div>
                    <div class="how_it_work_title pt-4 pb-4">
                        <div class="number bg-primary">3</div>
                        <div class="title text-secondary">Պատվերը հանձնվում է հաճախորդին</div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-3">
                <div class="how_it_work_item">
                    <div class="how_it_work_title pt-4 pb-4">
                        <div class="number bg-primary">4</div>
                        <div class="title text-secondary">Վճարումը իրականացվում է տեղում</div>
                    </div>
                    <div class="img">
                        <img src="/img/how-works-img-4.jpg">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
