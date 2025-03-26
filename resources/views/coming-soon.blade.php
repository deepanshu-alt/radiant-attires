<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Radiant Attires | Coming Soon</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&display=swap');
        
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f8f8;
            overflow-x: hidden;
        }
        
        .brand-title {
            font-family: 'Playfair Display', serif;
            background: linear-gradient(90deg, #ff4e50, #f9d423);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        
        .slogan {
            font-family: 'Playfair Display', serif;
            font-style: italic;
        }
        
        .btn-gradient {
            background: linear-gradient(90deg, #ff4e50, #f9d423);
            transition: all 0.3s ease;
        }
        
        .btn-gradient:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(255,78,80,0.3);
        }
        
        .input-field {
            transition: all 0.3s ease;
            border: 1px solid #e2e8f0;
        }
        
        .input-field:focus {
            border-color: #ff4e50;
            box-shadow: 0 0 0 3px rgba(255,78,80,0.1);
        }
        
        .countdown-box {
            background: linear-gradient(135deg, rgba(255,255,255,0.9) 0%, rgba(255,255,255,0.7) 100%);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0,0,0,0.1);
            transform: translateZ(0);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }
        
        .countdown-box:hover {
            transform: translateZ(10px) scale(1.05);
            box-shadow: 0 20px 40px rgba(255,78,80,0.2);
        }
        
        .floating {
            animation: floating 6s ease-in-out infinite;
        }
        
        .floating-reverse {
            animation: floating-reverse 7s ease-in-out infinite;
        }
        
        .bouncing {
            animation: bouncing 4s ease-in-out infinite;
        }
        
        .spinning {
            animation: spinning 8s linear infinite;
        }
        
        .flip-effect {
            animation: flip-effect 10s ease-in-out infinite;
        }
        
        .swing-effect {
            animation: swing-effect 5s ease-in-out infinite;
        }
        
        .clothing-icon {
            position: absolute;
            opacity: 0.8;
            transition: all 0.5s ease;
            filter: drop-shadow(0 4px 6px rgba(0, 0, 0, 0.1));
            will-change: transform;
            z-index: -1;
        }
        
        .clothing-icon:hover {
            transform: scale(1.2);
            opacity: 1;
        }
        
        .fashion-item {
            position: absolute;
            transition: all 0.5s ease;
            will-change: transform;
        }
        
        @keyframes floating {
            0% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-15px) rotate(2deg); }
            100% { transform: translateY(0px) rotate(0deg); }
        }
        
        @keyframes floating-reverse {
            0% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(15px) rotate(-2deg); }
            100% { transform: translateY(0px) rotate(0deg); }
        }
        
        @keyframes bouncing {
            0%, 100% { transform: translateY(0) scale(1); }
            50% { transform: translateY(-20px) scale(1.05); }
        }
        
        @keyframes spinning {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
        
        @keyframes flip-effect {
            0% { transform: perspective(400px) rotateY(0); }
            25% { transform: perspective(400px) rotateY(180deg); }
            50% { transform: perspective(400px) rotateY(180deg) rotateX(180deg); }
            75% { transform: perspective(400px) rotateX(180deg); }
            100% { transform: perspective(400px) rotateY(0); }
        }
        
        @keyframes swing-effect {
            0%, 100% { transform: rotate(0deg); }
            25% { transform: rotate(15deg); }
            75% { transform: rotate(-15deg); }
        }
        
        .fashion-card {
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 15px 35px rgba(0,0,0,0.15);
            transform: rotate(-5deg);
            transition: all 0.5s cubic-bezier(0.23, 1, 0.32, 1);
            will-change: transform;
        }
        
        .fashion-card:hover {
            transform: rotate(0deg) scale(1.05) translateY(-10px);
            box-shadow: 0 30px 60px rgba(255,78,80,0.2);
        }
        
        .circle {
            position: absolute;
            border-radius: 50%;
            background: linear-gradient(135deg, rgba(255,78,80,0.1) 0%, rgba(249,212,35,0.1) 100%);
            animation: pulse-circle 8s ease-in-out infinite alternate;
        }
        
        @keyframes pulse-circle {
            0% { transform: scale(1); opacity: 0.3; }
            100% { transform: scale(1.2); opacity: 0.1; }
        }
        
        .canvas-container {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
        }
    
        /* Animated background gradient */
        .bg-gradient-animated {
            background: linear-gradient(-45deg, #ff4e5033, #f9d42333, #ff4e5022, #f9d42322);
            background-size: 400% 400%;
            animation: gradient 15s ease infinite;
        }
    
        @keyframes gradient {
            0% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
            100% {
                background-position: 0% 50%;
            }
        }
    
        /* Social button hover effect */
        .social-btn {
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            transform-origin: center;
        }
        
        .social-btn:hover {
            transform: translateY(-3px) scale(1.2);
            background: linear-gradient(90deg, #ff4e50, #f9d423);
            color: white;
        }
    
        /* Enhanced pulse animation for notify button */
        .pulse {
            animation: enhanced-pulse 2s infinite;
        }
    
        @keyframes enhanced-pulse {
            0% {
                box-shadow: 0 0 0 0 rgba(255, 78, 80, 0.7);
                transform: scale(1);
            }
            50% {
                box-shadow: 0 0 0 10px rgba(255, 78, 80, 0);
                transform: scale(1.05);
            }
            100% {
                box-shadow: 0 0 0 0 rgba(255, 78, 80, 0);
                transform: scale(1);
            }
        }
    
        /* Progress bar animation */
        .progress-bar {
            width: 0%;
            height: 4px;
            background: linear-gradient(90deg, #ff4e50, #f9d423);
            position: fixed;
            top: 0;
            left: 0;
            z-index: 100;
        }
    
        /* Stylish scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }
        
        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }
        
        ::-webkit-scrollbar-thumb {
            background: linear-gradient(180deg, #ff4e50, #f9d423);
            border-radius: 10px;
        }
        
        /* Feature card enhanced animations */
        .feature-card {
            transition: all 0.5s cubic-bezier(0.23, 1, 0.32, 1);
            overflow: hidden;
            z-index: 1;
            position: relative;
        }
        
        .feature-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(255,78,80,0.05) 0%, rgba(249,212,35,0.05) 100%);
            transform: translateY(100%);
            transition: transform 0.6s cubic-bezier(0.23, 1, 0.32, 1);
            z-index: -1;
        }
        
        .feature-card:hover::before {
            transform: translateY(0);
        }
        
        .feature-card:hover {
            transform: translateY(-15px);
            box-shadow: 0 30px 60px rgba(0,0,0,0.1);
        }
        
        .feature-card:hover .feature-icon {
            transform: rotateY(360deg);
        }
        
        .feature-icon {
            transition: transform 0.8s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            transform-style: preserve-3d;
        }
        
        /* Text reveal animations */
        .reveal-text {
            position: relative;
            overflow: hidden;
        }
        
        .reveal-text::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, #ff4e50, #f9d423);
            transform: translateX(-100%);
            z-index: 1;
        }
        
        /* Mobile responsiveness improvements */
        @media (max-width: 768px) {
            .countdown-box {
                width: 22%;
                padding: 0.5rem;
            }
            
            .fashion-item {
                position: relative;
                margin-bottom: 1rem;
                width: 100% !important;
                left: 0 !important;
                top: auto !important;
                right: auto !important;
                bottom: auto !important;
                opacity: 1 !important;
            }
            
            #imageContainer {
                display: flex;
                flex-direction: column;
                height: auto !important;
                min-height: 500px;
                width: 100% !important;
            }
            
            .input-field {
                font-size: 0.9rem;
            }
            
            .fashion-card {
                transform: rotate(0deg);
            }
            
            .flex-col-reverse {
                flex-direction: column !important;
            }
            
            .w-full {
                width: 100% !important;
            }
            
            .clothing-icon {
                display: none;
            }
            
            .md\:flex-row {
                flex-direction: column !important;
            }
            
            .md\:w-1\/2 {
                width: 100% !important;
            }
            
            .container {
                width: 100% !important;
                padding-left: 15px !important;
                padding-right: 15px !important;
            }
        }
        
        @media (max-width: 480px) {
            .brand-title {
                font-size: 2.5rem;
            }
            
            .slogan {
                font-size: 1.2rem;
            }
            
            .countdown-box {
                width: 22%;
                padding: 0.4rem;
            }
        }
        
        /* Staggered animation for feature cards */
        .stagger-in {
            opacity: 0;
            transform: translateY(30px);
        }
        
        /* 3D-rotation effect for icons */
        .rotate-3d {
            animation: rotate-3d 6s infinite linear;
            transform-style: preserve-3d;
        }
        
        @keyframes rotate-3d {
            0% { transform: rotateX(0) rotateY(0) rotateZ(0); }
            100% { transform: rotateX(360deg) rotateY(360deg) rotateZ(360deg); }
        }
        
        /* Elastic entry effect */
        .elastic-in {
            animation: elastic-in 1s cubic-bezier(0.175, 0.885, 0.32, 1.275) forwards;
        }
        
        @keyframes elastic-in {
            0% { transform: scale(0); opacity: 0; }
            70% { transform: scale(1.1); opacity: 1; }
            100% { transform: scale(1); opacity: 1; }
        }
        
        /* Glitch effect for modern look */
        .glitch-effect {
            animation: glitch-effect 5s infinite;
            position: relative;
        }
        
        @keyframes glitch-effect {
            0%, 100% { transform: translate(0); }
            20% { transform: translate(-2px, 2px); }
            20.5% { transform: translate(2px, -2px); }
            21% { transform: translate(0); }
            50% { transform: translate(0); }
            50.5% { transform: translate(-2px, 2px); }
            51% { transform: translate(2px, -2px); }
            51.5% { transform: translate(0); }
        }
        
        /* Parallax effect for elements */
        .parallax {
            transition: transform 0.2s cubic-bezier(0.25, 0.46, 0.45, 0.94);
            will-change: transform;
        }
    </style>
