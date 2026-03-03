<?php 
$produtos = array(
    'tenis Adidas' => 525.00,
    'oculos ray-ban' => 410.00,
    'camiseta polo' => 135.00,
    'calca jeans' => 120.00,
    'blusa vans' => 100.00,
);

echo "<pre>";
print_r($produtos);
echo "<pre>";

foreach($produtos as $nomes => $preco){
     $produtos[$nomes] = $preco * 1.10 . "<br>";
}

echo "<pre>";
print_r($produtos);
echo "<pre>";
?>

