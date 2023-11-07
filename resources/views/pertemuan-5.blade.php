<!DOCTYPE html>
<html lang="en">
<head>
    <title>JavaScript</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css"/>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200&display=swap" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        function validateForm() {
            // Membaca isinya
            var nrp = document.getElementById("nrp");
            var msg = document.getElementById("msg");

            // Cek hanya yang invalid
            // 1. NRP tidak diisi
            if(nrp.value == "") { // bukan null, karena null itu untuk object
                // yang dipanggil objeknya (di sini objeknya adalah "nrp")
                nrp.focus(); // Tergantung UX Designer
                nrp.placeholder = "Contoh: 5026221026"; // placeholder bukan value
                alert("NRP harus diisi!"); // ini adalah CUSTOM MESSAGE
                return false;
            }

            // 2. harus 10 digit (selain 10 adalah invalid)
            if(nrp.value.length != 10) {
                alert("NRP harus 10 digit, Anda memasukkan " + nrp.value.length + " digit")
                return false;
            }

            // 3. ada abjad A-Z
            if(isNaN(nrp.value) == true) { // true jika ada unsur abja, false jika angka semua
                nrp.focus();
                // alert("NRP harus angka!");
                msg.innerHTML = "NRP harus angka!"; // innerHTML mengubah tulisan di dalam tag (e.g. dalemnya h, p,dll)
                return false;
            }

        }
    </script>
</head>
<body>
    <div class="container"> <!-- supaya ada space kiri kanan -->
        <div class="jumbotron"><b>Form Validasi</b> adalah mencegah pengiriman data ke server jika ada yang invalid/tidak sesuai constraint database</div>

        <script>
            function validate() {
            // apa defaultnya return value suatu function? TRUE

            console.log("baris 28");
            return true;

            console.log("baris 31");
            return true;

            console.log("baris 34");
            return false;

            }
        </script>

        <!-- Membuat form -->
        <form action="https://www.google.com/" method="get" onsubmit="return validateForm();">
            <div class="form-group">
                <label for="nrp">NRP :</label>
                <!-- nrp di baca di getElementbyId-->
                <input type="text" class="form-control" id="nrp"><div id="msg" class="text-danger"></div>
            </div>
            <!-- pakai 'input' instead of 'button', supaya bisa reset -->
            <input type="submit" value="DAFTAR" class="btn btn-primary">
            <input type="reset" value="ULANGI" class="btn btn-warning">
        </form>
    </div>

</body>
</html>
