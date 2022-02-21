<?php 
    include 'config.php';
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn,$sql);
?>



<marquee><h1>Transfer Money</h1></marquee></font>
        <br>
                    <table>
                        <thead>
                            <tr>
                            <th >Id</th>
                            <th>Name</th>
                            <th>E-Mail</th>
                            <th>Balance</th>
                            <th>Operation</th>
                            </tr>
                        </thead>
                        <tbody>
                <?php 
                    while($rows=mysqli_fetch_assoc($result)){
                ?>
                    <tr>
                        <td><?php echo $rows['id'] ?></td>
                        <td><?php echo $rows['name']?></td>
                        <td><?php echo $rows['email']?></td>
                        <td><?php echo $rows['balance']?></td>
                        <td><a href="selectuserdetail.php?id= <?php echo $rows['id'] ;?>"> <button type="button" class="btn btn-success">Transact</button></a></td> 
                    </tr>
                <?php
                    }
                ?>
            
                        </tbody>
                    </table>
                
             
   
</body>
</html>
