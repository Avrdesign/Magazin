<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="list-group">
                <?php
                /** @var Category $category */
                foreach ($categories as $category){ ?>
                    <a href="<?php echo Rout::base_url().'category/'.$category->getSlug();?>" class="list-group-item <?php echo (isset($currentCategory) and $currentCategory == $category->getSlug()) ? ' active' : ''; ?>">
                        <?php echo $category->getName();?>
                    </a>
                <?php }?>
            </div>
        </div>
        <div class="col-md-8 products">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="http://lorempixel.com/1920/600/technics/" alt="...">
                        <div class="carousel-caption">
                            carousel-example-generic 1
                        </div>
                    </div>
                    <div class="item">
                        <img src="http://lorempixel.com/1920/600/technics/" alt="...">
                        <div class="carousel-caption">
                            carousel-example-generic 2
                        </div>
                    </div>
                    <div class="item">
                        <img src="http://lorempixel.com/1920/600/technics/" alt="...">
                        <div class="carousel-caption">
                            carousel-example-generic 3
                        </div>
                    </div>
                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <div class="row">
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="http://lorempixel.com/400/240/technics/" alt="...">
                        <div class="caption">
                            <h3>Thumbnail label</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, at dignissimos excepturi fuga itaque necessitatibus optio quasi quis quos tenetur vero voluptatem! Accusamus ad cum error explicabo illo maxime nam.</p>
                            <p>
                                <button type="button" class="btn btn-success btn-lg">+
                                    <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
                                </button>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="http://lorempixel.com/400/240/technics/" alt="...">
                        <div class="caption">
                            <h3>Thumbnail label</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, at dignissimos excepturi fuga itaque necessitatibus optio quasi quis quos tenetur vero voluptatem! Accusamus ad cum error explicabo illo maxime nam.</p>
                            <p>
                                <button type="button" class="btn btn-success btn-lg">+
                                    <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
                                </button>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="http://lorempixel.com/400/240/technics/" alt="...">
                        <div class="caption">
                            <h3>Thumbnail label</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, at dignissimos excepturi fuga itaque necessitatibus optio quasi quis quos tenetur vero voluptatem! Accusamus ad cum error explicabo illo maxime nam.</p>
                            <p>
                                <button type="button" class="btn btn-success btn-lg">+
                                    <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
                                </button>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="http://lorempixel.com/400/240/technics/" alt="...">
                        <div class="caption">
                            <h3>Thumbnail label</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, at dignissimos excepturi fuga itaque necessitatibus optio quasi quis quos tenetur vero voluptatem! Accusamus ad cum error explicabo illo maxime nam.</p>
                            <p>
                                <button type="button" class="btn btn-success btn-lg">+
                                    <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
                                </button>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="http://lorempixel.com/400/240/technics/" alt="...">
                        <div class="caption">
                            <h3>Thumbnail label</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, at dignissimos excepturi fuga itaque necessitatibus optio quasi quis quos tenetur vero voluptatem! Accusamus ad cum error explicabo illo maxime nam.</p>
                            <p>
                                <button type="button" class="btn btn-success btn-lg">+
                                    <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
                                </button>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="http://lorempixel.com/400/240/technics/" alt="...">
                        <div class="caption">
                            <h3>Thumbnail label</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, at dignissimos excepturi fuga itaque necessitatibus optio quasi quis quos tenetur vero voluptatem! Accusamus ad cum error explicabo illo maxime nam.</p>
                            <p>
                                <button type="button" class="btn btn-success btn-lg">+
                                    <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
                                </button>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="http://lorempixel.com/400/240/technics/" alt="...">
                        <div class="caption">
                            <h3>Thumbnail label</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, at dignissimos excepturi fuga itaque necessitatibus optio quasi quis quos tenetur vero voluptatem! Accusamus ad cum error explicabo illo maxime nam.</p>
                            <p>
                                <button type="button" class="btn btn-success btn-lg">+
                                    <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
                                </button>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
