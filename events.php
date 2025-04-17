<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'include/head.php'; ?>
    <title>SR Plastic - Events</title>
    <style>
        /* 3D Effects and Animations */
        .event-card {
            perspective: 1000px;
            transform-style: preserve-3d;
            transition: all 0.5s ease;
        }
        .event-card:hover {
            transform: translateY(-10px) rotateX(5deg);
            box-shadow: 0 20px 40px rgba(0,0,0,0.2);
        }
        .event-img {
            transform: translateZ(20px);
            transition: all 0.5s ease;
        }
        .event-card:hover .event-img {
            transform: translateZ(30px) scale(1.05);
        }

        /* Creative Layout */
        .events-hero {
            background: linear-gradient(135deg, #0f4c75 0%, #3282b8 100%);
            color: white;
            padding: 100px 0;
            clip-path: polygon(0 0, 100% 0, 100% 85%, 0 100%);
        }
        .event-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 30px;
            margin: 50px 0;
        }
        .event-card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }
        .event-content {
            padding: 25px;
            position: relative;
            z-index: 2;
        }
        .event-img {
            height: 250px;
            width: 100%;
            object-fit: cover;
        }
        .event-date {
            background: #fc466b;
            color: white;
            padding: 5px 15px;
            border-radius: 20px;
            display: inline-block;
            margin-bottom: 15px;
            font-weight: bold;
        }
        .parallax-section {
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            height: 400px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-align: center;
            position: relative;
        }
        .parallax-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0,0,0,0.6);
        }
        .parallax-content {
            position: relative;
            z-index: 2;
            max-width: 800px;
            padding: 0 20px;
        }
    </style>
