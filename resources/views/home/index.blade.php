<!DOCTYPE html>
<html>

<head>
    @include('home.css')
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->

    @include('home.header')

    <!-- end header section -->
    <!-- slider section -->

    @include('home.slider')

    <!-- end slider section -->
  </div>
  <!-- end hero area -->

  <!-- shop section -->

  @include('home.product')

  <!-- end shop section -->

  <!-- saving section -->

  @include('home.saving')

  <!-- end saving section -->

  <!-- why section -->

  @include('home.why')

  <!-- end why section -->


  <!-- gift section -->

  @include('home.gift')


  <!-- end gift section -->


  <!-- contact section -->

  @include('home.contact')

  <!-- end contact section -->

  <!-- client section -->

  @include('home.testimonial')
  <!-- end client section -->

  <!-- info section -->

  @include('home.footer')

  <!-- end info section -->

</body>

</html>