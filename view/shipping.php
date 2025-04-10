<link rel="stylesheet" type="text/css" href="/css/icons.css">
<section class="shipping_section mb-5">
    <div class="container">
        <h2 class="section_title mb-5">{{ tr.title }}</h2>
        <div class="row">
        	<div class="col-md-3 order-md-1 order-sm-2">
        		{% include 'category_list.php' %}
        	</div>
        	<div class="col-md-9 order-md-2 order-sm-1">
        		<div class="icon_border">
        			<div class="icon bg-primary">
        				<span class="shipping_icons icon-shipped"></span>
        			</div>
        		</div>
        		<h4 class="section_under_title mb-2 text-primary">{{ tr.shipping_sub_title_1 }}</h4>
        		<div class="text_box mb-5">
        			<p>{{ tr.shipping_text_1 }}</p>
        			<p>{{ tr.shipping_text_2 }}</p>
        			<p>{{ tr.shipping_text_3 }}</p>
        			<p>{{ tr.shipping_text_4 }}</p>
        		</div>
        		<div class="icon_border">
        			<div class="icon bg-primary">
        				<span class="shipping_icons icon-payment-method"></span>
        			</div>
        		</div>
        		<h4 class="section_under_title mb-2 text-primary">{{ tr.shipping_sub_title_2 }}</h4>
        		<div class="text_box">
        			<p>{{ tr.shipping_text_5 }}</p>
        			<p>{{ tr.shipping_text_6 }}</p>
        			<h3 class="text-center mt-2"><a href="tel:+79781747827">+7(978)174-78-27</a></h3>
        		</div>
        	</div>
        </div>
    </div>
</section>


<!--  -->
