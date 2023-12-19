<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <style>
        .table {
            width: 200px;
        }

        .contrainer {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        td {
            padding: 5px;
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


    <div class="contrainer" style="margin-top: 80px;">
        <?php echo form_open('Pesan_Hotel/add'); ?>
        <table>
            <tr>
                <td>Nama Pemesan</td>
                <td><input type="text" name="inputNama_pemesan" class="form-control" required></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td><input type="radio" name="inputJenis_kelamin" id="inputJenis_kelamin" value="Laki-laki"><label for="laki-laki">Laki-laki</label>
                    <input type="radio" name="inputJenis_kelamin" id="inputJenis_kelamin" value="Perempuan"><label for="perempuan">Perempuan</label>
                </td>
            </tr>
            <tr>
                <td>Nomor Identitas</td>
                <td>
                    <input type="number" name="inputNomor_identitas" id="inputNomor_identitas" class="form-control" required>
                    <p style="position: relative;" id="peringatan"></p>
                </td>
            </tr>
            <tr>
                <td>Jenis Kamar</td>
                <td>
                    <select name="inputTipe_kamar" id="inputTipe_kamar" class="mb-3 form-select" aria-label="Default select example">
                        <option selected disabled>Tipe Kamar</option>
                        <?php foreach ($data as $row) { ?>
                            <option value="<?= $row->jenis_kamar ?>"><?= $row->jenis_kamar ?></option>
                        <?php } ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Harga</td>
                <td><input type="text" name="inputHarga" id="inputHarga" Readonly></td>
            </tr>
            <tr>
                <td>Tanggal Pesan</td>
                <td><input type="date" name="tanggal_pesan"></td>
            </tr>
            <tr>
                <td>Durasi Menginap</td>
                <td><input type="number" name="durasi_menginap" id="durasi_menginap" oninput="hitungTotalHarga()"><label for="durasi_menginap">Hari</label></td>
            </tr>
            <tr>
                <td>Termasuk Breakfast</td>
                <td><input type="checkbox" name="breakfast" onchange="hitungTotalHarga()">Ya</td>
            </tr>
            <tr>
                <td>Total Bayar</td>
                <td><input type="text" name="total_bayar" id="total_bayar" Readonly></td>
            </tr>
        </table>

        <button class="btn btn-primary" type="submit">Pesan</button>
        <?php echo form_close(); ?>
    </div>

    <script>
        $(document).ready(function() {
            $("#inputTipe_kamar").change(function() {
                var selectedType = $(this).val();
                var selectedPrice = <?php echo json_encode($data); ?>.find(item => item.jenis_kamar === selectedType).harga;

                document.getElementById('inputHarga').value = parseInt(selectedPrice);
            });
        });

        function hitungTotalHarga() {
            var harga = parseFloat(document.getElementById('inputHarga').value) || 1;
            var durasiMenginap = parseInt(document.getElementById('durasi_menginap').value) || 1;
            var termasukBreakfast = document.getElementsByName('breakfast')[0].checked;
            var totalHarga = harga * durasiMenginap;

            if (termasukBreakfast) {
                totalHarga += 80000;
            }

            if (durasiMenginap > 3) {
                totalHarga *= 0.9;
            }


            document.getElementById('total_bayar').value = totalHarga;
        }

        var enamBelas = document.getElementById('inputNomor_identitas');

        enamBelas.addEventListener('input', function() {
            var input = enamBelas.value;

            if (input.length != 16 || isNaN(input)) {
                document.getElementById('peringatan').innerHTML = "Masukan 16 digit";
            } else{
                document.getElementById('peringatan').innerHTML = "";
            }

        })
    </script>
</body>

</html>