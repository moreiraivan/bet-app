<html lang="en" data-critters-container="">

<head>
    <meta charset="utf-8">
    <title>Conta VIP</title>
    <base href="/">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="/f/favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="/f/favicon.png">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/fontawesome.min.css"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="manifest" href="{{ asset('/manifest.json') }}">
    <style type="text/css">
        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 300;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmSU5fCRc4AMP6lbBP.woff2) format('woff2');
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 300;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmSU5fABc4AMP6lbBP.woff2) format('woff2');
            unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 300;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmSU5fCBc4AMP6lbBP.woff2) format('woff2');
            unicode-range: U+1F00-1FFF;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 300;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmSU5fBxc4AMP6lbBP.woff2) format('woff2');
            unicode-range: U+0370-03FF;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 300;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmSU5fCxc4AMP6lbBP.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 300;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmSU5fChc4AMP6lbBP.woff2) format('woff2');
            unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 300;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmSU5fBBc4AMP6lQ.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/roboto/v30/KFOmCnqEu92Fr1Mu72xKKTU1Kvnz.woff2) format('woff2');
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/roboto/v30/KFOmCnqEu92Fr1Mu5mxKKTU1Kvnz.woff2) format('woff2');
            unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/roboto/v30/KFOmCnqEu92Fr1Mu7mxKKTU1Kvnz.woff2) format('woff2');
            unicode-range: U+1F00-1FFF;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/roboto/v30/KFOmCnqEu92Fr1Mu4WxKKTU1Kvnz.woff2) format('woff2');
            unicode-range: U+0370-03FF;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/roboto/v30/KFOmCnqEu92Fr1Mu7WxKKTU1Kvnz.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/roboto/v30/KFOmCnqEu92Fr1Mu7GxKKTU1Kvnz.woff2) format('woff2');
            unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/roboto/v30/KFOmCnqEu92Fr1Mu4mxKKTU1Kg.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 500;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmEU9fCRc4AMP6lbBP.woff2) format('woff2');
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 500;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmEU9fABc4AMP6lbBP.woff2) format('woff2');
            unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 500;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmEU9fCBc4AMP6lbBP.woff2) format('woff2');
            unicode-range: U+1F00-1FFF;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 500;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmEU9fBxc4AMP6lbBP.woff2) format('woff2');
            unicode-range: U+0370-03FF;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 500;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmEU9fCxc4AMP6lbBP.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 500;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmEU9fChc4AMP6lbBP.woff2) format('woff2');
            unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 500;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmEU9fBBc4AMP6lQ.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }
    </style>
    <style type="text/css">
        @font-face {
            font-family: 'Material Icons';
            font-style: normal;
            font-weight: 400;
            src: url(https://fonts.gstatic.com/s/materialicons/v140/flUhRq6tzZclQEJ-Vdg-IuiaDsNcIhQ8tQ.woff2) format('woff2');
        }

        .material-icons {
            font-family: 'Material Icons';
            font-weight: normal;
            font-style: normal;
            font-size: 24px;
            line-height: 1;
            letter-spacing: normal;
            text-transform: none;
            display: inline-block;
            white-space: nowrap;
            word-wrap: normal;
            direction: ltr;
            -webkit-font-feature-settings: 'liga';
            -webkit-font-smoothing: antialiased;
        }
    </style>
    <meta name="theme-color" content="#1976d2">
    <style>
        @import"https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,500;1,600;1,700;1,800;1,900&display=swap";

        html {
            --mat-option-selected-state-label-text-color: #673ab7;
            --mat-option-label-text-color: rgba(0, 0, 0, .87);
            --mat-option-hover-state-layer-color: rgba(0, 0, 0, .04);
            --mat-option-focus-state-layer-color: rgba(0, 0, 0, .04);
            --mat-option-selected-state-layer-color: rgba(0, 0, 0, .04)
        }

        html {
            --mat-optgroup-label-text-color: rgba(0, 0, 0, .87)
        }

        html {
            --mat-option-label-text-font: Roboto, sans-serif;
            --mat-option-label-text-line-height: 24px;
            --mat-option-label-text-size: 16px;
            --mat-option-label-text-tracking: .03125em;
            --mat-option-label-text-weight: 400
        }

        html {
            --mat-optgroup-label-text-font: Roboto, sans-serif;
            --mat-optgroup-label-text-line-height: 24px;
            --mat-optgroup-label-text-size: 16px;
            --mat-optgroup-label-text-tracking: .03125em;
            --mat-optgroup-label-text-weight: 400
        }

        html {
            --mdc-filled-text-field-caret-color: #673ab7;
            --mdc-filled-text-field-focus-active-indicator-color: #673ab7;
            --mdc-filled-text-field-focus-label-text-color: rgba(103, 58, 183, .87);
            --mdc-filled-text-field-container-color: whitesmoke;
            --mdc-filled-text-field-disabled-container-color: #fafafa;
            --mdc-filled-text-field-label-text-color: rgba(0, 0, 0, .6);
            --mdc-filled-text-field-disabled-label-text-color: rgba(0, 0, 0, .38);
            --mdc-filled-text-field-input-text-color: rgba(0, 0, 0, .87);
            --mdc-filled-text-field-disabled-input-text-color: rgba(0, 0, 0, .38);
            --mdc-filled-text-field-input-text-placeholder-color: rgba(0, 0, 0, .6);
            --mdc-filled-text-field-error-focus-label-text-color: #f44336;
            --mdc-filled-text-field-error-label-text-color: #f44336;
            --mdc-filled-text-field-error-caret-color: #f44336;
            --mdc-filled-text-field-active-indicator-color: rgba(0, 0, 0, .42);
            --mdc-filled-text-field-disabled-active-indicator-color: rgba(0, 0, 0, .06);
            --mdc-filled-text-field-hover-active-indicator-color: rgba(0, 0, 0, .87);
            --mdc-filled-text-field-error-active-indicator-color: #f44336;
            --mdc-filled-text-field-error-focus-active-indicator-color: #f44336;
            --mdc-filled-text-field-error-hover-active-indicator-color: #f44336;
            --mdc-outlined-text-field-caret-color: #673ab7;
            --mdc-outlined-text-field-focus-outline-color: #673ab7;
            --mdc-outlined-text-field-focus-label-text-color: rgba(103, 58, 183, .87);
            --mdc-outlined-text-field-label-text-color: rgba(0, 0, 0, .6);
            --mdc-outlined-text-field-disabled-label-text-color: rgba(0, 0, 0, .38);
            --mdc-outlined-text-field-input-text-color: rgba(0, 0, 0, .87);
            --mdc-outlined-text-field-disabled-input-text-color: rgba(0, 0, 0, .38);
            --mdc-outlined-text-field-input-text-placeholder-color: rgba(0, 0, 0, .6);
            --mdc-outlined-text-field-error-caret-color: #f44336;
            --mdc-outlined-text-field-error-focus-label-text-color: #f44336;
            --mdc-outlined-text-field-error-label-text-color: #f44336;
            --mdc-outlined-text-field-outline-color: rgba(0, 0, 0, .38);
            --mdc-outlined-text-field-disabled-outline-color: rgba(0, 0, 0, .06);
            --mdc-outlined-text-field-hover-outline-color: rgba(0, 0, 0, .87);
            --mdc-outlined-text-field-error-focus-outline-color: #f44336;
            --mdc-outlined-text-field-error-hover-outline-color: #f44336;
            --mdc-outlined-text-field-error-outline-color: #f44336;
            --mat-form-field-disabled-input-text-placeholder-color: rgba(0, 0, 0, .38)
        }

        html {
            --mdc-filled-text-field-label-text-font: Roboto, sans-serif;
            --mdc-filled-text-field-label-text-size: 16px;
            --mdc-filled-text-field-label-text-tracking: .03125em;
            --mdc-filled-text-field-label-text-weight: 400;
            --mdc-outlined-text-field-label-text-font: Roboto, sans-serif;
            --mdc-outlined-text-field-label-text-size: 16px;
            --mdc-outlined-text-field-label-text-tracking: .03125em;
            --mdc-outlined-text-field-label-text-weight: 400;
            --mat-form-field-container-text-font: Roboto, sans-serif;
            --mat-form-field-container-text-line-height: 24px;
            --mat-form-field-container-text-size: 16px;
            --mat-form-field-container-text-tracking: .03125em;
            --mat-form-field-container-text-weight: 400;
            --mat-form-field-outlined-label-text-populated-size: 16px;
            --mat-form-field-subscript-text-font: Roboto, sans-serif;
            --mat-form-field-subscript-text-line-height: 20px;
            --mat-form-field-subscript-text-size: 12px;
            --mat-form-field-subscript-text-tracking: .0333333333em;
            --mat-form-field-subscript-text-weight: 400
        }

        html {
            --mat-select-panel-background-color: white;
            --mat-select-enabled-trigger-text-color: rgba(0, 0, 0, .87);
            --mat-select-disabled-trigger-text-color: rgba(0, 0, 0, .38);
            --mat-select-placeholder-text-color: rgba(0, 0, 0, .6);
            --mat-select-enabled-arrow-color: rgba(0, 0, 0, .54);
            --mat-select-disabled-arrow-color: rgba(0, 0, 0, .38);
            --mat-select-focused-arrow-color: rgba(103, 58, 183, .87);
            --mat-select-invalid-arrow-color: rgba(244, 67, 54, .87)
        }

        html {
            --mat-select-trigger-text-font: Roboto, sans-serif;
            --mat-select-trigger-text-line-height: 24px;
            --mat-select-trigger-text-size: 16px;
            --mat-select-trigger-text-tracking: .03125em;
            --mat-select-trigger-text-weight: 400
        }

        html {
            --mat-autocomplete-background-color: white
        }

        html {
            --mat-menu-item-label-text-color: rgba(0, 0, 0, .87);
            --mat-menu-item-icon-color: rgba(0, 0, 0, .87);
            --mat-menu-item-hover-state-layer-color: rgba(0, 0, 0, .04);
            --mat-menu-item-focus-state-layer-color: rgba(0, 0, 0, .04);
            --mat-menu-container-color: white
        }

        html {
            --mat-menu-item-label-text-font: Roboto, sans-serif;
            --mat-menu-item-label-text-size: 16px;
            --mat-menu-item-label-text-tracking: .03125em;
            --mat-menu-item-label-text-line-height: 24px;
            --mat-menu-item-label-text-weight: 400
        }

        html {
            --mat-paginator-container-text-color: rgba(0, 0, 0, .87);
            --mat-paginator-container-background-color: white;
            --mat-paginator-enabled-icon-color: rgba(0, 0, 0, .54);
            --mat-paginator-disabled-icon-color: rgba(0, 0, 0, .12)
        }

        html {
            --mat-paginator-container-size: 56px
        }

        html {
            --mat-paginator-container-text-font: Roboto, sans-serif;
            --mat-paginator-container-text-line-height: 20px;
            --mat-paginator-container-text-size: 12px;
            --mat-paginator-container-text-tracking: .0333333333em;
            --mat-paginator-container-text-weight: 400;
            --mat-paginator-select-trigger-text-size: 12px
        }

        html {
            --mdc-checkbox-disabled-selected-icon-color: rgba(0, 0, 0, .38);
            --mdc-checkbox-disabled-unselected-icon-color: rgba(0, 0, 0, .38);
            --mdc-checkbox-selected-checkmark-color: #000;
            --mdc-checkbox-selected-focus-icon-color: #ffd740;
            --mdc-checkbox-selected-hover-icon-color: #ffd740;
            --mdc-checkbox-selected-icon-color: #ffd740;
            --mdc-checkbox-selected-pressed-icon-color: #ffd740;
            --mdc-checkbox-unselected-focus-icon-color: #212121;
            --mdc-checkbox-unselected-hover-icon-color: #212121;
            --mdc-checkbox-unselected-icon-color: rgba(0, 0, 0, .54);
            --mdc-checkbox-unselected-pressed-icon-color: rgba(0, 0, 0, .54);
            --mdc-checkbox-selected-focus-state-layer-color: #ffd740;
            --mdc-checkbox-selected-hover-state-layer-color: #ffd740;
            --mdc-checkbox-selected-pressed-state-layer-color: #ffd740;
            --mdc-checkbox-unselected-focus-state-layer-color: black;
            --mdc-checkbox-unselected-hover-state-layer-color: black;
            --mdc-checkbox-unselected-pressed-state-layer-color: black
        }

        html {
            --mdc-checkbox-state-layer-size: 40px
        }

        html {
            --mat-table-background-color: white;
            --mat-table-header-headline-color: rgba(0, 0, 0, .87);
            --mat-table-row-item-label-text-color: rgba(0, 0, 0, .87);
            --mat-table-row-item-outline-color: rgba(0, 0, 0, .12)
        }

        html {
            --mat-table-header-container-height: 56px;
            --mat-table-footer-container-height: 52px;
            --mat-table-row-item-container-height: 52px
        }

        html {
            --mat-table-header-headline-font: Roboto, sans-serif;
            --mat-table-header-headline-line-height: 22px;
            --mat-table-header-headline-size: 14px;
            --mat-table-header-headline-weight: 500;
            --mat-table-header-headline-tracking: .0071428571em;
            --mat-table-row-item-label-text-font: Roboto, sans-serif;
            --mat-table-row-item-label-text-line-height: 20px;
            --mat-table-row-item-label-text-size: 14px;
            --mat-table-row-item-label-text-weight: 400;
            --mat-table-row-item-label-text-tracking: .0178571429em;
            --mat-table-footer-supporting-text-font: Roboto, sans-serif;
            --mat-table-footer-supporting-text-line-height: 20px;
            --mat-table-footer-supporting-text-size: 14px;
            --mat-table-footer-supporting-text-weight: 400;
            --mat-table-footer-supporting-text-tracking: .0178571429em
        }

        html {
            --mat-badge-background-color: #673ab7;
            --mat-badge-text-color: white;
            --mat-badge-disabled-state-background-color: #b9b9b9;
            --mat-badge-disabled-state-text-color: rgba(0, 0, 0, .38)
        }

        html {
            --mat-badge-text-font: Roboto, sans-serif;
            --mat-badge-text-size: 12px;
            --mat-badge-text-weight: 600;
            --mat-badge-small-size-text-size: 9px;
            --mat-badge-large-size-text-size: 24px
        }

        html {
            --mat-bottom-sheet-container-text-color: rgba(0, 0, 0, .87);
            --mat-bottom-sheet-container-background-color: white
        }

        html {
            --mat-bottom-sheet-container-text-font: Roboto, sans-serif;
            --mat-bottom-sheet-container-text-line-height: 20px;
            --mat-bottom-sheet-container-text-size: 14px;
            --mat-bottom-sheet-container-text-tracking: .0178571429em;
            --mat-bottom-sheet-container-text-weight: 400
        }

        html {
            --mat-legacy-button-toggle-text-color: rgba(0, 0, 0, .38);
            --mat-legacy-button-toggle-state-layer-color: rgba(0, 0, 0, .12);
            --mat-legacy-button-toggle-selected-state-text-color: rgba(0, 0, 0, .54);
            --mat-legacy-button-toggle-selected-state-background-color: #e0e0e0;
            --mat-legacy-button-toggle-disabled-state-text-color: rgba(0, 0, 0, .26);
            --mat-legacy-button-toggle-disabled-state-background-color: #eeeeee;
            --mat-legacy-button-toggle-disabled-selected-state-background-color: #bdbdbd;
            --mat-standard-button-toggle-text-color: rgba(0, 0, 0, .87);
            --mat-standard-button-toggle-background-color: white;
            --mat-standard-button-toggle-state-layer-color: black;
            --mat-standard-button-toggle-selected-state-background-color: #e0e0e0;
            --mat-standard-button-toggle-selected-state-text-color: rgba(0, 0, 0, .87);
            --mat-standard-button-toggle-disabled-state-text-color: rgba(0, 0, 0, .26);
            --mat-standard-button-toggle-disabled-state-background-color: white;
            --mat-standard-button-toggle-disabled-selected-state-text-color: rgba(0, 0, 0, .87);
            --mat-standard-button-toggle-disabled-selected-state-background-color: #bdbdbd;
            --mat-standard-button-toggle-divider-color: #e0e0e0
        }

        html {
            --mat-standard-button-toggle-height: 48px
        }

        html {
            --mat-legacy-button-toggle-text-font: Roboto, sans-serif;
            --mat-standard-button-toggle-text-font: Roboto, sans-serif
        }

        html {
            --mat-datepicker-calendar-date-selected-state-text-color: white;
            --mat-datepicker-calendar-date-selected-state-background-color: #673ab7;
            --mat-datepicker-calendar-date-selected-disabled-state-background-color: rgba(103, 58, 183, .4);
            --mat-datepicker-calendar-date-today-selected-state-outline-color: white;
            --mat-datepicker-calendar-date-focus-state-background-color: rgba(103, 58, 183, .3);
            --mat-datepicker-calendar-date-hover-state-background-color: rgba(103, 58, 183, .3);
            --mat-datepicker-toggle-active-state-icon-color: #673ab7;
            --mat-datepicker-calendar-date-in-range-state-background-color: rgba(103, 58, 183, .2);
            --mat-datepicker-calendar-date-in-comparison-range-state-background-color: rgba(249, 171, 0, .2);
            --mat-datepicker-calendar-date-in-overlap-range-state-background-color: #a8dab5;
            --mat-datepicker-calendar-date-in-overlap-range-selected-state-background-color: #46a35e;
            --mat-datepicker-toggle-icon-color: rgba(0, 0, 0, .54);
            --mat-datepicker-calendar-body-label-text-color: rgba(0, 0, 0, .54);
            --mat-datepicker-calendar-period-button-icon-color: rgba(0, 0, 0, .54);
            --mat-datepicker-calendar-navigation-button-icon-color: rgba(0, 0, 0, .54);
            --mat-datepicker-calendar-header-divider-color: rgba(0, 0, 0, .12);
            --mat-datepicker-calendar-header-text-color: rgba(0, 0, 0, .54);
            --mat-datepicker-calendar-date-today-outline-color: rgba(0, 0, 0, .38);
            --mat-datepicker-calendar-date-today-disabled-state-outline-color: rgba(0, 0, 0, .18);
            --mat-datepicker-calendar-date-text-color: rgba(0, 0, 0, .87);
            --mat-datepicker-calendar-date-outline-color: transparent;
            --mat-datepicker-calendar-date-disabled-state-text-color: rgba(0, 0, 0, .38);
            --mat-datepicker-calendar-date-preview-state-outline-color: rgba(0, 0, 0, .24);
            --mat-datepicker-range-input-separator-color: rgba(0, 0, 0, .87);
            --mat-datepicker-range-input-disabled-state-separator-color: rgba(0, 0, 0, .38);
            --mat-datepicker-range-input-disabled-state-text-color: rgba(0, 0, 0, .38);
            --mat-datepicker-calendar-container-background-color: white;
            --mat-datepicker-calendar-container-text-color: rgba(0, 0, 0, .87)
        }

        html {
            --mat-datepicker-calendar-text-font: Roboto, sans-serif;
            --mat-datepicker-calendar-text-size: 13px;
            --mat-datepicker-calendar-body-label-text-size: 14px;
            --mat-datepicker-calendar-body-label-text-weight: 500;
            --mat-datepicker-calendar-period-button-text-size: 14px;
            --mat-datepicker-calendar-period-button-text-weight: 500;
            --mat-datepicker-calendar-header-text-size: 11px;
            --mat-datepicker-calendar-header-text-weight: 400
        }

        html {
            --mat-divider-color: rgba(0, 0, 0, .12)
        }

        html {
            --mat-expansion-container-background-color: white;
            --mat-expansion-container-text-color: rgba(0, 0, 0, .87);
            --mat-expansion-actions-divider-color: rgba(0, 0, 0, .12);
            --mat-expansion-header-hover-state-layer-color: rgba(0, 0, 0, .04);
            --mat-expansion-header-focus-state-layer-color: rgba(0, 0, 0, .04);
            --mat-expansion-header-disabled-state-text-color: rgba(0, 0, 0, .26);
            --mat-expansion-header-text-color: rgba(0, 0, 0, .87);
            --mat-expansion-header-description-color: rgba(0, 0, 0, .54);
            --mat-expansion-header-indicator-color: rgba(0, 0, 0, .54)
        }

        html {
            --mat-expansion-header-collapsed-state-height: 48px;
            --mat-expansion-header-expanded-state-height: 64px
        }

        html {
            --mat-expansion-header-text-font: Roboto, sans-serif;
            --mat-expansion-header-text-size: 14px;
            --mat-expansion-header-text-weight: 500;
            --mat-expansion-header-text-line-height: inherit;
            --mat-expansion-header-text-tracking: inherit;
            --mat-expansion-container-text-font: Roboto, sans-serif;
            --mat-expansion-container-text-line-height: 20px;
            --mat-expansion-container-text-size: 14px;
            --mat-expansion-container-text-tracking: .0178571429em;
            --mat-expansion-container-text-weight: 400
        }

        html {
            --mat-grid-list-tile-header-primary-text-size: 14px;
            --mat-grid-list-tile-header-secondary-text-size: 12px;
            --mat-grid-list-tile-footer-primary-text-size: 14px;
            --mat-grid-list-tile-footer-secondary-text-size: 12px
        }

        html {
            --mat-icon-color: inherit
        }

        html {
            --mat-sidenav-container-divider-color: rgba(0, 0, 0, .12);
            --mat-sidenav-container-background-color: white;
            --mat-sidenav-container-text-color: rgba(0, 0, 0, .87);
            --mat-sidenav-content-background-color: #fafafa;
            --mat-sidenav-content-text-color: rgba(0, 0, 0, .87);
            --mat-sidenav-scrim-color: rgba(0, 0, 0, .6)
        }

        html {
            --mat-stepper-header-icon-foreground-color: white;
            --mat-stepper-header-selected-state-icon-background-color: #673ab7;
            --mat-stepper-header-selected-state-icon-foreground-color: white;
            --mat-stepper-header-done-state-icon-background-color: #673ab7;
            --mat-stepper-header-done-state-icon-foreground-color: white;
            --mat-stepper-header-edit-state-icon-background-color: #673ab7;
            --mat-stepper-header-edit-state-icon-foreground-color: white;
            --mat-stepper-container-color: white;
            --mat-stepper-line-color: rgba(0, 0, 0, .12);
            --mat-stepper-header-hover-state-layer-color: rgba(0, 0, 0, .04);
            --mat-stepper-header-focus-state-layer-color: rgba(0, 0, 0, .04);
            --mat-stepper-header-label-text-color: rgba(0, 0, 0, .54);
            --mat-stepper-header-optional-label-text-color: rgba(0, 0, 0, .54);
            --mat-stepper-header-selected-state-label-text-color: rgba(0, 0, 0, .87);
            --mat-stepper-header-error-state-label-text-color: #f44336;
            --mat-stepper-header-icon-background-color: rgba(0, 0, 0, .54);
            --mat-stepper-header-error-state-icon-foreground-color: #f44336;
            --mat-stepper-header-error-state-icon-background-color: transparent
        }

        html {
            --mat-stepper-header-height: 72px
        }

        html {
            --mat-stepper-container-text-font: Roboto, sans-serif;
            --mat-stepper-header-label-text-font: Roboto, sans-serif;
            --mat-stepper-header-label-text-size: 14px;
            --mat-stepper-header-label-text-weight: 400;
            --mat-stepper-header-error-state-label-text-size: 16px;
            --mat-stepper-header-selected-state-label-text-size: 16px;
            --mat-stepper-header-selected-state-label-text-weight: 400
        }

        html {
            --mat-toolbar-container-background-color: whitesmoke;
            --mat-toolbar-container-text-color: rgba(0, 0, 0, .87)
        }

        html {
            --mat-toolbar-standard-height: 64px;
            --mat-toolbar-mobile-height: 56px
        }

        html {
            --mat-toolbar-title-text-font: Roboto, sans-serif;
            --mat-toolbar-title-text-line-height: 32px;
            --mat-toolbar-title-text-size: 20px;
            --mat-toolbar-title-text-tracking: .0125em;
            --mat-toolbar-title-text-weight: 500
        }

        *,
        :after,
        :before {
            box-sizing: border-box
        }

        body {
            margin: 0;
            padding: 0;
            font-family: Poppins !important;
            position: relative
        }

        html,
        body {
            height: 100%
        }

        body {
            margin: 0;
            font-family: Roboto, Helvetica Neue, sans-serif
        }
    </style>
    <link rel="stylesheet" href="styles.61112d23c67194c1.css" media="all" onload="this.media='all'"><noscript>
        <link rel="stylesheet" href="styles.61112d23c67194c1.css">
    </noscript>
    <style type="text/css"></style>
    <style>
        .footer[_ngcontent-ng-c4005126487] {
            position: fixed;
            bottom: 0;
            width: 100%;
            z-index: 9999;
            padding: 15px 10px;
            background: white;
            box-shadow: 0 19px 38px #0000004d, 0 15px 12px #00000038
        }

        .footer.footer--pro[_ngcontent-ng-c4005126487] {
            background: black
        }

        .footer.footer--pro[_ngcontent-ng-c4005126487] .footer--content[_ngcontent-ng-c4005126487] button[_ngcontent-ng-c4005126487] {
            color: #bcbbc1;
            background: #3f3f3f
        }

        @media screen and (min-width: 769px) {
            .footer[_ngcontent-ng-c4005126487] .footer--content[_ngcontent-ng-c4005126487] {
                max-width: 600px;
                width: 100%;
                display: flex;
                margin: 0 auto;
                flex-direction: row;
                justify-content: space-between
            }
        }

        .footer[_ngcontent-ng-c4005126487] .footer--content[_ngcontent-ng-c4005126487] {
            width: 100%;
            display: flex;
            margin: 0 auto;
            flex-direction: row;
            justify-content: space-between
        }

        .footer[_ngcontent-ng-c4005126487] .footer--content[_ngcontent-ng-c4005126487] button[_ngcontent-ng-c4005126487] {
            font-size: 14px;
            display: flex;
            flex-direction: column;
            align-items: center;
            border: none;
            justify-content: center;
            padding: 15px;
            margin: 0 5px;
            border-radius: 50px;
            cursor: pointer;
            font-weight: 800;
            width: 100%;
            color: #bcbbc1;
            background: white;
            transition: all .3s ease-in-out
        }

        .footer[_ngcontent-ng-c4005126487] .footer--content[_ngcontent-ng-c4005126487] button.active[_ngcontent-ng-c4005126487] {
            background: #A74676;
            color: #fff;
            transition: all .3s ease-in-out
        }

        .footer[_ngcontent-ng-c4005126487] .footer--content[_ngcontent-ng-c4005126487] button.active[_ngcontent-ng-c4005126487] svg[_ngcontent-ng-c4005126487] {
            fill: #fff;
            transition: all .3s ease-in-out
        }

        .footer[_ngcontent-ng-c4005126487] .footer--content[_ngcontent-ng-c4005126487] button[_ngcontent-ng-c4005126487] svg[_ngcontent-ng-c4005126487] {
            width: 24px;
            height: 24px;
            fill: #bcbbc1;
            transition: all .3s ease-in-out
        }

        .withdraw-popup[_ngcontent-ng-c4005126487] {
            position: fixed;
            bottom: 120px;
            right: 20px;
            background: #A74676;
            z-index: 9999;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 10px;
            border-radius: 50px;
            box-shadow: 0 10px 20px #00000030, 0 3px 3px #0000003b
        }

        .withdraw-popup[_ngcontent-ng-c4005126487] svg[_ngcontent-ng-c4005126487] {
            width: 30px;
            fill: #fff;
            height: 30px
        }
    </style>
    <style>
        .container[_ngcontent-ng-c2787089614] {
            display: flex;
            flex-direction: row;
            position: absolute;
            border-radius: 28px;
            padding: 20px;
            width: 95%;
            align-items: center;
            z-index: 999999;
            background: white;
            box-shadow: 0 1px 3px #0000001f, 0 1px 2px #0000003d;
            left: 0;
            right: 0;
            margin: -100px auto 0;
            transition: all ease-in-out .5s;
            will-change: auto
        }

        .container[_ngcontent-ng-c2787089614] .logo[_ngcontent-ng-c2787089614] {
            width: 50px;
            height: 50px;
            border-radius: 10px
        }

        .container[_ngcontent-ng-c2787089614] .information--container[_ngcontent-ng-c2787089614] {
            display: flex;
            flex-direction: column;
            margin-left: 10px
        }

        .container[_ngcontent-ng-c2787089614] .information--container[_ngcontent-ng-c2787089614] .title[_ngcontent-ng-c2787089614] {
            font-weight: 700;
            margin: 0;
            font-size: 14px
        }

        .container[_ngcontent-ng-c2787089614] .information--container[_ngcontent-ng-c2787089614] .description[_ngcontent-ng-c2787089614] {
            margin: 0;
            font-size: 12px
        }

        .container[_ngcontent-ng-c2787089614] .now[_ngcontent-ng-c2787089614] {
            position: absolute;
            margin: 0;
            color: gray;
            top: 14px;
            right: 20px;
            font-size: 12px
        }
    </style>
    <style>
        .container[_ngcontent-ng-c260969270] {
            display: flex;
            flex-direction: column;
            align-items: center;
            background: #F7F7F7;
            height: 100%;
            z-index: 1
        }

        .container.container--pro[_ngcontent-ng-c260969270] {
            height: -moz-fit-content;
            height: fit-content;
            background: black
        }

        .container.container--pro[_ngcontent-ng-c260969270] .content--wrapper[_ngcontent-ng-c260969270] .logout--container[_ngcontent-ng-c260969270] {
            display: flex;
            flex-direction: row;
            width: 100%;
            align-items: center;
            justify-content: flex-end;
            margin: 0 0 12px
        }

        .container.container--pro[_ngcontent-ng-c260969270] .content--wrapper[_ngcontent-ng-c260969270] .logout--container[_ngcontent-ng-c260969270] .mat-mdc-outlined-button {
            color: #fff;
            border-color: #fff
        }

        .container.container--pro[_ngcontent-ng-c260969270] .content--wrapper[_ngcontent-ng-c260969270] .header[_ngcontent-ng-c260969270] .info--wrapper[_ngcontent-ng-c260969270] .info-user--wrapper[_ngcontent-ng-c260969270] .title[_ngcontent-ng-c260969270],
        .container.container--pro[_ngcontent-ng-c260969270] .content--wrapper[_ngcontent-ng-c260969270] .header[_ngcontent-ng-c260969270] .info--wrapper[_ngcontent-ng-c260969270] .info-user--wrapper[_ngcontent-ng-c260969270] .description[_ngcontent-ng-c260969270] {
            color: #fff
        }

        .container[_ngcontent-ng-c260969270] .content--wrapper[_ngcontent-ng-c260969270] {
            display: flex;
            padding: 20px 20px 120px;
            flex-direction: column
        }

        @media screen and (min-width: 769px) {
            .container[_ngcontent-ng-c260969270] .content--wrapper[_ngcontent-ng-c260969270] {
                max-width: 600px;
                margin: 0 auto
            }
        }

        .container[_ngcontent-ng-c260969270] .content--wrapper[_ngcontent-ng-c260969270] .logout--container[_ngcontent-ng-c260969270] {
            display: flex;
            flex-direction: row;
            width: 100%;
            align-items: center;
            justify-content: end;
            margin: 0 0 12px
        }

        .container[_ngcontent-ng-c260969270] .content--wrapper[_ngcontent-ng-c260969270] .header[_ngcontent-ng-c260969270] {
            display: flex;
            flex-direction: row;
            align-items: center;
            width: 100%;
            justify-content: space-between
        }

        .container[_ngcontent-ng-c260969270] .content--wrapper[_ngcontent-ng-c260969270] .header[_ngcontent-ng-c260969270] .info--wrapper[_ngcontent-ng-c260969270] {
            display: flex;
            flex-direction: row;
            align-items: center
        }

        .container[_ngcontent-ng-c260969270] .content--wrapper[_ngcontent-ng-c260969270] .header[_ngcontent-ng-c260969270] .info--wrapper[_ngcontent-ng-c260969270] .pg--prize[_ngcontent-ng-c260969270] {
            width: 60px
        }

        .container[_ngcontent-ng-c260969270] .content--wrapper[_ngcontent-ng-c260969270] .header[_ngcontent-ng-c260969270] .info--wrapper[_ngcontent-ng-c260969270] .info-user--wrapper[_ngcontent-ng-c260969270] {
            display: flex;
            flex-direction: column;
            margin-left: 6px
        }

        .container[_ngcontent-ng-c260969270] .content--wrapper[_ngcontent-ng-c260969270] .header[_ngcontent-ng-c260969270] .info--wrapper[_ngcontent-ng-c260969270] .info-user--wrapper[_ngcontent-ng-c260969270] .title[_ngcontent-ng-c260969270] {
            font-size: 16px;
            margin: 0
        }

        .container[_ngcontent-ng-c260969270] .content--wrapper[_ngcontent-ng-c260969270] .header[_ngcontent-ng-c260969270] .info--wrapper[_ngcontent-ng-c260969270] .info-user--wrapper[_ngcontent-ng-c260969270] .description[_ngcontent-ng-c260969270] {
            font-size: 12px;
            margin: 0;
            white-space: nowrap;
            text-overflow: ellipsis;
            max-width: 160px;
            overflow: hidden
        }

        .container[_ngcontent-ng-c260969270] .content--wrapper[_ngcontent-ng-c260969270] .header[_ngcontent-ng-c260969270] .achievement[_ngcontent-ng-c260969270] {
            width: 60px
        }

        .container[_ngcontent-ng-c260969270] .content--wrapper[_ngcontent-ng-c260969270] .card--container[_ngcontent-ng-c260969270] {
            background: #A74676;
            padding: 10px 20px;
            display: flex;
            flex-direction: column;
            border-radius: 8px;
            position: relative;
            font-size: 12px;
            line-height: 18px;
            margin: 30px 0 20px;
            color: white;
        }

        .container[_ngcontent-ng-c260969270] .content--wrapper[_ngcontent-ng-c260969270] .card--container[_ngcontent-ng-c260969270] .card[_ngcontent-ng-c260969270] {
            overflow: hidden
        }

        .container[_ngcontent-ng-c260969270] .content--wrapper[_ngcontent-ng-c260969270] .card--container[_ngcontent-ng-c260969270] .card[_ngcontent-ng-c260969270] p[_ngcontent-ng-c260969270] {
            text-align: right;
            margin-right: 50px
        }

        .container[_ngcontent-ng-c260969270] .content--wrapper[_ngcontent-ng-c260969270] .card--container[_ngcontent-ng-c260969270] .card[_ngcontent-ng-c260969270] .boy--pg-soft[_ngcontent-ng-c260969270] {
            width: 100px;
            position: absolute;
            right: -20px;
            top: -10px
        }

        .container[_ngcontent-ng-c260969270] .content--wrapper[_ngcontent-ng-c260969270] .card--container[_ngcontent-ng-c260969270] .card[_ngcontent-ng-c260969270] .icon--messenger[_ngcontent-ng-c260969270] {
            width: 34px;
            position: absolute;
            top: -16px;
            right: -8px
        }

        .container[_ngcontent-ng-c260969270] .content--wrapper[_ngcontent-ng-c260969270] .card--container[_ngcontent-ng-c260969270] .card[_ngcontent-ng-c260969270] .messenger-quantity--container[_ngcontent-ng-c260969270] {
            margin: 0;
            position: absolute;
            background: #FF204D;
            width: 22px;
            font-size: 9px;
            border-radius: 4px;
            color: #fff;
            right: -14px;
            display: flex;
            top: -20px;
            height: 16px;
            flex-direction: column;
            align-items: center;
            justify-content: center
        }

        .container[_ngcontent-ng-c260969270] .content--wrapper[_ngcontent-ng-c260969270] .aula-bem-vindo--container[_ngcontent-ng-c260969270] {
            position: relative;
            width: 100%;
            box-shadow: 0 10px 20px #00000030, 0 3px 3px #0000003b;
            margin-bottom: 20px
        }

        .container[_ngcontent-ng-c260969270] .content--wrapper[_ngcontent-ng-c260969270] .aula-bem-vindo--container[_ngcontent-ng-c260969270] #smartplayer[_ngcontent-ng-c260969270] {
            border-radius: 8px !important
        }

        .container[_ngcontent-ng-c260969270] .content--wrapper[_ngcontent-ng-c260969270] .account-pro--banner[_ngcontent-ng-c260969270] {
            width: 100%;
            cursor: pointer;
            box-shadow: 0 10px 20px #00000030, 0 3px 3px #0000003b;
            margin-bottom: 20px
        }

        .container[_ngcontent-ng-c260969270] .content--wrapper[_ngcontent-ng-c260969270] .comunity-bonus--banner[_ngcontent-ng-c260969270] {
            width: 100%;
            cursor: pointer;
            border-radius: 8px
        }

        .container[_ngcontent-ng-c260969270] .content--wrapper[_ngcontent-ng-c260969270] .deposit--container[_ngcontent-ng-c260969270] {
            background: #A74676;
            width: 100%;
            padding: 20px;
            margin: 20px 0 0
        }

        .container[_ngcontent-ng-c260969270] .content--wrapper[_ngcontent-ng-c260969270] .deposit--container[_ngcontent-ng-c260969270] button[_ngcontent-ng-c260969270] {
            background: #9a2b4b;
            border-radius: 8px;
            color: #fff;
            display: flex;
            font-size: 14px;
            font-weight: 700;
            flex-direction: row;
            align-items: center;
            justify-content: center;
            padding: 15px;
            width: 100%;
            text-transform: uppercase;
            cursor: pointer;
            border: none;
            box-shadow: 0 5px 10px #00000030, 0 3px 3px #0000003b;
            animation: _ngcontent-ng-c260969270_zoom-in-zoom-out 1.2s ease-out infinite
        }

        .container[_ngcontent-ng-c260969270] .content--wrapper[_ngcontent-ng-c260969270] .button[_ngcontent-ng-c260969270] {
            background: #A74676;
            border-radius: 8px;
            color: #fff;
            display: flex;
            font-size: 14px;
            font-weight: 700;
            flex-direction: row;
            align-items: center;
            justify-content: center;
            padding: 20px;
            margin: 20px auto 0;
            width: 100%;
            text-transform: uppercase;
            cursor: pointer;
            border: none;
            box-shadow: 0 5px 10px #00000030, 0 3px 3px #0000003b
        }

        .container[_ngcontent-ng-c260969270] .content--wrapper[_ngcontent-ng-c260969270] .button.register-platform--button[_ngcontent-ng-c260969270] {
            background: #9a2b4b
        }

        .container[_ngcontent-ng-c260969270] .content--wrapper[_ngcontent-ng-c260969270] .button.register-platform--button[_ngcontent-ng-c260969270] svg[_ngcontent-ng-c260969270] {
            fill: #9a2b4b
        }

        .container[_ngcontent-ng-c260969270] .content--wrapper[_ngcontent-ng-c260969270] .button[_ngcontent-ng-c260969270] svg[_ngcontent-ng-c260969270] {
            fill: #A74676;
            background: rgba(255, 255, 255, .8);
            border-radius: 50%;
            width: 34px;
            padding: 6px;
            height: 30px
        }

        .container[_ngcontent-ng-c260969270] .content--wrapper[_ngcontent-ng-c260969270] .button[_ngcontent-ng-c260969270] svg.left--icon[_ngcontent-ng-c260969270] {
            background: none;
            fill: #fff;
            width: 40px;
            height: 40px;
            border-radius: 0;
            padding: 6px
        }

        .container[_ngcontent-ng-c260969270] .content--wrapper[_ngcontent-ng-c260969270] .install-app--container[_ngcontent-ng-c260969270] {
            display: flex;
            flex-direction: column;
            align-items: center;
            border-radius: 8px;
            padding: 20px;
            margin-top: 20px;
            background: #A74676
        }

        .container[_ngcontent-ng-c260969270] .content--wrapper[_ngcontent-ng-c260969270] .install-app--container[_ngcontent-ng-c260969270] .download--icon[_ngcontent-ng-c260969270] {
            fill: #9a2b4b;
            font-size: 26px
        }

        .container[_ngcontent-ng-c260969270] .content--wrapper[_ngcontent-ng-c260969270] .install-app--container[_ngcontent-ng-c260969270] .title[_ngcontent-ng-c260969270] {
            font-weight: 700;
            color: #fff;
            margin: 10px 0
        }

        .container[_ngcontent-ng-c260969270] .content--wrapper[_ngcontent-ng-c260969270] .install-app--container[_ngcontent-ng-c260969270] .brand--buttons-container[_ngcontent-ng-c260969270] {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 10px;
            width: 100%
        }

        .container[_ngcontent-ng-c260969270] .content--wrapper[_ngcontent-ng-c260969270] .install-app--container[_ngcontent-ng-c260969270] .brand--buttons-container[_ngcontent-ng-c260969270] .brand--button[_ngcontent-ng-c260969270] {
            display: flex;
            flex-direction: row;
            align-items: center;
            width: 100%;
            height: 47px;
            justify-content: center;
            background: black;
            border: 1px solid #9a2b4b;
            border-radius: 8px
        }

        .container[_ngcontent-ng-c260969270] .content--wrapper[_ngcontent-ng-c260969270] .install-app--container[_ngcontent-ng-c260969270] .brand--buttons-container[_ngcontent-ng-c260969270] .brand--button[_ngcontent-ng-c260969270] svg[_ngcontent-ng-c260969270] {
            fill: #9a2b4b;
            font-size: 22px
        }

        .container[_ngcontent-ng-c260969270] .content--wrapper[_ngcontent-ng-c260969270] .install-app--container[_ngcontent-ng-c260969270] .brand--buttons-container[_ngcontent-ng-c260969270] .brand--button[_ngcontent-ng-c260969270] .title[_ngcontent-ng-c260969270] {
            color: #fff;
            font-size: 14px;
            font-weight: 300;
            margin-left: 10px
        }

        @keyframes _ngcontent-ng-c260969270_zoom-in-zoom-out {
            0% {
                transform: scale(1)
            }

            50% {
                transform: scale(1.05)
            }

            to {
                transform: scale(1)
            }
        }

        .dialog-install--app .mdc-dialog__surface {
            background: none !important
        }

        .dialog--paypix {
            width: 90vw !important;
            max-width: 100% !important
        }

        @media screen and (min-width: 768px) {
            .dialog--paypix {
                width: 54vw !important
            }
        }

        .dialog--paypix .mdc-dialog__surface {
            background: #A74676 !important;
            border-radius: 12px !important
        }

        .dialog--paypix .mdc-dialog__container {
            overflow: unset
        }

        @media screen and (min-width: 768px) {
            .dialog--paypix .mdc-dialog__container {
                width: 100%;
                margin: 0 auto
            }
        }
    </style>
    <style>
        .mdc-touch-target-wrapper {
            display: inline
        }

        .mdc-elevation-overlay {
            position: absolute;
            border-radius: inherit;
            pointer-events: none;
            opacity: var(--mdc-elevation-overlay-opacity, 0);
            transition: opacity 280ms cubic-bezier(0.4, 0, 0.2, 1)
        }

        .mdc-button {
            position: relative;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            box-sizing: border-box;
            min-width: 64px;
            border: none;
            outline: none;
            line-height: inherit;
            user-select: none;
            -webkit-appearance: none;
            overflow: visible;
            vertical-align: middle;
            background: rgba(0, 0, 0, 0)
        }

        .mdc-button .mdc-elevation-overlay {
            width: 100%;
            height: 100%;
            top: 0;
            left: 0
        }

        .mdc-button::-moz-focus-inner {
            padding: 0;
            border: 0
        }

        .mdc-button:active {
            outline: none
        }

        .mdc-button:hover {
            cursor: pointer
        }

        .mdc-button:disabled {
            cursor: default;
            pointer-events: none
        }

        .mdc-button[hidden] {
            display: none
        }

        .mdc-button .mdc-button__icon {
            margin-left: 0;
            margin-right: 8px;
            display: inline-block;
            position: relative;
            vertical-align: top
        }

        [dir=rtl] .mdc-button .mdc-button__icon,
        .mdc-button .mdc-button__icon[dir=rtl] {
            margin-left: 8px;
            margin-right: 0
        }

        .mdc-button .mdc-button__progress-indicator {
            font-size: 0;
            position: absolute;
            transform: translate(-50%, -50%);
            top: 50%;
            left: 50%;
            line-height: initial
        }

        .mdc-button .mdc-button__label {
            position: relative
        }

        .mdc-button .mdc-button__focus-ring {
            pointer-events: none;
            border: 2px solid rgba(0, 0, 0, 0);
            border-radius: 6px;
            box-sizing: content-box;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            height: calc(100% + 4px);
            width: calc(100% + 4px);
            display: none
        }

        @media screen and (forced-colors: active) {
            .mdc-button .mdc-button__focus-ring {
                border-color: CanvasText
            }
        }

        .mdc-button .mdc-button__focus-ring::after {
            content: "";
            border: 2px solid rgba(0, 0, 0, 0);
            border-radius: 8px;
            display: block;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            height: calc(100% + 4px);
            width: calc(100% + 4px)
        }

        @media screen and (forced-colors: active) {
            .mdc-button .mdc-button__focus-ring::after {
                border-color: CanvasText
            }
        }

        @media screen and (forced-colors: active) {

            .mdc-button.mdc-ripple-upgraded--background-focused .mdc-button__focus-ring,
            .mdc-button:not(.mdc-ripple-upgraded):focus .mdc-button__focus-ring {
                display: block
            }
        }

        .mdc-button .mdc-button__touch {
            position: absolute;
            top: 50%;
            height: 48px;
            left: 0;
            right: 0;
            transform: translateY(-50%)
        }

        .mdc-button__label+.mdc-button__icon {
            margin-left: 8px;
            margin-right: 0
        }

        [dir=rtl] .mdc-button__label+.mdc-button__icon,
        .mdc-button__label+.mdc-button__icon[dir=rtl] {
            margin-left: 0;
            margin-right: 8px
        }

        svg.mdc-button__icon {
            fill: currentColor
        }

        .mdc-button--touch {
            margin-top: 6px;
            margin-bottom: 6px
        }

        .mdc-button {
            padding: 0 8px 0 8px
        }

        .mdc-button--unelevated {
            transition: box-shadow 280ms cubic-bezier(0.4, 0, 0.2, 1);
            padding: 0 16px 0 16px
        }

        .mdc-button--unelevated.mdc-button--icon-trailing {
            padding: 0 12px 0 16px
        }

        .mdc-button--unelevated.mdc-button--icon-leading {
            padding: 0 16px 0 12px
        }

        .mdc-button--raised {
            transition: box-shadow 280ms cubic-bezier(0.4, 0, 0.2, 1);
            padding: 0 16px 0 16px
        }

        .mdc-button--raised.mdc-button--icon-trailing {
            padding: 0 12px 0 16px
        }

        .mdc-button--raised.mdc-button--icon-leading {
            padding: 0 16px 0 12px
        }

        .mdc-button--outlined {
            border-style: solid;
            transition: border 280ms cubic-bezier(0.4, 0, 0.2, 1)
        }

        .mdc-button--outlined .mdc-button__ripple {
            border-style: solid;
            border-color: rgba(0, 0, 0, 0)
        }

        .mat-mdc-button {
            height: var(--mdc-text-button-container-height, 36px);
            border-radius: var(--mdc-text-button-container-shape, var(--mdc-shape-small, 4px))
        }

        .mat-mdc-button:not(:disabled) {
            color: var(--mdc-text-button-label-text-color, inherit)
        }

        .mat-mdc-button:disabled {
            color: var(--mdc-text-button-disabled-label-text-color, rgba(0, 0, 0, 0.38))
        }

        .mat-mdc-button .mdc-button__ripple {
            border-radius: var(--mdc-text-button-container-shape, var(--mdc-shape-small, 4px))
        }

        .mat-mdc-unelevated-button {
            height: var(--mdc-filled-button-container-height, 36px);
            border-radius: var(--mdc-filled-button-container-shape, var(--mdc-shape-small, 4px))
        }

        .mat-mdc-unelevated-button:not(:disabled) {
            background-color: var(--mdc-filled-button-container-color, transparent)
        }

        .mat-mdc-unelevated-button:disabled {
            background-color: var(--mdc-filled-button-disabled-container-color, rgba(0, 0, 0, 0.12))
        }

        .mat-mdc-unelevated-button:not(:disabled) {
            color: var(--mdc-filled-button-label-text-color, inherit)
        }

        .mat-mdc-unelevated-button:disabled {
            color: var(--mdc-filled-button-disabled-label-text-color, rgba(0, 0, 0, 0.38))
        }

        .mat-mdc-unelevated-button .mdc-button__ripple {
            border-radius: var(--mdc-filled-button-container-shape, var(--mdc-shape-small, 4px))
        }

        .mat-mdc-raised-button {
            height: var(--mdc-protected-button-container-height, 36px);
            border-radius: var(--mdc-protected-button-container-shape, var(--mdc-shape-small, 4px));
            box-shadow: var(--mdc-protected-button-container-elevation, 0px 3px 1px -2px rgba(0, 0, 0, 0.2), 0px 2px 2px 0px rgba(0, 0, 0, 0.14), 0px 1px 5px 0px rgba(0, 0, 0, 0.12))
        }

        .mat-mdc-raised-button:not(:disabled) {
            background-color: var(--mdc-protected-button-container-color, transparent)
        }

        .mat-mdc-raised-button:disabled {
            background-color: var(--mdc-protected-button-disabled-container-color, rgba(0, 0, 0, 0.12))
        }

        .mat-mdc-raised-button:not(:disabled) {
            color: var(--mdc-protected-button-label-text-color, inherit)
        }

        .mat-mdc-raised-button:disabled {
            color: var(--mdc-protected-button-disabled-label-text-color, rgba(0, 0, 0, 0.38))
        }

        .mat-mdc-raised-button .mdc-button__ripple {
            border-radius: var(--mdc-protected-button-container-shape, var(--mdc-shape-small, 4px))
        }

        .mat-mdc-raised-button.mdc-ripple-upgraded--background-focused,
        .mat-mdc-raised-button:not(.mdc-ripple-upgraded):focus {
            box-shadow: var(--mdc-protected-button-focus-container-elevation, 0px 2px 4px -1px rgba(0, 0, 0, 0.2), 0px 4px 5px 0px rgba(0, 0, 0, 0.14), 0px 1px 10px 0px rgba(0, 0, 0, 0.12))
        }

        .mat-mdc-raised-button:hover {
            box-shadow: var(--mdc-protected-button-hover-container-elevation, 0px 2px 4px -1px rgba(0, 0, 0, 0.2), 0px 4px 5px 0px rgba(0, 0, 0, 0.14), 0px 1px 10px 0px rgba(0, 0, 0, 0.12))
        }

        .mat-mdc-raised-button:not(:disabled):active {
            box-shadow: var(--mdc-protected-button-pressed-container-elevation, 0px 5px 5px -3px rgba(0, 0, 0, 0.2), 0px 8px 10px 1px rgba(0, 0, 0, 0.14), 0px 3px 14px 2px rgba(0, 0, 0, 0.12))
        }

        .mat-mdc-raised-button:disabled {
            box-shadow: var(--mdc-protected-button-disabled-container-elevation, 0px 0px 0px 0px rgba(0, 0, 0, 0.2), 0px 0px 0px 0px rgba(0, 0, 0, 0.14), 0px 0px 0px 0px rgba(0, 0, 0, 0.12))
        }

        .mat-mdc-outlined-button {
            height: var(--mdc-outlined-button-container-height, 36px);
            border-radius: var(--mdc-outlined-button-container-shape, var(--mdc-shape-small, 4px));
            padding: 0 15px 0 15px;
            border-width: var(--mdc-outlined-button-outline-width, 1px)
        }

        .mat-mdc-outlined-button:not(:disabled) {
            color: var(--mdc-outlined-button-label-text-color, inherit)
        }

        .mat-mdc-outlined-button:disabled {
            color: var(--mdc-outlined-button-disabled-label-text-color, rgba(0, 0, 0, 0.38))
        }

        .mat-mdc-outlined-button .mdc-button__ripple {
            border-radius: var(--mdc-outlined-button-container-shape, var(--mdc-shape-small, 4px))
        }

        .mat-mdc-outlined-button:not(:disabled) {
            border-color: var(--mdc-outlined-button-outline-color, rgba(0, 0, 0, 0.12))
        }

        .mat-mdc-outlined-button:disabled {
            border-color: var(--mdc-outlined-button-disabled-outline-color, rgba(0, 0, 0, 0.12))
        }

        .mat-mdc-outlined-button.mdc-button--icon-trailing {
            padding: 0 11px 0 15px
        }

        .mat-mdc-outlined-button.mdc-button--icon-leading {
            padding: 0 15px 0 11px
        }

        .mat-mdc-outlined-button .mdc-button__ripple {
            top: -1px;
            left: -1px;
            bottom: -1px;
            right: -1px;
            border-width: var(--mdc-outlined-button-outline-width, 1px)
        }

        .mat-mdc-outlined-button .mdc-button__touch {
            left: calc(-1 * var(--mdc-outlined-button-outline-width, 1px));
            width: calc(100% + 2 * var(--mdc-outlined-button-outline-width, 1px))
        }

        .mat-mdc-button,
        .mat-mdc-unelevated-button,
        .mat-mdc-raised-button,
        .mat-mdc-outlined-button {
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0)
        }

        .mat-mdc-button .mat-mdc-button-ripple,
        .mat-mdc-button .mat-mdc-button-persistent-ripple,
        .mat-mdc-button .mat-mdc-button-persistent-ripple::before,
        .mat-mdc-unelevated-button .mat-mdc-button-ripple,
        .mat-mdc-unelevated-button .mat-mdc-button-persistent-ripple,
        .mat-mdc-unelevated-button .mat-mdc-button-persistent-ripple::before,
        .mat-mdc-raised-button .mat-mdc-button-ripple,
        .mat-mdc-raised-button .mat-mdc-button-persistent-ripple,
        .mat-mdc-raised-button .mat-mdc-button-persistent-ripple::before,
        .mat-mdc-outlined-button .mat-mdc-button-ripple,
        .mat-mdc-outlined-button .mat-mdc-button-persistent-ripple,
        .mat-mdc-outlined-button .mat-mdc-button-persistent-ripple::before {
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            position: absolute;
            pointer-events: none;
            border-radius: inherit
        }

        .mat-mdc-button .mat-mdc-button-ripple,
        .mat-mdc-unelevated-button .mat-mdc-button-ripple,
        .mat-mdc-raised-button .mat-mdc-button-ripple,
        .mat-mdc-outlined-button .mat-mdc-button-ripple {
            overflow: hidden
        }

        .mat-mdc-button .mat-mdc-button-persistent-ripple::before,
        .mat-mdc-unelevated-button .mat-mdc-button-persistent-ripple::before,
        .mat-mdc-raised-button .mat-mdc-button-persistent-ripple::before,
        .mat-mdc-outlined-button .mat-mdc-button-persistent-ripple::before {
            content: "";
            opacity: 0;
            background-color: var(--mat-mdc-button-persistent-ripple-color)
        }

        .mat-mdc-button .mat-ripple-element,
        .mat-mdc-unelevated-button .mat-ripple-element,
        .mat-mdc-raised-button .mat-ripple-element,
        .mat-mdc-outlined-button .mat-ripple-element {
            background-color: var(--mat-mdc-button-ripple-color)
        }

        .mat-mdc-button .mdc-button__label,
        .mat-mdc-unelevated-button .mdc-button__label,
        .mat-mdc-raised-button .mdc-button__label,
        .mat-mdc-outlined-button .mdc-button__label {
            z-index: 1
        }

        .mat-mdc-button .mat-mdc-focus-indicator,
        .mat-mdc-unelevated-button .mat-mdc-focus-indicator,
        .mat-mdc-raised-button .mat-mdc-focus-indicator,
        .mat-mdc-outlined-button .mat-mdc-focus-indicator {
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            position: absolute
        }

        .mat-mdc-button:focus .mat-mdc-focus-indicator::before,
        .mat-mdc-unelevated-button:focus .mat-mdc-focus-indicator::before,
        .mat-mdc-raised-button:focus .mat-mdc-focus-indicator::before,
        .mat-mdc-outlined-button:focus .mat-mdc-focus-indicator::before {
            content: ""
        }

        .mat-mdc-button[disabled],
        .mat-mdc-unelevated-button[disabled],
        .mat-mdc-raised-button[disabled],
        .mat-mdc-outlined-button[disabled] {
            cursor: default;
            pointer-events: none
        }

        .mat-mdc-button .mat-mdc-button-touch-target,
        .mat-mdc-unelevated-button .mat-mdc-button-touch-target,
        .mat-mdc-raised-button .mat-mdc-button-touch-target,
        .mat-mdc-outlined-button .mat-mdc-button-touch-target {
            position: absolute;
            top: 50%;
            height: 48px;
            left: 0;
            right: 0;
            transform: translateY(-50%)
        }

        .mat-mdc-button._mat-animation-noopable,
        .mat-mdc-unelevated-button._mat-animation-noopable,
        .mat-mdc-raised-button._mat-animation-noopable,
        .mat-mdc-outlined-button._mat-animation-noopable {
            transition: none !important;
            animation: none !important
        }

        .mat-mdc-button>.mat-icon {
            margin-left: 0;
            margin-right: 8px;
            display: inline-block;
            position: relative;
            vertical-align: top;
            font-size: 1.125rem;
            height: 1.125rem;
            width: 1.125rem
        }

        [dir=rtl] .mat-mdc-button>.mat-icon,
        .mat-mdc-button>.mat-icon[dir=rtl] {
            margin-left: 8px;
            margin-right: 0
        }

        .mat-mdc-button .mdc-button__label+.mat-icon {
            margin-left: 8px;
            margin-right: 0
        }

        [dir=rtl] .mat-mdc-button .mdc-button__label+.mat-icon,
        .mat-mdc-button .mdc-button__label+.mat-icon[dir=rtl] {
            margin-left: 0;
            margin-right: 8px
        }

        .mat-mdc-unelevated-button>.mat-icon,
        .mat-mdc-raised-button>.mat-icon,
        .mat-mdc-outlined-button>.mat-icon {
            margin-left: 0;
            margin-right: 8px;
            display: inline-block;
            position: relative;
            vertical-align: top;
            font-size: 1.125rem;
            height: 1.125rem;
            width: 1.125rem;
            margin-left: -4px;
            margin-right: 8px
        }

        [dir=rtl] .mat-mdc-unelevated-button>.mat-icon,
        [dir=rtl] .mat-mdc-raised-button>.mat-icon,
        [dir=rtl] .mat-mdc-outlined-button>.mat-icon,
        .mat-mdc-unelevated-button>.mat-icon[dir=rtl],
        .mat-mdc-raised-button>.mat-icon[dir=rtl],
        .mat-mdc-outlined-button>.mat-icon[dir=rtl] {
            margin-left: 8px;
            margin-right: 0
        }

        [dir=rtl] .mat-mdc-unelevated-button>.mat-icon,
        [dir=rtl] .mat-mdc-raised-button>.mat-icon,
        [dir=rtl] .mat-mdc-outlined-button>.mat-icon,
        .mat-mdc-unelevated-button>.mat-icon[dir=rtl],
        .mat-mdc-raised-button>.mat-icon[dir=rtl],
        .mat-mdc-outlined-button>.mat-icon[dir=rtl] {
            margin-left: 8px;
            margin-right: -4px
        }

        .mat-mdc-unelevated-button .mdc-button__label+.mat-icon,
        .mat-mdc-raised-button .mdc-button__label+.mat-icon,
        .mat-mdc-outlined-button .mdc-button__label+.mat-icon {
            margin-left: 8px;
            margin-right: -4px
        }

        [dir=rtl] .mat-mdc-unelevated-button .mdc-button__label+.mat-icon,
        [dir=rtl] .mat-mdc-raised-button .mdc-button__label+.mat-icon,
        [dir=rtl] .mat-mdc-outlined-button .mdc-button__label+.mat-icon,
        .mat-mdc-unelevated-button .mdc-button__label+.mat-icon[dir=rtl],
        .mat-mdc-raised-button .mdc-button__label+.mat-icon[dir=rtl],
        .mat-mdc-outlined-button .mdc-button__label+.mat-icon[dir=rtl] {
            margin-left: -4px;
            margin-right: 8px
        }

        .mat-mdc-outlined-button .mat-mdc-button-ripple,
        .mat-mdc-outlined-button .mdc-button__ripple {
            top: -1px;
            left: -1px;
            bottom: -1px;
            right: -1px;
            border-width: -1px
        }

        .mat-mdc-unelevated-button .mat-mdc-focus-indicator::before,
        .mat-mdc-raised-button .mat-mdc-focus-indicator::before {
            margin: calc(calc(var(--mat-mdc-focus-indicator-border-width, 3px) + 2px) * -1)
        }

        .mat-mdc-outlined-button .mat-mdc-focus-indicator::before {
            margin: calc(calc(var(--mat-mdc-focus-indicator-border-width, 3px) + 3px) * -1)
        }
    </style>
    <style>
        .cdk-high-contrast-active .mat-mdc-button:not(.mdc-button--outlined),
        .cdk-high-contrast-active .mat-mdc-unelevated-button:not(.mdc-button--outlined),
        .cdk-high-contrast-active .mat-mdc-raised-button:not(.mdc-button--outlined),
        .cdk-high-contrast-active .mat-mdc-outlined-button:not(.mdc-button--outlined),
        .cdk-high-contrast-active .mat-mdc-icon-button {
            outline: solid 1px
        }
    </style>
    <style>
        mat-icon,
        mat-icon.mat-primary,
        mat-icon.mat-accent,
        mat-icon.mat-warn {
            color: var(--mat-icon-color)
        }

        .mat-icon {
            -webkit-user-select: none;
            user-select: none;
            background-repeat: no-repeat;
            display: inline-block;
            fill: currentColor;
            height: 24px;
            width: 24px;
            overflow: hidden
        }

        .mat-icon.mat-icon-inline {
            font-size: inherit;
            height: inherit;
            line-height: inherit;
            width: inherit
        }

        .mat-icon.mat-ligature-font[fontIcon]::before {
            content: attr(fontIcon)
        }

        [dir=rtl] .mat-icon-rtl-mirror {
            transform: scale(-1, 1)
        }

        .mat-form-field:not(.mat-form-field-appearance-legacy) .mat-form-field-prefix .mat-icon,
        .mat-form-field:not(.mat-form-field-appearance-legacy) .mat-form-field-suffix .mat-icon {
            display: block
        }

        .mat-form-field:not(.mat-form-field-appearance-legacy) .mat-form-field-prefix .mat-icon-button .mat-icon,
        .mat-form-field:not(.mat-form-field-appearance-legacy) .mat-form-field-suffix .mat-icon-button .mat-icon {
            margin: auto
        }
    </style>
    <style>
        #mat-mdc-dialog-0 {
            display: none;
            /* Inicialmente oculto */
            position: fixed;
            /* Posicionamento fixo */
            top: 35%;
            left: 50%;
            transform: translate(-50%, -40%);
            /* Centraliza o pop-up */
            z-index: 1000;
            /* Garante que o pop-up fique acima de outros elementos */
            max-width: 95vw;
            /* Largura máxima de 90% da largura da tela */
            width: 400;
            /* Largura automática */
            min-width: 95vw;

            [_nghost-ng-c3015247698] .header[_ngcontent-ng-c3015247698] {
                display: flex;
                flex-direction: row;
                align-items: center;
                background: #A74676;
                color: #fff;
                justify-content: center;
                position: relative;
                padding: 10px 0
            }

            [_nghost-ng-c3015247698] .header[_ngcontent-ng-c3015247698] p[_ngcontent-ng-c3015247698] {
                font-weight: 700;
                margin: 0
            }

            [_nghost-ng-c3015247698] .header[_ngcontent-ng-c3015247698] .mat-icon {
                position: absolute;
                right: 10px
            }

            [_nghost-ng-c3015247698] iframe[_ngcontent-ng-c3015247698] {
                border-radius: 12px;
                width: 100%
            }



            /* Oculta inicialmente o pop-up e o fundo */
            .cdk-overlay-container,
            .cdk-overlay-backdrop {
                display: none;
            }
        }

        [_nghost-ng-c3015247698] .header[_ngcontent-ng-c3015247698] {
            display: flex;
            flex-direction: row;
            align-items: center;
            background: #A74676;
            color: #fff;
            justify-content: center;
            position: relative;
            padding: 10px 0
        }

        [_nghost-ng-c3015247698] .header[_ngcontent-ng-c3015247698] p[_ngcontent-ng-c3015247698] {
            font-weight: 700;
            margin: 0
        }

        [_nghost-ng-c3015247698] .header[_ngcontent-ng-c3015247698] .mat-icon {
            position: absolute;
            right: 10px
        }

        [_nghost-ng-c3015247698] iframe[_ngcontent-ng-c3015247698] {
            border-radius: 12px;
            width: 100%
        }
    </style>

    <style>
        [_nghost-ng-c3015247698] .header[_ngcontent-ng-c3015247698] {
            display: flex;
            flex-direction: row;
            align-items: center;
            background: #A74676;
            color: #fff;
            justify-content: center;
            position: relative;
            padding: 10px 0
        }

        [_nghost-ng-c3015247698] .header[_ngcontent-ng-c3015247698] p[_ngcontent-ng-c3015247698] {
            font-weight: 700;
            margin: 0
        }

        [_nghost-ng-c3015247698] .header[_ngcontent-ng-c3015247698] .mat-icon {
            position: absolute;
            right: 10px
        }

        [_nghost-ng-c3015247698] iframe[_ngcontent-ng-c3015247698] {
            border-radius: 12px;
            width: 100%
        }

        #mat-mdc-dialog-0 {
            display: none;
        }
    </style>

    <style>
        .container[_ngcontent-ng-c1863394268] {
            display: flex;
            flex-direction: column;
            align-items: center;
            position: relative;
            border: 2px solid #9a2b4b;
            border-radius: 12px;
            padding: 20px;
            background: #ffaf00
        }

        .container[_ngcontent-ng-c1863394268] .mat-icon {
            color: #9a2b4b;
            position: absolute;
            top: 10px;
            right: 10px
        }

        .container[_ngcontent-ng-c1863394268] .brand--icon[_ngcontent-ng-c1863394268] {
            fill: #fff;
            font-size: 50px;
            width: 50px;
            height: 50px;
            margin: 20px 0 10px
        }

        .container[_ngcontent-ng-c1863394268] .title[_ngcontent-ng-c1863394268] {
            color: #000;
            margin: 0;
            font-weight: 700
        }

        .container[_ngcontent-ng-c1863394268] .description[_ngcontent-ng-c1863394268] {
            color: #fff;
            text-align: center;
            font-weight: 700;
            font-size: 14px
        }

        .container[_ngcontent-ng-c1863394268] .brand[_ngcontent-ng-c1863394268] {
            font-size: 12px;
            color: #000;
            margin: 0 0 10px;
            font-weight: 700
        }

        .container[_ngcontent-ng-c1863394268] .step--container[_ngcontent-ng-c1863394268] {
            display: flex;
            flex-direction: row;
            justify-self: flex-start;
            align-items: center;
            margin: 5px 0;
            width: 100%
        }

        .container[_ngcontent-ng-c1863394268] .step--container[_ngcontent-ng-c1863394268] .number[_ngcontent-ng-c1863394268] {
            border-radius: 12px;
            border: 1px solid #9a2b4b;
            width: 45px;
            height: 45px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            background: rgba(243, 118, 16, .4588235294);
            margin-right: 10px
        }

        .container[_ngcontent-ng-c1863394268] .step--container[_ngcontent-ng-c1863394268] .number[_ngcontent-ng-c1863394268] p[_ngcontent-ng-c1863394268] {
            margin: 0;
            padding: 20px;
            color: #000;
            font-weight: 700
        }

        .container[_ngcontent-ng-c1863394268] .step--container[_ngcontent-ng-c1863394268] .title[_ngcontent-ng-c1863394268] {
            font-size: 10px;
            width: 50%
        }
    </style>
    <style>
        #install-ios {
            display: none;
        }

        #install-android {
            display: none;
        }
    </style>
