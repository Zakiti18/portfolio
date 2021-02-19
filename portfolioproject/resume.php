<!--
resume.php
Phillip Ball
02/01/2021

-->

<?php
    $style = "resumeStyles";
    $title = "Phillips Resume";
    include("includes/head.php");
?>
    <div class="container">
        <div>
            <!-- Header (name, phone, and links) -->
            <header class="row text-center justify-content-center pb-3">
                <h1 class="col-12">Phillip Ball</h1>
                <div class="col-4" id="linksleft">
                    <p><a href="mailto:phillipball1997@gmail.com">My Email</a></p>
                </div>
                <div class="col-3 px-0 mx-2">
                    <img src="images/me.jpg" alt="Phillip Ball">
                </div>
                <div class="col-4" id="linksright">
                    <p><a href="https://www.linkedin.com/in/phillip-ball-link/">My LinkedIn</a></p>
                    <p><a href="https://github.com/Zakiti18">My GitHub</a></p>
                </div>
            </header>
        </div>

        <div>
            <!-- Summary -->
            <section>
                <h2>Summary</h2>
                <p>Developer in the Seattle area, looking for a summer internship position related to software development.</p>
            </section>
        </div>

        <div>
            <!-- Location -->
            <section>
                <h2>Education</h2>
                <div>
                    <p>
                        <strong class="d-inline">Bachelor of Applied Science, Software Development</strong>
                        <span class="float-right">2022</span>
                        <br>Green River College, Auburn, WA
                        <br>I’ll be receiving this degree because of my great interest in programming, especially developing Java applications.
                    </p>
                    <p>
                        <strong class="d-inline">Bachelor of Applied Science, Software Development</strong>
                        <span class="float-right">2020</span>
                        <br>Green River College, Auburn, WA
                        <br>I’ll be receiving this degree because of my great interest in programming, especially developing Java applications.
                    </p>
                </div>
            </section>
        </div>

        <div>
            <!-- Skills and Certifications -->
            <section class="row mx-0">
                <h2 class="col-12">Skills and Certifications</h2>
                <!-- Left half -->
                <ul>
                    <li>Languages: Java, Python, C#, JavaScript, SQL, PHP</li>
                    <li>Web: HTML, CSS, Bootstrap, JQuery</li>
                    <li>Agile: pair programming, working in sprints</li>
                </ul>
                <!-- Right half -->
                <ul>
                    <li>Tools: IntelliJ, JGrasp, Unity, Eclipse, PHPStorm...</li>
                    <li>Collaborations: Zoom, Discord</li>
                    <li>High Honor Graduate</li>
                </ul>
            </section>
        </div>

        <div>
            <!-- Experience -->
            <section class="border-bottom-0">
                <h2>Experience</h2>
                <div>
                    <strong class="d-inline">Coneybeare Cleantech Website</strong>
                    <span class="float-right">2021</span>
                    <ul>
                        <li>This website was made for Coneybeare Cleantech, on the site the user is able to research and/or sign up.</li>
                        <li>This project has supplied me with valuable experience working with a team.</li>
                        <li>My team JDPR and I worked together using HTML, CSS, PHP, and JavaScript in PHPStorm to make this website.</li>
                    </ul>
                </div>
                <div>
                    <strong class="d-inline">Chess Program</strong>
                    <span class="float-right">2018</span>
                    <ul>
                        <li>The board game chess with simple controls, it allows two people to enjoy a fun game together.</li>
                        <li>Impressed a classroom of college student developers as well as receiving high praise from the instructor.</li>
                        <li>I created and wrote the program in Python, the editor I used was Python Shell.</li>
                    </ul>
                </div>
                <div>
                    <strong class="d-inline">Flashcard Application</strong>
                    <span class="float-right">2020</span>
                    <ul>
                        <li>Application that makes and saves flashcards, can also attach tags to cards for easy sorting.</li>
                        <li>Is now used by family and friends. Feedback has been that the app is very useful.</li>
                        <li>I created and wrote the application in Java using JGrasp as an editor.</li>
                    </ul>
                </div>
                <div>
                    <strong class="d-inline">ASCII Art Farming Game</strong>
                    <span class="float-right">2019</span>
                    <ul>
                        <li>Farming simulator game using ASCII art. Features multiple menus and a day night cycle.</li>
                        <li>Those that helped test enjoyed it so much they requested I continue working on it.</li>
                        <li>I created and wrote the game in Java, my editor of choice was JGrasp.</li>
                    </ul>
                </div>
                <div>
                    <strong class="d-inline">Crosswords Puzzle Game</strong>
                    <span class="float-right">2018</span>
                    <ul>
                        <li>A game based on crossword puzzles and it’s in the Japanese language.</li>
                        <li>Brought some time of enjoyment to multiple college students that were studying Japanese.</li>
                        <li>I created and wrote the game in Python, I used Python Shell for my editor.</li>
                    </ul>
                </div>
                <div>
                    <strong class="d-inline">Playing Cards Programs</strong>
                    <span class="float-right">2021</span>
                    <ul>
                        <li>A set of programs that allows the user to make a deck of standard playing cards.</li>
                        <li>Impressed an experienced and professional developer with code cleanliness and efficiency.</li>
                        <li>I created and wrote the programs in Java using IntelliJ as my editor.</li>
                    </ul>
                </div>
                <div>
                    <strong class="d-inline">Charity Emblem</strong>
                    <span class="float-right">2017</span>
                    <ul>
                        <li>Successfully led a 24 hour charity marathon event along with a group of friends.</li>
                        <li>Rose over $600 for Saint Jude’s Children Research Hospital.</li>
                        <li>I led and housed a group of 8. The event was streamed live on Twitch.</li>
                    </ul>
                </div>
                <div>
                    <strong class="d-inline">Art Piece</strong>
                    <span class="float-right">2019</span>
                    <ul class="mb-0 pb-2">
                        <li>A piece of artwork that was entered into an art competition at Green River College.</li>
                        <li>This piece received second place, and as an honorable mention it was displayed in the art building on campus.</li>
                        <li>I drew and entered this art piece, I had used pencils and colored pens.</li>
                    </ul>
                </div>
            </section>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>