<?php include 'includes/header.php'; ?>
<section class="indi_page">
    <div class="container-fluid px-0">
        <div class="row">
            <div class="col-md-6 left_img">
                <div class="imgg_box">
                    <img src="./img/produc_img.png" alt="" class="img-fluid d-lg-block d-md-block d-block">
                    <!-- <img src="./imagevault-img/produc_img.png" alt="" class="img-fluid d-lg-none d-md-none d-block"> -->
                </div>
            </div>
            <div class="col-md-6 right_content">
                <div class="inner_cont_box">
                    <div class="in_upper_bx">
                        <button class="btn btn_cat">
                            Premium image
                        </button>
                        <h1 class="indi_title">This is the image title</h1>
                        <p class="indi_sub">Rhoncus enim lorem elementum nec interdum nulla at elementum maecenas.
                            Tincidunt sit
                            vitae habitasse leo nullam turpis justo nisl quis. In malesuada sit laoreet sed eget feugiat
                            eget.
                            Ultrices facilisis sed aliquam mollis urna. At vel.</p>
                        <div class="three_btns">
                            <button class="btn btn_grey">
                                Nature
                            </button>
                            <button class="btn btn_grey">
                                Ocean
                            </button>
                            <button class="btn btn_grey">
                                Mountains
                            </button>
                        </div>
                    </div>
                    <div class="in_lower_bx">
                        <div class="btn_two_bx">
                            <button class="btn btn_back">
                                back
                            </button>
                            <button class="btn btn_log" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Download for 3 credits
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered forget_dailog">
            <div class="modal-content forget_content2">
                <div class="modal-body paymet_failed_modal">
                    <div class="mod_div">
                        <div class="mody_bx">
                            <div class="mod_heads">
                                <h1 class="log_title">purchased successfully!</h1>
                                <p class="mo_subb">Your download should begin shortly.
                                    3 credits consumed.</p>
                            </div>
                        </div>
                        <button class="btn btn_log_mod">
                            close
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php include 'includes/footer.php'; ?>