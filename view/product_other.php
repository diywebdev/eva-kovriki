<section class="single_product">
    <div class="container">
        <h2 class="single_product_title">{{ tr.product_other_title }}</h2>
        <div class="row">
            <div class="col-lg-2 col-md-6">
                <div class="single_product_left">
                    <figure class="image_1"><img src="/img/other.jpg" title=""></figure>
                    <figure class="image_2"><img src="/uploads/0b84ee4bb54a4cb24886bc8a7191f0ca.png" title=""></figure>
                </div>
            </div>
            <div class="col-lg-10 col-md-6">
                <div class="single_product_right">
                    <div class="text_box">
                        <p>{{ tr.product_other_text }}</p>
                    </div>
                </div>
            </div>
        </div>
        <h2 class="single_product_title">{{ tr.product_order_title }}</h2>
        {% include 'product_calc.php' %}
    </div>
</section>

<section id="section_3" class="mt-5">
    <div class="container">
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
</section>
