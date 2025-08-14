<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Landing page</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body class="flex flex-col min-h-screen bg-gray-50 text-gray-800">

  <!-- INI NAVBAR GES -->
  <nav class="bg-gradient-to-r from-yellow-400 to-orange-500 text-white shadow-lg" data-aos="fade-down" data-aos-duration="800">
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

  <!-- INI SECTION -->
  <section class="bg-gradient-to-br from-yellow-100 to-orange-50 py-16">
    <div class="container mx-auto px-4 flex flex-col md:flex-row items-center">
      <div class="md:w-1/2 text-center md:text-left" data-aos="fade-right" data-aos-duration="1000">
        <h1 class="text-4xl md:text-5xl font-extrabold text-orange-700 mb-4 transition-transform duration-500 hover:scale-105 hover:rotate-1">
          🚀 Belajar Pemrograman Jadi Lebih Mudah
        </h1>
        <p class="text-lg text-gray-700 leading-relaxed mb-6">
          SmartGo adalah platform edukasi interaktif yang membantu Anda memahami dunia pemrograman dari dasar hingga mahir.
          Nikmati pembelajaran yang menyenangkan dengan materi berkualitas, latihan soal, dan komunitas yang suportif.
        </p>
        <a href="materi.php" class="inline-block bg-gradient-to-r from-yellow-400 to-orange-500 text-white px-6 py-3 rounded-lg shadow-lg hover:shadow-2xl hover:scale-110 transition-all duration-500 ease-out">
          Mulai Belajar
        </a>
      </div>
      <div class="md:w-1/2 mt-8 md:mt-0 flex justify-center" data-aos="zoom-in" data-aos-duration="1000">
        <img src="img/logo.png" alt="Belajar" class="w-72 md:w-96 drop-shadow-lg hover:scale-110 hover:-rotate-3 transition-transform duration-500">
      </div>
    </div>
  </section>

  <!-- INI TESTIMONI  -->
  <section class="py-16 bg-white flex-1">
    <div class="container mx-auto px-4 text-center">
      <h2 class="text-3xl font-bold text-orange-700 mb-10" data-aos="fade-up" data-aos-duration="800">💬 Apa Kata Mereka?</h2>
      <div class="grid md:grid-cols-3 gap-8">

        <div class="bg-white border rounded-xl shadow-lg p-6 hover:shadow-2xl hover:scale-105 transition-transform duration-500" data-aos="flip-left" data-aos-delay="100">
          <img src="img/sajid.jpg" class="w-16 h-16 rounded-full object-cover object-center mx-auto mb-4" alt="Sajid">
          <p class="italic text-gray-700">"Materinya gampang dicerna, bikin ngerti konsep coding kilat."</p>
          <div class="flex justify-center mt-3 text-yellow-400">★★★★★</div>
          <h4 class="mt-2 font-semibold text-orange-700">Sajid</h4>
        </div>

        <div class="bg-white border rounded-xl shadow-lg p-6 hover:shadow-2xl hover:scale-105 transition-transform duration-500" data-aos="flip-left" data-aos-delay="200">
          <img src="img/bayu.jpg" class="w-16 h-16 rounded-full object-cover object-center mx-auto mb-4" alt="Bayu">
          <p class="italic text-gray-700">"Desainnya cakep, materinya gampang nyangkut, belajarnya pun fun banget."</p>
          <div class="flex justify-center mt-3 text-yellow-400">★★★★★</div>
          <h4 class="mt-2 font-semibold text-orange-700">Bayu</h4>
        </div>

        <div class="bg-white border rounded-xl shadow-lg p-6 hover:shadow-2xl hover:scale-105 transition-transform duration-500" data-aos="flip-left" data-aos-delay="300">
          <img src="img/handaru.jpg" class="w-16 h-16 rounded-full object-cover object-center mx-auto mb-4" alt="Handaru">
          <p class="italic text-gray-700">"Fiturnya gokil, bikin makin semangat belajar dan nyoba hal baru."</p>
          <div class="flex justify-center mt-3 text-yellow-400">★★★★★</div>
          <h4 class="mt-2 font-semibold text-orange-700">Handaru</h4>
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
