
<!DOCTYPE html>
<html lang="en">

<?php
include('plugins/session.php');
include('plugins/head.php');


if(isset($_SESSION['role']) && $_SESSION['role']!='admin'){
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
                            <h5 class="title">Panache Club Members</h5>
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
                                        if($final['role']=='panache'){?>
                                        <tbody>
                                            <tr>
                                                <td><?php
                                                if($final['role']=='panache'){?>
                                                    <?php echo $final['username'] ?>
                                                <?php }
                                                ?></td>
                                                <td><?php
                                                if($final['role']=='panache'){?>
                                                    <?php echo $final['name'] ?>
                                                <?php }
                                                ?></td>
                                                <td><?php
                                                if($final['role']=='panache'){?>
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
                                        if($final['role']=='panachetm'){?>
                                       
                                        <tbody>
                                            <tr>
                                                <td><?php
                                                if($final['role']=='panachetm'){?>
                                                    <?php echo $final['username'] ?>
                                                <?php }
                                                ?></td>
                                                <td><?php
                                                if($final['role']=='panachetm'){?>
                                                    <?php echo $final['name'] ?>
                                                <?php }
                                                ?></td>
                                                <td><?php
                                                if($final['role']=='panachetm'){?>
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
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="title">Stride Club Members</h5>
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
                                        if($final['role']=='stride'){?>
                                        <tbody>
                                            <tr>
                                                <td><?php
                                                if($final['role']=='stride'){?>
                                                    <?php echo $final['username'] ?>
                                                <?php }
                                                ?></td>
                                                <td><?php
                                                if($final['role']=='stride'){?>
                                                    <?php echo $final['name'] ?>
                                                <?php }
                                                ?></td>
                                                <td><?php
                                                if($final['role']=='stride'){?>
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
                                        if($final['role']=='stridetm'){?>
                                        
                                        <tbody>
                                            <tr>
                                                <td><?php
                                                if($final['role']=='stridetm'){?>
                                                    <?php echo $final['username'] ?>
                                                <?php }
                                                ?></td>
                                                <td><?php
                                                if($final['role']=='stridetm'){?>
                                                    <?php echo $final['name'] ?>
                                                <?php }
                                                ?></td>
                                                <td><?php
                                                if($final['role']=='stridetm'){?>
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
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="title">Rock-On Club Members</h5>
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
                                        if($final['role']=='rockon'){?>
                                        <tbody>
                                            <tr>
                                                <td><?php
                                                if($final['role']=='rockon'){?>
                                                    <?php echo $final['username'] ?>
                                                <?php }
                                                ?></td>
                                                <td><?php
                                                if($final['role']=='rockon'){?>
                                                    <?php echo $final['name'] ?>
                                                <?php }
                                                ?></td>
                                                <td><?php
                                                if($final['role']=='rockon'){?>
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
                                        if($final['role']=='rockontm'){?>
                                        
                                        <tbody>


                                            <tr>
                                                <td><?php
                                                if($final['role']=='rockontm'){?>
                                                    <?php echo $final['username'] ?>
                                                <?php }
                                                ?></td>
                                                <td><?php
                                                if($final['role']=='rockontm'){?>
                                                    <?php echo $final['name'] ?>
                                                <?php }
                                                ?></td>
                                                <td><?php
                                                if($final['role']=='rockontm'){?>
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
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="title">Images Club Members</h5>
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
                                        if($final['role']=='images'){?>
                                        <tbody>
                                            <tr>
                                                <td><?php
                                                if($final['role']=='images'){?>
                                                    <?php echo $final['username'] ?>
                                                <?php }
                                                ?></td>
                                                <td><?php
                                                if($final['role']=='images'){?>
                                                    <?php echo $final['name'] ?>
                                                <?php }
                                                ?></td>
                                                <td><?php
                                                if($final['role']=='images'){?>
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
                                        if($final['role']=='imagestm'){?>
                                        
                                        <tbody>
                                            <tr>
                                                <td><?php
                                                if($final['role']=='imagestm'){?>
                                                    <?php echo $final['username'] ?>
                                                <?php }
                                                ?></td>
                                                <td><?php
                                                if($final['role']=='imagestm'){?>
                                                    <?php echo $final['name'] ?>
                                                <?php }
                                                ?></td>
                                                <td><?php
                                                if($final['role']=='imagestm'){?>
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
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="title">M-Factor Club Members</h5>
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
                                        if($final['role']=='mfactor'){?>
                                        <tbody>
                                            <tr>
                                                <td><?php
                                                if($final['role']=='mfactor'){?>
                                                    <?php echo $final['username'] ?>
                                                <?php }
                                                ?></td>
                                                <td><?php
                                                if($final['role']=='mfactor'){?>
                                                    <?php echo $final['name'] ?>
                                                <?php }
                                                ?></td>
                                                <td><?php
                                                if($final['role']=='mfactor'){?>
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
                                        if($final['role']=='mfactortm'){?>
                                        
                                        <tbody>
                                            <tr>
                                                <td><?php
                                                if($final['role']=='mfactortm'){?>
                                                    <?php echo $final['username'] ?>
                                                <?php }
                                                ?></td>
                                                <td><?php
                                                if($final['role']=='mfactortm'){?>
                                                    <?php echo $final['name'] ?>
                                                <?php }
                                                ?></td>
                                                <td><?php
                                                if($final['role']=='mfactortm'){?>
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
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="title">The Responsible Invertian Club Members</h5>
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
                                        if($final['role']=='responsible'){?>
                                        <tbody>
                                            <tr>
                                                <td><?php
                                                if($final['role']=='responsible'){?>
                                                    <?php echo $final['username'] ?>
                                                <?php }
                                                ?></td>
                                                <td><?php
                                                if($final['role']=='responsible'){?>
                                                    <?php echo $final['name'] ?>
                                                <?php }
                                                ?></td>
                                                <td><?php
                                                if($final['role']=='responsible'){?>
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
                                        if($final['role']=='responsibletm'){?>
                                        
                                        <tbody>
                                            <tr>
                                                <td><?php
                                                if($final['role']=='responsibletm'){?>
                                                    <?php echo $final['username'] ?>
                                                <?php }
                                                ?></td>
                                                <td><?php
                                                if($final['role']=='responsibletm'){?>
                                                    <?php echo $final['name'] ?>
                                                <?php }
                                                ?></td>
                                                <td><?php
                                                if($final['role']=='responsibletm'){?>
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