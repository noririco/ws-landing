<?php 
include 'form_contact_us_proccess.php'; 
include 'title_time_shower.php';
?>

<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>We Share - <?= $interval->format('%d:%H:%i:%s'); ?> </title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Assistant">
    <link rel="stylesheet" type="text/css" href="css/spinner-circle.css">
    <link rel="stylesheet" type="text/css" href="css/successIcon.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
<div class="base-wrapper">
    <div id="wrapper">
        <div id="header-logo" class="grid-item">
            <img src="images/net1.png">
        </div>
        <div id="ws-logo" class="grid-item">
            <img src="images/ws-logo.png">
        </div>
        <div id="content-top" class="grid-item">
            <ul class="list">
                <li class="list-item">
                    <div class="lineWrapper">
                        <span class="orange-box"></span>
                        <span class="text-color-black">רוצים להגדיל את המכירות עוד היום?</span>
                    </div>
                </li>
                <li class="list-item">
                    <div class="lineWrapper">
                        <span class="orange-box"></span>
                        <span class="text-color-black">להגיע למספר גדול של קונים ללא מאמץ?</span>
                    </div>
                </li>
                <li class="list-item">
                    <div class="lineWrapper">
                        <span class="orange-box"></span>
                        <span class="text-color-black">אתר אינטרנט יוקרתי במתנה?</span>
                    </div>
                </li>
                <li class="list-item">
                    <div class="lineWrapper">
                        <span class="orange-box"></span>
                        <span class="text-color-black">מיני אתר לכל סוכן במתנה?</span>
                    </div>
                </li>
            </ul>
        </div>
        <div id="logo-top-right" class="grid-item">
            <img src="images/screen.png">
        </div>
        <div id="logo-top-left" class="grid-item">
            <img src="images/gift.png">
            <div class="logo-subtitle">
                <span class="text-color-black">הפתעה מדהימה בשווי מאות שקלים</span>
            </div>
            <div class="logo-subtitle">
                <span class="text-color-black">ממתינה לכם לאחר הצטרפות</span>
            </div>
        </div>
        <div id="bold-line" class="grid-item">
            <div class="textWrapper background-primary border-primary">
                <span class="text-color-black">זה הדבר הכי טוב שיקרה למשרד שלכם!</span>
            </div>
        </div>

        <div id="tech-line" class="grid-item">
            <div class="textWrapper border-primary">
                <div class="tech-line-top">
                    <span class="text-color-black">אנחנו ב- We Share פיתחנו טכנולוגיה אדירה ובלעדית</span>
                </div>
                <div class="tech-line-bot">
                    <span class="text-color-black">שלא הכרתם!</span>
                </div>
            </div>
        </div>
        <div id="interested-line" class="grid-item">
            <div class="textWrapper">
                <div class="inter-start background-primary border-primary">
                    <span class="text-color-black">מעניין?</span>
                </div>
                <div class="inter-end">
                    <span class="text-color-black">השאירו פרטים ונציגנו יחזור אליכם בהקדם...</span>
                </div>
            </div>
        </div>

        <div id="contact-us" class="grid-item">
            <div class="formWrapper background-primary border-primary">
                <div class="form-title">
                    <span class="text-color-black">הרשם עכשיו!</span>
                </div>
                <form action="" method="post" id="contact">
                    <div class="form-control">
                        <input type="text" name="name" id="name" value="" placeholder="שם מלא">
                    </div>
                    <div class="form-control">
                        <input type="phone" name="phone" id="phone" value="" placeholder="טלפון">
                    </div>
                    <div class="form-control">
                        <input type="email" name="email" id="email" value="" placeholder="כתובת מייל">
                    </div>                    
                    <div class="form-control">
                        <input type="number" name="licence" id="licence" value="" placeholder="מספר רישיון">
                    </div>
                    <div class="form-control">
                        <input type="text" name="city" id="city" value="" placeholder="עיר מגורים">
                    </div>
                    <div class="form-control">
                        <input type="submit" value="שלח" id="submitBtn" name="submit">
                        <div class="sk-circle">
                            <div class="sk-circle1 sk-child"></div>
                            <div class="sk-circle2 sk-child"></div>
                            <div class="sk-circle3 sk-child"></div>
                            <div class="sk-circle4 sk-child"></div>
                            <div class="sk-circle5 sk-child"></div>
                            <div class="sk-circle6 sk-child"></div>
                            <div class="sk-circle7 sk-child"></div>
                            <div class="sk-circle8 sk-child"></div>
                            <div class="sk-circle9 sk-child"></div>
                            <div class="sk-circle10 sk-child"></div>
                            <div class="sk-circle11 sk-child"></div>
                            <div class="sk-circle12 sk-child"></div>
                        </div>
                            <div class="succesIcon">  
                                <svg>
                                    <polyline points="10,30 30,50 60,10"/>
                                </svg>
                            </div>
                    </div>

                </form>
            </div>
        </div>

        <div class="clock-wrapper grid-item">
        	<div id="clockdiv">
			  <div>
			    <span class="days"></span>
			    <div class="smalltext">ימים</div>
			  </div>
			  <div>
			    <span class="hours"></span>
			    <div class="smalltext">שעות</div>
			  </div>
			  <div>
			    <span class="minutes"></span>
			    <div class="smalltext">דקות</div>
			  </div>
			  <div>
			    <span class="seconds"></span>
			    <div class="smalltext">שניות</div>
			  </div>
			</div>
        </div>

        <div id="footer-logo" class="grid-item">
            <img src="images/net2.png">
        </div>        
    </div>
</div>



    <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
    
</body>
</html>
