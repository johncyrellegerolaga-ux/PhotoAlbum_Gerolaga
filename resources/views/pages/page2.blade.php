<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Page 2 - Architecture Photography</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(to right, #c9ffbf, #ffafbd);
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: flex-start;
      padding: 40px 20px;
      color: #333;
    }

    h1 {
      font-size: 2.8rem;
      margin-bottom: 10px;
      color: #2d3436;
      text-shadow: 2px 2px 5px rgba(0,0,0,0.1);
    }

    p.subheading {
      font-size: 1.1rem;
      color: #555;
      margin-bottom: 40px;
      text-align: center;
    }

    .gallery {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
      gap: 25px;
      width: 100%;
      max-width: 1200px;
    }

    .photo {
      background-color: #fff;
      border-radius: 14px;
      overflow: hidden;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      cursor: pointer;
    }

    .photo:hover {
      transform: translateY(-6px);
      box-shadow: 0 8px 24px rgba(0,0,0,0.2);
    }

    .photo img {
      width: 100%;
      aspect-ratio: 16 / 10;
      object-fit: cover;
      display: block;
    }

    .photo p {
      background-color: #fff;
      color: #333;
      font-size: 0.95rem;
      text-align: center;
      padding: 10px;
      border-top: 1px solid #eee;
      line-height: 1.4;
    }

    .back {
      display: inline-block;
      text-decoration: none;
      background: linear-gradient(135deg, #74ebd5, #ACB6E5);
      color: #fff;
      padding: 12px 28px;
      border-radius: 10px;
      margin-top: 50px;
      font-weight: 600;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
      transition: all 0.3s ease;
    }

    .back:hover {
      background: linear-gradient(135deg, #6dd5ed, #2193b0);
      transform: translateY(-4px);
      box-shadow: 0 6px 20px rgba(0,0,0,0.2);
    }

    
    .modal {
      display: none;
      position: fixed;
      z-index: 1000;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      background: rgba(0,0,0,0.85);
      justify-content: center;
      align-items: center;
      animation: fadeIn 0.3s ease;
    }

    .modal img {
      width: auto;
      height: 95vh;
      max-width: 98vw;
      border-radius: 15px;
      box-shadow: 0 8px 30px rgba(0, 0, 0, 0.7);
      animation: zoomIn 0.4s ease forwards;
      transform: scale(0.8);
    }

    @keyframes fadeIn {
      from { background: rgba(0,0,0,0); }
      to { background: rgba(0,0,0,0.85); }
    }

    @keyframes zoomIn {
      from { transform: scale(0.8); opacity: 0; }
      to { transform: scale(1); opacity: 1; }
    }
  </style>
</head>
<body>
  <h1>Architecture Photography</h1>
  <p class="subheading">Discover inspiring architectural masterpieces blending history, design, and innovation.</p>

  <div class="gallery">
    <div class="photo"><img src="image/page2/prt2-1.jpeg"><p>Modern building showcases bold futuristic design.</p></div>
    <div class="photo"><img src="image/page2/prt2-2.jpeg"><p>Cathedral spires glow under golden evening light.</p></div>
    <div class="photo"><img src="image/page2/prt2-3.jpeg"><p>Marina Bay towers rise above twilight city.</p></div>
    <div class="photo"><img src="image/page2/prt2-4.jpeg"><p>Taj Mahal gleams beneath clear blue sky.</p></div>
    <div class="photo"><img src="image/page2/prt2-5.jpeg"><p>Opera house glows warmly against night sky.</p></div>
    <div class="photo"><img src="image/page2/prt2-6.jpeg"><p>Mount Rushmore faces carved in solid rock.</p></div>
    <div class="photo"><img src="image/page2/prt2-7.jpeg"><p>Gothic cathedral glimmers under bright city lights.</p></div>
    <div class="photo"><img src="image/page2/prt2-8.jpeg"><p>Ancient Colosseum stands proudly in Roman sun.</p></div>
    <div class="photo"><img src="image/page2/prt2-9.jpeg"><p>Great Wall winds gracefully over green hills.</p></div>
    <div class="photo"><img src="image/page2/prt2-10.jpeg"><p>Pyramids and Sphinx rest under desert sun.</p></div>
    <div class="photo"><img src="image/page2/prt2-11.jpeg"><p>Tall skyscraper pierces bright clear sky.</p></div>
    <div class="photo"><img src="image/page2/prt2-12.jpeg"><p>Red temple gate stands proudly under sun.</p></div>
    <div class="photo"><img src="image/page2/prt2-13.jpeg"><p>World’s largest clock tower dominates skyline.</p></div>
    <div class="photo"><img src="image/page2/prt2-14.jpeg"><p>Ornate colonial building glows in daylight</p></div>
    <div class="photo"><img src="image/page2/prt2-15.jpeg"><p>Futuristic white structure reflects on calm water.</p></div>
    <div class="photo"><img src="image/page2/prt2-16.jpeg"><p>Golden temple gleams under blue tropical sky.</p></div>
    <div class="photo"><img src="image/page2/prt2-17.jpeg"><p>Indoor waterfall flows beneath glass dome.</p></div>
    <div class="photo"><img src="image/page2/prt2-18.jpeg"><p>Spiral hallway curves with elegant symmetry.</p></div>
    <div class="photo"><img src="image/page2/prt2-19.jpeg"><p>Modern villa blends seamlessly with nature.</p></div>
    <div class="photo"><img src="image/page2/prt2-20.jpeg"><p>Ancient stone castle overlooks green countryside.</p></div>
  </div>

  <a href="{{ url('/') }}" class="back">← Back to Homepage</a>

  <div class="modal" id="imgModal">
    <img id="modalImg" src="" alt="Zoomed image">
  </div>

  <script>
    const modal = document.getElementById('imgModal');
    const modalImg = document.getElementById('modalImg');
    const photos = document.querySelectorAll('.photo img');

    photos.forEach(img => {
      img.addEventListener('click', () => {
        modal.style.display = 'flex';
        modalImg.src = img.src;
      });
    });

    modal.addEventListener('click', () => {
      modal.style.display = 'none';
    });
  </script>
</body>
</html>
