<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Laporan Pemeriksaan</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/paper-css/0.4.1/paper.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/paper-css/0.4.1/paper.css">
    <style>
        @page {
            size: A4
        }

        h1 {
            font-weight: bold;
            font-size: 20pt;
            text-align: center;
        }

        h5 {
            font-weight: bold;
            font-size: 12pt;
            text-align: center;
        }

        p {
            /* font-weight: bold; */
            font-size: 12pt;
            text-align: left;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        .table th {
            padding: 8px 8px;
            /* border: 1px solid #000000; */
            text-align: left;
        }

        .table td {
            padding: 8px 12px;
            /* border: 1px solid #000000; */
        }

        .text-center {
            text-align: center;
        }

        img {
            width: 111%;
            padding: -80px 12px;
            margin-top: -150px;
            margin-left: -40px;
        }
    </style>
</head>

<body class="A4">
    <section class="sheet padding-10mm">
        <h1>Detail Data Pasien</h1>
        <h5>My Klinik Sehat Selalu</h5>
        <img src="<?= base_url('assets/frontend/img/head.jpg') ?>" alt="">

        <!-- <img class="logo" src="<?= base_url('assets/frontend/img/logo.png') ?>" alt=""> -->
        <h4><u>No.Register : <?= $pasien->no_rekam ?></u></h4>
        <h4><u>Tgl.Registrasi : <?= $pasien->date ?></u></h4>
        <!-- <h4><u>Tgl. Pemeriksaan : <?= $pasien->tgl ?></u></h4> -->
        <hr>

        <table class="table">
            <h5>Data Pasien</h5>
            <tbody>
                <tr>
                    <td>Nama Lengkap</td>
                    <td>: <?= $pasien->nama ?></td>

                    <td>Golongan Darah</td>
                    <td>: <?= $pasien->goldarah ?></td>
                </tr>

                <tr>
                    <td>NIK</td>
                    <td>: <?= $pasien->nik ?></td>
                    <td>Pekerjaan</td>
                    <td>: <?= $pasien->pekerjaan ?></td>
                </tr>
                <tr>
                    <td>Tempat, Tgl.Lahir</td>
                    <td>: <?= $pasien->tmplahir ?>, <?= $pasien->tgllahir ?></td>
                    <td>Status Pernikahan</td>
                    <td>: <?= $pasien->pernikahan ?></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>: <?= $pasien->alamat ?></td>
                    <td>Jenis Layanan</td>
                    <td>: Layanan <?= $pasien->layanan ?></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>: <?= $pasien->jenkel ?></td>
                    <td>No. BPJS</td>
                    <td>: <?= $pasien->nobpjs ?></td>
                </tr>
            </tbody>
        </table>
        <h4><strong>Keluhan :</strong></h4>
        <p><?= $pasien->keluhan ?></p>
        <hr>

        <table class="table">
            <h5>Hasil Pemeriksaan</h5>

            <tbody>
                <tr>
                    <td>Dokter</td>
                    <td>: <?= $pasien->dokter_id ?></td>
                    <td>Tanggal Pemeriksaan</td>
                    <td>: <?= $pasien->tgl ?></td>
                </tr>

                <tr>
                    <td>Unit Poli</td>
                    <td>: <?= $pasien->poli_id ?></td>

                </tr>
                <tr>
                    <td>Hasil Pemeriksaan</td>
                    <td>: <strong><?= $pasien->hasil ?></strong></td>
                </tr>
            </tbody>
        </table>
        <h4><strong>Catatan/Keterangan :</strong></h4>
        <p><?= $pasien->ket ?></p>

    </section>

</body>
<script>
    window.print();
</script>

</html>