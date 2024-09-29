<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Simple Structure</title>
    <link rel="stylesheet" href="../CSS/customstyle.css">
</head>
<body>
    <header>
        <h1>Collage of Information and Computing Science</h1>
        <h3>Bachelor of Science in Information System</h3>
        <div class ="container">
            <a href="../index.html">Home</a> |
            <a href="about.html">About</a> |
            <a href="contact.html">Contact</a> |
            <a href="inquiry.html">Inquiry</a> |
            <a href="profile.html">Profile</a> |

        </div>
    </header>

    <section>
        <nav>
            <ul class="navigation_menu">
                <li><a href="heading.html">Heading</a></li>
                <li><a href="tables.html">Tables</a></li>
                <li><a href="list.html">HTML List</a></li>
                <li><a href="forms.html">Forms</a></li>
                <li><a href="form.post.php">Form Post Method</a></li>
                <li><a href="image.html">Image</a></li>
            </ul>

        </nav>
        <article>
            <h2>Form Method Post Action</h2>
            <?php
                if($_SERVER["REQUEST_METHOD"]=="POST"){
                    $fullname=htmlspecialchars($_POST['name']);
                    $yourAge=htmlspecialchars($_POST['age']);

                    echo "<h2> Your name is : ".$fullname."</h2>";
                    echo "<h2> Your age is : ".$yourAge."</h2>";

                }

            ?>
            <h1>Form Post Method</h1>
        
           
        </article>

    </section>
    <footer>
        <h2>MarSu</h2>
        <div class="footer_menu">
            <a href="about.html">About</a> |
            <a href="policy.html">Policy</a> |
            <a href="terms.html">Terms</a> |
            <a href="privacy.html">Privacy</a> |
            <a href="faq.html">FAQ</a> |
            <a href="context.html">Context</a> |
        </div>
        <div>
            <p><b>Copyright &copy 2024. </b>MarSu Sta Cruz Campus, BSIS Student</p>
        </div>
    </footer>

</body>
</html>