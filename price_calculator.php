<?php
// 変数の定義
$product_name = "ノートパソコン";
$price = 80000;
$quantity = 2;
$tax_rate = 0.1;

// 計算
// 小計＝80000*2
$subtotal = $price * $quantity;
// 1台分にかかる消費税＝小計＊消費税
$tax_amount = $subtotal * $tax_rate;
// 合計＝小計＊消費税
$total = $subtotal + $tax_amount;

// 結果の表示
echo "商品名:". "ノートパソコン"."<br>";
echo "単価:". $price."円"."<br>";
echo "数量:". $quantity."個"."<br>";
echo "小計:". $subtotal."円"."<br>";
echo "消費税(10％):". $tax_amount."円"."<br>";
echo "合計金額:". $total."円" ."<br>";

?>
