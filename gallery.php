<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'include/head.php'; ?>
    <title>SR Plastic - Gallery</title>
    <style>
        .gallery-section {
            padding: 80px 0;
        }
        .gallery-title {
            text-align: center;
            margin-bottom: 50px;
            color: var(--primary-color);
        }
        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 20px;
            padding: 20px;
        }
        .gallery-item {
            position: relative;
            overflow: hidden;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }
        .gallery-item:hover {
            transform: scale(1.03);
        }
        .gallery-item img {
            width: 100%;
            height: 250px;
            object-fit: cover;
            display: block;
        }
        .gallery-caption {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: rgba(0,0,0,0.7);
            color: white;
            padding: 15px;
            transform: translateY(100%);
            transition: transform 0.3s ease;
        }
        .gallery-item:hover .gallery-caption {
            transform: translateY(0);
        }
        .gallery-description {
            max-width: 1200px;
            margin: 40px auto;
            padding: 0 20px;
            text-align: center;
        }
    </style>
</head>
<body>
    <?php include 'include/header.php'; ?>

    <section class="gallery-section">
        <div class="container">
            <h1 class="gallery-title">Our Event Gallery</h1>
            
            <div class="gallery-description">
            <p>Explore the highlights of our events through our gallery. From corporate gatherings to community engagements, our events showcase the innovation, collaboration, and commitment that define SR Plastic.</p>
            </div>

            <div class="gallery-grid">
            <!-- Event Gallery Item 1 -->
            <div class="gallery-item">
            <img src="assets/images/events/IMG-20250412-WA0031.jpg" alt="Corporate Event">
            <div class="gallery-caption">
            <h4>Corporate Event</h4>
            <p>Showcasing our products at a corporate event</p>
            </div>
            </div>

            <!-- Event Gallery Item 2 -->
            <div class="gallery-item">
            <img src="assets/images/events/IMG-20250412-WA0032.jpg" alt="Trade Show">
            <div class="gallery-caption">
            <h4>Trade Show</h4>
            <p>Innovative designs displayed at a trade show</p>
            </div>
            </div>

            <!-- Event Gallery Item 3 -->
            <div class="gallery-item">
            <img src="assets\images\events\IMG-20250412-WA0034.jpg" alt="Workshop">
            <div class="gallery-caption">
            <h4>Workshop</h4>
            <p>Hands-on workshop featuring our products</p>
            </div>
            </div>

            <!-- Event Gallery Item 4 -->
            <div class="gallery-item">
            <img src="assets/images/events/IMG-20250412-WA0034.jpg" alt="Community Event">
            <div class="gallery-caption">
            <h4>Community Event</h4>
            <p>Engaging with the community through our products</p>
            </div>
            </div>

            <!-- Event Gallery Item 5 -->
            <div class="gallery-item">
            <img src="assets\images\team\product launch.jpg" alt="Product Launch">
            <div class="gallery-caption">
            <h4>Product Launch</h4>
            <p>Introducing our latest innovations</p>
            </div>
            </div>

            <!-- Event Gallery Item 6 -->
            <div class="gallery-item">
            <img src="assets/images/events/IMG-20250412-WA0036.jpg" alt="Networking Event">
            <div class="gallery-caption">
            <h4>Networking Event</h4>
            <p>Building connections with industry leaders</p>
            </div>
            </div>

            <!-- Event Gallery Item 7 -->
            <div class="gallery-item">
            <img src="assets/images/events/IMG-20250412-WA0037.jpg" alt="Charity Event">
            <div class="gallery-caption">
            <h4>Charity Event</h4>
            <p>Giving back to the community</p>
            </div>
            </div>

            <!-- Event Gallery Item 8 -->
            <div class="gallery-item">
            <img src="assets\images\team\team meeting.jpg" alt="Team Building">
            <div class="gallery-caption">
            <h4>Team Building</h4>
            <p>Strengthening our team through collaboration</p>
            </div>
            </div>
            <div class="gallery-caption">
            <h4>Community Event</h4>
            <p>Engaging with the community through our products</p>
            </div>
            </div>
            </div>

            <div class="gallery-description">
            <h3>Our Event Highlights</h3>
            <p>Each event in our gallery reflects our dedication to innovation, sustainability, and community engagement. We take pride in connecting with our customers and partners through these meaningful experiences.</p>
            <p>For more information about our events or to participate in upcoming activities, please contact our team. We look forward to collaborating with you!</p>
            </div>
        </div>
    </section>

    <?php include 'include/footer.php'; ?>
</body>
</html>
