<!DOCTYPE html>
<html lang="en">

<head>
    <title>Linktree</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Bitter:wght@400;600;700&family=Nunito+Sans:wght@500;600;700&display=swap" rel="stylesheet">

    <script>
        function showme() {
            // alert("Hallo Selamat Siang");
            Swal.fire({
                title: "Hallo!",
                text: "Selamat Siang",
                icon: "success"
            });
            console.log("Ini baris 18, sudah sampai disini");
            a = 18 + 10;
            console.log("Hasil Penjumlahan : " + a);
            c = 1*2*3;
            console.log("Hasil Perkalian : " + c);
        }

        function changeText() {
            const element = document.getElementById("intro");
            element.innerHTML = "Sistem Informasi ITS";
        }

        function changeStyle() {
            const element = document.getElementById("tombol");
            element.style.color = "red";
            element.style.background = "yellow";
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <style>
        body {
            background: #a7a6a4;
            font-family: 'Bitter', serif;
        }
        .page {
            display: flex;
            justify-content: center;
            padding: 40px 16px 0;
            min-height: 100vh;
        }

        .card {
            background: #EAE8E4;
            border-radius: 24px 24px 0 0;
            width: 100%;
            max-width: 465px;
            box-shadow: 0 24px 48px rgba(0,0,0,.18);
            overflow: hidden;
            padding-bottom: 0;
        }
        .topbar {
            display: flex;
            justify-content: space-between;
            padding: 22px;
        }

        .icon-linktree {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            background: rgba(255,255,255,.7);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .profile {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            padding: 2px 16px 4px;
        }

        .avatar {
            width: 77px;
            height: 77px;
            border-radius: 50%;
            object-fit: cover;
        }

        .btn.btn-lt {
            display: flex;
            align-items: center;
            width: 100%;
            height: 50px;
            background: #70764D;
            border-radius: 0%;
            position: relative;
            padding: 0;
            margin-bottom: 13px;
        }

        .btn.btn-lt:hover {
            background: #7c8359;
        }

        .icon {
            width: 52px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .icon img {
            width: 22px;
            height: 22px;
            filter: brightness(0) invert(1);
        }
        .label {
            position: absolute;
            left: 0;
            right: 0;
            text-align: center;
            padding: 0 40px;
            color: #fff;
            font-size: 14px;
            font-weight: 500;
        }

        .dots {
            position: absolute;
            right: 15px;
            top: 35%;
            margin-top: -5px;
            color: #cccccc;
        }

        .username {
            font-size: 22px;
            font-weight: 600;
            margin: 0 0 1px;
            padding-top: 7px;
        }

        .bio {
            font-size: 14px;
            font-weight: 530;
            margin: 0;
            line-height: 1.5;
            padding: 0 16px;
        }

        .links {
            padding: 0 20px;
            margin-top: 4px;
        }

        .subhead {
            font-size: 14px;
            font-weight: 600;
            text-align: center;
            margin  : 14px 0 14px;
        }

        .footer {
            text-align: center;
            padding: 28px 16px 32px;
        }

        .btn.btn-footer {
            height: 44px;
            padding: 0 12px;
            background: #fff;
            border: 1px solid #dce0d7;
            border-radius: 9999px;
            font-family: 'Nunito Sans', sans-serif;
            font-size: 14px;
            font-weight: 900;
            color: #000;
            box-shadow: 0 4px 8px rgba(0,0,0,.12);
        }

        .footer-small {
            margin-top: 10px;
            font-family: 'Nunito Sans', sans-serif;
            font-size: 9px;
            color: rgb(0, 0, 0);
            font-weight: 500;
        }

        @media (max-width: 480px) {
            body {
                background: #EAE8E4;
            }
            .page {
                padding: 0;
            }
             .card {
                border-radius: 0;
                max-width: 100%;
             }
        }
    </style>
</head>

<body>

    <div class="page">
        <div class="card">
            <div class="topbar">
                <div class="icon-linktree"><svg fill="none" height="15px" width="15px" viewBox="0 0 28 28" class="animation_rotate__SBERF"><path d="m15.7603 6.829 4.6725-4.80317 2.712 2.77734-4.9012 4.67248h6.8944v3.85565h-6.9271l4.9339 4.7922-2.712 2.7229-6.6983-6.731-6.69829 6.731-2.712-2.712 4.93387-4.7923h-6.92703v-3.86645h6.89436l-4.9012-4.67248 2.712-2.77734 4.67249 4.80317v-6.829h4.0516zm-4.0516 12.0243h4.0516v9.1489h-4.0516z" fill="currentColor"></path></svg></div>
                <div class="icon-linktree"><svg xmlns="http://www.w3.org/2000/svg" width="15px" height="15px" fill="currentColor" viewBox="0 0 256 256"><path d="M216,112v96a16,16,0,0,1-16,16H56a16,16,0,0,1-16-16V112A16,16,0,0,1,56,96H80a8,8,0,0,1,0,16H56v96H200V112H176a8,8,0,0,1,0-16h24A16,16,0,0,1,216,112ZM93.66,69.66,120,43.31V136a8,8,0,0,0,16,0V43.31l26.34,26.35a8,8,0,0,0,11.32-11.32l-40-40a8,8,0,0,0-11.32,0l-40,40A8,8,0,0,0,93.66,69.66Z"></path></svg></div>
            </div>
            <div class="profile">
                <img src="https://ugc.production.linktr.ee/4c5c8482-0a26-4cc9-bcbe-3ae9d3c49c91_download.jpeg?io=true&size=avatar-v3_0" class="avatar">
                <h1 id="intro" class="username">@afnanindonesia</h1>
                <p class="bio">Lets enjoy a luxury perfumes with Afnan Indonesia</p>
            </div>
            <div class="links">
                <h3 class="subhead">Follow Us</h3>
                <a id="tombol" href="https://www.instagram.com/afnanofficial.id/" target="_blank" class="btn btn-lt">
                    <span class="icon"><img src="https://cdn.jsdelivr.net/npm/lucide-static@0.441.0/icons/instagram.svg"></span>
                    <span class="label">Official Instagram</span>
                    <span class="dots">⋮</span>
                </a>

                <button class="btn btn-primary" onclick="showme();">Show Me</button>
                <button class="btn btn-primary" onclick="changeText();">Change Text</button>
                <button class="btn btn-primary" onclick="changeStyle();">Change Style</button>

                <a href="https://www.tiktok.com/@afnanofficial.id" target="_blank" class="btn btn-lt">
                    <span class="icon"><img src="https://assets.production.linktr.ee/tabler-icons/outline/brand-tiktok.svg"></span>
                    <span class="label">Official Tiktok</span>
                    <span class="dots">⋮</span>
                </a>

                <h3 class="subhead" style="margin-top: 20px">Shop Now</h3>
                <a href="https://www.tiktok.com/@afnanofficial.id" target="_blank" class="btn btn-lt">
                    <span class="icon"><img src="https://assets.production.linktr.ee/tabler-icons/outline/shopping-cart.svg"></span>
                    <span class="label">Shopee Indonesia</span>
                    <span class="dots">⋮</span>
                </a>
                <a href="https://www.tokopedia.com/afnanindonesia" target="_blank" class="btn btn-lt">
                    <span class="icon"><img src="https://assets.production.linktr.ee/tabler-icons/outline/shopping-cart.svg"></span>
                    <span class="label">Tokopedia</span>
                    <span class="dots">⋮</span>
                </a>
                <a href="https://www.lazada.co.id/shop/afnan?spm=a211g0.store_product.more_popup.share_this_store&dsource=share&laz_share_info=803842026_0_200_400374486475_803844026_null&laz_token=5d9b2dcd651359ba8b87a93b4057b893&exlaz=e_CcUyBUcZoUTGip8qo24MCZxWHrQEPErDOJB%2FxtnrDRrCXvTKdNAtBVrqffc5%2BhYHK4nzvf3NM5dRbYfyD9SP3xTFJKgxdWvbD3WnASIas1Y%3D&sub_aff_id=social_share&sub_id2=803842026&sub_id3=400374486475&sub_id6=CPI_EXLAZ" target="_blank" class="btn btn-lt">
                    <span class="icon"><img src="https://assets.production.linktr.ee/tabler-icons/outline/shopping-cart.svg"></span>
                    <span class="label">Afnan | LazadaIndonesia</span>
                    <span class="dots">⋮</span>
                </a>
                <a href="https://wa.me/6287818200222" target="_blank" class="btn btn-lt">
                    <span class="icon"><img src="https://assets.production.linktr.ee/tabler-icons/outline/brand-whatsapp.svg"></span>
                    <span class="label">JASTIP</span>
                    <span class="dots">⋮</span>
                </a>
                <a href="https://wa.me/6287763331110" target="_blank" class="btn btn-lt">
                    <span class="icon"><img src="https://assets.production.linktr.ee/tabler-icons/outline/brand-whatsapp.svg"></span>
                    <span class="label">Afnan Chat & Shop</span>
                    <span class="dots">⋮</span>
                </a>
            </div>
            <footer class="footer">
                <button class="btn btn-footer">Join afnanindonesia on Linktree</button>
                <div class="footer-small">Cookie Preferences &bull; Report &bull; Privacy &bull; Explore</div>
            </footer>
        </div>
    </div>

</body>

</html>
