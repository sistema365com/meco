@extends('layouts.lay_admin')

<!-- START @PAGE CONTENT -->
@section('content')
<section id="page-content">

    <!-- Start page header -->
    <div class="header-content">
        <h2><i class="fa fa-comments"></i> FAQ <span>frequently asked questions</span></h2>
        <div class="breadcrumb-wrapper hidden-xs">
            <span class="label">You are here:</span>
            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-home"></i>
                    <a href="{{url('dashboard/index')}}">Dashboard</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <a href="#">Pages</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li class="active">FAQ</li>
            </ol>
        </div><!-- /.breadcrumb-wrapper -->
    </div><!-- /.header-content -->
    <!--/ End page header -->

    <!-- Start body content -->
    <div class="body-content animated fadeIn">

    <div class="row">
    <div class="col-md-12">

    <div class="panel shadow panel-primary">
    <div class="panel-heading">
        <div class="pull-left">
            <h3 class="panel-title">FAQ</h3>
        </div>
        <div class="pull-right">
            <div id="filters-container" class="cbp-l-filters-underline cbp-l-filters-text no-margin">
                <div data-filter="*" class="cbp-filter-item-active cbp-filter-item">
                    All <div class="cbp-filter-counter"></div>
                </div>
                <div data-filter=".seller" class="cbp-filter-item">
                    Sellers <div class="cbp-filter-counter"></div>
                </div>
                <div data-filter=".affiliate" class="cbp-filter-item">
                    Affiliates <div class="cbp-filter-counter"></div>
                </div>
                <div data-filter=".buyer" class="cbp-filter-item">
                    Buyers <div class="cbp-filter-counter"></div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div><!-- /.panel-heading -->
    <div class="panel-body">

    <div id="grid-container" class="cbp cbp-l-grid-faq">
    <div class="cbp-item buyer">
        <div class="cbp-caption">
            <div class="cbp-caption-defaultWrap">
                <i class="fa fa-user"></i> How to redownload items you ordered?
            </div>
            <div class="cbp-caption-activeWrap">
                <div class="cbp-l-caption-body">
                    If the order is attached to your account, click on the Your purchases button from your user profile. On the purchases page, click on the Download button next to the item you want to download.

                    If the order is not attached to your account, go to the download resender tool and enter the email address used at checkout. The email address entered must be the exact email address used at checkout.
                </div>
            </div>
        </div>
    </div>
    <div class="cbp-item seller">
        <div class="cbp-caption">
            <div class="cbp-caption-defaultWrap">
                <i class="fa fa-user-secret"></i> Can sellers make more money by selling an item here exclusively?
            </div>
            <div class="cbp-caption-activeWrap">
                <div class="cbp-l-caption-body">
                    Yes. Sellers receive 55–75% of every sale for items sold exclusively on WrapBootstrap. If the same content is sold on other marketplaces or sites then they receive 35% of every sale.
                </div>
            </div>
        </div>
    </div>
    <div class="cbp-item affiliate">
        <div class="cbp-caption">
            <div class="cbp-caption-defaultWrap">
                <i class="fa fa-user-plus"></i> How much can affiliates earn?
            </div>
            <div class="cbp-caption-activeWrap">
                <div class="cbp-l-caption-body">
                    Affiliates receive 10% commission for items priced at or above $10 USD and 5% for items below $10.
                </div>
            </div>
        </div>
    </div>
    <div class="cbp-item affiliate">
        <div class="cbp-caption">
            <div class="cbp-caption-defaultWrap">
                <i class="fa fa-user-plus"></i> How do affiliates get paid?
            </div>
            <div class="cbp-caption-activeWrap">
                <div class="cbp-l-caption-body">
                    Payments are processed at the end of each calendar month and paid out on the 15th of the following month via PayPal. You must be able to receive money via PayPal to be an affiliate on WrapBootstrap.
                </div>
            </div>
        </div>
    </div>
    <div class="cbp-item buyer">
        <div class="cbp-caption">
            <div class="cbp-caption-defaultWrap">
                <i class="fa fa-user"></i> How to create invoices for your orders?
            </div>
            <div class="cbp-caption-activeWrap">
                <div class="cbp-l-caption-body">
                    The following steps will walk you through the creation of an invoice.
                    <ul class="list-unstyled no-margin">
                        <li>
                            <b>Step 1:</b>
                            First sign in or create an account.
                        </li>
                        <li>
                            <b>Step 2:</b>
                            If the order is not attached to your account, go to the attach orders page to attach the order to your account.

                            See also: How to attach orders to your account
                        </li>
                        <li>
                            <b>Step 3:</b>
                            Once the order is attached to your account, click on the Your purchases button on your user profile. On the purchases page, click on the Invoice button next to the order you want to generate an invoice for.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="cbp-item seller">
        <div class="cbp-caption">
            <div class="cbp-caption-defaultWrap">
                <i class="fa fa-user-secret"></i> Is exclusivity based on the author or the individual file?
            </div>
            <div class="cbp-caption-activeWrap">
                <div class="cbp-l-caption-body">
                    Exclusivity is on a per file basis. During the upload process you are given a chance to select the exclusivity of the item. Selling an item exclusively on WrapBootstrap does not bar you from selling other items on other marketplaces or sites.
                </div>
            </div>
        </div>
    </div>
    <div class="cbp-item seller">
        <div class="cbp-caption">
            <div class="cbp-caption-defaultWrap">
                <i class="fa fa-user-secret"></i> Do sellers retain rights to the items they sell on WrapBootstrap?
            </div>
            <div class="cbp-caption-activeWrap">
                <div class="cbp-l-caption-body">
                    Yes, they are the sellers' creations and they retain full rights to the items they sell here. We simply provide them with a way to sell their creations.
                </div>
            </div>
        </div>
    </div>
    <div class="cbp-item buyer">
        <div class="cbp-caption">
            <div class="cbp-caption-defaultWrap">
                <i class="fa fa-user"></i> How to attach orders to your account?
            </div>
            <div class="cbp-caption-activeWrap">
                <div class="cbp-l-caption-body">
                    The following steps will walk you through attaching your orders to your account.
                    <ul class="list-unstyled no-margin">
                        <li>
                            <b>Step 1:</b>
                            First sign in or create an account.
                        </li>
                        <li>
                            <b>Step 2:</b>
                            Go to the order attacher tool and enter the email address used at checkout. The email address entered must be the exact email address used at checkout.

                            Note: Buyers with registered PayPal accounts may have more than one email address associated with their PayPal accounts.
                        </li>
                        <li>
                            <b>Step 3:</b>
                            While signed into your account, click on the attach link(s) in the email sent by the order attacher. Once the order is attached to your account, click on the Your purchases button on your user profile to redownload the item or create an invoice.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="cbp-item affiliate">
        <div class="cbp-caption">
            <div class="cbp-caption-defaultWrap">
                <i class="fa fa-user-plus"></i> How long do affiliate cookies last?
            </div>
            <div class="cbp-caption-activeWrap">
                <div class="cbp-l-caption-body">
                    Cookies remain in the buyer's browser for 180 days or until they make a purchase, whichever comes first.
                </div>
            </div>
        </div>
    </div>
    <div class="cbp-item seller">
        <div class="cbp-caption">
            <div class="cbp-caption-defaultWrap">
                <i class="fa fa-user-secret"></i> Are items reviewed or will you accept anything?
            </div>
            <div class="cbp-caption-activeWrap">
                <div class="cbp-l-caption-body">
                    Each item goes through an extensive review process to ensure that our quality standards have been met. Please review and follow the guidelines outlined in the submission guidelines before submitting an item for review.
                </div>
            </div>
        </div>
    </div>
    <div class="cbp-item affiliate">
        <div class="cbp-caption">
            <div class="cbp-caption-defaultWrap">
                <i class="fa fa-user-plus"></i> Can I advertise on search engines using WrapBootstrap-related keywords?
            </div>
            <div class="cbp-caption-activeWrap">
                <div class="cbp-l-caption-body">
                    No. You may not bid on WrapBootstrap-related search keywords. Anyone violating this rule will be banned from our affiliate program.
                </div>
            </div>
        </div>
    </div>
    <div class="cbp-item seller">
        <div class="cbp-caption">
            <div class="cbp-caption-defaultWrap">
                <i class="fa fa-user-secret"></i> How do sellers get paid?
            </div>
            <div class="cbp-caption-activeWrap">
                <div class="cbp-l-caption-body">
                    Payments are processed at the end of each calendar month and paid out on the 15th of the following month via PayPal or Payoneer. You must be able to receive money via PayPal or Payoneer to sell on WrapBootstrap.
                </div>
            </div>
        </div>
    </div>
    <div class="cbp-item affiliate">
        <div class="cbp-caption">
            <div class="cbp-caption-defaultWrap">
                <i class="fa fa-user-plus"></i> Can I receive earnings from items that I purchase with my affiliate link?
            </div>
            <div class="cbp-caption-activeWrap">
                <div class="cbp-l-caption-body">
                    No. Anyone violating this rule will be banned from our affiliate program.
                </div>
            </div>
        </div>
    </div>
    <div class="cbp-item seller">
        <div class="cbp-caption">
            <div class="cbp-caption-defaultWrap">
                <i class="fa fa-user-secret"></i> Are sellers required to support the items they upload?
            </div>
            <div class="cbp-caption-activeWrap">
                <div class="cbp-l-caption-body">
                    Providing support is a great way to ensure repeat business from buyers, but no, it's not required unless the file is actually broken.
                </div>
            </div>
        </div>
    </div>
    </div>

    </div><!-- /.panel-body -->
    </div>

    </div>
    </div><!-- /.row -->

    </div><!-- /.body-content -->
    <!--/ End body content -->

    <!-- Start footer content -->
    @include('layouts._footer-admin')
    <!--/ End footer content -->

</section><!-- /#page-content -->
@stop
<!--/ END PAGE CONTENT -->
