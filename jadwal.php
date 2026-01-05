<?php 
include 'koneksi.php'; 
$query = mysqli_query($koneksi, "SELECT * FROM bookings");
$data_booking = mysqli_fetch_all($query, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Jadwal Booking</title>
</head>
<body>
    <h2>Jadwal Booking Lapangan</h2>
    <nav>
        <a href="index.php">Daftar Lapangan</a> | <a href="jadwal.php">Jadwal Booking</a>
    </nav>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>Penyewa</th>
            <th>Tanggal</th>
            <th>Jam</th>
            <th>Status</th>
        </tr>
        <?php foreach ($data_booking as $booking) : ?>
        <tr>
            <td><?php echo $booking['nama_penyewa']; ?></td>
            <td><?php echo $booking['tanggal']; ?></td>
            <td><?php echo $booking['jam']; ?></td>
            <td>
                <?php 
                $status = $booking['status_pembayaran'];
                if ($status == 'Lunas') {
                    echo "<b style='color: green;'>Lunas</b>";
                } else {
                    echo "<b style='color: red;'>Belum Lunas</b>";
                }
                ?>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>