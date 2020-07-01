<!DOCTYPE html>
<html>
	<head>
		<style>
			table, td, tr, th {
                border: 1px solid black;
                border-collapse: collapse;
            }
		</style>
	</head>

	<body>
    
        <?php
            $tensp = ["Dien thoai", "Laptop", "Kindle"];
            $giasp = ["120", "22.2", "24"];
            $nsx = ["My", "Trung Quoc", "Nhat Ban"];
        ?>
        
		<table>
			<thead>
				<tr>
					<th>STT</th>
					<th>Ten san pham</th>
					<th>Gia san pham</th>
					<th>Nha san xuat</th>
				</tr>
			</thead>
			<tbody>
                <?php for($i = 0; $i < count($tensp); $i++){ ?>
                    <tr>
                        <td><?php echo ($i + 1); ?></td>
                        <td><?php echo $tensp[$i]; ?></td>
                        <td><?php echo $giasp[$i]; ?></td>
                        <td><?php echo $nsx[$i]; ?></td>
                    </tr>
                <?php } ?>
			</tbody>
		</table>
	</body>
</html>