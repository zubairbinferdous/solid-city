
<!DOCTYPE html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <title>Solid City</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta property="og:title" content="">
  <meta property="og:type" content="">
  <meta property="og:url" content="">
  <meta property="og:image" content="">


  <link rel="manifest" href="site.webmanifest">
  <link rel="icon" href="{{ asset('public/fontend/images/favicon.ico') }}" type="image/x-icon">

  <link rel="stylesheet" href="{{ asset('public/fontend/css/normalize.css') }}">
  <link rel="stylesheet" href="{{ asset('public/fontend/css/main.css') }}">
  <link rel="stylesheet" href="{{ asset('public/fontend/css/slick.css') }}">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('public/fontend/css/style.css') }}">
  <link rel="stylesheet" herf="{{ asset('public/fontend/css/responsive.css') }}">
  <meta name="theme-color" content="#fafafa">
</head>

<body>


<div class="container-fluid bg-light">
<div class="container">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a href="{{ URL::to('/') }}"> <img src="{{ asset('public/fontend/images/logo.jpg') }}" alt="" width="100px" > </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-lg-auto">

        <li class="nav-item">
          <a class="nav-link" href="{{ route('login') }}">Login</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{ route('register') }}">Registration</a>
        </li>

      </ul>

    </div>
  </nav>
</div>
</div>






  <!-- banner-part -->

  <div class="container-fluid banner-img " class="img-fluid" style="background-image: url({{ asset('public/fontend/images/banner-top.jpg') }});" >
      <div class="banner-data">

              <h3 >FAST & SECURE</h3>
              <h4>DELIVERY</h4>
              <p> Everything at your doorstep. </p>
              <a href="{{ route('login') }}">book now</a>
        </div>
    </div>






<!-- why millione-part -->

<div class="container mt">
  <h5 class="text-center mbb"> Why Millions Trust us when Sending a Parcel</h5>
  <div class="row">
    <div class="col-lg-4 bor">
      <div class="why-data">
        <img src="{{ asset('public/fontend/images/best_prices_uk_europe_graphic.svg') }}" alt="" width="280px" height="280px">
        <h4>We Guarantee the Best Parcel Delivery Prices in Bangladesh.</h4>
      </div>
      <div class="why-text">
         <p>We're focused on furnishing our clients with the best package sending involvement with the market, at an unrivalled rate.</p>

      </div>

      <div class="why-text">
        <p>We check several costs each day to guarantee our own are the most minimal. In the improbable function, you locate a less expensive arrangement
          somewhere else, we'll coordinate any tantamount conveyance cost ensured!<p>

      </div>

      <div class="why-text pb">
        <p>Our Customer Service team are on hand 24-7 and happy to help.</p>
      </div>
    </div>

    <div class="col-lg-4 bor">
      <div class="why-data">
        <img src="{{ asset('public/fontend/images/send_gloabal_graphic.svg') }}" alt="" width="280px" height="280px">
        <h4>Effectively send a Parcel to more than 64 districts of Bangladesh.</h4>
      </div>
      <div class="why-text">
        <p>Our easy-to-use system makes booking your parcel delivery a breeze. Get a free instant quote and select a package that suits you.</P>
      </div>

      <div class="why-text">
        <p>Follow your package's advancement from booking to conveyance - All our services come with full parcel tracking as standard.</p>

      </div>

      <div class="why-text pb">
        <p>Hassel free, fast & secure system which is clearly assure you that you are having the best service from us to move your business to a new level </p>
      </div>
    </div>

    <div class="col-lg-4 bor">
      <div class="why-data">
        <img src="{{ asset('public/fontend/images/delivery_services_graphic.svg') }}" alt="" width="280px" height="280px">
        <h4>Compare Quotes from Bangladesh’s Biggest & Best Parcel Couriers</h4>
      </div>
      <div class="why-text">
        <p>Effortlessly browse quotes from Bangladesh’s best couriers & Parcel delivery service - and choose the service that best meets your needs!</p>
      </div>

      <div class="why-text">
        <p>Choose us & select the package and prepare your parcel, we will come to your door to collect your parcel - no need to leave your house or office!
           .</P>
      </div>

      <div class="why-text pb">
        <p>On the other hand, drop off your bundle at a time suitable for you at more than 10,000 drop shop areas across Bangladesh.</p>

      </div>
    </div>
    </div>
</div>



