<?php 
	$q_instansi	= $this->db->query("SELECT * FROM r_config LIMIT 1")->row();
	echo '<img src="'.base_URL().'aset/'.$q_instansi->logo.'" style="width: 80px; height: 80px; margin-right: 20px; display: inline; float: left">';
	echo '<h2 style="font-size: 22px">Perpustakaan '.$q_instansi->nama.'</h2>';
	echo '<h5>'.$q_instansi->alamat.'</h5>';
	
	?>
	<body onload="this.print()">
	<hr id="bulanan" style="border-width: 2px; border-color: #000">
	

	<h5>Peminjaman Tahun Ini</h5>
	<table style="width: 100%; font-size: 10px"  class="table table-condensed">
		<tr>
			<th width="5%">No</th>
			<th width="25%">Nama Peminjam</th>
			<th width="35%">Judul Buku</th>
			<th width="10%">Tanggal Pinjam</th>
			<th width="10%">Tanggal Kembali</th>
			<th width="10%">Denda</th>
			<th width="5%">Status</th>
		</tr>
		<?php 
		if (empty($p_tahunini)) {
			echo "<tr><td colspan='7' style='text-align: center'> - Tidak ada data - </td></tr>";
		} else {
			$no3 = 1;
			foreach($p_tahunini as $pti) {
		?>
		<tr>
			<td style="text-align: center"><?=$no3?></td>
			<td style="text-align: left"><?=$pti->nmanggota?></td>
			<td style="text-align: left"><?=$pti->judul?></td>
			<td style="text-align: center"><?=$pti->tgl_pinjam?></td>
			<td style="text-align: center"><?=$pti->tgl_kembali?></td>
			<td style="text-align: center"><?=$pti->denda?></td>
			<td style="text-align: center"><?=$pti->stat?></td>
		</tr>	
		<?php
			$no3++;
			}
		}
		?>
		
		

	</table>