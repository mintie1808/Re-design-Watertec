<section>
    <?php 
     $headerClass = "product-detail-header";    
     include __DIR__ . '/../component/component_header.php'; ?>
    <?php
// Sample data for news items
$allNewsItems = [
    [
        'title' => 'WATERTEC VIETNAM | Campaign to Support Dealers & Communities in Thanh Hoa, Hai Duong, and Bac Ninh Province',
        'date' => '2023-12-05',
        'img' => '/asset/img/news-de-img.png'
    ],
    [
        'title' => 'New Product Launch in Ho Chi Minh City',
        'date' => '2023-11-15',
        'img' => '/asset/img/news-de-img.png'
    ],
    [
        'title' => 'Environmental Initiative: Clean Water for Rural Areas',
        'date' => '2023-10-20',
        'img' => '/asset/img/news-de-img.png'
    ],
];

$totalItems = count($allNewsItems);
$itemsPerPage = 2;
$total_pages = ceil($totalItems / $itemsPerPage);
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$startIndex = ($page - 1) * $itemsPerPage;

$newsItems = array_slice($allNewsItems, $startIndex, $itemsPerPage);
?>

    <div class="pro-de-redirect">
        <i class="fa-solid fa-house edit-icon"></i>
        <i class="fa-solid fa-chevron-right edit-icon"></i>
        <a><span>News</span></a>
        <i class="fa-solid fa-chevron-right edit-icon"></i>
        <a><span>WATERTEC VIETNAM | Campaign to Support Dealers & Communities in Thanh Hoa, Hai Duong, and Bac Ninh
                Province</span></a>
    </div>
    <div class="news-de-header mb-4">
        <h3>WATERTEC VIETNAM | Campaign to Support Dealers & Communities in Thanh Hoa, Hai Duong, and Bac Ninh Province
        </h3>
    </div>
    <hr style="width: 50%; height: 2px; background-color: #00B7BF; border: none; margin: 0 auto;">

    <div class="news-de-daca mt-4 mb-5">
        <div class="row">
            <div class="col-md-2 ml-4"><span>2024-11-10</span></div>
            <div class="col-md-2 offset-md-7 "><span>CAMPAIGNS</span></div>
        </div>
    </div>
    <div class="news-de-body">
        <h3 class="news-de-body-header mb-4">WATERTEC VIETNAM</h3>
        <p class="text-news mb-4">🌟 Welcome agents in Thanh Hoa, Hai Duong and Bac Ninh! Phan Khang Home is very
            pleased to
            announce a special business trip to these lands. With the desire to bring great experiences, Phan Khang Home
            would like to introduce to you Dealers the top quality Watertec plastic faucet products imported from
            Malaysia!</p>
        <div class="news-de-body-img mb-4 d-flex justify-content-center">
            <img src="/asset/img/news-de-img.png" alt="">
        </div>
        <p class="text-news mb-4">🌟 Welcome agents in Thanh Hoa, Hai Duong and Bac Ninh! Phan Khang Home is very
            pleased to
            announce a special business trip to these lands. With the desire to bring great experiences, Phan Khang Home
            would like to introduce to you Dealers the top quality Watertec plastic faucet products imported from
            Malaysia!</p>
        <hr style="width: 50%; height: 1px; background-color: #1C1B1F; border: none; margin: 0 auto;">
        <p class="text-news mb-4 mt-4">
            Don't miss the opportunity to become part of the Phan Khang Home family! Contact Phan Khang Home now for
            more details about the Dealer program and start your successful business journey with top quality Watertec
            products from Malaysia.
            </br>
            #PhanKhangHome #DaiLyChinhThuc #PlasticVanVoiNha #ImportMalaysia #BusinessCoHoiHoiDoanho</br>
            For more details, please contact hotline:</br>
            (+84)90-6610-116, https://watertec.com.vn/</br>
            Facebook: https://www.facebook.com/WatertecVietNam
        </p>
    </div>
    <div class="news-de-other-news-container">
        <div class="other-news-header">
            <span class="text-our">Other</span></br>
            <span class="text-product">News</span>
        </div>
        <div class="other-news-body container  mb-5">
            <div class="row mb-5">
                <?php foreach ($newsItems as $news): ?>
                <div class="col-6 container">
                    <div class="row">
                        <div class="col-6">
                            <img src="<?php echo $news['img']; ?>" alt="" height="335.3" width="auto">
                        </div>
                        <div class="col-6">
                            <div class="row-3 text-compaigns"><span>CAMPAIGNS</span></div>
                            <div class="row-3 text-news-title">
                                <span><?php echo $news['title']; ?></span>
                            </div>
                            <div class="row-3 mt-4 text-news-date">
                                <span><?php echo $news['date']; ?></span>
                            </div>
                            <div class="row-3 mt-3">
                                <button type="button" class="btn btn-light"
                                    style="border-color: #00B7BF; color: #00B7BF;">
                                    More information
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            <nav aria-label="Page navigation">
                <div class="d-flex justify-content-center align-items-center mb-2">
                    <span class="mr-3 text-pag"><?php echo $totalItems; ?> News</span>
                    <div>
                        <ul class="pagination pagination-sm mb-0">
                            <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                            <li class="page-item1 <?php if ($page == $i) echo 'active'; ?> text-pag">
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


    <?php 
      include __DIR__ . '/../component/component_footer.php';  
    ?>
</section>