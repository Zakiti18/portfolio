<!--
thankyou.php
Phillip Ball
02/05/2021

-->
<?php
// Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Connect to the database
require ('/home4/philball/connect.php');
$cnxn = connect();

$style = "thankyouStyles";
$title = "Thank You!";
include("includes/head.php");
?>

    <!-- Container -->
    <div class="container">
        <!-- Jumbotron -->
        <div class="jumbotron">
            <h1>Thank you!</h1>
            <p class="lead">I have received the information from your input. I look forward to contacting you!</p>
        </div>
    </div>

    <?php
        // store the information into variables
        $first = $_POST['first'];
        $last = $_POST['last'];
        $title = $_POST['title'];
        $company = $_POST['company'];
        $url = $_POST['url'];
        $email = $_POST['email'];

        // checks if the guest met me in a way other than options provided
        if($_POST['howmet'] == "other"){
            $howMet = $_POST['howmetother'];
        }
        else{
            $howMet = $_POST['howmet'];
        }

        if(!empty($_POST['message'])){
            $message = $_POST['message'];
        }
        else{
            $message = "NO MESSAGE";
        }

        // first checks if the guest selected to be added to the mailing list
        // then checks if the guest wants HTML or TEXT for the format
        if(isset($_POST['maillist'])){
            if($_POST['emailradio'] == "option1")
                $emailFormat = "HTML";
            else{
                $emailFormat = "TEXT";
            }
        }
        else{
            $emailFormat = "NA";
        }

        // defines the query
        $sql = "INSERT INTO guestbook
            (datestamp, first, last, title, company, url, email, howmet, message, emailformat)
    	    VALUES
            (CURDATE(), '$first', '$last', '$title', '$company', '$url', '$email', '$howMet', '$message', '$emailFormat')";

        // sends the query to the database
        // inserts the information into the database
        mysqli_query($cnxn, $sql);
    ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>