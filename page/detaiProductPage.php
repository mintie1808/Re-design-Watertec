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
            $limit = 3; 
            $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
            $start = ($page - 1) * $limit;
            $current_page_products = array_slice($products, $start, $limit);
            $total_pages = ceil(count($products) / $limit);
            $totalItems = count($products);
        ?>



    <?php 
     $headerClass = "product-detail-header";    
     include __DIR__ . '/../component/component_header.php'; ?>



    <div class="pro-de-redirect">
        <i class="fa-solid fa-house edit-icon"></i>
        <i class="fa-solid fa-chevron-right edit-icon"></i>
        <a><span>Category</span></a>
        <i class="fa-solid fa-chevron-right edit-icon"></i>
        <a><span>Product name</span></a>
    </div>
    <div class="pro-de-content container">
        <div class="row">
            <div class="col-6 pro-de-cont1">
                <div class="pro-img row-6">
                    <img src="/asset/img/product1.png" alt="" width="auto" height="300px">
                </div>
                <div class="container-pro-img container row-6 ">
                    <div class="row ">
                        <div class="col-4 d-flex flex-column align-items-center"><img src="/asset/img/product1.png" alt="" width="auto" height="126px">
                        </div>
                        <div class="col-4 d-flex flex-column align-items-center"><img src="/asset/img/product1.png" alt="" width="auto" height="126px">
                        </div>
                        <div class="col-4 d-flex flex-column align-items-center"><img src="/asset/img/product1.png" alt="" width="auto" height="126px">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 pro-de-cont2">
                <div class="pro-heading row-4">
                    <span class="text-product-name"> VÒI XỊT VỆ SINH WATERTEC MÀU TRẮNG WT0034 </span>
                </div>
                <div class="pro-info container row-4">
                    <div class="row">
                        <div class="col-6 pro-info-col1 ">
                            <div class="row-4 "><span>Mã sản phẩm: </span></div>
                            <div class="row-4 "><span>Màu: </span></div>
                            <div class="row-4 "><span>Bảo hành: </span></div>
                        </div>
                        <div class="col-6 pro-info-col2">
                            <div class="row-4 "><span>WT002B-6HBVXKE-1</span></div>
                            <div class="row-4 " >
                                <a class="btn dropdown-toggle bg-white text-info" href="#" role="button"
                                    id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    Red
                                </a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="#">White</a>
                                    <a class="dropdown-item" href="#">Black</a>
                                    <a class="dropdown-item" href="#">Red</a>
                                </div>
                            </div>
                            <div class="row-4 "><span>4 years</span></div>
                        </div>

                    </div>
                </div>
                <div class="pro-warning row-4">
                    <i class="fa-solid fa-triangle-exclamation"></i> <span>Cleaning spray head sold separately</span>
                </div>
            </div>
        </div>
    </div>
    <div class="pro-de-descripion ">
        <div class="heading-pro-de-descripion text-about mb-5">
            <span>Description</span>
        </div>
        <div class="content-pro-de-descripion ml-4">
            <p class="container-about-text">Watertec premium toilet spray from Malaysia that has a water filter that no
                other market product has, is durable, good, impact resistant, and easy to install.</p>
        </div>
    </div>
    <div class="pro-de-relative ">
        <div class="heading-pro-de-relative">
            <span class="text-our">Relative</span></br>
            <span class="text-product">Products</span>
        </div>
        <div class="content-pro-de-relative container">
            <div class="row mb-5">
                <?php foreach ($current_page_products as $product): ?>
                <div class="col-4 d-flex flex-column align-items-center">
                    <div class="row-6 mb-3">
                        <img src="/asset/img/product1.png" alt="" width="180px" height="324px">
                    </div>
                    <div class="row-6 text-center">
                        <span class="text-product-name"><?php echo $product['name']; ?></span></br>
                        <span class="pro-info-col2"><?php echo $product['code']; ?></span>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>

            <!-- Phân trang -->
            <nav aria-label="Page navigation">
                <div class="d-flex justify-content-center align-items-center mb-2">
                    <span class="mr-3 text-pag"><?php echo $totalItems; ?> products</span>
                    <div>
                        <ul class="pagination pagination-sm mb-0 ">
                            <li class="mr-3">
                                <img src="/asset/img/Vector 2.svg" alt="">
                            </li>
                            <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                            <li class="page-item1 <?php if ($page == $i) echo 'active'; ?>  text-pag">
                                <a class="page-link1" href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
                            </li>
                            <?php endfor; ?>
                            <li class="page-item1 <?php if ($page >= $total_pages) echo 'disabled'; ?> text-pag"> 
                                <a class="page-link1" href="?page=<?php echo $page + 1; ?>" aria-label="Next">
                                    <span aria-hidden="true">Next</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
   <?php include __DIR__ . '/../component/component_footer.php';
     ?>
</section>