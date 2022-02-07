<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Detail Data Diri Pasien</title>
    <script src="https://unpkg.com/pagedjs/dist/paged.polyfill.js"></script>
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/paper-css/0.4.1/paper.css"> -->

    <style>
        /* awal */
        @page {
            size: A4;
            margin: 0;
        }

        body {
            margin: 0
        }

        .sheet {
            margin: 0;
            overflow: hidden;
            position: relative;
            box-sizing: border-box;
            page-break-after: always;
        }

        /** Paper sizes **/
        body.A3 .sheet {
            width: 297mm;
            height: 419mm
        }

        body.A3.landscape .sheet {
            width: 420mm;
            height: 296mm
        }

        body.A4 .sheet {
            width: 210mm;
            height: 296mm
        }

        body.A4.landscape .sheet {
            width: 297mm;
            height: 209mm
        }

        body.A5 .sheet {
            width: 148mm;
            height: 209mm
        }

        body.A5.landscape .sheet {
            width: 210mm;
            height: 147mm
        }

        body.letter .sheet {
            width: 216mm;
            height: 279mm
        }

        body.letter.landscape .sheet {
            width: 280mm;
            height: 215mm
        }

        body.legal .sheet {
            width: 216mm;
            height: 356mm
        }

        body.legal.landscape .sheet {
            width: 357mm;
            height: 215mm
        }

        /** Padding area **/
        .sheet.padding-0mm {
            padding: 0mm
        }

        .sheet.padding-10mm {
            padding: 10mm
        }

        .sheet.padding-15mm {
            padding: 15mm
        }

        .sheet.padding-20mm {
            padding: 20mm
        }

        .sheet.padding-25mm {
            padding: 25mm
        }

        /** For screen preview **/
        @media screen {
            body {
                background: #e0e0e0
            }

            .sheet {
                background: white;
                box-shadow: 0 .5mm 2mm rgba(0, 0, 0, .3);
                margin: 5mm auto;
            }
        }

        /** Fix for Chrome issue #273306 **/
        @media print {
            body.A3.landscape {
                width: 420mm
            }

            body.A3,
            body.A4.landscape {
                width: 297mm
            }

            body.A4,
            body.A5.landscape {
                width: 210mm
            }

            body.A5 {
                width: 148mm
            }

            body.letter,
            body.legal {
                width: 216mm
            }

            body.letter.landscape {
                width: 280mm
            }

            body.legal.landscape {
                width: 357mm
            }
        }

        /* akhir */

        body {
            color: #333;
            font-family: "Arial";
            padding: 10mm;
            margin: 8px;
        }

        img {
            display: block;
            width: 120%;
            margin-left: -110px;
            margin-right: auto;
        }

        table {
            border-collapse: collapse;
            margin-left: 50px;
        }

        td,
        th,
        tr {
            border: 1px solid black;
            /* border: slategrey; */
            text-align: center;
            padding: 10px;
            width: max-content;
        }

        p {
            text-align: center;
        }



        /* @page {
            size: A4;
            margin: 0;
            padding: 0;
            background-repeat: no-repeat;
            background-position: center;
        } */
    </style>
</head>

<body class="A4">
    <section class="sheet padding-0mm">
        <img src="<?= base_url('assets/frontend/img/laporan.png') ?>" alt="">

        <!-- <img class="logo" src="<?= base_url('assets/frontend/img/logo.png') ?>" alt=""> -->


        <br><u><strong>Laporan Tanggal : <?= $awal ?> - <?= $akhir ?></strong></u><br>
        <table>
            <tr>
                <th>#</th>
                <th>No. Register</th>
                <th>Nama</th>
                <th>Tgl.Registrasi</th>
                <!-- <th>Keluhan</th> -->
                <th>Jenis Kelamin</th>
                <th>Keputusan</th>
            </tr>
            <?php if (isset($pasien) && !empty($pasien)) :
                $count = 1;
                foreach ($pasien as $obj) { ?>
                    <tr>
                        <td><?= $count++ ?></td>
                        <td><?= $obj->no_rekam ?></td>
                        <td><?= $obj->nama ?></td>
                        <td><?= $obj->date ?></td>
                        <!-- <td><?= $obj->keluhan ?></td> -->
                        <td><?= $obj->jenkel ?></td>
                        <td><?= $obj->hasil ?></td>
                    </tr>
            <?php }
            endif;
            ?>
        </table>



    </section>

</body>
<script>
    setTimeout(function() {
        document.execCommand('print');
    }, 300);
</script>

</html>