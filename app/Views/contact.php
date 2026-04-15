<?= $this->extend('layout/main'); ?>

<?= $this->section('content'); ?>
<style>
    .contact-container {
        background: #ffffff;
        padding: 50px;
        border-radius: 30px;
        border: 1px solid #fce4ec;
        box-shadow: 0 20px 50px rgba(173, 20, 87, 0.05);
    }

    .contact-header {
        text-align: center;
        margin-bottom: 50px;
    }

    .contact-header h2 {
        font-family: 'Georgia', serif;
        color: #880e4f;
        font-size: 38px;
        margin-bottom: 15px;
        font-weight: 800;
    }

    .contact-header p {
        color: #636e72;
        font-size: 17px;
        max-width: 600px;
        margin: 0 auto;
        line-height: 1.6;
    }

    .info-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 25px;
        margin-bottom: 50px;
    }

    .info-item {
        padding: 30px;
        background: #fff9fb;
        border-radius: 20px;
        border: 1px solid #f8bbd0;
        text-align: center;
        transition: 0.3s;
    }

    .info-item:hover {
        transform: translateY(-5px);
        background: #ad1457;
        color: white !important;
    }

    .info-item h4 {
        margin: 0 0 10px 0;
        color: #ad1457;
        font-size: 20px;
    }

    .info-item:hover h4, .info-item:hover p {
        color: white;
    }

    .info-item p {
        margin: 0;
        font-size: 15px;
        color: #636e72;
    }

    /* Form Styling */
    .form-section {
        background: #ffffff;
        padding: 40px;
        border-radius: 25px;
        border: 1px solid #fce4ec;
        box-shadow: 0 10px 30px rgba(0,0,0,0.02);
    }

    .input-group {
        margin-bottom: 20px;
    }

    .input-group input, .input-group textarea {
        width: 100%;
        padding: 15px 20px;
        border: 1px solid #fce4ec;
        border-radius: 12px;
        background: #fffcfd;
        font-size: 15px;
        outline: none;
        transition: 0.3s;
        box-sizing: border-box; /* Agar padding tidak merusak lebar */
    }

    .input-group input:focus, .input-group textarea:focus {
        border-color: #f06292;
        box-shadow: 0 0 10px rgba(240, 98, 146, 0.1);
        background: #fff;
    }

    .btn-send {
        background: linear-gradient(to right, #ad1457, #e91e63);
        color: white;
        padding: 16px 40px;
        border: none;
        border-radius: 12px;
        cursor: pointer;
        font-weight: bold;
        font-size: 16px;
        width: 100%;
        transition: 0.4s;
        box-shadow: 0 10px 20px rgba(173, 20, 87, 0.2);
    }

    .btn-send:hover {
        transform: scale(1.02);
        box-shadow: 0 15px 25px rgba(173, 20, 87, 0.3);
    }
</style>

<div class="contact-container">
    <div class="contact-header">
        <h2>Mari Berkolaborasi</h2>
        <p>Punya pertanyaan, ide proyek, atau sekadar ingin menyapa? **Media Marsya** selalu terbuka untuk diskusi yang menginspirasi.</p>
    </div>

    <div class="info-grid">
        <div class="info-item">
            <h4>📍 Lokasi</h4>
            <p>Bekasi, West Java<br>Indonesia</p>
        </div>
        <div class="info-item">
            <h4>✉️ Digital Mail</h4>
            <p>hello@marsyamedia.id<br>Instagram: @marsya_digital</p>
        </div>
    </div>

    <div class="form-section">
        <h3 style="color: #880e4f; margin-bottom: 25px; text-align: center;">Kirim Pesan Langsung</h3>
        <form>
            <div class="input-group">
                <input type="text" placeholder="Nama Lengkap">
            </div>
            <div class="input-group">
                <input type="email" placeholder="Alamat Email">
            </div>
            <div class="input-group">
                <textarea placeholder="Ceritakan apa yang bisa kami bantu..." rows="6"></textarea>
            </div>
            <button type="button" class="btn-send">
                Kirim Pesan Ke Marsya &hearts;
            </button>
        </form>
    </div>
</div>
<?= $this->endSection(); ?>