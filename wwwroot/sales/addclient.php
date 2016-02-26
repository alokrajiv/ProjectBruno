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
         var poc_area = $('#poc_area');
         
         function templater(sno){
             var template = '\
                  <span class="poc">\
                <br>PERSON '+sno+'\
                <br>Name:<input name="poc['+sno+'][name]">\
                <br>Designation: <input name="poc['+sno+'][designation]">\
                <br>Email: <input name="poc['+sno+'][email]" type="text" >\
                <br>Mobile No: <input name="poc['+sno+'][mobile_no]" type="text">\
                <br>Office No: <input name="poc['+sno+'][office_no]" type="text">\
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
   </form>
</html>