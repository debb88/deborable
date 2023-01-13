<!DOCTYPE html>
<html lang="en">
  <!-- head -->

  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- css -->

    <link rel="stylesheet" href="style.css" />

    <!-- bootstrap -->

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
      crossorigin="anonymous"
    />

    <!-- fontawesome -->

    <script
      src="https://kit.fontawesome.com/4cd8de584e.js"
      crossorigin="anonymous"
    ></script>

    <link rel="icon" href="img/logo.png" />
    <title>Deborable</title>
  </head>

  <!-- body -->

  <body>
    <!-- css -->

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
      crossorigin="anonymous"
    ></script>

    <!-- navbar -->

    <?php include 'navbar.php';?>

    <!-- carousel -->

    <div id="carouselExampleCaptions" class="carousel slide mt-5">
      <div class="carousel-indicators">
        <button
          type="button"
          data-bs-target="#carouselExampleCaptions"
          data-bs-slide-to="0"
          class="active"
          aria-current="true"
          aria-label="Slide 1"
        ></button>
        <button
          type="button"
          data-bs-target="#carouselExampleCaptions"
          data-bs-slide-to="1"
          aria-label="Slide 2"
        ></button>
        <button
          type="button"
          data-bs-target="#carouselExampleCaptions"
          data-bs-slide-to="2"
          aria-label="Slide 3"
        ></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <a href=""
            ><img
              src="https://www.hollywoodreporter.com/wp-content/uploads/2022/11/2011_0010_v0420.1075_altered_v2.jpg?w=1296"
              class="d-block w-100"
          /></a>
          <div class="carousel-caption d-none d-md-block">
            <h1>Avatar The Way of Water</h1>
            <p>
              Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iure
              minima pariatur excepturi, explicabo veritatis expedita quia
              suscipit voluptatem! Aut corporis labore voluptas vel earum
              consequuntur quidem sint dolores, totam velit?
            </p>
          </div>
        </div>
        <div class="carousel-item">
          <a href=""
            ><img
              src="https://akcdn.detik.net.id/visual/2022/06/28/minions-the-rise-of-gru-5_169.png?w=650"
              class="d-block w-100"
          /></a>
          <div class="carousel-caption d-none d-md-block">
            <h1>Minions The Rise of Gru</h1>
            <p>
              Lorem ipsum dolor sit amet consectetur, adipisicing elit.
              Necessitatibus, voluptatem quos dolorem fuga temporibus similique
              quae repudiandae saepe. Dolores officiis laudantium neque quae
              quam, aliquam dolore nesciunt ex sed sapiente.
            </p>
          </div>
        </div>
        <div class="carousel-item">
          <a href=""
            ><img
              src="https://akcdn.detik.net.id/visual/2022/05/23/top-gun-maverick-4_169.jpeg?w=650"
              class="d-block w-100"
          /></a>
          <div class="carousel-caption d-none d-md-block">
            <h1>Top Gun Maverick</h1>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Accusantium quod iusto consequuntur sed minima, tenetur aliquid
              recusandae sunt quis asperiores perferendis dolorum necessitatibus
              animi! Pariatur eligendi natus eum ipsa eius!
            </p>
          </div>
        </div>
      </div>
      <button
        class="carousel-control-prev"
        type="button"
        data-bs-target="#carouselExampleCaptions"
        data-bs-slide="prev"
      >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button
        class="carousel-control-next"
        type="button"
        data-bs-target="#carouselExampleCaptions"
        data-bs-slide="next"
      >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <!-- content -->

    <div class="column1">
      <b>Trending</b>
      <div class="d-flex flex-wrap g-4">
        <div class="row g-4">
          <div class="col">
            <a href=""
              ><img
                src="https://cdn1-production-images-kly.akamaized.net/PjltkDivfLX3-PokSMjTyZQkaEM=/640x853/smart/filters:quality(75):strip_icc():format(jpeg)/kly-media-production/medias/4135957/original/024511400_1661433290-Top_Gun_Maverick_3.jpg"
                height="300"
                width="230"
                alt="..."
            /></a>
          </div>
          <div class="col">
            <a href=""
              ><img
                src="https://assets.pikiran-rakyat.com/crop/0x0:0x0/x/photo/2021/08/20/2202635007.jpg"
                height="300"
                width="230"
            /></a>
          </div>
          <div class="col">
            <a href=""
              ><img
                src="https://foto.kontan.co.id/OHr9cQjkeuadJzH4pEpoqSF6Psk=/smart/2022/02/01/311525370p.jpg"
                height="300"
                width="230"
            /></a>
          </div>
          <div class="col">
            <a href=""
              ><img
                src="https://greenbelttheatre.org/wp-content/uploads/northmanposter.jpg"
                height="300"
                width="230"
            /></a>
          </div>
        </div>
      </div>
    </div>

    <div class="column1">
      <b>Newest</b>
      <div class="d-flex flex-wrap g-4">
        <div class="row g-4">
          <div class="col">
            <a href=""
              ><img
                src="https://m.media-amazon.com/images/M/MV5BZDQyODUwM2MtNzA0YS00ZjdmLTgzMjItZWRjN2YyYWE5ZTNjXkEyXkFqcGdeQXVyMTI2MzY1MjM1._V1_FMjpg_UX1000_.jpg"
                height="300"
                width="230"
                alt="..."
            /></a>
          </div>
          <div class="col">
            <a href=""
              ><img
                src="https://img.netnaija.com/36MHHK.jpg"
                height="300"
                width="230"
            /></a>
          </div>
          <div class="col">
            <a href=""
              ><img
                src="https://cdn0-production-images-kly.akamaized.net/vsGgSI6VYscZMKiC1RSfAJpPfHc=/640x853/smart/filters:quality(75):strip_icc():format(jpeg)/kly-media-production/medias/4007439/original/055179100_1650975094-The_Doll_3_Poster.jpg"
                height="300"
                width="230"
            /></a>
          </div>
          <div class="col">
            <a href=""
              ><img
                src="https://awsimages.detik.net.id/community/media/visual/2022/10/05/drama-korea-cheer-up-2022.jpeg?w=1200"
                height="300"
                width="230"
            /></a>
          </div>
        </div>
      </div>
    </div>

    <div class="column1">
      <b>Coming Soon</b>
      <div class="d-flex flex-wrap g-4">
        <div class="row g-4">
          <div class="col">
            <a href=""
              ><img
                src="https://m.media-amazon.com/images/M/MV5BMWFmYmRiYzMtMTQ4YS00NjA5LTliYTgtMmM3OTc4OGY3MTFkXkEyXkFqcGdeQXVyODk4OTc3MTY@._V1_.jpg"
                height="300"
                width="230"
                alt="..."
            /></a>
          </div>
          <div class="col">
            <a href=""
              ><img
                src="https://image.tmdb.org/t/p/w500/h2yaxYViCRf1n0qNkXlrddsXR67.jpg"
                height="300"
                width="230"
            /></a>
          </div>
          <div class="col">
            <a href=""
              ><img
                src="https://www.awn.com/sites/default/files/styles/original/public/image/attached/1057422-pibadv1sheet3goodevilrgb1-1280.jpg?itok=7XebA4sg"
                height="300"
                width="230"
            /></a>
          </div>
          <div class="col">
            <a href=""
              ><img
                src="https://roost.nbcuni.com/bin/viewasset.html/content/dam/Peacock/Campaign/landingpages/library/yellowstone/yellowstone-vertical-art-min.jpg/_jcr_content/renditions/original"
                height="300"
                width="230"
            /></a>
          </div>
        </div>
      </div>
    </div>

    <!-- footer -->

    <?php include 'footer.php';?>
    
  </body>
</html>
