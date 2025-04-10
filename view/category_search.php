<section id="section_1">
    <div class="container">
        <div class="row">
            <div class="col-md-3 order-md-1 order-sm-2">
                {% include 'category_list.php' %}
            </div>
            <div class="col-md-9 order-md-2 order-sm-1">
                <h4 class="section_under_title text-left">{{ tr.category_left_title_1 }} <span class="marka">{{ search }}</span> {{ tr.category_left_title_2 }}</h4>
                    <form action="/eva_kovriki/search" method="POST" class="row search_form_products">
                        <div class="col-md-10">
                            <div class="input_group inp_before">
                                <input type="text" name="search" size="40" value="{{ search }}" placeholder="{{ tr.search_label }}" class="inpItem" required="required">
                                <span class="input_addon"><i class="fas fa-search"></i></span>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <button class="btn search_btn">{{ tr.search_btn }}</button>
                        </div>
                    </form>
                {% if cars | length == 0 %}
                <h2 class="empty_cart">{{ tr.empty_search }}</h2>
                {% endif %}
                <div class="category_box">
                    <div class="marka_box">
                        <div class="marka_row">
                            <div class="row">
                                {% for car in cars %}
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <a href="/eva-kovriki/models/{{ car.title_url }}" class="product_box">
                                        <figure class="image_1"><img src="/uploads/{{ car.car }}" title="{{ car.title }}" alt="{{ car.title }}"></figure>
                                        <figure class="image_2"><img src="/uploads/{{ car.cov }}" title="{{ car.title }}" alt="{{ car.title }}"></figure>
                                        <h2>{{ car.title }}</h2>
                                    </a>
                                </div>
                                {% endfor %}
                            </div>
                        </div>
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