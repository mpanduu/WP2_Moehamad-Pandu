<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input</title>
</head>
<style>
    fieldset {
        width: 40%;
        margin: 20px auto;
        border-radius: 5px;
        background-color: yellow;
    }
    select {
        width: 100%;
    }
</style>
<body>
    <fieldset>
        <legend>Input Transaksi</legend>

        <form method="POST">
            <table>
                <tr>
                    <th>Nama Pembeli</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="nama" id="nama">
                      <?= form_error('nama', '<br><span style="color:red;">', '</span>'); ?>
                    </td>
                </tr>
                <tr>
                    <th>Nomer HP</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="nhp" id="nhp">
                        <?= form_error('nhp', '<br><span style="color:red;">', '</span>'); ?>
                    </td>
                </tr>
                <tr>
                    <th>Merk Sepatu</th>
                    <td>:</td>
                    <td>
                        <Select name="merk" id="merk">
                            <option>== PILIH ==</option>
                            <?php foreach ($merk as $m) : ?>
                                <option value="<?= $m; ?>"><?= $m; ?></option>
                            <?php endforeach; ?>
                        </Select>
                    </td>
                </tr>
                <tr>
                    <th>Ukuran Sepatu</th>
                    <td>:</td>
                    <td>
                        <Select name="ukuran" id="ukuran">
                            <option>== PILIH ==</option>
                            <?php for ($i = 32; $i <= 44; $i++ ) : ?>
                                <option value="<?= $i; ?>"><?= $i; ?></option>
                            <?php endfor; ?>
                        </Select>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" align="center">
                        <hr>
                        <button type="submit">SIMPAN</button>
                    </td>
                </tr>
            </table>
        </form>
    </fieldset>
</body>
</html>