<?php include 'includes/header.php'; ?>

    <section style="padding: 0%;">
      <div class="login_outer">
        <div class="login_main">
          <div class="login_div1">
            <h3 class="login_head">Sign into your account</h3>
            <p class="login_para">Welcome back! Please enter your details.</p>
          </div>
          <div class="login_div2">
            <div class="login_div2_inn">
              <input type="email" class="login_input" placeholder="Enter your email">
              <input type="password" class="login_input" placeholder="Password">
            </div>
            <button class="btn login_btn">Sign in</button>
            <a href="./password_update.php" class="login_a">Forgot password</a>
          </div>
          <div class="login_div3">
            <p class="login_para2">Don’t have an account? <a href="./sign_up.php">Sign up</a></p>
          </div>
        </div>
      </div>
    </section>



  <?php include 'includes/footer.php'; ?>