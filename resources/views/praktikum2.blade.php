<html>
    <head>
        <title>Jquery Effects Fading</title>
        <!--Masukkan Link Jquery dan Bootstrap 4-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        <!--Masukkan File CSS-->
        <style>
            body {
                font-family: sans-serif;
            }

            .kotakLogin {
                position: absolute;
                left: 50%;
                width: 500px;
                padding: 40px;
                transform: translate(-50%);
                background: rgb(255, 255, 255);
                box-sizing: border-box;
                box-shadow: 0 15px 15px rgba(72, 145, 228, 0.5);
                border-radius: 5px;
            }

            h2 {
                text-align: center;
                color: rgb(0, 0, 0);
            }

            .kotakUser {
                position: relative;
            }

            input {
                width: 100%;
                font-size: 16px;
                padding: 5px 2px;
                color: rgb(0, 0, 0);
                margin-bottom: 30px;
                border: none;
                border-bottom: 1px solid rgb(0, 0, 0);
                outline: none;
            }

            span {
                color: blue;
            }

            select {
                width: 100%;
                height: 40px;
                cursor: pointer;
                font-size: 16px;
                margin-bottom: 20px;
            }

            #state {
                font-size: 15px;
                padding: 5px 0;
                margin-bottom: 30px;
                border: none;
                border-bottom: 1px solid rgb(0, 0, 0);
                outline: none;
            }
        </style>

        <!--Masukkan File Jquery-->
        <script>
            function formjs() {
                var name = document.formval.user;

                var letters = /^[A-Za-z]+$/;
                if(name.value.match(letters)) {
                    return true;
                }
                else {
                    window.alert('Username must have alphabet characters only');
                    name.focus();
                    return false;
                }
            }
            $(function() {
                $("input[name='zipcode']").on('input', function(e) {
                    $(this).val($(this).val().replace(/[^0-9]/g, ''));
                });
            });
        </script>
    </head>

    <body>
        <div class="kotakLogin">
            <h2>Javascript Form Validation</h2><br>
            <form name="formval" onSubmit="return formjs();" action="https://google.com">
                <div class="kotakUser">
                    <span>Username</span>
                    <input type="text" name="user" minlength="6" maxlength="8" placeholder="username" required>
                </div>

                <div class="kotakUser">
                    <span>Password</span>
                    <input type="password" name="password" placeholder="password" minlength="8" maxlength="16" required>
                </div>

                <div class="kotakUser">
                    <span>Email</span>
                    <input type="email" name="email" required placeholder="example@mail.com">
                </div>

                <div class="kotakUser">
                    <span>State:</span>
                    <select type="text" class="form-control" id="state" required>
                        <Option>Please Choose</Option>
                        <Option>Surabaya</Option>
                        <Option>Banyuwangi</Option>
                        <option>Bali</option>
                    </select>
                </div>

                <div class="kotakUser">
                    <span>Address</span>
                    <input type="text" name="address" required placeholder="your address">
                </div>

                <div class="kotakUser">
                    <span>Zip Code</span>
                    <input type="text" name="zipcode" maxlength="6" placeholder="ex: 678632" required>
                </div>

                <button type="submit" class="btn btn-primary btn-block waves-effect">Input Data</button>
            </form>
        </div>
    </body>
</html>
