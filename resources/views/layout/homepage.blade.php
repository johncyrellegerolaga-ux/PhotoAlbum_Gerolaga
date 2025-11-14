<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>My Photo Album</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap');

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(135deg, #74ebd5, #ACB6E5);
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      color: #333;
      overflow-x: hidden;
    }

  
    .container {
      background: rgba(255, 255, 255, 0.15);
      backdrop-filter: blur(12px);
      -webkit-backdrop-filter: blur(12px);
      border-radius: 20px;
      padding: 40px 60px;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
      text-align: center;
      animation: fadeIn 1.5s ease-out;
    }

    h1 {
      font-size: 3rem;
      margin-bottom: 30px;
      color: #fff;
      text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.3);
    }

    .links {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 20px;
      margin-top: 20px;
    }

    a {
      text-decoration: none;
      background: rgba(255, 255, 255, 0.85);
      color: #333;
      padding: 15px 30px;
      border-radius: 12px;
      font-weight: 600;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
      transition: all 0.3s ease;
      border: 1px solid rgba(255, 255, 255, 0.3);
    }

    a:hover {
      background: linear-gradient(135deg, #6dd5ed, #2193b0);
      color: #fff;
      transform: translateY(-5px);
      box-shadow: 0 6px 20px rgba(0,0,0,0.2);
    }

    footer {
      margin-top: 50px;
      color: #fff;
      font-size: 0.9rem;
      opacity: 0.8;
      animation: fadeInUp 2s ease;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: scale(0.95); }
      to { opacity: 1; transform: scale(1); }
    }

    @keyframes fadeInUp {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>📸 My Photo Album</h1>
    <p style="color: #f0f0f0; margin-bottom: 20px;">Explore beautiful photos across different categories</p>

    <div class="links">
      <a href="{{ url('/page1') }}">🌿 Page 1 - Nature</a>
      <a href="{{ url('/page2') }}">🏛️ Page 2 - Architecture</a>
      <a href="{{ url('/page3') }}">🐾 Page 3 - Animals</a>
      <a href="{{ url('/page4') }}">🎉 Page 4 - People & Events</a>
      <a href="{{ url('/page5') }}">🌈 Page 5 - Miscellaneous</a>
    </div>

    <footer>© 2025 My Photo Album</footer>
  </div>
</body>
</html>