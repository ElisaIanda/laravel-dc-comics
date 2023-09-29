@php
$menuList = [
[
"name" => "CHARACTERS",
],
[
"name" => "COMICS",
],
[
"name" => "MOVIES",
],
[
"name" => "TV",
],
[
"name" => "GAMES",
],
[
"name" => "COLLECTIBLES",
],
[
"name" => "VIDEOS",
],
[
"name" => "FANS",
],
[
"name" => "NEWS",
],
[
"name" => "SHOP",
],
];
@endphp

<header>
    <div class="container p-2">
        <div class="d-flex align-items-center">

            <div class="logo">
                <img src="/images/dc-logo.png" alt="">
            </div>

            <div class="list-menu">
                <ul class="nav">
                    <li class="nav-item">
                        @foreach ( $menuList as $singleMenu )
                        <a href="#" class="nav-link ">{{$singleMenu["name"]}}</a>
                        @endforeach
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="jumbo">
        <div class="container">
            <div class="btn-series">
                <h5>CURRENT SERIES</h5>
            </div>
        </div>
    </div>
</header>