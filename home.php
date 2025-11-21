<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home — Modern Background</title>

    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;

            /* BACKGROUND GAMBAR + GRADIENT */
            background:
                linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)),
                url("https://images.unsplash.com/photo-1507525428034-b723cf961d3e?auto=format&fit=crop&w=1920&q=80");

            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            height: 100vh;

            /* CENTERING CONTENT */
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        /* NAVBAR */
        .navbar {
            backdrop-filter: blur(10px);
            background: rgba(255, 255, 255, 0.15);
            padding: 15px 30px;
            display: flex;
            gap: 20px;
            position: absolute;
            top: 0;
            width: 100%;
        }

        .navbar a {
            color: white;
            font-size: 16px;
            text-decoration: none;
            font-weight: 500;
            transition: 0.3s;
        }

        .navbar a:hover {
            color: #ffe89c;
        }

        /* CARD TENGAH */
        .container {
            width: 85%;
            max-width: 700px;
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(12px);
            padding: 40px;
            border-radius: 18px;
            text-align: center;
            color: white;
            box-shadow: 0 10px 25px rgba(0,0,0,0.3);
            margin-top: 60px; /* agar tidak tertutup navbar */
        }

        h1 {
            margin-bottom: 10px;
            font-size: 32px;
        }

        p {
            font-size: 17px;
            line-height: 1.5;
        }

        /* BUTTON */
        .btn {
            display: inline-block;
            margin-top: 25px;
            background: white;
            color: #4a6cf7;
            padding: 12px 25px;
            border-radius: 30px;
            font-size: 16px;
            font-weight: bold;
            text-decoration: none;
            transition: 0.3s;
        }

        .btn:hover {
            background: #f0f0f0;
            transform: translateY(-2px);
        }

    </style>
</head>
<body>

    <div class="navbar">
        <a href="index.html">Home</a>
        <a href="about.html">Tentang</a>
        <a href="kontak.html">Kontak</a>
    </div>

    <div class="container">
        <h1>Selamat Datang 👋</h1>
        <p>
            ini halaman home kamii
        </p>

        <a class="btn" href="index.html">Kembali ke Index</a>
    </div>

</body>
</html>