<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
    <link rel="icon" type="image/x-icon" href="../../src/logo.png">
</head>
<body>
    <div class="min-h-screen bg-gradient-to-b from-pink-100 to-white">
        <!-- Product Detail Card -->
        <div class="container mx-auto p-4 pt-20">
            <!-- Mobile View (< 640px) -->
            <div class="sm:hidden container mx-auto p-4 max-w-md">
                <!-- Back Button -->
                <div class="mb-4">
                    <a href="../Dashboard/Dashboard.php" class="flex items-center text-pink-500 hover:text-pink-600">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                        </svg>
                        <span>Kembali ke Dashboard</span>
                    </a>
                </div>
                
                <!-- Product Image & Counter -->
                <div class="bg-pink-500 rounded-3xl p-8 text-center mb-6">
                    <img src="../../src/p.png" alt="Ice Cream" class="w-48 h-48 mx-auto mb-4 rounded-full">
                    <p class="text-white text-xl mb-4">Chocolate Delight</p>
                    <div class="flex items-center justify-center gap-4 bg-white rounded-full w-32 mx-auto">
                        <button class="text-pink-500 text-xl font-bold px-2">-</button>
                        <span class="text-gray-800 font-medium">1</span>
                        <button class="text-pink-500 text-xl font-bold px-2">+</button>
                    </div>
                </div>
        
                <!-- Extra Material Section -->
                <div class="mb-6">
                    <h2 class="text-xl font-bold text-gray-800 mb-4">Extra Material</h2>
                    <div class="space-y-3">
                        <div class="flex items-center justify-between">
                            <label class="flex items-center gap-3">
                                <input type="checkbox" class="w-5 h-5 rounded-md border-gray-300 text-pink-500 focus:ring-pink-500">
                                <span>Chocolate Chips</span>
                            </label>
                            <span class="text-gray-600">Free</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <label class="flex items-center gap-3">
                                <input type="checkbox" class="w-5 h-5 rounded-md border-gray-300 text-pink-500 focus:ring-pink-500">
                                <span>Sprinkles</span>
                            </label>
                            <span class="text-gray-600">Free</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <label class="flex items-center gap-3">
                                <input type="checkbox" class="w-5 h-5 rounded-md border-gray-300 text-pink-500 focus:ring-pink-500">
                                <span>Wafer</span>
                            </label>
                            <span class="text-gray-600">Rp 1.000</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <label class="flex items-center gap-3">
                                <input type="checkbox" class="w-5 h-5 rounded-md border-gray-300 text-pink-500 focus:ring-pink-500">
                                <span>Caramel</span>
                            </label>
                            <span class="text-gray-600">Rp 1.000</span>
                        </div>
                    </div>
                </div>
        
                <!-- Beverage Section -->
                <div class="mb-8">
                    <h2 class="text-xl font-bold text-gray-800 mb-4">Beverage</h2>
                    <div class="space-y-3">
                        <div class="flex items-center justify-between">
                            <label class="flex items-center gap-3">
                                <input type="radio" name="beverage" value="cone" class="w-5 h-5 rounded-full border-gray-300 text-pink-500 focus:ring-pink-500">
                                <span>Cone</span>
                            </label>
                            <span class="text-gray-600">Free</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <label class="flex items-center gap-3">
                                <input type="radio" name="beverage" value="cup" class="w-5 h-5 rounded-full border-gray-300 text-pink-500 focus:ring-pink-500">
                                <span>Cup</span>
                            </label>
                            <span class="text-gray-600">Free</span>
                        </div>
                    </div>
                </div>
        
                <!-- Total and Add to Cart -->
                <div class="flex items-center justify-between">
                    <div class="text-2xl font-bold text-gray-800 total-price">Rp 7.000</div>
                    <button onclick="submitOrder()" class="bg-pink-500 text-white px-6 py-3 rounded-full font-medium hover:bg-pink-600 transition-colors">
                        Buy Now
                    </button>
                </div>
            </div>

            <!-- Tablet View (640px - 1024px) -->
            <div class="hidden sm:block lg:hidden">
                <div class="bg-white rounded-3xl shadow-lg overflow-hidden">
                    <div class="grid grid-cols-2">
                        <!-- Left Side: Image & Basic Info -->
                        <div class="p-8 bg-gradient-to-br from-pink-50 to-white">
                            <div class="flex justify-between mb-6">
                                <button onclick="history.back()" class="text-pink-500 hover:text-pink-600">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                                    </svg>
                                </button>
                                <button class="text-pink-500 hover:text-pink-600">⋮</button>
                            </div>
                            
                            <div class="relative h-[300px] mb-6 group">
                                <div class="absolute inset-0 bg-pink-400 rounded-3xl transform rotate-6 group-hover:rotate-12 transition-transform"></div>
                                <img src="../../src/p.png" alt="Ice Cream" class="w-full h-full object-cover rounded-3xl relative z-10">
                            </div>

                            <div class="text-center">
                                <h1 class="text-3xl font-bold text-gray-800 mb-3">Chocolate Delight</h1>
                                <div class="flex items-center justify-center gap-2 mb-3">
                                    <div class="text-yellow-400">★★★★★</div>
                                    <span class="text-gray-600">(120 reviews)</span>
                                </div>
                                <p class="text-pink-500 font-bold text-2xl total-price">Rp 25.000</p>
                            </div>
                        </div>
                        
                        <!-- Right Side: Customization -->
                        <div class="p-8 flex flex-col">
                            <div class="flex gap-4 mb-6">
                                <button class="flex-1 py-3 bg-pink-100 text-pink-500 rounded-full font-medium hover:bg-pink-200">Details</button>
                                <button class="flex-1 py-3 text-gray-500 rounded-full hover:bg-gray-100">Reviews</button>
                            </div>
                            
                            <!-- Size Selection -->
                            <div class="mb-6">
                                <h3 class="font-bold text-gray-800 mb-4">Size</h3>
                                <div class="grid grid-cols-3 gap-3">
                                    <button class="p-3 border-2 rounded-xl hover:border-pink-500 hover:bg-pink-50">
                                        <span class="block text-sm font-medium">Small</span>
                                        <span class="text-pink-500">Rp 25k</span>
                                    </button>
                                    <button class="p-3 border-2 border-pink-500 bg-pink-50 rounded-xl">
                                        <span class="block text-sm font-medium">Medium</span>
                                        <span class="text-pink-500">Rp 35k</span>
                                    </button>
                                    <button class="p-3 border-2 rounded-xl hover:border-pink-500 hover:bg-pink-50">
                                        <span class="block text-sm font-medium">Large</span>
                                        <span class="text-pink-500">Rp 45k</span>
                                    </button>
                                </div>
                            </div>

                            <!-- Toppings -->
                            <div class="mb-6">
                                <h3 class="font-bold text-gray-800 mb-4">Add Toppings</h3>
                                <div class="grid grid-cols-2 gap-3">
                                    <label class="cursor-pointer">
                                        <input type="checkbox" class="hidden peer">
                                        <div class="p-3 border-2 rounded-xl peer-checked:border-pink-500 peer-checked:bg-pink-50 hover:border-pink-500 hover:bg-pink-50">
                                            <span class="block text-sm font-medium">Sprinkles</span>
                                            <span class="text-pink-500">+Rp 1.000</span>
                                        </div>
                                    </label>
                                    <!-- More toppings -->
                                </div>
                            </div>

                            <!-- Quantity & Add to Cart -->
                            <div class="mt-auto">
                                <div class="flex items-center justify-between gap-4">
                                    <div class="flex items-center gap-4 bg-pink-50 rounded-full px-6 py-3">
                                        <button class="text-pink-500 text-xl font-bold hover:text-pink-600">-</button>
                                        <span class="text-gray-800 font-medium w-8 text-center">1</span>
                                        <button class="text-pink-500 text-xl font-bold hover:text-pink-600">+</button>
                                    </div>
                                    <button onclick="submitOrder()" class="flex-1 bg-pink-500 text-white py-3 px-8 rounded-full font-medium hover:bg-pink-600 transition-colors">
                                        Add to Cart
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Desktop View (> 1024px) -->
            <div class="hidden lg:block">
                <div class="bg-white rounded-3xl shadow-lg overflow-hidden max-w-7xl mx-auto">
                    <div class="grid grid-cols-7">
                        <!-- Left Side: Large Image -->
                        <div class="col-span-3 relative bg-gradient-to-br from-pink-50 to-white p-12">
                            <button onclick="history.back()" class="absolute top-8 left-8 text-pink-500 hover:text-pink-600">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                                </svg>
                            </button>
                            
                            <div class="relative h-[500px] group">
                                <div class="absolute inset-0 bg-pink-400 rounded-3xl transform rotate-6 group-hover:rotate-12 transition-transform"></div>
                                <img src="../../src/p.png" alt="Ice Cream" class="w-full h-full object-cover rounded-3xl relative z-10">
                            </div>

                            <div class="mt-8 text-center">
                                <div class="flex items-center justify-center gap-2 mb-2">
                                    <div class="text-yellow-400">★★★★★</div>
                                    <span class="text-gray-600">(120 reviews)</span>
                                </div>
                                <p class="text-gray-600">Most Popular Choice</p>
                            </div>
                        </div>
                        
                        <!-- Middle: Product Info -->
                        <div class="col-span-2 p-12 border-r border-gray-100">
                            <div class="mb-8">
                                <h1 class="text-4xl font-bold text-gray-800 mb-4">Chocolate Delight</h1>
                                <p class="text-pink-500 font-bold text-3xl mb-6 total-price">Rp 25.000</p>
                                <p class="text-gray-600 leading-relaxed">
                                    A delightful chocolate ice cream made with premium cocoa and fresh cream. 
                                    Rich, creamy, and perfect for chocolate lovers.
                                </p>
                            </div>

                            <div class="flex gap-6 mb-8">
                                <button class="px-8 py-3 bg-pink-100 text-pink-500 rounded-full font-medium hover:bg-pink-200">Details</button>
                                <button class="px-8 py-3 text-gray-500 rounded-full hover:bg-gray-100">Reviews</button>
                            </div>

                            <!-- Size Selection -->
                            <div class="mb-8">
                                <h3 class="font-bold text-gray-800 mb-4">Choose Size</h3>
                                <div class="space-y-3">
                                    <button class="w-full p-4 border-2 rounded-xl hover:border-pink-500 hover:bg-pink-50 flex items-center justify-between">
                                        <span class="font-medium">Small</span>
                                        <span class="text-pink-500">Rp 5.000</span>
                                    </button>
                                    <button class="w-full p-4 border-2 border-pink-500 bg-pink-50 rounded-xl flex items-center justify-between">
                                        <span class="font-medium">Medium</span>
                                        <span class="text-pink-500">Rp 7.000</span>
                                    </button>
                                    <button class="w-full p-4 border-2 rounded-xl hover:border-pink-500 hover:bg-pink-50 flex items-center justify-between">
                                        <span class="font-medium">Large</span>
                                        <span class="text-pink-500">Rp 10.000</span>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Right Side: Toppings & Cart -->
                        <div class="col-span-2 p-12">
                            <div class="flex justify-end mb-8">
                                <button class="text-pink-500 hover:text-pink-600">⋮</button>
                            </div>

                            <div class="mb-8">
                                <h3 class="font-bold text-gray-800 mb-4">Add Toppings</h3>
                                <div class="grid grid-cols-2 gap-4">
                                    <label class="cursor-pointer">
                                        <input type="checkbox" class="hidden peer">
                                        <div class="p-4 border-2 rounded-xl peer-checked:border-pink-500 peer-checked:bg-pink-50 hover:border-pink-500 hover:bg-pink-50">
                                            <div class="w-12 h-12 bg-pink-100 rounded-full mb-3 p-2">
                                                <img src="../src/sprinkles.png" alt="Sprinkles" class="w-full h-full object-contain">
                                            </div>
                                            <span class="block font-medium mb-1">Sprinkles</span>
                                            <span class="text-pink-500">+Rp 5.000</span>
                                        </div>
                                    </label>
                                    <!-- More toppings -->
                                </div>
                            </div>

                            <!-- Quantity & Add to Cart -->
                            <div class="mt-auto">
                                <div class="flex items-center gap-6 mb-6">
                                    <div class="flex items-center gap-6 bg-pink-50 rounded-full px-6 py-4">
                                        <button class="text-pink-500 text-2xl font-bold hover:text-pink-600">-</button>
                                        <span class="text-gray-800 font-medium text-xl w-8 text-center">1</span>
                                        <button class="text-pink-500 text-2xl font-bold hover:text-pink-600">+</button>
                                    </div>
                                    <button onclick="submitOrder()" class="flex-1 bg-pink-500 text-white py-4 rounded-full font-medium text-lg hover:bg-pink-600 transition-colors">
                                        Add to Cart
                                    </button>
                                </div>
                                <p class="text-center text-gray-500 text-sm">Free delivery for orders above Rp 100.000</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Tambahkan modal antrian sebelum penutup body -->
    <div id="queueModal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50">
        <div class="bg-white p-8 rounded-lg shadow-xl max-w-md w-full mx-4">
            <div class="text-center">
                <h3 class="text-2xl font-bold mb-4">Pesanan Berhasil!</h3>
                <div class="mb-6">
                    <p class="text-gray-600 mb-2">Nomor Antrian Anda:</p>
                    <div class="text-5xl font-bold text-pink-500" id="queueNumber"></div>
                </div>
                <p class="text-gray-600 mb-6">Silakan tunggu pesanan Anda.</p>
                <button onclick="closeQueueModal()" class="bg-pink-500 text-white px-6 py-2 rounded-full hover:bg-pink-600 transition-colors">
                    OK
                </button>
            </div>
        </div>
    </div>

    <!-- Tambahkan modal untuk notifikasi status pesanan -->
    <div id="orderStatusModal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50">
        <div class="bg-white p-8 rounded-lg shadow-xl max-w-md w-full mx-4">
            <div class="text-center">
                <h3 class="text-2xl font-bold mb-4" id="orderStatusTitle"></h3>
                <p class="text-gray-600 mb-6" id="orderStatusMessage"></p>
                <button onclick="closeOrderStatusModal()" class="bg-pink-500 text-white px-6 py-2 rounded-full hover:bg-pink-600 transition-colors">
                    OK
                </button>
            </div>
        </div>
    </div>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Mengambil parameter produk dari URL
        const urlParams = new URLSearchParams(window.location.search);
        const product = urlParams.get('product');
        
        // Data produk
        const products = {
            'pretty-sweet': {
                name: 'Pretty Sweet',
                price: 7000,
                image: '../../src/c.jpeg'
            },
            'white-ferrari': {
                name: 'White Ferrari',
                price: 7000,
                image: '../../src/v.jpeg'
            },
            'pink-matter': {
                name: 'Pink Matter',
                price: 7000,
                image: '../../src/s.jpeg'
            },
            'crack-rock': {
                name: 'Crack Rock',
                price: 10000,
                image: '../../src/w.jpeg'
            }
        };

        // Inisialisasi basePrice berdasarkan produk yang dipilih
        let basePrice = products[product]?.price || 7000;
        let currentQuantity = 1;
        
        // Fungsi untuk memformat harga ke format Rupiah
        function formatPrice(price) {
            return `Rp ${price.toLocaleString('id-ID')}`;
        }

        // Fungsi untuk menghitung total harga
        function updateTotalPrice() {
            let additionalPrice = 0;
            let currentBasePrice = basePrice;

            // Hitung harga topping
            document.querySelectorAll('input[type="checkbox"]:checked').forEach(checkbox => {
                const priceText = checkbox.closest('div').querySelector('.text-gray-600').textContent;
                if (priceText.toLowerCase() !== 'free') {
                    const price = parseInt(priceText.replace(/[^0-9]/g, '')) || 0;
                    additionalPrice += price;
                }
            });

            // Hitung harga beverage
            const selectedBeverage = document.querySelector('input[name="beverage"]:checked');
            if (selectedBeverage && selectedBeverage.value === 'cup') {
                currentBasePrice = 10000;
            }

            // Hitung total harga dasar + topping
            const subtotal = currentBasePrice + additionalPrice;
            
            // Kalikan dengan jumlah produk
            const totalPrice = subtotal * currentQuantity;

            // Update semua elemen total price
            document.querySelectorAll('.total-price').forEach(el => {
                el.textContent = formatPrice(totalPrice);
            });

            return totalPrice;
        }

        // Event listener untuk checkbox dan radio button
        document.querySelectorAll('input[type="checkbox"], input[type="radio"]').forEach(input => {
            input.addEventListener('change', updateTotalPrice);
        });

        // Quantity control
        document.querySelectorAll('button').forEach(button => {
            if (button.textContent.trim() === '-') {
                button.addEventListener('click', function() {
                    if (currentQuantity > 1) {
                        currentQuantity--;
                        document.querySelectorAll('.text-gray-800.font-medium').forEach(el => {
                            el.textContent = currentQuantity;
                        });
                        updateTotalPrice();
                    }
                });
            }
            if (button.textContent.trim() === '+') {
                button.addEventListener('click', function() {
                    currentQuantity++;
                    document.querySelectorAll('.text-gray-800.font-medium').forEach(el => {
                        el.textContent = currentQuantity;
                    });
                    updateTotalPrice();
                });
            }
        });

        // Fungsi untuk mengirim pesanan
        async function submitOrder() {
            try {
                const productName = document.querySelector('h1.text-3xl.font-bold').textContent;
                const quantity = document.querySelector('.text-gray-800.font-medium').textContent;
                const toppings = Array.from(document.querySelectorAll('input[type="checkbox"]:checked'))
                    .map(checkbox => checkbox.nextElementSibling.textContent)
                    .join(', ');
                const totalPrice = document.querySelector('.total-price').textContent.replace('Rp ', '').replace('.', '');

                const orderData = {
                    product_name: productName,
                    quantity: quantity,
                    toppings: toppings,
                    total_price: totalPrice
                };

                const response = await fetch('../../Admin/php/submit_order.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify(orderData)
                });

                if (!response.ok) {
                    throw new Error(`HTTP error! status: ${response.status}`);
                }

                const data = await response.json();
                
                if (data.success) {
                    // Tampilkan modal dengan nomor antrian
                    showQueueModal(data.queue_number);
                } else {
                    alert('Gagal membuat pesanan: ' + data.message);
                }
            } catch (error) {
                console.error('Error:', error);
                alert('Terjadi kesalahan saat membuat pesanan');
            }
        }

        // Fungsi untuk menutup modal dan redirect ke waiting page
        function closeQueueModal() {
            console.log('Menutup modal dan redirect...');
            const modal = document.getElementById('queueModal');
            if (modal) {
                modal.classList.add('hidden');
                modal.classList.remove('flex');
            }
            
            // Gunakan setTimeout untuk memastikan redirect terjadi
            setTimeout(function() {
                console.log('Melakukan redirect...');
                window.location.href = '../Dashboard/waiting_page.php';
            }, 100);
        }

        // Fungsi untuk menampilkan modal nomor antrian
        function showQueueModal(queueNumber) {
            const modal = document.getElementById('queueModal');
            const queueNumberElement = document.getElementById('queueNumber');
            
            if (modal && queueNumberElement) {
                queueNumberElement.textContent = queueNumber;
                modal.classList.remove('hidden');
                modal.classList.add('flex');
                
                // Tambahkan event listener untuk tombol OK
                const okButton = modal.querySelector('button');
                if (okButton) {
                    okButton.onclick = function(e) {
                        e.preventDefault();
                        closeQueueModal();
                    };
                }
            }
        }

        // Tambahkan event listener untuk tombol submit
        const submitButton = document.querySelector('button[onclick="submitOrder()"]');
        if (submitButton) {
            submitButton.onclick = submitOrder;
        }

        // Inisialisasi total harga awal
        updateTotalPrice();

        // Jika ada parameter produk, update tampilan
        if (product && products[product]) {
            const productData = products[product];
            
            // Update nama produk
            document.querySelectorAll('p.text-white.text-xl').forEach(el => {
                el.textContent = productData.name;
            });
            
            // Update judul produk
            document.querySelectorAll('h1.text-3xl.font-bold').forEach(el => {
                el.textContent = productData.name;
            });
            
            // Update gambar produk
            document.querySelectorAll('img[alt="Ice Cream"]').forEach(el => {
                el.src = productData.image;
            });
            
            // Update harga dasar
            basePrice = productData.price;
            document.querySelectorAll('.total-price').forEach(el => {
                el.textContent = formatPrice(basePrice);
            });
        }
    });

    // Fungsi untuk mengecek status pesanan
    async function checkOrderStatus(queueNumber) {
        try {
            const response = await fetch('../../Admin/php/check_order_status.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({ queue_number: queueNumber })
            });

            if (!response.ok) {
                throw new Error(`HTTP error! status: ${response.status}`);
            }

            const data = await response.json();
            
            if (data.success) {
                if (data.status === 'completed') {
                    showOrderStatusModal('Pesanan Selesai!', 'Pesanan Anda sudah siap, silakan segera diambil!');
                } else if (data.status === 'processing') {
                    showOrderStatusModal('Pesanan Diproses', 'Pesanan Anda sedang dalam proses pembuatan.');
                }
            }
        } catch (error) {
            console.error('Error:', error);
        }
    }

    // Fungsi untuk menampilkan modal status pesanan
    function showOrderStatusModal(title, message) {
        document.getElementById('orderStatusTitle').textContent = title;
        document.getElementById('orderStatusMessage').textContent = message;
        document.getElementById('orderStatusModal').classList.remove('hidden');
        document.getElementById('orderStatusModal').classList.add('flex');
    }

    // Fungsi untuk menutup modal status pesanan
    function closeOrderStatusModal() {
        document.getElementById('orderStatusModal').classList.add('hidden');
        document.getElementById('orderStatusModal').classList.remove('flex');
    }

    // Set interval untuk mengecek status pesanan setiap 30 detik
    let orderStatusInterval;
    let currentQueueNumber = null;

    // Fungsi untuk memulai pengecekan status pesanan
    function startOrderStatusCheck(queueNumber) {
        currentQueueNumber = queueNumber;
        // Cek status segera setelah pesanan dibuat
        checkOrderStatus(queueNumber);
        // Set interval untuk pengecekan berkala
        orderStatusInterval = setInterval(() => {
            checkOrderStatus(queueNumber);
        }, 30000); // Cek setiap 30 detik
    }

    // Fungsi untuk menghentikan pengecekan status pesanan
    function stopOrderStatusCheck() {
        if (orderStatusInterval) {
            clearInterval(orderStatusInterval);
            currentQueueNumber = null;
        }
    }

    // Hentikan pengecekan status saat halaman ditutup
    window.addEventListener('beforeunload', function() {
        stopOrderStatusCheck();
    });
    </script>

    <style>
    /* ... existing styles ... */

    /* Tambahan style untuk modal antrian */
    #queueModal:not(.hidden) {
        animation: fadeIn 0.3s ease-in-out;
    }

    @keyframes fadeIn {
        from { opacity: 0; }
        to { opacity: 1; }
    }
    </style>
</body>
</html>