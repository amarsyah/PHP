<html>

<head>
    <title>BELAJAR BERBAHASA MTK</title>
    <style>
        .jin {
            width: 100px;
            background-color: crimson;
            float: left;
            margin: 2px;
            padding: 10px;
            display: flex;
            justify-content: center;
        }

        .jon {
            width: 100px;
            background-color: orange;
            float: left;
            margin: 2px;
            padding: 10px;
            display: flex;
            justify-content: center;
        }

        .clear {
            clear: right;
        }
    </style>

</head>

<body>
    <h1>tugas php</h1>
    <?php

    $mingguan = [
        "Senin",
        "Selasa",
        "Rabu",
        "Kamis",
        "Jumat",
        "Sabtu",
        "Minggu"
    ];

    // !for!
    for (
        $i = 0;
        $i < count($mingguan);
        $i++
    ) {
        echo  '<div class="jin">' . $mingguan[$i] . '</div>';
        echo '<div class="clear"></div>';
    }
    echo "<h5>Looping dengan <br>
    <b>FOR</b></h5>";



    // !!foreach!!
    foreach ($mingguan as $uwu) {
        echo '<div class="jon">' . $uwu . '</div>';
        echo '<div class="clear"></div>';
    }
    echo "<h5>Looping dengan <br>
    <b>FOREACH</b></h5>";
    ?>
</body>

</html>