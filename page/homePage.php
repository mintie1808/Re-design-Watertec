    <section>
        <?php
// Sample data for news items
$allNewsItems = [
    [   
        'type' =>'CAMPAIGNS',
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
$itemsPerPage = 1;
$total_pages = ceil($totalItems / $itemsPerPage);
$pagination = isset($_GET['pagination']) ? (int)$_GET['pagination'] : 1;
$startIndex = ($pagination - 1) * $itemsPerPage;

$newsItems = array_slice($allNewsItems, $startIndex, $itemsPerPage);
?>
        <?php 
        $headerClass = "home-header";
        include __DIR__ . '/../component/component_header.php';    
        ?>



        <?php include __DIR__ . '/../component/component_about.php';
        
        
        
        ?>

        <div class="home-content-product">
            <div class="home-heading-product">
                <span class="text-our">Our</span></br>
                <span class="text-product">Products</span>
            </div>
            <div class="home-container-product container">
                <div class="row">
                    <div class="col-md-4 col-12">
                        <div class="container-product">
                            <div class="container-img-product"><span>All</br> Products</span></div>
                        </div>
                        <div class="container-product">
                            <div class="container-img-product"><span>Pillar Sink</br> Tap</span></div>
                        </div>
                        <div class="container-product">
                            <div class="container-img-product"><span>Wall Sink</br> Tap</span></div>
                        </div>
                    </div>
                    <div class="col-md-4 col-12">
                        <div class="container-product">
                            <div class="container-img-product"><span>Hand Bidet</span></div>
                        </div>
                        <div class="container-product">
                            <div class="container-img-product"><span>Stop Valve</span></div>
                        </div>
                        <div class="container-product">
                            <div class="container-img-product"><span>Basin Tap</span></div>
                        </div>
                    </div>
                    <div class="col-md-4 col-12">
                        <div class="container-product">
                            <div class="container-img-product"><span>Hand</br> Shower</span></div>
                        </div>
                        <div class="container-product">
                            <div class="container-img-product"><span>Hose</br> Connect</span></div>
                        </div>
                        <div class="container-product">
                            <div class="container-img-product"><span>Bib Tap</span></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="home-content-news">
            <div class="home-heading-news">
                <div class="home-cont-text-news container py-md-5 py-5 px-md-1 px-5">
                    <span class="text-latest">Latest</span>
                    <div class="row">
                        <div class="col-md-2 col-6"><span class="text-news">News</span>
                        </div>
                        <div class="col-md-3 col-5  offset-md-7 offset-1 mt-md-5 mt-md-0 mt-2 mb-4"><a
                                class="text-view-all" href="index.php?page=news">View all news<i
                                    class="fa-solid fa-angle-right ml-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="home-cont-slider-news ">
                <div class="home-slider-news container ">
                    <div class="swiper-container d-block">
                        <div class="swiper-wrapper ">
                            <?php foreach ($allNewsItems as $news): ?>
                            <div class="swiper-slide">
                                <div class="row mb-4">
                                    <div class="col-md-4 col-4 container-img px-4 d-flex align-items-center"
                                        style="margin: 0 !important; padding: 0 !important; ">
                                        <img src="<?php echo $news['img']; ?>" alt="" width="auto" height="auto">
                                    </div>
                                    <div
                                        class="col-md-6 col-7 p-1 ml-md-4 ml-1 mr-md-4 mr-1 mt-md-5 mt-1 d-flex flex-column">
                                        <div class="text-compaigns mb-md-4 mb-2">
                                            <span><?php echo $news['type']; ?></span>
                                        </div>
                                        <div class="text-news-title-home mb-md-4 mt-md-5 mt-1">
                                            <span><?php echo $news['title']; ?></span>
                                        </div>
                                        <div class="text-news-date mt-md-4 mt-md-5 mt-1">
                                            <span><?php echo $news['date']; ?></span>
                                        </div>
                                        <div class="mt-3 mt-md-3 mt-1">
                                            <button type="button" class="btn btn-light text-more"
                                                style="border-color: #00B7BF; color: #00B7BF;"
                                                onclick="window.location.href='index.php?page=newsdetail';">
                                                More information
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <div class="swiper-pagination mb-5"></div>
                </div>
            </div>
        </div>
        <div class="home-content-support">
            <div class="home-heading-news">
                <div class="home-cont-text-news container py-md-5 py-5 px-md-1 px-5">
                    <span class="text-latest">Support</span>
                    <span class="text-news">Process</span>
                </div>
            </div>
            <div class="home-cont-process container mb-4">
                <div class="row ml-md-5 ml-1">
                    <div class="col-4 process-item-1 text-center">
                        <i class="fa-solid fa-phone-volume mt-3 " style="color: #005498;"></i><br><span>Contact</span>
                    </div>
                    <div class="col-4 process-item-2 text-center">
                        <i class="fa-solid fa-circle-exclamation mt-3"
                            style="color: #005498;"></i><br><span>Recaption</span>
                    </div>
                    <div class="col-4 process-item-3 text-center">
                        <i class="fa-solid fa-clock-rotate-left mt-3"
                            style="color: #005498;"></i><br><span>Feedback</span>
                    </div>
                </div>
            </div>
            <div class="text-view-more text-center mb-5">
                <a href="index.php?page=contact">View more<i class="fa-solid fa-angle-right ml-2"></i></a>
            </div>

        </div>
        </div>
        <?php include __DIR__ . '/../component/component_footer.php'; ?>


    </section>
    <script>
document.addEventListener('DOMContentLoaded', function() {
    const swiper = new Swiper('.swiper-container', {
        slidesPerView: 1,
        spaceBetween: 0,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
            type: 'bullets',
        },
        loop: false,
        centeredSlides: false,
    });
});
    </script>