<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Page 4 - People & Events Photography</title>
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
      background: linear-gradient(135deg, #ffecd2, #fcb69f);
      color: #fff;
      padding: 12px 28px;
      border-radius: 10px;
      margin-top: 50px;
      font-weight: 600;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
      transition: all 0.3s ease;
    }

    .back:hover {
      background: linear-gradient(135deg, #f6d365, #fda085);
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
  <h1>People & Events Photography</h1>
  <p class="subheading">Capturing emotions, celebrations, and stories through expressive human moments.</p>

  <div class="gallery">
    <div class="photo"><img src="image/page4/prt4-1.jpeg"><p>Colorful dancers celebrate festival with joy.</p></div>
    <div class="photo"><img src="image/page4/prt4-2.jpeg"><p>Newlyweds showered in confetti and smiles.</p></div>
    <div class="photo"><img src="image/page4/prt4-3.jpeg"><p>Concert lights dazzle crowd with vibrant energy.</p></div>
    <div class="photo"><img src="image/page4/prt4-4.jpeg"><p>Athlete leaps toward victory on court.</p></div>
    <div class="photo"><img src="image/page4/prt4-5.jpeg"><p>Children perform lively synchronized cultural dance.</p></div>
    <div class="photo"><img src="image/page4/prt4-6.jpeg"><p>Devotees pray earnestly during sacred ceremony.</p></div>
    <div class="photo"><img src="image/page4/prt4-7.jpeg"><p>Man smiles confidently in urban office.</p></div>
    <div class="photo"><img src="image/page4/prt4-8.jpeg"><p>Photographer crouches mid-street for perfect shot.</p></div>
    <div class="photo"><img src="image/page4/prt4-9.jpeg"><p>Couple laughing together in heartfelt moment.</p></div>
    <div class="photo"><img src="image/page4/prt4-10.jpeg"><p>Man poses proudly for professional portrait.</p></div>
    <div class="photo"><img src="image/page4/prt4-11.jpeg"><p>Family laughing together in joyful harmony.</p></div>
    <div class="photo"><img src="image/page4/prt4-12.jpeg"><p>Crowd celebrates passionately with raised hands.</p></div>
    <div class="photo"><img src="image/page4/prt4-13.jpeg"><p>Traveler admires sunrise beside calm lake.</p></div>
    <div class="photo"><img src="image/page4/prt4-14.jpeg"><p>Parents relax with children on cozy couch.</p></div>
    <div class="photo"><img src="image/page4/prt4-15.jpeg"><p>Woman gazes through rain-covered window sadly.</p></div>
    <div class="photo"><img src="image/page4/prt4-16.jpeg"><p>Farmers work together during golden sunset.</p></div>
    <div class="photo"><img src="image/page4/prt4-17.jpeg"><p>Passenger daydreams beside moving train window.</p></div>
    <div class="photo"><img src="image/page4/prt4-18.jpeg"><p>Singer performs emotionally under stage lights.</p></div>
    <div class="photo"><img src="image/page4/prt4-19.jpeg"><p>Vibrant parade performers showcase colorful costumes.</p></div>
    <div class="photo"><img src="image/page4/prt4-20.jpeg"><p>Bride and groom share traditional wedding moment.</p></div>
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
