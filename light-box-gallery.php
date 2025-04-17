<!-- Fancybox CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.0/css/bootstrap.min.css">

<!-- Custom CSS -->
<style>
  .gallery .card img,
  .gallery .cards video {
    cursor: pointer;
    transition: transform 0.2s;
    height: 250px;
    width: 100%;
    object-fit: cover;
    background-color: var(--primary-color);
    transition: all 0.4s ease-in-out;
  }

  .gallery img:hover,
  .gallery video:hover {
    transform: scale(1.02);
    transition: all 0.4s ease-in-out;
  }

  .gallery {
    background: var(--secondary-color);
  }
</style>

<section class="gallery">
  <div class="Dashboard container-fluid">
    <div class="row">
      <div class="py-4 text-center">
        <h2 class="text-white">Our Gallery</h2>
        <img src="assets/images/divider/divider.png" alt="Decorative Divider" class="img-fluid" style="width: 180px;">
      </div>
      <main class="col-md-11 ms-sm-auto col-lg-12 px-md-4">

        <!-- Gallery Section -->
        <section class="content py-5">
          <div class="container">
            <div class="row justify-content-center align-items-center" id="imageGallery">
              <!-- Image and Video Items -->
              <div class="col-md-3 mb-3">
                <div class="card">
                  <a href="assets/images/gallery/steel-rod.jpg" data-fancybox="gallery" data-caption="Image 1">
                    <img src="assets/images/gallery/steel-rod.jpg" alt="Image 1" class="img-fluid">
                  </a>
                </div>
              </div>
              <!-- <div class="col-md-4 mb-3">
                <a href="assets/videos/gallery/video1.mp4" data-fancybox="gallery" data-caption="Video 1">
                  <video class="img-fluid" controls>
                    <source src="assets/videos/gallery/video1.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                  </video>
                </a>
              </div> -->
              <div class="col-md-3 mb-3">
                <div class="card">
                  <a href="assets/images/gallery/cement.avif" data-fancybox="gallery" data-caption="Image 2">
                    <img src="assets/images/gallery/cement.avif" alt="Image 2" class="img-fluid">
                  </a>
                </div>
              </div>

              <div class="col-md-3 mb-3">
                <div class="card">
                  <a href="assets/images/gallery/gravels.jpg" data-fancybox="gallery" data-caption="Image 2">
                    <img src="assets/images/gallery/gravels.jpg" alt="Image 2" class="img-fluid">
                  </a>
                </div>
              </div>

              <div class="col-md-3 mb-3">
                <div class="card">
                  <a href="assets/images/gallery/sand.jpg" data-fancybox="gallery" data-caption="Image 2">
                    <img src="assets/images/gallery/sand.jpg" alt="Image 2" class="img-fluid">
                  </a>
                </div>
              </div>
              <!-- Add more images and videos here -->
            </div>
          </div>
        </section>
      </main>
    </div>
  </div>
</section>

<!-- Bootstrap Bundle with Popper -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.0/js/bootstrap.bundle.min.js"></script>

<!-- jQuery (necessary for Fancybox) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- Fancybox JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>

<!-- JavaScript to Initialize Fancybox -->
<script>
  $(document).ready(function () {
    $('[data-fancybox="gallery"]').fancybox({
      loop: true,
      buttons: [
        'slideShow',
        'thumbs',
        'close'
      ]
    });
  });
</script>