<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About Us</title>
    <link rel="icon" href="./files/logos.png" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Paytone+One&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://unpkg.com/boxicons@latest/css/boxicons.min.css"
    />
  </head>
  <body class="aboutbody">
    <nav>
      <img
        src="./files/logos.png"
        class="logo"
        alt="logo"
        title="FirstFlight Travels"
      />
      <div class="burger">
        <i class="bx bx-menu"></i>
      </div>

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

    <section class="about">
      <div class="main">
        <img src="./files/logos.png" alt="My Photo" />
        <div class="abt-text">
          <h1>About <span>Us</span></h1>
          <p>
            Dap Travels adalah proyek website perjalanan yang dikembangkan oleh
            Daffa Ardiansyah menggunakan HTML, CSS dan JavaScript. Terhubung
            dengan saya!
          </p>
          <a href="" class="connectbtn" target="_blank">Contact Me</a>

          <div class="connect-section">
            <div class="social-icons">
              <a href="" target="_blank"><i class="bx bxl-facebook"></i></a>
              <a href="" target="_blank"><i class="bx bxl-instagram"></i></a>
              <a href="" target="_blank"><i class="bx bxl-twitter"></i></a>
              <a href="" target="_blank"><i class="bx bxl-youtube"></i></a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->

    <!-- Footer -->

    <section class="footer">
      <div class="foot">
        <div class="footer-content">
          <div class="footlinks">
            <h4>Quick Links</h4>
            <ul>
              <li><a href="./register.html">Register</a></li>
              <li><a href="./about.html">About Us</a></li>
              <li><a href="./contact.html">Contact Us</a></li>
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

    <script>
      const burgerIcon = document.querySelector(".burger");
      const navLinks = document.querySelector(".navbar");

      burgerIcon.addEventListener("click", () => {
        // Periksa apakah elemen navLinks saat ini ditampilkan atau disembunyikan
        if (
          navLinks.style.display === "none" ||
          navLinks.style.display === ""
        ) {
          // Jika ditampilkan atau properti display tidak ada, maka tampilkan
          navLinks.style.display = "flex"; // Atau sesuaikan dengan tampilan yang diinginkan
        } else {
          // Jika sudah ditampilkan, maka sembunyikan
          navLinks.style.display = "none";
        }
      });
    </script>
  </body>
</html>
