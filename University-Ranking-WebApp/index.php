<?php
    include("config.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edu-National WebApp</title>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="css/dash.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>
<body>
    <div class="sidebar">
        <div class="sidebar-brand">
            <h2><span class="lab la-gitter"></span>edu-National</h2>
        </div>
        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="" class="active"><span class="las la-file-alt"></span>
                    <span>Dashboard</span></a>
                </li>
                <li>
                    <a href="manageranking.php"><span class="las la-chart-bar"></span>
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
            <div class="users-wrapper">
                <img src="img/2.png" width="30px" height="30px" alt="">
                <div>
                    <small>Admin</small>
                </div>
            </div>
        </header>
        <main>
            <div class="cards">
                <div class="card-single">
                    <div>
                        <h1>20</h1>
                        <span>Universities</span>
                    </div>
                    <div>
                        <span class="las la-university"></span>
                    </div>
                </div>
                <div class="card-single">
                    <div>
                        <h1>2020</h1>
                        <span>Latest Ranking</span>
                    </div>
                    <div>
                        <span class="las la-chart-bar"></span>
                    </div>
                </div>
                <div class="card-single">
                    <div>
                        <h1>11</h1>
                        <span>New Record</span>
                    </div>
                    <div>
                        <span class="las la-edit"></span>
                    </div>
                </div>
                <div class="card-single">
                    <div>
                        <h1>1,032</h1>
                        <span>Today's Visitor</span>
                    </div>
                    <div>
                        <span class="las la-user-alt"></span>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="university">
                    <div class="card">
                        <div class="card-header ">
                            <h3>Discover the TOP Universities in Malaysia Here!</h3> 
                            <span>Universities in Malaysia already have a strong presence in both global and regional rankings, and the country’s home-grown institutions are also joined by a growing selection of international branch campuses, many based at the new EduCity development.</span> 
                       </div>
                    </div>
                </div>       
            </div>
            <div class="recent-grid">
                <div class="projects">
                    <div class="card">
                    <div class="card-header ">
                        <h3>Top University</h3>
                        </button>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table width="100%">
                                <thead>
                                    <tr>
                                        <td>University Name</td>
                                        <td>Overall Score</td>
                                        <td>MQA SETARA Rating</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $query = "SELECT * FROM ranking";
                                    $r = mysqli_query($conn, $query);
                                    while ($row = mysqli_fetch_assoc($r)){
                                    ?>
                                    <tr>
                                        <td> <?php echo $row['uni_name'] ?></td>
                                        <td> <?php echo $row['overall_score'] ?> %</td>
                                        <td><span class="fa fa-star checked"></span>
				                        <span class="fa fa-star checked"></span>
			                         	<span class="fa fa-star checked"></span>
			                        	<span class="fa fa-star checked"></span>
				                    	<span class="fa fa-star checked"></span>
				                    	<span class="fa fa-star checked"></span>
                                        </td>
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
                    <div class="card-body">
                            
                    </div>
                    </div>
                </div>
                <div class="customers">
                    <div class="card">
                        <div class="card-header ">
                        <h2>
                            <label for="">
                            <span class="las la-chart-bar"></span>
                            </label>
                            The Most Popular University in Malaysia
                        </h2>
                        </div>
                        <div>
                            <canvas id="myChart" width="100%" height="41"></canvas>
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
        </main>
    </div>
</body>
</html>