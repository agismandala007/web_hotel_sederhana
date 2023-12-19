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

    <div class="contrainer" style="margin-top: 100px;">
        <?php foreach ($data as $row) { ?>
            <div class="card w-50">

                <table>
                    <tr>
                        <td>
                            <p class="card-text">Nama Pemesan</p>
                        </td>
                        <td>
                            <p class="card-text"><?php echo $row->nama_pemesan ?></p>
                        </td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>
                            <p class="card-text"><?php echo $row->jenis_kelamin ?></p>
                        </td>
                    </tr>
                    <tr>
                        <td>Nomor Identitas</td>
                        <td>
                            <p class="card-text"><?php echo $row->nomor_identitas ?></p>
                        </td>
                    </tr>
                    <tr>
                        <td>Jenis Kamar</td>
                        <td>
                            <p class="card-text"><?php echo $row->tipe_kamar ?></p>
                        </td>
                    </tr>
                    <tr>
                        <td>Harga</td>
                        <td>
                            <p class="card-text"><?php echo $row->harga ?></p>
                        </td>
                    </tr>
                    <tr>
                        <td>Tanggal Pesan</td>
                        <td>
                            <p class="card-text"><?php echo $row->tanggal_pesan ?></p>
                        </td>
                    </tr>
                    <tr>
                        <td>Durasi Menginap</td>
                        <td>
                            <p class="card-text"><?php echo $row->durasi_menginap ?></p>
                        </td>
                    </tr>
                    <tr>
                        <td>Termasuk Breakfast</td>
                        <td>
                            <p class="card-text"><?php if ($row->breakfast == "on") {
                                                        echo "Yes";
                                                    } else {
                                                        echo "No";
                                                    } ?></p>
                        </td>
                    </tr>
                    <tr>
                        <td>Total Bayar</td>
                        <td>
                            <p class="card-text"><?php echo $row->total_bayar ?></p>
                        </td>
                    </tr>
                </table>
            </div>
        <?php }; ?>
    </div>


</body>

</html>