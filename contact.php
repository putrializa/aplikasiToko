<?php
require "connect.php";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Us</title>
    <link rel="icon" href="./files/logos.png" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link
      rel="stylesheet"
      href="https://unpkg.com/boxicons@latest/css/boxicons.min.css"
    />
  </head>

  <body class="contactbody">
    <nav>
      <img
        src="./files/logos.png"
        class="logo"
        alt="Logo"
        title="FirstFlight Travels"
      />

      <ul class="navbar">
        <li>
          <a href="./index.php">Home</a>
          <a href="./index.php#locations">Locations</a>
          <a href="./index.php#package">Packages</a>
          <a href="./about.php">About Us</a>
          <a href="./contact.php">Contact Us</a>
        </li>
      </ul>
    </nav>

    <section class="contact">
      <div class="contact-form">
        <h1>Contact <span>Us</span></h1>
        <p>
          Kami selalu siap membantu Anda! Isi formulir yang diberikan di bawah
          ini dan Dapatkan balasan dari kami dalam 2 hari kerja.
        </p>
        <form action="connect.php" method="POST">
          <input type="text" name="myname" placeholder="Your Name" required />
          <input type="email" name="email" placeholder="Your E-mail" required />
          <input
            type="text"
            name="subject"
            placeholder="What brings you here?"
            required
          />
          <textarea
            name="message"
            cols="30"
            rows="10"
            placeholder="Your Message"
            required
          ></textarea>
          <div>
          <button type="submit" name="submit" class="btn btn-primary">Kirim</button> 
          </div>
        </form>
        <?php 
          if(isset($_POST['submit'])){
    $myname = htmlspecialchars($_POST['myname']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    $querySimpan = mysqli_query($con, "INSERT INTO contact (myname, email, subject, message) VALUES ('$myname', '$email', '$subject', '$message')");

    if ($querySimpan) {
?>
        <div class="alert alert-primary mt-3" role="alert">
            Data Berhasil Disimpan
        </div>
<?php
    } else {
?>
        <div class="alert alert-danger mt-3" role="alert">
            Gagal menyimpan data. <?php echo mysqli_error($con); ?>
        </div>
<?php
    }
}
        ?>
      </div>
    </section>

    <!-- Footer -->

    <section class="footer">
      <div class="foot">
        <div class="footer-content">
          <div class="footlinks">
            <h4>Quick Links</h4>
            <ul>
              <li><a href="./register.php">Register</a></li>
              <li><a href="./about.php">About Us</a></li>
              <li><a href="./contact.php">Contact Us</a></li>
            </ul>
          </div>

          <div class="footlinks">
            <h4>Connect</h4>
            <div class="social">
              <a href="" target="_blank"><i class="bx bxl-facebook"></i></a>
              <a href="" target="_blank"><i class="bx bxl-instagram"></i></a>
              <a href="" target="_blank"><i class="bx bxl-twitter"></i></a>

              <a href="" target="_blank"><i class="bx bxl-youtube"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="end">
        <p>
          <br />
        </p>
      </div>
    </section>
  </body>
</html>
