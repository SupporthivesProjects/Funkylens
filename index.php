<?php include 'includes/header.php'; ?>
<style>
    header{
        background: transparent;
    }
</style>
<!-- Section 1 Start -->
 <section class="home_s1">

 </section>
<!-- Section 1 End -->

<!-- Section 2 Start -->
 <section></section>
<!-- Section 2 End -->

<!-- Section 3 Start -->
 <section class="home_s3">
    <div class="home_s3left">
        <div class="home_s3titlebar">
            <h2 class="home_s3title">Flexible Pricing Plans</h2>
            <p class="home_s3subtitle">Choose from our range of affordable pricing plans designed to meet your needs. Whether you're a freelancer, a small business, or a large enterprise, ImageVault has the perfect plan for you. Get access to high-quality stock images at competitive rates</p>
        </div>
        <button type="button" class="btn yellow_btnprice">View More FAQs</button>
    </div>
    <img class="home_s3img" src="./img/home_s3img.png">
 </section>
<!-- Section 3 End -->

<!-- Section 4 Start -->
 <section class="home_s4">
    <div class="home_c4 container">
        <div class="home_s4titlebar">
            <h2 class="home_s4title">Frequently asked questions</h2>
            <p class="home_s4subtitle">Everything you need to know about the product and billing.<br> Can’t find the answer you’re looking for? Please chat to our friendly team.</p>
        </div>
        <div class="home_s4faqouter">
            <div class="faq_main">
                <!-- LEFT SIDE -->
                <div class="faq_column">
                    <div class="faq_item active">
                        <button class="faq_question">
                            <span>How Do I Purchase Images On Funky Lens?</span>
                            <div class="faq_icon">
                                <img class="plus" src="./img/faq_plus.svg" alt="">
                                <img class="minus" src="./img/faq_minus.svg" alt="">
                            </div>
                        </button>
                        <div class="faq_answer">
                            <p>You can purchase images using credits or through a subscription plan. Credits allow you to download files as needed, while subscriptions provide a set number of downloads per month. Visit our pricing page for more details.</p>
                        </div>
                    </div>

                    <div class="faq_item">
                        <button class="faq_question">
                            <span>What Types Of Licenses Are Available?</span>
                            <div class="faq_icon">
                                <img class="plus" src="./img/faq_plus.svg" alt="">
                                <img class="minus" src="./img/faq_minus.svg" alt="">
                            </div>
                        </button>
                        <div class="faq_answer">
                            <p>You can purchase images using credits or through a subscription plan. Credits allow you to download files as needed, while subscriptions provide a set number of downloads per month. Visit our pricing page for more details.</p>
                        </div>
                    </div>

                    <div class="faq_item">
                        <button class="faq_question">
                            <span>How Do I Download My Purchased Images?</span>
                            <div class="faq_icon">
                                <img class="plus" src="./img/faq_plus.svg" alt="">
                                <img class="minus" src="./img/faq_minus.svg" alt="">
                            </div>
                        </button>
                        <div class="faq_answer">
                            <p>You can purchase images using credits or through a subscription plan. Credits allow you to download files as needed, while subscriptions provide a set number of downloads per month. Visit our pricing page for more details.</p>
                        </div>
                    </div>
                </div>

                <!-- RIGHT SIDE -->
                <div class="faq_column">
                    <div class="faq_item">
                        <button class="faq_question">
                            <span>How Can I Update My Account Information?</span>
                            <div class="faq_icon">
                                <img class="plus" src="./img/faq_plus.svg" alt="">
                                <img class="minus" src="./img/faq_minus.svg" alt="">
                            </div>
                        </button>
                        <div class="faq_answer">
                            <p>You can purchase images using credits or through a subscription plan. Credits allow you to download files as needed, while subscriptions provide a set number of downloads per month. Visit our pricing page for more details.</p>
                        </div>
                    </div>

                    <div class="faq_item">
                        <button class="faq_question">
                            <span>What Should I Do If I Forget My Password?</span>
                            <div class="faq_icon">
                                <img class="plus" src="./img/faq_plus.svg" alt="">
                                <img class="minus" src="./img/faq_minus.svg" alt="">
                            </div>
                        </button>
                        <div class="faq_answer">
                            <p>You can purchase images using credits or through a subscription plan. Credits allow you to download files as needed, while subscriptions provide a set number of downloads per month. Visit our pricing page for more details.</p>
                        </div>
                    </div>

                    <div class="faq_item">
                        <button class="faq_question">
                            <span>Can I Get A Refund For My Purchase?</span>

                            <div class="faq_icon">
                                <img class="plus" src="./img/faq_plus.svg" alt="">
                                <img class="minus" src="./img/faq_minus.svg" alt="">
                            </div>
                        </button>
                        <div class="faq_answer">
                            <p>You can purchase images using credits or through a subscription plan. Credits allow you to download files as needed, while subscriptions provide a set number of downloads per month. Visit our pricing page for more details.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="home_s4question">
            <p class="home_s4questiontitle">Still have questions?</p>
            <button type="button" class="btn yellow_btnprice">View More FAQs</button>
        </div>
    </div>
 </section>
<!-- Section 4 End -->

<!-- Section 5 Start -->
 <section class="home_s5">
    <div class="home_c5">
        <h2 class="home_s5title">Our Story</h2>
        <div class="home_s5subtitlebar">
            <p class="home_s5subtitle">We are dedicated to providing high-quality, royalty-free stock images to elevate your creative projects. Our extensive library is curated by a community of talented contributors, ensuring a diverse selection of visuals for any need. We prioritize ease of use, affordability, and exceptional customer service, making ImageVault your trusted partner in visual content. Join us in transforming ideas into impactful visuals.</p>
            <button type="button" class="btn yellow_btnprice">Read More</button>
        </div>
    </div>
 </section>
<!-- Section 5 End -->
<?php include 'includes/footer.php'; ?>
<script>
    const faqItems = document.querySelectorAll(".faq_item");

    faqItems.forEach(item => {

        const button = item.querySelector(".faq_question");

        button.addEventListener("click", () => {

            // close all
            faqItems.forEach(faq => {
                faq.classList.remove("active");
            });

            // open current
            item.classList.add("active");

        });

    });
</script>