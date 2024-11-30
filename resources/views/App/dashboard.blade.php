<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ChasoulUIX Project Portfolio</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            min-height: 100vh;
            background-color: #121212;
            color: #ffffff;
            font-family: 'Inter', sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .container {
            width: 100%;
            max-width: 680px;
            margin: 0 auto;
            padding: 20px;
            text-align: center;
            box-sizing: border-box;
        }

        .profile-image {
            width: 96px;
            height: 96px;
            border-radius: 50%;
            margin-bottom: 15px;
            opacity: 0;
            transform: scale(0.8);
            animation: zoomIn 0.6s ease forwards;
        }

        .profile-name {
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 10px;
            opacity: 0;
            transform: scale(0.8);
            animation: zoomIn 0.6s ease 0.2s forwards;
        }

        .profile-bio {
            color: #888;
            margin-bottom: 30px;
            font-size: 14px;
            opacity: 0;
            transform: scale(0.8);
            animation: zoomIn 0.6s ease 0.4s forwards;
        }

        .links-container {
            display: flex;
            flex-direction: column;
            gap: 16px;
            width: 100%;
            max-width: 480px;
            margin: 0 auto;
        }

        .link-item {
            background-color: #1e1e1e;
            padding: 16px;
            border-radius: 8px;
            text-decoration: none;
            color: #ffffff;
            transition: transform 0.2s, background-color 0.2s;
            border: 1px solid #333;
        }

        .link-item:hover {
            transform: translateY(-2px);
            background-color: #2d2d2d;
        }

        .social-icons {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-top: 30px;
            flex-wrap: wrap;
            opacity: 0;
            transform: scale(0.8);
            animation: zoomIn 0.6s ease 0.6s forwards;
        }

        .social-icon {
            color: #888;
            text-decoration: none;
            font-size: 20px;
            transition: color 0.2s;
        }

        .social-icon:hover {
            color: #ffffff;
        }

        .subdomain-card:hover {
            transform: translateY(-5px);
            background-color: #2d2d2d;
        }

        /* Floating Chat Button */
        .floating-chat {
            position: fixed;
            bottom: 20px;
            right: 20px;
            width: 55px;
            height: 55px;
            background-color: #FF2D20;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-decoration: none;
            box-shadow: 0 4px 12px rgba(0,0,0,0.15);
            transition: all 0.3s ease;
            z-index: 1000;
            animation: pulse 2s infinite;
        }

        .floating-chat:hover {
            transform: scale(1.1);
            background-color: #ff4538;
        }

        .floating-chat i {
            font-size: 18px;
        }

        @keyframes pulse {
            0% {
                box-shadow: 0 0 0 0 rgba(255, 45, 32, 0.4);
            }
            70% {
                box-shadow: 0 0 0 10px rgba(255, 45, 32, 0);
            }
            100% {
                box-shadow: 0 0 0 0 rgba(255, 45, 32, 0);
            }
        }

        @keyframes rgbText {
            0% { background-position: 0% 50%; }
            100% { background-position: 300% 50%; }
        }

        @keyframes borderAnimation {
            0% { border: 2px solid rgb(255, 0, 0); }
            33% { border: 2px solid rgb(0, 255, 0); }
            66% { border: 2px solid rgb(0, 0, 255); }
            100% { border: 2px solid rgb(255, 0, 0); }
        }

        @keyframes zoomIn {
            from {
                opacity: 0;
                transform: scale(0.8);
            }
            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        .animate-on-scroll {
            opacity: 0;
            transform: scale(0.8);
            transition: all 0.6s ease;
        }

        .animate-on-scroll.visible {
            opacity: 1;
            transform: scale(1);
        }

        /* Responsive Styles */
        @media screen and (max-width: 768px) {
            .container {
                padding: 15px;
            }

            .skills-container {
                gap: 6px !important;
            }

            .skill-badge {
                font-size: 11px !important;
            }

            .subdomain-cards {
                grid-template-columns: repeat(2, 1fr) !important;
                gap: 10px !important;
            }

            .projects-grid {
                gap: 15px !important;
            }

            .project-card {
                width: 220px !important;
                padding: 15px !important;
            }

            .project-card img {
                height: 150px !important;
            }

            .project-card h3 {
                font-size: 16px !important;
            }

            .project-card p {
                font-size: 13px !important;
            }

            .project-tags span {
                font-size: 11px !important;
                padding: 4px 8px !important;
            }
        }

        @media screen and (max-width: 480px) {
            .project-card {
                width: 220px !important;
            }
            
            .subdomain-cards {
                grid-template-columns: repeat(2, 1fr) !important;
            }
        }
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                    }
                });
            }, {
                threshold: 0.1
            });

            document.querySelectorAll('.animate-on-scroll').forEach((element) => {
                observer.observe(element);
            });
        });
    </script>
