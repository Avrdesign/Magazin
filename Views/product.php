<div class="container marginTop120PX">
    <div class="row">
        <div class="col-md-3">
            <div class="list-group">
                <?php
                /** @var Category $category */
                /** @var TechProduct $product */
                foreach ($categories as $category){ ?>
                    <a href="<?php echo Rout::base_url().'category/'.$category->getSlug();?>" class="list-group-item <?php echo (isset($currentCategory) and $currentCategory == $category->getSlug()) ? ' active' : ''; ?>">
                        <?php echo $category->getName();?>
                    </a>
                <?php }?>
            </div>
        </div>
        <div class="col-md-9 product">
            <div class="row">
                <div class="col-md-6">
                    <div class="thumbnail">
                        <img src="<?php echo $product->getIcons();?>" alt="...">
                        <div class="row">
                            <div class="col-md-4">
                                <a href=""><img class="img-responsive" src="http://lorempixel.com/400/240/technics/" alt=""></a>
                            </div>
                            <div class="col-md-4">
                                <a href=""><img class="img-responsive" src="http://lorempixel.com/400/240/technics/" alt=""></a>
                            </div>
                            <div class="col-md-4">
                                <a href=""><img class="img-responsive" src="http://lorempixel.com/400/240/technics/" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <h3><?php echo $product->getName();?> </h3>
                    <p>
                        <?php echo $product->getDescription();?>
                    </p>
                    <button type="button" class="btn btn-success ">+
                        <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
                    </button>
                    <span class="price <?php echo !$product->getExists() ? 'empty' : '';?>"><?php echo $product->getExists() ? $product->getPrice() : 'Нет в наличии';?></span>
                </div>
            </div>
        </div>
    </div>
</div>
