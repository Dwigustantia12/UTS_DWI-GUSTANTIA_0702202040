<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Blog | Rental</title>

      <link rel="shortcut icon" href="layouts/assets/img/.ico" type="image/x-icon">
      <link rel="stylesheet" href="layouts/assets/css/style.css">
</head>

<body>

      <aside>

            <header>
                  <img src="layouts/assets/img/mobil.jpg" class="brand">
                  <div class="user">Dwi Gustantia</div>
            </header>

            <nav>
                  <ul>
                        <li>
                              <a href="index.php">
                                    <img class="icon" src="layouts/assets/img/home.jpg" alt=""> Home
                              </a>
                        </li>
                        <li>
                              <a href="index.php?hal=kar_tampil">
                                    <img class="icon" src="layouts/assets/img/icon_kar.jpg" alt=""> Karyawan
                              </a>
                        </li>
                        <li>
                              <a href="index.php?hal=sewa_tampil">
                                    <img class="icon" src="layouts/assets/img/icon_sewa.jpg" alt=""> Sewa
                              </a>
                        </li>
                        <li>
                              <a href="index.php?hal=cus_tampil">
                                    <img class="icon" src="layouts/assets/img/icon_cus.jpg" alt=""> Customer
                              </a>
                        </li>
                        <li>
                              <a href="index.php?hal=mobil_tampil">
                                    <img class="icon" src="layouts/assets/img/icon_mob.jpg" alt=""> Mobil
                              </a>
                        </li>
                        
                  </ul>
            </nav>

      </aside>

      <main>
            <article>
                  <?php

                  require_once "vendor/autoload.php";
                  require_once "inc/Koneksi.php";

                  if (isset($_GET['hal'])) {
                        require $_GET['hal'] . ".php";
                  } else {
                        require "main.php";
                  }
                  ?>
            </article>

            <footer>
                  Copyright &copy; 2023. Designed by Dwi Gustantia
            </footer>
      </main>

</body>

</html>