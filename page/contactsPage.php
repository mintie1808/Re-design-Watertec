<section>
    <?php 
     $headerClass = "product-detail-header";    
     include __DIR__ . '/../component/component_header.php'; ?>
    <div class="pro-body  mt-4">
        <div class="pro-header w-80-ml-10">
            <span class="text-our">Contact</span></br>
            <span class="text-product">Us</span>
            <p class="title-pro-heading ml-4">
                Don’t see your question in the FAQ? Get in touch with us, we’re here to help you.
            </p>
        </div>
        <div class="container ">
            <div class="row contact-cont-1">
                <div class="col-md-8 col-12">
                    <div>
                        <h3>Let's chat</h3>
                    </div>
                    <div class="first-content row">
                        <div class="col-md-6 col-12">
                            <h4>Name</h4>
                            <input type="text">
                        </div>
                        <div class="col-md-6 col-12">
                            <h4>Email</h4>
                            <input type="text">
                        </div>
                    </div>
                    <div class="first-content row">
                        <div class="col-md-6 col-12">
                            <h4>Phone</h4>
                            <input type="text">
                        </div>
                        <div class="col-md-6 col-12">
                            <h4>Company</h4>
                            <input type="text">
                        </div>
                    </div>
                    <div class="first-content">
                        <h4>Purpose</h4>
                        <input type="text">
                    </div>
                    <div class="first-content">
                        <h4>Message</h4>
                        <input type="text">
                    </div>
                    <div class="first-content">
                        <button type="button" class="btn btn-light text-more"
                            style="border-color: #00B7BF; color: #00B7BF;"
                            onclick="window.location.href='index.php?page=newsdetail';">
                            Submit
                        </button>
                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <div>
                        <h3>Get in touch</h3>
                    </div>
                    <div class="row">
                        <div class="border-icon text-center col-3">
                            <div ><i class="fa-solid fa-phone" style="color: #ffffff; font-size: 1rem;"></i></div>
                        </div>
                        <div class="col-6"><span>0851111211</span></div>
                    </div>
                </div>
            </div>
        </div>



        <?php include __DIR__ . '/../component/component_footer.php'; ?>
</section>