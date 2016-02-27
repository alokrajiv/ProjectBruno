<<<<<<< HEAD
<html>
   <title>
      ADD CLIENT
   </title>
   <h1>
      <center>
         COMPANY NAME..
      </center>
   </h1>
   <head>
      <center>NEW CLIENT</center>
   </head>
   <br><br>
   <form name="loginform" action="addclient_handle.php" method="post">
      <table width="300" border="0" align="center" cellpadding="2" cellspacing="5">
         <tr>
            <td>
               <div align="right">Company Name</div>
            </td>
            <td><input name="compname" type="text" /></td>
         </tr>
         <tr>
            <td>
               <div align="right">Company Phone Number</div>
            </td>
            <td><input name="phno" type="text" /></td>
         </tr>
         <tr>
            <td>
               <div align="right">Company Fax Number</div>
            </td>
            <td><input name="faxnumber" type="text" /></td>
         </tr>
         <tr>
            <td>
               <div align="right">Company Email</div>
            </td>
            <td><input name="compemail" type="text" /></td>
         </tr>
         <tr>
            <td>
               <div align="right">Company Address</div>
            </td>
            <td><input name="compaddress" type="text" /></td>
         </tr>
         <tr>
            <td width="115">
               <div align="right">Owner</div>
            </td>
            <td width="155"><input name="owner" type="text" /></td>
         </tr>
         <hr>
      </table>
       <center>
      <h3>PERSON OF CONTACT</h3>
      <span id="poc_area">
      </span>
      <button id="add_poc" type="button">ADD 1 CONTACT</button>
      <button id="rem_poc" type="button">REMOVE 1 CONTACT</button>
      <br><br>
      <input name="" type="submit" value="SUBMIT" />
       </center>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
      <script>
=======
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>ERP-addclient</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

    <!--Jquery Plugin-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <!--Custom Css-->
    <link rel="stylesheet" type="text/css" href="css/custom.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>
  <body>
    <div class="container">
      <div >
        <h1 class="text-center main-heading">New Client</h1>
      </div>
      <div class="jumbotron jumbotron-custom jumbotron-parallax"> 
        
        <div class="row center-block">
          <form name="addclient" action="addclient_handle.php"class="form-horizontal" role="form" method="post">
            <div class="form-group ">
              <label class="control-label col-sm-3 col-sm-offset-1 col-xs-3 col-xs-offset-1 col-lg-3 col-lg-offset-1" for="compname">Company Name</label>
                <div class="col-sm-6 col-xs-6 col-lg-6">
                  <input type="text" class="form-control" placeholder="Enter Company Name" name="compname" id="compname">
                </div>
            </div>
            <div class="form-group ">
              <label class="control-label col-sm-3 col-sm-offset-1 col-xs-3 col-xs-offset-1 col-lg-3 col-lg-offset-1" for="phno">Phone No.</label>
                <div class="col-sm-6 col-xs-6 col-lg-6">
                  <input type="text" class="form-control" placeholder="Enter Company Phone Number" name="phno" id="phno">
                </div>
            </div>
            <div class="form-group ">
              <label class="control-label col-sm-3 col-sm-offset-1 col-xs-3 col-xs-offset-1 col-lg-3 col-lg-offset-1" for="faxnumber">Fax No.</label>
                <div class="col-sm-6 col-xs-6 col-lg-6">
                  <input type="text" class="form-control" placeholder="Enter Company Fax Number" name="faxnumber" id="faxnumber">
                </div>
            </div>
            <div class="form-group ">
              <label class="control-label col-sm-3 col-sm-offset-1 col-xs-3 col-xs-offset-1 col-lg-3 col-lg-offset-1" for="compemail">Company Email</label>
                <div class="col-sm-6 col-xs-6 col-lg-6">
                  <input type="text" class="form-control" placeholder="Enter Email" name="compemail" id="compemail">
                </div>
            </div>
            <div class="form-group ">
              <label class="control-label col-sm-3 col-sm-offset-1 col-xs-3 col-xs-offset-1 col-lg-3 col-lg-offset-1" for="compaddress">Address</label>
                <div class="col-sm-6 col-xs-6 col-lg-6">
                  <textarea type="text" class="form-control" placeholder="Enter Office Address" name="compaddress" rows="3"id="compaddress"></textarea>
                </div>
            </div>
            <div class="form-group ">
              <label class="control-label col-sm-3 col-sm-offset-1 col-xs-3 col-xs-offset-1 col-lg-3 col-lg-offset-1" for="owner">Owner</label>
                <div class="col-sm-6 col-xs-6 col-lg-6">
                  <input type="text" class="form-control" placeholder="Enter Owner's Name" name="owner" id="owner">
                </div>
            </div>
            <hr class="divider">  
            <div class="form-group">
              <h3 class="text-center">Person Of Contact</h3>
            </div>
            <div>
              <span id="poc_area">
              </span>
            </div>
            <div class="form-group">

              <div class="">
                <button class="btn btn-success btn-lg add-button" type="button" name="add_poc" id="add_poc" value="add">Add 1 Contact</button>
                <button class="btn btn-danger btn-lg remove-button" type="button" name="rem_poc" id="rem_poc" value="remove">Remove 1 Contact</button>
              </div>
              <div>
                <button class="btn btn-primary btn-lg submit-button" type="submit" name="submit" id="submit" value="SUBMIT">Submit</button>
              </div>
            </div>
            <script>
>>>>>>> master
         var poc_area = $('#poc_area');
         
         function templater(sno){
             var template = '\
                  <span class="poc">\
                <br>PERSON '+sno+'\
                <br>Name:<input name="poc['+sno+'][name]">\
                <br>Designation: <input name="poc['+sno+'][designation]">\
                <br>Email: <input name="poc['+sno+'][email]" type="text" >\
<<<<<<< HEAD
                <br>Mobile No: <input name="poc['+sno+'][mobile_no]" type="text">\
                <br>Office No: <input name="poc['+sno+'][office_no]" type="text">\
=======
                <br>Mobile No: <input name="poc['+sno+'][mobile]" type="text">\
                <br>Office No: <input name="poc['+sno+'][office]" type="text">\
>>>>>>> master
                <br><br><br>\
               </span>\
          ';
          return template;
         }
         var i = 0;
         $('#add_poc').click(function(){
             i++;
             poc_area.append(templater(i));
             $('html, body').animate({
                scrollTop: $('#add_poc').offset().top
             }, 'slow');
         });
         $('#rem_poc').click(function(){
             i--;
             $('.poc:last').remove();
         });
      </script>
<<<<<<< HEAD
   </form>
</html>
=======
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
>>>>>>> master
