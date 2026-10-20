
<!DOCTYPE html>
<html>
<head>
    <title>Input Pelanggan</title>
</head>
<body>

<h1>Input Pelanggan</h1>

<form action="/aksi_tplg" method="POST">
    <?php echo csrf_field(); ?>

    Nama Pelanggan:
    <input type="text" name="nama" required><br>

    Alamat:
    <input type="text" name="alamat" required><br>

    No HP:
    <input type="text" name="no_hp" required><br>

    <button type="submit">Simpan</button>

</form>

</body>
</html>
<?php /**PATH C:\Users\Nathan\Downloads\garage-motorcycle-main\resources\views\tplg.blade.php ENDPATH**/ ?>