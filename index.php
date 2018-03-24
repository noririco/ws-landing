<?php include('form_contact_us_proccess.php'); ?>

<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>We Share</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Assistant">
</head>
<body>
    <div id="wrapper">
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
            <img src="http://via.placeholder.com/353x287">
        </div>
        <div id="logo-top-left" class="grid-item">
            <img src="http://via.placeholder.com/100x110">
            <div class="logo-subtitle">
                <span class="text-color-black">הפתעה מדהימה בשווי מאות שקלים</span>
            </div>
            <div class="logo-subtitle">
                <span class="text-color-black">ממתינה לכם לאחר הצטרפות</span>
            </div>
        </div>
        <div id="bold-line" class="grid-item">
            <div class="textWrapper background-primary border-primary">
                <span class="text-color-black">
                    זה הדבר הכי טוב שיקרה למשרד שלכם!
                </span>
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
                <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post" id="contact">
                    <div class="form-control">
                        <input type="text" name="name" id="" value="<?= $name ?>" placeholder="שם מלא">
                    </div>
                    <div class="form-control">
                        <input type="text" name="phone" id="" value="<?= $phone ?>" placeholder="טלפון">
                    </div>
                    <div class="form-control">
                        <input type="text" name="email" id="" value="<?= $email ?>" placeholder="כתובת מייל">
                    </div>                    
                    <div class="form-control">
                        <input type="text" name="licence" id="" value="<?= $licence ?>" placeholder="מספר רישיון">
                    </div>
                    <div class="form-control">
                        <input type="text" name="city" id="" value="<?= $city ?>" placeholder="עיר מגורים">
                    </div>
                    <div class="form-control">
                        <input type="submit" value="שלח" id="submitBtn" name="submit">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
