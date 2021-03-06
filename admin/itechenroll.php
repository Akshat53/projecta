
<!DOCTYPE html>
<html lang="en">

<?php
include('plugins/session.php');
include('plugins/head.php');


if(isset($_SESSION['role']) && $_SESSION['role']!='itech' && $_SESSION['role']!='admin' && $_SESSION['role']!='itechtm'){
    header('location: 404.php');
}
?>

<body class="">
    <div class="wrapper ">
        <?php
        include('plugins/header.php')
        ?>

        <div class="panel-header panel-header-sm">
        </div>
        <div class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="title">I-Tech Club Event Enrollments</h5>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class=" text-primary">
                                            <th>Name</th>
                                            <th>Event Name</th>
                                            <th>Course</th>
                                            <th>Number</th>
                                            <th>Email</th>
                                            <th class="text-right">Contact</th>
                                        </thead>
                                    <?php
                                    include('../dbs/connect.php');
                                    $sql="SELECT * from itechenroll ORDER BY id DESC";
                                    $results=$connect->query($sql);
                                    while ($final=$results->fetch_assoc()) { 
                                    ?>
                                        
                                        <tbody>
                                            <tr>
                                                <td><?php echo $final['name'] ?></td>
                                                <td><?php echo $final['eventname'] ?></td>
                                                <td><?php echo $final['course'] ?></td>
                                                <td><?php echo $final['number'] ?></td>
                                                <td><?php echo $final['email'] ?></td>
                                                <td class="text-right">
                                                    <a href="mailto:<?php echo $final['email'] ?>"><button class="btn btn-primary">Contact</button></a>
                                                </td>

                                            </tr>
                                        </tbody>
                                    <?php } ?>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    include('plugins/footer.php');
    ?>
</body>
</html>