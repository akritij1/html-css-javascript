<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Admin Dashboard</title>
   <link rel="stylesheet" href="admin.css">
</head>
<body>
   <header>
      <h1>Admin Dashboard</h1>
      <a href="\landing page 1\index.html">
      <button class="btn btn-home" >Home</button>
      </a>
      <a href="\login and registration\login_form.php">
<button class="btn btn-logout">Logout</button>
</a>
   </header>
   <div class="container">
      <!-- Dashboard content here -->
      <div class="quiz-theme">
      <h2> QuizVenture</h2>
         <h2>Welcome, Admin</h2>
         <!-- Add animated elements here -->
         <!-- Insert, retrieve, read, delete options -->
      </div>
      <div class="user-details">
         <h2>User Details</h2>
         <!-- Table to display user details -->
         <table>
            <thead>
               <tr>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Action</th>
               </tr>
            </thead>
            <tbody>
      <tr>
         <td>John Doe</td>
         <td>john@example.com</td>
         <td>
         <button class="btn btn-edit">Edit</button>
         <button class="btn btn-delete">Delete</button>
         </td>
      </tr>
      <tr>
         <td>Jane Smith</td>
         <td>jane@example.com</td>
         <td>
         <button class="btn btn-edit">Edit</button>
         <button class="btn btn-delete">Delete</button>
         </td>
      </tr>
      <tr>
         <td>Alice Johnson</td>
         <td>alice@example.com</td>
         <td>
         <button class="btn btn-edit">Edit</button>
         <button class="btn btn-delete">Delete</button>
         </td>
      </tr>
      <!-- Add more rows as needed -->
   </tbody>
         </table>
      </div>
   </div>
</body>
</html>
