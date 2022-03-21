<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- My CSS -->
    <link rel="stylesheet" href="../public/asset/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
      <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-blue fixed-top" style="background-color: black ;">
        <div class="container">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#About">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#Project">Project</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./admin"><i class="bi bi-gear"></i></a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- Akhir -->
    <!-- Jumboton -->
    <?php foreach($data['profile'] as $pro) : ?>
      <div class="jumbotron text-center">
          <img src="../public/asset/img/e.jpg" alt="" width="200" class="rounded-circle" data-aos="fade-up" />
        <h1 class="display-4"><?= $pro['nama']; ?></h1>
       <p class="lead"><?= $pro['jabatan']; ?>\<?= $pro['perusahaan']; ?></p>
       <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fff" fill-opacity="1" d="M0,32L12.6,53.3C25.3,75,51,117,76,160C101.1,203,126,245,152,250.7C176.8,256,202,224,227,186.7C252.6,149,278,107,303,128C328.4,149,354,235,379,261.3C404.2,288,429,256,455,213.3C480,171,505,117,531,112C555.8,107,581,149,606,154.7C631.6,160,657,128,682,117.3C707.4,107,733,117,758,144C783.2,171,808,213,834,197.3C858.9,181,884,107,909,80C934.7,53,960,75,985,106.7C1010.5,139,1036,181,1061,192C1086.3,203,1112,181,1137,186.7C1162.1,192,1187,224,1213,197.3C1237.9,171,1263,85,1288,58.7C1313.7,32,1339,64,1364,64C1389.5,64,1415,32,1427,16L1440,0L1440,320L1427.4,320C1414.7,320,1389,320,1364,320C1338.9,320,1314,320,1288,320C1263.2,320,1238,320,1213,320C1187.4,320,1162,320,1137,320C1111.6,320,1086,320,1061,320C1035.8,320,1011,320,985,320C960,320,935,320,909,320C884.2,320,859,320,834,320C808.4,320,783,320,758,320C732.6,320,707,320,682,320C656.8,320,632,320,606,320C581.1,320,556,320,531,320C505.3,320,480,320,455,320C429.5,320,404,320,379,320C353.7,320,328,320,303,320C277.9,320,253,320,227,320C202.1,320,177,320,152,320C126.3,320,101,320,76,320C50.5,320,25,320,13,320L0,320Z"></path></svg>      </div>
      <!-- Akhir -->
      <?php endforeach ?>
      <!-- About -->
      <?php foreach($data['about'] as $ab) : ?>
    <section id="About">
      <div class="row text-center">
        <h2>About Me</h2>
      </div>
      <div class="row justify-content-center fs=5">
        <div class="col-sm-4">
         </div>
    <div class="row justify-content-center fs-5"data-aos="zoom-in">
      <div class="col-sm-4">
        <p><?= $ab['Column1']?></p>
      </div>
      <div class="col-sm-4">
        <p><?= $ab['Column2']?></p>
      </div>
    </div>
        </section>
        <?php endforeach ?>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#02ffea" fill-opacity="1" d="M0,224L60,229.3C120,235,240,245,360,245.3C480,245,600,235,720,208C840,181,960,139,1080,122.7C1200,107,1320,117,1380,122.7L1440,128L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path></svg>
    </section>
    <!-- Akhir about -->
    <!-- Project-->
    <?php foreach($data['project'] as $pro) : ?>
    <section id="project">
        <div class="container">
        <div class="row text-center">
           <h2>project</h2>
           </div>
           <div class="row justify-content-evenly fs-5"data-aos="fade-down">
              <div class="col-sm-4">
                <div class="card" style="width:18rem;">
                    <img src="../public/asset/img/e.jpg"
                        class="card-img-top" alt="..."/>
                        <div class="card body">
                            <h1>Elsa Nuragustin</h1>
                        <p class="card-text">hai
                        </p>
                        </div>
                </div>
              </div>
    </section>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fff" fill-opacity="1" d="M0,32L12.6,53.3C25.3,75,51,117,76,160C101.1,203,126,245,152,250.7C176.8,256,202,224,227,186.7C252.6,149,278,107,303,128C328.4,149,354,235,379,261.3C404.2,288,429,256,455,213.3C480,171,505,117,531,112C555.8,107,581,149,606,154.7C631.6,160,657,128,682,117.3C707.4,107,733,117,758,144C783.2,171,808,213,834,197.3C858.9,181,884,107,909,80C934.7,53,960,75,985,106.7C1010.5,139,1036,181,1061,192C1086.3,203,1112,181,1137,186.7C1162.1,192,1187,224,1213,197.3C1237.9,171,1263,85,1288,58.7C1313.7,32,1339,64,1364,64C1389.5,64,1415,32,1427,16L1440,0L1440,320L1427.4,320C1414.7,320,1389,320,1364,320C1338.9,320,1314,320,1288,320C1263.2,320,1238,320,1213,320C1187.4,320,1162,320,1137,320C1111.6,320,1086,320,1061,320C1035.8,320,1011,320,985,320C960,320,935,320,909,320C884.2,320,859,320,834,320C808.4,320,783,320,758,320C732.6,320,707,320,682,320C656.8,320,632,320,606,320C581.1,320,556,320,531,320C505.3,320,480,320,455,320C429.5,320,404,320,379,320C353.7,320,328,320,303,320C277.9,320,253,320,227,320C202.1,320,177,320,152,320C126.3,320,101,320,76,320C50.5,320,25,320,13,320L0,320Z"></path></svg>
      </section>
      <?php endforeach ?>
    <!--Akhir project-->
    <!--contac-->
    <div class="container pt-5"></div>
      <div class="row text-center">
        <h2>Contact</h2>
      </div>
      <div class="row justify-content-center" data-aos="zoom-in-up">
      <div class="col-6">
      <form method="POST">
        <div class="mb-3"data-aos="zoom-in-up">
          <label for="email" class="form-label">Email address</label>
          <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" required="">
          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Nama</label>
          <input type="text" class="form-control" name="nama_k" id="exampleInputPassword1" required="">
        </div>
        <label for="floatingTextarea">Pesan</label>
        <div class="form-floating">
          <textarea class="form-control" name="pesan" placeholder="Leave a comment here" id="floatingTextarea"  required=""></textarea>
        </div>
        <button type="submit" name="submit"class="btn btn-primary">Kirim</button>
      </form>
      </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#273036" fill-opacity="1" d="M0,128L48,122.7C96,117,192,107,288,122.7C384,139,480,181,576,192C672,203,768,181,864,192C960,203,1056,245,1152,218.7C1248,192,1344,96,1392,48L1440,0L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
      <footer class="text-center text-white bg-dark pb-5" style="background-color: #273036;">
        <p>Create with <i class="bi bi-heart-fill"></i> by <a href="">Elsa</a></p>
      </footer>
<!--akhir form-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
    </body>
    </html>