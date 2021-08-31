<?php

if (isset($_POST['submit'])) {
$email = $_POST['emailaddress']
$name = $_POST['name']
$lenghtwidth = $_POST['gross-salary'];
$buildingtype= $_POST['buildingtype'];
$insulation= $_POST['insulation'];
$doors= $_POST['doors'];
$windows= $_POST['windows'];
$rooflights= $_POST['rooflights'];
$roof= $_POST['roof'];
$heating= $_POST['heating'];

$mailTo = "b00129732@mytudublin.ie";
$headers = "From: ".$email;
$txt = "A form has been submitted by".$name.".\n\n"."Lenght and Width: ".$lenghtwidth.".\n\n"."Type of Building: ".$buildingtype.".\n\n"."Insulation: ".$insulation.".\n\n"."Doors: ".$doors.".\n\n"."Windows: ".$windows.".\n\n"."Roof Lights: ".$rooflights.".\n\n"."Roof: ".$roof.".\n\n"."Heating: ".$heating.".\n\n";

mail($mailTo, $txt, $headers);
header("Location: index.html");
}