</head>
<body>
    <!-- Floating Chat Button -->
    <a href="#reviews-section" class="floating-chat" onclick="event.preventDefault(); document.querySelector('#reviews-section').scrollIntoView({behavior: 'smooth'});">
        <i class="fas fa-comments"></i>
    </a>

    <div class="container">
        <img src="{{ asset('images/me.jpeg') }}" alt="Profile Picture" class="profile-image">
        <div class="profile-name">Chasoul UIX</div>
        <div class="profile-bio" style="font-weight: bold; margin-bottom: 5px;">Full Stack Website n mobile developer</div>
        <div class="profile-bio" style="margin-top: 0; margin-bottom: 5px;">Former Talent Scout at Creative Agency 2021</div>
        <div class="profile-bio" style="margin-top: 0; margin-bottom: 15px;">Freelancer | Content Creator</div>

        <div class="social-icons" style="margin-top: 15px;">
            <a href="https://tiktok.com/@chasoul.uix" class="social-icon">
                <i class="fab fa-tiktok"></i>
            </a>
            <a href="https://instagram.com/chasoul.uix" class="social-icon">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="https://youtube.com/@chasoul.uix" class="social-icon">
                <i class="fab fa-youtube"></i>
            </a>
            <a href="https://linkedin.com/in/chasoul-uix" class="social-icon">
                <i class="fab fa-linkedin"></i>
            </a>
        </div>

        <div class="stats-container animate-on-scroll" style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 10px; margin: 15px 0;">
            <div class="stat-item" style="background: #1e1e1e; padding: 10px; border-radius: 10px; text-align: center; box-shadow: 0 2px 4px rgba(0,0,0,0.2); border: 1px solid #333; transition: all 0.3s ease; position: relative; overflow: hidden;">
                <div style="position: absolute; top: -10px; right: -10px; font-size: 30px; opacity: 0.1; color: #4FC08D;">
                    <i class="fas fa-users"></i>
                </div>
                <div style="font-size: 18px; font-weight: 800; color: #4FC08D; margin-bottom: 5px;">50+</div>
                <div style="color: #888; font-size: 10px; text-transform: uppercase; letter-spacing: 1px;">
                    Clients
                </div>
            </div>
            <div class="stat-item" style="background: #1e1e1e; padding: 10px; border-radius: 10px; text-align: center; box-shadow: 0 2px 4px rgba(0,0,0,0.2); border: 1px solid #333; transition: all 0.3s ease; position: relative; overflow: hidden;">
                <div style="position: absolute; top: -10px; right: -10px; font-size: 30px; opacity: 0.1; color: #61DAFB;">
                    <i class="fas fa-tasks"></i>
                </div>
                <div style="font-size: 18px; font-weight: 800; color: #61DAFB; margin-bottom: 5px;">{{ $githubRepos ?? '200+' }}</div>
                <div style="color: #888; font-size: 10px; text-transform: uppercase; letter-spacing: 1px;">
                    Projects
                </div>
            </div>
            <div class="stat-item" style="background: #1e1e1e; padding: 10px; border-radius: 10px; text-align: center; box-shadow: 0 2px 4px rgba(0,0,0,0.2); border: 1px solid #333; transition: all 0.3s ease; position: relative; overflow: hidden;">
                <div style="position: absolute; top: -10px; right: -10px; font-size: 30px; opacity: 0.1; color: #FF2D20;">
                    <i class="fas fa-star"></i>
                </div>
                <div style="font-size: 18px; font-weight: 800; color: #FF2D20; margin-bottom: 5px;">3+</div>
                <div style="color: #888; font-size: 10px; text-transform: uppercase; letter-spacing: 1px;">
                    Years Exp
                </div>
            </div>
        </div>

        <div class="skills-container animate-on-scroll" style="display: flex; flex-wrap: wrap; justify-content: center; gap: 8px; margin: 15px 0;">
            <div class="skill-badge" style="background: #02569B; color: white; padding: 4px 8px; border-radius: 15px; font-size: 12px;">
                <i class="fab fa-flutter"></i> Flutter
            </div>
            <div class="skill-badge" style="background: #61DAFB; color: #000; padding: 4px 8px; border-radius: 15px; font-size: 12px;">
                <i class="fab fa-react"></i> React JS
            </div>
            <div class="skill-badge" style="background: #FF2D20; color: white; padding: 4px 8px; border-radius: 15px; font-size: 12px;">
                <i class="fab fa-laravel"></i> Laravel
            </div>
            <div class="skill-badge" style="background: #000000; color: white; padding: 4px 8px; border-radius: 15px; font-size: 12px;">
                <i class="fab fa-node-js"></i> Express JS
            </div>
            <div class="skill-badge" style="background: #4FC08D; color: white; padding: 4px 8px; border-radius: 15px; font-size: 12px;">
                <i class="fab fa-vuejs"></i> Vue JS
            </div>
            <div class="skill-badge" style="background: #00758F; color: white; padding: 4px 8px; border-radius: 15px; font-size: 12px;">
                <i class="fas fa-database"></i> MySQL
            </div>
            <div class="skill-badge" style="background: #00ADD8; color: white; padding: 4px 8px; border-radius: 15px; font-size: 12px;">
                <i class="fab fa-golang"></i> Golang
            </div>
            <div class="skill-badge" style="background: #FFA000; color: white; padding: 4px 8px; border-radius: 15px; font-size: 12px;">
                <i class="fas fa-fire"></i> Firebase
            </div>
        </div>

        <div class="subdomain-cards animate-on-scroll" style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 15px; margin: 20px 0;">
            <a href="https://joki.chasouluix.my.id" target="_blank" class="subdomain-card" style="background: #1a1a1a; padding: 15px; border-radius: 8px; text-decoration: none; color: white; transition: transform 0.2s, background-color 0.2s; display: flex; flex-direction: column; align-items: center; text-align: center; position: relative; animation: borderAnimation 3s linear infinite;">
                <div style="position: absolute; top: -10px; right: -10px; background: #FF2D20; color: white; font-size: 12px; padding: 2px 8px; border-radius: 10px;">Popular</div>
                <i class="fas fa-tasks" style="font-size: 24px; margin-bottom: 10px; color: #FF2D20;"></i>
                <h3 style="margin: 0 0 5px 0; font-size: 16px;">Joki Apps</h3>
                <p style="margin: 0; color: #888; font-size: 12px;">Joki Website & Mobile App Development</p>
            </a>

            <a href="https://github.com/Chasoul-VSCode" target="_blank" class="subdomain-card" style="background: #1a1a1a; padding: 15px; border-radius: 8px; text-decoration: none; color: white; transition: transform 0.2s, background-color 0.2s; display: flex; flex-direction: column; align-items: center; text-align: center;">
                <i class="fab fa-github" style="font-size: 24px; margin-bottom: 10px; color: #4FC08D;"></i>
                <h3 style="margin: 0 0 5px 0; font-size: 16px;">My Github</h3>
                <p style="margin: 0; color: #888; font-size: 12px;">Check out my featured works</p>
            </a>
            <a href="https://my.hypercloudhost.com/aff.php?aff=37" target="_blank" class="subdomain-card" style="background: #1a1a1a; padding: 15px; border-radius: 8px; text-decoration: none; color: white; transition: transform 0.2s, background-color 0.2s; display: flex; flex-direction: column; align-items: center; text-align: center; position: relative;">
                <div style="position: absolute; top: -10px; right: -10px; background: #00ADD8; color: white; font-size: 12px; padding: 2px 8px; border-radius: 10px;">Hot Deal!</div>
                <i class="fas fa-server" style="font-size: 24px; margin-bottom: 10px; color: #00ADD8;"></i>
                <h3 style="margin: 0 0 5px 0; font-size: 16px;">Web Hosting</h3>
                <p style="margin: 0; color: #888; font-size: 12px;">Get PROMO Web Hosting by ChasoulUIX</p>
                <p style="margin: 5px 0 0 0; color: #00ADD8; font-size: 10px;">Limited Time Offer!</p>
            </a>

            <a href="https://saweria.co/chasoul" target="_blank" class="subdomain-card" style="background: #1a1a1a; padding: 15px; border-radius: 8px; text-decoration: none; color: white; transition: transform 0.2s, background-color 0.2s; display: flex; flex-direction: column; align-items: center; text-align: center; animation: moveUpDown 1s ease-in-out infinite;">
            <i class="fas fa-hand-holding-dollar" style="font-size: 24px; margin-bottom: 10px; color: #FF2D20;"></i>
                <h3 style="margin: 0 0 5px 0; font-size: 16px;">Support Dev</h3>
                <p style="margin: 0; color: #888; font-size: 12px;">Thank you for your support</p>
            </a>
        </div>

        <h2 style="text-align: center; margin-bottom: 15px; font-size: 16px; font-weight: 600; color: #ffffff; user-select: none; pointer-events: none;">
            Work Experience
        </h2>

        <div class="timeline-container animate-on-scroll" style="overflow-x: auto; padding: 10px 0; user-select: none; pointer-events: none;">
            <div class="timeline" style="display: flex; min-width: max-content; gap: 15px; padding: 0 10px; animation: scrollTimeline 30s linear infinite;">
                <!-- Timeline Item 1 -->
                <div class="timeline-item" style="background: #1a1a1a; padding: 10px; border-radius: 6px; min-width: 200px; position: relative; border: 1px solid #333;">
                    <div style="position: absolute; top: 10px; left: -6px; width: 12px; height: 12px; background: #FF2D20; border-radius: 50%; box-shadow: 0 0 6px rgba(255, 45, 32, 0.5);"></div>
                    <h3 style="color: #FF2D20; margin: 0 0 6px 0; font-size: 12px;">2017 - 2020</h3>
                    <h4 style="color: white; margin: 0 0 3px 0; font-size: 14px;">Designer Graphics</h4>
                    <p style="color: #888; margin: 0 0 6px 0; font-size: 11px;">Freelance Designer</p>
                    <ul style="color: #888; margin: 0; padding-left: 12px; font-size: 11px; list-style-type: none;">
                        <li style="margin-bottom: 3px;"><i class="fas fa-check" style="color: #FF2D20; margin-right: 4px;"></i>Create Graphics Design</li>
                        <li style="margin-bottom: 3px;"><i class="fas fa-check" style="color: #FF2D20; margin-right: 4px;"></i>Logo, Banner, Social Media, and Poster</li>
                        <li><i class="fas fa-check" style="color: #FF2D20; margin-right: 4px;"></i>Adobe Illustrator, Photoshop</li>
                    </ul>
                </div>

                <div class="timeline-item" style="background: #1a1a1a; padding: 10px; border-radius: 6px; min-width: 200px; position: relative; border: 1px solid #333;">
                    <div style="position: absolute; top: 10px; left: -6px; width: 12px; height: 12px; background: #FF2D20; border-radius: 50%; box-shadow: 0 0 6px rgba(255, 45, 32, 0.5);"></div>
                    <h3 style="color: #FF2D20; margin: 0 0 6px 0; font-size: 12px;">2019</h3>
                    <h4 style="color: white; margin: 0 0 3px 0; font-size: 14px;">IT Technician Intern</h4>
                    <p style="color: #888; margin: 0 0 6px 0; font-size: 11px;">IT Service & Solutions</p>
                    <ul style="color: #888; margin: 0; padding-left: 12px; font-size: 11px; list-style-type: none;">
                        <li style="margin-bottom: 3px;"><i class="fas fa-check" style="color: #FF2D20; margin-right: 4px;"></i>PC Assembly and Repair</li>
                        <li style="margin-bottom: 3px;"><i class="fas fa-check" style="color: #FF2D20; margin-right: 4px;"></i>Network Setup and Maintenance</li>
                        <li><i class="fas fa-check" style="color: #FF2D20; margin-right: 4px;"></i>Product Marketing and Sales</li>
                    </ul>
                </div>

                <div class="timeline-item" style="background: #1a1a1a; padding: 10px; border-radius: 6px; min-width: 200px; position: relative; border: 1px solid #333;">
                    <div style="position: absolute; top: 10px; left: -6px; width: 12px; height: 12px; background: #FF2D20; border-radius: 50%; box-shadow: 0 0 6px rgba(255, 45, 32, 0.5);"></div>
                    <h3 style="color: #FF2D20; margin: 0 0 6px 0; font-size: 12px;">2018 - 2021</h3>
                    <h4 style="color: white; margin: 0 0 3px 0; font-size: 14px;">Help Cooker</h4>
                    <p style="color: #888; margin: 0 0 6px 0; font-size: 11px;">Grilled Chicken Restaurant</p>
                    <ul style="color: #888; margin: 0; padding-left: 12px; font-size: 11px; list-style-type: none;">
                        <li style="margin-bottom: 3px;"><i class="fas fa-check" style="color: #FF2D20; margin-right: 4px;"></i>Food Preparation and Kitchen Support</li>
                        <li style="margin-bottom: 3px;"><i class="fas fa-check" style="color: #FF2D20; margin-right: 4px;"></i>Maintain Kitchen Cleanliness and Safety</li>
                        <li><i class="fas fa-check" style="color: #FF2D20; margin-right: 4px;"></i>Assist Head Chef with Daily Operations</li>
                    </ul>
                </div>

                <!-- Timeline Item 2 -->
                <div class="timeline-item" style="background: #1a1a1a; padding: 10px; border-radius: 6px; min-width: 200px; position: relative; border: 1px solid #333;">
                    <div style="position: absolute; top: 10px; left: -6px; width: 12px; height: 12px; background: #FF2D20; border-radius: 50%; box-shadow: 0 0 6px rgba(255, 45, 32, 0.5);"></div>
                    <h3 style="color: #FF2D20; margin: 0 0 6px 0; font-size: 12px;">2021 - 2022</h3>
                    <h4 style="color: white; margin: 0 0 3px 0; font-size: 14px;">Talent Scout - Data Analyst</h4>
                    <p style="color: #888; margin: 0 0 6px 0; font-size: 11px;">International Creative Galaxy Agency</p>
                    <ul style="color: #888; margin: 0; padding-left: 12px; font-size: 11px; list-style-type: none;">
                        <li style="margin-bottom: 3px;"><i class="fas fa-check" style="color: #FF2D20; margin-right: 4px;"></i>Make Talent for International Creative Galaxy Agency</li>
                        <li style="margin-bottom: 3px;"><i class="fas fa-check" style="color: #FF2D20; margin-right: 4px;"></i>Talent Management</li>
                        <li><i class="fas fa-check" style="color: #FF2D20; margin-right: 4px;"></i>Public Relations</li>
                    </ul>
                </div>

                <div class="timeline-item" style="background: #1a1a1a; padding: 10px; border-radius: 6px; min-width: 200px; position: relative; border: 1px solid #333;">
                    <div style="position: absolute; top: 10px; left: -6px; width: 12px; height: 12px; background: #FF2D20; border-radius: 50%; box-shadow: 0 0 6px rgba(255, 45, 32, 0.5);"></div>
                    <h3 style="color: #FF2D20; margin: 0 0 6px 0; font-size: 12px;">2023</h3>
                    <h4 style="color: white; margin: 0 0 3px 0; font-size: 14px;">Live Stream Product Host</h4>
                    <p style="color: #888; margin: 0 0 6px 0; font-size: 11px;">International Creative Galaxy Agency</p>
                    <ul style="color: #888; margin: 0; padding-left: 12px; font-size: 11px; list-style-type: none;">
                        <li style="margin-bottom: 3px;"><i class="fas fa-check" style="color: #FF2D20; margin-right: 4px;"></i>Product Presentation and Live Sales</li>
                        <li style="margin-bottom: 3px;"><i class="fas fa-check" style="color: #FF2D20; margin-right: 4px;"></i>Customer Engagement and Product Promotion</li>
                        <li><i class="fas fa-check" style="color: #FF2D20; margin-right: 4px;"></i>Live Stream Sales Performance</li>
                    </ul>
                </div>

                <div class="timeline-item" style="background: #1a1a1a; padding: 10px; border-radius: 6px; min-width: 200px; position: relative; border: 1px solid #333;">
                    <div style="position: absolute; top: 10px; left: -6px; width: 12px; height: 12px; background: #FF2D20; border-radius: 50%; box-shadow: 0 0 6px rgba(255, 45, 32, 0.5);"></div>
                    <h3 style="color: #FF2D20; margin: 0 0 6px 0; font-size: 12px;">2024 juni - september</h3>
                    <h4 style="color: white; margin: 0 0 3px 0; font-size: 14px;">Frontend Developer & UI/UX Intern</h4>
                    <p style="color: #888; margin: 0 0 6px 0; font-size: 11px;">Digital Agency</p>
                    <ul style="color: #888; margin: 0; padding-left: 12px; font-size: 11px; list-style-type: none;">
                        <li style="margin-bottom: 3px;"><i class="fas fa-check" style="color: #FF2D20; margin-right: 4px;"></i>Website Frontend Development</li>
                        <li style="margin-bottom: 3px;"><i class="fas fa-check" style="color: #FF2D20; margin-right: 4px;"></i>UI/UX Design and Prototyping</li>
                        <li><i class="fas fa-check" style="color: #FF2D20; margin-right: 4px;"></i>Responsive Web Design Implementation</li>
                    </ul>
                </div>

                <!-- Timeline Item 4 -->
                <div class="timeline-item" style="background: #1a1a1a; padding: 10px; border-radius: 6px; min-width: 200px; position: relative; border: 1px solid #333;">
                    <div style="position: absolute; top: 10px; left: -6px; width: 12px; height: 12px; background: #FF2D20; border-radius: 50%; box-shadow: 0 0 6px rgba(255, 45, 32, 0.5);"></div>
                    <h3 style="color: #FF2D20; margin: 0 0 6px 0; font-size: 12px;">2024 - now</h3>
                    <h4 style="color: white; margin: 0 0 3px 0; font-size: 14px;">Fullstack Developer</h4>
                    <p style="color: #888; margin: 0 0 6px 0; font-size: 11px;">Freelance programming</p>
                    <ul style="color: #888; margin: 0; padding-left: 12px; font-size: 11px; list-style-type: none;">
                        <li style="margin-bottom: 3px;"><i class="fas fa-check" style="color: #FF2D20; margin-right: 4px;"></i>Create Website and Mobile App</li>
                        <li style="margin-bottom: 3px;"><i class="fas fa-check" style="color: #FF2D20; margin-right: 4px;"></i>Laravel, Express.js, Node.js, Vue.js, Flutter</li>
                        <li><i class="fas fa-check" style="color: #FF2D20; margin-right: 4px;"></i>Open joki, and develop apps</li>
                    </ul>
                </div>
            </div>
        </div>

        <style>
            .timeline-container::-webkit-scrollbar {
                display: none;
            }

            .timeline-item {
                transition: all 0.3s ease;
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            }

            @keyframes scrollTimeline {
                0% {
                    transform: translateX(0);
                }
                100% {
                    transform: translateX(calc(-200px * 7));
                }
            }

            @keyframes fadeInUp {
                from {
                    opacity: 0;
                    transform: translateY(10px);
                }
                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }

            .animate-on-scroll {
                animation: fadeInUp 0.4s ease-out;
            }
        </style>

        <h2 style="text-align: center; margin-bottom: 20px; font-size: 20px; font-weight: 600; color: #ffffff; user-select: none; pointer-events: none;">
            Library Project
        </h2>

        <div class="image-slider animate-on-scroll" style="margin: 20px 0; position: relative; height: 200px; overflow: hidden; border-radius: 10px; user-select: none; pointer-events: none;">
            <div class="slider-container" style="position: absolute; width: 600%; height: 100%; display: flex; user-select: none; pointer-events: none;">
                <img src="{{ asset('images/Project7.jpg') }}" style="width: 16.666%; height: 100%; object-fit: cover; user-select: none; pointer-events: none;">
                <img src="{{ asset('images/Project8.PNG') }}" style="width: 16.666%; height: 100%; object-fit: cover; user-select: none; pointer-events: none;">
                <img src="{{ asset('images/Project6.jpg') }}" style="width: 16.666%; height: 100%; object-fit: cover; user-select: none; pointer-events: none;">
                <img src="{{ asset('images/Project3.jpg') }}" style="width: 16.666%; height: 100%; object-fit: cover; user-select: none; pointer-events: none;">
                <img src="{{ asset('images/Project5.jpg') }}" style="width: 16.666%; height: 100%; object-fit: cover; user-select: none; pointer-events: none;">
                <img src="{{ asset('images/Project1.jpg') }}" style="width: 16.666%; height: 100%; object-fit: cover; user-select: none; pointer-events: none;">
            </div>
        </div>

        <style>
            @keyframes slide {
                0% { transform: translateX(0); }
                16.666% { transform: translateX(-16.666%); }
                33.333% { transform: translateX(-33.333%); }
                50% { transform: translateX(-50%); }
                66.666% { transform: translateX(-66.666%); }
                83.333% { transform: translateX(-83.333%); }
                100% { transform: translateX(0); }
            }

            .slider-container {
                animation: slide 15s infinite ease-in-out;
                pointer-events: none;
            }

            .slider-container:hover {
                animation-play-state: running;
            }
        </style>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const sliderContainer = document.querySelector('.slider-container');
                
                // Reset position when animation ends
                sliderContainer.addEventListener('animationend', () => {
                    sliderContainer.style.animation = 'none';
                    sliderContainer.offsetHeight; // Trigger reflow
                    sliderContainer.style.animation = 'slide 15s infinite ease-in-out';
                });
            });
        </script>


        <!-- Company Projects -->
        <div class="projects-section animate-on-scroll" style="margin: 30px 0;">
            <h2 style="text-align: center; margin-bottom: 20px; font-size: 20px; font-weight: 600; color: #ffffff;">
                Company Projects
            </h2>
            <div style="width: 100%; overflow-x: auto; scrollbar-width: thin; scrollbar-color: rgba(255,255,255,0.1) transparent;">
                <div class="projects-grid" style="display: flex; gap: 25px; padding: 0 10px; min-width: max-content;">

                <div class="project-card" style="background: #1a1a1a; padding: 20px; border-radius: 15px; color: white; box-shadow: 0 4px 6px rgba(0,0,0,0.1); transition: transform 0.2s; cursor: pointer; width: 300px; flex-shrink: 0; position: relative; animation: borderAnimation 3s linear infinite;">
                        <h3 style="margin: 0 0 12px 0; font-size: 20px; font-weight: 600;">Stock Management System</h3>
                        <p style="color: #aaa; font-size: 15px; margin-bottom: 20px; line-height: 1.5;">A stock management system for Burger Bangor restaurant built with Express.js backend and Flutter mobile app</p>
                        <div class="project-tags" style="display: flex; gap: 10px; flex-wrap: wrap;">
                            <span style="background: rgba(2,86,155,0.2); color: #02569B; padding: 6px 12px; border-radius: 20px; font-size: 13px; font-weight: 500;">Flutter</span>
                            <span style="background: rgba(50,50,50,0.4); color: #fff; padding: 6px 12px; border-radius: 20px; font-size: 13px; font-weight: 500;">Express.js</span>
                        </div>
                    </div>

                    <div class="project-card" style="background: #1a1a1a; padding: 20px; border-radius: 15px; color: white; box-shadow: 0 4px 6px rgba(0,0,0,0.1); transition: transform 0.2s; cursor: pointer; width: 300px; flex-shrink: 0; position: relative; animation: borderAnimation 3s linear infinite;">
                        <h3 style="margin: 0 0 12px 0; font-size: 20px; font-weight: 600;">Billiard Table Booking Website</h3>
                        <p style="color: #aaa; font-size: 15px; margin-bottom: 20px; line-height: 1.5;">A billiard table booking website built with Laravel backend and Vue.js frontend for managing table reservations and scheduling</p>
                        <div class="project-tags" style="display: flex; gap: 10px; flex-wrap: wrap;">
                        <span style="background: rgba(255,45,32,0.2); color: #FF2D20; padding: 6px 12px; border-radius: 20px; font-size: 13px; font-weight: 500;">Laravel</span>
                        <span style="background: rgba(79,192,141,0.2); color: #4FC08D; padding: 6px 12px; border-radius: 20px; font-size: 13px; font-weight: 500;">Vue.js</span>
                        </div>
                    </div>

                    <div class="project-card" style="background: #1a1a1a; padding: 20px; border-radius: 15px; color: white; box-shadow: 0 4px 6px rgba(0,0,0,0.1); transition: transform 0.2s; cursor: pointer; width: 300px; flex-shrink: 0; position: relative; animation: borderAnimation 3s linear infinite;">
                        <h3 style="margin: 0 0 12px 0; font-size: 20px; font-weight: 600;">Food Ordering System</h3>
                        <p style="color: #aaa; font-size: 15px; margin-bottom: 20px; line-height: 1.5;">A food ordering and point of sale system for restaurants built with Flutter mobile app and Express.js backend</p>
                        <div class="project-tags" style="display: flex; gap: 10px; flex-wrap: wrap;">
                            <span style="background: rgba(2,86,155,0.2); color: #02569B; padding: 6px 12px; border-radius: 20px; font-size: 13px; font-weight: 500;">Flutter</span>
                            <span style="background: rgba(50,50,50,0.4); color: #fff; padding: 6px 12px; border-radius: 20px; font-size: 13px; font-weight: 500;">Express.js</span>
                        </div>
                    </div>

                    <div class="project-card" style="background: #1a1a1a; padding: 20px; border-radius: 15px; color: white; box-shadow: 0 4px 6px rgba(0,0,0,0.1); transition: transform 0.2s; cursor: pointer; width: 300px; flex-shrink: 0; position: relative; animation: borderAnimation 3s linear infinite;">
                        <h3 style="margin: 0 0 12px 0; font-size: 20px; font-weight: 600;">CMS Website SI Desa</h3>
                        <p style="color: #aaa; font-size: 15px; margin-bottom: 20px; line-height: 1.5;">A village information system built with Laravel and Vue.js for managing village data, demographics, and administrative</p>
                        <div class="project-tags" style="display: flex; gap: 10px; flex-wrap: wrap;">
                            <span style="background: rgba(255,45,32,0.2); color: #FF2D20; padding: 6px 12px; border-radius: 20px; font-size: 13px; font-weight: 500;">Laravel</span>
                            <span style="background: rgba(79,192,141,0.2); color: #4FC08D; padding: 6px 12px; border-radius: 20px; font-size: 13px; font-weight: 500;">Vue.js</span>
                        </div>
                    </div>

                    <div class="project-card" style="background: #1a1a1a; padding: 20px; border-radius: 15px; color: white; box-shadow: 0 4px 6px rgba(0,0,0,0.1); transition: transform 0.2s; cursor: pointer; width: 300px; flex-shrink: 0; position: relative; animation: borderAnimation 3s linear infinite;">
                        <h3 style="margin: 0 0 12px 0; font-size: 20px; font-weight: 600;">Website Landing Pages Desa</h3>
                        <p style="color: #aaa; font-size: 15px; margin-bottom: 20px; line-height: 1.5;">A modern and responsive village landing page website showcasing village profiles</p>
                        <div class="project-tags" style="display: flex; gap: 10px; flex-wrap: wrap;">
                            <span style="background: rgba(255,45,32,0.2); color: #FF2D20; padding: 6px 12px; border-radius: 20px; font-size: 13px; font-weight: 500;">Laravel</span>
                            <span style="background: rgba(79,192,141,0.2); color: #4FC08D; padding: 6px 12px; border-radius: 20px; font-size: 13px; font-weight: 500;">Vue.js</span>
                        </div>
                    </div>

                    <div class="project-card" style="background: #1a1a1a; padding: 20px; border-radius: 15px; color: white; box-shadow: 0 4px 6px rgba(0,0,0,0.1); transition: transform 0.2s; cursor: pointer; width: 300px; flex-shrink: 0; position: relative; animation: borderAnimation 3s linear infinite;">
                        <h3 style="margin: 0 0 12px 0; font-size: 20px; font-weight: 600;">Portofolio Website Agency</h3>
                        <p style="color: #aaa; font-size: 15px; margin-bottom: 20px; line-height: 1.5;">A portfolio website for a social media agency featuring service showcase, team profiles, and client testimonials built with Laravel and Vue.js</p>
                        <div class="project-tags" style="display: flex; gap: 10px; flex-wrap: wrap;">
                            <span style="background: rgba(255,45,32,0.2); color: #FF2D20; padding: 6px 12px; border-radius: 20px; font-size: 13px; font-weight: 500;">Laravel</span>
                            <span style="background: rgba(79,192,141,0.2); color: #4FC08D; padding: 6px 12px; border-radius: 20px; font-size: 13px; font-weight: 500;">Vue.js</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Personal Projects -->
        <div class="projects-section animate-on-scroll" style="margin: 30px 0;">
            <h2 style="text-align: center; margin-bottom: 20px; font-size: 20px; font-weight: 600; animation: rgbText 5s linear infinite;">
                <style>
                    @keyframes rgbText {
                        0% { color: #ff0000; }
                        33% { color: #00ff00; }
                        66% { color: #0000ff; }
                        100% { color: #ff0000; }
                    }
                </style>
                My Portofolio Projects
            </h2>
            <div style="width: 100%; overflow-x: auto; scrollbar-width: thin; scrollbar-color: rgba(255,255,255,0.1) transparent;">
                <div class="projects-grid" style="display: flex; gap: 25px; padding: 0 10px; min-width: max-content;">

                <div class="project-card" style="background: #1a1a1a; padding: 20px; border-radius: 15px; color: white; box-shadow: 0 4px 6px rgba(0,0,0,0.1); transition: transform 0.2s; cursor: pointer; border: 1px solid rgba(255,255,255,0.1); width: 300px; flex-shrink: 0;">
                        <h3 style="margin: 0 0 12px 0; font-size: 20px; font-weight: 600;">E-Commerce Platform</h3>
                        <p style="color: #aaa; font-size: 15px; margin-bottom: 20px; line-height: 1.5;">A modern e-commerce platform with Laravel frontend, Vue.js UI, and Golang microservices backend</p>
                        <div class="project-tags" style="display: flex; gap: 10px; flex-wrap: wrap;">
                            <span style="background: rgba(255,45,32,0.2); color: #FF2D20; padding: 6px 12px; border-radius: 20px; font-size: 13px; font-weight: 500;">Laravel</span>
                            <span style="background: rgba(79,192,141,0.2); color: #4FC08D; padding: 6px 12px; border-radius: 20px; font-size: 13px; font-weight: 500;">Vue.js</span>
                            <span style="background: rgba(0,173,216,0.2); color: #00ADD8; padding: 6px 12px; border-radius: 20px; font-size: 13px; font-weight: 500;">Golang</span>
                        </div>
                    </div>

                    <div class="project-card" style="background: #1a1a1a; padding: 20px; border-radius: 15px; color: white; box-shadow: 0 4px 6px rgba(0,0,0,0.1); transition: transform 0.2s; cursor: pointer; border: 1px solid rgba(255,255,255,0.1); width: 300px; flex-shrink: 0;">
                        <h3 style="margin: 0 0 12px 0; font-size: 20px; font-weight: 600;">Student Apps</h3>
                        <p style="color: #aaa; font-size: 15px; margin-bottom: 20px; line-height: 1.5;">A mobile application for students built with Flutter frontend and PHP API backend for managing academic activities</p>
                        <div class="project-tags" style="display: flex; gap: 10px; flex-wrap: wrap;">
                            <span style="background: rgba(2,86,155,0.2); color: #02569B; padding: 6px 12px; border-radius: 20px; font-size: 13px; font-weight: 500;">Flutter</span>
                            <span style="background: rgba(119,123,179,0.2); color: #777BB3; padding: 6px 12px; border-radius: 20px; font-size: 13px; font-weight: 500;">PHP</span>
                        </div>
                    </div>

                    <div class="project-card" style="background: #1a1a1a; padding: 20px; border-radius: 15px; color: white; box-shadow: 0 4px 6px rgba(0,0,0,0.1); transition: transform 0.2s; cursor: pointer; border: 1px solid rgba(255,255,255,0.1); width: 300px; flex-shrink: 0;">
                        <h3 style="margin: 0 0 12px 0; font-size: 20px; font-weight: 600;">Real-time Chat App</h3>
                        <p style="color: #aaa; font-size: 15px; margin-bottom: 20px; line-height: 1.5;">A modern real-time chat application with Flutter mobile frontend and Node.js/Socket.io backend</p>
                        <div class="project-tags" style="display: flex; gap: 10px; flex-wrap: wrap;">
                            <span style="background: rgba(2,86,155,0.2); color: #02569B; padding: 6px 12px; border-radius: 20px; font-size: 13px; font-weight: 500;">Flutter</span>
                            <span style="background: rgba(104,160,99,0.2); color: #68A063; padding: 6px 12px; border-radius: 20px; font-size: 13px; font-weight: 500;">Node.js</span>
                            <span style="background: rgba(16,220,96,0.2); color: #10DC60; padding: 6px 12px; border-radius: 20px; font-size: 13px; font-weight: 500;">Socket.io</span>
                        </div>
                    </div>

                    <div class="project-card" style="background: #1a1a1a; padding: 20px; border-radius: 15px; color: white; box-shadow: 0 4px 6px rgba(0,0,0,0.1); transition: transform 0.2s; cursor: pointer; border: 1px solid rgba(255,255,255,0.1); width: 300px; flex-shrink: 0;">
                        <h3 style="margin: 0 0 12px 0; font-size: 20px; font-weight: 600;">Auto Attendance System</h3>
                        <p style="color: #aaa; font-size: 15px; margin-bottom: 20px; line-height: 1.5;">An automated attendance system using Python with facial recognition and OpenCV for contactless attendance tracking</p>
                        <div class="project-tags" style="display: flex; gap: 10px; flex-wrap: wrap;">
                            <span style="background: rgba(55,118,171,0.2); color: #3776AB; padding: 6px 12px; border-radius: 20px; font-size: 13px; font-weight: 500;">Python</span>
                       </div>
                    </div>

                    <div class="project-card" style="background: #1a1a1a; padding: 20px; border-radius: 15px; color: white; box-shadow: 0 4px 6px rgba(0,0,0,0.1); transition: transform 0.2s; cursor: pointer; border: 1px solid rgba(255,255,255,0.1); width: 300px; flex-shrink: 0;">
                        <h3 style="margin: 0 0 12px 0; font-size: 20px; font-weight: 600;">Ideal Weight Calculator</h3>
                        <p style="color: #aaa; font-size: 15px; margin-bottom: 20px; line-height: 1.5;">A web-based ideal weight calculator system built with Laravel and Vue.js, featuring BMI calculation and personalized health recommendations</p>
                        <div class="project-tags" style="display: flex; gap: 10px; flex-wrap: wrap;">
                            <span style="background: rgba(255,45,32,0.2); color: #FF2D20; padding: 6px 12px; border-radius: 20px; font-size: 13px; font-weight: 500;">Laravel</span>
                            <span style="background: rgba(79,192,141,0.2); color: #4FC08D; padding: 6px 12px; border-radius: 20px; font-size: 13px; font-weight: 500;">Vue.js</span>
                            <span style="background: rgba(247,223,30,0.2); color: #F7DF1E; padding: 6px 12px; border-radius: 20px; font-size: 13px; font-weight: 500;">JavaScript</span>
                       </div>
                    </div>

                    <div class="project-card" style="background: #1a1a1a; padding: 20px; border-radius: 15px; color: white; box-shadow: 0 4px 6px rgba(0,0,0,0.1); transition: transform 0.2s; cursor: pointer; border: 1px solid rgba(255,255,255,0.1); width: 300px; flex-shrink: 0;">
                        <h3 style="margin: 0 0 12px 0; font-size: 20px; font-weight: 600;">Express.js REST API</h3>
                        <p style="color: #aaa; font-size: 15px; margin-bottom: 20px; line-height: 1.5;">A RESTful API authentication service with JWT tokens, role-based access control, and secure password hashing</p>
                        <div class="project-tags" style="display: flex; gap: 10px; flex-wrap: wrap;">
                            <span style="background: rgba(50,50,50,0.4); color: #fff; padding: 6px 12px; border-radius: 20px; font-size: 13px; font-weight: 500;">Express.js</span>
                            <span style="background: rgba(240,219,79,0.2); color: #F0DB4F; padding: 6px 12px; border-radius: 20px; font-size: 13px; font-weight: 500;">Node.js</span>
                        </div>
                    </div>

                    <div class="project-card" style="background: #1a1a1a; padding: 20px; border-radius: 15px; color: white; box-shadow: 0 4px 6px rgba(0,0,0,0.1); transition: transform 0.2s; cursor: pointer; border: 1px solid rgba(255,255,255,0.1); width: 300px; flex-shrink: 0;">
                        <h3 style="margin: 0 0 12px 0; font-size: 20px; font-weight: 600;">Kos-kosan Management System</h3>
                        <p style="color: #aaa; font-size: 15px; margin-bottom: 20px; line-height: 1.5;">A boarding house management system with room booking, payment tracking, and tenant management features</p>
                        <div class="project-tags" style="display: flex; gap: 10px; flex-wrap: wrap;">
                        <span style="background: rgba(255,45,32,0.2); color: #FF2D20; padding: 6px 12px; border-radius: 20px; font-size: 13px; font-weight: 500;">Laravel</span>
                        <span style="background: rgba(79,192,141,0.2); color: #4FC08D; padding: 6px 12px; border-radius: 20px; font-size: 13px; font-weight: 500;">Vue.js</span>
                        </div>
                    </div>

                    <div class="project-card" style="background: #1a1a1a; padding: 20px; border-radius: 15px; color: white; box-shadow: 0 4px 6px rgba(0,0,0,0.1); transition: transform 0.2s; cursor: pointer; border: 1px solid rgba(255,255,255,0.1); width: 300px; flex-shrink: 0;">
                        <h3 style="margin: 0 0 12px 0; font-size: 20px; font-weight: 600;">Point of Sale System</h3>
                        <p style="color: #aaa; font-size: 15px; margin-bottom: 20px; line-height: 1.5;">A modern POS system with inventory management, sales tracking, and receipt printing built with Flutter mobile app and Express.js backend</p>
                        <div class="project-tags" style="display: flex; gap: 10px; flex-wrap: wrap;">
                            <span style="background: rgba(2,86,155,0.2); color: #02569B; padding: 6px 12px; border-radius: 20px; font-size: 13px; font-weight: 500;">Flutter</span>
                            <span style="background: rgba(50,50,50,0.4); color: #fff; padding: 6px 12px; border-radius: 20px; font-size: 13px; font-weight: 500;">Express.js</span>
                        </div>
                    </div>

                    <div class="project-card" style="background: #1a1a1a; padding: 20px; border-radius: 15px; color: white; box-shadow: 0 4px 6px rgba(0,0,0,0.1); transition: transform 0.2s; cursor: pointer; border: 1px solid rgba(255,255,255,0.1); width: 300px; flex-shrink: 0;">
                        <h3 style="margin: 0 0 12px 0; font-size: 20px; font-weight: 600;">Portfolio Profile Website</h3>
                        <p style="color: #aaa; font-size: 15px; margin-bottom: 20px; line-height: 1.5;">A modern and responsive portfolio website with dark theme, animations, and dynamic content loading</p>
                        <div class="project-tags" style="display: flex; gap: 10px; flex-wrap: wrap;">
                            <span style="background: rgba(255,45,32,0.2); color: #FF2D20; padding: 6px 12px; border-radius: 20px; font-size: 13px; font-weight: 500;">Laravel</span>
                            <span style="background: rgba(79,192,141,0.2); color: #4FC08D; padding: 6px 12px; border-radius: 20px; font-size: 13px; font-weight: 500;">Vue.js</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Reviews -->
        <div id="reviews-section" class="reviews-section animate-on-scroll" style="margin: 15px 0;">
            <div class="reviews-container" style="background: #1a1a1a; padding: 15px; border-radius: 8px; color: white; transition: transform 0.2s, background-color 0.2s; width: 90%; max-width: 500px; margin: 0 auto;">
                <h2 style="margin: 0 0 15px 0; font-size: clamp(16px, 4vw, 18px); text-align: center; font-weight: 600;">Reviews</h2>

                <!-- Login Form -->
                @if(!session('logged_in'))
                <div class="reviews-login-form" style="margin-bottom: 15px;">
                    <form action="{{ route('reviews.login') }}" method="POST">
                        @csrf
                        <div style="margin-bottom: 12px;">
                            <input type="email" id="email" name="email" style="width: 80%; padding: 6px 8px; border-radius: 6px; border: 1px solid #363636; background: #1a1a1a; color: white; font-size: 12px;" placeholder="Email" required>
                        </div>
                        <button type="submit" style="width: 50%; padding: 6px; background: #FF2D20; color: white; border: none; border-radius: 6px; cursor: pointer; font-weight: 500; font-size: 12px; transition: all 0.2s ease;">Continue</button>
                    </form>
                </div>
                @endif

                <!-- Review Form -->
                @if(session('logged_in'))
                <div class="reviews-toggle-btn" style="text-align: center; margin-bottom: 12px;">
                    <button onclick="toggleReviewForm()" style="padding: 6px 12px; background: #FF2D20; color: white; border: none; border-radius: 6px; cursor: pointer; font-size: clamp(11px, 3.5vw, 13px);">
                        <i id="reviews-toggle-icon" class="fas fa-chevron-up" style="transition: transform 0.3s ease;"></i>
                    </button>
                </div>
                <div id="reviews-form" style="background: #1a1a1a; padding: 12px; border-radius: 6px; margin-bottom: 15px; transition: all 0.3s ease; max-height: 400px; overflow: hidden;">
                    <form action="{{ route('reviews.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="reviews-rating" style="margin-bottom: 12px;">
                            <div style="display: flex; gap: 6px; justify-content: center;">
                                @for($i = 1; $i <= 5; $i++)
                                <input type="radio" name="rating" value="{{ $i }}" id="review-star{{ $i }}" style="display: none;">
                                <label for="review-star{{ $i }}" class="review-star" style="cursor: pointer; color: #4b5563; font-size: clamp(18px, 5vw, 20px);">★</label>
                                @endfor
                            </div>
                        </div>
                        <div style="margin-bottom: 12px; text-align: center;">
                            <textarea id="review" name="review" rows="2" style="width: 80%; padding: 6px; border-radius: 6px; border: 1px solid #363636; background: #1a1a1a; color: white; resize: none; font-size: clamp(11px, 3.5vw, 12px);" placeholder="Write your review..." required minlength="3"></textarea>
                        </div>
                        <div style="margin-bottom: 12px; text-align: center;">
                            <label for="image-upload" style="display: inline-block; width: 80%; padding: 8px 12px; background: #1e1e1e; border: 1px solid #363636; border-radius: 6px; cursor: pointer; transition: all 0.2s ease;">
                                <i class="fas fa-camera" style="margin-right: 8px; color: #FF2D20;"></i>
                                <span style="color: #888; font-size: clamp(11px, 3.5vw, 12px);">Add images</span>
                            </label>
                            <input id="image-upload" type="file" name="images[]" accept="image/*" multiple style="display: none;" onchange="previewImages(this)">
                            <div id="image-preview" style="display: flex; flex-wrap: wrap; gap: 10px; justify-content: center; margin-top: 10px;"></div>
                        </div>
                        <script>
                            function previewImages(input) {
                                const preview = document.getElementById('image-preview');
                                preview.innerHTML = '';
                                
                                if (input.files) {
                                    Array.from(input.files).forEach(file => {
                                        const reader = new FileReader();
                                        reader.onload = function(e) {
                                            const div = document.createElement('div');
                                            div.style.position = 'relative';
                                            div.style.width = '80px';
                                            div.style.height = '80px';
                                            
                                            const img = document.createElement('img');
                                            img.src = e.target.result;
                                            img.style.width = '100%';
                                            img.style.height = '100%';
                                            img.style.objectFit = 'cover';
                                            img.style.borderRadius = '4px';
                                            
                                            div.appendChild(img);
                                            preview.appendChild(div);
                                        }
                                        reader.readAsDataURL(file);
                                    });
                                }
                            }
                        </script>
                        <button type="submit" style="width: 50%; padding: 8px; background: #FF2D20; color: white; border: none; border-radius: 6px; cursor: pointer; font-weight: 500; font-size: clamp(11px, 3.5vw, 13px);">Submit</button>
                    </form>
                </div>

                <script>
                    function toggleReviewForm() {
                        const form = document.getElementById('reviews-form');
                        const icon = document.getElementById('reviews-toggle-icon');
                        
                        if (form.style.maxHeight === '0px') {
                            form.style.maxHeight = '400px';
                            form.style.opacity = '1';
                            icon.style.transform = 'rotate(0deg)';
                        } else {
                            form.style.maxHeight = '0px';
                            form.style.opacity = '0';
                            icon.style.transform = 'rotate(180deg)';
                        }
                    }
                </script>
                @endif

                <!-- Display Reviews -->
                <div class="reviews-list">
                    @if(isset($reviews) && count($reviews) > 0)
                        @foreach($reviews as $review)
                        <div class="review-item" style="background: #1a1a1a; padding: 10px; border-radius: 6px; margin-bottom: 8px; text-align: left; border: 1px solid rgba(255,255,255,0.1);">
                            <div style="display: flex; justify-content: space-between; align-items: center;">
                                <span class="review-email" style="color: #9ca3af; font-size: clamp(8px, 2.8vw, 10px);">{{ substr($review->email, 0, 3) . '***@' . explode('@', $review->email)[1] }}</span>
                                 </div>
                            <p class="review-text" style="color: #e0e0e0; line-height: 1.3; font-size: clamp(10px, 3.2vw, 12px); margin-bottom: 6px; text-align: left; word-break: break-word;">
                                {!! preg_replace('/(https?:\/\/[^\s<]+)(?![^<]*>)/i', '<a href="$1" target="_blank" style="color: #FF2D20; text-decoration: none;">$1</a>', $review->review) !!}
                            </p>
                           
                            @if($review->images)
                            <div style="margin: 10px 0; display: flex; gap: 10px; flex-wrap: wrap; justify-content: center;">
                                @foreach(json_decode($review->images) as $image)
                                <img 
                                    src="{{ asset($image) }}" 
                                    alt="Review Image" 
                                    onload="checkImageOrientation(this)"
                                    style="max-width: 100%; width: 100%; border-radius: 6px; margin-bottom: 10px;"
                                    class="review-image"
                                >
                                @endforeach
                            </div>
                            <script>
                                function checkImageOrientation(img) {
                                    if(img.naturalHeight > img.naturalWidth) {
                                        // If image is vertical/portrait
                                        img.style.width = '30%';
                                    } else {
                                        // If image is horizontal/landscape
                                        if(window.innerWidth < 768) {
                                            img.style.width = '50%';
                                        } else {
                                            img.style.width = '50%';
                                        }
                                    }
                                }

                                // Recheck image sizes when window is resized
                                window.addEventListener('resize', function() {
                                    document.querySelectorAll('.review-image').forEach(checkImageOrientation);
                                });
                            </script>
                            @endif
                            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 6px;">
                                <div class="review-rating" style="display: flex; gap: 3px;">
                                    @for($i = 1; $i <= 5; $i++)
                                        <span style="color: {{ $i <= $review->rating ? '#FF2D20' : '#374151' }}; font-size: clamp(9px, 2.8vw, 11px);">★</span>
                                    @endfor
                                </div>
                                <div class="review-meta">
                                    <span class="review-date" style="color: #6b7280; font-size: clamp(8px, 2.8vw, 10px);">{{ $review->created_at }}</span>
                                </div>
                            </div>

                            <!-- Like and Comment Section -->
                            <div class="review-actions" style="margin-top: 8px; display: flex; gap: 15px; align-items: center;">
                                <div class="like-action" style="display: flex; align-items: center; gap: 4px;">
                                    @if(session('logged_in'))
                                    <button onclick="likeReview({{ $review->id }}, this)" class="like-btn" style="background: none; border: none; cursor: pointer; color: #6b7280; font-size: clamp(11px, 3.5vw, 13px);">
                                        <i class="far fa-heart"></i>
                                        <span class="like-count" style="font-size: clamp(9px, 2.8vw, 11px);">{{ $review->likes }}</span>
                                    </button>
                                    @endif
                                </div>
                                <div class="comment-action" style="flex-grow: 1;">
                                    @if(session('logged_in'))
                                    <form onsubmit="submitComment(event, {{ $review->id }}, this)" class="comment-form" style="display: flex; gap: 8px;">
                                        @csrf
                                        <input type="text" name="comment" placeholder="Add a comment..." style="flex-grow: 1; padding: 4px 8px; border-radius: 4px; border: 1px solid #363636; background: #1a1a1a; color: white; font-size: clamp(9px, 2.8vw, 11px);">
                                        <button type="submit" style="background: #FF2D20; color: white; border: none; border-radius: 4px; padding: 4px 8px; font-size: clamp(9px, 2.8vw, 11px); cursor: pointer;">
                                            <i class="fas fa-paper-plane"></i>
                                        </button>
                                    </form>
                                    @endif
                                    <div class="comments-list" style="margin-top: 8px;">
                                        @foreach($review->commentsArray as $comment)
                                        <div style="margin-top: 4px; font-size: clamp(9px, 2.8vw, 11px); color: #9ca3af;">
                                            <span style="color: #e0e0e0;">{{ $comment['text'] }}</span>
                                            <span style="color: #6b7280; margin-left: 4px; font-size: smaller;">{{ \Carbon\Carbon::parse($comment['created_at'])->diffForHumans() }}</span>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    @else
                        <div style="text-align: center; color: #6b7280; padding: 20px;">
                            No reviews yet
                        </div>
                    @endif
                </div>
            </div>
        </div>

        <script>
            document.querySelectorAll('.review-star').forEach((star, index) => {
                star.addEventListener('mouseover', () => {
                    document.querySelectorAll('.review-star').forEach((s, i) => {
                        s.style.color = i <= index ? '#FF2D20' : '#4b5563';
                    });
                });
                
                star.addEventListener('mouseout', () => {
                    const selectedRating = document.querySelector('input[name="rating"]:checked');
                    document.querySelectorAll('.review-star').forEach((s, i) => {
                        s.style.color = selectedRating && i < selectedRating.value ? '#FF2D20' : '#4b5563';
                    });
                });

                star.addEventListener('click', () => {
                    document.querySelectorAll('.review-star').forEach((s, i) => {
                        s.style.color = i <= index ? '#FF2D20' : '#4b5563';
                    });
                });
            });

            // Like functionality
            function likeReview(reviewId, button) {
                fetch(`/reviews/${reviewId}/like`, {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                        'Content-Type': 'application/json',
                        'Accept': 'application/json'
                    }
                })
                .then(response => response.json())
                .then(data => {
                    const icon = button.querySelector('i');
                    const count = button.querySelector('.like-count');
                    count.textContent = data.likes;
                    icon.classList.remove('far');
                    icon.classList.add('fas');
                })
                .catch(error => console.error('Error:', error));
            }

            // Handle comment form submissions
            function submitComment(e, reviewId, form) {
                e.preventDefault();
                const input = form.querySelector('input[name="comment"]');
                const comment = input.value.trim();
                
                if (comment) {
                    fetch(`/reviews/${reviewId}/comment`, {
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                            'Content-Type': 'application/json',
                            'Accept': 'application/json'
                        },
                        body: JSON.stringify({ comment: comment })
                    })
                    .then(response => {
                        if (!response.ok) {
                            throw new Error('Network response was not ok');
                        }
                        return response.json();
                    })
                    .then(data => {
                        const commentsList = form.parentElement.querySelector('.comments-list');
                        const newComment = document.createElement('div');
                        newComment.style.cssText = 'margin-top: 4px; font-size: clamp(9px, 2.8vw, 11px); color: #9ca3af;';
                        newComment.innerHTML = `
                            <span style="color: #e0e0e0;">${data.comment}</span>
                            <span style="color: #6b7280; margin-left: 4px; font-size: smaller;">just now</span>
                        `;
                        commentsList.insertBefore(newComment, commentsList.firstChild);
                        input.value = '';
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        alert('Failed to submit comment. Please try again.');
                    });
                }
            }
        </script>

        <div style="margin-top: 50px; padding: 30px 20px; text-align: center; border-top: 1px solid #333; background: linear-gradient(180deg, rgba(30,30,30,0) 0%, rgba(30,30,30,0.5) 100%);">
            <div style="max-width: 600px; margin: 0 auto;">
                <div style="color: #888; font-size: 14px; margin-bottom: 20px; line-height: 1.6;">
                    © 2024 <span style="color: #fff; font-weight: 500;">Chasoul UIX</span>. Fullstack Developer with a passion for creating innovative solutions.
                </div>
                <div style="height: 1px; width: 50px; background: #444; margin: 15px auto;"></div>
                <div class="social-icons" style="margin-top: 15px; display: flex; justify-content: center; gap: 20px;">
                    <a href="https://linkedin.com/in/chasoul-uix" class="social-icon" style="color: #888; transition: all 0.3s ease; font-size: 18px;" onmouseover="this.style.color='#0077B5'" onmouseout="this.style.color='#888'">
                        <i class="fab fa-linkedin"></i>
                    </a>
                    <a href="https://instagram.com/chasoul.uix" class="social-icon" style="color: #888; transition: all 0.3s ease; font-size: 18px;" onmouseover="this.style.color='#E4405F'" onmouseout="this.style.color='#888'">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="https://youtube.com/@chasoul.uix" class="social-icon" style="color: #888; transition: all 0.3s ease; font-size: 18px;" onmouseover="this.style.color='#FF0000'" onmouseout="this.style.color='#888'">
                        <i class="fab fa-youtube"></i>
                    </a>
                    <a href="https://tiktok.com/@chasoul.uix" class="social-icon" style="color: #888; transition: all 0.3s ease; font-size: 18px;" onmouseover="this.style.color='#ffffff'" onmouseout="this.style.color='#888'">
                        <i class="fab fa-tiktok"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
