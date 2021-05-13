<?php
include './includes/header.php';
require_once './includes/connection.php';
require_once './includes/utility_funcs.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Radiohead</title>
    <meta name="description" content="Student project website on Radiohead band.">
    <link rel="icon" type="image/icon" href="images/icon.png"><!--=====Icon Image on Tab=====-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Amatic+SC" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <script src="https://kit.fontawesome.com/da7fd5eaaf.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

</head>
<!--=====Logo and Social Media Links=====-->
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

    <!--=====Carousel=====-->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
            <li data-target="#myCarousel" data-slide-to="4"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="item active"> <img src="images/members/radiohead1.jpg" alt="bandimg1"></div>
            <div class="item"> <img src="images/members/radiohead2.jpg" alt="bandimg2"></div>
            <div class="item"> <img src="images/members/radiohead3.jpg" alt="bandimg3"></div>
            <div class="item"> <img src="images/members/radiohead4.jpg" alt="bandimg4"></div>
            <div class="item"> <img src="images/members/radiohead5.jpg" alt="bandimg5"></div>
        </div><!--=====End Carousel Images=====-->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
    </div><!--=====End Carousel=====-->
    <!--=====About Band Container=====-->
    <div id="band" class="container text-center">
        <h1>RADIOHEAD</h1>
        <h2><em>Welcome!</em></h2>
        <p>Radiohead are one of the most celebrated alternative rock groups of the last two decades, wowing critics while maintaining a sizable following across the globe despite their insistence on producing challenging, forward-thinking music. When the British band began in the 90's, they resembled traditional modern-rock group, but in subsequent years the quintet have slowly moved away from convetional guitar-and-drum-based music to explore experimental structures and tones. The band members include Thom Yorke, brothers Jonny Greenwood, and Colin Greenwood, Ed O'Brien, and Philip Selway. Radiohead had sold more than 30 million albums worldwide by 2011. Their work places highly in both listener polls and critics' lists of the best music of the 1990's, 2000's, and 2010s. They were inducted into the Rock and Roll Hall of Fame in 2019. They may not be the most popular group in rock, but they're certainly one of the most respected.</p>
        <br>
        <div class="row"><!--=====Start First Band Member Row=====-->
            <div class="col-sm-4">
                <div class="text-center"><!--=====John=====-->
                    <a href="#john" data-toggle="collapse"> <img src="images/members/jonnylive.jpg" class="img-thumbnail" alt="john">
                        <div class="caption"><strong class="com">Johny Greenwood </strong><i class="fas fa-sort-down fa-2x"></i></div>
                    </a>
                </div><!--=====End Name Caption=====-->
                <div id="john" class="collapse">
                    <p>The band's lead guitarist and keyboardist. He is a multi-instrumentalist who also plays the bass guitar, drums, viola, haronica and the ondes Martenot, an early elecronic instrument. Johnny also works with electronic instruments and techniques such as programming, sampling and looping, and writes music software used by Radiohead.</p>
                    <p>Greenwood is considered by many to be one of the greatest guitarist of all time. He is an English musician as well as composer.</p>
                    <p>He is the youngest brother of Radiohead bassist Collin Greenwood</p>
                </div><!--=====End Collapse=====-->
            </div><!--=====End John=====-->
            <div class="col-sm-4">
                <div class="text-center"><!--=====Thom=====-->
                    <a href="#thom" data-toggle="collapse"> <img src="images/members/thomlive.png" class="img-thumbnail" alt="Thom">
                        <div class="caption"><strong class="com">Thom Yorke </strong><i class="fas fa-sort-down fa-2x"></i></div>
                    </a>
                </div><!--=====End Name Caption=====-->
                <div id="thom" class="collapse">
                    <p>Thom is the lead singer but also plays electric guitar, accoustic guitar, base guitar, piano, and drums. He is also an electronic musician.</p>
                    <p>He was rated 66th greatest singer of all time by Rolling Stone.</p>
                    <p>Thom has a paralyzed left eye because of botched surgeries. He was teased about this in elementary school and became an outcast until he met future band members of Radiohead</p>
                </div><!--=====End Collapse=====-->
            </div><!--=====End Thom=====-->
            <div class="col-sm-4">
                <div class="text-center"><!--=====Ed=====-->
                    <a href="#ed" data-toggle="collapse"> <img src="images/members/edlive.jpg" class="img-thumbnail" alt="Ed">
                        <div class="caption"><strong class="com">Ed O'Brien </strong><i class="fas fa-sort-down fa-2x"></i></div>
                    </a>
                </div><!--=====End Name Caption=====-->
                <div id="ed" class="collapse">
                    <p>Edward is an English guitarist, singer and songwriter.</p>
                    <p>O'Brien uses a large collection of effects pedals. Even on tracks that do not feature any guitar work, his pedals are put to use for other purposes such as altering Thom's keyboard playing. His unconventioal guitar playing, focusing on effects to enhance the framework of the music.</p>
                    <p>In an article for Rolling Stone, David Fricke picked O'Brien as the 59th greatest guitarist of all time.</p>
                </div><!--=====End Collapse=====-->
            </div><!--End Ed=====-->
        </div><!--=====End First Row of Members=====-->
        <div class="row"><!--=====2nd Row of Members Start=====-->
            <div class="col-sm-6">
                <br>
                <div class="text-center"><!--=====Colin=====-->
                    <a href="#colin" data-toggle="collapse"> <img src="images/members/colinlive.jpg" class="img-thumbnail" alt="Colin">
                        <div class="caption"><strong class="com">Colin Greenwood </strong><i class="fas fa-sort-down fa-2x"></i></div>
                    </a>
                </div><!--=====End Name Caption=====-->
                <div id="colin" class="collapse">
                    <p>Colin usually plays the bass guitar, but in more recent albums he has taken to keyboards, samplers, and synthesizers.</p>
                    <p>Greenwood first teamed up with classmate Thom Yorke in 1986 to start a band, then known as On a Friday; Ed O'Brien was then recruited, and finally, older student Phil Selway was approached to join the band. Later, Greenwood's younger brother Jonny, then 14 years old, also joined the band.</p>
                    <p>Said Greenwood, "My involvement is to play bass guitar, but our ideas and suggestions in certain areas, as to where the music should go or develop, are listened to. We are very much a band".</p>
                </div><!--=====End Collapse=====-->
            </div><!--=====End Colin=====-->
            <div class="col-sm-6">
                <br>
                <div class="text-center"><!--=====Philip=====-->
                    <a href="#philip" data-toggle="collapse"> <img src="images/members/philiplive.jpg" class="img-thumbnail" alt="Philip">
                        <div class="caption"><strong class="com">Philip Selway </strong><i class="fas fa-sort-down fa-2x"></i></div>
                    </a>
                </div><!--======End Name Caption=====-->
                <div id="philip" class="collapse">
                    <p>Philip is the band's drummer. His timing and varied drumming helps to give the band its sound. Whereas his technique on earlier albums corresponded to the classic rock feel of the band's original style.</p>
                    <p>Selway is well known for his precision and proficiency in various styles and unsuual time signatures, being named the 26th greatest drummer of all time by Gigwise in 2008.</p>
                </div><!--=====End Collapse=====-->
            </div><!--=====End Philip====-->
        </div><!--======End 2nd Row of Members=====-->
    </div><!--=====End Entire About Members Container=====-->
    <br>
    <div id="albums" class="bg-1"><!--=====Albums Container=====-->
        <div class="container text-center">
            <h3 class="text-center">DISCOGRAPHY</h3>
            <div class="row text-center"><!--=====First Row of Albums=====-->
                <div class="col-sm-4"><!--=====Pablo=====-->
                    <p class="year">1993</p>
                    <div class="card img-fluid"> <img class="card-img-top" src="images/albums/pablo.jpg" alt="pablo cover">
                        <div class="card-img-overlay">
                            <h4 class="card-title signup">Pablo Honey</h4>
                            <ol>
                              <?php
                              $sql = "SELECT track_name, track_length FROM `discography` WHERE album_name = 'Pablo Honey'";
                              $result = $conn->query($sql);
                              while($row = mysqli_fetch_assoc($result)) {
                                //Formatted to look: $row ['track_name']  $row ['track_length']
                                  echo "<li>";
                                  echo $row ['track_name'];
                                  echo " ";
                                  echo $row ['track_length'];
                                  echo "</li>";
                                }
                              ?>
                            </ol> <a href="https://open.spotify.com/album/6400dnyeDyD2mIFHfkwHXN" class="btn btn-warning"><i class="fab fa-spotify fa-2x"></i></a></div><!--=====End Tracks=====-->
                    </div><!--=====End Pablo Card=====-->
                </div><!--=====End Pablo=====-->
                <div class="col-sm-4"><!--=====Bends=====-->
                    <p class="year">1995</p>
                    <div class="card img-fluid"> <img class="card-img-top" src="images/albums/bends.jpg" alt="bends cover">
                        <div class="card-img-overlay">
                            <h4 class="card-title signup">The Bends</h4>
                            <ol>
                              <?php
                              $sql = "SELECT track_name, track_length FROM `discography` WHERE album_name = 'The Bends'";
                              $result = $conn->query($sql);
                              while($row = mysqli_fetch_assoc($result)) {
                                  echo "<li>";
                                  echo $row ['track_name'];
                                  echo " ";
                                  echo $row ['track_length'];
                                  echo "</li>";
                                }
                              ?>
                            </ol> <a href="https://open.spotify.com/album/6Lmj92VLXz7Z5xcsjXBMSC" class="btn btn-warning"><i class="fab fa-spotify fa-2x"></i></a></div><!--=====End Tracks=====-->
                    </div><!--=====End Bends Card=====-->
                </div><!--=====End Bends=====-->
                <div class="col-sm-4"><!--=====OK=====-->
                    <p class="year">1997</p>
                    <div class="card img-fluid"> <img class="card-img-top" src="images/albums/ok.jpg" alt="okcomputer cover">
                        <div class="card-img-overlay">
                            <h4 class="card-title signup">OK Computer</h4>
                            <ol>
                              <ol>
                                <?php
                                $sql = "SELECT track_name, track_length FROM `discography` WHERE album_name = 'OK Computer'";
                                $result = $conn->query($sql);
                                while($row = mysqli_fetch_assoc($result)) {
                                    echo "<li>";
                                    echo $row ['track_name'];
                                    echo " ";
                                    echo $row ['track_length'];
                                    echo "</li>";
                                  }
                                ?>
                            </ol> <a href="https://open.spotify.com/album/6Lmj92VLXz7Z5xcsjXBMSC" class="btn btn-warning"><i class="fab fa-spotify fa-2x"></i></a></div><!--=====End Tracks=====-->
                    </div><!--=====End OK Card=====-->
                </div><!--=====End OK=====-->
            </div><!--=====End First Row of Albums=====-->
            <div class="row text-center"><!--=====Second Row of Albums=====-->
                <div class="col-sm-4"><!--=====Kid=====-->
                    <p class="year">2000</p>
                    <div class="card img-fluid"> <img class="card-img-top" src="images/albums/kid.jpg" alt="kida cover">
                        <div class="card-img-overlay">
                            <h4 class="card-title signup">Kid A</h4>
                            <ol>
                              <?php
                              $sql = "SELECT track_name, track_length FROM `discography` WHERE album_name = 'Kid A'";
                              $result = $conn->query($sql);
                              while($row = mysqli_fetch_assoc($result)) {
                                  echo "<li>";
                                  echo $row ['track_name'];
                                  echo " ";
                                  echo $row ['track_length'];
                                  echo "</li>";
                                }
                              ?>
                            </ol> <a href="https://open.spotify.com/album/19RUXBFyM4PpmrLRdtqWbp" class="btn btn-warning"><i class="fab fa-spotify fa-2x"></i></a></div><!--=====End Tracks=====-->
                    </div><!--=====End Kid Card=====-->
                </div><!--=====End Kid=====-->
                <div class="col-sm-4"><!--=====Amnesiac=====-->
                    <p class="year">2001</p>
                    <div class="card img-fluid"> <img class="card-img-top" src="images/albums/amnesiac.jpg" alt="amnesiac cover">
                        <div class="card-img-overlay">
                            <h4 class="card-title signup">Amnesiac</h4>
                            <ol>
                              <?php
                              $sql = "SELECT track_name, track_length FROM `discography` WHERE album_name = 'Amnesiac'";
                              $result = $conn->query($sql);
                              while($row = mysqli_fetch_assoc($result)) {
                                  echo "<li>";
                                  echo $row ['track_name'];
                                  echo " ";
                                  echo $row ['track_length'];
                                  echo "</li>";
                                }
                              ?>
                            </ol> <a href="https://open.spotify.com/album/6Lmj92VLXz7Z5xcsjXBMSC" class="btn btn-warning"><i class="fab fa-spotify fa-2x"></i></a></div><!--=====End Tracks=====-->
                    </div><!--=====End Amenesiac Card=====-->
                </div><!--=====End Amnesiac======-->
                <div class="col-sm-4"><!--=====Hail=====-->
                    <p class="year">2003</p>
                    <div class="card img-fluid"> <img class="card-img-top" src="images/albums/hail.jpg" alt="hail cover">
                        <div class="card-img-overlay">
                            <h4 class="card-title signup">Hail to the Thief</h4>
                            <ol>
                              <?php
                              $sql = "SELECT track_name, track_length FROM `discography` WHERE album_name = 'Hail to the Thief'";
                              $result = $conn->query($sql);
                              while($row = mysqli_fetch_assoc($result)) {
                                  echo "<li>";
                                  echo $row ['track_name'];
                                  echo " ";
                                  echo $row ['track_length'];
                                  echo "</li>";
                                }
                              ?>
                            </ol> <a href="https://open.spotify.com/album/6Lmj92VLXz7Z5xcsjXBMSC" class="btn btn-warning"><i class="fab fa-spotify fa-2x"></i></a></div><!--=====End Tracks=====-->
                    </div><!--=====End Amnesiac Card=====-->
                </div><!--====End Amnesiac=====-->
            </div><!--=====End Second Row of Albums======-->
            <div class="row text-center"><!--=====Start Third Row of Albums=====-->
                <div class="col-sm-4"><!--=====Rainbows=====-->
                    <p class="year">2007</p>
                    <div class="card img-fluid"> <img class="card-img-top" src="images/albums/rainbows.jpg" alt="rainbows cover">
                        <div class="card-img-overlay">
                            <h4 class="card-title signup">In Rainbows</h4>
                            <ol>
                              <?php
                              $sql = "SELECT track_name, track_length FROM `discography` WHERE album_name = 'In Rainbows'";
                              $result = $conn->query($sql);
                              while($row = mysqli_fetch_assoc($result)) {
                                  echo "<li>";
                                  echo $row ['track_name'];
                                  echo " ";
                                  echo $row ['track_length'];
                                  echo "</li>";
                                }
                              ?>
                            </ol> <a href="https://open.spotify.com/album/6400dnyeDyD2mIFHfkwHXN" class="btn btn-warning"><i class="fab fa-spotify fa-2x"></i></a></div><!--=====End Tracks=====-->
                    </div><!--=====End Rainbows Card=====-->
                </div><!--=====End Rainbows=====-->
                <div class="col-sm-4"><!--=====King=====-->
                    <p class="year">2011</p>
                    <div class="card img-fluid"> <img class="card-img-top" src="images/albums/king.jpg" alt="king cover">
                        <div class="card-img-overlay">
                            <h4 class="card-title signup">The King of Limbs</h4>
                            <ol>
                              <?php
                              $sql = "SELECT track_name, track_length FROM `discography` WHERE album_name = 'The King of Limbs'";
                              $result = $conn->query($sql);
                              while($row = mysqli_fetch_assoc($result)) {
                                  echo "<li>";
                                  echo $row ['track_name'];
                                  echo " ";
                                  echo $row ['track_length'];
                                  echo "</li>";
                                }
                              ?>
                            </ol> <a href="https://open.spotify.com/album/6Lmj92VLXz7Z5xcsjXBMSC" class="btn btn-warning"><i class="fab fa-spotify fa-2x"></i></a></div><!--=====End Tracks=====-->
                    </div><!--=====End King Card=====-->
                </div><!--=====End King=====-->
                <div class="col-sm-4"><!--=====Moon=====-->
                    <p class="year">2016</p>
                    <div class="card img-fluid"> <img class="card-img-top" src="images/albums/moon.jpg" alt="king cover">
                        <div class="card-img-overlay">
                            <h4 class="card-title signup">A Moon Shaped Pool</h4>
                            <ol>
                              <?php
                              $sql = "SELECT track_name, track_length FROM `discography` WHERE album_name = 'A Moon Shaped Pool'";
                              $result = $conn->query($sql);
                              while($row = mysqli_fetch_assoc($result)) {
                                  echo "<li>";
                                  echo $row ['track_name'];
                                  echo " ";
                                  echo $row ['track_length'];
                                  echo "</li>";
                                }
                              ?>
                            </ol> <a href="https://open.spotify.com/album/6Lmj92VLXz7Z5xcsjXBMSC" class="btn btn-warning"><i class="fab fa-spotify fa-2x"></i></a></div><!--=====End Tracks=====-->
                    </div><!--=====End Moon Card=====-->
                </div><!--=====End Moon=====-->
            </div><!--======End Third Row of Albums======-->
            <div class="row text-center"><!--=====Start Fourth Row of Albums=====-->
            <div class="col-sm-4"><!--=====Moon=====-->
                <p class="year">2021</p>
                <div class="card img-fluid"> <img class="card-img-top" src="images/albums/test.jpg" alt="test cover">
                    <div class="card-img-overlay">
                        <h4 class="card-title signup">The Test</h4>
                        <ol>
                          <?php
                          $sql = "SELECT track_name, track_length FROM `discography` WHERE album_name = 'The Test'";
                          $result = $conn->query($sql);
                          while($row = mysqli_fetch_assoc($result)) {
                              echo "<li>";
                              echo $row ['track_name'];
                              echo " ";
                              echo $row ['track_length'];
                              echo "</li>";
                            }
                          ?>
                        </ol> <a href="https://open.spotify.com/album/6Lmj92VLXz7Z5xcsjXBMSC" class="btn btn-warning"><i class="fab fa-spotify fa-2x"></i></a></div><!--=====End Tracks=====-->
                </div><!--=====End Moon Card=====-->
            </div><!--=====End Moon=====-->
          </div><!--=====Start Fourth Row of Albums=====-->
        </div><!--=====End Entire Discography Albums Container=====-->
        <br>
    </div><!--=====End ID Albums=====-->
    <div class="container">
        <img src="images/logo/bear.jpg" class="img-responsive center-block" alt=bear>
        <br>
        <h3 class="text-center">Join our newsletter!</h3>
        <p class="text-center"><em>Stay up to date with Radiohead</em></p>
        <p class="text-center"><a href="newsletter.php" class="btn btn-warning signup">SIGN UP HERE</a></p>
    </div><!--=====End Newsletter Container=====-->
    <!--=====Begin Footer=====-->
    <?php include './includes/footer.php'; ?>
    <!--=====End Footer=====-->
    <script>
        $(document).ready(function() {
                    $('[data-toggle="tooltip"]').tooltip();
                    $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
                        if (this.hash !== "") {
                            event.preventDefault();
                            var hash = this.hash;
                            $('html, body').animate({
                                scrollTop: $(hash).offset().top
                            }, 900, function() {
                                window.location.hash = hash;
                            });
                        };
                    });
                });
    </script>
</body>
</html>
