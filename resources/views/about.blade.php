@extends('layouts.guest')
@section('header')
    <x-page-header />
@endsection

@push('styles')
    <style>
        a:hover {
            color: black !important;
            text-decoration: underline !important;
        }

        .bg-gray-50 {
            background-color: #ddd !important;
        }

        ol.pl-4 li {
            padding-top: 15px;
        }

        ul.none {
            list-style: none;
        }

        ul>* {
            padding: 5px 0px;
        }

        p {
            margin-top: 8px;
            color: black !important;
        }
    </style>
@endpush
@section('contents')
    <x-bread-crumb pageName="About Binters Integrations" activePage="About" />

    <!-- Contact Section Begin -->
    <section class="contact spad bg-gray-50">
        <div class="container">
            <div class="row">

                <div class="p-4 bg-white border rounded offset-md-1 offset-md-2 col-lg-8 col-md-10 col-sm-6">
                    <div class="contact__widget">
                        <h4 class="text-center">About Binters Integrations
                        </h4>
                        <ol class="pl-4">
                            <li>
                                Introduction <br>
                                Smart people shop at Binters! An e-commerce platform, we offer a wide range of groceries,
                                household items, daily consumables, food supplies, utensils, baby and maternity items, gift
                                items, electronics and other needs at our marketplace with multilevel memberships and a
                                reusable credit reward scheme.
                            </li>
                            <li>
                                Vision <br>
                                Our Vision is to fight poverty through wealth redistribution, in response to Sustainable
                                Development Goal (SDG) 1.
                            </li>
                            <li>
                                Mission <br>
                                Our Mission is to build a network of increasingly wealthy citizens through responsible
                                purchases.
                            </li>
                            <li>
                                Offerings <br>
                                Binters Integrations is an innovative e-commerce platform that offers:
                                <ol class="pl-4">
                                    <li>A smart marketplace for purchase of desired items, with a multilevel membership
                                        system and a reusable credit reward scheme. Buyers earn points from their own
                                        purchases and additional points from the purchases fulfilled by friends and families
                                        whom they have referred to our platform</li>
                                    <li>Partnership with vendors/supermarkets nearest to our users. Our vendors have the
                                        competitive advantage of servicing all our buyers within a catchment area, thereby
                                        increasing their customer base by at least 500% monthly.</li>
                                </ol>
                            </li>
                        </ol>
                        <p class="">
                            Binters Integrations has come to revolutionize the practice of shopping through members’
                            accumulation of points at multiple levels leading to wealth redistribution; thereby fighting
                            poverty and and creating means of livelihoods.
                        </p>
                        <p>Through the multilevel credit reward scheme, we will contribute to the attainment of Sustainable
                            Development Goal 1 – no poverty – while embedding it as our corporate social responsibility. The
                            credits have money equivalence and can be cashed out or used for subsequent shopping. As family
                            budgets usually deplete towards the end of the month, Binters Integrations comes to the rescue
                            by enabling families to access their earned credits in cash or purchase groceries for the family
                            using cash-equivalent credits they have earned through our platform.
                        </p>
                        <p>
                            Vendors/supermarkets, logistics companies and users register for free to use our platform. The
                            advantage to vendors and logistics companies is that selling their goods and services online
                            boosts their businesses and expands their customer base by at least 500%, thereby increasing
                            their daily profit exponentially. Shoppers will participate in reviewing the performance and
                            services of supermarkets and logistics companies. These reviews will inform the decision by
                            Binters Integrations to renew partnership agreements with the providers of these goods and
                            services. Partnership agreements shall be renewed annually.
                        </p>
                        <p>
                            Binters Integrations offers an online e-commerce platform where customers purchase groceries,
                            daily consumables and other items and earn points at multiple levels for shopping with us. We
                            ensure that shoppers gain time and financial benefits while shopping. On our platform, one point
                            equals one naira.
                        </p>
                        <p>Our solution is multifaceted:</p>
                        <ol class="pl-4">
                            <li>Shoppers retain credit rewards convertible to money on their customised online dashboard
                                designed by Binters Integrations; </li>
                            <li>Shoppers are entitled to extra bonuses and commissions each time their referrals make
                                purchases, however, referral is optional;</li>
                            <li>Supermarkets from which members buy groceries retain the customers, increasing their
                                customer base by at least 500%; </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
