<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>Student book search </title>
  <meta content="width=device-width,initial-scale=1,maximum-scale=1,shrink-to-fit=no" name="viewport">
        <meta name="description" content="" >
        <meta charset = "UTF-8">
        <meta name="viewport" content="" width =device-width, initial-scale = "1.0">
  
    <style>
       body{
           background-image: url(https://rogerpielkejr.files.wordpress.com/2015/07/rs4726_480537825-lowdark4.jpg);
           background-repeat: repeat-x;
           background-size:1499px 305px ;
           
       }
        .oneclass{
            font-size: 60px;
            font-weight: bold;
            font-style: oblique;
            margin-left: 20px;
            text-shadow: 3px 4px rgb(228, 54, 54);
        }
        .twoclass{
            font-size: 60px;
            font-weight: bold;
            font-style: oblique;
            margin-left: 50px;
            text-shadow: 3px 4px red;
            
        }
        .navclass li{
        float: left;
        list-style: none;
        border: 2px solid rgb(17, 17, 17);
        background-color: rgb(212, 212, 230);
        margin-left: 109px;
        font-size: 40px;
        border-radius: 5px;
        box-shadow: 3px 3px 3px 3px rgb(46, 45, 48);
        }
        .navclass li a{
            text-decoration: none;
            color: rgb(42, 42, 44);
            }
            .ulclass li a:hover {
                color: rgb(114, 114, 231);
            }
            .ulclass li a:visited{
                color: rgb(35, 37, 35);
            }
            .ulclass li a:active {
            color:yellow;
            text-decoration: underline; 
            } 
        .pclass{
            font-size: 15px;
            font-weight: bold;
            font-style: oblique; 
        }
        .h1class{
           margin-top: 90px;
           margin-left: 35px;
        }
        .formclass{
          margin-left: 550px ;
        }
        .buttonclass{
            margin-top: 10px;
            margin-left: 70px;
            background-color: rgb(130, 146, 240);
        }
        .divclass{
            margin-left: 20px;
            margin-top: 150px;
        }
        .ulclass{
            margin-top: 50px;
            margin-left: 440px;
        }
        .searclass
        {
         margin-left: 150px;
         margin-top: 20px;   
        }
        .tabclass{
            margin-top: -70px;
        }
    </style>
<body>
        <h1 class="oneclass"> Welcome</h1>
        <h1 class="twoclass"> To Student page</h1>
        <br>
        <br>
        <hr>
       <nav class="navclass">
           <ul class="ulclass">
               <li> <a href=""> Book search</a> </li>
           </ul>
       </nav>
        </header>
        <form class="formclass" action="" method="POST"> 
        <div class="divclass">
            <label for="">Book Name</label>
            <input type="text" name="book" id="book" placeholder="Search..">
        </div>
        <div>
            <input class="searclass" type="submit" name="search" id="search" value="Search">
        </div>
    </form>
    <?php
        $con = mysqli_connect("localhost","root","","library management",);
        
        if( isset($_POST['search'])){
            $book = $_POST['book'];
            
            $query = "SELECT * from `book search` where book = '$book'";

            $result = mysqli_query($con, $query);

            while ($row = mysqli_fetch_array($result)){
                $book= $row['book'];
                $author = $row['author'];
                $room =  $row['room'];
                $block =  $row['block'];
                ?>
                <table border = "3" class = "tabclass">
                    <thead>
                        <tr>
                            <th>Book</th>
                            <th>Author</th>
                            <th>Room</th> 
                            <th>block</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?php echo $book; ?></td>
                            <td><?php echo $author; ?></td>
                            <td><?php echo $room; ?></td>
                            <td><?php echo $block; ?></td>
                        </tr>
                    </tbody>
                </table>
            <?php    
            }
        }
    ?>
</body>
</html>























