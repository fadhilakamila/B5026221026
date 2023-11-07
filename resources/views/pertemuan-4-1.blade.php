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
        function changeText() {
            //document.getElementById: return DOM objek dengan memberikan "id"
            var span = document.getElementById("output");
            var textbox = document.getElementById("textbox");

            textbox.style.color = "red"; //mengganti warna dari fungsi tersebut saja
            textbox.style.fontSize = "12pt";
            textbox.style.fontFamily = "Comic Sans MS";
            span.className = "text-success"; //mengganti warna untuk 1 class (seluruhnya)

            // innerHTML mengganti kata yg terdapat di antara <> </>
            /*span.innerHTML = "Sistem Informasi";*/
            // Mengubah tampilan secara runtime (supaya text berganti tergantung apa yg dimasukkan user)
            span.innerHTML = textbox.value;
            hadiah();
        }
    </script>

    <link rel="stylesheet" href="mystyle.css">
</head>

<body>
    <div class="container-fluid">
        <script>
            function hadiah() {
                alert("Selamat, Anda mendapatkan 1 miliar!");
            }
        </script>
        <center>
            <button onclick="hadiah();" class="btn btn-primary" >Klik Disini!</button>
        </center>
        <br>
        <button onclick="changeText();" class="btn btn-success mr-3 mb-3">Click me!</button>
        <!-- hasil dari penggunaan element document.getElementById-->
        <span id="output" class="text-dark">replace me</span>
        <input id="textbox" type="text" class="form-control" />
    </div>
</body>
</html>
