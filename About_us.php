<script src="validation2.js"></script>

<html>
<title>About_us </title>
<head>
<link rel="stylesheet" type="text/css" href="css/admin1.css" />
<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>



    </head>

<style>	
.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}	

.about_des
  {
      
      text-align:justify;
      font-size:x-large;
      margin-left: 10%;
     margin-right: 10%;
      
  }
</style>

<body >
 <div class="header" >
            <img alt="logo"  class="logo_img" src="logo.png";  />
          <a href="index.php" style="text-decoration:none; color:white;">  
		  <h1 class="myheads">
                College Management System</h1></a>
        </div>
	
<img src="ouat_clg.jpg" alt="ouatclg" class="center" >

<p class="about_des">
			The Radhakrishnan University Education Commission of 1949 emphasised the need for establishing Agricultural Universities in India.,
			Subsequently, the indo-American team consistitued under the Chairmanship of Dr. K.R. Damle (1955), the then Vice-president of
			Indian Council of Agricultural Research, suggested a system of education for Indian as followed in the Land Grant Colleges of
			USA. The Planning Commission Committee felt the inadequacy of trained personnel for substantial output in agricultural operations
			with the then set up of research, education and extension in Agriculture, Animal Husbandry and allied fields. In course of time,
			these recommendations led to the creation of the agricultural universities to accomplish the integration of teaching, research and extension.<br />
			<br />
			In 1956, Dr. J.H. Longwell from the University of Misouri visited Orissa and had discussion with the State Government which resulted
			in a contract between the Government of India and the University of Missouri to provide assistance to the Agriculture and Veterinary
			Colleges of the State. In 1960, a decision was taken to establish an Agricultural University in Orissa in the pattern of the Land Grant
			Colleges of USA and Dr. Ide P. Trotter joined the Utkal Krishi Mahavidyalaya on 1st April, 1960, as a consultant in Educational
			Administration. President Elmer Ellies of the University of Missouri, visited the Agriculture and Veterinary Colleges of Orissa
			in 1961 and had discussion with the State Government for establishment of the Orissa University of Agriculture and Technology.
		</p>

<br>
<div id="googleMap" style="width:100%;height:400px;"></div>

<script>
function myMap() {
var mapProp= {
  center:new google.maps.LatLng(51.508742,-0.120850),
  zoom:5,
};
var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
</script>

<script src="https://goo.gl/maps/7e6ruPECExorxed57"></script>



        <div style="margin-bottom:200px;"></div>
</body>
	</html>