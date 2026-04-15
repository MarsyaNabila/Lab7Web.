<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $title; ?></title>
    <link rel="stylesheet" href="<?= base_url('/style.css');?>">
    <style>
        /* Efek Navigasi Modern */
        nav a {
            transition: all 0.3s ease;
            position: relative;
        }
        nav a:hover {
            color: #fce4ec !important;
            transform: translateY(-2px);
        }
        /* Style Sidebar agar lebih rapi */
        #sidebar {
            border-radius: 20px;
            border: 1px solid #fce4ec !important;
            background: #ffffff !important;
            box-shadow: 0 5px 15px rgba(173, 20, 87, 0.03);
        }
        /* Custom scrollbar untuk kesan teknologi */
        ::-webkit-scrollbar {
            width: 8px;
        }
        ::-webkit-scrollbar-thumb {
            background: #f06292;
            border-radius: 10px;
        }
    </style>
</head>
<body style="background-color: #fdf2f7; font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; margin: 0; padding: 0;">
    <div id="container" style="max-width: 1200px; margin: 20px auto; background: white; border-radius: 25px; overflow: hidden; box-shadow: 0 15px 35px rgba(173, 20, 87, 0.1);">
        
        <header style="background: linear-gradient(135deg, #ad1457, #e91e63); color: white; padding: 40px 30px; border-bottom: 5px solid #880e4f;">
            <h1 style="margin: 0; font-size: 2.8rem; letter-spacing: -1.5px; font-weight: 800; text-shadow: 2px 2px 4px rgba(0,0,0,0.2);">
                Portal Berita Marsya
            </h1>
            <p style="margin: 5px 0 0; opacity: 0.8; font-weight: 300;">Informasi Terkini Seputar Dunia Teknologi & Informatika</p>
        </header>
        
        <nav style="background-color: #2d3436; padding: 15px 30px; display: flex; align-items: center; border-bottom: 1px solid #fce4ec;">
            <a href="<?= base_url('/'); ?>" style="color: white; margin-right: 25px; text-decoration: none; font-weight: 600; font-size: 15px;">Home</a>
            <a href="<?= base_url('/artikel'); ?>" style="color: white; margin-right: 25px; text-decoration: none; font-weight: 600; font-size: 15px;">Artikel</a>
            <a href="<?= base_url('/about'); ?>" style="color: white; margin-right: 25px; text-decoration: none; font-weight: 600; font-size: 15px;">About</a>
            <a href="<?= base_url('/contact'); ?>" style="color: white; margin-right: 25px; text-decoration: none; font-weight: 600; font-size: 15px;">Kontak</a>
            
            <?php if (session()->get('logged_in')): ?>
                <a href="<?= base_url('/admin/artikel'); ?>" style="color: #f06292; margin-right: 25px; text-decoration: none; font-weight: bold; border: 2px solid #f06292; padding: 5px 15px; border-radius: 10px;">Dashboard</a>
                <a href="<?= base_url('/user/logout'); ?>" style="color: #ff7675; margin-left: auto; text-decoration: none; font-weight: bold; font-size: 14px;">Logout</a>
            <?php else: ?>
                <a href="<?= base_url('/user/login'); ?>" style="color: #fce4ec; margin-left: auto; text-decoration: none; font-weight: bold; font-size: 14px;">Login</a>
            <?php endif; ?>
        </nav>

        <section id="wrapper" style="display: flex; gap: 30px; padding: 40px; min-height: 550px;">
            <section id="main" style="flex: 3;">
                <?= $this->renderSection('content'); ?>
            </section>

            <aside id="sidebar" style="flex: 1; padding: 25px; min-width: 280px; align-self: flex-start;">
                <h3 style="color: #ad1457; border-bottom: 3px solid #fce4ec; padding-bottom: 12px; margin-top: 0; font-family: 'Georgia', serif;">Wawasan Terbaru</h3>
                <div style="margin-top: 20px;">
                    <?= view_cell('App\Cells\ArtikelTerkini::render'); ?>
                </div>
            </aside>
        </section>

        <footer style="text-align: center; padding: 35px; border-top: 1px solid #fce4ec; background: #fffcfd; color: #ad1457;">
            <p style="margin: 0; font-weight: 600; letter-spacing: 0.5px;">&copy; 2026 — Marsya Nabila Putri 312410338</p>
        </footer>
    </div>
</body>
</html>