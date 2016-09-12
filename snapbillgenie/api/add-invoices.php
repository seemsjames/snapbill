<?php
	

	require 'http.php';
	$httpObj = new Http;	
	$client = $httpObj->post('client/list');
	if($_POST){	
		$data = $_POST;
		$client_id = $data['client_id'];
		unset($data['client_id']);
		$data['date'] = "2016-06-07";
		print_r($data);exit;
		//$res = $httpObj->post('client/add',array("firstname"=>"jane","email"=>"jane@example.com"));
		//$res = $httpObj->post('client/'.$client_id.'/add_invoice',$data);
	}
	
	
	include_once 'header.php';
?>
  
<div class="container">
  <h3>Add Invoices</h3>
  <p>A navigation bar is a navigation header that is placed at the top of the page.</p>

   <form role="form" method="post">

	  <div class="form-group">
	    <label for="firstname">Client:</label>
	    <select class="form-control" id="client_id" name="client_id">
	    	<?php foreach ($client['list'] as $key => $value) { ?>
	    		<option value="<?=$value['xid']?>"><?=$value['name']?></option>
	    	<?php } ?>
	    </select>
	  </div>
	  <div class="form-group">
	    <label for="description">Descrition:</label>
	    <input type="text" class="form-control" id="description1" name="description[]">
	  </div>

	   <div class="form-group">
	    <label for="unit_cost">Unit cost:</label>
	    <input type="text" class="form-control" id="unit_cost1" name="unit_cost[]">
	  </div>
	  <div class="form-group">
	    <label for="quantity">Quantity:</label>
	    <input type="text" class="form-control" id="quantity1" name="quantity[]">
	  </div>

	  
	  <button type="submit" class="btn btn-primary">Submit</button>
	</form>
</div>



<?php include_once 'footer.php'; ?>