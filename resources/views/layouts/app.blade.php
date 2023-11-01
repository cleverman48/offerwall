<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>KleeblattGames | @yield('title')</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/plugin.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        * {
            box-sizing: border-box;
        }

        ul {
            list-style: none;
        }

        .user-menu-wrap {
            position: relative;
            width: 36px;
            margin: 50px auto;
        }

        .menu-container {
            visibility: hidden;
            opacity: 0;

            &.active {
                visibility: visible;
                opacity: 1;
                transition: all .2s ease-in-out;
            }
        }

        .user-menu {
            position: absolute;
            right: -22px;
            background-color: #FFFFFF;
            width: 256px;
            border-radius: 2px;
            border: 1px solid rgba(0, 0, 0, 0.15);
            padding-top: 5px;
            padding-bottom: 5px;
            margin-top: 20px;

            .profile-highlight {
                display: flex;
                border-bottom: 1px solid $#E0E0E0;
                padding: 12px 16px;
                margin-bottom: 6px;

                img {
                    width: 48px;
                    height: 48px;
                    border-radius: 25px;
                    object-fit: cover;
                }

                .details {
                    display: flex;
                    flex-direction: column;
                    margin: auto 12px;

                    #profile-name {
                        font-weight: 600;
                        font-size: 16px;

                    }

                    #profile-footer {
                        font-weight: 300;
                        font-size: 14px;
                        margin-top: 4px;
                    }
                }

            }

            .footer {
                border-top: 1px solid $#E0E0E0;
                padding-top: 6px;
                margin-top: 6px;

                .user-menu-link {
                    font-size: 13px;
                }
            }

            .user-menu-link {
                display: flex;
                text-decoration: none;
                color: #333333;
                font-weight: 400;
                font-size: 14px;
                padding: 12px 16px;

                div {
                    margin: auto 10px;
                }

                &:hover {
                    background-color: #F5F5F5;
                    color: #333333;
                }
            }

            &:before {
                position: absolute;
                top: -16px;
                left: 120px;
                display: inline-block;
                content: "";
                border: 8px solid transparent;
                border-bottom-color: $#E0E0E0;
            }

            &:after {
                position: absolute;
                top: -14px;
                left: 210px;
                display: inline-block;
                content: "";
                border: 7px solid transparent;
                border-bottom-color: #FFFFFF;
            }
        }
    </style>
