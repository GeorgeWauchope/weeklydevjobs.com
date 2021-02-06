<?php require "header.php"; ?>
<?php require "functions.php"; ?>

 
<div class="main-container">
      <div class="container">
        <h1>
          Are you a software engineer that wants to work for a Y Combinator
          startup?
        </h1>

        <h3>
          Enter your email below, and we will send you a list of newly available
          software engineering jobs from Y Combinator startups, once a week, for
          FREE!
        </h3>

        <p>
          We will not spam you or try to sell you anything. You can unsubscribe
          at any time.
        </p>
      </div>
    </div>

    <div class="login-container">
      <div class="login-box">
        <h2>Enter Your Details:</h2>
        <?php if (getVar ("email")) {
             echo "There was a problem with your submission.";
        }
        ?>
        <form action="subscribe.php" method="POST">
          <div class="user-box">
            <input type="text" name="firstName" required="" value="<?php echo getVar('firstName') ?>" />
            <label>First Name</label>
          </div>
          <div class="user-box">
            <input type="email" name="email" required="" value="<?php echo getVar('email') ?>" />
            <label>Email</label>
          </div>
          <div class="buttonContainer">
            <button type="submit">
              <span></span>
              <span></span>
              <span></span>
              <span></span>
              Subscribe!
            </button>
          </div>
          <!-- <a href="#">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            Subscribe!
          </a> -->
        </form>
      </div>
    </div>

    <?php require "footer.php"; ?>
    
