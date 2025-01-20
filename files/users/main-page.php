<!DOCTYPE html>
<html>
    <head>
        <title>Educational Assistance</title>
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

            <style>
            #startPage .ui-content {
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                height: 100vh;
            }

            #startPage button {
                width: 350px;
                height: 50px;
                font-size: 20px;
                margin: 10px;
            }
            </style>
    </head>

    <body>
        <!-- START PAGE -->
        <div id="startPage" data-role="page">
        <div data-role="content">
            <form id="frmStartPage">
                <button type="button" onclick="window.location.href='loginad-page.php'">Log In As Admin</button>
                <button type="button" onclick="window.location.href='loginapp-page.php'">Log In As Applicant</button>
                <button type="button" id="btnSignUp">Sign Up</button>
            </form>
        </div>
        <footer id="Ftr" data-role="footer"></footer>
        </div>

        <!-- PAGE FOR USER SignUp -->
        <div id="userSignUp" data-role="page">
                <div data-role="header" data-position="fixed">
                    <center><h4>Sign Up</h4></center>
                </div>
                    <div data-role="content">     
                    <form action="#" method="post" id="frmUserSignUp" name="frmUserSignUp">
                        <!-- TEXT INPUT ELEMENTS -->
                        <div class="ui-field-contain">
                        <label for="Applicant_ID_Create">Applicant ID:</label>
                        <input type="text" name="Applicant_ID_Create" id="Applicant_ID_Create" placeholder="Enter Applicant ID" value="" required>
                        </div>

                        <div class="ui-field-contain">
                            <label for="Username_Create">Username:</label>
                            <input type="text" name="Username_Create" id="Username_Create" placeholder="Enter Username" value="" required>
                        </div>

                        <div class="ui-field-contain">
                            <label for="Password_Create">Password:</label>
                            <input type="password" name="Password_Create" id="Password_Create" placeholder="Enter Password" value="" required>
                        </div>

                        <div class="ui-field-contain">
                        <label for="Email_Address_Create">Email Address:</label>
                        <input type="email" name="Email_Address_Create" id="Email_Address_Create" placeholder="Enter Email Address" value="" required>
                        </div>

                        <div class="ui-field-contain">
                        <label for="First_Name_Create">First Name:</label>
                        <input type="text" name="First_Name_Create" id="First_Name__Create" placeholder="Enter First Name" value="" required>
                        </div>

                        <div class="ui-field-contain">
                        <label for="Middle_Name_Create">Middle Name:</label>
                        <input type="text" name="Middle_Name_Create" id="Middle_Name_Create" placeholder="Enter Middle Name" value="" required>
                        </div>

                        <div class="ui-field-contain">
                        <label for="Last_Name_Create">Last Name:</label>
                        <input type="text" name="Last_Name_Create" id="Last_Name_Create" placeholder="Enter Last Name" value="" required>
                        </div>

                        <div class="ui-field-contain">
                        <p>Choose a unique Username and Password Combination.</p>
                        <p>Contact the system administrator if problem occurs.</p>
                        </div>

                    <footer id="Ftr" data-role="footer" data-position="fixed">
                    <div data-role="navbar">                 
                        <ul>                   
                        <li><a type="button" href="#startPage" reloadPage="true" id="btnBackLog" data-icon="back">Back</a></li>
                            <li><button type="submit" href="#" id="btnSignUp" data-icon="check">Sign Up</a></li>
                            <li><button type="reset" href="#" id="btnSignUp" data-icon="delete">Reset</a></li>
                        </ul>

                    </div>
                </footer>
                </form>
            </div> 

        <!-- Add JavaScript References -->
         <script src="../assets/js/user.js"></script>   
    </body>
</html>
