<section>
    <?php
            $products = [
                ["id" => 1, "name" => "Product 1", "code" => "WT0005-6CAVHTR-6"],
                ["id" => 2, "name" => "Product 2", "code" => "WT0005-6CAVHTR-7"],
                ["id" => 3, "name" => "Product 3", "code" => "WT0005-6CAVHTR-8"],
                ["id" => 4, "name" => "Product 4", "code" => "WT0005-6CAVHTR-9"],
                ["id" => 5, "name" => "Product 5", "code" => "WT0005-6CAVHTR-10"],
                ["id" => 6, "name" => "Product 6", "code" => "WT0005-6CAVHTR-11"],
                ["id" => 7, "name" => "Product 7", "code" => "WT0005-6CAVHTR-12"],
                ["id" => 8, "name" => "Product 8", "code" => "WT0005-6CAVHTR-13"],
            ];
            $limit = 6; 
            $pagination = isset($_GET['pagination']) ? (int)$_GET['pagination'] : 1;
            $start = ($pagination - 1) * $limit;
            $current_page_products = array_slice($products, $start, $limit);
            $total_pages = ceil(count($products) / $limit);
            $totalItems = count($products);
        ?>
    <?php 
     $headerClass = "product-detail-header";    
     include __DIR__ . '/../component/component_header.php'; ?>
    <div class="pro-body  mt-4">
        <div class="pro-header w-80-ml-10">
            <span class="text-our">All</span></br>
            <span class="text-product">Products</span>
            <p class="title-pro-heading ml-4">
                Discover a new level of elegance and efficiency with Watertec's premium plumbing solutions. Our products
                offer a luxurious water experience while promoting conservation.
                </br>
                Upgrade your home with Watertec products today.
            </p>
            <div class="container-img"><img src="/asset/img/cataloge.png" alt=""></div>
        </div>
        <div class="news-de-daca mt-3 mb-5">
            <div class="row">
                <div class="col-md-2 ml-2 "><span><a class="btn dropdown-toggle bg-white text-info" href="#"
                            role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false" style="font-weight: 800;">
                            Category
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="#">CAMPAIGNS</a>
                            <a class="dropdown-item" href="#">EVENTS</a>
                            <a class="dropdown-item" href="#">PRODUCTS</a>
                        </div>
                    </span></div>
                <div class="col-md-2 offset-md-6 offset-3 d-flex  align-items-center ">
                    <i class="fa fa-search text-info mr-md-3 mr-1"></i>
                    <input type="text" class="form-control" placeholder="Search"
                        style="width: 80%; min-width: 70px; color: #00B7BF;">
                </div>
            </div>
        </div>
        <div class="content-pro-de-relative container mb-5">
            <div class="row mb-5">
                <?php foreach ($current_page_products as $product): ?>
                <div class="col-md-4 col-12 d-flex flex-column align-items-center mb-4">
                    <div class="row-6 mb-3">
                        <a href="index.php?page=productsdetail"><img src="/asset/img/product1.png" alt="" width="180px"
                                height="324px"></a>
                    </div>
                    <div class="row-6 text-center mb-5">
                        <span class="text-product-name"><?php echo $product['name']; ?></span></br>
                        <span class="pro-info-col2"><?php echo $product['code']; ?></span>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>

            <!-- Phân trang -->
            <nav aria-label="Page navigation">
                <div class="d-flex justify-content-center align-items-center mb-5">
                    <span class="mr-2 text-pag"><?php echo $totalItems; ?> products</span>
                    <div>
                        <ul class="pagination pagination-sm mb-0 ">
                            <li class="mr-2">
                                <img src="/asset/img/Vector 2.svg" alt="">
                            </li>
                            <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                            <li class="page-item1 <?php if ($pagination == $i) echo 'active'; ?>  text-pag">
                                <a class="page-link1"
                                    href="index.php?page=products&pagination=<?php echo $i; ?>"><?php echo $i; ?></a>
                            </li>
                            <?php endfor; ?>
                            <li class="page-item1 <?php if ($pagination >= $total_pages) echo 'disabled'; ?> text-pag">
                                <a class="page-link1"
                                    href="index.php?page=products&pagination=<?php echo $pagination + 1; ?>"
                                    aria-label="Next">
                                    <span aria-hidden="true">Next</span>
                                </a>
                            </li>
                        </ul>

                    </div>
                </div>
            </nav>
        </div>

    </div>




    <?php include __DIR__ . '/../component/component_footer.php'; ?>
</section>