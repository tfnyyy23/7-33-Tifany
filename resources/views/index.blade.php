@extends('layouts.main')

@section('container')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <link rel="stylesheet" type="text/css" href="/css/all.css">
    
</head>
<body>

    <!-- banner -->
     <section class="banner">
         <h2>WELCOME TO MY WEBSITE</h2>
     </section>  

     <!-- about -->
     <section class="about">
         <div class="container">
             <h3>ABOUT</h3>
             <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. <strong>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</strong>, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
         </div>
     </section>

     <!-- service -->
     <section class="service">
         <div class="container">
             <h3>SERVICE</h3>
             <div class="box">
             <div class="col-4">
                     <div class="icon"><i class="fa-solid fa-tablet-button"></i></div>
                     <h6><b>MOBILE</b></h4>
                 </div>
                 <div class="col-4">
                     <div class="icon"><i class="fa-solid fa-globe"></i></div>
                     <h6><b>WEB DEVELOPMENT</b></h4>
                 </div>
                 <div class="col-4">
                     <div class="icon"><i class="fa-solid fa-edit"></i></div>
                     <h6><b>DESIGN</b></h4>
                 </div>
                 <div class="col-4">
                     <div class="icon"><i class="fa-solid fa-chart-bar"></i></div>
                     <h6><b>DIGITAL MARKETING</b></h4>
                 </div>
             </div>
         </div>
     </section>

     <!-- footer -->
     <footer>
         <div class="container">
             <small>Copyright &copy; 2022 - Tifany. All Rights Reserved</small>
         </div>
     </footer>

</body>
</html>
@endsection


