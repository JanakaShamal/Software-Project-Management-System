<?php
 include 'header.php';
?>


<div class = "artical-container">
    <?php
        if(isset($_POST['submit-search'])){
            $search = mysqli_real_escape_string($conn,$_POST['search']);
            $sql = "SELECT * FROM project_link WHERE name LIKE '%$search%' ";
            $result = mysqli_query($conn,$sql);
            $quaryResult = mysqli_num_rows($result);
            if($quaryResult>0){
                while($row = mysqli_fetch_assoc($result)){
                echo "<div>";
                   //echo "<h3>".$row['name']."</h3>";
                   echo "<a href='".$row['link']."'>".$row['link']."</a>";
                   /*echo "<p>".$row['a_date']."</p>";
                   echo "<p>".$row['a_author']."</p>";
                    */
                echo "</div>";
                }
            }else{
                echo "there is no result matching your result";
            }


        }

        ?>
</div>