</head>
<body>
    <?php include 'include/header.php'; ?>

    <section class="events-hero">
        <div class="container text-center">
            <h1 class="display-4 mb-4">Our Memorable Events</h1>
            <p class="lead">Celebrating milestones and building relationships</p>
        </div>
    </section>

    <div class="container">
        <section class="event-grid">
            <!-- Event 1: Awarded by News -->
            <div class="event-card">
                <img src="assets\images\team\x1.jpg" alt="Award Ceremony" class="event-img">
                <div class="event-content">
                    <span class="event-date">March 15, 2025</span>
                    <h3>Industry Excellence Award</h3>
                    <p>SR Plastic honored with the prestigious "Plastic Innovation of the Year" award by National Business Times for our eco-friendly manufacturing processes.</p>
                    <p>The award recognizes our commitment to sustainable plastic solutions that don't compromise on quality or performance.</p>
                    <button onclick="openTodayImages()" class="btn btn-primary mt-3">Open Now</button>
                </div>
            </div>

            <script>
                function openTodayImages() {
                    const images = [
                        'assets/images/events/IMG-20250412-WA0031.jpg',
                        'assets/images/events/IMG-20250412-WA0032.jpg',
                        'assets/images/events/IMG-20250412-WA0033.jpg',
                        'assets/images/events/IMG-20250412-WA0034.jpg',
                        'assets/images/events/IMG-20250412-WA0036.jpg',
                        'assets/images/events/IMG-20250412-WA0043.jpg',
                        'assets/images/events/IMG-20250412-WA0046.jpg',
                        'assets/images/events/IMG-20250412-WA0049.jpg',
                        'assets/images/events/IMG-20250412-WA0050.jpg',
                        'assets/images/events/IMG-20250412-WA0051.jpg',
                        'assets/images/events/IMG-20250412-WA0052.jpg',
                        'assets/images/events/IMG-20250412-WA0053.jpg',
                        'assets/images/events/IMG-20250412-WA0054.jpg',
                    ];
                    let imageGallery = `
                        <div style="display: flex; flex-wrap: wrap; gap: 10px; justify-content: center; padding: 20px;">
                            ${images.map(image => `
                                <div style="position: relative; cursor: pointer;">
                                    <img src="${image}" alt="Today's Image" style="width: 150px; height: auto; border-radius: 8px; transition: transform 0.3s;">
                                    <button onclick="openFullView('${image}')" style="position: absolute; bottom: 5px; right: 5px; background: rgba(0, 0, 0, 0.7); color: white; border: none; padding: 5px 10px; border-radius: 5px; cursor: pointer;">Full View</button>
                                </div>
                            `).join('')}
                        </div>`;
                    const newWindow = window.open('', '_blank', 'width=800,height=600');
                    newWindow.document.write('<html><head><title>Today\'s Images</title></head><body>' + imageGallery + '</body></html>');
                    newWindow.document.close();
                }

                function openFullView(image) {
                    const fullViewWindow = window.open('', '_blank', 'width=1200,height=800');
                    fullViewWindow.document.write(`
                        <html>
                            <head>
                                <title>Full View</title>
                                <style>
                                    body {
                                        margin: 0;
                                        display: flex;
                                        align-items: center;
                                        justify-content: center;
                                        background-color: black;
                                    }
                                    img {
                                        max-width: 100%;
                                        max-height: 100%;
                                    }
                                </style>
                            </head>
                            <body>
                                <img src="${image}" alt="Full View">
                            </body>
                        </html>
                    `);
                    fullViewWindow.document.close();
                }
            </script>
            <style>
                .btn-primary {
                    background-color: red !important;
                    border-color: red !important;
                }
            </style>

            <!-- Event 2: CM Inauguration -->
            <div class="event-card">
                <img src="assets\images\team\new.jpg" alt="CM Inauguration" class="event-img">
                <div class="event-content">
                    <span class="event-date">April 5, 2025</span>
                    <h3>New Facility Inauguration</h3>
                    <p>Honorable Chief Minister inaugurated our state-of-the-art manufacturing facility in the presence of industry leaders and government officials.</p>
                    <p>The new facility doubles our production capacity while reducing energy consumption by 40% through innovative green technologies.</p>
                </div>
            </div>

            <!-- Event 3: Meet with City DM -->
            <div class="event-card">
                <img src="assets\images\team\dm.jpg" alt="Meeting with DM" class="event-img">
                <div class="event-content">
                    <span class="event-date">February 28, 2025</span>
                    <h3>Policy Discussion Forum</h3>
                    <p>Our leadership team met with the District Magistrate to discuss sustainable industrial policies and plastic waste management initiatives.</p>
                    <p>The meeting resulted in a partnership for a community recycling program that will launch later this year.</p>
                </div>
            </div>

            <!-- Event 4: Political Leaders Discussion -->
            <div class="event-card">
                <img src="assets\images\team\leader.jpg" alt="Political Discussion" class="event-img">
                <div class="event-content">
                    <span class="event-date">January 10, 2025</span>
                    <h3>Industry Roundtable</h3>
                    <p>Engaging discussion with political leaders about the future of plastic manufacturing and environmental responsibility.</p>
                    <p>We presented our roadmap for achieving 100% recyclable product line by 2026.</p>
                </div>
            </div>

            <!-- Event 5: CEO with Indian Soldiers -->
            <div class="event-card">
                <img src="assets\images\team\army.jpg" alt="CEO with Soldiers" class="event-img">
                <div class="event-content">
                    <span class="event-date">December 15, 2024</span>
                    <h3>Supporting Our Heroes</h3>
                    <p>Our CEO met with Indian Army personnel to donate specialized plastic products for field operations.</p>
                    <p>This initiative is part of our "Plastics for Protection" program supporting defense forces with durable, lightweight solutions.</p>
                </div>
            </div>

            <!-- Event 6: Meeting with DM -->
            <div class="event-card">
                <img src="assets\images\team\dm.jpg" alt="Meeting with DM" class="event-img">
                <div class="event-content">
                    <span class="event-date">March 10, 2025</span>
                    <h3>Meeting with District Magistrate</h3>
                    <p>Our CEO met with the District Magistrate to discuss local initiatives and community support programs. This meeting focused on enhancing collaboration between local businesses and government.</p>
                </div>
            </div>

            <!-- Event 7: CEO Team Meeting -->
            <div class="event-card">
                <img src="assets\images\team\team meeting.jpg" alt="CEO Team Meeting" class="event-img">
                <div class="event-content">
                    <span class="event-date">April 20, 2025</span>
                    <h3>CEO Team Meeting</h3>
                    <p>A productive meeting where our CEO engaged with team members to discuss upcoming projects, gather feedback, and foster a collaborative work environment.</p>
                </div>
            </div>

            <!-- Event 8: Community Outreach Program -->
            <div class="event-card">
                <img src="assets\images\team\outreach.jpg" alt="Community Outreach" class="event-img">
                <div class="event-content">
                    <span class="event-date">May 15, 2025</span>
                    <h3>Community Outreach Program</h3>
                    <p>SR Plastic organized a community outreach program to educate local schools about recycling and sustainable practices. The event included interactive sessions and workshops.</p>
                </div>
            </div>

            <!-- Event 9: Annual Company Retreat -->
            <div class="event-card">
                <img src="assets/images/team/IMG-20250412-WA0023.jpg" alt="Annual Retreat" class="event-img">
                <div class="event-content">
                    <span class="event-date">June 30, 2025</span>
                    <h3>Annual Company Retreat</h3>
                    <p>A day of team-building activities and strategic planning sessions held at a scenic location, aimed at strengthening team bonds and aligning on company goals.</p>
                </div>
            </div>

            <!-- Event 10: Product Launch Event -->
            <div class="event-card">
                <img src="assets\images\team\product launch.jpg" alt="Product Launch" class="event-img">
                <div class="event-content">
                    <span class="event-date">July 25, 2025</span>
                    <h3>Product Launch Event</h3>
                    <p>Launch of our new line of eco-friendly products, featuring live demonstrations and presentations from our product development team.</p>
                </div>
            </div>

            <!-- Event 11: Puja Samaroh -->
            <div class="event-card">
                <img src="assets\images\team\puja.jpg" alt="Puja Samaroh" class="event-img">
                <div class="event-content">
                    <span class="event-date">april 13, 2025</span>
                    <h3> Puja Samaroh</h3>
                    <p>SR Plastic celebrated its annual Puja Samaroh with great devotion and enthusiasm. The ceremony was attended by all employees and their families.</p>
                    <p>The puja was performed by renowned priests, seeking blessings for the company's growth and prosperity. Traditional rituals were followed by cultural programs and prasad distribution.</p>
                    
                    <div class="mt-4">
                        <h4>Video Highlights</h4>
                        <video width="100%" controls style="border-radius: 8px;">
                            <source src="assets/images/team/VID-20250412-WA0001.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                    <div class="mt-4">
                        <h4>13th April 2025 Puja  Highlights</h4>
                        <video width="100%" controls style="border-radius: 8px;">
                            <source src="assets\images\team\puja_1.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <section class="parallax-section" style="background-image: url('assets/images/team/IMG-20250412-WA0064.jpg');">
        <div class="parallax-content">
            <h2 class="display-5 mb-4">Building the Future Together</h2>
            <p class="lead">At SR Plastic, we believe in creating meaningful connections and celebrating every milestone on our journey towards sustainable plastic solutions.</p>
        </div>
    </section>

    <?php include 'include/footer.php'; ?>

    <script>
        // Additional 3D effects on scroll
        document.addEventListener('DOMContentLoaded', function() {
            const eventCards = document.querySelectorAll('.event-card');
            
            window.addEventListener('scroll', function() {
                eventCards.forEach(card => {
                    const cardPosition = card.getBoundingClientRect().top;
                    const screenPosition = window.innerHeight / 1.3;
                    
                    if(cardPosition < screenPosition) {
                        card.style.opacity = '1';
                        card.style.transform = 'translateY(0)';
                    }
                });
            });
        });
    </script>
</body>
</html>
