<html>
<head>
    <title>Baza Admin Panel</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="/css/app.css">
    <link rel="stylesheet" type="text/css" href="/css/fontawesome/fontawesome-all.css">
    <link rel="stylesheet" type="text/css" href="/css/jquery-ui.min.css">
    <link rel="stylesheet" type="text/css" href="/css/admin.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css">
    <script src="https://cdn.ckeditor.com/ckeditor5/11.2.0/classic/ckeditor.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>


<section class="admin_section">
    <div class="left_menu">
        <div class="left_header">
            <div class="logo_box">
                <a href="/"><img src="/img/logo.png" height="100%"></a>
            </div>
        </div>
        <div class="left_content">
            <ul class="list admin_menu_list">
                <li class="menu_item m_admin_products"><a href="/admin_products">Продукты</a></li>
                <li class="menu_item m_admin_saleday"><a href="/update2/orders.php">Заказы</a></li>

                <li class="menu_item m_admin_reviews"><a href="/admin_reviews">Отзывы</a></li>
                <li class="menu_item m_admin_price"><a href="/admin_price">Прайслист</a></li>
                <li class="menu_item m_admin_saleday"><a href="/admin_saleday">Скидки дня</a></li>

<!--                <li class="menu_item m_admin_sale"><a href="/admin_sale">Ակցիա</a></li>-->
<!--                <li class="menu_item m_admin_bag"><a href="/admin_bag">Պայուսակ</a></li>-->
            </ul>
        </div>
    </div>
    <div class="content">
        <div class="content_header"> </div>
        <div class="inner_content">
            <?php echo $content; ?>
        </div>
    </div>
</section>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Информация о заказе</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="order-info">

        Загрузка информации...


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
      </div>
    </div>
  </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.js"></script>
<script src="/js/nice-select.js"></script>
<script src="/js/ckeditor.js"></script>
<script src="/js/script.js"></script>
</body>
<script type="text/javascript">
    function getActiveMenu() {
        let pathname = window.location.pathname;
        let pat_url = pathname.split("/")[1];
        $(".m_" + pat_url).addClass("active");
    };
    getActiveMenu();
    
    function orderDetails(id){
       
       
        $.get( "/update2/order-details.php", { id: id} )
          .done(function( data ) {
           
           $('#order-info').html(data);
           
           
          });       
       
       
       
    }
    
    
</script>
</body>
</html>

<style>
    .ck.ck-content{
        min-height: 300px;
    }
</style>