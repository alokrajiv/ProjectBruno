<?php
  require_once $_SERVER["DOCUMENT_ROOT"].'/../core/autoload.php';
  session_start();
  require_once __DIR__.'/order_func.php';
	$inventory_item_id=$_POST['selected_order_inventory_item'];
  $arrcolor=getColors($inventory_item_id);
  $arrmaterial=getMaterials($inventory_item_id);
  $arrwidth=getWidths($inventory_item_id);
?>
	<html>
		<h1 class="text-center main-heading">Company Name</h1>
		<script src="https://code.jquery.com/jquery-2.1.4.js"></script>
  			<meta charset="utf-8">
  			<meta name="viewport" content="width=device-width">
  			<title>Place Order</title>
  		</head>
      <form name="orderform2" action="order_handle.php" method="post">
      Select the color:
      <select name="search_item_color">
      <?php
      foreach($arrcolor as $color){
        $id=$color['inventory_id'];
        $col=$color['color'];
        echo "<option value='$id'>$col </option>";
      }
          ?>
        </select>
        <br><br>
Select the width:
      <select name="search_item_width">
      <?php
      foreach($arrwidth as $width){
        $id=$width['inventory_id'];
        $col=$width['width'];
        echo "<option value='$id'>$col </option>";
      }
          ?>
        </select>
        <br><br>
Select the material:
      <select name="search_item_material">
      <?php
      foreach($arrmaterial as $material){
        $id=$material['inventory_id'];
        $col=$material['material'];
        echo "<option value='$id'>$col </option>";
      }
          ?>
        </select>

      <br><br>
    </form>
</body>
<input name="" type="submit" value="SUBMIT" />
</form>
</html>
