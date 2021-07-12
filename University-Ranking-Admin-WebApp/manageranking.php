<?php
    include("config.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Ranking</title>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="css/ranking.css">
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
                    <a href="addnew.php"><span class="las la-plus-square"></span>
                    <span>Add New Ranking</span></a>
                </li>
                <li>
                    <a href="" class="active"><span class="las la-chart-bar"></span>
                    <span>Manage Ranking</span></a>
                </li>
                <li>
                    <a href="manage_uni.php"><span class="las la-university"></span>
                    <span>Manage University</span></a>
                </li>
                <li>
                    <a href="team.html"><span class="las la-user"></span>
                    <span>Development Team</span></a>
                </li>
                <li>
                    <a href="signout.html"><span class="las la-sign-out-alt"></span>
                    <span>Sign Out</span></a>
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
        <td><a href="addnew.php" class="btn btn-primary">Add New Ranking</a></td>
            <div class="recent-grid">
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
                                        <td colspan="2">Action</td>
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
                                        <td>
                                            <a href="addnew.php?edit=<?php echo $row['id']; ?>"
                                            class="btn btn-info">Edit</a>&nbsp;&nbsp;
                                            <a href="connect.php?delete=<?php echo $row['id']; ?>"
                                            class="btn btn-danger">Delete</a>
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
                    </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>