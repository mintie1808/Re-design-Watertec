<section>
    <?php 
     $headerClass = "product-detail-header";    
     include __DIR__ . '/../component/component_header.php'; ?>
    <?php
// Sample data for news items
$allNewsItems = [
    [   
        'type' =>'CAMPAINS',
        'title' => 'WATERTEC VIETNAM | Campaign to Support Dealers & Communities in Thanh Hoa, Hai Duong, and Bac Ninh Province',
        'date' => '2023-12-05',
        'text'=>'🌟 Welcome agents in Thanh Hoa, Hai Duong and Bac Ninh! Phan Khang Home is very
            pleased to
            announce a special business trip to these lands. With the desire to bring great experiences, Phan Khang Home
            would like to introduce to you Dealers the top quality Watertec plastic faucet products imported from
            Malaysia!',
        'img' => '/asset/img/news-de-img.png'
    ],
    [   
        'type' =>'PRODUCTS',
        'title' => 'New Product Launch in Ho Chi Minh City',
        'date' => '2023-11-15',
        'text'=>'Discover a new level of elegance and efficiency with Watertec premium plumbing solutions. Our products
                offer a luxurious water experience while promoting conservation.',
        'img' => '/asset/img/news-de-img.png'
    ],
    [   
        'type' =>'EVENTS',
        'title' => 'Environmental Initiative: Clean Water for Rural Areas',
        'date' => '2023-10-20',
        'text'=>'Discover a new level of elegance and efficiency with Watertec premium plumbing solutions. Our products
                offer a luxurious water experience while promoting conservation.',
        'img' => '/asset/img/news-de-img.png'
    ],
    [   
        'type' =>'EVENTS',
        'title' => 'Environmental Initiative: Clean Water for Rural Areas',
        'date' => '2023-10-20',
        'text'=>'Discover a new level of elegance and efficiency with Watertec premium plumbing solutions. Our products
                offer a luxurious water experience while promoting conservation.',
        'img' => '/asset/img/news-de-img.png'
    ],
    [   
        'type' =>'EVENTS',
        'title' => 'Environmental Initiative: Clean Water for Rural Areas',
        'date' => '2023-10-20',
        'text'=>'Discover a new level of elegance and efficiency with Watertec premium plumbing solutions. Our products
                offer a luxurious water experience while promoting conservation.',
        'img' => '/asset/img/news-de-img.png'
    ],
    [   
        'type' =>'EVENTS',
        'title' => 'Environmental Initiative: Clean Water for Rural Areas',
        'date' => '2023-10-20',
        'text'=>'Discover a new level of elegance and efficiency with Watertec premium plumbing solutions. Our products
                offer a luxurious water experience while promoting conservation.',
        'img' => '/asset/img/news-de-img.png'
    ],
];

$totalItems = count($allNewsItems);
$itemsPerPage = 4;
$total_pages = ceil($totalItems / $itemsPerPage);
$pagination = isset($_GET['pagination']) ? (int)$_GET['pagination'] : 1;
$startIndex = ($pagination - 1) * $itemsPerPage;

$newsItems = array_slice($allNewsItems, $startIndex, $itemsPerPage);
?>



    <div class="news-body  mt-4">
        <div class="news-header w-80-ml-10">
            <span class="text-our">Latest</span></br>
            <span class="text-product">News</span>
        </div>
        <div class="news-de-daca mt-3 mb-5">
            <div class="row d-flex align-items-center container-news-seekbar ">
                <div class="col-md-1 col-3 ml-md-2 "><span><a class="btn dropdown-toggle bg-white text-info" href="#"
                            role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false" style="font-weight: 800;">
                            Type
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="#">CAMPAIGNS</a>
                            <a class="dropdown-item" href="#">EVENTS</a>
                            <a class="dropdown-item" href="#">PRODUCTS</a>
                        </div>
                    </span></div>
                <div class="col-md-2 col-4 offset-md-5 offset-0 mr-md-3 mr-2"><span>Sort by <a
                            class="btn dropdown-toggle bg-white text-info" href="#" role="button" id="dropdownMenuLink"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                            style="font-weight: 800; ">
                            Newest
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="#">Newest</a>
                            <a class="dropdown-item" href="#">Lastest</a>
                        </div>
                    </span>

                </div>
                <div class="col-md-2 col-3 offset-md-0 offset-1 d-flex  align-items-center ">
                    <i class="fa fa-search text-info mr-md-3 mr-1"></i>
                    <input type="text" class="form-control" placeholder="Search"
                        style="width: 80%; min-width: 70px; color: #00B7BF;">
                </div>
            </div>
        </div>
        <div class="news-body-container w-80-ml-10 container mb-5">
            <?php foreach ($newsItems as $news): ?>
            <div class="row mb-5">
                <div class="col-md-4 col-6 col-12 container-img px-4 d-flex align-items-center">
                    <img src=" ../asset/img/news-de-img.png" alt="" width="100%" height="auto">
                </div>
                <div class="col-md-8 col-6 col-12 p-4">
                    <div class="row-3 text-compaigns mb-md-4 mb-2"><span> <?php echo $news['type']; ?></span></div>
                    <div class="row-3 text-news-title mb-md-4 mb-2">
                        <span><?php echo $news['title']; ?></span>
                    </div>
                    <hr style="width: 100%; height: 1px; background-color: #00B7BF; border: none; margin: 0 auto;">
                    <div class="row-3 mt-md-4 mt-2 text-news-content">
                        <span><?php echo $news['text']; ?></span>
                    </div>

                    <div class="row-3 mt-md-4 mt-2  text-news-date">
                        <span><?php echo $news['date']; ?></span>
                    </div>
                    <div class="row-3 mt-3 mb-5">
                        <button type="button" class="btn btn-light" style="border-color: #00B7BF; color: #00B7BF;"
                            onclick="window.location.href='index.php?page=newsdetail';">
                            More information
                        </button>
                    </div>


                </div>
            </div>
            <?php endforeach; ?>
            <nav aria-label="Page navigation">
                <div class="d-flex justify-content-center align-items-center mb-2">
                    <span class="mr-3 text-pag"><?php echo $totalItems; ?> News</span>
                    <div>
                        <ul class="pagination pagination-sm mb-0 ">
                            <li class="mr-2">
                                <img src="/asset/img/Vector 2.svg" alt="">
                            </li>
                            <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                            <li class="page-item1 <?php if ($pagination == $i) echo 'active'; ?>  text-pag">
                                <a class="page-link1"
                                    href="index.php?page=news&pagination=<?php echo $i; ?>"><?php echo $i; ?></a>
                            </li>
                            <?php endfor; ?>
                            <li class="page-item1 <?php if ($pagination >= $total_pages) echo 'disabled'; ?> text-pag">
                                <a class="page-link1"
                                    href="index.php?page=news&pagination=<?php echo $pagination + 1; ?>"
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