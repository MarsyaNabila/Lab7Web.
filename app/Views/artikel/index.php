<?= $this->extend('layout/main'); ?>

<?= $this->section('content'); ?>
<style>
    .section-title {
        font-family: 'Georgia', serif;
        border-left: 6px solid #ad1457;
        padding-left: 15px;
        margin-bottom: 35px;
        color: #2d3436;
        font-size: 28px;
    }

    .article-card {
        background: #fff;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(173, 20, 87, 0.05);
        border: 1px solid #fce4ec;
        display: flex;
        flex-direction: column;
        transition: all 0.4s ease;
        height: 100%;
    }

    .article-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 35px rgba(173, 20, 87, 0.15);
        border-color: #f06292;
    }

    .img-container {
        width: 100%;
        height: 200px;
        background: #fff0f5;
        position: relative;
        overflow: hidden;
    }

    .category-badge {
        position: absolute;
        top: 15px;
        left: 15px;
        background: rgba(173, 20, 87, 0.85);
        color: white;
        padding: 5px 15px;
        border-radius: 50px;
        font-size: 11px;
        text-transform: uppercase;
        backdrop-filter: blur(5px);
    }

    .article-link {
        text-decoration: none;
        color: #2d3436;
        transition: 0.3s;
        font-weight: 700;
    }

    .article-link:hover {
        color: #e91e63;
    }

    .read-more-btn {
        background: #fce4ec;
        color: #ad1457;
        padding: 8px 18px;
        border-radius: 10px;
        text-decoration: none;
        font-weight: 600;
        font-size: 13px;
        transition: 0.3s;
    }

    .read-more-btn:hover {
        background: #ad1457;
        color: #fff;
    }

    /* Styling Pagination supaya serasi */
    .pagination-container ul {
        display: inline-flex;
        list-style: none;
        gap: 10px;
    }
    .pagination-container a {
        padding: 8px 15px;
        background: #fff;
        border: 1px solid #fce4ec;
        color: #ad1457;
        text-decoration: none;
        border-radius: 8px;
    }
</style>

<div class="artikel-container">
    <h2 class="section-title">Koleksi Wawasan Terbaru</h2>

    <?php if(session()->getFlashdata('pesan')): ?>
        <div style="background: #fff0f5; color: #ad1457; padding: 15px; margin-bottom: 25px; border-radius: 12px; border: 1px solid #f8bbd0; font-weight: 500;">
            ✨ <?= session()->getFlashdata('pesan'); ?>
        </div>
    <?php endif; ?>

    <?php if($artikel): ?>
        <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(320px, 1fr)); gap: 30px;">
            <?php foreach($artikel as $row): ?>
                <article class="article-card">
                    
                    <div class="img-container">
                        <span class="category-badge">Update</span>
                        <?php if(!empty($row['gambar'])): ?>
                            <img src="<?= base_url('uploads/' . $row['gambar']); ?>" alt="<?= $row['judul']; ?>" style="width: 100%; height: 100%; object-fit: cover;">
                        <?php else: ?>
                            <div style="display: flex; align-items: center; justify-content: center; height: 100%; flex-direction: column; color: #f06292;">
                                <span style="font-size: 45px;">🌸</span>
                                <small style="margin-top: 10px; opacity: 0.6;">Marsya Media</small>
                            </div>
                        <?php endif; ?>
                    </div>

                    <div style="padding: 25px; flex-grow: 1;">
                        <h3 style="margin: 0 0 15px 0; font-size: 20px; line-height: 1.4;">
                            <a href="<?= base_url('/artikel/' . $row['slug']); ?>" class="article-link">
                                <?= $row['judul']; ?>
                            </a>
                        </h3>
                        <p style="color: #636e72; font-size: 14.5px; line-height: 1.8; margin-bottom: 0;">
                            <?= substr(strip_tags($row['isi']), 0, 90); ?>...
                        </p>
                    </div>

                    <div style="padding: 20px 25px; border-top: 1px dashed #fce4ec; display: flex; justify-content: space-between; align-items: center;">
                        <div style="display: flex; align-items: center; gap: 8px;">
                            <div style="width: 25px; height: 25px; background: #ad1457; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-size: 10px;">M</div>
                            <span style="font-size: 12px; color: #b2bec3; font-weight: 500;">Oleh: Marsya</span>
                        </div>
                        <a href="<?= base_url('/artikel/' . $row['slug']); ?>" class="read-more-btn">
                            Baca &rarr;
                        </a>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    <?php else: ?>
        <div style="text-align: center; padding: 80px 20px; background: #fff; border-radius: 30px; border: 2px dashed #fce4ec;">
            <span style="font-size: 60px; display: block; margin-bottom: 20px;">📖</span>
            <h3 style="color: #ad1457; font-family: 'Georgia', serif;">Ups! Belum Ada Cerita</h3>
            <p style="color: #636e72;">Kami sedang meramu informasi menarik untukmu. Tunggu sebentar ya!</p>
        </div>
    <?php endif; ?>
</div>

<?php if (isset($pager)): ?>
    <div style="margin-top: 50px; text-align: center;" class="pagination-container">
        <?= $pager->links('artikel', 'default_full'); ?>
    </div>
<?php endif; ?>

<?= $this->endSection(); ?>