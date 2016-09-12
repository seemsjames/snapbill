<?php
	

	require 'http.php';

	$httpObj = new Http;	
	$res = $httpObj->post('client/list');
	// echo "<pre>";
	// print_r($res);exit;
	//$res = $httpObj->post('client/add',array("firstname"=>"jane","email"=>"jane@example.com"));
	//$res = $httpObj->post('client/C2m:BYSu/add_invoice',array("date"=>"2016-06-07","description"=>array('roll','pen'),"unit_cost"=>array('3','2'),"quantity"=>array('5','5')));
	
	include_once 'header.php';
?>
  
<div class="container">
  <h3>Client List</h3>
  <p>A navigation bar is a navigation header that is placed at the top of the page.</p>
  <table class="table">
    <thead>
      <tr>
        <th>Client Name</th>
        <th>Email address</th>
        <th>xid</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody>
    <?php foreach ($res['list'] as $key => $value) { ?>
      <tr>
        <td><?=$value['name']?></td>
        <td><?=$value['email']?></td>
        <td><?=$value['xid']?></td>
        <td><?=$value['state']?></td>
      </tr>
    <?php } ?>
    </tbody>
  </table>
</div>



<?php include_once 'footer.php'; ?>