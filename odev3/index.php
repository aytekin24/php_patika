
    <form action="#" method="POST">
        <label for="sayi" style="font-size:20px;font-weight:bold">Sayı Giriniz:</label><br>
        <input type="text" name="sayi" placeholder="" style="border-radius:5px;height:25px;font-size:16px;margin-top:5px;">
        <button style="background-color:grey;height:25px;border-radius:5px;color:white;font-size:16px">Gönder</button>
    </form>
    <div style="margin-top:20px">
    <?php

    if (isset($_POST['sayi'])) {
        $sayi = $_POST['sayi'];
    } else {
        $sayi = '';
    }
    function deger($sayi)
    {
        if (!($sayi == '') and is_numeric($sayi)) {
            if ($sayi % 3 == 0) {
                echo 'Girilen Sayı Değeri: '.$sayi.'<br>';
                echo "<p style='margin-top:10px'>Sayı 3'e tam bölünür</p>";
            } else {
                echo 'Girilen Sayı Değeri: '.$sayi;
                echo "<p style='font-size:16px'>Sayı 3'e tam bölünemez</p>";
                $kalan = $sayi % 3;
                $deger = 3 - $kalan;
                $sayi = $sayi + $deger;
                echo "<p style='font-size:16px;'>Bölünebilecek ilk sayı: " . $sayi."</p>";
            }
        } else {
            echo 'Lütfen bir sayı değeri giriniz';
        }
    }
    deger($sayi); ?>
    </div>
