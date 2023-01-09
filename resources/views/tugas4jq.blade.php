<html>
    <head>
        <title>Jquery Effects Fading</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!--Masukkan File Jquery-->
    <script>
        $(document).ready(function() {
            //Fading
            $(".fade").click(function(){
                $(".isiNomor").fadeToggle(1000);
            });
        });
    </script>
    <!--Masukkan File CSS-->
    <style>
        body {
            font-family: sans-serif;
            background: rgba(0, 0, 0, 0.5);
        }

        .kotakLogin {
            position: absolute;
            left: 50%;
            width: 500px;
            padding: 40px;
            transform: translate(-50%);
            background: rgb(255, 255, 255);
            box-sizing: border-box;
            box-shadow: 0 15px 25px rgba(153, 189, 172, 0.5);
            border-radius: 5px;
        }

        h2 {
            text-align: center;
            color: rgb(0, 0, 0);
        }

        .fade {
            background-color: rgba(0, 0, 0, 0.5);
            color: rgb(0, 0, 0);
            border-radius: 3px;
            padding: 6px 12px;
            cursor: pointer;
        }

        .kotakUser {
            position: relative;
        }

        .isiNomor {
            position: relative;
            display: block;
            margin-top: 20px;
        }

        input {
            width: 100%;
            padding: 10px 0;
            font-size: 16px;
            color: rgb(0, 0, 0);
            margin-bottom: 30px;
            border: none;
            border-bottom: 1px solid rgb(0, 0, 0);
            outline: none;
            background: transparent;
        }

        label {
            position: absolute;
            top: 0;
            left: 0;
            padding: 10px 0;
            font-size: 16px;
            pointer-events: none;
            color: rgb(0, 0, 0);
            transition: .5s;
        }

        input:focus ~ label,
        input:valid ~ label {
            top: -20px;
            left: 0;
            color: #03e9f4;
            font-size: 12px;
        }

        .inputForm {
            margin-top: 20px;
            width: 100%;
            height: 50px;
            background-color: #3e79dd;
            color: rgb(0, 0, 0);
            border: none;
            border-radius: 3px;
            cursor: pointer;
            font-size: 22px;
        }
    </style>
    </head>

    <body>
        <div class="kotakLogin">
            <h2>Javascript Form Validation</h2>
            <form>
                <div class="kotakUser">
                    <input ptye="text"  required="">
                    <label>Username</label>
                </div>
                <div class="kotakUser">
                    <input type="password" name="" required="">
                    <label>Password</label>
                </div>
                <div class="kotakUser">
                    <input type="email" name="" required="">
                    <label>Email</label>
                </div>
                <div class="kotakUser">
                    <input type="number" name="" required="">
                    <label>State</label>
                </div>
                <div class="kotakUser">
                    <input type="text" name="" required="">
                    <label>Address</label>
                </div>
                <div class="kotakUser">
                    <input type="number" name="" required="">
                    <label>Zip Code</label>
                </div>
                <!--Buat Tombol Fade Nomor Telephone-->
                <a class="fade">Hide Phone Number</a>
                <div class="isiNomor">
                    <input type="number" name="" required="">
                    <label>Phone Number</label>
                </div>
                <button class="inputForm">Input Data</button>
            </form>
        </div>
    </body>
</html>
