<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>Admin book search </title>
  <meta content="width=device-width,initial-scale=1,maximum-scale=1,shrink-to-fit=no" name="viewport">
        <meta name="description" content="" >
        <meta charset = "UTF-8">
        <meta name="viewport" content="" width =device-width, initial-scale = "1.0">
  
    <style>
       body{
           background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQf5Kvn0qWEsMC2bpRt5u8U6uBWPpdj5qdVHQ&usqp=CAU);
           background-repeat: repeat-x;
           background-size: 105px 261px ;
           
       }
        .oneclass{
            font-size: 60px;
            font-weight: bold;
            font-style: oblique;
            margin-left: 20px;
            text-shadow: 3px 4px red;
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
        border: 2px solid red;
        background-color: rgb(212, 212, 230);
        margin-left: 69px;
        font-size: 40px;
        border-radius: 5px;
        box-shadow: 3px 3px 3px 3px rgb(233, 144, 144);
        }
        .navclass li a{
            text-decoration: none;
            color: tomato;
            }
            .ulclass li a:hover {
                color: rgb(113, 39, 197);
            }
            .ulclass li a:visited{
                color: rgb(63, 235, 57);
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
           margin-top: 110px;
           margin-left: 25;
        }
        .formclass{
          margin-left: 550px ;
        }
        .buttonclass{
            margin-top: 15px;
            margin-left: 60px;
            background-color: rgb(226, 89, 89);
        }
        .divclass{
            margin-top: 1px ;
        }
        .formclass{
            margin-top: 100px;
        }
        .ulclass{
            margin-left: 470px;
        }
        .searclass{
            margin-left: 100px;
            margin-top: 20px;
        }
        .tabclass{
            margin-top: -10px;
            margin-left: 10px;
        }
    </style>
    <body>
        <h1 class="oneclass"> Welcome</h1>
        <h1 class="twoclass"> To Admin page</h1>
        <hr>
       <nav class="navclass">
           <ul class="ulclass">
               <li> <a href="#"> Book search</a> </li>
           </ul>
       </nav>
        </header>
        <form class="formclass" action="" method="POST">
        <div class="divclass">
            <label for="">Book ID</label>
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
            
            $query = "SELECT * from admin_book_search where book = '$book'";

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