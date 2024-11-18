<!-- header.php -->
<section>
    <div class="<?php echo $headerClass; ?>">
        <nav class="navbar navbar-expand-lg header-nav">
            <div class="container-fluid">
                <a href="index.php?page=home" class="navbar-brand">
                    <div class="header-logo">
                        <img src="asset/img/logoWatertec.png" width="146.778px" height="59.161px"
                            style="flex-shrink: 0;" />
                    </div>
                </a>
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav container-menu">
                        <a href="index.php?page=home" class="nav-item nav-link active">Home</a>
                        <a href="index.php?page=about" class="nav-item nav-link">About Us</a>
                        <a href="index.php?page=products" class="nav-item nav-link">Products</a>
                        <a href="index.php?page=news" class="nav-item nav-link">News</a>
                        <a href="index.php?page=contact" class="nav-item nav-link">Contact</a>
                    </div>
                    <div class="navbar-nav ms-auto">
                        <div class="nav-item nav-link">
                            <div class="language">
                                <img src="asset/img/language.png" alt="language icon" width="20px" height="20px">
                                <select>
                                    <option value="EN">EN</option>
                                    <option value="VI">VI</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</section>