<html>
<title>Top Offers List</title>
<body style="margin:0 auto;">
<style>
ol li{	
padding:5px;
padding-left:0px;	
}
</style>
<?php
error_reporting(0);

$id = $_GET["id"];

$offer_name = $_POST["offer_name"];

$offer_name = str_replace(" ", "%20", $offer_name);

$link = $_POST["link"];

$link = str_replace(" ", "%20", $link);

if($offer_name && $link)
{
$url = 'https://paypal-payout.herokuapp.com/?offer_name='.$offer_name.'&description='.$link.'';
file_get_contents($url);	
}

if($id)
{
$url = 'https://paypal-payout.herokuapp.com/?delete_offer=1&id='.$id.'';
file_get_contents($url);
}
$data =  file_get_contents("https://paypal-payout.herokuapp.com/?offer=1");
$arr = json_decode($data, true);
?>
<div style="float:left; width:200px;  padding-left:20px; border-right:1px solid #333333; height:100%;">
<?php
include("menu.php");
?>
</div>
<div style="float:left; padding-left:20px;">
<h3><u>Top Offers List</u></h3>
<br/>
<a href="edit.php">Add New</a>
<br/><br/>
<table cellspacing="0" cellpadding="10" border="1">
<tbody>
<th>Offer Name</th>
<th>Description / Link</th>
<th>Action</th>
<?php
foreach($arr as $child) {

foreach($child as $child1) {
?>
<tr>
<?php
echo '<td>'.$child1["offer_name"].'</td>';

echo '<td>'.$child1["description"].'</td>';

echo '<td>&nbsp;&nbsp; <a href="index.php?id='.$child1["id"].'">Delete</a></td>';

?>

</tr>
<?php
}

}
?>
</tbody>
</table>
</div>
</body>
</html>
