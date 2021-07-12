<?php
    sleep(1);
    include("config.php");
    if(isset($_POST['request'])){
        $request = $_POST['request'];
        $query = "SELECT * FROM ranking WHERE year = '$request'";
        $result = mysqli_query($conn, $query);
        $count = mysqli_num_rows($result);
?>

<table class="table" width="100%">
    <?php
    if($count){
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
        </tr>
    <?php
    }
    else{
        echo "Sorry, no data record found";
    }
    ?>
    </thead>
    <tbody>
        <?php while($row = mysqli_fetch_assoc($result)){ ?>
        <tr>
            <td> <?php echo $row['year']; ?></td>
            <td> <?php echo $row['rank']; ?></td>
            <td> <?php echo $row['uni_name']; ?></td>
            <td> <?php echo $row['overall_score']; ?> %</td>
            <td> <?php echo $row['academic_rep']; ?> %</td>
            <td> <?php echo $row['employee_rep']; ?> %</td>
            <td> <?php echo $row['student_ratio']; ?> %</td>
        </tr>
        <?php
        }
        ?>
    </tbody>
</table>
<?php
    }
?>