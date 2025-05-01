<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="nav.css">
</head>
<body>
    <ul class="nav">
        <span class="toggleMenu"></span>
    </ul>
    <script>
        let toggleMenu = document.querySelector('.toggleMenu');
        let nav = document.querySelector('.nav');
        toggleMenu.onclick = function() {
            nav.classList.toggle('active');
        }
    </script>
    </body>
        
    </html>