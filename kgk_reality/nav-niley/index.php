<?php
ob_start();
if(isset($_POST['quiryname'])){ 
   $server = "localhost";
   $username = "root";
   $password = "";

   $con = mysqli_connect($server, $username, $password);

   if(!$con){
       die("connection failed");
   }
   //echo "successfully connected";
   $name = $_POST['quiryname'];
   $email = $_POST['quiryemail'];
   $phone = $_POST['quiryphone'];
   $sql = "INSERT INTO `kgk_reality`.`navnilayquiry` (`quiryname`, `quiryemail`, `quiryphone`) VALUES ('$name', '$email', '$phone')";
   

   if($con->query($sql) == true){
    header("Location: http://localhost/kgk_reality/nav-niley/thanku.php");
     exit();
}
else{
    echo "error: $sql <br> $con->error";
}
$con->close();
}
   if(isset($_POST['visitname'])){
    $server = "localhost";
    $username = "root";
    $password = "";
 
    $con = mysqli_connect($server, $username, $password);
 
    if(!$con){
        die("connection failed");
    }
    //echo "successfully connected";
    $name = $_POST['visitname'];
    $email = $_POST['visitemail'];
    $phone = $_POST['visitphone'];
    $sql = "INSERT INTO `kgk_reality`.`navnilayvisit` (`visitname`, `visitemail`, `visitphone`) VALUES ('$name', '$email', '$phone')";
        
    if($con->query($sql) == true){
        header("Location: http://localhost/kgk_reality/nav-niley/thanku.php");
        exit();
    }
    else{
        echo "error: $sql <br> $con->error";
    }
    $con->close();
   }
   ob_end_flush();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="A home is a place filled with memories where you embrace emotions of life. Nav Nilay is an opportunity to begin your story in a home that is built around your happiness and aspirations. Contact now for more information related to Affordable Flats in Jaipur, JDA Approved Flats in Jaipur">
    <title>Navnilay - 2 BHK Apartments in Jaipur| Affordable Flats in Jaipur | JDA Approved Flats in Jaipur</title>
    <link rel="stylesheet" href="stylesheet.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
      integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
      crossorigin="anonymous"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6"
      crossorigin="anonymous"
    />
    <link
      href="//db.onlinewebfonts.com/c/c9f309b3d47969ecac64a77a6c672594?family=Nexa+Bold"
      rel="stylesheet"
      type="text/css"
    />
  </head>

  <body>
    <div class="enquiry-now">
      <a href="tel:0141 2720557"
        ><i class="fas fa-phone-alt" style="padding: 0 10px"></i>Call Us</a
      >
      <span onclick="showFormMobile()">Enquiry Now</span>
    </div>
    <div class="overlay hide-Enquery-Form" onclick="backDropclick()"></div>
    <div class="Enquery-Form hide-Enquery-Form">
      <h4>Enquiry Now</h4>
      <form action="index.php" method="POST">
        <div>
          <input
            type="text"
            name="quiryname"
            id="queryName"
            placeholder="Full Name"
            required
            maxlength="25"
          />
        </div>
        <div>
          <input
            type="tel"
            name="quiryphone"
            id="queryTel"
            placeholder="Mobile Number"
            required
            maxlength="12"
          />
        </div>
        <div>
          <input
            type="email"
            name="quiryemail"
            id="queryEmail"
            placeholder="E-mail"
          />
        </div>
        <div>
          <button type="Sumbit" name="quiryButton">Submit</button>
        </div>
      </form>
    </div>
    <header id="header">
      <nav>
        <div class="navbar">
          <a href=""
            ><img src="images/logo.png" alt="KGK Realty" width="50px"
          /></a>
          <ul class="navigation">
            <li><a href="#overview">OverView</a></li>
            <li><a href="#location_excellence">LOCATION</a></li>
          </ul>
        </div>
      </nav>
    </header>
    <div class="blank forGap">
      <div class="slide-show">
        <div
          id="carouselExampleControls"
          class="carousel slide"
          data-bs-ride="carousel"
        >
          <div class="enquiry-desktop" onclick="showFormMobile()">
            <span>Enquiry Now</span>
          </div>
          <div class="carousel-inner forEnquery">
            <div class="carousel-item active">
              <img src="images/banner2.png" class="d-block w-100" alt="..." />
            </div>
            <div class="carousel-item">
              <img src="images/banner1.png" class="d-block w-100" alt="..." />
            </div>
          </div>
          <button
            class="carousel-control-prev"
            type="button"
            data-bs-target="#carouselExampleControls"
            data-bs-slide="prev"
          >
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button
            class="carousel-control-next"
            type="button"
            data-bs-target="#carouselExampleControls"
            data-bs-slide="next"
          >
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
        <div class="slide-bottom">
          <b>RERA Number : RAJ/P/2019/966</b>
          <b class="infinity-homes">
            Nav Nilay, Solitaire Park, Near Bagru, Ajmer Road ( 1 BHK & 2 BHK )
          </b>
        </div>
      </div>
    </div>

    <div style="background-color: #fff; margin-top: 20px">
      <section class="facilities">
        <div class="container">
          <hr />
          <div class="mb-4">
            <h2 class="color-brick text-center heading">
              Offering Value In Every Dimension
            </h2>
          </div>
          <div class="row">
            <div class="col-md-3 col-6 text-center">
              <img src="images/bw/convience-shop.png" alt="" width="15%" />
              <h4 class="icon-points">Convience Shop</h4>
            </div>
            <div class="col-md-3 col-6 text-center">
              <img src="images/bw/eco-friendly.png" alt="" width="15%" />
              <h4 class="icon-points">Eco-Friendly Premises</h4>
            </div>
            <div class="col-md-3 col-6 text-center">
              <img src="images/bw/game.png" alt="" width="15%" />
              <h4 class="icon-points">Kids Corner</h4>
            </div>
            <div class="col-md-3 col-6 text-center">
              <img src="images/bw/Multipurpose-Hall.png" alt="" width="15%" />
              <h4 class="icon-points">Multipurpose Hall</h4>
            </div>
            <div class="col-md-3 col-6 text-center">
              <img src="images/bw/parking.png" alt="" width="15%" />
              <h4 class="icon-points">
                Gated Secured Campus With Ample Parking
              </h4>
            </div>
            <div class="col-md-3 col-6 text-center">
              <img src="images/bw/power-backup.png" alt="" width="15%" />
              <h4 class="icon-points">Power Backup For Common Areas</h4>
            </div>
            <div class="col-md-3 col-6 text-center">
              <img src="images/bw/walking.png" alt="" width="15%" />
              <h4 class="icon-points">Landscaped Garden With Walkways</h4>
            </div>
            <div class="col-md-3 col-6 text-center">
              <img
                src="images/bw/Well-ventilated-apartments.png"
                width="15%"
                alt=""
              />
              <h4 class="icon-points">Well Ventilated Apartments</h4>
            </div>
          </div>
          <hr />
        </div>
      </section>
      <div>
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <iframe
                width="100%"
                height="400px"
                src="https://www.youtube.com/embed/q5XgNfmftKU"
                title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen
              ></iframe>
            </div>
            <div class="col-md-6 row" id="overview">
              <div>
                <div>
                  <h2 class="heading">Overview</h2>
                </div>
                <div>
                  <p class="mt-2" style="text-align: justify; font-size: 1rem">
                    The elegant and thoughtfully planned architecture of
                    Nav-Nilay perfectly fits the bill with quality
                    specifications and lifestyle amenities. It gives you
                    world-class experience right amidst the most developing
                    residential hub, offering apartments in variants of 1 and 2
                    BHK dimensions.
                  </p>
                  <ul>
                    <li>Loan facility available from all leading banks</li>
                    <li>Nearby educational & industrial institutions</li>
                    <li>
                      Fully ventilated apartments with an abundance of light
                    </li>
                    <li>Community hall facility</li>
                    <li>Power backup in common areas</li>
                    <li>Kids play area & recreational zone</li>
                    <li>Ample parking space</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div style="height: 10px"></div>
      </div>

      <section class="query-form">
        <div class="container">
          <div style="padding: 37px 0">
            <h2 class="text-center heading" style="padding-bottom: 25px">
              Book A Site Visit
            </h2>
            <div>
              <form action="index.php" method="POST" class="form">
                <input
                  type="text"
                  required
                  name="visitname"
                  placeholder="Your Name"
                  maxlength="25"
                />
                <input
                  type="tel"
                  required
                  name="visitphone"
                  placeholder="Mobile Number"
                  maxlength="12"
                />
                <input type="email" placeholder="Email" name="visitemail" />
                <button type="submit">SUBMIT</button>
              </form>
            </div>
          </div>
        </div>
      </section>

      <section class="floor_plan hide" style="width: 100%; padding: 20px 0">
        <div class="container">
          <div class="inner_container w3-card-4">
            <div class="w3-row p">
              <div class="w3-col l12">
                <div class="content_box row justify-content-around">
                  <div class="img_box layout-box col-md-5 col-12">
                    <img src="images/map1.jpg" class="w-100" alt="..." />
                    <div
                      class="text-center text-light mt-1 pt-2 pb-2"
                      style="background-color: #dc563d"
                    >
                      1 BHk Floor Plan :- 405 sq. ft
                    </div>
                  </div>
                  <div class="img_box layout-box col-md-5 col-12">
                    <img src="images/map3.png" class="w-100" alt="..." />
                    <div
                      class="text-center text-light mt-1 pt-2 pb-2"
                      style="background-color: #dc563d"
                    >
                      2 BHk Floor Plan :- 635 sq. ft
                    </div>
                  </div>
                  <div class="layout-display-img hide-Enquery-Form">
                    <img src="images/map1.jpg" class="w-100 h-100" alt="..." />
                  </div>
                  <div class="layout-display-img hide-Enquery-Form">
                    <img src="images/map3.png" class="w-100 h-100" alt="..." />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="location_excellence" id="location_excellence">
        <div class="container">
          <div class="inner_container">
            <div class="row p">
              <div class="col-md-6">
                <h2 class="heading">Location Excellence</h2>
                <div class="text_box">
                  <p>
                    Conveniently located on the hot spot of the future, it
                    combines the elements of comfort and conveniences by being
                    close to all key infrastructures including
                    transport/commuting facilities, schools, hospitals,
                    commercial centres, entertainment zones, and more.
                  </p>

                  <ul style="display: block; list-style: disc">
                    <li>RIICO Industrial Area :- 15 km</li>
                    <li>Manipal University :- 5.8 km</li>
                    <li>Balaji Soni Hospital :- 6 km</li>
                    <li>Delhi Public School:- 14 km</li>
                    <li>200ft by pass :- 20 km</li>
                    <li>Airport :-20 km</li>
                    <li>Ajmeri gate :- 31.1 km</li>
                  </ul>
                </div>
              </div>
              <div class="col-md-6">
                <div
                  class="l_e_carousel_wrap"
                  style="overflow: hidden; height: 440px"
                >
                  <div class="img_box" style="height: 90%">
                  <iframe
                      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3560.5715336679896!2d75.568518915043!3d26.821768283166882!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396c49c412fcabb7%3A0x8f2639c6b017ebdf!2sNav%20Nilay%20-%20KGK%20Realty!5e0!3m2!1sen!2sin!4v1607924019240!5m2!1sen!2sin"
                      width="100%"
                      height="100%"
                      frameborder="0"
                      style="border: 0"
                      allowfullscreen=""
                      aria-hidden="false"
                      tabindex="0"
                    ></iframe>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="siteupdate">
        <div class="container">
          <div class="w3-center">
            <h2 class="border_u_d heading">Project Status</h2>
          </div>
          <div class="card p-3 site-update-static">
            <div class="row">
              <div class="col-md-3 site-update site-update-img">
                <img src="images/ps1.png" class="w-100" alt="" />
              </div>
              <div class="col-md-3 site-update-img">
                <img src="images/ps2.png" alt="" class="w-100" />
              </div>
              <div class="col-md-3 site-update-img">
                <img src="images/ps3.png" alt="" class="w-100" />
              </div>
              <div class="col-md-3 site-update-img">
                <img src="images/ps4.png" alt="" class="w-100" />
              </div>
            </div>
          </div>
          <div
            id="siteupdate"
            class="carousel slide siteupdate-slider pb-3"
            data-bs-ride="carousel"
          >
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="images/ps1.png" class="d-block w-100" alt="..." />
              </div>
              <div class="carousel-item">
                <img src="images/ps2.png" class="d-block w-100" alt="..." />
              </div>
              <div class="carousel-item">
                <img src="images/ps3.png" class="d-block w-100" alt="..." />
              </div>
              <div class="carousel-item">
                <img src="images/ps4.png" class="d-block w-100" alt="..." />
              </div>
            </div>
            <button
              class="carousel-control-prev"
              type="button"
              data-bs-target="#siteupdate"
              data-bs-slide="prev"
            >
              <span
                class="carousel-control-prev-icon"
                aria-hidden="true"
              ></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button
              class="carousel-control-next"
              type="button"
              data-bs-target="#siteupdate"
              data-bs-slide="next"
            >
              <span
                class="carousel-control-next-icon"
                aria-hidden="true"
              ></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
      </section>
    </div>
    <footer class="footer pt-5 ps-5 pe-5 pb-0">
      <div class="container">
        <div>
          <div>
            <img src="images/logo white.png" height="100px" alt="kgk logo" />
          </div>
        </div>
        <hr style="border: 1px solid #eee" />
        <div>
          <div class="row justify-content-between">
            <div class="col-md-4">
              <p class="address-heading">
                <b class="text-white">JAIPUR</b>
              </p>
              <p style="margin-top: 0" class="text-white">
                Near Entertainment Paradise,<br />
                Jawahar Circle, JLN Marg, Jaipur - 302017
              </p>
              <p style="margin-top: 0" class="text-white">
                <a
                  href="tel:+91 141 2720557"
                  class="text-white text-decoration-none"
                  ><i class="fa fa-phone" aria-hidden="true"></i>
                  0141-2720557</a
                >
                <br />
                <a
                  href="tel:+91 141 2720886"
                  class="text-white text-decoration-none"
                  ><i class="fa fa-mobile" aria-hidden="true"></i>+91 8302100200</a
                >
                <br />
                <a
                  href="mailto:sales@kgkrealty.com "
                  class="text-white text-decoration-none"
                  ><i class="fa fa-envelope" aria-hidden="true"></i>
                  sales@kgkrealty.com
                </a>
              </p>
            </div>
            <div class="col-md-4">
              <div class="hidedesk">
                <p class="text-white">Follow us on</p>
                <div class="social_links">
                  <a
                    href="https://www.facebook.com/kgkrealty/"
                    class="text-white text-decoration-none me-1 ms-1"
                    ><i class="fab fa-facebook fa-2x"></i
                  ></a>
                  <a
                    href="https://www.instagram.com/kgk_realty/?hl=en"
                    class="text-white text-decoration-none me-1 ms-1"
                    ><i class="fab fa-instagram fa-2x"></i
                  ></a>
                  <a
                    href="https://in.linkedin.com/company/kgk-realty"
                    class="text-white text-decoration-none me-1 ms-1"
                    ><i class="fab fa-linkedin fa-2x"></i
                  ></a>
                </div>
                <p></p>
              </div>
            </div>
            <div class="col-md-4">
              <a
                href="https://www.kgkrealty.com/privacy-policy/"
                class="text-white text-decoration-none"
                >Privacy Policy &amp; Disclaimer</a
              >
            </div>
          </div>
        </div>
        <div class="copyright">
          <p>© 2021 KGK Realty. All rights reserved.</p>
        </div>
      </div>
    </footer>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
      crossorigin="anonymous"
    ></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
      const enqueryForm = document.querySelector(".Enquery-Form");
      const backDrop = document.querySelector(".overlay");
      const forGap = document.querySelector(".forGap");
      const layout = document.querySelectorAll(".layout-display-img");
      const layoutImg = document.querySelectorAll(".layout-box");
      function showFormMobile() {
        enqueryForm.classList.toggle("hide-Enquery-Form");
        backDrop.classList.toggle("hide-Enquery-Form");
        forGap.classList.toggle("blank");
      }
      for (let i = 0; i < layoutImg.length; i++) {
        layoutImg[i].addEventListener("click", function () {
          backDrop.classList.toggle("hide-Enquery-Form");
          layout[i].classList.toggle("hide-Enquery-Form");
          forGap.classList.toggle("blank");
        });
      }
      function backDropclick() {
        enqueryForm.classList.add("hide-Enquery-Form");
        backDrop.classList.add("hide-Enquery-Form");
        forGap.classList.add("blank");
        for (let i = 0; i < layout.length; i++) {
          layout[i].classList.add("hide-Enquery-Form");
        }
      }

      $(document).ready(function () {
        // Add smooth scrolling to all links
        $("a").on("click", function (event) {
          // Make sure this.hash has a value before overriding default behavior
          if (this.hash !== "") {
            // Prevent default anchor click behavior
            event.preventDefault();

            // Store hash
            var hash = this.hash;

            // Using jQuery's animate() method to add smooth page scroll
            // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
            $("html, body").animate(
              {
                scrollTop: $(hash).offset().top,
              },
              100,
              function () {
                // Add hash (#) to URL when done scrolling (default click behavior)
                window.location.hash = hash;
              }
            );
          } // End if
        });
      });
    </script>
  </body>
</html>