</head>

<body>



    <app-root _nghost-ng-c1933515739="" ng-version="16.2.10"><router-outlet
            _ngcontent-ng-c1933515739=""></router-outlet><app-page _nghost-ng-c4005126487=""><router-outlet
                _ngcontent-ng-c4005126487=""></router-outlet><app-home _nghost-ng-c260969270="">
                <div _ngcontent-ng-c260969270="" class="container">
                    <div _ngcontent-ng-c260969270="" class="content--wrapper">
                        <div _ngcontent-ng-c260969270="" class="logout--container">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button _ngcontent-ng-c260969270="" mat-stroked-button="" mat-ripple-loader-uninitialized=""
                                    mat-ripple-loader-class-name="mat-mdc-button-ripple"
                                    class="mdc-button mdc-button--outlined mat-mdc-outlined-button mat-unthemed mat-mdc-button-base">
                                    <span class="mat-mdc-button-persistent-ripple mdc-button__ripple">
                                    </span>
                                    <mat-icon _ngcontent-ng-c260969270="" role="img"
                                        class="mat-icon notranslate material-icons mat-ligature-font mat-icon-no-color"
                                        aria-hidden="true" data-mat-icon-type="font">

                                    </mat-icon>
                                    <span class="mdc-button__label">
                                        Sair
                                    </span>
                                    <span class="mat-mdc-focus-indicator">
                                    </span>
                                    <span class="mat-mdc-button-touch-target" id="logout">
                                    </span>
                                </button>
                            </form>
                        </div>
                        <div _ngcontent-ng-c260969270="" class="header">
                            <div _ngcontent-ng-c260969270="" class="info--wrapper"><img _ngcontent-ng-c260969270=""
                                    src="https://contavipoficial.com/assets/pg-prize.webp" alt="Pg Prize"
                                    class="pg--prize">
                                <div _ngcontent-ng-c260969270="" class="info-user--wrapper">
                                    <p _ngcontent-ng-c260969270="" class="title"><b _ngcontent-ng-c260969270="">Bônus
                                            Desbloqueado</b></p>
                                    <p _ngcontent-ng-c260969270="" class="description">
                                        Nome: {{ Auth::user()->name }}<br>
                                        E-mail: {{ Auth::user()->email }}

                                    </p>
                                </div>
                            </div><img _ngcontent-ng-c260969270=""
                                src="https://contavipoficial.com/assets/nivel-5-achievement.gif"
                                alt="Achievement Nivel 5" class="achievement">
                        </div>
                        <div _ngcontent-ng-c260969270="" class="card--container">
                            <div _ngcontent-ng-c260969270="" class="card">
                                <p _ngcontent-ng-c260969270=""><b _ngcontent-ng-c260969270="">Olá</b>, seja bem-vindo
                                    (a) <b _ngcontent-ng-c260969270="">aproveite todos os benefícios</b> de ser <b
                                        _ngcontent-ng-c260969270="">Nível 5.</b></p><img _ngcontent-ng-c260969270=""
                                    src="https://contavipoficial.com/assets/boy-pg-soft.webp" alt="Boy PG Soft"
                                    class="boy--pg-soft"><img _ngcontent-ng-c260969270=""
                                    src="https://contavipoficial.com/assets/icon-messenger.webp" alt="Ícone Messenger"
                                    class="icon--messenger">
                                <p _ngcontent-ng-c260969270="" class="messenger-quantity--container">1</p>
                            </div>
                        </div>
                        <img _ngcontent-ng-c260969270="" id="upgrade6"
                            src="https://contavipoficial.com/assets/banner-acess-pro.webp" alt="Banner Pro"
                            class="account-pro--banner hover--effect"><!---->
                        <img _ngcontent-ng-c260969270="" src="{{ asset('img/operate.png') }}" alt="Comunidade Banner"
                            class="" style="width: 250px">
                        <button _ngcontent-ng-c260969270="" class="register-platform--button button"><svg
                                _ngcontent-ng-c260969270="" xmlns="http://www.w3.org/2000/svg" height="1em"
                                viewBox="0 0 320 512" class="left--icon">
                                <path _ngcontent-ng-c260969270=""
                                    d="M160 0c17.7 0 32 14.3 32 32V67.7c1.6 .2 3.1 .4 4.7 .7c.4 .1 .7 .1 1.1 .2l48 8.8c17.4 3.2 28.9 19.9 25.7 37.2s-19.9 28.9-37.2 25.7l-47.5-8.7c-31.3-4.6-58.9-1.5-78.3 6.2s-27.2 18.3-29 28.1c-2 10.7-.5 16.7 1.2 20.4c1.8 3.9 5.5 8.3 12.8 13.2c16.3 10.7 41.3 17.7 73.7 26.3l2.9 .8c28.6 7.6 63.6 16.8 89.6 33.8c14.2 9.3 27.6 21.9 35.9 39.5c8.5 17.9 10.3 37.9 6.4 59.2c-6.9 38-33.1 63.4-65.6 76.7c-13.7 5.6-28.6 9.2-44.4 11V480c0 17.7-14.3 32-32 32s-32-14.3-32-32V445.1c-.4-.1-.9-.1-1.3-.2l-.2 0 0 0c-24.4-3.8-64.5-14.3-91.5-26.3c-16.1-7.2-23.4-26.1-16.2-42.2s26.1-23.4 42.2-16.2c20.9 9.3 55.3 18.5 75.2 21.6c31.9 4.7 58.2 2 76-5.3c16.9-6.9 24.6-16.9 26.8-28.9c1.9-10.6 .4-16.7-1.3-20.4c-1.9-4-5.6-8.4-13-13.3c-16.4-10.7-41.5-17.7-74-26.3l-2.8-.7 0 0C119.4 279.3 84.4 270 58.4 253c-14.2-9.3-27.5-22-35.8-39.6c-8.4-17.9-10.1-37.9-6.1-59.2C23.7 116 52.3 91.2 84.8 78.3c13.3-5.3 27.9-8.9 43.2-11V32c0-17.7 14.3-32 32-32z">
                                </path>
                            </svg> Faça seu cadastro na plataforma <svg _ngcontent-ng-c260969270=""
                                xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
                                <path _ngcontent-ng-c260969270=""
                                    d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z">
                                </path>
                            </svg>
                        </button>
                    </div>
                </div>
            </app-home><!---->
            <div _ngcontent-ng-c4005126487="" class="footer">
                <div _ngcontent-ng-c4005126487="" class="footer--content">
                    <a href="{{ route('home') }}">
                        <button _ngcontent-ng-c4005126487="" class="active"><svg _ngcontent-ng-c4005126487=""
                                xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512">
                                <path _ngcontent-ng-c4005126487=""
                                    d="M575.8 255.5c0 18-15 32.1-32 32.1h-32l.7 160.2c0 2.7-.2 5.4-.5 8.1V472c0 22.1-17.9 40-40 40H456c-1.1 0-2.2 0-3.3-.1c-1.4 .1-2.8 .1-4.2 .1H416 392c-22.1 0-40-17.9-40-40V448 384c0-17.7-14.3-32-32-32H256c-17.7 0-32 14.3-32 32v64 24c0 22.1-17.9 40-40 40H160 128.1c-1.5 0-3-.1-4.5-.2c-1.2 .1-2.4 .2-3.6 .2H104c-22.1 0-40-17.9-40-40V360c0-.9 0-1.9 .1-2.8V287.6H32c-18 0-32-14-32-32.1c0-9 3-17 10-24L266.4 8c7-7 15-8 22-8s15 2 21 7L564.8 231.5c8 7 12 15 11 24z">
                                </path>
                            </svg>
                            Início
                        </button>
                    </a>
                    <a href="{{ route('play') }}">
                        <button _ngcontent-ng-c4005126487=""><svg _ngcontent-ng-c4005126487=""
                                xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 640 512">
                                <path _ngcontent-ng-c4005126487=""
                                    d="M192 64C86 64 0 150 0 256S86 448 192 448H448c106 0 192-86 192-192s-86-192-192-192H192zM496 168a40 40 0 1 1 0 80 40 40 0 1 1 0-80zM392 304a40 40 0 1 1 80 0 40 40 0 1 1 -80 0zM168 200c0-13.3 10.7-24 24-24s24 10.7 24 24v32h32c13.3 0 24 10.7 24 24s-10.7 24-24 24H216v32c0 13.3-10.7 24-24 24s-24-10.7-24-24V280H136c-13.3 0-24-10.7-24-24s10.7-24 24-24h32V200z">
                                </path>
                            </svg>
                            Jogos
                        </button>
                    </a>
                    <button _ngcontent-ng-c4005126487=""><svg _ngcontent-ng-c4005126487=""
                            xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512">
                            <path _ngcontent-ng-c4005126487=""
                                d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80V432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z">
                            </path>
                        </svg>
                        Academy
                    </button>
                    <a href="https://t.me/+V_lzQV0xlCM1NGU5" target="_blank">
                        <button _ngcontent-ng-c4005126487=""><svg _ngcontent-ng-c4005126487=""
                                xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 496 512">
                                <path _ngcontent-ng-c4005126487="" id="telegram"
                                    d="M248,8C111.033,8,0,119.033,0,256S111.033,504,248,504,496,392.967,496,256,384.967,8,248,8ZM362.952,176.66c-3.732,39.215-19.881,134.378-28.1,178.3-3.476,18.584-10.322,24.816-16.948,25.425-14.4,1.326-25.338-9.517-39.287-18.661-21.827-14.308-34.158-23.215-55.346-37.177-24.485-16.135-8.612-25,5.342-39.5,3.652-3.793,67.107-61.51,68.335-66.746.153-.655.3-3.1-1.154-4.384s-3.59-.849-5.135-.5q-3.283.746-104.608,69.142-14.845,10.194-26.894,9.934c-8.855-.191-25.888-5.006-38.551-9.123-15.531-5.048-27.875-7.717-26.8-16.291q.84-6.7,18.45-13.7,108.446-47.248,144.628-62.3c68.872-28.647,83.183-33.623,92.511-33.789,2.052-.034,6.639.474,9.61,2.885a10.452,10.452,0,0,1,3.53,6.716A43.765,43.765,0,0,1,362.952,176.66Z">
                                </path>
                            </svg>
                            Telegram
                        </button>
                    </a>
                </div>
            </div>



            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    var registerButton = document.querySelector('button.register-platform--button');

                    if (registerButton) {
                        registerButton.addEventListener('click', function() {
                            // Seleciona o container do diálogo
                            var dialogContainer = document.getElementById('mat-mdc-dialog-0');

                            if (dialogContainer) {
                                dialogContainer.style.display = 'block'; // Exibe o pop-up
                                // Opcional: adicione um fundo escuro se necessário
                                // var backdrop = document.querySelector('.cdk-overlay-backdrop');
                                // if (backdrop) {
                                //     backdrop.style.display = 'block';
                                // }
                            }
                        });
                    }
                });
            </script>

            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    // Seleciona o container do diálogo
                    var dialogContainer = document.getElementById('mat-mdc-dialog-0');
                    var backdrop = document.querySelector('.cdk-overlay-backdrop');

                    // Verifica se o container do diálogo existe
                    if (dialogContainer) {
                        // Seleciona o ícone de fechar dentro do container do diálogo
                        var closeButton = dialogContainer.querySelector('.mat-icon[data-mat-icon-type="font"]');

                        // Adiciona um ouvinte de eventos ao ícone de fechar, se ele existir
                        if (closeButton) {
                            closeButton.addEventListener('click', function() {
                                // Oculta o pop-up
                                dialogContainer.style.display = 'none';

                                // Opcional: Oculta o fundo escuro, se estiver sendo usado
                                if (backdrop) {
                                    backdrop.style.display = 'none';
                                }
                            });
                        }
                    }
                    // Adiciona um ouvinte de eventos ao elemento com id "upgrade6"
                    var upgrade6Link = document.getElementById('upgrade6');
                    if (upgrade6Link) {
                        upgrade6Link.addEventListener('click', function() {
                            // Abre o link em uma nova aba
                            window.open('https://go.perfectpay.com.br/PPU38CO7SBR',
                                '_blank');
                        });
                    }
                });
            </script>




        </app-page><!----></app-root>

    <div class="cdk-global-overlay-wrapper" dir="ltr" style="justify-content: center; align-items: center;">
        <div id="cdk-overlay-0" class="cdk-overlay-pane dialog--paypix" style="max-width: 80vw; position: static;">
            <div tabindex="0" class="cdk-visually-hidden cdk-focus-trap-anchor" aria-hidden="true"></div>
            <mat-dialog-container tabindex="-1"
                class="mat-mdc-dialog-container mdc-dialog cdk-dialog-container mdc-dialog--open"
                id="mat-mdc-dialog-0" role="dialog" aria-modal="true"
                style="--mat-dialog-transition-duration: 150ms;">
                <div class="mdc-dialog__container">
                    <div class="mat-mdc-dialog-surface mdc-dialog__surface"><app-dialog-paypix
                            _nghost-ng-c3015247698="">
                            <div _ngcontent-ng-c3015247698="" class="header">
                                <p _ngcontent-ng-c3015247698="">Cadastrar</p><mat-icon _ngcontent-ng-c3015247698=""
                                    role="img"
                                    class="mat-icon notranslate material-icons mat-ligature-font mat-icon-no-color"
                                    aria-hidden="true" data-mat-icon-type="font">close</mat-icon>
                            </div><iframe _ngcontent-ng-c3015247698="" height="550px" frameborder="0"
                                src="https://go.aff.br4-partners.com/acessovip"></iframe>
                        </app-dialog-paypix><!----></div>
                </div>
            </mat-dialog-container>
            <div tabindex="0" class="cdk-visually-hidden cdk-focus-trap-anchor" aria-hidden="true"></div>
        </div>
    </div>








    <script>
        window.onload = function() {
            // iOS related code
            var closeButton = document.getElementById('close');
            closeButton.addEventListener('click', function() {
                var installIosElement = document.getElementById('install-ios');
                installIosElement.style.display = 'none';
            });

            var appIosButton = document.getElementById('app-ios');
            appIosButton.addEventListener('click', function() {
                var installIosElement = document.getElementById('install-ios');
                installIosElement.style.display = 'block';
            });

            // Android related code
            var buttonAndroid = document.getElementById('button-android');
            buttonAndroid.addEventListener('click', function() {
                var installAndroidElement = document.getElementById('install-android');
                installAndroidElement.style.display = 'block';
            });

            var closeAndroidButton = document.getElementById('close-android');
            closeAndroidButton.addEventListener('click', function() {
                var installAndroidElement = document.getElementById('install-android');
                installAndroidElement.style.display = 'none';
            });
        };
    </script>




</body>

</html>
