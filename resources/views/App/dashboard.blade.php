<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }} - Bio Link</title>
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
            max-width: 680px;
            margin: 0 auto;
            padding: 40px 20px;
            text-align: center;
        }

        .profile-image {
            width: 96px;
            height: 96px;
            border-radius: 50%;
            margin-bottom: 15px;
        }

        .profile-name {
            font-size: 20px;
            font-weight: 600;
            margin-bottom: 10px;
        }

        .profile-bio {
            color: #888;
            margin-bottom: 30px;
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
            gap: 20px;
            margin-top: 30px;
        }

        .social-icon {
            color: #888;
            text-decoration: none;
            font-size: 24px;
            transition: color 0.2s;
        }

        .social-icon:hover {
            color: #ffffff;
        }

        .subdomain-card:hover {
                transform: translateY(-5px);
                background-color: #2d2d2d;
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
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <div class="container">
        <img src="{{ asset('images/me.jpeg') }}" alt="Profile Picture" class="profile-image">
        <div class="profile-name" style="background: linear-gradient(90deg, #ff0000, #00ff00, #0000ff, #ff0000); background-size: 300% 100%; color: transparent; -webkit-background-clip: text; background-clip: text; animation: rgbText 3s linear infinite;">Chasoul UIX</div>
        <div class="profile-bio" style="font-weight: bold; margin-bottom: 5px;">Full Stack Website n mobile developer</div>
        <div class="profile-bio" style="margin-top: 0; margin-bottom: 15px;">Freelancer | Content Creator</div>

        <div class="social-icons" style="margin-top: 15px;">
            <a href="#" class="social-icon">
                <i class="fab fa-tiktok"></i>
            </a>
            <a href="#" class="social-icon">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="#" class="social-icon">
                <i class="fab fa-youtube"></i>
            </a>
        </div>

        <div class="stats-container" style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 10px; margin: 15px 0;">
            <div class="stat-item" style="background: #1e1e1e; padding: 10px; border-radius: 10px; text-align: center; box-shadow: 0 2px 4px rgba(0,0,0,0.2); border: 1px solid #333; transition: all 0.3s ease; position: relative; overflow: hidden;">
                <div style="position: absolute; top: -10px; right: -10px; font-size: 30px; opacity: 0.1; color: #4FC08D;">
                    <i class="fas fa-users"></i>
                </div>
                <div style="font-size: 18px; font-weight: 800; color: #4FC08D; margin-bottom: 5px;">20+</div>
                <div style="color: #888; font-size: 10px; text-transform: uppercase; letter-spacing: 1px;">
                    Clients
                </div>
            </div>
            <div class="stat-item" style="background: #1e1e1e; padding: 10px; border-radius: 10px; text-align: center; box-shadow: 0 2px 4px rgba(0,0,0,0.2); border: 1px solid #333; transition: all 0.3s ease; position: relative; overflow: hidden;">
                <div style="position: absolute; top: -10px; right: -10px; font-size: 30px; opacity: 0.1; color: #61DAFB;">
                    <i class="fas fa-tasks"></i>
                </div>
                <div style="font-size: 18px; font-weight: 800; color: #61DAFB; margin-bottom: 5px;">50+</div>
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

        <div class="skills-container" style="display: flex; flex-wrap: wrap; justify-content: center; gap: 8px; margin: 15px 0;">
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
        </div>

        <div class="subdomain-cards" style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 15px; margin: 20px 0;">
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

            <a href="http://store.{{ $_SERVER['HTTP_HOST'] }}" class="subdomain-card" style="background: #1a1a1a; padding: 15px; border-radius: 8px; text-decoration: none; color: white; transition: transform 0.2s, background-color 0.2s; display: flex; flex-direction: column; align-items: center; text-align: center;">
                <i class="fas fa-shopping-cart" style="font-size: 24px; margin-bottom: 10px; color: #61DAFB;"></i>
                <h3 style="margin: 0 0 5px 0; font-size: 16px;">SCOS Store</h3>
                <p style="margin: 0; color: #888; font-size: 12px;">Shopee - Outfit Online Store</p>
            </a>
            <a href="http://profile.{{ $_SERVER['HTTP_HOST'] }}" class="subdomain-card" style="background: #1a1a1a; padding: 15px; border-radius: 8px; text-decoration: none; color: white; transition: transform 0.2s, background-color 0.2s; display: flex; flex-direction: column; align-items: center; text-align: center;">
                <i class="fas fa-user" style="font-size: 24px; margin-bottom: 10px; color: #02569B;"></i>
                <h3 style="margin: 0 0 5px 0; font-size: 16px;">My Profile</h3>
                <p style="margin: 0; color: #888; font-size: 12px;">About Me Page</p>
            </a>
        </div>
        
        <div class="projects-section" style="margin: 30px 0;">
            <h2 style="text-align: center; color: white; margin-bottom: 20px; font-size: 24px; font-weight: 600;">Projects</h2>
            <div class="projects-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 25px; padding: 0 10px;">
                <div class="project-card" style="background: #1a1a1a; padding: 20px; border-radius: 15px; color: white; box-shadow: 0 4px 6px rgba(0,0,0,0.1); transition: transform 0.2s; cursor: pointer; border: 1px solid rgba(255,255,255,0.1);">
                    <img src="{{ asset('images/project1.jpg') }}" alt="Project 1" style="width: 100%; height: 180px; object-fit: cover; border-radius: 12px; margin-bottom: 20px; box-shadow: 0 2px 4px rgba(0,0,0,0.2);">
                    <h3 style="margin: 0 0 12px 0; font-size: 20px; font-weight: 600;">E-Commerce Platform</h3>
                    <p style="color: #aaa; font-size: 15px; margin-bottom: 20px; line-height: 1.5;">A full-featured online shopping platform built with Laravel and Vue.js API Golang</p>
                    <div class="project-tags" style="display: flex; gap: 10px; flex-wrap: wrap;">
                        <span style="background: rgba(255,45,32,0.2); color: #FF2D20; padding: 6px 12px; border-radius: 20px; font-size: 13px; font-weight: 500;">Laravel</span>
                        <span style="background: rgba(79,192,141,0.2); color: #4FC08D; padding: 6px 12px; border-radius: 20px; font-size: 13px; font-weight: 500;">Vue.js</span>
                        <span style="background: rgba(50,50,50,0.4); color: #fff; padding: 6px 12px; border-radius: 20px; font-size: 13px; font-weight: 500;">Golang</span>
                    </div>
                </div>

                <div class="project-card" style="background: #1a1a1a; padding: 20px; border-radius: 15px; color: white; box-shadow: 0 4px 6px rgba(0,0,0,0.1); transition: transform 0.2s; cursor: pointer; border: 1px solid rgba(255,255,255,0.1);">
                    <img src="{{ asset('images/project2.jpg') }}" alt="Project 2" style="width: 100%; height: 180px; object-fit: cover; border-radius: 12px; margin-bottom: 20px; box-shadow: 0 2px 4px rgba(0,0,0,0.2);">
                    <h3 style="margin: 0 0 12px 0; font-size: 20px; font-weight: 600;">Billiard Table Booking Website</h3>
                    <p style="color: #aaa; font-size: 15px; margin-bottom: 20px; line-height: 1.5;">A cross-platform fitness tracking application developed with Flutter</p>
                    <div class="project-tags" style="display: flex; gap: 10px; flex-wrap: wrap;">
                    <span style="background: rgba(255,45,32,0.2); color: #FF2D20; padding: 6px 12px; border-radius: 20px; font-size: 13px; font-weight: 500;">Laravel</span>
                    <span style="background: rgba(79,192,141,0.2); color: #4FC08D; padding: 6px 12px; border-radius: 20px; font-size: 13px; font-weight: 500;">Vue.js</span>
                    </div>
                </div>

                <div class="project-card" style="background: #1a1a1a; padding: 20px; border-radius: 15px; color: white; box-shadow: 0 4px 6px rgba(0,0,0,0.1); transition: transform 0.2s; cursor: pointer; border: 1px solid rgba(255,255,255,0.1);">
                    <img src="{{ asset('images/project3.jpg') }}" alt="Project 3" style="width: 100%; height: 180px; object-fit: cover; border-radius: 12px; margin-bottom: 20px; box-shadow: 0 2px 4px rgba(0,0,0,0.2);">
                    <h3 style="margin: 0 0 12px 0; font-size: 20px; font-weight: 600;">Stock Management System</h3>
                    <p style="color: #aaa; font-size: 15px; margin-bottom: 20px; line-height: 1.5;">A collaborative project management tool built with React and Express.js</p>
                    <div class="project-tags" style="display: flex; gap: 10px; flex-wrap: wrap;">
                        <span style="background: rgba(2,86,155,0.2); color: #02569B; padding: 6px 12px; border-radius: 20px; font-size: 13px; font-weight: 500;">Flutter</span>
                        <span style="background: rgba(50,50,50,0.4); color: #fff; padding: 6px 12px; border-radius: 20px; font-size: 13px; font-weight: 500;">Express.js</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="social-icons">
            <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
            <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
            <a href="#" class="social-icon"><i class="fab fa-linkedin"></i></a>
            <a href="#" class="social-icon"><i class="fab fa-github"></i></a>
        </div>
    </div>
</body>
</html>
