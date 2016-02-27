<!DOCTYPE html>
<html>
<head>
  <h1 class="text-center main-heading">Company Name</h1>
<script src="https://code.jquery.com/jquery-2.1.4.js"></script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Place Order</title>
</head>
<body>
  <form name="orderform" action="order_step2.php" method="post">
  Select the item:
<select id="search_item_box" name="selected_order_inventory_item">
</select>
<br><br>
</body>
<script>
$(function(){
  
  $.getJSON("/api/inventory_main.php", function(arr){
        function templater(id, name){
            return "<option value='"+id+"'>"+name+"</option>";
          }

          for(var i=0;i<arr.length;i++){
            var tmp = arr[i];
            $('#search_item_box')
            .append(templater(tmp.inventory_id, tmp.name));
          }
  });
  
});
</script>
<input name="" type="submit" value="SUBMIT" />
</form>
</html>