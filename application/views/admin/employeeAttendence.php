<link rel="stylesheet" href="<?php echo BASEURL.'/public/assets/css/table.css'?>"/>
<link rel="stylesheet" href="<?php echo BASEURL.'/public/assets/css/search.css'?>"/>
<?php include "components/sidenav.php"; ?>   

    <div class="main">

        <form action="" method="GET">
          <div class="searchBox">
            <input type="search" name="search" placeholder="Enter Employee ID"><i class="fa fa-search"></i>
          </div>
        </form>

        <!-- <input type="date" id="date" name="date" style="float: right;"> -->

        <table class="styled-table">
          <thead>
            <tr>
              <th>Emp_Id</th>
              <th>First Name</th>
              <th>Last Name</th>
              <th>Type</th>
              <th>Total Leaves</th>
              <th>Time_In</th>
              <th>Time_Out</th>
              <th>Total_Hours</th>
              <th></th>
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
                <td>  </td>
                <td>  </td>
                <td>  </td>
                <td>  </td>
                <td>
                  &nbsp;<a href='update-emp-attendance.php?emp_id=<?php echo $row['emp_id']; ?>'><i class="far fa-edit" style="color:#26A826;"></i></a>&nbsp;&nbsp;
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

				if(confirmBox == true)
				{
					var getHref = $(this).attr('href');
					window.location.href=getHref;
				}


			});
		});
</script>
</html>