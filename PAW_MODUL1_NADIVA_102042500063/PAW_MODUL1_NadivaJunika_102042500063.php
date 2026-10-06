<?php

$produk = [
    [
        "nama" => "Sepeda Listrik Uwinfly",
        "kategori" => "Sepeda Listrik",
        "harga" => 4500000,
        "stok" => 5
    ],
    [
        "nama" => "Sepeda Listrik Exotic",
        "kategori" => "Sepeda Listrik",
        "harga" => 5200000,
        "stok" => 3
    ],
    [
        "nama" => "Sepeda Listrik Selis",
        "kategori" => "Sepeda Listrik",
        "harga" => 7500000,
        "stok" => 0
    ],
    [
        "nama" => "Sepeda Listrik Pacific",
        "kategori" => "Sepeda Listrik",
        "harga" => 6800000,
        "stok" => 4
    ],
    [
        "nama" => "Sepeda Listrik Polygon",
        "kategori" => "Sepeda Listrik",
        "harga" => 9500000,
        "stok" => 2
    ],
    [
        "nama" => "Sepeda Listrik Viar",
        "kategori" => "Sepeda Listrik",
        "harga" => 11000000,
        "stok" => 2
    ]
];

$jumlahProduk = count($produk);

?>

<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Cia Store</title>

    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #fff5f8;
            color: #4a2a38;
        }

        header {
            background-color: #e91e63;
            padding: 18px 8%;
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            color: #ffffff;
            font-size: 24px;
            font-weight: bold;
        }

        nav a {
            color: #ffffff;
            text-decoration: none;
            margin-left: 25px;
        }

        nav a:hover {
            color: #ffe1ec;
        }

        .hero {
            padding: 70px 8%;
            text-align: center;
            background-color: #ffffff;
        }

        .hero h1 {
            font-size: 42px;
            margin-bottom: 15px;
            color: #d81b60;
        }

        .hero p {
            color: #8a6070;
            font-size: 18px;
        }

        .info {
            text-align: center;
            padding: 30px;
        }

        .info-box {
            display: inline-block;
            background-color: #ffffff;
            padding: 20px 40px;
            border-radius: 12px;
            border: 2px solid #f8bbd0;
            box-shadow: 0 3px 10px rgba(233, 30, 99, 0.10);
        }

        .info-box h2 {
            margin-bottom: 5px;
            color: #e91e63;
            font-size: 30px;
        }

        .info-box p {
            color: #8a6070;
        }

        .container {
            width: 84%;
            max-width: 1200px;
            margin: auto;
            padding-bottom: 60px;
        }

        .product-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 25px;
        }

        .product-card {
            background-color: #ffffff;
            border-radius: 14px;
            padding: 25px;
            box-shadow: 0 4px 15px rgba(233, 30, 99, 0.10);
            border: 1px solid #f8bbd0;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(233, 30, 99, 0.18);
        }

        .product-card h3 {
            margin-bottom: 10px;
            color: #d81b60;
        }

        .category {
            color: #a47787;
            font-size: 14px;
            margin-bottom: 15px;
        }

        .price {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 10px;
            color: #d81b60;
        }

        .normal-price {
            color: #a5a5a5;
            text-decoration: line-through;
            font-size: 14px;
            margin-bottom: 5px;
        }

        .discount {
            color: #e91e63;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .final-price {
            color: #c2185b;
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 15px;
        }

        .stock {
            margin-bottom: 15px;
            font-weight: bold;
        }

        .available {
            color: #43a047;
        }

        .empty {
            color: #e53935;
        }

        .buy-button {
            display: block;
            width: 100%;
            text-align: center;
            background-color: #e91e63;
            color: white;
            padding: 12px;
            border-radius: 8px;
            text-decoration: none;
            border: none;
            cursor: pointer;
        }

        .buy-button:hover {
            background-color: #c2185b;
        }

        .disabled-button {
            display: block;
            width: 100%;
            text-align: center;
            background-color: #eeeeee;
            color: #999999;
            padding: 12px;
            border-radius: 8px;
            cursor: not-allowed;
        }

        footer {
            background-color: #e91e63;
            color: white;
            text-align: center;
            padding: 25px;
        }

        @media (max-width: 900px) {

            .product-grid {
                grid-template-columns: repeat(2, 1fr);
            }

        }

        @media (max-width: 600px) {

            nav {
                flex-direction: column;
                gap: 15px;
            }

            nav a {
                margin: 0 8px;
            }

            .hero h1 {
                font-size: 32px;
            }

            .product-grid {
                grid-template-columns: 1fr;
            }

        }

    </style>

</head>

<body>

    <header>

        <nav>

            <div class="logo">
                Cia Store
            </div>

            <div>

                <a href="#">
                    Home
                </a>

                <a href="#produk">
                    Produk
                </a>

            </div>

        </nav>

    </header>

    <section class="hero">

        <h1>
            Selamat Datang di Cia Store
        </h1>

        <p>
            Temukan berbagai sepeda listrik nyaman dan modern untuk kebutuhan sehari-hari.
        </p>

    </section>

    <section class="info">

        <div class="info-box">

            <h2>
                <?php echo $jumlahProduk; ?>
            </h2>

            <p>
                Produk Tersedia di Katalog
            </p>

        </div>

    </section>

    <main class="container" id="produk">

        <div class="product-grid">

            <?php foreach ($produk as $item): ?>

                <?php

                if ($item["stok"] > 0) {

                    $status = "Tersedia";
                    $statusClass = "available";

                } else {

                    $status = "Stok Habis";
                    $statusClass = "empty";

                }

                if ($item["harga"] >= 1000000) {

                    $diskon = 10;

                    $hargaDiskon =
                        $item["harga"] * $diskon / 100;

                    $hargaAkhir =
                        $item["harga"] - $hargaDiskon;

                } else {

                    $diskon = 0;

                    $hargaAkhir =
                        $item["harga"];

                }

                ?>

                <article class="product-card">

                    <h3>
                        <?php echo $item["nama"]; ?>
                    </h3>

                    <p class="category">
                        <?php echo $item["kategori"]; ?>
                    </p>

                    <?php if ($diskon > 0): ?>

                        <p class="normal-price">
                            Rp
                            <?php
                            echo number_format(
                                $item["harga"],
                                0,
                                ',',
                                '.'
                            );
                            ?>
                        </p>

                        <p class="discount">
                            Diskon <?php echo $diskon; ?>%
                        </p>

                        <p class="final-price">
                            Rp
                            <?php
                            echo number_format(
                                $hargaAkhir,
                                0,
                                ',',
                                '.'
                            );
                            ?>
                        </p>

                    <?php else: ?>

                        <p class="price">
                            Rp
                            <?php
                            echo number_format(
                                $hargaAkhir,
                                0,
                                ',',
                                '.'
                            );
                            ?>
                        </p>

                    <?php endif; ?>

                    <p class="stock <?php echo $statusClass; ?>">

                        <?php echo $status; ?>

                        <?php if ($item["stok"] > 0): ?>

                            (<?php echo $item["stok"]; ?> stok)

                        <?php endif; ?>

                    </p>

                    <?php if ($item["stok"] > 0): ?>

                        <a href="#" class="buy-button">
                            Beli Sekarang
                        </a>

                    <?php else: ?>

                        <div class="disabled-button">
                            Tidak Tersedia
                        </div>

                    <?php endif; ?>

                </article>

            <?php endforeach; ?>

        </div>

    </main>

</body>

</html>