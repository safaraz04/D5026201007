<!DOCTYPE html>
<html lang="en">

<head>
    <title>Form Validasi</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <style>
        #fonta {

            font-size: 12px;
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

<body style="background-color: grey;">

    <div class="container py-5">
        <div class="row">
            <div class="col-sm-5 mx-auto">
                <div class="card border ">
                    <div class="card-header pt-5" style="background-color:#fffbd4;">
                        <h4 class="text-center">JavaScript Form Validation</h4>
                    </div>
                    <div class="card-body">
                        <div class="px-5 pb-5">
                            <p class="text-danger" id="fonta">*All fields are mandatory</p>
                            <form action="/action_page.php" class="needs-validation" novalidate>
                                <div class="form-group">
                                    <label for="name">Full Name</label>
                                    <input type="text" class="form-control" id="name" name="name" pattern="[A-Za-z\s]+"
                                        required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Must be alphabet character</div>
                                </div>


                                <div class="form-group">
                                    <label for="usr">Username(6-8 Character)</label>
                                    <input type="text" class="form-control" id="usr" name="usr" minlength="6"
                                        maxlength="8" required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Must be 6-8 character</div>
                                </div>

                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" name="email"
                                        pattern="[^@]+@[a-zA-Z]+\.[a-zA-Z]{2,6}" required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Invalid Email</div>
                                </div>

                                <div class="form-group">
                                    <label for="state">State</label>
                                    <select class="form-control" id="state" name="state" required>
                                        <option value="" disabled selected hidden>Please Choose</option>
                                        <option>1</option>
                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Please choose your state</div>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="adr">Address</label>
                                    <input type="text" class="form-control" id="adr" name="adr" required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out the form</div>
                                </div>

                                <div class="form-group">
                                    <label for="zc">Zip Code</label>
                                    <input type="text" class="form-control" id="zc" name="zc" minlength="6"
                                        maxlength="6" pattern="\d*" required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Must be 6 number</div>

                                </div>
                                <button type="submit" formaction="https://youtu.be/dQw4w9WgXcQ"
                                    class="btn btn-warning btn-block">Check
                                    Form</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
