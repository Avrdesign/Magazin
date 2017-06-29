

<h1>Категории</h1>
<ul>
<?php
    /** @var Category $category */
    foreach ($categories as $category){ ?>
        <li>
            <a href="<?php echo $category->getSlug();?>"><?php echo $category->getName();?></a>
        </li>
    <?php }?>
</ul>
