<!DOCTYPE html>
<html lang="en">

<head>
    <?php  include('include/link.php') ?>
    
</head>

	<body class="goto-here">
	    <?php include('include/header.php')  ?>
          <form method="post" action="enquiry.php">
            <div class="row">
              <div class="col-sm-12 col-md-12">
                <label> Product Name </label>
                <input type="text"  class="form-control" id="userData" name="product_name" >

                <label> Name</label>
                <input type="text"  class="form-control" id="userData" name="name" >

                <label>Email</label>
                <input type="text" name="email" class="form-control"  >

                <label>Mobile No.</label>
                <input type="text" name="number" class="form-control" >

                <label>Message</label>
                <textarea name="message" class="w-100" style="height: 80px;font-size:16px; border-color: rgb(221, 218, 218); border-radius: 6px;"  style="border-color: rgb(211, 209, 209); border-radius: 4px;"></textarea>

                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Send</button>
                </div>
              </div>
              </div>
          </form>
	    <?php include('include/footer.php')  ?>
    </body>
 </html>