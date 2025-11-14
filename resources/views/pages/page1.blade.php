<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Page 1 - Nature Photography</title>
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
  <h1>Nature Photography</h1>
  <p class="subheading">Explore 20 breathtaking scenes from nature — from mountains to meadows.</p>

  <div class="gallery">
    <div class="photo"><img src="image/page1/prt1-1.jpeg"><p>Still lake mirrors trees beneath calm sky.</p></div>
    <div class="photo"><img src="image/page1/prt1-2.jpeg"><p>Green terraces shine under warm golden sunlight.</p></div>
    <div class="photo"><img src="image/page1/prt1-3.jpeg"><p>Chocolate hills rise gently across peaceful valley.</p></div>
    <div class="photo"><img src="image/page1/prt1-4.jpeg"><p>Crystal waters shimmer beside tall limestone cliffs.</p></div>
    <div class="photo"><img src="image/page1/prt1-5.jpeg"><p>Bright northern lights dance above snowy mountains.</p></div>
    <div class="photo"><img src="image/page1/prt1-6.jpeg"><p>Forest lake reflects purple sky and peaks.</p></div>
    <div class="photo"><img src="image/page1/prt1-7.jpeg"><p>Golden sunlight glows across wide mountain valley.</p></div>
    <div class="photo"><img src="image/page1/prt1-8.jpeg"><p>Snowy mountain village rests quietly near lake.</p></div>
    <div class="photo"><img src="image/page1/prt1-9.jpeg"><p>Cherry blossoms bloom beside calm blue river.</p></div>
    <div class="photo"><img src="image/page1/prt1-10.jpeg"><p>Colorful village overlooks bright turquoise coastal bay.</p></div>
    <div class="photo"><img src="image/page1/prt1-11.jpeg"><p>Golden sunlight filters through dense forest canopy.</p></div>
    <div class="photo"><img src="image/page1/prt1-12.jpeg"><p>Blue sea sparkles beneath towering limestone cliffs.</p></div>
    <div class="photo"><img src="image/page1/prt1-13.jpeg"><p>Snowy peaks rise above blooming mountain valley.</p></div>
    <div class="photo"><img src="image/page1/prt1-14.jpeg"><p>Hikers climb path beside tall jungle waterfall.</p></div>  
    <div class="photo"><img src="image/page1/prt1-15.jpeg"><p>Snowy mountain peaks rise beyond golden savanna plains.</p></div>
    <div class="photo"><img src="image/page1/prt1-16.jpeg"><p>Couple admires sunrise above colorful mountain lake.</p></div>
    <div class="photo"><img src="image/page1/prt1-17.jpeg"><p>Clear lake mirrors green mountains and sky.</p></div>
    <div class="photo"><img src="image/page1/prt1-18.jpeg"><p>Ancient castle stands quietly beside turquoise water.</p></div>
    <div class="photo"><img src="image/page1/prt1-19.jpeg"><p>Misty waterfall plunges from towering plateau peak.</p></div>
    <div class="photo"><img src="image/page1/prt1-20.jpeg"><p>Ancient temples stretch across green valley plains.</p></div>
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
