<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HEQUA</title>

    <style>
        /* Background full layar pakai link internet */
        body {
            margin: 0;
            padding: 0;
            font-family: "Poppins", sans-serif;
            background: url("https://images.unsplash.com/photo-1507525428034-b723cf961d3e?auto=format&fit=crop&w=1920&q=80") 
                        no-repeat center center fixed;
            background-size: cover;
        }

        /* Pusatkan konten */
        .wrapper {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            text-align: center;
            cursor: pointer;
        }

        /* Teks judul jadi link */
        .title a {
            font-size: 48px;
            font-weight: bold;
            color: white;
            text-decoration: none;
        }

        .title a:hover {
            opacity: 0.8;
        }

        .icon {
            font-size: 32px;
            margin-left: 10px;
        }
    </style>
</head>

<body>

<div class="wrapper">
    <h1 class="title">
        <a href="home.php">HEQUA</a>
    </h1>
</div>

</body>
</html>
