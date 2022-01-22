<?php
    $array = [1,2,3,4,5];
    $nama = "Ananda";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        Ini Halaman Beranda
    </h1>
    <?php echo "MengHaii" ?>

    <p>
        MengHaii
    </p>

    @if(1+1=2)
        <p>
            MengHaii
        </p>
    @endif

    <hr>
    <h1>Perulangan</h1>
    <?php for($i = 0; $i < count($array); $i++) { ?>
        <p>
            {{ $array[$i] }}
        </p>
    <?php } ?>

    @for($i = 0; $i < count($array); $i++)
    <p>
        {{ $array[$i] }}
    </p>
    @endfor

    <hr>
    <h1>Percabangan</h1>
    @if (1+1 = 2)
        <p>
            {{'Jawaban Benar'}}
        </p>
    @endif

    @if ($nama = "Ananda")
    <p>
        {{"Nama Saya Ananda"}}
    </p>
    @elseif ($nama = "KokLah")
    <p>
        {{"Nama Saya KokLah"}}
    </p>
    @else
    <p>
        {{"Nama Saya Tidak Diketahui"}}
    </p>
    @endif

    <hr>
    <h1>
        Percabangan Switch
    </h1>

    @switch($nilai)
        @case(90)
        {{"Nilai Anda A"}}
            @break

            @case(80)
        {{"Nilai Anda B"}}
            @break

        @default
        {{"Nilai Anda Jelek"}}
    @endswitch

</body>
</html>
