

<div class="container">
    <div class="row">
        <div class="col-md-4">
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
        <div class="col-md-8 products">
            <div class="row">
                <?php
                /** @var Product $product */
                foreach ( $products as $product){ ?>
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <img src="<?php echo $product->getIcons();?>" alt="...">
                            <div class="caption">
                                <h3><a href="<?php echo $product->getURI();?>"><?php echo $product->getName();?></a></h3>
                                <p>
                                    <button type="button" class="btn btn-success btn-lg">+
                                        <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
                                    </button>
                                </p>
                            </div>
                        </div>
                    </div>
                <?php }?>
            </div>
        </div>
    </div>
</div>
