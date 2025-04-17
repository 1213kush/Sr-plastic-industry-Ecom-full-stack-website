<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SR Plastic - FAQ</title>
    
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-GV6RPaaXIk3+nOUKtvJfdccV2kXJax0Pz6Nw1XXDk2Q8uTXFqPfR5oqDqK07V8BZQEz6MPx6v7TYX02n9Xo2Kg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-GV6RPaaXIk3+nOUKtvJfdccV2kXJax0Pz6Nw1XXDk2Q8uTXFqPfR5oqDqK07V8BZQEz6MPx6v7TYX02n9Xo2Kg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        :root {
            --primary-color: #144b85;
            --primary-light: #3a73b7;
            --accent-color: #e63946;
            --dark-text: #1d3557;
            --light-text: #f1faee;
            --bg-light: #f8f9fa;
            --card-shadow: 0 8px 30px rgba(0, 0, 0, 0.12);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #f5f7fa 0%, #e4e8f0 100%);
            min-height: 100vh;
            padding: 30px 15px;
            color: var(--dark-text);
        }

        .header {
            text-align: center;
            margin-bottom: 30px;
            position: relative;
        }

        .logo {
            width: 120px;
            margin-bottom: 15px;
        }

        .faq-container {
            max-width: 900px;
            margin: 0 auto;
            background-color: white;
            border-radius: 20px;
            box-shadow: var(--card-shadow);
            overflow: hidden;
            padding: 20px;
        }

        .faq-header {
            background: linear-gradient(to right, var(--primary-color), var(--primary-light));
            padding: 25px 30px;
            border-radius: 15px;
            margin-bottom: 25px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .faq-header:before {
            content: "";
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255,255,255,0.2) 0%, rgba(255,255,255,0) 70%);
            transform: rotate(-45deg);
            z-index: 1;
        }

        .faq-header h1 {
            color: white;
            font-size: 2.2rem;
            font-weight: 700;
            margin-bottom: 10px;
            position: relative;
            z-index: 2;
        }

        .faq-header p {
            color: rgba(255, 255, 255, 0.9);
            font-size: 1rem;
            position: relative;
            z-index: 2;
        }

        .categories {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            justify-content: center;
            margin-bottom: 25px;
            padding: 0 15px;
        }

        .category-btn {
            background-color: white;
            color: var(--primary-color);
            border: 2px solid var(--primary-light);
            border-radius: 30px;
            padding: 8px 20px;
            font-weight: 600;
            font-size: 0.9rem;
            cursor: pointer;
            transition: all 0.3s ease;
            outline: none;
        }

        .category-btn:hover, .category-btn.active {
            background-color: var(--primary-color);
            color: white;
        }

        .faq-search {
            margin-bottom: 30px;
            position: relative;
            padding: 0 15px;
        }

        .faq-search input {
            width: 100%;
            padding: 15px 20px 15px 50px;
            border: 2px solid #e0e0e0;
            border-radius: 12px;
            font-size: 1rem;
            transition: all 0.3s ease;
            outline: none;
        }

        .faq-search input:focus {
            border-color: var(--primary-light);
            box-shadow: 0 0 0 4px rgba(58, 115, 183, 0.1);
        }

        .faq-search i {
            position: absolute;
            left: 30px;
            top: 50%;
            transform: translateY(-50%);
            color: #888;
            font-size: 1.2rem;
        }

        .accordion-list {
            padding: 0 15px;
        }

        .accordion-item {
            margin-bottom: 15px;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .accordion-item:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 18px rgba(0, 0, 0, 0.1);
        }

        .accordion-item details {
            border-radius: 12px;
            overflow: hidden;
        }

        .accordion-item summary {
            background: linear-gradient(135deg, var(--primary-color), var(--primary-light));
            padding: 18px 24px;
            color: white;
            font-weight: 600;
            cursor: pointer;
            list-style: none;
            display: flex;
            justify-content: space-between;
            align-items: center;
            transition: background 0.3s ease;
            border-radius: 12px;
        }

        .accordion-item details[open] summary {
            border-radius: 12px 12px 0 0;
            background: linear-gradient(135deg, var(--primary-color), var(--primary-light));
        }

        .accordion-item summary::-webkit-details-marker {
            display: none;
        }

        .summary-title {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .summary-icon {
            background-color: rgba(255, 255, 255, 0.2);
            padding: 8px;
            border-radius: 8px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .accordion-content {
            padding: 20px 24px;
            background-color: white;
            color: var(--dark-text);
            animation: fadeIn 0.4s ease-in-out;
            border-radius: 0 0 12px 12px;
        }

        .accordion-content p {
            line-height: 1.7;
            margin-bottom: 15px;
        }

        .accordion-content p:last-child {
            margin-bottom: 0;
        }

        .accordion-content ul {
            margin-top: 10px;
            margin-left: 20px;
        }

        .accordion-content ul li {
            margin-bottom: 8px;
        }

        .accordion-content a {
            color: var(--primary-light);
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .accordion-content a:hover {
            color: var(--accent-color);
        }

        .contact-bar {
            background-color: rgba(20, 75, 133, 0.05);
            border-radius: 12px;
            padding: 20px;
            margin-top: 30px;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            align-items: center;
            gap: 20px;
        }

        .contact-method {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .contact-icon {
            width: 40px;
            height: 40px;
            background-color: var(--primary-color);
            color: white;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 1.2rem;
        }

        .contact-text h4 {
            font-size: 0.9rem;
            margin-bottom: 3px;
        }

        .contact-text p {
            font-size: 0.8rem;
            color: #666;
        }

        .chevron-icon {
            transition: transform 0.3s ease;
        }

        details[open] .chevron-icon {
            transform: rotate(90deg);
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @media (max-width: 768px) {
            .faq-header h1 {
                font-size: 1.7rem;
            }

            .categories {
                gap: 8px;
            }

            .category-btn {
                font-size: 0.8rem;
                padding: 6px 15px;
            }

            .summary-title {
                font-size: 0.9rem;
            }

            .contact-bar {
                flex-direction: column;
                align-items: flex-start;
            }
        }
    </style>
</head>
<body>
    <?php include 'include/header.php'; ?>

<div class="faq-container">
    <div class="faq-header">
        <h1>SR Plastic - Frequently Asked Questions</h1>
        <p>Find answers to the most common questions about our products and services</p>
    </div>

    <div class="categories">
        <button class="category-btn active">All</button>
        <button class="category-btn">Products</button>
        <button class="category-btn">Services</button>
        <button class="category-btn">Orders</button>
        <button class="category-btn">Sustainability</button>
    </div>

    <div class="faq-search">
        <i class="fas fa-search"></i>
        <input type="text" placeholder="Search frequently asked questions...">
    </div>

    <div class="accordion-list">
        <div class="accordion-item">
            <details>
                <summary>
                    <div class="summary-title">
                        <div class="summary-icon">
                            <i class="fas fa-box-open"></i>
                        </div>
                        What products does SR Plastic manufacture?
                    </div>
                    <i class="fas fa-chevron-right chevron-icon"></i>
                </summary>
                <div class="accordion-content">
                    <p>SR Plastic manufactures a wide range of premium plastic products including:</p>
                    <ul>
                        <li><strong>Packaging Solutions:</strong> Food containers, bottles, jars, caps</li>
                        <li><strong>Industrial Components:</strong> Custom parts for automotive, electronics</li>
                        <li><strong>Home & Garden:</strong> Storage solutions, planters, organization systems</li>
                        <li><strong>Construction Materials:</strong> PVC pipes, fittings, panels</li>
                    </ul>
                    <p>All our products are manufactured with high-grade polymers that ensure durability and reliability.</p>
                </div>
            </details>
        </div>

        <div class="accordion-item">
            <details>
                <summary>
                    <div class="summary-title">
                        <div class="summary-icon">
                            <i class="fas fa-cogs"></i>
                        </div>
                        What custom plastic molding services do you offer?
                    </div>
                    <i class="fas fa-chevron-right chevron-icon"></i>
                </summary>
                <div class="accordion-content">
                    <p>We specialize in comprehensive custom plastic molding services that include:</p>
                    <ul>
                        <li><strong>Injection Molding:</strong> Precision parts with complex geometries</li>
                        <li><strong>Blow Molding:</strong> Hollow plastic parts like bottles and containers</li>
                        <li><strong>Thermoforming:</strong> Creating products from plastic sheets</li>
                        <li><strong>Insert Molding:</strong> Combining plastic with other materials</li>
                        <li><strong>Prototype Development:</strong> Rapid prototyping services</li>
                    </ul>
                    <p>Our design team works closely with clients from concept to completion, ensuring your specifications are met with precision.</p>
                </div>
            </details>
        </div>

        <div class="accordion-item">
            <details>
                <summary>
                    <div class="summary-title">
                        <div class="summary-icon">
                            <i class="fas fa-industry"></i>
                        </div>
                        Which industries do you serve?
                    </div>
                    <i class="fas fa-chevron-right chevron-icon"></i>
                </summary>
                <div class="accordion-content">
                    <p>SR Plastic serves diverse industries with tailored plastic solutions:</p>
                    <ul>
                        <li><strong>Automotive:</strong> Interior components, under-hood parts</li>
                        <li><strong>FMCG:</strong> Packaging for consumer goods</li>
                        <li><strong>Agriculture:</strong> Irrigation systems, grow trays</li>
                        <li><strong>Healthcare:</strong> Medical-grade containers, components</li>
                        <li><strong>Electronics:</strong> Housings, connectors, protective cases</li>
                        <li><strong>Construction:</strong> Pipes, fittings, architectural elements</li>
                        <li><strong>Household:</strong> Storage solutions, kitchenware</li>
                    </ul>
                    <p>Each industry receives customized solutions that meet regulatory standards and performance requirements.</p>
                </div>
            </details>
        </div>

        <div class="accordion-item">
            <details>
                <summary>
                    <div class="summary-title">
                        <div class="summary-icon">
                            <i class="fas fa-shopping-cart"></i>
                        </div>
                        How can I place an order?
                    </div>
                    <i class="fas fa-chevron-right chevron-icon"></i>
                </summary>
                <div class="accordion-content">
                    <p>Placing an order with SR Plastic is simple and convenient. You can:</p>
                    <ul>
                        <li><strong>Online Portal:</strong> Use our secure client portal at <a href="#">client.srplastic.com</a></li>
                        <li><strong>Email:</strong> Send your requirements to <a href="mailto:orders@srplastic.com">orders@srplastic.com</a></li>
                        <li><strong>Phone:</strong> Call our sales team at +91-9876543210</li>
                        <li><strong>In-Person:</strong> Schedule a meeting with our sales representatives</li>
                    </ul>
                    <p>For bulk or custom orders, we recommend contacting our team directly to discuss specifications and receive a detailed quote.</p>
                </div>
            </details>
        </div>

        <div class="accordion-item">
            <details>
                <summary>
                    <div class="summary-title">
                        <div class="summary-icon">
                            <i class="fas fa-leaf"></i>
                        </div>
                        What eco-friendly solutions do you provide?
                    </div>
                    <i class="fas fa-chevron-right chevron-icon"></i>
                </summary>
                <div class="accordion-content">
                    <p>SR Plastic is committed to sustainability with our comprehensive eco-friendly initiatives:</p>
                    <ul>
                        <li><strong>Biodegradable Plastics:</strong> Products that decompose naturally</li>
                        <li><strong>Recycled Materials:</strong> Using post-consumer recycled (PCR) content</li>
                        <li><strong>Reduced Material Usage:</strong> Lightweight designs that reduce plastic consumption</li>
                        <li><strong>Energy-Efficient Manufacturing:</strong> Solar-powered facilities</li>
                        <li><strong>Water Conservation:</strong> Closed-loop cooling systems</li>
                        <li><strong>Take-Back Programs:</strong> Product end-of-life recovery systems</li>
                    </ul>
                    <p>Our GreenLine™ products are certified as environmentally friendly and meet international sustainability standards.</p>
                </div>
            </details>
        </div>

        <div class="accordion-item">
            <details>
                <summary>
                    <div class="summary-title">
                        <div class="summary-icon">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        What quality assurance processes do you follow?
                    </div>
                    <i class="fas fa-chevron-right chevron-icon"></i>
                </summary>
                <div class="accordion-content">
                    <p>Our comprehensive quality assurance system includes:</p>
                    <ul>
                        <li><strong>ISO 9001:2015 Certified:</strong> Standardized quality management system</li>
                        <li><strong>Raw Material Testing:</strong> Chemical composition and physical property verification</li>
                        <li><strong>In-Process Monitoring:</strong> Automated inspection at critical production stages</li>
                        <li><strong>Final Inspection:</strong> Dimensional accuracy, visual inspection, performance testing</li>
                        <li><strong>Batch Testing:</strong> Statistical sampling for consistent quality control</li>
                        <li><strong>Documentation:</strong> Complete traceability from raw materials to finished products</li>
                    </ul>
                    <p>We also maintain industry-specific certifications including FDA compliance for food-grade plastics and automotive industry standards.</p>
                </div>
            </details>
        </div>

        <div class="accordion-item">
            <details>
                <summary>
                    <div class="summary-title">
                        <div class="summary-icon">
                            <i class="fas fa-box"></i>
                        </div>
                        Can I request product samples?
                    </div>
                    <i class="fas fa-chevron-right chevron-icon"></i>
                </summary>
                <div class="accordion-content">
                    <p>Yes, we offer comprehensive sampling options:</p>
                    <ul>
                        <li><strong>Standard Products:</strong> Sample kits available for immediate shipping</li>
                        <li><strong>Custom Products:</strong> Prototype samples before bulk production</li>
                        <li><strong>Material Samples:</strong> Different grades and types of plastics</li>
                        <li><strong>Color Matching:</strong> Custom color sample development</li>
                    </ul>
                    <p>Samples can be requested through our website or by contacting our sales team. A nominal fee may apply for custom samples, which is credited toward your first order.</p>
                </div>
            </details>
        </div>

        <div class="accordion-item">
            <details>
                <summary>
                    <div class="summary-title">
                        <div class="summary-icon">
                            <i class="fas fa-truck"></i>
                        </div>
                        What are your shipping and delivery policies?
                    </div>
                    <i class="fas fa-chevron-right chevron-icon"></i>
                </summary>
                <div class="accordion-content">
                    <p>Our shipping and delivery information:</p>
                    <ul>
                        <li><strong>Standard Production:</strong> 7-14 business days for regular orders</li>
                        <li><strong>Express Production:</strong> 3-5 business days (additional charges apply)</li>
                        <li><strong>Domestic Shipping:</strong> 2-5 business days across India</li>
                        <li><strong>International Shipping:</strong> 7-21 days depending on destination</li>
                        <li><strong>Tracking:</strong> Real-time tracking through our client portal</li>
                        <li><strong>Bulk Orders:</strong> Scheduled deliveries to match your inventory needs</li>
                    </ul>
                    <p>We partner with reliable logistics providers and offer insurance options for all shipments.</p>
                </div>
            </details>
        </div>

        <div class="accordion-item">
            <details>
                <summary>
                    <div class="summary-title">
                        <div class="summary-icon">
                            <i class="fas fa-globe"></i>
                        </div>
                        Do you export products internationally?
                    </div>
                    <i class="fas fa-chevron-right chevron-icon"></i>
                </summary>
                <div class="accordion-content">
                    <p>Yes, SR Plastic has a robust international presence:</p>
                    <ul>
                        <li><strong>Global Reach:</strong> Exports to 45+ countries across 6 continents</li>
                        <li><strong>Compliance:</strong> Products meet international standards (EU, FDA, etc.)</li>
                        <li><strong>Documentation:</strong> We handle all export paperwork and certifications</li>
                        <li><strong>Logistics:</strong> Partnerships with international freight forwarders</li>
                        <li><strong>Warehousing:</strong> Strategic distribution centers in key markets</li>
                    </ul>
                    <p>Our international team provides localized support and ensures smooth customs clearance. We offer both air and sea freight options depending on your timeline and budget.</p>
                </div>
            </details>
        </div>

        <div class="accordion-item">
            <details>
                <summary>
                    <div class="summary-title">
                        <div class="summary-icon">
                            <i class="fas fa-hand-holding-usd"></i>
                        </div>
                        What payment methods do you accept?
                    </div>
                    <i class="fas fa-chevron-right chevron-icon"></i>
                </summary>
                <div class="accordion-content">
                    <p>We offer flexible payment options to accommodate different business needs:</p>
                    <ul>
                        <li><strong>Bank Transfer:</strong> Direct deposits to our business accounts</li>
                        <li><strong>Credit Cards:</strong> Visa, Mastercard, American Express</li>
                        <li><strong>Digital Payments:</strong> PayPal, Stripe, and local payment gateways</li>
                        <li><strong>Letter of Credit:</strong> For large international orders</li>
                        <li><strong>Payment Terms:</strong> Net 30/60 available for established clients</li>
                    </ul>
                    <p>For new customers, we typically require a 50% advance payment, with the balance due before shipping. Volume discounts are available for regular and bulk orders.</p>
                </div>
            </details>
        </div>

        <div class="accordion-item">
            <details>
                <summary>
                    <div class="summary-title">
                        <div class="summary-icon">
                            <i class="fas fa-handshake"></i>
                        </div>
                        Do you offer partnerships or distributor programs?
                    </div>
                    <i class="fas fa-chevron-right chevron-icon"></i>
                </summary>
                <div class="accordion-content">
                    <p>Yes, we have several partnership opportunities:</p>
                    <ul>
                        <li><strong>Authorized Distributors:</strong> Exclusive territory rights and marketing support</li>
                        <li><strong>OEM Partnerships:</strong> Custom manufacturing for your brand</li>
                        <li><strong>White Label Solutions:</strong> Ready-to-brand product lines</li>
                        <li><strong>Joint Development:</strong> Collaborative product innovation</li>
                        <li><strong>Industry Alliances:</strong> Strategic partnerships for specific sectors</li>
                    </ul>
                    <p>Partners receive preferential pricing, technical support, and access to our knowledge base. Contact our business development team at <a href="mailto:partnerships@srplastic.com">partnerships@srplastic.com</a> to discuss opportunities.</p>
                </div>
            </details>
        </div>
    </div>

    <div class="contact-bar">
        <div class="contact-method">
            <div class="contact-icon">
                <i class="fas fa-phone-alt"></i>
            </div>
            <div class="contact-text">
                <h4>Call Us</h4>
                <p>+91 9876543210</p>
            </div>
        </div>
        <div class="contact-method">
            <div class="contact-icon">
                <i class="fas fa-envelope"></i>
            </div>
            <div class="contact-text">
                <h4>Email Support</h4>
                <p>support@srplastic.com</p>
            </div>
        </div>
        <div class="contact-method">
            <div class="contact-icon">
                <i class="fas fa-comments"></i>
            </div>
            <div class="contact-text">
                <h4>Live Chat</h4>
                <p>Available 24/7</p>
            </div>
        </div>
    </div>
</div>

<script>
    // Add functionality to category buttons
    const categoryButtons = document.querySelectorAll('.category-btn');
    
    categoryButtons.forEach(button => {
        button.addEventListener('click', () => {
            // Remove active class from all buttons
            categoryButtons.forEach(btn => btn.classList.remove('active'));
            
            // Add active class to clicked button
            button.classList.add('active');
            
            // Filtering functionality would go here
            // This is just for UI demonstration
        });
    });
    
    // Add search functionality
    const searchInput = document.querySelector('.faq-search input');
    const accordionItems = document.querySelectorAll('.accordion-item');
    
    searchInput.addEventListener('input', (e) => {
        const searchTerm = e.target.value.toLowerCase();
        
        accordionItems.forEach(item => {
            const question = item.querySelector('summary').textContent.toLowerCase();
            const answer = item.querySelector('.accordion-content').textContent.toLowerCase();
            
            if (question.includes(searchTerm) || answer.includes(searchTerm)) {
                item.style.display = 'block';
            } else {
                item.style.display = 'none';
            }
        });
    });
</script>

</body>
</html> 