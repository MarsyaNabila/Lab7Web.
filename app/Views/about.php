<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>

<style>
    .page-wrapper {
        background: #ffffff;
        border-radius: 40px; 
        padding: 80px 50px;
        border: 1px solid #fce4ec;
        box-shadow: 0 20px 60px rgba(173, 20, 87, 0.05);
        position: relative;
        overflow: hidden;
    }

    .page-wrapper::before {
        content: '';
        position: absolute;
        top: -100px;
        left: -100px;
        width: 300px;
        height: 300px;
        background: radial-gradient(circle, rgba(255,192,203,0.3) 0%, rgba(255,255,255,0) 70%);
        z-index: 0;
    }

    .page-wrapper::after {
        content: '🌸';
        position: absolute;
        bottom: 20px;
        right: 30px;
        font-size: 80px;
        opacity: 0.05;
        z-index: 0;
    }

    .page-content {
        position: relative;
        z-index: 1;
        max-width: 850px;
        margin: 0 auto;
        text-align: center;
    }

    .page-header {
        font-family: 'Georgia', serif;
        font-size: 46px;
        color: #880e4f; 
        margin-bottom: 40px;
        position: relative;
        display: inline-block;
        font-weight: 800;
        letter-spacing: -1px;
    }

    .page-header::after {
        content: '';
        display: block;
        width: 60px;
        height: 4px;
        background: linear-gradient(to right, #e91e63, #f06292);
        margin: 15px auto 0;
        border-radius: 20px;
    }

    .text-body {
        font-size: 19px;
        line-height: 2.2;
        color: #57606f;
        font-weight: 400;
    }

    .highlight-text {
        color: #ad1457;
        font-weight: 600;
    }

    .info-container {
        margin-top: 50px;
        display: flex;
        justify-content: center;
        gap: 30px;
        flex-wrap: wrap;
    }

    .info-box {
        background: #fff0f5;
        padding: 20px 30px;
        border-radius: 20px;
        color: #ad1457;
        font-weight: 600;
        font-size: 15px;
        border: 1px solid #f8bbd0;
        transition: 0.3s;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .info-box:hover {
        transform: translateY(-5px);
        background: #ad1457;
        color: #fff;
    }
</style>

<div class="page-wrapper">
    <div class="page-content">
        <h1 class="page-header">
            Filosofi Portal Marsya
        </h1>

        <div class="text-body">
            <p>
                <span class="highlight-text">Portal Berita Marsya</span> adalah platform informasi digital yang didedikasikan untuk menyampaikan kabar terkini seputar dunia teknologi, pemrograman, dan aktivitas akademik di lingkungan <span class="highlight-text">Informatika Engineering</span>.
            </p>
            <p>
                Kami berkomitmen untuk menyajikan konten yang edukatif, akurat, dan inspiratif bagi para mahasiswa dan pengembang web di Indonesia. Melalui narasi yang cerdas, kami berharap dapat membantu Anda menjelajahi cakrawala teknologi dengan lebih mudah dan menyenangkan.
            </p>
        </div>

        <div class="info-container">
            <div class="info-box">
                <span>📍</span> Bekasi, Jawa Barat
            </div>
            <div class="info-box">
                <span>✉️</span> editorial@marsyamedia.id
            </div>
            <div class="info-box">
                <span>✨</span> @Marsya_digital
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>