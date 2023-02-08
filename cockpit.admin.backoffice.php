<?php
    include_once 'header.php';
?>

<?php
    if (isset($_SESSION["useruid"])){
        echo "<h1>Hello there! " . $_SESSION["useruid"] . "</h1>";
    }          
?>


<div class="page-header">
    <h1>Comments</h1>
</div>

<table>
    <thread>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Restaurant</th>
            <th>Comments</th>
        </tr>
    </thread>
    <tbody>
        <?php
        $conn = new mysqli('localhost','root','','restaurantv2');
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $sql = "SELECT * FROM comments";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>" . $row["id"] . "</td>
                        <td>" . $row["name"] . "</td>
                        <td>" . $row["email"] . "</td>
                        <td>" . $row["restaurant"] . "</td>
                        <td>" . $row["comments"] . "</td>
                        <td><a href='delete.php?id=". $row['id'] ."'>Delete</a></td>
                      </tr>";
            }
        } else {
            echo "0 results";
        }
        $conn->close();
        ?>
    </tbody>
</table>


<?php
    include_once 'footer.php';
?>