<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>SURAT KETERANGAN PENDAMPING IJAZAH (SKPI)</h1>
    <p>No. SKPI:</p>
    <p>Surat Keterangan Pendamping Ijazah (SKPI) atau <i>Diploma Supplement</i> ini bertujuan untuk memberikan informasi tentang pencapaian
        akademik atau kualifikasi lulusan pendidikan tinggi bergelar. Kualifikasi lulusan diuraikan dalam bentuk narasi deskriptif yang menyatakan capaianya pembelajaran lulusan pada
        jenjang KKNI yang relevan, dalam bentuk format standar.</p>
    <p>SKPI bukan pengganti dari ijazah dan atau transkrip akademik serta bukan media yang secara otomatis memastikan pemegang mendapatkan pengakuan</p>
    <br>
    <h2>Informasi Tentang Identitas Diri Pemegang SKPI</h2>
    <hr>
    <table cellpadding="10" cellspacing="0">
        <tr>
            <td>Nama Lengkap</td>
            <td>Nomor PIN Ijazah</td>
        </tr>
        <tr>
            <td>Joshua Evan Savero</td>
            <td>0</td>
        </tr>
        <tr>
            <td>Tempat dan Tanggal Lahir</td>
            <td>Tanggal, Bulan, Tahun Masuk</td>
        </tr>
        <tr>
            <td>XXXXXXXXXXXXXXXXXXXXXXX</td>
            <td>15 Agustus 2019</td>
        </tr>
        <tr>
            <td>Nomor Pokok Mahasiswa</td>
            <td>Tanggal, Bulan, Tahun Lulus</td>
        </tr>
        <tr>
            <td>XXXXXXXXXXXXXXXXXXXXXXX</td>
            <td>15 Agustus 2019</td>
        </tr>
        <tr>
            <td>NIK</td>
            <td>Gelar</td>
        </tr>
        <tr>
            <td>XXXXXXXXXXXXXXXXXXXXXXX</td>
            <td>Sarjana Arsitektur (S.Ars)</td>
        </tr>
    </table>
    <hr>
    <h2>Informasi Tentang Identitas Penyelenggara Program</h2>
    <hr>
    <table cellpadding="10" cellspacing="0">
        <tr>
            <td>Program Studi</td>
            <td>Bahasa Pengantar Perkuliahan</td>
        </tr>
        <tr>
            <td>Arsitek</td>
            <td>Indonesia</td>
        </tr>
        <tr>
            <td>Akreditasi</td>
            <td>Sistem Penilaian</td>
        </tr>
        <tr>
            <td>Institusi B</td>
            <td>Skala 1-4</td>
        </tr>
        <tr>
            <td>Program Studi (Nasional) B</td>
            <td>A=4; B+=3; B=3; C+=2,5; C=2; D=1</td>
        </tr>
        <tr>
            <td>Jenis Pendidikan</td>
            <td>Lama Studi</td>
        </tr>
        <tr>
            <td>Akademik</td>
            <td>3 Tahun 9 Bulan</td>
        </tr>
        <tr>
            <td>Program Pendidikan Tinggi</td>
            <td>Perangkat Kompetensi Sesuai KKNI
                <br>Level & <br> Jenis dan Program Pendidikan Tinggi Lanjutan
            </td>
        </tr>
        <tr>
            <td>Strata 1 (S1)</td>
            <td>Magister</td>
        </tr>
    </table>
    <hr>
    <h2>Informasi Tentang Kegiatan Merdeka Belajar Kampus Merdeka (MBKM)</h2>
    <hr>
    <table cellpadding="10" cellspacing="0">
        <tr>
            <td>Jenis Kegiatan</td>
            <td>Keterangan</td>
        </tr>
        <?php
        foreach ($mbkm as $mbkm) : ?>
            <tr>
                <td><?= $mbkm->kegiatan ?></td>
                <td><?= $mbkm->keterangan ?></td>
            </tr>
        <?php endforeach ?>
    </table>
    <hr>
    <footer>
        <p>Dibuat di : Palangka Raya, Kalimantan Tengah</p>
        <p>Tanggal : 31 Oktober 2023</p>
        <p>Mengetahui</p>
        <p>Dekan</p>
        <br><br>
        <p>Frieda, S.T,. M.T.</p>
        <p>NIP. 197212231997022002</p>
    </footer>
</body>

</html>