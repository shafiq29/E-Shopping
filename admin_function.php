<?php
	$action = $_POST['name'];
	
    switch($action) {
        case 'up_prod' : updateProduct();
        break;
        case 'reset_tab' : resetTable();
        break;
         case 'del_part' : delPart();
        break;
          case 'who_ordered' : showOrder();
        break;
        case 'del_discuss' : delDiscussion();
        break;
        
    }
    
	function updateProduct(){
		echo '<form action="admin_process.php" method="post" enctype="multipart/form-data">
		<table class="noline">
		<tr>
			<td>Product name:</td>
			<td><input type="text" name="prod_name"></td>
		</tr>
		 
		 <tr>
			<td>Product price:</td>
			<td><input type="text" name="prod_price"></td>
		</tr>
		 
		 <tr>
			<td>Product quantity:</td>
			<td><input type="text" name="prod_quan"></td>
		</tr>
		 <tr>
			<td>Product details:</td>
			<td><input type="text" name="prod_det"></td>
		</tr>
		<tr>
			<td>Product image:</td>
			<td><input type="file" name="prod_image"></td>
		</tr>
		</table>
		<input type="submit" value="save" name="sav"/>
		</form>'; 

	}

	function resetTable(){
		include("connection.php");
		mysql_query('TRUNCATE TABLE products');
		mysql_query('ALTER TABLE products AUTO_INCREMENT=1');
		echo "Products table is now empty";
	}

	function delPart(){
		include("connection.php");
		$dat=mysql_query("SELECT * FROM products");
		$info=""."<table class='nicetable' border='2'>"."<th>"."SL No."."</th>"."<th>"."Product Name"."</th>"."<th>"."Price"."</th>"."<th>"	."Quantity"."</th>"."<th>"	."Image"."</th>"."<th>"	."Details"."</th>.";
		if(mysql_num_rows($dat)>0){
			while($row=mysql_fetch_array($dat)){
				$info=$info. "<tr>";
				$info=$info."<td >"	 .$row['pid']."</td>";
				$info=$info."<td>"	 .$row['pname']."</td>";
				$info=$info."<td>"	 .$row['pprice']."</td>";
				$info=$info."<td>"	 .$row['pquan']."</td>";
				$info=$info."<td><img src='uploaded/".$row['pimg']."' height=100 width=100/></td>";
				$info=$info."<td onclick='delWhat(".$row['pid'].")' class='mytr'>"	."<button class='detail'>Delete?</button>"."</td>";
				$info=$info. "</tr>";
			}
			$info=$info."</table><br>";
		}
		echo $info;
	}


	function showOrder(){
		include("connection.php");
		$dat=mysql_query("SELECT * FROM products");
		$info="<div class='waitlist'><strong>Showing Users Request List: </strong></div><br>";;
		if(mysql_num_rows($dat)>0){
			while($row=mysql_fetch_array($dat)){
				if($row['waitlist']!=NULL){
					$info=$info. "<div class='waitlist'>";
					$info=$info. "<strong>".$row['pname']. " is ordered by:</strong> <br>";
					$tempinfo=explode(",",$row['waitlist']);
					for($i=0;$i<count($tempinfo);$i++){
						$info=$info.$tempinfo[$i]."<br>";
					}
		
					$info=$info. "<br></div><br>";
				}
				
			}
		
		}
		echo $info;
	}

	function delDiscussion(){
		include("connection.php");
		mysql_query('TRUNCATE TABLE message');
		mysql_query('ALTER TABLE message AUTO_INCREMENT=1');
		echo "All user discussions deleted...";
		
	}




?>
