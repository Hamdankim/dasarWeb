<!DOCTYPE html>
<html>

<head>
    <title>Form Input dengan Validasi</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <form id="myForm" method="post" action="proses_validasi.php">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama">
        <span id="nama-error" style="color: red;"></span><br>

        <label for="email">Email:</label>
        <input type="text" id="email" name="email">
        <span id="email-error" style="color: red;"></span><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password">
        <span id="password-error" style="color: red;"></span><br>

        <input type="submit" value="Submit">
    </form>
    <div id="formValidasi"> </div>

    <script>
        $(document).ready(function() {
            $("#myForm").submit(function(event) {
                event.preventDefault();
                var nama = $("#nama").val();
                var email = $("#email").val();
                var password = $("#password").val();
                var valid = true;

                if (nama === "") {
                    $("#nama-error").text("Nama harus diisi.");
                    valid = false;
                } else {
                    $("#nama-error").text("");
                }

                if (email === "") {
                    $("#email-error").text("Email harus diisi.");
                    valid = false;
                } else if (!isValidEmail(email)) {
                    $("#email-error").text("Format email tidak valid.");
                    valid = false;
                } else {
                    $("#email-error").text("");
                }

                if (password === "") {
                    $("#password-error").text("Password harus diisi.");
                    valid = false;
                } else if (password.length < 8) {
                    $("#password-error").text("Password minimal 8 karakter.");
                    valid = false;
                } else {
                    $("#password-error").text("");
                }

                if (valid) {
                    $.ajax({
                            url: "proses_validasi.php",
                            type: "POST",
                            data: $(this).serialize(),
                            success: function(response) {
                                $("#formValidasi").html(response);
                            }
                        });
                
                }
                    
            });
        });

        function isValidEmail(email) {
            return email.includes("@");
        }
    </script>
</body>

</html>