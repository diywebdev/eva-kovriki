<div class="admin_reviews">
    <table class="table reviews_table">
        {% for review in reviews %}
        <tr>
            <td>{{ review.id }}</td>
            <td>{{ review.name }}</td>
            <td>
               <ul class="star_list stopClick">
                   {% for i in 1..review.stars %}
                   <i class="fa fa-star"></i>
                   {% endfor %}
                </ul>
            </td>
            <td>
                <img src="/uploads/{{ review.img }}" style="height: 50px;">
            </td>
            <td>{{ review.text }}</td>
            {% if review.status == 0 %}
            <td>
                <a href="/admin_reviews/status/{{ review.id }}/1">
                    <button class="btn-success text-dark btn full">Добавить</button>
                </a>
            </td>
            {% else %}
            <td>
                <a href="/admin_reviews/status/{{ review.id }}/0">
                    <button class="btn-danger text-dark btn full">Убрать</button>
                </a>
            </td>
            {% endif %}
            <td>
                <a class="deleteReview" onclick="if(!confirm('Delete ?'))return false;" href="/admin_reviews/delete/{{ review.id }}">
                    <i class="fa fa-times"></i>
                </a>
            </td>
        </tr>
        {% endfor %}
    </table>
</div>