<!--  shaba-part -->
 <div class="shaba-part">
 <div class="container">
     <div class="shaba-data">
       <h5>We Provide Our Services More Than<span> 50+ </span>Merchant </h5>
     </div>

     <div class="row area">

      <div class="col-lg-4">
        <div class="shaba-dat">
          <img src="{{ asset('public/fontend/images/bd_map.svg') }}" alt="" width="90px">
          <p> We Provide Services only Dhaka city </p>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="shaba-dat">
          <img src="{{ asset('public/fontend/images/productcollect.svg') }}" alt="" width="90px">
          <p> we collect your product in your location </p>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="shaba-dat">
          <img src="{{ asset('public/fontend/images/onlinetraker.svg') }}" alt="" width="90px">
          <p> Online Booking is Available</p>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="shaba-dat">
          <img src="{{ asset('public/fontend/images/return_charge.svg') }}" alt="" width="90px">
          <p> Delivery in 24 hours & Payment in 48 hours </p>
        </div>
      </div>



      <div class="col-lg-4">
        <div class="shaba-dat">
          <img src="{{ asset('public/fontend/images/payment_new.svg') }}" alt="" width="90px">
          <p>Every Monday Payment</p>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="shaba-dat">
          <img src="{{ asset('public/fontend/images/cod.svg') }}" alt="" width="90px">
          <p> COD charges 0%</p>
        </div>
      </div>

     </div>
 </div>
</div>

  <!-- service-part -->

  <div class="service-part pd-b">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 ser-img">
          <img src="{{ asset('public/fontend/images/pm-1.jpg') }}" alt="" class="img-fluid" alt="Responsive image">
        </div>

        <div class="col-lg-4 ser-img">
          <img src="{{ asset('public/fontend/images/pm-2.jpg') }}" alt="" class="img-fluid" alt="Responsive image">
        </div>


        <div class="col-lg-4  ser-img">
          <img src="{{ asset('public/fontend/images/pm-3.jpg') }}" alt="" class="img-fluid" alt="Responsive image">
        </div>

      </div>
    </div>
  </div>



<div class="container-fluid bg-when pd-t "  class="img-fluid"  style="background-image:url({{ asset('public/fontend/images/homepage_feature_image.png') }});">
  <div class="container">
    <div class="row">
      <div class="offset-lg-6 col-lg-6">
        <div class="when-data">
        <h5>When you work with the Biggest & Best Parcel Couriers</h5>

        <p>If you're looking for cheap parcel deliveries but don't want to compromise on quality or reliability, look no further than Solid city courier service.</p>

        <P> We've earned a strong reputation among our Clients for efficient parcel delivery; we've also built great relationships with the most reputable Fashion & Business company out there, all to ensure that our clients have the most choice. </P>

        <p>when sending a parcel.
        When it comes to posting a parcel, sending a package or shipping a pallet... we've got you covered!
        </p>
        </div>
      </div>
    </div>
  </div>
</div>




 <div class="service-slider">
   <div class="container-fluid">
     <div class="container">
      <div class="server-data">
        <h4 class="data_h4">We Provide Service</h4>
      </div>

       <div class="row  slider-data">

        <div class="col-lg-2">
          <div class="simg">
            <img src="{{ asset('public/fontend/images/janneys.jpg') }}" class="img-fluid" alt="Responsive image">
          </div>
        </div>



        <div class="col-lg-2">
          <div class="simg">
            <img src="{{ asset('public/fontend/images/ad-logo.jpeg') }}" class="img-fluid" alt="Responsive image">
          </div>
        </div>


        <div class="col-lg-2">
          <div class="simg">
            <img src="{{ asset('public/fontend/images/janneys.jpg') }}" class="img-fluid" alt="Responsive image">
          </div>
        </div>


        <div class="col-lg-2">
          <div class="simg">
            <img src="{{ asset('public/fontend/images/g-&-g.jpg') }}" class="img-fluid" alt="Responsive image">
          </div>
        </div>


        <div class="col-lg-2">
          <div class="simg">
            <img src="{{ asset('public/fontend/images/janneys.jpg') }}" class="img-fluid" alt="Responsive image">
          </div>
        </div>


        <div class="col-lg-2">
          <div class="simg">
            <img src="{{ asset('public/fontend/images/lafz.jpg') }}" class="img-fluid" alt="Responsive image">
          </div>
        </div>

        <div class="col-lg-2">
          <div class="simg">
            <img src="{{ asset('public/fontend/images/raw-nation.jpg') }}" class="img-fluid" alt="Responsive image">
          </div>
        </div>

        <div class="col-lg-2">
          <div class="simg">
            <img src="{{ asset('public/fontend/images/rokomary.jpg') }}" class="img-fluid" alt="Responsive image">
          </div>
        </div>


        <div class="col-lg-2">
          <div class="simg">
            <img src="{{ asset('public/fontend/images/ad-logo.jpeg') }}" class="img-fluid" alt="Responsive image">
          </div>
        </div>

        </div>
     </div>
   </div>
 </div>


 <div class="container mtt">
  <div class="row">
    <div class="col-lg-6 bore">
      <div class="whyy-data">
        <img src="{{ asset('public/fontend/images/best_prices_uk_europe_graphic.svg') }}" alt="" width="280px" height="280px">
        <h4>… Wherever you're sending a bundle …</h4>
      </div>
      <div class="whyy-text">
        <p>Not only do we offer cheap parcel delivery in Dhaka, we’re also experts in all over the country. We offer extremely incredible rates on up to 1kg parcel deliveries to anywhere in Dhaka… and everywhere in between!</p>

      </div>
    </div>

    <div class="col-lg-6 borr">
      <div class="whyy-data">
        <img src="{{ asset('public/fontend/images/send_gloabal_graphic.svg') }}" alt="" width="280px" height="280px">
        <h4>… whenever you need it delivered…</h4>
      </div>

      <div class="whyy-text">
        <p>Need your parcel to arrive in a hurry? check out our expedited delivery options.
        We offer deliveries on specific days of the week, we’ve got a whole range of couriers specializing in next day delivery and your parcel can even be delivered on the day you book with our brilliantly handy same day service.</p>

      </div>
    </div>
    </div>
