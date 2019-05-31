<?php include 'includes/header.php'; ?>


<!-- Start Page Head -->
<section class="page-head">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <ul class="breadcrumb">
          <li><a href="index.php">Home</a><span>/</span></li>
          <li class="active">Post Your Resume</li>
        </ul>
      </div>
    </div>
  </div>
</section>
<!-- End Page Head -->


<section class="post_resume py-5">
  <div class="container">
    <h2>Post Your Resume</h2>
    <form class="mt-5">
      <p class="text-bold border-bottom">Account Details :</p>
      <div class="form-group row mt-3">
        <label for="inputEmail3" class="col-sm-2 col-form-label">User Email : </label>
        <div class="col-sm-10">
          <input type="email" class="form-control" id="inputEmail3" placeholder="Enter your email">
        </div>
      </div>
      <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Password : </label>
        <div class="col-sm-10">
          <input type="password" class="form-control" id="inputEmail3" placeholder="Enter your password">
        </div>
      </div>
      <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Confirm Password : </label>
        <div class="col-sm-10">
          <input type="password" class="form-control" id="inputEmail3" placeholder="ReEnter your password">
        </div>
      </div>
    </form>

    <form class="mt-5">
      <p class="text-bold border-bottom">Personal Details :</p>
      <div class="form-group row mt-3">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Name : </label>
        <div class="col-sm-10">
          <div class="form-row">
            <div class="col">
              <input type="text" class="form-control" placeholder="First name">
            </div>
            <div class="col">
              <input type="text" class="form-control" placeholder="Last name">
            </div>
          </div>
        </div>
      </div>
      <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Gender : </label>
        <div class="col-sm-10">
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
            <label class="form-check-label" for="inlineRadio1">Male : </label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
            <label class="form-check-label" for="inlineRadio2">Female : </label>
          </div>
        </div>
      </div>
      <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Height : </label>
        <div class="col-sm-5">
          <div class="form-row">
            <div class="col">
              <input type="text" class="form-control" placeholder="feet">
            </div>
            <div class="col">
              <input type="text" class="form-control" placeholder="inches">
            </div>
          </div>
        </div>
      </div>

      <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Weight : </label>
        <div class="col-sm-5">
          <div class="form-row">
            <div class="col">
              <input type="text" class="form-control" placeholder="kg">
            </div>
            <span class="from-text text-muted">or</span>
            <div class="col">
              <input type="text" class="form-control" placeholder="lbs">
            </div>
          </div>
        </div>
      </div>


      <div class="form-group row mt-3">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Location : </label>
        <div class="col-sm-10">
          <div class="form-row">
            <div class="col">
              <select class="custom-select">
                <option selected>Select Country</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            </div>
            <div class="col">
              <input type="text" class="form-control" placeholder="City">
            </div>
          </div>
        </div>
      </div>
      <div class="form-group row mt-3">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Mobile : </label>
        <div class="col-sm-10">
          <div class="form-row">
            <div class="col">
              <input type="text" class="form-control" placeholder="Mobile Number">
            </div>
            <div class="col">
            </div>
          </div>
        </div>
      </div>
    </form>

    <form class="mt-5">

      <p class="text-bold border-bottom">Driving License Details :</p>

      <div class="form-group row mt-3">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Type : </label>
        <div class="col-sm-10">
          <div class="form-row">
            <div class="col">
              <input type="text" class="form-control" placeholder="License Type">
            </div>
            <div class="col">
            </div>
          </div>
        </div>
      </div>


      <div class="form-group row mt-3">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Country : </label>
        <div class="col-sm-10">
          <div class="form-row">
            <div class="col">
              <select class="custom-select">
                <option selected>Select Country</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            </div>
            <div class="col">
            </div>
          </div>
        </div>
      </div>










    </form>


    <form class="mt-5">

      <p class="text-bold border-bottom">Previous Employments :</p>

      <div class="form-group row mt-3">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Company : </label>
        <div class="col-sm-10">
          <div class="form-row">
            <div class="col">
              <input type="text" class="form-control" placeholder="License Type">
            </div>
            <div class="col">
            </div>
          </div>
        </div>
      </div>

      <div class="form-group row mt-3">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Location : </label>
        <div class="col-sm-10">
          <div class="form-row">
            <div class="col">
              <input type="text" class="form-control" placeholder="License Type">
            </div>
            <div class="col">
            </div>
          </div>
        </div>
      </div>

      <div class="form-group row mt-3">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Position : </label>
        <div class="col-sm-10">
          <div class="form-row">
            <div class="col">
              <input type="text" class="form-control" placeholder="License Type">
            </div>
            <div class="col">
            </div>
          </div>
        </div>
      </div>

      <div class="form-group row mt-3">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Key Responsibilities : </label>
        <div class="col-sm-10">
          <div class="form-row">
            <div class="col">
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="col">
            </div>
          </div>
        </div>
      </div>

    </form>



    <form class="mt-5">
      <p class="text-bold">Resume :</p>
      <small class="form-text text-muted border-bottom">(Please select pdf or word file only)</small>
      <div class="form-group row mt-3">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Upload Resume : </label>
        <div class="col-sm-10">
          <input type="file" value="Submit">
        </div>
      </div>
    </form>

    <form class="mt-5">
      <p class="text-bold">Upload :</p>
      <small class="form-text text-muted border-bottom">(Please upload the necessary documents and photo)</small>
      <div class="form-group row mt-3">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Select Photo 1 : </label>
        <div class="col-sm-10">
          <input type="file" value="Submit">
        </div>
      </div>

      <div class="form-group row mt-3">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Select Photo 2 : </label>
        <div class="col-sm-10">
          <input type="file" value="Submit">
        </div>
      </div>

      <div class="form-group row mt-3">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Documents : </label>
        <div class="col-sm-10">
          <input type="file" value="Submit">
        </div>
      </div>


      <div class="custom-control custom-checkbox">
  <input type="checkbox" class="custom-control-input" id="customCheck1">
  <label class="custom-control-label xs-font" for="customCheck1"> I have read and understood and agree to the <a href="#" class="text-primary">Terms and Conditions</a> governing the use of Frontline Recruitment with manpoweragencynepal.com </label>
</div>

<div class="form-group row mt-5">
  <div class="col-sm-2"></div>
  <div class="col-sm-8 text-center">
    <a href="#"><button type="submit" class="btn btn-regular px-5">Submit</button></a>
  </div>
</div>
    </form>




  </div>
</section>


<?php include 'includes/footer.php'; ?>
