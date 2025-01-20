<!DOCTYPE html>
<html>
    <head>
        <title>USER APPLICATION</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Include jQuery Mobile stylesheets -->
        <link rel="stylesheet" href="../../jquery/jquery.mobile-1.4.5.min.css">

        <!-- Include the jQuery library -->
        <script src="../../jquery/jquery-1.11.3.js"></script>

        <!-- Include the jQuery Mobile library -->
        <script src="../../jquery/jquery.mobile-1.4.5.min.js"></script>

        
    </head>

    <body>
        <!-- START PAGE -->
        <div id="startPage" data-role="page">
            <div data-role="header"></div>
            <div data-role="content">
                <form id="frmStartPage">
                    <button type="button" id="btnLogin" data-icon="action">Log In</button>
                    <button type="button" id="btnSignUp" data-icon="action">Sign Up</button>
                </form>
            </div>
            <footer id="Ftr" data-role="footer"></footer>
        </div>

        <!-- SIGN-UP PAGE -->
        <div id="userSignUp" data-role="page">
            <div data-role="header">
                <h4>Create User</h4>
            </div>
            <div data-role="content">
                <form id="frmUserSignUp">
                    <label for="Applicant_ID_Create">Applicant ID:</label>
                    <input type="text" id="Applicant_ID_Create" placeholder="Enter Applicant ID" required>
                    
                    <label for="Username_Create">Username:</label>
                    <input type="text" id="Username_Create" placeholder="Enter Username" required>

                    <label for="Password_Create">Password:</label>
                    <input type="password" id="Password_Create" placeholder="Enter Password" required>

                    <label for="Email_Address_Create">Email Address:</label>
                    <input type="email" id="Email_Address_Create" placeholder="Enter Email Address" required>

                    <label for="First_Name_Create">First Name:</label>
                    <input type="text" id="First_Name_Create" placeholder="Enter First Name" required>

                    <label for="Middle_Name_Create">Middle Name:</label>
                    <input type="text" id="Middle_Name_Create" placeholder="Enter Middle Name" required>

                    <label for="Last_Name_Create">Last Name:</label>
                    <input type="text" id="Last_Name_Create" placeholder="Enter Last Name" required>

                    <p>Choose a unique Username and Password Combination.</p>
                    <p>Contact the system administrator if a problem occurs.</p>

                    <button type="submit" id="btnCreateAccount">Sign Up</button>
                    <button type="reset">Reset</button>
                </form>
            </div>
            <footer id="Ftr" data-role="footer"></footer>
        </div>

        <!-- JavaScript -->
        <script src="../assets/js/user.js"></script>
    </body>
</html>
