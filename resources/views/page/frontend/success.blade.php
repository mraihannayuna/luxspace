@extends('layouts.frontend')

@section('content')

<!DOCTYPE html>
<html class="no-js" lang="">
  <head>
    <meta charset="utf-8" />
    <title>LuxSpace</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <meta property="og:title" content="" />
    <meta property="og:type" content="" />
    <meta property="og:url" content="" />
    <meta property="og:image" content="" />

    <link rel="manifest" href="site.webmanifest" />
    <link rel="apple-touch-icon" href="images/content/favicon.png" />
    <!-- Place favicon.ico in the root directory -->

    <link rel="stylesheet" href="./css/main.css" />
    <link rel="icon" href="images/content/favicon.png" />

    <meta name="theme-color" content="#000" />
  <link rel="icon" href="favicon.ico"><link href="css/app.minify.css" rel="stylesheet"></head>

  <body>
    <!-- Add your site or application content here -->

    <!-- START: BREADCRUMB -->
    <section class="bg-gray-100 py-8 px-4">
      <div class="container mx-auto">
        <ul class="breadcrumb">
          <li>
            <a href="index.html">Home</a>
          </li>
          <li>
            <a href="#" aria-label="current-page">Success Checkout</a>
          </li>
        </ul>
      </div>
    </section>
    <!-- END: BREADCRUMB -->

    <!-- START: CONGRATS -->
    <section class="">
      <div class="container mx-auto min-h-screen">
        <div class="flex flex-col items-center justify-center">
          <div class="w-full md:w-4/12 text-center">
            <img
              src="/frontend/images/content/illustration-success.png"
              alt="congrats illustration"
            />
            <h2 class="text-3xl font-semibold mb-6">Ah yes it’s success!</h2>
            <p class="text-lg mb-12">
              Furniture yang anda beli akan kami kirimkan saat ini juga so now
              please sit tight and be ready for it
            </p>
            <a
              href="{{route('index')}}"
              class="text-gray-900 bg-red-200 focus:outline-none w-full py-3 rounded-full text-lg focus:text-black transition-all duration-200 px-8 cursor-pointer"
            >
              Back to Shop
            </a>
          </div>
        </div>
      </div>
    </section>
    <!-- END: CONGRATS -->

    <!-- START: LOAD SVG -->
    <!-- <svg width="23" height="26" class="hidden" id="icon-play">
      <path
        d="M21 9.536c2.667 1.54 2.667 5.39 0 6.928l-15 8.66c-2.667 1.54-6-.385-6-3.464V4.34C0 1.26 3.333-.664 6 .876l15 8.66z"
        fill="#fff"
      />
    </svg> -->
    <!-- END: LOAD SVG  -->

    <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
    <script>
      window.ga = function () {
        ga.q.push(arguments);
      };
      ga.q = [];
      ga.l = +new Date();
      ga("create", "UA-XXXXX-Y", "auto");
      ga("set", "anonymizeIp", true);
      ga("set", "transport", "beacon");
      ga("send", "pageview");
    </script>
    <script src="https://www.google-analytics.com/analytics.js" async></script>
  <script src="js/app.js"></script></body>
</html>


@endsection
