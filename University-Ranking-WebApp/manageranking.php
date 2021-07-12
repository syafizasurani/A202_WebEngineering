<?php
    include("config.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>University Ranking</title>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="css/ranking.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>


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
                    <a href="" class="active"><span class="las la-chart-bar"></span>
                    <span>University Ranking</span></a>
                </li>
                <li>
                    <a href="manage_uni.php"><span class="las la-university"></span>
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
        </header>
        <main>
            <div class="recent-grid">
            <div class="card-body">
                <div class="university">
                    <div class="card">
                        <div class="card-header">
                           <div>
                           <h3><label for="">
                            <span class="las la-chart-bar"></span>
                            </label>University Ranking Bar Chart</h3>
                           </div>
                        </div>
                              <div>
                               <canvas id="myChart" width="100%" height="25"></canvas>
                              </div>

                        <script>
                            let myChart = document.getElementById('myChart').getContext('2d');

                        Chart.defaults.global.defaultFontFamily = 'Poppins', 'sans-serif';
                        Chart.defaults.global.defaultFontColor = '#1D2231';

                        let myLineChart = new Chart(myChart, {
                        type: 'bar',
                        data: {
                           labels: ['UM', 'UPM', 'USM', 'UKM', 'UTM', 'UUM'],
                           datasets: [{
                           label: 'Overall score',
                           backgroundColor: "#0b6447",
                           borderColor: "rgba(2,117,216,1)",
                           data: [94, 79.5, 74.9, 73.7, 70.1, 42.4],
                           }],
                        },
                         options: {
                           scales: {
                             xAxes: [{
                               time: {
                               unit: '%'
                               },
                               gridLines: {
                               display: false
                               },
                               ticks: {
                               maxTicksLimit: 6
                               }
                              }],
                                 yAxes: [{
                                    ticks: {
                                    min: 0,
                                    max: 100,
                                    maxTicksLimit: 5
                                    },
                                       gridLines: {
                                       display: true
                                       }
                                 }],
                                },
                                legend: {
                                display: false
                                }
                          }
                        });
                        </script>
                    </div>
                </div>       
                </div>
                </div>
                <div class="projects">
                    <div class="card">
                    <div class="card-header ">
                        <h3><label for="">
                            <span class="las la-chart-bar"></span>
                        </label>
                        University Ranking
                        </h3>
                        <div id="filters">
                        <span class="">Select Ranking by Year &nbsp;</span>
                        <select name="fetchval" id="fetchval" style="width: 100px">
                            <option value="" disabled="" selected="">Select Year</option>
                            <option value="2020">2020</option>
                            <option value="2019">2019</option>
                            <option value="2018">2018</option>
                        </select>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                        <div class="container">
                            <table class="table" width="100%">
                                <thead>
                                    <tr>
                                        <td>Year</td>
                                        <td>Rank</td>
                                        <td>University</td>
                                        <td>Overall Score</td>
                                        <td>Academic Reputation</td>
                                        <td>Employee Reputation</td>
                                        <td>Student Faculty Ratio</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $query = "SELECT * FROM ranking";
                                    $r = mysqli_query($conn, $query);
                                    while ($row = mysqli_fetch_assoc($r)){
                                    ?>
                                    <tr>
                                        <td> <?php echo $row['year'] ?></td>
                                        <td> <?php echo $row['rank'] ?></td>
                                        <td> <?php echo $row['uni_name'] ?></td>
                                        <td> <?php echo $row['overall_score'] ?> %</td>
                                        <td> <?php echo $row['academic_rep'] ?> %</td>
                                        <td> <?php echo $row['employee_rep'] ?> %</td>
                                        <td> <?php echo $row['student_ratio'] ?> %</td>
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
                                        url: "fetch.php",
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
        </main>
    </div>
</body>
</html>