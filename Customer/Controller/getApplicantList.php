<?php
  require_once('../Model/donnerModel.php');
  $users =   getApplicantList();
  
	$data = '<table border="1.5">
					<tr>
              <th>ID</th>
              <th>Applicant Name</th>
             

             
					</tr>';

          for($i=0; $i < count($users); $i++) {
		      $data .= "<tr>


                      <td>{$users[$i]['did']}</td>
                      <td>{$users[$i]['aname']}</td>
                    
                      
                   </tr>";
	}


	$data .= "</table>";

	echo $data;
?>