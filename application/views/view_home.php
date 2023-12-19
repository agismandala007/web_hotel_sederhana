<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <title>BNSP Hotel</title>
    <style>
        .table {
            width: 200px;
        }

        .contrainer {
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="<?php echo base_url('Home') ?> ">BNSP Hotel</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item">
                            <!-- <a class="nav-link active" aria-current="page" href="#">Home</a> -->
                        </li>
                        <li class="nav-item">
                            <!-- <a class="nav-link" href="#">Link</a> -->
                        </li>
                        <li class="nav-item">
                            <!-- <a class="nav-link disabled">Disabled</a> -->
                        </li>
                    </ul>
                    <a href="<?php echo base_url('Pesan_Hotel') ?>" class="btn btn-outline-success" style="margin-right: 8px"> Pesan Kamar</a>
                    <a href="<?php echo base_url('ListTamu') ?>" class="btn btn-outline-success">List Tamu</a>
                </div>
            </div>
        </nav>
    </header>

    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?php echo base_url('img/hotel-standar-1.jpg') ?>" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Standar Suit</h5>
                    <p>Fasilitas yang Mewah dengan Harga Murah.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="<?php echo base_url('img/hotel-deluxe-1.jpg') ?>" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Deluxe Suit</h5>
                    <p>Kamar yang luas dengan interior terbaru.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="<?php echo base_url('img/hotel-family-1.jpg') ?>" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Family Suit</h5>
                    <p>Dengan Ruangan yang besar cukup untuk keluarga anda.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="container marketing" style="margin-top: 50px;">
        <div class="row">
            <div class="col-lg-4">
                <img src="<?php echo base_url('img/fasilitas.jpg') ?>" alt="pict-1" width="140" height="140" class="bd-placeholder-img rounded-circle">

                <h2 class="fw-normal">Fasilitas Modern</h2>
                <p>Kamar yang nyaman, restoran yang lezat, dan fasilitas rekreasi yang lengkap..</p>
            </div>
            <div class="col-lg-4">
                <img src="<?php echo base_url('img/kemewahan.jpg') ?>" alt="pict-2" width="140" height="140" class="bd-placeholder-img rounded-circle">

                <h2 class="fw-normal">Kemewahan yang Terjangkau</h2>
                <p>Menawarkan pengalaman mewah tanpa merusak anggaran perjalanan Anda.</p>
            </div>
            <div class="col-lg-4">
                <img src="<?php echo base_url('img/pemandangan.jpg') ?>" alt="pict-3" width="140" height="140" class="bd-placeholder-img rounded-circle">

                <h2 class="fw-normal">Pemandangan yang Mengagumkan</h2>
                <p>Nikmati keindahan alam sekitar yang memukau.</p>
            </div>
        </div>

        <div>
            <h2>Tentang Kita</h2>
            <p>Selamat datang di Hotel BNSP, tempat di mana kenyamanan bertemu dengan keindahan. Sebagai destinasi pilihan Anda, kami berkomitmen untuk menyediakan pengalaman menginap yang tak terlupakan dan layanan yang melebihi ekspektasi.</p>

            <h4>Visi Kami</h4>
            <p>Menjadi destinasi utama bagi para wisatawan yang mencari keseimbangan sempurna antara kemewahan, keramahan, dan keindahan alam.</p>

            <h4>Misi Kami</h4>
            <ul>
                <li>Memberikan Layanan Berkualitas Tinggi: Kami berusaha untuk memberikan layanan pelanggan yang luar biasa, memastikan setiap tamu merasa dihargai dan diperlakukan dengan penuh perhatian.</li>
                <li>Keindahan Alam yang Menakjubkan: Terletak di lokasi yang strategis, Hotel BNSP menawarkan pemandangan alam yang menakjubkan dan kenyamanan akses ke berbagai objek wisata.</li>
                <li>Komitmen terhadap Keberlanjutan: Kami berkomitmen untuk menjaga kelestarian lingkungan dengan menerapkan praktik ramah lingkungan dan berkelanjutan.</li>
                <li>Inovasi dalam Pelayanan: Terus mengembangkan fasilitas dan layanan kami agar tetap relevan dengan perkembangan kebutuhan tamu modern.</li>
                <li>Keterlibatan Komunitas: Berkontribusi positif pada komunitas lokal kami melalui program-program sosial dan kegiatan yang mendukung pertumbuhan ekonomi lokal.</li>
            </ul>
            <p>Kami berharap dapat menyambut Anda di Hotel BNSP dan menciptakan momen-momen berharga selama Anda tinggal bersama kami. Terima kasih atas kepercayaan Anda memilih kami sebagai tujuan perjalanan Anda.</p>
        </div>
        <footer class="container">
            <p>&copy; 2017-2022 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
        </footer>
</body>

</html>