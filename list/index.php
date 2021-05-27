<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="image/fav.png" type="image/x-icon">
    <title>List</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="#"><img class="image" src="image/logo.png" alt="list"></a>  
          <form class="form-inline my-2 my-lg-0 pull-right">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>
      <div id="errorbox" class="border"></div>
<div class="container">
      <div id="accordion">
        <div class="card">
          <div class="card-header" id="headingOne">
            <h5 class="mb-0">
              <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        Work
              </button>
            </h5>
          </div>
      
          <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
            <div class="card-body">
                <div class="row">
                    <div class="col-4 border">
                      <img class="dimg" src="image/images.png" alt="node">
                    </div>
                    <div class="col-8 border scroll">
                      <div class="container">
                        <div class="trow ">
                            <div class="col-2 gray bold border">S.No.</div>
                            <div class="col-5 gray bold border">Content </div>
                            <div class="col-5 gray bold border">Remark</div>
                        </div>
                        <?php
                          include "script/conn.php";
                          $selectn="SELECT * FROM node";
                          $queryn=mysqli_query($con,$selectn);
                          $numn=mysqli_num_rows($queryn);
                          while($resn=mysqli_fetch_row($queryn)){
                           ?> 
                           <div class="trow ">
                            <div class="col-2 border"><?php echo"$resn[0]"?></div>
                            <div class="col-5 border"><?php echo"$resn[1]"?></div>
                            <div class="col-5 border"><?php echo"$resn[2]"?></div>
                        </div>
                        <?php
                         }
                        ?>  
                    </div>
                  </div> 
                    <form class="form trow" id="formNode" >
                        <input type="text" class="col-5 border" name="content" id="contentNode" placeholder="Content"> 
                        <input type="text" class="col-5 border" name="remark" id="remarkNode" placeholder="Remark">
                        <button class="btn btn-primary" class="col-5 border" type="submit">Add</button>
                    </form>  
                </div>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingTwo">
            <h5 class="mb-0">
              <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
               Projects
              </button>
            </h5>
          </div>
          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
            <div class="card-body">
              <div class="row">
                  <div class="col-4 border">
                    <img class="autocadimg" src="image/download.png" alt="autocad">
                  </div>
                  <div class="col-8 border scroll">
                    <div class="container">
                      <div class="trow ">
                          <div class="col-2 gray bold border">S.No.</div>
                          <div class="col-5 gray bold border">Content </div>
                          <div class="col-5 gray bold border">Remark</div>
                      </div>
                      <?php
                          include "script/conn.php";
                          $selectna="SELECT * FROM autocad";
                          $queryna=mysqli_query($con,$selectna);
                          $numna=mysqli_num_rows($queryna);
                          while($resna=mysqli_fetch_row($queryna)){
                           ?> 
                           <div class="trow ">
                            <div class="col-2 border"><?php echo"$resna[0]"?></div>
                            <div class="col-5 border"><?php echo"$resna[1]"?></div>
                            <div class="col-5 border"><?php echo"$resna[2]"?></div>
                        </div>
                        <?php
                         }
                        ?>  
                  </div>
                </div>  
                  <form class="form trow" id="formCAD" >
                      <input type="text" class="col-5 border" name="content" id="contentCAD" placeholder="Content"> 
                      <input type="text" class="col-5 border" name="remark" id="remarkCAD" placeholder="Remark">
                      <button class="btn btn-primary" class="col-5 border" type="submit">Add</button>
                  </form>
              </div>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingThree">
            <h5 class="mb-0">
              <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              Hobby
              </button>
            </h5>
          </div>
          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
            <div class="card-body">
                <div class="row">
                    <div class="col-4 border ">
                      <img class="dimg" src="image/download.jpg" alt="cpp">
                    </div>
                    <div class="col-8 border scroll">
                      <div class="container">
                        <div class="trow ">
                            <div class="col-2 gray bold border">S.No.</div>
                            <div class="col-5 gray bold border">Content </div>
                            <div class="col-5 gray bold border">Remark</div>
                        </div>
                        <?php
                          include "script/conn.php";
                          $selectnc="SELECT * FROM cpp";
                          $querync=mysqli_query($con,$selectnc);
                          $numnc=mysqli_num_rows($querync);
                          while($resnc=mysqli_fetch_row($querync)){
                           ?> 
                           <div class="trow ">
                            <div class="col-2 border"><?php echo"$resnc[0]"?></div>
                            <div class="col-5 border"><?php echo"$resnc[1]"?></div>
                            <div class="col-5 border"><?php echo"$resnc[2]"?></div>
                        </div>
                        <?php
                         }
                        ?>  
                    </div>
                  </div>  
                    <form class="form trow" id="formCPP" >
                        <input type="text" class="col-5 border" name="content" id="contentCPP" placeholder="Content"> 
                        <input type="text" class="col-5 border" name="remark" id="remarkCPP" placeholder="Remark">
                        <button class="btn btn-primary" class="col-5 border" type="submit">Add</button>
                    </form>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>