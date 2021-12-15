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
    <link rel="stylesheet" href="{{ URL::asset('css/profile/profile.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/profile/profileHeader.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/profile/profileGroupCount.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/profile/profileSelfInfo.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/profile/profilePost.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/welcome/post.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <!-- Header -->
    <header>
        @include('navbar.navbar',['user'=>'true','tag'=>$tag])
    </header>
    <!-- Header End -->

    <!-- Main -->
    <main>
        <div class="main">
            <!-- Profile -->
            <div class="profile">

                <!-- Profile Header -->
                @include('profile.profileHeader')
                <!-- Profile Header End -->

                <!-- Group Count Section -->
                <div class="group-count-field">
                    <div class="group-box">
                        <h1>No. of Group</h1>
                        <p>5</p>
                    </div>
                    <div class="group-box">
                        <h1>Pending Invitation</h1>
                        <p>3</p>
                    </div>
                </div>
                <!-- Group Count Section End -->

                <!-- Self Info -->
                <div class="self-info">
                    <!-- Groups  -->
                    <div class="skill">
                        <div class="skill-head">
                            <h1>Group</h1>
                            <p>See All</p>
                        </div>
                        <ul>
                            <li><img id="group-pic" src="{{ URL::asset('img/person.jpg') }}" /> <span>Fitness</span></li>
                            <li><img id="group-pic" src="{{ URL::asset('img/person3.jpg') }}" /> <span>Spots</span></li>
                            <li><img id="group-pic" src="{{ URL::asset('img/person4.jpg') }}" /> <span>Fun Guys</span></li>
                            <li><img id="group-pic" src="{{ URL::asset('img/person2.jpg') }}" /> <span>Football is Love</span></li>
                            <li><img id="group-pic" src="{{ URL::asset('img/person5.png') }}" /> <span>Swimming</span></li>
                        </ul>
                    </div>
                    <!-- Groups  Ends-->

                    <!-- Goals -->
                    <div class="skill">
                        <div class="skill-head">
                            <h1>Goals</h1>
                            <img src="https://img.icons8.com/material-sharp/30/ffffff/edit.png" />
                        </div>
                        <ul>
                            <li><span>#Go to GYM</span></li>
                            <li><span>#Weak up at 7am</span></li>
                            <li><span>#Attend Events</span></li>
                            <li><span>#Help Others</span></li>
                            <li><span>#Go to Temple</span></li>
                        </ul>
                    </div>
                    <!-- Goals End-->

                    <!-- Preference -->
                    <div class="skill">
                        <div class="skill-head">
                            <h1>Preferences</h1>
                            <img src="https://img.icons8.com/material-sharp/30/ffffff/edit.png" />
                        </div>
                        <ul>
                            <li><span>Monday-Friday @2PM-5PM </span></li>
                            <li><span>Saturday @10AM-12AM</span></li>
                            <li><span>Sunday @10AM-6PM</span></li>

                        </ul>
                    </div>
                    <!-- Preference End-->
                </div>
                <!-- Self Info End-->

                <!-- Profile Post -->
                <div class="profile-post">
                    <h1>POST</h1>
                    <div class="post-feild">
                        <!-- Post component-->
                        @include('main.post',['name'=>'Rajesh Chityal','profile'=>'img/person.jpg','location'=>'Mumbai','post'=>'img/post1.jpg','joined'=>'true'])
                        <!-- Post component-->
                        @include('main.post',['name'=>'Rajesh Chityal','profile'=>'img/person.jpg','location'=>'Mumbai','post'=>'img/post.jpg','joined'=>'true'])
                    </div>
                </div>
                <!-- Profile Post End-->
            </div>
            <!-- Profile  End-->
        </div>
    </main>
    <!-- Main End -->


    <script src=" {{URL::asset( 'js/navbar.js')}} "></script>
</body>

</html>
