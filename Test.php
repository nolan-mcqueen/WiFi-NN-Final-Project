<?php
$servername = "cs.furman.edu";
$username = "jkwack";
$password = ".reset.";
$dbname = "FU_Navigate";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$get = json_decode($_POST['req'], true);
$bssid1 = $get['BSSID1'];
$ss1 = $get['SS1'];
$lat1;
$long1;
$bssid2 = $get['BSSID2'];
$ss2 = $get['SS2'];
$lat2;
$long2;
$bssid3 = $get['BSSID3'];
$ss3 = $get['SS3'];
$lat3;
$long3;
$bssid4 = $get['BSSID4'];
$ss4 = $get['SS4'];
$lat4;
$long4;
$ss1N = normalizeSS($get['SS1']);
$lat1N;
$lon1N;
$ss2N = normalizeSS($get['SS2']);
$lat2N;
$lon2N;
$ss3N = normalizeSS($get['SS3']);
$lat3N;
$lon3N;
$ss4N = normalizeSS($get['SS4']);
$lat4N;
$lon4N;
$location = $get['Location'];
$Inner_Location = $get['Inner Location'];
function normalizeSS($SS){
  $NormalizedSS = ($SS+90)/(-30+90);
  return $NormalizedSS;
}
if ($bssid1 == "20:37:06:f6:4e"){ //AP1
  $lat1 = 34.552549;
  $long1 = 82.261959;
}
else if ($bssid1 == "d0:c2:82:67:fa"){ //AP2
  $lat1 = 34.552532;
  $long1 = 82.261922;
}
else if ($bssid1 == "d0:c2:82:2d:90"){ //AP3
  $lat1 = 34.552492;
  $long1 = 82.261969;
}
else if ($bssid1 == "d0:c2:82:7e:03"){ //AP4
  $lat1 = 34.552535;
  $long1 = 82.261993;
}
else if ($bssid1 == "d0:c2:82:67:2a"){ //AP5
  $lat1 = 34.552585;
  $long1 = 82.261928;
}
else if ($bssid1 == "d0:c2:82:2d:fc"){ //AP6
  $lat1 = 34.552572;
  $long1 = 82.261899;
}
else if ($bssid1 == "d0:c2:82:2d:b2"){ //AP7
  $lat1 = 34.552506;
  $long1 = 82.262022;
}
if ($bssid2 == "20:37:06:f6:4e"){ //AP1
  $lat2 = 34.552549;
  $long2 = 82.261959;
}
else if ($bssid2 == "d0:c2:82:67:fa"){ //AP2
  $lat2 = 34.552532;
  $long2 = 82.261922;
}
else if ($bssid2 == "d0:c2:82:2d:90"){ //AP3
  $lat2 = 34.552492;
  $long2 = 82.261969;
}
else if ($bssid2 == "d0:c2:82:7e:03"){ //AP4
  $lat2 = 34.552535;
  $long2 = 82.261993;
}
else if ($bssid2 == "d0:c2:82:67:2a"){ //AP5
  $lat2 = 34.552585;
  $long2 = 82.261928;
}
else if ($bssid2 == "d0:c2:82:2d:fc"){ //AP6
  $lat2 = 34.552572;
  $long2 = 82.261899;
}
else if ($bssid2 == "d0:c2:82:2d:b2"){ //AP7
  $lat2 = 34.552506;
  $long2 = 82.262022;
}
if ($bssid3 == "20:37:06:f6:4e"){ //AP1
  $lat3 = 34.552549;
  $long3 = 82.261959;
}
else if ($bssid3 == "d0:c2:82:67:fa"){ //AP2
  $lat3 = 34.552532;
  $long3 = 82.261922;
}
else if ($bssid3 == "d0:c2:82:2d:90"){ //AP3
  $lat3 = 34.552492;
  $long3 = 82.261969;
}
else if ($bssid3 == "d0:c2:82:7e:03"){ //AP4
  $lat3 = 34.552535;
  $long3 = 82.261993;
}
else if ($bssid3 == "d0:c2:82:67:2a"){ //AP5
  $lat3 = 34.552585;
  $long3 = 82.261928;
}
else if ($bssid3 == "d0:c2:82:2d:fc"){ //AP6
  $lat3 = 34.552572;
  $long3 = 82.261899;
}
else if ($bssid3 == "d0:c2:82:2d:b2"){ //AP7
  $lat3 = 34.552506;
  $long3 = 82.262022;
}
if ($bssid4 == "20:37:06:f6:4e"){ //AP1
  $lat4 = 34.552549;
  $long4 = 82.261959;
}
else if ($bssid4 == "d0:c2:82:67:fa"){ //AP2
  $lat4 = 34.552532;
  $long4 = 82.261922;
}
else if ($bssid4 == "d0:c2:82:2d:90"){ //AP3
  $lat4 = 34.552492;
  $long4 = 82.261969;
}
else if ($bssid4 == "d0:c2:82:7e:03"){ //AP4
  $lat4 = 34.552535;
  $long4 = 82.261993;
}
else if ($bssid4 == "d0:c2:82:67:2a"){ //AP5
  $lat4 = 34.552585;
  $long4 = 82.261928;
}
else if ($bssid4 == "d0:c2:82:2d:fc"){ //AP6
  $lat4 = 34.552572;
  $long4 = 82.261899;
}
else if ($bssid4 == "d0:c2:82:2d:b2"){ //AP7
  $lat4 = 34.552506;
  $long4 = 82.262022;
}
if ($bssid1 == "20:37:06:f6:4e"){ //AP1
  $lat1N = 0.612898231;
  $lon1N = 0.487809875;
}
else if ($bssid1 == "d0:c2:82:67:fa"){ //AP2
  $lat1N = 0.430108776;
  $lon1N = 0.186993298;
}
else if ($bssid1 == "d0:c2:82:2d:90"){ //AP3
  $lat1N = 0;
  $lon1N = 0.569116399;
}
else if ($bssid1 == "d0:c2:82:7e:03"){ //AP4
  $lat1N = 0.462354353;
  $lon1N = 0.764216934;
}
else if ($bssid1 == "d0:c2:82:67:2a"){ //AP5
  $lat1N = 1;
  $lon1N = 0.235783066;
}
else if ($bssid1 == "d0:c2:82:2d:fc"){ //AP6
  $lat1N = 0.860217551;
  $lon1N = 0;
}
else if ($bssid1 == "d0:c2:82:2d:b2"){ //AP7
  $lat1N = 0.150543878;
  $lon1N = 1;
}
if ($bssid2 == "20:37:06:f6:4e"){ //AP1
  $lat2N = 0.612898231;
  $lon2N = 0.487809875;
}
else if ($bssid2 == "d0:c2:82:67:fa"){ //AP2
  $lat2N = 0.430108776;
  $lon2N = 0.186993298;
}
else if ($bssid2 == "d0:c2:82:2d:90"){ //AP3
  $lat2N = 0;
  $lon2N = 0.569116399;
}
else if ($bssid2 == "d0:c2:82:7e:03"){ //AP4
  $lat2N = 0.462354353;
  $lon2N = 0.764216934;
}
else if ($bssid2 == "d0:c2:82:67:2a"){ //AP5
  $lat2N = 1;
  $lon2N = 0.235783066;
}
else if ($bssid2 == "d0:c2:82:2d:fc"){ //AP6
  $lat2N = 0.860217551;
  $lon1N = 0;
}
else if ($bssid2 == "d0:c2:82:2d:b2"){ //AP7
  $lat2N = 0.150543878;
  $lon2N = 1;
}
if ($bssid3 == "20:37:06:f6:4e"){ //AP1
  $lat3N = 0.612898231;
  $lon3N = 0.487809875;
}
else if ($bssid3 == "d0:c2:82:67:fa"){ //AP2
  $lat3N = 0.430108776;
  $lon3N = 0.186993298;
}
else if ($bssid3 == "d0:c2:82:2d:90"){ //AP3
  $lat3N = 0;
  $lon3N = 0.569116399;
}
else if ($bssid3 == "d0:c2:82:7e:03"){ //AP4
  $lat3N = 0.462354353;
  $lon3N = 0.764216934;
}
else if ($bssid3 == "d0:c2:82:67:2a"){ //AP5
  $lat3N = 1;
  $lon3N = 0.235783066;
}
else if ($bssid3 == "d0:c2:82:2d:fc"){ //AP6
  $lat3N = 0.860217551;
  $lon3N = 0;
}
else if ($bssid3 == "d0:c2:82:2d:b2"){ //AP7
  $lat3N = 0.150543878;
  $lon3N = 1;
}
if ($bssid4 == "20:37:06:f6:4e"){ //AP1
  $lat4N = 0.612898231;
  $lon4N = 0.487809875;
}
else if ($bssid4 == "d0:c2:82:67:fa"){ //AP2
  $lat4N = 0.430108776;
  $lon4N = 0.186993298;
}
else if ($bssid4 == "d0:c2:82:2d:90"){ //AP3
  $lat4N = 0;
  $lon4N = 0.569116399;
}
else if ($bssid4 == "d0:c2:82:7e:03"){ //AP4
  $lat4N = 0.462354353;
  $lon4N = 0.764216934;
}
else if ($bssid4 == "d0:c2:82:67:2a"){ //AP5
  $lat4N = 1;
  $lon4N = 0.235783066;
}
else if ($bssid4 == "d0:c2:82:2d:fc"){ //AP6
  $lat4N = 0.860217551;
  $lon4N = 0;
}
else if ($bssid4 == "d0:c2:82:2d:b2"){ //AP7
  $lat4N = 0.150543878;
  $lon4N = 1;
}
$checkDB1 = "SELECT BSSID1, SS1, Lat1, Long1, BSSID2, SS2, Lat2, Long2, BSSID3, SS3, Lat3, Long3, BSSID4, SS4, Lat4, Long4, Room_Number, Inner_Location
  FROM WiFI_Fingerprint_Testing_Set_PinPoint";
