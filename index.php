<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./asset/style.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Inter&family=Nunito+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

    <title>Your Website Name - Home</title>
</head>

<body>
    <div class="container-fluid">
        <div class="mx-auto">
            <?php
                $page = isset($_GET['page']) ? $_GET['page'] : 'contact';
                $pagination = isset($_GET['pagination']) ? (int)$_GET['pagination'] : 1;
                $page = isset($_GET['page']) ? $_GET['page'] : 'contact';
                switch ($page) {
                    case 'home':
                        include './page/homePage.php';
                        break;
                    case 'about':
                        include './page/aboutPage.php';
                        break;
                    case 'products':
                        include './page/productPage.php';
                        break;
                    case 'productsdetail':
                        include './page/productDetaiPage.php';
                        break;    
                    case 'news':
                        include './page/newsPage.php';
                        break;
                    case 'newsdetail':
                        include './page/newsDetailPage.php';
                        break;
                    case 'contact':
                        include './page/contactsPage.php';
                        break;
                    default:
                        include './page/homePage.php';
                        break;
                }
            ?>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>