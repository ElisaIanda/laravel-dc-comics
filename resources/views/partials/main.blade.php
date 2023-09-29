@php
$itemList = [
[
"name" => "DIGITAL COMICS",
"img" => "/images/buy-comics-digital-comics.png"
],
[
"name" => "DC MERCHANDISE",
"img" => "/images/buy-comics-merchandise.png"
],
[
"name" => "SUBSCRIPTION",
"img" => "/images/buy-comics-subscriptions.png"
],
[
"name" => "COMIC SHOP LOCATOR",
"img" => "/images/buy-comics-shop-locator.png"
],
[
"name" => "DC POWER VISA",
"img" => "/images/buy-dc-power-visa.svg"
],
];
@endphp

<main>
    <section class="bg-primary">
        <div class="container">

            <div class="row">
                @foreach ( $itemList as $singleItem )
                <div class="col d-flex align-items-center gap-3">
                    <div class="container-img">
                        <img src={{ $singleItem ["img"] }} class="card-img-top" alt="">
                    </div>
                    <div class="">
                        <p class="card-text">{{$singleItem["name"]}}</p>
                    </div>

                </div>
                @endforeach
            </div>
        </div>
    </section>
</main>