<!DOCTYPE html>
<html>

<head>
  <title>Sample API Page</title>
  <!-- Add Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>

<body>
  <div class="container">
    <h1>Insert Data into Database</h1>
    <form id="myForm" method="post" action="api/insert-data">
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" id="name" name="name" required>
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="message">Message:</label>
        <textarea class="form-control" id="message" name="message" required></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>

  <!-- Add jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- Add Bootstrap JS -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <script>
    // Handle form submission
    $(document).ready(function() {
      $("#myForm").submit(function(event) {
        // Prevent default form submission
        event.preventDefault();

        // Get form data
        var formData = {
          name: $("#name").val(),
          email: $("#email").val(),
          message: $("#message").val()
        };

        // Submit form data via AJAX POST request
        $.ajax({
          url: "api/insert-data",
          type: "POST",
          data: JSON.stringify(formData),
          contentType: "application/json",
          success: function(response) {
            // Handle successful response
            alert("Data inserted successfully!");
            $("#myForm")[0].reset(); // Reset the form
          },
          error: function(xhr, status, error) {
            // Handle error response
            alert("Error: " + error);
          }
        });
      });
    });
  </script>
</body>

</html>
