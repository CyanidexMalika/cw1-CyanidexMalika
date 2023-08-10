
    document.addEventListener("DOMContentLoaded", function() {
        const deleteLinks = document.querySelectorAll(".navigation_item");
        
        deleteLinks.forEach(link => {
            link.addEventListener("click", function(e) {
                e.preventDefault();
                const userId = this.getAttribute("data-id");
                if (confirm("Are you sure you want to delete this user?")) {
                    deleteUser(userId);
                }
            });
        });
        
        function deleteUser(userId) {
            const xhr = new XMLHttpRequest();
            xhr.open("POST", "delete_user.php", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xhr.onreadystatechange = function() {
                if (xhr.readyState === XMLHttpRequest.DONE) {
                    if (xhr.status === 200) {
                        // Handle success (maybe refresh user list or display a success message)
                        alert("User deleted successfully.");
                        location.reload();
                    } else {
                        // Handle error (display an error message)
                        alert("Error deleting user.");
                    }
                }
            };
            xhr.send("user_id=" + encodeURIComponent(userId));
        }
    });

