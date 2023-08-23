<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Required Core stylesheet -->
    <link rel="stylesheet" href="node_modules/@glidejs/glide/dist/css/glide.core.min.css">

    <!-- Optional Theme stylesheet -->
    <link rel="stylesheet" href="node_modules/@glidejs/glide/dist/css/glide.theme.min.css">
    <link rel="stylesheet" href="assets/css/style.css" />
    <script src="https://kit.fontawesome.com/428a1a7321.js" crossorigin="anonymous"></script>
    <title>Portofolio</title>
  </head>
  <body>
    <header>
      <nav class="navbar">
        <div class="navbar-brand"><a href="https://www.rpmsystem.me/" target="_self">Daeng one</a></div>
        <div class="navbar-menu">
          <!-- <span onclick="openNav()">&#9776;</span> -->
          <ul class="nav" id="myNavbar">
            <li class="nav-item active">
              <a class="nav-link" href="#home"><span>Home</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#skills"><span>Skills</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#project"><span>Project</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#gallery"><span>Gallery</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#aboutme"><span>Description</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact"><span>Contact</span></a>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    <main>
      <div class="content">
        <section class="content-banner" id="home">
          <div class="banner-body">
            <div class="banner-left">
              <a target="_blank" href="https://www.instagram.com/iswan_ariyanto/"><img src="assets/image/instagram_square.png" alt="" /></a>
              <a target="_blank" href="https://www.facebook.com/iswanariyanto025/"><img src="assets/image/facebook_square.png" alt="" /></a>
              <a target="_blank" href="https://twitter.com/IswanAriyanto"><img src="assets/image/twitter_square.png" alt="" /></a>
            </div>
            <div class="banner-center">
              <div class="text">
                <h2>Hi, Saya Iswan Ariyanto</h2>
                <h1>Programmer | Editor</h1>
                <p>
                  Website Ini berisikan tentang informasi pribadi saya, ditujukan untuk mengenal saya lebih jauh dari apa yang anda ketahui. beberapa informasi detail telah saya lampirkan pada halaman website ini untuk memudahkan anda
                  apabila ingin berkomunikasi lebih lanjut dengan saya di kemudian hari...
                </p>
              </div>
            </div>
            <div class="banner-right">
              <!-- <img src="assets/image/vector-creator4.png" alt="" id="vector" /> -->
              <img src="assets/image/IMG_6843.png" class="me" alt="..." />
            </div>
          </div>
        </section>
        <section class="content-skills" id="skills">
          <div class="header">
            <h1>My Skills</h1>
            <p>
              Berikut Beberapa hard skill yang saya miliki saat ini dan sedang tren saat ini demi menunjang karir saya kedepannya. saya juga telah menambahkan nilai persentase dengan desain yang cukup memudahkan pengunjung website saya agar
              lebih paham seberapa banyak saya menguasai skill tersebut.
            </p>
          </div>
          <div class="body">
            <div class="glide">
              <div class="glide__track" data-glide-el="track">
                <ul class="glide__slides">
                  <li class="glide__slide">
                    <img src="assets/image/html_icon.png" alt="" id="image" />
                    <div class="overlay">
                      <h3>95%</h3>
                    </div>
                  </li>
                  <li class="glide__slide">
                    <img src="assets/image/css_icon.png" alt="" />
                    <div class="overlay">
                      <h3>80%</h3>
                    </div>
                  </li>
                  <li class="glide__slide">
                    <img src="assets/image/js_icon.png" alt="" />
                    <div class="overlay">
                      <h3>70%</h3>
                    </div>
                  </li>
                  <li class="glide__slide">
                    <img src="assets/image/php.png" alt="" />
                    <div class="overlay">
                      <h3>85%</h3>
                    </div>
                  </li>
                  <li class="glide__slide">
                    <img src="assets/image/c++.png" alt="" />
                    <div class="overlay">
                      <h3>60%</h3>
                    </div>
                  </li>
                  <li class="glide__slide">
                    <img src="assets/image/sql.png" alt="" />
                    <div class="overlay">
                      <h3>70%</h3>
                    </div>
                  </li>
                  <li class="glide__slide">
                    <img src="assets/image/office.png" alt="" />
                    <div class="overlay">
                      <h3>80%</h3>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="glide__arrows" data-glide-el="controls">
                <button class="glide__arrow glide__arrow--left" data-glide-dir="<"><i class="fas fa-angle-left"></i></button>
                <button class="glide__arrow glide__arrow--right" data-glide-dir=">"><i class="fas fa-angle-right"></i></button>
              </div>
            </div>
          </div>
        </section>
        <section class="paralax par-1">
          <q>Suatu pengetahuan(ilmu), kalaupun tidak bermanfaat untukmu, tidak akan membahayakanmu</q>
          <p>- Umar bin Khattab -</p>
        </section>
        <section class="content-project" id="project"></section>
        <section class="content-gallery" id="gallery">
          <div class="header">
            <h1>Gallery</h1>
            <p>Beberapa gambar yang saya tampilkan bertujuan untuk memberitahukan pengunjung website saya tentang pencapaian dan aktifitas yang telah saya lakukan hingga saat ini...</p>
          </div>
          <div class="body">
            <div class="column first">
              <div class="row">
                <img src="assets/image/gallery/IMG_6901.JPG" alt="" />
              </div>
              <div class="row">
                <img src="assets/image/gallery/IMG20191226074825.JPG" alt="" />
              </div>
              <div class="row">
                <img src="assets/image/gallery/IMG20210514165559.JPG" alt="" />
              </div>
            </div>
            <div class="column second">
              <div class="row">
                <img src="assets/image/gallery/One.JPG" alt="" />
              </div>
              <div class="row">
                <img src="assets/image/gallery/IMG201912260817361.JPG" alt="" />
              </div>
            </div>
            <div class="column third">
              <div class="row">
                <img src="assets/image/gallery/IMG_3444.jpg" alt="" />
              </div>
              <div class="row">
                <img src="assets/image/gallery/IMG_6843.JPG" alt="" />
              </div>
              <div class="row">
                <img src="assets/image/gallery/IMG_6814.JPG" alt="" />
              </div>
            </div>
          </div>
        </section>
        <section class="paralax par-2">
          <q>Jika kau bukan anak raja, juga bukan anak ulama besar, maka menulislah</q>
          <p>- Imam Al-Ghazali -</p>
        </section>
        <section class="content-aboutme" id="aboutme">
          <aside>
            <div class="photos">
              <div class="photos-box">
                <img src="assets/image/photo-box.png" alt="" />
              </div>
            </div>
            <div class="description">
              <h1>Iswan Ariyanto <span>21'</span></h1>
              <p>
                Seorang pemuda <b>21 tahun</b> yang berasal dari polosok salah satu kota yang ada di provinsi Sulawesi-Selatan, berangkat ke kota besar untuk menuntut ilmu demi memenuhi harapan orang tua untuk menjadi manusia yang dapat
                berguna bagi orang banyak. merupakan <b>anak bungsu</b> dari 4 bersaudara dari pasangan <b>Bapak Yasin</b> dan <b>ibu Darmawati</b>, keturunan campuran suku makassar dan suku bima yang saat ini menetap di kota bandung.
                Beberapa aktifitas yang sedang gemar saya jalani saat ini yaitu berolahraga, ngoding, mendengarkan musik, serta mengunjungi tempat-tempat wisata yang belum diketahui oleh banyak orang.<br />
                <span> Apakah hanya segitu saja detail tentang kehidupan saya? Tentu tidak... </span>
              </p>
            </div>
          </aside>
          <article>
            Saat ini saya sedang menempuh pendidikan di salah satu perguruan tinggi swasta yang ada di Bandung, <b>Telkom University</b> menjadi pilihan utama saya untuk menambah ilmu sebagai penunjang karir saya kedepannya. menjadi seorang
            engineer adalah cita-cita saya sejak lama sehingga saya mengambil jurusan D3 Teknik Komputer untuk dapat meningkatkan keberhasilan saya dalam meraih cita-cita tersebut. saya masuk pada tahun 2017 dan berhasil menyelesaikan studi
            saya pada tahun 2020 dengan status "Sangat Memuaskan", saat ini saya sedang menempuh pendidikan lanjutan (ekstensi) dengan jurusan yang sama yaitu S1 Teknik Komputer Fakultas Teknik Elektro... Mungkin segitu saja yang dapat saya
            ceritakan, Terimakasih...
          </article>
        </section>
      </div>
      <div class="footer" id="contact">
        <div class="content-footer">
          <div class="item quote">
            <q>Untuk apa yang sedang kau usahakan ini, lakukan semaksimal mungkin. dan bila saatnya telah tiba katakan pada dirimu sendiri bahwa aku tidak menyesal sedikitpun dengan keputusanku yang telah lalu.</q>
          </div>
          <div class="item contact">
            <h2>Contact</h2>
            <p>082290116145</p>
            <p>Iswanariyanto025@gmail.com</p>
            <p>iswan_ariyanto1915</p>
          </div>
          <div class="item address">
            <h2>Address</h2>
            <p>Jalan Taman Makam Pahlawan, Btn. Sasayya Blok A4 No.20, Bonto Sunggu, Kec. Bantaeng, Kabupaten Bantaeng, Sulawesi Selatan 92451</p>
          </div>
        </div>
        <div class="cp">
          <p>&#169;Copyright 2021 All rights Reserved. Powered By One</p>
        </div>
      </div>
    </main>
    <script src="assets/js/script.js"></script>
  </body>
</html>