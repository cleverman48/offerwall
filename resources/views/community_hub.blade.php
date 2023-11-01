@extends('layouts.app')
@section('title')
{{ __('STARTER ZONE') }}
@endsection

@section('content')
<div class="container">
    <div class="justify-content-center">
        <div class="w-full border-2 border-orange-300 mb-8">
            <h1 class="bg-sky-900 text-center text-[28px] py-8 px-0">
                {{ __("COMMUNITY HUB") }}
            </h1>
            <div class="px-10 py-8">
                <div class="card bg-transparent border-1 border-sky-500">
                    <div class="card-header text-center  text-[24px] py-8 text-amber-500 font-bold">{{ __('Welcome to our Community') }}</div>
                    <div class="card-body">
                        We're excited to have you join our thriving network of gamers. Here you'll find countless ways to fuel your gaming passions through rewards, social features, and more. 
                    </div>
                    <div class="flex py-2 px-2 justify-between">
                        <div class="flex flex-column w-[400px] items-end">
                            <a href="" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Reading flow shortcut</a>
                            <a href="" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Reading flow shortcut</a>
                        </div>
                        <div class="font-small px-4 py-2">
                            As you browse curated offers and discover new games, you'll automatically earn coins with each activity. Redeem your coins for exclusive in-game content, graphics cards, consoles and more. 
                        </div>
                    </div>
                </div>
                <div class="flex justify-between py-12 w-full">
                    <div class="flex flex-column justify-between w-1/2">
                        <div class="flex justify-between px-4 py-4">
                            <p class="pr-12 w-1/2">
                                Link your gaming profiles to see what your friends are playing, challenge them to leaderboard contests, and participate in lively game-related discussions across our active forums.
                            </p>
                            <div class="h-auto max-w-full w-1/2">
                                <video controls>
                                    <source src="/media/cc0-videos/flower.webm" type="video/webm" />
                                    <source src="/media/cc0-videos/flower.mp4" type="video/mp4" />
                                </video>
                            </div>
                        </div>
                        <p class="px-4 py-4">
                            Connect With Fellow Players
                            Link your gaming profiles to see what your friends are playing, challenge them to leaderboard contests, and participate in lively game-related discussions across our active forums.
    
                            Learn About Upcoming Titles
                            From indie finds to major blockbusters, get insider info on new releases through our partner studios and influencer interviews. Be the first to know about game demos, betas, and special deals.
                        </p>
                    </div>
                    <div class="flex justify-between flex-column w-1/2  border-sky-500">
                        <div class="px-8 py-8 text-sky-900 border-2 w-full mb-4 rounded-xl">
                            <h2 class="text-center py-4">
                                Guids & Help
                            </h2>
                            <p>
                                Learn About Upcoming Titles
                                From indie finds to major blockbusters, get insider info on new releases through our partner studios and influencer interviews. Be the first to know about game demos, betas, and special deals.
                            </p>
                        </div>
                        <div class="px-8 py-8 text-sky-900 border-2 w-full rounded-xl">
                            <h2 class="text-center py-4">
                                Aggregated News overview from us
                            </h2>
                            <p>
                                Learn About Upcoming Titles
                                From indie finds to major blockbusters, get insider info on new releases through our partner studios and influencer interviews. Be the first to know about game demos, betas, and special deals.
                            </p>
                        </div>
                    </div>
                </div>
                <p class="w-[100%]">
                    Connect With Fellow Players
                    Link your gaming profiles to see what your friends are playing, challenge them to leaderboard contests, and participate in lively game-related discussions across our active forums.
    
                    Learn About Upcoming Titles
                    From indie finds to major blockbusters, get insider info on new releases through our partner studios and influencer interviews. Be the first to know about game demos, betas, and special deals.
                </p>
            </div>
        </div>
        <div class="w-full border-2 border-orange-300 mb-8">
            <h1 class="bg-sky-900 text-center text-[28px] py-8 px-0">
                {{ __("Ranking WAX Dapps") }}
            </h1>
            <div class="px-10 py-8">
                <div class="w-full flex justify-evenly py-8">
                    <div class="ranking_img w-1/4 flex justify-center items-center">
                        <img src="{{ asset('assets/images/game/dapp_rank_1.jpg') }}" class="w-full" alt="rank_dapp">
                    </div>
                    <div class="ranking_txt flex items-center w-3/4 w-full pl-4">
                        We're excited to have you join our thriving network of gamers. Here you'll find countless ways to fuel your gaming passions through rewards, social features, and more. 
                    </div>
                </div>
                <div class="w-full flex justify-evenly py-8">
                    <div class="ranking_img w-1/4 flex justify-center items-center">
                        <img src="{{ asset('assets/images/game/dapp_rank_1.jpg') }}" class="w-full" alt="rank_dapp">
                    </div>
                    <div class="ranking_txt flex items-center w-3/4 w-full pl-4">
                        We're excited to have you join our thriving network of gamers. Here you'll find countless ways to fuel your gaming passions through rewards, social features, and more. 
                    </div>
                </div>
                <div class="w-full flex justify-evenly py-8">
                    <div class="ranking_img w-1/4 flex justify-center items-center">
                        <img src="{{ asset('assets/images/game/dapp_rank_1.jpg') }}" class="w-full" alt="rank_dapp">
                    </div>
                    <div class="ranking_txt flex items-center w-3/4 w-full pl-4">
                        We're excited to have you join our thriving network of gamers. Here you'll find countless ways to fuel your gaming passions through rewards, social features, and more. 
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full border-2 border-orange-300 mb-8">
            <h1 class="bg-sky-900 text-center text-[28px] py-8 px-0">
                {{ __("Ranking WAX Games") }}
            </h1>
            <div class="px-10 py-8">
                <div class="w-full flex justify-evenly py-8">
                    <div class="ranking_img w-1/4 flex justify-center items-center">
                        <img src="{{ asset('assets/images/game/dapp_rank_2.jpg') }}" class="w-full" alt="rank_dapp">
                    </div>
                    <div class="ranking_txt flex items-center w-3/4 w-full pl-4">
                        We're excited to have you join our thriving network of gamers. Here you'll find countless ways to fuel your gaming passions through rewards, social features, and more. 
                    </div>
                </div>
                <div class="w-full flex justify-evenly py-8">
                    <div class="ranking_img w-1/4 flex justify-center items-center">
                        <img src="{{ asset('assets/images/game/dapp_rank_2.jpg') }}" class="w-full" alt="rank_dapp">
                    </div>
                    <div class="ranking_txt flex items-center w-3/4 w-full pl-4">
                        We're excited to have you join our thriving network of gamers. Here you'll find countless ways to fuel your gaming passions through rewards, social features, and more. 
                    </div>
                </div>
                <div class="w-full flex justify-evenly py-8">
                    <div class="ranking_img w-1/4 flex justify-center items-center">
                        <img src="{{ asset('assets/images/game/dapp_rank_2.jpg') }}" class="w-full" alt="rank_dapp">
                    </div>
                    <div class="ranking_txt flex items-center w-3/4 w-full pl-4">
                        We're excited to have you join our thriving network of gamers. Here you'll find countless ways to fuel your gaming passions through rewards, social features, and more. 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