$result1 = mysqli_query($conn, $checkDB1);
if (!$result1) {
    die('Query failed to execute for some reason');
}
$sql1 = "INSERT INTO WiFI_Fingerprint_Testing_Set_PinPoint (BSSID1, SS1, Lat1, Long1, BSSID2, SS2, Lat2, Long2, BSSID3, SS3, Lat3, Long3, BSSID4, SS4, Lat4, Long4, Room_Number, Inner_Location)
			VALUES ('$bssid1', '$ss1', '$lat1', '$long1', '$bssid2', '$ss2', '$lat2', '$long2', '$bssid3', '$ss3', '$lat3', '$long3', '$bssid4', '$ss4', '$lat4', '$long4', '$location', '$Inner_Location');";
if ($conn->multi_query($sql1) === TRUE) {
  echo "successful\n";
}
else {
  echo "Error: " . $sql1 . "<br>" . $conn->error;
}
$checkDB2 = "SELECT BSSID1, SS1_Normalized, Lat1_Normalized, Lon1_Normalized, BSSID2, SS2_Normalized, Lat2_Normalized, Lon2_Normalized, BSSID3, SS3_Normalized, Lat3_Normalized, Lon3_Normalized,
BSSID4, SS4_Normalized, Lat4_Normalized, Lon4_Normalized, Room_Number, Inner_Location FROM WiFi_Fingerpring_Testing_Set_NN";
$result2 = mysqli_query($conn, $checkDB2);
if (!$result2) {
    die('Query failed to execute for some reason');
}
$sql2 = "INSERT INTO WiFi_Fingerpring_Testing_Set_NN (BSSID1, SS1_Normalized, Lat1_Normalized, Lon1_Normalized, BSSID2, SS2_Normalized, Lat2_Normalized, Lon2_Normalized,
  BSSID3, SS3_Normalized, Lat3_Normalized, Lon3_Normalized, BSSID4, SS4_Normalized, Lat4_Normalized, Lon4_Normalized, Room_Number, Inner_Location)
  VALUES ('$bssid1', '$ss1N', '$lat1N', '$lon1N', '$bssid2', '$ss2N', '$lat2N', '$lon2N', '$bssid3', $ss3N', $lat3N', '$lon3N', '$bssid4', '$ss4N', '$lat4N', '$lon4N', '$location', '$Inner_Location');";
if ($conn->multi_query($sql2) === TRUE) {
  echo "successful\n";
}
else {
  echo "Error: " . $sql2 . "<br>" . $conn->error;
}