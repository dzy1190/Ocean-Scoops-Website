<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Waiting Page - Ocean Scoops</title>
    <link rel="icon" type="image/x-icon" href="../../src/logo.png">
</head>
<body class="bg-gradient-to-r from-pink-400 to-pink-500 min-h-screen">
    <div class="min-h-screen flex items-center justify-center">
        <div class="text-center w-full px-4">
            <div id="waitingIcon" class="mb-8">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-32 w-32 mx-auto text-white animate-spin" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </div>
            <div id="completedIcon" class="mb-8 hidden">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-32 w-32 mx-auto text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
            </div>
            
            <h2 id="statusTitle" class="text-4xl font-bold text-white mb-4">Menunggu Pesanan</h2>
            <p id="statusMessage" class="text-xl text-white mb-8">Pesanan Anda sedang diproses...</p>
            
            <div class="bg-white/20 backdrop-blur-sm rounded-3xl p-8 mb-8 max-w-md mx-auto">
                <p class="text-lg text-white mb-2">Nomor Antrian</p>
                <p id="queueNumber" class="text-6xl font-bold text-white">-</p>
            </div>
            
            <a href="Dashboard.php" id="backButton" class="hidden inline-block bg-white text-pink-500 px-8 py-4 rounded-full text-lg font-medium hover:bg-pink-100 transition-colors">
                Kembali ke Dashboard
            </a>
        </div>
    </div>

    <script>
        let lastStatus = null;
        let lastQueueNumber = null;
        const waitingIcon = document.getElementById('waitingIcon');
        const completedIcon = document.getElementById('completedIcon');
        const statusTitle = document.getElementById('statusTitle');
        const statusMessage = document.getElementById('statusMessage');
        const queueNumber = document.getElementById('queueNumber');
        const backButton = document.getElementById('backButton');

        // Fungsi untuk mengecek status pesanan
        async function checkOrderStatus() {
            try {
                const response = await fetch('../../Admin/php/get_last_order.php', {
                    method: 'GET',
                    headers: {
                        'Accept': 'application/json',
                        'Cache-Control': 'no-cache'
                    }
                });

                if (!response.ok) {
                    throw new Error(`HTTP error! status: ${response.status}`);
                }

                const data = await response.json();
                
                if (data.success && data.order) {
                    const { status, queue_number } = data.order;
                    
                    // Update nomor antrian
                    if (queue_number && queue_number !== lastQueueNumber) {
                        queueNumber.textContent = queue_number;
                        lastQueueNumber = queue_number;
                    }
                    
                    // Update status tampilan
                    if (status !== lastStatus) {
                        if (status === 'completed') {
                            waitingIcon.classList.add('hidden');
                            completedIcon.classList.remove('hidden');
                            statusTitle.textContent = 'Pesanan Selesai!';
                            statusMessage.textContent = 'Pesanan Anda telah siap. Silakan ambil di kasir.';
                            backButton.classList.remove('hidden');
                            clearInterval(statusCheckInterval);
                        } else if (status === 'processing') {
                            waitingIcon.classList.remove('hidden');
                            completedIcon.classList.add('hidden');
                            statusTitle.textContent = 'Menunggu Pesanan';
                            statusMessage.textContent = 'Pesanan Anda sedang diproses...';
                            backButton.classList.add('hidden');
                        }
                        lastStatus = status;
                    }
                }
            } catch (error) {
                console.error('Error checking order status:', error);
            }
        }

        // Cek status setiap 2 detik
        const statusCheckInterval = setInterval(checkOrderStatus, 2000);
        
        // Cek status saat halaman dimuat
        checkOrderStatus();

        // Hentikan interval saat halaman ditutup
        window.addEventListener('beforeunload', function() {
            clearInterval(statusCheckInterval);
        });
    </script>
</body>
</html>