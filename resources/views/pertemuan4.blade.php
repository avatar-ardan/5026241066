<!DOCTYPE html>
<html lang="en">

<head>
    <title>Tugas Pertemuan 4</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        body {
            padding-top: 100px;
        }

        .brand-center {
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
        }

        .warna-tombol {
            background-color: #051055;
            border-color: #051055;
        }

        .ukuran-tombol {
            padding: 3px 48px;
            font-size: 14px;
            font-weight: 380;
        }

        .navbar .ukuran-font {
            font-size: 25px;
            font-weight: 700;
            color: #3435a1;
        }

        .buat-gambar {
            margin-top: -120px;
            margin-left: -190px;
            width: 160%;
        }

        .teks-kiri {
            margin-top: -140px;
            position: relative;
            z-index: 2;
        }

        .tombol-font {
            font-size: 25px;
            font-weight: 700;
            color: #3435a1;
        }

        .warna-outline {
            color: #051055;
            border-color: #051055;
            border-width: 2px;
            padding: 3px 48px;
            font-size: 16px;
            font-weight: 650;
        }

        .tulisan-tombol {
            padding: 3px 48px;
            font-size: 16px;
            font-weight: 380;
        }
    </style>
</head>

<body>


    <nav class="navbar navbar-expand-sm navbar-light fixed-top ml-1 mr-3">
        <div class="container">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link mr-5" href="#" style="color: #3435a1;">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mr-5" href="#" style="color: #3435a1;">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" style="color: #3435a1;">Contact</a>
                </li>
            </ul>
            <a class="navbar-brand brand-center ukuran-font" href="#">Landing</a>
            <button type="button" class="btn btn-dark ml-auto warna-tombol ukuran-tombol rounded-1">Buy Now</button>
        </div>
    </nav>

    <div class="container mt-2">
        <div class="row align-items-center">
            <div class="col-md-7 teks-kiri">
                <h1 style="font-size: 55px;">Introduce Your Product Quickly & Effectively</h1>
                <p class="mb-3 mt-4" style="color: #3435a1;">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                    Aenean
                    commodo ligula eget dolor. Aenean massa. Cum sociis natoque
                    penatibus et magnis dis parturient montes, nascetur ridiculus
                </p>
                <p style="color: #3435a1;">mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis,
                    sem. Nulla consequat massa quis enim.</p>
                <button type="button" class="btn btn-dark mt-5 mr-4 tulisan-tombol warna-tombol rounded-1">Purchase UI
                    Kit</button>
                <button type="button" class="btn btn-outline-dark mt-5 warna-outline rounded-1">Learn More</button>
            </div>
            <div class="col-md-5 position-relative">
                <img src="assets/img/designer_1.png" class="buat-gambar">
            </div>
        </div>


</body>

</html>
