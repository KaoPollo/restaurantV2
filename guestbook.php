<?php
require_once "header.php";
?>


<section class="signup-form">
    <div class="card mx-auto mt-5" style="width: 40rem;">
      <div class="card-body">
        <h4 class="card-title text-center">GuestBook</h4>

        <form action="includes/guestbook.inc.php"  method="post">
          <div class="form-group mt-1">
            <input type="text" class="form-control" name="name" placeholder="Full name">
          </div>

          <div class="form-group mt-1">
            <input type="text" class="form-control" name="email" placeholder="Email">
          </div>

          <div class="form-group mt-1">
            <input type="text" class="form-control" name="restaurant" placeholder="Restaurant">
          </div>

          <div class="form-group mt-1">
          <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" name="comments"></textarea>
          </div>

          <button type="submit" class="btn btn-primary btn-block mt-1">Send</button>
        </form>
      </div>
    </div>


    <?php
    $conn = new mysqli('localhost','root','','restaurantv2');
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM comments";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo '<div class="d-flex flex-wrap">';
        while($row = $result->fetch_assoc()) {
            echo '<div class="card m-3" style="width: 18rem;">
                      <div class="card-body">
                        <h5 class="card-title">' . $row["name"] . '</h5>
                        <p class="card-text">Restaurant: ' . $row["restaurant"] . '</p>
                        <p class="card-text">Comment: ' . $row["comments"] . '</p> 
                      </div>
                    </div>';
        }
        echo '</div>';
    } else {
        echo "0 results";
    }
    $conn->close();
?>


<?php
require_once "footer.php";
?>



