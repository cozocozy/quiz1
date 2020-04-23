<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Penjualan</title>
</head>
<body>
    <h3 style="text-align:center">Septian Hadi Prakoso 10918001 MI-1
    <h1>QUIZ Pemograman Web</h1>
    <br>
    <h2>Data Penjualan</h2>
    <br>
    <form action="proses.php" name="form1" method="post">
    <table width="300px">
        <tr>
            <td >Nama Pembeli</td><td><input type="text" name="pembeli"></td>
        </tr>
        <tr>
            <td>Status Member
            <td><select name="statusmember">
            <option value="member">Member</option>
            <option value="nonmember">NonMember</option>
            </select></td>
        </tr>
        <tr>
            <td>Nama Barang</td><td> <input type="text" name="barang"></td>
        </tr>   
        <tr>
            <td>Harga</td> <td><input type="text" name="harga"></td>
        </tr>
            <td>Jumlah(pcs)</td> <td><input type="text" name="jumlah"></td>
        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="Hitung">
            <input type="reset" name="reset" value="Reset"><td>
        </tr>
        </table>
        <br>
        <br>
        <div style="text-align:right">*Member disc. 10% tanpa minimum pembelian</div>
        <br>
        <div style="text-align:right">*Non member disc. 10% dengan pembelian minimum 12pcs</div>
    </form>
</body>
</html>