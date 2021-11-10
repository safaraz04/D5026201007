<!DOCTYPE html>
<html lang="en">

<head>
    <title>Form Input Barang</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alata&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Alata&family=Rambla:wght@700&display=swap" rel="stylesheet">

    <style>
        body {
            background: url(./image/boxes-pngrepo-com.png);
            background-repeat: no-repeat;
            background-color: #f9A66C;
        }

        #header {
            background-color: #4A6163;
        }

        #badan {
            background-color: #f9faf4;
        }

        p {
            font-family: 'Rambla', sans-serif;
            color: #f9faf4;
            line-height: 0.2;
            text-indent: 0.5cm;
        }

        input[type='number'] {
            width: 100%;
        }

        button {
            width: 50%;
        }

        h4 {
            font-family: 'Alata', sans-serif;
            color: #f9faf4;
            ;
            font-size: 28px;
        }

        div.card-body {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)
        }
    </style>


    <script>
        (function () {
            'use strict';
            window.addEventListener('load', function () {
                var forms = document.getElementsByClassName('needs-validation');
                var validation = Array.prototype.filter.call(forms, function (form) {
                    form.addEventListener('submit', function (event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>
</head>

<body>
    <div class="container">
        <div class="py-5 px-3">
            <div class="row">
                <div class="col-xl-8 mx-auto">
                    <div class="card">
                        <div class="card header" id="header">
                            <br>
                            <p>Faraz Nurdini</p>
                            <p>Faraz</p>
                            <p>5026201007</p>
                            <h4 class="text-center pt-5"><b> Form Input Data Barang </b></h4>
                        </div>

                        <div class="card-body" id="badan">
                            <div class="py-5 pb-3">
                                <form action="/action_page.php" class="needs-validation" novalidate>
                                    <div class="form-group">
                                        <label for="nb">Nama Barang</label>
                                        <input type="text" class="form-control" minlength="10" id="nb"
                                            placeholder="Masukkan nama barang...." required>
                                        <div class="valid-feedback">Benar</div>
                                        <div class="invalid-feedback">Nama barang yang dimasukkan kurang lengkap</div>
                                    </div>

                                    <div class="form-group">
                                        <label for="harga">Harga</label>
                                        <br>
                                        <input type="number" class="form control" min="5000" id="harga"
                                            placeholder="Masukkan harga barang..." required>
                                        <div class="valid-feedback">Benar</div>
                                        <div class="invalid-feedback">Minimal harga sebesar 5000</div>
                                    </div>

                                    <div class="form-group">
                                        <label for="jb">Jenis Barang</label>
                                        <select class="form-control" id="jb" required>
                                            <option value="" disabled selected hidden>Jenis Barang</option>
                                            <option>Makanan</option>
                                            <option>Minuman</option>
                                            <option>Non-Mamin</option>

                                        </select>
                                        <div class="valid-feedback">Benar</div>
                                        <div class="invalid-feedback">Silahkan dipilih</div>
                                    </div>
                                    <div class="form-group">
                                        <label for="kode">Kode Barcode</label>
                                        <input type="text" class="form-control" pattern="\d*" minlength="10" required>
                                        <div class="valid-feedback">Benar</div>
                                        <div class="invalid-feedback">Kode yang dimasukkan salah</div>
                                    </div>

                                    <div class="row">
                                        <div class="col text-center">
                                            <button type="submit" formaction="https://youtu.be/Z7PlUGbsXlQ" class="btn"
                                                style="background-color: #F17A7E;">Kirim</button>
                                        </div>
                                        <div class="col text-center">
                                            <button type="reset" class="btn"
                                                style="background-color: #FFC94B;">Reset</button>

                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
