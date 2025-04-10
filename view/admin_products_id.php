<div class="container">
    <h1>{{ man.title }}</h1>
    <table class="table car_table">
        {% for cat in cats %}
        <tr>
            <td colspan="5"><strong>{{ cat.title }}</strong>
                <a href="javascript:new_car({{ cat.id }})"><i class="fa fa-plus"></i>
                </a>
                <a class="car_delete" href="/admin_products/delete_cat/{{ man.id }}/{{ cat.id }}">
                    <i class="fa fa-times fa-bold text-danger"></i>
                </a>
            </td>
        </tr>
        <tr style="display: none;" class="form_{{ cat.id }}">
            <form action="/admin_products/new_car/{{ man.id }}/{{ cat.id }}" method="post"
                  enctype="multipart/form-data">
                <td>
                    <input name="title">
                </td>
                <td>
                    <input type="file" name="car">
                </td>
                <td>
                    <input type="file" name="cov">
                </td>
                <td>
                    <button class="btn btn-success text-dark">Save</button>
                </td>
            </form>
        </tr>
        {% for car in cat.childs %}

        <tr>
            <td><a target="_blank" href="/model/models/{{ car.title_url }}">{{ car.title }}</a></td>
            <td><a href="/uploads/{{ car.car }}" data-fancybox><img src="/uploads/{{ car.car }}"></a></td>
            <td><img src="/uploads/{{ car.cov }}"></td>
            <td>
                <form method="post" class="typeForm" action="/admin_products/change_type/{{ car.id }}">
                    <label class="text-center mr-2">Sedan<br><input type="radio" name="type" value="1" {% if car.type == "1" %} checked="checked" {% endif %}></label>
                    <label class="text-center">Jeep<br><input type="radio" name="type" value="2" {% if car.type == "2" %} checked="checked" {% endif %}></label>
                </form>
            </td>
            <td>
                <a class="car_delete" href="/admin_products/delete_car/{{ man.id }}/{{ car.id }}">
                    <i class="fa fa-times fa-bold text-danger"></i>
                </a>
            </td>

        </tr>
        {% endfor %}
        {% endfor %}
    </table>
</div>


<style>
    .car_table img {
        height: 30px;
    }
</style>

<script>
    function new_car(id) {
        $(".form_" + id).show();
    }

    $(".car_delete").click(function (e) {
        if (!confirm("DELETE ?")) {
            e.preventDefault();
        }
    });

    function openModal(id) {
        $("#exampleModal").find("input[name='model_id']").val(id);
        $("#exampleModal").modal();
    }

    $(".typeForm").click(function () {
        var data = $(this).serialize();
        var url = $(this).attr("action");
        $.post(url,data);
    })
</script>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Sale</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/admin_products/sale/{{ man.id }}" method="POST">
                    <input name="model_id" hidden>
                    <input name="title_am">
                    <input name="title_ru">
                    <button class="btn btn-success text-dark" type="submit">Save</button>
                </form>
            </div>

        </div>
    </div>
</div>