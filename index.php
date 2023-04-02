<?php

$conn = mysqli_connect('localhost','root','','contact_db') or die('connection failed');

if(isset($_POST['send'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = mysqli_real_escape_string($conn, $_POST['number']);
   $msg = mysqli_real_escape_string($conn, $_POST['message']);

   $select_message = mysqli_query($conn, "SELECT * FROM `contact_form` WHERE name = '$name' AND email = '$email' AND number = '$number' AND message = '$msg'") or die('query failed');
   
   if(mysqli_num_rows($select_message) > 0){
      $message[] = 'Mesaj zaten gönderildi!';
   }else{
      mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, message) VALUES('$name', '$email', '$number', '$msg')") or die('query failed');
      $message[] = 'Mesaj başarıyla gönderildi!';
   }

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selcuk YAVAS | Kisisel Web Sitesi</title>
    <link rel="stylesheet" href="boxicons-2.0.9/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="style.css">
</head>
<body id="home">

    <div class="scroll-up-btn">
        <i class="bx bx-up-arrow-alt bx-sm"></i>
    </div>

    <div class="showcase">
        <nav class="navbar">
            <h1 class="logo"></span>Selçuk YAVAŞ</h1>
            
            <ul class="menu">
                <li><a href="#home">Ana Sayfa</a></li>
                <li><a href="#about">Hakkımda</a></li>
                <li><a href="#services">Eğitim</a></li>
                <li><a href="#skills">Yeteneklerim</a></li>
                <li><a href="#teams">Örnek Aldığım Yazılımcılar</a></li>
                <li><a href="#contact">Bana Ulaşın</a></li>
                <li><a><span class="text-secondary"><i class="bx bxs-phone bx-xs"></i></span>+90 539 565 14 49</a></li>
            </ul>
            
        </nav>

        <div class="showcase-content">
            <div class="showcase-text">
                <div class="text-1">Hello, my name is</div>
                <div class="text-2">Selçuk Yavaş</div>
                <div class="text-3">And I'm a <span class="typing-1"></span></div>
                <a href="#about" class="btn-md">Beni Tanı</a>
            </div>
            <div class="showcase-img"> <img src="./images/Selcuk.jpg"></div>
        </div> 
    </div>
    
    <!-- Hakkımda Section  -->

    <section id="about" class="about">
        <h1>HAKKIMDA</h1>
        <div class="container">
            <h5 class="title text-center m-heading text-secondary">HAKKIMDA</h5>
            <div class="about-content">
                <div class="column left">
                    <img src="./images/Selcuk.jpg">
                </div>
                <div class="column right">
                    <div class="text">I'm Selçuk YAVAŞ and I'm a <span class="typing-2"></span></div>
                    
                    <table class="table">
                        <tr>
                            <td>Doğum Tarihi</td>
                            <td>: 26 Nisan, 2001</td>
                        </tr>
                        <tr>
                            <td>Telefon</td>
                            <td>:+90 539 565 14 49</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>:yavasselcuk1907@gmail.com</td>
                        </tr>
                        <tr>
                            <td>Yaş</td>
                            <td>:22</td>
                        </tr>
                        <tr>
                            <td>Ülke</td>
                            <td>:Türkiye</td>
                        </tr>
                    </table>
                    <a href="./CV.pdf" class="btn-md" download="">CV İndir</a>
                </div>
            </div>
        </div>
    </section> 

    <!-- Egıtım Section Styling -->

    <section class="services" id="services">
        <h1>EGİTİM</h1>
        <div class="container">
            <h5 class="title text-center m-heading text-secondary">EGİTİM</h5>
            <div class="service-content">
               <div class="main">
                   <div class="service">
                       <div class="service-logo">
                        <i class="bx bxs-book bx-lg"></i>
                       </div>
                          <h4>Türk İsveç Kardeşlik Ortaokulu</h4>
                          <h2>2008-2016</h2>
                    </div>
                 <div class="shadowone"></div>
                 <div class="shadowtwo"></div>        
               </div>
               
               <div class="main">
                   <div class="service">
                       <div class="service-logo">
                        <i class="bx bxs-book bx-lg"></i>
                       </div>
                          <h4>Samiha Ayverdi Anadolu Lisesi</h4>
                          <h2>2016-2020</h2>
                    </div>
                 <div class="shadowone"></div>
                 <div class="shadowtwo"></div>        
               </div>
               
               <div class="main">
                   <div class="service">
                       <div class="service-logo">
                        <i class="bx bxs-book bx-lg"></i>
                       </div>
                          <h4>İstanbul Sabahattin Zaim Üniversitesi</h4>
                          <h2>2020-2024</h2>
                    </div>
                 <div class="shadowone"></div>
                 <div class="shadowtwo"></div>        
               </div>
               
            </div>
        </div>
    </section>
    
    <!-- Yetenekler Section  -->

    <section id="skills" class="skills">
        <h1>YETENEKLERİM</h1>
        <div class="container">
            <h5 class="title text-center m-heading text-secondary">YETENEKLERİM</h5>
            <div class="skill-content">
                <div class="column left">
                    <div class="text">
                        Hobi & Bildiğim Yazılım Dilleri
                    </div>
                    <p></p>
                    <p>HOBİLERİM: </p><br>
                    <p>-Futbol Oynamak</p><br>
                    <p>-Basketbol Oynamak</p><br>
                    <p>-Voleybol Oynamak</p><br> 
                    <p>-Tenis Oynamak</p><br>  
                    <p>-Satranç Oynamak</p><br> 
                    <p>-Kamp Yapmak</p><br>   
                    
                    
                </div>
                <div class="column right">
                   <div class="bars">
                       <div class="info">
                           <span>C++</span>
                           <span>89%</span>
                       </div>
                       <div class="line mg"></div>
                   </div>
                   <div class="bars">
                       <div class="info">
                           <span>PHP</span>
                           <span>95%</span>
                       </div>
                       <div class="line html"></div>
                   </div>
                   <div class="bars">
                       <div class="info">
                           <span>Java</span>
                           <span>93%</span>
                       </div>
                       <div class="line uxd"></div>
                   </div>
                   <div class="bars">
                       <div class="info">
                           <span>HTML</span>
                           <span>95%</span>
                       </div>
                       <div class="line html"></div>
                   </div>
                   <div class="bars">
                       <div class="info">
                           <span>CSS</span>
                           <span>95%</span>
                       </div>
                       <div class="line html"></div>
                   </div>
                   <div class="bars">
                       <div class="info">
                           <span>JavaScript</span>
                           <span>75%</span>
                       </div>
                       <div class="line ps"></div>
                   </div>
                </div>
            </div>
        </div>
    </section> 

    <!-- Yazılımcılar section -->
<section class="teams" id="teams">
    <h1>ÖRNEK ALDIĞIM YAZILIMCILAR</h1>
    <div class="container">
        <h5 class="title text-center m-heading text-secondary">ÖRNEK ALDIĞIM YAZILIMCILAR</h5>
        <div class="carousel owl-carousel">
            <div class="card">
                <div class="box">
                    <img src="./images/billgates.jpg" alt="">
                    <div class="text">Bill Gates</div>
                    <p>Bill Gates, Microsoft şirketinin kurucusu ve dünyaca ünlü bir iş adamı, yatırımcı ve yazardır.</p>
                </div>
            </div>
            <div class="card">
                <div class="box">
                    <img src="./images/brendaneich.jpg" alt="">
                    <div class="text">Brendan Eich</div>
                    <p>Brendan Eich, JavaScript programlama dilini oluşturdu.Mozilla’nın baş teknik sorumlusu olarak hizmet verdi.</p>
                </div>
            </div>
            <div class="card">
                <div class="box">
                    <img src="./images/rasmuslerdorf.jpg" alt="">
                    <div class="text">Rasmus Lerdorf</div>
                    <p>Rasmus Lerdorf, PHP web programlama dilinin mucidi ve Apache sunucu projesi programcısıdır.</p>
                </div>
            </div>
            <div class="card">
                <div class="box">
                    <img src="./images/JohnMcCarthy.jpg" alt="">
                    <div class="text">John McCarthy</div>
                    <p>ABD’li bilgisayar bilimcisidir.Lisp programlama dilini geliştirmiştir.Yapay zeka terimini ilk ortaya koyan kişidir.</p>
                </div>
            </div>
            <div class="card">
                <div class="box">
                    <img src="./images/TimBernersLee.jpg" alt="">
                    <div class="text">Tim Berners-Lee</div>
                    <p>Tim Berners-Lee,HTML dilini geliştirmiş ve World Wide Web (WWW) olarak bildiğimiz internet dünyasını kurmuştur</p>
                </div>
            </div>
            
        </div>

    </div>
</section>

<!-- Iletisim Section -->
<section class="contact" id="contact">
    <h1>BANA ULAŞIN</h1>
        <div class="container">
            <h5 class="title text-center m-heading text-secondary">BANA ULAŞIN</h5>
            <div class="contact-content">
                <div class="column left">
                    <h2>Heyy, haydi bana mesaj yolla :)</h2>
                    <form action="" method="post">
                        <div class="form-group">
                            <input type="text" name="name" id="name" placeholder="Adınızı Giriniz">
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" id="email" placeholder="Email Adresinizi Giriniz">
                        </div>
                        <div class="form-group">
                            <input type="number" name="number" id="subject" placeholder="Telefon Numaranızı Giriniz">
                        </div>
                        <div class="form-group">
                            <textarea name="message" id="message" placeholder="Mesajınızı Giriniz" cols="30" rows="10"></textarea>
                        </div>
                        <button type="submit" value="send message" name="send" class="btn-md">Mesaj Gönder</button>
                    </form>
                </div>
                <div class="column right">
                   <h2>İletişim Bilgileri</h2>
                   <div class="items">
                       <div class="item">
                            <i class="bx bxs-envelope bx-xs"></i>
                            <div class="text">
                                 <h3>Email</h3>
                                <p><span>yavasselcuk1907@gmail.com</span></p>
                                
                             </div>
                       </div>
                       <div class="item">
                            <i class="bx bxs-phone bx-xs"></i>
                            <div class="text">
                                <h3>Telefon</h3>
                                <p><span>+90 539 565 14 49</span></p>
                                <p><span>+90 212 647 06 91</span></p>
                            </div>
                        </div>

                        <div class="item">
                            <i class="bx bxs-map bx-xs"></i>
                            <div class="text">
                                <h3>Adres</h3>
                                <p><span>Tuna Mahallesi 675.sokak</span></p>
                                <p><span>Esenler,İstanbul</span></p>
                            </div>
                        </div>
                       </div>
                       <div>
                            <p>Sosyal medya adresimi ziyaret ederek benimle iletişim kurabilirsiniz:)</p>
                            <ul class="links">
            
                                <li><a href="https://www.instagram.com/selcukyavas_/" target=_blank><i class="bx bxl-instagram-alt bx-md"></i></a></li>
                    
                            </ul>
                     </div>
                       </div>
                   </div>
                </div>
            </div>
        </div>
</section>
<footer id="footer">
<p>&copy; 2022 Selçuk Yavaş | Tüm Hakları Saklıdır.</p>
</footer>



<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.12/typed.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="app.js"></script>
</body>
</html>