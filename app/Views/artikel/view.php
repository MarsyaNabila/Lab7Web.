<?= $this->extend('layout/main'); ?>

<?= $this->section('content'); ?>
<style>
    /* Container Utama dengan gaya Glass-Card */
    .article-reader-container {
        background: #ffffff;
        padding: 50px;
        border-radius: 30px;
        border: 1px solid #fce4ec;
        box-shadow: 0 15px 45px rgba(173, 20, 87, 0.05);
        position: relative;
    }

    .article-header h1 {
        font-family: 'Georgia', serif;
        color: #2d3436;
        font-size: 42px; /* Lebih besar untuk kesan headline */
        line-height: 1.2;
        margin-bottom: 25px;
        font-weight: 800;
        text-transform: uppercase; /* Gaya portal berita */
        letter-spacing: -1px;
    }

    .status-badge {
        display: inline-block;
        padding: 6px 15px;
        border-radius: 50px;
        font-size: 12px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 1px;
        background: <?= ($artikel['status'] ?? 0) == 1 ? '#fff0f5' : '#f1f2f6'; ?>;
        color: <?= ($artikel['status'] ?? 0) == 1 ? '#ad1457' : '#596275'; ?>;
        border: 1px solid <?= ($artikel['status'] ?? 0) == 1 ? '#f8bbd0' : '#d2dae2'; ?>;
    }

    .article-meta-info {
        display: flex;
        flex-wrap: wrap;
        gap: 25px;
        padding: 25px 0;
        border-top: 1px solid #fce4ec;
        border-bottom: 1px solid #fce4ec;
        margin-bottom: 40px;
        font-size: 14px;
        color: #636e72;
    }

    .meta-item {
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .meta-item b {
        color: #ad1457;
    }

    .main-image-wrapper {
        margin-bottom: 45px;
        border-radius: 25px;
        overflow: hidden;
        box-shadow: 0 20px 40px rgba(0,0,0,0.12);
    }

    .article-body-text {
        font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
        line-height: 2;
        font-size: 19px;
        color: #2d3436;
        text-align: justify;
    }

    /* Efek Drop Cap yang lebih elegan */
    .article-body-text::first-letter {
        float: left;
        font-size: 75px;
        line-height: 60px;
        padding-top: 4px;
        padding-right: 12px;
        padding-left: 3px;
        font-weight: bold;
        color: #ad1457;
        font-family: 'Georgia', serif;
    }

    .back-nav {
        margin-top: 60px;
        padding-top: 30px;
        border-top: 2px dashed #fce4ec;
    }

    .btn-return {
        text-decoration: none;
        color: #ad1457;
        font-weight: 700;
        display: inline-flex;
        align-items: center;
        gap: 10px;
        padding: 14px 28px;
        background: #fff0f5;
        border-radius: 15px;
        transition: all 0.3s ease;
    }

    .btn-return:hover {
        background: #ad1457;
        color: #fff;
        transform: translateX(-8px);
        box-shadow: 0 10px 20px rgba(173, 20, 87, 0.15);
    }
</style>

<article class="article-reader-container">
    
    <div class="article-header">
        <div style="margin-bottom: 15px;">
            <span class="status-badge">
                <?= ($artikel['status'] ?? 0) == 1 ? '✨ Published' : '📝 Draft Mode'; ?>
            </span>
        </div>
        <h1><?= $artikel['judul']; ?></h1>
    </div>

    <div class="article-meta-info">
        <div class="meta-item">
            <span>📅</span> <b><?= date('d F Y', strtotime($artikel['created_at'] ?? 'now')); ?></b>
        </div>
        <div class="meta-item">
            <span>👤</span> Tulisan oleh <b>Marsya Nabila Putri</b>
        </div>
        <div class="meta-item">
            <span>⏱️</span> 5 Menit Baca
        </div>
    </div>
    
    <?php if (!empty($artikel['gambar'])): ?>
        <div class="main-image-wrapper">
            <img src="<?= base_url('uploads/' . $artikel['gambar']); ?>" 
                 alt="<?= $artikel['judul']; ?>" 
                 style="width: 100%; height: auto; max-height: 600px; object-fit: cover; display: block;">
        </div>
    <?php else: ?>
        <div class="main-image-wrapper">
            <img src="https://images.unsplash.com/photo-1550751827-4bd374c3f58b?auto=format&fit=crop&w=1200&q=80" 
                 alt="AI Technology Default" 
                 style="width: 100%; height: auto; display: block;">
        </div>
    <?php endif; ?>

    <div class="article-body-text">
        <?= nl2br($artikel['isi']); ?>
    </div>

    <div class="back-nav">
        <a href="<?= base_url('/artikel'); ?>" class="btn-return">
            &larr; Kembali ke Galeri Wawasan
        </a>
    </div>
</article>
<?= $this->endSection(); ?>