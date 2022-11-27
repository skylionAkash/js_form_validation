<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="register-container">
        <div class="inner-container">
            <h2>Register Here</h2>
            <form action="/myaction.php" name="myForm" onsubmit="return validateForm()" method="post">
                    <div class="register-name-wrapper">
                       <div class="form-group col-6" id="fname">
                          <input type="text" name="fFname" class="form-control" placeholder="First Name">
                          <span class="formerror"></span>
                       </div>
                       <div class="form-group col-6" id="lname">
                          <input type="text" name="fLname" class="form-control" placeholder="Last Name">
                          <span class="formerror"></span>
                       </div>
                    </div>
                    <div class="w-100-wrapper">
                        <div class="form-group col-12" id="username">
                           <input type="text" name="fusername" class="form-control" placeholder="Username">
                           <span class="formerror"></span>
                        </div>
                        <div class="form-group col-12" id="contact">
                           <input type="text" name="fcontact" class="form-control" placeholder="Contact Number">
                           <span class="formerror"></span>
                        </div>
                        <div class="form-group col-12" id="email">
                           <input type="email" name="femail" class="form-control" placeholder="Email Id">
                           <span class="formerror"></span>
                        </div>
                        <div class="form-group col-12" id="pass">
                           <input type="text" name="fpass" class="form-control" placeholder="Password">
                           <span class="formerror"></span>
                        </div>
                        <div class="form-group col-12" id="cpass">
                           <input type="text" name="fcpass" class="form-control" placeholder="Confirm Password">
                           <span class="formerror"></span>
                        </div>
                        <!-- <div class="form-group col-12">
                           <input type="text" class="form-control" placeholder="Address">
                        </div> -->
                    </div>
                    <!-- <div class="w-33-wrapper">
                        <div class="form-group col-4">
                            <select class="form-control" name="city" id="city">
                                <option value="">Select Country</option>
                                <option value="">India</option>
                                <option value="">USA</option>
                                <option value="">Australia</option>
                                <option value="">Canada</option>
                            </select>
                        </div>
                        <div class="form-group col-4">
                          <select class="form-control" name="state" id="state">
                            <option value="">Select State</option>
                            <option value="1">Andaman &amp; Nicobar Islands</option>
                            <option value="2">Andhra Pradesh</option>
                            <option value="3">Arunachal Pradesh</option>
                            <option value="4">Assam</option>
                            <option value="5">Bihar</option>
                            <option value="6">Chandigarh</option>
                            <option value="7">Chhattisgarh</option>
                            <option value="8">Dadra &amp; Nagar Haveli</option>
                            <option value="9">Daman &amp; Diu</option>
                            <option value="10">Delhi</option>
                            <option value="11">Goa</option>
                            <option value="12">Gujarat</option>
                            <option value="13">Haryana</option>
                            <option value="14">Himachal Pradesh</option>
                            <option value="15">Jammu &amp; Kashmir</option>
                            <option value="16">Jharkhand</option>
                            <option value="17">Karnataka</option>
                            <option value="18">Kerala</option>
                            <option value="19">Lakshadweep</option>
                            <option value="20">Madhya Pradesh</option>
                            <option value="21">Maharashtra</option>
                            <option value="22">Manipur</option>
                            <option value="23">Meghalaya</option>
                            <option value="24">Mizoram</option>
                            <option value="25">Nagaland</option>
                            <option value="26">Odisha</option>
                            <option value="27">Puducherry</option>
                            <option value="28">Punjab</option>
                            <option value="29">Rajasthan</option>
                            <option value="30">Sikkim</option>
                            <option value="31">Tamil Nadu</option>
                            <option value="32">Tripura</option>
                            <option value="33">Uttar Pradesh</option>
                            <option value="34">Uttarakhand</option>
                            <option value="35">West Bengal</option>
                          </select>
                        </div>
                        <div class="form-group col-4">
                            <select class="form-control" name="city" id="city">
                                <option value="">Select City</option>
                                <option value="">Pune</option>
                                <option value="">Mumbai</option>
                                <option value="">Aurangabad</option>
                                <option value="">Nanded</option>
                            </select>
                        </div>
                    </div> -->
                    <div class="button-wrapper">
                       <button type="submit" value="submit">Submit</button>
                       <!-- <div class="already-wrapper">
                          <p>Already Registered? <a href="login.php">Login</a></p>
                       </div> -->
                    </div>
                    
            </form>
        </div>
    </div>
</body>
<!-- form validation started -->
<script>
function clearErrors(){
   errors = document.getElementsByClassName('formerror');
   for(let item of errors){
      item.innerHTML = "";
   }
}

   function seterror(id,error){
      element = document.getElementById(id);
      element.getElementsByClassName('formerror')[0].innerHTML = error;
   }

   function validateForm(){
      var returnval = true;
      clearErrors();

      // perform validation... if validation fail... set the value of returnval false
      // first name validation
      var name = document.forms['myForm']['fFname'].value;
     if(name.length < 5){
      seterror("fname","length of first name is too short")
      returnval = false;
     }

      // last name validation
     var lname = document.forms['myForm']['fLname'].value;
     if(lname.length < 5){
      seterror("lname","length of last name is too short")
      returnval = false;
     }

      // password validation
     var password = document.forms['myForm']['fpass'].value;
     if(password.length < 6){
      seterror("pass","Password should be at least 6 character long")
      returnval = false;
     }

  // confirm password validation
     var cpassword = document.forms['myForm']['fcpass'].value;
     if(password != cpassword){
      seterror("cpass","Confirm Password should be same as Password")
      returnval = false;
     }

      return returnval;
   }
</script>
</html>