<!DOCTYPE html>
<html>
<head>
    <title>USER APPLICATION</title>
        <!-- Include meta tag to ensure proper rendering and touch zooming -->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Include jQuery Mobile stylesheets -->
        <link rel="stylesheet" href="../../jquery/jquery.mobile-1.4.5.min.css">

        <!-- Include the jQuery library -->
        <script src="../../jquery/jquery-1.11.3.js"></script>

        <!-- Include the jQuery Mobile library -->
        <script src="../../jquery/jquery.mobile-1.4.5.min.js"></script>     

        <!-- Include the Custom CSS -->
        <link rel="stylesheet" href="../assets/css/custom.css">
</head>

<body>
    <!-- PAGE FOR USER LOGIN -->
    <div id="adminLogIn" data-role="page">
            <div data-role="header" data-position="fixed">
                <center><h4>Admin Log In</h4></center>
            </div>
            <div data-role="content">
                <form action="#" method="post" id="frmAdminLogIn" name="frmAdminLogIn">
                    <div class="ui-field-contain">
                        <label for="Admin_Username_Log">Admin Username:</label>
                        <input type="text" name="Admin_Username_Log" id="Admin_Username_Log" placeholder="Enter Admin Username" required>
                    </div>
                    <div class="ui-field-contain">
                        <label for="Admin_Pass_Log">Password:</label>
                        <input type="password" name="Admin_Pass_Log" id="Admin_Pass_Log" placeholder="Enter Password" required>
                    </div>
                    <footer id="Ftr" data-role="footer" data-position="fixed">
                        <div data-role="navbar">
                        <ul>                   
                        <li><a type="button" onclick="window.location.href='main-page.php'" reloadPage="true" id="btnBack" data-icon="back">Back</a></li>
                            <li><button type="submit" href="#" id="btnLogInAp" data-icon="check">Log In</a></li>
                            <li><button type="reset" href="#" id="btnLogInAp" data-icon="delete">Reset</a></li>
                        </ul>
                        </div>
                    </footer>
                </form>
            </div>
        </div>

 <!-- Add JavaScript References -->
 <script src="../assets/js/user.js"></script>                     
</body>
</html>





