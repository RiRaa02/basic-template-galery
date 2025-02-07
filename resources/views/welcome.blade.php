<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Selamat Datang</title>

  <!-- Preconnect for Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">

  <!-- Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com"></script>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap"
    rel="stylesheet">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">

  <style>
    body {
      font-family: 'Poppins', Arial, sans-serif;
      margin: 0;
      padding: 0;
    }

    .hero-section {
      background: url('{{ asset('storage/bckgrnd.jpg') }}') no-repeat center center / cover;
      height: 100vh;
      display: flex;
      justify-content: flex-start;
      align-items: center;
      padding-left: 50px;
    }

    h1 {
      font-size: 3.5rem !important; /* Ukuran font lebih besar */
      font-family: 'Poppins', Arial, sans-serif;
      color: #D2B48C; /* Cokelat muda sesuai warna tombol */
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
    }

    .creator {
      font-family: 'Satisfy', serif;
      color: white; /* Warna putih untuk teks creator */
      font-size: 1.2rem;
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
      margin-top: 10px; /* Memberikan jarak antara judul dan teks creator */
    }

    .btn-custom {
      font-family: 'Poppins', Arial, sans-serif;
      font-size: 1rem;
      padding: 15px 25px;
      border-radius: 5px;
      margin-top: 20px;
      text-align: center;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    .btn-pink {
      background-color: #FFE5D4;
      color: #8B4513;
      border: none;
    }

    .btn-white {
      background-color: #D2B48C;
      color: white;
      border: none;
    }
  </style>
</head>

<body>
  <!-- Hero Section -->
  <section class="hero-section">
    <div class="main-content mt-48">
      <h1><text style="font-family: Playfair Display, serif;">Welcome to the <br> Photo Gallery Website</text><br>
      <div class="creator">
        <p>Created by Ridha Ramadhani</p>
      </div> 
      <div>
        <a href="{{ route('register') }}" class="btn btn-custom btn-white ml-4">
          REGISTER
        </a>
        <a href="{{ route('login') }}" class="btn btn-custom btn-white ml-4">
          LOGIN
        </a>
      </div>
    </div>
  </section>
</body>

</html>
