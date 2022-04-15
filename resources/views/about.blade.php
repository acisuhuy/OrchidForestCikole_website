@extends('layouts.main')
@section('container')
<!-- Css Boostrap -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
<link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/checkout/">
<!-- Custom -->
<link href="/css/style-about.css" rel="stylesheet">
<title>About</title>
<!-- Header -->

<section class="banner mantap">
  <h2 id="title"> Orchid Forest</h2>
</section>

<section class="header pt-lg-60 pb-60">
    <!-- About Container -->
  <div class="container mt-5 mantap">
  <img class="d-block mx-auto " src="asset/asset-logo.jpg" alt="" width="72" height="57">
   <div class="w3-container" id="about">
   <div class="w3-container w3-padding-64 w3-center" id="about">
    <h2>ABOUT THE ORCHID FOREST</h2>
        <p>Visit Orchid Forest Cikole where is located in Lembang, well known as the largest orchid garden in Indonesia, You must include Orchid Forest Cikole to your itinerary when visiting Lembang. This place offer unique activities and experiences for visitors at the mountain with blissful fresh air. You can get the free access to orchid house, rabbit fores and don't miss the opportunity to capture the best moment at instagrammable photo spots.</p>
        <p>Enjoy the beauty of a variety of orchids, pine trees that are lined up and blissful fresh air with your family and friends</p>
        <div class="w3-panel w3-leftbar w3-light-grey">
        <p><i>“Nature is pleased with simplicity." </i></p>
        <p>Sir Isaac Newton.</p>
        </div>
        <p><strong>Opening hours:</strong> everyday from 6am to 7pm.</p>
        <p><strong>Address:</strong>Cikole, Bandung, Jawa Barat, Indonesia</p>
     </div>
    </div>
  </div>

<section class="banner-1 ">
 
</section>

<!-- more about -->

    


<!-- Menu Container -->
<section class="header pt-lg-60 pb-50">
<div class="container mt-5 mantap">
  <div class="w3-container" id="menu">
    <div class="w3-content" style="max-width:700px">
    
        <h5 class="w3-center w3-padding-48"><span class="w3-tag w3-wide">THE MENU</span></h5>
    
        <div class="w3-row w3-center w3-card w3-padding">
        <a href="javascript:void(0)" onclick="openMenu(event, 'reguler');" id="myLink">
            <div class="w3-col s6 tablink">Reguler</div>
        </a>
        <a href="javascript:void(0)" onclick="openMenu(event, 'domestik');">
            <div class="w3-col s6 tablink">Domestik</div>
        </a>
        </div>

        <div id="reguler" class="w3-container menu w3-padding-48 w3-card">
        <h5>Tiket Masuk Reguler</h5>
        <p class="w3-text-grey">Dengan Biaya Rp.40.000</p><br>
        
        <h5>Tiket Promo Perhutani Weekday</h5>
        <p class="w3-text-grey">Dengan Biaya Rp.47.500</p><br>
        
        <h5>Tiket Promo Perhutani Weekend</h5>
        <p class="w3-text-grey">Dengan Biaya Rp.50.000</p><br>
        
        <h5>Tiket Promo putgolf all game</h5>
        <p class="w3-text-grey">Dengan Biaya Rp.120.000</p><br>
        
        <h5>Tiket Promo piknik</h5>
        <p class="w3-text-grey">Dengan Biaya Rp.99.000</p>
        </div>

        <div id="domestik" class="w3-container menu w3-padding-48 w3-card">
        <h5>Domestik Ticket</h5>
        <p class="w3-text-grey">With Price Rp.180.000</p><br>
        
        <h5>Event Weekday</h5>
        <p class="w3-text-grey">With Price Rp.220.000</p><br>
        
        <h5>Event Weekend</h5>
        <p class="w3-text-grey">With Price Rp.260.000</p><br>
        
        <h5>Package tour</h5>
        <p class="w3-text-grey">With Price Rp.280.000</p><br>
        
        <h5>package all game</h5>
        <p class="w3-text-grey">With Price Rp.300.000</p>
      </div>  
    </div>
  </div>
</div>
</section>

