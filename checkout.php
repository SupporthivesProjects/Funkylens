
<?php include 'includes/header.php'; ?>
<section class="checkout_s1">
    <div class="checkout_c1 container">
        <div class="checkout_c1left">
            <h3 class="checkout_title">Checkout</h3>
            <input type="text" class="form-control checkout_textbox" id="" placeholder="First name">
            <input type="text" class="form-control checkout_textbox" id="" placeholder="Last name">
            <input type="text" class="form-control checkout_textbox" id="" placeholder="Email Address">
            <input type="text" class="form-control checkout_textbox" id="" placeholder="Address line 1">
            <input type="text" class="form-control checkout_textbox" id="" placeholder="Address line 2">
            <div class="checkout_firstlast">
                <input type="text" class="form-control checkout_textbox" id="" placeholder="Zip / Postal Code">
                <input type="text" class="form-control checkout_textbox" id="" placeholder="City / town">
            </div>
            <input type="text" class="form-control checkout_textbox" id="" placeholder="Country">
        </div>
        <div class="checkout_c1right">
            <h3 class="checkout_title">Order Summary</h3>
            <div class="checkout_midline"></div>
            <div class="checkout_productbar">
                <div class="check_poductrow">
                    <div class="check_productinner">
                        <div class="check_producttitlebar">
                            <h5 class="check_producttitle">Premium Pack (500 Credits)</h5>
                            <div class="check_producttitle cproductname_mob">
                                <div class="price_beforeafter price_beforeaftermob desktop_none">
                                    <h5 class="check_pricebefore">$500</h5>
                                    <h5 class="check_priceafter">$300</h5>
                                </div>
                                <p class="check_productpercent">-40%</p>
                            </div>
                        </div>
                        <div class="price_mob_none mobile_none">
                            <div class="price_beforeafter">
                                <h5 class="check_pricebefore">$500</h5>
                                <h5 class="check_priceafter">$300</h5>
                            </div>
                        </div>
                    </div>
                    <img src="./img/close_check.svg">
                </div>
                 <div class="check_poductrow">
                    <div class="check_productinner">
                        <div class="check_producttitlebar">
                            <h5 class="check_producttitle">Custom Order (40 Credits)</h5>
                            <div class="check_producttitle cproductname_mob">
                                <div class="price_beforeafter price_beforeaftermob desktop_none">
                                    <h5 class="check_priceafter">$40</h5>
                                </div>
                            </div>
                        </div>
                        <div class="price_mob_none mobile_none">
                            <div class="price_beforeafter">
                                <h5 class="check_priceafter">$40</h5>
                            </div>
                        </div>
                    </div>
                    <img src="./img/close_check.svg">
                </div>
            </div>
            <div class="checkout_midline"></div>
            <div class="checkout_totalbar">
                <div class="checkout_productbar" style="padding: 0px;">
                    <div class="check_productinner">
                        <h5 class="check_producttitle">Sub total</h5>
                        <h5 class="check_priceafter">$340</h5>
                    </div>
                    <div class="check_productinner">
                        <h5 class="saving_green">Gold tier Account saving @ 12%</h5>
                        <h5 class="saving_green">$40</h5>
                    </div>
                </div>
                <div class="check_productinner">
                    <h5 class="check_productotal">Total</h5>
                    <h5 class="check_productotal">$300</h5>
                </div>
            </div>
            <div class="checkout_midline"></div>
            <div class="promo_captchabar">
                <div class="checkout_checkboxbar">
                    <div class="c-checkboxR checkbox_mainmob">
                        <div class="c-divR">
                            <label class="d-flex justify-content-center justify-content-lg-start">
                                <input type="checkbox" id="terms" name="terms">
                                <label for="terms"></label>
                            </label>
                        </div>
                        <div class="c-textR">
                            <span class="login_strongR">I have read and agree to&nbsp;the&nbsp;<a href=""
                                    class="checkbox_link">Terms&nbsp;of&nbsp;Use</a>.
                            </span>
                        </div>
                    </div>
                </div>
                <input type="text" class="form-control checkout_textbox" id="" placeholder="type your promo code here">
                <button type="button" class="btn checkout_btn">Continue to payment</button>
                <img class="mastercard_img" src="./img/mastercard.png">
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>