
<?php require_once('../idToken.php');
      require_once('../accessToken.php');
//This example Token is generated by Secuuth, this value will be loaded on form post action
$token = 'eyJhbGciOiJSUzI1NiIsInR5cCI6IkpXVCJ9.eyJzdWIiOiI1OGM5ZDRhOC1iYTM0LTQxYmEtYjgwNS0xNThjMWYzNGZkYTkiLCJhdWQiOiI5MmFkYWFjZC1kMjUyLTQ3NTctOWFjMi0yZDQ4ZDdlYzM3YmIiLCJpc3MiOiJodHRwczovL3d3dy5zZWN1dXRoLmlvIiwiZXhwIjoxNjM1MTcyMTQwNDk5LCJqdGkiOiJiMzE1MGFlZi0xM2I0LTRmZGQtOTI2Ni04OTgxMWY0YzkwZGUiLCJ0eXAiOiJJZF90b2tlbiIsInNpZ25Jbk1vZGUiOjAsInVzZXJJZCI6ImRlZXBheWFuLnRoYWt1ckBzZWN1dXRoLmlvIiwiYXV0aF90aW1lIjoiIiwiaWF0IjoxNjM1MTY4NTQwfQ.SuGzKac763ciyizxO2Z5pSyEZJTmHp5kHvh9MJyonbmKF1kYsJ-L9DWyHMeMD_VkSiVdxAbBi-M85dj0ZhtYIcHJO3_KK7q4AVIY2wOm5u2H_OBElTTd-FWnwLVrTZU37Oew5mMxQL1-Bz9V3lZWEeiHWg7-QTAK3As_o2ahCgTWjadM_ZiMfvbj47lE7geg0RTdjvCUMYwyNCOkCuV6c4yx447zvvPxM4__ywjOmAxca9ysL6xjvyERHiasr6ru2fmdIw5iz1zr9B9YftgwYBR-DEjK4_lYDg3_n_cDCi5GVHXPwny7xMaac8v8ulC3yLAXshU9ehbUceqd44ZsHA';
$myAuth = new idToken();
$myToken = $myAuth->decodeToken($token);
//print_r($myToken); 
//echo $myToken->userId;
echo $myToken->iss;


