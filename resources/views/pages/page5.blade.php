<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Page 5 - Miscellaneous Photography</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(to right, #a8edea, #fed6e3);
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
      background: linear-gradient(135deg, #a1c4fd, #c2e9fb);
      color: #fff;
      padding: 12px 28px;
      border-radius: 10px;
      margin-top: 50px;
      font-weight: 600;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
      transition: all 0.3s ease;
    }

    .back:hover {
      background: linear-gradient(135deg, #89f7fe, #66a6ff);
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
  <h1>Miscellaneous Photography</h1>
  <p class="subheading">A diverse collection of creative visuals blending art, objects, and imagination.</p>

  <div class="gallery">
    <div class="photo"><img src="image/page5/prt5-1.jpeg"><p>Vibrant paint splashes swirl in motion.</p></div>
    <div class="photo"><img src="image/page5/prt5-2.jpeg"><p>Star trails spin beautifully across night sky.</p></div>
    <div class="photo"><img src="image/page5/prt5-3.jpeg"><p>Calm reflection of houses in still water.</p></div>
    <div class="photo"><img src="image/page5/prt5-4.jpeg"><p>Brushes and textured paints create abstract art.</p></div>
    <div class="photo"><img src="image/page5/prt5-5.jpeg"><p>Collage of butterflies forms surreal portrait.</p></div>
    <div class="photo"><img src="image/page5/prt5-6.jpeg"><p>Vintage camera rests among old photographs.</p></div>
    <div class="photo"><img src="image/page5/prt5-7.jpeg"><p>Antique clocks twist into time illusion.</p></div>
    <div class="photo"><img src="image/page5/prt5-8.jpeg"><p>Pink flowers sparkle softly after morning rain.</p></div>
    <div class="photo"><img src="image/page5/prt5-9.jpeg"><p>Geometric cubes form hypnotic abstract pattern.</p></div>
    <div class="photo"><img src="image/page5/prt5-10.jpeg"><p>Layered petals merge into modern digital art.</p></div>
    <div class="photo"><img src="image/page5/prt5-11.jpeg"><p>Hand reaches toward reflection on mirror.</p></div>
    <div class="photo"><img src="image/page5/prt5-12.jpeg"><p>Person floats midair in surreal levitation.</p></div>
    <div class="photo"><img src="image/page5/prt5-13.jpeg"><p>Double exposure merges woman and nature.</p></div>
    <div class="photo"><img src="image/page5/prt5-14.jpeg"><p>Vibrant colored powder bursts in motion.</p></div>
    <div class="photo"><img src="image/page5/prt5-15.jpeg"><p>Miniature figures journey through natural terrain.</p></div>
    <div class="photo"><img src="image/page5/prt5-16.jpeg"><p>Minimalist flat lay of elegant perfume set.</p></div>
    <div class="photo"><img src="image/page5/prt5-17.jpeg"><p>Neon city lights shimmer on wet streets.</p></div>
    <div class="photo"><img src="image/page5/prt5-18.jpeg"><p>Abstract black-and-white view of architecture.</p></div>
    <div class="photo"><img src="image/page5/prt5-19.jpeg"><p>Color waves flow smoothly in modern design.</p></div>
    <div class="photo"><img src="image/page5/prt5-20.jpeg"><p>Golden bokeh lights twinkle behind leaves.</p></div>
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
