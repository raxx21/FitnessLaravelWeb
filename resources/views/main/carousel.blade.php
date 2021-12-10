<!-- Carousel -->
<div class="slideshow-container">
    <div class="mySlides fade">
        <img src="{{ URL::asset('img/img_nature_wide.jpg') }}" style="width:100%">
    </div>

    <div class="mySlides fade">
        <img src="{{ URL::asset('img/img_snow_wide.jpg') }}" style="width:100%">
    </div>

    <div class="mySlides fade">
        <img src="{{ URL::asset('img/img_mountains_wide.jpg') }}" style="width:100%">
    </div>

    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center;">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
</div>
<!-- Carousel End -->
