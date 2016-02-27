<!DOCTYPE html>
<html>
<head>
<script src="https://code.jquery.com/jquery-2.1.4.js"></script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>JS Bin</title>
</head>
<body>
<select id="search_item_box">
</select>
</body>
<script>
$(function(){
  
  $.getJSON("/api/inventory_main.php", function(arr){
        function templater(id, name){
            return "<option id='"+id+"'>"+name+"</option>";
          }

          for(var i=0;i<arr.length;i++){
            var tmp = arr[i];
            $('#search_item_box')
            .append(templater(tmp.inventory_id, tmp.name));
          }
  });
  
});
</script>
</html>