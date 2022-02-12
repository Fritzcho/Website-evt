<!DOCTYPE html>
<html lang="sv">
    <head>
        <title> - Kontakt</title>
        <meta charset="UTF-8">
        <meta name="description" content="Website of ">
        <meta name="keywords" content=", teknikkonsultföretag, ingenjörstjänster, VA-området, ledningsinstallationer">
        <meta name="author" content="Alireza Ramezani Mouziraji">
        <meta name="viewport" content="width=device-width">
        <link
            rel="stylesheet"
            type="text/css"
            href="sources/stylesheet.css"
        >
        <link 
            rel="icon"
            href="sources/images/Loggor/evt_ikon.png"
        >
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="sources/script.js"></script>
    </head>


    <body>
        <header>
            <img class="logo" src="sources/images/Loggor/evt_logga_blue.png" alt="" onclick="window.location.href='index.html';">
            <nav>
                <ul id="dekstop">
                        <li><a href="services.html">Våra tjänster</a></li>
                        <li><a href="references.html">Referensprojekt</a></li>
                        <li><a href="work.html">Arbeta hos oss</a></li>
                        <li><a href="kontakt.php">Kontakta oss</a></li>
                </ul>
            </nav>
            <a href="javascript:void(0);" class="icon" onclick="openNav()">
                <i class="fa fa-bars"></i>
            </a>
        </header>

        <div id="mobileNav" class="overlay">
            <div class="overlay-content">
                <a href="index.html">Hem</a>
                <a href="services.html">Våra tjänster</a>
                <a href="references.html">Referensprojekt</a>
                <a href="work.html">Arbeta hos oss</a>
                <a href="kontakt.php">Kontakta oss</a>
            </div>
          
        </div>

        
        <div class="standard-container">
            <div class="contact-heading">
                <h1>Kontakta oss</h1>
            </div>
            <div class="contact-form">
                <form action="kontakt_skicka.php" method="post">
                <input id="baited" type="text" name="bait"></input>
                    <div class="name-input">
                        <label for="captcha">Vad är 3+2?</label><br>
                        <input type="text" name="captcha"><br>
                    </div>

                    <div class="mail-input">
                        <label for="email">E-post:</label><br>
                        <input type="text" name="email"><br>
                    </div>

                    <div class="message-input">
                        <label for="message">Beskriv ditt ärende för oss:</label><br>
                        <textarea id="message" name="message"></textarea><br>
                    </div>

                    <input class="submission-button" type="submit" value="Skicka">
                </form>
            </div>

            <div class="locations">
                <ul>
                    <li><h2>Bromma</h2></li>
                    <hr>
                    <li><h4>Adress: Mariehällsvägen 37A, 4tr</h4></li>
                    <li><h4>Postnummer: 168 65</h4>
                    <li><h4>Telefon: 070–259 63 36</h4></li>
                </ul>
                <ul>
                    <li><h2>Umeå</h2></li>
                    <hr>
                    <li><h4>Adress: Kaserngatan 3</h4></li>
                    <li><h4>Postnummer: 903 47</h4>
                    <li><h4>Telefon: 070–366 04 48</h4></li>
                </ul>
                <ul>
                    <li><h2>Vännäs</h2></li>
                    <hr>
                    <li><h4>Adress: Jämteböle 81</h4></li>
                    <li><h4>Postnummer: 911 91</h4>
                    <li><h4>Telefon: 070–325 22 36</h4></li>
                </ul>
            </div>

            <div class="contact-table">
                <h2>Medarbetare</h2>
                <table>
                    <tr>
                        <th width="5%"></th>
                        <th width="45%">Namn</th>
                        <th width="40%">Telefon</th>
                        <th>E-post</th>
                        <th width="5%"></th>
                    </tr>
                    <tr>
                        <td></td>
                        <td id="first-row">Stefan Eriksson</td>
                        <td id="first-row">070-325 22 36</td>
                        <td id="first-row"><a href="mailto:&#115;&#116;&#101;&#102;&#097;&#110;&#046;&#101;&#114;&#105;&#107;&#115;&#115;&#111;&#110;&#064;&#101;&#118;&#116;&#117;&#109;&#101;&#097;&#046;&#115;&#101;"><img src="sources/images/mail_icon.png" width="35px"></a></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Ulrika Eriksson</td>
                        <td>070-647 39 96</td>
                        <td><a href="mailto:&#117;&#108;&#114;&#105;&#107;&#097;&#046;&#101;&#114;&#105;&#107;&#115;&#115;&#111;&#110;&#064;&#101;&#118;&#116;&#117;&#109;&#101;&#097;&#046;&#115;&#101;"><img src="sources/images/mail_icon.png" width="35px"></a></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Martin Lundgren</td>
                        <td>070-366 04 48</td>
                        <td><a href="mailto:&#109;&#097;&#114;&#116;&#105;&#110;&#046;&#108;&#117;&#110;&#100;&#103;&#114;&#101;&#110;&#064;&#101;&#118;&#116;&#117;&#109;&#101;&#097;&#046;&#115;&#101;"><img src="sources/images/mail_icon.png" width="35px"></a></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Edvin Andersson</td>
                        <td>070-259 66 35</td>
                        <td><a href="mailto:&#101;&#100;&#118;&#105;&#110;&#046;&#097;&#110;&#100;&#101;&#114;&#115;&#115;&#111;&#110;&#064;&#101;&#118;&#116;&#117;&#109;&#101;&#097;&#046;&#115;&#101;"><img src="sources/images/mail_icon.png" width="35px"></a></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Jörgen Bodling</td>
                        <td>070-576 23 30</td>
                        <td><a href="mailto:&#106;&#111;&#114;&#103;&#101;&#110;&#046;&#098;&#111;&#100;&#108;&#105;&#110;&#103;&#064;&#101;&#118;&#116;&#117;&#109;&#101;&#097;&#046;&#115;&#101;"><img src="sources/images/mail_icon.png" width="35px"></a></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Shanze Dogar</td>
                        <td></td>
                        <td><a href="mailto:&#115;&#104;&#097;&#110;&#122;&#101;&#046;&#100;&#111;&#103;&#097;&#114;&#064;&#101;&#118;&#116;&#117;&#109;&#101;&#097;&#046;&#115;&#101;"><img src="sources/images/mail_icon.png" width="35px"></a></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Andreas Engström</td>
                        <td>070-259 63 37</td>
                        <td><a href="&#097;&#110;&#100;&#114;&#101;&#097;&#115;&#046;&#101;&#110;&#103;&#115;&#116;&#114;&#111;&#109;&#064;&#101;&#118;&#116;&#117;&#109;&#101;&#097;&#046;&#115;&#101;"><img src="sources/images/mail_icon.png" width="35px"></a></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Bertil Johansson</td>
                        <td>070-329 39 70</td>
                        <td><a href="mailto:e&#098;&#101;&#114;&#116;&#105;&#108;&#046;&#106;&#111;&#104;&#097;&#110;&#115;&#115;&#111;&#110;&#064;&#101;&#118;&#116;&#117;&#109;&#101;&#097;&#046;&#115;&#101;"><img src="sources/images/mail_icon.png" width="35px"></a></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Göran Johansson</td>
                        <td>070-625 31 18</td>
                        <td><a href="mailto:&#103;&#111;&#114;&#097;&#110;&#046;&#106;&#111;&#104;&#097;&#110;&#115;&#115;&#111;&#110;&#064;&#101;&#118;&#116;&#117;&#109;&#101;&#097;&#046;&#115;&#101;"><img src="sources/images/mail_icon.png" width="35px"></a></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Tomas Lind</td>
                        <td>070-757 83 73</td>
                        <td><a href="mailto:&#116;&#111;&#109;&#097;&#115;&#046;&#108;&#105;&#110;&#100;&#064;&#101;&#118;&#116;&#117;&#109;&#101;&#097;&#046;&#115;&#101;"><img src="sources/images/mail_icon.png" width="35px"></a></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Jonas Sundgrej</td>
                        <td>070-259 63 36</td>
                        <td><a href="mailto:&#106;&#111;&#110;&#097;&#115;&#046;&#115;&#117;&#110;&#100;&#103;&#114;&#101;&#106;&#064;&#101;&#118;&#116;&#117;&#109;&#101;&#097;&#046;&#115;&#101;"><img src="sources/images/mail_icon.png" width="35px"></a></td>
                        <td></td>
                    </tr>
                </table>
            </div>
        </div>

        <footer>
            <div class="footer-list">
                <ul>
                    <li><h2>Bromma</h2></li>
                    <hr>
                    <li><h4>Adress: Mariehällsvägen 37A, 4tr</h4></li>
                    <li><h4>Telefon: 070–259 63 36</h4></li>
                </ul>
                <ul>
                    <li><h2>Umeå</h2></li>
                    <hr>
                    <li><h4>Adress: Kaserngatan 3</h4></li>
                    <li><h4>Telefon: 070–366 04 48</h4></li>
                </ul>
                <ul>
                    <li><h2>Vännäs</h2></li>
                    <hr>
                    <li><h4>Adress: Jämteböle 81</h4></li>
                    <li><h4>Telefon: 070–325 22 36</h4></li>
                </ul>
            </div>
            <h3>Copyright©  Umeå AB 2021</h3>
        </footer>
    </body>
</html>