@extends('layouts.app')
@section('title')
{{ __('HOME') }}
@endsection

@section('content')
<!-- Play Games Area Start -->
<section class="play-games">
    <hr>
    <div class="container mt-[100px]">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset( 'assets/images/banner1.png' ) }}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset( 'assets/images/banner2.png' ) }}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset( 'assets/images/banner3.png' ) }}" class="d-block w-100" alt="...">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="gaming-activities">
                    {{-- <div class="gaming-activities-inner">
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <div class="single-activities">
                                    <div class="top-area">
                                        <div class="left">
                                            <div class="icon">
                                                <img src="assets/images/play/icon1.png" alt="">
                                                <span>
                                                    4.5 <i class="fas fa-star"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="right">
                                            <h4 class="title">
                                                Crypto DICE
                                            </h4>
                                            <p class="text">
                                                Roll the Dice
                                            </p>
                                        </div>
                                    </div>
                                    <div class="bottom-area">
                                        <h4 class="title">People Playing:</h4>
                                        <div class="players-count">
                                            <ul class="players-list">
                                                <li>
                                                    <img src="assets/images/play/people.png" alt="">
                                                </li>
                                                <li>
                                                    <img src="assets/images/play/people.png" alt="">
                                                </li>
                                                <li>
                                                    <img src="assets/images/play/people.png" alt="">
                                                </li>
                                                <li>
                                                    <img src="assets/images/play/people.png" alt="">
                                                </li>
                                            </ul>
                                            <div class="count-num">
                                                40+
                                            </div>
                                        </div>
                                        <div class="pp">
                                            <p>50 People Playing</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="single-activities">
                                    <div class="top-area">
                                        <div class="left">
                                            <div class="icon">
                                                <img src="assets/images/play/icon2.png" alt="">
                                                <span>
                                                    4.5 <i class="fas fa-star"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="right">
                                            <h4 class="title">
                                                Crypto DICE
                                            </h4>
                                            <p class="text">
                                                Roll the Dice
                                            </p>
                                        </div>
                                    </div>
                                    <div class="bottom-area">
                                        <h4 class="title">People Playing:</h4>
                                        <div class="players-count">
                                            <ul class="players-list">
                                                <li>
                                                    <img src="assets/images/play/people.png" alt="">
                                                </li>
                                                <li>
                                                    <img src="assets/images/play/people.png" alt="">
                                                </li>
                                                <li>
                                                    <img src="assets/images/play/people.png" alt="">
                                                </li>
                                                <li>
                                                    <img src="assets/images/play/people.png" alt="">
                                                </li>
                                            </ul>
                                            <div class="count-num">
                                                40+
                                            </div>
                                        </div>
                                        <div class="pp">
                                            <p>50 People Playing</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="single-activities">
                                    <div class="top-area">
                                        <div class="left">
                                            <div class="icon">
                                                <img src="assets/images/play/icon3.png" alt="">
                                                <span>
                                                    4.5 <i class="fas fa-star"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="right">
                                            <h4 class="title">
                                                Crypto DICE
                                            </h4>
                                            <p class="text">
                                                Roll the Dice
                                            </p>
                                        </div>
                                    </div>
                                    <div class="bottom-area">
                                        <h4 class="title">People Playing:</h4>
                                        <div class="players-count">
                                            <ul class="players-list">
                                                <li>
                                                    <img src="assets/images/play/people.png" alt="">
                                                </li>
                                                <li>
                                                    <img src="assets/images/play/people.png" alt="">
                                                </li>
                                                <li>
                                                    <img src="assets/images/play/people.png" alt="">
                                                </li>
                                                <li>
                                                    <img src="assets/images/play/people.png" alt="">
                                                </li>
                                            </ul>
                                            <div class="count-num">
                                                40+
                                            </div>
                                        </div>
                                        <div class="pp">
                                            <p>50 People Playing</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
    <div class="all-games">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="single-container p-5">
                        <div class="h2">Welcome to our Community Earn Hub!</div>
                        <div class="single-container my-4">
                            <div class="row">
                                <div class="col-md-7 text-left pr-3">
                                    <p>
                                        The perfect point to enter the Wax multiverse. Whether you are still new to the WAX ecosystem or interested in completing Tasks or Surveys to earn free WAXP you will find everything you need in one location.
                                    </p>
                                    <p class="pt-4">
                                        Developed for the by active WAX fellows we believe in afair ecosystem and true power to the community we want to offer the highest possible reward for users completing surveys while offering instant withdrawal.
                                    </p>
                                    <p class="pt-4">
                                        We are operating this platform not profit orientated and are distributing profits generated by this Hub directly to all Users who stake our token $Klee on our platform.
                                    </p>
                                    <p class="text-center pt-[20px] font-black">
                                        Enjoy your stay! Kleeblatt.Game
                                    </p>

                                </div>
                                <div class="col-md-5 p-2">
                                    <video controls>
                                        <source src="/media/cc0-videos/flower.webm" type="video/webm" />

                                        <source src="/media/cc0-videos/flower.mp4" type="video/mp4" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-7">
                                <div class="single-container">
                                    <div class="h3">Community-HUB-News</div>
                                    <div class="p text-left">
                                        <p class="pt-8">
                                            Our closed beta started! Pre-Register now and receive 25$KLEE as soon as we enter the open beta.
                                        </p>
                                        <p class="pt-8">
                                            Over the next couple of weeks we will invite users to gradually increase load and test our infrastructure. During closed beta there will be a couple of limitations:
                                        </p>
                                        <ul class="pl-4 pt-4 space-y-1 text-gray-500 list-inside dark:text-gray-400">
                                            <li class="flex items-center pt-2">
                                                <svg class="w-3.5 h-3.5 mr-2 text-green-500 dark:text-green-400 flex-shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                                                </svg>
                                                Earn WAXP and withdraw them to your wallet. $KLEE will be introduced starting with the OBT. 
                                            </li>
                                            <li class="flex items-center pt-2">
                                                <svg class="w-3.5 h-3.5 mr-2 text-green-500 dark:text-green-400 flex-shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                                                </svg>
                                                Staking & receiving $KLEE will be disabled. 
                                            </li>
                                            <li class="flex items-center pt-2">
                                                <svg class="w-3.5 h-3.5 mr-2 text-green-500 dark:text-green-400 flex-shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                                                </svg>
                                                If you request a withdrawal to your WAX account it will need to be manually approved - Please expect 1-2 hours delay. We aim to introduce instant withdrawals during open beta testing. 
                                            </li>
                                            <li class="flex items-center pt-2">
                                                <svg class="w-3.5 h-3.5 mr-2 text-green-500 dark:text-green-400 flex-shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                                                </svg>
                                                DIsabled Chat - only email support 
                                            </li>
                                            <li class="flex items-center pt-2">
                                                <svg class="w-3.5 h-3.5 mr-2 text-green-500 dark:text-green-400 flex-shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                                                </svg>
                                                Website only accessible for desktop browsers.
                                            </li>
                                        </ul>
                                        <p class="py-4 text-center">
                                            Your KleeBlatt.Games Team
                                        </p>
                                    </div>
                                    <div class="mybtn2">MORE NEWS</div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="single-container" style="height: 374px;">
                                    <div class="h3">STAKING WIDGED</div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Play Games Area End -->

<!-- Recent Winners Area Start -->
<section class="recent-winners">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="single-container">
                    <div class="h2 mb-3">Earn WAXP</div>
                    <div class="row">
                        <div class="col-lg-6 mb-3">
                            <div class="single-winer">
                                <div class="top-area">
                                    <div class="left">
                                        <h4 class="name">
                                            Leroy Roy
                                        </h4>
                                        <p class="date">
                                            01.08.2019
                                        </p>
                                    </div>
                                    <div class="right">
                                        <p class="id">#5747e75482</p>
                                    </div>
                                </div>
                                <div class="bottom-area">
                                    <div class="left">
                                        0.099 ETH
                                    </div>
                                    <div class="right">
                                        <img src="assets/images/icon2.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-3">
                            <div class="single-winer">
                                <div class="top-area">
                                    <div class="left">
                                        <h4 class="name">
                                            Jeff Mack
                                        </h4>
                                        <p class="date">
                                            01.08.2019
                                        </p>
                                    </div>
                                    <div class="right">
                                        <p class="id">#5747e75482</p>
                                    </div>
                                </div>
                                <div class="bottom-area">
                                    <div class="left">
                                        0.099 ETH
                                    </div>
                                    <div class="right">
                                        <img src="assets/images/icon2.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-3">
                            <div class="single-winer">
                                <div class="top-area">
                                    <div class="left">
                                        <h4 class="name">
                                            Leroy Roy
                                        </h4>
                                        <p class="date">
                                            01.08.2019
                                        </p>
                                    </div>
                                    <div class="right">
                                        <p class="id">#5747e75482</p>
                                    </div>
                                </div>
                                <div class="bottom-area">
                                    <div class="left">
                                        0.099 ETH
                                    </div>
                                    <div class="right">
                                        <img src="assets/images/icon2.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-3">
                            <div class="single-winer">
                                <div class="top-area">
                                    <div class="left">
                                        <h4 class="name">
                                            Jeff Mack
                                        </h4>
                                        <p class="date">
                                            01.08.2019
                                        </p>
                                    </div>
                                    <div class="right">
                                        <p class="id">#5747e75482</p>
                                    </div>
                                </div>
                                <div class="bottom-area">
                                    <div class="left">
                                        0.099 ETH
                                    </div>
                                    <div class="right">
                                        <img src="assets/images/icon2.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-3">
                            <div class="single-winer">
                                <div class="top-area">
                                    <div class="left">
                                        <h4 class="name">
                                            Leroy Roy
                                        </h4>
                                        <p class="date">
                                            01.08.2019
                                        </p>
                                    </div>
                                    <div class="right">
                                        <p class="id">#5747e75482</p>
                                    </div>
                                </div>
                                <div class="bottom-area">
                                    <div class="left">
                                        0.099 ETH
                                    </div>
                                    <div class="right">
                                        <img src="assets/images/icon2.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-3">
                            <div class="single-winer">
                                <div class="top-area">
                                    <div class="left">
                                        <h4 class="name">
                                            Jeff Mack
                                        </h4>
                                        <p class="date">
                                            01.08.2019
                                        </p>
                                    </div>
                                    <div class="right">
                                        <p class="id">#5747e75482</p>
                                    </div>
                                </div>
                                <div class="bottom-area">
                                    <div class="left">
                                        0.099 ETH
                                    </div>
                                    <div class="right">
                                        <img src="assets/images/icon2.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="single-container" style="height: 556px;">
                    <div class="h2">Widget</div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Recent Winners Area End -->



<!-- jquery -->
{{-- <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script> --}}
<script src="{{ asset( 'assets/js/jquery.js' ) }}"></script>
<!-- popper -->
<script src="{{ asset( 'assets/js/popper.min.js' ) }}"></script>
<!-- bootstrap -->
<script src="{{ asset( 'assets/js/bootstrap.min.js' ) }}"></script>
<!-- plugin js-->
<script src="{{ asset( 'assets/js/plugin.js' ) }}"></script>

<!-- MpusemoverParallax JS-->
<script src="{{ asset( 'assets/js/TweenMax.js' ) }}"></script>
<script src="{{ asset( 'assets/js/mousemoveparallax.js' ) }}"></script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
<!-- main -->
<script src="{{ asset( 'assets/js/main.js' ) }}"></script>
@endsection
