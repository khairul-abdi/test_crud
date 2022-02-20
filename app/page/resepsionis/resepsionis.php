<?php
  include '../../templates-admin/header.php'
?>

<a href="tambah.php">+ TAMBAH TAMU</a>
<br />
<br />
<table id="customers">
  <tr>
    <th>NO</th>
    <th>Nama Tamu</th>
    <th>Tgl Check In</th>
    <th>Tgl Check Out</th>
    <th>Status</th>
    <th>Aksi</th>
  </tr>
  <?php
  include 'koneksi.php';
  $no = 1;
  $datas = mysqli_query($koneksi, "select * from transaksi");
  while ($data = mysqli_fetch_array($datas)) {
  ?>
    <tr>
      <td><?php echo $no++; ?></td>
      <td><?php echo $data['nama_tamu']; ?></td>
      <td><?php echo $data['check_in']; ?></td>
      <td><?php echo $data['check_out']; ?></td>
      <td><?php echo $data['status_pemesanan']; ?></td>
      <td>
        <a href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a>
        <a href="hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a>
      </td>
    </tr>
  <?php
  }
  ?>
</table>
</body>

</html>