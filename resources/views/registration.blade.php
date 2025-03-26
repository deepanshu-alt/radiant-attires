<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Radiant Attires | Create Account</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&display=swap');
        
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f8f8;
            overflow-x: hidden;
        }
        
        .register-container {
            background: linear-gradient(135deg, rgba(255,255,255,0.9) 0%, rgba(255,255,255,0.7) 100%);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0,0,0,0.1);
        }
        
        .brand-title {
            font-family: 'Playfair Display', serif;
            background: linear-gradient(90deg, #8A2387, #E94057, #F27121);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        
        .slogan {
            font-family: 'Playfair Display', serif;
            font-style: italic;
        }
        
        .register-btn {
            background: linear-gradient(90deg, #8A2387, #E94057, #F27121);
            transition: all 0.3s ease;
        }
        
        .register-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(233,64,87,0.3);
        }
        
        .input-field {
            transition: all 0.3s ease;
            border: 1px solid #e2e8f0;
        }
        
        .input-field:focus {
            border-color: #E94057;
            box-shadow: 0 0 0 3px rgba(233,64,87,0.1);
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
            background: linear-gradient(90deg, #8A2387, #E94057);
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
        
        .benefit-item {
            transform: translateY(20px);
            opacity: 0;
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
            background: linear-gradient(180deg, #8A2387, #E94057);
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
            background: radial-gradient(circle, rgba(233,64,87,0.2) 0%, rgba(255,255,255,0) 70%);
            border-radius: 50%;
            animation: pulse 2s infinite;
        }
        
        .checkbox-wrapper {
            display: flex;
            align-items: center;
        }
        
        .checkbox-wrapper input[type="checkbox"] {
            position: relative;
            width: 18px;
            height: 18px;
            appearance: none;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 4px;
            cursor: pointer;
            transition: all 0.3s;
        }
        
        .checkbox-wrapper input[type="checkbox"]:checked {
            background-color: #E94057;
            border-color: #E94057;
        }
        
        .checkbox-wrapper input[type="checkbox"]:checked::before {
            content: '✓';
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            font-size: 12px;
        }
        
        .progress-step {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            background: #e2e8f0;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 600;
            color: #64748b;
            position: relative;
            z-index: 2;
        }
        
        .progress-step.active {
            background: linear-gradient(90deg, #8A2387, #E94057);
            color: white;
        }
        
        .progress-line {
            flex: 1;
            height: 3px;
            background: #e2e8f0;
            position: relative;
            z-index: 1;
        }
        
        .progress-line.active {
            background: linear-gradient(90deg, #8A2387, #E94057);
        }
        
        .ai-feature-tag {
            background: linear-gradient(90deg, #8A2387, #E94057);
            color: white;
            padding: 2px 8px;
            border-radius: 12px;
            font-size: 10px;
            margin-right: 5px;
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
    <div class="register-container flex w-full max-w-5xl overflow-hidden">
        <!-- Registration Form Side -->
        <div class="w-full md:w-1/2 p-8 md:p-10">
            <div class="mb-6 text-center">
                <div class="flex justify-center mb-3">
                    <div class="w-20 h-20 relative mb-2 opacity-0" id="logo">
                        {{-- <svg viewBox="0 0 24 24" class="w-full h-full" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" stroke="url(#paint0_linear)" stroke-width="2"/>
                            <path d="M8 13.5L10 15.5L16 9.5" stroke="url(#paint1_linear)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <defs>
                                <linearGradient id="paint0_linear" x1="2" y1="12" x2="22" y2="12" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#8A2387"/>
                                    <stop offset="0.5" stop-color="#E94057"/>
                                    <stop offset="1" stop-color="#F27121"/>
                                </linearGradient>
                                <linearGradient id="paint1_linear" x1="8" y1="12.5" x2="16" y2="12.5" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#8A2387"/>
                                    <stop offset="0.5" stop-color="#E94057"/>
                                    <stop offset="1" stop-color="#F27121"/>
                                </linearGradient>
                            </defs>
                        </svg> --}}
                        <img src="{{ asset('images/radiant_attires_transparent.png') }}" alt="Logo" class="w-full ">

                    </div>
                </div>
                <h1 class="brand-title text-4xl md:text-5xl font-bold mb-2 opacity-0" id="brandTitle">Radiant Attires</h1>
                <p class="slogan text-lg text-gray-600 opacity-0" id="brandSlogan">"Wear the glow, own the show"</p>
            </div>
            
            <div class="mb-6">
                <h2 class="text-2xl font-semibold mb-2 text-gray-800 opacity-0" id="welcomeText">Create Your Account</h2>
                <p class="text-gray-600 mb-6 opacity-0" id="welcomeSubtext">Join our fashion-forward community and get personalized AI style recommendations</p>
                
                <div class="flex items-center justify-between mb-8 opacity-0" id="progressBar">
                    <div class="progress-step active">1</div>
                    <div class="progress-line active"></div>
                    <div class="progress-step">2</div>
                    <div class="progress-line"></div>
                    <div class="progress-step">3</div>
                </div>
                
                <form action="#" method="POST">
                    <div id="step1" class="opacity-0">
                        <div class="mb-5">
                            <label for="fullname" class="block text-sm font-medium text-gray-700 mb-2">Full Name</label>
                            <div class="relative">
                                <span class="absolute inset-y-0 left-0 pl-3 flex items-center text-gray-500">
                                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M20 21V19C20 16.7909 18.2091 15 16 15H8C5.79086 15 4 16.7909 4 19V21M16 7C16 9.20914 14.2091 11 12 11C9.79086 11 8 9.20914 8 7C8 4.79086 9.79086 3 12 3C14.2091 3 16 4.79086 16 7Z" stroke="#4B5563" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </span>
                                <input type="text" id="fullname" name="fullname" class="input-field pl-10 w-full py-3 px-4 rounded-lg focus:outline-none" placeholder="Your full name" required>
                            </div>
                        </div>
                        
                        <div class="mb-5">
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
                        
                        <div class="mb-5">
                            <label for="password" class="block text-sm font-medium text-gray-700 mb-2">Password</label>
                            <div class="relative">
                                <span class="absolute inset-y-0 left-0 pl-3 flex items-center text-gray-500">
                                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 14.5V16.5M7 10.5V8.5C7 5.73858 9.23858 3.5 12 3.5C14.7614 3.5 17 5.73858 17 8.5V10.5M7 10.5C5.89543 10.5 5 11.3954 5 12.5V19.5C5 20.6046 5.89543 21.5 7 21.5H17C18.1046 21.5 19 20.6046 19 19.5V12.5C19 11.3954 18.1046 10.5 17 10.5M7 10.5H17" stroke="#4B5563" stroke-width="2" stroke-linecap="round"/>
                                    </svg>
                                </span>
                                <input type="password" id="password" name="password" class="input-field pl-10 w-full py-3 px-4 rounded-lg focus:outline-none" placeholder="••••••••" required>
                                <span class="absolute inset-y-0 right-0 pr-3 flex items-center text-gray-500 cursor-pointer toggle-password">
                                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M2.03601 12.322C1.96005 12.1146 1.96005 11.8854 2.03601 11.678C3.42417 7.93772 7.36434 5 12.0002 5C16.6361 5 20.5762 7.93772 21.9644 11.678C22.0404 11.8854 22.0404 12.1146 21.9644 12.322C20.5762 16.0623 16.6361 19 12.0002 19C7.36434 19 3.42417 16.0623 2.03601 12.322Z" stroke="#4B5563" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M15 12C15 13.6569 13.6569 15 12 15C10.3431 15 9 13.6569 9 12C9 10.3431 10.3431 9 12 9C13.6569 9 15 10.3431 15 12Z" stroke="#4B5563" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </span>
                            </div>
                            <div class="mt-1">
                                <div class="flex space-x-1">
                                    <div class="h-1 flex-1 rounded bg-gray-200" id="strength1"></div>
                                    <div class="h-1 flex-1 rounded bg-gray-200" id="strength2"></div>
                                    <div class="h-1 flex-1 rounded bg-gray-200" id="strength3"></div>
                                    <div class="h-1 flex-1 rounded bg-gray-200" id="strength4"></div>
                                </div>
                                <p class="text-xs text-gray-500 mt-1" id="password-strength">Password strength: Enter at least 8 characters</p>
                            </div>
                        </div>
                        
                        <div class="mb-6">
                            <label for="confirm-password" class="block text-sm font-medium text-gray-700 mb-2">Confirm Password</label>
                            <div class="relative">
                                <span class="absolute inset-y-0 left-0 pl-3 flex items-center text-gray-500">
                                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 14.5V16.5M7 10.5V8.5C7 5.73858 9.23858 3.5 12 3.5C14.7614 3.5 17 5.73858 17 8.5V10.5M7 10.5C5.89543 10.5 5 11.3954 5 12.5V19.5C5 20.6046 5.89543 21.5 7 21.5H17C18.1046 21.5 19 20.6046 19 19.5V12.5C19 11.3954 18.1046 10.5 17 10.5M7 10.5H17" stroke="#4B5563" stroke-width="2" stroke-linecap="round"/>
                                    </svg>
                                </span>
                                <input type="password" id="confirm-password" name="confirm-password" class="input-field pl-10 w-full py-3 px-4 rounded-lg focus:outline-none" placeholder="••••••••" required>
                            </div>
                        </div>
                        
                        <button type="button" id="nextBtn1" class="register-btn w-full py-3 text-white font-medium rounded-lg shadow-lg">
                            <span class="flex items-center justify-center">
                                Continue
                                <svg class="w-5 h-5 ml-2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9 5L16 12L9 19" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </span>
                        </button>
                    </div>
                    
                    <div id="step2" class="hidden opacity-0">
                        <div class="mb-5">
                            <label class="block text-sm font-medium text-gray-700 mb-3">Your Style Preferences</label>
                            <div class="grid grid-cols-2 gap-3">
                                <div class="border border-gray-200 rounded-lg p-3 cursor-pointer hover:border-pink-400 transition-colors">
                                    <input type="checkbox" id="casual" name="style" value="casual" class="hidden">
                                    <label for="casual" class="cursor-pointer flex flex-col items-center text-center">
                                        <div class="w-14 h-14 mb-2 flex items-center justify-center rounded-full bg-purple-100">
                                            <svg class="w-8 h-8 text-purple-600" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5 5V3H7V5H5ZM7 7V5H9V7H7ZM9 7H11V9H9V7ZM11 7V5H13V7H11ZM13 7H15V9H13V7ZM15 7V5H17V7H15ZM15 9V11H13V9H15ZM15 13V15H13V13H15ZM13 15V17H11V15H13ZM11 15H9V13H11V15ZM9 15V17H7V15H9ZM9 13V11H11V13H9ZM7 11V9H9V11H7ZM7 13H5V11H7V13ZM5 13V15H3V13H5ZM5 9H3V7H5V9ZM3 5V3H5V5H3Z"/>
                                            </svg>
                                        </div>
                                        <span class="font-medium text-sm text-gray-800">Casual & Street</span>
                                    </label>
                                </div>
                                
                                <div class="border border-gray-200 rounded-lg p-3 cursor-pointer hover:border-pink-400 transition-colors">
                                    <input type="checkbox" id="formal" name="style" value="formal" class="hidden">
                                    <label for="formal" class="cursor-pointer flex flex-col items-center text-center">
                                        <div class="w-14 h-14 mb-2 flex items-center justify-center rounded-full bg-blue-100">
                                            <svg class="w-8 h-8 text-blue-600" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L6.527 6H2.5a1 1 0 000 2h.672l.576 9.2A1 1 0 004.75 18h10.5a1 1 0 001-.8L16.828 8H17.5a1 1 0 100-2h-4.027l-1.579-3.447A1 1 0 0011 2H9zm-.5 2.105V4h3v-.895L10.618 4H8.5v.105z" clip-rule="evenodd"/>
                                            </svg>
                                        </div>
                                        <span class="font-medium text-sm text-gray-800">Formal & Business</span>
                                    </label>
                                </div>
                                
                                <div class="border border-gray-200 rounded-lg p-3 cursor-pointer hover:border-pink-400 transition-colors">
                                    <input type="checkbox" id="minimalist" name="style" value="minimalist" class="hidden">
                                    <label for="minimalist" class="cursor-pointer flex flex-col items-center text-center">
                                        <div class="w-14 h-14 mb-2 flex items-center justify-center rounded-full bg-gray-100">
                                            <svg class="w-8 h-8 text-gray-600" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10 2a8 8 0 100 16 8 8 0 000-16zm0 14a6 6 0 110-12 6 6 0 010 12z"/>
                                            </svg>
                                        </div>
                                        <span class="font-medium text-sm text-gray-800">Minimalist</span>
                                    </label>
                                </div>
                                
                                <div class="border border-gray-200 rounded-lg p-3 cursor-pointer hover:border-pink-400 transition-colors">
                                    <input type="checkbox" id="trendy" name="style" value="trendy" class="hidden">
                                    <label for="trendy" class="cursor-pointer flex flex-col items-center text-center">
                                        <div class="w-14 h-14 mb-2 flex items-center justify-center rounded-full bg-pink-100">
                                            <svg class="w-8 h-8 text-pink-600" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M14.243 5.757a6 6 0 10-.986 9.284 1 1 0 111.087 1.678A8 8 0 1118 10a3 3 0 01-4.8 2.401A4 4 0 1114 10a1 1 0 102 0c0-1.537-.586-3.07-1.757-4.243zM12 10a2 2 0 10-4 0 2 2 0 004 0z" clip-rule="evenodd"/>
                                            </svg>
                                        </div>
                                        <span class="font-medium text-sm text-gray-800">Trendy & Bold</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        
                        <div class="mb-6">
                            <label class="block text-sm font-medium text-gray-700 mb-3">Size Preferences</label>
                            <div class="grid grid-cols-4 gap-2">
                                <div class="border border-gray-200 rounded-lg p-2 text-center cursor-pointer hover:border-pink-400 transition-colors">
                                    <input type="radio" id="xs" name="size" value="xs" class="hidden">
                                    <label for="xs" class="cursor-pointer block font-medium text-sm text-gray-800">XS</label>
                                </div>
                                <div class="border border-gray-200 rounded-lg p-2 text-center cursor-pointer hover:border-pink-400 transition-colors">
                                    <input type="radio" id="s" name="size" value="s" class="hidden">
                                    <label for="s" class="cursor-pointer block font-medium text-sm text-gray-800">S</label>
                                </div>
                                <div class="border border-gray-200 rounded-lg p-2 text-center cursor-pointer hover:border-pink-400 transition-colors">
                                    <input type="radio" id="m" name="size" value="m" class="hidden">
                                    <label for="m" class="cursor-pointer block font-medium text-sm text-gray-800">M</label>
                                </div>
                                <div class="border border-gray-200 rounded-lg p-2 text-center cursor-pointer hover:border-pink-400 transition-colors">
                                    <input type="radio" id="l" name="size" value="l" class="hidden">
                                    <label for="l" class="cursor-pointer block font-medium text-sm text-gray-800">L</label>
                                </div>
                                <div class="border border-gray-200 rounded-lg p-2 text-center cursor-pointer hover:border-pink-400 transition-colors">
                                    <input type="radio" id="xl" name="size" value="xl" class="hidden">
                                    <label for="xl" class="cursor-pointer block font-medium text-sm text-gray-800">XL</label>
                                </div>
                                <div class="border border-gray-200 rounded-lg p-2 text-center cursor-pointer hover:border-pink-400 transition-colors">
                                    <input type="radio" id="xxl" name="size" value="xxl" class="hidden">
                                    <label for="xxl" class="cursor-pointer block font-medium text-sm text-gray-800">XXL</label>
                                </div>
                                <div class="border border-gray-200 rounded-lg p-2 text-center cursor-pointer hover:border-pink-400 transition-colors col-span-2">
                                    <input type="radio" id="custom" name="size" value="custom" class="hidden">
                                    <label for="custom" class="cursor-pointer block font-medium text-sm text-gray-800">Custom Size</label>
                                </div>
                            </div>
                        </div>
                        
                        <div class="flex space-x-3">
                            <button type="button" id="prevBtn2" class="border border-gray-300 bg-white flex-1 py-3 text-gray-700 font-medium rounded-lg shadow-sm hover:bg-gray-50 transition-colors">
                                <span class="flex items-center justify-center">
                                    <svg class="w-5 h-5 mr-2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M15 19L8 12L15 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    Back
                                </span>
                            </button>
                            <button type="button" id="nextBtn2" class="register-btn flex-1 py-3 text-white font-medium rounded-lg shadow-lg">
                                <span class="flex items-center justify-center">
                                    Continue
                                    <svg class="w-5 h-5 ml-2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9 5L16 12L9 19" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </span>
                            </button>
                        </div>
                    </div>
                    
                    <div id="step3" class="hidden opacity-0">
                        <div class="mb-5">
                            <div class="flex items-center space-x-2 mb-4">
                                <div class="ai-pulse rounded-full w-10 h-10 flex items-center justify-center bg-pink-50">
                                    <svg class="w-6 h-6 text-pink-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"/>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-gray-800">Style AI Assistant</h3>
                                    <div class="flex items-center">
                                        <span class="ai-feature-tag">NEW</span>
                                        <span class="text-xs text-gray-500">Personalized shopping experience</span>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="bg-gray-50 rounded-lg p-4 mb-4">
                                <p class="text-sm text-gray-700 mb-2">Enable our AI assistant to provide personalized style recommendations based on your preferences, body type, and shopping history.</p>
                                <ul class="text-xs text-gray-600 space-y-1">
                                    <li class="flex items-center">
                                        <svg class="w-4 h-4 mr-1 text-green-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                        </svg>
                                        Smart outfit recommendations
                                    </li>
                                    <li class="flex items-center">
                                        <svg class="w-4 h-4 mr-1 text-green-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                        </svg>
                                        Size matching technology
                                    </li>
                                    <li class="flex items-center">
                                        <svg class="w-4 h-4 mr-1 text-green-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                        </svg>
                                        Trend alerts based on your style
                                    </li>
                                </ul>
                            </div>
                            
                            <div class="checkbox-wrapper">
                                <input type="checkbox" id="ai-assistant" name="ai-assistant" class="mr-3">
                                <label for="ai-assistant" class="text-sm text-gray-700">Enable Style AI Assistant</label>
                            </div>
                        </div>
                        
                        <div class="mb-6">
                            <label class="block text-sm font-medium text-gray-700 mb-3">Communication Preferences</label>
                            <div class="space-y-3">
                                <div class="checkbox-wrapper">
                                    <input type="checkbox" id="email-updates" name="email-updates" class="mr-3">
                                    <label for="email-updates" class="text-sm text-gray-700">Email updates about new collections and sales</label>
                                </div>
                                <div class="checkbox-wrapper">
                                    <input type="checkbox" id="personalized-offers" name="personalized-offers" class="mr-3">
                                    <label for="personalized-offers" class="text-sm text-gray-700">Personalized offers based on my style preferences</label>
                                </div>
                                <div class="checkbox-wrapper">
                                    <input type="checkbox" id="style-newsletter" name="style-newsletter" class="mr-3">
                                    <label for="style-newsletter" class="text-sm text-gray-700">Monthly style newsletter with fashion tips</label>
                                </div>
                            </div>
                        </div>
                        
                        <div class="mb-6">
                            <p class="text-xs text-gray-500 mb-2">By creating an account, you agree to our <a href="#" class="text-pink-600 hover:underline">Terms of Service</a> and <a href="#" class="text-pink-600 hover:underline">Privacy Policy</a>.</p>
                        </div>
                        
                        <div class="flex space-x-3">
                            <button type="button" id="prevBtn3" class="border border-gray-300 bg-white flex-1 py-3 text-gray-700 font-medium rounded-lg shadow-sm hover:bg-gray-50 transition-colors">
                                <span class="flex items-center justify-center">
                                    <svg class="w-5 h-5 mr-2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M15 19L8 12L15 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    Back
                                </span>
                            </button>
                            <button type="submit" class="register-btn flex-1 py-3 text-white font-medium rounded-lg shadow-lg">
                                <span class="flex items-center justify-center">
                                    Create Account
                                    <svg class="w-5 h-5 ml-2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5 12H19M19 12L12 5M19 12L12 19" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </span>
                            </button>
                        </div>
                    </div>
                </form>
                
                <div class="mt-6 pt-6 border-t border-gray-200 flex items-center justify-center space-x-4 opacity-0" id="socialLogin">
                    <span class="text-sm text-gray-500">Or sign up with</span>
                    <button class="social-btn w-10 h-10 rounded-full bg-blue-100 flex items-center justify-center text-blue-600 hover:bg-blue-200">
                        <i class="fab fa-facebook-f"></i>
                    </button>
                    <button class="social-btn w-10 h-10 rounded-full bg-red-100 flex items-center justify-center text-red-600 hover:bg-red-200">
                        <i class="fab fa-google"></i>
                    </button>
                    <button class="social-btn w-10 h-10 rounded-full bg-black flex items-center justify-center text-white hover:bg-gray-800">
                        <i class="fab fa-apple"></i>
                    </button>
                </div>
                
                <div class="mt-6 text-center">
                    <p class="text-sm text-gray-600 opacity-0" id="loginLink">
                        Already have an account? <a href="/" class="text-pink-600 font-medium hover:underline">Sign In</a>
                    </p>
                </div>
            </div>
        </div>
        
        <!-- Visual Side -->
        <div class="hidden md:block md:w-1/2 fashion-bg bg-pink-50 p-10 relative">
            <div class="absolute top-6 left-6 z-10">
                <span class="bg-white py-1 px-3 rounded-full text-xs font-medium text-pink-500 shadow-sm">In-store Pickup</span>
            </div>
            
            <div class="absolute bottom-6 right-6 z-10">
                <span class="bg-white py-1 px-3 rounded-full text-xs font-medium text-green-500 shadow-sm">Free Shipping on $50+</span>
            </div>
            
            <div class="fashion-card w-56 bg-white p-3 absolute top-8 right-8 fashion-item floating" id="fashionItem1">
                <img src="https://images.unsplash.com/photo-1541101767792-f9b2b1c4f127?ixlib=rb-1.2.1&auto=format&fit=crop&w=300&q=80" alt="Fashion Item" class="w-full h-32 object-cover rounded-lg">
                <div class="mt-3">
                    <div class="product-tag">NEW ARRIVAL</div>
                    <h3 class="font-semibold text-gray-800 mt-1">Summer Collection</h3>
                    <div class="flex items-center justify-between mt-2">
                        <span class="font-bold text-pink-600">$49.99</span>
                        <span class="text-xs text-gray-500 line-through">$69.99</span>
                    </div>
                </div>
            </div>
            
            <div class="fashion-card w-48 bg-white p-3 absolute top-1/2 left-1/2  fashion-item floating" style="animation-delay: 0.5s;" id="fashionItem2">
                <img src="https://images.unsplash.com/photo-1503342217505-b0a15ec3261c?ixlib=rb-1.2.1&auto=format&fit=crop&w=300&q=80" alt="Fashion Item" class="w-full h-28 object-cover rounded-lg">
                <div class="mt-3">
                    <div class="product-tag">TRENDING</div>
                    <h3 class="font-semibold text-gray-800 mt-1">Casual Shoes</h3>
                    <div class="flex items-center justify-between mt-2">
                        <span class="font-bold text-pink-600">$79.99</span>
                        <span class="text-xs text-gray-500 line-through">$99.99</span>
                    </div>
                </div>
            </div>
            
            <div class="fashion-card w-64 bg-white p-3 absolute top-1/3 left-8 transform -translate-x-1/2 -translate-y-1/2 fashion-item floating" style="animation-delay: 1s;" id="fashionItem3">
                <img src="https://images.unsplash.com/photo-1479064555552-3ef4979f8908?ixlib=rb-1.2.1&auto=format&fit=crop&w=300&q=80" alt="Fashion Item" class="w-full h-36 object-cover rounded-lg">
                <div class="mt-3">
                    <div class="product-tag">BESTSELLER</div>
                    <h3 class="font-semibold text-gray-800 mt-1">Premium Outfit</h3>
                    <div class="flex items-center justify-between mt-2">
                        <span class="font-bold text-pink-600">$129.99</span>
                        <span class="text-xs text-gray-500 line-through">$159.99</span>
                    </div>
                </div>
            </div>
            
            <div class="relative z-0 h-full flex flex-col items-center justify-end">
                <div class="bg-white rounded-xl p-4 shadow-lg mb-4 max-w-xs benefit-item" id="benefitItem1">
                    <div class="flex items-start">
                        <div class="w-10 h-10 rounded-full bg-green-100 flex items-center justify-center mr-3 flex-shrink-0">
                            <svg class="w-6 h-6 text-green-600" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M4 2a1 1 0 011 1v2.101a7.002 7.002 0 0111.601 2.566 1 1 0 11-1.885.666A5.002 5.002 0 005.999 7H9a1 1 0 010 2H4a1 1 0 01-1-1V3a1 1 0 011-1zm.008 9.057a1 1 0 011.276.61A5.002 5.002 0 0014.001 13H11a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0v-2.101a7.002 7.002 0 01-11.601-2.566 1 1 0 01.61-1.276z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-800">Free Returns</h4>
                            <p class="text-xs text-gray-500">Easy returns within 30 days, no questions asked.</p>
                        </div>
                    </div>
                </div>
                
                <div class="bg-white rounded-xl p-4 shadow-lg mb-4 max-w-xs benefit-item" id="benefitItem2">
                    <div class="flex items-start">
                        <div class="w-10 h-10 rounded-full bg-blue-100 flex items-center justify-center mr-3 flex-shrink-0">
                            <svg class="w-6 h-6 text-blue-600" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"/>
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-800">Member Benefits</h4>
                            <p class="text-xs text-gray-500">Exclusive discounts and early access to new collections.</p>
                        </div>
                    </div>
                </div>
                
                <div class="bg-white rounded-xl p-4 shadow-lg max-w-xs benefit-item" id="benefitItem3">
                    <div class="flex items-start">
                        <div class="w-10 h-10 rounded-full bg-purple-100 flex items-center justify-center mr-3 flex-shrink-0">
                            <svg class="w-6 h-6 text-purple-600" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M12 7a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0V8.414l-4.293 4.293a1 1 0 01-1.414 0L8 10.414l-4.293 4.293a1 1 0 01-1.414-1.414l5-5a1 1 0 011.414 0L11 10.586 14.586 7H12z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-800">Trending Styles</h4>
                            <p class="text-xs text-gray-500">Stay updated with the latest fashion trends and styles.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Animation timeline
            const tl = gsap.timeline();
            
            tl.to('#logo', {opacity: 1, y: 0, duration: 0.6})
              .to('#brandTitle', {opacity: 1, y: 0, duration: 0.6}, '-=0.3')
              .to('#brandSlogan', {opacity: 1, y: 0, duration: 0.6}, '-=0.3')
              .to('#welcomeText', {opacity: 1, y: 0, duration: 0.5}, '-=0.3')
              .to('#welcomeSubtext', {opacity: 1, y: 0, duration: 0.5}, '-=0.3')
              .to('#progressBar', {opacity: 1, y: 0, duration: 0.5}, '-=0.3')
              .to('#step1', {opacity: 1, y: 0, duration: 0.6}, '-=0.3')
              .to('#socialLogin', {opacity: 1, y: 0, duration: 0.5}, '-=0.3')
              .to('#loginLink', {opacity: 1, y: 0, duration: 0.5}, '-=0.3');
            
            // Fashion items animation
            gsap.to('#fashionItem1', {opacity: 1, scale: 1, duration: 0.8, delay: 0.5});
            gsap.to('#fashionItem2', {opacity: 1, scale: 1, duration: 0.8, delay: 0.8});
            gsap.to('#fashionItem3', {opacity: 1, scale: 1, duration: 0.8, delay: 1.1});
            
            // Benefit items animation
            gsap.to('#benefitItem1', {opacity: 1, y: 0, duration: 0.6, delay: 1.2});
            gsap.to('#benefitItem2', {opacity: 1, y: 0, duration: 0.6, delay: 1.4});
            gsap.to('#benefitItem3', {opacity: 1, y: 0, duration: 0.6, delay: 1.6});
            
            // Multi-step form navigation
            const step1 = document.getElementById('step1');
            const step2 = document.getElementById('step2');
            const step3 = document.getElementById('step3');
            const progressSteps = document.querySelectorAll('.progress-step');
            const progressLines = document.querySelectorAll('.progress-line');
            
            document.getElementById('nextBtn1').addEventListener('click', function() {
                step1.classList.add('hidden');
                step2.classList.remove('hidden');
                
                gsap.to(step2, {opacity: 1, y: 0, duration: 0.5});
                
                progressSteps[1].classList.add('active');
                progressLines[1].classList.add('active');
            });
            
            document.getElementById('prevBtn2').addEventListener('click', function() {
                step2.classList.add('hidden');
                step1.classList.remove('hidden');
                
                progressSteps[1].classList.remove('active');
                progressLines[1].classList.remove('active');
            });
            
            document.getElementById('nextBtn2').addEventListener('click', function() {
                step2.classList.add('hidden');
                step3.classList.remove('hidden');
                
                gsap.to(step3, {opacity: 1, y: 0, duration: 0.5});
                
                progressSteps[2].classList.add('active');
                progressLines[1].classList.add('active');
            });
            
            document.getElementById('prevBtn3').addEventListener('click', function() {
                step3.classList.add('hidden');
                step2.classList.remove('hidden');
                
                progressSteps[2].classList.remove('active');
            });
            
            // Style selection
            const styleOptions = document.querySelectorAll('input[name="style"]');
            styleOptions.forEach(option => {
                option.parentElement.addEventListener('click', function() {
                    this.classList.toggle('border-pink-400');
                    this.classList.toggle('bg-pink-50');
                    option.checked = !option.checked;
                });
            });
            
            // Size selection
            const sizeOptions = document.querySelectorAll('input[name="size"]');
            sizeOptions.forEach(option => {
                option.parentElement.addEventListener('click', function() {
                    sizeOptions.forEach(opt => {
                        opt.parentElement.classList.remove('border-pink-400', 'bg-pink-50');
                    });
                    this.classList.add('border-pink-400', 'bg-pink-50');
                    option.checked = true;
                });
            });
            
            // Password strength meter
            const passwordInput = document.getElementById('password');
            const strength1 = document.getElementById('strength1');
            const strength2 = document.getElementById('strength2');
            const strength3 = document.getElementById('strength3');
            const strength4 = document.getElementById('strength4');
            const passwordStrength = document.getElementById('password-strength');
            
            passwordInput.addEventListener('input', function() {
                const value = passwordInput.value;
                let score = 0;
                
                // Length check
                if (value.length > 6) score++;
                if (value.length > 10) score++;
                
                // Complexity check
                if (/[A-Z]/.test(value)) score++;
                if (/[0-9]/.test(value)) score++;
                if (/[^A-Za-z0-9]/.test(value)) score++;
                
                // Update strength meter
                strength1.className = 'h-1 flex-1 rounded ' + (score >= 1 ? 'bg-red-400' : 'bg-gray-200');
                strength2.className = 'h-1 flex-1 rounded ' + (score >= 2 ? 'bg-blue-400' : 'bg-gray-200');
                strength3.className = 'h-1 flex-1 rounded ' + (score >= 3 ? 'bg-yellow-400' : 'bg-gray-200');
                strength4.className = 'h-1 flex-1 rounded ' + (score >= 4 ? 'bg-green-400' : 'bg-gray-200');
                
                // Update strength text
                if (score < 2) {
                    passwordStrength.textContent = 'Password strength: Weak';
                    passwordStrength.className = 'text-xs text-red-500 mt-1';
                } else if (score < 3) {
                    passwordStrength.textContent = 'Password strength: Fair';
                    passwordStrength.className = 'text-xs text-orange-500 mt-1';
                } else if (score < 4) {
                    passwordStrength.textContent = 'Password strength: Good';
                    passwordStrength.className = 'text-xs text-yellow-500 mt-1';
                } else {
                    passwordStrength.textContent = 'Password strength: Strong';
                    passwordStrength.className = 'text-xs text-green-500 mt-1';
                }
            });
            
            // Toggle password visibility
            const togglePassword = document.querySelector('.toggle-password');
            togglePassword.addEventListener('click', function() {
                const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
                passwordInput.setAttribute('type', type);
                
                // Toggle eye icon
                const eyeIcon = this.querySelector('svg');
                if (type === 'text') {
                    eyeIcon.innerHTML = `<path d="M2.03601 12.322C1.96005 12.1146 1.96005 11.8854 2.03601 11.678C3.42417 7.93772 7.36434 5 12.0002 5C16.6361 5 20.5762 7.93772 21.9644 11.678C22.0404 11.8854 22.0404 12.1146 21.9644 12.322C20.5762 16.0623 16.6361 19 12.0002 19C7.36434 19 3.42417 16.0623 2.03601 12.322Z" stroke="#4B5563" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M15 12C15 13.6569 13.6569 15 12 15C10.3431 15 9 13.6569 9 12C9 10.3431 10.3431 9 12 9C13.6569 9 15 10.3431 15 12Z" stroke="#4B5563" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>`;
                } else {
                    eyeIcon.innerHTML = `<path d="M13.359 11.238C13.6223 10.9657 13.7494 10.5941 13.7494 10.2001C13.7494 9.34488 13.0455 8.64795 12.1994 8.64795C11.3533 8.64795 10.6494 9.34488 10.6494 10.2001C10.6494 10.5941 10.7765 10.9657 11.0398 11.238C10.3693 11.5389 9.7772 11.9518 9.27928 12.4363C8.2248 11.4773 7.5762 10.1309 7.5762 8.64795C7.5762 5.52308 9.79429 2.99995 12.5762 2.99995C15.3582 2.99995 17.5762 5.52308 17.5762 8.64795C17.5762 10.3329 16.7622 11.8412 15.4912 12.8213C14.9111 12.3027 14.1687 11.852 13.359 11.238Z" stroke="#4B5563" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M3.00391 18.988L7.31063 14.6958M17.3037 8.69995C17.3037 8.69995 15.0001 12.9999 8.00006 17.9999C7.49978 18.0175 4.5036 21.0071 4.5036 21.0071" stroke="#4B5563" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>`;
                }
            });
        });
    </script>
</body>
</html>