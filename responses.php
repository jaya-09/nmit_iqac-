<?php
include 'db_conn.php';
$query = "select * from answers1";
$result = mysqli_query($conn, $query);
?>
<html>
    <head>
</head>
<body>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Question</th>
                <th scope="col">Answer</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $i = 1;
            while ($row = mysqli_fetch_array($result)) {
                ?>
            <tr>
                <th scope="row"><?php echo $i; ?></th>
                <td><?php echo $row['userid']; ?></td>
                <td><?php echo $row['fname']; ?></td>
            </tr>
            <?php
                $i++;
            }
            ?>
        </tbody>
    </table>
    <?php 
    while ($row=mysqli_fetch_array($result)){
    echo $row['user_id'];
}
    ?>
</body>
</html>