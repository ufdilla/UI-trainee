<?php
   include('session.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Employees</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link href="img/favicon.png" rel="icon">
    <link href="img/favicon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="css/style.css" rel="stylesheet">

</head>

<body>

    <!--==========================
  Header
  ============================-->
    <header id="header">
        <div class="container">

            <div id="logo" class="pull-left">
                <!-- <a href="#hero"><img src="img/logo.jpg" alt="" title="" /></img> -->
                </a>
                <!-- Uncomment below if you prefer to use a text logo -->
                <!--<h1><a href="#hero">Regna</a></h1>-->
            </div>

            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li class="menu-active"><a href="#hero">Home</a></li>
                    <li><a href="#formInput">Form Input</a></li>
                    <li><a href="#listData">List Data</a></li>
                    <!-- <li><a href="#portfolio">Portfolio</a></li>
                    <li><a href="#team">Team</a></li>
                    <li class="menu-has-children"><a href="">Drop Down</a>
                        <ul>
                            <li><a href="#">Drop Down 1</a></li>
                            <li class="menu-has-children"><a href="#">Drop Down 2</a>
                                <ul>
                                    <li><a href="#">Deep Drop Down 1</a></li>
                                    <li><a href="#">Deep Drop Down 2</a></li>
                                    <li><a href="#">Deep Drop Down 3</a></li>
                                    <li><a href="#">Deep Drop Down 4</a></li>
                                    <li><a href="#">Deep Drop Down 5</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Drop Down 3</a></li>
                            <li><a href="#">Drop Down 4</a></li>
                            <li><a href="#">Drop Down 5</a></li>
                        </ul>
                    </li>
                    <li><a href="#contact">Contact Us</a></li> -->
                </ul>
            </nav>
            <!-- #nav-menu-container -->
        </div>
    </header>
    <!-- #header -->

    <!--==========================
    Hero Section
  ============================-->
    <section id="hero">
        <div class="hero-container">
            <h1>Welcome to Our Site</h1>
            <h2>We are team in EasySoft Indonesia</h2>
            <a href="#listData" class="btn-get-started">Get Started</a>
        </div>
    </section>
    <!-- #hero -->

    <main id="main">

        <!--==========================
      Facts Section
    ============================-->
        <section id="formInput">
            <div class="container wow fadeIn">
                <h2 class="title">Form Input Users Data</h2>

                <form>
                    <div class="form-group">
                        <label for="inputName">Nama Lengkap</label>
                        <input type="name" class="form-control" id="name" aria-describedby="nameHelp" placeholder="Full Name Here">
                    </div>
                    <div class="form-group">
                        <label for="inputPassword">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        <small id="namaelp" class="form-text text-muted">Digunakan untuk login absen.</small>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress">Alamat Lengkap</label>
                        <input type="address" class="form-control" id="address" placeholder="Address">
                    </div>
                    <div class="form-group">
                        <label for="positionId">Position ID</label>
                        <select class="form-control" id="positionId">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="groupId">Group ID</label>
                        <select class="form-control" id="groupId">
                            <option>11</option>
                            <option>12</option>
                            <option>13</option>
                            <option>14</option>
                            <option>15</option>
                        </select>
                    </div>
                </form>
                <div class="form-group">
                    <label for="status">Status Kepegawaian</label>
                    <input type="status" class="form-control" id="status" aria-describedby="statusHelp" placeholder="">
                </div>
                <div class="form-group">
                    <label for="phone">No. Telp.</label>
                    <input type="phone" class="form-control" id="phone" placeholder="028xxxxxx">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Email@example.com">
                </div>
                <div class="form-group">
                    <label for="photo">File Foto</label>
                    <input type="file" class="form-control-file" id="file">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </section>
        <!-- #facts -->

        <!--==========================
      Services Section
    ============================-->
        <section id="listData">
            <div class="container wow fadeIn">
                <div class="section-header">
                    <h3 class="section-title">List Users</h3>
                </div>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">User ID</th>
                            <th scope="col">Password</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Posisi</th>
                            <th scope="col">Grup</th>
                            <th scope="col">Status</th>
                            <th scope="col">No. Tlp.</th>
                            <th scope="col">Email</th>
                            <!-- <th scope="col">Foto</th> -->
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </section>
        <!-- #services -->

    </main>

    <!--==========================
    Footer
  ============================-->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">

            </div>
        </div>

        <div class="container">
            <div class="copyright">
                <!--&copy;-->Made By <strong>Ufdilla</strong>
                <div class="credits">
                    <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Regna
        -->
                    Bootstrap Templates by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                </div>
            </div>
    </footer>
    <!-- #footer -->

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/jquery/jquery-migrate.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8HeI8o-c1NppZA-92oYlXakhDPYR7XMY"></script>

    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/superfish/hoverIntent.js"></script>
    <script src="lib/superfish/superfish.min.js"></script>

    <!-- Contact Form JavaScript File -->
    <script src="contactform/contactform.js"></script>

    <!-- Template Main Javascript File -->
    <script src="js/main.js"></script>

</body>

</html>