<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SR Plastic - Quick Enquiry</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
        .offcanvas {
            background-color: #f8f9fa; /* Light background */
        }

        .contact-with-us i {
            font-size: 25px;
            color: #007bff; /* Primary color */
            margin-right: 10px;
        }

        .btn-custom {
            background-color: #007bff;
            color:pink;
        }

        .btn-custom:hover {
            background-color: #0056b3;
        }

        .form-control:focus {
            border-color: #007bff;
            box-shadow: 0 0 5px rgba(232, 239, 246, 0.5);
        }
    </style>
</head>
<body>

<!-- Offcanvas Quick Enquiry Form -->
<div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="Id1" aria-labelledby="Enable both scrolling & backdrop">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title">
            <img src="assets/images/logo/srlogo.png" alt="SR Plastic Logo" class="img-fluid" style="width: 100px;">
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>

    <div class="offcanvas-body">
        <form id="quickEnquiryForm" class="needs-validation" method="POST" action="" novalidate>
            <div class="mb-3">
                <label for="name" class="form-label">Name*</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>
                <div class="invalid-feedback">Please enter your name.</div>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
                <div class="invalid-feedback">Please enter a valid email address.</div>
            </div>

            <div class="mb-3">
                <label for="phone" class="form-label">Phone Number*</label>
                <input type="text" class="form-control" id="phone" name="number" placeholder="Enter your phone number"
                       required pattern="^\d{10}$" maxlength="10" oninput="this.value = this.value.replace(/[^0-9]/g, '')">
                <div class="invalid-feedback">Please enter a valid 10-digit phone number.</div>
            </div>

            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <input type="text" class="form-control" id="address" name="address" placeholder="Enter your address">
                <div class="invalid-feedback">Please enter your address.</div>
            </div>

            <div class="mb-3">
                <label for="message" class="form-label">Message</label>
                <textarea class="form-control" id="message" name="message" rows="3" placeholder="Your message (optional)"></textarea>
            </div>

            <button type="submit" class="btn btn-custom w-100" name="send">Send <i class="fas fa-paper-plane"></i></button>
        </form>

        <!-- Social Media & Links -->
        <div class="py-3 contact-with-us">
            <div class="py-3 text-center">
                <h5 class="text-center">Connect with us:</h5>
                <img src="assets/images/divider/divider.png" alt="" class="img-fluid" style="width: 150px;">
            </div>

            <div class="d-flex justify-content-center">
                <a href="https://www.facebook.com/profile.php?id=61573705352585" class="me-3"><i class="fab fa-facebook-square"></i></a>
                <a href="https://x.com/rasmanufac1256" class="me-3"><i class="fab fa-twitter-square"></i></a>
                <a href="https://www.instagram.com/sr_plastics71?igsh=MWE3N2o2M3ZmaDlucg==" class="me-3"><i class="fab fa-instagram-square"></i></a>
                <a href="https://www.linkedin.com/in/sr-plastic-plastic-87a90a317/" class="me-3"><i class="fab fa-linkedin"></i></a>
                <a href="https://youtube.com/@srplasticss?si=FxF6jh9i3xv0Mdf_ " class="me-3"><i class="fab fa-youtube-square"></i></a>
            </div>

            <div class="py-3 text-center">
                <p><a href="about-us.php" class="fw-bold">About Us</a> | <a href="contact-us.php" class="fw-bold">Contact Us</a></p>
                <p>&copy; 2024 All Rights Reserved. Made with ❤️ by <a href="https://seemasingh.com/" target="_blank" class="text-danger fw-bold"><u>Seema Singh</u></a></p>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- Form Validation -->
<script>
    (function () {
        'use strict';

        var forms = document.querySelectorAll('.needs-validation');

        Array.prototype.slice.call(forms).forEach(function (form) {
            form.addEventListener('submit', function (event) {
                if (!form.checkValidity()) {
                    event.preventDefault();
                    event.stopPropagation();

                    var firstInvalid = form.querySelector(':invalid');
                    if (firstInvalid) {
                        firstInvalid.scrollIntoView({ behavior: 'smooth', block: 'center' });
                    }
                }

                form.classList.add('was-validated');
            }, false);
        });
    })();
</script>

</body>
</html>
