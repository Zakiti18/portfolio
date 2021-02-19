<!--
admin.php
Phillip Ball
02/18/2021

-->

<?php
    // connects the head
    $style = "adminStyles";
    $title = "Phillips Guestbook Review";
    include("includes/head.php");

    // connects the database to retrieve info
    require ('/home4/philball/connect.php');
    $cnxn = connect();
?>

    <!-- Container -->
    <div class="container">

        <!-- Jumbotron -->
        <div class="jumbotron text-center">
            <h1>Those that have filled out my guestbook</h1>
        </div>

        <!-- The Table that displays data -->
        <table id="theTable">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Name</th>
                    <th>Title/Company</th>
                    <th>LinkedIn</th>
                    <th>Email</th>
                    <th>How We Met</th>
                    <th>Message</th>
                    <th>Mailing List</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    // makes and preforms a query that gets the total number of guests
                    $sql = "SELECT COUNT(*) AS total FROM guestbook";
                    $result = mysqli_query($cnxn, $sql);
                    $numOfGuests = mysqli_fetch_assoc($result);
                    $numOfGuests = $numOfGuests['total'];

                    // makes and preforms a query that then stores each column in the database
                    // into a variable that is then used to display the info
                    $sql = "SELECT * FROM guestbook ORDER BY datestamp";
                    $result = mysqli_query($cnxn, $sql);
                    foreach($result as $row){
                        $date = $row['datestamp'];
                        $firstName = $row['first'];
                        $lastName = $row['last'];
                        $title = $row['title'];
                        $company = $row['company'];
                        $linkedIn = $row['url'];
                        $email = $row['email'];
                        $howMet = $row['howmet'];
                        $message = $row['message'];
                        $emailFormat = $row['emailformat'];

                        echo "<tr>
                            <td>$date</td>
                            <td>$firstName $lastName</td>
                            <td>$title at $company</td>
                            <td>$linkedIn</td>
                            <td>$email</td>
                            <td>$howMet</td>
                            <td>$message</td>
                            <td>$emailFormat</td>
                          </tr>";
                    }
                ?>
            </tbody>
        </table>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- Plugin for DataTables and links to a javascript file that contains a Jquery function -->
    <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <script src="scripts/admin.js"></script>
</body>
</html>