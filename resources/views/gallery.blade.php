@extends('layouts.main')
@section('container')
<title>Gallery</title>
<!-- Header -->
<!DOCTYPE html>
<html>
<head>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1 {font-family: "Montserrat", sans-serif}
img {margin-bottom: -7px}
.w3-row-padding img {margin-bottom: 12px}
</style>
</head>
<body>



<!-- !PAGE CONTENT! -->
<div class="w3-content" style="max-width:1500px">

<!-- Header -->
<div class="container mt-5 mantap">
<div class="w3-opacity">
<div class="w3-clear"></div>
<header class="w3-center w3-margin-bottom">
  <h1><b>PHOTOLIO</b></h1>
  <p><b>"The tree which moves some to tears of joy is in the eyes of others only a green thing which stands in the way. Some see nature all ridicule and deformity, and by these I shall not regulate my propositions. And some see no nature at all. But to the eyes of the man of imagination, nature is imagination itself." 

-William Blake.</b></p>
<hr>
</div>
  <!-- <p class="w3-padding-16"><button class="w3-button w3-black" onclick="myFunction()">Toggle Grid Padding</button></p> -->
</header>
</div>

<!-- Photo Grid -->
<section class="header pt-lg-60 pb-50">
  <div class="container mt-5 mantap">
    <div class="w3-row-padding" id="myGrid" style="margin-bottom:128px">
    <div class="w3-third">    
        <img src="https://images.pexels.com/photos/775201/pexels-photo-775201.jpeg?cs=srgb&dl=pexels-kaique-rocha-775201.jpg&fm=jpg" style="width:100%">
        <img src="https://images.pexels.com/photos/775200/pexels-photo-775200.jpeg?cs=srgb&dl=pexels-kaique-rocha-775200.jpg&fm=jpg" style="width:100%">
        <img src="https://scontent.fbdo9-1.fna.fbcdn.net/v/t39.30808-6/274710184_3293230940913087_2225856725583326185_n.jpg?_nc_cat=110&ccb=1-5&_nc_sid=a26aad&_nc_ohc=Bv4Jl_HzetMAX90050m&_nc_ht=scontent.fbdo9-1.fna&oh=00_AT8pUBTR8QvLkATqOwoQhGgV8mRO875izJxvUOw7u71vsg&oe=62590225" style="width:100%">
        <img src="https://scontent.fbdo9-1.fna.fbcdn.net/v/t39.30808-6/273791408_3281511182085063_5368718905488975585_n.jpg?_nc_cat=104&ccb=1-5&_nc_sid=a26aad&_nc_ohc=QFVgxbDpj4oAX__BXQm&_nc_ht=scontent.fbdo9-1.fna&oh=00_AT9RUmihZGet7wYWbi_vE2_BDbyTAo108kM9LXhibU55Yg&oe=6259866D" style="width:100%">
        <img src="https://scontent.fbdo9-1.fna.fbcdn.net/v/t39.30808-6/269259526_3234706970098818_8041887736327606179_n.jpg?_nc_cat=109&ccb=1-5&_nc_sid=a26aad&_nc_ohc=wTyBfj2FLpQAX_S4ShL&tn=6G4UlOS-SMtB4r4C&_nc_ht=scontent.fbdo9-1.fna&oh=00_AT_OvQ6Pjoo85nPiN5GZg25lLqG3ilWV6YoqNac7c0ZD1A&oe=62586244" style="width:100%">
        <img src="https://scontent.fbdo9-1.fna.fbcdn.net/v/t39.30808-6/263737245_3223757127860469_2910068544899010733_n.jpg?_nc_cat=103&ccb=1-5&_nc_sid=a26aad&_nc_ohc=4_FX9yiB0T0AX_dX9Fd&_nc_ht=scontent.fbdo9-1.fna&oh=00_AT_Dda-HWyRn6ynrvoDRxLIFKncM3jRBXolfYjHZsP7UVg&oe=6259C5D5" style="width:100%">
        <img src="https://scontent.fbdo9-1.fna.fbcdn.net/v/t1.6435-9/119507255_2851253438444175_1049157080590827020_n.jpg?_nc_cat=102&ccb=1-5&_nc_sid=a26aad&_nc_ohc=FksAPWmPZn0AX-v2JE0&_nc_ht=scontent.fbdo9-1.fna&oh=00_AT9mPrXV9tnuihJtxkQbhdXUSYcZgrlr-nV2xABwwaAIsw&oe=627BA407" style="width:100%">
    </div>

    <div class="w3-third">
        <img src="https://scontent.fbdo9-1.fna.fbcdn.net/v/t1.6435-9/186496829_3051860931716757_413238326353021504_n.jpg?_nc_cat=105&ccb=1-5&_nc_sid=a26aad&_nc_ohc=99l3cAnaWD4AX_nuhZS&_nc_ht=scontent.fbdo9-1.fna&oh=00_AT84sqY8rive_DfIUQWEtF4Cxefx3ylrEGgYAMV9w2igSg&oe=627B5CEC" style="width:100%">
        <img src="https://images.pexels.com/photos/4671848/pexels-photo-4671848.jpeg?cs=srgb&dl=pexels-ekaterina-belinskaya-4671848.jpg&fm=jpg" style="width:100%">
        <img src="https://scontent.fbdo9-1.fna.fbcdn.net/v/t1.6435-9/124283358_2902539979982187_2580234134156069386_n.jpg?_nc_cat=102&ccb=1-5&_nc_sid=a26aad&_nc_ohc=-R65j8qbnFAAX-QXoGw&tn=6G4UlOS-SMtB4r4C&_nc_ht=scontent.fbdo9-1.fna&oh=00_AT9cx0IMni-SLAYaehxFoysVk6ZWMCncqIjaCFVr9zFOCg&oe=627B96C6" style="width:100%">
        <img src="https://scontent.fbdo9-1.fna.fbcdn.net/v/t39.30808-6/277225254_3314074638828717_471442657607280921_n.jpg?_nc_cat=101&ccb=1-5&_nc_sid=a26aad&_nc_ohc=4Pqs35quVGoAX-dJYgk&_nc_ht=scontent.fbdo9-1.fna&oh=00_AT9AgGDB3O25QhNMYcGIF0rVwvqZAYgAGZuEBhsc3q5CEA&oe=62591906" style="width:100%">
        <img src="https://scontent.fbdo9-1.fna.fbcdn.net/v/t39.30808-6/274880257_3295257687377079_4654398136098418302_n.jpg?_nc_cat=106&ccb=1-5&_nc_sid=a26aad&_nc_ohc=qlob47T-7k0AX9mJcRb&_nc_ht=scontent.fbdo9-1.fna&oh=00_AT8pt-X75DB6EjGh79y3Gke6ynxrVGmq2dXPND8yu4yxig&oe=6258F484" style="width:100%">
        <img src="https://scontent.fbdo9-1.fna.fbcdn.net/v/t39.30808-6/269227714_3234706966765485_4610398554365873923_n.jpg?_nc_cat=108&ccb=1-5&_nc_sid=a26aad&_nc_ohc=3Rdfcm4hIwgAX96kpll&tn=6G4UlOS-SMtB4r4C&_nc_ht=scontent.fbdo9-1.fna&oh=00_AT8d7a9WnlUyn67z5ltX0Awn8gOIxlD2IeCNV4sLQpToaQ&oe=625A1F58" style="width:100%">
        <img src="https://scontent.fbdo9-1.fna.fbcdn.net/v/t1.6435-9/158094172_2996343330601851_4133246998906731739_n.jpg?_nc_cat=100&ccb=1-5&_nc_sid=a26aad&_nc_ohc=83A9BKL7BU4AX_gqAUT&_nc_ht=scontent.fbdo9-1.fna&oh=00_AT_AkR5ioMv04hh4p0rjxIb2pgcr31xVV37rPOnfmF7mig&oe=627AAC5F" style="width:100%">
    </div>

    <div class="w3-third">
        <img src="https://scontent.fbdo9-1.fna.fbcdn.net/v/t1.6435-9/190193584_3059738277595689_7571431869425449102_n.jpg?_nc_cat=111&ccb=1-5&_nc_sid=a26aad&_nc_ohc=t6zorSWPO_QAX81HSLP&_nc_ht=scontent.fbdo9-1.fna&oh=00_AT9DyXHwWHFd9gRel6KaxpQ1mOQ6L6iF5vf_qZqkuMcQjQ&oe=62788D79" style="width:100%">
        <img src="https://cdn.idntimes.com/content-images/post/20180321/rengga-pasaribu28-268760677b46031ea8af875f88b7188a.jpg" style="width:100%">
        <img src="asset/asset1.jpg" style="width:100%">
        <img src="https://scontent.fbdo9-1.fna.fbcdn.net/v/t1.6435-9/118651827_2840154569554062_6072272183716076047_n.jpg?_nc_cat=110&ccb=1-5&_nc_sid=a26aad&_nc_ohc=TIUaUs2M9BMAX-xTxl2&_nc_oc=AQld804u_NbJU0H-5fV5v9ZwDs7OMqSlSGXXgyuMgxrHhz94QV8TCtSKjRPf6aLODjo&_nc_ht=scontent.fbdo9-1.fna&oh=00_AT8cuSs7LhjEFPjC3HuT9P0FJYUxpo3SHlnrCbuZvtAEZA&oe=627A913E" style="width:100%">
        <img src="https://scontent.fbdo9-1.fna.fbcdn.net/v/t39.30808-6/271131018_3248966478672867_8119013211760213117_n.jpg?_nc_cat=107&ccb=1-5&_nc_sid=a26aad&_nc_ohc=pTILOeT3nkAAX8tBIsK&tn=6G4UlOS-SMtB4r4C&_nc_ht=scontent.fbdo9-1.fna&oh=00_AT_4tRe_XBep92_7KfM9TXVKPz9IpHxfgr1ski4XG_D_Xw&oe=6258F6C3" style="width:100%">
        <img src="https://scontent.fbdo9-1.fna.fbcdn.net/v/t39.30808-6/272825151_3267924586777056_8296147153730196323_n.jpg?_nc_cat=103&ccb=1-5&_nc_sid=a26aad&_nc_ohc=3jhOAIDFpZ8AX9AGRjR&tn=6G4UlOS-SMtB4r4C&_nc_ht=scontent.fbdo9-1.fna&oh=00_AT8XCJdBcYT7Up3QMf5RuTAOctI9eH94nWDOsMoIXAu6PA&oe=6258BD4F" style="width:100%">
        <img src="https://scontent.fbdo9-1.fna.fbcdn.net/v/t1.6435-9/159314478_2996343313935186_7825684685411985128_n.jpg?_nc_cat=108&ccb=1-5&_nc_sid=a26aad&_nc_ohc=YAkYqGGL92sAX-3au10&_nc_ht=scontent.fbdo9-1.fna&oh=00_AT_Mh6xcEjL_kYMZn8iC99LOtI_iTqgOid9AGl5mFK1sCg&oe=62795275" style="width:100%">
    </div>
    </div>
  </div>
</section>

<div class="w3-container w3-padding-64 w3-light-grey w3-center w3-opacity w3-xlarge" style="margin-top:128px"> 
  <i class="fa fa-facebook-official w3-hover-opacity"></i>
  <i class="fa fa-instagram w3-hover-opacity"></i>
  <i class="fa fa-pinterest-p w3-hover-opacity"></i>
  <p class="w3-medium">Terimakasih Telah Mengujungi Website kami <a href="/review" target="_blank" class="w3-hover-text-green">www.orchidforestcikole.com</a></p>
</div>
<!-- End Page Content -->
</div>


 
<!-- <script>
// Toggle grid padding
function myFunction() {
  var x = document.getElementById("myGrid");
  if (x.className === "w3-row") {
    x.className = "w3-row-padding";
  } else { 
    x.className = x.className.replace("w3-row-padding", "w3-row");
  }
}

// Open and close sidebar
function w3_open() {
  document.getElementById("mySidebar").style.width = "100%";
  document.getElementById("mySidebar").style.display = "block";
}

function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}
</script> -->

</body>
</html>

@endsection