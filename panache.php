<?php
include("dbs/connect.php");
?>

<!doctype html>
<html lang="en">

<?php
include('plugins/head.php');
?>

<body>
  <?php
  include('plugins/header.php')
  ?>
  <br>
  <center>
    <div class="container">
      <h3 style=" text-align:center; ">Panache (The Art Club)</h3>
      <hr>
      <div class="row">
        <div class="col-sm-1" style=""></div>
        <div class="col-sm-4"> <img src="images/pana.png"  style="width:100%;"></div>
        <div class="col-sm-1" style=""></div>
        <div class="col-sm-4" style="">
        <br>
          <p>Panache (The Arts Club) : Panache emphasis on artistic visions painting, modeling, sculpture making origami and welcomes beliefs in color. Panache is committed to provide a platform to explore the new ideas in a creative way of colors, which inspire the students to work with confidence and motivate others through their artistic vision. Because individuality of expression is the beginning and end of all art..</p>
          <br>
          <br>
          <a href=""><i class="fab fa-instagram fa-lg"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <a href=""><i class="fab fa-facebook fa-lg"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <br>
          <br>
          <div class="container">
  <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#form">
    Apply For Panache Club
  </button>  
</div>


        </div>
      </div>
    </div>

  </center>
  <br>
  <br>

  <center>
    <h2>Events</h2>
    <hr>
  
    <div class="container">
  <div class="row">
       <?php 
      include("dbs/connect.php");
      $sql="SELECT * FROM panache";
      $results=$connect->query($sql);


      while($final=$results->fetch_assoc()) {                  
      ?>
      
    <div class="col">
     
  <div class="card">
    
    <div class="card-header">
      <img src="ADMIN/<?php echo $final['image']; ?>" alt="stride" />
    </div>
    <div class="card-body">
      
      <h2>
        <?php echo $final['name']?>
      </h2>
      <h6>Event Date - <span><?php echo $final['date']?></span></h6>
      <hr>
      <p>
        <?php echo $final['context']?>
      </p>
<div class="container">
   <div class="row">
   <div class="col"> <a href="Admin/<?php if($final['filename']==true) {echo $final['file'];}else{  header('location:panache.php');}?> "><button class="btn btn-danger">Read More</button></a></div>
   <br>
       <div class="col">

  <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#enroll">
    Enroll Now
  </button>  
</div>
      
   </div>
 </div>


<!-- Modal -->


 <hr>
      <div class="user">
        <img src="images/club/pana.png" alt="user" />

        <div class="user-info">

         <h5>Posted On</h5>
          <p><?php echo $final['post_time']?></p>
          

        </div>

      </div>
    </div>
  </div>
  
 
</div>
<hr>



 <?php } ?>
    </div>
 
    
  </div>

</div>
</center>
<center>

<div class="modal fade" id="enroll" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header border-bottom-0">
        <h5 class="modal-title" id="exampleModalLabel">Event Enroll Form</h5>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      <form role="form" action="panacheenroll.php" method="POST" enctype="multipart/form-data" onsubmit="myfunction()">
        <div class="modal-body">
          <div class="form-group" >
            <label >Full name</label>
            <input type="text" class="form-control form2" name="name" aria-describedby="emailHelp" placeholder="Enter Full Name" style="background-color: white;" required>
            
          </div>
          <div class="form-group">
            <label for="password1">Course</label>
            <input type="text" class="form-control form2" name="course" placeholder="Course" style="background-color: white;" required>
          </div>
           <div class="form-group">
            <label for="">Email ID</label>
            <input type="email" class="form-control form2" name="email" placeholder="Enter email" style="background-color: white;" required>
          </div>
           <div class="form-group">
           <label for="">Mobile Number</label>
            <input type="number" class="form-control form2" name="number" placeholder="Enter Mobile Number" style="background-color: white;" required>
          </div>
          <div class="form-group">
           <label for="">Event Name</label>
            <input type="text" class="form-control form2" name="eventname" placeholder="Enter Event Name" style="background-color: white;" required>
          </div>
        </div>
        <div class="modal-footer border-top-0 d-flex justify-content-center">
          <button type="submit" class="btn btn-success">Submit</button>
        </div>
      </form>
      <script >
        function myfunction() {
          alert("You Are successfully enrolled for the event")
        }
      </script>
    </div>
  </div>
