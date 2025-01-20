$(document).ready(function () {

    $('#btnSignUp').click(function () {
        console.log("Navigating to #userSignUp"); // Debug log

        // Navigate to internal page
        $.mobile.changePage('#userSignUp', {
            transition: 'slide', // Add slide transition
        });
    });

    // Handle Sign-Up Form Submission
    $(document).on('submit', '#frmUserSignUp', function (e) {
        e.preventDefault(); // Prevent form submission

        // Serialize form data
        var values = $(this).serialize();
        console.log("Sign-Up Form Data:", values); // Debug log

        // Perform AJAX request
        $.ajax({
            url: 'save-signup.php',
            type: 'POST',
            data: values,
            success: function (response) {
                console.log("Sign-Up Success:", response); // Debug log
                alert('User registered successfully!');
                $('#frmUserSignUp')[0].reset(); // Reset form
                $.mobile.changePage('#startPage', {
                    transition: 'slide', 
                    reloadPage: true 
                });
            },
            error: function (jqXHR, textStatus, errorThrown) {
                console.error('Sign-Up Error:', textStatus, errorThrown); // Debug log
            }
        });
    });
});
