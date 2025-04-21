<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Ocean Scoops</title>
    <link rel="icon" type="image/x-icon" href="../../src/logo.png">
</head>
<body class="bg-gradient-to-r from-pink-400 to-pink-500">
    <nav class="bg-white fixed w-full transition-all duration-300 z-50 top-0" id="navbar">
        <div class="container mx-auto flex items-center justify-between p-4">
            <!-- Logo -->
            <a href="#" class="w-32 md:w-48 transition-all duration-300">
                <img src="../../src/logo.png" alt="Logo" class="w-full">
            </a>

            <!-- Menu navigasi desktop -->
            <div class="hidden lg:flex items-center space-x-8 md:space-x-12">
                <div class="group relative">
                    <a href="#buy-section" class="text-black font-black text-base md:text-xl flex items-center hover:text-pink-400 transition-colors cursor-pointer">
                        Ice Cream Flavors
                    </a>
                </div>
                <div class="group relative">
                    <a href="#" class="text-black font-black text-base md:text-xl flex items-center hover:text-pink-400 transition-colors">
                        Where to Buy
                    </a>
                </div>
                <div class="group relative">
                    <a href="#credit-section" class="text-black font-black text-base md:text-xl flex items-center hover:text-pink-400 transition-colors cursor-pointer">
                        About Us
                    </a>
                </div>
            </div>

            <!-- Search dan Menu Mobile -->
            <div class="flex items-center space-x-2 md:space-x-4">
                <button class="p-2 hover:text-pink-400 transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 md:h-8 md:w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </button>
                <button class="lg:hidden p-2 hover:text-pink-400 transition-colors" id="mobileMenuButton">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 md:h-8 md:w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div class="lg:hidden hidden" id="mobileMenu">
            <div class="px-4 py-3 space-y-4">
                <a href="#buy-section" class="block text-black font-black text-lg hover:text-pink-400 transition-colors">Ice Cream Flavors</a>
                <a href="#" class="block text-black font-black text-lg hover:text-pink-400 transition-colors">Where to Buy</a>
                <a href="#credit-section" class="block text-black font-black text-lg hover:text-pink-400 transition-colors">About Us</a>
            </div>
        </div>
    </nav>

    <section class="container mx-auto mt-20 md:mt-32 px-4">
        <section class="relative overflow-hidden rounded-3xl bg-gradient-to-r from-pink-400 to-pink-500">
            <div class="flex flex-col-reverse md:flex-row items-center p-8 md:p-12">
                <div class="w-full md:w-1/2 pr-0 md:pr-8 mt-8 md:mt-0 z-10">
                    <h1 class="text-white text-3xl md:text-4xl lg:text-6xl font-bold leading-tight mb-4 md:mb-6">
                        NEW Ocean Scoops Is Here! The Limited Batch!
                    </h1>
                    <p class="text-white text-base md:text-xl mb-6 md:mb-8">
                        Fall bowl-over-spoons in love with our newest Limited Batch pint!
                    </p>
                    <button id="getScoopButton" class="group bg-yellow-400 hover:bg-yellow-500 text-black font-bold py-3 px-8 rounded-full text-lg md:text-xl transition-all duration-300 transform hover:scale-105 flex items-center space-x-2">
                        <span>Get the Scoop</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </button>
                </div>
                <div class="w-full md:w-1/2 relative z-10">
                    <div class="relative transform hover:scale-105 transition-transform duration-300">
                        <img src="../../src/s.png" alt="Ice Cream" class="w-full h-auto max-w-md mx-auto">
                        <div class="absolute -top-4 -right-4 animate-bounce">
                            <div class="bg-red-500 text-white px-6 py-2 rounded-full shadow-lg">
                                <span class="text-sm md:text-base font-bold">NEW!</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Decorative elements -->
                <div class="absolute inset-0 opacity-10">
                    <div class="absolute top-10 left-10 w-20 h-20 rounded-full border-4 border-white"></div>
                    <div class="absolute bottom-10 right-10 w-32 h-32 rounded-full border-4 border-white"></div>
                    <div class="absolute top-1/2 left-1/4 w-16 h-16 rounded-full border-4 border-white"></div>
                </div>
            </div>
        </section>
    </section>

    <!-- Where to Buy Section Desktop -->
    <section id="buy-section" class="bg-white w-full py-8 md:py-16 mt-12 md:mt-20">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl md:text-4xl font-black mb-8 md:mb-20 text-center">Our Ice Cream Selection</h2>
            
            <!-- Mobile Grid Layout -->
            <div class="grid grid-cols-2 gap-4 md:grid-cols-3 md:gap-8 max-w-6xl mx-auto">
                <!-- Ice Cream Card 1 -->
                <div class="text-center p-4 bg-white rounded-lg">
                    <a href="../Order Menu/Menu.php?product=pretty-sweet" class="block">
                        <div class="aspect-w-1 aspect-h-1 mb-2">
                            <img src="../../src/c.jpeg" alt="Ice Cream" class="w-full h-48 object-cover rounded-lg transform hover:scale-105 transition-transform duration-300">
                        </div>
                        <h3 class="text-lg md:text-2xl font-bold mb-2">Pretty Sweet</h3>
                        <div class="flex justify-center items-center mb-2">
                            <div class="flex">
                                <span class="text-yellow-400 text-sm md:text-base">★★★★★</span>
                            </div>
                            <span class="ml-1 text-gray-600 text-sm">4.8</span>
                        </div>
                        <button class="w-full bg-white border-2 border-pink-500 rounded-full px-4 py-1 text-sm font-bold text-pink-500 hover:bg-pink-500 hover:border-pink-500 hover:text-white transition-colors">
                            Buy Now
                        </button>
                    </a>
                </div>

                <!-- Ice Cream Card 2 -->
                <div class="text-center p-4 bg-white rounded-lg">
                    <a href="../Order Menu/Menu.php?product=white-ferrari" class="block">
                        <div class="aspect-w-1 aspect-h-1 mb-2">
                            <img src="../../src/v.jpeg" alt="Ice Cream" class="w-full h-48 object-cover rounded-lg transform hover:scale-105 transition-transform duration-300">
                        </div>
                        <h3 class="text-lg md:text-2xl font-bold mb-2">White Ferrari</h3>
                        <div class="flex justify-center items-center mb-2">
                            <div class="flex">
                                <span class="text-yellow-400 text-sm md:text-base">★★★★★</span>
                            </div>
                            <span class="ml-1 text-gray-600 text-sm">4.6</span>
                        </div>
                        <button class="w-full bg-white border-2 border-pink-500 rounded-full px-4 py-1 text-sm font-bold text-pink-500 hover:bg-pink-500 hover:border-pink-500 hover:text-white transition-colors">
                            Buy Now
                        </button>
                    </a>
                </div>

                <!-- Ice Cream Card 3 -->
                <div class="text-center p-4 bg-white rounded-lg">
                    <a href="../Order Menu/Menu.php?product=pink-matter" class="block">
                        <div class="aspect-w-1 aspect-h-1 mb-2">
                            <img src="../../src/s.jpeg" alt="Ice Cream" class="w-full h-48 object-cover rounded-lg transform hover:scale-105 transition-transform duration-300">
                        </div>
                        <h3 class="text-lg md:text-2xl font-bold mb-2">Pink Matter</h3>
                        <div class="flex justify-center items-center mb-2">
                            <div class="flex">
                                <span class="text-yellow-400 text-sm md:text-base">★★★★★</span>
                            </div>
                            <span class="ml-1 text-gray-600 text-sm">4.7</span>
                        </div>
                        <button class="w-full bg-white border-2 border-pink-500 rounded-full px-4 py-1 text-sm font-bold text-pink-500 hover:bg-pink-500 hover:border-pink-500 hover:text-white transition-colors">
                            Buy Now
                        </button>
                    </a>
                </div>

                <!-- Ice Cream Card 4 -->
                <div class="text-center p-4 bg-white rounded-lg">
                    <a href="../Order Menu/Menu.php?product=crack-rock" class="block">
                        <div class="aspect-w-1 aspect-h-1 mb-2">
                            <img src="../../src/w.jpeg" alt="Ice Cream" class="w-full h-48 object-cover rounded-lg transform hover:scale-105 transition-transform duration-300">
                        </div>
                        <h3 class="text-lg md:text-2xl font-bold mb-2">Crack Rock</h3>
                        <div class="flex justify-center items-center mb-2">
                            <div class="flex">
                                <span class="text-yellow-400 text-sm md:text-base">★★★★★</span>
                            </div>
                            <span class="ml-1 text-gray-600 text-sm">4.7</span>
                        </div>
                        <button class="w-full bg-white border-2 border-pink-500 rounded-full px-4 py-1 text-sm font-bold text-pink-500 hover:bg-pink-500 hover:border-pink-500 hover:text-white transition-colors">
                            Buy Now
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Credit Section -->
<section id="credit-section" class="bg-gradient-to-b from-pink-400 to-pink-500 w-full py-8 md:py-16">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 md:gap-12 mb-8 md:mb-12">
            <!-- About Us -->
            <div class="text-center md:text-left mb-6 md:mb-0">
                <h3 class="text-xl md:text-2xl font-black text-white mb-3 md:mb-6 relative inline-block">
                    About Us
                    <span class="absolute bottom-0 left-0 w-1/2 h-1 bg-yellow-400"></span>
                </h3>
                <p class="text-white text-sm md:text-base mb-3 md:mb-4">Ocean Scoops brings you the finest ice cream experience with premium ingredients and unique flavors that will make your taste buds dance!</p>
                <img src="../../src/logo.png" alt="Ocean Scoops" class="w-44 md:w-32 mx-auto md:mx-0">
            </div>

            <!-- Quick Links -->
            <div class="text-center md:text-left mb-6 md:mb-0">
                <h3 class="text-xl md:text-2xl font-black text-white mb-3 md:mb-6 relative inline-block">
                    Quick Links
                    <span class="absolute bottom-0 left-0 w-1/2 h-1 bg-yellow-400"></span>
                </h3>
                <ul class="space-y-2 md:space-y-3">
                    <li><a href="#buy-section" class="text-white text-sm md:text-base hover:text-yellow-400 transition-colors">Ice Cream Flavors</a></li>
                    <li><a href="#" class="text-white text-sm md:text-base hover:text-yellow-400 transition-colors">Where to Buy</a></li>
                    <li><a href="#" class="text-white text-sm md:text-base hover:text-yellow-400 transition-colors">Shops & Catering</a></li>
                    <li><a href="#" class="text-white text-sm md:text-base hover:text-yellow-400 transition-colors">Contact Us</a></li>
                </ul>
            </div>

            <!-- Contact & Social -->
            <div class="text-center md:text-left">
                <h3 class="text-xl md:text-2xl font-black text-white mb-3 md:mb-6 relative inline-block">
                    Stay Connected
                    <span class="absolute bottom-0 left-0 w-1/2 h-1 bg-yellow-400"></span>
                </h3>
                <div class="mb-4 md:mb-6">
                    <p class="text-white text-sm md:text-base mb-2 flex items-center justify-center md:justify-start">
                        <svg class="w-4 h-4 md:w-5 md:h-5 mr-2 md:mr-3" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                            <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                        </svg>
                        oceanscoops7@gmail.com
                    </p>
                    <p class="text-white text-sm md:text-base flex items-center justify-center md:justify-start">
                        <svg class="w-4 h-4 md:w-5 md:h-5 mr-2 md:mr-3" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path>
                        </svg>
                        (555) 123-4567
                    </p>
                </div>
                <div class="flex justify-center md:justify-start space-x-4">
                    <a href="https://www.instagram.com/muhamadzikriii/" class="bg-white p-1.5 md:p-2 rounded-full text-pink-500 hover:bg-yellow-400 hover:text-white transition-all transform hover:scale-110">
                        <svg class="w-5 h-5 md:w-6 md:h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.059 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.98-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.98-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                        </svg>
                    </a>
                    <a href="#" class="bg-white p-1.5 md:p-2 rounded-full text-pink-500 hover:bg-yellow-400 hover:text-white transition-all transform hover:scale-110">
                        <svg class="w-5 h-5 md:w-6 md:h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <!-- Copyright -->
        <div class="text-center border-t border-white/20 pt-4 md:pt-8">
            <p class="text-white text-xs md:text-sm">
                © 2025 Ocean Scoops. Designed with 
                <span class="inline-block animate-bounce">❤️</span> 
                by Muhamad Dzikri
            </p>
        </div>
    </div>
