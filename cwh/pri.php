
    <?php
        $con = mysqli_connect("localhost","root","","princy",);
        
        if( isset($_POST['search'])){
            $book = $_POST['book'];
            
            $query = "SELECT * from `pri_book_search` where book = '$book'";

            $result = mysqli_query($con, $query);

            while ($row = mysqli_fetch_array($result)){
                $book= $row['book'];
                $author = $row['author'];
                $room =  $row['room'];
                $block =  $row['block'];
                ?>
                <table class = "tabclass">
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

