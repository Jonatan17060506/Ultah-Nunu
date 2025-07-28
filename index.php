<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Selamat Ulang Tahun, Sayang!</title>
  <style>
    body {
      background: linear-gradient(to right, #ffdde1, #ee9ca7);
      font-family: 'Comic Sans MS', cursive, sans-serif;
      text-align: center;
      padding: 50px;
      color: #fff;
      animation: fadeIn 2s ease-in;
    }

    h1 {
      font-size: 3em;
      margin-bottom: 10px;
    }

    .cake {
      font-size: 100px;
      animation: bounce 1s infinite;
    }

    .love {
      color: red;
      font-size: 30px;
    }

    .message {
      background: rgba(255, 255, 255, 0.2);
      border-radius: 20px;
      padding: 20px;
      margin: 30px auto;
      width: 80%;
      max-width: 600px;
      font-size: 20px;
    }

    .footer {
      margin-top: 40px;
      font-size: 18px;
    }

    .controls {
      margin-top: 20px;
    }

    .controls button {
      background-color: #fff;
      border: none;
      padding: 10px 20px;
      border-radius: 10px;
      font-size: 16px;
      cursor: pointer;
      margin: 0 10px;
      color: #ee9ca7;
      font-weight: bold;
    }

    @keyframes bounce {
      0%, 100% {
        transform: translateY(0);
      }
      50% {
        transform: translateY(-15px);
      }
    }

    @keyframes fadeIn {
      from {
        opacity: 0;
      }
      to {
        opacity: 1;
      }
    }
  </style>
</head>
<body>

  <!-- Musik Otomatis dengan Kontrol -->
  <audio id="bgMusic" autoplay loop>
    <source src="music.mp3" type="audio/mpeg">
    Browsermu tidak mendukung pemutaran musik.
  </audio>

  <div class="controls">
    <button onclick="document.getElementById('bgMusic').play()">▶ Play</button>
    <button onclick="document.getElementById('bgMusic').pause()">⏸ Pause</button>
  </div>

  <div class="cake">🎂</div>
  <h1>Selamat Ulang Tahun, Sayang! 🎉</h1>
  <p class="love">❤️❤️❤️</p>

  <div class="message">
    <?php
      $nama = "Nunu"; // Ganti dengan nama pacarmu
      $tanggal = date("d F Y");
      echo "<p>Hai $nama yang paling gemoyy di dunia! 🥰</p>";
      echo "<p>Hari ini, 29 Juli 2025, adalah hari spesial kamu. Aku cuma mau bilang...</p>";
      echo "<p><strong>SELAMAT ULANG TAHUN! 🎈</strong></p>";
      echo "<p>Semoga kamu makin cantik, makin lucu, makin sabar menghadapi aku yang ngeselin ini 🤭</p>";
      echo "<p>Dan semoga hubungan kita selalu bersama, secerah masa depan kita berdua (aminnn)</p>";
      echo "<p>Aku sayang kamu... mungkin lagunya engga gembira, tapi memiliki makna yg dalam. Bagiku, lagu ini membuatku berpikir tentang kita di masa depan, dimana setiap tahunnya pasti kita merayakan bertambahnya usia dan usia juga tidak ada yg tahu sampai kapan. Aku harap kita terus saling sayang hingga kita bertemu di RUANG BARU itu. </p>";
      echo "<p> Semoga kamu senang dengan apa yang aku berikan ke kamu, aku akan tetap selalu seperti onay yang kamu kenal. Selalu ingin menjadi yang terbaik untuk kamu. I love you, my nunu.</p>"
    ?>
  </div>

  <div class="footer">
    <div class="footer">
      <p>— Dari pacarmu yang ganteng dan selalu cinta kamu 💕</p>
    </div>

    <!-- Tombol WhatsApp -->
    <div style="margin-top: 30px;">
      <a href="https://wa.me/6282122368998?text=Hai%20onay%20sayang%2C%20aku%20udah%20baca%20ucapan%20ulang%20tahunnya%20%F0%9F%98%8D" target="_blank">
        <button style="
          background-color: #25D366;
          border: none;
          padding: 12px 25px;
          font-size: 16px;
          color: white;
          border-radius: 10px;
          cursor: pointer;
          font-weight: bold;">
          💬 Balas Aku di WhatsApp
        </button>
      </a>
    </div>

    <p>— Dari pacarmu yang ganteng dan selalu cinta kamu 💕</p>
  </div>

</body>
</html>
