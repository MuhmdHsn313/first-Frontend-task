<!DOCTYPE html>
<html lang="ar">
    <head>
        <meta charset="UTF-8">
        <title>Join Us</title>
      
        <link rel="icon" href="../View/img/icon/c4n.ico">
        <!-- [Style Section] -->
        <link rel="stylesheet" type="text/css" href="../View/css/styleSection.css">
        <meta name="viewport" content="width=device-width, initial-scala=1.0">
             
    </head>
    <body>
        <header>
            <div id="logoTitle">                
                <img src="../View/img/logo/c4n.svg">
                <span class="title">اسم الموقع</span>
            </div>
            <nav id="branchSite">
                <a href="#PageIndex" class="rem"><span class="LSiteButton">الرئيسية</span></a>
                <span class="|">|</span>
                <a href="#Page1" class="rem"><span class="LSiteButton">ادخل مجتمعنا</span></a>
                <span class="|">|</span>
                <a href="#Page2" class="rem"><span class="LSiteButton">اقترح مشروعاً</span></a>
                <span class="|">|</span>
                <a href="#Page3" class="rem"><span class="LSiteButton">مشاريعنا</span></a>
                <span class="|">|</span>
                <a href="#page4" class="rem"><span class="LSiteButton">عنّا</span></a>
            </nav>
                <div id="ourTch">
                    <a href="#GitHub" class="rem" target="_blank">
                        <div id="github"   class="logoLink"></div>
                    </a>
                    <a href="#Youtube" class="rem" target="_blank">
                        <div id="youtube"   class="logoLink"></div>
                    </a>
                    <a href="#Pinterest" class="rem" target="_blank">
                        <div id="pinterest"   class="logoLink"></div>
                    </a>
                    <a href="#Linkedin" class="rem" target="_blank">
                        <div id="linkedin"   class="logoLink"></div>
                    </a>
                    <a href="#GooglePlus" class="rem" target="_blank">
                        <div id="googleplus"   class="logoLink"></div>
                    </a>
                    <a href="#Twitter" class="rem" target="_blank">
                        <div id="twitter"  class="logoLink"></div>
                    </a>
                    <a href="#FaceBook" class="rem" target="_blank">
                        <div id="facebook" class="logoLink"></div>
                    </a>
                </div>
        </header>
        <section>
            <form method="get" name="joinus">
                <input type="text" placeholder="إسمك الكامل">
                <input type="username" placeholder="أسم المستخدم">
                <input type="email" placeholder="البريد الالكتروني">
                <select>
                    <?php 
                        $year = 1950;
                    for($i = 0; $i<=150;$i++){
                        echo "<option value=\"$year\"> $year </option>";
                        $year++;
                    }
                    ?>
                </select>

            </form>
        </section>
        <footer> 
            <div class="listItem">
                <span class="itemTitle">الاولى</span>
                <div class="itemBar">
                    <a href="#1" class="rem"><span class="item">واحد</span></a>
                    <a href="#1" class="rem"><span class="item">اثنان</span></a>
                    <a href="#1" class="rem"><span class="item">ثلاث</span></a>
                    <a href="#4" class="rem"><span class="item">اربع</span></a>
                    <a href="#5" class="rem"><span class="item">خمس</span></a>
                </div>
            </div>
            <div class="listItem">
                <span class="itemTitle">عنوان</span>
                <div class="itemBar">
                    <a href="#1" class="rem"><span class="item">رابط</span></a>
                    <a href="#2" class="rem"><span class="item">رابط</span></a>
                    <a href="#3" class="rem"><span class="item">رابط</span></a>
                    <a href="#4" class="rem"><span class="item">رابط</span></a>
                    <a href="#5" class="rem"><span class="item">رابط</span></a>
                </div>
            </div>
            <div class="listItem">
                <span class="itemTitle">عنوان</span>
                <div class="itemBar">
                    <a href="#1" class="rem"><span class="item">رابط</span></a>
                    <a href="#2" class="rem"><span class="item">رابط</span></a>
                    <a href="#3" class="rem"><span class="item">رابط</span></a>
                    <a href="#4" class="rem"><span class="item">رابط</span></a>
                    <a href="#5" class="rem"><span class="item">رابط</span></a>
                </div>
            </div>
            <div class="listItem">
                <span class="itemTitle">عنوان</span>
                <div class="itemBar">
                    <a href="#1" class="rem"><span class="item">رابط</span></a>
                    <a href="#2" class="rem"><span class="item">رابط</span></a>
                    <a href="#3" class="rem"><span class="item">رابط</span></a>
                    <a href="#4" class="rem"><span class="item">رابط</span></a>
                    <a href="#5" class="rem"><span class="item">رابط</span></a>    
                </div>
            </div>
            <div class="listItem">
                <span class="itemTitle">عنوان</span>
                <div class="itemBar">
                    <a href="#1" class="rem"><span class="item">رابط</span></a>
                    <a href="#2" class="rem"><span class="item">رابط</span></a>
                    <a href="#3" class="rem"><span class="item">رابط</span></a>
                    <a href="#4" class="rem"><span class="item">رابط</span></a>
                    <a href="#5" class="rem"><span class="item">رابط</span></a>    
                </div>
            </div>    
            <center style="color:azure">All &copy;CopyRight Save For MUHAMMAD HASAN ALASADY </center>
        </footer>
    </body>
</html>