</div>


<div class="container">
  <div class="we-data">
    <h3 class="text-center">we’ve got a service for you!</h3>
    <p class="text-center">So, don’t delay, book your parcel with Solid city courier service today!</p>
    <a href="{{ route('login') }}">book now</a>
  </div>

  <div class="box">
   <p class="heading">FAQs</p>
   <div class="faqs">
      <details>
         <summary>Where has my order reached?</summary>
         <p class="text">You can track the latest status of your shipment on our website with the Tracking ID/Order ID given to you.</p>
      </details>
      <details>
         <summary>The shipment status shows that it has been returned/cancelled. What does it mean and who do I contact?</summary>
         <p class="text">This could possibly mean two things:</p>
         <p class="text">a. Your shipment might have been damaged in transit</p>
         <p class="text">b. The merchant has sent the wrong shipment</p>
         <p class="text">Please get in touch with your merchant directly for further clarification.</p>

      </details>
      <details>
         <summary>What if my shipment is marked as lost?</summary>
         <p class="text">If a shipment is lost in our network, we immediately intimate your merchant with the shipment status. Please get in touch with your merchant and you will be remitted accordingly.</p>
      </details>

      <details>
         <summary>My shipment status shows that it’s out for delivery. By when will I receive it?</summary>
         <p class="text">When the shipment is out for delivery, it will be delivered to you anytime between 10:00AM to 8:00PM on the scheduled day of delivery.</p>
      </details>
      <details>
         <summary>What do I need to do to get the shipment delivered within a specific timeframe?</summary>
         <p class="text">To get the shipment delivered at your preferred time, you can avail slotted delivery service through ‘manage your shipments' on the tracker page..</p>
      </details>
   </div>

  </div>
</div>



<div class="footer-part">
  <div class="container-fluid bg-footer">
    <div class="container">
      <div class="row footar-uol">
           <div class="col-lg-2">
             <div class="foot1">
             <ul>
               <li><a href="">About Us</a></li>
               <li><a href="">Why Choose us</a></li>
               <li><a href="">Contact Us</a></li>
               <li><a href="">Package Tracking</a></li>
               <li><a href="">Logistics Services</a></li>
             </ul>
            </div>
           </div>
           <div class="col-lg-3">
              <div class="foot2">
                <ul>

                  <li><a href="">Cash on Delivery Service</a></li>
                  <li><a href="">Home Delivery Service</a></li>
                  <li><a href="">Local Courier Service</a></li>
                  <li><a href="">Online Parcel Delivery Service</a></li>
                  <li><a href="">E-commerce Courier Service</a></li>
                </ul>
              </div>
           </div>

           <div class="col-lg-3">
              <div class="foot2">
                <ul>

                  <li><a href="">Cash on Delivery Service</a></li>
                  <li><a href="">Home Delivery Service</a></li>
                  <li><a href="">Local Courier Service</a></li>
                  <li><a href="">Online Parcel Delivery Service</a></li>
                  <li><a href="">E-commerce Courier Service</a></li>
                </ul>
              </div>
           </div>

           <div class="col-lg-3">
              <div class="foot2">
                <ul>

                  <li><a href="">Cash on Delivery Service</a></li>
                  <li><a href="">Home Delivery Service</a></li>
                  <img src="{{ asset('public/fontend/images/solidfoo.png') }}" alt="" width="120px" height="100px">
                </ul>
              </div>
           </div>
          </div>
      </div>
  </div>
</div>








  <script src="{{ asset('public/fontend/js/vendor/modernizr-3.11.2.min.js') }}"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
  <script src="{{ ('public/fontend/js/plugins.js') }}"></script>
  <script src="{{ ('public/fontend/js/slick.min.js') }}"></script>
  <script src="{{ ('public/fontend/js/main.js') }}"></script>


</body>

</html>