</div>
</center>
<!--Carousel-->
<center>
  <div class="container" id="team">
    <section class="ftco-section">
      <div class="container">
        <div class="row">
          
          <div class="col-md-12 text-center">
            <h2 class="heading-section mb-5">OUR TEAM</h2>
          </div>

            
          <?php 
      include("dbs/connect.php");
      $sql="SELECT  id, role, post, name, image FROM admin where id = '2'";
      $results=$connect->query($sql);
      $final=$results->fetch_array();              
      ?>
          <div class="col-md-12">
            <div class="featured-carousel owl-carousel">
              <div class="item">
                <div class="work">
                  <div class="img d-flex align-items-end justify-content-center" style="background-image: url(ADMIN/<?php echo $final[4] ?>);">
                    <div class="text w-100">
                      <span class="cat"><?php echo $final[3] ?></span>
                      <div  class="container" style="background-color: black; width: 100%;" >
                      <h3><a href="#"><?php echo $final[2] ?></a></h3></div>
                    </div>
                  </div>
                </div>
              </div>
                          <?php 
      include("dbs/connect.php");
      $sql="SELECT  id, role, post, name, image FROM teammember where id = '1'";
      $results=$connect->query($sql);
      $final2=$results->fetch_array();              
      ?>
              <div class="item">
                <div class="work">
                  <div class="img d-flex align-items-end justify-content-center" style="background-image: url(ADMIN/<?php echo $final2[4] ?>);">
                    <div class="text w-100">
                      <span class="cat"><?php echo $final2[3] ?></span>
                      <div  class="container" style="background-color: black; width: 100%;" >
                      <h3><a href="#"><?php echo $final2[2] ?></a></h3></div>
                    </div>
                  </div>
                </div>
              </div>
              <?php 
      include("dbs/connect.php");
      $sql="SELECT  id, role, post, name, image FROM teammember where id = '2'";
      $results=$connect->query($sql);
      $final2=$results->fetch_array();              
      ?>
              <div class="item">
                <div class="work">
                  <div class="img d-flex align-items-end justify-content-center" style="background-image: url(ADMIN/<?php echo $final2[4] ?>);">
                    <div class="text w-100">
                      <span class="cat"><?php echo $final2[3] ?></span>
                      <div  class="container" style="background-color: black; width: 100%;" >
                      <h3><a href="#"><?php echo $final2[2] ?></a></h3></div>
                    </div>
                  </div>
                </div>
              </div>
              <?php 
      include("dbs/connect.php");
      $sql="SELECT  id, role, post, name, image FROM teammember where id = '3'";
      $results=$connect->query($sql);
      $final2=$results->fetch_array();              
      ?>
              <div class="item">
                <div class="work">
                  <div class="img d-flex align-items-end justify-content-center" style="background-image: url(ADMIN/<?php echo $final2[4] ?>);">
                    <div class="text w-100">
                      <span class="cat"><?php echo $final2[3] ?></span>
                      <div  class="container" style="background-color: black; width: 100%;" >
                      <h3><a href="#"><?php echo $final2[2] ?></a></h3></div>
                    </div>
                  </div>
                </div>
              </div>
              <?php 
      include("dbs/connect.php");
      $sql="SELECT  id, role, post, name, image FROM teammember where id = '4'";
      $results=$connect->query($sql);
      $final2=$results->fetch_array();              
      ?>
              <div class="item">
                <div class="work">
                  <div class="img d-flex align-items-end justify-content-center" style="background-image: url(ADMIN/<?php echo $final2[4] ?>);">
                    <div class="text w-100">
                      <span class="cat"><?php echo $final2[3] ?></span>
                      <div  class="container" style="background-color: black; width: 100%;" >
                      <h3><a href="#"><?php echo $final2[2] ?></a></h3></div>
                    </div>
                  </div>
                </div>
              </div>
              <?php 
      include("dbs/connect.php");
      $sql="SELECT  id, role, post, name, image FROM teammember where id = '5'";
      $results=$connect->query($sql);
      $final2=$results->fetch_array();              
      ?>
              <div class="item">
                <div class="work">
                  <div class="img d-flex align-items-end justify-content-center" style="background-image: url(ADMIN/<?php echo $final2[4] ?>);">
                    <div class="text w-100">
                      <span class="cat"><?php echo $final2[3] ?></span>
                      <div  class="container" style="background-color: black; width: 100%;" >
                      <h3><a href="#"><?php echo $final2[2] ?></a></h3></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
        </div>
      </div>
    </section>
  </div>
</center>
<div class="modal fade" id="form" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header border-bottom-0">
    <h5 class="modal-title" id="exampleModalLabel">Apply For Panache Club </h5>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      <form role="form" action="panachevacant.php" method="POST" enctype="multipart/form-data" onsubmit="myfunction()">
        <div class="modal-body">
          <div class="form-group" >
            <label >Full name</label>
            <input type="text" class="form-control form2" name="name" aria-describedby="emailHelp" placeholder="Enter Full Name" style="background-color: white;" required>
            
          </div>
          <div class="form-group">
            <label for="password1">Course</label>
            <input type="text" class="form-control form2" name="course" placeholder="Course" style="background-color: white;" required>
          </div>
           <div class="form-group">
            <label for="">Student ID</label>
            <input type="text" class="form-control form2" name="student_id" placeholder="Enter Student ID" style="background-color: white;">
          </div>
           <div class="form-group">
           <label for="">Email ID</label>
            <input type="email" class="form-control form2" name="email" placeholder="Enter Email ID" style="background-color: white;" required>
          </div>
          <div class="form-group">
            <label for="post">Post</label>
            <select class="form-control form2" style="background-color:white;" name="v_post" placeholder="Select Post" required>
              <option>Select Post</option>
              <option>President</option>
              <option>Vice President</option>
              <option>Secretary</option>
              <option>Joint Secretary</option>
              <option>Treasurer</option>
            </select>
            <br>
            <label for="post" >Uploade Your Resume</label>
            <br>
<input class="form-control form2" type="file" name="file">
          </div>
        </div>
        <div class="modal-footer border-top-0 d-flex justify-content-center">
          <button type="submit" class="btn btn-danger">Submit</button>
        </div>
      </form>
      <script >
        function myfunction() {
          alert("Your detail is recorded We will get in touch with you soon")
        }
      </script>
    </div>
  </div>
</div>
<!--Carousel part2 end-->

    
<?php
include('plugins/footer.php');
?>
</body>
</html>