<!--
guestbook.php
Phillip Ball
02/01/2021

-->

<?php
    $style = "guestbookStyles";
    $title = "Phillips Guestbook";
    include("includes/head.php");
?>
    <!-- Container -->
    <div class="container">

        <!-- Jumbotron -->
        <div class="jumbotron text-center">
            <h1>Phillips Guestbook</h1>
            <p class="lead">Please enter the below information so that we can easily get in contact later!</p>
        </div>

        <!-- Form -->
        <form action="thankyou.php" method="post" id="guestForm">
            <!-- Contact Info -->
            <fieldset class="form-group mx-1 row" id="row1">
                <div class="col-4">
                    <!-- First Name -->
                    <div class="form-group">
                        <label>First Name
                            <input type="text" class="form-control" id="fname" placeholder="Enter first name" name="first">
                        </label>
                        <span class="err" id="errfname">Please enter your first name</span>
                    </div>
                    <!-- Last Name -->
                    <div class="form-group">
                        <label>Last Name
                            <input type="text" class="form-control" id="lname" placeholder="Enter last name" name="last">
                        </label>
                        <span class="err" id="errlname">Please enter your last name</span>
                    </div>
                </div>
                <div class="col-4">
                    <!-- Job Title -->
                    <div class="form-group">
                        <label>Job Title
                            <input type="text" class="form-control" id="jtitle" placeholder="Enter job title" name="title">
                        </label>
                    </div>
                    <!-- Company -->
                    <div class="form-group">
                        <label>Company
                            <input type="text" class="form-control" id="company" placeholder="Enter company name" name="company">
                        </label>
                    </div>
                </div>
                <div class="col-4">
                    <!-- LinkedIn URL -->
                    <div class="form-group">
                        <label>LinkedIn URL
                            <input type="text" class="form-control" id="linkin" placeholder="Enter LinkedIn URL" name="url">
                        </label>
                        <span class="err" id="errlinkedin">Please be sure to enter the full URL</span>
                    </div>
                    <!-- Email Address -->
                    <div class="form-group">
                        <label>Email Address
                            <input type="text" class="form-control" id="email" placeholder="Enter email address" name="email">
                        </label>
                        <span class="err" id="erremail">Please enter your email address to be added to my mailing list</span>
                    </div>
                </div>
            </fieldset>

            <!-- How We Met -->
            <fieldset class="form-group mx-1 row" id="row2">
                <!-- How Did We Meet? -->
                <div class="form-group col-6">
                    <label>How did we meet?
                        <select class="form-control" id="selecthowmet" name="howmet">
                            <option value="none">Select</option>
                            <option value="school">School</option>
                            <option value="meetup">Meetup</option>
                            <option value="jobfair">Job Fair</option>
                            <option value="notyet">We haven't met yet</option>
                            <option value="other">Other</option>
                        </select>
                    </label>
                    <span class="err" id="errselecthowmet">How we met is required</span>
                    <input type="text" class="form-control mt-5" id="othertextbox" name="howmetother" placeholder="Other (please specify)">
                </div>
                <!-- Message -->
                <div class="form-group col-6">
                    <label>Message
                        <textarea class="form-control" rows="5" name="message"></textarea>
                    </label>
                </div>
            </fieldset>

            <!-- Mailing List -->
            <fieldset class="form-group mx-1 row d-inline" id="row3">
                <!-- Checkbox -->
                <div class="form-check col-12 mx-3">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" id="maillist" name="maillist">Please add me to your mailing list!
                    </label>
                </div>
                <!-- Email Format -->
                <div class="col-12 my-3" id="emailformat">
                    <p>Please Choose an email format:</p>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="emailradio" value="option1" checked>HTML
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="emailradio" value="option2">Text
                        </label>
                    </div>
                </div>
            </fieldset>

            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary float-right mr-5">Submit</button>
        </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="scripts/guestbook.js"></script>
</body>
</html>