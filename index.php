<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HEQUA</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: 'Poppins', sans-serif;
      background: url('images/bgg.png') no-repeat center center fixed; 
      background-size: cover; 
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    h1 {
      font-size: 30px;
      font-weight: 600;
      display: flex;
      align-items: center;
      gap: 10px; 
      color: #000; 
    }
    h1 img {
      width: 50px;
      height: 50px;
    }
    .btn-masuk {
      margin-top: 20px;
      padding: 10px 20px;
      background-color: #3b5998;
      color: #fff;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      font-size: 16px;
      font-family: 'Poppins', sans-serif;
    }
    .btn-masuk:hover {
      background-color: #2d4373;
    }
  </style>
</head>
<body>

  <h1>
    HEQUA<img src="images/logo.png" alt="HEQUA Logo"> 
  </h1>
  <button class="btn-masuk" onclick="window.location.href='login.php'">Masuk</button>
</body>
</html>
