<!DOVTYPE html>
<!-- Code is by Haroun Hadda, design and imagination by Haroun Haddad, Onsa Ounaiech, Yassine, Montassar  -->

<html lang="en">
    <head>
        <meta charset="utf-8">
        <!-- Favicon -->
        <link rel="shortcut icon" href="style/images">
        
        <!-- Title -->
        <title>Association Youth Club</title>
        
        <!-- Styles and animations -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/animate.css">
         
        <!-- Font from Google Fonts named "Raleway" -->
        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lalezar" rel="stylesheet">
        
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
      <script src="style/js/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
      <![endif]-->
    </head>
    
    <body>
        <div class="overlay">
            <div class="img" style="background:bmacl;">
            </div>
            <video autoplay muted loop id="backgroundVideo">
                <source src="images/background/video_back.mp4" type="video/mp4">
            </video>
        </div>
        
        
        
        <div id="nav_menu">
            
            
            <div class="nav_bar">
                <!-- LOGO -->
                <div class="logo_img" style="position: fixed;padding-left: 14%;padding-top: 0.4%;">
            
                </div>

                <div class="logo_text" style="position: fixed;padding-left: 14%;padding-top: 0.4%;">
                    <a href="index.php" style="text-decoration:none;text-color:#03a9f4;"><p style="text-align: center;color:#636463;font-weight:800;">ASSOCIATION YOUTH CLUB </p>
                    <p style="text-align: center;margin-top: -17px;color: #636463;font-family: 'Lalezar', cursive;">جمعية نوادي الشبان</p></a>
                </div>    
            
                <!-- Menu items -->
                <nav>
                    <a href="#home">HOME</a>
                    <a href="#about">ABOUT</a>
                    <a href="#clubs">CLUBS</a>
                    <a href="#events">EVENTS</a>
                    <a href="#join">JOIN US</a>
                    <div class="social">
                        <span>🖤</span>
                    
                    
                        <div class="social_dropdown">
                            <a href="https://www.facebook.com" target="_blank"><img src="images/social/fb.png" alt="Association Youth club on Facebook"/></a>
                            <a href="https://www.instagram.com" target="_blank"><img src="images/social/ig.png" alt="Association Youth club on Instagram"/></a>
                            <a href="https://www.youtube.com" target="_blank"><img src="images/social/yt.png" alt="Association Youth club on Youtube"/></a>
                        </div> 
                        
                    </div>
                </nav>
                
            </div>
            
            
        </div>
        
        <!-- Web site parts -->
        
        <div id="home">
            <h1>
              <a class="typewrite" data-period="1000" data-type='[ "ASSOCIATION YOUTH CLUB", "I AM ACTIVE", "I AM CREATIVE", "I INFULANCE ON PEOPLE" ]' style="color:#fff;font-family:'Lalezar', cursive;font-size:80px; ">
                <span class="wrap"></span>
              </a>
                <script>
                var TxtType = function(el, toRotate, period) {
                this.toRotate = toRotate;
                this.el = el;
                this.loopNum = 0;
                this.period = parseInt(period, 10) || 2000;
                this.txt = '';
                this.tick();
                this.isDeleting = false;
            };

            TxtType.prototype.tick = function() {
                var i = this.loopNum % this.toRotate.length;
                var fullTxt = this.toRotate[i];

                if (this.isDeleting) {
                this.txt = fullTxt.substring(0, this.txt.length - 1);
                } else {
                this.txt = fullTxt.substring(0, this.txt.length + 1);
                }

                this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

                var that = this;
                var delta = 200 - Math.random() * 100;

                if (this.isDeleting) { delta /= 2; }

                if (!this.isDeleting && this.txt === fullTxt) {
                delta = this.period;
                this.isDeleting = true;
                } else if (this.isDeleting && this.txt === '') {
                this.isDeleting = false;
                this.loopNum++;
                delta = 500;
                }

                setTimeout(function() {
                that.tick();
                }, delta);
            };

            window.onload = function() {
                var elements = document.getElementsByClassName('typewrite');
                for (var i=0; i<elements.length; i++) {
                    var toRotate = elements[i].getAttribute('data-type');
                    var period = elements[i].getAttribute('data-period');
                    if (toRotate) {
                      new TxtType(elements[i], JSON.parse(toRotate), period);
                    }
                }
                // INJECT CSS
                var css = document.createElement("style");
                css.type = "text/css";
                css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
                document.body.appendChild(css);
            };
            </script>
            </h1>
            <div class="social_home">
                <a href="https://www.facebook.com" target="_blank"><img src="images/social/home/fb.png" alt="Association Youth club on Facebook"/></a>
                <a href="https://www.instagram.com" target="_blank"><img src="images/social/home/ig.png" alt="Association Youth club on Instagram"/></a>
                <a href="https://www.youtube.com" target="_blank"><img src="images/social/home/yt.png" alt="Association Youth club on Youtube"/></a>
            </div>
        </div>
        
        <div id="about">
            
        </div>
        
        <div id="clubs">
            
        </div>
        
        <div id="events">
            
        </div>
        
        <div id="join">
            
        </div>
        
        <div id="copyright">
            <div class="text">
                <p>© 2018 ASSOCIATION YOUTH CLUB</p>
            </div>
            
            <div class="social_icons">
                <a href="https://www.instagram.com" target="_blank"><img src="images/social/ig.png" alt="Association Youth Club on Instagram"/></a>
                <a href="https://www.youtube.com" target="_blank"><img src="images/social/yt.png" alt="Association Youth Club on Instagram"/></a>
                <a href="https://www.facebook.com" target="_blank"><img src="images/social/fb.png" alt="Association Youth Club on Facebook"/></a>
                
                
            </div>
        </div>
    </body>
</html>