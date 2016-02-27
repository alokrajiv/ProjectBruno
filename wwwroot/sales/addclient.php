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
         var poc_area = $('#poc_area');
         
         function templater(sno){
             var template = '\
                      <span class="poc">\
                      <h4 class="text-center">Person '+sno+'</h4>\
                                  <div class="form-group">\
              <label class="control-label col-sm-3 col-sm-offset-1 col-xs-3 col-xs-offset-1 col-lg-3 col-lg-offset-1" for="poc['+sno+'][name]">Name</label>\
                <div class="col-sm-6 col-xs-6 col-lg-6">\
                  <input type="text" class="form-control" placeholder="Enter Person\'s Name" name="poc['+sno+'][name]">\
                </div>\
            </div>\
            <div class="form-group">\
              <label class="control-label col-sm-3 col-sm-offset-1 col-xs-3 col-xs-offset-1 col-lg-3 col-lg-offset-1" for="poc['+sno+'][designation]">Designation</label>\
                <div class="col-sm-6 col-xs-6 col-lg-6">\
                  <input type="text" class="form-control" placeholder="Enter Person\'s Designation" name="poc['+sno+'][designation]">\
                </div>\
            </div>\
            <div class="form-group">\
              <label class="control-label col-sm-3 col-sm-offset-1 col-xs-3 col-xs-offset-1 col-lg-3 col-lg-offset-1" for="poc['+sno+'][email]">Email</label>\
                <div class="col-sm-6 col-xs-6 col-lg-6">\
                  <input type="text" class="form-control" placeholder="Enter Person\'s Email" name="poc['+sno+'][email]">\
                </div>\
            </div>\
            <div class="form-group">\
              <label class="control-label col-sm-3 col-sm-offset-1 col-xs-3 col-xs-offset-1 col-lg-3 col-lg-offset-1" for="poc['+sno+'][mobile]">Mobile No.</label>\
                <div class="col-sm-6 col-xs-6 col-lg-6">\
                  <input type="text" class="form-control" placeholder="Enter Person\'s Mobile No." name="poc['+sno+'][mobile]">\
                </div>\
            </div>\
            <div class="form-group">\
              <label class="control-label col-sm-3 col-sm-offset-1 col-xs-3 col-xs-offset-1 col-lg-3 col-lg-offset-1" for="poc['+sno+'][office]">Office No.</label>\
                <div class="col-sm-6 col-xs-6 col-lg-6">\
                  <input type="text" class="form-control" placeholder="Enter Person\'s Office Phone No." name="poc['+sno+'][office]">\
                </div>\
            </div>\
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
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
