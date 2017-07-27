<div class="list-group">
    <a href="?page=orders" class="list-group-item
    <?php echo ($page == Admin::CATEGORIES) ||
               ($page == Admin::PRODUCTS) ||
                ($page == Admin::CATEGORY) ||
               ($page == Admin::PROMO) ||
                ($page == Admin::PARSE) ||
               ($page == Admin::COMMENTS) ||
               ($page == Admin::PRODUCT) ||
               ($page == Admin::INFO)  ? "" : "active" ;?>">Заказы</a>

    <a href="?page=categories" class="list-group-item <?php echo ($page == Admin::CATEGORIES or $page == Admin::CATEGORY) ? "active" : ""?>">Категории</a>
    <a href="?page=products" class="list-group-item <?php echo ($page == Admin::PRODUCTS or $page == Admin::PRODUCT) ? "active" : ""?>">Продукты</a>
    <a href="?page=promo" class="list-group-item <?php echo $page == Admin::PROMO ? "active" : ""?>">Акционные продукты</a>
    <a href="?page=comments" class="list-group-item <?php echo $page == Admin::COMMENTS ? "active" : ""?>">Отзывы</a>
    <a href="?page=info" class="list-group-item <?php echo $page == Admin::INFO ? "active" : ""?>">Инормация</a>
    <a href="?page=parse" class="list-group-item <?php echo $page == Admin::PARSE ? "active" : ""?>">Парсинг продктов</a>

</div>