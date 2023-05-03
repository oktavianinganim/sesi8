<h3>Daftra User</h3>
<table>
    <tr>
        <td>#</td>
        <td>Nama Lengkap</td>
        <td>Email</td>
        <td><a href="tbuser.php?aksi=new">Tambah</a></td>
</tr>
<?php
$sql = "SELECT nama, email, iduser FROM tbuser ORDER BY nama;";
$hasil = mysqli_query($cnn, $sql);
$cx = 1;
while($h = mysqli_fetch_assoc($hasil)){
?>
    <tr>

        <td><?=$cx?></td>
        <td><?=$h["nama"]?></td>
        <td><?=$h["email"]?></td>
        <td>Ubah Hapus</td>
</tr>
<?php
    $cx++;
}
?>
</table>
