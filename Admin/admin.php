<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Admin Dashboard - Ocean Scoops</title>
    <link rel="icon" type="image/x-icon" href="../src/logo.png">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
    <!-- Tambahkan audio untuk notifikasi -->
    <audio id="notificationSound" src="../src/notification.mp3" preload="auto"></audio>
</head>
<body class="bg-gray-100">
    <!-- Login Section -->
    <div id="loginSection" class="min-h-screen flex items-center justify-center">
        <div class="bg-white p-8 rounded-lg shadow-md w-96">
            <div class="flex justify-center mb-6">
                <img src="../src/logo.png" alt="Logo" class="h-16">
            </div>
            <h2 class="text-2xl font-bold mb-6 text-center" style="font-family: 'Poppins', sans-serif;">Admin Login</h2>
            <form id="loginForm" class="space-y-4">
                <div>
                    <label for="adminEmail" class="block text-gray-700 mb-2">Email</label>
                    <input 
                        type="email" 
                        id="adminEmail" 
                        name="adminEmail"
                        class="w-full p-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-pink-500" 
                        required>
                </div>
                <div>
                    <label for="adminPassword" class="block text-gray-700 mb-2">Password</label>
                    <input 
                        type="password" 
                        id="adminPassword" 
                        name="adminPassword"
                        class="w-full p-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-pink-500" 
                        required>
                </div>
                <button 
                    type="submit" 
                    class="w-full bg-pink-500 text-white py-2 rounded-md hover:bg-pink-600 transition-colors">
                    Login
                </button>
            </form>
        </div>
    </div>

    <!-- Admin Dashboard -->
    <div id="adminDashboard" class="hidden">
        <nav class="bg-white shadow-md">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-16">
                    <div class="flex items-center">
                        <img src="../src/logo.png" alt="Logo" class="h-8">
                        <span class="ml-4 font-semibold text-lg">Admin Dashboard</span>
                    </div>
                    <div class="flex items-center gap-4">
                        <span id="adminEmail" class="text-gray-600"></span>
                        <button 
                            id="logoutButton" 
                            class="text-gray-600 hover:text-gray-800 px-4 py-2 rounded-md hover:bg-gray-100 transition-colors"
                            onclick="handleLogout()">
                            Logout
                        </button>
                    </div>
                </div>
            </div>
        </nav>

        <main class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
            <!-- Order Stats -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
                <div class="bg-white rounded-lg shadow p-6">
                    <h3 class="text-gray-500 text-sm font-medium">Pesanan Baru</h3>
                    <p class="text-3xl font-bold text-gray-800" id="newOrdersCount">0</p>
                </div>
                <div class="bg-white rounded-lg shadow p-6">
                    <h3 class="text-gray-500 text-sm font-medium">Pesanan Diproses</h3>
                    <p class="text-3xl font-bold text-gray-800" id="processingOrdersCount">0</p>
                </div>
                <div class="bg-white rounded-lg shadow p-6">
                    <h3 class="text-gray-500 text-sm font-medium">Pesanan Selesai</h3>
                    <p class="text-3xl font-bold text-gray-800" id="completedOrdersCount">0</p>
                </div>
            </div>

            <!-- Orders Table -->
            <div class="bg-white rounded-lg shadow overflow-hidden">
                <div class="p-6">
                    <div class="flex justify-between items-center mb-4">
                        <h2 class="text-lg font-semibold text-gray-800">Daftar Pesanan</h2>
                        <div class="flex gap-2">
                            <select id="statusFilter" class="border rounded-md p-2 text-sm">
                                <option value="all">Semua Status</option>
                                <option value="new">Baru</option>
                                <option value="processing">Diproses</option>
                                <option value="completed">Selesai</option>
                            </select>
                            <input type="text" id="searchOrder" placeholder="Cari pesanan..." class="border rounded-md p-2 text-sm">
                        </div>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead>
                                <tr>
                                    <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        No. Antrian
                                    </th>
                                    <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Order ID
                                    </th>
                                    <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Produk
                                    </th>
                                    <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Total
                                    </th>
                                    <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Status
                                    </th>
                                    <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Tanggal
                                    </th>
                                    <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Aksi
                                    </th>
                                </tr>
                            </thead>
                            <tbody id="ordersTableBody" class="bg-white divide-y divide-gray-200">
                                <!-- Orders will be inserted here -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <!-- Tambahkan modal untuk menampilkan nomor antrian -->
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

    <!-- Notifikasi Toast -->
    <div id="notificationToast" class="fixed top-4 right-4 bg-green-500 text-white px-6 py-3 rounded-lg shadow-lg transform translate-x-full transition-transform duration-300 flex items-center z-50">
        <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/>
        </svg>
        <span id="notificationMessage"></span>
    </div>

    <!-- Tambahkan tombol izin audio -->
    <div id="audioPermissionButton" class="fixed bottom-4 left-4 bg-pink-500 text-white px-4 py-2 rounded-lg shadow-lg cursor-pointer hover:bg-pink-600 transition-colors z-50">
        <div class="flex items-center space-x-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.536 8.464a5 5 0 010 7.072m2.828-9.9a9 9 0 010 12.728M5.586 15H4a1 1 0 01-1-1v-4a1 1 0 011-1h1.586l4.707-4.707C10.923 3.663 12 4.109 12 5v14c0 .891-1.077 1.337-1.707.707L5.586 15z" />
            </svg>
            <span>Aktifkan Notifikasi Suara</span>
        </div>
    </div>

    <!-- Update script untuk login -->
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const loginForm = document.getElementById('loginForm');
        const loginSection = document.getElementById('loginSection');
        const adminDashboard = document.getElementById('adminDashboard');
        const audioPermissionButton = document.getElementById('audioPermissionButton');
        let lastOrderCount = 0;
        let isAudioAllowed = false;
        const notificationSound = new Audio('../src/notification.mp3');
        
        // Fungsi untuk meminta izin audio
        function requestAudioPermission() {
            notificationSound.play()
                .then(() => {
                    isAudioAllowed = true;
                    notificationSound.pause();
                    notificationSound.currentTime = 0;
                    audioPermissionButton.classList.add('hidden');
                    showNotification('Sukses', 'Notifikasi suara telah diaktifkan!');
                })
                .catch(error => {
                    if (error.name === 'NotAllowedError') {
                        showNotification('Gagal', 'Silakan izinkan notifikasi suara di browser Anda');
                    } else {
                        console.error('Error:', error);
                    }
                });
        }

        // Event listener untuk tombol izin audio
        audioPermissionButton.addEventListener('click', requestAudioPermission);

        // Fungsi untuk memainkan suara notifikasi
        function playNotificationSound() {
            if (!isAudioAllowed) {
                console.log('Audio belum diizinkan oleh user');
                return;
            }
            
            try {
                notificationSound.currentTime = 0;
                const playPromise = notificationSound.play();
                
                if (playPromise !== undefined) {
                    playPromise.catch(error => {
                        if (error.name === 'NotAllowedError') {
                            console.log('User belum mengizinkan audio');
                            isAudioAllowed = false;
                            audioPermissionButton.classList.remove('hidden');
                        } else {
                            console.error('Error playing notification sound:', error);
                        }
                    });
                }
            } catch (error) {
                console.error('Error with notification sound:', error);
            }
        }

        // Check session status on page load
        async function checkSession() {
            try {
                const response = await fetch('php/check_session.php', {
                    credentials: 'include'
                });

                if (!response.ok) {
                    throw new Error(`HTTP error! status: ${response.status}`);
                }

                const data = await response.json();
                
                if (data.logged_in) {
                    loginSection.classList.add('hidden');
                    adminDashboard.classList.remove('hidden');
                    await loadOrders();
                    // Mulai polling untuk pesanan baru
                    startOrderPolling();
                }
            } catch (error) {
                console.error('Error:', error);
            }
        }

        // Load orders function
        async function loadOrders() {
            try {
                const statusFilter = document.getElementById('statusFilter').value;
                const searchValue = document.getElementById('searchOrder').value;

                const response = await fetch(`php/get_orders.php?status=${statusFilter}&search=${searchValue}`, {
                    credentials: 'include'
                });

                if (!response.ok) {
                    if (response.status === 401) {
                        loginSection.classList.remove('hidden');
                        adminDashboard.classList.add('hidden');
                        return;
                    }
                    throw new Error(`HTTP error! status: ${response.status}`);
                }

                const data = await response.json();
                
                if (data.success) {
                    updateOrdersTable(data.orders);
                    updateOrderStats(data.stats);
                    
                    // Cek apakah ada pesanan baru
                    const newOrdersCount = data.stats.new;
                    if (newOrdersCount > lastOrderCount && lastOrderCount !== 0) {
                        showNotification('Pesanan baru diterima!', 'Pesanan baru diterima!');
                    }
                    lastOrderCount = newOrdersCount;
                }
            } catch (error) {
                console.error('Error:', error);
            }
        }

        // Fungsi untuk memulai polling pesanan
        function startOrderPolling() {
            // Cek pesanan setiap 5 detik
            setInterval(async () => {
                try {
                    const response = await fetch('php/get_orders.php?status=all', {
                        credentials: 'include'
                    });

                    if (!response.ok) {
                        throw new Error(`HTTP error! status: ${response.status}`);
                    }

                    const data = await response.json();
                    
                    if (data.success) {
                        const currentNewOrders = data.stats.new;
                        
                        // Jika ada pesanan baru
                        if (currentNewOrders > lastOrderCount && lastOrderCount !== 0) {
                            showNotification('Pesanan baru diterima!', 'Pesanan baru diterima!');
                            // Update tabel dan statistik
                            updateOrdersTable(data.orders);
                            updateOrderStats(data.stats);
                        }
                        
                        lastOrderCount = currentNewOrders;
                    }
                } catch (error) {
                    console.error('Error polling orders:', error);
                }
            }, 5000); // Cek setiap 5 detik
        }

        // Handle login form submission
        loginForm.addEventListener('submit', async function(e) {
            e.preventDefault();
            
            try {
                const formData = new FormData(loginForm);
                
                const response = await fetch('php/login.php', {
                    method: 'POST',
                    body: formData,
                    credentials: 'include' // Penting! Untuk mengirim cookies
                });

                if (!response.ok) {
                    throw new Error(`HTTP error! status: ${response.status}`);
                }

                const data = await response.json();
                
                if (data.success) {
                    loginSection.classList.add('hidden');
                    adminDashboard.classList.remove('hidden');
                    await loadOrders();
                } else {
                    alert(data.message || 'Login gagal. Silakan coba lagi.');
                }
            } catch (error) {
                console.error('Error:', error);
                alert('Terjadi kesalahan saat login');
            }
        });

        // Update order status
        window.updateOrderStatus = async function(orderId, newStatus) {
            try {
                const response = await fetch('php/update_order.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded',
                    },
                    body: `orderId=${orderId}&status=${newStatus}`,
                    credentials: 'include'
                });

                if (!response.ok) {
                    throw new Error(`HTTP error! status: ${response.status}`);
                }

                const data = await response.json();
                
                if (data.success) {
                    await loadOrders(); // Refresh data pesanan
                    if (newStatus === 'completed') {
                        showNotification('Pesanan #' + orderId + ' telah selesai!', 'Pesanan telah selesai!');
                    }
                } else {
                    alert('Gagal mengupdate status: ' + data.message);
                }
            } catch (error) {
                console.error('Error:', error);
                alert('Terjadi kesalahan saat mengupdate status pesanan');
            }
        }

        // Update orders table
        function updateOrdersTable(orders) {
            const ordersTableBody = document.getElementById('ordersTableBody');
            ordersTableBody.innerHTML = '';

            orders.forEach(order => {
                const row = `
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-3 py-1 inline-flex text-lg leading-5 font-bold rounded-full bg-yellow-100 text-yellow-800">
                                ${order.queue_number}
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            ${order.order_id}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">${order.product_name}</div>
                            <div class="text-sm text-gray-500">Qty: ${order.quantity}</div>
                            <div class="text-xs text-gray-500">${order.toppings || ''}</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            Rp ${parseInt(order.total_price).toLocaleString('id-ID')}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full 
                                ${order.status === 'new' ? 'bg-yellow-100 text-yellow-800' : 
                                order.status === 'processing' ? 'bg-blue-100 text-blue-800' : 
                                'bg-green-100 text-green-800'}">
                                ${order.status === 'new' ? 'Baru' : 
                                order.status === 'processing' ? 'Diproses' : 
                                'Selesai'}
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            ${order.order_date}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                            <select class="status-select border rounded p-1" 
                                    onchange="updateOrderStatus('${order.order_id}', this.value)">
                                <option value="new" ${order.status === 'new' ? 'selected' : ''}>Baru</option>
                                <option value="processing" ${order.status === 'processing' ? 'selected' : ''}>Diproses</option>
                                <option value="completed" ${order.status === 'completed' ? 'selected' : ''}>Selesai</option>
                            </select>
                        </td>
                    </tr>
                `;
                ordersTableBody.innerHTML += row;
            });
        }

        // Update order stats
        function updateOrderStats(stats) {
            document.getElementById('newOrdersCount').textContent = stats.new;
            document.getElementById('processingOrdersCount').textContent = stats.processing;
            document.getElementById('completedOrdersCount').textContent = stats.completed;
        }

        // Event listeners
        document.getElementById('statusFilter').addEventListener('change', loadOrders);
        document.getElementById('searchOrder').addEventListener('input', loadOrders);

        // Fungsi untuk menampilkan notifikasi
        function showNotification(title, message) {
            const notificationToast = document.getElementById('notificationToast');
            const notificationMessage = document.getElementById('notificationMessage');
            
            notificationMessage.textContent = message;
            notificationToast.classList.remove('translate-x-full');
            
            // Coba mainkan suara notifikasi
            playNotificationSound();
            
            setTimeout(() => {
                notificationToast.classList.add('translate-x-full');
            }, 5000);
        }

        // Tambahkan event listener untuk interaksi user pertama kali
        document.addEventListener('click', function() {
            if (!isAudioAllowed) {
                // Coba mainkan audio untuk mendapatkan izin
                notificationSound.play()
                    .then(() => {
                        isAudioAllowed = true;
                        notificationSound.pause();
                        notificationSound.currentTime = 0;
                    })
                    .catch(error => {
                        console.log('User belum mengizinkan audio:', error);
                    });
            }
        }, { once: true });

        // Fungsi untuk menampilkan modal nomor antrian
        function showQueueModal(queueNumber) {
            document.getElementById('queueNumber').textContent = queueNumber;
            document.getElementById('queueModal').classList.remove('hidden');
            document.getElementById('queueModal').classList.add('flex');
        }

        // Fungsi untuk menutup modal
        function closeQueueModal() {
            document.getElementById('queueModal').classList.add('hidden');
            document.getElementById('queueModal').classList.remove('flex');
        }

        // Update fungsi submit order untuk mendapatkan nomor antrian
        async function submitOrder(orderData) {
            try {
                const response = await fetch('php/submit_order.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify(orderData)
                });
                
                const result = await response.json();
                
                if (result.success) {
                    showQueueModal(result.queue_number);
                    // Reset form atau lakukan aksi lain yang diperlukan
                } else {
                    alert('Gagal membuat pesanan: ' + result.message);
                }
            } catch (error) {
                console.error('Error:', error);
                alert('Terjadi kesalahan saat membuat pesanan');
            }
        }

        // Tambahkan script untuk logout
        async function handleLogout() {
            try {
                const response = await fetch('php/logout.php', {
                    method: 'POST',
                    credentials: 'include'
                });

                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }

                const data = await response.json();
                
                if (data.success) {
                    // Sembunyikan dashboard dan tampilkan form login
                    document.getElementById('adminDashboard').classList.add('hidden');
                    document.getElementById('loginSection').classList.remove('hidden');
                    
                    // Clear form login jika ada
                    document.getElementById('loginForm').reset();
                }
            } catch (error) {
                console.error('Error:', error);
                alert('Terjadi kesalahan saat logout');
            }
        }

        // Inisialisasi
        checkSession();
    });
    </script>

    <style>
        /* Custom styles */
        input[type="checkbox"] {
            accent-color: #ec4899;
        }

        .status-select {
            transition: all 0.2s;
        }

        .status-select:hover {
            border-color: #ec4899;
        }

        .status-select:focus {
            outline: none;
            border-color: #ec4899;
            ring: 2px;
            ring-color: #ec4899;
        }

        /* Animation for table rows */
        #ordersTableBody tr {
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

        /* Animasi untuk notifikasi toast */
        #notificationToast {
            transition: transform 0.3s ease-in-out;
            z-index: 9999;
        }

        #notificationToast.show {
            transform: translateX(0);
        }
    </style>
</body>
</html>
