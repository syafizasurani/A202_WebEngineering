<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Ranking</title>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="css/addnew.css">
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
                    <a href="" class="active"><span class="las la-plus-square"></span>
                    <span>Add New Ranking</span></a>
                </li>
                <li>
                    <a href="manageranking.php"><span class="las la-chart-bar"></span>
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
        <?php require_once 'connect.php'; ?>
        <?php if(isset($_SESSION['message'])): ?>
            <div class="alert alert-<?=$_SESSION['msg_type']?>">
                <?php
                    echo $_SESSION['message'];
                    unset($_SESSION['message']);
                ?>
            </div>
            <?php endif ?>
            <h3>Enter All Details</h3>
            <div class="form">
                <form action="connect.php" class="main-form" method="POST">
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <div class="form-group">
                        <label>Year</label>
                        <input type="text" name="year" class="form-control" 
                        value="<?php echo $year; ?>" placeholder="Enter year">
                    </div>
                    <div class="form-group">
                        <label>Rank</label>
                        <input type="text" name="rank" class="form-control" 
                        value="<?php echo $rank; ?>" placeholder="Enter university rank">
                    </div>
                    <div class="form-group">
                        <label>University</label>
                        <input type="text" name="uni_name" class="form-control" 
                        value="<?php echo $uni_name; ?>" placeholder="Enter university name">
                    </div>
                    <div class="form-group">
                        <label>Overall Score (%)</label>
                        <input type="text" name="overall_score" class="form-control" 
                        value="<?php echo $overall_score; ?>" placeholder="Enter overall score">
                    </div>
                    <div class="form-group">
                        <label>Academic Reputation (%)</label>
                        <input type="text" name="academic_rep" class="form-control" 
                        value="<?php echo $academic_rep; ?>" placeholder="Enter academic reputation">
                    </div>
                    <div class="form-group">
                        <label>Employee Reputation (%)</label>
                        <input type="text" name="employee_rep" class="form-control" 
                        value="<?php echo $employee_rep; ?>" placeholder="Enter employee ratio">
                    </div>
                    <div class="form-group">
                        <label>Student Faculty Ratio (%)</label>
                        <input type="text" name="student_ratio" class="form-control" 
                        value="<?php echo $student_ratio; ?>" placeholder="Enter student faculty ratio">
                    </div>
                    <div class="form-group">
                    <?php if($update == true): ?>
                        <button type="submit" name="update">UPDATE</button>
                    <?php else: ?>
                        <button type="submit" name="save">SAVE</button>
                    <?php endif; ?>
                    </div>
                </form>
            </div>
            <div class="recent-grid">
                <div class="projects">
                    <div class="card">
                    <div class="card-header ">
                        <h3><label for="">
                            <span class="las la-chart-bar"></span>
                        </label>
                        University Ranking
                        </h3>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table width="100%">
                            <?php
                                $mysqli = new mysqli('localhost', 'root', '', 'edu-national') or die(mysqli_error($mysqli));
                                $result = $mysqli->query("SELECT * FROM ranking") or die($mysqli->error);
                            ?>
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
                                <?php while ($row = $result->fetch_assoc()): ?>
                                <tbody>
                                    <tr>
                                        <td> <?php echo $row['year']; ?></td>
                                        <td> <?php echo $row['rank']; ?></td>
                                        <td> <?php echo $row['uni_name']; ?></td>
                                        <td> <?php echo $row['overall_score']; ?> %</td>
                                        <td> <?php echo $row['academic_rep']; ?> %</td>
                                        <td> <?php echo $row['employee_rep']; ?> %</td>
                                        <td> <?php echo $row['student_ratio']; ?> %</td>
                                        <td>
                                            <a href="addnew.php?edit=<?php echo $row['id']; ?>"
                                            class="btn btn-info">Edit</a>&nbsp;&nbsp;
                                            <a href="connect.php?delete=<?php echo $row['id']; ?>"
                                            class="btn btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                </tbody>
                                <?php endwhile; ?>
                            </table>
                        </div>
                    </div>
                    <?php
                    function pre_r($array){
                        echo '<pre>';
                        print_r($array);
                        echo '</pre>';
                    }
                    ?>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>