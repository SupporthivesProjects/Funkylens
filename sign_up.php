<?php include 'includes/header.php'; ?>

        <section style="padding: 0%;">
            <div class="login_outer">
                <div class="login_main">
                    <div class="login_div1">
                        <h3 class="uppass_head">Create your account</h3>
                    </div>
                    <div class="login_div2">
                        <div class="login_div2_inn">
                            <input type="text" class="login_input" placeholder="Name">
                            <input type="email" class="login_input" placeholder="Email">
                            <input type="password" class="login_input" placeholder="Password">
                            <input type="password" class="login_input" placeholder="Confirm Password">
                        </div>
                        <button class="btn login_btn">Get Started</button>
                        <div class="form-check">
                            <input class="form-check-input sign_up_check" type="checkbox" value="" id="checkChecked" checked>
                            <label class="form-check-label sign_up_para" for="checkChecked">
                                By ticking this box, you agree to the <a href="">Terms & Conditions</a>  & <a href="">Privacy Policy</a>
                            </label>
                        </div>
                    </div>
                    <div class="login_div3">
                        <p class="login_para2">Already have an account? <a href="./login.php">Sign in</a></p>
                    </div>
                </div>
            </div>
        </section>



   <?php include 'includes/footer.php'; ?>