</head>
<body class="min-h-screen bg-gradient-animated">

    <div class="preloader fixed inset-0 z-50 flex items-center justify-center bg-white">
        <div class="relative">
            <div class="brand-title text-6xl font-bold elastic-in">R</div>
            <div class="animate-ping absolute inset-0 rounded-full bg-gradient-to-r from-pink-500 to-yellow-500 opacity-25"></div>
        </div>
    </div>

    <div class="progress-bar" id="progressBar"></div>
    <div class="canvas-container" id="canvas"></div>

    <!-- Clothing Icons -->
    <div class="clothing-icon bouncing" style="width: 40px; height: 40px; top: 15%; left: 5%;">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-pink-600">
            <path d="M20.38 3.46L16 2L12 4L8 2L3.62 3.46a1 1 0 0 0-.62.92v15.97a1 1 0 0 0 1.08.82L8 20l4 2 4-2 3.92 1.17a1 1 0 0 0 1.08-.82V4.38a1 1 0 0 0-.62-.92z"></path>
            <path d="M12 4v16"></path>
        </svg>
    </div>
    
    <div class="clothing-icon floating-reverse" style="width: 50px; height: 50px; top: 25%; right: 8%;">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-yellow-500">
            <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
            <path d="M3 6h18"></path>
            <path d="M16 10a4 4 0 0 1-8 0"></path>
        </svg>
    </div>
    
    <div class="clothing-icon spinning" style="width: 35px; height: 35px; top: 60%; left: 12%;">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-pink-400">
            <circle cx="12" cy="12" r="10"></circle>
            <path d="M8 14s1.5 2 4 2 4-2 4-2"></path>
            <line x1="9" y1="9" x2="9.01" y2="9"></line>
            <line x1="15" y1="9" x2="15.01" y2="9"></line>
        </svg>
    </div>
    
    <div class="clothing-icon swing-effect" style="width: 45px; height: 45px; bottom: 20%; right: 15%;">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-yellow-600">
            <path d="M4 11a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v7a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2v-7z"></path>
            <rect x="4" y="11" width="16" height="9" rx="2"></rect>
            <path d="M8 5V3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v2"></path>
            <path d="M8 11V5a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v6"></path>
        </svg>
    </div>
    
    <div class="clothing-icon bouncing" style="width: 50px; height: 50px; bottom: 35%; left: 20%;">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-pink-600">
            <path d="M20 6h-3V4c0-1.1-.9-2-2-2H9c-1.1 0-2 .9-2 2v2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V8c0-1.1-.9-2-2-2z"></path>
            <path d="M14 4H10v2h4V4z"></path>
        </svg>
    </div>

    <div class="circle" style="width: 300px; height: 300px; top: -150px; right: -150px; opacity: 0.6;"></div>
    <div class="circle" style="width: 500px; height: 500px; bottom: -250px; left: -250px; opacity: 0.3;"></div>
    
    <div class="container mx-auto px-4 py-16 relative z-10">
        <header class="flex justify-between items-center mb-16 opacity-0" id="header">
            <div class="w-40 transform scale-0" id="logo">
                <div class="text-4xl font-bold brand-title glitch-effect">R</div>
            </div>
            <a href="login" class="text-pink-600 font-medium flex items-center space-x-2 hover:text-pink-800 transition-all" id="loginLink">
                <span>Login</span>
                <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9 5L16 12L9 19" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </a>
        </header>
        
        <div class="flex flex-col md:flex-row items-center justify-between gap-10 mt-10">
            <div class="w-full md:w-1/2 text-center md:text-left mb-10 md:mb-0">
                <h1 class="brand-title text-5xl md:text-7xl font-bold mb-6 opacity-0 transform translate-y-10" id="mainTitle">Radiant Attires</h1>
                <p class="slogan text-xl md:text-2xl text-gray-600 mb-8 opacity-0 transform translate-y-10" id="tagline">"Wear the glow, own the show"</p>
                <p class="text-gray-700 max-w-xl mb-10 opacity-0 transform translate-y-10" id="description">
                    We're crafting something extraordinary to elevate your fashion journey. Our curated collection of premium attire is designed to make you shine. Stay tuned for the official launch.
                </p>
                
                <div class="flex flex-wrap justify-center md:justify-start gap-6 mb-12 opacity-0" id="countdown">
                    <div class="countdown-box p-4 w-24 text-center bouncing">
                        <div class="text-3xl font-bold text-gray-800" id="days">00</div>
                        <div class="text-sm text-gray-500">Days</div>
                    </div>
                    <div class="countdown-box p-4 w-24 text-center floating" style="animation-delay: 0.2s">
                        <div class="text-3xl font-bold text-gray-800" id="hours">00</div>
                        <div class="text-sm text-gray-500">Hours</div>
                    </div>
                    <div class="countdown-box p-4 w-24 text-center bouncing" style="animation-delay: 0.4s">
                        <div class="text-3xl font-bold text-gray-800" id="minutes">00</div>
                        <div class="text-sm text-gray-500">Minutes</div>
                    </div>
                    <div class="countdown-box p-4 w-24 text-center floating" style="animation-delay: 0.6s">
                        <div class="text-3xl font-bold text-gray-800" id="seconds">00</div>
                        <div class="text-sm text-gray-500">Seconds</div>
                    </div>
                </div>
                
                <div class="max-w-md mx-auto md:mx-0 opacity-0" id="subscribeForm">
                    <p class="text-gray-700 mb-3">Be the first to know when we launch:</p>
                    <div class="flex">
                        <input type="email" placeholder="Your email address" class="input-field flex-grow py-3 px-4 rounded-l-lg focus:outline-none">
                        <button class="btn-gradient pulse py-3 px-6 text-white font-medium rounded-r-lg">Notify Me</button>
                    </div>
                </div>
                
                <div class="mt-12 flex justify-center md:justify-start space-x-4 opacity-0" id="socialLinks">
                    <a href="#" class="social-btn flex items-center justify-center w-10 h-10 rounded-full bg-white shadow-md text-gray-700">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#" class="social-btn flex items-center justify-center w-10 h-10 rounded-full bg-white shadow-md text-gray-700">
                        <i class="fab fa-tiktok"></i>
                    </a>
                    <a href="#" class="social-btn flex items-center justify-center w-10 h-10 rounded-full bg-white shadow-md text-gray-700">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="social-btn flex items-center justify-center w-10 h-10 rounded-full bg-white shadow-md text-gray-700">
                        <i class="fab fa-pinterest"></i>
                    </a>
                </div>
            </div>
            
            <div class="w-full md:w-1/2 relative h-96 md:h-auto opacity-0" id="imageContainer">
                <!-- Floating fashion items -->
                <div class="fashion-item absolute top-0 left-0 w-64 opacity-0" id="fashionItem1">
                    <div class="fashion-card floating-reverse bg-white p-3">
                        <div class="w-full h-48 rounded-lg mb-3 overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1539109136881-3be0616acf4b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" alt="Fashion item" class="w-full h-full object-cover">
                        </div>
                        <div>
                            <h3 class="font-medium text-gray-800">Autumn Collection</h3>
                            <div class="mt-2 flex items-center">
                                <span class="inline-block bg-gradient-to-r from-pink-500 to-yellow-500 text-white text-xs px-2 py-1 rounded-full">Coming Soon</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="fashion-item absolute top-1/4 right-0 w-56 opacity-0" id="fashionItem2" style="animation-delay: 0.2s">
                    <div class="fashion-card bouncing bg-white p-3">
                        <div class="w-full h-40 rounded-lg mb-3 overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1496747611176-843222e1e57c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" alt="Fashion item" class="w-full h-full object-cover">
                        </div>
                        <div>
                            <h3 class="font-medium text-gray-800">Summer Vibes</h3>
                            <div class="mt-2 flex items-center">
                                <span class="inline-block bg-gradient-to-r from-pink-500 to-yellow-500 text-white text-xs px-2 py-1 rounded-full">Exclusive</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="fashion-item absolute bottom-10 left-1/4 w-52 opacity-0" id="fashionItem3" style="animation-delay: 0.4s">
                    <div class="fashion-card swing-effect bg-white p-3">
                        <div class="w-full h-36 rounded-lg mb-3 overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1515886657613-9f3515b0c78f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" alt="Fashion item" class="w-full h-full object-cover">
                        </div>
                        <div>
                            <h3 class="font-medium text-gray-800">Radiant Evening</h3>
                            <div class="mt-2 flex items-center">
                                <span class="inline-block bg-gradient-to-r from-pink-500 to-yellow-500 text-white text-xs px-2 py-1 rounded-full">Premium</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="mt-20 text-center opacity-0" id="features">
            <h2 class="text-2xl md:text-3xl font-bold mb-10">What to Expect</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="feature-card stagger-in bg-white p-6 rounded-xl shadow-lg">
                    <div class="text-pink-600 text-3xl mb-4 feature-icon">
                        <i class="fas fa-award"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Premium Quality</h3>
                    <p class="text-gray-600">Ethically sourced fabrics and materials crafted with precision for lasting comfort and style.</p>
                </div>
                
                <div class="feature-card stagger-in bg-white p-6 rounded-xl shadow-lg" style="transition-delay: 0.2s">
                    <div class="text-pink-600 text-3xl mb-4 feature-icon">
                        <i class="fas fa-palette"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Trendsetting Designs</h3>
                    <p class="text-gray-600">Unique collections that blend contemporary fashion with timeless elegance for every occasion.</p>
                </div>
                
                <div class="feature-card stagger-in bg-white p-6 rounded-xl shadow-lg" style="transition-delay: 0.4s">
                    <div class="text-pink-600 text-3xl mb-4 feature-icon">
                        <i class="fas fa-shipping-fast"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Global Shipping</h3>
                    <p class="text-gray-600">Fast, reliable delivery to your doorstep anywhere in the world with our premium shipping service.</p>
                </div>
            </div>
        </div>
        
        <div class="mt-24 opacity-0" id="aboutSection">
            <div class="flex flex-col-reverse md:flex-row items-center justify-between gap-10">
                <div class="w-full md:w-1/2 bg-white p-8 rounded-2xl shadow-xl transform -rotate-1">
                    <h2 class="text-2xl font-bold mb-4 reveal-text">Our Story</h2>
                    <p class="text-gray-700 mb-4">
                        Radiant Attires was born from a passion for creating clothing that makes people feel confident and empowered. Our founder's vision was simple: create fashion that radiates positivity and style.
                    </p>
                    <p class="text-gray-700">
                        With years of experience in the fashion industry, our team has curated a collection that combines luxury with accessibility. We believe that everyone deserves to shine, and our mission is to help you do just that.
                    </p>
                    <button class="mt-6 btn-gradient text-white font-medium py-2 px-6 rounded-lg">Learn More</button>
                </div>
                
                <div class="w-full md:w-1/2 relative h-64 mb-8 md:mb-0">
                    <div class="absolute inset-0 rounded-2xl overflow-hidden shadow-2xl transform rotate-3">
                        <img src="https://images.unsplash.com/photo-1441984904996-e0b6ba687e04?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" alt="Fashion design studio" class="w-full h-full object-cover">
                    </div>
                </div>
            </div>
        </div>
        
        <div class="mt-24 text-center opacity-0" id="faqSection">
            <h2 class="text-2xl md:text-3xl font-bold mb-10">Frequently Asked Questions</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="bg-white p-6 rounded-xl shadow-lg text-left">
                    <h3 class="text-xl font-semibold mb-2">When will the store launch?</h3>
                    <p class="text-gray-600">Our online store is set to launch in the coming weeks. Sign up for our newsletter to be the first to know!</p>
                </div>
                
                <div class="bg-white p-6 rounded-xl shadow-lg text-left">
                    <h3 class="text-xl font-semibold mb-2">Do you ship internationally?</h3>
                    <p class="text-gray-600">Yes, we offer worldwide shipping to bring our radiant collection to fashion enthusiasts everywhere.</p>
                </div>
                
                <div class="bg-white p-6 rounded-xl shadow-lg text-left">
                    <h3 class="text-xl font-semibold mb-2">What payment methods do you accept?</h3>
                    <p class="text-gray-600">We accept all major credit cards, PayPal, and various local payment options for your convenience.</p>
                </div>
                
                <div class="bg-white p-6 rounded-xl shadow-lg text-left">
                    <h3 class="text-xl font-semibold mb-2">What is your return policy?</h3>
                    <p class="text-gray-600">We offer hassle-free returns within 30 days of purchase. Your satisfaction is our priority.</p>
                </div>
            </div>
        </div>
    </div>
    
    <footer class="mt-24 py-10 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="brand-title text-3xl font-bold mb-6 md:mb-0">R</div>
                
                <div class="flex flex-col md:flex-row items-center space-y-4 md:space-y-0 md:space-x-8">
                    <a href="#" class="text-gray-600 hover:text-pink-600 transition-colors">About Us</a>
                    <a href="#" class="text-gray-600 hover:text-pink-600 transition-colors">Contact</a>
                    <a href="#" class="text-gray-600 hover:text-pink-600 transition-colors">Terms</a>
                    <a href="#" class="text-gray-600 hover:text-pink-600 transition-colors">Privacy</a>
                </div>
                
                <div class="mt-6 md:mt-0 flex space-x-4">
                    <a href="#" class="social-btn flex items-center justify-center w-10 h-10 rounded-full bg-white shadow-md text-gray-700">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#" class="social-btn flex items-center justify-center w-10 h-10 rounded-full bg-white shadow-md text-gray-700">
                        <i class="fab fa-tiktok"></i>
                    </a>
                    <a href="#" class="social-btn flex items-center justify-center w-10 h-10 rounded-full bg-white shadow-md text-gray-700">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                </div>
            </div>
            
            <div class="text-center mt-8 text-gray-500 text-sm">
                &copy; 2025 Radiant Attires. All rights reserved.
            </div>
        </div>
    </footer>
    
    <script>
        // Preloader
        window.addEventListener('load', function() {
            setTimeout(() => {
                document.querySelector('.preloader').style.opacity = '0';
                setTimeout(() => {
                    document.querySelector('.preloader').style.display = 'none';
                }, 500);
            }, 1000);
        });
        
        // Progress bar
        window.addEventListener('scroll', function() {
            const scrollTop = document.documentElement.scrollTop || document.body.scrollTop;
            const scrollHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;
            const scrollPercentage = (scrollTop / scrollHeight) * 100;
            
            document.getElementById('progressBar').style.width = scrollPercentage + '%';
        });
        
        // Animation on scroll
        function animateOnScroll() {
            const elements = document.querySelectorAll('.stagger-in');
            
            elements.forEach((element, index) => {
                const rect = element.getBoundingClientRect();
                
                if (rect.top <= window.innerHeight * 0.8) {
                    setTimeout(() => {
                        element.style.opacity = '1';
                        element.style.transform = 'translateY(0)';
                    }, index * 100);
                }
            });
        }
        
        window.addEventListener('scroll', animateOnScroll);
        
        // Countdown timer
        function updateCountdown() {
            const launchDate = new Date("July 1, 2025 00:00:00").getTime();
            const now = new Date().getTime();
            const distance = launchDate - now;
            
            const days = Math.floor(distance / (1000 * 60 * 60 * 24));
            const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((distance % (1000 * 60)) / 1000);
            
            document.getElementById("days").innerHTML = days.toString().padStart(2, '0');
            document.getElementById("hours").innerHTML = hours.toString().padStart(2, '0');
            document.getElementById("minutes").innerHTML = minutes.toString().padStart(2, '0');
            document.getElementById("seconds").innerHTML = seconds.toString().padStart(2, '0');
        }
        
        setInterval(updateCountdown, 1000);
        updateCountdown();
        
        // Animations
        gsap.to("#header", {
            opacity: 1,
            duration: 1,
            delay: 1
        });
        
        gsap.to("#logo", {
            scale: 1,
            duration: 1.2,
            delay: 1.2,
            ease: "elastic.out(1, 0.3)"
        });
        
        gsap.to("#mainTitle", {
            opacity: 1,
            y: 0,
            duration: 0.8,
            delay: 1.4
        });
        
        gsap.to("#tagline", {
            opacity: 1,
            y: 0,
            duration: 0.8,
            delay: 1.6
        });
        
        gsap.to("#description", {
            opacity: 1,
            y: 0,
            duration: 0.8,
            delay: 1.8
        });
        
        gsap.to("#countdown", {
            opacity: 1,
            duration: 0.8,
            delay: 2
        });
        
        gsap.to("#subscribeForm", {
            opacity: 1,
            duration: 0.8,
            delay: 2.2
        });
        
        gsap.to("#socialLinks", {
            opacity: 1,
            duration: 0.8,
            delay: 2.4
        });
        
        gsap.to("#imageContainer", {
            opacity: 1,
            duration: 1,
            delay: 2.6
        });
        
        gsap.to("#fashionItem1", {
            opacity: 1,
            duration: 0.8,
            delay: 2.8
        });
        
        gsap.to("#fashionItem2", {
            opacity: 1,
            duration: 0.8,
            delay: 3
        });
        
        gsap.to("#fashionItem3", {
            opacity: 1,
            duration: 0.8,
            delay: 3.2
        });
        
        gsap.to("#features", {
            opacity: 1,
            duration: 0.8,
            delay: 3.4,
            onComplete: function() {
                animateOnScroll();
            }
        });
        
        gsap.to("#aboutSection", {
            opacity: 1,
            duration: 0.8,
            delay: 3.6
        });
        
        gsap.to("#faqSection", {
            opacity: 1,
            duration: 0.8,
            delay: 3.8
        });
        
        // Parallax effect
        document.addEventListener('mousemove', function(e) {
            const parallaxElements = document.querySelectorAll('.parallax');
            
            parallaxElements.forEach(element => {
                const speed = element.getAttribute('data-speed') || 0.05;
                const x = (window.innerWidth - e.pageX * speed) / 100;
                const y = (window.innerHeight - e.pageY * speed) / 100;
                
                element.style.transform = `translateX(${x}px) translateY(${y}px)`;
            });
        });
        
        // Background particles with Three.js
        const scene = new THREE.Scene();
        const camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 1000);
        const renderer = new THREE.WebGLRenderer({ alpha: true });
        
        renderer.setSize(window.innerWidth, window.innerHeight);
        document.getElementById('canvas').appendChild(renderer.domElement);
        
        // Create particles
        const particlesGeometry = new THREE.BufferGeometry();
        const particlesCount = 200;
        
        const posArray = new Float32Array(particlesCount * 3);
        
        for (let i = 0; i < particlesCount * 3; i++) {
            posArray[i] = (Math.random() - 0.5) * 10;
        }
        
        particlesGeometry.setAttribute('position', new THREE.BufferAttribute(posArray, 3));
        
        // Material
        const particlesMaterial = new THREE.PointsMaterial({
            size: 0.005,
            color: 0xff4e50,
            transparent: true,
            opacity: 0.8,
            blending: THREE.AdditiveBlending
        });
        
        // Mesh
        const particlesMesh = new THREE.Points(particlesGeometry, particlesMaterial);
        scene.add(particlesMesh);
        
        camera.position.z = 3;
        
        // Animation
        function animate() {
            requestAnimationFrame(animate);
            
            particlesMesh.rotation.x += 0.0005;
            particlesMesh.rotation.y += 0.0005;
            
            renderer.render(scene, camera);
        }
        
        animate();
        
        // Resize
        window.addEventListener('resize', function() {
            camera.aspect = window.innerWidth / window.innerHeight;
            camera.updateProjectionMatrix();
            renderer.setSize(window.innerWidth, window.innerHeight);
        });
    </script>
</body>
</html>