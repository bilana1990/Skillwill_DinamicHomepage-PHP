<!DOCTYPE html>
<html>
<head>
    <title>My First Web Page</title>
</head>
<body>
    <style>
        body{
            background-color: lime;
        }
        nav ul{
            display: flex;
            gap: 100px;
            justify-content: center;
            margin-top: -55px;
            margin-left: 200px;
        }
        h1{
            margin-left: 100px;
        }
        nav ul li a{
            text-decoration: none;
            list-style: none;
            font-size: 30px;
            color: red;
        }
        .project1{
            border: 3px solid black;
            border-radius: 30px;
            background-color: red;
            width: 300px;
            padding-left: 20px;
            color: white;
            margin-left: 100px;
            margin-top: 50px;
        
        }

        .project2{
            border: 3px solid black;
            border-radius: 30px;
            background-color: blue;
            width: 300px;
            padding-left: 20px;
            color: white;
            margin-left: 100px;
            margin-top: 50px;
        
        }
       

    </style>

    <?php
        include("backend.php");
    ?>

    <header>
        <h1>Welcome to My Website</h1>
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
    </header>
    <section class="section">
    <?php
    foreach($projects as $project){
        echo ' 
        <div class="project1">
            <h2 class="title">'. $project['title'] .'</h2>
            <p class="p">Lorem ipsum dolor sit amet consectetur <br>
                adipisicing elit. Quae officiis aut mollitia,<br>
                 quibusdam perferendis nam facere labore necessitatibus.<br>
                  Veritatis tempora maxime excepturi delectus ut, architecto<br>
                   reiciendis molestias. Ut, reiciendis est.</p>
        </div>
        ';


        echo ' 
        <div class="project2">
            <h2 class="title">'. $project['title'] .'</h2>
            <p class="p">Lorem ipsum dolor sit amet consectetur <br>
                adipisicing elit. Quae officiis aut mollitia,<br>
                 quibusdam perferendis nam facere labore necessitatibus.<br>
                  Veritatis tempora maxime excepturi delectus ut, architecto<br>
                   reiciendis molestias. Ut, reiciendis est.</p>
        </div>
        ';
    }

    ?>
    </section>
    
   

    <footer>
       
    </footer>
</body>
</html>