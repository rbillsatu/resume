<?php include 'inc/header.php'; ?>

<!-- CSS from bootstrap: -->
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> -->
    


<?php 
  $name = $email= $phone = $body = '';
  $nameErr = $emailErr = $phoneErr = $bodyErr = '';
  $sent = false;
  // FORM SUBMIT
  if(isset($_POST['submit'])){
    //validate name

    

    if(empty($_POST['name'])){
      $nameErr = '*Name is required';
    }
    else{
      $name = filter_input(INPUT_POST, 'name',
      FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }
    if(empty($_POST['email'])){
      $emailErr = '*Email is required';
    }
    else{
      $email = filter_input(INPUT_POST, 'email',
      FILTER_SANITIZE_EMAIL);
    }

    if(empty($_POST['phone'])){
        $phoneErr = "*Phone number is required";
    }
    else{
        $phone = filter_input(INPUT_POST, 'phone',
        FILTER_SANITIZE_NUMBER_INT);
    }

    if(empty($_POST['body'])){
      $bodyErr = '*Message is required';
    }
    else{
      $body = filter_input(INPUT_POST, 'body',
      FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }
    // if($sent === true){
      
    // }
    // else{
      
    // }
  

    if(empty($nameErr) && empty($emailErr) && empty($phoneErr) && empty($bodyErr)){
      // Add to db if no error:
        $sql = "INSERT INTO inquire(name, email, phone, body)
        VALUES ('$name', '$email', '$phone', '$body')";

        if(mysqli_query($conn, $sql)){
          // document.getElementById('thanks').innerHTML()=
          // echo 'Thank you ' && $name;
          { $sent = true; }
          
          // Forwarding to Thank You page:
          // header('Location: thankyou.php');
          // echo 'Success';
        } else {
          // Error
          echo 'Error: ' .mysqli_error($conn);
        }
    }
  }
?>

<div class="contact-page">

    <div>
        <h1>Contact Ryan:</h1>
        <img src="assets/profile-pic.jpg" alt="Oops! Image did not load!" class="pic" height="325px">
    </div>
    <div class="contact-form">
        <br /><br />
        <h3>Enter your:</h3>
        <form onsubmit="getApod()" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="POST" class="contact-form">
            <div class="contact-section">
                <label for="name" class="form-label">*Name:</label><br />
                <input type="text" class="contact-entry" <?php echo $nameErr? 'is-invalid' : null ?> id="name" name="name" placeholder="Enter your name">
                <span class="invalid-entry">
                    <em class="invalid-entry"><?php echo $nameErr; ?></em>
                </span>
            </div>
            <div class="contact-section">
                <label for="email" class="form-label">*Email:</label><br />
                <input type="email" class="contact-entry" <?php echo $emailErr? 'is-invalid' : null ?> id="email" name="email" placeholder="Enter your email">
                <span class="invalid-entry">
                    <em><?php echo $emailErr; ?></em>
                </span>
            </div>
            <div class="contact-section">
                <label for="phone" class="form-label">*Phone:</label><br />
                <input type="phone" class="contact-entry" <?php echo $phoneErr? 'is-invalid' : null ?> id="phone" name="phone" placeholder="Enter your phone number">
                <span class="invalid-entry">
                    <em><?php echo $phoneErr; ?></em>
                </span>
            </div>
            <div class="contact-section">
                <label for="body" class="form-label">*Message:</label><br />
                <textarea class="contact-message" <?php echo $bodyErr? 'is-invalid' : null ?> id="body" name="body" placeholder="Enter a message"></textarea>
                <span class="invalid-entry">
                    <em><?php echo $bodyErr; ?></em>
                </span>
            </div>
            <br />
            <div class="contact-entry">
                <button id="contact" type="submit" name="submit" value="Send to Ryan" class="contact-btn">Send to Ryan</button>
            </div>
        </form>
    </div>
    
</div>

<?php if($sent) { ?> 
      <div class="apod">
        <div class="apod-contents" style="max-width:400px;">
        <br /><br /><br />
          <h3>Thank you <?php echo $name;?> for your message.</h3> 
          <p>I will email you at <?php echo $email;?> shortly!</p><br/>
          <p>In the meantime, please enjoy the <br/><br/><em><h2>Astronomy Picture of the Day</h2></em>
          provided by <img src="assets/nasa.svg" style="height: 50px; transform:translateY(20px)"></p>
        </div>
        <div class="apod-contents" style="max-width:700px;">
          <div id="apod" ></div>
          <script>getApod()</script>
        </div>
      </div>
    <?php } ?>
    

<br /><br /><br /><br /><br /><br />
<?php include 'inc/footer.php'; ?>