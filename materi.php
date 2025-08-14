<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Materi</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <style>
    .ratio-16x9 { position: relative; width: 100%; padding-bottom: 56.25%; }
    .ratio-16x9 > iframe { position: absolute; inset: 0; width: 100%; height: 100%; }
  </style>
</head>
<body class="flex flex-col min-h-screen bg-gray-50 text-gray-800">

  <!-- NAVBAR -->
  <nav class="bg-gradient-to-r from-yellow-400 to-orange-500 text-white shadow-lg" data-aos="fade-down">
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

  <!-- MAIN -->
  <main class="flex-1 py-16 bg-gradient-to-b from-yellow-50 to-orange-50">
    <div class="container mx-auto px-4">

      <h2 id="materi" class="text-3xl font-bold text-center text-orange-700 mb-10" data-aos="fade-up">Materi Pembelajaran</h2>

      <div class="grid md:grid-cols-3 gap-8">

        <!-- HTML -->
        <div class="bg-white border rounded-xl shadow-lg p-6 hover:shadow-2xl hover:scale-105 transition-transform duration-500" data-aos="flip-left" data-aos-delay="100">
          <div class="mb-3">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 452 520" class="w-14 h-14">
              <path fill="#E34F26" d="M41 460L0 0h451l-41 460-185 52"/>
              <path fill="#EF652A" d="M226 472l149-41 35-394H226"/>
              <path fill="#EBEBEB" d="M226 208H151l-5-57h80V97H85l1 14 13 146h127v-49zm0 130l-70-19-4-45h-53l7 89 120 33V338z"/>
              <path fill="#FFF" d="M225 208v49h71l-7 81-64 17v50l120-33 1-9 14-161 1-14H225zm0-111v54h135l4-54H225z"/>
            </svg>
          </div>
          <h3 class="font-semibold text-xl mb-2">HTML</h3>
          <p class="text-gray-700">Mulai dari struktur web, elemen HTML, sampai trik bikin konten yang rapi dan gampang dibaca.</p>
          <a href="https://youtu.be/71a2zeC71gk" target="_blank" class="mt-3 inline-block text-orange-600 underline hover:text-orange-800">
            Lihat Tutorial YouTube
          </a>
        </div>

        <!-- CSS -->
        <div class="bg-white border rounded-xl shadow-lg p-6 hover:shadow-2xl hover:scale-105 transition-transform duration-500" data-aos="flip-left" data-aos-delay="200">
          <div class="mb-3">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 452 520" class="w-14 h-14">
              <path fill="#264DE4" d="M41 460L0 0h451l-41 460-185 52"/>
              <path fill="#2965F1" d="M226 472l149-41 35-394H226"/>
              <path fill="#EBEBEB" d="M226 208H151l-5-57h80V97H85l1 14 13 146h127v-49zm0 130l-70-19-4-45h-53l7 89 120 33V338z"/>
              <path fill="#FFF" d="M225 208v49h71l-7 81-64 17v50l120-33 1-9 14-161 1-14H225zm0-111v54h135l4-54H225z"/>
            </svg>
          </div>
          <h3 class="font-semibold text-xl mb-2">CSS</h3>
          <p class="text-gray-700">Kasih sentuhan gaya ke web: mainin warna, atur layout, dan tambahin efek biar makin keren.</p>
          <a href="https://youtu.be/71a2zeC71gk" target="_blank" class="mt-3 inline-block text-orange-600 underline hover:text-orange-800">
            Lihat Tutorial YouTube
          </a>
        </div>

        <!-- JS -->
        <div class="bg-white border rounded-xl shadow-lg p-6 hover:shadow-2xl hover:scale-105 transition-transform duration-500" data-aos="flip-left" data-aos-delay="300">
          <div class="mb-3">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 630 630" class="w-14 h-14">
              <rect width="630" height="630" fill="#F7DF1E"/>
              <path d="M423 492c13 21 29 36 58 36 24 0 39-12 39-29 0-20-16-27-42-39l-14-6c-40-17-66-38-66-82 0-41 31-72 80-72 35 0 60 12 78 43l-42 27c-9-17-18-23-36-23-16 0-26 10-26 23 0 16 10 23 34 33l14 6c48 21 74 42 74 89 0 51-40 79-94 79-53 0-87-25-104-57l43-25zm-195 5c8 14 15 26 33 26 17 0 28-7 28-33V289h52v204c0 54-31 78-76 78-41 0-65-21-77-46l40-28z"/>
            </svg>
          </div>
          <h3 class="font-semibold text-xl mb-2">JavaScript</h3>
          <p class="text-gray-700">Upgrade web lo jadi interaktif abis dengan JavaScript, event, dan aksi DOM yang kece.</p>
          <a href="https://youtu.be/mD6uSGSjgr4" target="_blank" class="mt-3 inline-block text-orange-600 underline hover:text-orange-800">
            Lihat Tutorial YouTube
          </a>
        </div>
      </div>

      <!-- VIDEO -->
      <div class="mt-16 text-center" data-aos="fade-up">
        <h3 class="text-2xl font-bold mb-4">Tonton Tutorial Pemrograman</h3>
        <div class="ratio-16x9 max-w-4xl mx-auto rounded-lg shadow-lg overflow-hidden hover:scale-105 transition-transform duration-500">
          <iframe src="https://www.youtube.com/embed/jGyYuQf-GeE" title="Tutorial Pemrograman Dasar" frameborder="0" allowfullscreen></iframe>
        </div>
      </div>

      <!-- QUIZ -->
      <h2 id="quiz" class="text-3xl font-bold text-center text-orange-700 mt-16 mb-10" data-aos="fade-up">Quiz</h2>

      <div class="grid md:grid-cols-3 gap-8 text-center">

        <!-- HTML Quiz -->
        <div class="bg-white border rounded-lg p-6 shadow hover:shadow-2xl hover:scale-105 transition-transform duration-500" data-aos="zoom-in" data-aos-delay="100">
          <h3 class="text-xl font-bold mb-4">Quiz HTML</h3>
          <p id="quiz-question-html" class="mb-4 text-lg font-medium"></p>
          <div id="quiz-options-html" class="space-y-2"></div>
          <button onclick="loadQuiz('html')" class="mt-4 bg-gradient-to-r from-yellow-400 to-orange-500 text-white px-4 py-2 rounded hover:opacity-90 transition">Soal Lain</button>
        </div>

        <!-- CSS Quiz -->
        <div class="bg-white border rounded-lg p-6 shadow hover:shadow-2xl hover:scale-105 transition-transform duration-500" data-aos="zoom-in" data-aos-delay="200">
          <h3 class="text-xl font-bold mb-4">Quiz CSS</h3>
          <p id="quiz-question-css" class="mb-4 text-lg font-medium"></p>
          <div id="quiz-options-css" class="space-y-2"></div>
          <button onclick="loadQuiz('css')" class="mt-4 bg-gradient-to-r from-yellow-400 to-orange-500 text-white px-4 py-2 rounded hover:opacity-90 transition">Soal Lain</button>
        </div>

        <!-- JS Quiz -->
        <div class="bg-white border rounded-lg p-6 shadow hover:shadow-2xl hover:scale-105 transition-transform duration-500" data-aos="zoom-in" data-aos-delay="300">
          <h3 class="text-xl font-bold mb-4">Quiz JavaScript</h3>
          <p id="quiz-question-js" class="mb-4 text-lg font-medium"></p>
          <div id="quiz-options-js" class="space-y-2"></div>
          <button onclick="loadQuiz('js')" class="mt-4 bg-gradient-to-r from-yellow-400 to-orange-500 text-white px-4 py-2 rounded hover:opacity-90 transition">Soal Lain</button>
        </div>
      </div>
    </div>
  </main>

  <!-- FOOTER -->
  <footer class="bg-gradient-to-r from-yellow-400 to-orange-500 text-white py-4 text-center mt-auto">
    <p>&copy; 2025 SmartGo. Semua Hak Dilindungi.</p>
  </footer>

  <!-- AOS JS -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init({ duration: 800, once: true });

    const quizzesHTML = [
      { question: "Apa singkatan dari HTML?", options: ["HyperText Markup Language", "Hyper Transfer Markup Language", "HighText Machine Language"], answer: "HyperText Markup Language" },
      { question: "Tag HTML untuk membuat hyperlink adalah?", options: ["<link>", "<a>", "<href>"], answer: "<a>" },
      { question: "Tag HTML untuk menampilkan gambar adalah?", options: ["<img>", "<image>", "<pic>"], answer: "<img>" },
      { question: "Elemen HTML untuk membuat daftar terurut adalah?", options: ["<ul>", "<ol>", "<li>"], answer: "<ol>" }
    ];

    const quizzesCSS = [
      { question: "Properti CSS untuk mengubah warna teks adalah?", options: ["color", "background-color", "text-color"], answer: "color" },
      { question: "Properti CSS untuk membuat teks tebal adalah?", options: ["font-weight", "text-bold", "bold"], answer: "font-weight" },
      { question: "Selector CSS untuk memilih semua elemen <p> adalah?", options: ["p", ".p", "#p"], answer: "p" },
      { question: "Properti CSS untuk mengatur ukuran font adalah?", options: ["font-size", "text-size", "size-font"], answer: "font-size" }
    ];

    const quizzesJS = [
      { question: "Metode JavaScript untuk menampilkan teks di console adalah?", options: ["console.write()", "console.log()", "log.console()"], answer: "console.log()" },
      { question: "Metode JavaScript untuk mengubah konten elemen HTML adalah?", options: ["element.innerHTML", "element.changeHTML", "element.setHTML"], answer: "element.innerHTML" },
      { question: "Fungsi JavaScript untuk menampilkan alert adalah?", options: ["alert()", "prompt()", "confirm()"], answer: "alert()" },
      { question: "Tipe data JavaScript untuk angka adalah?", options: ["string", "number", "boolean"], answer: "number" }
    ];

    function loadQuiz(category) {
      let quizData, questionId, optionsId;

      if (category === 'html') {
        quizData = quizzesHTML;
        questionId = "quiz-question-html";
        optionsId = "quiz-options-html";
      } else if (category === 'css') {
        quizData = quizzesCSS;
        questionId = "quiz-question-css";
        optionsId = "quiz-options-css";
      } else if (category === 'js') {
        quizData = quizzesJS;
        questionId = "quiz-question-js";
        optionsId = "quiz-options-js";
      } else {
        return;
      }

      const quiz = quizData[Math.floor(Math.random() * quizData.length)];
      document.getElementById(questionId).textContent = quiz.question;

      const optionsBox = document.getElementById(optionsId);
      optionsBox.innerHTML = "";
      quiz.options.forEach(opt => {
        const btn = document.createElement("button");
        btn.textContent = opt;
        btn.className = "w-full bg-gray-100 border rounded p-2 hover:bg-yellow-200";
        btn.onclick = () => alert(opt === quiz.answer ? "Benar! ✅" : `Salah ❌\nJawaban yang benar: ${quiz.answer}`);
        optionsBox.appendChild(btn);
      });
    }

    loadQuiz('html');
    loadQuiz('css');
    loadQuiz('js');
  </script>
</body>
</html>
