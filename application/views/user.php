<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=1024">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>REGISTRATION FOR TASK - USERS</title>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css');?>">
		
    </head>
<body>

<nav class="navbar navbar-default">
 <div class="container">
 <div class="container-fluid">
    <div class="navbar-header">
        
	  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
	  </button>
      <a class="navbar-brand" href="http://www.marsict.somee.com" target="_blank">MARS ICT DEMO PROJECT</a>
    </div>

  
	  
	  <div class="collapse navbar-collapse">
  		<ul class="nav navbar-nav">
        <li class="active"><a href="http://localhost/TaskApp/">Home[Registration] <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Contact us</a></li>
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Login</a></li>
      </ul>
    </div>
  </div>
  </div>
</nav>


<div class="container">

  <div align="left" class="container">
         
         
        
         <form class="form-horizontal" action="<?php base_url()?>mycontroller/insert" method="post">
		   <fieldset>
		    <legend><h4><b><span>REGISTRATION</span></b></h4></legend>
		   <table>
                 <tr>
                    <tr>
                     
						<td><label class="col-lg-2 control-label">DateCreated</label></td>
						<td><input class="form-control" type="text" value="<?php echo date('Y-m-d'); ?>" name="" placeholder="Date Create" size="75" disabled></td>
                        <td><input type="text" value="<?php echo date('Y-m-d'); ?>" name="textDateCreated" placeholder="Date Create" size="2" hidden></td>
						
                    </tr>
                    
                    <tr>
                       
						<td><label class="col-lg-2 control-label">DateUpdated</label></td>
                        <td><input class="form-control" type="text" value="<?php echo date('Y-m-d'); ?>" name="" placeholder="Date Updated" size="75" disabled></td>
						<td><input type="text" value="<?php echo date('Y-m-d'); ?>" name="textdateupdated" placeholder="Date Updated" size="2" hidden></td>
                    </tr>
                    <tr>
                     
						<td><label class="col-lg-2 control-label">UserName</label></td>
                        <td><input class="form-control" type="text" value="" name="textusername" placeholder="User Name" size="75" ></td>
                     </tr>
                    <tr>
                       
						<td><label for="textArea" class="col-lg-2 control-label">Description</label></td>
					
                        <td><textarea class="form-control" name="textdescription" cols="76" rows="6"></textarea></td> 
						
                    </tr>
                                       
                    </tr>
                  
                     <tr>
                         <td></td>
                         <td><button type="submit" class="btn btn-success">Add New</button></td>
                             
                    </tr>
					 </fieldset>
                </table>
        </form>
		
		<hr>
	
		 <table border="1" class="table table-striped table-hover">
			<tr>
			<th>User ID</th>
			<th>User Name</th>
			<th>Date Created</th>
			<th>Date Updated</th>
			<th>Description</th>
			<th>Action</th>
			</tr>
			
			<?php
				foreach($userlist->result() as $re)
				echo "<tr>"
					 ."<td> $re->ID</td>"
					 ."<td> $re->UserName</td>"
					 ."<td> $re->DateCreated</td>"
					 ."<td> $re->DateUpdated</td>"
					 ."<td> $re->Description</td>"
					 ."<td><a class='label label-primary' href='".base_url()."mycontroller/view/$re->ID'>Edit</a> | <a class='label label-danger' href='".base_url()."mycontroller/delete/$re->ID'>Delete</a></td>"
					
					 ."</tr>";
				 
			?>   
			
			
		</table>
		
		
		</div>
		
	</div>
	</body>
</html>	
	