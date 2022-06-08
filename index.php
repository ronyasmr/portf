<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/main.css">
    <title>My Portf</title>

    <style>
        body {
            background-color: #111111;
        }

        /* NAV */
        .navbar {
            background-color: #0a0b0c;
            overflow: hidden;
            position: absolute;
            top: 0;
            width: 100%;
            left: 0px;
            right: 0px;
            top: 0px;
            box-shadow: 0px 7px 20px #111111;

            color: #ffffff;
            font-family: "Arimo-VariableFont_wght";
        }

        .navbar a {
            float: right;
            display: block;
            padding: 35px 30px;

            color: #f2f2f2;
            text-decoration: none;
            font-size: 16px;
            letter-spacing: 1px;
        }

        .navbar img {
            padding: 15px 30px;
            width: 50px;
            border-radius: 100%;
            object-fit: cover;
        }

        .navbar a:hover {
            background-color: #ffffff;
            color: #1a1a1a;
        }

        /* CONTENT */
        .content {
            /* background-color: red; */
            margin-top: 10px;
            padding: 100px 50px;
            height: 465px;

            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;

            color: #ffffff;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            letter-spacing: 1px;
            font-size: 24px;
            text-align: justify;
        }

        .content img {
            width: 400px;
            height: 400px;

            display: block;
            margin-left: auto;
            margin-right: auto;

            border-radius: 100%;
            object-fit: cover;
            box-shadow: 7px 7px 20px #111111;
        }

        /* TAB */
        .tabs {
            display: flex;
            flex-wrap: wrap;
            color: #1a1a1a;
        }

        .tabs label {
            order: 1;
            display: block;
            padding: 1rem 1rem;
            cursor: pointer;
            background: rgba(0, 0, 0, 0);
            transition: background ease 0.2s;
            color: #ffffff;
            font-size: 18px;
        }

        .tabs .tab {
            order: 99;
            flex-grow: 1;
            width: 100%;
            display: none;
            padding: 1rem;
            background: #fff;
            color: #1a1a1a;
        }

        .tabs input[type="radio"] {
            display: none;
        }

        .tabs input[type="radio"]:checked+label {
            background: #fff;
            color: #1a1a1a;
        }

        .tabs input[type="radio"]:checked+label+.tab {
            display: block;
            box-shadow: 0px 7px 20px #111111;
        }

        @media (max-width: 45em) {

            .tabs .tab,
            .tabs label {
                order: initial;
            }

            .tabs label {
                width: 100%;
                margin-right: 0;
                margin-top: 0.2rem;
            }
        }

        /* ANIM */
        .reveal {
            position: relative;
            transform: translateY(150px);
            opacity: 0;
            transition: 1s all ease;
        }

        .reveal.active {
            transform: translateY(0);
            opacity: 1;
        }

        /* UP BUTTON */
        #myBtn {
            display: none;
            position: fixed;
            bottom: 20px;
            right: 30px;
            z-index: 99;
            font-size: 18px;
            border: 1;
            border-color: #ffffff;
            outline: none;
            background-color: #111111;
            color: #ffffff;
            cursor: pointer;
            padding: 15px;
            border-radius: 10%;
        }

        #myBtn:hover {
            background-color: #ffffff;
            color: #111111;
            border: 1;
            border-color: #111111;
        }
    </style>
</head>

