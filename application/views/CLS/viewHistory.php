<link rel="stylesheet" href="<?php echo BASEURL.'/public/assets/css/form.css'?>"/>
<link rel="stylesheet" href="<?php echo BASEURL.'/public/assets/css/table.css'?>"/>
<?php include "components/sidenav.php"; ?>

    <div class="main">
      
        <form action="<?php echo BASEURL.'/report/search'?>" method="post">
          <div class="searchBox">
            <input type="search" name="search_btn" id="searchbtn" placeholder="search"><i class="fa fa-search"></i>
          </div>
        </form>
      
        <table id="sample_data" class="styled-table" >
          <thead>
            <tr>
              <th>ID</th>
              <th>Created Date</th>
              <th>Result</th>
              <th>Unit</th>
              <th>Specimend Examined </th>
              <th>Test</th>
              <th>Actions</th>
            </tr>
          </thead>
        
          <?php 
          $datas = $this->result;
        
            if(!empty($datas)){
              foreach($datas as $data){
              $report_id = $data['report_id'];
              $created_date= $data['created_date'];
              $result = $data['result'];
              
              $unit = $data['unit'];
              $speci_examined = $data['speci_examined'];
              //$test = $data['test'];
          ?>
            
            <tbody id="myTable">     
                <tr>        
                  <td data-label = "ID" ><?php echo $report_id; ?></td>
                  <td data-label = "Created Date" ><?php echo $created_date; ?></td>
                  <td data-label = "Result" ><?php echo $result; ?></td>
                  <td data-label = "Unit" ><?php echo $unit; ?></td>
                  <td data-label = "specimend examined" ><?php echo $speci_examined; ?></td>
                  <td data-label = "Test" >XXX</td>
                  <td data-label = "#">
                    <a href="<?php echo BASEURL.'/report/edit?report_id='.$data['report_id']?>"><i class="fas fa-pen-square"></i></a>
                    <a href="<?php echo BASEURL.'/report/delete?report_id='.$data['report_id']?>"><i class="fas fa-trash-alt"></i></a>                   
                  </td>
                </tr>
                    
          <?php
            }   
          }else{
            echo "no such report";
          }
          ?>  

            </tbody>
        </table>

      <div class="pages">
        <a href=" " class="btn1">Back</a>
      </div>
  </div>  
</div>
</body>
</html>