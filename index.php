<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LunaroHub - Professional Furniture Repair & Restoration Services</title>
    <meta name="description" content="Expert furniture repair and restoration services at LunaroHub. We specialize in antique restoration, upholstery repair, wood refinishing, and custom furniture solutions. Click here to continue reading about our comprehensive repair services for all types of furniture including chairs, tables, cabinets, and more.">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .main-container-xyz789 {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f8f9fa;
        }

        .header-section-abc123 {
            background: linear-gradient(135deg, #2c3e50, #34495e);
            color: white;
            padding: 1rem 0;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .nav-container-def456 {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 2rem;
        }

        .logo-text-ghi789 {
            font-size: 2rem;
            font-weight: bold;
            color: #ecf0f1;
        }

        .navigation-menu-jkl012 {
            display: flex;
            list-style: none;
            gap: 2rem;
        }

        .nav-link-mno345 {
            color: #ecf0f1;
            text-decoration: none;
            transition: color 0.3s ease;
            cursor: pointer;
        }

        .nav-link-mno345:hover {
            color: #3498db;
        }

        .hero-banner-pqr678 {
            background: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('https://images.pexels.com/photos/1350789/pexels-photo-1350789.jpeg') center/cover;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
            margin-top: 80px;
        }

        .hero-content-stu901 {
            max-width: 800px;
            padding: 2rem;
        }

        .hero-title-vwx234 {
            font-size: 3.5rem;
            margin-bottom: 1rem;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
        }

        .hero-subtitle-yza567 {
            font-size: 1.3rem;
            margin-bottom: 2rem;
            opacity: 0.9;
        }

        .cta-button-bcd890 {
            background: #e74c3c;
            color: white;
            padding: 15px 30px;
            border: none;
            border-radius: 5px;
            font-size: 1.1rem;
            cursor: pointer;
            transition: background 0.3s ease;
            text-decoration: none;
            display: inline-block;
        }

        .cta-button-bcd890:hover {
            background: #c0392b;
        }

        .content-section-efg123 {
            max-width: 1200px;
            margin: 0 auto;
            padding: 4rem 2rem;
        }

        .services-grid-hij456 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin: 3rem 0;
        }

        .service-card-klm789 {
            background: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }

        .service-card-klm789:hover {
            transform: translateY(-5px);
        }

        .service-icon-nop012 {
            width: 60px;
            height: 60px;
            background: #3498db;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1rem;
            font-size: 1.5rem;
            color: white;
        }

        .about-section-qrs345 {
            background: white;
            padding: 4rem 2rem;
            margin: 2rem 0;
            border-radius: 15px;
            box-shadow: 0 3px 20px rgba(0,0,0,0.1);
        }

        .history-timeline-tuv678 {
            position: relative;
            padding: 2rem 0;
        }

        .timeline-item-wxy901 {
            display: flex;
            margin-bottom: 2rem;
            align-items: center;
        }

        .timeline-year-zab234 {
            background: #2c3e50;
            color: white;
            padding: 10px 20px;
            border-radius: 25px;
            margin-right: 2rem;
            font-weight: bold;
            min-width: 80px;
            text-align: center;
        }

        .timeline-content-cde567 {
            flex: 1;
            background: #f8f9fa;
            padding: 1.5rem;
            border-radius: 10px;
            border-left: 4px solid #3498db;
        }

        .reviews-container-fgh890 {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            padding: 4rem 2rem;
            margin: 3rem 0;
            border-radius: 15px;
            color: white;
        }

        .review-grid-ijk123 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
        }

        .review-card-lmn456 {
            background: rgba(255,255,255,0.1);
            padding: 2rem;
            border-radius: 10px;
            backdrop-filter: blur(10px);
        }

        .reviewer-info-opq789 {
            display: flex;
            align-items: center;
            margin-top: 1rem;
        }

        .reviewer-avatar-rst012 {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            margin-right: 1rem;
            background: #3498db;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
        }

        .process-section-uvw345 {
            background: white;
            padding: 4rem 2rem;
            margin: 2rem 0;
            border-radius: 15px;
        }

        .process-steps-xyz678 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
        }

        .step-card-abc901 {
            text-align: center;
            padding: 2rem;
            border: 2px solid #ecf0f1;
            border-radius: 10px;
            transition: border-color 0.3s ease;
        }

        .step-card-abc901:hover {
            border-color: #3498db;
        }

        .step-number-def234 {
            width: 60px;
            height: 60px;
            background: #e74c3c;
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1rem;
            font-size: 1.5rem;
            font-weight: bold;
        }

        .specialties-grid-ghi567 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2rem;
            margin: 3rem 0;
        }

        .specialty-card-jkl890 {
            background: linear-gradient(135deg, #ff9a9e 0%, #fecfef 100%);
            padding: 2rem;
            border-radius: 15px;
            color: #2c3e50;
            text-align: center;
        }

        .contact-section-mno123 {
            background: #2c3e50;
            color: white;
            padding: 4rem 2rem;
            text-align: center;
        }

        .contact-info-pqr456 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
        }

        .contact-card-stu789 {
            background: rgba(255,255,255,0.1);
            padding: 2rem;
            border-radius: 10px;
        }

        .phone-link-vwx012 {
            color: #3498db;
            text-decoration: none;
            font-size: 1.2rem;
            font-weight: bold;
        }

        .footer-section-yza345 {
            background: #1a252f;
            color: #ecf0f1;
            padding: 3rem 2rem 1rem;
            text-align: center;
        }

        .modal-overlay-bcd678 {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.8);
            z-index: 2000;
        }

        .modal-content-efg901 {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: white;
            padding: 2rem;
            border-radius: 10px;
            max-width: 600px;
            max-height: 80vh;
            overflow-y: auto;
            width: 90%;
        }

        .close-modal-hij234 {
            position: absolute;
            top: 10px;
            right: 15px;
            font-size: 2rem;
            cursor: pointer;
            color: #999;
        }

        .expertise-showcase-klm567 {
            background: linear-gradient(45deg, #667eea, #764ba2);
            padding: 4rem 2rem;
            margin: 3rem 0;
            border-radius: 15px;
            color: white;
        }

        .expertise-grid-nop890 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
        }

        .expertise-item-qrs123 {
            background: rgba(255,255,255,0.1);
            padding: 2rem;
            border-radius: 10px;
            text-align: center;
        }

        .continue-link-tuv456 {
            color: #3498db;
            text-decoration: underline;
            cursor: pointer;
            font-weight: bold;
        }

        .continue-link-tuv456:hover {
            color: #2980b9;
        }

        .image-gallery-wxy789 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1rem;
            margin: 2rem 0;
        }

        .gallery-image-zab012 {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 10px;
            box-shadow: 0 3px 15px rgba(0,0,0,0.2);
        }

        @media (max-width: 768px) {
            .navigation-menu-jkl012 {
                display: none;
            }
            
            .hero-title-vwx234 {
                font-size: 2.5rem;
            }
            
            .nav-container-def456 {
                padding: 0 1rem;
            }
        }
    </style>
