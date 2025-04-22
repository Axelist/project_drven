<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>DRVEN'S</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      margin: 0;
      font-family: 'Poppins', sans-serif;
      background-color:rgb(13, 43, 97);
      height: 100vh; 
      width: 100vw; 
      overflow: hidden; 
      display: flex;
      flex-direction: column;
      color: white;
    }
    
    .navbar {
      display: flex;
      justify-content: flex-start; 
      align-items: center;
      padding: 30px 4%;
      background-color: #0d2b61;
      gap: 40px; 
    }
    
    .navbar a {
      padding: 8px 16px; 
      text-decoration: none;
      color: black;
      background-color:rgb(183, 217, 250); 
      font-weight: bold;
      margin: 0;
      font-size: 16px;
    }

    .navbar a:hover {   
      transform: translateY(-2px);
      background-color: rgb(255, 255, 255);
      cursor: pointer;
    }
    
    .hero {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 50px;
    }
    
    .hero-text {
      max-width: 40%;
    }
    
    .hero-text h1 {
      font-size: 70px;
      margin-bottom: 10px;
      line-height: 1;
    }
    
    .hero-text .btn {
      padding: 12px 30px;
      border: 2px solid white;
      background: transparent;
      color: white;
      font-weight: bold;
      cursor: pointer;
      border-radius: 10px;
      transition: all 0.3s;
      font-size: 16px;
      margin-top: 20px;
    }
    
    .hero-text .btn:hover {
      background: white;
      color: #0d2b61;
    }
    
    .hero-img img {
      max-width: 400px;

    }

    @media (max-width: 768px) {
      .navbar {
        gap: 15px; 
        padding: 20px;
        justify-content: center;
        flex-wrap: wrap;
      }
      
      .navbar a {
        padding: 6px 12px;
        font-size: 14px;
      }
      
      .hero {
        flex-direction: column;
        padding: 30px;
        text-align: center;
      }

      .hero-text {
        max-width: 100%;
        margin-bottom: 30px;
      }

      .hero-img img {
        max-width: 100%;
      }
    }
  </style>
</head>
<body>
  <div class="navbar">
    <a href="#">HOME</a>
    <a href="#">SHOP</a>
    <a href="#">ABOUT US</a>
    <a href="contact.php">CONTACT US</a>
  </div>

  <div class="hero">
    <div class="hero-text">
      <h1>DRVEN'S <br> CLUB</h1>
      <button class="btn">Lihat Koleksi</button>
    </div>
    <div class="hero-img">
      <img src="drven shirt.png" alt="Drven Shirt">
    </div>
  </div>
</body>
</html>

