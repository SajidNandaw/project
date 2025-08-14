<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body class="flex flex-col min-h-screen bg-gray-50 text-gray-800">

  <!-- INI NAVBAR GES -->
  <nav class="bg-gradient-to-r from-yellow-400 to-orange-500 text-white shadow-md" data-aos="fade-down" data-aos-duration="800">
    <div class="container mx-auto px-4 py-4 flex justify-between items-center">
      <a href="index.php" class="text-2xl font-bold tracking-wide hover:scale-110 transition-transform duration-500">SmartGo</a>
      <div class="hidden md:flex space-x-6 text-lg">
        <a href="index.php" class="hover:underline">Home</a>
        <a href="about.php" class="hover:underline">About</a>
        <a href="materi.php" class="hover:underline">Materi</a>
        <a href="contact.php" class="hover:underline">Contact</a>
      </div>
    </div>
  </nav>

  <!-- INI MAIN GES -->
  <main class="flex-1 py-16 bg-gradient-to-b from-yellow-50 to-orange-50">
    <div class="container mx-auto px-4 text-center">
      <h2 class="text-3xl font-bold text-orange-700 mb-6" data-aos="fade-up" data-aos-duration="800">📞 Kontak Kami</h2>
      <p class="text-gray-700 mb-8 max-w-2xl mx-auto text-lg italic" data-aos="fade-up" data-aos-delay="150" data-aos-duration="800">
        Punya pertanyaan, saran, atau ingin bekerja sama?  
        Hubungi kami melalui form di bawah ini atau gunakan informasi kontak yang tersedia.
      </p>

      <!-- INI CONTACT INFO GES -->
      <div class="grid md:grid-cols-3 gap-6 mb-12">
        <div class="bg-white p-6 rounded-xl shadow-lg hover:shadow-2xl hover:-translate-y-2 transition-transform duration-500" 
             data-aos="zoom-in-up" data-aos-delay="100">
          <div class="text-3xl mb-2 animate-bounce">📧</div>
          <h3 class="font-semibold text-lg mb-2">Email</h3>
          <p class="text-gray-600">smartgo@gmail.com</p>
        </div>
        <div class="bg-white p-6 rounded-xl shadow-lg hover:shadow-2xl hover:-translate-y-2 transition-transform duration-500" 
             data-aos="zoom-in-up" data-aos-delay="200">
          <div class="text-3xl mb-2 animate-bounce">📱</div>
          <h3 class="font-semibold text-lg mb-2">Telepon</h3>
          <p class="text-gray-600">+62 812 3456 7890</p>
        </div>
        <div class="bg-white p-6 rounded-xl shadow-lg hover:shadow-2xl hover:-translate-y-2 transition-transform duration-500" 
             data-aos="zoom-in-up" data-aos-delay="300">
          <div class="text-3xl mb-2 animate-bounce">📍</div>
          <h3 class="font-semibold text-lg mb-2">Alamat</h3>
          <p class="text-gray-600">Jl. Belajar No. 123, Jakarta</p>
        </div>
      </div>

      <!-- INI BAGIAN FORM GES -->
      <form action="simpan_contact.php" method="POST" 
            class="max-w-md mx-auto space-y-4 bg-white p-6 rounded-xl shadow-lg hover:shadow-2xl transition-transform hover:-translate-y-2 duration-500" 
            data-aos="fade-up" data-aos-delay="400">
        <input type="text" name="nama" placeholder="Nama" class="w-full border p-2 rounded focus:outline-none focus:ring-2 focus:ring-orange-400" required>
        <input type="email" name="email" placeholder="Email" class="w-full border p-2 rounded focus:outline-none focus:ring-2 focus:ring-orange-400" required>
        <textarea name="pesan" placeholder="Pesan" class="w-full border p-2 rounded focus:outline-none focus:ring-2 focus:ring-orange-400" rows="4" required></textarea>
        <button type="submit" class="w-full bg-gradient-to-r from-yellow-400 to-orange-500 text-white px-4 py-2 rounded hover:opacity-90 transition">Kirim</button>
      </form>
    </div>
  </main>

  <!-- FOOTER -->
  <footer class="bg-gradient-to-r from-yellow-400 to-orange-500 text-white py-4 text-center mt-auto">
    <p>&copy; 2025 SmartGo. Semua Hak Dilindungi.</p>
  </footer>

  <!-- AOS SCRIPT -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init({ 
      duration: 1000, 
      once: true,
      offset: 100 
    });
  </script>

</body>
</html>
