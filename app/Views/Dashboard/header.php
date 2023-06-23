<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?= base_url('css/index.css') ?>">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


    <title>Dashboard Perpustakaan</title>
    <style>
    

    @media(max-width:768px) {
        .container {
            flex-direction: column;
        }

        .content h2 {
            font-size: 4vw;
        }

        .content p {
            font-size: 3vw;
        }

        .sidebar {
            width: 100%;
        }

        .sidebar ul {
            padding: 2%;
        }

        .sidebar li {
            margin-bottom: 2%;
        }


        .content {
            margin-top: 2%;
        }

        header {
            flex-direction: column;
            align-items: flex-start;
        }

        header .material-icons {
            margin-right: 0;
            margin-bottom: 2%;
        }

        footer {
            font-size: 3vw;

        }
    }
    </style>
</head>

<body>
    <header>
        <i class="material-icons">dashboard</i>
        <h1>Header</h1>
    </header>
    <script>
    var sidebar = document.getElementById("sidebar");
    var content = document.getElementById("content");

    sidebar.style.float = 'left';
    content.style.marginLeft = '20%';
    </script>