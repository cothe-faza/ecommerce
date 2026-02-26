<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Commerce Profesional - Toko Modern</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-50">

    <!-- Navbar -->
    <nav class="bg-white shadow-lg sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <!-- Logo -->
                <div class="flex-shrink-0">
                    <h1 class="text-2xl font-bold text-indigo-600">ShopEase</h1>
                </div>

                <!-- Search Bar -->
                <div class="hidden md:flex flex-1 max-w-2xl mx-8">
                    <div class="relative w-full">
                        <input type="text" placeholder="Cari produk impian Anda..." 
                               class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent">
                        <button class="absolute right-2 top-2 text-gray-400 hover:text-indigo-600">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>

                <!-- Navigation Icons -->
                <div class="flex items-center space-x-6">
                    <button class="text-gray-600 hover:text-indigo-600 relative">
                        <i class="far fa-heart text-xl"></i>
                        <span class="absolute -top-2 -right-2 bg-red-500 text-white text-xs rounded-full h-4 w-4 flex items-center justify-center">3</span>
                    </button>
                    <button class="text-gray-600 hover:text-indigo-600 relative">
                        <i class="fas fa-shopping-cart text-xl"></i>
                        <span class="absolute -top-2 -right-2 bg-indigo-600 text-white text-xs rounded-full h-4 w-4 flex items-center justify-center">5</span>
                    </button>
                    <button class="text-gray-600 hover:text-indigo-600">
                        <i class="far fa-user-circle text-xl"></i>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Menu -->
    <div class="bg-white border-b">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex space-x-8 overflow-x-auto py-4">
                <a href="#" class="text-gray-600 hover:text-indigo-600 whitespace-nowrap font-medium">Elektronik</a>
                <a href="#" class="text-gray-600 hover:text-indigo-600 whitespace-nowrap font-medium">Fashion Pria</a>
                <a href="#" class="text-gray-600 hover:text-indigo-600 whitespace-nowrap font-medium">Fashion Wanita</a>
                <a href="#" class="text-gray-600 hover:text-indigo-600 whitespace-nowrap font-medium">Sepatu</a>
                <a href="#" class="text-gray-600 hover:text-indigo-600 whitespace-nowrap font-medium">Aksesoris</a>
                <a href="#" class="text-gray-600 hover:text-indigo-600 whitespace-nowrap font-medium">Kesehatan</a>
                <a href="#" class="text-gray-600 hover:text-indigo-600 whitespace-nowrap font-medium">Kecantikan</a>
                <a href="#" class="text-gray-600 hover:text-indigo-600 whitespace-nowrap font-medium">Rumah Tangga</a>
            </div>
        </div>
    </div>

    <!-- Hero Banner -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="bg-gradient-to-r from-indigo-500 to-purple-600 rounded-2xl overflow-hidden">
            <div class="relative px-8 py-12 md:py-16">
                <div class="md:w-1/2">
                    <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Summer Sale 2024</h2>
                    <p class="text-indigo-100 mb-6">Dapatkan diskon hingga 70% untuk produk pilihan</p>
                    <button class="bg-white text-indigo-600 px-6 py-3 rounded-lg font-semibold hover:bg-indigo-50 transition duration-300">
                        Belanja Sekarang
                    </button>
                </div>
                <div class="absolute right-0 top-0 bottom-0 hidden md:block">
                    <img src="https://placehold.co/400x300/indigo/white?text=SALE" alt="Sale" class="h-full object-cover">
                </div>
            </div>
        </div>
    </div>

    <!-- Flash Sale Section -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-bold text-gray-800">Flash Sale</h2>
            <div class="flex items-center space-x-4">
                <div class="flex space-x-2">
                    <div class="bg-red-500 text-white px-3 py-1 rounded-lg font-mono">08</div>
                    <div class="bg-red-500 text-white px-3 py-1 rounded-lg font-mono">12</div>
                    <div class="bg-red-500 text-white px-3 py-1 rounded-lg font-mono">45</div>
                </div>
                <a href="#" class="text-indigo-600 hover:text-indigo-700">Lihat Semua →</a>
            </div>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-5 gap-4">
            <!-- Product Card 1 -->
            <div class="bg-white rounded-lg shadow-md hover:shadow-xl transition duration-300">
                <div class="relative">
                    <img src="https://placehold.co/300x300/indigo/white?text=Produk" alt="Product" class="w-full h-48 object-cover rounded-t-lg">
                    <span class="absolute top-2 left-2 bg-red-500 text-white text-xs px-2 py-1 rounded">-40%</span>
                </div>
                <div class="p-4">
                    <h3 class="font-semibold text-gray-800 mb-2">Smartphone Pro Max</h3>
                    <p class="text-gray-500 text-sm mb-2">Rp 5.999.000</p>
                    <div class="flex items-center justify-between">
                        <span class="text-red-500 font-bold">Rp 3.599.000</span>
                        <button class="text-indigo-600 hover:text-indigo-700">
                            <i class="fas fa-shopping-cart"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Product Card 2 -->
            <div class="bg-white rounded-lg shadow-md hover:shadow-xl transition duration-300">
                <div class="relative">
                    <img src="https://placehold.co/300x300/purple/white?text=Produk" alt="Product" class="w-full h-48 object-cover rounded-t-lg">
                    <span class="absolute top-2 left-2 bg-red-500 text-white text-xs px-2 py-1 rounded">-25%</span>
                </div>
                <div class="p-4">
                    <h3 class="font-semibold text-gray-800 mb-2">Sepatu Running</h3>
                    <p class="text-gray-500 text-sm mb-2">Rp 899.000</p>
                    <div class="flex items-center justify-between">
                        <span class="text-red-500 font-bold">Rp 674.000</span>
                        <button class="text-indigo-600 hover:text-indigo-700">
                            <i class="fas fa-shopping-cart"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Product Card 3 -->
            <div class="bg-white rounded-lg shadow-md hover:shadow-xl transition duration-300">
                <div class="relative">
                    <img src="https://placehold.co/300x300/blue/white?text=Produk" alt="Product" class="w-full h-48 object-cover rounded-t-lg">
                    <span class="absolute top-2 left-2 bg-red-500 text-white text-xs px-2 py-1 rounded">-30%</span>
                </div>
                <div class="p-4">
                    <h3 class="font-semibold text-gray-800 mb-2">Kemeja Pria</h3>
                    <p class="text-gray-500 text-sm mb-2">Rp 350.000</p>
                    <div class="flex items-center justify-between">
                        <span class="text-red-500 font-bold">Rp 245.000</span>
                        <button class="text-indigo-600 hover:text-indigo-700">
                            <i class="fas fa-shopping-cart"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Product Card 4 -->
            <div class="bg-white rounded-lg shadow-md hover:shadow-xl transition duration-300">
                <div class="relative">
                    <img src="https://placehold.co/300x300/green/white?text=Produk" alt="Product" class="w-full h-48 object-cover rounded-t-lg">
                    <span class="absolute top-2 left-2 bg-red-500 text-white text-xs px-2 py-1 rounded">-15%</span>
                </div>
                <div class="p-4">
                    <h3 class="font-semibold text-gray-800 mb-2">Tas Ransel</h3>
                    <p class="text-gray-500 text-sm mb-2">Rp 450.000</p>
                    <div class="flex items-center justify-between">
                        <span class="text-red-500 font-bold">Rp 382.000</span>
                        <button class="text-indigo-600 hover:text-indigo-700">
                            <i class="fas fa-shopping-cart"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Product Card 5 -->
            <div class="bg-white rounded-lg shadow-md hover:shadow-xl transition duration-300">
                <div class="relative">
                    <img src="https://placehold.co/300x300/yellow/white?text=Produk" alt="Product" class="w-full h-48 object-cover rounded-t-lg">
                    <span class="absolute top-2 left-2 bg-red-500 text-white text-xs px-2 py-1 rounded">-20%</span>
                </div>
                <div class="p-4">
                    <h3 class="font-semibold text-gray-800 mb-2">Jam Tangan</h3>
                    <p class="text-gray-500 text-sm mb-2">Rp 1.299.000</p>
                    <div class="flex items-center justify-between">
                        <span class="text-red-500 font-bold">Rp 1.039.000</span>
                        <button class="text-indigo-600 hover:text-indigo-700">
                            <i class="fas fa-shopping-cart"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Categories Banner -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-gradient-to-r from-orange-400 to-red-400 rounded-lg p-6 text-white">
                <h3 class="text-xl font-bold mb-2">Elektronik Terbaru</h3>
                <p class="mb-4">Dapatkan gadget terbaru dengan harga spesial</p>
                <button class="bg-white text-orange-500 px-4 py-2 rounded-lg font-semibold hover:bg-orange-50">Shop Now</button>
            </div>
            <div class="bg-gradient-to-r from-green-400 to-teal-400 rounded-lg p-6 text-white">
                <h3 class="text-xl font-bold mb-2">Fashion Pria</h3>
                <p class="mb-4">Koleksi fashion pria terkini</p>
                <button class="bg-white text-green-500 px-4 py-2 rounded-lg font-semibold hover:bg-green-50">Shop Now</button>
            </div>
            <div class="bg-gradient-to-r from-blue-400 to-indigo-400 rounded-lg p-6 text-white">
                <h3 class="text-xl font-bold mb-2">Beauty Sale</h3>
                <p class="mb-4">Produk kecantikan original</p>
                <button class="bg-white text-blue-500 px-4 py-2 rounded-lg font-semibold hover:bg-blue-50">Shop Now</button>
            </div>
        </div>
    </div>

    <!-- Recommended Products -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <h2 class="text-2xl font-bold text-gray-800 mb-6">Rekomendasi Untuk Anda</h2>
        
        <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-5 gap-4">
            <!-- Product Card 6 -->
            <div class="bg-white rounded-lg shadow-md hover:shadow-xl transition duration-300">
                <img src="https://placehold.co/300x300/indigo/white?text=Produk" alt="Product" class="w-full h-40 object-cover rounded-t-lg">
                <div class="p-3">
                    <h3 class="font-semibold text-sm text-gray-800 mb-1">Headphone Wireless</h3>
                    <p class="text-indigo-600 font-bold">Rp 899.000</p>
                    <div class="flex items-center mt-2">
                        <i class="fas fa-star text-yellow-400 text-xs"></i>
                        <i class="fas fa-star text-yellow-400 text-xs"></i>
                        <i class="fas fa-star text-yellow-400 text-xs"></i>
                        <i class="fas fa-star text-yellow-400 text-xs"></i>
                        <i class="fas fa-star-half-alt text-yellow-400 text-xs"></i>
                        <span class="text-gray-400 text-xs ml-1">(45)</span>
                    </div>
                </div>
            </div>

            <!-- Product Card 7 -->
            <div class="bg-white rounded-lg shadow-md hover:shadow-xl transition duration-300">
                <img src="https://placehold.co/300x300/purple/white?text=Produk" alt="Product" class="w-full h-40 object-cover rounded-t-lg">
                <div class="p-3">
                    <h3 class="font-semibold text-sm text-gray-800 mb-1">Sweater Wanita</h3>
                    <p class="text-indigo-600 font-bold">Rp 299.000</p>
                    <div class="flex items-center mt-2">
                        <i class="fas fa-star text-yellow-400 text-xs"></i>
                        <i class="fas fa-star text-yellow-400 text-xs"></i>
                        <i class="fas fa-star text-yellow-400 text-xs"></i>
                        <i class="fas fa-star text-yellow-400 text-xs"></i>
                        <i class="fas fa-star text-yellow-400 text-xs"></i>
                        <span class="text-gray-400 text-xs ml-1">(128)</span>
                    </div>
                </div>
            </div>

            <!-- Product Card 8 -->
            <div class="bg-white rounded-lg shadow-md hover:shadow-xl transition duration-300">
                <img src="https://placehold.co/300x300/blue/white?text=Produk" alt="Product" class="w-full h-40 object-cover rounded-t-lg">
                <div class="p-3">
                    <h3 class="font-semibold text-sm text-gray-800 mb-1">Smart Watch</h3>
                    <p class="text-indigo-600 font-bold">Rp 1.499.000</p>
                    <div class="flex items-center mt-2">
                        <i class="fas fa-star text-yellow-400 text-xs"></i>
                        <i class="fas fa-star text-yellow-400 text-xs"></i>
                        <i class="fas fa-star text-yellow-400 text-xs"></i>
                        <i class="fas fa-star text-yellow-400 text-xs"></i>
                        <i class="fas fa-star text-yellow-400 text-xs"></i>
                        <span class="text-gray-400 text-xs ml-1">(89)</span>
                    </div>
                </div>
            </div>

            <!-- Product Card 9 -->
            <div class="bg-white rounded-lg shadow-md hover:shadow-xl transition duration-300">
                <img src="https://placehold.co/300x300/green/white?text=Produk" alt="Product" class="w-full h-40 object-cover rounded-t-lg">
                <div class="p-3">
                    <h3 class="font-semibold text-sm text-gray-800 mb-1">Parfum Pria</h3>
                    <p class="text-indigo-600 font-bold">Rp 549.000</p>
                    <div class="flex items-center mt-2">
                        <i class="fas fa-star text-yellow-400 text-xs"></i>
                        <i class="fas fa-star text-yellow-400 text-xs"></i>
                        <i class="fas fa-star text-yellow-400 text-xs"></i>
                        <i class="fas fa-star text-yellow-400 text-xs"></i>
                        <i class="fas fa-star-half-alt text-yellow-400 text-xs"></i>
                        <span class="text-gray-400 text-xs ml-1">(67)</span>
                    </div>
                </div>
            </div>

            <!-- Product Card 10 -->
            <div class="bg-white rounded-lg shadow-md hover:shadow-xl transition duration-300">
                <img src="https://placehold.co/300x300/yellow/white?text=Produk" alt="Product" class="w-full h-40 object-cover rounded-t-lg">
                <div class="p-3">
                    <h3 class="font-semibold text-sm text-gray-800 mb-1">Lampu LED</h3>
                    <p class="text-indigo-600 font-bold">Rp 159.000</p>
                    <div class="flex items-center mt-2">
                        <i class="fas fa-star text-yellow-400 text-xs"></i>
                        <i class="fas fa-star text-yellow-400 text-xs"></i>
                        <i class="fas fa-star text-yellow-400 text-xs"></i>
                        <i class="fas fa-star text-yellow-400 text-xs"></i>
                        <i class="far fa-star text-yellow-400 text-xs"></i>
                        <span class="text-gray-400 text-xs ml-1">(34)</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white mt-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-xl font-bold mb-4">ShopEase</h3>
                    <p class="text-gray-400">Belanja mudah, aman, dan nyaman</p>
                    <div class="flex space-x-4 mt-4">
                        <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Informasi</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#" class="hover:text-white">Tentang Kami</a></li>
                        <li><a href="#" class="hover:text-white">Cara Berbelanja</a></li>
                        <li><a href="#" class="hover:text-white">Kebijakan Privasi</a></li>
                        <li><a href="#" class="hover:text-white">Syarat & Ketentuan</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Layanan</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#" class="hover:text-white">Bantuan</a></li>
                        <li><a href="#" class="hover:text-white">Pengembalian Barang</a></li>
                        <li><a href="#" class="hover:text-white">Cek Ongkir</a></li>
                        <li><a href="#" class="hover:text-white">Lacak Pesanan</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Hubungi Kami</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><i class="fas fa-phone mr-2"></i> 1500-123</li>
                        <li><i class="fas fa-envelope mr-2"></i> cs@shopease.com</li>
                        <li><i class="fas fa-map-marker-alt mr-2"></i> Jakarta, Indonesia</li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-gray-700 mt-8 pt-8 text-center text-gray-400">
                <p>&copy; 2024 ShopEase. All rights reserved.</p>
            </div>
        </div>
    </footer>

</body>
</html>
