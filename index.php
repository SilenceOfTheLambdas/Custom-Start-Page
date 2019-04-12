<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Start</title>
    <!-- The main CSS file -->
    <link href="main.css" rel="stylesheet" />

    <link rel="icon" type="image/png" href="favicon.ico">

    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>

<body>

    <div id="clock">

        <div id="clock" class="dark">
            <div class="display">
                <div class="weekdays"></div>
                <div class="ampm"></div>
                <div class="alarm"></div>
                <div class="digits"></div>
            </div>
        </div>

        <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.0.0/moment.min.js"></script>
        <script src="script.js"></script>
    </div>

    <div id="mainConsole">

        <div id="console">
            <p>--------------------------------------------------------------------------------------------------------------</p>

            <script type="text/javascript">
                /***********************************************
                 * Display time of last visit script- by JavaScriptKit.com
                 * This notice MUST stay intact for use
                 * Visit JavaScript Kit at http://www.javascriptkit.com/ for this script and more
                 ***********************************************/

                var days = 730; // days until cookie expires = 2 years.
                var lastvisit = new Object();
                var firstvisitmsg = "This is your first visit to this page. Welcome!";
                lastvisit.subsequentvisitmsg = "<p><b  style='color: #ef9300;'>Welcome! </b> Last Login: [displaydate]</p>";

                lastvisit.getCookie = function(Name) {
                    var re = new RegExp(Name + "=[^;]+", "i");
                    if (document.cookie.match(re))
                        return document.cookie.match(re)[0].split("=")[1];
                    return '';
                }

                lastvisit.setCookie = function(name, value, days) {
                    var expireDate = new Date();

                    var expstring = expireDate.setDate(expireDate.getDate() + parseInt(days));
                    document.cookie = name + "=" + value + "; expires=" + expireDate.toGMTString() + "; path=/";
                }

                lastvisit.showmessage = function() {
                    var wh = new Date();
                    if (lastvisit.getCookie("visitc") == "") {
                        lastvisit.setCookie("visitc", wh, days);
                        document.write(firstvisitmsg);
                    } else {
                        var lv = lastvisit.getCookie("visitc");
                        var lvp = Date.parse(lv);
                        var now = new Date();
                        now.setTime(lvp);
                        var day = new Array("Sun", "Mon", "Tues", "Wed", "Thur", "Fri", "Sat");
                        var month = new Array("Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec");
                        var dd = now.getDate();
                        var dy = now.getDay();
                        dy = day[dy];
                        var mn = now.getMonth();
                        mn = month[mn];
                        yy = now.getFullYear();
                        var hh = now.getHours();
                        var ampm = "AM";
                        if (hh >= 12) {
                            ampm = "PM"
                        }
                        if (hh > 12) {
                            hh = hh - 12
                        };
                        if (hh == 0) {
                            hh = 12
                        }
                        if (hh < 10) {
                            hh = "0" + hh
                        };
                        var mins = now.getMinutes();
                        if (mins < 10) {
                            mins = "0" + mins
                        }
                        var secs = now.getSeconds();
                        if (secs < 10) {
                            secs = "0" + secs
                        }
                        var dispDate = dy + ", " + mn + " " + dd + ", " + yy + " " + hh + ":" + mins + ":" + secs + " " + ampm
                        document.write(lastvisit.subsequentvisitmsg.replace("\[displaydate\]", dispDate))
                    }

                    lastvisit.setCookie("visitc", wh, days);

                }

                lastvisit.showmessage();
            </script>

            <p>--------------------------------------------------------------------------------------------------------------</p>

        </div>

        <p><b style='color: #ef9300;'>techdragon@localhost<b style="color: #232d7e;"> ~ $</b></b> sudo apt-get moo</p>
        <pre>
         (__) 
         (oo) 
   /------\/ 
  / |    ||   
 *  /\---/\ 
    ~~   ~~   
...."Have you mooed today?"...
    </pre>

        <p><b style='color: #ef9300;'>techdragon@localhost<b style="color: #232d7e;"> ~ $</b></b> ls Favourites</p>
        <ul>
            <li><a href="http://www.youtube.com">./YouTube</a></li>
            <li><a href="https://www.reddit.com/">./Reddit</a></li>
            <li><a href="http://www.twitter.com">./Twitter</a></li>
            <li><a href="https://mail.google.com/mail/u/0/">./Email</a></li>
            <li><a href="https://bitbucket.org/dashboard/overview">./BitBucket</a></li>
        </ul></br>

        <p><b style='color: #ef9300;'>techdragon@localhost<b style="color: #232d7e;"> ~ $</b></b> ls Music-and-Media</p>
        <ul>
            <li><a href="https://www.youtube.com/playlist?list=PLce5JUGgEeB7YWfONerNM-RU-BD1_kHRV">./Best-of-Liquid-&-DNB</a>
            </li>
            <li><a href="https://www.youtube.com/playlist?list=PLce5JUGgEeB5kFhP7rLjM_n_qSLG-T244">./Chillout</a></li>
            <li><a href="https://open.spotify.com/browse/featured">./Spotify</a></li>
            <li><a href="https://www.twitch.tv/directory">./Twitch</a></li>
        </ul></br>

        <p><b style='color: #ef9300;'>techdragon@localhost<b style="color: #232d7e;"> ~ $</b></b> ls university</p>
        <ul>
            <li><a href="https://drive.google.com/drive/u/0/folders/1w7RCDFtWka9a5zI07RiQZGxwuDqPInkf">./Files</a>
            </li>
            <li><a href="https://www1.essex.ac.uk/myessex/default.aspx">./MyEssex</a></li>
            <li><a href="https://outlook.office.com/mail/inbox/id/AAQkAGE1ZjE2ZDUzLTE1NmYtNDg5MS1iNTA1LWNjYmU5OTIzYTZkZgAQAIPMy9HbVsRGgwkYoSINza4%3D">./Email</a></li>
            <li><a href="https://leap.essex.ac.uk/login">./StREAM</a></li>
        </ul></br>

        <p><b style='color: #ef9300;'>techdragon@localhost<b style="color: #232d7e;"> ~ $</b></b> ./search-google.sh</p>

        <form action="http://www.google.com/search" class="searchform" method="get" name="searchform" target="_blank">
            <p style="float: left;">> </p><input style="display:block;" id="search" autocomplete="on" class="form-controls search" name="q" required="required" type="text" autofocus>
        </form>
    </div>
</body>

</html> 