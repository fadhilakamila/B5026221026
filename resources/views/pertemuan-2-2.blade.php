<html>
    <head>
        <!-- div di seluruh halaman ini, di-set seperti code block di bawah-->

        <!-- manggil di atas inpage supaya inpage-nya tetep menang-->
        <link  rel="stylesheet" href="pertemuan-2.css">

        <style>

            div {
                color: green;
                font-weight: bold;
                text-align: right;
            }

            .judulhalaman {
                text-align: center;
                font-size: large;
            }

        </style>
    </head>
    <body>
        <!--refer dari class .judulhalaman-->
        <div class="judulhalaman">Selamat Datang</div>

        <!-- Inline CSS, digunakan ketika ada spesifik ke 1 bagian saja-->
        <p style="
        text-decoration: line-through;
        color:red;">
        Hallo apa kabar?</p>

        <!-- Inpage CSS, digunakan ketika ada yang spesisfik ke 1 halaman khusus-->
        <div>Hallo apa kabar?</div>

        <!-- External CSS, digunakan untuk format umum 1 website-->
        <span>Hallo apa kabar?</span>

        <p>Bagian terakhir</p>
    </body>
</html>
