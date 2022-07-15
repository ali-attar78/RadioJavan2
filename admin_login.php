<?php include "header_main.php";
include "dataBase.php";?>



    <div class="container py-5 h-100" ">
        <div class="row d-flex justify-content-center align-items-center h-25" >
            <div class="col-12 col-md-6 col-lg-5 col-xl-4" >
                <div class="card  text-light card_login" >
                    <div class="card-body p-5 text-center">

                        <form method="post" action="admin_login_process.php">
                            <h2 class="mb-5 mt-5">Admin Login</h2>
                            <!-- Email input -->

                            <div class="input-container">
                                <input type="text" name="username" required=""/>
                                <label>UserName</label>
                            </div>
                            <div class="input-container">
                                <input type="password" name="password" required=""/>
                                <label>Password</label>
                            </div>
                            </div>

                            <!-- 2 column grid layout for inline styling -->
                            <div class="row mb-4">
                                <div class="col d-block justify-content-center">
                                    <!-- Checkbox -->
                                    <div class="form-check check_admin">
                                        <input class="form-check-input" name="checkLogin" type="checkbox" value="" id="form2Example31" checked />
                                        <label class="form-check-label" for="form2Example31"> Remember me </label>
                                    </div>
                                </div>


                            <!-- Submit button -->
                            <input type="submit" class="btn btn-secondary btn-block d-block login_admin " value="Sign in" style="width: 50%; color: white"></input>


                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>





<?php include "footer_main.php"; ?>
