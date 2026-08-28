<?php
include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Portfolio Saya</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- CSS Custom -->
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">"

</head>

<body>

<!-- ================= HEADER ================= -->
<header class="header">

    <div class="container">

        <div class="navbar-custom">

            <!-- Logo -->
            <div class="logo">
                <img src="img/sesillogo.png" alt="Logo Sesil">
            </div>

            <!-- Navigation -->
            <nav class="nav-menu">
                <a href="#home">Home</a>
                <a href="#services">Services</a>
                <a href="#about">About</a>
                <a href="#contact">Contact</a>
            </nav>

        </div>

    </div>

</header>

   <!-- ================= HERO ================= -->
<section id="home" class="hero">

    <!-- Dekorasi titik kiri -->
    <div class="dot-pattern dot-left"></div>

    <!-- Dekorasi titik kanan -->
    <div class="dot-pattern dot-right"></div>

    <div class="container">

        <div class="hero-content">

            <!-- ================= FOTO ================= -->
           <div class="hero-image">

                <img src="img/sesilhero.png"
                     alt="Foto Sesil">

            </div>


            <!-- ================= TEXT ================= -->
            <div class="hero-text">

                <h1>
                    Halo, Saya <span>Sesilia</span>
                </h1>

                <h2>
                    Mahasiswa Teknik Mekatronika
                </h2>

                <!-- Garis biru -->
                <div class="hero-line"></div>

                <p class="hero-description">
                   Saya sedang mengembangkan kemampuan dalam pemrograman,
                   otomasi, elektronika, dan sistem kontrol untuk menciptakan
        solusi teknologi yang kreatif dan bermanfaat.
                </p>

                <a href="#contact" class="btn-contact">
                    <span class="button-icon">➤</span>
                    Hubungi Saya
                </a>

            </div>

        </div>

    </div>

</section>


   
   <!-- ================= SKILLS ================= -->
<section id="services" class="services">

    <div class="container">

        <div class="skills-wrapper">

            <!-- ============================= -->
            <!-- BAGIAN KIRI : KEAHLIAN -->
            <!-- ============================= -->

            <div class="skills-info">

    <h2>Keahlian</h2>

    <p class="skills-description">
        Keahlian yang saya pelajari dan kembangkan
        dalam bidang teknik mekatronika.
    </p>

    <?php

    $query = mysqli_query($conn, "SELECT * FROM keahlian");

    while ($data = mysqli_fetch_assoc($query)) {

    ?>

        <div class="skill-item">

            <div class="skill-icon">
                <i class="bi <?php echo $data['icon']; ?>"></i>
            </div>

            <div class="skill-text">

                <h3>
                    <?php echo $data['nama']; ?>
                </h3>

                <p>
                    <?php echo $data['deskripsi']; ?>
                </p>

            </div>

        </div>

    <?php

    }

    ?>

</div>


            <!-- ============================= -->
            <!-- BAGIAN KANAN : GRAFIK -->
            <!-- ============================= -->

            <div class="skills-chart">

    <h3>Tingkat Penguasaan Keahlian</h3>

    <div class="chart-line"></div>

    <div class="chart" id="skillChart">

        <div class="chart-scale">
            <span>0</span>
            <span>20</span>
            <span>40</span>
            <span>60</span>
            <span>80</span>
            <span>100</span>
        </div>

        <p class="chart-axis">
            Presentase (%)
        </p>

    </div>

</div>

</section>
    <!-- ================= ABOUT ================= -->
  <section id="about" class="about">

    <div class="container">

        <!-- Judul -->
        <div class="school-title">
            <h2>Riwayat Sekolah</h2>
            <div class="title-line"></div>
        </div>


        <!-- Riwayat Sekolah -->
        <div class="school-list">

            <!-- SD -->
            <div class="school-item">

                <div class="school-icon">
                    🏫
                </div>

                <div class="school-content">

                    <h3>SD</h3>

                    <p class="school-name">
                        SD Negeri 1 Trosobo
                    </p>

                    <p class="school-year">
                        2008 - 2014
                    </p>

                   <a href="https://maps.app.goo.gl/gzP8ixMLDuCovyhQA"
                   class="location-btn"
                   target="_blank">
                    📍 Lokasi
                </a>

                </div>

            </div>


            <!-- SMP -->
            <div class="school-item">

                <div class="school-icon">
                    🏫
                </div>

                <div class="school-content">

                    <h3>SMP</h3>

                    <p class="school-name">
                        SMP Negeri 1 Simo
                    </p>

                    <p class="school-year">
                        2014 - 2017
                    </p>

                    <a href="https://maps.app.goo.gl/ZUtjPBZYJxuc969aA"
                   class="location-btn"
                   target="_blank">
                    📍 Lokasi
                </a>

                </div>

            </div>


            <!-- SMA -->
            <div class="school-item">

                <div class="school-icon">
                    🎓
                </div>

                <div class="school-content">

                    <h3>SMA</h3>

                    <p class="school-name">
                        SMA Negeri 1 Simo
                    </p>

                    <p class="school-year">
                        2017 - 2020
                    </p>

                     <a href="https://maps.app.goo.gl/x7vHfLQi5ykLifJN6"
                     class="location-btn"
                     target="_blank">
                      📍 Lokasi
                    </a>

                </div>

            </div>

        </div>

    </div>

