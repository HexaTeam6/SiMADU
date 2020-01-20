<html>
<head>
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet"
          id="bootstrap-css">
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- <link rel="stylesheet"  href="print.css" /> -->

    <style>
        #invoice {
            padding: 30px;
        }

        .invoice {
            position: relative;
            background-color: #FFF;
            min-height: 680px;
            padding: 15px
        }

        .invoice header {
            padding: 40px 0;
            margin-bottom: 20px;
            border-bottom: 1px solid #3989c6
        }

        .invoice .company-details {
            text-align: right
        }

        .invoice .company-details .name {
            margin-top: 0;
            margin-bottom: 0
        }

        .invoice .contacts {
            margin-bottom: 20px
        }

        .invoice .invoice-to {
            text-align: left
        }

        .invoice .invoice-to .to {
            margin-top: 0;
            margin-bottom: 0
        }

        .invoice .invoice-details {
            text-align: right
        }

        .invoice .invoice-details .invoice-id {
            margin-top: 0;
            color: #3989c6
        }

        .invoice main {
            padding-bottom: 50px
        }

        .invoice main .thanks {
            margin-top: -100px;
            font-size: 2em;
            margin-bottom: 50px
        }

        .invoice main .notices {
            padding-left: 6px;
            border-left: 6px solid #3989c6
        }

        .invoice main .notices .notice {
            font-size: 1.2em
        }

        .invoice table {
            width: 100%;
            border-collapse: collapse;
            border-spacing: 0;
            margin-bottom: 5px
        }

        .invoice table td, .invoice table th {
            padding: 3px;
            /* background: #eee; */
            border-bottom: 1px solid #fff
        }

        .invoice table th {
            white-space: nowrap;
            font-weight: 400;
            font-size: 16px
        }

        .invoice table td h3 {
            margin: 0;
            font-weight: 400;
            color: #3989c6;
            font-size: 1.2em
        }

        .invoice table .qty, .invoice table .total, .invoice table .unit {
            text-align: right;
            font-size: 1.2em
        }

        .invoice table .no {
            width: 12px;
            color: black;
            font-size: 12px;
            /* background: #3989c6; */
            padding: 6px;
        }

        .invoice table .text-left {
            color: black;
            font-size: 12px;
            /* background: #eee; */
            width: 300px
        }

        .invoice table .unit {
            /* background: #ddd; */
            text-align: left;
            font-size: 12px;
        }

        .invoice table tbody tr:last-child td {
            border: none
        }

        .invoice table tfoot td {
            background: 0 0;
            border-bottom: none;
            white-space: nowrap;
            text-align: right;
            padding: 10px 20px;
            font-size: 1.2em;
            border-top: 1px solid #aaa
        }

        .invoice table tfoot tr:first-child td {
            border-top: none
        }

        .invoice table tfoot tr:last-child td {
            color: #3989c6;
            font-size: 1.4em;
            border-top: 1px solid #3989c6
        }

        .invoice table tfoot tr td:first-child {
            border: none
        }

        .invoice footer {
            width: 100%;
            text-align: center;
            color: #777;
            border-top: 1px solid #aaa;
            padding: 8px 0
        }

        .foto {
            width: 60px;
            height: 200px;
        }


    </style>


</head>
<body style="font-size: 12px;">
<div id="invoice">
    <div class="invoice overflow-auto">
        <div style="min-width: 600px">
            <header>
                <div class="row">
                    <div class="col" style="height:40px;width: 120px;">
                        <a target="_blank" href="https://lobianijs.com">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/97/Logo_PLN.png/438px-Logo_PLN.png"
                                 data-holder-rendered="true" height="100px">
                        </a>
                    </div>
                    <div class="col company-details">
                        <h2 class="name" style="color:blue">
                            UID Jawa Timur
                        </h2>
                        <div>UP3 Surabaya Selatan</div>
                        <div>Jl. Ngagel Timur No. 14 - 16, Surabaya Telp. (031) 5042572</div>

                    </div>
                </div>
            </header>
            <d div="">

                <h2 style="text-align: center"> LAPORAN GANGGUAN </h2>


            </d>
        </div>
        <table border="0" cellspacing="0" cellpadding="0">
            <tbody>
            <tr>
                <td class="no">1.</td>
                <td class="text-left">
                    Tanggal Laporan
                </td>
                <td class="unit"><?= $data->tanggal_pemeriksaan; ?></td>
            </tr>
            <tr>
                <td class="no">2.</td>
                <td class="text-left">
                    Nomor Lapor
                </td>
                <td class="unit"><?= $data->no_lapor; ?></td>
            </tr>
            <tr>
                <td class="no">3.</td>
                <td class="text-left">
                    Nama Pelapor
                </td>
                <td class="unit"><?= $data->nama_pelapor; ?></td>
            </tr>
            <tr>
                <td class="no">4.</td>
                <td class="text-left">
                    No. Telp
                </td>
                <td class="unit"><?= $data->no_hp; ?></td>
            </tr>
            <tr>
                <td class="no">5.</td>
                <td class="text-left" style="width: auto;">
                    Data Pelanggan
                </td>

            </tr>
            <tr>
                <td class=""></td>
                <td class="text-left">
                    - Nama
                </td>
                <td class="unit"><?= $data->nama_pelanggan; ?></td>
            </tr>
            <tr>
                <td class=""></td>
                <td class="text-left">
                    - Alamat
                </td>
                <td class="unit"><?= $data->alamat_pelanggan; ?></td>
            </tr>
            <tr>
                <td class=""></td>
                <td class="text-left">
                    - Id Pelanggan
                </td>
                <td class="unit"><?= $data->kode_pelanggan; ?></td>
            </tr>
            <tr>
                <td class=""></td>
                <td class="text-left">
                    - Tarif/Daya
                </td>
                <td class="unit"><?= $data->tarif; ?>/ <?= $data->daya; ?> Watt</td>
            </tr>
            <tr>
                <td class=""></td>
                <td class="text-left">
                    - Nomor Meter
                </td>
                <td class="unit"><?= $data->no_meter; ?></td>
            </tr>
            <tr>
                <td class="no">6.</td>
                <td class="text-left">
                    Pembatas Daya
                </td>
                <td class="unit"><?= $data->pembatas_daya; ?> A</td>
            </tr>
            <tr>
                <td class="no">7.</td>
                <td class="text-left">
                    Permasalahan
                </td>
                <td class="unit"><?= $data->permasalahan; ?></td>
            </tr>
            <tr>
                <td class="no">8.</td>
                <td class="text-left">
                    Keterangan
                </td>
                <td class="unit"><?= $data->keterangan; ?></td>
            </tr>