</head>
<body class="main-container-xyz789">
    <header class="header-section-abc123">
        <nav class="nav-container-def456">
            <div class="logo-text-ghi789">LunaroHub</div>
            <ul class="navigation-menu-jkl012">
                <li><a href="#services" class="nav-link-mno345">Services</a></li>
                <li><a href="#about" class="nav-link-mno345">About</a></li>
                <li><a href="#history" class="nav-link-mno345">History</a></li>
                <li><a href="#process" class="nav-link-mno345">Process</a></li>
                <li><a href="#specialties" class="nav-link-mno345">Specialties</a></li>
                <li><a href="#expertise" class="nav-link-mno345">Expertise</a></li>
                <li><a href="#reviews" class="nav-link-mno345">Reviews</a></li>
                <li><a href="#contact" class="nav-link-mno345">Contact</a></li>
                <li><a href="#" class="nav-link-mno345" onclick="showModal('privacy')">Privacy</a></li>
                <li><a href="#" class="nav-link-mno345" onclick="showModal('terms')">Terms</a></li>
            </ul>
        </nav>
    </header>

    <section class="hero-banner-pqr678">
        <div class="hero-content-stu901">
            <h1 class="hero-title-vwx234">Expert Furniture Repair Services</h1>
            <p class="hero-subtitle-yza567">Restoring beauty and functionality to your cherished furniture pieces with professional craftsmanship and attention to detail</p>
            <a href="#services" class="cta-button-bcd890">Explore Our Services</a>
        </div>
    </section>

    <main class="content-section-efg123">
        <section id="services">
            <h2 style="text-align: center; font-size: 2.5rem; margin-bottom: 2rem; color: #2c3e50;">Our Professional Services</h2>
            <div class="services-grid-hij456">
                <div class="service-card-klm789">
                    <div class="service-icon-nop012">🔨</div>
                    <h3>Wood Refinishing</h3>
                    <p>Complete restoration of wooden furniture surfaces, including sanding, staining, and protective coating application. We work with all wood types from oak to mahogany, bringing back the natural beauty of your pieces.</p>
                    <p><span class="continue-link-tuv456" onclick="showServiceDetails('wood')">Click here to continue</span> reading about our wood refinishing techniques.</p>
                </div>
                <div class="service-card-klm789">
                    <div class="service-icon-nop012">🪑</div>
                    <h3>Upholstery Repair</h3>
                    <p>Expert reupholstering services for chairs, sofas, and cushioned furniture. We handle fabric replacement, foam restoration, and structural repairs to extend the life of your upholstered pieces.</p>
                </div>
                <div class="service-card-klm789">
                    <div class="service-icon-nop012">⚒️</div>
                    <h3>Antique Restoration</h3>
                    <p>Specialized restoration services for valuable antique furniture, preserving historical integrity while ensuring structural soundness and usability for modern homes.</p>
                </div>
                <div class="service-card-klm789">
                    <div class="service-icon-nop012">🔧</div>
                    <h3>Structural Repairs</h3>
                    <p>Comprehensive structural repair services including joint reinforcement, leg replacement, drawer repair, and hardware restoration for all types of furniture.</p>
                </div>
                <div class="service-card-klm789">
                    <div class="service-icon-nop012">🎨</div>
                    <h3>Custom Finishing</h3>
                    <p>Personalized finishing options including custom stains, paint applications, and decorative techniques to match your specific style preferences and home decor.</p>
                </div>
                <div class="service-card-klm789">
                    <div class="service-icon-nop012">📐</div>
                    <h3>Furniture Modification</h3>
                    <p>Custom modifications and adaptations to existing furniture pieces, including size adjustments, hardware upgrades, and functional improvements.</p>
                </div>
            </div>
        </section>

        <section id="about" class="about-section-qrs345">
            <h2 style="text-align: center; font-size: 2.5rem; margin-bottom: 2rem; color: #2c3e50;">About LunaroHub</h2>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 3rem; align-items: center;">
                <div>
                    <p style="font-size: 1.1rem; margin-bottom: 1.5rem;">LunaroHub has been serving the community with exceptional furniture repair and restoration services for over two decades. Our team of skilled craftsmen combines traditional techniques with modern tools to deliver outstanding results.</p>
                    <p style="font-size: 1.1rem; margin-bottom: 1.5rem;">We understand that furniture holds both functional and sentimental value in your home. That's why we approach each project with meticulous care and attention to detail, ensuring your pieces are restored to their former glory.</p>
                    <p style="font-size: 1.1rem;">Our commitment to quality craftsmanship and customer satisfaction has made us the trusted choice for furniture repair in the region. <span class="continue-link-tuv456" onclick="showAboutDetails()">Click here to continue</span> learning about our mission and values.</p>
                </div>
                <div>
                    <img src="https://images.pexels.com/photos/6474471/pexels-photo-6474471.jpeg" alt="Furniture repair workshop" style="width: 100%; border-radius: 10px; box-shadow: 0 5px 15px rgba(0,0,0,0.2);">
                </div>
            </div>
        </section>

        <section id="history" class="history-timeline-tuv678">
            <h2 style="text-align: center; font-size: 2.5rem; margin-bottom: 3rem; color: #2c3e50;">Our Journey Through Time</h2>
            <div class="timeline-item-wxy901">
                <div class="timeline-year-zab234">2001</div>
                <div class="timeline-content-cde567">
                    <h3>Foundation Years</h3>
                    <p>LunaroHub was established by master craftsman Robert Chen in a small workshop, focusing on traditional wood restoration techniques passed down through generations.</p>
                </div>
            </div>
            <div class="timeline-item-wxy901">
                <div class="timeline-year-zab234">2005</div>
                <div class="timeline-content-cde567">
                    <h3>Expansion Phase</h3>
                    <p>Expanded services to include upholstery repair and began working with local interior designers and antique dealers, establishing our reputation for quality work.</p>
                </div>
            </div>
            <div class="timeline-item-wxy901">
                <div class="timeline-year-zab234">2010</div>
                <div class="timeline-content-cde567">
                    <h3>Modern Integration</h3>
                    <p>Integrated modern tools and techniques while maintaining traditional craftsmanship values. Opened our current facility with expanded workshop space and customer consultation areas.</p>
                </div>
            </div>
            <div class="timeline-item-wxy901">
                <div class="timeline-year-zab234">2015</div>
                <div class="timeline-content-cde567">
                    <h3>Specialization Growth</h3>
                    <p>Developed specialized services for antique restoration and began offering custom modification services to meet evolving customer needs.</p>
                </div>
            </div>
            <div class="timeline-item-wxy901">
                <div class="timeline-year-zab234">2020</div>
                <div class="timeline-content-cde567">
                    <h3>Digital Transformation</h3>
                    <p>Launched online consultation services and digital documentation processes, making our services more accessible while maintaining hands-on quality.</p>
                </div>
            </div>
        </section>

        <section id="process" class="process-section-uvw345">
            <h2 style="text-align: center; font-size: 2.5rem; margin-bottom: 2rem; color: #2c3e50;">Our Repair Process</h2>
            <p style="text-align: center; font-size: 1.1rem; margin-bottom: 3rem; color: #666;">We follow a systematic approach to ensure every piece receives the attention it deserves</p>
            <div class="process-steps-xyz678">
                <div class="step-card-abc901">
                    <div class="step-number-def234">1</div>
                    <h3>Initial Assessment</h3>
                    <p>Comprehensive evaluation of your furniture's condition, identifying all areas requiring attention and discussing your restoration goals.</p>
                </div>
                <div class="step-card-abc901">
                    <div class="step-number-def234">2</div>
                    <h3>Detailed Planning</h3>
                    <p>Creating a customized repair plan with timeline estimates and material specifications tailored to your piece's unique requirements.</p>
                </div>
                <div class="step-card-abc901">
                    <div class="step-number-def234">3</div>
                    <h3>Expert Restoration</h3>
                    <p>Skilled craftsmen perform the restoration work using appropriate techniques and high-quality materials to ensure lasting results.</p>
                </div>
                <div class="step-card-abc901">
                    <div class="step-number-def234">4</div>
                    <h3>Quality Inspection</h3>
                    <p>Thorough quality check and finishing touches to ensure the restored piece meets our high standards and your expectations.</p>
                </div>
                <div class="step-card-abc901">
                    <div class="step-number-def234">5</div>
                    <h3>Final Delivery</h3>
                    <p>Careful packaging and delivery of your restored furniture, along with maintenance tips to preserve the restoration work.</p>
                </div>
            </div>
        </section>

        <section id="specialties" class="specialties-grid-ghi567">
            <div class="specialty-card-jkl890">
                <h3>Vintage Chair Restoration</h3>
                <p>Specializing in mid-century modern chairs, Windsor chairs, and vintage dining sets. We restore both the structural integrity and aesthetic appeal of these timeless pieces.</p>
                <img src="https://images.pexels.com/photos/1866149/pexels-photo-1866149.jpeg" alt="Vintage chair restoration" style="width: 100%; height: 150px; object-fit: cover; border-radius: 8px; margin-top: 1rem;">
            </div>
            <div class="specialty-card-jkl890">
                <h3>Table Surface Refinishing</h3>
                <p>Expert refinishing of dining tables, coffee tables, and desk surfaces. We remove scratches, water damage, and wear marks to restore smooth, beautiful surfaces.</p>
                <img src="https://images.pexels.com/photos/1571460/pexels-photo-1571460.jpeg" alt="Table refinishing" style="width: 100%; height: 150px; object-fit: cover; border-radius: 8px; margin-top: 1rem;">
            </div>
            <div class="specialty-card-jkl890">
                <h3>Cabinet Door Repair</h3>
                <p>Comprehensive cabinet restoration including door alignment, hinge replacement, drawer slide repair, and surface refinishing for kitchen and storage cabinets.</p>
                <img src="https://images.pexels.com/photos/2724749/pexels-photo-2724749.jpeg" alt="Cabinet repair" style="width: 100%; height: 150px; object-fit: cover; border-radius: 8px; margin-top: 1rem;">
            </div>
            <div class="specialty-card-jkl890">
                <h3>Sofa Frame Reinforcement</h3>
                <p>Structural repair and reinforcement of sofa and loveseat frames, including spring replacement, webbing repair, and cushion restoration services.</p>
                <p style="margin-top: 1rem;"><span class="continue-link-tuv456" onclick="showSpecialtyDetails()">Click here to continue</span> exploring our specialty services.</p>
            </div>
        </section>

        <section id="expertise" class="expertise-showcase-klm567">
            <h2 style="text-align: center; font-size: 2.5rem; margin-bottom: 2rem;">Areas of Expertise</h2>
            <div class="expertise-grid-nop890">
                <div class="expertise-item-qrs123">
                    <h3>Wood Species Knowledge</h3>
                    <p>Extensive experience working with various wood types including oak, maple, cherry, walnut, pine, and exotic hardwoods. Each species requires specific treatment approaches.</p>
                </div>
                <div class="expertise-item-qrs123">
                    <h3>Joinery Techniques</h3>
                    <p>Master-level skills in traditional joinery methods including dovetail, mortise and tenon, and modern fastening systems for durable repairs.</p>
                </div>
                <div class="expertise-item-qrs123">
                    <h3>Finish Applications</h3>
                    <p>Professional application of various finishes including lacquer, polyurethane, shellac, and oil-based stains for optimal protection and appearance.</p>
                </div>
                <div class="expertise-item-qrs123">
                    <h3>Fabric and Upholstery</h3>
                    <p>Comprehensive knowledge of upholstery materials, patterns, and installation techniques for both traditional and contemporary styles.</p>
                </div>
                <div class="expertise-item-qrs123">
                    <h3>Hardware Restoration</h3>
                    <p>Restoration and replacement of furniture hardware including hinges, handles, locks, and decorative elements to maintain authenticity.</p>
                </div>
                <div class="expertise-item-qrs123">
                    <h3>Color Matching</h3>
                    <p>Expert color matching and blending techniques to seamlessly integrate repairs with existing finishes and maintain visual consistency.</p>
                </div>
            </div>
        </section>

        <div class="image-gallery-wxy789">
            <img src="https://images.pexels.com/photos/6474468/pexels-photo-6474468.jpeg" alt="Furniture restoration work" class="gallery-image-zab012">
            <img src="https://images.pexels.com/photos/5974266/pexels-photo-5974266.jpeg" alt="Wood working tools" class="gallery-image-zab012">
            <img src="https://images.pexels.com/photos/5974264/pexels-photo-5974264.jpeg" alt="Craftsman at work" class="gallery-image-zab012">
            <img src="https://images.pexels.com/photos/1571453/pexels-photo-1571453.jpeg" alt="Restored furniture piece" class="gallery-image-zab012">
        </div>

        <section id="reviews" class="reviews-container-fgh890">
            <h2 style="text-align: center; font-size: 2.5rem; margin-bottom: 2rem;">Customer Reviews</h2>
            <div class="review-grid-ijk123">
                <div class="review-card-lmn456">
                    <p>"The team at LunaroHub transformed my grandmother's antique dining table. The attention to detail was incredible, and they preserved all the original character while making it functional again."</p>
                    <div class="reviewer-info-opq789">
                        <div class="reviewer-avatar-rst012">SM</div>
                        <div>
                            <strong>Sarah Mitchell</strong><br>
                            <small>Verified Customer</small>
                        </div>
                    </div>
                </div>
                <div class="review-card-lmn456">
                    <p>"Outstanding craftsmanship! They repaired my office chair that I thought was beyond saving. The structural work was perfect and the refinishing looks brand new."</p>
                    <div class="reviewer-info-opq789">
                        <div class="reviewer-avatar-rst012">DJ</div>
                        <div>
                            <strong>David Johnson</strong><br>
                            <small>Verified Customer</small>
                        </div>
                    </div>
                </div>
                <div class="review-card-lmn456">
                    <p>"Professional service from start to finish. They explained every step of the process and delivered exactly what they promised. My kitchen cabinets look amazing!"</p>
                    <div class="reviewer-info-opq789">
                        <div class="reviewer-avatar-rst012">ER</div>
                        <div>
                            <strong>Emily Rodriguez</strong><br>
                            <small>Verified Customer</small>
                        </div>
                    </div>
                </div>
                <div class="review-card-lmn456">
                    <p>"I've used LunaroHub multiple times for different pieces. Their consistency and quality never disappoint. Highly recommend for any furniture restoration needs."</p>
                    <div class="reviewer-info-opq789">
                        <div class="reviewer-avatar-rst012">MK</div>
                        <div>
                            <strong>Michael Kim</strong><br>
                            <small>Verified Customer</small>
                        </div>
                    </div>
                </div>
                <div class="review-card-lmn456">
                                        <p>"The upholstery work on my vintage sofa exceeded expectations. They matched the fabric perfectly and the cushions feel like new. Worth every penny!"</p>
                    <div class="reviewer-info-opq789">
                        <div class="reviewer-avatar-rst012">LT</div>
                        <div>
                            <strong>Lisa Thompson</strong><br>
                            <small>Verified Customer</small>
                        </div>
                    </div>
                </div>
                <div class="review-card-lmn456">
                    <p>"Fast turnaround time and excellent communication throughout the process. They kept me updated and delivered on schedule. The bookshelf repair looks fantastic."</p>
                    <div class="reviewer-info-opq789">
                        <div class="reviewer-avatar-rst012">JW</div>
                        <div>
                            <strong>James Wilson</strong><br>
                            <small>Verified Customer</small>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section style="background: white; padding: 4rem 2rem; margin: 3rem 0; border-radius: 15px; box-shadow: 0 5px 20px rgba(0,0,0,0.1);">
            <h2 style="text-align: center; font-size: 2.5rem; margin-bottom: 2rem; color: #2c3e50;">Why Choose Professional Furniture Repair?</h2>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem;">
                <div style="padding: 2rem; background: #f8f9fa; border-radius: 10px; border-left: 4px solid #e74c3c;">
                    <h3 style="color: #2c3e50; margin-bottom: 1rem;">Cost-Effective Solution</h3>
                    <p>Repairing quality furniture is often more economical than purchasing new pieces, especially for solid wood and well-constructed items. Professional restoration can extend furniture life by decades.</p>
                </div>
                <div style="padding: 2rem; background: #f8f9fa; border-radius: 10px; border-left: 4px solid #3498db;">
                    <h3 style="color: #2c3e50; margin-bottom: 1rem;">Environmental Benefits</h3>
                    <p>Furniture repair reduces waste and supports sustainable living practices. By restoring existing pieces, we help minimize the environmental impact of furniture disposal and manufacturing.</p>
                </div>
                <div style="padding: 2rem; background: #f8f9fa; border-radius: 10px; border-left: 4px solid #27ae60;">
                    <h3 style="color: #2c3e50; margin-bottom: 1rem;">Preserving Memories</h3>
                    <p>Many furniture pieces hold sentimental value and family history. Professional restoration allows you to preserve these meaningful connections while ensuring continued functionality.</p>
                    <p style="margin-top: 1rem;"><span class="continue-link-tuv456" onclick="showBenefitsDetails()">Click here to continue</span> reading about restoration benefits.</p>
                </div>
            </div>
        </section>

        <section style="background: linear-gradient(135deg, #ff7e5f, #feb47b); padding: 4rem 2rem; margin: 3rem 0; border-radius: 15px; color: white;">
            <h2 style="text-align: center; font-size: 2.5rem; margin-bottom: 2rem;">Common Furniture Problems We Solve</h2>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 2rem; margin-top: 2rem;">
                <div style="background: rgba(255,255,255,0.1); padding: 2rem; border-radius: 10px; backdrop-filter: blur(10px);">
                    <h3 style="margin-bottom: 1rem;">Scratches and Dents</h3>
                    <p>Surface damage from daily use, pet scratches, or accidental impacts. We use specialized techniques to blend repairs seamlessly with existing finishes.</p>
                </div>
                <div style="background: rgba(255,255,255,0.1); padding: 2rem; border-radius: 10px; backdrop-filter: blur(10px);">
                    <h3 style="margin-bottom: 1rem;">Loose Joints</h3>
                    <p>Structural weakening over time causing wobbling or instability. Our reinforcement methods restore original strength and stability.</p>
                </div>
                <div style="background: rgba(255,255,255,0.1); padding: 2rem; border-radius: 10px; backdrop-filter: blur(10px);">
                    <h3 style="margin-bottom: 1rem;">Water Damage</h3>
                    <p>White rings, dark stains, or warping from moisture exposure. We employ various restoration techniques depending on damage severity.</p>
                </div>
                <div style="background: rgba(255,255,255,0.1); padding: 2rem; border-radius: 10px; backdrop-filter: blur(10px);">
                    <h3 style="margin-bottom: 1rem;">Worn Upholstery</h3>
                    <p>Faded, torn, or stained fabric and cushions. Complete reupholstering services with fabric selection assistance and foam replacement.</p>
                </div>
                <div style="background: rgba(255,255,255,0.1); padding: 2rem; border-radius: 10px; backdrop-filter: blur(10px);">
                    <h3 style="margin-bottom: 1rem;">Broken Hardware</h3>
                    <p>Damaged hinges, handles, or drawer slides affecting functionality. We source matching or compatible replacement hardware.</p>
                </div>
                <div style="background: rgba(255,255,255,0.1); padding: 2rem; border-radius: 10px; backdrop-filter: blur(10px);">
                    <h3 style="margin-bottom: 1rem;">Finish Deterioration</h3>
                    <p>Peeling, cracking, or faded protective coatings. Complete refinishing services to restore protection and appearance.</p>
                </div>
            </div>
        </section>

        <section style="background: white; padding: 4rem 2rem; margin: 3rem 0; border-radius: 15px;">
            <h2 style="text-align: center; font-size: 2.5rem; margin-bottom: 3rem; color: #2c3e50;">Furniture Care Tips</h2>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem;">
                <div style="padding: 2rem; border: 2px solid #ecf0f1; border-radius: 10px; transition: border-color 0.3s ease;" onmouseover="this.style.borderColor='#3498db'" onmouseout="this.style.borderColor='#ecf0f1'">
                    <h3 style="color: #e74c3c; margin-bottom: 1rem;">Regular Cleaning</h3>
                    <p>Dust furniture weekly with a soft, dry cloth. Use appropriate cleaners for different materials and avoid harsh chemicals that can damage finishes.</p>
                </div>
                <div style="padding: 2rem; border: 2px solid #ecf0f1; border-radius: 10px; transition: border-color 0.3s ease;" onmouseover="this.style.borderColor='#3498db'" onmouseout="this.style.borderColor='#ecf0f1'">
                    <h3 style="color: #e74c3c; margin-bottom: 1rem;">Climate Control</h3>
                    <p>Maintain consistent humidity levels and avoid placing furniture near heat sources or in direct sunlight to prevent warping and fading.</p>
                </div>
                <div style="padding: 2rem; border: 2px solid #ecf0f1; border-radius: 10px; transition: border-color 0.3s ease;" onmouseover="this.style.borderColor='#3498db'" onmouseout="this.style.borderColor='#ecf0f1'">
                    <h3 style="color: #e74c3c; margin-bottom: 1rem;">Protective Measures</h3>
                    <p>Use coasters, placemats, and furniture pads to prevent scratches and water damage. Rotate cushions regularly for even wear.</p>
                </div>
                <div style="padding: 2rem; border: 2px solid #ecf0f1; border-radius: 10px; transition: border-color 0.3s ease;" onmouseover="this.style.borderColor='#3498db'" onmouseout="this.style.borderColor='#ecf0f1'">
                    <h3 style="color: #e74c3c; margin-bottom: 1rem;">Professional Maintenance</h3>
                    <p>Schedule periodic professional inspections and maintenance to address minor issues before they become major problems requiring extensive repairs.</p>
                </div>
            </div>
        </section>

        <section style="background: #34495e; color: white; padding: 4rem 2rem; margin: 3rem 0; border-radius: 15px;">
            <h2 style="text-align: center; font-size: 2.5rem; margin-bottom: 2rem;">Our Workshop Capabilities</h2>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 2rem; margin-top: 2rem;">
                <div style="text-align: center; padding: 2rem;">
                    <div style="width: 80px; height: 80px; background: #e74c3c; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem; font-size: 2rem;">🏭</div>
                    <h3>5000 sq ft Facility</h3>
                    <p>Spacious workshop equipped with professional-grade tools and equipment for handling projects of all sizes.</p>
                </div>
                <div style="text-align: center; padding: 2rem;">
                    <div style="width: 80px; height: 80px; background: #3498db; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem; font-size: 2rem;">🔧</div>
                    <h3>Advanced Tools</h3>
                    <p>State-of-the-art woodworking machinery, precision measuring instruments, and specialized restoration equipment.</p>
                </div>
                <div style="text-align: center; padding: 2rem;">
                    <div style="width: 80px; height: 80px; background: #27ae60; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem; font-size: 2rem;">🎨</div>
                    <h3>Finishing Booth</h3>
                    <p>Climate-controlled finishing area ensuring optimal conditions for staining, painting, and protective coating applications.</p>
                </div>
                <div style="text-align: center; padding: 2rem;">
                    <div style="width: 80px; height: 80px; background: #f39c12; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem; font-size: 2rem;">📦</div>
                    <h3>Storage Areas</h3>
                    <p>Secure storage for customer pieces during restoration and climate-controlled material storage for optimal quality.</p>
                </div>
            </div>
        </section>
    </main>

    <section id="contact" class="contact-section-mno123">
        <h2 style="font-size: 2.5rem; margin-bottom: 2rem;">Get In Touch</h2>
        <p style="font-size: 1.2rem; margin-bottom: 3rem;">Ready to restore your furniture? Contact us today for a consultation</p>
        <div class="contact-info-pqr456">
            <div class="contact-card-stu789">
                <h3>Phone</h3>
                <a href="tel:+15551234567" class="phone-link-vwx012">+1 (555) 123-4567</a>
                <p style="margin-top: 0.5rem;">Call for immediate assistance</p>
            </div>
            <div class="contact-card-stu789">
                <h3>Email</h3>
                <p style="color: #3498db; font-size: 1.1rem;">info@lunarohub.com</p>
                <p style="margin-top: 0.5rem;">Send us your project details</p>
            </div>
            <div class="contact-card-stu789">
                <h3>Address</h3>
                <p>2847 Oakwood Drive<br>Springfield, IL 62701</p>
                <p style="margin-top: 0.5rem;">Visit our workshop</p>
            </div>
            <div class="contact-card-stu789">
                <h3>Hours</h3>
                <p>Monday - Friday: 8AM - 6PM<br>Saturday: 9AM - 4PM<br>Sunday: Closed</p>
            </div>
        </div>
    </section>

    <footer class="footer-section-yza345">
        <div style="max-width: 1200px; margin: 0 auto;">
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 2rem; margin-bottom: 2rem;">
                <div>
                    <h3 style="margin-bottom: 1rem; color: #3498db;">LunaroHub</h3>
                    <p>Professional furniture repair and restoration services with over 20 years of experience in the industry.</p>
                </div>
                <div>
                    <h4 style="margin-bottom: 1rem;">Quick Links</h4>
                    <p><a href="#services" style="color: #bdc3c7; text-decoration: none;">Services</a></p>
                    <p><a href="#about" style="color: #bdc3c7; text-decoration: none;">About Us</a></p>
                    <p><a href="#contact" style="color: #bdc3c7; text-decoration: none;">Contact</a></p>
                </div>
                <div>
                    <h4 style="margin-bottom: 1rem;">Contact Info</h4>
                    <p>📞 <a href="tel:+15551234567" style="color: #3498db; text-decoration: none;">+1 (555) 123-4567</a></p>
                    <p>✉️ info@lunarohub.com</p>
                    <p>📍 2847 Oakwood Drive, Springfield, IL</p>
                </div>
            </div>
            <hr style="border: none; height: 1px; background: #34495e; margin: 2rem 0;">
            <p style="text-align: center; color: #95a5a6;">© 2024 LunaroHub. All rights reserved. | <a href="#" onclick="showModal('privacy')" style="color: #3498db; text-decoration: none;">Privacy Policy</a> | <a href="#" onclick="showModal('terms')" style="color: #3498db; text-decoration: none;">Terms of Service</a></p>
        </div>
    </footer>

    <!-- Privacy Policy Modal -->
    <div id="privacy-modal" class="modal-overlay-bcd678">
        <div class="modal-content-efg901">
            <span class="close-modal-hij234" onclick="closeModal('privacy')">×</span>
            <h2>Privacy Policy</h2>
            <p><strong>Last updated: January 2024</strong></p>
            
            <h3>Information We Collect</h3>
            <p>We collect information you provide directly to us, such as when you contact us for services, request quotes, or communicate with us. This may include your name, email address, phone number, and details about your furniture repair needs.</p>
            
            <h3>How We Use Your Information</h3>
            <p>We use the information we collect to provide, maintain, and improve our services, communicate with you about your projects, respond to your inquiries, and send you relevant information about our services.</p>
            
            <h3>Information Sharing</h3>
            <p>We do not sell, trade, or otherwise transfer your personal information to third parties without your consent, except as described in this policy or as required by law.</p>
            
            <h3>Data Security</h3>
            <p>We implement appropriate security measures to protect your personal information against unauthorized access, alteration, disclosure, or destruction.</p>
            
            <h3>Contact Us</h3>
            <p>If you have questions about this Privacy Policy, please contact us at info@lunarohub.com or call +1 (555) 123-4567.</p>
        </div>
    </div>

    <!-- Terms of Service Modal -->
    <div id="terms-modal" class="modal-overlay-bcd678">
        <div class="modal-content-efg901">
            <span class="close-modal-hij234" onclick="closeModal('terms')">×</span>
            <h2>Terms of Service</h2>
            <p><strong>Last updated: January 2024</strong></p>
            
            <h3>Service Agreement</h3>
            <p>By engaging our services, you agree to these terms. LunaroHub provides furniture repair and restoration services as described in individual project agreements.</p>
            
            <h3>Project Estimates</h3>
            <p>All estimates are provided in good faith based on initial assessment. Final costs may vary depending on discovered conditions during the repair process. We will communicate any significant changes before proceeding.</p>
            
            <h3>Customer Responsibilities</h3>
            <p>Customers are responsible for providing accurate information about furniture condition and history. Items must be delivered to our facility unless pickup service is arranged.</p>
            
            <h3>Warranty</h3>
            <p>We warrant our workmanship for 12 months from completion date. This warranty covers defects in our repair work but does not cover normal wear or damage from misuse.</p>
            
            <h3>Limitation of Liability</h3>
            <p>Our liability is limited to the cost of the repair service provided. We are not responsible for pre-existing damage or conditions not disclosed during initial assessment.</p>
            
            <h3>Dispute Resolution</h3>
            <p>Any disputes will be resolved through binding arbitration in Springfield, Illinois, under the rules of the American Arbitration Association.</p>
        </div>
    </div>

    <script>
        function showModal(type) {
            document.getElementById(type + '-modal').style.display = 'block';
        }

        function closeModal(type) {
            document.getElementById(type + '-modal').style.display = 'none';
        }

        function showServiceDetails(service) {
            alert('Our ' + service + ' refinishing process includes comprehensive surface preparation, expert stain application, and multiple protective coating layers for lasting durability and beauty.');
        }

        function showAboutDetails() {
            alert('Our mission is to preserve the beauty and functionality of furniture while providing exceptional customer service. We believe every piece has a story worth preserving.');
        }

        function showSpecialtyDetails() {
            alert('Our specialty services extend to custom furniture modifications, antique hardware restoration, and period-appropriate finishing techniques for historical accuracy.');
        }

        function showBenefitsDetails() {
            alert('Professional furniture restoration also maintains the original craftsmanship quality that is often superior to modern mass-produced alternatives, ensuring your pieces remain functional and beautiful for generations.');
        }

        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Close modal when clicking outside
        window.onclick = function(event) {
            if (event.target.classList.contains('modal-overlay-bcd678')) {
                event.target.style.display = 'none';
            }
        }

        // Add some interactive elements
        document.addEventListener('DOMContentLoaded', function() {
            // Add hover effects to service cards
            const serviceCards = document.querySelectorAll('.service-card-klm789');
            serviceCards.forEach(card => {
                card.addEventListener('mouseenter', function() {
                    this.style.boxShadow = '0 10px 25px rgba(0,0,0,0.15)';
                });
                card.addEventListener('mouseleave', function() {
                    this.style.boxShadow = '0 5px 15px rgba(0,0,0,0.1)';
                });
            });
        });
    </script>
</body>
</html>

