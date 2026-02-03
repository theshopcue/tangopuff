<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Tangopuff – Women's Fashion</title>

<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">

<style>
*{margin:0;padding:0;box-sizing:border-box}
body{
  font-family:'Poppins',sans-serif;
  background:#f5f9ff;
  color:#222;
  overflow-x:hidden;
}

/* HEADER */
header{
  position:fixed;
  top:0;
  width:100%;
  background:#0a2a66;
  color:white;
  padding:25px 0;
  text-align:center;
  box-shadow:0 4px 15px rgba(0,0,0,0.2);
  z-index:1000;
}
header h1{
  font-family:'Playfair Display',serif;
  font-size:34px;
  letter-spacing:2px;
}
nav{margin-top:10px}
nav a{
  color:white;
  margin:0 15px;
  text-decoration:none;
  font-size:15px;
  position:relative;
}
nav a::after{
  content:'';
  width:0%;
  height:2px;
  background:#fff;
  position:absolute;
  bottom:-5px;
  left:0;
  transition:.3s;
}
nav a:hover::after{width:100%}

/* LAYOUT */
.container{max-width:1200px;margin:auto;padding:160px 20px 60px}
section{margin-bottom:100px;opacity:0;transform:translateY(40px);transition:1s}
section.show{opacity:1;transform:none}

/* HERO */
.hero{
  background:url('https://images.unsplash.com/photo-1520975922284-8b456906c813?auto=format&fit=crop&w=1400&q=80') center/cover;
  padding:160px 30px;
  border-radius:12px;
  text-align:center;
  color:white;
  box-shadow:0 10px 40px rgba(10,42,102,0.4);
}
.hero h2{
  font-size:48px;
  font-family:'Playfair Display',serif;
}
.hero p{max-width:650px;margin:20px auto}
.btn{
  background:white;
  color:#0a2a66;
  border:none;
  padding:12px 28px;
  border-radius:30px;
  font-weight:500;
  cursor:pointer;
  transition:.3s;
}
.btn:hover{background:#e6ecff;transform:scale(1.05)}

/* GRID */
.grid{
  display:grid;
  grid-template-columns:repeat(auto-fit,minmax(260px,1fr));
  gap:30px;
}
.card{
  background:white;
  border-radius:12px;
  overflow:hidden;
  box-shadow:0 6px 20px rgba(0,0,0,0.08);
  transition:.4s;
}
.card:hover{transform:translateY(-8px)}
.card img{width:100%;height:260px;object-fit:cover}
.card-content{padding:18px;text-align:center}

/* CONTENT BOX */
.box{
  background:white;
  padding:40px;
  border-radius:12px;
  box-shadow:0 6px 20px rgba(0,0,0,0.05);
  line-height:1.8;
}

/* FOOTER */
footer{
  background:#0a2a66;
  color:white;
  padding:60px 20px;
}
.footer-grid{
  display:grid;
  grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
  gap:40px;
}
footer h3{margin-bottom:15px}
footer a{color:#c9d8ff;text-decoration:none;display:block;margin-bottom:8px}
footer a:hover{color:white}
</style>

<script>
function go(id){document.getElementById(id).scrollIntoView({behavior:'smooth'})}
window.addEventListener('scroll',()=>{
  document.querySelectorAll("section").forEach(sec=>{
    if(sec.getBoundingClientRect().top < window.innerHeight-80){
      sec.classList.add("show")
    }
  })
})
</script>
</head>
<body>

<header>
  <h1>Tangopuff</h1>
  <nav>
    <a onclick="go('home')">Home</a>
    <a onclick="go('shop')">Shop</a>
    <a onclick="go('about')">About</a>
    <a onclick="go('trends')">Trends</a>
    <a onclick="go('contact')">Contact</a>
  </nav>
</header>

<div class="container">

<section id="home" class="hero">
  <h2>Elegance in Every Step</h2>
  <p>Discover timeless women's fashion crafted to celebrate confidence, comfort, and modern elegance. Tangopuff blends luxury style with everyday wearability.</p>
  <button class="btn" onclick="go('shop')">Shop Collection</button>
</section>

<section id="shop">
  <h2 style="text-align:center;margin-bottom:30px;color:#0a2a66;">Featured Collection</h2>
  <div class="grid">
    <div class="card"><img src="https://images.unsplash.com/photo-1495121605193-b116b5b09a67?auto=format&fit=crop&w=800&q=80"><div class="card-content"><h3>Evening Dress</h3><p>$79</p></div></div>
    <div class="card"><img src="https://images.unsplash.com/photo-1521572163474-6864f9cf17ab?auto=format&fit=crop&w=800&q=80"><div class="card-content"><h3>Casual Chic</h3><p>$49</p></div></div>
    <div class="card"><img src="https://images.unsplash.com/photo-1503342217505-b0a15cf70489?auto=format&fit=crop&w=800&q=80"><div class="card-content"><h3>Summer Style</h3><p>$59</p></div></div>
    <div class="card"><img src="https://images.unsplash.com/photo-1485968579580-b6d095142e6e?auto=format&fit=crop&w=800&q=80"><div class="card-content"><h3>Classic Blazer</h3><p>$89</p></div></div>
  </div>
</section>

<section id="about">
  <h2 style="color:#0a2a66;margin-bottom:20px;">About Tangopuff</h2>
  <div class="box">
    Tangopuff is a women’s fashion brand built on the idea that style should feel empowering and effortless. Our collections are inspired by modern silhouettes, soft fabrics, and versatile designs that move with you from day to night.  
    <br><br>
    We focus on quality tailoring and elegant details that make each outfit feel special. From flowy dresses to smart everyday wear, Tangopuff celebrates individuality, confidence, and timeless beauty.
  </div>
</section>

<section id="trends">
  <h2 style="color:#0a2a66;margin-bottom:20px;">Latest Fashion Trends</h2>
  <div class="box">
    This season highlights soft pastels, structured blazers, and relaxed silhouettes. Layering lightweight fabrics adds dimension while maintaining comfort. Accessories are bold yet refined — statement earrings, sleek handbags, and minimalist heels complete the look.
  </div>
</section>

<section id="contact">
  <h2 style="color:#0a2a66;margin-bottom:20px;">Get in Touch</h2>
  <div class="box">
    Email: support@tangopuff.com<br>
    Phone: +1 800 555 7890<br>
    Address: Fashion Avenue, Style City
  </div>
</section>

</div>

<footer>
  <div class="footer-grid">
    <div>
      <h3>Tangopuff</h3>
      <p>Luxury women's fashion designed for confidence and elegance.</p>
    </div>
    <div>
      <h3>Shop</h3>
      <a href="#">Dresses</a>
      <a href="#">Tops</a>
      <a href="#">Outerwear</a>
      <a href="#">Accessories</a>
    </div>
    <div>
      <h3>Help</h3>
      <a href="#">Contact</a>
      <a href="#">Returns</a>
      <a href="#">Privacy Policy</a>
      <a href="#">Terms</a>
    </div>
  </div>
  <p style="text-align:center;margin-top:40px;">© <?php echo date("Y"); ?> Tangopuff. All rights reserved.</p>
</footer>

</body>
</html>
