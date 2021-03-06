<?php
$transMakeSureDecimalsMatch = _wpcc('Make sure decimal separators match with the ones you configured for WooCommerce.');
?>

<table class="wcc-settings">

    {{-- SHORT CODES FOR PRODUCT URL AND BUTTON TEXT --}}
    @include('form-items.combined.short-code-buttons-with-label', [
        'title'     => _wpcc('Short codes'),
        'info'      => _wpcc('Short codes that can be used in product URL and button text.'),
        'buttons'   => $buttonsMain,
        'class'     => 'wc-external-product',
    ])

    {{-- PRODUCT URL --}}
    @include('form-items.combined.input-with-label', [
        'name'          => '_wc_product_url',
        'title'         => _wpcc('Product URL'),
        'info'          => _wpcc("Set the product URL."),
        'placeholder'   => 'http://',
        'class'         => 'wc-external-product',
    ])

    {{-- BUTTON TEXT --}}
    @include('form-items.combined.input-with-label', [
        'name'          => '_wc_button_text',
        'title'         => _wpcc('Button Text'),
        'info'          => _wpcc("Set the button text."),
        'placeholder'   => _wpcc('Buy product'),
        'class'         => 'wc-external-product button-text',
    ])

    {{-- REGULAR PRICE SELECTORS --}}
    @include('form-items.combined.multiple-selector-with-attribute', [
        'name'          => '_wc_regular_price_selectors',
        'title'         => _wpcc('Regular Price Selectors'),
        'info'          => _wpcc('CSS selectors for regular price.') . ' ' . $transMakeSureDecimalsMatch .  ' ' . _wpcc_trans_multiple_selectors_first_match(),
        'optionsBox'    => true,
    ])

    {{-- SALE PRICE SELECTORS --}}
    @include('form-items.combined.multiple-selector-with-attribute', [
        'name'          => '_wc_sale_price_selectors',
        'title'         => _wpcc('Sale Price Selectors'),
        'info'          => _wpcc('CSS selectors for sale price.') . ' ' . $transMakeSureDecimalsMatch . ' ' . _wpcc_trans_multiple_selectors_first_match(),
        'optionsBox'    => true,
    ])

    {{-- DOWNLOADABLE FILE URL SELECTORS --}}
    @include('form-items.combined.multiple-selector-with-attribute', [
        'name'          => '_wc_file_url_selectors',
        'title'         => _wpcc('Downloadable File URL Selectors'),
        'info'          => _wpcc('CSS selectors for downloadable files.') . ' ' . _wpcc_trans_multiple_selectors_all_matches(),
        'defaultAttr'   => 'src',
        'class'         => 'wc-download',
        'optionsBox'    => true,
    ])

    {{-- DOWNLOAD LIMIT --}}
    @include('form-items.combined.input-with-label', [
        'name'  => '_wc_download_limit',
        'title' => _wpcc('Download Limit'),
        'info'  => _wpcc('Leave blank for unlimited re-downloads.'),
        'type'  => 'number',
        'class' => 'wc-download'
    ])

    {{-- DOWNLOAD EXPIRY --}}
    @include('form-items.combined.input-with-label', [
        'name'  => '_wc_download_expiry',
        'title' => _wpcc('Download Expiry'),
        'info'  => _wpcc('Enter the number of days before a download link expires, or leave blank.'),
        'type'  => 'number',
        'class' => 'wc-download'
    ])

</table>