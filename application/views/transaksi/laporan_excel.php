
<table border="1">
    <tr><th>No</th><th>Tanggal Transaksi</th><th>Operator</th><th>Total Transaksi</th></tr>
    <?php
    $no=1;
    $total=0;
    foreach ($record->result() as $r)
    {
        echo "<tr>
            <td width='10'>$no</td>
            <td width='160'>$r->tanggal_transaksi</td>
            <td>$r->nama_lengkap</td>
            <td>$r->total</td>
            </tr>";
        $no++;
        $total=$total+$r->total;
    }
    ?>
    <tr><td colspan="3">Total</td>
        <td>Rp. <?php echo number_format($total, 2);?></td></tr>
</table>