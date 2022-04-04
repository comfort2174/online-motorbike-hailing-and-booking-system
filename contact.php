<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/@picocss/pico@latest/css/pico.min.css">
    
    <title>conctact</title>
    
</head>
<body>
    <nav>
        <a href="home.html">home</a>
    </nav>
    <div class="container">
    <form action="save.php" method="post">
        <div class="form-group">
    <label for="name">Name</label>
    <input type="text" name="name" id="name" class="form-control">
</div>
<div class="form-group">
    <label for="email">Email</label>
           <input type="email" name="email" id="email" class="form-control">
              </div>
                    <div class="fo rm-group">
                         <label for="message">Message</label>
                             <textarea name="message" id="message" class="form-control"></textarea>
                         </div>
                         <div class="form-group">
                      <button type="submit" class="btn btn-primary">Submit</button>
                 </div>
             </div>
     </body>
</html>