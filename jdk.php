    <!--table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Age</th>
      <th>Gender</th>
      <th>Contact</th>
    </tr>
  </thead>
  <tbody>
    <tr>
       <?php
        $con= new mysqli("localhost","root","","kamwali");
       if(isset($_POST['submit']))
       { 
        $citySelect = $_POST['citySelect'];
        $location = $_POST['location'];
        
        if (mysqli_connect_errno())
        {
             echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }

        $result = mysqli_query($con, "SELECT * FROM emp1
          WHERE city LIKE '%{$citySelect}%' OR location LIKE '%{$location}%'");
        while ($row = mysqli_fetch_array($result))
        {
          ?>  
              <tr>  
                 <th scope="row"><?php echo $row['id'] ?></th>
                 <td><?php echo $row['name'] ?></td>
                 <td><?php echo $row['age'] ?></td>
                 <td><?php echo $row['gender'] ?></td>
                 <td><button class="btn btn-primary">Contact</button></td>
              </tr>  
          <?php  
        }   
        mysqli_close($con);    
       } 
      ?>      
    </tr>
  </tbody>
</table>

  </div>
  </center> 
 </div-->