<?php
// index.php
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Bima Gumilang | Web Developer</title>

<!-- Bootstrap 5 -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Google Font -->
<link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;700&display=swap" rel="stylesheet">

<style>

:root{
    --dark:#0d0d0d;
    --card:#161616;
    --text:#ffffff;
    --accent:#00d4ff;
}

html{
    scroll-behavior:smooth;
}

body{
    background:var(--dark);
    color:var(--text);
    font-family:'Space Grotesk',sans-serif;
}

/* Navbar */
.navbar{
    background:rgba(0,0,0,.8);
    backdrop-filter:blur(10px);
}

.navbar-brand,
.nav-link{
    color:white !important;
}

/* Hero */
.hero{
    min-height:100vh;
    display:flex;
    align-items:center;
}

.hero h1{
    font-size:clamp(4rem,10vw,8rem);
    font-weight:700;
    line-height:0.9;
}

.hero p{
    font-size:1.3rem;
    color:#cfcfcf;
}

.btn-custom{
    background:var(--accent);
    border:none;
    color:black;
    font-weight:700;
    padding:12px 28px;
}

.btn-custom:hover{
    transform:translateY(-3px);
}

/* Section */
section{
    padding:120px 0;
}

.section-title{
    font-size:3rem;
    font-weight:700;
    margin-bottom:40px;
}

/* Skills */
.skill-box{
    margin-bottom:20px;
}

.progress{
    height:12px;
    background:#222;
}

.progress-bar{
    background:var(--accent);
}

/* Portfolio */
.project-card{
    background:var(--card);
    border-radius:20px;
    overflow:hidden;
    transition:.4s;
    height:100%;
}

.project-card:hover{
    transform:translateY(-10px);
}

.project-card img{
    width:100%;
    height:250px;
    object-fit:cover;
}

.project-content{
    padding:25px;
}

/* Contact */
.contact-box{
    background:var(--card);
    padding:40px;
    border-radius:20px;
}

/* Footer */
footer{
    padding:50px 0;
    border-top:1px solid #222;
    text-align:center;
}

/* Scroll Animation */
.fade-up{
    opacity:0;
    transform:translateY(40px);
    transition:.8s;
}

.fade-up.show{
    opacity:1;
    transform:translateY(0);
}

</style>
</head>

<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg fixed-top">
<div class="container">

<a class="navbar-brand fw-bold" href="#">
Bima Gumilang
</a>

<button class="navbar-toggler bg-light"
data-bs-toggle="collapse"
data-bs-target="#menu">
</button>

<div class="collapse navbar-collapse" id="menu">

<ul class="navbar-nav ms-auto">

<li class="nav-item">
<a class="nav-link" href="#about">About</a>
</li>

<li class="nav-item">
<a class="nav-link" href="#skills">Skills</a>
</li>

<li class="nav-item">
<a class="nav-link" href="#portfolio">Portfolio</a>
</li>

<li class="nav-item">
<a class="nav-link" href="#contact">Contact</a>
</li>

</ul>

</div>

</div>
</nav>

<!-- HERO -->
<section class="hero">

<div class="container">

<div class="row align-items-center">

<div class="col-lg-8">

<p class="text-uppercase text-secondary">
Mahasiswa • Web Developer
</p>

<h1>
BIMA
<br>
GUMILANG
</h1>

<p class="mt-4 mb-4">
Saya membangun website modern,
responsif, dan mudah digunakan
dengan fokus pada pengalaman pengguna.
</p>

<a href="#portfolio"
class="btn btn-custom me-3">
Lihat Project
</a>

<a href="#contact"
class="btn btn-outline-light">
Hubungi Saya
</a>

</div>

</div>

</div>

</section>

<!-- ABOUT -->
<section id="about">

<div class="container fade-up">

<h2 class="section-title">
Tentang Saya
</h2>

<div class="row">

<div class="col-lg-8">

