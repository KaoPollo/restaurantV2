<?php
include_once 'header.php';
?>
  
          <div id="card" class="container mt-5">
            <div class="d-flex flex-nowrap justify-content-center">
                <div id="card1" class="col-10 col-lg-6">
                    <div class="card mx-auto">
                        <div class="card-body">

                          <div class="container my-3">
                            <div class="d-flex flex-wrap justify-content-center">
                              <h3 class="text-center col-12"><strong>CONTACT</strong></h3>
                            </div>
                          </div>

                          <div class="container mt-2">
                            <div>

                              <div class="form-floating mt-2">
                                <input type="text" class="form-control" id="floatingInput" placeholder="">
                                <label for="floatingInput">First Name</label>
                              </div>

                              <div class="form-floating mt-2">
                                <input type="text" class="form-control" id="floatingInput" placeholder="">
                                <label for="floatingInput">Last Name</label>
                              </div>
                          

                              <div class="form-floating mt-2">
                                <input type="email" class="form-control" id="floatingInput" placeholder="">
                                <label for="floatingInput">Email address</label>
                              </div>

                              <div class="form-floating mt-2">
                                <input type="text" class="form-control" id="floatingInput" placeholder="">
                                <label for="floatingInput">Subject</label>
                              </div>

                              <div class="form-floating mt-2">
                                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                                <label for="floatingTextarea2">Comments</label>
                              </div>

                              <button type="submit" class="btn btn-danger mt-2">Send</button>

                            </div>
                          </div>

                          
                          
                      </div>
                    </div>
                </div>          



<?php
include_once 'footer.php';
?>