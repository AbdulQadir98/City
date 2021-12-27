<link rel="stylesheet" href="<?php echo BASEURL.'/public/assets/css/table.css'?>"/>
<link rel="stylesheet" href="<?php echo BASEURL.'/public/assets/css/search.css'?>"/>
<?php include "components/sidenav.php"; ?>

    <div class="main">

            <form action="" method="GET">
                <div class="searchBox">
                    <input type="search" name="search" placeholder="Enter Employee ID"><i class="fa fa-search"></i>
                </div>                
            </form>

            <table class="styled-table">
                <thead>
                <tr>
                    <th>Emp_Id</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Type</th>
                    <th>Gender</th>
                    <th>Contact</th>
                    <th>Salary</th>
                    <th>DOB</th>
                    <th>Action</th>
                </tr>
                </thead>

                <tbody>
                    <?php 
                        $result=$data['result'];
                        foreach ($result as $row): 
                    ?>
                        <tr>
                            <td> <?php echo $row["emp_id"]; ?> </td>
                            <td> <?php echo $row["first_name"]; ?> </td>
                            <td> <?php echo $row["last_name"]; ?> </td>
                            <td> <?php echo $row["type"]; ?> </td>
                            <td> <?php echo $row["gender"]; ?> </td>
                            <td> <?php echo $row["contact"]; ?> </td>
                            <td> <?php echo $row["salary"]; ?> </td>
                            <td> <?php echo $row["dob"]; ?> </td>
                            <td>
                                &nbsp;<a href='update-employee.php?emp_id=<?php echo $row['emp_id']; ?>'><i class="far fa-edit" style="color:#26A826;"></i></a>&nbsp;&nbsp;
                                <a href='delete-emp.php?action=delete&emp_id=<?php echo $row['emp_id']?>'class="delete-record"><i class="far fa-trash-alt" style="color:#FF0000;"></i></a>
                            </td>
                        </tr>
                    <?php endforeach;?> 
                </tbody>
            </table>

    </div>
</div>    
</body>

<script>
    $(document).ready(function(){
		$(".delete-record").click(function(e){
			e.preventDefault();
			var confirmBox = confirm('Are you Sure?');
			if(confirmBox == true){
				var getHref = $(this).attr('href');
				window.location.href=getHref;
			}
		});
	});
</script>

</html>