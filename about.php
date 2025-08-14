<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About us</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body class="flex flex-col min-h-screen bg-gray-50 text-gray-800">

  <!-- Navbar -->
  <nav class="bg-gradient-to-r from-yellow-400 to-orange-500 text-white shadow-lg" data-aos="fade-down">
    <div class="container mx-auto px-4 py-4 flex justify-between items-center">
      <a href="index.php" class="text-2xl font-bold tracking-wide hover:scale-110 transition-transform duration-500">SmartGo</a>

      <div class="hidden md:flex space-x-6 text-lg">
        <a href="index.php" class="hover:underline hover:opacity-80 transition">Home</a>
        <a href="about.php" class="hover:underline hover:opacity-80 transition">About</a>
        <a href="materi.php" class="hover:underline hover:opacity-80 transition">Materi</a>
        <a href="contact.php" class="hover:underline hover:opacity-80 transition">Contact</a>
      </div>
    </div>
  </nav>

  <!-- Hero Section -->
  <section class="bg-gradient-to-br from-yellow-100 to-orange-50 py-16">
    <div class="container mx-auto px-4 flex flex-col md:flex-row items-center">
      <div class="md:w-1/2 text-center md:text-left" data-aos="fade-right">
        <h1 class="text-4xl md:text-5xl font-extrabold text-orange-700 mb-4 hover:scale-105 transition-transform duration-500">Tentang SmartGo</h1>
        <p class="text-lg text-gray-700 leading-relaxed mb-6">
          SmartGo hadir buat bikin belajar programming nggak ribet gampang diikutin, interaktif, dan pastinya seru. Kita yakin semua orang bisa jago teknologi, tinggal kasih jalannya.
        </p>
      </div>
      <div class="md:w-1/2 mt-8 md:mt-0 flex justify-center" data-aos="zoom-in">
        <img src="img/logo go.png" alt="Logo" class="w-72 md:w-96 drop-shadow-lg hover:scale-110 hover:-rotate-3 transition-transform duration-500">
      </div>
    </div>
  </section>

  <!-- Misi & Keunggulan -->
  <section class="py-16 bg-white flex-1">
    <div class="container mx-auto px-4 text-center">
      <h2 class="text-3xl font-bold text-orange-700 mb-10" data-aos="fade-up">✨ Misi Kami & Keunggulan</h2>
      <div class="grid md:grid-cols-3 gap-8">
        <div class="bg-white border rounded-xl shadow-lg p-6 hover:shadow-2xl hover:scale-105 transition-transform duration-500" data-aos="flip-left" data-aos-delay="100">
          <div class="text-5xl mb-4">📚</div>
          <h3 class="font-semibold text-lg mb-2">Materi Lengkap</h3>
          <p class="text-gray-700">Belajar dari basic sampai expert, semuanya udah diatur step by step biar anti ribet.</p>
        </div>
        <div class="bg-white border rounded-xl shadow-lg p-6 hover:shadow-2xl hover:scale-105 transition-transform duration-500" data-aos="flip-left" data-aos-delay="200">
          <div class="text-5xl mb-4">💡</div>
          <h3 class="font-semibold text-lg mb-2">Metode Interaktif</h3>
          <p class="text-gray-700">Quiz seru, latihan asik, dan contoh nyata—belajar jadi nggak bikin pusing.</p>
        </div>
        <div class="bg-white border rounded-xl shadow-lg p-6 hover:shadow-2xl hover:scale-105 transition-transform duration-500" data-aos="flip-left" data-aos-delay="300">
          <div class="text-5xl mb-4">🌐</div>
          <h3 class="font-semibold text-lg mb-2">Akses Fleksibel</h3>
          <p class="text-gray-700">Belajar kapan saja dan di mana saja, cukup terhubung dengan koneksi internet saja.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-gradient-to-r from-yellow-400 to-orange-500 text-white py-4 text-center mt-auto">
    <p>&copy; 2025 SmartGo. Semua Hak Dilindungi.</p>
  </footer>

  <!-- AOS JS -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init({
      duration: 1000,
      once: true
    });
  </script>

</body>
</html>
