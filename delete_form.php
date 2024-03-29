<!DOCTYPE html>
<html>
  <head>
    <title>Colourful Form</title>
    <style>
      /* Set background color for the page */
      body {
        background-color: #9cb6eb;
      }
      
      /* Style the form container */
      .form-container {
        background-color: #fbffff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0px 0px 5px #888888;
        max-width: 500px;
        margin: 0 auto;
      }
      
      /* Style the form heading */
      .form-heading {
        color: #ff4081;
        font-size: 28px;
        margin-bottom: 20px;
        text-align: center;
      }
      
      /* Style the form input fields */
      input[type="text"],
      input[type="email"],
      input[type="number"],
      input[type="date"] {
        width: 100%;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        margin-bottom: 16px;
      }
      
      /* Style the form submit button */
      input[type="submit"] {
        background-color: #ff4081;
        color: #fff;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        transition: background-color 0.3s ease-in-out;
      }
      
      /* Change submit button background color on hover */
      input[type="submit"]:hover {
        background-color: #ff6699;
      }
    </style>
  </head>
  <body>
    <div></div>
    <div class="form-container">
      <h2 class="form-heading">Employee Details</h2>
      <form method="post" action="delete.php">
        <label for="eid">Employee ID:</label>
        <input type="text" id="name" name="t11" placeholder="Employee ID">

        <input type="submit" value="Delete">
        
      </form>
    </div>
  </body>
</html>
