<section class="center">
        <div class="row container">
            <div class="col s12 black-text">
                <table>
                    <th> List of all members</th>
                   
           <?php

           if(isset($_SESSION['DUMMY_USERS'])){
            $users = $_SESSION['DUMMY_USERS'];
                foreach($users as $user){
                ?>
                 <tr>
                <td><?php echo $user['id']?></td>
                <td><?php echo $user['first_name']?></td>
                <td><?php echo $user['last_name']?></td>
                <td><?php echo $user['email']?></td>
                </tr>
           <?php
                }
            }
                ?>
               
        </table>
            </div>
        </div>
</section>