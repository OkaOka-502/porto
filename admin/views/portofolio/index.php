<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio </title>
    <!-- css bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- css -->
    <link rel="stylesheet" href="<?= baseurl;?>/asset/css/style.css">
</head>
<body>
    <!-- NAVBAR -->
    
    <div role="navigation">
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark shadow nav fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand " href="#" style="margin-left: 6em; margin-right: 34em;" ><h4>Cici Oktaviani</h4></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo02" >
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 "  >
            <li class="nav-item">
                <a class="nav-link active mr-3" href="#about"><h6>About</h6></a>
            </li>
            <li>
                <a class="nav-link active mr-3" href="#project"><h6>My Project</h6></a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="#contact"><h6>Contact</h6></a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="../admin/"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-gear-fill" viewBox="0 0 16 16">
                <path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z"/>
                </svg>
                </svg></a>
            </li>
        </ul>
        </nav>
    </div>
    <!-- AKHIR NAVBAR -->
    
    <!-- JUMBOTRON -->
    <?php foreach($data['profile'] as $pro) : ?>

    <div class="jumbotron jumbotron-fluid text-center jumbo" id="home"  >
        <div class="container">
        <img src="<?= baseurl;?>/asset/img/<?= $pro['foto'];?>" class="rounded-circle border border-light foto" width="230px" height="250">
        <h1><?= $pro['nama'];?></h1>
        <h4><?= $pro['jabatan'];?> | <?= $pro['perusahaan'];?></h4>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#000000" fill-opacity="1" d="M0,288L48,272C96,256,192,224,288,197.3C384,171,480,149,576,165.3C672,181,768,235,864,250.7C960,267,1056,245,1152,250.7C1248,256,1344,288,1392,304L1440,320L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
    </div>

    <?php endforeach ?>
    <!-- AKHIR JUMBOTRON -->

    <!-- ABOUT -->
    <div class="about mt-0" id="about">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center mb-5">
                    <h3><u>About</u></h3>
                </div>
            </div>
            <div class="row justify-content-center  text-center">
                <?php foreach($data['about'] as $ab) : ?>
                <div class="col-sm-5 ">
                    <p><?= $ab['column1']; ?></p>
                </div>
                <div class="col-sm-5 ">
                    <p><?= $ab['column2']; ?></p>
                </div>
                <?php endforeach ?>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#00cec9" fill-opacity="1" d="M0,32L48,64C96,96,192,160,288,165.3C384,171,480,117,576,106.7C672,96,768,128,864,165.3C960,203,1056,245,1152,240C1248,235,1344,181,1392,154.7L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
    </div>
    <!-- AKHIR ABOUT -->

    <!-- PORTOFOLIO-->
    <div class="porto mt-0" id="project">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center mb-5 ">
                    
                    <h3><u>My Project</u></h3>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center text-center">
            <?php foreach($data['project'] as $proj ):?>
            <div class="col-md-4">
                <div class="card h-100">
                <img src="<?= baseurl;?>/asset/img/<?= $proj['foto'];?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?= $proj['nama_p'];?></h5>
                    <p><?= $proj['ket'];?></p>
                    <a href="<?= $proj['link'];?>">Lihat Disini</a>
                </div>
                </div>
            </div>
            <?php endforeach ?>
        </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#000000" fill-opacity="1" d="M0,160L26.7,165.3C53.3,171,107,181,160,160C213.3,139,267,85,320,69.3C373.3,53,427,75,480,112C533.3,149,587,203,640,197.3C693.3,192,747,128,800,117.3C853.3,107,907,149,960,165.3C1013.3,181,1067,171,1120,186.7C1173.3,203,1227,245,1280,256C1333.3,267,1387,245,1413,234.7L1440,224L1440,320L1413.3,320C1386.7,320,1333,320,1280,320C1226.7,320,1173,320,1120,320C1066.7,320,1013,320,960,320C906.7,320,853,320,800,320C746.7,320,693,320,640,320C586.7,320,533,320,480,320C426.7,320,373,320,320,320C266.7,320,213,320,160,320C106.7,320,53,320,27,320L0,320Z"></path></svg>
    <!-- AKHIR PORTOFOLIO -->

    <!-- CONTACT -->
    
 <div class="contact" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-sm-12  text-center mb-5">
                    <h2><u>Contact</u></h2>
                </div>
            </div>
            <form action="<?= baseurl;?>/Portofolio/pesan" method="POST">
            <div class="row col-8 offset-2 ">
                <div class="mb-3 ">
                    <label for="name" class="form-label">Name</label>
                    <input type="name" class="form-control" id="name" aria-describedby="name" placeholder="Full Name" required name="nama_k">
                    <div id="name" class="form-text n">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3 ">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="example@gmail.com" required name="email">
                    <div id="emailHelp" class="form-text n">We'll never share your email with anyone else.</div>
                </div>
                <div class="">
                <label for="textarea" class="form-label">Message</label>
                <textarea class="form-control" id="textarea" rows="3" placeholder="Your Message" required name="pesan"></textarea>
                </div>
            </div>
            <button type="submit" class="btn btn-primary mt-5 text-center mb-0 offset-3" style="margin-left: 37em;" >Submit</button>
            </form>
            
        </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#000000" fill-opacity="1" d="M0,128L48,112C96,96,192,64,288,42.7C384,21,480,11,576,53.3C672,96,768,192,864,213.3C960,235,1056,181,1152,154.7C1248,128,1344,128,1392,128L1440,128L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>
        
    <!-- AKHIR CONTACT -->
    
    <!-- FOOTER -->
    
    <div class="footer">
        <div class="container text-center">
            <p>&copy; Copyright 2022 | built with <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
            </svg> By. Cici Oktaviani</p>
            <a href="https://www.linkedin.com/in/cicioktaviani/" class="btn btn-primary" role="button">Connect To Linkedin</a>
        </div>
    </div>
    <!-- AKHIR FOOTER -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>

