<!-- Fancybox CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css">
<!-- Bootstrap CSS -->
<!-- Custom CSS -->
<style>
  /* Custom styles for the gallery */
  .gallery .cards img {
    cursor: pointer;
    transition: transform 0.2s;
    height: 300px;
    width: 100%;
    object-fit: contain;
    background-color: var(--primary-color);
  }

  .gallery img:hover {
    transform: scale(1.02);
  }

  .gallery video {
    cursor: pointer;
    transition: transform 0.2s;
    height: 300px;
    width: 100%;
    object-fit: contain;
    background-color: var(--primary-color);
  }

  .gallery video:hover {
    transform: scale(1.02);
  }
  .gallery{
    background-image: url(assets/images/banner/gallery-background.avif);
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
  }
</style>


<section class="gallery">
  <div class="Dashboard container-fluid">
    <div class="row ">
      <div class="py-4  text-center">
        <h2 class="">Our Gallery</h2>
        <img src="assets/images/divider/divider.png" alt="Decorative Divider" class="img-fluid " style="width: 180px;">
      </div>

      <main class="col-md-9 ms-sm-auto col-lg-12 px-md-4">
        <section class="content gallery py-5">
          <div class="container">
            <div class="row justify-content-center align-items-center" id="imageGallery">
              <?php
              include 'dashboard/dbcon.php'; 
              $query = "SELECT * FROM `gallery`";
              $result = mysqli_query($conn, $query);
              if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                  ?>
                  <div class="col-md-4 cards pb-4 position-relative">
                    <?php if ($row['image']) { ?>
                      <a data-fancybox="gallery" href="dashboard/<?php echo $row['image']; ?>">
                        <img src="dashboard/<?php echo $row['image']; ?>" class="img-fluid img-thumbnail"
                          alt="Image <?php echo $row['id']; ?>">
                      </a>
                    <?php } ?>
                    <?php if ($row['video']) { ?>
                      <a data-fancybox="gallery" href="dashboard/<?php echo $row['video']; ?>">
                        <video class="img-fluid img-thumbnail" controls>
                          <source src="dashboard/<?php echo $row['video']; ?>" type="video/mp4">
                          Your browser does not support the video tag.
                        </video>
                      </a>
                    <?php } ?>
                  </div>
                  <?php
                }
              } else {
                echo "<p>No images or videos found.</p>";
              }
              mysqli_close($conn);
              ?>
            </div>
          </div>
        </section>
      </main>
    </div>
  </div>
</section>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.0/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>

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