<!--            <tr>-->
<!--                <td class="no">9.</td>-->
<!--                <td class="text-left">-->
<!--                    Kondisi di Lapangan-->
<!--                </td>-->
<!--                <td class="unit">Port keypad terlepas</td>-->
<!--            </tr>-->
            <tr>
                <td class="no">9.</td>
                <td class="text-left">
                    Hasil Pengukuran
                </td>
                <td class="unit"><?= $data->tang_ampere; ?> A</td>
            </tr>
            <tr>
                <td class="no">10.</td>
                <td class="text-left">
                    Perbaikan
                </td>
                <td class="unit"><?= $data->perbaikan; ?></td>
            </tr>
            <tr>
                <td class="no">11.</td>
                <td class="text-left">
                    Tagging Lokasi
                </td>
                <td class="unit"><?= $data->long_lat; ?></td>
            </tr>
            <tr>
                <td class="no">12.</td>
                <td class="text-left">
                    Nama Petugas 1
                </td>
                <td class="unit"><?= $data->nama_petugas1; ?></td>
            </tr>
            <tr>
                <td class="no">13.</td>
                <td class="text-left">
                    Nama Petugas 2
                </td>
                <td class="unit"><?= $data->nama_petugas2; ?></td>
            </tr>
            <tr>
                <td class="no">14.</td>
                <td class="text-left">
                    Foto
                </td>

            </tr>

            </tbody>
        </table>

        <div class="row" style="height: 220px;padding-top: 20px;padding-bottom: 30px;">
            <div class="col" style="text-align: center;">
                <div class="" style="text-align: center;">
                    <img src="https://www.suaramerdeka.com/storage/images/2018/10/01/bergainser-meteran-listrik-5bb246f832986.jpg"
                         height="140px">
                </div>
                <div class="" style="text-align: center;">
                    Gambar 1
                </div>
            </div>
            <div class="col" style="text-align: center;">
                <div class="">
                    <img src="https://www.suaramerdeka.com/storage/images/2018/10/01/bergainser-meteran-listrik-5bb246f832986.jpg"
                         height="140px">
                </div>
                <div class="" style="text-align: center;">
                    Gambar 2
                </div>
            </div>
            <div class="col" style="text-align: center;">
                <div class="">
                    <img src="https://www.suaramerdeka.com/storage/images/2018/10/01/bergainser-meteran-listrik-5bb246f832986.jpg"
                         height="140px">
                </div>
                <div class="" style="text-align: center;">
                    Gambar 3
                </div>
            </div>
            <div class="col" style="text-align: center;">
                <div class="">
                    <img src="https://www.suaramerdeka.com/storage/images/2018/10/01/bergainser-meteran-listrik-5bb246f832986.jpg"
                         height="140px">
                </div>
                <div class="" style="text-align: center;">
                    Gambar 4
                </div>
            </div>
            <div class="col" style="text-align: center;">
                <div class="">
                    <img src="https://www.suaramerdeka.com/storage/images/2018/10/01/bergainser-meteran-listrik-5bb246f832986.jpg"
                         height="140px">
                </div>
                <div class="" style="text-align: center;">
                    Gambar 5
                </div>
            </div>
        </div>

        <div class="row" style="align-items: center; width: auto;justify-content: center;">
            <div style="width:1400px;height:auto;border: 2px solid red ; padding: 10px; text-align: left;">
                <ul>
                    <li>
                        Perbaikan / gangguan atas laporan Pemakai (Pelanggan), termasuk penggantian alat-alat listrik
                        milik PT PLN (Persero),
                        Pemakai (Pelanggan) tidak perlu membayar.
                    </li>
                    <li>
                        Perbaikan / gangguan atas laporan Pemakai (Pelanggan), termasuk penggantian alat-alat listrik
                        milik PT PLN (Persero),
                        Pemakai (Pelanggan) tidak perlu membayar.
                    </li>
                </ul>

            </div>
        </div>

        <div class="row" style="padding-top: 30px;padding-bottom: 40px;">
            <div class="col" style="text-align: center;">

                <div style="padding-bottom: 150px;">
                    Petugas
                </div>
                <div style="border-bottom: 1px solid black;width: 220px;margin: auto;">
                </div>
            </div>

            <div class="col" style="text-align: center;">

                <div style="padding-bottom: 150px;">
                    Pelanggan
                </div>
                <div class="" style="text-align: center;">
                    <div style="border-bottom: 1px solid black;width:220px;margin: auto; ">
                    </div>
                </div>
            </div>
        </div>

        <!-- <div class="row" style="text-align:center">
            <div style="text-align:center">
                <div style="border-bottom: 1px solid black; width: 220px;">
                </div>
            </div>
        </div> -->


        <footer>
            PLN - LAPORAN GANGGUAN DIGITAL
        </footer>
    </div>

    <div></div>
</div>


</body>
</html>