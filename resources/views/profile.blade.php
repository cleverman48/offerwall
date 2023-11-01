@extends('layouts.app')
@section('title')
{{ __('PROFILE') }}
@endsection

@section('content')
<link href="{{ asset( 'assets/css/profile.css' ) }}" rel="stylesheet">
<!-- Play Games Area Start -->
<section class="play-games">
    <div class="profile-page">
        <div class="info-table mt-1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="main-box">
                            <div class="main-header-area">
                                <ul class="nav" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="general-tab" data-bs-toggle="tab" data-bs-target="#general_panel" type="button"
                                            role="tab" aria-controls="general_panel" aria-selected="true">General</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="withdraw-tab" data-bs-toggle="tab" data-bs-target="#withdraw_panel" type="button"
                                            role="tab" aria-controls="withdraw-panel" aria-selected="false">Withdraw</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="history-tab" data-bs-toggle="tab" data-bs-target="#history_panel" type="button"
                                            role="tab" aria-controls="history_panel" aria-selected="false">History</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="stake-tab" data-bs-toggle="tab" data-bs-target="#stake_panel" type="button"
                                            role="tab" aria-controls="stake_panel" aria-selected="false">Stake</button>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="general_panel" role="tabpanel" aria-labelledby="general-tab">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-5 p-5 mt-1">
                                                <div class="single-game">
                                                    <img src="assets/images/game/icon1.png" height="100px" alt="">
                                                </div>
                                                <div class="h5 mt-5">
                                                    <div class="h3">Your Balance:</div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <span class="subtitle">Avaliable:</span>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <span class="balance_value text-right"> 100,345 $WAXP</span>
                                                            <span class="balance_value text-right"> 100,345 $KLEE</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="h5 mt-5">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <span class="subtitle">Locked:</span>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <span class="balance_value text-right"> 100,345 $WAXP</span>
                                                            <span class="balance_value text-right"> 100,345 $KLEE</span>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                                <div class="h5 mt-5">
                                                    <div class="row mb-3">
                                                        <div class="col-md-6">
                                                            <span class="subtitle">Staking Level:</span>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <span class="balance_value text-right"> A</span>
                                                        </div>
                                                    </div>
                                                    <a href="#">Learn how to stake $KLEE</a>
                                                </div>
                                            </div>
                                            <div class="col-md-7 p-5">
                                                <div class="textarea w-100 h-100">
                                                    <textarea class="w-100 h-100" name="message"></textarea>
                                                    <button class="mybtn2">Edit/Save</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade p-5" id="withdraw_panel" role="tabpanel" aria-labelledby="withdraw-tab">
                                    <div class="row">
                                        <div class="col-md-7">
                                            <div class="p">Select one of your abliable currencies you want to withdraw.</div>
                                        </div>
                                        <div class="col-md-5">
                                            <input class="mr-2" type="radio" name="withdraw-type" value="waxp"><span class="value">100,234 $WAXP</span><br>
                                            <input class="mr-2" type="radio" name="withdraw-type" value="klee"><span class="value">100,234 $KLEE</span><br>
                                        </div>
                                    </div>
                                    <div class="row mt-5">
                                        <div class="col-md-7">
                                            <div class="p">Select your withdraw method.</div>
                                        </div>
                                        <div class="col-md-5">
                                            <input class="mr-2" type="radio" name="withdraw-method" value="wax"><span class="value">WAX</span><br>
                                            <input class="mr-2" type="radio" name="withdraw-method" value="blockchain"><span class="value">Blockchain</span><br>
                                        </div>
                                    </div>
                                    <div class="row mt-5">
                                        <div class="col-md-7">
                                            <div class="p">Provide your Wallet Address.</div>
                                        </div>
                                        <div class="col-md-5">
                                            <input class="input-box" type="text" name="wallet-address" id="" placeholder="23423423423423">
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <a href="#">Don't have a WAX wallet? No Problem!</a>
                                    </div>
                                    <div class="row mt-5">
                                        <div class="col-md-5">
                                            <a href="#" class="mybtn1">withdraw</a>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="text-group d-flex justify-content-between">
                                                <span>You will received:</span>
                                                <span>XXX</span>
                                            </div>
                                            <div class="p">WITHDRAW WITH ZERO FEES!</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="history_panel" role="tabpanel" aria-labelledby="history-tab">
                                    <div class="inner-table-content">
                                        <div class="tab-content">
                                            <div class="tab-pane fade show active" id="leaderboard" role="tabpanel" aria-labelledby="leaderboard-tab">
                                                <div class="inner-table">
                                                    <div class="responsive-table">
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col">Title</th>
                                                                    <th scope="col">Datetime</th>
                                                                    <th scope="col">Points</th>
                                                                    <th scope="col">Prize</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <img src="assets/images/play/ic4.png" alt="">
                                                                        Dice
                                                                    </td>
                                                                    <td>
                                                                        2023-10-05 18:15:14
                                                                    </td>
                                                                    <td>
                                                                        33528.36
                                                                    </td>
                                                                    <td>
                                                                        40 EUR X 30WR
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <img src="assets/images/play/ic4.png" alt="">
                                                                        Dice
                                                                    </td>
                                                                    <td>
                                                                        2023-10-05 18:15:14
                                                                    </td>
                                                                    <td>
                                                                        33528.36
                                                                    </td>
                                                                    <td>
                                                                        40 EUR X 30WR
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <img src="assets/images/play/ic4.png" alt="">
                                                                        Dice
                                                                    </td>
                                                                    <td>
                                                                        2023-10-05 18:15:14
                                                                    </td>
                                                                    <td>
                                                                        33528.36
                                                                    </td>
                                                                    <td>
                                                                        40 EUR X 30WR
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <img src="assets/images/play/ic4.png" alt="">
                                                                        Dice
                                                                    </td>
                                                                    <td>
                                                                        2023-10-05 18:15:14
                                                                    </td>
                                                                    <td>
                                                                        33528.36
                                                                    </td>
                                                                    <td>
                                                                        40 EUR X 30WR
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <img src="assets/images/play/ic4.png" alt="">
                                                                        Dice
                                                                    </td>
                                                                    <td>
                                                                        2023-10-05 18:15:14
                                                                    </td>
                                                                    <td>
                                                                        33528.36
                                                                    </td>
                                                                    <td>
                                                                        40 EUR X 30WR
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <img src="assets/images/play/ic4.png" alt="">
                                                                        Dice
                                                                    </td>
                                                                    <td>
                                                                        2023-10-05 18:15:14
                                                                    </td>
                                                                    <td>
                                                                        33528.36
                                                                    </td>
                                                                    <td>
                                                                        40 EUR X 30WR
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <img src="assets/images/play/ic4.png" alt="">
                                                                        Dice
                                                                    </td>
                                                                    <td>
                                                                        2023-10-05 18:15:14
                                                                    </td>
                                                                    <td>
                                                                        33528.36
                                                                    </td>
                                                                    <td>
                                                                        40 EUR X 30WR
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <img src="assets/images/play/ic4.png" alt="">
                                                                        Dice
                                                                    </td>
                                                                    <td>
                                                                        2023-10-05 18:15:14
                                                                    </td>
                                                                    <td>
                                                                        33528.36
                                                                    </td>
                                                                    <td>
                                                                        40 EUR X 30WR
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <img src="assets/images/play/ic4.png" alt="">
                                                                        Dice
                                                                    </td>
                                                                    <td>
                                                                        2023-10-05 18:15:14
                                                                    </td>
                                                                    <td>
                                                                        33528.36
                                                                    </td>
                                                                    <td>
                                                                        40 EUR X 30WR
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <img src="assets/images/play/ic4.png" alt="">
                                                                        Dice
                                                                    </td>
                                                                    <td>
                                                                        2023-10-05 18:15:14
                                                                    </td>
                                                                    <td>
                                                                        33528.36
                                                                    </td>
                                                                    <td>
                                                                        40 EUR X 30WR
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="more-info" role="tabpanel" aria-labelledby="more-info-tab">
                                                <div class="info-content">
                                                    <div class="info-box">
                                                        <h4 class="title">
                                                            Tournament Duration
                                                        </h4>
                                                        <p class="text">
                                                            7 Days (Monday 01 UTC - Sunday 23:59 UTC)
                                                        </p>
                                                    </div>
                                                    <div class="info-box two">
                                                        <h4 class="title">
                                                            Applicable Games
                                                        </h4>
                                                        <p class="text">
                                                            All Games Under 'Slots' Category
                                                        </p>
                                                    </div>
                                                    <div class="info-box three">
                                                        <h4 class="title">
                                                            Free Spin Reward Games

                                                        </h4>
                                                        <p class="text">
                                                            Book Of Pyramids, Brave Viking, Desert Treasure, Hawaii
                                                            Cocktails, Lucky Blue, Lucky Lady Clover, Lucky Sweets,
                                                            Princess Of Sky, Princess Royal, Scroll Of Adventure,
                                                            Slotomon Go, West Town Any Softswiss Slots Game | Wager x 40
                                                            times
                                                        </p>
                                                    </div>
                                                    <a href="#" class="mybtn1">Terms and Conditions</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="stake_panel" role="tabpanel" aria-labelledby="stake-tab">
                                    <div class="h1 px-[20px] py-[20px]">COMMING SOON!!!</div>
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

<script src="{{ asset( 'assets/js/bootstrap.min.js' ) }}"></script>

@endsection
