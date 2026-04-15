<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>

<style>
    /* Menggunakan tema Rose Gold & Midnight yang lebih premium */
    .hero-container {
        position: relative;
        background: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.3)), url('https://images.unsplash.com/photo-1518770660439-4636190af475?auto=format&fit=crop&w=1200&q=80');
        background-size: cover;
        background-position: center;
        border-radius: 30px;
        padding: 100px 40px;
        margin-bottom: 50px;
        overflow: hidden;
        box-shadow: 0 20px 40px rgba(173, 20, 87, 0.2);
    }

    /* Efek Glassmorphism di tengah Hero */
    .hero-overlay {
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(15px);
        -webkit-backdrop-filter: blur(15px);
        border: 1px solid rgba(255, 255, 255, 0.2);
        padding: 50px;
        border-radius: 25px;
        max-width: 800px;
        margin: 0 auto;
        color: white;
        text-align: center;
    }

    .hero-overlay h1 {
        font-family: 'Georgia', serif;
        font-size: 52px;
        margin-bottom: 15px;
        font-weight: 800;
        text-shadow: 0 4px 10px rgba(0,0,0,0.3);
    }

    .btn-discover {
        background: #ad1457;
        color: #fff;
        padding: 16px 45px;
        text-decoration: none;
        border-radius: 15px;
        font-weight: 700;
        transition: all 0.4s ease;
        display: inline-block;
        border: none;
        box-shadow: 0 10px 20px rgba(173, 20, 87, 0.4);
    }

    .btn-discover:hover {
        background: #fff;
        color: #ad1457;
        transform: translateY(-5px);
        box-shadow: 0 15px 30px rgba(255,255,255,0.2);
    }

    .info-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 30px;
        margin-bottom: 50px;
    }

    .info-card {
        background: #fff;
        padding: 40px 30px;
        border-radius: 24px;
        border: 1px solid #fce4ec;
        transition: all 0.4s ease;
    }

    .info-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 25px 50px rgba(233, 30, 99, 0.1);
        border-color: #f06292;
    }

    .welcome-banner {
        background: #2d3436; 
        color: #fce4ec;
        padding: 60px;
        border-radius: 35px;
        position: relative;
        overflow: hidden;
        border: 1px solid #444;
    }

    .welcome-banner h2 {
        color: #f06292;
        font-size: 36px;
        margin-bottom: 25px;
        font-weight: 800;
    }

    .welcome-banner::after {
        content: '💻';
        position: absolute;
        right: -10px;
        bottom: -10px;
        font-size: 180px;
        opacity: 0.05;
    }
</style>

<div class="hero-container">
    <div class="hero-overlay">
        <h1>Portal Berita Marsya</h1>
        <p style="font-size: 22px; margin-bottom: 35px; font-weight: 300; line-height: 1.6;">
            Menyingkap masa depan melalui kurasi berita teknologi terpercaya dan wawasan mendalam dunia informatika.
        </p>
        <a href="<?= base_url('/artikel'); ?>" class="btn-discover">
            Eksplorasi Berita &rarr;
        </a>
    </div>
</div>

<div class="info-grid">
    <div class="info-card">
        <span style="font-size: 45px;">📡</span>
        <h3 style="color: #880e4f; margin: 15px 0; font-size: 24px;">Tech Update</h3>
        <p style="color: #636e72; line-height: 1.8;">Berita harian mengenai perkembangan AI, Gadget, dan infrastruktur digital global yang dikemas secara ringkas.</p>
    </div>
    <div class="info-card">
        <span style="font-size: 45px;">💻</span>
        <h3 style="color: #880e4f; margin: 15px 0; font-size: 24px;">Code News</h3>
        <p style="color: #636e72; line-height: 1.8;">Informasi terbaru dari dunia pemrograman, rilis framework, hingga tren software engineering masa kini.</p>
    </div>
    <div class="info-card">
        <span style="font-size: 45px;">🎓</span>
        <h3 style="color: #880e4f; margin: 15px 0; font-size: 24px;">IT Education</h3>
        <p style="color: #636e72; line-height: 1.8;">Berita seputar dunia kampus teknik, kompetisi IT, dan peluang riset bagi mahasiswa informatika.</p>
    </div>
</div>

<div class="welcome-banner">
    <h2>Evolusi Digital</h2>
    <div style="max-width: 850px; position: relative; z-index: 1;">
        <p style="line-height: 2; font-size: 18px; margin-bottom: 25px;">
            Selamat datang di <strong>Portal Berita Marsya</strong>. Kami hadir sebagai mercusuar informasi di tengah arus digital yang cepat, khusus bagi Anda pencari berita teknologi yang akurat dan inspiratif.
        </p>
        <p style="line-height: 2; font-size: 18px; opacity: 0.9;">
            Dari lab praktikum hingga tren industri global, kami merangkai setiap kejadian menjadi berita yang bernilai. Jadikan Media Marsya sebagai teman setia Anda dalam memantau cakrawala informatika.
        </p>
    </div>
</div>

<?= $this->endSection() ?>