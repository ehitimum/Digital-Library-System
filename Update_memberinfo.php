
  <?php 
     $con = mysqli_connect('localhost', 'root', '', 'eht');

        if(isset($_GET['search']))
                {
                    $filtervalues = $_GET['search'];
                    $query = "SELECT * FROM member WHERE CONCAT(name,address,email,phone,age,gender,nid,dob) LIKE '%$filtervalues%' ";
                    $query_run = mysqli_query($con, $query);

                    if(mysqli_num_rows($query_run) > 0)
                    {
                        foreach($query_run as $items)
                            {
                                  $name = $items['name'];
                                  $address = $items['address'];   
                                  $email = $items['email'];   
                                  $phone = $items['phone'];   
                                  $age = $items['age'];   
                                  $gender = $items['gender'];   
                                  $nid = $items['nid'];   
                                  $dob = $items['dob'];   
                                                 
                            }
                    }
                    else
                        {
                            
                        }
                }
?>


<html>
<title>Update Worker info</title>
	<head>
		
	  <h3 align="center"> Update Worker info </h3>
      
	 
	<style>
    
	#worker{
		background-color: antiquewhite;
	}
    
	#pwd{width: 300px;  
    height: 30px;  
    border: none;  
    border-radius: 3px;  
    padding-left: 80px;}
	#sub{
		padding-top: 25px ;
	}
    #ser{
        padding-right: 100px ;
    }

</style>
	
	</head>


<body> 
   <div id="worker">

   <div class="search" align="right" id="ser">
            <form action='' method="GET">
            <input type="text" name="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>"  placeholder="Search data">
            <button type="submit" >Search</button>

            </form>
        </div>
	
    <form name="myform"  method = "GET" action=''>
	<div class="container">
            <div class="row">
    

                <div class="col-sm-6">
                    <label for="una">Name:</label>
                    <input type="text" class="form-control" id="una" name="uname" value="<?= $name; ?>">
                    <label for="age">Age:</label>
                    <input type="number" class="form-control" id="age" name="uage" value="<?= $age; ?>">
                    <label for="gen">Gender</label>
                    <input type="text" class="form-control" id="gen" name="gen" value="<?= $gender; ?>">
                    <label for="dob">Date of Birth</label>
                    <input type="date" class="form-control" id="dob" name="udob" value="<?= $dob; ?>">
                    

                </div>
                <div class="col-sm-6">
                    <label for="addr">Address:</label>
                    <input type="text" class="form-control" id="addr" name="uadd" value="<?= $address; ?>">
                    <label for="uem">Email:</label>
                    <input type="email" class="form-control" id="uem" name="uemail" value="<?= $email; ?>">
                    <label for="phone">Mobile:</label>
                    <input type="number" class="form-control" id="phone" name="uphone" value="<?= $phone; ?>">
                    <label for="nid">NID:</label>
                    <input type="number" class="form-control" id="nid" name="unid" value="<?= $nid; ?>">

                </div> 
               


            </div>
		
    
		<div align="center" id=sub >
				<input type="submit" name="ok" value="Ok" >
        		<input type="submit" name="cancel" value="Cancel" >
		</div>
	</form>
</div>

</body>
</html>
