<?php
include_once 'header.php';
?>





    <div id="card" class="container mt-5">
        <div class="d-flex flex-nowrap justify-content-center">
             <div id="card1" class="col-10 col-lg-6">
                <div class="card mx-auto">
                    <div class="card-body">
                        <section class="signup-form">
                            <div class="container my-3">
                                <div class="d-flex flex-wrap justify-content-center">
                                    <h3 class="text-center col-12"><strong>Log In</strong></h3>
                                </div>
                            </div>

                            <form action="includes/login.inc.php" method="post">
                                <div class="container mt-2">
                                    <div>
                                        <div class="form-floating mt-2">
                                            <input type="text" class="form-control"  name="uid" placeholder="Username/Email...">
                                        </div>

                                        <div class="form-floating mt-2">
                                            <input type="password" class="form-control" name="pwd" placeholder="Password...">
                                        </div>
                                        <button type="submit" name="submit" class="btn btn-danger mt-2">Log In</button>
                                    </div>
                                </div>
                            </form>
                            <?php
        if (isset($_GET["error"])){
            if ($_GET["error"] == "emptyinput"){
                echo "<p>Fill in all fields!</p>";
            }
            else if ($_GET["error"] == "wronglogin"){
                echo "<p>Incorrect login information!</p>";
            }
        }
    ?> 
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
include_once 'footer.php';
?>