<!-- Team Container -->
<section class="BULAT">
 <div class="container mt-5 mantap">
    <div class="w3-container w3-padding-64 w3-center" id="team">
    <h2>SERVICE</h2>
    <p>Jika Membutuhkan Sesuatu Hubungi Contact dibawah terimakasih.</p>

    <div class="w3-row"><br>

    <div class="w3-quarter">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 300" xml:space="preserve" width="48" height="48"><path fill="#AA6148" d="M217.333 263.351a7.605 7.605 0 0 1-7.605 7.603H89.425a7.604 7.604 0 0 1-7.605-7.603v-49.03a7.604 7.604 0 0 1 7.605-7.605h120.303a7.605 7.605 0 0 1 7.605 7.605v49.03z"/><path fill="#F4F4F4" d="M89.425 129.577h120.303v77.14H89.425z"/><path fill="#AA6148" d="M81.869 67.383c-.01.164-.049 54.59-.049 54.59 0 4.2 3.405 7.604 7.605 7.604h120.303a7.604 7.604 0 0 0 7.605-7.604s-.04-54.426-.049-54.59H81.869z"/><path fill="#BC715C" d="M97.242 263.351v-49.03a7.603 7.603 0 0 1 7.605-7.605H89.559a7.604 7.604 0 0 0-7.605 7.605v49.03a7.604 7.604 0 0 0 7.605 7.603h15.288a7.603 7.603 0 0 1-7.605-7.603zM97.242 121.973s.038-54.426.049-54.59H82.003c-.011.164-.049 54.59-.049 54.59 0 4.2 3.405 7.604 7.605 7.604h15.288a7.604 7.604 0 0 1-7.605-7.604z"/><path fill="#F4F4F4" d="M228.478 56.91c0 5.688-4.609 10.473-10.299 10.473H81.82c-5.688 0-10.298-4.785-10.298-10.473 0-5.689 4.609-10.299 10.298-10.299h136.359c5.689 0 10.299 4.611 10.299 10.299zM217.333 46.611s0-17.566-17.262-17.566H99.535c-17.715 0-17.715 17.566-17.715 17.566h135.513z"/><path fill="#F9F9F9" d="M90.671 56.91c0-5.689 4.612-10.299 10.299-10.299 0 0 0-17.566 17.716-17.566H99.538c-17.716 0-17.716 17.566-17.716 17.566-5.687 0-10.299 4.611-10.299 10.299s4.612 10.473 10.299 10.473h19.148c-5.687 0-10.299-4.784-10.299-10.473z"/><path fill="#AA6148" d="M161.127 180.823c-9.934 9.937-23.687 12.297-30.713 5.273-7.02-7.026-4.664-20.775 5.275-30.711 9.936-9.936 23.684-12.297 30.708-5.272 7.027 7.026 4.669 20.775-5.27 30.71z"/><path fill="#BC715C" d="M140.792 160.109c8.569-8.569 19.962-11.486 27.444-7.627-.524-.847-1.119-1.652-1.838-2.37-7.025-7.024-20.773-4.664-30.708 5.272-9.939 9.936-12.295 23.685-5.275 30.711a13.005 13.005 0 0 0 3.266 2.355c-4.598-7.443-1.812-19.42 7.111-28.341z"/><path fill="#BC715C" d="M133.279 187.347c-2.287 0-4.175-1.828-4.246-4.141-.071-2.359 1.77-4.329 4.119-4.403l.546-.018c6.945-.208 10.113-.301 11.395-11.833 1.72-15.521 13.129-18.512 18.923-17.904 2.337.239 4.036 2.337 3.8 4.686a4.256 4.256 0 0 1-4.621 3.821c-1.418-.111-8.497-.109-9.656 10.343-2.096 18.906-12.206 19.207-19.588 19.43l-.537.016c-.047.003-.091.003-.135.003z"/><path fill="#F9F9F9" d="M89.425 130.079h16.011v76.638H89.425z"/><g><path fill="#161616" d="M209.728 275.49H89.425c-6.694 0-12.14-5.445-12.14-12.139v-7.682a4.535 4.535 0 1 1 9.07 0v7.682a3.072 3.072 0 0 0 3.069 3.068h120.303a3.072 3.072 0 0 0 3.069-3.068v-49.03a3.073 3.073 0 0 0-3.069-3.069H89.425a3.073 3.073 0 0 0-3.069 3.069v20.426a4.535 4.535 0 1 1-9.07 0v-20.426c0-6.694 5.446-12.14 12.14-12.14h120.303c6.694 0 12.14 5.446 12.14 12.14v49.03c-.001 6.694-5.447 12.139-12.141 12.139z"/><path fill="#161616" d="M209.728 211.252H89.425a4.535 4.535 0 0 1-4.535-4.535v-77.14a4.535 4.535 0 0 1 4.535-4.535h120.303a4.535 4.535 0 0 1 4.535 4.535v77.14a4.535 4.535 0 0 1-4.535 4.535zM93.96 202.181h111.232v-68.069H93.96v68.069z"/><path fill="#161616" d="M209.728 134.112H89.425c-6.694 0-12.14-5.445-12.14-12.139.038-54.571.046-54.686.058-54.875a4.535 4.535 0 0 1 4.527-4.25h135.415a4.536 4.536 0 0 1 4.529 4.29c.009.165.015.285.055 54.832-.001 6.697-5.447 12.142-12.141 12.142zM86.397 71.919c-.012 10.208-.031 35.397-.041 50.058a3.071 3.071 0 0 0 3.069 3.065h120.303a3.072 3.072 0 0 0 3.069-3.068c-.01-14.665-.031-39.846-.041-50.055H86.397z"/><path fill="#161616" d="M218.178 71.919H81.82c-8.179 0-14.833-6.732-14.833-15.009 0-8.179 6.654-14.834 14.833-14.834h136.358c8.179 0 14.835 6.655 14.835 14.834 0 8.277-6.656 15.009-14.835 15.009zM81.82 51.146a5.77 5.77 0 0 0-5.762 5.764c0 3.218 2.638 5.938 5.762 5.938h136.358c3.124 0 5.764-2.72 5.764-5.938a5.77 5.77 0 0 0-5.764-5.764H81.82z"/><path fill="#161616" d="M217.333 51.146H81.82a4.535 4.535 0 0 1-4.535-4.535c0-7.645 4.651-22.101 22.25-22.101h62.426a4.535 4.535 0 1 1 0 9.07H99.535c-8.129 0-11.249 4.711-12.443 8.495h124.996c-1.156-3.825-4.174-8.495-12.018-8.495h-17.186a4.535 4.535 0 1 1 0-9.07h17.186c17.241 0 21.797 14.457 21.797 22.101a4.533 4.533 0 0 1-4.534 4.535zM141.083 194.732c-5.322 0-10.215-1.77-13.875-5.427-8.929-8.938-6.611-25.244 5.275-37.128 11.888-11.883 28.191-14.203 37.122-5.271 4.469 4.469 6.241 10.946 4.99 18.237-1.153 6.718-4.797 13.423-10.259 18.886l-.001.001c-7.018 7.018-15.58 10.702-23.252 10.702zm14.713-44.129c-5.311 0-11.747 2.838-16.9 7.989-8.014 8.012-10.429 19.14-5.274 24.299 5.153 5.15 16.283 2.737 24.297-5.275l.001-.001c4.149-4.147 6.896-9.121 7.733-14.005.74-4.308-.136-7.962-2.463-10.29-1.84-1.841-4.443-2.717-7.394-2.717z"/><path fill="#161616" d="M132.346 187.964a4.536 4.536 0 0 1-.137-9.069l1.329-.034c7.147-.173 10.106-.245 11.412-11.964.741-6.658 3.245-11.641 7.439-14.808 5.756-4.345 12.319-3.394 13.045-3.274a4.538 4.538 0 0 1 3.722 5.225c-.415 2.455-2.722 4.103-5.179 3.729-.145-.021-3.536-.44-6.189 1.611-2.087 1.615-3.373 4.482-3.824 8.522-2.184 19.593-12.602 19.844-20.208 20.028l-1.267.034h-.143z"/></g></svg>
    <h3>Coffe Shop</h3>
    <p>+62 **</p>
    </div>

    <div class="w3-quarter">
    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48"><g data-name="29-officer"><path style="fill:#3b4ba6" d="M31.82 38.79 33 38v25h-3V40l1.82-1.21z"/><path style="fill:#495dcf" d="M22.46 34.22 22 33l5-2v2l4.1 4.92-.1.08-6 3-2.54-6.78zM59 51l2 4-5.1 1.7L49 59v-4l10-4z"/><path style="fill:#3b4ba6" d="m52 37 7 14-10 4V41l3-4z"/><path style="fill:#ffe4c2" d="M56 57v6h-7v-4l6.9-2.3.1.3z"/><path d="M41 59h1l3-1v-6.6l1-.4v-2H36v2l5 2zm11-22-3 4v22H33V38l6 3 2.54-6.78zm-9.5 7.83 1.5-1.54-2.07-.31L41 41l-.93 1.98-2.07.31 1.5 1.54-.35 2.17L41 45.98 42.85 47z" style="fill:#27326e"/><path style="fill:#3b4ba6" d="M45 51.4 41 53l-5-2v-2h10v2l-1 .4z"/><path d="M46 16.5V18c0 1.66-1.79 3-4 3h-.05c.03-.33.05-.66.05-1v-5h2c1.1 0 2 .67 2 1.5z" style="fill:#ffe4c2"/><path style="fill:#3b4ba6" d="M45 51.4V58l-3 1h-1v-6l4-1.6z"/><path d="M44 13v2h-2c-9.95 0-14-3-16-7 0 0-1 5-4 6v1h-2v-2a12 12 0 1 1 24 0z" style="fill:#845335"/><path style="fill:#f7f7f7" d="m44 43.29-1.5 1.54.35 2.17L41 45.98 39.15 47l.35-2.17-1.5-1.54 2.07-.31L41 41l.93 1.98 2.07.31z"/><path d="M42 15v5c0 .34-.02.67-.05 1a9.944 9.944 0 0 1-2.88 6.07 9.983 9.983 0 0 1-11.92 1.67 9.992 9.992 0 0 1-5.1-7.74c-.03-.33-.05-.66-.05-1v-6c3-1 4-6 4-6 2 4 6.05 7 16 7z" style="fill:#ffe4c2"/><path style="fill:#495dcf" d="M41.54 34.22 39 41l-6-3 4-5v-2l5 2-.46 1.22z"/><path d="M37 31v2l-4 5-1.18.79-.72-.87L27 33v-4l.15-.26a9.964 9.964 0 0 0 9.7 0L37 29z" style="fill:#ffe4c2"/><path d="M23 59h1l3-1v-6.6l1-.4v-2H18v2l5 2zm8.1-21.08.72.87L30 40v23H15V41l-3-4 10.46-2.78L25 41l6-3z" style="fill:#27326e"/><path style="fill:#3b4ba6" d="M27 51.4 23 53l-5-2v-2h10v2l-1 .4z"/><path style="fill:#3b4ba6" d="M27 51.4V58l-3 1h-1v-6l4-1.6z"/><path d="M22.05 21H22c-2.21 0-4-1.34-4-3v-1.5c0-.83.9-1.5 2-1.5h2v5c0 .34.02.67.05 1zM15 59v4H8v-6l.1-.3L15 59z" style="fill:#ffe4c2"/><path style="fill:#495dcf" d="M15 55v4l-6.9-2.3L3 55l2-4 10 4z"/><path style="fill:#3b4ba6" d="M15 41v14L5 51l7-14 3 4z"/><path style="fill:#f7f7f7" d="M18 44h9v2h-9z"/><path style="fill:#3b4ba6" d="M19 51.4V58l3 1h1v-6l-4-1.6zM37 51.4V58l3 1h1v-6l-4-1.6z"/><path d="M44 15h-1c1.1 0 2 .67 2 1.5V18c0 1.411-1.3 2.583-3.045 2.905V21H42c2.21 0 4-1.34 4-3v-1.5c0-.83-.9-1.5-2-1.5z" style="fill:#ffefde"/><path d="M24 14.5a12.157 12.157 0 0 0 2-4.5c2 4 6.05 7 16 7v-2c-9.95 0-14-3-16-7a12.157 12.157 0 0 1-2 4.5 6.117 6.117 0 0 1-.406.458l-.026.028a5.018 5.018 0 0 1-.409.364c-.024.019-.047.042-.072.061a4.189 4.189 0 0 1-.415.274c-.037.022-.071.048-.108.068A3.508 3.508 0 0 1 22 14v6c0 .34.02.67.05 1a9.992 9.992 0 0 0 5.1 7.74A9.842 9.842 0 0 0 32 30a9.995 9.995 0 0 0 1-.064 9.79 9.79 0 0 1-3.85-1.2A9.992 9.992 0 0 1 24.05 21c-.03-.33-.05-.66-.05-1v-5.5z" style="fill:#f7d2a3"/><path d="M40 14.953V20c0 .34-.02.67-.05 1a9.944 9.944 0 0 1-2.88 6.07A9.959 9.959 0 0 1 31 29.936 9.995 9.995 0 0 0 32 30a10.046 10.046 0 0 0 7.07-2.93A9.944 9.944 0 0 0 41.95 21c.03-.33.05-.66.05-1v-5a43.9 43.9 0 0 1-2-.047zM19 18v-1.5c0-.83.9-1.5 2-1.5h-1c-1.1 0-2 .67-2 1.5V18c0 1.66 1.79 3 4 3h.05v-.095C20.3 20.583 19 19.411 19 18z" style="fill:#ffefde"/><path d="M36.85 28.74a9.964 9.964 0 0 1-9.7 0L27 29v4l2 2.4V35a4 4 0 0 1 4-4h4v-2z" style="fill:#f7d2a3"/><path d="M40.986 13.065A16.986 16.986 0 0 1 26 5l-2.778 2.778A10.986 10.986 0 0 0 20.028 15H22v-1c3-1 4-6 4-6 2 4 6.05 7 16 7v-.932a.994.994 0 0 0-1.014-1.003z" style="fill:#5e3117"/><path d="M43.95 12a11.978 11.978 0 0 0-16.867-9.939c.822 5.57 8.047 9.921 16.867 9.939z" style="fill:#9a6948"/><ellipse cx="37" cy="17" rx="1" ry="2" style="fill:#27326e"/><ellipse cx="27" cy="17" rx="1" ry="2" style="fill:#27326e"/><path d="m27 31-1.963.785V33l1.563 2.083a2 2 0 0 1-.706 2.989l-1.677.838L25 41l6-3 .1-.08L27 33zM37.438 35.083 39 33v-1.2l-2-.8v2l-4 5 6 3 .789-2.106-1.646-.822a2 2 0 0 1-.705-2.989zM49 55v4l2.942-.981-.241-4.099L49 55z" style="fill:#3b4ba6"/><path d="M51.129 44.194a6 6 0 0 1 1.19-3.952L53.1 39.2 52 37l-3 4v14l2.7-1.08z" style="fill:#313f8a"/><path style="fill:#3b4ba6" d="M15 55v4l-2.942-.981.241-4.099L15 55z"/><path d="M12.871 44.194a6 6 0 0 0-1.19-3.952L10.9 39.2 12 37l3 4v14l-2.7-1.08z" style="fill:#313f8a"/><path d="M53.051 59.316 56 58.333V57l-.1-.3L49 59v4h2v-.838a3 3 0 0 1 2.051-2.846zM10.949 59.316 8 58.333V57l.1-.3L15 59v4h-2v-.838a3 3 0 0 0-2.051-2.846z" style="fill:#f7d2a3"/><path style="fill:#1c234d" d="M41 59h-1l-3-1v1l3 1h2l3-1v-1l-3 1h-1z"/><path d="M40.106 51.553a2 2 0 0 0 1.788 0L45 50v-1h-8v1z" style="fill:#495dcf"/><path style="fill:#313e8a" d="M41 53v2l4-1.6v-2L41 53z"/><path d="m40 52.6-3-1.2v2l1.743.7A2 2 0 0 1 40 55.954V59h1v-6z" style="fill:#2c387a"/><path style="fill:#1c234d" d="M36 51v7h1v-6.6l-1-.4z"/><rect x="38" y="49" width="3" height="1" rx=".5" ry=".5" style="fill:#5e73f0"/><rect x="42" y="49" width="2" height="1" rx=".5" ry=".5" style="fill:#5e73f0"/><path style="fill:#1c234d" d="M23 59h-1l-3-1v1l3 1h2l3-1v-1l-3 1h-1z"/><path d="M22.106 51.553a2 2 0 0 0 1.788 0L27 50v-1h-8v1z" style="fill:#495dcf"/><path style="fill:#313e8a" d="M23 53v2l4-1.6v-2L23 53z"/><path d="m22 52.6-3-1.2v2l1.743.7A2 2 0 0 1 22 55.954V59h1v-6z" style="fill:#2c387a"/><path style="fill:#1c234d" d="M18 51v7h1v-6.6l-1-.4z"/><rect x="20" y="49" width="3" height="1" rx=".5" ry=".5" style="fill:#5e73f0"/><rect x="24" y="49" width="2" height="1" rx=".5" ry=".5" style="fill:#5e73f0"/><path style="fill:#2c387a" d="m30 42 3-2v-2l-1.18.79L30 40v2z"/><path style="fill:#1c234d" d="m39.984 42.993.021-.003 3.648-8.209-2.113-.561L39 41l-6-3v2l6.984 2.993zM30 40l1.82-1.21-.72-.87-.1.08-6 3-2.54-6.78-2.192.583L23 43l2.257-.9A2 2 0 0 1 28 43.954V63h2V40z"/><path d="m61.9 54.553-9-18a1 1 0 0 0-.639-.512v-.007l-9.389-2.5.068-.178a1 1 0 0 0-.566-1.281L38 30.323v-1.115a11.017 11.017 0 0 0 4.819-7.274C45.185 21.619 47 19.982 47 18v-1.5a2.539 2.539 0 0 0-2-2.352V13a13 13 0 0 0-26 0v1.148a2.539 2.539 0 0 0-2 2.352V18c0 1.982 1.815 3.619 4.181 3.934A11.017 11.017 0 0 0 26 29.208v1.115l-4.371 1.748a1 1 0 0 0-.566 1.281l.068.178-9.389 2.5v.007a1 1 0 0 0-.639.512l-9 18a1 1 0 0 0 .579 1.4L7 57.388V63a1 1 0 0 0 1 1h40v-1a1 1 0 0 0 1 1h7a1 1 0 0 0 1-1v-5.612l4.316-1.44a1 1 0 0 0 .579-1.4zM40.72 33.565l-2.266 6.043-3.9-1.949 3.227-4.034A1 1 0 0 0 38 33v-.523zm.815 11.563-.052-.028a1 1 0 0 0-.966 0l-.052.028.022-.138a1 1 0 0 0-.271-.859l-.142-.145.151-.023a1 1 0 0 0 .754-.564l.021-.045.021.045a1 1 0 0 0 .754.564l.151.023-.142.145a1 1 0 0 0-.271.859zM45 18c0 .851-.85 1.59-2 1.873V16h1c.62 0 1 .323 1 .5zm-26 0v-1.5c0-.177.38-.5 1-.5h1v3.873c-1.15-.283-2-1.022-2-1.873zm4 2v-5.346a8.121 8.121 0 0 0 3.306-4.254c2.2 2.93 5.618 4.629 10.562 5.292l.266-1.982c-5.31-.712-8.468-2.609-10.239-6.153a1 1 0 0 0-1.875.25c-.25 1.233-1.336 4.582-3.336 5.249A1 1 0 0 0 21 14v-1a11 11 0 0 1 22 0v1h-1c-1.026 0-2.013-.033-2.93-.1l-.14 2c.657.047 1.356.072 2.07.087V20a9 9 0 0 1-18 0zm9 11a10.927 10.927 0 0 0 4-.764v2.413l-3.684 4.6-.3.2L28 32.638v-2.4A10.927 10.927 0 0 0 32 31zm-6 1.477V33a1.006 1.006 0 0 0 .231.641l3.31 3.971-4 2-2.261-6.047zM14 62H9v-3.946l5 1.667zm0-4.388-9.59-3.2 1.073-2.142 6.146 2.459.742-1.858-5.99-2.4 5.79-11.58L14 41.333zm-.312-20.028 8.148-2.173 2.227 5.941a1 1 0 0 0 1.384.543L29 40.118V49a1 1 0 0 0-1-1H18a1 1 0 0 0-1 1v2a1 1 0 0 0 .629.929l.371.148V58a1 1 0 0 0 .684.948l3 1A1 1 0 0 0 22 60h2a1 1 0 0 0 .316-.052l3-1A1 1 0 0 0 28 58v-5.923l.371-.148A1 1 0 0 0 29 51v11H16V41a1 1 0 0 0-.2-.6zM23 51.923l-4-1.6V50h8v.323zm-3 .954 2 .8v4.269l-2-.667zm4 .8 2-.8v4.4l-2 .667zM48.2 40.4a1 1 0 0 0-.2.6v21H34V45h-2v17h-1V40.535l2.072-1.381 5.481 2.746a1 1 0 0 0 .812.036 1.085 1.085 0 0 0 .135-.089l-.1.224-1.546.238a1 1 0 0 0-.565 1.686l1.148 1.176-.274 1.673a1 1 0 0 0 1.471 1.036L41 47.117l1.371.758a.988.988 0 0 0 .483.125 1 1 0 0 0 .988-1.161l-.274-1.673 1.148-1.176a1 1 0 0 0-.565-1.686l-1.546-.238-.7-1.491a.985.985 0 0 0-1.557-.32l1.816-4.844 8.148 2.173zM55 62h-5v-2.279l5-1.667zm-5-4.388V41.333l1.829-2.433 5.79 11.58-6.49 2.6.742 1.858 6.646-2.659 1.073 2.146z"/><path d="M32 41h2v2h-2zM35 49v2a1 1 0 0 0 .629.929l.371.148V58a1 1 0 0 0 .684.948l3 1A1 1 0 0 0 40 60h2a1 1 0 0 0 .316-.052l3-1A1 1 0 0 0 46 58v-5.923l.371-.148A1 1 0 0 0 47 51v-2a1 1 0 0 0-1-1H36a1 1 0 0 0-1 1zm3 8.279v-4.4l2 .8v4.269zm6 0-2 .667v-4.269l2-.8zM37 50h8v.323l-4 1.6-4-1.6zM18 44h9v2h-9z"/></g></svg>
    <h3>Security</h3>
    <p>+62 **</p>
    </div>

    <div class="w3-quarter">
    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48"><g fill="#79ccb8"><path fill="#C80A50" d="M30 4h4a8 8 0 0 1 8 8v12a2 2 0 0 1-2 2H24a2 2 0 0 1-2-2V12a8 8 0 0 1 8-8z"/><path fill="#0A5078" d="M22 26h20v22H22z"/><path fill="#00A0C8" d="M31 26h2v22h-2z"/><path fill="#00325A" d="M25 46v-2.34c2.33-.83 4-3.05 4-5.66 1.1 0 2-.9 2-2s-.9-2-2-2v-4c0-1.54-.58-2.94-1.54-4H22v20h3zM35 38c0 2.61 1.67 4.83 4 5.66V46h3V26h-5.46A5.93 5.93 0 0 0 35 30v4c-1.1 0-2 .9-2 2s.9 2 2 2z"/><path fill="#D2AA82" d="M32 30a4 4 0 0 1-4-4v-4h8v4a4 4 0 0 1-4 4z"/><path fill="#F0C8A0" d="M30 10h-2a4 4 0 0 0-4 4v4a6 6 0 0 0 6 6h4a6 6 0 0 0 6-6v-4h-6a4 4 0 0 1-4-4z"/><path fill="#D2AA82" d="M24 18v-4a2 2 0 1 0 0 4zM40 18v-4a2 2 0 1 1 0 4z"/><g><path fill="#DC9600" d="M42 24h4a6 6 0 0 1 6 6v4H36v-4a6 6 0 0 1 6-6z"/><path fill="#00A0C8" d="M34 46v14h-6v-8a6 6 0 0 1 6-6zM54 60H34V46h20z"/><path fill="#0082AA" d="M35 60v-7.5a.5.5 0 0 0-1 0V60h1zM54 60v-7.5a.5.5 0 0 0-1 0V60h1z"/><path fill="#0082AA" d="M32.5 46.189a5.947 5.947 0 0 0-1.5.614V60h6v-8a6.002 6.002 0 0 0-4.5-5.811z"/><path fill="#0A5078" d="M45 50h-2l-1 10h4z"/><path fill="#0082AA" d="m44 50-2.293 2.293c-.63.63-1.707.184-1.707-.707V46h4v4zM44 50l2.293 2.293c.63.63 1.707.184 1.707-.707V46h-4v4z"/><path fill="#D2AA82" d="M44 50a4 4 0 0 0 4-4v-4h-8v4a4 4 0 0 0 4 4z"/><path fill="#F0C8A0" d="M40 28h8a2 2 0 0 1 2 2v2a2 2 0 0 0 2 2v4a6 6 0 0 1-6 6h-4a6 6 0 0 1-6-6v-4a2 2 0 0 0 2-2v-2a2 2 0 0 1 2-2z"/><path fill="#D2AA82" d="M52 38v-4a2 2 0 1 1 0 4zM36 38v-4a2 2 0 1 0 0 4z"/><path fill="#00A0C8" d="M60 52v8h-6V46a6 6 0 0 1 6 6z"/><path fill="#DC9600" d="M49 22h-7a4 4 0 0 0-4 4v2h8a4 4 0 0 0 4-4v-1a1 1 0 0 0-1-1z"/></g><g><path fill="#0A5078" d="M18 24h4a6 6 0 0 1 6 6v4H12v-4a6 6 0 0 1 6-6z"/><path fill="#FAB400" d="M30 60H10V46h20z"/><path fill="#00A0C8" d="M21 50h-2l-1 10h4z"/><path fill="#DC9600" d="m20 50-2.293 2.293c-.63.63-1.707.184-1.707-.707V46h4v4zM20 50l2.293 2.293c.63.63 1.707.184 1.707-.707V46h-4v4z"/><path fill="#D2AA82" d="M20 50a4 4 0 0 0 4-4v-4h-8v4a4 4 0 0 0 4 4z"/><path fill="#FAB400" d="M36 52v8h-6V46a6 6 0 0 1 6 6zM10 46v14H4v-8a6 6 0 0 1 6-6z"/><path fill="#F0C8A0" d="M16 28h8a2 2 0 0 1 2 2v2a2 2 0 0 0 2 2v4a6 6 0 0 1-6 6h-4a6 6 0 0 1-6-6v-4a2 2 0 0 0 2-2v-2a2 2 0 0 1 2-2z"/><path fill="#D2AA82" d="M28 38v-4a2 2 0 1 1 0 4zM12 38v-4a2 2 0 1 0 0 4z"/></g><g><path fill="#DC9600" d="M11 60v-7.5a.5.5 0 0 0-1 0V60h1z"/></g><g><path fill="#DC9600" d="M30 60v-7.5a.5.5 0 0 0-1 0V60h1z"/></g></svg>
    <h3>Office</h3>
    <p>+62 **</p>
    </div>

    <div class="w3-quarter">
    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48"><g fill="#79ccb8"><path d="M31.234 24.072C40.859 29.333 43.315 15.289 48 10.965c-7.375-.301-20.832 2.589-16.766 13.107zM0 .138c5.36 7.709 6.56 27.045 22.285 22.031C30.013 6.762 10.953-1.162 0 .138z"/></g><path d="M42.516 13.416a.751.751 0 0 0-1.028-.261A35.76 35.76 0 0 0 26 31.887C23.232 16.047 14.325 7.362 7.1 2.805a.749.749 0 1 0-.8 1.267c7.424 4.684 16.692 13.9 18.679 31.211v.006a.612.612 0 0 0 .035.11.717.717 0 0 0 .054.158.55.55 0 0 0 .06.077.73.73 0 0 0 .117.136c.026.021.059.035.088.054a.752.752 0 0 0 .16.081c.012 0 .021.013.032.016a.748.748 0 0 0 .193.026.789.789 0 0 0 .084-.005c.021 0 .037-.015.057-.019a.694.694 0 0 0 .174-.056.766.766 0 0 0 .085-.046.747.747 0 0 0 .136-.115.734.734 0 0 0 .061-.064.753.753 0 0 0 .1-.187c.007-.019.02-.035.026-.055v-.007a34.382 34.382 0 0 1 15.814-20.951.747.747 0 0 0 .261-1.026z" fill="#3daa9d"/><path fill="#c6c6c6" d="M37.919 36.219H13.492L16.125 48h19.161l2.633-11.781z"/><path d="M36.88 32.2H14.532a3 3 0 0 0-3 3v1.018H39.88V35.2a3 3 0 0 0-3-3z" fill="#e2e2e2"/></svg>
    <h3>Cleaning</h3>
    <p>+62 **</p>
    </div>

    </div>
    </div>
  </div>  
</section>


<!-- JS -->
<script>
// Tabbed Menu
function openMenu(evt, menuName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("menu");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" w3-dark-grey", "");
  }
  document.getElementById(menuName).style.display = "block";
  evt.currentTarget.firstElementChild.className += " w3-dark-grey";
}
document.getElementById("myLink").click();
</script>
@endsection