<div class="container-fluid">
<h2 class="h3 mb-4 text-gray-800">Tambah kategori</h2>

<div class="card shadow">
    <div class="card-bpdy">
<form method="post" action="<?= site_url('index.php/kategori/simpan'); ?>">
    <div class="form-group">
        <table>Nama kategori</label><br>
        <input type="text" name="nama_kategori" class="form-control" required>
</div>

<button type="submit" class="btn btn-primary">simpan</button>
<a href="<?= site_url('kategori');?>" class="btn btn-secondary">kembali</a>

</from>
</div>
</div>
</div>