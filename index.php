<?php

$fio = 'ФИО';
$nameshop = 'Имя магазина';
$datestart = 'Дата открытия';
$discount = rand(0, 100);
$adresshop = 'Адрес магазина';

echo "<p><b>Уважаемый $fio!</b></p>";
echo "<p>Приглашаем вас посетить открытия нашего магазина: $nameshop.</p>";
echo "<p>Открытие состоится: $datestart.</p>";
echo "<p>Ваш персональный код на скидку: $discount</p>";
echo "<p>Магазин находится по адресу: $adresshop</p>";

?>
