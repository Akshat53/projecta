
<!DOCTYPE html>
<html lang="en">

<?php
include('plugins/session.php');
include('plugins/head.php');


if(isset($_SESSION['role']) && $_SESSION['role']!='itech' && $_SESSION['role']!='admin'){
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
                            <h5 class="title">I-Tech Club Members</h5>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                     <thead class=" text-primary">
                                            <th>Username</th>
                                            <th>Name</th>
                                            <th>Post</th>
                                            <th class="text-right">Update</th>
                                        </thead>
                                        <?php
                                    include('../dbs/connect.php');
                                    $sql="SELECT * from admin";
                                    $results=$connect->query($sql);
                                    while ($final=$results->fetch_assoc()) { 
                                        if($final['role']=='itech'){?>
                                        <tbody>
                                            <tr>
                                                <td><?php
                                                if($final['role']=='itech'){?>
                                                    <?php echo $final['username'] ?>
                                                <?php }
                                                ?></td>
                                                <td><?php
                                                if($final['role']=='itech'){?>
                                                    <?php echo $final['name'] ?>
                                                <?php }
                                                ?></td>
                                                <td><?php
                                                if($final['role']=='itech'){?>
                                                    <?php echo $final['post'] ?>
                                                <?php }
                                                ?></td>
                                                <td class="text-right">
                                                   <a href="ceoupdate.php?up_id=<?php echo $final['id'] ?>"><button class="btn btn-primary">Update</button></a>
                                                </td>
                                            <?php } ?>
                                        <?php } ?>
                                            </tr>
                                        </tbody>
                                    <?php
                                    include('../dbs/connect.php');
                                    $sql="SELECT * from teammember";
                                    $results=$connect->query($sql);
                                    while ($final=$results->fetch_assoc()) { 
                                        if($final['role']=='itechtm'){?>
                                       
                                        <tbody>
                                            <tr>
                                                <td><?php
                                                if($final['role']=='itechtm'){?>
                                                    <?php echo $final['username'] ?>
                                                <?php }
                                                ?></td>
                                                <td><?php
                                                if($final['role']=='itechtm'){?>
                                                    <?php echo $final['name'] ?>
                                                <?php }
                                                ?></td>
                                                <td><?php
                                                if($final['role']=='itechtm'){?>
                                                    <?php echo $final['post'] ?>
                                                <?php }
                                                ?></td>
                                                <td class="text-right">
                                                    <a href="memberupdate.php?up_id=<?php echo $final['id'] ?>"><button class="btn btn-primary">Update</button></a>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <?php } ?>
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