<link rel="stylesheet" href="<?php echo BASEURL.'/public/assets/css/table.css'?>"/>
<link rel="stylesheet" href="<?php echo BASEURL.'/public/assets/css/search.css'?>"/>
<?php include "components/sidenav.php"; ?> 
    
    <div class="main">
      
        <form action="<?php echo BASEURL.'/report/searchDoctor'?>" method="post">
          <div class="searchBox">
            <input type="search" name="search_btn" id="searchbtn" placeholder="search by Doctor ID"><i class="fa fa-search"></i>
          </div>
        </form>
      
        <table  class="styled-table" >
          <thead>
          <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Actions</th>
          </tr>
        </thead>
        <?php 
 
          $datas = $this->result;

          if(!empty($datas)){
            foreach($datas as $data){
            $doctor_id = $data['doctor_id'];
            $first_name= $data['first_name'];
            $last_name= $data['last_name'];
            
          
        ?>
  <tbody >
           
          <tr>        
            <td data-label = "ID" ><?php echo $doctor_id; ?></td>
            <td data-label = "First Name" ><?php echo $first_name; ?></td>
            <td  data-label = "Last Name" ><?php echo $last_name; ?></td>
            
            <td data-label = "#">
             
              <a class="bttn1" href="<?php echo BASEURL.'/report/addRecommendation?doctor_id='.$data['doctor_id'].''?>" >Add Recommendation</i></a>
              
              
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
            <a href=" <?php echo BASEURL.'/report/createReport'?>"  class="btn11">Back</a>
            
            
          </div>
     

    </div>  

  
</body>
</html>