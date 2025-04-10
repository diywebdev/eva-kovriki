<div class="container">
  <div class="row" id="sortable">
        {% for man in mans %}
        <div class="car_logo_item carLogoItem col-6 col-sm-4 col-md-3 col-lg-2 col-xl-1" data-id="{{ man.id }}">
            <a href="/admin_products/id/{{ man.id }}">
                <div class="img">
                    <img src="/uploads/{{ man.logo }}" title="{{ man.title }}">
                    <p class="text-center">{{ man.title }}</p>
                </div>
            </a>
        </div>
        {% endfor %}
    </div>
    <div class="btn_box">
        <div></div>
        <button class="btn" onclick="changeProductPosition()">Сохранить</button>
    </div>
</div>
<!--  <script>
  $(function() {
    $("#sortable").sortable({
        axis: "x, y",
        change: function(event, ui) {
            
        },
    });
    $( "#sortable" ).disableSelection();
  } );
  </script>
 -->
<style>
    .img img {
        width: 100%;
    }
    .img {
        margin: 15px 0px;
    }
</style>
<script>
    $("#sortable").sortable({
        axis: "x, y",
        change: function(event, ui) {
            // changeProductPosition();
        },
    });
    function changeProductPosition() {
        var products = $('#sortable').find('.carLogoItem');
        var data_arr = [];
        for (var i = 0; i < products.length; i++) {
            let id = $(products).eq(i).attr('data-id');
            data_arr.push(parseInt(id));
        };
        console.log(data_arr);
        $.post('/admin_products/save', {pos: data_arr}, function(callBack) {
            console.log(callBack);
        });
    };
</script>