<p class="fs-5 text-secondary">
Halo, saya Bima Gumilang.
Seorang mahasiswa yang memiliki minat besar
dalam dunia teknologi dan pengembangan website.

Saya senang membangun aplikasi web,
mempelajari teknologi baru,
dan terus meningkatkan kemampuan saya
sebagai Web Developer.
</p>

</div>

</div>

</div>

</section>

<!-- SKILLS -->
<section id="skills">

<div class="container fade-up">

<h2 class="section-title">
Skills
</h2>

<div class="skill-box">
PHP
<div class="progress mt-2">
<div class="progress-bar" style="width:60%"></div>
</div>
</div>

<div class="skill-box">
MySQL
<div class="progress mt-2">
<div class="progress-bar" style="width:60%"></div>
</div>
</div>

<div class="skill-box">
HTML / CSS
<div class="progress mt-2">
<div class="progress-bar" style="width:70%"></div>
</div>
</div>

<div class="skill-box">
JavaScript
<div class="progress mt-2">
<div class="progress-bar" style="width:50%"></div>
</div>
</div>

<div class="skill-box">
Sepak Bola
<div class="progress mt-2">
<div class="progress-bar" style="width:95%"></div>
</div>
</div>

</div>

</section>

<!-- PORTFOLIO -->
<section id="portfolio">

<div class="container fade-up">

<h2 class="section-title">
Featured Projects
</h2>

<div class="row g-4">

<div class="col-lg-4">

<div class="project-card">

<img src="assets/images/project1.jpeg">

<div class="project-content">

<h4>Futsal Player</h4>

<p class="text-secondary">
Bermain sepak bola dengan teman.
</p>

<a href="#" class="btn btn-custom">
Demo
</a>

</div>

</div>

</div>

<div class="col-lg-4">

<div class="project-card">

<img src="assets/images/project2.jpeg">

<div class="project-content">

<h4>Mahasiswa U-Code</h4>

<p class="text-secondary">
Mahasiswa yang aktif dan kreatif.
</p>

<a href="#" class="btn btn-custom">
Demo
</a>

</div>

</div>

</div>

<div class="col-lg-4">

<div class="project-card">

<img src="assets/images/project3.jpeg">

<div class="project-content">

<h4>Anggota Himpunan</h4>

<p class="text-secondary">
Rutin mengikuti kegiatan himpunan.
</p>

<a href="#" class="btn btn-custom">
Demo
</a>

</div>

</div>

</div>

</div>

</div>

</section>

<!-- CONTACT -->
<section id="contact">

<div class="container fade-up">

<div class="contact-box">

<h2 class="section-title">
Let's Work Together
</h2>

<p class="text-secondary mb-4">
Punya proyek atau ingin berkolaborasi?
Silakan kirim pesan kepada saya.
</p>

<form action="contact-process.php" method="POST">

<div class="mb-3">
<input type="text"
name="name"
class="form-control"
placeholder="Nama"
required>
</div>

<div class="mb-3">
<input type="email"
name="email"
class="form-control"
placeholder="Email"
required>
</div>

<div class="mb-3">
<textarea
name="message"
rows="5"
class="form-control"
placeholder="Pesan"
required></textarea>
</div>

<button class="btn btn-custom">
Kirim Pesan
</button>

</form>

</div>

</div>

</section>

<!-- FOOTER -->
<footer>

<div class="container">

<h5>Bima Gumilang</h5>

<p class="text-secondary">
Mahasiswa • Web Developer
</p>

<p>
Instagram • Facebook • GitHub
</p>

<p class="text-secondary">
© <?php echo date('Y'); ?> Bima Gumilang
</p>

</div>

</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
const observer = new IntersectionObserver(entries=>{
entries.forEach(entry=>{
if(entry.isIntersecting){
entry.target.classList.add('show');
}
});
});

document.querySelectorAll('.fade-up').forEach(el=>{
observer.observe(el);
});
</script>

</body>
</html>