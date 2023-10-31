<!DOCTYPE html>
<html>

<head>
    <title>Form Mata Kuliah</title>
</head>

<body>
    <h2>Form Mata Kuliah</h2>
    <form method="post" action="<?= base_url('matkul/generateForm'); ?>">
        <label for="jumlah_matkul">Jumlah Mata Kuliah:</label>
        <input type="number" name="jumlah_matkul" required>
        <input type="submit" value="Buat Form">
    </form>

    <?php if (isset($jumlah_matkul)) : ?>
        <form method="post" action="<?= base_url('matkul/nilaiMataKuliah'); ?>">
            <input type="hidden" name="jumlah_matkul" value="<?= $jumlah_matkul; ?>">
            <input type="submit" value="Nilai Mata Kuliah">
        </form>
    <?php endif; ?>

</body>

</html>