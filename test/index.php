<?php
    include 'header.php';
    //include 'search.php';
?>
<head>
    <link href = "bootstrap/css/bootstrap.min.css" rel = "stylesheet">
    <link href = "stylesheet.css" rel = "stylesheet">
    <script src="Resources/jquery/jquery-3.3.1.min.js"></script>
    <link rel="shortcut icon" href="Resources/favicon.ico">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- File uploader plugin -->

    <script src="Resources/fileUploader/dropzone.js"></script>



    <link href="Resources/dist/css/jquery.dm-uploader.min.css" rel="stylesheet">
    <link href="Resoures/styles.css" rel="stylesheet">

</head>
 <form action= "search.php" method="POST" >
     <!--Navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark indigo mb-4">

        <!-- Navbar brand -->


        <!-- Collapsible content -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <form class="form-inline ml-auto" >
            
                <div class="col-md-5 mb-3" style="margin-top:50px;margin-left:350px;position: fixed;">
                <input class="form-control" type="text" name = "search" placeholder="Search" aria-label="Search">
                </div>
                <div class="col-md-5 mb-3" style="margin-top:50px;position: fixed;margin-left:900px">
                <button id = "submit" class="btn btn-primary" type="submit" name="submit-search">Search</button>
                </div>
             
        </form>

        </div>
        <!-- Collapsible content -->
       
        

    </form>

<div class = "article-container">
    <?php
       /* $sql = "SELECT * FROM project_link";
        $result = mysqli_query($conn,$sql);
        $queryResult = mysqli_num_rows($result);
        if($queryResult>0){
            while($row=mysqli_fetch_assoc($result)){
                echo "<div>";
                   echo "<h3>".$row['name']."</h3>";
                   echo "<p>".$row['link']."</p>";*/
                   /*echo "<p>".$row['a_date']."</p>";
                   echo "<p>".$row['a_author']."</p>";*/
                    
                /*echo "</div>";
            }
        }*/


    ?> 
    </div>  
</body>
</html>