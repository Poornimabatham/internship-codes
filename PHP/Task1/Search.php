

<?php
include("Connection.php");
            if(isset($_POST['txtVal'])){

                $search = $_POST['txtVal'];
                // echo $search;
                // exit;
                $sql="SELECT * FROM `employeemaster` WHERE    LastName LIKE'%$search%'  ";

                // echo $sql;
                // exit;
                $result=mysqli_query($conn,$sql);

                // $result;
                // exit;
                    
                    $table='
                    <table class="table  border border-primary" >
                      <thead>
                        <th width="10%">Id</th>
                        <th width="10%">Name</th>
                    
                        
                  </thead>';
                  
                // echo $sql;
                // exit;
            //  echo $result;
            //  exit;
            
                    while($row= mysqli_fetch_assoc($result)){

                   $name= $row['LastName'];
                  //  echo $name;
                  //  exit;
                   $id=$row['Id'];
                   $Status=$row['Status'];

                  //  echo $id;
                  //  exit;
                    
                   $return="";
                      
                   if($row['Status']== 1)
                   {



                     $return="<button class='btn btn-primary' onclick=User(".$id.",".$Status.")><p>InActive</p></button>";
              //  
                   }
                   
                   else
                  {

                     $return="<button class='btn btn-danger' onclick=User(".$id.",".$Status.")><p>Active</p></button>
                     ";
                
                  }

                   $Status = $row['Status'];
                   $table.='<tr>

                        <td>'.$name.'</td>
                         <td>'.$return.'</td>
                    
                     
                   
                   
                 


                 </tr>';
                    } 
                    $table.='</table>';
echo $table;
            
                   }
            
                

            ?>


