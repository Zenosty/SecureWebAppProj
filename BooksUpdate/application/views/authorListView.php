<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	$this->load->view('header'); 
	$this->load->helper('url');
	$base = base_url() . index_page();
	$img_base = base_url()."assets/images/";
?>
<div class="list">
	<br><br>
	<h1 class="main">List of Authors</h1>
	<br><br>
	<table>
		<tr>
			<th align="left" width="200">Code</th>
			<th align="left" width="200">Description</th>
			<th align="left" width="200">Product Line</th>
			<th align="left" width="200">Supplier</th>
			<th align="left" width="200">Quantity in Stock</th>
            <th align="left" width="200">Bulk Buy Price</th>
            <th align="left" width="200">Bulk Sale Price</th>
            <th align="left" width="200">Image</th>
		</tr>

		<?php foreach($product_info as $row){?>
		<tr>
			<td><?php echo $row->produceCode;?></td>
			<td><?php echo $row->description;?></td>
			<td><?php echo $row->productLine;?></td>
			<td><?php echo $row->supplier;?></td>
            <td><?php echo $row->quantityInStock;?></td>
            <td><?php echo $row->bulkBuyPrice;?></td>
            <td><?php echo $row->bulkSalePrice;?></td>
			<td><img src="<?php echo $img_base.'products/thumbs/'.$row->photo;?>"></td>
		</tr>     
		<?php }?>  
   </table>
   <br><br>
</div>
<?php
	$this->load->view('footer'); 
?>