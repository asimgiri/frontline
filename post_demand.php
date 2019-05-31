


<?php include 'includes/header.php'; ?>


<!-- Start Page Head -->
<section class="page-head">
 <div class="overlay"></div>
 <div class="container">
     <div class="row">
         <div class="col-md-12 text-center">
             <ul class="breadcrumb">
							 <li><a href="index.php">Home</a><span>/</span></li>
               <li class="active">Post Your Demand</li>
             </ul>
         </div>
     </div>
 </div>
</section>
<!-- End Page Head -->


  <section class="post_demand py-5">
    <div class="container">
      <h2>Post Your Demand</h2>
      <form class="mt-5">
        <div class="form-group row">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputEmail3" placeholder="Enter your name">
          </div>
        </div>
        <div class="form-group row">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputEmail3" placeholder="Enter your name">
          </div>
        </div>
        <div class="form-group row">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Mobile</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputEmail3" placeholder="Enter your name">
          </div>
        </div>
        <div class="form-group row">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Company Name</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputEmail3" placeholder="Enter your name">
          </div>
        </div>
        <div class="form-group row">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Designation</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputEmail3" placeholder="Enter your name">
          </div>
        </div>


        <div class="form-group row">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Country</label>
          <div class="col-sm-10">
            <select class="custom-select">
              <option selected>Select Country</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
          </div>
        </div>

        <div class="form-group row">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Description</label>
          <div class="col-sm-10">
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
        </div>

        <div class="form-group row">
          <div class="col-sm-2"></div>
          <div class="col-sm-10 text-center">
          <a href="#"><button type="submit" class="btn btn-regular px-5">Submit</button></a>
          </div>
        </div>

      </form>
    </div>
  </section>


	<?php include 'includes/footer.php'; ?>
