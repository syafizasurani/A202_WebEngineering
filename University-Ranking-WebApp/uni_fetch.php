<?php
    sleep(1);
    include("config.php");
    if(isset($_POST['request'])){
        $request = $_POST['request'];
        $query = "SELECT * FROM tbl_university WHERE university = '$request'";
        $result = mysqli_query($conn, $query);
        $count = mysqli_num_rows($result);
?>

<table class="table" width="100%">
    <?php
    if($count){
    ?>
    <thead>
        <tr>
            <td>No.</td>
            <td>University</td>
            <td>Description</td>
            <td>State</td>
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
            <td> <?php echo $row['num'] ?></td>
            <td> <?php echo $row['university'] ?></td>
            <td> <?php echo $row['description'] ?></td>
            <td> <?php echo $row['state']; ?> </td>
        </tr>
        <?php
        }
        ?>
    </tbody>
</table>
<?php
    }
?>