</head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-ZK4P2MEPV7"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'G-ZK4P2MEPV7');
</script>
@php
    $useragent=$_SERVER['HTTP_USER_AGENT'];
    if ( ( preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i',$useragent) || preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4))) != 0 ) {
        header("Location: /mobile");
        exit();
    }
@endphp

<body>
    <header class="header">
        <div class="mainmenu-area">
            <div class="container w-full flex items-center h-[82px]">
                <div class="row w-full">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <div class="container-fluid p-0 flex items-center">
                                <a class="navbar-brand" href="/home">
                                    <!-- <img src="{{ asset('assets/images/logo.png') }}" alt=""> -->
                                    <h4>KleeblattGames</h4>
                                </a>
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#main_menu" aria-controls="main_menu" aria-expanded="false"
                                    aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="navbar-collapse justify-content-end fixed-height" id="main_menu">
                                    @guest
                                        @if (Route::has('login'))
                                            <a class="mybtn1" href="{{ route('login') }}">
                                                {{ __('Register / Login') }}
                                            </a>
                                            {{-- <a href="#" class="mybtn1" data-toggle="modal" data-target="#signin">Register / Login</a> --}}
                                        @endif
                                    @else
                                        <ul class="navbar-nav ml-auto">
                                            <li class="nav-item dropdown">
                                                <a class="nav-link {{ request()->segment(1) == 'home' || request()->segment(1) == 'profile' ? 'active' : '' }}"
                                                    href="/home">
                                                    {{ __('Home') }}
                                                    <div class="mr-hover-effect"></div>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link {{ request()->segment(1) == 'community_hub' ? 'active' : '' }}"
                                                    href="/community_hub">
                                                    {{ __('Community Hub') }}
                                                    <div class="mr-hover-effect"></div>
                                                </a>
                                            </li>
                                            {{-- <li class="nav-item">
                                                <a class="nav-link {{ request()->segment(1) == 'earn' ? 'active' : '' }}"
                                                    href="/earn">
                                                    {{ __('Earn WAXP') }}
                                                    <div class="mr-hover-effect"></div>
                                                </a>
                                            </li> --}}
                                            <li class="nav-item">
                                                <a class="nav-link {{ request()->segment(1) == 'offerwalls' ? 'active' : '' }}"
                                                    href="/offerwalls">
                                                    {{ __('Offerwalls') }}
                                                    <div class="mr-hover-effect"></div>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link {{ request()->segment(1) == 'rewards_staking' ? 'active' : '' }}"
                                                    href="/rewards_staking">
                                                    {{ __('Rewards & Staking') }}
                                                    <div class="mr-hover-effect"></div>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="flex items-center justify-between w-[350px] h-[82px]">
                                            <div class="flex flex-column">
                                                {{-- <a href="{{ route('logout') }}">
                                                    <img src="{{ asset('assets/images/man_icon.png') }}" alt="man_icon"
                                                        width="40px">
                                                </a> --}}
                                                <div class="user-menu-wrap">

                                                    <a class="mini-photo-wrapper" href="#"><img class="mini-photo"
                                                            src="{{ asset('assets/images/man_icon.png') }}" width="36"
                                                            height="36" /></a>

                                                    <div class="menu-container">
                                                        <ul class="user-menu">
                                                            <div class="profile-highlight items-center">
                                                                <img src="{{ asset('assets/images/man_icon.png') }}"
                                                                    alt="profile-img" width=36 height=36>
                                                                <div class="details px-[15px]">
                                                                    <div id="profile-name">{{ Auth::user()->name }}</div>
                                                                </div>
                                                            </div>
                                                            <li class="user-menu__item">
                                                                <a class="user-menu-link" href="/profile">
                                                                    <div>Profile</div>
                                                                </a>
                                                            </li>
                                                            <li class="user-menu__item">
                                                            <li class="user-menu__item"><a class="user-menu-link"
                                                                    href="{{ route('logout') }}"
                                                                    onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();"
                                                                    style="color: #F44336;">
                                                                    {{ __('Logout') }}
                                                                </a></li>
                                                            <form id="logout-form" action="{{ route('logout') }}"
                                                                method="POST" class="d-none">
                                                                @csrf
                                                            </form>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="w-[70%] text-[12px]">
                                                <p class="text-[14px]">Welcome, {{ Auth::user()->name }}</p>
                                                <div class="d-flex justify-content-between">
                                                    <p class="text-[14px]">Your Balance:</p>
                                                    <div>
                                                        <p class="text-[14px]">100,123.00$WAXP</p>
                                                        <p class="text-[14px]">100,123.00$KLEE</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <a href="">
                                                    <img src="{{ asset('assets/images/bell_icon.png') }}" alt="bel_icon"
                                                        width="30px">
                                                </a>
                                            </div>
                                            <!-- <a id="navbarDropdown" class="nav-link dropdown-toggle" href="" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                                                {{ Auth::user()->name }}
                                                                        </a>
                                                                        
                                                                        <div class="" aria-labelledby="navbarDropdown">
                                                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                                                            onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                                                                Logout
                                                                            </a>
                                                                            
                                                                            <form id="logout-form" action="{{ route('logout') }}" mWAXPod="POST" class="d-none">
                                                                                @csrf
                                                                            </form>
                                                                        </div> -->
                                        </div>
                                    @endguest
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
            {{-- <section class="earn-list py-[20px]">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-2">
                            <div class="single-winer">
                                <div class="bottom-area">
                                    <div class="left">
                                        <span class="name">
                                            Leroy Roy
                                        </span>
                                        <span class="cost">0.099 WAXP</span>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="single-winer">
                                <div class="bottom-area">
                                    <div class="left">
                                        <span class="name">
                                            Leroy Roy
                                        </span>
                                        <span class="cost">0.099 WAXP</span>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="single-winer">
                                <div class="bottom-area">
                                    <div class="left">
                                        <span class="name">
                                            Leroy Roy
                                        </span>
                                        <span class="cost">0.099 WAXP</span>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="single-winer">
                                <div class="bottom-area">
                                    <div class="left">
                                        <span class="name">
                                            Leroy Roy
                                        </span>
                                        <span class="cost">0.099 WAXP</span>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="single-winer">
                                <div class="bottom-area">
                                    <div class="left">
                                        <span class="name">
                                            Leroy Roy
                                        </span>
                                        <span class="cost">0.099 WAXP</span>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="single-winer">
                                <div class="bottom-area">
                                    <div class="left">
                                        <span class="name">
                                            Leroy Roy
                                        </span>
                                        <span class="cost">0.099 WAXP</span>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> --}}
        </div>
    </header>

    <main class="mt-[220px]">
        @yield('content')
    </main>

    <!-- Footer Area Start -->
    <footer class="footer" id="footer">
        {{-- <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-3">
                    <div class="footer-widget info-link-widget">
                        <h4 class="title">
                            About
                        </h4>
                        <ul class="link-list">
                            <li>
                                <a href="#">
                                    <i class="fas fa-angle-double-right"></i> About Us
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fas fa-angle-double-right"></i> Contact Us
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fas fa-angle-double-right"></i> Latest Blog
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fas fa-angle-double-right"></i> Authenticity Guarantee
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fas fa-angle-double-right"></i> Customer Reviews
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fas fa-angle-double-right"></i> Privacy Policy

                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="footer-widget info-link-widget">
                        <h4 class="title">
                            My Account
                        </h4>
                        <ul class="link-list">
                            <li>
                                <a href="#">
                                    <i class="fas fa-angle-double-right"></i> Manage Your Account
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fas fa-angle-double-right"></i> How to Deposit
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fas fa-angle-double-right"></i> How to Withdraw
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fas fa-angle-double-right"></i> Account Varification
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fas fa-angle-double-right"></i> Safety & Security
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fas fa-angle-double-right"></i> Membership Level

                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="footer-widget info-link-widget">
                        <h4 class="title">
                            help center
                        </h4>
                        <ul class="link-list">
                            <li>
                                <a href="#">
                                    <i class="fas fa-angle-double-right"></i>Help centre
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fas fa-angle-double-right"></i>FAQ
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fas fa-angle-double-right"></i>Quick Start Guide
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fas fa-angle-double-right"></i>Tutorials
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fas fa-angle-double-right"></i>Borrow
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fas fa-angle-double-right"></i>Lend

                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="footer-widget info-link-widget">
                        <h4 class="title">
                            Legal Info
                        </h4>
                        <ul class="link-list">
                            <li>
                                <a href="#">
                                    <i class="fas fa-angle-double-right"></i>Risk Warnings
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fas fa-angle-double-right"></i>Privacy Notice
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fas fa-angle-double-right"></i>Security
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fas fa-angle-double-right"></i>Terms of Service
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fas fa-angle-double-right"></i>Become Affiliate
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fas fa-angle-double-right"></i>Complaints Policy

                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> --}}
        <div class="copy-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="left-area">
                            <p>Copyright © 2023.All Rights Reserved By <a href="#">KleeblattGAMES</a>
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <ul class="copright-area-links">
                            <li>
                                <a href="#">Terms Of Use</a>
                            </li>
                            <li>
                                <a href="#">Privacy Policy</a>
                            </li>
                            <li>
                                <a href="#">Gamble</a>
                            </li>
                            <li>
                                <a href="#">Aware</a>
                            </li>
                            <li>
                                <a href="#">Help Cente</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Area End -->

    <script>
        document.querySelector('.mini-photo-wrapper').addEventListener('click', function() {
            document.querySelector('.menu-container').classList.toggle('active');
        });
    </script>

</body>

</html>
