<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./asset/style.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap"
        rel="stylesheet">
    <title>Document</title>
</head>


<body>
    <div class="container-fluid">
        <div class="mx-auto">
            <?php include './component/component_header.php' ?>
            <?php include './component/component_about.php' ?>

            <div class="home-content-product">
                <div class="home-heading-product">
                    <span class="text-our">Our</span></br>
                    <span class="text-product">Products</span>
                </div>
                <div class="home-container-product">
                    <div class="container-product">
                        <div class="container-img-product"><span>All</br> Products</span></div>
                    </div>
                    <div class="container-product">
                        <div class="container-img-product"><span>Pillar Sink</br> Tap</span></div>
                    </div>
                    <div class="container-product">
                        <div class="container-img-product"><span>Wall Sink</br> Tap</span></div>
                    </div>
                    <div class="container-product">
                        <div class="container-img-product"><span>Hand Bidet</span></div>
                    </div>
                    <div class="container-product">
                        <div class="container-img-product"><span>Stop Valve</span></div>
                    </div>
                    <div class="container-product">
                        <div class="container-img-product"><span>Basin Tap</span></div>
                    </div>
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
            <div class="home-content-news">
                <div class="home-heading-news">
                    <div class="home-cont-text-news">
                        <span class="text-about">Latest</span></br>
                        <span class="text-news">News</span>
                    </div>
                </div>
                <div class="home-cont-slider-news">
                    <div class="home-slider-news">
                        <div class="home-news-details">

                        </div>
                    </div>
                    <div>
                        ...
                    </div>
                </div>

            </div>
            <div class="content-4">

            </div>
           <?php include'./component/component_footer.php' ?>
        </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>