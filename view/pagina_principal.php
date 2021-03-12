<link rel="stylesheet" href="../access/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> 
<!--Para abrir modales se usa bootstrap.min.js-->
<script src="../access/bootstrap/js/bootstrap.min.js"></script>


<nav class="navbar navbar-expand-lg navbar-light">
<div class="container">
  <a class="navbar-brand" href="#">Tienda_TECH</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="modal" data-target="#exampleModalLong">Insert</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="modal" data-target="#exampleModal">Delete</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Update</a>
      </li>
    </ul>
  </div>
  </div>
</nav>

<!-- Modal Create-->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Create a New Customer</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form>
          <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="text" class="form-control" id="name" name="" aria-describedby="emailHelp" placeholder="Name">    
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Last Name</label>
            <input type="text" class="form-control" id="last_name" name="" placeholder="Last Name">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Email</label>
            <input type="email" class="form-control" id="email" name="" placeholder="Email">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Phone</label>
            <input type="text" class="form-control" id="phone" name="" placeholder="Phone" minlength="10" maxlength="10">
          </div>
          <table class="table" id ="tbody">
          <thead>
              <tr>
                <th scope="col">Name</th>
                <th scope="col">Last_name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
              </tr>
            </thead>
            <tbody >
                <?php
                  require_once("../controller/controller.php");
                  foreach($show as $index){
                    echo "<tr><td>".$index['name'].
                    "<td>".$index['last_name']."</td>".
                    "<td>".$index['email']."</td>".
                    "<td>".$index['phone']."</td>";
                  }
                ?>
            </tbody>
            </table>
      </form>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary"  onclick="insert();">Insert</button>
      </div>
    </div>
  </div>
</div> 

<!-- Modal -->
            <div class="modal fade bd-example-modal-lg" id="exampleModal" data-target=".bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Delete Customer</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                <form>
                <!-- <div class="form-group">
                  <label for="exampleInputPassword1"></label>
                  <input type="text" class="form-control" id="search" name="" placeholder="Search" minlength="10" maxlength="10">
                </div> -->
          <table class="table" id ="tbodyDelete">
          <thead>
              <tr>
                <th scope="col">Name</th>
                <th scope="col">Last_name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
              </tr>
            </thead>
            <tbody >
            <?php
                  require_once("../controller/controller.php");
                  foreach($show as $index){
                    echo "<tr><td>".$index['name'].
                    "<td>".$index['last_name']."</td>".
                    "<td>".$index['email']."</td>".
                    "<td>".$index['phone']."</td>
                    <td><button class='btn btn-danger' onclick='delet($index[idCUSTOMER])'>Delete</button></td></td></tr>";
                  }
                ?>
            </tbody>
            </table>
      </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<script src="view.js"></script>