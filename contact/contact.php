<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="contact.css">
</head>
<body>
<div class="pop" id="pop">
    <img src="tick.png" >
    <h2>Thank You!</h2>
    <pre>
      
        echo "User: ";
        echo $_POST["user"];
        echo "<br>";
        
        echo "Email: ";
        echo $_POST["email"];
        echo "<br>";
        
        echo "Message: ";
        echo $_POST["message"];
        echo "<br>";
        
        // Add message indicating the message is sent
        echo "Message is sent.";
        ?>
    </pre>
    <button type="button" onclick="closepop()">OK</button>
   </div> 
   <script>
    let Pop = document.getElementById("pop");
    function openpop(){
       Pop.classList.add("open-pop"); 
    }
    function closepop(){
       Pop.classList.remove("open-pop"); 
    }
   </script>
</body>
</html>