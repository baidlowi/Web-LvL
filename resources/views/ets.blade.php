<html>
    <head>
        <title>Javascript Form Validation</title>
        <!--Link Jquery dan boootsrap 4-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

        <!--Link ke CSS-->
        <style>
            .custom-form {
            padding: 55px;
            box-sizing: border-box;
            background-color: #ffffff;
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1);
            font: bold 14px sans-serif;
            text-align: center;
            margin: 50px;
        }
        </style>

        <script>
            function formvalidation(){
                var user = document.formval.name;

                var username = /^[A-Za-z]+$/;
                if(user.value.match(username)) {
                    return true;
                }
                else {
                    window.alert("Username Only For Letters");
                    user.focus()
                    return false;
                }
            }
        </script>
    </head>

    <body >
        <div class="container">
            <!--ID Peserta-->
            <h6>
                Nama : Moh Hasyim Baidlowi<br>
                Panggilan :Hasyim<br>
                NRP : 5026201035
            </h6><br>

            <!--Header-->
            <h3 class="text-center">Form Input Peserta Vaksinasi</h3>

            <!--Konfigurasi Form-->
            <form class="custom-form" name="formval" onsubmit="return formvalidation()" method="get">
                <!--Nama Peserta harus alphabet dan minim 10 karakter-->
                <div class="form-row form-group">
                    <div class="col-sm-4 label-column">
                        <label class="col-form-label">Nama Peserta</label>
                    </div>
                    <div class="col-sm-6 input-column">
                        <input class="form-control" name="name" type="text" required minlength="10">
                    </div>
                </div>

                <!--NIK Harus 16 digit, tidak kurang dan lebih-->
                <div class="form-row form-group">
                    <div class="col-sm-4 label-column">
                        <label class="col-form-label">NIK</label>
                    </div>
                    <div class="col-sm-6 input-column">
                        <input class="form-control" name="nik" type="number" required minlength="16" maxlength="16">
                    </div>
                </div>

                <!--Jenis Vaksin AZ, Sinovac, Moderna-->
                <div class="form-row form-group">
                    <div class="col-sm-4 label-column">
                        <label class="col-form-label">Jenis Vaksin</label>
                    </div>
                    <div class="col-sm-4 input-column">
                        <select class="form-control" required>
                            <option></option>
                            <option>AstraZeneca</option>
                            <option>Sinovac</option>
                            <option>Moderna</option>
                        </select>
                    </div>
                </div>

                <!--No Batch bisa angka dan huruf tapi tidak boleh tanda baca misal spasi , “;”-->
                <div class="form-row form-group">
                    <div class="col-sm-4 label-column">
                        <label class="col-form-label">No Batch</label>
                    </div>
                    <div class="col-sm-6 input-column">
                        <input class="form-control" name="nobatch" type="text" required>
                    </div>
                </div>

                <!--Tombol Untuk Simpan dan Reset Jawaban-->
                <div class="btn-group kotaksimpan">
                    <button class="btn btn-primary" type="submit">Simpan</button>
                    <button class="btn btn-success" type="reset">Reset</button>
                </div>

            </form>
        </div>
    </body>
</html>
