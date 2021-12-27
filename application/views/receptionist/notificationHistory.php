<link rel="stylesheet" href="<?php echo BASEURL.'/public/assets/css/table.css'?>"/>
<link rel="stylesheet" href="<?php echo BASEURL.'/public/assets/css/search.css'?>"/>
<?php include "components/sidenav.php"; ?>
    
    <div class="main">

        <form action="" method="GET">
          <div class="searchBox">
            <input type="search" name="search_btn" id="searchbtn" placeholder="Enter Employee ID"><i class="fa fa-search"></i>
          </div>
        </form>
        
        <table class="styled-table">
          <thead>
          <tr>
           <th>ID</th>
            <th>Message</th>
            <th>Created Date</th>
            
            
            
          </tr>
        </thead>
        <tbody >
           
          <tr>        
            <td data-label = "ID" >110</td>
            <td data-label = "Message" >Coming 22nd of August lab will be closed</td>
            <td data-label = "Created Date" >10-08-2021</td>
            
          </tr>
          <tr>        
          <td data-label = "ID" >113</td>
            <td data-label = "Message" >Coming 10th of July lab will be closed from 9.00a.m to 1.00p.m</td>
            <td data-label = "Created Date" >4-07-2021</td>
           
          </tr>
          <tr>        
          <td data-label = "ID" >114</td>
            <td data-label = "Message" >Coming 12th of June lab will be closed</td>
            <td data-label = "Created Date" >08-06-2021</td>
            
          </tr>
          
        </tbody>
        </table>
      

     

  </div>
</body>