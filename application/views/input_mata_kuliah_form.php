<html>

<body>
    <h2>Isi Data Mata Kuliah dan Nilai</h2>
    <?php echo form_open('MataKuliah/simpanMataKuliah'); ?>
    <?php for ($i = 1; $i <= $jumlah_mata_kuliah; $i++) : ?>
        <label for="mata_kuliah">Mata Kuliah <?php echo $i; ?></label>
        <div class="col-12">
            <select name="mata_kuliah[]" class="form-select" id="mata_kuliah" style="width: 100%;" required>
                <option value=""></option>
                <?php foreach ($matkul as $matkul_item) : ?>
                    <option value="<?= $matkul_item->mata_kuliah; ?>"><?= $matkul_item->mata_kuliah; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <label for="nilai">Nilai <?php echo $i; ?></label>
        <select name="nilai[]" class="form-select" id="nilai" style="width: 100%">
            <option value=""></option>
            <option value="A">A</option>
            <option value="B+">B+</option>
            <option value="B">B</option>
            <option value="B-">B-</option>
            <option value="C+">C+</option>
            <option value="C">C</option>
            <option value="C-">C-</option>
            <option value="D">D</option>
            <option value="E">E</option>
        </select>
    <?php endfor; ?>
    <input type="submit" value="Simpan">
    <?php echo form_close(); ?>
</body>

</html>