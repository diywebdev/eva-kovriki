<section id="section_5" class="reviews_section">
    <h2 class="section_title mb-5">{{ tr.title }}</h2>
    <div class="container">
        <div class="btn_box mb-5">
            <div></div>
            <button class="btn" data-toggle="modal" data-target="#reviewModal">{{ tr.add_review_btn }}</button>
            <div></div>
        </div>
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

<div id="reviewModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-primary">{{ tr.modal_title }}</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body pt-3">
                <form action="/reviews/new" method="POST" enctype="multipart/form-data" onsubmit="sendReview(this, event)">
                    <div class="input_group inp_before">
                        <input type="text" name="name" size="40" placeholder="{{ tr.modal_name }}" class="inpItem" required="required">
                        <span class="input_addon"><i class="fas fa-user"></i></span>
                    </div>
                    <div class="input_group">
                        <ul class="star_list">
                            <li class="star_li starItem" title="5">
                                <input type="radio" name="stars" value="5" />
                                <i class="star far fa-star"></i>
                            </li>
                            <li class="star_li starItem" title="4">
                                <input type="radio" name="stars" value="4" />
                                <i class="star far fa-star"></i>
                            </li>
                            <li class="star_li starItem" title="3">
                                <input type="radio" name="stars" value="3" />
                                <i class="star far fa-star"></i>
                            </li>
                            <li class="star_li starItem" title="2">
                                <input type="radio" name="stars" value="2" />
                                <i class="star far fa-star"></i>
                            </li>
                            <li class="star_li starItem" title="1">
                                <input type="radio" name="stars" value="1" />
                                <i class="star far fa-star"></i>
                            </li>
                        </ul>
                    </div>
                    <div class="input_group inputGroup">
                        <div class="btn_box">
                            <div></div>
                            <button type="button" class="btn fileBtn">{{ tr.modal_img }}</button>
                            <div></div>
                        </div>
                        <input type="file" name="img" class="fileInput" style="display: none;">
                        <div class="image_list imageList"></div>
                    </div>
                    <div class="input_group inp_before">
                        <textarea name="text" placeholder="{{ tr.modal_text }}" required="required"></textarea>
                    </div>
                    <div class="btn_box">
                        <div></div>
                        <button type="submit" class="btn">{{ tr.modal_send_btn }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>