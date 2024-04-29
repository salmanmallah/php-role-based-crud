<!-- alert for insertino -->
        <?php
            

            // Check if success parameter is set in URL
            if (isset($_GET['success'])) {
                if ($_GET['success'] === 'true') {
                    // If success, display success alert
                    echo '<div id="successAlert" class="alert alert-success w-50" role="alert">
                            New record created successfully!
                        </div>';
                } else {
                    // If error, display error alert
                    echo '<div id="errorAlert" class="alert alert-danger" role="alert">
                            Error: ' . urldecode($_GET['error_message']) . '
                        </div>';
                }
            }
       
            // Check if success parameter is set in URL
            if (isset($_GET['delete_success'])) {
                if ($_GET['delete_success'] === 'true') {
                    // If success, display success alert
                    echo '<div id="successAlert" class="alert alert-success w-50 " role="alert">
                            Record deleted successfully!
                        </div>';
                } else {
                    // If error, display error alert
                    echo '<div id="errorAlert" class="alert alert-danger" role="alert">
                            Error: ' . urldecode($_GET['delete_error_message']) . '
                        </div>';
                }
            }
       
            // Check if success parameter is set in URL
            if (isset($_GET['update_success'])) {
                if ($_GET['update_success'] === 'true') {
                    // If success, display success alert
                    echo '<div id="successAlert" class="alert alert-success" role="alert">
                            Recorded Updated Successfuly
                        </div>';
                } else {
                    // If error, display error alert
                    echo '<div id="errorAlert" class="alert alert-danger" role="alert">
                            Error: ' . urldecode($_GET['udpate_error_message']) . '
                        </div>';
                }
            }


             // Check if success parameter is set in URL
            if (isset($_GET['signup_success'])) {
                if ($_GET['signup_success'] === 'true') {
                    // If success, display success alert
                    echo '<div id="successAlert" class="alert alert-success" role="alert">
                            Sign Up Successfull!
                        </div>';
                } else {
                    // If error, display error alert
                    echo '<div id="errorAlert" class="alert alert-danger" role="alert">
                            Error: ' . urldecode($_GET['signup_error_message']) . '
                        </div>';
                }
            }

              // Check if success parameter is set in URL
            if (isset($_GET['login_failed'])) {
                if ($_GET['login_failed'] === "false") {
                    // If success, display success alert
                    echo '<div id="successAlert" class="alert alert-warning" role="alert">
                            login failed
                        </div>';
                } 
            }

            if (isset($_GET['login_success'])) {
                if ($_GET['login_success'] === 'true') {
                    // If success, display success alert
                    echo '<div id="successAlert" class="alert alert-success position-fixed w-25" role="alert">
                                Login Successfull!
                        </div>' ;
                } 
            }
        ?>