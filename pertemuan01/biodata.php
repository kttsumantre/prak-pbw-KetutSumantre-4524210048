<?php
//biodata.php
function statusKelulusan (float $ipk): string
{
    if ($ipk >= 3.50) return 'Sangat Memuaskan';
    if ($ipk >= 3.00) return 'Memuaskan';
    return 'Perlu Peningkatan';
}

$mahasiswa = [
    'nim' => '2026001',
    'nama' => 'Ketut Sumantre',
    'prodi' => 'Teknik Informatika',
    'smester' => 1,
    'ipk' => 3.72
];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata</title>
</head>
<body>
    <h1>Biodata Mahasiswa</h1>
    <ul>
        <?php foreach ($mahasiswa as $kunci => $nilai): ?>
        <li><?= ucfirst($kunci) ?>: <?=htmlspecialchars((string) $nilai) ?></li>
        <?php endforeach; ?>
    </ul>
    <p> Predikat: <?= statusKelulusan($mahasiswa['ipk']) ?></p>
</body>
</html>