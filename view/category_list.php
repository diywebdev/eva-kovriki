<h4 class="left_category_list_title leftCategoryListBtn" data-toggle="collapse" data-target="#leftCategoryListCollapse"><span>{{ tr.category_title }}</span><i class="icon fas fa-angle-down"></i></h4>
<div class="left_category_list_box">
    <div id="leftCategoryListCollapse" class="collapse show">
        <ul class="list left_category_list">
            {% for man in mans %}
            <li>
                <a href="/eva-kovriki/model/{{ man.title }}" class="leftCategoryItem" data-id="{{ man.id }}">
                    <figure><img src="/uploads/{{ man.logo }}" title="{{ man.title }}"></figure>
                    <span>{{ man.title }}</span>
                </a>
            </li>
            {% endfor %}
            <li>
                <a href="/products/single/0" class="leftCategoryItem" data-id="0">
                    <figure><img src="/uploads/0b84ee4bb54a4cb24886bc8a7191f0ca.png" title="{{ tr.category_other }}"></figure>
                    <span>{{ tr.category_other }}</span>
                </a>
            </li>
        </ul>
    </div>
</div>