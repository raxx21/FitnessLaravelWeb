<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fitness 99</title>
    <link rel="stylesheet" href="{{ URL::asset('css/color.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/welcome/welcome.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/welcome/carousel.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/welcome/banner.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/welcome/post.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <!-- Header -->
    <header>
        @include('navbar.navbar',['user'=>'false','tag'=>$tag])
    </header>
    <!-- Header End -->

    <!-- Main -->
    <main>
        <!-- Carousel -->
        @include('main.carousel')

        <!-- Banners -->
        <div class="banner-field">
            @include('main.banner', ['title'=>'5KM Run(Hyderabad)', 'pic'=>'img/run.jpg', 'des'=>'5km run for to spread awareness about the Orfans Lorem ipsum dolor sit amet consectetur, nihil non.', 'time'=>'10/12/2021 10AM','color'=>'#95D1CC;'])
            @include('main.banner', ['title'=>'5KM Run(Hyderabad)', 'pic'=>'img/party.jpg', 'des'=>'5km run for to spread awareness about the Orfans Lorem ipsum dolor sit amet consectetur, nihil non.', 'time'=>'10/12/2021 10AM','color'=>'#F3950D;'])
            @include('main.banner', ['title'=>'5KM Run(Hyderabad)', 'pic'=>'img/donation.jpg', 'des'=>'5km run for to spread awareness about the Orfans Lorem ipsum dolor sit amet consectetur, nihil non.', 'time'=>'10/12/2021 10AM','color'=>'#EBE645;'])
        </div>
        <!-- Banners End -->

        <!-- Post -->
        <div class="post-feild">
            <!-- Post component-->
            @include('main.post',['name'=>'Rajesh Chityal','profile'=>'img/person.jpg','location'=>'Mumbai','post'=>'img/post1.jpg','joined'=>'false'])
            <!-- Post component-->
            @include('main.post',['name'=>'Atish Manala','profile'=>'img/person1.jpg','location'=>'Hyderabad','post'=>'img/post.jpg','joined'=>'false'])
            <!-- Post component-->
            @include('main.post',['name'=>'Rajesh Chityal','profile'=>'img/person.jpg','location'=>'Mumbai','post'=>'img/post1.jpg','joined'=>'false'])
            <!-- Post component-->
            @include('main.post',['name'=>'Atish Manala','profile'=>'img/person1.jpg','location'=>'Hyderabad','post'=>'img/post.jpg','joined'=>'false'])
        </div>

        <!-- Post End-->
        <br><br><br><br>
    </main>
    <!-- Main End-->


    <script src="{{URL::asset('js/navbar.js')}}"></script>
    <script src="{{URL::asset('js/carousel.js')}}"></script>
    <script src="{{URL::asset('js/main.js')}}"></script>
</body>

</html>
