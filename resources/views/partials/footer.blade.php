@php
$footerItem = [
[
"title" => "DC COMICS",
"link" => [
[
"name" => "Characters",
],
[
"name" => "Comics",
],
[
"name" => "Movies",
],
[
"name" => "TV",
],
[
"name" => "Games",
],
[
"name" => "Videos",
],
[
"name" => "News",
],
]
],
[
"title" => "DC",
"link" => [
[
"name" => "Terms Of Use",
],
[
"name" => "Privacy policy (New)",
],
[
"name" => "Ad Choices",
],
[
"name" => "Advertising",
],
[
"name" => "Jobs",
],
[
"name" => "Subscriptions",
],
[
"name" => "Talent Workshops",
],
[
"name" => "CPSC Certificates",
],
[
"name" => "Ratings",
],
[
"name" => "Shop Help",
],
[
"name" => "Contact Us",
],
],
],
[
"title" => "SITES",
"link" => [
[
"name" => "DC",
],
[
"name" => "MAD Magazine",
],
[
"name" => "DC Kids",
],
[
"name" => "DC Universe",
],
[
"name" => "DC Power visa",
],

],
],
[
"title" => "SHOP",
"link" => [
[
"name" => "Shop DC",
],
[
"name" => "Shop DC Collectibles",
],
]
],
]
@endphp

<footer class="bg p-5">
    <section>
        <div class="container">
            <div class="row">
                @foreach ($footerItem as $singleItem)
                <div class="col-3">
                    <h3 class="text-white">{{ $singleItem['title'] }}</h3>
                    <ul class="p-0">
                        @foreach ($singleItem['link'] as $link)
                        <li><a href="#" class="text">{{ $link['name'] }}</a></li>
                        @endforeach
                    </ul>
                </div>
                @endforeach
            </div>
        </div>
    </section>
</footer>

<section class="bg-gray p-3">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <div>
                <button class="footer-btn">
                    SIGN-UP NOW
                </button>
            </div>

            <div class="d-flex align-items-center gap-3">
                <h5 class="text-primary">
                    FOLLOW US
                </h5>
                <div>
                    <img src="/images/footer-facebook.png" alt="">
                </div>
                <div>
                    <img src="/images/footer-twitter.png" alt="">
                </div>
                <div>
                    <img src="/images/footer-youtube.png" alt="">
                </div>
                <div>
                    <img src="/images/footer-pinterest.png" alt="">
                </div>
                <div>
                    <img src="/images/footer-periscope.png" alt="">
                </div>
            </div>
        </div>
    </div>

</section>