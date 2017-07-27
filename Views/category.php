<div class="container marginTop120PX">
    <div class="row">
        <div class="col-md-3">
            <div class="list-group">
                <?php
                /** @var Category $category */
                foreach ($categories as $category){ ?>
                    <a href="<?php echo Rout::base_url().'category/'.$category->getSlug();?>" class="list-group-item <?php echo (isset($currentCategory) and $currentCategory->getSlug() == $category->getSlug()) ? ' active' : ''; ?>">
                        <?php echo $category->getName();?>
                    </a>
                <?php }?>
            </div>
        </div>
        <div class="col-md-9 products">
            <div class="row">
                <?php
                /** @var Product $product */
                foreach ( $products as $product){ ?>
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail shadowBox">
                            <img src="<?php echo $product->getIcons();?>" alt="...">
                            <div class="caption">
                                <h4><a href="<?php echo $product->getURI();?>"><?php echo $product->getName();?></a></h4>
                                <p>
                                    <?php echo $product->getDescription();?>
                                </p>
                                <?php if ($product->getExists()) {?>
                                <button type="button" class="btn btn-success btn-sm">+
                                    <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
                                </button>
                                <?php }?>
                                <span class="price <?php echo !$product->getExists() ? 'empty' : '';?>"><?php echo $product->getExists() ? $product->getPrice() : 'Нет в наличии';?></span>
                            </div>
                        </div>
                    </div>
                <?php }?>
            </div>
        </div>
    </div>
</div>
