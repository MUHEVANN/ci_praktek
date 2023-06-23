<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .form-buku {

        display: flex;
        flex-direction: column;
    }

    form-group {
        display: flex;
        flex-direction: column;
    }

    input {
        padding: 8px 8px;
        outline: none;
    }

    .container {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100w;
        height: 100vh;
    }
    </style>
</head>

<body>
    <div class="container">
        <div class="pdd">

            <form action="/add-buku" method="post" class="form-buku">
                <form-group>
                    <label for="">
                        judul
                    </label>
                    <input type="text" name="judul" id="judul">
                </form-group>
                <form-group>
                    <label for="">
                        pengarang
                    </label>
                    <input type="text" name="pengarang" id="pengarang">
                </form-group>
                <form-group>
                    <label for="">
                        penerbit
                    </label>
                    <input type="text" name="penerbit" id="penerbit">
                </form-group>
                <form-group>
                    <label for="">
                        tahun terbit
                    </label>
                    <input type="date" name="tahun_terbit" id="tahun_terbit">
                </form-group>
                <form-group>
                    <label for="">
                        jumlah halaman
                    </label>
                    <input type="number" name="jumlah_halaman" id="jumlah_halaman">
                </form-group>
                <form-group>
                    <label for="">
                        sinopsis
                    </label>
                    <input type="text" name="sinopsis" id="sinopsis">
                </form-group>
                <button type="submit">Submit</button>
            </form>
        </div>
    </div>
</body>

</html>