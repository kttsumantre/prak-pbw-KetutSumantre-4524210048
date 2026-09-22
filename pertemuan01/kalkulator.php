<?php

$hasil = null;
$pesan = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $a = (float) ($_POST['a'] ?? 0);
    $b = (float) ($_POST['b'] ?? 0);
    $operator = $_POST['operator'] ?? '+';

    switch ($operator) {
        case '+':
            $hasil = $a + $b;
            break;
        case '-':
            $hasil = $a - $b;
            break;
        case '*':
            $hasil = $a * $b;
            break;
        case '/':
            if ($b == 0) {
                $pesan = 'Pembagian dengan nol tidak diperbolehkan.';
            } else {
                $hasil = $a / $b;
            }
            break;
        default:
            $pesan = 'Operator tidak valid';
            break;
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator</title>
</head>
<body>
    <h1>Kalkulator Sederhana</h1>

    <form method="post">
        <input type="number" step="any" name="a" value="<?= isset($_POST['a']) ? htmlspecialchars($_POST['a']) : '' ?>" required>

        <select name="operator">
            <option value="+" <?= (($_POST['operator'] ?? '+') === '+') ? 'selected' : '' ?>>+</option>
            <option value="-" <?= (($_POST['operator'] ?? '+') === '-') ? 'selected' : '' ?>>-</option>
            <option value="*" <?= (($_POST['operator'] ?? '+') === '*') ? 'selected' : '' ?>>*</option>
            <option value="/" <?= (($_POST['operator'] ?? '+') === '/') ? 'selected' : '' ?>>/</option>
        </select>

        <input type="number" step="any" name="b" value="<?= isset($_POST['b']) ? htmlspecialchars($_POST['b']) : '' ?>" required>

        <button type="submit">Hitung</button>
    </form>

    <?php if ($pesan): ?>
        <p><?= htmlspecialchars($pesan) ?></p>
    <?php elseif ($hasil !== null): ?>
        <p>Hasil: <?= htmlspecialchars((string) $hasil) ?></p>
    <?php endif; ?>
</body>
</html>