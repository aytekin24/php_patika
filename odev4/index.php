<?php

class Sekil
{
}

class Dikdortgen extends Sekil
{
    public function alan($uzun, $kisa)
    {
        $dikalan = $uzun * $kisa;
        return $dikalan;
    }
    public function cevre($uzun, $kisa)
    {
        $cevre = ($uzun+ $kisa)*2;
        return $cevre;
    }
}
$Dikdortgen = new Dikdortgen();
echo '<strong>Dikdörtgenin Çevresi: </strong>' . $Dikdortgen->cevre(12, 2) . '<br>';

echo '<strong>Dikdörtgenin Alanı: </strong> ' . $Dikdortgen->alan(12, 2) . '<br>';



class Kare extends Sekil
{
    
    public function cevre($kenar)
    {
        $cevre = $kenar * 4;
        return $cevre;
    }
    public function alan($kenar)
    {
        $alan = $kenar * $kenar;
        return $alan;
    }
}
$Kare = new Kare();
echo '<strong>Karenin Çevresi: </strong>' . $Kare->cevre(12) . '<br>';

echo '<strong>Karenin Alanı:</strong> ' . $Kare->alan(12) . '<br>';
class Ucgen extends Sekil
{

    public function cevre($kenar1, $kenar2, $kenar3)
    {
        $cevre = $kenar1 + $kenar2 + $kenar3;
        return $cevre;
    }
    public function alan($kenar1, $yuksek1)
    {
        $alan = ($kenar1 * $yuksek1) / 2;
        return $alan;
    }
}

$Ucgen = new Ucgen();
echo '<strong>Üçgenin Çevresi: </strong>' . $Ucgen->cevre(12, 15, 17) . '<br>';

echo '<strong>Üçgenin Alanı:</strong> ' . $Ucgen->alan(12, 20) . '<br>';
