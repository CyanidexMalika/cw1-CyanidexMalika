
    document.addEventListener("DOMContentLoaded", function() {
        const deleteLinks = document.querySelectorAll(".navigation_item");
        // Select all elements with class "navigation_item" and store them in deleteLinks
        deleteLinks.forEach(link => {
            link.addEventListener("click", function(e) {
                e.preventDefault();
                const userId = this.getAttribute("data-id");
                // Show a confirmation dialog before proceeding with user deletion
                if (confirm("Are you sure you want to delete this user?")) {
                    deleteUser(userId);
                }
            });
        });
         // Function to send a request to delete a user
        function deleteUser(userId) {
            const xhr = new XMLHttpRequest();// Create a new XMLHttpRequest object
            xhr.open("POST", "delete_user.php", true);// Open a POST request to "delete_user.php
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xhr.onreadystatechange = function() {
                if (xhr.readyState === XMLHttpRequest.DONE) {
                    if (xhr.status === 200) {
                    
                        alert("User deleted successfully.");
                        location.reload();
                    } else {
                      
                        alert("Error deleting user.");
                    }
                }
            };
            // Send the user ID as a parameter in the request body
            xhr.send("user_id=" + encodeURIComponent(userId));
        }
    });

