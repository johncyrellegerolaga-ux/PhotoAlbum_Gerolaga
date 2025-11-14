<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Page 3 - Animals Photography</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(to right, #a1ffce, #faffd1);
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
  <h1>Animals Photography</h1>
  <p class="subheading">Explore 20 adorable and majestic creatures captured in their natural moments.</p>

  <div class="gallery">
    <div class="photo"><img src="image/page3/prt3-1.jpeg"><p>Curious red panda peeks through green leaves.</p></div>
    <div class="photo"><img src="image/page3/prt3-2.jpeg"><p>Fluffy polar bear cub rests on snow.</p></div>
    <div class="photo"><img src="image/page3/prt3-3.jpeg"><p>Koala cuddles joey among eucalyptus branches.</p></div>
    <div class="photo"><img src="image/page3/prt3-4.jpeg"><p>Playful raccoon stands alert on grass.</p></div>
    <div class="photo"><img src="image/page3/prt3-5.jpeg"><p>Sleek otter gazes across shimmering water.</p></div>
    <div class="photo"><img src="image/page3/prt3-6.jpeg"><p>Weasel stands tall on sandy ground.</p></div>
    <div class="photo"><img src="image/page3/prt3-7.jpeg"><p>Majestic lion watches proudly over savanna.</p></div>
    <div class="photo"><img src="image/page3/prt3-8.jpeg"><p>Relaxed cheetah lounges under warm sunlight.</p></div>
    <div class="photo"><img src="image/page3/prt3-9.jpeg"><p>Crocodile opens jaws beside muddy shore.</p></div>
    <div class="photo"><img src="image/page3/prt3-10.jpeg"><p>Cobra raises hood on desert sand.</p></div>
    <div class="photo"><img src="image/page3/prt3-11.jpeg"><p>Monitor lizard explores hillside under sunlight.</p></div>
    <div class="photo"><img src="image/page3/prt3-12.jpeg"><p>Armadillo strolls through grassy forest floor.</p></div>
    <div class="photo"><img src="image/page3/prt3-13.jpeg"><p>Graceful gazelle stands alert on sandy ground.</p></div>
    <div class="photo"><img src="image/page3/prt3-14.jpeg"><p>Powerful harpy eagle perched on tree branch.</p></div>
    <div class="photo"><img src="image/page3/prt3-15.jpeg"><p>Grey wolf stares intensely through the dark.</p></div>
    <div class="photo"><img src="image/page3/prt3-16.jpeg"><p>Tall giraffe grazes calmly in green forest</p></div>
    <div class="photo"><img src="image/page3/prt3-17.jpeg"><p>Black panther prowls silently through jungle foliage.</p></div>
    <div class="photo"><img src="image/page3/prt3-18.jpeg"><p>Puffin gazes downward with calm expression.</p></div>
    <div class="photo"><img src="image/page3/prt3-19.jpeg"><p>White horse gallops freely through golden field.</p></div>
    <div class="photo"><img src="image/page3/prt3-20.jpeg"><p>Orange tabby cat relaxes on wooden floor.</p></div>
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
