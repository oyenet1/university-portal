@extends('layouts.guest')
@section('header')
    <x-page-header />
@endsection

@push('styles')
    <style>
        .bg-gray-50 {
            background-color: #ddd !important;
        }

        ol.pl-4 li {
            padding-top: 15px;
        }

        ul {
            list-style: none;
        }
    </style>
@endpush
@section('contents')
    <x-bread-crumb pageName="Return and Refund Policy" activePage="Return and Refund Policy" />

    <!-- Contact Section Begin -->
    <section class="contact spad bg-gray-50">
        <div class="container">
            <div class="row">

                <div class="p-4 bg-white border rounded offset-md-1 offset-md-2 col-lg-8 col-md-10 col-sm-6">
                    <div class="contact__widget">
                        <h4 class="text-center">Return and Refund Policy</h4>
                        <ol class="pl-2" type="1">
                            <li>Returns
                                <ul class="pl-4" type="disc">
                                    <li>1.1 Returns of products by buyers and acceptance of returned products by sellers
                                        shall
                                        be
                                        managed by
                                        us in accordance with the returns page on the marketplace, as may be amended from
                                        time
                                        to time.
                                        Acceptance of returns shall be in our discretion, subject to compliance with
                                        applicable
                                        laws of
                                        the territory or country.</li>
                                    <li>1.2
                                        Returned products shall be accepted and refunds issued by Binters, for and on behalf
                                        of the
                                        seller.
                                    </li>
                                    <li>
                                        1.3
                                        Perishable items cannot be returned.
                                    </li>
                                    <li>
                                        1.4
                                        Items, once opened or tampered with, cannot be returned.
                                    </li>
                                    <li>
                                        1.5
                                        All returns must be made within 24 hours of purchase to the specific vendor, while
                                        notifying
                                        Binters of such returns through the returns page. The vendor has the option to
                                        replace the item
                                        with a commodity of equal value.
                                    </li>
                                    <li>
                                        1.6

                                        Where replacement has not been done, vendor will deduct the returned item from total
                                        payment due
                                        from Binters. It is the responsibility of both the seller and buyer to ensure
                                        appropriate
                                        information are logged into their back office for tracking by Binters.
                                    </li>
                                    <li>1.7
                                        Changes to our returns page shall be effective in respect of all purchases made from
                                        the date of
                                        publication of the change on our website.
                                    </li>

                                    <li>
                                        1.8
                                        We may suspend or freeze your account at any time at our sole discretion and without
                                        notice or
                                        explanation if suspicious practices are detected, providing that if we cancel any
                                        products or
                                        services you have paid for but not received, and you have not breached our general
                                        terms and
                                        conditions, we will refund you in respect of the same.
                                    </li>
                                    <li>
                                        1.9
                                        Associates will be issued with a voucher, upon successfully placing order through
                                        Binters
                                        marketplace. The voucher bears serial number, date, time, preferred vendor,
                                        preferred delivery
                                        mode, membership code, list of products and prices. Associates must retain all
                                        vouchers for a
                                        period of two (2) years and furnish them to Binters at the Company’s request.
                                    </li>
                                </ul>
                            </li>




                            <li>Refunds

                                <ul class="pl-3">
                                    <li>2.1
                                        Refunds in respect of returned products shall be managed in accordance with the
                                        refunds page on
                                        the marketplace, as may be amended from time to time. Our rules on refunds shall be
                                        exercised in
                                        our discretion, subject to applicable laws of the territory or country. We may offer
                                        refunds, in
                                        our discretion:
                                        <ul class="pl-3">
                                            <li>2.1.1
                                                in respect of the product price;
                                            </li>
                                            <li>2.1.2
                                                by way of refunds to member’s back office, or such other method as we may
                                                determine from time to
                                                time, and such refunds preserved at member’s back office shall be used for
                                                subsequent purchases.
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        2.2
                                        Delivery fee is non-refundable.
                                    </li>
                                    <li>
                                        2.3
                                        Payments made without fulfilment through collection of appropriate products will be
                                        refunded
                                        into the Associate’s wallet, not the originating bank account, to be used for
                                        subsequent
                                        purchases.
                                    </li>
                                    <li>
                                        2.4
                                        Monies refunded into members’ wallets due to unfilled purchases must be used up
                                        within a period
                                        of one month.
                                    </li>
                                </ul>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
