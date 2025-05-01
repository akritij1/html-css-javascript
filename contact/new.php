<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
  
    <header>  <h1>QuizVenture</h1><a href="\landing page 1\index.html" class="btn">Home</a></header>
   <section class="contact">
    <div class="contact-heading">

        <h1>Contact us</h1>
        <p>Please contact us Through This Form</p>
    </div>
    <form action="conn.php" method="POST">
        <input type="text" name="user" placeholder="Write Your Full Name"/>
        <input type="email"name="email"placeholder="Type Your E-mail id"/>
        <textarea name="message"placeholder="Type your message here........."></textarea>
        <button type="submit">POST</button>
        
    </form>
   </section>
   
</body>
</html>