<body>

    <div class="navbar">
        <img src="log.jpg" onclick="window.location.reload(true);">
        <a href="" onclick="window.location.reload(true);">(home ic)</a>
        <a href="#content2">About Me</a>
        <a href="#content3">Experience</a>
        <a href="#content4">Project</a>
    </div>

    <div id="content1" style="margin-top: 100px; height: 365px; background-image: url('cont1.jpg');" class="content">
        <table border="0" width="100%">
            <tr>
                <td>
                    <a style="font-size: 30px;">Hi.. I'm</a><br>
                    <a style="font-size: 100px; font-weight: bold;">Rony·<br>Asmara</a>
                </td>
                <td>
                    <img src="cont1.jpg">
                </td>
            </tr>
        </table>
    </div>

    <div style="background-color: #ffffff; color: #1a1a1a;" id="content2" class="content">
        <div class="reveal">
            <p style="text-align: center; padding: 150px;">" I have interest in <i>PHP Programming</i> and<br><i>CorelDRAW Graphic Design</i>. "</p>
        </div>
    </div>

    <div style="color: #ffffff;" class="content">
        <div class="reveal">
            <table border="0">
                <tr>
                    <td>
                        <img style="border-radius: 5%;" src="cont1.jpg">
                    </td>
                    <td style="width: 65%; text-align: center;">
                        <p>I like IT, especially in <b>Web Development</b>.<br>It's started when I created my first site using HTML.</p>
                        <p>Some programming languages ​​that I know quite well:</p>
                        <table border="0" style="width: 100%; font-weight: bold;">
                            <tr>
                                <td>HTML</td>
                                <td>CSS</td>
                            </tr>
                            <tr>
                                <td>PHP</td>
                                <td>JavaScript</td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </div>
    </div>

    <div style="color: #ffffff;" id="content3" class="content">
        <div class="reveal">
            <p style="font-size: 30px;">My·Experience
                <hr />
            </p>

            <div class="tabs">
                <input type="radio" name="tabs" id="tabone" checked="checked">
                <label for="tabone">PT. Vads Indonesia</label>
                <div class="tab">
                    <a style="font-weight: bold;">CEC Ajaib Digital</a>
                    <a style="font-size: 16px; letter-spacing: 5px;">( 2021 - 2022 )</a><br>
                    <a style="font-size: 20px;">Act as a liaison, provide product/services information, answer questions, and resolve any emerging problems
                        <br>that customer accounts might face with accuracy and efficiency.</a>
                </div>

                <input type="radio" name="tabs" id="tabtwo">
                <label for="tabtwo">PT. Yogya Kristal Sejati</label>
                <div class="tab">
                    <a style="font-weight: bold;">Admin</a>
                    <a style="font-size: 16px; letter-spacing: 5px;">( 2019 )</a><br>
                    <a style="font-size: 20px;">Create a system to record the goods owned by the company and operate and maintain the system.</a>
                </div>

                <input type="radio" name="tabs" id="tabthree">
                <label for="tabthree">PGRI Yogyakarta University Student Cooperative</label>
                <div class="tab">
                    <a style="font-weight: bold;">Administration and Public Relations Staff</a>
                    <a style="font-size: 16px; letter-spacing: 5px;">( 2018 - 2020 )</a><br>
                    <a style="font-size: 20px;">Create and record incoming and outgoing mail, and (side job)
                        graphic designer and social media admin.</a>
                </div>

                <input type="radio" name="tabs" id="tabfour">
                <label for="tabfour">Nagoya Japanesse Fusion Resto</label>
                <div class="tab">
                    <a style="font-weight: bold;">Server</a>
                    <a style="font-size: 16px; letter-spacing: 5px;">( 2017 - 2018 )</a><br>
                    <a style="font-size: 20px;">Take orders from customers and deliver their food to them.</a>
                </div>
            </div>
        </div>
    </div>

    <div style="background-color: #ffffff; color: #1a1a1a; height: 1900px;" id="content4" class="content">
        <div class="reveal">
            <p style="font-size: 30px;">My·Project
                <hr />
            </p>
        </div>

        <div class="reveal">
            <table border="0">
                <tr>
                    <td>
                        <img style="border-radius: 0; width: 854px; height: 480px; object-fit: contain;" src="spk1.png">
                    </td>
                    <td style="width: 100%;">
                        <p style="text-align: center;">alala</p>
                    </td>
                </tr>
            </table>
        </div>

        <div class="reveal">
            <br>
            <hr /><br>
        </div>

        <div class="reveal">
            <table border="0">
                <tr>
                    <td style="width: 100%;">
                        <p style="text-align: center;">alala</p>
                    </td>
                    <td>
                        <img style="border-radius: 0; width: 854px; height: 480px; object-fit: contain;" src="spk2.png">
                    </td>
                </tr>
            </table>
        </div>

        <div class="reveal">
            <br>
            <hr /><br>
        </div>

        <div class="reveal">
            <table border="0">
                <tr>
                    <td>
                        <img style="border-radius: 0; width: 854px; height: 480px; object-fit: contain;" src="sp1.png">
                    </td>
                    <td style="width: 100%;">
                        <p style="text-align: center;">alala</p>
                    </td>
                </tr>
            </table>
        </div>
    </div>

    <div class="content" style="height: auto; padding: 30px; font-size: 16px;">
        Designed & Built by Rony Asmara·2022
    </div>

    <button onclick="topFunction()" id="myBtn" title="Back To Top">Up</button>

    <script>
        // R TOP
        window.onbeforeunload = function() {
            window.scrollTo(0, 0);
        };

        // ANIM
        function reveal() {
            var reveals = document.querySelectorAll(".reveal");

            for (var i = 0; i < reveals.length; i++) {
                var windowHeight = window.innerHeight;
                var elementTop = reveals[i].getBoundingClientRect().top;
                var elementVisible = 150;

                if (elementTop < windowHeight - elementVisible) {
                    reveals[i].classList.add("active");
                } else {
                    reveals[i].classList.remove("active");
                }
            }
        }

        window.addEventListener("scroll", reveal);

        // UP BUTTON
        //Get the button
        var mybutton = document.getElementById("myBtn");

        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
                mybutton.style.display = "block";
            } else {
                mybutton.style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>

</body>

</html>