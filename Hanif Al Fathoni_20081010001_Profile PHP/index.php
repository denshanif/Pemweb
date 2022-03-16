<!DOCTYPE html>
<html lang="en">

<!--Hanif Al Fathoni 20081010001 Pemrograman Web C081-->

<head>
  <meta charset="UTF-8">

  <title>Hanif Al Fathoni | Profile</title>

  <link rel="stylesheet" type="text/css" href="styles/styles.css?<?php echo time(); ?>" />

</head>

<body>
  <?php
    $teksJumbotron = "Hanif Al Fathoni";
    $ketJumbotron = "Informatika | UPN Veteran Jawa Timur";
    $judulDiv1 = "Tentang Saya";
    $teksDiv1 = "Perkenalkan nama saya Hanif Al Fathoni. Saya
    adalah seorang mahasiswa yang sedang menempuh pendidikan di jurusan Informatika.<br>Saya memiliki ketertarikan
    di bidang Web Development & UI/UX Design.";
    $teksTambahan = "Salam Kenal !";
    $judulDiv2 = "Data Diri";
    $subSatuDiv2 = "Nama";
    $nama = "Hanif Al Fathoni";
    $subDuaDiv2 = "Tempat Tanggal Lahir";
    $ttl = "Sidoarjo, 9 Februari 2002";
    $subTigaDiv2 = "Alamat";
    $alamat = "Geluran, Taman, Sidoarjo";
    $judulDiv3 = "Pendidikan";
    $pendidikan1 = "UPN Veteran Jawa Timur";
    $jurusanPendidikan1 = "Informatika";
    $tahunPendidikan1 = "2020 - Sekarang";
    $pendidikan2 = "SMK Negeri 1 Suarabaya";
    $jurusanPendidikan2 = "Teknik Komputer & Jaringan";
    $tahunPendidikan2 = "2017 - 2020";
    $judulDiv4 = "Skill & Keahlian";
    $skillBahasa = "Bahasa";
    $namaBahasa = "Nama Bahasa";
    $tingKefasihan = "Tingkat Kefasihan";
    $bahasa1 = "Bahasa Indonesia";
    $kefBahasa1 = "Sangat Fasih";
    $bahasa2 = "Bahasa Jawa";
    $kefBahasa2 = "Bahasa Ibu, Bahasa Sehari-hari";
    $bahasa3 = "Bahasa Inggris";
    $kefBahasa3 = "Sedikit Fasih";
    $skillIt = "Skill IT";
    $namaSoftware = "Nama Software/Bahasa Pemrogramanan";
    $tingKeahlian = "Tingkat Keahlian";
    $software1 = "Bahasa C";
    $tingSoftware1 = "Sedang";
    $software2 = "HTML, CSS";
    $tingSoftware2 = "Sedang";
    $software3 = "Figma";
    $tingSoftware3 = "Sedang";
    $judulDiv5 = "Kontak";
    $subDiv5 = "Jangan sungkan-sungkan untuk hubungi saya di kontak berikut ini ya!";
    $email = "Email : alfatoni922@gmail.com";
    $instagram = "Instagram : @denshanif";
    $namaForm = $emailForm = $pesanForm = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $namaForm = test_input($_POST["namaForm"]);
      $emailForm = test_input($_POST["emailForm"]);
      $pesanForm = test_input($_POST["pesanForm"]);
    }

    function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
  ?>

  <header>
    <div class="top-nav">
      <a class="active" href="#">Hanif Al Fathoni | Profile</a>
      <a href="#tentangsaya">Tentang Saya</a>
      <a href="#datadiri">Data Diri</a>
      <a href="#pendidikan">Pendidikan</a>
      <a href="#skill">Skill</a>
      <a href="#kontak">Kontak</a>
    </div>
  </header>

  <main>
    
    <div class="jumbotron">
      <div class="padding-div-top">
        <img src="images/profile-round.png" alt="Foto Hanif" title="Foto Hanif"
          class="jumbotron-profile">
      </div>
      <div class="padding-div-bottom">
        <h1 class="h1-jumbotron"><?php echo $teksJumbotron?></h1>
        <h5 class="h5-jumbotron"><?php echo $ketJumbotron?></h5>
      </div>
    </div>

    <div id="tentangsaya" class="div">
      <h1 class="div-title"><?php echo $judulDiv1?></h1>
      <h3 class="h3-tentang"><?php echo $teksDiv1?><br><br><?php echo $teksTambahan?></h3>
    </div>

    <div id="datadiri" class="div div-color">
      <h1 class="div-title"><?php echo $judulDiv2?></h1>
      <div>
        <div>
          <h3 class="div-h3"><?php echo $subSatuDiv2?></h3>
          <p class="div-p"><?php echo $nama?></p>
        </div>
        <div class="div-padding">
          <h3 class="div-h3"><?php echo $subDuaDiv2?></h3>
          <p class="div-p"><?php echo $ttl?></p>
        </div>
        <div class="div-padding">
          <h3 class="div-h3"><?php echo $subTigaDiv2?></h3>
          <p class="div-p"><?php echo $alamat?></p>
        </div>
      </div>
    </div>

    <div id="pendidikan" class="div">
      <h1 class="div-title"><?php echo $judulDiv3?></h1>
      <div>
        <div>
          <h3 class="div-h3"><?php echo $pendidikan1?></h3>
          <p class="div-p"><?php echo $jurusanPendidikan1?></p>
          <p class="div-p"><?php echo $tahunPendidikan1?></p>
        </div>
        <div class="div-padding">
          <h3 class="div-h3"><?php echo $pendidikan2?></h3>
          <p class="div-p"><?php echo $jurusanPendidikan2?></p>
          <p class="div-p"><?php echo $tahunPendidikan2?></p>
        </div>
      </div>
    </div>

    <div id="skill" class="div div-color">
      <h1 class="div-title">
        <?php echo $judulDiv4?>
      </h1>
      <div>
        <h3 class="div-h3"><?php echo $skillBahasa?></h3>
        <table
          class="table">
          <thead>
            <th
              class="th">
              <?php echo $namaBahasa?></th>
            <th
              class="th">
              <?php echo $tingKefasihan?></th>
          </thead>
          <tbody>
            <tr>
              <td class="td"><?php echo $bahasa1?></td>
              <td class="td"><?php echo $kefBahasa1?></td>
            </tr>
            <tr>
              <td class="td"><?php echo $bahasa2?></td>
              <td class="td"><?php echo $kefBahasa2?></td>
            </tr>
            <tr>
              <td class="td"><?php echo $bahasa3?></td>
              <td class="td"><?php echo $kefBahasa3?></td>
            </tr>
          </tbody>
        </table>
      </div>
      <div>
        <h3 class="div-h3"><?php echo $skillIt?></h3>
        <table
          class="table">
          <thead>
            <th
              class="th">
              <?php echo $namaSoftware?></th>
            <th
            class="th">
              <?php echo $tingKeahlian?></th>
          </thead>
          <tbody>
            <tr>
              <td class="td"><?php echo $software1?></td>
              <td class="td"><?php echo $tingSoftware1?></td>
            </tr>
            <tr>
              <td class="td"><?php echo $software2?></td>
              <td class="td"><?php echo $tingSoftware2?></td>
            </tr>
            <tr>
              <td class="td"><?php echo $software3?></td>
              <td class="td"><?php echo $tingSoftware3?></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

    <div id="kontak" class="div">
      <h1 class="div-title"><?php echo $judulDiv5?></h1>
      <h3 class="div-h3"><?php echo $subDiv5?>
      </h3>
      <h5 class="div-h5"><?php echo $email?></h5>
      <h5 class="div-h5"><?php echo $instagram?></h5>
      <div class="form">
        <h3 class="div-h3">Form Kontak</h3>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
          Nama: <input type="text" name="namaForm">
          <br><br>
          Email: <input type="text" name="emailForm">
          <br><br>
          Pesan: <textarea name="pesanForm" rows="5" cols="40"></textarea>
          <br><br>
          <input type="submit" name="submit" value="Kirim">
        </form>
      </div>
    </div>

    <div class="div div-color">
      <h1 class="div-title">Music Player</h1>
      <audio controls autoplay>
        <source src="audios/music.mp3" type="audio/mp3">
      </audio>
    </div>
  </main>

  <footer>
    <div class="div-footer">
      <h5 class="h5-footer">Made by Hanif Al Fathoni | 2022</h5>
    </div>
  </footer>

</body>

</html>