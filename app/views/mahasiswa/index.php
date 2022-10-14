<div>
    <h3>Daftar Mahasiswa</h3>

    <ul>
        <?php foreach ($data['mhs'] as $mhs) : ?>
            <li>
                <?= $mhs['nama']; ?>
                <a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['id']; ?>" onclick="return confirm('Yakin?');">Hapus</a>
                <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>">Detail</a>
            </li>
        <?php endforeach; ?>
    </ul>

    <h3>
        <?php Flasher::flash(); ?>
    </h3>

    <h3>Tambah Data Mahasiswa</h3>
    <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="POST">
        <label for="nama">Nama</label>
        <input type="text" name="nama" id="nama"><br><br>

        <label for="npm">NPM</label>
        <input type="text" name="npm" id="npm"><br><br>

        <label for="email">Email</label>
        <input type="email" name="email" id="email"><br><br>

        <label for="jurusan">Jurusan</label>
        <input type="text" name="jurusan" id="jurusan">
        <br><br>
        <button type="submit">Tambah Data</button>
    </form>
</div>