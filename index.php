<?php

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Warteg Bahagia - Masakan Rumahan Khas Tegal</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="bg-orange-50">
    <!-- Header -->
    <header class="bg-white shadow-md sticky top-0 z-50">
        <div class="container mx-auto px-4 py-4">
            <div class="flex justify-between items-center">
                <div class="flex items-center">
                    <div class="w-12 h-12 bg-orange-500 rounded-lg flex items-center justify-center mr-3">
                        <i class="fas fa-utensils text-white text-2xl"></i>
                    </div>
                    <h1 class="text-2xl font-bold gradient-text">Warteg Didi</h1>
                </div>
                
                <nav class="hidden md:flex space-x-8">
                    <a href="#home" class="text-gray-700 hover:text-orange-500 font-medium">Beranda</a>
                    <a href="#menu" class="text-gray-700 hover:text-orange-500 font-medium">Menu</a>
                    <a href="#about" class="text-gray-700 hover:text-orange-500 font-medium">Tentang</a>
                    <a href="#contact" class="text-gray-700 hover:text-orange-500 font-medium">Kontak</a>
                </nav>
                
                <button class="md:hidden text-gray-700">
                    <i class="fas fa-bars text-2xl"></i>
                </button>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section id="home" class="hero-pattern text-white py-20">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 mb-8 md:mb-0">
                    <h2 class="text-4xl md:text-6xl font-bold mb-4">Selamat Datang di Warteg Didi</h2>
                    <p class="text-xl mb-6">Nikmati kelezatan masakan rumahan khas Tegal dengan cita rasa autentik yang membuat Anda merasa seperti di rumah sendiri.</p>
                    <div class="flex space-x-4">
                        <a href="#menu" class="bg-white text-orange-500 px-6 py-3 rounded-lg font-semibold hover:bg-orange-50 transition duration-300">
                            Lihat Menu
                        </a>
                        <a href="#contact" class="border-2 border-white px-6 py-3 rounded-lg font-semibold hover:bg-white hover:text-orange-500 transition duration-300">
                            Pesan Sekarang
                        </a>
                    </div>
                </div>
                <div class="md:w-1/2">
                    <img src="assets/img/Gambar1.jpg" alt="Tampilan hidangan nasi padang dengan berbagai lauk pauk tradisional Indonesia di atas meja kayu" class="rounded-2xl shadow-2xl w-full">
                </div>
            </div>
        </div>
    </section>

    <!-- Features -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="text-center">
                    <div class="w-16 h-16 bg-orange-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-leaf text-orange-500 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Bahan Segar</h3>
                    <p class="text-gray-600">Menggunakan bahan-bahan segar pilihan setiap hari untuk memastikan cita rasa terbaik</p>
                </div>
                
                <div class="text-center">
                    <div class="w-16 h-16 bg-orange-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-clock text-orange-500 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Buka Setiap Hari</h3>
                    <p class="text-gray-600">Melayani dari pagi hingga malam untuk memenuhi kebutuhan makan Anda</p>
                </div>
                
                <div class="text-center">
                    <div class="w-16 h-16 bg-orange-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-truck text-orange-500 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Delivery Order</h3>
                    <p class="text-gray-600">Pesanan antar sampai ke rumah dengan kemasan yang rapi dan higienis</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Menu Section -->
    <section id="menu" class="py-20 bg-orange-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-800 mb-4">Menu Andalan Kami</h2>
                <p class="text-gray-600 text-xl">Pilihan hidangan lezat yang selalu siap memanjakan lidah Anda</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Menu Item 1 -->
                <div class="bg-white rounded-2xl shadow-md overflow-hidden food-card transition duration-300">
                    <img src="assets/img/ayam geprek.jpeg" alt="Nasi rames komplit dengan sayur lodeh, tempe orek, telur balado, dan kerupuk di piring kayu" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">Ayam Geprek</h3>
                        <p class="text-gray-600 mb-4">Nasi putih,ayam goreng dan sambal,timun,daun kemangi,dan tomat</p>
                        <div class="flex justify-between items-center">
                            <span class="text-2xl font-bold text-orange-500">Rp 20.000</span>
                            <button class="bg-orange-500 text-white px-4 py-2 rounded-lg hover:bg-orange-600 transition duration-300">
                                Pesan
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Menu Item 2 -->
                <div class="bg-white rounded-2xl shadow-md overflow-hidden food-card transition duration-300">
                    <img src="assets/img/ayam goreng laos.jpeg" alt="Soto ayam kuah kuning dengan suwiran ayam, tauge, dan seledri dalam mangkok keramik" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">ayam goreng</h3>
                        <p class="text-gray-600 mb-4">ayam goreng</p>
                        <div class="flex justify-between items-center">
                            <span class="text-2xl font-bold text-orange-500">Rp 20.000</span>
                            <button class="bg-orange-500 text-white px-4 py-2 rounded-lg hover:bg-orange-600 transition duration-300">
                                Pesan
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Menu Item 3 -->
                <div class="bg-white rounded-2xl shadow-md overflow-hidden food-card transition duration-300">
                    <img src="assets/img/sego babat1.jpeg" alt="Pecel lele dengan sambal terasi, lalapan segar, dan nasi hangat di atas daun pisang" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">sego babat</h3>
                        <p class="text-gray-600 mb-4">ikan goreng</p>
                        <div class="flex justify-between items-center">
                            <span class="text-2xl font-bold text-orange-500">Rp 15.000</span>
                            <button class="bg-orange-500 text-white px-4 py-2 rounded-lg hover:bg-orange-600 transition duration-300">
                                Pesan
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Menu Item 4 -->
                <div class="bg-white rounded-2xl shadow-md overflow-hidden food-card transition duration-300">
                    <img src="assets/img/es jeruk.jpg" alt="Gado-gado dengan sayuran segar, telur rebus, dan bumbu kacang kental dalam piring besar" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">es jeruk</h3>
                        <p class="text-gray-600 mb-4">jeruk asli</p>
                        <div class="flex justify-between items-center">
                            <span class="text-2xl font-bold text-orange-500">Rp 5.000</span>
                            <button class="bg-orange-500 text-white px-4 py-2 rounded-lg hover:bg-orange-600 transition duration-300">
                                Pesan
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Menu Item 5 -->
                <div class="bg-white rounded-2xl shadow-md overflow-hidden food-card transition duration-300">
                    <img src="assets/img/jeruk panas.jpeg" alt="Ayam goreng kuning dengan bumbu rempah khas dan sambal matah di piring anyaman bambu" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">es jeruk hangat</h3>
                        <p class="text-gray-600 mb-4">jeruk asli dan air hangat</p>
                        <div class="flex justify-between items-center">
                            <span class="text-2xl font-bold text-orange-500">Rp 5.000</span>
                            <button class="bg-orange-500 text-white px-4 py-2 rounded-lg hover:bg-orange-600 transition duration-300">
                                Pesan
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Menu Item 6 -->
                <div class="bg-white rounded-2xl shadow-md overflow-hidden food-card transition duration-300">
                    <img src="assets/img/kopi.jpeg" alt="Es teh manis dan es jeruk segar dengan potongan lemon dalam gelas tinggi dan sedotan" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">kopi</h3>
                        <p class="text-gray-600 mb-4"> kopi</p>
                        <div class="flex justify-between items-center">
                            <span class="text-2xl font-bold text-orange-500">Rp 5.000</span>
                            <button class="bg-orange-500 text-white px-4 py-2 rounded-lg hover:bg-orange-600 transition duration-300">
                                Pesan
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 mb-8 md:mb-0">
                    <img src="assets/img/makanan.jpeg" alt="Interior warteg tradisional dengan meja kayu, kursi plastik, dan display makanan dalam wadah kaca" class="rounded-2xl shadow-xl w-full">
                </div>
                <div class="md:w-1/2 md:pl-12">
                    <h2 class="text-4xl font-bold text-gray-800 mb-6">Tentang Warteg Bahagia</h2>
                    <p class="text-gray-600 mb-4 text-lg">
                        Warteg Pak Didi adalah salah salah satu jenis rumah makanan sederhana yang sangat populer di kalangan masyrakat sekitar.Warteg ini berlokasi di Malang,Candi Panggung.dengan konsep hidangan khas sederhana.Warteg pak Didi menyajian berbagai macam lauk pauk dengan harga terjangkau untuk semua kalangan
                    </p>
                    <p class="text-gray-600 mb-6 text-lg">
                        Setiap hidangan dibuat dengan cinta dan perhatian terhadap detail, menggunakan bahan-bahan segar pilihan 
                        untuk memastikan cita rasa yang konsisten dan memuaskan.
                    </p>
                    <div class="grid grid-cols-2 gap-4">
                        <div class="flex items-center">
                            <i class="fas fa-check-circle text-orange-500 mr-2"></i>
                            <span>Bersih dan Higienis</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-check-circle text-orange-500 mr-2"></i>
                            <span>Harga Terjangkau</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-check-circle text-orange-500 mr-2"></i>
                            <span>Pelayanan Ramah</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-check-circle text-orange-500 mr-2"></i>
                            <span>Rasa Autentik</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="py-20 bg-orange-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-800 mb-4">Apa Kata Pelanggan</h2>
                <p class="text-gray-600 text-xl">Testimoni dari mereka yang telah merasakan kelezatan masakan kami</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-2xl shadow-md border-gradient">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-orange-100 rounded-full flex items-center justify-center mr-4">
                            <i class="fas fa-user text-orange-500"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold">Budi Santoso</h4>
                            <p class="text-gray-500 text-sm">Pelanggan Setia</p>
                        </div>
                    </div>
                    <p class="text-gray-600">"Rasa nasinya seperti masakan ibu sendiri. Selalu segar dan lezat!"</p>
                    <div class="flex mt-4">
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-2xl shadow-md border-gradient">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-orange-100 rounded-full flex items-center justify-center mr-4">
                            <i class="fas fa-user text-orange-500"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold">Siti Rahayu</h4>
                            <p class="text-gray-500 text-sm">Mahasiswa</p>
                        </div>
                    </div>
                    <p class="text-gray-600">"Tempat favorit untuk makan siang. Murah, enak, dan cepat!"</p>
                    <div class="flex mt-4">
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-2xl shadow-md border-gradient">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-orange-100 rounded-full flex items-center justify-center mr-4">
                            <i class="fas fa-user text-orange-500"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold">Ahmad Rizki</h4>
                            <p class="text-gray-500 text-sm">Mahasiswa</p>
                        </div>
                    </div>
                    <p class="text-gray-600">"Portionnya besar tapi harganya ramah dikantong. Recommended banget!"</p>
                    <div class="flex mt-4">
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-800 mb-4">Hubungi Kami</h2>
                <p class="text-gray-600 text-xl">Silakan datang langsung atau hubungi kami untuk pemesanan</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                <div>
                    <h3 class="text-2xl font-semibold mb-6">Informasi Kontak</h3>
                    
                    <div class="space-y-4">
                        <div class="flex items-center">
                            <div class="w-12 h-12 bg-orange-100 rounded-lg flex items-center justify-center mr-4">
                                <i class="fas fa-map-marker-alt text-orange-500"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold">Alamat</h4>
                                <p class="text-gray-600">Jl.Candi Panggung No. 12, Kota Malang, Jawa Timur</p>
                            </div>
                        </div>

                        <div class="flex items-center">
                            <div class="w-12 h-12 bg-orange-100 rounded-lg flex items-center justify-center mr-4">
                                <i class="fas fa-phone text-orange-500"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold">Telepon</h4>
                                <p class="text-gray-600">0812-3099-3234</p>
                            </div>
                        </div>

                        <div class="flex items-center">
                            <div class="w-12 h-12 bg-orange-100 rounded-lg flex items-center justify-center mr-4">
                                <i class="fas fa-clock text-orange-500"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold">Jam Buka</h4>
                                <p class="text-gray-600">Setiap Hari: 08.00 - 22.00 WIB</p>
                            </div>
                        </div>

                        <div class="flex items-center">
                            <div class="w-12 h-12 bg-orange-100 rounded-lg flex items-center justify-center mr-4">
                                <i class="fab fa-whatsapp text-orange-500"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold">WhatsApp</h4>
                                <p class="text-gray-600">081339881875</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <h3 class="text-2xl font-semibold mb-6">Pesan Sekarang</h3>
                    <form class="space-y-4">
                        <div>
                            <label class="block text-gray-700 mb-2">Nama Lengkap</label>
                            <input type="text" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent" placeholder="Masukkan nama Anda">
                        </div>
                        
                        <div>
                            <label class="block text-gray-700 mb-2">No. Telepon</label>
                            <input type="tel" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent" placeholder="Masukkan nomor telepon">
                        </div>
                        
                        <div>
                            <label class="block text-gray-700 mb-2">Pesanan</label>
                            <textarea class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent" rows="4" placeholder="Tulis pesanan Anda di sini..."></textarea>
                        </div>
                        
                        <button type="submit" class="w-full bg-orange-500 text-white py-3 px-6 rounded-lg font-semibold hover:bg-orange-600 transition duration-300">
                            Kirim Pesanan
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-12">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-xl font-semibold mb-4">Warteg Didi</h3>
                    <p class="text-gray-400">Menyajikan masakan rumahan khas Tegal dengan cita rasa autentik sejak 2010.</p>
                </div>
                
                <div>
                    <h4 class="text-lg font-semibold mb-4">Tautan Cepat</h4>
                    <ul class="space-y-2">
                        <li><a href="#home" class="text-gray-400 hover:text-white">Beranda</a></li>
                        <li><a href="#menu" class="text-gray-400 hover:text-white">Menu</a></li>
                        <li><a href="#about" class="text-gray-400 hover:text-white">Tentang</a></li>
                        <li><a href="#contact" class="text-gray-400 hover:text-white">Kontak</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="text-lg font-semibold mb-4">Jam Operasional</h4>
                    <p class="text-gray-400">Setiap Hari<br>08.00 - 22.00 WIB</p>
                </div>
                
                <div>
                    <h4 class="text-lg font-semibold mb-4">Ikuti Kami</h4>
                    <div class="flex space-x-4">
                        <a href="#" class="w-10 h-10 bg-gray-700 rounded-full flex items-center justify-center hover:bg-orange-500 transition duration-300">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-gray-700 rounded-full flex items-center justify-center hover:bg-orange-500 transition duration-300">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="https://wa.me/6281339881875" target="_blank" rel="noopener" class="w-10 h-10 bg-gray-700 rounded-full flex items-center justify-center hover:bg-orange-500 transition duration-300">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="border-t border-gray-700 mt-8 pt-8 text-center">
                <p class="text-gray-400">© 2025 Warteg Didi. Semua hak cipta dilindungi.</p>
            </div>
        </div>
    </footer>
    <script src="js/script.js"></script>
</body>
</html>