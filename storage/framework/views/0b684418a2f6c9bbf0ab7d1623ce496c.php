<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Radiant Attires | Login</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&display=swap');
        
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f8f8;
            overflow-x: hidden;
        }
        
        .login-container {
            background: linear-gradient(135deg, rgba(255,255,255,0.9) 0%, rgba(255,255,255,0.7) 100%);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0,0,0,0.1);
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
        
        .login-btn {
            background: linear-gradient(90deg, #ff4e50, #f9d423);
            transition: all 0.3s ease;
        }
        
        .login-btn:hover {
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
        
        .fashion-bg {
            background-size: cover;
            background-position: center;
            position: relative;
            overflow: hidden;
        }
        
        .social-btn {
            transition: all 0.3s ease;
        }
        
        .social-btn:hover {
            transform: translateY(-3px);
        }
        
        .fashion-item {
            position: absolute;
            opacity: 0;
            transform: scale(0.9);
            transition: all 0.5s ease;
        }
        
        .fashion-card {
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 15px 25px rgba(0,0,0,0.1);
            transform: rotate(-5deg);
            transition: all 0.5s ease;
        }
        
        .fashion-card:hover {
            transform: rotate(0deg) scale(1.05);
        }
        
        .product-tag {
            background: linear-gradient(90deg, #ff4e50, #f9d423);
            border-radius: 20px;
            padding: 4px 12px;
            font-size: 12px;
            color: white;
            display: inline-block;
            transform: translateY(20px);
            opacity: 0;
            animation: fadeIn 0.6s forwards;
            animation-delay: 1s;
        }
        
        .floating {
            animation: floating 3s ease-in-out infinite;
        }
        
        @keyframes floating {
            0% { transform: translateY(0px) rotate(-5deg); }
            50% { transform: translateY(-15px) rotate(-2deg); }
            100% { transform: translateY(0px) rotate(-5deg); }
        }
        
        @keyframes fadeIn {
            to {
                opacity: 1;
                transform: translateY(0);
            }
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
        
        /* AI Assistant animation */
        .ai-pulse {
            position: relative;
        }
        
        .ai-pulse::after {
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            background: radial-gradient(circle, rgba(255,78,80,0.2) 0%, rgba(255,255,255,0) 70%);
            border-radius: 50%;
            animation: pulse 2s infinite;
        }
        
        @keyframes pulse {
            0% {
                transform: scale(0.95);
                opacity: 0.7;
            }
            70% {
                transform: scale(1.1);
                opacity: 0;
            }
            100% {
                transform: scale(0.95);
                opacity: 0;
            }
        }
    </style>
</head>
<body class="min-h-screen flex items-center justify-center p-4 bg-gray-50">
    <div class="login-container flex w-full max-w-5xl overflow-hidden">
        <!-- Login Form Side -->
        <div class="w-full md:w-1/2 p-8 md:p-10">
            <div class="mb-8 text-center">
                <div class="flex justify-center mb-3">
                    <div class="w-20 h-20 relative mb-2 opacity-0" id="logo">
                        
                        <img src="<?php echo e(asset('images/radiant_attires_transparent.png')); ?>" alt="Logo" class="w-full ">

                    </div>
                </div>
                <h1 class="brand-title text-4xl md:text-5xl font-bold mb-2 opacity-0" id="brandTitle">Radiant Attires</h1>
                <p class="slogan text-lg text-gray-600 opacity-0" id="brandSlogan">"Wear the glow, own the show"</p>
            </div>
            
            <div class="mb-8">
                <h2 class="text-2xl font-semibold mb-6 text-gray-800 opacity-0" id="welcomeText">Welcome to Style Central</h2>
                
                <form action="#" method="POST">
                    <div class="mb-6 opacity-0" id="emailField">
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email Address</label>
                        <div class="relative">
                            <span class="absolute inset-y-0 left-0 pl-3 flex items-center text-gray-500">
                                <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M3 8L10.89 13.26C11.2187 13.4793 11.6049 13.5963 12 13.5963C12.3951 13.5963 12.7813 13.4793 13.11 13.26L21 8M5 19H19C19.5304 19 20.0391 18.7893 20.4142 18.4142C20.7893 18.0391 21 17.5304 21 17V7C21 6.46957 20.7893 5.96086 20.4142 5.58579C20.0391 5.21071 19.5304 5 19 5H5C4.46957 5 3.96086 5.21071 3.58579 5.58579C3.21071 5.96086 3 6.46957 3 7V17C3 17.5304 3.21071 18.0391 3.58579 18.4142C3.96086 18.7893 4.46957 19 5 19Z" stroke="#4B5563" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </span>
                            <input type="email" id="email" name="email" class="input-field pl-10 w-full py-3 px-4 rounded-lg focus:outline-none" placeholder="your@email.com" required>
                        </div>
                    </div>
                    
                    <div class="mb-6 opacity-0" id="passwordField">
                        <div class="flex justify-between items-center mb-2">
                            <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                            <a href="#" class="text-sm text-pink-600 hover:text-pink-800">Forgot Password?</a>
                        </div>
                        <div class="relative">
                            <span class="absolute inset-y-0 left-0 pl-3 flex items-center text-gray-500">
                                <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 14.5V16.5M7 10.5V8.5C7 5.73858 9.23858 3.5 12 3.5C14.7614 3.5 17 5.73858 17 8.5V10.5M7 10.5C5.89543 10.5 5 11.3954 5 12.5V19.5C5 20.6046 5.89543 21.5 7 21.5H17C18.1046 21.5 19 20.6046 19 19.5V12.5C19 11.3954 18.1046 10.5 17 10.5M7 10.5H17" stroke="#4B5563" stroke-width="2" stroke-linecap="round"/>
                                </svg>
                            </span>
                            <input type="password" id="password" name="password" class="input-field pl-10 w-full py-3 px-4 rounded-lg focus:outline-none" placeholder="••••••••" required>
                            <span class="absolute inset-y-0 right-0 pr-3 flex items-center text-gray-500 cursor-pointer">
                                <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2.03601 12.322C1.96005 12.1146 1.96005 11.8854 2.03601 11.678C3.42417 7.93772 7.36434 5 12.0002 5C16.6361 5 20.5762 7.93772 21.9644 11.678C22.0404 11.8854 22.0404 12.1146 21.9644 12.322C20.5762 16.0623 16.6361 19 12.0002 19C7.36434 19 3.42417 16.0623 2.03601 12.322Z" stroke="#4B5563" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M15 12C15 13.6569 13.6569 15 12 15C10.3431 15 9 13.6569 9 12C9 10.3431 10.3431 9 12 9C13.6569 9 15 10.3431 15 12Z" stroke="#4B5563" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </span>
                        </div>
                    </div>
                    <div class="mb-6 flex justify-center">
                        <div class="g-recaptcha" data-sitekey="<?php echo e(config('services.recaptcha.site')); ?>"></div>
                    </div>                    
                    <div class="mb-6 opacity-0" id="rememberMe">
                        <label class="flex items-center">
                            <input type="checkbox" class="form-checkbox h-5 w-5 text-pink-600 rounded" checked>
                            <span class="ml-2 text-sm text-gray-700">Remember me</span>
                        </label>
                    </div>
                    
                    <button type="submit" class="login-btn w-full py-3 text-white font-medium rounded-lg shadow-lg opacity-0" id="loginButton">
                        <span class="flex items-center justify-center">
                            <svg class="w-5 h-5 mr-2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15 3H19C19.5304 3 20.0391 3.21071 20.4142 3.58579C20.7893 3.96086 21 4.46957 21 5V19C21 19.5304 20.7893 20.0391 20.4142 20.4142C20.0391 20.7893 19.5304 21 19 21H15M10 17L15 12M15 12L10 7M15 12H3" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            Sign In
                        </span>
                    </button>
                </form>
            </div>
            
            <div class="text-center">
                <p class="text-gray-600 mb-6 opacity-0" id="socialDivider">Or continue with</p>
                
                <div class="flex justify-center space-x-4 mb-8">
                    <a href="#" class="social-btn flex items-center justify-center w-12 h-12 rounded-full bg-white shadow-md text-gray-700 opacity-0" id="googleBtn">
                        <i class="fab fa-google"></i>
                    </a>
                    <a href="#" class="social-btn flex items-center justify-center w-12 h-12 rounded-full bg-white shadow-md text-gray-700 opacity-0" id="facebookBtn">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="social-btn flex items-center justify-center w-12 h-12 rounded-full bg-white shadow-md text-gray-700 opacity-0" id="appleBtn">
                        <i class="fab fa-apple"></i>
                    </a>
                </div>
                
                <div class="opacity-0" id="signupLink">
                    <p class="text-gray-600">
                        New to Radiant Attires? 
                        <a href="registration" class="text-pink-600 font-medium hover:text-pink-800">Create an account</a>
                    </p>
                </div>
            </div>
        </div>
        
        <!-- Fashion Showcase Side -->
        <div class="hidden md:block md:w-1/2 fashion-bg bg-gradient-to-r from-pink-50 to-yellow-50 relative p-6">
            <div class="absolute top-6 right-6 flex items-center opacity-0" id="aiFeature">
                <div class="ai-pulse flex items-center justify-center w-10 h-10 rounded-full bg-white shadow-lg mr-3">
                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 16C14.2091 16 16 14.2091 16 12C16 9.79086 14.2091 8 12 8C9.79086 8 8 9.79086 8 12C8 14.2091 9.79086 16 12 16Z" stroke="url(#paint2_linear)" stroke-width="2"/>
                        <path d="M21 12C21 12 16.9706 17 12 17C7.02944 17 3 12 3 12C3 12 7.02944 7 12 7C16.9706 7 21 12 21 12Z" stroke="url(#paint3_linear)" stroke-width="2"/>
                        <defs>
                            <linearGradient id="paint2_linear" x1="8" y1="12" x2="16" y2="12" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#ff4e50"/>
                                <stop offset="1" stop-color="#f9d423"/>
                            </linearGradient>
                            <linearGradient id="paint3_linear" x1="3" y1="12" x2="21" y2="12" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#ff4e50"/>
                                <stop offset="1" stop-color="#f9d423"/>
                            </linearGradient>
                        </defs>
                    </svg>
                </div>
                <span class="text-sm font-medium text-gray-800">AI Style Assistant</span>
            </div>
            
            <div class="absolute top-1/4 left-1/2 transform -translate-x-1/2 -translate-y-1/4 w-64 opacity-0" id="fashionCard1">
                <div class="fashion-card floating bg-white p-3">
                    <div class="w-full h-44 rounded-lg mb-3 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1515886657613-9f3515b0c78f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" alt="Fashion item" class="w-full h-full object-cover">
                    </div>
                    <div>
                        <div class="flex justify-between items-start mb-1">
                            <h3 class="font-medium text-gray-800">Summer Collection</h3>
                            <span class="text-pink-600 font-semibold">$49.99</span>
                        </div>
                        <p class="text-xs text-gray-500 mb-2">Premium cotton blend, perfect for summer</p>
                        <span class="product-tag">Trending</span>
                    </div>
                </div>
            </div>
            
            <div class="absolute bottom-1/4 right-6 w-56 opacity-0" id="fashionCard2">
                <div class="fashion-card floating bg-white p-3" style="animation-delay: 0.2s">
                    <div class="w-full h-40 rounded-lg mb-3 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1585487000160-6ebcfceb0d03?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" alt="Fashion item" class="w-full h-full object-cover">
                    </div>
                    <div>
                        <div class="flex justify-between items-start mb-1">
                            <h3 class="font-medium text-gray-800">Evening Glow</h3>
                            <span class="text-pink-600 font-semibold">$79.99</span>
                        </div>
                        <p class="text-xs text-gray-500 mb-2">Elegant design for special occasions</p>
                        <span class="product-tag">New Arrival</span>
                    </div>
                </div>
            </div>
            
            <div class="absolute bottom-16 left-8 w-48 opacity-0" id="fashionCard3">
                <div class="fashion-card floating bg-white p-3" style="animation-delay: 0.4s">
                    <div class="w-full h-36 rounded-lg mb-3 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1552374196-1ab2a1c593e8?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" alt="Fashion item" class="w-full h-full object-cover">
                    </div>
                    <div>
                        <div class="flex justify-between items-start mb-1">
                            <h3 class="font-medium text-gray-800">Urban Style</h3>
                            <span class="text-pink-600 font-semibold">$39.99</span>
                        </div>
                        <p class="text-xs text-gray-500 mb-2">Street fashion at its finest</p>
                        <span class="product-tag">Best Seller</span>
                    </div>
                </div>
            </div>
            
            <div class="absolute bottom-6 w-full text-center opacity-0" id="fashionTagline">
                <p class="text-gray-600 text-sm font-medium">Explore our AI-powered style recommendations</p>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Animation timeline
            const tl = gsap.timeline();
            
            // Logo and brand animations
            tl.to('#logo', {opacity: 1, y: -10, duration: 0.6, ease: 'back.out(1.7)'})
              .to('#brandTitle', {opacity: 1, y: -10, duration: 0.6, ease: 'back.out(1.7)'}, '-=0.3')
              .to('#brandSlogan', {opacity: 1, y: -5, duration: 0.6}, '-=0.3')
              .to('#welcomeText', {opacity: 1, y: -5, duration: 0.6}, '-=0.3');
            
            // Form field animations
            tl.to('#emailField', {opacity: 1, y: -5, duration: 0.5}, '-=0.2')
              .to('#passwordField', {opacity: 1, y: -5, duration: 0.5}, '-=0.3')
              .to('#rememberMe', {opacity: 1, duration: 0.5}, '-=0.3')
              .to('#loginButton', {opacity: 1, y: -5, duration: 0.5}, '-=0.3');
            
            // Social login and sign up animations
            tl.to('#socialDivider', {opacity: 1, duration: 0.5}, '-=0.2')
              .to('#googleBtn', {opacity: 1, scale: 1.1, duration: 0.4}, '-=0.3')
              .to('#googleBtn', {scale: 1, duration: 0.2})
              .to('#facebookBtn', {opacity: 1, scale: 1.1, duration: 0.4}, '-=0.5')
              .to('#facebookBtn', {scale: 1, duration: 0.2})
              .to('#appleBtn', {opacity: 1, scale: 1.1, duration: 0.4}, '-=0.5')
              .to('#appleBtn', {scale: 1, duration: 0.2})
              .to('#signupLink', {opacity: 1, duration: 0.5}, '-=0.3');
            
            // Fashion cards animation
            tl.to('#aiFeature', {opacity: 1, duration: 0.6}, '-=0.5')
              .to('#fashionCard1', {opacity: 1, scale: 1, y: 20, duration: 0.7, ease: 'back.out(1.4)'}, '-=0.4')
              .to('#fashionCard2', {opacity: 1, scale: 1, y: -20, duration: 0.7, ease: 'back.out(1.4)'}, '-=0.5')
              .to('#fashionCard3', {opacity: 1, scale: 1, duration: 0.7, ease: 'back.out(1.4)'}, '-=0.6')
              .to('#fashionTagline', {opacity: 1, y: -10, duration: 0.6}, '-=0.3');
              
            // Add hover effects for buttons
            const buttons = document.querySelectorAll('.login-btn, .social-btn');
            buttons.forEach(button => {
                button.addEventListener('mouseenter', function() {
                    gsap.to(this, {scale: 1.05, duration: 0.3});
                });
                
                button.addEventListener('mouseleave', function() {
                    gsap.to(this, {scale: 1, duration: 0.3});
                });
            });
            
            // Password visibility toggle
            const passwordToggle = document.querySelector('.fa-eye');
            if (passwordToggle) {
                passwordToggle.addEventListener('click', function() {
                    const passwordInput = document.getElementById('password');
                    if (passwordInput.type === 'password') {
                        passwordInput.type = 'text';
                        this.classList.remove('fa-eye');
                        this.classList.add('fa-eye-slash');
                    } else {
                        passwordInput.type = 'password';
                        this.classList.remove('fa-eye-slash');
                        this.classList.add('fa-eye');
                    }
                });
            }
        });
    </script>
</body>
</html><?php /**PATH C:\laravel\resources\views/index.blade.php ENDPATH**/ ?>