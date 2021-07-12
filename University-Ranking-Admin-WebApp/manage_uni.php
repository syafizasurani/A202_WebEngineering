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
    <title>Add New Ranking</title>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="css/uni.css">
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
                    <a href="manageranking.php"><span class="las la-chart-bar"></span>
                    <span>Manage Ranking</span></a>
                </li>
                <li>
                    <a href="" class="active"><span class="las la-university"></span>
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
                                        <td colspan="2">Action</td>
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
                                        <td>
                                            <a href="manage_uni.php?edit=<?php echo $row['id']; ?>"
                                            class="btn btn-info">Edit</a>&nbsp;&nbsp;
                                            <a href="uniconnect.php?delete=<?php echo $row['id']; ?>"
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
            <h4>------------------------------------------------ Edit Section ------------------------------------------------</h4>
            <div class="form">
                <form action="uniconnect.php" class="main-form" method="POST">
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <div class="form-group">
                        <label>No.</label>
                        <input type="text" name="num" class="form-control" 
                        value="<?php echo $num; ?>" placeholder="Enter no.">
                    </div>
                    <div class="form-group">
                        <label>University</label>
                        <input type="text" name="university" class="form-control" 
                        value="<?php echo $university; ?>" placeholder="Enter university name">
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <input type="text" name="description" class="form-control" 
                        value="<?php echo $description; ?>" placeholder="Enter description">
                    </div>
                    <div class="form-group">
                        <label>State</label>
                        <input type="text" name="state" class="form-control" 
                        value="<?php echo $state; ?>" placeholder="Enter university state">
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
        </main>
    </div>
</body>
</html>