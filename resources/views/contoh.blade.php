<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar Produk</title>

    <!-- Bootstrap 4 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <style>
        body {
            background-color: #f8f9fa;
        }

        .kotak-produk {
            border: none;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .tombol {
            width: 100%;
        }
    </style>
</head>

<body>

    <div class="container mt-5">

        <!-- Daftar Produk -->
        <div class="text-center mb-4">
            <h1>Daftar Produk</h1>
            <p class="text-muted">Produk sedang diproses</p>
        </div>

        <div class="row">
            <!-- Laptop -->
            <div class="col-md-4">
                <div class="card kotak-produk p-4 text-center">
                    <h5>Laptop</h5>

                    <img src="https://images.tokopedia.net/img/JFrBQq/2024/1/16/4b9cc476-f5fc-45ee-a469-8b077a51d5e7.jpg"
                        class="img-fluid rounded">

                    <button class="tombol btn btn-primary">
                        <span class="spinner-border spinner-border-sm"></span>
                        Loading...
                    </button>
                </div>
            </div>

            <!-- Mouse -->
            <div class="col-md-4">
                <div class="kotak-produk card p-4 text-center">
                    <h5>Mouse</h5>

                    <img src="https://images.tokopedia.net/img/HCoJbh/2025/2/25/113f03d2-5b0e-4a71-953d-9bebb2ecb191.jpg"
                        class="img-fluid rounded">

                    <button class="tombol btn btn-success">
                        <span class="spinner-grow spinner-grow-sm"></span>
                        Memproses...
                    </button>
                </div>
            </div>

            <!-- Keyboard -->
            <div class="col-md-4">
                <div class="kotak-produk card p-4 text-center">
                    <h5>Keyboard</h5>

                    <img src="https://macstore.id/wp-content/uploads/2020/03/MXCL3.jpeg" class="img-fluid rounded">

                    <button class="tombol btn btn-warning text-white">
                        <span class="spinner-border spinner-border-sm"></span>
                        Menyiapkan...
                    </button>
                </div>
            </div>

        </div>
    </div>

</body>

</html>
