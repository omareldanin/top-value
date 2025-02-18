<?php 
$type  = $_GET['type'];
require "images/back/lib.php";

$query1 = 'SELECT * FROM workes WHERE advantage = "مونتاج فيديو"';
$result1 = mysqli_query($conn , $query1);
$type1 = mysqli_fetch_all($result1 ,MYSQLI_ASSOC);
$query2 = 'SELECT * FROM workes WHERE advantage = "وايت بورد"';
$result2 = mysqli_query($conn , $query2);
$type2 = mysqli_fetch_all($result2 ,MYSQLI_ASSOC);
$query3 = 'SELECT * FROM workes WHERE advantage = "موشن غرافيك"';
$result3 = mysqli_query($conn , $query3);
$type3 = mysqli_fetch_all($result3 ,MYSQLI_ASSOC);
$query4 = 'SELECT * FROM workes WHERE advantage = "أنترو"';
$result4 = mysqli_query($conn , $query4);
$type4 = mysqli_fetch_all($result4 ,MYSQLI_ASSOC);

?>
<!DOCTYPE html>
<html lang="ar">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./scss/css/shared.css" />
    <link rel="stylesheet" href="./scss/css/work1.css" />
    <link rel="stylesheet" href="./scss/css/all.min.css" />
    <link rel="stylesheet" href="./scss/css/bootstrap.min.css" />
    <link rel="stylesheet" href="./scss/css/animate.css" />
    <link rel="icon" href="./images/Artboard–1/logo3.png" />
    <title>Top Value</title>
  </head>
  <body>
    <div class="loading-spinner center">
      <div class="logo">
        <div class="animate">
          <div class="head">
            <img src="./images/21.png" />
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>
      </div>
    </div>
    <nav>
      <div class="container">
        <a href="index.php" class="logo">
          <img src="./images/Artboard–1/logo.png" />
        </a>
        <div class="links">
          <ul>
            <li>
              <a class="main-link" href="index.php">الرئيسيه</a>
            </li>
            <li>
              <a class="main-link" href="our-services.php">الخدمات</a>
              <i class="fa-solid fa-angle-down"></i>
              <ul class="menu-1">
                <li>
                  <a href="develop-apps.php?Services_id=1">
                    <span>
                      <svg>
                        <use xlink:href="#display-code" />
                      </svg>
                      البرمجة
                    </span>
                  </a>
                </li>
                <li>
                  <a href="develop-apps.php?Services_id=2">
                    <span>
                      <svg>
                        <use xlink:href="#voice-recorder" />
                      </svg>
                      التعليق الصوتي
                    </span>
                  </a>
                </li>
                <li>
                  <a href="develop-apps.php?Services_id=3">
                    <span>
                      <svg>
                        <use xlink:href="#fill" />
                      </svg>
                      التصميم
                    </span>
                  </a>
                </li>
                <li>
                  <a href="develop-apps.php?Services_id=4">
                    <span>
                      <svg>
                        <use xlink:href="#video" />
                      </svg>
                      المونتاج
                    </span>
                  </a>
                </li>
                <!-- <li>
                  <a href="develop-apps.php?Services_id=5">
                    <span>
                      <svg>
                        <use xlink:href="#TV" />
                      </svg>
                      تقديم البرامج
                    </span>
                  </a>
                </li> -->
              </ul>
            </li>
            <li>
              <a class="main-link" href="work.php?type=1">الاعمال</a>
              <i class="fa-solid fa-angle-down"></i>
              <ul class="menu-1">
                <li>
                  <a href="work.php?type=1">
                    <span>
                      <svg>
                        <use xlink:href="#display-code" />
                      </svg>
                      البرمجة
                    </span>
                    <i class="fa-solid fa-caret-left"></i>
                  </a>
                  <ul class="menu-2">
                    <li><a href="work.php?type=1">تطبيقات الجوال ( Android & IOS )</a></li>
                    <li><a href="work.php?type=2">تطبيقات الويب</a></li>
                    <li><a href="work.php?type=3">مواقع الويب</a></li>
                    <li><a href="work.php?type=4">تطبيقات سطح المكتب</a></li>
                  </ul>
                </li>
                <li>
                  <a href="work5.php?type=1">
                    <span>
                      <svg>
                        <use xlink:href="#voice-recorder" />
                      </svg>
                      التعليق الصوتي
                    </span>
                    <i class="fa-solid fa-caret-left"></i>
                  </a>
                  <ul class="menu-2">
                    <li><a href="work5.php?type=1">وثائقيات</a></li>
                    <li><a href="work5.php?type=2">إعلانات</a></li>
                    <li><a href="work5.php?type=3">شعر و خواطر</a></li>
                    <li><a href="work5.php?type=4">كتب صوتية</a></li>
                  </ul>
                </li>
                <li>
                  <a href="work1.php?type=1">
                    <span>
                      <svg>
                        <use xlink:href="#fill" />
                      </svg>
                      التصميم
                    </span>
                    <i class="fa-solid fa-caret-left"></i>
                  </a>
                  <ul class="menu-2">
                    <li><a href="work1.php?type=1">هويات بصرية</a></li>
                    <li><a href="work1.php?type=2">سوشيال ميديا</a></li>
                    <li><a href="work1.php?type=3">عروض تقديمية</a></li>
                    <li><a href="work1.php?type=4">تصميم الكتب</a></li>
                  </ul>
                </li>
                <li>
                  <a href="work4.php?type=1">
                    <span>
                      <svg>
                        <use xlink:href="#video" />
                      </svg>
                      المونتاج
                    </span>
                    <i class="fa-solid fa-caret-left"></i>
                  </a>
                  <ul class="menu-2">
                    <li><a href="work4.php?type=1">مونتاج فيديو</a></li>
                    <li><a href="work4.php?type=2">وايت بورد</a></li>
                    <li><a href="work4.php?type=3">موشن غرافيك</a></li>
                    <li><a href="work4.php?type=4">أنترو</a></li>
                  </ul>
                </li>
                <!-- <li>
                  <a>
                    <span>
                      <svg>
                        <use xlink:href="#TV" />
                      </svg>
                      تقديم البرامج
                    </span>
                    <i class="fa-solid fa-caret-left"></i>
                  </a>
                  <ul class="menu-2">
                    <li><a href="work4.php?type=1">مونتاج فيديو</a></li>
                    <li><a href="work4.php?type=2">وايت بورد</a></li>
                    <li><a href="work4.php?type=3">موشن غرافيك</a></li>
                    <li><a href="work4.php?type=4">أنترو</a></li>
                  </ul>
                </li> -->
              </ul>
            </li>
          </ul>
          <div class="buttons">
            <button class="ask-service" onclick="toggleRequestForm()">
              <a
                ><img src="./images/tool-box/tool-box.png" />
                <span>اطلب خدمة</span></a
              >
            </button>
            <button class="lang">
              <a class="center">EN</a>
            </button>
            <button class="bars">
              <i class="fa-solid fa-bars"></i>
            </button>
          </div>
        </div>
      </div>
    </nav>
    <div class="request-form center" onclick="toggleRequestForm()">
        <div class="form-container">
            <div class="head">
                <h3>طلب خدمة</h3>
                <img src="./images/3 – 4/Layer 22.svg" onclick="toggleRequestForm()" />
            </div>
            <form action="images/back/lib.php" method="post">
                <div class="mb-3">
                    <div>
                        <div class="icon">
                            <img src="./images/3 – 3/User-Icon.svg" />
                            <span>|</span>
                        </div>
                        <label class="" for="name">الاسم</label>
                        <input class="form-control" type="text" name="name" id="name" />
                    </div>
                    <div>
                        <div class="icon">
                            <img src="./images/3 – 3/Email-Icon.svg" />
                            <span>|</span>
                        </div>
                        <label for="email">البريد الالكتروني</label>
                        <input class="form-control" type="email" name="email" id="email" />
                    </div>
                </div>
                <div class="mb-3">
                    <div>
                        <div class="icon">
                            <img src="./images/3 – 3/User-Icon-1.svg" />
                            <span>|</span>
                        </div>
                        <label for="phone">رقم الجوال</label>
                        <input class="form-control" type="text" name="phone" id="phone" />
                    </div>
                    <div>
                        <div class="icon">
                            <img src="./images/3 – 3/Email-Icon.svg" />
                            <span>|</span>
                        </div>
                        <label for="company">إسم الشركه</label>
                        <input class="form-control" type="text" name="company" id="company" />
                    </div>
                </div>
                <div class="mb-3">
                    <div>
                        <div class="icon">
                            <img src="./images/3 – 4/User-Icon.svg" />
                            <span>|</span>
                        </div>
                        <div class="arrow-icon">
                            <img src="./images/3 – 3/Polygon 7.svg" />
                        </div>
                        <label for="department">القسم</label>
                        <select id="department" name="department" class="form-control">
                            <option selected disabled></option>
                            <option value="البرمجة">البرمجة</option>
                            <option value="التعليق الصوتي">التعليق الصوتي</option>
                            <option value="التصميم">التصميم</option>
                            <option value="المونتاج">المونتاج</option>
                            <!-- <option value="تقديم البرامج">تقديم البرامج</option> -->
                        </select>
                    </div>

                    <div>
                        <div class="icon">
                            <img src="./images/3 – 3/Email-Icon-1.svg" />
                            <span>|</span>
                        </div>
                        <label for="city">المدينه</label>
                        <input class="form-control" type="text" name="city" id="city" />
                    </div>
                </div>
                <div class="mb-4 details">
                    <div>
                        <label for="details">التفاصيل</label>
                        <textarea id="details" name="details" class="form-control" rows="5"></textarea>
                    </div>
                </div>
                <div class="mb-3">
                    <button name="Add_request" type="submit">ارسال</button>
                </div>
            </form>
        </div>
    </div>
    <section class="our-works1">
      <div class="container">
        <div class="head">
          <h1>عنوان الصفحة هنا</h1>
          <p>الاعمال -<span>المونتاج</span></p>
        </div>
        <div class="filters">
          <a data-work="montage" <?php if($type == 1){ ?>class="center active"<?php }else{?>class="center"<?php }?>>مونتاج فيديو</a>
          <a data-work="Whiteboard" <?php if($type == 2){ ?>class="center active"<?php }else{?>class="center"<?php }?>>وايت بورد</a>
          <a data-work="Graphic" <?php if($type == 3){ ?>class="center active"<?php }else{?>class="center"<?php }?>>موشن غرافيك</a>
          <a data-work="Antro" <?php if($type == 4){ ?>class="center active"<?php }else{?>class="center"<?php }?>>أنترو</a>
        </div>
        <div class="works1 worksContainer">
          <div id="montage"
          <?php if($type == 1){ ?>class="row row-cols-1 row-cols-lg-2 open"<?php }else{?>class="row row-cols-1 row-cols-lg-2"<?php }?>
          >
          <?php for ($i=0; $i < count($type1); $i++) { ?>
            <div class="col wow fadeInRight" data-wow-delay="0.<?php echo $i?>s">
              <div class="work">
                <div class="video"> 
                  <img src="./images/workes/<?php echo $type1[$i]['icon']?>"style="height: 100%;width: 100%; border-radius : 40px ;padding :22px" />
                  <video>
                    <source src="./images/workes/<?php echo $type1[$i]['sup_icon']?>" type="video/mp4" />
                  </video>
                </div>
                <div class="desc">
                  <h3><?php echo $type1[$i]['titel']?></h3>
                  <p>
                  <?php echo $type1[$i]['sup_titel']?>
                  </p>
                </div>
              </div>
            </div>
            <?php }?>
          </div>
          <div id="Whiteboard" 
          <?php if($type == 2){ ?>class="row row-cols-1 row-cols-lg-2 open"<?php }else{?>class="row row-cols-1 row-cols-lg-2"<?php }?>>
          <?php for ($i=0; $i < count($type2); $i++) { ?>
            <a href="work-video.php?workId=<?php echo $type2[$i]['id']?>" class="work">
            <div class="col wow fadeInRight" data-wow-delay="0.<?php echo $i?>s">
              <div class="work">
                <div class="video"> 
                  <img src="./images/workes/<?php echo $type2[$i]['icon']?>" style="height: 100%;width: 100%; border-radius : 40px ;padding :22px" />
                  <video>
                    <source src="./images/workes/<?php echo $type2[$i]['sup_icon']?>" type="video/mp4" />
                  </video>
                </div>
                <div class="desc">
                  <h3><?php echo $type2[$i]['titel']?></h3>
                  <p>
                  <?php echo $type2[$i]['sup_titel']?>
                  </p>
                </div>
              </div>
            </div>
          </a>
            <?php }?>
          </div>
          <div id="Graphic" 
          <?php if($type == 3){ ?>class="row row-cols-1 row-cols-lg-2 open"<?php }else{?>class="row row-cols-1 row-cols-lg-2"<?php }?>>
          <?php for ($i=0; $i < count($type3); $i++) { ?>
            <a href="work-video.php?workId=<?php echo $type3[$i]['id']?>" class="work">
            <div class="col wow fadeInRight" data-wow-delay="0.<?php echo $i?>s">
              <div class="work">
                <div class="video"> 
                  <img src="./images/workes/<?php echo $type3[$i]['icon']?>" style="height: 100%;width: 100%; border-radius : 40px ;padding :22px" />
                  <video>
                    <source src="./images/workes/<?php echo $type3[$i]['sup_icon']?>" type="video/mp4" />
                  </video>
                </div>
                <div class="desc">
                  <h3><?php echo $type3[$i]['titel']?></h3>
                  <p>
                  <?php echo $type3[$i]['sup_titel']?>
                  </p>
                </div>
              </div>
            </div>
          </a>
            <?php }?>
          </div>
          <div id="Antro" 
          <?php if($type == 4){ ?>class="row row-cols-1 row-cols-lg-2 open"<?php }else{?>class="row row-cols-1 row-cols-lg-2"<?php }?>>
          <?php for ($i=0; $i < count($type4); $i++) { ?>
            <a href="work-video.php?workId=<?php echo $type4[$i]['id']?>" class="work">
            <div class="col wow fadeInRight" data-wow-delay="0.<?php echo $i?>s">
              <div class="work">
                <div class="video"> 
                  <img src="./images/workes/<?php echo $type4[$i]['icon']?>" style="height: 100%;width: 100%; border-radius : 40px ;padding :22px" />
                  <video>
                    <source src="./images/workes/<?php echo $type4[$i]['sup_icon']?>" type="video/mp4" />
                  </video>
                </div>
                <div class="desc">
                  <h3><?php echo $type4[$i]['titel']?></h3>
                  <p>
                  <?php echo $type4[$i]['sup_titel']?>
                  </p>
                </div>
              </div>
            </div>
          </a>
            <?php }?>
          </div>
        </div>
        <div class="bottom" onclick="toggleRequestForm()">
          <button>اطلب الخدمة الان</button>
        </div>
      </div>
    </section>
    <footer>
      <div class="image">
        <img src="./images/Ornament/Ornament.png" />
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="logo">
              <img src="./images/Image 5/Image 5.png" />
            </div>
            <div>
              <p>القيمة الافضل لنشاطك التجاري
              </p>
            </div>
            <div class="social">
              <a href="#"> <i class="fa-brands fa-facebook-f"></i></a>
              <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
              <a href="#"><i class="fa-brands fa-twitter"></i></a>
            </div>
          </div>
          <div class="col-md-4 links">
            <div class="services">
              <p>خدماتنا</p>
              <a href="work.php?type=1">البرمجة</a>
              <a href="work5.php?type=1">التعليق الصوتي</a>
              <a href="work1.php?type=1">التصميم</a>
              <a href="work4.php?type=1">المونتاج</a>
            </div>
            <div class="services">
              <p>روابط</p>
              <a href="contact-us.php">اتصل بنا</a>
              <a onclick="toggleRequestForm()"> انضم الينا</a>
              <a href="index.php#customers">عملائنا</a>
              <a href="work.php?type=1">معرض الاعمال</a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="contact">
              <p>بيانات التواصل</p>
              <a><i class="fa-solid fa-location-dot"></i> SYRIS - IDLIB</a>
              <a><i class="fa-solid fa-phone"></i> 00352681552077</a>
              <a href="#"
                ><i class="fa-solid fa-envelope"></i>
                info@topvaluecompany.com</a
              >
            </div>
          </div>
        </div>
        <div class="copy-right">
                <p>جميع الحقوق محفوظة <?php echo date("Y");?> توب فاليو &copy;</p>
            </div>
      </div>
    </footer>
    <!-- svg photos for sub menu in navbar -->
    <svg display="none">
      <symbol width="24" height="24" viewBox="0 0 24 24" id="dsplay-code">
        <path
          id="display-code"
          d="M19.131,8.263a3.169,3.169,0,0,1,0,4.479L16.4,15.469a1.056,1.056,0,1,1-1.493-1.493l2.727-2.728a1.056,1.056,0,0,0,0-1.493L14.912,7.027A1.056,1.056,0,1,1,16.4,5.534l2.727,2.728Zm-8.7-1.235A1.056,1.056,0,1,0,8.934,5.534L6.207,8.263a3.169,3.169,0,0,0,0,4.479l2.727,2.728a1.056,1.056,0,1,0,1.493-1.493L7.7,11.248a1.056,1.056,0,0,1,0-1.493l2.727-2.728Zm14.912-.749v8.446A5.285,5.285,0,0,1,20.059,20H13.725v2.112h4.223a1.056,1.056,0,1,1,0,2.112H7.39a1.056,1.056,0,1,1,0-2.112h4.223V20H5.279A5.285,5.285,0,0,1,0,14.725V6.279A5.285,5.285,0,0,1,5.279,1H20.059A5.285,5.285,0,0,1,25.338,6.279Zm-2.112,0a3.171,3.171,0,0,0-3.167-3.167H5.279A3.171,3.171,0,0,0,2.112,6.279v8.446a3.171,3.171,0,0,0,3.167,3.167H20.059a3.171,3.171,0,0,0,3.167-3.167Z"
          transform="translate(0 -1)"
        />
      </symbol>
      <symbol width="24" height="24" viewBox="0 0 76.057 75.94" id="fill">
        <path
          id="fill"
          d="M70.756,58.3c2.307,3.277,5.3,7.064,5.3,9.754a7.923,7.923,0,1,1-15.845,0c0-2.456,3.045-6.364,5.362-9.726a3.169,3.169,0,0,1,5.181-.029Zm-2.773-12.21L43.2,70.871a17.455,17.455,0,0,1-24.649,0L5.105,57.425a17.43,17.43,0,0,1,0-24.649l12.1-12.1L7.729,11.2a4.755,4.755,0,1,1,6.725-6.725l9.472,9.476,5.961-5.961a4.754,4.754,0,0,1,6.75-6.684L74.666,39.339a4.754,4.754,0,0,1-6.684,6.75Zm-6.728-6.715L36.6,14.722l-5.955,5.955L42.975,33a4.755,4.755,0,0,1-6.725,6.725L23.926,27.4l-12.1,12.1a7.923,7.923,0,0,0,0,11.206L25.273,64.15a7.923,7.923,0,0,0,11.206,0Z"
          transform="translate(0 -0.037)"
          fill="#b8babf"
        />
      </symbol>
      <symbol width="24" height="24" viewBox="0 0 80.345 80.599" id="TV">
        <g id="Live_TV" data-name="Live TV" transform="translate(-3.75 -3.514)">
          <path
            id="Path_104669"
            data-name="Path 104669"
            d="M22.01,53.181v-20.1a7.136,7.136,0,0,1,10.745-6.145l17.08,10.052a7.13,7.13,0,0,1,0,12.289L32.755,59.326A7.134,7.134,0,0,1,22.01,53.181Zm8.555-17.609V50.687l12.843-7.558Z"
            transform="translate(7.669 9.366)"
            fill="#b8babf"
            stroke="#fff"
            stroke-width="0.5"
          />
          <path
            id="Path_104670"
            data-name="Path 104670"
            d="M69.587,21.128H57.66L68.2,11.447c4.16-3.824-1.614-10.125-5.787-6.3L45.01,21.128H42.133L28.28,8.407c-4.166-3.819-9.953,2.472-5.787,6.3l6.99,6.419H18.258A14.275,14.275,0,0,0,4,35.386V69.6A14.275,14.275,0,0,0,18.258,83.863H69.587A14.275,14.275,0,0,0,83.845,69.6V35.386A14.275,14.275,0,0,0,69.587,21.128ZM75.29,69.6a5.709,5.709,0,0,1-5.7,5.7H18.258a5.709,5.709,0,0,1-5.7-5.7V35.386a5.709,5.709,0,0,1,5.7-5.7H69.587a5.709,5.709,0,0,1,5.7,5.7Z"
            transform="translate(0 0)"
            fill="#b8babf"
            stroke="#fff"
            stroke-width="0.5"
          />
        </g>
      </symbol>
      <symbol width="24" height="24" viewBox="0 0 76.975 76.975" id="video">
        <g id="video" transform="translate(0.5 0.5)">
          <g id="object_3_">
            <g id="Group_72566" data-name="Group 72566">
              <path
                id="Path_102587"
                data-name="Path 102587"
                d="M61.845,0H14.129A14.146,14.146,0,0,0,0,14.129V61.845A14.146,14.146,0,0,0,14.129,75.975H61.845A14.146,14.146,0,0,0,75.975,61.845V14.129A14.146,14.146,0,0,0,61.845,0ZM70.73,14.129V18.71H57.443L47.506,5.245H61.845A8.9,8.9,0,0,1,70.73,14.129ZM40.988,5.245,50.925,18.71H34.987L25.05,5.245ZM5.245,14.129a8.9,8.9,0,0,1,8.885-8.885h4.4L28.468,18.71H5.245Zm56.6,56.6H14.129a8.9,8.9,0,0,1-8.885-8.885V23.955H70.73v37.89A8.9,8.9,0,0,1,61.845,70.73Z"
                fill="#b8babf"
                stroke="#b8babf"
                stroke-width="1"
              />
            </g>
            <g
              id="Group_72567"
              data-name="Group 72567"
              transform="translate(27.298 32.741)"
            >
              <path
                id="Path_102588"
                data-name="Path 102588"
                d="M208.645,232.977,187.9,221a2.623,2.623,0,0,0-3.934,2.271v23.956A2.622,2.622,0,0,0,187.9,249.5l20.747-11.978a2.623,2.623,0,0,0,0-4.542Zm-19.436,9.707V227.812l12.88,7.436Z"
                transform="translate(-183.965 -220.647)"
                fill="#b8babf"
                stroke="#b8babf"
                stroke-width="1"
              />
            </g>
          </g>
        </g>
      </symbol>
      <symbol width="24" height="24" viewBox="0 0 24 24" id="voice-recorder">
        <g id="voice-recorder" transform="translate(-10.118 -29.434)">
          <g
            id="Group_72551"
            data-name="Group 72551"
            transform="translate(13.46 42.701)"
          >
            <g id="Group_72550" data-name="Group 72550">
              <path
                id="Path_102579"
                data-name="Path 102579"
                d="M134.012,271.915a.82.82,0,1,0-1.64,0,5.794,5.794,0,0,1-11.587,0,.82.82,0,1,0-1.64,0,7.425,7.425,0,0,0,6.613,7.333v1.685h-2.514a.82.82,0,1,0,0,1.64h6.668a.82.82,0,0,0,0-1.64H127.4v-1.685A7.425,7.425,0,0,0,134.012,271.915Z"
                transform="translate(-119.146 -271.095)"
                stroke="#b8babf"
                stroke-width="0.3"
              />
            </g>
          </g>
          <g
            id="Group_72553"
            data-name="Group 72553"
            transform="translate(16.739 29.584)"
          >
            <g id="Group_72552" data-name="Group 72552">
              <path
                id="Path_102580"
                data-name="Path 102580"
                d="M183.676,29.584a4.143,4.143,0,0,0-4.154,4.1v9.838a4.154,4.154,0,0,0,8.307,0V33.683A4.143,4.143,0,0,0,183.676,29.584Zm2.514,13.937a2.515,2.515,0,0,1-5.028,0V33.683a2.515,2.515,0,0,1,5.028,0Z"
                transform="translate(-179.522 -29.584)"
                stroke="#b8babf"
                stroke-width="0.3"
              />
            </g>
          </g>
          <g
            id="Group_72557"
            data-name="Group 72557"
            transform="translate(28.436 32.906)"
          >
            <g
              id="Group_72556"
              data-name="Group 72556"
              transform="translate(0 0)"
            >
              <path
                id="Path_102582"
                data-name="Path 102582"
                d="M396.278,90.994a.82.82,0,1,0-1.159,1.159,4.092,4.092,0,0,1,0,5.794.82.82,0,1,0,1.159,1.16,5.731,5.731,0,0,0,0-8.113Z"
                transform="translate(-394.879 -90.754)"
                stroke="#b8babf"
                stroke-width="0.3"
              />
            </g>
          </g>
          <g
            id="Group_72559"
            data-name="Group 72559"
            transform="translate(26.118 35.224)"
          >
            <g id="Group_72558" data-name="Group 72558">
              <path
                id="Path_102583"
                data-name="Path 102583"
                d="M353.6,133.671a.82.82,0,0,0-1.159,1.159.817.817,0,0,1,0,1.158.82.82,0,0,0,1.159,1.159,2.456,2.456,0,0,0,0-3.477Z"
                transform="translate(-352.203 -133.431)"
                stroke="#b8babf"
                stroke-width="0.3"
              />
            </g>
          </g>
          <g
            id="Group_72563"
            data-name="Group 72563"
            transform="translate(10.268 32.906)"
          >
            <g
              id="Group_72562"
              data-name="Group 72562"
              transform="translate(0 0)"
            >
              <path
                id="Path_102585"
                data-name="Path 102585"
                d="M62.017,95.051a4.071,4.071,0,0,1,1.2-2.9.82.82,0,0,0-1.159-1.159,5.731,5.731,0,0,0,0,8.113.82.82,0,0,0,1.159-1.159A4.071,4.071,0,0,1,62.017,95.051Z"
                transform="translate(-60.377 -90.755)"
                stroke="#b8babf"
                stroke-width="0.3"
              />
            </g>
          </g>
          <g
            id="Group_72565"
            data-name="Group 72565"
            transform="translate(13.548 35.224)"
          >
            <g id="Group_72564" data-name="Group 72564">
              <path
                id="Path_102586"
                data-name="Path 102586"
                d="M122.636,135.988a.817.817,0,0,1,0-1.158.82.82,0,1,0-1.159-1.159,2.456,2.456,0,0,0,0,3.477.82.82,0,0,0,1.159-1.159Z"
                transform="translate(-120.756 -133.43)"
                stroke="#b8babf"
                stroke-width="0.3"
              />
            </g>
          </g>
        </g>
      </symbol>
    </svg>
    <script src="./js/bootstrap.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script>
      new WOW().init();
    </script>
    <script src="./js/main.js"></script>
  </body>
</html>
