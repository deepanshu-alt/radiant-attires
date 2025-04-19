<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Radiant Attires | Fashion Reimagined with AI</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/ScrollTrigger.min.js"></script>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&display=swap');
        
        body {
            font-family: 'Poppins', sans-serif;
            overflow-x: hidden;
            scroll-behavior: smooth;
            background-color: #fafafa;
        }
        
        .gradient-text {
            background: linear-gradient(90deg, #ff4e50, #f9d423);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        
        .nav-link {
            position: relative;
            transition: all 0.3s ease;
        }
        
        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -3px;
            left: 0;
            background: linear-gradient(90deg, #ff4e50, #f9d423);
            transition: width 0.3s ease;
        }
        
        .nav-link:hover::after {
            width: 100%;
        }
        
        .hero-gradient {
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.9) 0%, rgba(255, 255, 255, 0.7) 100%);
            backdrop-filter: blur(10px);
        }
        
        .hero-btn {
            background: linear-gradient(90deg, #ff4e50, #f9d423);
            transition: all 0.3s ease;
        }
        
        .hero-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(255, 78, 80, 0.3);
        }
        
        .feature-card {
            transition: all 0.3s ease;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        }
        
        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 35px rgba(255, 78, 80, 0.2);
        }
        
        .ai-badge {
            background: linear-gradient(90deg, #ff4e50, #f9d423);
            box-shadow: 0 5px 15px rgba(255, 78, 80, 0.3);
        }
        
        .product-card {
            transition: all 0.4s ease;
            transform: translateY(0);
        }
        
        .product-card:hover {
            transform: translateY(-10px);
        }
        
        .product-tag {
            background: linear-gradient(90deg, #ff4e50, #f9d423);
            border-radius: 20px;
        }
        
        .testimonial-container {
            overflow-x: hidden;
            position: relative;
        }
        
        .testimonial-slider {
            display: flex;
            transition: transform 0.5s ease;
        }
        
        .testimonial-card {
            min-width: 100%;
            transition: all 0.3s ease;
        }
        
        .category-icon {
            transition: all 0.3s ease;
        }
        
        .category-card:hover .category-icon {
            transform: scale(1.1);
        }
        
        .floating {
            animation: floating 3s ease-in-out infinite;
        }
        
        .pulse-anim {
            animation: pulse 2s infinite;
        }
        
        @keyframes floating {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-15px); }
            100% { transform: translateY(0px); }
        }
        
        @keyframes pulse {
            0% {
                box-shadow: 0 0 0 0 rgba(255, 78, 80, 0.4);
            }
            70% {
                box-shadow: 0 0 0 20px rgba(255, 78, 80, 0);
            }
            100% {
                box-shadow: 0 0 0 0 rgba(255, 78, 80, 0);
            }
        }
        
        /* Custom scrollbar */
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

        /* Animated background */
        .animated-bg {
            background: linear-gradient(-45deg, #ff4e5022, #f9d42322, #e73c7e22, #23a6d522);
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

        /* Animated circles in background */
        .circle {
            position: absolute;
            border-radius: 50%;
            background: linear-gradient(90deg, #ff4e5033, #f9d42333);
            z-index: -1;
            animation: moveAround 20s linear infinite;
        }

        @keyframes moveAround {
            0% { transform: translate(0, 0) scale(1); }
            25% { transform: translate(50px, 50px) scale(1.1); }
            50% { transform: translate(100px, 0) scale(1); }
            75% { transform: translate(50px, -50px) scale(0.9); }
            100% { transform: translate(0, 0) scale(1); }
        }

        .feature-card,
.product-card {
    opacity: 0;
    transform: translateY(100px); /* or 60px for product cards */
    visibility: hidden; /* Helps prevent click/hover glitches */
}

    </style>
</head>
<body>
    <!-- Background circles -->
    <div class="circle" style="width: 300px; height: 300px; top: 10%; left: 5%; animation-delay: 0s;"></div>
    <div class="circle" style="width: 200px; height: 200px; top: 40%; right: 10%; animation-delay: 5s;"></div>
    <div class="circle" style="width: 250px; height: 250px; bottom: 10%; left: 20%; animation-delay: 10s;"></div>

    <!-- Navigation -->
    <nav class="fixed w-full z-50 bg-white bg-opacity-90 backdrop-filter backdrop-blur-lg shadow-sm">
        <div class="container mx-auto px-4 py-3">
            <div class="flex justify-between items-center">
                <div class="flex items-center">
                    <div class="flex items-center mr-10">
                        <div class="w-12 h-12 mr-3">
                            <div class="w-full h-full rounded-full bg-gradient-to-r from-pink-500 to-yellow-400 p-0.5">
                                <div class="w-full h-full rounded-full bg-white flex items-center justify-center">
                                    <span class="gradient-text text-xl font-bold">RA</span>
                                </div>
                            </div>
                        </div>
                        <h1 class="text-2xl font-bold">
                            <span class="gradient-text">Radiant</span> Attires
                        </h1>
                    </div>
                    <div class="hidden md:flex space-x-8">
                        <a href="#home" class="nav-link text-gray-700 hover:text-gray-900 font-medium">Home</a>
                        <a href="#features" class="nav-link text-gray-700 hover:text-gray-900 font-medium">Features</a>
                        <a href="#collections" class="nav-link text-gray-700 hover:text-gray-900 font-medium">Collections</a>
                        <a href="#ai-stylist" class="nav-link text-gray-700 hover:text-gray-900 font-medium">AI Stylist</a>
                        <a href="#testimonials" class="nav-link text-gray-700 hover:text-gray-900 font-medium">Testimonials</a>
                    </div>
                </div>
                <div class="flex items-center space-x-6">
                    <div class="hidden md:flex items-center space-x-4">
                        <a href="/login" class="text-gray-700 hover:text-gray-900 font-medium">Login</a>
                        <a href="/signup" class="hero-btn px-5 py-2 text-white font-medium rounded-full shadow-lg">Sign Up</a>
                    </div>
                    <button class="md:hidden text-gray-700 focus:outline-none">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="pt-24 pb-16 animated-bg">
        <div class="container mx-auto px-4">
            <div class="flex flex-col lg:flex-row items-center">
                <div class="w-full lg:w-1/2 mb-12 lg:mb-0">
                    <div class="lg:pr-10">
                        <div class="inline-block mb-6">
                            <span class="ai-badge px-4 py-2 text-sm font-medium text-white rounded-full flex items-center">
                                <svg class="w-4 h-4 mr-2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 16C14.2091 16 16 14.2091 16 12C16 9.79086 14.2091 8 12 8C9.79086 8 8 9.79086 8 12C8 14.2091 9.79086 16 12 16Z" stroke="white" stroke-width="2"/>
                                    <path d="M21 12C21 12 16.9706 17 12 17C7.02944 17 3 12 3 12C3 12 7.02944 7 12 7C16.9706 7 21 12 21 12Z" stroke="white" stroke-width="2"/>
                                </svg>
                                AI-Powered Fashion
                            </span>
                        </div>
                        <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6 leading-tight">
                            Fashion Reimagined With <span class="gradient-text">Artificial Intelligence</span>
                        </h1>
                        <p class="text-gray-600 text-lg mb-8">
                            Experience the future of fashion where AI curates personalized styles just for you. Discover outfits that match your unique taste and body type, all powered by cutting-edge technology.
                        </p>
                        <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4">
                            <a href="#collections" class="hero-btn px-8 py-4 text-white font-medium rounded-full shadow-xl text-center">
                                Explore Collections
                            </a>
                            <a href="#ai-stylist" class="px-8 py-4 text-gray-700 bg-white border border-gray-200 rounded-full shadow-sm hover:shadow-md transition duration-300 flex items-center justify-center">
                                <svg class="w-5 h-5 mr-2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" fill="currentColor"/>
                                    <path d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" stroke="currentColor" stroke-width="2"/>
                                </svg>
                                Watch Demo
                            </a>
                        </div>
                        <div class="mt-10 flex items-center space-x-6">
                            <div class="flex -space-x-3">
                                <img class="w-10 h-10 rounded-full border-2 border-white" src="https://i.pravatar.cc/40?img=1" alt="User">
                                <img class="w-10 h-10 rounded-full border-2 border-white" src="https://i.pravatar.cc/40?img=2" alt="User">
                                <img class="w-10 h-10 rounded-full border-2 border-white" src="https://i.pravatar.cc/40?img=3" alt="User">
                                <img class="w-10 h-10 rounded-full border-2 border-white" src="https://i.pravatar.cc/40?img=4" alt="User">
                            </div>
                            
                            
                            <div>
                                <div class="flex items-center">
                                    <div class="flex items-center">
                                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                        </svg>
                                        <span class="text-yellow-400 font-bold ml-1">4.9</span>
                                    </div>
                                    <span class="text-gray-600 ml-2">from 5k+ reviews</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full lg:w-1/2 relative">
                    <div class="relative h-96 md:h-[600px] rounded-3xl overflow-hidden shadow-2xl">
                        <img src="https://images.unsplash.com/photo-1529139574466-a303027c1d8b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" alt="Fashion Model" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                        <div class="absolute bottom-6 left-6 right-6 flex justify-between items-end">
                            <div>
                                <span class="product-tag px-4 py-1 text-xs font-medium text-white inline-block mb-2">Summer Collection</span>
                                <h3 class="text-white text-xl font-semibold">Urban Minimalist</h3>
                            </div>
                            <div class="pulse-anim p-3 bg-white rounded-full shadow-lg">
                                <svg class="w-6 h-6 text-pink-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="absolute -bottom-10 -right-10 w-64 h-64 bg-gradient-to-br from-pink-500/20 to-yellow-400/20 rounded-full filter blur-3xl"></div>
                    <div class="absolute top-10 -left-10 w-40 h-40 bg-gradient-to-br from-pink-500/20 to-yellow-400/20 rounded-full filter blur-3xl"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">Why Choose <span class="gradient-text">Radiant Attires</span></h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Our AI-powered platform offers a unique shopping experience tailored to your preferences and body type.</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="feature-card bg-white p-6" data-scroll>
                    <div class="w-14 h-14 mb-6 rounded-full flex items-center justify-center bg-pink-100">
                        <svg class="w-7 h-7 text-pink-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">AI Style Recommendations</h3>
                    <p class="text-gray-600 mb-4">Our advanced AI analyzes your preferences, body measurements, and current fashion trends to suggest perfect outfits for any occasion.</p>
                    <a href="#" class="text-pink-600 font-medium flex items-center">
                        Learn more
                        <svg class="w-5 h-5 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                        </svg>
                    </a>
                </div>
                
                <!-- Feature 2 -->
                <div class="feature-card bg-white p-6" data-scroll>
                    <div class="w-14 h-14 mb-6 rounded-full flex items-center justify-center bg-purple-100">
                        <svg class="w-7 h-7 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Virtual Try-On</h3>
                    <p class="text-gray-600 mb-4">Try clothes virtually before buying! Our 3D technology creates an accurate representation of how the garment will look on you.</p>
                    <a href="#" class="text-purple-600 font-medium flex items-center">
                        Learn more
                        <svg class="w-5 h-5 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                        </svg>
                    </a>
                </div>
                
                <!-- Feature 3 -->
                <div class="feature-card bg-white p-6" data-scroll>
                    <div class="w-14 h-14 mb-6 rounded-full flex items-center justify-center bg-yellow-100">
                        <svg class="w-7 h-7 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Fast Delivery</h3>
                    <p class="text-gray-600 mb-4">Enjoy same-day delivery in select cities and express shipping worldwide. Track your orders in real-time through our app.</p>
                    <a href="#" class="text-yellow-600 font-medium flex items-center">
                        Learn more
                        <svg class="w-5 h-5 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                        </svg>
                    </a>
                </div>
            </div>
            
            <div class="mt-16 text-center">
                <a href="#" class="hero-btn inline-block px-8 py-4 text-white font-medium rounded-full shadow-lg">
                    Explore All Features
                </a>
            </div>
        </div>
    </section>
    
    <!-- AI Stylist Section -->
    <section id="ai-stylist" class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="flex flex-col lg:flex-row items-center">
                <div class="w-full lg:w-1/2 mb-12 lg:mb-0">
                    <div class="lg:pr-16">
                        <span class="ai-badge px-4 py-2 text-sm font-medium text-white rounded-full inline-block mb-6">
                            AI Stylist Feature
                        </span>
                        <h2 class="text-3xl md:text-4xl font-bold mb-6">Your Personal <span class="gradient-text">AI Fashion Consultant</span></h2>
                        <p class="text-gray-600 mb-8">
                            Meet ARIA, your AI fashion assistant that understands your style preferences, body type, and fashion goals. Get personalized recommendations, outfit ideas, and styling tips at your fingertips.
                        </p>
                        
                        <div class="space-y-6">
                            <div class="flex items-start">
                                <div class="w-12 h-12 rounded-full bg-pink-100 flex items-center justify-center mr-4 flex-shrink-0">
                                    <svg class="w-6 h-6 text-pink-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="text-lg font-semibold mb-2">Personalized Style Analysis</h4>
                                    <p class="text-gray-600">Our AI analyzes your previous purchases, style preferences, and body measurements to create a personalized style profile.</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start">
                                <div class="w-12 h-12 rounded-full bg-blue-100 flex items-center justify-center mr-4 flex-shrink-0">
                                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="text-lg font-semibold mb-2">Color & Pattern Matching</h4>
                                    <p class="text-gray-600">ARIA suggests color combinations and patterns that complement your skin tone and personal aesthetic.</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start">
                                <div class="w-12 h-12 rounded-full bg-green-100 flex items-center justify-center mr-4 flex-shrink-0">
                                    <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="text-lg font-semibold mb-2">Occasion-Specific Recommendations</h4>
                                    <p class="text-gray-600">Tell ARIA about upcoming events, and it will suggest outfits that match the occasion, weather, and your style preferences.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="mt-10">
                            <a href="#" class="hero-btn inline-block px-8 py-4 text-white font-medium rounded-full shadow-lg">
                                Try AI Stylist Now
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class="w-full lg:w-1/2 relative">
                    <div class="bg-white rounded-3xl shadow-xl p-6 max-w-md mx-auto">
                        <div class="flex items-center justify-between mb-6">
                            <div class="flex items-center">
                                <div class="w-10 h-10 rounded-full bg-gradient-to-r from-pink-500 to-yellow-400 p-0.5 mr-3">
                                    <div class="w-full h-full rounded-full bg-white flex items-center justify-center">
                                        <span class="gradient-text text-lg font-bold">A</span>
                                    </div>
                                </div>
                                <h3 class="font-semibold">ARIA - AI Stylist</h3>
                            </div>
                            <div class="flex items-center space-x-2">
                                <span class="w-3 h-3 bg-green-500 rounded-full"></span>
                                <span class="text-sm text-green-600 font-medium">Online</span>
                            </div>
                        </div>
                        
                        <div class="bg-gray-50 rounded-2xl p-4 mb-4">
                            <p class="text-gray-800">
                                Hello! I'm ARIA, your personal AI stylist. I've analyzed your style profile and I have some outfit suggestions for your dinner date tonight. Would you like to see them?
                            </p>
                        </div>
                        
                        <div class="flex justify-end mb-4">
                            <div class="bg-gradient-to-r from-pink-500 to-yellow-400 text-white rounded-2xl rounded-br-none p-4 max-w-xs">
                                <p>Yes, please! I need something elegant but comfortable.</p>
                            </div>
                        </div>
                        
                        <div class="bg-gray-50 rounded-2xl p-4 mb-4">
                            <p class="text-gray-800 mb-3">
                                Perfect! Based on your style preferences and the restaurant's ambiance, here are 3 outfit ideas:
                            </p>
                            <div class="grid grid-cols-3 gap-2 mb-3">
                                <div class="rounded-lg overflow-hidden">
                                    <img src="https://images.unsplash.com/photo-1562751362-404243c2eea3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=100&h=150&q=80" alt="Outfit 1" class="w-full h-full object-cover">
                                </div>
                                <div class="rounded-lg overflow-hidden">
                                    <img src="https://images.unsplash.com/photo-1581044777550-4cfa60707c03?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=100&h=150&q=80" alt="Outfit 2" class="w-full h-full object-cover">
                                </div>
                                <div class="rounded-lg overflow-hidden">
                                    <img src="https://images.unsplash.com/photo-1539109136881-3be0616acf4b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=100&h=150&q=80" alt="Outfit 3" class="w-full h-full object-cover">
                                </div>
                            </div>
                            <p class="text-gray-800">
                                The black dress would complement your figure perfectly and pairs well with your existing accessories.
                            </p>
                        </div>
                        
                        <div class="flex items-center bg-white border border-gray-200 rounded-full px-4 py-2">
                            <input type="text" placeholder="Ask ARIA anything about fashion..." class="flex-1 border-none focus:outline-none text-sm">
                            <button class="ml-2 text-pink-600">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                    
                    <!-- Decorative elements -->
                    <div class="absolute -bottom-10 -left-10 w-40 h-40 bg-gradient-to-br from-pink-500/20 to-yellow-400/20 rounded-full filter blur-3xl"></div>
                    <div class="absolute -top-10 right-10 w-20 h-20 bg-gradient-to-br from-blue-500/20 to-purple-500/20 rounded-full filter blur-xl"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Collections Section -->
    <section id="collections" class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row md:items-end justify-between mb-12">
                <div>
                    <span class="ai-badge px-4 py-2 text-sm font-medium text-white rounded-full inline-block mb-4">
                        Trending Collections
                    </span>
                    <h2 class="text-3xl md:text-4xl font-bold">
                        Discover Our <span class="gradient-text">Latest Collections</span>
                    </h2>
                </div>
                <div class="mt-4 md:mt-0">
                    <a href="#" class="text-pink-600 font-medium flex items-center">
                        View All Collections
                        <svg class="w-5 h-5 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                        </svg>
                    </a>
                </div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Collection 1 -->
                <div class="product-card group">
                    <div class="rounded-3xl overflow-hidden mb-4 relative">
                        <img src="https://images.unsplash.com/photo-1584495566562-6fe86a782bf3?q=80&w=1976&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Collection 1" class="w-full h-80 object-cover transition-transform duration-500 group-hover:scale-105">
                        <div class="absolute top-4 left-4">
                            <span class="product-tag px-4 py-1 text-xs font-medium text-white">New Arrival</span>
                        </div>
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
                            <a href="#" class="text-white font-medium">Explore Collection</a>
                        </div>
                    </div>
                    <h3 class="text-lg font-semibold mb-1">Summer Breeze</h3>
                    <p class="text-gray-600">Lightweight fabrics for hot days</p>
                </div>
                
                <!-- Collection 2 -->
                <div class="product-card group">
                    <div class="rounded-3xl overflow-hidden mb-4 relative">
                        <img src="https://images.unsplash.com/photo-1687825512118-5ee2ddded118?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Collection 2" class="w-full h-80 object-cover transition-transform duration-500 group-hover:scale-105">
                        <div class="absolute top-4 left-4">
                            <span class="product-tag px-4 py-1 text-xs font-medium text-white">Trending</span>
                        </div>
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
                            <a href="#" class="text-white font-medium">Explore Collection</a>
                        </div>
                    </div>
                    <h3 class="text-lg font-semibold mb-1">Urban Minimalist</h3>
                    <p class="text-gray-600">Clean lines and neutral tones</p>
                </div>
                
                <!-- Collection 3 -->
                <div class="product-card group">
                    <div class="rounded-3xl overflow-hidden mb-4 relative">
                        <img src="https://images.unsplash.com/photo-1681483272110-f6215d54ebd9?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Collection 3" class="w-full h-80 object-cover transition-transform duration-500 group-hover:scale-105">
                        <div class="absolute top-4 left-4">
                            <span class="product-tag px-4 py-1 text-xs font-medium text-white">Limited Edition</span>
                        </div>
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
                            <a href="#" class="text-white font-medium">Explore Collection</a>
                        </div>
                    </div>
                    <h3 class="text-lg font-semibold mb-1">Bohemian Dream</h3>
                    <p class="text-gray-600">Eclectic patterns and textures</p>
                </div>
                
                <!-- Collection 4 -->
                <div class="product-card group">
                    <div class="rounded-3xl overflow-hidden mb-4 relative">
                        <img src="https://images.unsplash.com/photo-1656284518334-710b60cd63a0?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Collection 4" class="w-full h-80 object-cover transition-transform duration-500 group-hover:scale-105">
                        <div class="absolute top-4 left-4">
                            <span class="product-tag px-4 py-1 text-xs font-medium text-white">Best Seller</span>
                        </div>
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
                            <a href="#" class="text-white font-medium">Explore Collection</a>
                        </div>
                    </div>
                    <h3 class="text-lg font-semibold mb-1">Evening Elegance</h3>
                    <p class="text-gray-600">Sophisticated styles for special occasions</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">
                    What Our <span class="gradient-text">Customers Say</span>
                </h2>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    See how AI-powered fashion is transforming the shopping experience for our customers.
                </p>
            </div>
            
            <div class="testimonial-container">
                <div class="testimonial-slider">
                    <!-- Testimonial 1 -->
                    <div class="testimonial-card p-8 bg-white rounded-3xl shadow-lg">
                        <div class="flex items-center mb-6">
                            <div class="w-12 h-12 rounded-full overflow-hidden mr-4">
                                <img src="/api/placeholder/48/48" alt="User" class="w-full h-full object-cover">
                            </div>
                            <div>
                                <h4 class="font-semibold">Sarah Johnson</h4>
                                <div class="flex items-center">
                                    <div class="flex">
                                        <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                        </svg>
                                        <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                        </svg>
                                        <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                        </svg>
                                        <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                        </svg>
                                        <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p class="text-gray-600 mb-4">
                            "The AI stylist completely transformed my shopping experience. It recommended outfits that I never would have put together myself, but they perfectly match my style and body type. I've received so many compliments!"
                        </p>
                        <div class="flex items-center text-sm text-gray-500">
                            <span>Posted 2 weeks ago</span>
                            <span class="mx-2">•</span>
                            <span>Verified Purchase</span>
                        </div>
                    </div>
                </div>
                
                <div class="flex justify-center mt-8">
                    <button class="w-3 h-3 rounded-full bg-pink-600 mx-1"></button>
                    <button class="w-3 h-3 rounded-full bg-gray-300 mx-1"></button>
                    <button class="w-3 h-3 rounded-full bg-gray-300 mx-1"></button>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">
                    Stay Updated With <span class="gradient-text">Fashion Trends</span>
                </h2>
                <p class="text-gray-600 mb-8">
                    Subscribe to our newsletter to receive the latest fashion updates, AI-curated outfit ideas, and exclusive discounts.
                </p>
                
                <div class="max-w-xl mx-auto">
                    <div class="flex flex-col sm:flex-row">
                        <input type="email" placeholder="Enter your email address" class="flex-1 py-3 px-4 rounded-full sm:rounded-r-none border border-gray-200 focus:outline-none focus:ring-2 focus:ring-pink-500 focus:border-transparent mb-3 sm:mb-0">
                        <button class="hero-btn py-3 px-8 text-white font-medium rounded-full sm:rounded-l-none">
                            Subscribe
                        </button>
                    </div>
                    <p class="text-xs text-gray-500 mt-3">
                        By subscribing, you agree to our Privacy Policy and consent to receive updates from us.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-16">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div>
                    <div class="flex items-center mb-6">
                        <div class="w-10 h-10 mr-3">
                            <div class="w-full h-full rounded-full bg-gradient-to-r from-pink-500 to-yellow-400 p-0.5">
                                <div class="w-full h-full rounded-full bg-gray-900 flex items-center justify-center">
                                    <span class="gradient-text text-lg font-bold">RA</span>
                                </div>
                            </div>
                        </div>
                        <h2 class="text-xl font-bold">
                            <span class="gradient-text">Radiant</span> Attires
                        </h2>
                    </div>
                    <p class="text-gray-400 mb-6">
                        Fashion reimagined with artificial intelligence. Discover personalized styles that match your unique taste and body type.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white transition-colors">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition-colors">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition-colors">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition-colors">
                            <i class="fab fa-pinterest-p"></i>
                        </a>
                    </div>
                </div>
                
                <div>
                    <h3 class="text-lg font-semibold mb-6">Shop</h3>
                    <ul class="space-y-3">
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Women's Collection</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Men's Collection</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Kids' Collection</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Accessories</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">New Arrivals</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Sale</a></li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="text-lg font-semibold mb-6">Company</h3>
                    <ul class="space-y-3">
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">About Us</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Careers</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Our Technology</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Press</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Blog</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Contact Us</a></li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="text-lg font-semibold mb-6">Support</h3>
                    <ul class="space-y-3">
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Help Center</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Shipping Info</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Returns & Exchanges</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Payment Methods</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Size Guide</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">FAQ</a></li>
                    </ul>
                </div>
            </div>
            
            <hr class="border-gray-800 my-10">
            
            <div class="flex flex-col md:flex-row justify-between items-center">
                <p class="text-gray-400 text-sm mb-4 md:mb-0">
                    © 2025 Radiant Attires. All rights reserved.
                </p>
                <div class="flex space-x-6">
                    <a href="#" class="text-gray-400 hover:text-white text-sm transition-colors">Privacy Policy</a>
                    <a href="#" class="text-gray-400 hover:text-white text-sm transition-colors">Terms of Service</a>
                    <a href="#" class="text-gray-400 hover:text-white text-sm transition-colors">Cookie Policy</a>
                </div>
            </div>
        </div>
    </footer>

    <script>
        // Initialize GSAP ScrollTrigger
        gsap.registerPlugin(ScrollTrigger);
        
        // Animate feature cards on scroll
        gsap.utils.toArray('.feature-card').forEach((card, i) => {
    gsap.to(card, {
        y: 0,
        autoAlpha: 1, // opacity + visibility
        duration: 1,
        ease: "power3.out",
        scrollTrigger: {
            trigger: card,
            start: "top 80%",
            end: "bottom 20%",
            toggleActions: "play none none none"
        },
        delay: i * 0.2
    });
});

gsap.utils.toArray('.product-card').forEach((card, i) => {
    gsap.to(card, {
        y: 0,
        autoAlpha: 1,
        duration: 0.8,
        ease: "power2.out",
        scrollTrigger: {
            trigger: card,
            start: "top 85%",
            toggleActions: "play none none none"
        },
        delay: i * 0.15
    });
});

        // Handle mobile menu
        document.querySelector('button.md\\:hidden').addEventListener('click', function() {
            // Mobile menu functionality would go here
            alert('Mobile menu clicked - functionality to be implemented');
        });
        
        // Simple testimonial slider
        let currentSlide = 0;
        const testimonialSlider = document.querySelector('.testimonial-slider');
        const testimonialDots = document.querySelectorAll('.mt-8 button');
        
        // Function to update slider position (in a real implementation, this would need more logic)
        function updateSlider(index) {
            currentSlide = index;
            // Update slider position
            // This is a simplified implementation
            
            // Update dots
            testimonialDots.forEach((dot, i) => {
                if (i === index) {
                    dot.classList.remove('bg-gray-300');
                    dot.classList.add('bg-pink-600');
                } else {
                    dot.classList.remove('bg-pink-600');
                    dot.classList.add('bg-gray-300');
                }
            });
        }
        
        // Add click event to dots
        testimonialDots.forEach((dot, i) => {
            dot.addEventListener('click', () => updateSlider(i));
        });
        
        // Smooth scroll for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    window.scrollTo({
                        top: target.offsetTop - 80,
                        behavior: 'smooth'
                    });
                }
            });
        });
    </script>
</body>
</html>