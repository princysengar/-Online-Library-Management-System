<html>
    <head>

    </head>
<body>
    <form action="" method="POST">
        <div class="divclass">
            <label for="">Book ID</label>
            <input type="text" name="book" id="book" placeholder="Search..">
        </div>
        <div>
            <input type="submit" name="search" id="search" value="Search">
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
                <table>
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