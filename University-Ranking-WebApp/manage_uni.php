<?php
    include("uniconnect.php");
    include("config.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of Universities</title>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="css/university.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

</head>
<body>
    <div class="sidebar">
        <div class="sidebar-brand">
            <h2><span class="lab la-gitter"></span>edu-National</h2>
        </div>
        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="index.php"><span class="las la-file-alt"></span>
                    <span>Dashboard</span></a>
                </li>
                <li>
                    <a href="manageranking.php"><span class="las la-chart-bar"></span>
                    <span>University Ranking</span></a>
                </li>
                <li>
                    <a href="" class="active"><span class="las la-university"></span>
                    <span>University Info</span></a>
                </li>
                <li>
                    <a href="team.html"><span class="las la-user"></span>
                    <span>About Us</span></a>
                </li>
                <li>
                    <a href="login.php"><span class="las la-sign-out-alt"></span>
                    <span>Sign In as Admin</span></a>
                </li>
            </ul>
        </div>
    </div>
    <div class="main-content">
        <header>
            <h2>
                <label for="">
                    <span class="las la-bars"></span>
                </label>
                University Ranking
            </h2>
            <div class="search-wrapper">
                <span class="las la-search"></span>
                <input type="search" placeholder="Search here" />
            </div>
            <div class="users-wrapper">
            </div>
        </header>
        <main>
        <section class = "menu">
      <div class = "menu-container">
        <div class = "menu-head">
          <h2>University List</h2>
          <p>Public Universities are funded by the government as they pay for most of the operating costs. These universities are in overall bigger with thousands of students studying there !</p>
        </div>

        <div class = "menu-btns">
          <button type = "button" class = "menu-btn active-btn" id = "out">outstanding</button>
          <button type = "button" class = "menu-btn" id = "ex">excellent</button>
          <button type = "button" class = "menu-btn" id = "vg">very good</button>
        </div>

        <div class = "uni-items">
          <!-- item -->
          <div class = "uni-item out">
            <div class = "uni-img">
              <img src = "img/um.jpg" alt = "uni">
            </div>
            <div class = "uni-content">
              <a href="https://www.um.edu.my/" class="btn btn-primary">Universiti Malaya</a>
            </div>
          </div>
          <!-- end of item -->

          <!-- item -->
          <div class = "uni-item ex">
            <div class = "uni-img">
              <img src = "img/uum.jpg" alt = "uni">
            </div>
            <div class = "uni-content">
              <a href="http://uum.edu.my/" class="btn btn-primary">Universiti Utara Malaysia</a>         
            </div>
          </div>
          <!-- end of item -->


          <!-- item -->
          <div class = "uni-item out">
            <div class = "uni-img">
              <img src = "img/ukm.jpg" alt = "uni">
            </div>
            <div class = "uni-content">
              <a href="https://www.ukm.my/portal/" class="btn btn-primary">Universiti Kebangsaan Malaysia</a>       
            </div>
          </div>
          <!-- end of item -->

	<!-- item -->
          <div class = "uni-item out">
            <div class = "uni-img">
              <img src = "img/usm.jpg" alt = "uni">
            </div>
            <div class = "uni-content">
                 <a href="https://www.usm.my/index.php/" class="btn btn-primary">Universiti Sains Malaysia</a>       
            </div>
          </div>
          <!-- end of item -->

	<!-- item -->
          <div class = "uni-item out">
            <div class = "uni-img">
              <img src = "img/utm.jpg" alt = "uni">
            </div>
            <div class = "uni-content">
              <a href="https://www.utm.my/" class="btn btn-primary">Universiti Teknologi Malaysia</a>        
            </div>
          </div>
          <!-- end of item -->
	
	<!-- item -->
          <div class = "uni-item ex">
            <div class = "uni-img">
              <img src = "img/uitm.jpg" alt = "uni">
            </div>
            <div class = "uni-content">
              <a href="http://www.uitm.edu.my/index.php/en" class="btn btn-primary">Universiti teknologi MARA</a>       
            </div>
          </div>
          <!-- end of item -->

	<!-- item -->
          <div class = "uni-item ex">
            <div class = "uni-img">
              <img src = "img/ump.jpg" alt = "uni">
            </div>
            <div class = "uni-content">
              <a href="https://ump.edu.my/en/ump" class="btn btn-primary">Universiti Malaysia Pahang</a>        
            </div>
          </div>
          <!-- end of item -->

	<!-- item -->
          <div class = "uni-item ex">
            <div class = "uni-img">
              <img src = "img/unimas.jpg" alt = "uni">
            </div>
            <div class = "uni-content">
               <a href="https://www.unimas.my/" class="btn btn-primary">Universiti Malaysia Sarawak</a>        
            </div>
          </div>
          <!-- end of item -->

	<!-- item -->
          <div class = "uni-item ex">
            <div class = "uni-img">
              <img src = "img/unimap.jpg" alt = "uni">
            </div>
            <div class = "uni-content">
              <a href="https://www.unimap.edu.my/index.php/en/" class="btn btn-primary">Universiti Malaysia Perlis</a>       
            </div>
          </div>
          <!-- end of item -->

	<!-- item -->
          <div class = "uni-item vg">
            <div class = "uni-img">
              <img src = "img/ums.jpg" alt = "uni">
            </div>
            <div class = "uni-content">
               <a href="https://www.ums.edu.my/v5/en" class="btn btn-primary">Universiti Malaysia Sabah</a>
            </div>
          </div>
          <!-- end of item -->

	<!-- item -->
          <div class = "uni-item vg">
            <div class = "uni-img">
              <img src = "img/upsi.jpg" alt = "uni">
            </div>
            <div class = "uni-content">
             <a href="https://www.upsi.edu.my/" class="btn btn-primary">Universiti Pendidikan Sultan Idris</a>         
            </div>
          </div>
          <!-- end of item -->

	<!-- item -->
          <div class = "uni-item vg">
            <div class = "uni-img">
              <img src = "img/usim.jpg" alt = "uni">
            </div>
            <div class = "uni-content">
              <a href="https://www.usim.edu.my/" class="btn btn-primary">Universiti Sains Islam Malaysia</a>         
            </div>
          </div>
          <!-- end of item -->

	<!-- item -->
          <div class = "uni-item vg">
            <div class = "uni-img">
              <img src = "img/unisza.jpg" alt = "uni">
            </div>
            <div class = "uni-content">
              <a href="https://www.unisza.edu.my/index.php?lang=en" class="btn btn-primary">Universiti Sultan Zainal Abidin</a>        
            </div>
          </div>
          <!-- end of item -->

	<!-- item -->
          <div class = "uni-item ex">
            <div class = "uni-img">
              <img src = "img/umt.jpg" alt = "uni">
            </div>
            <div class = "uni-content">
              <a href="http://www.umt.edu.my/" class="btn btn-primary">Universiti Malaysia Terengganu</a>        
            </div>
          </div>
          <!-- end of item -->

	<!-- item -->
          <div class = "uni-item vg">
            <div class = "uni-img">
              <img src = "img/umk.jpg" alt = "uni">
            </div>
            <div class = "uni-content">
              <a href="http://www.umk.edu.my/index.php/en/" class="btn btn-primary">Universiti Malaysia Kelantan</a>         
            </div>
          </div>
          <!-- end of item -->

	<!-- item -->
          <div class = "uni-item vg">
            <div class = "uni-img">
              <img src = "img/uthm.jpg" alt = "uni">
            </div>
            <div class = "uni-content">
              <a href="https://www.uthm.edu.my/en/online-apps" class="btn btn-primary">Universiti Tun Hussein Onn Malaysia</a>        
            </div>
          </div>
          <!-- end of item -->

	<!-- item -->
          <div class = "uni-item vg">
            <div class = "uni-img">
              <img src = "img/utem.jpg" alt = "uni">
            </div>
            <div class = "uni-content">
              <a href="#" class="btn btn-primary">Universiti Teknikal Malaysia Melaka</a>        
            </div>
          </div>
          <!-- end of item -->

	<!-- item -->
          <div class = "uni-item ex">
            <div class = "uni-img">
              <img src = "img/upnm.jpg" alt = "uni">
            </div>
            <div class = "uni-content">
              <a href="https://utem.edu.my/" class="btn btn-primary">Universiti Pertahanan Nasional Malaysia</a>         
            </div>
          </div>
          <!-- end of item -->

	<!-- item -->
          <div class = "uni-item ex">
            <div class = "uni-img">
              <img src = "img/uiam.jpg" alt = "uni">
            </div>
            <div class = "uni-content">
              <a href="https://www.iium.edu.my/" class="btn btn-primary">Universiti Islam Antarabangsa Malaysia</a>
       
            </div>
          </div>
          <!-- end of item -->

	<!-- item -->
          <div class = "uni-item out">
            <div class = "uni-img">
              <img src = "img/upm.jpg" alt = "uni">
            </div>
            <div class = "uni-content">
              <<a href="https://upm.edu.my/" class="btn btn-primary">Universiti Putra Malaysia</a>       
            </div>
          </div>
          <!-- end of item -->

</div>
      </div>
    </section>
    <script src="script.js"></script>
            <div class="recent-grid">
                <div class="projects">
                    <div class="card">
                    <div class="card-header ">
                        <h3><label for="">
                            <span class="las la-university"></span>
                        </label>
                        List of Universities
                        </h3>
                        <div id="filters">
                        <span class="">University &nbsp;</span>
                        <select name="fetchval" id="fetchval" style="width: 150px">
                            <option value="" disabled="" selected="">Choose University</option>
                            <option value="Universiti Malaya (UM)">Universiti Malaya (UM)</option>
                            <option value="Universiti Kebangsaan Malaysia (UKM)">Universiti Kebangsaan Malaysia (UKM)</option>
                            <option value="Universiti Putra Malaysia (UPM)">Universiti Putra Malaysia (UPM)</option>
                            <option value="Universiti Utara Malaysia (UUM)">Universiti Utara Malaysia (UUM)</option>
                            <option value="Universiti Teknologi Mara (UITM)">Universiti Teknologi Mara (UITM)</option>
                            <option value="Universiti Sains Islam Malaysia (USIM)">Universiti Sains Islam Malaysia (USIM)</option>
                        </select>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                        <div class="container">
                            <table class="table" width="100%">  
                                <thead>
                                    <tr>
                                        <td>No.</td>
                                        <td>University</td>
                                        <td>Description</td>
                                        <td>State</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $query = "SELECT * FROM tbl_university";
                                    $r = mysqli_query($conn, $query);
                                    while ($row = mysqli_fetch_assoc($r)){
                                    ?>
                                    <tr>
                                        <td> <?php echo $row['num']; ?></td>
                                        <td> <?php echo $row['university']; ?></td>
                                        <td> <?php echo $row['description']; ?></td>
                                        <td> <?php echo $row['state']; ?> </td>
                                    </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <script type="text/javascript">
                            $(document).ready(function(){
                                $("#fetchval").on('change', function(){
                                    var value = $(this).val();
                                    //alert(value);

                                    $.ajax({
                                        url: "uni_fetch.php",
                                        type: "POST",
                                        data: 'request=' + value,
                                        beforeSend:function(){
                                            $(".container").html("<span>Working...</span>");
                                        }, 
                                        success:function(data){
                                            $(".container").html(data);
                                        }
                                    });
                                });
                            });
                        </script>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            <br />
        </main>
    </div>
</body>
</html>