<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'include/head.php'; ?>
    <style>
        /* ======================= BANNER SECTION ======================== */
        .contact-breadcrumb-banner {
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)),
                url('assets/images/banner/WhatsApp Image 2025-04-06 at 13.55.12_37daded9.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            height: 340px;
            display: flex;
            align-items: end;
            position: relative;
            overflow: hidden;
        }
        .contact-breadcrumb-banner::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(45deg, rgba(0, 0, 0, 0.8), transparent);
            z-index: 1;
        }
        .contact-breadcrumb-banner .container {
            position: relative;
            z-index: 2;
        }
        .contact-breadcrumb-banner h1 {
            color: white;
            font-size: 2.8rem;
            font-weight: 700;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
            animation: fadeInDown 1s ease;
        }
        .breadcrumb {
            background: rgba(255,255,255,0.2);
            backdrop-filter: blur(5px);
            border-radius: 25px;
            padding: 8px 15px;
            display: inline-block;
        }

        /* Contact Form Styles */
        .contact-form {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            position: relative;
            overflow: hidden;
            transition: all 0.3s ease;
        }
        .contact-form::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: linear-gradient(45deg, transparent, rgba(0, 110, 255, 0.1), transparent);
            transform: rotate(45deg);
            animation: shine 3s infinite;
        }
        .contact-form:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 35px rgba(0,0,0,0.15);
        }
        .contact-form h3 {
            position: relative;
            display: inline-block;
            margin-bottom: 20px;
        }
        .contact-form h3::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 50px;
            height: 3px;
            background: linear-gradient(90deg, #006eff, #00c6ff);
            border-radius: 3px;
        }
        .form-control {
            border: none;
            border-bottom: 2px solid #eee;
            border-radius: 0;
            padding-left: 0;
            transition: all 0.3s;
        }
        .form-control:focus {
            box-shadow: none;
            border-bottom-color: #006eff;
        }
        .btn-primary {
            background: linear-gradient(45deg, #006eff, #00c6ff);
            border: none;
            border-radius: 50px;
            padding: 10px 30px;
            font-weight: 600;
            letter-spacing: 1px;
            transition: all 0.3s;
        }
        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0, 110, 255, 0.4);
        }

        /* Contact Cards */
        .contact-card {
            margin-bottom: 20px;
            border: none;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
            position: relative;
            background: white;
        }
        .contact-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.15);
        }
        .contact-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 5px;
            height: 100%;
            background: linear-gradient(to bottom, #006eff, #00c6ff);
        }
        .contact-card .card-body {
            padding: 25px;
        }
        .contact-card i {
            font-size: 24px;
            margin-right: 10px;
            background: linear-gradient(45deg, #006eff, #00c6ff);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }
        .contact-card a {
            text-decoration: none;
            transition: all 0.3s;
        }
        .contact-card a:hover {
            color: #006eff !important;
        }

        /* Animations */
        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        @keyframes shine {
            0% {
                transform: rotate(45deg) translateX(-50%) translateY(-50%);
            }
            100% {
                transform: rotate(45deg) translateX(50%) translateY(50%);
            }
        }
    </style>
</head>
<body>
    <?php include 'include/header.php'; ?>

    <!-- Banner Section -->
    <section class="contact-breadcrumb-banner">
        <div class="container pb-4">
            <h1 class="breadcrumb-title text-white">Contact Us</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php" class="text-white">Home</a></li>
                    <li class="breadcrumb-item active text-white" aria-current="page">Contact Us</li>
                </ol>
            </nav>
        </div>
    </section>

    <!-- Contact Content -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <!-- Contact Details -->
                <div class="col-md-4">
                    <div class="card contact-card">
                        <div class="card-body">
                            <h5 class="card-title">Our Location</h5>
                            <a href="https://maps.app.goo.gl/tTDexrAKvRXGdx8M6" target="_blank">
                                <p class="card-text fw-bold d-flex align-items-center">
                                    <i class="fas fa-map-marker-alt"></i>
                                    SR Plastic, Industrial Area, Patna, Bihar, India
                                </p>
                            </a>
                        </div>
                    </div>
                    <div class="card contact-card">
                        <div class="card-body">
                            <h5 class="card-title">Customer Support</h5>
                            <a href="tel:+919229204553">
                                <p class="card-text fw-bold d-flex align-items-center">
                                    <i class="fas fa-phone-alt"></i> +91 9229204553
                                </p>
                            </a>
                        </div>
                    </div>
                    <div class="card contact-card">
                        <div class="card-body">
                            <h5 class="card-title">Email Us</h5>
                            <a href="mailto:contact@srplastic.com">
                                <p class="card-text fw-bold d-flex align-items-center">
                                    <i class="fas fa-envelope"></i> contact@srplastic.com
                                </p>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Contact Form -->
                <div class="col-md-8">
                    <div class="contact-form">
                        <h3>Send Us a Message</h3>
                        <hr>
<form method="POST" action="submit_contact.php">
    <?php if (isset($_GET['success']) && $_GET['success'] == 1): ?>
        <div class="alert alert-success" role="alert">
            Your message has been sent successfully.
        </div>
    <?php endif; ?>
    <div class="mb-3">
        <label for="name" class="form-label">Full Name</label>
        <input type="text" class="form-control" id="name" name="name" required>
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email Address</label>
        <input type="email" class="form-control" id="email" name="email" required>
    </div>
    <div class="mb-3">
        <label for="number" class="form-label">Phone Number</label>
        <input type="tel" class="form-control" id="number" name="number">
    </div>
    <div class="mb-3">
        <label for="address" class="form-label">Address</label>
        <input type="text" class="form-control" id="address" name="address">
    </div>
    <div class="mb-3">
        <label for="subject" class="form-label">Subject</label>
        <select class="form-select" id="subject" name="subject">
            <option value="general">General Inquiry</option>
            <option value="products">Product Information</option>
            <option value="order">Order Status</option>
            <option value="support">Technical Support</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="message" class="form-label">Message</label>
        <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Send Message</button>
</form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    <!-- Apply Modal -->
    <div class="modal fade" id="applyModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Apply for <span id="positionTitle"></span></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="applicationForm">
                        <div class="mb-3">
                            <label class="form-label">Full Name</label>
                            <input type="text" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Phone</label>
                            <input type="tel" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Upload Resume</label>
                            <input type="file" class="form-control" accept=".pdf,.doc,.docx">
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Submit Application</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php include('include/footer.php'); ?>

    <script>
        // 3D hover effects for career cards
        document.querySelectorAll('.career-card').forEach(card => {
            card.addEventListener('mousemove', (e) => {
                const xAxis = (window.innerWidth / 2 - e.pageX) / 15;
                const yAxis = (window.innerHeight / 2 - e.pageY) / 15;
                card.style.transform = `rotateY(${xAxis}deg) rotateX(${yAxis}deg)`;
            });
            card.addEventListener('mouseenter', () => {
                card.style.transition = 'none';
            });
            card.addEventListener('mouseleave', () => {
                card.style.transition = 'all 0.5s ease';
                card.style.transform = 'rotateY(0deg) rotateX(0deg)';
            });
        });

        // Set position title in modal
        document.querySelectorAll('.apply-btn').forEach(btn => {
            btn.addEventListener('click', () => {
                document.getElementById('positionTitle').textContent = btn.dataset.position;
            });
        });
    </script>
</body>
</html>
