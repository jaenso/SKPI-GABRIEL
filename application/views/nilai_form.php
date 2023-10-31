<!DOCTYPE html>
<html>

<head>
    <title>Form Generator</title>
</head>

<body>
    <h2>Generate Form Mata Kuliah</h2>
    <form method="post" action="<?= base_url('matakuliah/submitForm'); ?>">
        <?php for ($i = 1; $i <= $jumlah_matkul; $i++) : ?>
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label class="col-6">Mata Kuliah <?= $i ?></label>
                        <div class="col-12">
                            <select name="id_matkul[]" class="form-select" id="mata_kuliah" style="width: 100%;" required>
                                <option value=""></option>
                                <?php foreach ($matkul as $matkul) : ?>
                                    <option value="<?= $matkul->id_matkul; ?>"><?= $matkul->mata_kuliah; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label class="col-6">Nilai Mutu <?= $i ?></label>
                        <div class="col-12">
                            <select name="nilaimatkul[]" class="form-select" id="nilai" style="width: 100%;">
                                <option value=""></option>
                                <option value="A">A</option>
                                <option value="B+">B+</option>
                                <option value="B">B</option>
                                <option value="B-">B-</option>
                                <option value="C+C">C+</option>
                                <option value="C">C</option>
                                <option value="C-">C-</option>
                                <option value="D">D</option>
                                <option value="E">E</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        <?php endfor; ?>
        <input type="submit" value="Submit">
    </form>


</body>

</html>