</section>
    <style>
        /* Memastikan container tidak overflow di mobile */
        .container {
            overflow-x: hidden;
        }

        /* Memperbaiki spacing di mobile */
        @media (max-width: 768px) {
            .grid {
                row-gap: 2rem;
            }
            
            h3 {
                display: inline-block;
                margin-left: auto;
                margin-right: auto;
            }
            
            .space-y-3 > * {
                margin-top: 0.75rem;
                margin-bottom: 0.75rem;
            }
        }

        /* Reset default body margin */
        body {
            margin: 0;
            padding: 0;
        }

        /* Navbar styles */
        #navbar {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            transition: all 0.3s ease-in-out;
        }

        /* Add padding to main content to prevent overlap */
        main {
            padding-top: 80px; /* Sesuaikan dengan tinggi navbar */
        }

        @media (min-width: 768px) {
            main {
                padding-top: 96px; /* Sesuaikan untuk desktop */
            }
        }
    </style>
    <script>
        // Contoh implementasi lazy loading
        document.addEventListener("DOMContentLoaded", function() {
            const images = document.querySelectorAll("img[data-src]");
            const imageObserver = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const img = entry.target;
                        img.src = img.dataset.src;
                        observer.unobserve(img);
                    }
                });
            });
            
            images.forEach(img => imageObserver.observe(img));
        });

        const mobileMenuButton = document.getElementById('mobileMenuButton');
        const mobileMenu = document.getElementById('mobileMenu');

        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        // Mobile carousel functionality
        document.addEventListener('DOMContentLoaded', function() {
            const grid = document.querySelector('.grid');
            const prevBtn = document.getElementById('prevBtn');
            const nextBtn = document.getElementById('nextBtn');
            const pageIndicator = document.getElementById('pageIndicator');
            const cards = grid.children;
            let currentIndex = 0;

            function updatePageIndicator() {
                if (pageIndicator) {
                    pageIndicator.textContent = `${currentIndex + 1}/${cards.length}`;
                }
            }

            function scrollToCard(index) {
                if (index >= 0 && index < cards.length) {
                    cards[index].scrollIntoView({ behavior: 'smooth', inline: 'start' });
                    currentIndex = index;
                    updatePageIndicator();
                }
            }

            if (prevBtn && nextBtn) {
                prevBtn.addEventListener('click', () => {
                    
                    scrollToCard(currentIndex - 1);
                });

                nextBtn.addEventListener('click', () => {
                    scrollToCard(currentIndex + 1);
                });
            }

            // Update indicator on scroll
            grid.addEventListener('scroll', () => {
                const newIndex = Math.round(grid.scrollLeft / grid.offsetWidth);
                if (newIndex !== currentIndex) {
                    currentIndex = newIndex;
                    updatePageIndicator();
                }
            });

            // Initial setup
            updatePageIndicator();
        });
    </script>
    <script>
        document.getElementById("getScoopButton").addEventListener("click", function() {
            document.getElementById("buy-section").scrollIntoView({ behavior: "smooth" });
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const navbar = document.getElementById('navbar');
            let lastScroll = 0;

            // Set initial padding for content
            const setContentPadding = () => {
                document.body.style.paddingTop = navbar.offsetHeight + 'px';
            };

            // Call on load
            setContentPadding();

            // Call on window resize
            window.addEventListener('resize', setContentPadding);

            window.addEventListener('scroll', () => {
                const currentScroll = window.pageYOffset;
                
                if (currentScroll > 0) {
                    navbar.classList.add('shadow-lg', 'bg-white/95', 'backdrop-blur-sm');
                    navbar.classList.remove('bg-white');
                } else {
                    navbar.classList.remove('shadow-lg', 'bg-white/95', 'backdrop-blur-sm');
                    navbar.classList.add('bg-white');
                }
                
                if (currentScroll > lastScroll && currentScroll > 100) {
                    navbar.style.transform = 'translateY(-100%)';
                } else {
                    navbar.style.transform = 'translateY(0)';
                }
                
                lastScroll = currentScroll;
            });
        });
    </script>

    <!-- Search Overlay -->
    <div id="searchOverlay" class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden">
        <div class="container mx-auto px-4 h-full flex items-start pt-20">
            <div class="w-full max-w-3xl mx-auto bg-white rounded-lg shadow-xl overflow-hidden">
                <div class="p-4 flex items-center justify-between border-b">
                    <div class="flex-1 flex items-center">
                        <svg class="w-6 h-6 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                        </svg>
                        <input type="text" id="searchInput" class="w-full ml-4 text-lg focus:outline-none" placeholder="Search for flavors...">
                    </div>
                    <button id="closeSearch" class="ml-4 text-gray-500 hover:text-gray-700">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </button>
                </div>
                <div id="searchResults" class="p-4 max-h-96 overflow-y-auto">
                    <!-- Results will be populated here -->
                    
                </div>
            </div>
        </div>
    </div>

    <script>
    // Data pencarian (bisa diganti dengan data dari API/database)
    const searchData = [
        { 
            name: 'Pretty Sweet', 
            rating: '4.8',
            image: '../../src/c.jpeg',
            url: '../Order Menu/Menu.php?product=pretty-sweet'
        },
        { 
            name: 'White Ferrari', 
            rating: '4.2',
            image: '../../src/v.jpeg',
            url: '../Order Menu/Menu.php?product=white-ferrari'
        },
        { 
            name: 'Pink Matter', 
            rating: '4.7',
            image: '../../src/s.jpeg',
            url: '../Order Menu/Menu.php?product=pink-matter'
        },
        { 
            name: 'Crack Rock', 
            rating: '4.7',
            image: '../../src/w.jpeg',
            url: '../Order Menu/Menu.php?product=crack-rock'
        }
    ];

    // Search functionality
    document.addEventListener('DOMContentLoaded', function() {
        const searchButton = document.querySelector('button.p-2.hover\\:text-pink-400');
        const searchOverlay = document.getElementById('searchOverlay');
        const closeSearch = document.getElementById('closeSearch');
        const searchInput = document.getElementById('searchInput');
        const searchResults = document.getElementById('searchResults');

        // Open search
        searchButton.addEventListener('click', () => {
            searchOverlay.classList.remove('hidden');
            document.body.style.overflow = 'hidden'; // Prevent scrolling
            searchInput.focus();
        });

        // Close search
        closeSearch.addEventListener('click', () => {
            searchOverlay.classList.add('hidden');
            document.body.style.overflow = '';
            searchInput.value = '';
            searchResults.innerHTML = '';
        });

        // Close on overlay click
        searchOverlay.addEventListener('click', (e) => {
            if (e.target === searchOverlay) {
                searchOverlay.classList.add('hidden');
                document.body.style.overflow = '';
                searchInput.value = '';
                searchResults.innerHTML = '';
            }
        });

        // Search input handler
        searchInput.addEventListener('input', (e) => {
            const searchTerm = e.target.value.toLowerCase();
            const filteredResults = searchData.filter(item => 
                item.name.toLowerCase().includes(searchTerm)
            );
            
            displayResults(filteredResults);
        });

        // Display results
        function displayResults(results) {
            searchResults.innerHTML = '';
            
            if (results.length === 0) {
                searchResults.innerHTML = `
                    <div class="text-center text-gray-500 py-4">
                        Tidak ada hasil yang ditemukan
                    </div>
                `;
                return;
            }

            results.forEach(item => {
                const resultItem = `
                    <a href="${item.url}" class="flex items-center p-4 hover:bg-gray-50 rounded-lg transition-colors">
                        <img src="${item.image}" alt="${item.name}" class="w-16 h-16 object-cover rounded-lg">
                        <div class="ml-4">
                            <h3 class="text-lg font-bold">${item.name}</h3>
                            <div class="flex items-center">
                                <span class="text-yellow-400">★★★★★</span>
                                <span class="ml-1 text-gray-600 text-sm">${item.rating}</span>
                            </div>
                        </div>
                    </a>
                `;
                searchResults.innerHTML += resultItem;
            });
        }

        // Close on escape key
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && !searchOverlay.classList.contains('hidden')) {
                searchOverlay.classList.add('hidden');
                document.body.style.overflow = '';
                searchInput.value = '';
                searchResults.innerHTML = '';
            }
        });
    });
    </script>

    <style>
    /* Search overlay animation */
    #searchOverlay {
        transition: opacity 0.3s ease-in-out;
    }

    #searchOverlay.hidden {
        opacity: 0;
        pointer-events: none;
    }

    #searchOverlay:not(.hidden) {
        opacity: 1;
    }

    /* Search results animation */
    #searchResults a {
        animation: fadeIn 0.3s ease-in-out;
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
    </style>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Mengambil semua link yang mengarah ke section tertentu
        const smoothScrollLinks = document.querySelectorAll('a[href^="#"]');
        
        smoothScrollLinks.forEach(link => {
            link.addEventListener('click', function(e) {
                // Skip jika href hanya "#"
                if(this.getAttribute('href') === '#') return;
                
                e.preventDefault();
                
                // Menutup mobile menu jika terbuka
                const mobileMenu = document.getElementById('mobileMenu');
                if (!mobileMenu.classList.contains('hidden')) {
                    mobileMenu.classList.add('hidden');
                }
                
                // Get the target section
                const targetId = this.getAttribute('href');
                const targetSection = document.querySelector(targetId);
                
                if(targetSection) {
                    // Scroll smooth ke section yang dituju
                    targetSection.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    });
    </script>

    <!-- Audio for notifications -->
    <audio id="notificationSound" src="../../src/notification.mp3" preload="auto"></audio>

    <!-- Notification Container -->
    <div id="notificationContainer" class="fixed top-4 right-4 z-50">
        <div id="notificationToast" class="bg-white p-4 rounded-lg shadow-lg transform translate-x-full transition-transform duration-300 hidden">
            <div class="flex items-center space-x-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-pink-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/>
                </svg>
                <div>
                    <h3 class="font-bold" id="notificationTitle"></h3>
                    <p id="notificationMessage"></p>
                </div>
            </div>
        </div>
    </div>

    <!-- Queue Number Display -->
    <div id="queueNumberDisplay" class="fixed bottom-4 right-4 bg-white p-4 rounded-lg shadow-lg transform translate-y-full transition-transform duration-300 hidden z-50">
        <div class="flex items-center space-x-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-pink-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
            </svg>
            <span class="font-bold">Nomor Antrian Anda: <span id="queueNumber">-</span></span>
        </div>
    </div>

    <script>
        let lastStatus = null;
        let lastQueueNumber = null;
        let isChecking = false;
        const notificationSound = document.getElementById('notificationSound');
        const queueNumberDisplay = document.getElementById('queueNumberDisplay');
        const queueNumberElement = document.getElementById('queueNumber');
        const notificationToast = document.getElementById('notificationToast');
        const notificationTitle = document.getElementById('notificationTitle');
        const notificationMessage = document.getElementById('notificationMessage');

        // Preload audio
        notificationSound.load();

        function playNotificationSound() {
            try {
                notificationSound.currentTime = 0;
                const playPromise = notificationSound.play();
                if (playPromise !== undefined) {
                    playPromise.catch(error => {
                        console.error('Error playing notification sound:', error);
                    });
                }
            } catch (error) {
                console.error('Error with notification sound:', error);
            }
        }

        function showNotification(title, message) {
            // Update notification content
            notificationTitle.textContent = title;
            notificationMessage.textContent = message;
            
            // Show notification with animation
            notificationToast.classList.remove('hidden');
            notificationToast.classList.remove('translate-x-full');
            
            // Play sound
            playNotificationSound();
            
            // Hide notification after 5 seconds
            setTimeout(() => {
                notificationToast.classList.add('translate-x-full');
                setTimeout(() => {
                    notificationToast.classList.add('hidden');
                }, 300);
            }, 5000);
        }

        function showQueueNumber(queueNumber) {
            queueNumberElement.textContent = queueNumber;
            queueNumberDisplay.classList.remove('hidden');
            queueNumberDisplay.classList.remove('translate-y-full');
        }

        function hideQueueNumber() {
            queueNumberDisplay.classList.add('translate-y-full');
            setTimeout(() => {
                queueNumberDisplay.classList.add('hidden');
            }, 300);
        }

        function handleConnectionErrors() {
            // Reset checking state after a short delay
            setTimeout(() => {
                isChecking = false;
            }, 5000);
            
            // Don't show error notifications to users, just log them
            console.log('Connection issue, will retry later');
        }

        // Modify the checkOrderStatus function to include proper error handling
        async function checkOrderStatus() {
            try {
                const response = await fetch('../../Admin/php/get_last_order.php', {
                    method: 'GET',
                    headers: {
                        'Accept': 'application/json',
                        'Cache-Control': 'no-cache'
                    }
                });

                // Check if the response is JSON
                const contentType = response.headers.get('content-type');
                if (!contentType || !contentType.includes('application/json')) {
                    // Handle non-JSON response
                    const text = await response.text();
                    console.error('Server returned non-JSON response:', text);
                    throw new Error('Server returned non-JSON response');
                }

                if (!response.ok) {
                    throw new Error(`HTTP error! status: ${response.status}`);
                }

                const data = await response.json();
                console.log('Order status check:', data);
                
                if (data.success) {
                    const order = data.order;
                    
                    if (order) {
                        const { status, queue_number } = order;
                        
                        // Update queue number display
                        if (queue_number && queue_number !== lastQueueNumber) {
                            showQueueNumber(queue_number);
                            lastQueueNumber = queue_number;
                        }
                        
                        // Show notifications for status changes
                        if (status !== lastStatus) {
                            if (status === 'processing') {
                                showNotification('Pesanan Diproses', `Pesanan Anda sedang diproses dengan nomor antrian ${queue_number}`);
                            } else if (status === 'completed') {
                                showNotification('Pesanan Selesai', 'Pesanan Anda telah selesai! Silakan ambil di kasir.');
                                hideQueueNumber();
                            }
                            lastStatus = status;
                        }
                    } else {
                        hideQueueNumber();
                    }
                } else {
                    console.error('Error from server:', data.error);
                }
            } catch (error) {
                console.error('Error checking order status:', error);
                handleConnectionErrors();
            }
        }

        // Add CSS for animations
        const style = document.createElement('style');
        style.textContent = `
            #notificationToast {
                transition: transform 0.3s ease-out;
            }
            #queueNumberDisplay {
                transition: transform 0.3s ease-out;
            }
        `;
        document.head.appendChild(style);
    </script>

    <style>
        #notificationToast {
            transition: all 0.3s ease;
            z-index: 1000;
            animation: slideIn 0.3s ease;
        }

        #queueNumberDisplay {
            transition: all 0.3s ease;
            z-index: 1000;
            animation: slideIn 0.3s ease;
        }

        @keyframes slideIn {
            from {
                transform: translateX(100%);
                opacity: 0;
            }
            to {
                transform: translateX(0);
                opacity: 1;
            }
        }
    </style>
</body>
</html>