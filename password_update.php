<?php include 'includes/header.php'; ?>

        <section style="padding: 0%;">
            <div class="login_outer">
                <div class="login_main">
                    <div class="login_div1">
                        <h3 class="uppass_head">Update your password</h3>
                    </div>
                    <div class="login_div2">
                        <div class="login_div2_inn">
                            <input type="password" class="login_input" placeholder="New Password">
                            <input type="password" class="login_input" placeholder="Confirm New Password">
                        </div>
                        <button type="button" class="btn login_btn" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">Sign in</button>
                        <a href="./password_reset.php" class="login_a">Forgot password</a>
                    </div>
                    <div class="login_div3">
                        <p class="login_para2">Don’t have an account? <a href="./sign_up.php">Sign up</a></p>
                    </div>
                </div>
            </div>
        </section>


        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog uppass_modal_main">
                <div class="modal-content uppass_modal_content">
                    <button type="button" data-bs-dismiss="modal" aria-label="Close" style="border: 0px; background: none;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <g clip-path="url(#clip0_11204_1312)">
                                <path d="M18.3007 5.71022C17.9107 5.32022 17.2807 5.32022 16.8907 5.71022L12.0007 10.5902L7.1107 5.70021C6.7207 5.31021 6.0907 5.31021 5.7007 5.70021C5.3107 6.09021 5.3107 6.72022 5.7007 7.11022L10.5907 12.0002L5.7007 16.8902C5.3107 17.2802 5.3107 17.9102 5.7007 18.3002C6.0907 18.6902 6.7207 18.6902 7.1107 18.3002L12.0007 13.4102L16.8907 18.3002C17.2807 18.6902 17.9107 18.6902 18.3007 18.3002C18.6907 17.9102 18.6907 17.2802 18.3007 16.8902L13.4107 12.0002L18.3007 7.11022C18.6807 6.73022 18.6807 6.09022 18.3007 5.71022Z" fill="#0F0F0F"/>
                            </g>
                            <defs>
                                <clipPath id="clip0_11204_1312">
                                <rect width="24" height="24" fill="white"/>
                                </clipPath>
                            </defs>
                        </svg>
                    </button>
                    <p class="uppass_modal_p">password updated!</p>
                    <button class="btn login_btn w-100"  onclick="window.location.href='login.php'">Sign in</button>
                </div>
            </div>
        </div>



 <?php include 'includes/footer.php'; ?>