<?php 
include 'koneksi.php'; 
$query = mysqli_query($koneksi, "SELECT * FROM lapangan");
$data_lapangan = mysqli_fetch_all($query, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Lapangan</title>
</head>
<body>
    <h2>Daftar Lapangan Tersedia</h2>
    <nav>
        <a href="index.php">Daftar Lapangan</a> | <a href="jadwal.php">Jadwal Booking</a>
    </nav>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Nama Lapangan</th>
            <th>Jenis</th>
            <th>Harga/Jam</th>
        </tr>
        <?php foreach ($data_lapangan as $row) : ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['nama_lapangan']; ?></td>
            <td><?php echo $row['jenis_rumput']; ?></td>
            <td>Rp <?php echo number_format($row['harga_per_jam']); ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>