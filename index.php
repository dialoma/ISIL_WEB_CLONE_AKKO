<?php 
  try {
    $mbd = new PDO('mysql:host=localhost;dbname=akko.db', 'root', '');
  } catch (PDOException $e) {
    echo "Error: " . $e->getMessage() . "<br/>";
    die();
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Parcial</title>
    <link rel="stylesheet" href="./css/styles.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    />
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
      <div class="container-lg">
        <a href="index.php"><img class="logo-nav" src="img/akko-logo.svg" alt="" /></a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Products
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><hr class="dropdown-divider" /></li>
                <li>
                  <a class="dropdown-item" href="#">Something else here</a>
                </li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Support
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><hr class="dropdown-divider" /></li>
                <li>
                  <a class="dropdown-item" href="#">Something else here</a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Our Story</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="registro.php">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Deals</a>
            </li>
          </ul>
          <form class="d-flex" role="search">
            <input
              class="form-control me-2"
              type="search"
              placeholder="Search"
              aria-label="Search"
            />
            <button
              class="btn btn-outline-success bypass-color-nav"
              type="submit"
            >
              Search
            </button>
          </form>
        </div>
      </div>
    </nav>

    <!-- Carousel -->
    <div
      id="carouselExampleIndicators"
      class="carousel slide"
      data-bs-ride="carousel"
    >
      <div class="carousel-indicators">
        <button
          type="button"
          data-bs-target="#carouselExampleIndicators"
          data-bs-slide-to="0"
          class="active"
          aria-current="true"
          aria-label="Slide 1"
        ></button>
        <button
          type="button"
          data-bs-target="#carouselExampleIndicators"
          data-bs-slide-to="1"
          aria-label="Slide 2"
        ></button>
        <button
          type="button"
          data-bs-target="#carouselExampleIndicators"
          data-bs-slide-to="2"
          aria-label="Slide 3"
        ></button>
      </div>
      <div class="carousel-inner" id="carousel-alert">
        <div class="carousel-item active">
          <img src="img/carousel1.jpg" class="d-block w-100" alt="..." />
        </div>
        <div class="carousel-item">
          <img src="img/carousel2.jpg" class="d-block w-100" alt="..." />
        </div>
        <div class="carousel-item">
          <img src="img/carousel3.jpg" class="d-block w-100" alt="..." />
        </div>
      </div>
      <button
        class="carousel-control-prev"
        type="button"
        data-bs-target="#carouselExampleIndicators"
        data-bs-slide="prev"
      >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button
        class="carousel-control-next"
        type="button"
        data-bs-target="#carouselExampleIndicators"
        data-bs-slide="next"
      >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <!-- Contenedor medio -->
    <h2 class="text-center pt-3">Find the Right Keyboard for You</h2>
    <div class="container-lg p-4">
      <!-- 1er ROW-->
      <div class="row">
        <!-- Tarjetas -->
        <div class="col-12 col-md-6">
          <div class="card">
            <img src="img/img1.jpg" class="card-img-top" alt="..." />
            <div class="card-body">
              <a href="#" class="btn btn-primary d-block bypass-color btntmn"
                >Keyboard></a
              >
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6">
          <div class="card">
            <img src="img/img2.jpg" class="card-img-top" alt="..." />
            <div class="card-body">
              <a href="#" class="btn btn-primary d-block bypass-color btntmn"
                >Barebone Kit></a
              >
            </div>
          </div>
        </div>
      </div>

      <!-- 2do ROW-->
      <div class="row p-4">
        <!-- Tarjetas -->
        <div class="col-4">
          <div class="card">
            <img src="img/img3.jpg" class="card-img-top" alt="..." />
            <div class="card-body">
              <a href="#" class="btn btn-primary d-block bypass-color btntmn"
                >Key Switches></a
              >
            </div>
          </div>
        </div>

        <div class="col-4">
          <div class="card">
            <img src="img/img4.jpg" class="card-img-top" alt="..." />
            <div class="card-body">
              <a href="#" class="btn btn-primary d-block bypass-color btntmn"
                >Keycaps></a
              >
            </div>
          </div>
        </div>

        <div class="col-4">
          <div class="card">
            <img src="img/img5.jpg" class="card-img-top" alt="..." />
            <div class="card-body">
              <a href="#" class="btn btn-primary d-block bypass-color btntmn"
                >Mouse></a
              >
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Galeria-->
    <h2 class="text-center">Best Selling Products/Top Selling</h2>
    <ul class="row text-center" id="galeria"></ul>

    <!-- FETCH API EP 2 SOLICITUD-->
    <h2 class="text-center pt-3">Our Clients</h2>
    <section class="container-lg pt-5 pb-5">
      <!-- 1ER ROW-->
      <div
        class="row justify-content-center text-center"
        id="row1--fetch"
      ></div>
    </section>

    <!-- Footer -->
    <footer class="text-center text-lg-start footer-color pt-2">
      <section class="">
        <div class="container text-center text-md-start mt-5">
          <!-- Iconos -->
          <div class="row mt-3">
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
              <img class="pb-3" src="img/white-logo-footer.svg" alt="" />
              <p>
                <i class="fas fa-envelope me-3"></i>
                support@akkogear.com
              </p>
              <p><i class="fas fa-home me-3"></i> Hours: 9:30am-6:00pm UTC+8</p>
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="32"
                height="32"
                fill="currentColor"
                class="bi bi-facebook pl-4"
                viewBox="0 0 16 16"
              >
                <path
                  d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"
                />
              </svg>
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="32"
                height="32"
                fill="currentColor"
                class="bi bi-discord pl-4"
                viewBox="0 0 16 16"
              >
                <path
                  d="M13.545 2.907a13.2 13.2 0 0 0-3.257-1.011.05.05 0 0 0-.052.025c-.141.25-.297.577-.406.833a12.2 12.2 0 0 0-3.658 0 8 8 0 0 0-.412-.833.05.05 0 0 0-.052-.025c-1.125.194-2.22.534-3.257 1.011a.04.04 0 0 0-.021.018C.356 6.024-.213 9.047.066 12.032q.003.022.021.037a13.3 13.3 0 0 0 3.995 2.02.05.05 0 0 0 .056-.019q.463-.63.818-1.329a.05.05 0 0 0-.01-.059l-.018-.011a9 9 0 0 1-1.248-.595.05.05 0 0 1-.02-.066l.015-.019q.127-.095.248-.195a.05.05 0 0 1 .051-.007c2.619 1.196 5.454 1.196 8.041 0a.05.05 0 0 1 .053.007q.121.1.248.195a.05.05 0 0 1-.004.085 8 8 0 0 1-1.249.594.05.05 0 0 0-.03.03.05.05 0 0 0 .003.041c.24.465.515.909.817 1.329a.05.05 0 0 0 .056.019 13.2 13.2 0 0 0 4.001-2.02.05.05 0 0 0 .021-.037c.334-3.451-.559-6.449-2.366-9.106a.03.03 0 0 0-.02-.019m-8.198 7.307c-.789 0-1.438-.724-1.438-1.612s.637-1.613 1.438-1.613c.807 0 1.45.73 1.438 1.613 0 .888-.637 1.612-1.438 1.612m5.316 0c-.788 0-1.438-.724-1.438-1.612s.637-1.613 1.438-1.613c.807 0 1.451.73 1.438 1.613 0 .888-.631 1.612-1.438 1.612"
                />
              </svg>
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="32"
                height="32"
                fill="currentColor"
                class="bi bi-twitter-x pl-4"
                viewBox="0 0 16 16"
              >
                <path
                  d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z"
                />
              </svg>
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="32"
                height="32"
                fill="currentColor"
                class="bi bi-youtube pl-4"
                viewBox="0 0 16 16"
              >
                <path
                  d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.01 2.01 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.01 2.01 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31 31 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.01 2.01 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A100 100 0 0 1 7.858 2zM6.4 5.209v4.818l4.157-2.408z"
                />
              </svg>
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="32"
                height="32"
                fill="currentColor"
                class="bi bi-tiktok pl-4"
                viewBox="0 0 16 16"
              >
                <path
                  d="M9 0h1.98c.144.715.54 1.617 1.235 2.512C12.895 3.389 13.797 4 15 4v2c-1.753 0-3.07-.814-4-1.829V11a5 5 0 1 1-5-5v2a3 3 0 1 0 3 3z"
                />
              </svg>
            </div>
            <!-- Products -->
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
              <h6 class="text-uppercase fw-bold mb-4 bottom-linea pb-2">
                Products
              </h6>
              <p>
                <a href="#!" class="text-reset">Keyboard</a>
              </p>
              <p>
                <a href="#!" class="text-reset">Keycaps</a>
              </p>
              <p>
                <a href="#!" class="text-reset">Mouse</a>
              </p>
              <p>
                <a href="#!" class="text-reset">Switch</a>
              </p>
              <p>
                <a href="#!" class="text-reset">DIY Kit</a>
              </p>
            </div>
            <!--Communication -->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
              <h6 class="text-uppercase fw-bold mb-4 bottom-linea pb-2">
                Communication
              </h6>
              <p>
                <a href="registro.php" class="text-reset">Contact Us</a>
              </p>
              <p>
                <a href="#!" class="text-reset">Partner</a>
              </p>
              <p>
                <a href="#!" class="text-reset">Press Release</a>
              </p>
            </div>
            <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
              <!-- Newsletter-->
              <h6 class="text-uppercase fw-bold mb-4 bottom-linea pb-2">
                <i class="fas fa-gem me-3"></i>SIGN-UP NEWSLETTER
              </h6>
              <p>Subscribe to get news & promotions.</p>
              <div class="input-group">
                <div class="input-group-text bypass-color" id="btnGroupAddon">
                  Submit
                </div>
                <input
                  type="text"
                  class="form-control form-bc"
                  placeholder="Enter email address"
                  aria-label="Enter email address"
                  aria-describedby="btnGroupAddon"
                />
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Copyright -->
      <div class="text-center p-4 footer-linea">
        © 2024 Copyright:
        <a class="text-reset fw-bold" href="https://en.akkogear.com/"
          >Akko All Rights Reserved
        </a>
      </div>
    </footer>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
    <script src="./js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  </body>
</html>
