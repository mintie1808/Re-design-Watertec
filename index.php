<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./asset/style.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap" rel="stylesheet">
    <title>Your Website Name - Home</title>
</head>

<body>
    <div class="container-fluid">
        <div class="mx-auto">
            <?php 
                include './page/homePage.php';
                // include './page/aboutPage.php';
                // Example of dynamic page inclusion
                // $currentPage = 'home'; // This can be changed based on your routing logic
                // if ($currentPage === 'home') {
                //     include './page/homePage.php';
                // } elseif ($currentPage === 'about') {
                //     include './page/aboutPage.php';
                // }
            ?>
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
