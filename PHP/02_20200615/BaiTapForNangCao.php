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
            $products = [
                ["Samsung Note 10", 18950000, "Bac Ninh, Viet Nam"],
                ["Iphone 11 Max Pro", 25000000, "QuangChau, China"]
            ];
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
                <?php for($i = 0; $i < count($products); $i++){ ?>
                    <tr>
                        <td><?php echo ($i + 1); ?></td>
                        <?php for($j = 0; $j < count($products[$i]); $j++){ ?>
                            <td><?php echo $products[$i][$j]; ?></td>
                        <?php } ?>
                    </tr>
                <?php } ?>
			</tbody>
		</table>
	</body>
</html>