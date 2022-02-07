<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Surat Pengajuan</title>
    <script src="https://unpkg.com/pagedjs/dist/paged.polyfill.js"></script>
    <style>
        body {
            color: #333;
            font-family: "Arial";
            padding: 5px;
            margin: 8px;
        }

        #in-table {
            font-size: 12pt;
            text-align: center;
            position: absolute;
            width: 418px;
            top: 90%;
            left: 35.8%;
        }

        #in-NISN {
            font-size: 11pt;
            text-align: left;
            position: absolute;
            width: 150px;
            top: 51.5%;
            left: 65.5%;
        }

        #in-Yth {
            font-size: 13pt;
            text-align: left;
            position: absolute;
            width: 418px;
            top: 25.3%;
            left: 35%;
        }

        #in-dudi {
            font-size: 13pt;
            text-align: center;
            position: absolute;
            width: 418px;
            top: 38.7%;
            left: 44.5%;
        }

        #in-alamatDUDI {
            font-size: 13pt;
            text-align: left;
            position: absolute;
            width: 418px;
            top: 27.9%;
            left: 28%;
        }

        #in-jurusan {
            font-size: 13pt;
            text-align: center;
            position: absolute;
            top: 47.3%;
            left: 46%;
            width: 160px;
        }

        #in-tglMulai {
            font-size: 11pt;
            text-align: center;
            position: absolute;
            top: 45.4%;
            left: 32.6%;
            width: 160px;
        }

        #in-tglSelesai {
            font-size: 11pt;
            text-align: center;
            position: absolute;
            top: 45.4%;
            left: 45.7%;
            width: 160px;
        }

        #in-tgl {
            font-size: 13pt;
            text-align: center;
            position: absolute;
            top: 78.7%;
            left: 57.8%;
            width: 160px;
        }

        img.tengah {
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

        td,
        th,
        tr {
            border: 1px solid;
            /* border: slategrey; */
            text-align: center;
            padding: 8px;
            width: max-content;
        }

        p {
            text-align: center;
        }

        figcaption {
            counter-increment: figureNumber;
        }

        @page {
            size: F4;
            margin: 0;
            padding: 0;
            /* background-image: url("<?= base_url() ?>assets/surat pengantar.jpg"); */
            background-repeat: no-repeat;
            background-position: center;
        }
    </style>
</head>

<body>

    <script>
        setTimeout(function() {
            document.execCommand('print');
        }, 300);
    </script>
</body>

</html>

<!-- <!DOCTYPE html>
<html>

<head>
    <title>Insert Page Breaks Before and After HTML Elements Using CSS</title>
</head>

<body style="width: 1010px; font-family: 'Times New Roman'; font-size: 20px; margin: 5px">
    <div style="width: 100%; height: 500px; background-color: aliceblue; border: 2px solid gray; text-align: center">
        <div style="width: 100%; height: 200px"></div>
        A block <b>without any page break</b> style<br />
        <br />
        [ Follows a block with <i>page-break-before : always</i> and <i>page-break-after : always</i> styles ]
    </div>
    <div style="page-break-before: always; page-break-after: always; width: 100%; height: 500px; background-color: gainsboro; border: 2px solid gray; text-align: center">
        <div style="width: 100%; height: 200px"></div>
        A block with <b>page-break-before : always</b> and <b>page-break-after : always</b> styles<br />
        <br />
        <b>This block will be always rendered alone in a PDF page</b><br />
        <br />
        [ Follows a block with <i>page-break-after : always</i> style ]
    </div>
    <div style="page-break-after: always; width: 100%; height: 500px; background-color: beige; border: 2px solid gray; text-align: center">
        <div style="width: 100%; height: 200px"></div>
        A block with <b>page-break-after : always</b> style<br />
        <br />
        <b>Nothing will be rendered after this block in PDF page</b>
        <br />
        <br />
        [ Follows a block <i>without any page break</i> style ]
    </div>
    <div style="width: 100%; height: 500px; background-color: aliceblue; border: 2px solid gray; text-align: center">
        <div style="width: 100%; height: 200px"></div>
        A block <b>without any page break</b> style<br />
        <br />
        [ Follows a block with <i>page-break-before : always</i> style ]
    </div>
    <div style="page-break-before: always; width: 100%; height: 500px; background-color: lightgray; border: 2px solid gray; text-align: center">
        <div style="width: 100%; height: 200px"></div>
        A block with <b>page-break-before : always</b> style<br />
        <br />
        <b>This block will always be rendered at the top of a PDF page</b>
    </div>
</body>

</html> -->