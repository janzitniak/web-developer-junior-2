<?php
$password = 'mojeheslo'; // Heslo, ktoré chcete zašifrovať

// Zašifrovanie hesla
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

// Výpis zašifrovaného hesla
echo $hashedPassword;