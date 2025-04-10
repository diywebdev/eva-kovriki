<section id="section_5" class="reviews_section">
    <h2 class="section_title mb-5">{{ tr.title }}</h2>
    <div class="container">
        <div class="row reviews mb-3">
            {% for review in reviews %}
            <div class="col-lg-6">
                <div class="review_item_box">
                    <div class="review_item_img" style="background-image: url('/uploads/{{ review.img }}');"></div>
                    <div class="review_item">
                        <h3 class="review_name_box">
                            <i class="fa fa-quote-left"></i>
                            <span class="review_name">
                                <span class="start">
                                    {% for i in 1..review.stars %}
                                    <i class="fa fa-star"></i>
                                    {% endfor %}
                                </span>
                                <br>
                                {{ review.name }}
                            </span>
                        </h3>
                        <p class="review_text">{{ review.text }}</p>
                    </div>
                </div>
            </div>
            {% endfor %}
        </div>
    </div>
</section>