</section>

    <!-- ================= CONTACT ================= -->
    <section id="contact" class="contact">

    <div class="container">

        <!-- Judul Contact -->
        <div class="contact-header">

            <span class="contact-label">
                ✉ CONTACT
            </span>

            <h2>Hubungi</h2>

            <div class="contact-line"></div>

            <p>
                Saya terbuka untuk pertanyaan, diskusi,
                <br>
                maupun kolaborasi. Jangan ragu untuk menghubungi saya!
            </p>

        </div>


        <!-- Isi Contact -->
        <div class="contact-content">


            <!-- Bagian kiri -->
            <div class="contact-info">


                <!-- Email -->
                <a href="mailto:sesiliaina181@gmail.com"
                   class="contact-card">

                    <div class="contact-icon">
                        ✉
                    </div>

                    <div class="contact-card-text">

                        <h3>Email</h3>

                        <p>
                            Kirim pesan melalui email
                        </p>

                    </div>

                    <span class="contact-arrow">
                        ›
                    </span>

                </a>


               
                <!-- Instagram -->
                 <a href="https://www.instagram.com/sesiliain418/"
                 class="contact-card"
                 target="_blank">
                 
                 <div class="contact-icon">◎</div>
                 
                 <div class="contact-card-text">
                    <h3>Instagram</h3>
                    
                    <p>
                        Kunjungi profil Instagram saya
                    </p>
                </div>
                
                <span class="contact-arrow">
                    ›
                
                </span>
            
            </a>


            
                <!-- WhatsApp -->
                 <a href="https://wa.me/6281234567890"
                 class="contact-card"
                 target="_blank">
                 
                 <div class="contact-icon">
                    ◉
                </div>
                
                <div class="contact-card-text">
                    <h3>WhatsApp</h3>
                    
                    <p>
                        Chat langsung dengan saya
                    </p>
                
                </div>
                
                <span class="contact-arrow">
                    ›
                </span>
            </a>


                <!-- Pesan bawah -->
                <div class="contact-note">

                    <span class="quote">
                        “
                    </span>

                    <p>
                        Saya akan membalas pesan Anda
                        <strong>secepat mungkin.</strong>
                        Terima kasih! 💜
                    </p>

                </div>

            </div>


            <!-- Bagian kanan / Form -->
            <div class="contact-form-box">

                <div class="form-heading">

                    <div class="form-icon">
                        ➤
                    </div>

                    <div>
                        <h3>Kirim Pesan</h3>

                        <p>
                            Isi formulir di bawah ini untuk
                            menghubungi saya.
                        </p>
                    </div>

                </div>


                <form>


                    <!-- Nama -->
                    <div class="form-group">

                        <label for="name">
                            Nama
                        </label>

                        <input
                            type="text"
                            id="name"
                            name="name"
                            placeholder="Masukkan nama Anda"
                        >

                    </div>


                    <!-- Email -->
                    <div class="form-group">

                        <label for="email">
                            Email
                        </label>

                        <input
                            type="email"
                            id="email"
                            name="email"
                            placeholder="Masukkan email Anda"
                        >

                    </div>


                    <!-- Pesan -->
                    <div class="form-group">

                        <label for="message">
                            Pesan
                        </label>

                        <textarea
                            id="message"
                            name="message"
                            placeholder="Tulis pesan Anda di sini..."
                        ></textarea>

                    </div>


                    <!-- Tombol -->
                    <button
                        type="submit"
                        class="send-button">

                        ✈
                        <span>Kirim Pesan</span>

                    </button>

                </form>

            </div>

        </div>

    </div>

</section>

    <!-- ================= FOOTER ================= -->
    <footer class="footer">

        <p> 
            &copy; 2026 Portfolio Sesilia Ina. All Rights Reserved.
        </p>

    </footer>


    <!-- Bootstrap JS -->
    <script src="js/bootstrap.bundle.min.js"></script>

    <script>

function loadChart() {

    fetch("get_keahlian.php")
        .then(response => response.json())
        .then(data => {

            const chart = document.getElementById("skillChart");

            let html = "";

            data.forEach(item => {

                let barClass = "";

                if (item.keahlian_id == 1) {
                    barClass = "programming-bar";
                } else if (item.keahlian_id == 2) {
                    barClass = "automation-bar";
                } else {
                    barClass = "robotics-bar";
                }

                html += `
                    <div class="chart-row">

                        <div class="chart-label">
                            ${item.nama}
                        </div>

                        <div class="chart-area">

                            <div class="chart-bar ${barClass}"
                                 style="width: ${item.presentase}%">

                                <span>${item.presentase}%</span>

                            </div>

                        </div>

                    </div>
                `;

            });

            html += `
                <div class="chart-scale">
                    <span>0</span>
                    <span>20</span>
                    <span>40</span>
                    <span>60</span>
                    <span>80</span>
                    <span>100</span>
                </div>

                <p class="chart-axis">
                    Presentase (%)
                </p>
            `;

            chart.innerHTML = html;

        })
        .catch(error => {
            console.error("Gagal mengambil data:", error);
        });

}

loadChart();

setInterval(loadChart, 1000);

</script>

</body>

</html>
