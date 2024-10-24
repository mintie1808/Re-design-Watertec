<section>
    <?php 
         $headerClass = "home-header";
         include __DIR__ . '/../component/component_header.php';     
    ?>
    <?php 
$current_page = 'about'; 
include __DIR__ . '/../component/component_about.php'; 
?>

    <div class="about-cocq">
        <div class="heading-cocq">
            <div class="text-about">About</div>
            <div class="text-cocq"><span class="text-co">CO</span><span class="text-and">&</span><span
                    class="text-co">CQ</span></div>
        </div>
        <div class="content-cocq">
            <div class="cont-co">
                <img src="../asset/img/cocq_replace.png" alt="" width="420px" height="594px"><br />
                <span> Watertec CO certificate</span>
            </div>
            <div class="cont-co">
                <img src="../asset/img/cocq_replace.png" alt="" width="420px" height="594px"><br />
                <span> Watertec CQ certificate</span>
            </div>
        </div>
    </div>



    <?php include __DIR__ . '/../component/component_footer.php'; ?>



</section>