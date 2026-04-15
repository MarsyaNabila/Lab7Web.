<?= $this->extend('layout/main'); ?>

<?= $this->section('content'); ?>

<style>
    /* Styling khusus untuk Pagination agar berwarna Pink Marsya */
    .pagination li a {
        color: #ad1457;
        padding: 8px 12px;
        text-decoration: none;
        border: 1px solid #fce4ec;
        margin: 0 3px;
        border-radius: 5px;
    }
    .pagination li.active a {
        background-color: #ad1457;
        color: white;
        border-color: #ad1457;
    }
    .pagination {
        display: flex;
        list-style: none;
        padding: 0;
        justify-content: center;
    }
</style>

<div class="content-admin">
    <h2 style="margin-top: 0; border-bottom: 2px solid #ad1457; padding-bottom: 10px; color: #ad1457;">Daftar Artikel</h2>
    
    <div style="margin-bottom: 15px; display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 10px;">
        <form action="" method="get" style="display: flex; gap: 5px;">
            <input type="text" name="cari" placeholder="Cari judul artikel..." value="<?= esc($cari ?? '') ?>" 
                   style="padding: 8px; border: 1px solid #f8bbd0; border-radius: 4px; width: 250px;">
            <button type="submit" style="background-color: #ad1457; color: white; border: none; padding: 8px 15px; border-radius: 4px; cursor: pointer; font-weight: bold;">Cari</button>
            <?php if(!empty($cari)): ?>
                <a href="<?= base_url('/admin/artikel'); ?>" style="text-decoration: none; font-size: 13px; align-self: center; color: #666;">Reset</a>
            <?php endif; ?>
        </form>

        <a href="<?= base_url('/admin/artikel/add'); ?>" class="btn btn-primary" 
           style="background-color: #ad1457; color: white; padding: 10px 20px; text-decoration: none; border-radius: 8px; font-weight: bold; box-shadow: 0 4px 10px rgba(173, 20, 87, 0.2);">+ Tambah Artikel</a>
    </div>

    <table border="1" cellspacing="0" cellpadding="10" style="width: 100%; border-collapse: collapse; background-color: white; border: 1px solid #fce4ec; border-radius: 10px; overflow: hidden;">
        <thead>
            <tr style="background-color: #fff0f5; color: #ad1457;">
                <th width="50">ID</th>
                <th>Judul Artikel</th>
                <th width="100">Status</th>
                <th width="150">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php if($artikel): foreach($artikel as $row): ?>
            <tr style="border-bottom: 1px solid #fce4ec;">
                <td style="text-align: center; color: #880e4f; font-weight: bold;"><?= $row['id']; ?></td>
                <td>
                    <strong style="color: #333;"><?= $row['judul']; ?></strong>
                    <p style="margin: 5px 0 0 0; font-size: 12px; color: #777;"><?= substr($row['isi'], 0, 80); ?>...</p>
                </td>
                <td style="text-align: center;">
                    <span style="padding: 4px 10px; border-radius: 20px; font-size: 11px; font-weight: bold; background-color: <?= $row['status'] == 1 ? '#d4edda' : '#fff3cd'; ?>; color: <?= $row['status'] == 1 ? '#155724' : '#856404'; ?>;">
                        <?= $row['status'] == 1 ? 'Published' : 'Draft'; ?>
                    </span>
                </td>
                <td style="text-align: center;">
                    <a href="<?= base_url('/admin/artikel/edit/' . $row['id']);?>" style="color: #ad1457; text-decoration: none; font-weight: bold; font-size: 14px;">Ubah</a>
                    <span style="color: #ddd;"> | </span> 
                    <a onclick="return confirm('Yakin hapus data?')" href="<?= base_url('/admin/artikel/delete/' . $row['id']);?>" style="color: #dc3545; text-decoration: none; font-weight: bold; font-size: 14px;">Hapus</a>
                </td>
            </tr>
            <?php endforeach; else: ?>
            <tr>
                <td colspan="4" style="text-align: center; padding: 40px; color: #999;">
                    <p>Tidak ada artikel yang ditemukan dengan judul tersebut.</p>
                </td>
            </tr>
            <?php endif; ?>
        </tbody>
    </table>

    <div style="margin-top: 25px;">
        <?= $pager->links('artikel', 'default_full') ?>
    </div>
</div>

<?= $this->endSection(); ?>