<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wolf studios</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="shortcut icon" type="image/png" href="img/wolf4.jpg">
</head>
<body>
<nav>
    <ul>
        <li><a href="moresec.html">More</a>
            <ul>
                <li><a href="videos.html">Videos</a></li>
                <li><a href="tutorials.html">Tutorials</a></li>
                <li><a href="blog.html">Blogs</a></li>
                <li><a href="apps.html">Apps</a></li>
                <li><a href="projects.html">Projects</a></li>
                <li><a href="games.html">Games</a></li>
            </ul>
        </li>

        <li><a href="accsec.html">Accounts</a>
            <ul>
                <li><a href="login.php">Login</a></li>
                <li><a href="register.php">Register</a></li>
            </ul>
        </li>

        <li><a href="abtsec.html">About</a>
            <ul>
                <li><a href="about.html">About</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
        </li>

        <li><a href="index.html">Home</a></li>

    </ul>
    
    <img class="wolf1" src="img/wolf1.jpg" alt="">
</nav>

    <section class="login-form">
        <h2>Sign In</h2>
        <form action="includes/login.inc.php">
            <input type="text" name="name" class="name" placeholder="Username/Email">
            <input type="password" name="password" class="password" placeholder="password">
            <button type="submit" name="submit" class="submit">Sign In</button>
        </form>
    </section>
</body>
</html>
