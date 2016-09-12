<?php
	if($_POST){
		require 'http.php';
			
		$httpObj = new Http;	
		$data = array();
		if(isset($_POST['firstname']) && !empty($_POST['firstname']))
			$data['firstname'] = $_POST['firstname'];
		if(isset($_POST['surname']) && !empty($_POST['surname']))
			$data['surname'] = $_POST['surname'];
		if(isset($_POST['company']) && !empty($_POST['company']))
			$data['company'] = $_POST['company'];
		if(isset($_POST['email']) && !empty($_POST['email']))
			$data['email'] = $_POST['email'];
		$res = $httpObj->post('client/add',$data);
		header("Location: client-list.php");
		//$res = $httpObj->post('client/C2m:BYSu/add_invoice',array("date"=>"2016-06-07","description"=>array('roll','pen'),"unit_cost"=>array('3','2'),"quantity"=>array('5','5')));
	}
	include_once 'header.php';
?>
  
<div class="container">
  <h3>Add Client</h3>
  <p>A navigation bar is a navigation header that is placed at the top of the page.</p>
  <form role="form" method="post">

	  <div class="form-group">
	    <label for="firstname">First Name:</label>
	    <input type="text" class="form-control" id="firstname" name="firstname">
	  </div>
	  <div class="form-group">
	    <label for="surname">Surname:</label>
	    <input type="text" class="form-control" id="surname" name="surname">
	  </div>

	   <div class="form-group">
	    <label for="company">Company:</label>
	    <input type="text" class="form-control" id="company" name="company">
	  </div>
	  <div class="form-group">
	    <label for="email">Email:</label>
	    <input type="text" class="form-control" id="email" name="email">
	  </div>

	  
	  <button type="submit" class="btn btn-primary">Submit</button>
	</form>
</div>



<?php include_once 'footer.php'; ?>