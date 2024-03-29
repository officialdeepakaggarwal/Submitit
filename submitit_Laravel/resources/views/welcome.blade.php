<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="x-apple-disable-message-reformatting">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" type="text/css" href="{{ url('/css/custom.css') }}" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <title>Submitit</title>

    <style type="text/css">
        /*
Template Name: Skote - Admin & Dashboard Template
Author: Themesbrand
Version: 3.0.0
Website: https://themesbrand.com/
Contact: themesbrand@gmail.com
File: Custom Bootstrap Css File
*/
        /*!
 * Bootstrap v5.0.0-beta1 (https://getbootstrap.com/)
 * Copyright 2011-2020 The Bootstrap Authors
 * Copyright 2011-2020 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/main/LICENSE)
 */
        :root {
            --bs-blue: #556ee6;
            --bs-indigo: #564ab1;
            --bs-purple: #6f42c1;
            --bs-pink: #e83e8c;
            --bs-red: #f46a6a;
            --bs-orange: #f1734f;
            --bs-yellow: #f1b44c;
            --bs-green: #34c38f;
            --bs-teal: #050505;
            --bs-cyan: #50a5f1;
            --bs-white: #fff;
            --bs-gray: #74788d;
            --bs-gray-dark: #343a40;
            --bs-primary: #556ee6;
            --bs-secondary: #74788d;
            --bs-success: #34c38f;
            --bs-info: #50a5f1;
            --bs-warning: #f1b44c;
            --bs-danger: #f46a6a;
            --bs-pink: #e83e8c;
            --bs-light: #eff2f7;
            --bs-dark: #343a40;
            --bs-font-sans-serif: "Poppins", sans-serif;
            --bs-font-monospace: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
            --bs-gradient: linear-gradient(180deg, rgba(255, 255, 255, 0.15), rgba(255, 255, 255, 0));
        }

        *,
        *::before,
        *::after {
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
        }

        @media (prefers-reduced-motion: no-preference) {
            :root {
                scroll-behavior: smooth;
            }
        }

        body {
            margin: 0;
            font-family: var(--bs-font-sans-serif);
            font-size: 0.8125rem;
            font-weight: 400;
            line-height: 1.5;
            color: #495057;
            background-color: #f8f8fb;
            -webkit-text-size-adjust: 100%;
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
        }

        [tabindex="-1"]:focus:not(:focus-visible) {
            outline: 0 !important;
        }

        hr {
            margin: 1rem 0;
            color: inherit;
            background-color: currentColor;
            border: 0;
            opacity: 0.2;
        }

        hr:not([size]) {
            height: 1px;
        }

        h1,
        .h1,
        h2,
        .h2,
        h3,
        .h3,
        h4,
        .h4,
        h5,
        .h5,
        h6,
        .h6 {
            margin-top: 0;
            margin-bottom: 0.5rem;
            font-weight: 500;
            line-height: 1.2;
        }

        h1,
        .h1 {
            font-size: calc(1.32812rem + 0.9375vw);
        }

        @media (min-width: 1200px) {

            h1,
            .h1 {
                font-size: 2.03125rem;
            }
        }

        h2,
        .h2 {
            font-size: calc(1.2875rem + 0.45vw);
        }

        @media (min-width: 1200px) {

            h2,
            .h2 {
                font-size: 1.625rem;
            }
        }

        h3,
        .h3 {
            font-size: calc(1.26719rem + 0.20625vw);
        }

        @media (min-width: 1200px) {

            h3,
            .h3 {
                font-size: 1.42188rem;
            }
        }

        h4,
        .h4 {
            font-size: 1.21875rem;
        }

        h5,
        .h5 {
            font-size: 1.01562rem;
        }

        h6,
        .h6 {
            font-size: 0.8125rem;
        }

        p {
            margin-top: 0;
            margin-bottom: 1rem;
        }

        abbr[title],
        abbr[data-bs-original-title] {
            text-decoration: underline;
            -webkit-text-decoration: underline dotted;
            text-decoration: underline dotted;
            cursor: help;
            -webkit-text-decoration-skip-ink: none;
            text-decoration-skip-ink: none;
        }

        address {
            margin-bottom: 1rem;
            font-style: normal;
            line-height: inherit;
        }

        ol,
        ul {
            padding-right: 2rem;
        }

        ol,
        ul,
        dl {
            margin-top: 0;
            margin-bottom: 1rem;
        }

        ol ol,
        ul ul,
        ol ul,
        ul ol {
            margin-bottom: 0;
        }

        dt {
            font-weight: 600;
        }

        dd {
            margin-bottom: .5rem;
            margin-right: 0;
        }

        blockquote {
            margin: 0 0 1rem;
        }

        b,
        strong {
            font-weight: bolder;
        }

        small,
        .small {
            font-size: 80%;
        }

        mark,
        .mark {
            padding: 0.2em;
            background-color: #fcf8e3;
        }

        sub,
        sup {
            position: relative;
            font-size: 0.75em;
            line-height: 0;
            vertical-align: baseline;
        }

        sub {
            bottom: -.25em;
        }

        sup {
            top: -.5em;
        }

        a {
            color: #556ee6;
            text-decoration: none;
        }

        a:hover {
            color: #4458b8;
            text-decoration: underline;
        }

        a:not([href]):not([class]),
        a:not([href]):not([class]):hover {
            color: inherit;
            text-decoration: none;
        }

        pre,
        code,
        kbd,
        samp {
            font-family: var(--bs-font-monospace);
            font-size: 1em;
            direction: ltr;
            unicode-bidi: bidi-override;
        }

        pre {
            display: block;
            margin-top: 0;
            margin-bottom: 1rem;
            overflow: auto;
            font-size: 87.5%;
            color: #212529;
        }

        pre code {
            font-size: inherit;
            color: inherit;
            word-break: normal;
        }

        code {
            font-size: 87.5%;
            color: #e83e8c;
            word-wrap: break-word;
        }

        a>code {
            color: inherit;
        }

        kbd {
            padding: 0.2rem 0.4rem;
            font-size: 87.5%;
            color: #fff;
            background-color: #212529;
            border-radius: 0.2rem;
        }

        kbd kbd {
            padding: 0;
            font-size: 1em;
            font-weight: 600;
        }

        figure {
            margin: 0 0 1rem;
        }

        img,
        svg {
            vertical-align: middle;
        }

        table {
            caption-side: bottom;
            border-collapse: collapse;
        }

        caption {
            padding-top: 0.75rem;
            padding-bottom: 0.75rem;
            color: #74788d;
            text-align: right;
        }

        th {
            text-align: inherit;
            text-align: -webkit-match-parent;
        }

        thead,
        tbody,
        tfoot,
        tr,
        td,
        th {
            border-color: inherit;
            border-style: solid;
            border-width: 0;
        }

        label {
            display: inline-block;
        }

        button {
            border-radius: 0;
        }

        button:focus {
            outline: dotted 1px;
            outline: -webkit-focus-ring-color auto 5px;
        }

        input,
        button,
        select,
        optgroup,
        textarea {
            margin: 0;
            font-family: inherit;
            font-size: inherit;
            line-height: inherit;
        }

        button,
        select {
            text-transform: none;
        }

        [role="button"] {
            cursor: pointer;
        }

        select {
            word-wrap: normal;
        }

        [list]::-webkit-calendar-picker-indicator {
            display: none;
        }

        button,
        [type="button"],
        [type="reset"],
        [type="submit"] {
            -webkit-appearance: button;
        }

        button:not(:disabled),
        [type="button"]:not(:disabled),
        [type="reset"]:not(:disabled),
        [type="submit"]:not(:disabled) {
            cursor: pointer;
        }

        ::-moz-focus-inner {
            padding: 0;
            border-style: none;
        }

        textarea {
            resize: vertical;
        }

        fieldset {
            min-width: 0;
            padding: 0;
            margin: 0;
            border: 0;
        }

        legend {
            float: right;
            width: 100%;
            padding: 0;
            margin-bottom: 0.5rem;
            font-size: calc(1.275rem + 0.3vw);
            line-height: inherit;
        }

        @media (min-width: 1200px) {
            legend {
                font-size: 1.5rem;
            }
        }

        legend+* {
            clear: right;
        }

        ::-webkit-datetime-edit-fields-wrapper,
        ::-webkit-datetime-edit-text,
        ::-webkit-datetime-edit-minute,
        ::-webkit-datetime-edit-hour-field,
        ::-webkit-datetime-edit-day-field,
        ::-webkit-datetime-edit-month-field,
        ::-webkit-datetime-edit-year-field {
            padding: 0;
        }

        ::-webkit-inner-spin-button {
            height: auto;
        }

        [type="search"] {
            outline-offset: -2px;
            -webkit-appearance: textfield;
        }

        [type="tel"],
        [type="url"],
        [type="email"],
        [type="number"] {
            direction: ltr;
        }

        ::-webkit-search-decoration {
            -webkit-appearance: none;
        }

        ::-webkit-color-swatch-wrapper {
            padding: 0;
        }

        ::file-selector-button {
            font: inherit;
        }

        ::-webkit-file-upload-button {
            font: inherit;
            -webkit-appearance: button;
        }

        output {
            display: inline-block;
        }

        iframe {
            border: 0;
        }

        summary {
            display: list-item;
            cursor: pointer;
        }

        progress {
            vertical-align: baseline;
        }

        [hidden] {
            display: none !important;
        }

        .lead {
            font-size: 1.01562rem;
            font-weight: 300;
        }

        .display-1 {
            font-size: calc(1.725rem + 5.7vw);
            font-weight: 300;
            line-height: 1.2;
        }

        @media (min-width: 1200px) {
            .display-1 {
                font-size: 6rem;
            }
        }

        .display-2 {
            font-size: calc(1.675rem + 5.1vw);
            font-weight: 300;
            line-height: 1.2;
        }

        @media (min-width: 1200px) {
            .display-2 {
                font-size: 5.5rem;
            }
        }

        .display-3 {
            font-size: calc(1.575rem + 3.9vw);
            font-weight: 300;
            line-height: 1.2;
        }

        @media (min-width: 1200px) {
            .display-3 {
                font-size: 4.5rem;
            }
        }

        .display-4 {
            font-size: calc(1.475rem + 2.7vw);
            font-weight: 300;
            line-height: 1.2;
        }

        @media (min-width: 1200px) {
            .display-4 {
                font-size: 3.5rem;
            }
        }

        .display-5 {
            font-size: calc(1.425rem + 2.1vw);
            font-weight: 300;
            line-height: 1.2;
        }

        @media (min-width: 1200px) {
            .display-5 {
                font-size: 3rem;
            }
        }

        .display-6 {
            font-size: calc(1.375rem + 1.5vw);
            font-weight: 300;
            line-height: 1.2;
        }

        @media (min-width: 1200px) {
            .display-6 {
                font-size: 2.5rem;
            }
        }

        .list-unstyled {
            padding-right: 0;
            list-style: none;
        }

        .list-inline {
            padding-right: 0;
            list-style: none;
        }

        .list-inline-item {
            display: inline-block;
        }

        .list-inline-item:not(:last-child) {
            margin-left: 0.5rem;
        }

        .initialism {
            font-size: 80%;
            text-transform: uppercase;
        }

        .blockquote {
            margin-bottom: 1rem;
            font-size: 1.01562rem;
        }

        .blockquote> :last-child {
            margin-bottom: 0;
        }

        .blockquote-footer {
            margin-top: -1rem;
            margin-bottom: 1rem;
            font-size: 80%;
            color: #74788d;
        }

        .blockquote-footer::before {
            content: "\2014\00A0";
        }

        .img-fluid {
            max-width: 100%;
            height: auto;
        }

        .img-thumbnail {
            padding: 0.25rem;
            background-color: #f8f8fb;
            border: 1px solid #f6f6f6;
            border-radius: 0.25rem;
            max-width: 100%;
            height: auto;
        }

        .figure {
            display: inline-block;
        }

        .figure-img {
            margin-bottom: 0.5rem;
            line-height: 1;
        }

        .figure-caption {
            font-size: 80%;
            color: #74788d;
        }

        .container,
        .container-fluid,
        .container-sm,
        .container-md,
        .container-lg,
        .container-xl,
        .container-xxl {
            width: 100%;
            padding-left: var(--bs-gutter-x, 12px);
            padding-right: var(--bs-gutter-x, 12px);
            margin-left: auto;
            margin-right: auto;
        }

        @media (min-width: 576px) {

            .container,
            .container-sm {
                max-width: 540px;
            }
        }

        @media (min-width: 768px) {

            .container,
            .container-sm,
            .container-md {
                max-width: 720px;
            }
        }

        @media (min-width: 992px) {

            .container,
            .container-sm,
            .container-md,
            .container-lg {
                max-width: 960px;
            }
        }

        @media (min-width: 1200px) {

            .container,
            .container-sm,
            .container-md,
            .container-lg,
            .container-xl {
                max-width: 1140px;
            }
        }

        @media (min-width: 1400px) {

            .container,
            .container-sm,
            .container-md,
            .container-lg,
            .container-xl,
            .container-xxl {
                max-width: 1320px;
            }
        }

        .row {
            --bs-gutter-x: 24px;
            --bs-gutter-y: 0;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            margin-top: calc(var(--bs-gutter-y) * -1);
            margin-left: calc(var(--bs-gutter-x) / -2);
            margin-right: calc(var(--bs-gutter-x) / -2);
        }

        .row>* {
            -ms-flex-negative: 0;
            flex-shrink: 0;
            width: 100%;
            max-width: 100%;
            padding-left: calc(var(--bs-gutter-x) / 2);
            padding-right: calc(var(--bs-gutter-x) / 2);
            margin-top: var(--bs-gutter-y);
        }

        .col {
            -webkit-box-flex: 1;
            -ms-flex: 1 0 0%;
            flex: 1 0 0%;
        }

        .row-cols-auto>* {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: auto;
        }

        .row-cols-1>* {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: 100%;
        }

        .row-cols-2>* {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: 50%;
        }

        .row-cols-3>* {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: 33.33333%;
        }

        .row-cols-4>* {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: 25%;
        }

        .row-cols-5>* {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: 20%;
        }

        .row-cols-6>* {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: 16.66667%;
        }

        .col-auto {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: auto;
        }

        .col-1 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: 8.33333%;
        }

        .col-2 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: 16.66667%;
        }

        .col-3 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: 25%;
        }

        .col-4 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: 33.33333%;
        }

        .col-5 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: 41.66667%;
        }

        .col-6 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: 50%;
        }

        .col-7 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: 58.33333%;
        }

        .col-8 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: 66.66667%;
        }

        .col-9 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: 75%;
        }

        .col-10 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: 83.33333%;
        }

        .col-11 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: 91.66667%;
        }

        .col-12 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: 100%;
        }

        .offset-1 {
            margin-right: 8.33333%;
        }

        .offset-2 {
            margin-right: 16.66667%;
        }

        .offset-3 {
            margin-right: 25%;
        }

        .offset-4 {
            margin-right: 33.33333%;
        }

        .offset-5 {
            margin-right: 41.66667%;
        }

        .offset-6 {
            margin-right: 50%;
        }

        .offset-7 {
            margin-right: 58.33333%;
        }

        .offset-8 {
            margin-right: 66.66667%;
        }

        .offset-9 {
            margin-right: 75%;
        }

        .offset-10 {
            margin-right: 83.33333%;
        }

        .offset-11 {
            margin-right: 91.66667%;
        }

        .g-0,
        .gx-0 {
            --bs-gutter-x: 0;
        }

        .g-0,
        .gy-0 {
            --bs-gutter-y: 0;
        }

        .g-1,
        .gx-1 {
            --bs-gutter-x: 0.25rem;
        }

        .g-1,
        .gy-1 {
            --bs-gutter-y: 0.25rem;
        }

        .g-2,
        .gx-2 {
            --bs-gutter-x: 0.5rem;
        }

        .g-2,
        .gy-2 {
            --bs-gutter-y: 0.5rem;
        }

        .g-3,
        .gx-3 {
            --bs-gutter-x: 1rem;
        }

        .g-3,
        .gy-3 {
            --bs-gutter-y: 1rem;
        }

        .g-4,
        .gx-4 {
            --bs-gutter-x: 1.5rem;
        }

        .g-4,
        .gy-4 {
            --bs-gutter-y: 1.5rem;
        }

        .g-5,
        .gx-5 {
            --bs-gutter-x: 3rem;
        }

        .g-5,
        .gy-5 {
            --bs-gutter-y: 3rem;
        }

        @media (min-width: 576px) {
            .col-sm {
                -webkit-box-flex: 1;
                -ms-flex: 1 0 0%;
                flex: 1 0 0%;
            }

            .row-cols-sm-auto>* {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: auto;
            }

            .row-cols-sm-1>* {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 100%;
            }

            .row-cols-sm-2>* {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 50%;
            }

            .row-cols-sm-3>* {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 33.33333%;
            }

            .row-cols-sm-4>* {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 25%;
            }

            .row-cols-sm-5>* {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 20%;
            }

            .row-cols-sm-6>* {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 16.66667%;
            }

            .col-sm-auto {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: auto;
            }

            .col-sm-1 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 8.33333%;
            }

            .col-sm-2 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 16.66667%;
            }

            .col-sm-3 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 25%;
            }

            .col-sm-4 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 33.33333%;
            }

            .col-sm-5 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 41.66667%;
            }

            .col-sm-6 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 50%;
            }

            .col-sm-7 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 58.33333%;
            }

            .col-sm-8 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 66.66667%;
            }

            .col-sm-9 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 75%;
            }

            .col-sm-10 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 83.33333%;
            }

            .col-sm-11 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 91.66667%;
            }

            .col-sm-12 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 100%;
            }

            .offset-sm-0 {
                margin-right: 0;
            }

            .offset-sm-1 {
                margin-right: 8.33333%;
            }

            .offset-sm-2 {
                margin-right: 16.66667%;
            }

            .offset-sm-3 {
                margin-right: 25%;
            }

            .offset-sm-4 {
                margin-right: 33.33333%;
            }

            .offset-sm-5 {
                margin-right: 41.66667%;
            }

            .offset-sm-6 {
                margin-right: 50%;
            }

            .offset-sm-7 {
                margin-right: 58.33333%;
            }

            .offset-sm-8 {
                margin-right: 66.66667%;
            }

            .offset-sm-9 {
                margin-right: 75%;
            }

            .offset-sm-10 {
                margin-right: 83.33333%;
            }

            .offset-sm-11 {
                margin-right: 91.66667%;
            }

            .g-sm-0,
            .gx-sm-0 {
                --bs-gutter-x: 0;
            }

            .g-sm-0,
            .gy-sm-0 {
                --bs-gutter-y: 0;
            }

            .g-sm-1,
            .gx-sm-1 {
                --bs-gutter-x: 0.25rem;
            }

            .g-sm-1,
            .gy-sm-1 {
                --bs-gutter-y: 0.25rem;
            }

            .g-sm-2,
            .gx-sm-2 {
                --bs-gutter-x: 0.5rem;
            }

            .g-sm-2,
            .gy-sm-2 {
                --bs-gutter-y: 0.5rem;
            }

            .g-sm-3,
            .gx-sm-3 {
                --bs-gutter-x: 1rem;
            }

            .g-sm-3,
            .gy-sm-3 {
                --bs-gutter-y: 1rem;
            }

            .g-sm-4,
            .gx-sm-4 {
                --bs-gutter-x: 1.5rem;
            }

            .g-sm-4,
            .gy-sm-4 {
                --bs-gutter-y: 1.5rem;
            }

            .g-sm-5,
            .gx-sm-5 {
                --bs-gutter-x: 3rem;
            }

            .g-sm-5,
            .gy-sm-5 {
                --bs-gutter-y: 3rem;
            }
        }

        @media (min-width: 768px) {
            .col-md {
                -webkit-box-flex: 1;
                -ms-flex: 1 0 0%;
                flex: 1 0 0%;
            }

            .row-cols-md-auto>* {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: auto;
            }

            .row-cols-md-1>* {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 100%;
            }

            .row-cols-md-2>* {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 50%;
            }

            .row-cols-md-3>* {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 33.33333%;
            }

            .row-cols-md-4>* {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 25%;
            }

            .row-cols-md-5>* {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 20%;
            }

            .row-cols-md-6>* {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 16.66667%;
            }

            .col-md-auto {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: auto;
            }

            .col-md-1 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 8.33333%;
            }

            .col-md-2 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 16.66667%;
            }

            .col-md-3 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 25%;
            }

            .col-md-4 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 33.33333%;
            }

            .col-md-5 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 41.66667%;
            }

            .col-md-6 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 50%;
            }

            .col-md-7 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 58.33333%;
            }

            .col-md-8 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 66.66667%;
            }

            .col-md-9 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 75%;
            }

            .col-md-10 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 83.33333%;
            }

            .col-md-11 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 91.66667%;
            }

            .col-md-12 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 100%;
            }

            .offset-md-0 {
                margin-right: 0;
            }

            .offset-md-1 {
                margin-right: 8.33333%;
            }

            .offset-md-2 {
                margin-right: 16.66667%;
            }

            .offset-md-3 {
                margin-right: 25%;
            }

            .offset-md-4 {
                margin-right: 33.33333%;
            }

            .offset-md-5 {
                margin-right: 41.66667%;
            }

            .offset-md-6 {
                margin-right: 50%;
            }

            .offset-md-7 {
                margin-right: 58.33333%;
            }

            .offset-md-8 {
                margin-right: 66.66667%;
            }

            .offset-md-9 {
                margin-right: 75%;
            }

            .offset-md-10 {
                margin-right: 83.33333%;
            }

            .offset-md-11 {
                margin-right: 91.66667%;
            }

            .g-md-0,
            .gx-md-0 {
                --bs-gutter-x: 0;
            }

            .g-md-0,
            .gy-md-0 {
                --bs-gutter-y: 0;
            }

            .g-md-1,
            .gx-md-1 {
                --bs-gutter-x: 0.25rem;
            }

            .g-md-1,
            .gy-md-1 {
                --bs-gutter-y: 0.25rem;
            }

            .g-md-2,
            .gx-md-2 {
                --bs-gutter-x: 0.5rem;
            }

            .g-md-2,
            .gy-md-2 {
                --bs-gutter-y: 0.5rem;
            }

            .g-md-3,
            .gx-md-3 {
                --bs-gutter-x: 1rem;
            }

            .g-md-3,
            .gy-md-3 {
                --bs-gutter-y: 1rem;
            }

            .g-md-4,
            .gx-md-4 {
                --bs-gutter-x: 1.5rem;
            }

            .g-md-4,
            .gy-md-4 {
                --bs-gutter-y: 1.5rem;
            }

            .g-md-5,
            .gx-md-5 {
                --bs-gutter-x: 3rem;
            }

            .g-md-5,
            .gy-md-5 {
                --bs-gutter-y: 3rem;
            }
        }

        @media (min-width: 992px) {
            .col-lg {
                -webkit-box-flex: 1;
                -ms-flex: 1 0 0%;
                flex: 1 0 0%;
            }

            .row-cols-lg-auto>* {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: auto;
            }

            .row-cols-lg-1>* {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 100%;
            }

            .row-cols-lg-2>* {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 50%;
            }

            .row-cols-lg-3>* {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 33.33333%;
            }

            .row-cols-lg-4>* {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 25%;
            }

            .row-cols-lg-5>* {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 20%;
            }

            .row-cols-lg-6>* {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 16.66667%;
            }

            .col-lg-auto {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: auto;
            }

            .col-lg-1 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 8.33333%;
            }

            .col-lg-2 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 16.66667%;
            }

            .col-lg-3 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 25%;
            }

            .col-lg-4 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 33.33333%;
            }

            .col-lg-5 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 41.66667%;
            }

            .col-lg-6 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 50%;
            }

            .col-lg-7 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 58.33333%;
            }

            .col-lg-8 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 66.66667%;
            }

            .col-lg-9 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 75%;
            }

            .col-lg-10 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 83.33333%;
            }

            .col-lg-11 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 91.66667%;
            }

            .col-lg-12 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 100%;
            }

            .offset-lg-0 {
                margin-right: 0;
            }

            .offset-lg-1 {
                margin-right: 8.33333%;
            }

            .offset-lg-2 {
                margin-right: 16.66667%;
            }

            .offset-lg-3 {
                margin-right: 25%;
            }

            .offset-lg-4 {
                margin-right: 33.33333%;
            }

            .offset-lg-5 {
                margin-right: 41.66667%;
            }

            .offset-lg-6 {
                margin-right: 50%;
            }

            .offset-lg-7 {
                margin-right: 58.33333%;
            }

            .offset-lg-8 {
                margin-right: 66.66667%;
            }

            .offset-lg-9 {
                margin-right: 75%;
            }

            .offset-lg-10 {
                margin-right: 83.33333%;
            }

            .offset-lg-11 {
                margin-right: 91.66667%;
            }

            .g-lg-0,
            .gx-lg-0 {
                --bs-gutter-x: 0;
            }

            .g-lg-0,
            .gy-lg-0 {
                --bs-gutter-y: 0;
            }

            .g-lg-1,
            .gx-lg-1 {
                --bs-gutter-x: 0.25rem;
            }

            .g-lg-1,
            .gy-lg-1 {
                --bs-gutter-y: 0.25rem;
            }

            .g-lg-2,
            .gx-lg-2 {
                --bs-gutter-x: 0.5rem;
            }

            .g-lg-2,
            .gy-lg-2 {
                --bs-gutter-y: 0.5rem;
            }

            .g-lg-3,
            .gx-lg-3 {
                --bs-gutter-x: 1rem;
            }

            .g-lg-3,
            .gy-lg-3 {
                --bs-gutter-y: 1rem;
            }

            .g-lg-4,
            .gx-lg-4 {
                --bs-gutter-x: 1.5rem;
            }

            .g-lg-4,
            .gy-lg-4 {
                --bs-gutter-y: 1.5rem;
            }

            .g-lg-5,
            .gx-lg-5 {
                --bs-gutter-x: 3rem;
            }

            .g-lg-5,
            .gy-lg-5 {
                --bs-gutter-y: 3rem;
            }
        }

        @media (min-width: 1200px) {
            .col-xl {
                -webkit-box-flex: 1;
                -ms-flex: 1 0 0%;
                flex: 1 0 0%;
            }

            .row-cols-xl-auto>* {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: auto;
            }

            .row-cols-xl-1>* {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 100%;
            }

            .row-cols-xl-2>* {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 50%;
            }

            .row-cols-xl-3>* {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 33.33333%;
            }

            .row-cols-xl-4>* {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 25%;
            }

            .row-cols-xl-5>* {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 20%;
            }

            .row-cols-xl-6>* {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 16.66667%;
            }

            .col-xl-auto {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: auto;
            }

            .col-xl-1 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 8.33333%;
            }

            .col-xl-2 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 16.66667%;
            }

            .col-xl-3 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 25%;
            }

            .col-xl-4 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 33.33333%;
            }

            .col-xl-5 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 41.66667%;
            }

            .col-xl-6 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 50%;
            }

            .col-xl-7 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 58.33333%;
            }

            .col-xl-8 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 66.66667%;
            }

            .col-xl-9 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 75%;
            }

            .col-xl-10 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 83.33333%;
            }

            .col-xl-11 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 91.66667%;
            }

            .col-xl-12 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 100%;
            }

            .offset-xl-0 {
                margin-right: 0;
            }

            .offset-xl-1 {
                margin-right: 8.33333%;
            }

            .offset-xl-2 {
                margin-right: 16.66667%;
            }

            .offset-xl-3 {
                margin-right: 25%;
            }

            .offset-xl-4 {
                margin-right: 33.33333%;
            }

            .offset-xl-5 {
                margin-right: 41.66667%;
            }

            .offset-xl-6 {
                margin-right: 50%;
            }

            .offset-xl-7 {
                margin-right: 58.33333%;
            }

            .offset-xl-8 {
                margin-right: 66.66667%;
            }

            .offset-xl-9 {
                margin-right: 75%;
            }

            .offset-xl-10 {
                margin-right: 83.33333%;
            }

            .offset-xl-11 {
                margin-right: 91.66667%;
            }

            .g-xl-0,
            .gx-xl-0 {
                --bs-gutter-x: 0;
            }

            .g-xl-0,
            .gy-xl-0 {
                --bs-gutter-y: 0;
            }

            .g-xl-1,
            .gx-xl-1 {
                --bs-gutter-x: 0.25rem;
            }

            .g-xl-1,
            .gy-xl-1 {
                --bs-gutter-y: 0.25rem;
            }

            .g-xl-2,
            .gx-xl-2 {
                --bs-gutter-x: 0.5rem;
            }

            .g-xl-2,
            .gy-xl-2 {
                --bs-gutter-y: 0.5rem;
            }

            .g-xl-3,
            .gx-xl-3 {
                --bs-gutter-x: 1rem;
            }

            .g-xl-3,
            .gy-xl-3 {
                --bs-gutter-y: 1rem;
            }

            .g-xl-4,
            .gx-xl-4 {
                --bs-gutter-x: 1.5rem;
            }

            .g-xl-4,
            .gy-xl-4 {
                --bs-gutter-y: 1.5rem;
            }

            .g-xl-5,
            .gx-xl-5 {
                --bs-gutter-x: 3rem;
            }

            .g-xl-5,
            .gy-xl-5 {
                --bs-gutter-y: 3rem;
            }
        }

        @media (min-width: 1400px) {
            .col-xxl {
                -webkit-box-flex: 1;
                -ms-flex: 1 0 0%;
                flex: 1 0 0%;
            }

            .row-cols-xxl-auto>* {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: auto;
            }

            .row-cols-xxl-1>* {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 100%;
            }

            .row-cols-xxl-2>* {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 50%;
            }

            .row-cols-xxl-3>* {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 33.33333%;
            }

            .row-cols-xxl-4>* {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 25%;
            }

            .row-cols-xxl-5>* {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 20%;
            }

            .row-cols-xxl-6>* {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 16.66667%;
            }

            .col-xxl-auto {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: auto;
            }

            .col-xxl-1 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 8.33333%;
            }

            .col-xxl-2 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 16.66667%;
            }

            .col-xxl-3 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 25%;
            }

            .col-xxl-4 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 33.33333%;
            }

            .col-xxl-5 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 41.66667%;
            }

            .col-xxl-6 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 50%;
            }

            .col-xxl-7 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 58.33333%;
            }

            .col-xxl-8 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 66.66667%;
            }

            .col-xxl-9 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 75%;
            }

            .col-xxl-10 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 83.33333%;
            }

            .col-xxl-11 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 91.66667%;
            }

            .col-xxl-12 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 100%;
            }

            .offset-xxl-0 {
                margin-right: 0;
            }

            .offset-xxl-1 {
                margin-right: 8.33333%;
            }

            .offset-xxl-2 {
                margin-right: 16.66667%;
            }

            .offset-xxl-3 {
                margin-right: 25%;
            }

            .offset-xxl-4 {
                margin-right: 33.33333%;
            }

            .offset-xxl-5 {
                margin-right: 41.66667%;
            }

            .offset-xxl-6 {
                margin-right: 50%;
            }

            .offset-xxl-7 {
                margin-right: 58.33333%;
            }

            .offset-xxl-8 {
                margin-right: 66.66667%;
            }

            .offset-xxl-9 {
                margin-right: 75%;
            }

            .offset-xxl-10 {
                margin-right: 83.33333%;
            }

            .offset-xxl-11 {
                margin-right: 91.66667%;
            }

            .g-xxl-0,
            .gx-xxl-0 {
                --bs-gutter-x: 0;
            }

            .g-xxl-0,
            .gy-xxl-0 {
                --bs-gutter-y: 0;
            }

            .g-xxl-1,
            .gx-xxl-1 {
                --bs-gutter-x: 0.25rem;
            }

            .g-xxl-1,
            .gy-xxl-1 {
                --bs-gutter-y: 0.25rem;
            }

            .g-xxl-2,
            .gx-xxl-2 {
                --bs-gutter-x: 0.5rem;
            }

            .g-xxl-2,
            .gy-xxl-2 {
                --bs-gutter-y: 0.5rem;
            }

            .g-xxl-3,
            .gx-xxl-3 {
                --bs-gutter-x: 1rem;
            }

            .g-xxl-3,
            .gy-xxl-3 {
                --bs-gutter-y: 1rem;
            }

            .g-xxl-4,
            .gx-xxl-4 {
                --bs-gutter-x: 1.5rem;
            }

            .g-xxl-4,
            .gy-xxl-4 {
                --bs-gutter-y: 1.5rem;
            }

            .g-xxl-5,
            .gx-xxl-5 {
                --bs-gutter-x: 3rem;
            }

            .g-xxl-5,
            .gy-xxl-5 {
                --bs-gutter-y: 3rem;
            }
        }

        .table {
            --bs-table-bg: transparent;
            --bs-table-striped-color: #495057;
            --bs-table-striped-bg: #f8f9fa;
            --bs-table-active-color: #495057;
            --bs-table-active-bg: #f8f9fa;
            --bs-table-hover-color: #495057;
            --bs-table-hover-bg: #f8f9fa;
            width: 100%;
            margin-bottom: 1rem;
            color: #495057;
            vertical-align: top;
            border-color: #eff2f7;
        }

        .table> :not(caption)>*>* {
            padding: 0.75rem 0.75rem;
            background-color: var(--bs-table-bg);
            background-image: -webkit-gradient(linear, right top, right bottom, from(var(--bs-table-accent-bg)), to(var(--bs-table-accent-bg)));
            background-image: linear-gradient(var(--bs-table-accent-bg), var(--bs-table-accent-bg));
            border-bottom-width: 1px;
        }

        .table>tbody {
            vertical-align: inherit;
        }

        .table>thead {
            vertical-align: bottom;
        }

        .table> :not(:last-child)> :last-child>* {
            border-bottom-color: #eff2f7;
        }

        .caption-top {
            caption-side: top;
        }

        .table-sm> :not(caption)>*>* {
            padding: 0.3rem 0.3rem;
        }

        .table-bordered> :not(caption)>* {
            border-width: 1px 0;
        }

        .table-bordered> :not(caption)>*>* {
            border-width: 0 1px;
        }

        .table-borderless> :not(caption)>*>* {
            border-bottom-width: 0;
        }

        .table-striped>tbody>tr:nth-of-type(odd) {
            --bs-table-accent-bg: var(--bs-table-striped-bg);
            color: var(--bs-table-striped-color);
        }

        .table-active {
            --bs-table-accent-bg: var(--bs-table-active-bg);
            color: var(--bs-table-active-color);
        }

        .table-hover>tbody>tr:hover {
            --bs-table-accent-bg: var(--bs-table-hover-bg);
            color: var(--bs-table-hover-color);
        }

        .table-primary {
            --bs-table-bg: #dde2fa;
            --bs-table-striped-bg: #d2d7ee;
            --bs-table-striped-color: #000;
            --bs-table-active-bg: #c7cbe1;
            --bs-table-active-color: #000;
            --bs-table-hover-bg: #ccd1e7;
            --bs-table-hover-color: #000;
            color: #000;
            border-color: #c7cbe1;
        }

        .table-secondary {
            --bs-table-bg: #e3e4e8;
            --bs-table-striped-bg: #d8d9dc;
            --bs-table-striped-color: #000;
            --bs-table-active-bg: #cccdd1;
            --bs-table-active-color: #000;
            --bs-table-hover-bg: #d2d3d7;
            --bs-table-hover-color: #000;
            color: #000;
            border-color: #cccdd1;
        }

        .table-success {
            --bs-table-bg: #d6f3e9;
            --bs-table-striped-bg: #cbe7dd;
            --bs-table-striped-color: #000;
            --bs-table-active-bg: #c1dbd2;
            --bs-table-active-color: #000;
            --bs-table-hover-bg: #c6e1d8;
            --bs-table-hover-color: #000;
            color: #000;
            border-color: #c1dbd2;
        }

        .table-info {
            --bs-table-bg: #dcedfc;
            --bs-table-striped-bg: #d1e1ef;
            --bs-table-striped-color: #000;
            --bs-table-active-bg: #c6d5e3;
            --bs-table-active-color: #000;
            --bs-table-hover-bg: #ccdbe9;
            --bs-table-hover-color: #000;
            color: #000;
            border-color: #c6d5e3;
        }

        .table-warning {
            --bs-table-bg: #fcf0db;
            --bs-table-striped-bg: #efe4d0;
            --bs-table-striped-color: #000;
            --bs-table-active-bg: #e3d8c5;
            --bs-table-active-color: #000;
            --bs-table-hover-bg: #e9decb;
            --bs-table-hover-color: #000;
            color: #000;
            border-color: #e3d8c5;
        }

        .table-danger {
            --bs-table-bg: #fde1e1;
            --bs-table-striped-bg: #f0d6d6;
            --bs-table-striped-color: #000;
            --bs-table-active-bg: #e4cbcb;
            --bs-table-active-color: #000;
            --bs-table-hover-bg: #ead0d0;
            --bs-table-hover-color: #000;
            color: #000;
            border-color: #e4cbcb;
        }

        .table-light {
            --bs-table-bg: #eff2f7;
            --bs-table-striped-bg: #e3e6eb;
            --bs-table-striped-color: #000;
            --bs-table-active-bg: #d7dade;
            --bs-table-active-color: #000;
            --bs-table-hover-bg: #dde0e4;
            --bs-table-hover-color: #000;
            color: #000;
            border-color: #d7dade;
        }

        .table-dark {
            --bs-table-bg: #343a40;
            --bs-table-striped-bg: #3e444a;
            --bs-table-striped-color: #fff;
            --bs-table-active-bg: #484e53;
            --bs-table-active-color: #fff;
            --bs-table-hover-bg: #43494e;
            --bs-table-hover-color: #fff;
            color: #fff;
            border-color: #484e53;
        }

        .table-responsive {
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
        }

        @media (max-width: 575.98px) {
            .table-responsive-sm {
                overflow-x: auto;
                -webkit-overflow-scrolling: touch;
            }
        }

        @media (max-width: 767.98px) {
            .table-responsive-md {
                overflow-x: auto;
                -webkit-overflow-scrolling: touch;
            }
        }

        @media (max-width: 991.98px) {
            .table-responsive-lg {
                overflow-x: auto;
                -webkit-overflow-scrolling: touch;
            }
        }

        @media (max-width: 1199.98px) {
            .table-responsive-xl {
                overflow-x: auto;
                -webkit-overflow-scrolling: touch;
            }
        }

        @media (max-width: 1399.98px) {
            .table-responsive-xxl {
                overflow-x: auto;
                -webkit-overflow-scrolling: touch;
            }
        }

        .form-label {
            margin-bottom: 0.5rem;
        }

        .col-form-label {
            padding-top: calc(0.47rem + 1px);
            padding-bottom: calc(0.47rem + 1px);
            margin-bottom: 0;
            font-size: inherit;
            line-height: 1.5;
        }

        .col-form-label-lg {
            padding-top: calc(0.5rem + 1px);
            padding-bottom: calc(0.5rem + 1px);
            font-size: 1.01562rem;
        }

        .col-form-label-sm {
            padding-top: calc(0.25rem + 1px);
            padding-bottom: calc(0.25rem + 1px);
            font-size: 0.71094rem;
        }

        .form-text {
            margin-top: 0.25rem;
            font-size: 80%;
            color: #74788d;
        }

        .form-control {
            display: block;
            width: 100%;
            padding: 0.47rem 0.75rem;
            font-size: 0.8125rem;
            font-weight: 400;
            line-height: 1.5;
            color: #495057;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid #ced4da;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            border-radius: 0.25rem;
            -webkit-transition: border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
            transition: border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
        }

        @media (prefers-reduced-motion: reduce) {
            .form-control {
                -webkit-transition: none;
                transition: none;
            }
        }

        .form-control[type="file"] {
            overflow: hidden;
        }

        .form-control[type="file"]:not(:disabled):not([readonly]) {
            cursor: pointer;
        }

        .form-control:focus {
            color: #495057;
            background-color: #fff;
            border-color: #b9bfc4;
            outline: 0;
            -webkit-box-shadow: none;
            box-shadow: none;
        }

        .form-control::-webkit-date-and-time-value {
            height: 1.5em;
        }

        .form-control::-webkit-input-placeholder {
            color: #74788d;
            opacity: 1;
        }

        .form-control::-moz-placeholder {
            color: #74788d;
            opacity: 1;
        }

        .form-control:-ms-input-placeholder {
            color: #74788d;
            opacity: 1;
        }

        .form-control::-ms-input-placeholder {
            color: #74788d;
            opacity: 1;
        }

        .form-control::placeholder {
            color: #74788d;
            opacity: 1;
        }

        .form-control:disabled,
        .form-control[readonly] {
            background-color: #eff2f7;
            opacity: 1;
        }

        .form-control::file-selector-button {
            padding: 0.47rem 0.75rem;
            margin: -0.47rem -0.75rem;
            -webkit-margin-end: 0.75rem;
            margin-inline-end: 0.75rem;
            color: #495057;
            background-color: #eff2f7;
            pointer-events: none;
            border-color: inherit;
            border-style: solid;
            border-width: 0;
            border-inline-end-width: 1px;
            border-radius: 0;
            -webkit-transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
            transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
            transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
            transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
        }

        @media (prefers-reduced-motion: reduce) {
            .form-control::file-selector-button {
                -webkit-transition: none;
                transition: none;
            }
        }

        .form-control:hover:not(:disabled):not([readonly])::file-selector-button {
            background-color: #e3e6eb;
        }

        .form-control::-webkit-file-upload-button {
            padding: 0.47rem 0.75rem;
            margin: -0.47rem -0.75rem;
            -webkit-margin-end: 0.75rem;
            margin-inline-end: 0.75rem;
            color: #495057;
            background-color: #eff2f7;
            pointer-events: none;
            border-color: inherit;
            border-style: solid;
            border-width: 0;
            border-inline-end-width: 1px;
            border-radius: 0;
            -webkit-transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
            transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
            transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
            transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
        }

        @media (prefers-reduced-motion: reduce) {
            .form-control::-webkit-file-upload-button {
                -webkit-transition: none;
                transition: none;
            }
        }

        .form-control:hover:not(:disabled):not([readonly])::-webkit-file-upload-button {
            background-color: #e3e6eb;
        }

        .form-control-plaintext {
            display: block;
            width: 100%;
            padding: 0.47rem 0;
            margin-bottom: 0;
            line-height: 1.5;
            color: #495057;
            background-color: transparent;
            border: solid transparent;
            border-width: 1px 0;
        }

        .form-control-plaintext.form-control-sm,
        .form-control-plaintext.form-control-lg {
            padding-left: 0;
            padding-right: 0;
        }

        .form-control-sm {
            min-height: calc(1.5em + 0.5rem + 2px);
            padding: 0.25rem 0.5rem;
            font-size: 0.71094rem;
            border-radius: 0.2rem;
        }

        .form-control-sm::file-selector-button {
            padding: 0.25rem 0.5rem;
            margin: -0.25rem -0.5rem;
            -webkit-margin-end: 0.5rem;
            margin-inline-end: 0.5rem;
        }

        .form-control-sm::-webkit-file-upload-button {
            padding: 0.25rem 0.5rem;
            margin: -0.25rem -0.5rem;
            -webkit-margin-end: 0.5rem;
            margin-inline-end: 0.5rem;
        }

        .form-control-lg {
            min-height: calc(1.5em + 1rem + 2px);
            padding: 0.5rem 1rem;
            font-size: 1.01562rem;
            border-radius: 0.4rem;
        }

        .form-control-lg::file-selector-button {
            padding: 0.5rem 1rem;
            margin: -0.5rem -1rem;
            -webkit-margin-end: 1rem;
            margin-inline-end: 1rem;
        }

        .form-control-lg::-webkit-file-upload-button {
            padding: 0.5rem 1rem;
            margin: -0.5rem -1rem;
            -webkit-margin-end: 1rem;
            margin-inline-end: 1rem;
        }

        textarea.form-control {
            min-height: calc(1.5em + 0.94rem + 2px);
        }

        textarea.form-control-sm {
            min-height: calc(1.5em + 0.5rem + 2px);
        }

        textarea.form-control-lg {
            min-height: calc(1.5em + 1rem + 2px);
        }

        .form-control-color {
            max-width: 3rem;
            height: auto;
            padding: 0.47rem;
        }

        .form-control-color:not(:disabled):not([readonly]) {
            cursor: pointer;
        }

        .form-control-color::-moz-color-swatch {
            height: 1.5em;
            border-radius: 0.25rem;
        }

        .form-control-color::-webkit-color-swatch {
            height: 1.5em;
            border-radius: 0.25rem;
        }

        .form-select {
            display: block;
            width: 100%;
            padding: 0.47rem 0.75rem 0.47rem 1.75rem;
            font-size: 0.8125rem;
            font-weight: 400;
            line-height: 1.5;
            color: #495057;
            vertical-align: middle;
            background-color: #fff;
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23343a40' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M2 5l6 6 6-6'/%3e%3c/svg%3e");
            background-repeat: no-repeat;
            background-position: left 0.75rem center;
            background-size: 16px 12px;
            border: 1px solid #ced4da;
            border-radius: 0.25rem;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
        }

        .form-select:focus {
            border-color: #b9bfc4;
            outline: 0;
            -webkit-box-shadow: 0 0 0 0.15rem rgba(85, 110, 230, 0.25);
            box-shadow: 0 0 0 0.15rem rgba(85, 110, 230, 0.25);
        }

        .form-select[multiple],
        .form-select[size]:not([size="1"]) {
            padding-left: 0.75rem;
            background-image: none;
        }

        .form-select:disabled {
            color: #74788d;
            background-color: #eff2f7;
        }

        .form-select:-moz-focusring {
            color: transparent;
            text-shadow: 0 0 0 #495057;
        }

        .form-select-sm {
            padding-top: 0.25rem;
            padding-bottom: 0.25rem;
            padding-right: 0.5rem;
            font-size: 0.71094rem;
        }

        .form-select-lg {
            padding-top: 0.5rem;
            padding-bottom: 0.5rem;
            padding-right: 1rem;
            font-size: 1.01562rem;
        }

        .form-check {
            display: block;
            min-height: 1.21875rem;
            padding-right: 1.5em;
            margin-bottom: 0.125rem;
        }

        .form-check .form-check-input {
            float: right;
            margin-right: -1.5em;
        }

        .form-check-input {
            width: 1em;
            height: 1em;
            margin-top: 0.25em;
            vertical-align: top;
            background-color: #fff;
            background-repeat: no-repeat;
            background-position: center;
            background-size: contain;
            border: 1px solid rgba(0, 0, 0, 0.25);
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            -webkit-print-color-adjust: exact;
            color-adjust: exact;
            -webkit-transition: background-color 0.15s ease-in-out, background-position 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
            transition: background-color 0.15s ease-in-out, background-position 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
            transition: background-color 0.15s ease-in-out, background-position 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
            transition: background-color 0.15s ease-in-out, background-position 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
        }

        @media (prefers-reduced-motion: reduce) {
            .form-check-input {
                -webkit-transition: none;
                transition: none;
            }
        }

        .form-check-input[type="checkbox"] {
            border-radius: 0.25em;
        }

        .form-check-input[type="radio"] {
            border-radius: 50%;
        }

        .form-check-input:active {
            -webkit-filter: brightness(90%);
            filter: brightness(90%);
        }

        .form-check-input:focus {
            border-color: #b9bfc4;
            outline: 0;
            -webkit-box-shadow: 0 0 0 0.15rem rgba(85, 110, 230, 0.25);
            box-shadow: 0 0 0 0.15rem rgba(85, 110, 230, 0.25);
        }

        .form-check-input:checked {
            background-color: #556ee6;
            border-color: #556ee6;
        }

        .form-check-input:checked[type="checkbox"] {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20'%3e%3cpath fill='none' stroke='%23fff' stroke-linecap='round' stroke-linejoin='round' stroke-width='3' d='M6 10l3 3l6-6'/%3e%3c/svg%3e");
        }

        .form-check-input:checked[type="radio"] {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='2' fill='%23fff'/%3e%3c/svg%3e");
        }

        .form-check-input[type="checkbox"]:indeterminate {
            background-color: #556ee6;
            border-color: #556ee6;
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20'%3e%3cpath fill='none' stroke='%23fff' stroke-linecap='round' stroke-linejoin='round' stroke-width='3' d='M6 10h8'/%3e%3c/svg%3e");
        }

        .form-check-input:disabled {
            pointer-events: none;
            -webkit-filter: none;
            filter: none;
            opacity: 0.5;
        }

        .form-check-input[disabled]~.form-check-label,
        .form-check-input:disabled~.form-check-label {
            opacity: 0.5;
        }

        .form-switch {
            padding-right: 2.5em;
        }

        .form-switch .form-check-input {
            width: 2em;
            margin-right: -2.5em;
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='rgba%280, 0, 0, 0.25%29'/%3e%3c/svg%3e");
            background-position: right center;
            border-radius: 2em;
        }

        .form-switch .form-check-input:focus {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='%23b9bfc4'/%3e%3c/svg%3e");
        }

        .form-switch .form-check-input:checked {
            background-position: left center;
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='%23fff'/%3e%3c/svg%3e");
        }

        .form-check-inline {
            display: inline-block;
            margin-left: 1rem;
        }

        .btn-check {
            position: absolute;
            clip: rect(0, 0, 0, 0);
            pointer-events: none;
        }

        .btn-check[disabled]+.btn,
        .btn-check:disabled+.btn {
            pointer-events: none;
            -webkit-filter: none;
            filter: none;
            opacity: 0.65;
        }

        .form-range {
            width: 100%;
            height: 1.3rem;
            padding: 0;
            background-color: transparent;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
        }

        .form-range:focus {
            outline: none;
        }

        .form-range:focus::-webkit-slider-thumb {
            -webkit-box-shadow: 0 0 0 1px #f8f8fb, none;
            box-shadow: 0 0 0 1px #f8f8fb, none;
        }

        .form-range:focus::-moz-range-thumb {
            box-shadow: 0 0 0 1px #f8f8fb, none;
        }

        .form-range::-moz-focus-outer {
            border: 0;
        }

        .form-range::-webkit-slider-thumb {
            width: 1rem;
            height: 1rem;
            margin-top: -0.25rem;
            background-color: #556ee6;
            border: 0;
            border-radius: 1rem;
            -webkit-transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
            transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
            transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
            transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
            -webkit-appearance: none;
            appearance: none;
        }

        @media (prefers-reduced-motion: reduce) {
            .form-range::-webkit-slider-thumb {
                -webkit-transition: none;
                transition: none;
            }
        }

        .form-range::-webkit-slider-thumb:active {
            background-color: #ccd4f8;
        }

        .form-range::-webkit-slider-runnable-track {
            width: 100%;
            height: 0.5rem;
            color: transparent;
            cursor: pointer;
            background-color: #f6f6f6;
            border-color: transparent;
            border-radius: 1rem;
        }

        .form-range::-moz-range-thumb {
            width: 1rem;
            height: 1rem;
            background-color: #556ee6;
            border: 0;
            border-radius: 1rem;
            -moz-transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
            transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
            -moz-appearance: none;
            appearance: none;
        }

        @media (prefers-reduced-motion: reduce) {
            .form-range::-moz-range-thumb {
                -moz-transition: none;
                transition: none;
            }
        }

        .form-range::-moz-range-thumb:active {
            background-color: #ccd4f8;
        }

        .form-range::-moz-range-track {
            width: 100%;
            height: 0.5rem;
            color: transparent;
            cursor: pointer;
            background-color: #f6f6f6;
            border-color: transparent;
            border-radius: 1rem;
        }

        .form-range:disabled {
            pointer-events: none;
        }

        .form-range:disabled::-webkit-slider-thumb {
            background-color: #adb5bd;
        }

        .form-range:disabled::-moz-range-thumb {
            background-color: #adb5bd;
        }

        .form-floating {
            position: relative;
        }

        .form-floating>.form-control,
        .form-floating>.form-select {
            height: calc(3.5rem + 2px);
            padding: 1rem 0.75rem;
        }

        .form-floating>label {
            position: absolute;
            top: 0;
            right: 0;
            height: 100%;
            padding: 1rem 0.75rem;
            pointer-events: none;
            border: 1px solid transparent;
            -webkit-transform-origin: 100% 0;
            transform-origin: 100% 0;
            -webkit-transition: opacity 0.1s ease-in-out, -webkit-transform 0.1s ease-in-out;
            transition: opacity 0.1s ease-in-out, -webkit-transform 0.1s ease-in-out;
            transition: opacity 0.1s ease-in-out, transform 0.1s ease-in-out;
            transition: opacity 0.1s ease-in-out, transform 0.1s ease-in-out, -webkit-transform 0.1s ease-in-out;
        }

        @media (prefers-reduced-motion: reduce) {
            .form-floating>label {
                -webkit-transition: none;
                transition: none;
            }
        }

        .form-floating>.form-control::-webkit-input-placeholder {
            color: transparent;
        }

        .form-floating>.form-control::-moz-placeholder {
            color: transparent;
        }

        .form-floating>.form-control:-ms-input-placeholder {
            color: transparent;
        }

        .form-floating>.form-control::-ms-input-placeholder {
            color: transparent;
        }

        .form-floating>.form-control::placeholder {
            color: transparent;
        }

        .form-floating>.form-control:not(:-moz-placeholder-shown) {
            padding-top: 1.625rem;
            padding-bottom: 0.625rem;
        }

        .form-floating>.form-control:not(:-ms-input-placeholder) {
            padding-top: 1.625rem;
            padding-bottom: 0.625rem;
        }

        .form-floating>.form-control:focus,
        .form-floating>.form-control:not(:placeholder-shown) {
            padding-top: 1.625rem;
            padding-bottom: 0.625rem;
        }

        .form-floating>.form-control:-webkit-autofill {
            padding-top: 1.625rem;
            padding-bottom: 0.625rem;
        }

        .form-floating>.form-select {
            padding-top: 1.625rem;
            padding-bottom: 0.625rem;
        }

        .form-floating>.form-control:not(:-moz-placeholder-shown)~label {
            opacity: 0.65;
            transform: scale(0.85) translateY(-0.5rem) translateX(-0.15rem);
        }

        .form-floating>.form-control:not(:-ms-input-placeholder)~label {
            opacity: 0.65;
            transform: scale(0.85) translateY(-0.5rem) translateX(-0.15rem);
        }

        .form-floating>.form-control:focus~label,
        .form-floating>.form-control:not(:placeholder-shown)~label,
        .form-floating>.form-select~label {
            opacity: 0.65;
            -webkit-transform: scale(0.85) translateY(-0.5rem) translateX(-0.15rem);
            transform: scale(0.85) translateY(-0.5rem) translateX(-0.15rem);
        }

        .form-floating>.form-control:-webkit-autofill~label {
            opacity: 0.65;
            -webkit-transform: scale(0.85) translateY(-0.5rem) translateX(-0.15rem);
            transform: scale(0.85) translateY(-0.5rem) translateX(-0.15rem);
        }

        .input-group {
            position: relative;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            -webkit-box-align: stretch;
            -ms-flex-align: stretch;
            align-items: stretch;
            width: 100%;
        }

        .input-group>.form-control,
        .input-group>.form-select {
            position: relative;
            -webkit-box-flex: 1;
            -ms-flex: 1 1 auto;
            flex: 1 1 auto;
            width: 1%;
            min-width: 0;
        }

        .input-group>.form-control:focus,
        .input-group>.form-select:focus {
            z-index: 3;
        }

        .input-group .btn {
            position: relative;
            z-index: 2;
        }

        .input-group .btn:focus {
            z-index: 3;
        }

        .input-group-text {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            padding: 0.47rem 0.75rem;
            font-size: 0.8125rem;
            font-weight: 400;
            line-height: 1.5;
            color: #495057;
            text-align: center;
            white-space: nowrap;
            background-color: #eff2f7;
            border: 1px solid #ced4da;
            border-radius: 0.25rem;
        }

        .input-group-lg>.form-control,
        .input-group-lg>.form-select,
        .input-group-lg>.input-group-text,
        .input-group-lg>.btn {
            padding: 0.5rem 1rem;
            font-size: 1.01562rem;
            border-radius: 0.4rem;
        }

        .input-group-sm>.form-control,
        .input-group-sm>.form-select,
        .input-group-sm>.input-group-text,
        .input-group-sm>.btn {
            padding: 0.25rem 0.5rem;
            font-size: 0.71094rem;
            border-radius: 0.2rem;
        }

        .input-group-lg>.form-select,
        .input-group-sm>.form-select {
            padding-left: 1.75rem;
        }

        .input-group:not(.has-validation)> :not(:last-child):not(.dropdown-toggle):not(.dropdown-menu),
        .input-group:not(.has-validation)>.dropdown-toggle:nth-last-child(n + 3) {
            border-top-left-radius: 0;
            border-bottom-left-radius: 0;
        }

        .input-group.has-validation> :nth-last-child(n + 3):not(.dropdown-toggle):not(.dropdown-menu),
        .input-group.has-validation>.dropdown-toggle:nth-last-child(n + 4) {
            border-top-left-radius: 0;
            border-bottom-left-radius: 0;
        }

        .input-group> :not(:first-child):not(.dropdown-menu):not(.valid-tooltip):not(.valid-feedback):not(.invalid-tooltip):not(.invalid-feedback) {
            margin-right: -1px;
            border-top-right-radius: 0;
            border-bottom-right-radius: 0;
        }

        .valid-feedback {
            display: none;
            width: 100%;
            margin-top: 0.25rem;
            font-size: 80%;
            color: #34c38f;
        }

        .valid-tooltip {
            position: absolute;
            top: 100%;
            z-index: 5;
            display: none;
            max-width: 100%;
            padding: 0.4rem 0.7rem;
            margin-top: .1rem;
            font-size: 0.71094rem;
            line-height: 1.5;
            color: #fff;
            background-color: rgba(52, 195, 143, 0.9);
            border-radius: 0.25rem;
        }

        .was-validated :valid~.valid-feedback,
        .was-validated :valid~.valid-tooltip,
        .is-valid~.valid-feedback,
        .is-valid~.valid-tooltip {
            display: block;
        }

        .was-validated .form-control:valid,
        .form-control.is-valid {
            border-color: #34c38f;
            padding-left: calc(1.5em + 0.94rem);
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3e%3cpath fill='%2334c38f' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e");
            background-repeat: no-repeat;
            background-position: left calc(0.375em + 0.235rem) center;
            background-size: calc(0.75em + 0.47rem) calc(0.75em + 0.47rem);
        }

        .was-validated .form-control:valid:focus,
        .form-control.is-valid:focus {
            border-color: #34c38f;
            -webkit-box-shadow: 0 0 0 0.15rem rgba(52, 195, 143, 0.25);
            box-shadow: 0 0 0 0.15rem rgba(52, 195, 143, 0.25);
        }

        .was-validated textarea.form-control:valid,
        textarea.form-control.is-valid {
            padding-left: calc(1.5em + 0.94rem);
            background-position: top calc(0.375em + 0.235rem) left calc(0.375em + 0.235rem);
        }

        .was-validated .form-select:valid,
        .form-select.is-valid {
            border-color: #34c38f;
            padding-left: calc(0.75em + 2.455rem);
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23343a40' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M2 5l6 6 6-6'/%3e%3c/svg%3e"), url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3e%3cpath fill='%2334c38f' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e");
            background-position: left 0.75rem center, center left 1.75rem;
            background-size: 16px 12px, calc(0.75em + 0.47rem) calc(0.75em + 0.47rem);
        }

        .was-validated .form-select:valid:focus,
        .form-select.is-valid:focus {
            border-color: #34c38f;
            -webkit-box-shadow: 0 0 0 0.15rem rgba(52, 195, 143, 0.25);
            box-shadow: 0 0 0 0.15rem rgba(52, 195, 143, 0.25);
        }

        .was-validated .form-check-input:valid,
        .form-check-input.is-valid {
            border-color: #34c38f;
        }

        .was-validated .form-check-input:valid:checked,
        .form-check-input.is-valid:checked {
            background-color: #34c38f;
        }

        .was-validated .form-check-input:valid:focus,
        .form-check-input.is-valid:focus {
            -webkit-box-shadow: 0 0 0 0.15rem rgba(52, 195, 143, 0.25);
            box-shadow: 0 0 0 0.15rem rgba(52, 195, 143, 0.25);
        }

        .was-validated .form-check-input:valid~.form-check-label,
        .form-check-input.is-valid~.form-check-label {
            color: #34c38f;
        }

        .form-check-inline .form-check-input~.valid-feedback {
            margin-right: .5em;
        }

        .invalid-feedback {
            display: none;
            width: 100%;
            margin-top: 0.25rem;
            font-size: 80%;
            color: #f46a6a;
        }

        .invalid-tooltip {
            position: absolute;
            top: 100%;
            z-index: 5;
            display: none;
            max-width: 100%;
            padding: 0.4rem 0.7rem;
            margin-top: .1rem;
            font-size: 0.71094rem;
            line-height: 1.5;
            color: #fff;
            background-color: rgba(244, 106, 106, 0.9);
            border-radius: 0.25rem;
        }

        .was-validated :invalid~.invalid-feedback,
        .was-validated :invalid~.invalid-tooltip,
        .is-invalid~.invalid-feedback,
        .is-invalid~.invalid-tooltip {
            display: block;
        }

        .was-validated .form-control:invalid,
        .form-control.is-invalid {
            border-color: #f46a6a;
            padding-left: calc(1.5em + 0.94rem);
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 12 12' width='12' height='12' fill='none' stroke='%23f46a6a'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3e%3ccircle cx='6' cy='8.2' r='.6' fill='%23f46a6a' stroke='none'/%3e%3c/svg%3e");
            background-repeat: no-repeat;
            background-position: left calc(0.375em + 0.235rem) center;
            background-size: calc(0.75em + 0.47rem) calc(0.75em + 0.47rem);
        }

        .was-validated .form-control:invalid:focus,
        .form-control.is-invalid:focus {
            border-color: #f46a6a;
            -webkit-box-shadow: 0 0 0 0.15rem rgba(244, 106, 106, 0.25);
            box-shadow: 0 0 0 0.15rem rgba(244, 106, 106, 0.25);
        }

        .was-validated textarea.form-control:invalid,
        textarea.form-control.is-invalid {
            padding-left: calc(1.5em + 0.94rem);
            background-position: top calc(0.375em + 0.235rem) left calc(0.375em + 0.235rem);
        }

        .was-validated .form-select:invalid,
        .form-select.is-invalid {
            border-color: #f46a6a;
            padding-left: calc(0.75em + 2.455rem);
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23343a40' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M2 5l6 6 6-6'/%3e%3c/svg%3e"), url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 12 12' width='12' height='12' fill='none' stroke='%23f46a6a'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3e%3ccircle cx='6' cy='8.2' r='.6' fill='%23f46a6a' stroke='none'/%3e%3c/svg%3e");
            background-position: left 0.75rem center, center left 1.75rem;
            background-size: 16px 12px, calc(0.75em + 0.47rem) calc(0.75em + 0.47rem);
        }

        .was-validated .form-select:invalid:focus,
        .form-select.is-invalid:focus {
            border-color: #f46a6a;
            -webkit-box-shadow: 0 0 0 0.15rem rgba(244, 106, 106, 0.25);
            box-shadow: 0 0 0 0.15rem rgba(244, 106, 106, 0.25);
        }

        .was-validated .form-check-input:invalid,
        .form-check-input.is-invalid {
            border-color: #f46a6a;
        }

        .was-validated .form-check-input:invalid:checked,
        .form-check-input.is-invalid:checked {
            background-color: #f46a6a;
        }

        .was-validated .form-check-input:invalid:focus,
        .form-check-input.is-invalid:focus {
            -webkit-box-shadow: 0 0 0 0.15rem rgba(244, 106, 106, 0.25);
            box-shadow: 0 0 0 0.15rem rgba(244, 106, 106, 0.25);
        }

        .was-validated .form-check-input:invalid~.form-check-label,
        .form-check-input.is-invalid~.form-check-label {
            color: #f46a6a;
        }

        .form-check-inline .form-check-input~.invalid-feedback {
            margin-right: .5em;
        }

        .btn {
            display: inline-block;
            font-weight: 400;
            line-height: 1.5;
            color: #495057;
            text-align: center;
            vertical-align: middle;
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            background-color: transparent;
            border: 1px solid transparent;
            padding: 0.47rem 0.75rem;
            font-size: 0.8125rem;
            border-radius: 0.25rem;
            -webkit-transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
            transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
            transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
            transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
        }

        @media (prefers-reduced-motion: reduce) {
            .btn {
                -webkit-transition: none;
                transition: none;
            }
        }

        .btn:hover {
            color: #495057;
            text-decoration: none;
        }

        .btn-check:focus+.btn,
        .btn:focus {
            outline: 0;
            -webkit-box-shadow: 0 0 0 0.15rem rgba(85, 110, 230, 0.25);
            box-shadow: 0 0 0 0.15rem rgba(85, 110, 230, 0.25);
        }

        .btn:disabled,
        .btn.disabled,
        fieldset:disabled .btn {
            pointer-events: none;
            opacity: 0.65;
        }

        .btn-primary {
            color: #fff;
            background-color: #556ee6;
            border-color: #556ee6;
        }

        .btn-primary:hover {
            color: #fff;
            background-color: #485ec4;
            border-color: #4458b8;
        }

        .btn-check:focus+.btn-primary,
        .btn-primary:focus {
            color: #fff;
            background-color: #485ec4;
            border-color: #4458b8;
            -webkit-box-shadow: 0 0 0 0.15rem rgba(111, 132, 234, 0.5);
            box-shadow: 0 0 0 0.15rem rgba(111, 132, 234, 0.5);
        }

        .btn-check:checked+.btn-primary,
        .btn-check:active+.btn-primary,
        .btn-primary:active,
        .btn-primary.active,
        .show>.btn-primary.dropdown-toggle {
            color: #fff;
            background-color: #4458b8;
            border-color: #4053ad;
        }

        .btn-check:checked+.btn-primary:focus,
        .btn-check:active+.btn-primary:focus,
        .btn-primary:active:focus,
        .btn-primary.active:focus,
        .show>.btn-primary.dropdown-toggle:focus {
            -webkit-box-shadow: 0 0 0 0.15rem rgba(111, 132, 234, 0.5);
            box-shadow: 0 0 0 0.15rem rgba(111, 132, 234, 0.5);
        }

        .btn-primary:disabled,
        .btn-primary.disabled {
            color: #fff;
            background-color: #556ee6;
            border-color: #556ee6;
        }

        .btn-secondary {
            color: #fff;
            background-color: #74788d;
            border-color: #74788d;
        }

        .btn-secondary:hover {
            color: #fff;
            background-color: #636678;
            border-color: #5d6071;
        }

        .btn-check:focus+.btn-secondary,
        .btn-secondary:focus {
            color: #fff;
            background-color: #636678;
            border-color: #5d6071;
            -webkit-box-shadow: 0 0 0 0.15rem rgba(137, 140, 158, 0.5);
            box-shadow: 0 0 0 0.15rem rgba(137, 140, 158, 0.5);
        }

        .btn-check:checked+.btn-secondary,
        .btn-check:active+.btn-secondary,
        .btn-secondary:active,
        .btn-secondary.active,
        .show>.btn-secondary.dropdown-toggle {
            color: #fff;
            background-color: #5d6071;
            border-color: #575a6a;
        }

        .btn-check:checked+.btn-secondary:focus,
        .btn-check:active+.btn-secondary:focus,
        .btn-secondary:active:focus,
        .btn-secondary.active:focus,
        .show>.btn-secondary.dropdown-toggle:focus {
            -webkit-box-shadow: 0 0 0 0.15rem rgba(137, 140, 158, 0.5);
            box-shadow: 0 0 0 0.15rem rgba(137, 140, 158, 0.5);
        }

        .btn-secondary:disabled,
        .btn-secondary.disabled {
            color: #fff;
            background-color: #74788d;
            border-color: #74788d;
        }

        .btn-success {
            color: #fff;
            background-color: #34c38f;
            border-color: #34c38f;
        }

        .btn-success:hover {
            color: #fff;
            background-color: #2ca67a;
            border-color: #2a9c72;
        }

        .btn-check:focus+.btn-success,
        .btn-success:focus {
            color: #fff;
            background-color: #2ca67a;
            border-color: #2a9c72;
            -webkit-box-shadow: 0 0 0 0.15rem rgba(82, 204, 160, 0.5);
            box-shadow: 0 0 0 0.15rem rgba(82, 204, 160, 0.5);
        }

        .btn-check:checked+.btn-success,
        .btn-check:active+.btn-success,
        .btn-success:active,
        .btn-success.active,
        .show>.btn-success.dropdown-toggle {
            color: #fff;
            background-color: #2a9c72;
            border-color: #27926b;
        }

        .btn-check:checked+.btn-success:focus,
        .btn-check:active+.btn-success:focus,
        .btn-success:active:focus,
        .btn-success.active:focus,
        .show>.btn-success.dropdown-toggle:focus {
            -webkit-box-shadow: 0 0 0 0.15rem rgba(82, 204, 160, 0.5);
            box-shadow: 0 0 0 0.15rem rgba(82, 204, 160, 0.5);
        }

        .btn-success:disabled,
        .btn-success.disabled {
            color: #fff;
            background-color: #34c38f;
            border-color: #34c38f;
        }

        .btn-info {
            color: #fff;
            background-color: #50a5f1;
            border-color: #50a5f1;
        }

        .btn-info:hover {
            color: #fff;
            background-color: #448ccd;
            border-color: #4084c1;
        }

        .btn-check:focus+.btn-info,
        .btn-info:focus {
            color: #fff;
            background-color: #448ccd;
            border-color: #4084c1;
            -webkit-box-shadow: 0 0 0 0.15rem rgba(106, 179, 243, 0.5);
            box-shadow: 0 0 0 0.15rem rgba(106, 179, 243, 0.5);
        }

        .btn-check:checked+.btn-info,
        .btn-check:active+.btn-info,
        .btn-info:active,
        .btn-info.active,
        .show>.btn-info.dropdown-toggle {
            color: #fff;
            background-color: #4084c1;
            border-color: #3c7cb5;
        }

        .btn-check:checked+.btn-info:focus,
        .btn-check:active+.btn-info:focus,
        .btn-info:active:focus,
        .btn-info.active:focus,
        .show>.btn-info.dropdown-toggle:focus {
            -webkit-box-shadow: 0 0 0 0.15rem rgba(106, 179, 243, 0.5);
            box-shadow: 0 0 0 0.15rem rgba(106, 179, 243, 0.5);
        }

        .btn-info:disabled,
        .btn-info.disabled {
            color: #fff;
            background-color: #50a5f1;
            border-color: #50a5f1;
        }

        .btn-warning {
            color: #fff;
            background-color: #f1b44c;
            border-color: #f1b44c;
        }

        .btn-warning:hover {
            color: #fff;
            background-color: #cd9941;
            border-color: #c1903d;
        }

        .btn-check:focus+.btn-warning,
        .btn-warning:focus {
            color: #fff;
            background-color: #cd9941;
            border-color: #c1903d;
            -webkit-box-shadow: 0 0 0 0.15rem rgba(243, 191, 103, 0.5);
            box-shadow: 0 0 0 0.15rem rgba(243, 191, 103, 0.5);
        }

        .btn-check:checked+.btn-warning,
        .btn-check:active+.btn-warning,
        .btn-warning:active,
        .btn-warning.active,
        .show>.btn-warning.dropdown-toggle {
            color: #fff;
            background-color: #c1903d;
            border-color: #b58739;
        }

        .btn-check:checked+.btn-warning:focus,
        .btn-check:active+.btn-warning:focus,
        .btn-warning:active:focus,
        .btn-warning.active:focus,
        .show>.btn-warning.dropdown-toggle:focus {
            -webkit-box-shadow: 0 0 0 0.15rem rgba(243, 191, 103, 0.5);
            box-shadow: 0 0 0 0.15rem rgba(243, 191, 103, 0.5);
        }

        .btn-warning:disabled,
        .btn-warning.disabled {
            color: #fff;
            background-color: #f1b44c;
            border-color: #f1b44c;
        }

        .btn-danger {
            color: #fff;
            background-color: #f46a6a;
            border-color: #f46a6a;
        }

        .btn-danger:hover {
            color: #fff;
            background-color: #cf5a5a;
            border-color: #c35555;
        }

        .btn-check:focus+.btn-danger,
        .btn-danger:focus {
            color: #fff;
            background-color: #cf5a5a;
            border-color: #c35555;
            -webkit-box-shadow: 0 0 0 0.15rem rgba(246, 128, 128, 0.5);
            box-shadow: 0 0 0 0.15rem rgba(246, 128, 128, 0.5);
        }

        .btn-check:checked+.btn-danger,
        .btn-check:active+.btn-danger,
        .btn-danger:active,
        .btn-danger.active,
        .show>.btn-danger.dropdown-toggle {
            color: #fff;
            background-color: #c35555;
            border-color: #b75050;
        }

        .btn-check:checked+.btn-danger:focus,
        .btn-check:active+.btn-danger:focus,
        .btn-danger:active:focus,
        .btn-danger.active:focus,
        .show>.btn-danger.dropdown-toggle:focus {
            -webkit-box-shadow: 0 0 0 0.15rem rgba(246, 128, 128, 0.5);
            box-shadow: 0 0 0 0.15rem rgba(246, 128, 128, 0.5);
        }

        .btn-danger:disabled,
        .btn-danger.disabled {
            color: #fff;
            background-color: #f46a6a;
            border-color: #f46a6a;
        }

        .btn-pink {
            color: #fff;
            background-color: #e83e8c;
            border-color: #e83e8c;
        }

        .btn-pink:hover {
            color: #fff;
            background-color: #c53577;
            border-color: #ba3270;
        }

        .btn-check:focus+.btn-pink,
        .btn-pink:focus {
            color: #fff;
            background-color: #c53577;
            border-color: #ba3270;
            -webkit-box-shadow: 0 0 0 0.15rem rgba(235, 91, 157, 0.5);
            box-shadow: 0 0 0 0.15rem rgba(235, 91, 157, 0.5);
        }

        .btn-check:checked+.btn-pink,
        .btn-check:active+.btn-pink,
        .btn-pink:active,
        .btn-pink.active,
        .show>.btn-pink.dropdown-toggle {
            color: #fff;
            background-color: #ba3270;
            border-color: #ae2f69;
        }

        .btn-check:checked+.btn-pink:focus,
        .btn-check:active+.btn-pink:focus,
        .btn-pink:active:focus,
        .btn-pink.active:focus,
        .show>.btn-pink.dropdown-toggle:focus {
            -webkit-box-shadow: 0 0 0 0.15rem rgba(235, 91, 157, 0.5);
            box-shadow: 0 0 0 0.15rem rgba(235, 91, 157, 0.5);
        }

        .btn-pink:disabled,
        .btn-pink.disabled {
            color: #fff;
            background-color: #e83e8c;
            border-color: #e83e8c;
        }

        .btn-light {
            color: #000;
            background-color: #eff2f7;
            border-color: #eff2f7;
        }

        .btn-light:hover {
            color: #000;
            background-color: #f1f4f8;
            border-color: #f1f3f8;
        }

        .btn-check:focus+.btn-light,
        .btn-light:focus {
            color: #000;
            background-color: #f1f4f8;
            border-color: #f1f3f8;
            -webkit-box-shadow: 0 0 0 0.15rem rgba(203, 206, 210, 0.5);
            box-shadow: 0 0 0 0.15rem rgba(203, 206, 210, 0.5);
        }

        .btn-check:checked+.btn-light,
        .btn-check:active+.btn-light,
        .btn-light:active,
        .btn-light.active,
        .show>.btn-light.dropdown-toggle {
            color: #000;
            background-color: #f2f5f9;
            border-color: #f1f3f8;
        }

        .btn-check:checked+.btn-light:focus,
        .btn-check:active+.btn-light:focus,
        .btn-light:active:focus,
        .btn-light.active:focus,
        .show>.btn-light.dropdown-toggle:focus {
            -webkit-box-shadow: 0 0 0 0.15rem rgba(203, 206, 210, 0.5);
            box-shadow: 0 0 0 0.15rem rgba(203, 206, 210, 0.5);
        }

        .btn-light:disabled,
        .btn-light.disabled {
            color: #000;
            background-color: #eff2f7;
            border-color: #eff2f7;
        }

        .btn-dark {
            color: #fff;
            background-color: #343a40;
            border-color: #343a40;
        }

        .btn-dark:hover {
            color: #fff;
            background-color: #2c3136;
            border-color: #2a2e33;
        }

        .btn-check:focus+.btn-dark,
        .btn-dark:focus {
            color: #fff;
            background-color: #2c3136;
            border-color: #2a2e33;
            -webkit-box-shadow: 0 0 0 0.15rem rgba(82, 88, 93, 0.5);
            box-shadow: 0 0 0 0.15rem rgba(82, 88, 93, 0.5);
        }

        .btn-check:checked+.btn-dark,
        .btn-check:active+.btn-dark,
        .btn-dark:active,
        .btn-dark.active,
        .show>.btn-dark.dropdown-toggle {
            color: #fff;
            background-color: #2a2e33;
            border-color: #272c30;
        }

        .btn-check:checked+.btn-dark:focus,
        .btn-check:active+.btn-dark:focus,
        .btn-dark:active:focus,
        .btn-dark.active:focus,
        .show>.btn-dark.dropdown-toggle:focus {
            -webkit-box-shadow: 0 0 0 0.15rem rgba(82, 88, 93, 0.5);
            box-shadow: 0 0 0 0.15rem rgba(82, 88, 93, 0.5);
        }

        .btn-dark:disabled,
        .btn-dark.disabled {
            color: #fff;
            background-color: #343a40;
            border-color: #343a40;
        }

        .btn-outline-primary {
            color: #556ee6;
            border-color: #556ee6;
        }

        .btn-outline-primary:hover {
            color: #fff;
            background-color: #556ee6;
            border-color: #556ee6;
        }

        .btn-check:focus+.btn-outline-primary,
        .btn-outline-primary:focus {
            -webkit-box-shadow: 0 0 0 0.15rem rgba(85, 110, 230, 0.5);
            box-shadow: 0 0 0 0.15rem rgba(85, 110, 230, 0.5);
        }

        .btn-check:checked+.btn-outline-primary,
        .btn-check:active+.btn-outline-primary,
        .btn-outline-primary:active,
        .btn-outline-primary.active,
        .btn-outline-primary.dropdown-toggle.show {
            color: #fff;
            background-color: #556ee6;
            border-color: #556ee6;
        }

        .btn-check:checked+.btn-outline-primary:focus,
        .btn-check:active+.btn-outline-primary:focus,
        .btn-outline-primary:active:focus,
        .btn-outline-primary.active:focus,
        .btn-outline-primary.dropdown-toggle.show:focus {
            -webkit-box-shadow: 0 0 0 0.15rem rgba(85, 110, 230, 0.5);
            box-shadow: 0 0 0 0.15rem rgba(85, 110, 230, 0.5);
        }

        .btn-outline-primary:disabled,
        .btn-outline-primary.disabled {
            color: #556ee6;
            background-color: transparent;
        }

        .btn-outline-secondary {
            color: #74788d;
            border-color: #74788d;
        }

        .btn-outline-secondary:hover {
            color: #fff;
            background-color: #74788d;
            border-color: #74788d;
        }

        .btn-check:focus+.btn-outline-secondary,
        .btn-outline-secondary:focus {
            -webkit-box-shadow: 0 0 0 0.15rem rgba(116, 120, 141, 0.5);
            box-shadow: 0 0 0 0.15rem rgba(116, 120, 141, 0.5);
        }

        .btn-check:checked+.btn-outline-secondary,
        .btn-check:active+.btn-outline-secondary,
        .btn-outline-secondary:active,
        .btn-outline-secondary.active,
        .btn-outline-secondary.dropdown-toggle.show {
            color: #fff;
            background-color: #74788d;
            border-color: #74788d;
        }

        .btn-check:checked+.btn-outline-secondary:focus,
        .btn-check:active+.btn-outline-secondary:focus,
        .btn-outline-secondary:active:focus,
        .btn-outline-secondary.active:focus,
        .btn-outline-secondary.dropdown-toggle.show:focus {
            -webkit-box-shadow: 0 0 0 0.15rem rgba(116, 120, 141, 0.5);
            box-shadow: 0 0 0 0.15rem rgba(116, 120, 141, 0.5);
        }

        .btn-outline-secondary:disabled,
        .btn-outline-secondary.disabled {
            color: #74788d;
            background-color: transparent;
        }

        .btn-outline-success {
            color: #34c38f;
            border-color: #34c38f;
        }

        .btn-outline-success:hover {
            color: #fff;
            background-color: #34c38f;
            border-color: #34c38f;
        }

        .btn-check:focus+.btn-outline-success,
        .btn-outline-success:focus {
            -webkit-box-shadow: 0 0 0 0.15rem rgba(52, 195, 143, 0.5);
            box-shadow: 0 0 0 0.15rem rgba(52, 195, 143, 0.5);
        }

        .btn-check:checked+.btn-outline-success,
        .btn-check:active+.btn-outline-success,
        .btn-outline-success:active,
        .btn-outline-success.active,
        .btn-outline-success.dropdown-toggle.show {
            color: #fff;
            background-color: #34c38f;
            border-color: #34c38f;
        }

        .btn-check:checked+.btn-outline-success:focus,
        .btn-check:active+.btn-outline-success:focus,
        .btn-outline-success:active:focus,
        .btn-outline-success.active:focus,
        .btn-outline-success.dropdown-toggle.show:focus {
            -webkit-box-shadow: 0 0 0 0.15rem rgba(52, 195, 143, 0.5);
            box-shadow: 0 0 0 0.15rem rgba(52, 195, 143, 0.5);
        }

        .btn-outline-success:disabled,
        .btn-outline-success.disabled {
            color: #34c38f;
            background-color: transparent;
        }

        .btn-outline-info {
            color: #50a5f1;
            border-color: #50a5f1;
        }

        .btn-outline-info:hover {
            color: #fff;
            background-color: #50a5f1;
            border-color: #50a5f1;
        }

        .btn-check:focus+.btn-outline-info,
        .btn-outline-info:focus {
            -webkit-box-shadow: 0 0 0 0.15rem rgba(80, 165, 241, 0.5);
            box-shadow: 0 0 0 0.15rem rgba(80, 165, 241, 0.5);
        }

        .btn-check:checked+.btn-outline-info,
        .btn-check:active+.btn-outline-info,
        .btn-outline-info:active,
        .btn-outline-info.active,
        .btn-outline-info.dropdown-toggle.show {
            color: #fff;
            background-color: #50a5f1;
            border-color: #50a5f1;
        }

        .btn-check:checked+.btn-outline-info:focus,
        .btn-check:active+.btn-outline-info:focus,
        .btn-outline-info:active:focus,
        .btn-outline-info.active:focus,
        .btn-outline-info.dropdown-toggle.show:focus {
            -webkit-box-shadow: 0 0 0 0.15rem rgba(80, 165, 241, 0.5);
            box-shadow: 0 0 0 0.15rem rgba(80, 165, 241, 0.5);
        }

        .btn-outline-info:disabled,
        .btn-outline-info.disabled {
            color: #50a5f1;
            background-color: transparent;
        }

        .btn-outline-warning {
            color: #f1b44c;
            border-color: #f1b44c;
        }

        .btn-outline-warning:hover {
            color: #fff;
            background-color: #f1b44c;
            border-color: #f1b44c;
        }

        .btn-check:focus+.btn-outline-warning,
        .btn-outline-warning:focus {
            -webkit-box-shadow: 0 0 0 0.15rem rgba(241, 180, 76, 0.5);
            box-shadow: 0 0 0 0.15rem rgba(241, 180, 76, 0.5);
        }

        .btn-check:checked+.btn-outline-warning,
        .btn-check:active+.btn-outline-warning,
        .btn-outline-warning:active,
        .btn-outline-warning.active,
        .btn-outline-warning.dropdown-toggle.show {
            color: #fff;
            background-color: #f1b44c;
            border-color: #f1b44c;
        }

        .btn-check:checked+.btn-outline-warning:focus,
        .btn-check:active+.btn-outline-warning:focus,
        .btn-outline-warning:active:focus,
        .btn-outline-warning.active:focus,
        .btn-outline-warning.dropdown-toggle.show:focus {
            -webkit-box-shadow: 0 0 0 0.15rem rgba(241, 180, 76, 0.5);
            box-shadow: 0 0 0 0.15rem rgba(241, 180, 76, 0.5);
        }

        .btn-outline-warning:disabled,
        .btn-outline-warning.disabled {
            color: #f1b44c;
            background-color: transparent;
        }

        .btn-outline-danger {
            color: #f46a6a;
            border-color: #f46a6a;
        }

        .btn-outline-danger:hover {
            color: #fff;
            background-color: #f46a6a;
            border-color: #f46a6a;
        }

        .btn-check:focus+.btn-outline-danger,
        .btn-outline-danger:focus {
            -webkit-box-shadow: 0 0 0 0.15rem rgba(244, 106, 106, 0.5);
            box-shadow: 0 0 0 0.15rem rgba(244, 106, 106, 0.5);
        }

        .btn-check:checked+.btn-outline-danger,
        .btn-check:active+.btn-outline-danger,
        .btn-outline-danger:active,
        .btn-outline-danger.active,
        .btn-outline-danger.dropdown-toggle.show {
            color: #fff;
            background-color: #f46a6a;
            border-color: #f46a6a;
        }

        .btn-check:checked+.btn-outline-danger:focus,
        .btn-check:active+.btn-outline-danger:focus,
        .btn-outline-danger:active:focus,
        .btn-outline-danger.active:focus,
        .btn-outline-danger.dropdown-toggle.show:focus {
            -webkit-box-shadow: 0 0 0 0.15rem rgba(244, 106, 106, 0.5);
            box-shadow: 0 0 0 0.15rem rgba(244, 106, 106, 0.5);
        }

        .btn-outline-danger:disabled,
        .btn-outline-danger.disabled {
            color: #f46a6a;
            background-color: transparent;
        }

        .btn-outline-pink {
            color: #e83e8c;
            border-color: #e83e8c;
        }

        .btn-outline-pink:hover {
            color: #fff;
            background-color: #e83e8c;
            border-color: #e83e8c;
        }

        .btn-check:focus+.btn-outline-pink,
        .btn-outline-pink:focus {
            -webkit-box-shadow: 0 0 0 0.15rem rgba(232, 62, 140, 0.5);
            box-shadow: 0 0 0 0.15rem rgba(232, 62, 140, 0.5);
        }

        .btn-check:checked+.btn-outline-pink,
        .btn-check:active+.btn-outline-pink,
        .btn-outline-pink:active,
        .btn-outline-pink.active,
        .btn-outline-pink.dropdown-toggle.show {
            color: #fff;
            background-color: #e83e8c;
            border-color: #e83e8c;
        }

        .btn-check:checked+.btn-outline-pink:focus,
        .btn-check:active+.btn-outline-pink:focus,
        .btn-outline-pink:active:focus,
        .btn-outline-pink.active:focus,
        .btn-outline-pink.dropdown-toggle.show:focus {
            -webkit-box-shadow: 0 0 0 0.15rem rgba(232, 62, 140, 0.5);
            box-shadow: 0 0 0 0.15rem rgba(232, 62, 140, 0.5);
        }

        .btn-outline-pink:disabled,
        .btn-outline-pink.disabled {
            color: #e83e8c;
            background-color: transparent;
        }

        .btn-outline-light {
            color: #eff2f7;
            border-color: #eff2f7;
        }

        .btn-outline-light:hover {
            color: #000;
            background-color: #eff2f7;
            border-color: #eff2f7;
        }

        .btn-check:focus+.btn-outline-light,
        .btn-outline-light:focus {
            -webkit-box-shadow: 0 0 0 0.15rem rgba(239, 242, 247, 0.5);
            box-shadow: 0 0 0 0.15rem rgba(239, 242, 247, 0.5);
        }

        .btn-check:checked+.btn-outline-light,
        .btn-check:active+.btn-outline-light,
        .btn-outline-light:active,
        .btn-outline-light.active,
        .btn-outline-light.dropdown-toggle.show {
            color: #000;
            background-color: #eff2f7;
            border-color: #eff2f7;
        }

        .btn-check:checked+.btn-outline-light:focus,
        .btn-check:active+.btn-outline-light:focus,
        .btn-outline-light:active:focus,
        .btn-outline-light.active:focus,
        .btn-outline-light.dropdown-toggle.show:focus {
            -webkit-box-shadow: 0 0 0 0.15rem rgba(239, 242, 247, 0.5);
            box-shadow: 0 0 0 0.15rem rgba(239, 242, 247, 0.5);
        }

        .btn-outline-light:disabled,
        .btn-outline-light.disabled {
            color: #eff2f7;
            background-color: transparent;
        }

        .btn-outline-dark {
            color: #343a40;
            border-color: #343a40;
        }

        .btn-outline-dark:hover {
            color: #fff;
            background-color: #343a40;
            border-color: #343a40;
        }

        .btn-check:focus+.btn-outline-dark,
        .btn-outline-dark:focus {
            -webkit-box-shadow: 0 0 0 0.15rem rgba(52, 58, 64, 0.5);
            box-shadow: 0 0 0 0.15rem rgba(52, 58, 64, 0.5);
        }

        .btn-check:checked+.btn-outline-dark,
        .btn-check:active+.btn-outline-dark,
        .btn-outline-dark:active,
        .btn-outline-dark.active,
        .btn-outline-dark.dropdown-toggle.show {
            color: #fff;
            background-color: #343a40;
            border-color: #343a40;
        }

        .btn-check:checked+.btn-outline-dark:focus,
        .btn-check:active+.btn-outline-dark:focus,
        .btn-outline-dark:active:focus,
        .btn-outline-dark.active:focus,
        .btn-outline-dark.dropdown-toggle.show:focus {
            -webkit-box-shadow: 0 0 0 0.15rem rgba(52, 58, 64, 0.5);
            box-shadow: 0 0 0 0.15rem rgba(52, 58, 64, 0.5);
        }

        .btn-outline-dark:disabled,
        .btn-outline-dark.disabled {
            color: #343a40;
            background-color: transparent;
        }

        .btn-link {
            font-weight: 400;
            color: #556ee6;
            text-decoration: none;
        }

        .btn-link:hover {
            color: #4458b8;
            text-decoration: underline;
        }

        .btn-link:focus {
            text-decoration: underline;
        }

        .btn-link:disabled,
        .btn-link.disabled {
            color: #74788d;
        }

        .btn-lg,
        .btn-group-lg>.btn {
            padding: 0.5rem 1rem;
            font-size: 1.01562rem;
            border-radius: 0.4rem;
        }

        .btn-sm,
        .btn-group-sm>.btn {
            padding: 0.25rem 0.5rem;
            font-size: 0.71094rem;
            border-radius: 0.2rem;
        }

        .fade {
            -webkit-transition: opacity 0.15s linear;
            transition: opacity 0.15s linear;
        }

        @media (prefers-reduced-motion: reduce) {
            .fade {
                -webkit-transition: none;
                transition: none;
            }
        }

        .fade:not(.show) {
            opacity: 0;
        }

        .collapse:not(.show) {
            display: none;
        }

        .collapsing {
            height: 0;
            overflow: hidden;
            -webkit-transition: height 0.35s ease;
            transition: height 0.35s ease;
        }

        @media (prefers-reduced-motion: reduce) {
            .collapsing {
                -webkit-transition: none;
                transition: none;
            }
        }

        .dropup,
        .dropend,
        .dropdown,
        .dropstart {
            position: relative;
        }

        .dropdown-toggle {
            white-space: nowrap;
        }

        .dropdown-menu {
            position: absolute;
            top: 100%;
            right: 0;
            z-index: 1000;
            display: none;
            min-width: 10rem;
            padding: 0.5rem 0;
            margin: 0.125rem 0 0;
            font-size: 0.8125rem;
            color: #495057;
            text-align: right;
            list-style: none;
            background-color: #fff;
            background-clip: padding-box;
            border: 0 solid rgba(0, 0, 0, 0.15);
            border-radius: 0.25rem;
        }

        .dropdown-menu[style] {
            left: auto !important;
        }

        .dropdown-menu-start {
            --bs-position: start;
            right: auto;
            left: 0;
        }

        .dropdown-menu-end {
            --bs-position: end;
            right: 0;
            left: auto;
        }

        @media (min-width: 576px) {
            .dropdown-menu-sm-start {
                --bs-position: start;
                right: auto;
                left: 0;
            }

            .dropdown-menu-sm-end {
                --bs-position: end;
                right: 0;
                left: auto;
            }
        }

        @media (min-width: 768px) {
            .dropdown-menu-md-start {
                --bs-position: start;
                right: auto;
                left: 0;
            }

            .dropdown-menu-md-end {
                --bs-position: end;
                right: 0;
                left: auto;
            }
        }

        @media (min-width: 992px) {
            .dropdown-menu-lg-start {
                --bs-position: start;
                right: auto;
                left: 0;
            }

            .dropdown-menu-lg-end {
                --bs-position: end;
                right: 0;
                left: auto;
            }
        }

        @media (min-width: 1200px) {
            .dropdown-menu-xl-start {
                --bs-position: start;
                right: auto;
                left: 0;
            }

            .dropdown-menu-xl-end {
                --bs-position: end;
                right: 0;
                left: auto;
            }
        }

        @media (min-width: 1400px) {
            .dropdown-menu-xxl-start {
                --bs-position: start;
                right: auto;
                left: 0;
            }

            .dropdown-menu-xxl-end {
                --bs-position: end;
                right: 0;
                left: auto;
            }
        }

        .dropup .dropdown-menu {
            top: auto;
            bottom: 100%;
            margin-top: 0;
            margin-bottom: 0.125rem;
        }

        .dropend .dropdown-menu {
            top: 0;
            left: auto;
            right: 100%;
            margin-top: 0;
            margin-right: 0.125rem;
        }

        .dropend .dropdown-toggle::after {
            vertical-align: 0;
        }

        .dropstart .dropdown-menu {
            top: 0;
            left: 100%;
            right: auto;
            margin-top: 0;
            margin-left: 0.125rem;
        }

        .dropstart .dropdown-toggle::before {
            vertical-align: 0;
        }

        .dropdown-divider {
            height: 0;
            margin: 0.5rem 0;
            overflow: hidden;
            border-top: 1px solid #eff2f7;
        }

        .dropdown-item {
            display: block;
            width: 100%;
            padding: 0.35rem 1.5rem;
            clear: both;
            font-weight: 400;
            color: #212529;
            text-align: inherit;
            white-space: nowrap;
            background-color: transparent;
            border: 0;
        }

        .dropdown-item:hover,
        .dropdown-item:focus {
            color: #1e2125;
            text-decoration: none;
            background-color: #f8f9fa;
        }

        .dropdown-item.active,
        .dropdown-item:active {
            color: #343a40;
            text-decoration: none;
            background-color: #f8f9fa;
        }

        .dropdown-item.disabled,
        .dropdown-item:disabled {
            color: #74788d;
            pointer-events: none;
            background-color: transparent;
        }

        .dropdown-menu.show {
            display: block;
        }

        .dropdown-header {
            display: block;
            padding: 0.5rem 1.5rem;
            margin-bottom: 0;
            font-size: 0.71094rem;
            color: #74788d;
            white-space: nowrap;
        }

        .dropdown-item-text {
            display: block;
            padding: 0.35rem 1.5rem;
            color: #212529;
        }

        .dropdown-menu-dark {
            color: #f6f6f6;
            background-color: #343a40;
            border-color: rgba(0, 0, 0, 0.15);
        }

        .dropdown-menu-dark .dropdown-item {
            color: #f6f6f6;
        }

        .dropdown-menu-dark .dropdown-item:hover,
        .dropdown-menu-dark .dropdown-item:focus {
            color: #fff;
            background-color: rgba(255, 255, 255, 0.15);
        }

        .dropdown-menu-dark .dropdown-item.active,
        .dropdown-menu-dark .dropdown-item:active {
            color: #343a40;
            background-color: #f8f9fa;
        }

        .dropdown-menu-dark .dropdown-item.disabled,
        .dropdown-menu-dark .dropdown-item:disabled {
            color: #adb5bd;
        }

        .dropdown-menu-dark .dropdown-divider {
            border-color: #eff2f7;
        }

        .dropdown-menu-dark .dropdown-item-text {
            color: #f6f6f6;
        }

        .dropdown-menu-dark .dropdown-header {
            color: #adb5bd;
        }

        .btn-group,
        .btn-group-vertical {
            position: relative;
            display: -webkit-inline-box;
            display: -ms-inline-flexbox;
            display: inline-flex;
            vertical-align: middle;
        }

        .btn-group>.btn,
        .btn-group-vertical>.btn {
            position: relative;
            -webkit-box-flex: 1;
            -ms-flex: 1 1 auto;
            flex: 1 1 auto;
        }

        .btn-group>.btn-check:checked+.btn,
        .btn-group>.btn-check:focus+.btn,
        .btn-group>.btn:hover,
        .btn-group>.btn:focus,
        .btn-group>.btn:active,
        .btn-group>.btn.active,
        .btn-group-vertical>.btn-check:checked+.btn,
        .btn-group-vertical>.btn-check:focus+.btn,
        .btn-group-vertical>.btn:hover,
        .btn-group-vertical>.btn:focus,
        .btn-group-vertical>.btn:active,
        .btn-group-vertical>.btn.active {
            z-index: 1;
        }

        .btn-toolbar {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            -webkit-box-pack: start;
            -ms-flex-pack: start;
            justify-content: flex-start;
        }

        .btn-toolbar .input-group {
            width: auto;
        }

        .btn-group>.btn:not(:first-child),
        .btn-group>.btn-group:not(:first-child) {
            margin-right: -1px;
        }

        .btn-group>.btn:not(:last-child):not(.dropdown-toggle),
        .btn-group>.btn-group:not(:last-child)>.btn {
            border-top-left-radius: 0;
            border-bottom-left-radius: 0;
        }

        .btn-group>.btn:nth-child(n + 3),
        .btn-group> :not(.btn-check)+.btn,
        .btn-group>.btn-group:not(:first-child)>.btn {
            border-top-right-radius: 0;
            border-bottom-right-radius: 0;
        }

        .dropdown-toggle-split {
            padding-left: 0.5625rem;
            padding-right: 0.5625rem;
        }

        .dropdown-toggle-split::after,
        .dropup .dropdown-toggle-split::after,
        .dropend .dropdown-toggle-split::after {
            margin-right: 0;
        }

        .dropstart .dropdown-toggle-split::before {
            margin-left: 0;
        }

        .btn-sm+.dropdown-toggle-split,
        .btn-group-sm>.btn+.dropdown-toggle-split {
            padding-left: 0.375rem;
            padding-right: 0.375rem;
        }

        .btn-lg+.dropdown-toggle-split,
        .btn-group-lg>.btn+.dropdown-toggle-split {
            padding-left: 0.75rem;
            padding-right: 0.75rem;
        }

        .btn-group-vertical {
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-box-align: start;
            -ms-flex-align: start;
            align-items: flex-start;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
        }

        .btn-group-vertical>.btn,
        .btn-group-vertical>.btn-group {
            width: 100%;
        }

        .btn-group-vertical>.btn:not(:first-child),
        .btn-group-vertical>.btn-group:not(:first-child) {
            margin-top: -1px;
        }

        .btn-group-vertical>.btn:not(:last-child):not(.dropdown-toggle),
        .btn-group-vertical>.btn-group:not(:last-child)>.btn {
            border-bottom-left-radius: 0;
            border-bottom-right-radius: 0;
        }

        .btn-group-vertical>.btn~.btn,
        .btn-group-vertical>.btn-group:not(:first-child)>.btn {
            border-top-right-radius: 0;
            border-top-left-radius: 0;
        }

        .nav {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            padding-right: 0;
            margin-bottom: 0;
            list-style: none;
        }

        .nav-link {
            display: block;
            padding: 0.5rem 1rem;
            -webkit-transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out;
            transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out;
        }

        @media (prefers-reduced-motion: reduce) {
            .nav-link {
                -webkit-transition: none;
                transition: none;
            }
        }

        .nav-link:hover,
        .nav-link:focus {
            text-decoration: none;
        }

        .nav-link.disabled {
            color: #74788d;
            pointer-events: none;
            cursor: default;
        }

        .nav-tabs {
            border-bottom: 1px solid #ced4da;
        }

        .nav-tabs .nav-link {
            margin-bottom: -1px;
            border: 1px solid transparent;
            border-top-right-radius: 0.25rem;
            border-top-left-radius: 0.25rem;
        }

        .nav-tabs .nav-link:hover,
        .nav-tabs .nav-link:focus {
            border-color: #eff2f7 #eff2f7 #ced4da;
        }

        .nav-tabs .nav-link.disabled {
            color: #74788d;
            background-color: transparent;
            border-color: transparent;
        }

        .nav-tabs .nav-link.active,
        .nav-tabs .nav-item.show .nav-link {
            color: #495057;
            background-color: #fff;
            border-color: #ced4da #ced4da #fff;
        }

        .nav-tabs .dropdown-menu {
            margin-top: -1px;
            border-top-right-radius: 0;
            border-top-left-radius: 0;
        }

        .nav-pills .nav-link {
            border-radius: 0.25rem;
        }

        .nav-pills .nav-link.active,
        .nav-pills .show>.nav-link {
            color: #fff;
            background-color: #556ee6;
        }

        .nav-fill>.nav-link,
        .nav-fill .nav-item {
            -webkit-box-flex: 1;
            -ms-flex: 1 1 auto;
            flex: 1 1 auto;
            text-align: center;
        }

        .nav-justified>.nav-link,
        .nav-justified .nav-item {
            -ms-flex-preferred-size: 0;
            flex-basis: 0;
            -webkit-box-flex: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
            text-align: center;
        }

        .tab-content>.tab-pane {
            display: none;
        }

        .tab-content>.active {
            display: block;
        }

        .navbar {
            position: relative;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between;
            padding-top: 0.5rem;
            padding-bottom: 0.5rem;
        }

        .navbar>.container,
        .navbar>.container-fluid,
        .navbar>.container-sm,
        .navbar>.container-md,
        .navbar>.container-lg,
        .navbar>.container-xl,
        .navbar>.container-xxl {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: inherit;
            flex-wrap: inherit;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between;
        }

        .navbar-brand {
            padding-top: 0.34766rem;
            padding-bottom: 0.34766rem;
            margin-left: 1rem;
            font-size: 1.01562rem;
            white-space: nowrap;
        }

        .navbar-brand:hover,
        .navbar-brand:focus {
            text-decoration: none;
        }

        .navbar-nav {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            padding-right: 0;
            margin-bottom: 0;
            list-style: none;
        }

        .navbar-nav .nav-link {
            padding-left: 0;
            padding-right: 0;
        }

        .navbar-nav .dropdown-menu {
            position: static;
        }

        .navbar-text {
            padding-top: 0.5rem;
            padding-bottom: 0.5rem;
        }

        .navbar-collapse {
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            width: 100%;
        }

        .navbar-toggler {
            padding: 0.25rem 0.75rem;
            font-size: 1.01562rem;
            line-height: 1;
            background-color: transparent;
            border: 1px solid transparent;
            border-radius: 0.25rem;
            -webkit-transition: -webkit-box-shadow 0.15s ease-in-out;
            transition: -webkit-box-shadow 0.15s ease-in-out;
            transition: box-shadow 0.15s ease-in-out;
            transition: box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
        }

        @media (prefers-reduced-motion: reduce) {
            .navbar-toggler {
                -webkit-transition: none;
                transition: none;
            }
        }

        .navbar-toggler:hover {
            text-decoration: none;
        }

        .navbar-toggler:focus {
            text-decoration: none;
            outline: 0;
            -webkit-box-shadow: 0 0 0 0.15rem;
            box-shadow: 0 0 0 0.15rem;
        }

        .navbar-toggler-icon {
            display: inline-block;
            width: 1.5em;
            height: 1.5em;
            vertical-align: middle;
            background-repeat: no-repeat;
            background-position: center;
            background-size: 100%;
        }

        @media (min-width: 576px) {
            .navbar-expand-sm {
                -ms-flex-wrap: nowrap;
                flex-wrap: nowrap;
                -webkit-box-pack: start;
                -ms-flex-pack: start;
                justify-content: flex-start;
            }

            .navbar-expand-sm .navbar-nav {
                -webkit-box-orient: horizontal;
                -webkit-box-direction: normal;
                -ms-flex-direction: row;
                flex-direction: row;
            }

            .navbar-expand-sm .navbar-nav .dropdown-menu {
                position: absolute;
            }

            .navbar-expand-sm .navbar-nav .nav-link {
                padding-left: 0.5rem;
                padding-right: 0.5rem;
            }

            .navbar-expand-sm .navbar-collapse {
                display: -webkit-box !important;
                display: -ms-flexbox !important;
                display: flex !important;
            }

            .navbar-expand-sm .navbar-toggler {
                display: none;
            }
        }

        @media (min-width: 768px) {
            .navbar-expand-md {
                -ms-flex-wrap: nowrap;
                flex-wrap: nowrap;
                -webkit-box-pack: start;
                -ms-flex-pack: start;
                justify-content: flex-start;
            }

            .navbar-expand-md .navbar-nav {
                -webkit-box-orient: horizontal;
                -webkit-box-direction: normal;
                -ms-flex-direction: row;
                flex-direction: row;
            }

            .navbar-expand-md .navbar-nav .dropdown-menu {
                position: absolute;
            }

            .navbar-expand-md .navbar-nav .nav-link {
                padding-left: 0.5rem;
                padding-right: 0.5rem;
            }

            .navbar-expand-md .navbar-collapse {
                display: -webkit-box !important;
                display: -ms-flexbox !important;
                display: flex !important;
            }

            .navbar-expand-md .navbar-toggler {
                display: none;
            }
        }

        @media (min-width: 992px) {
            .navbar-expand-lg {
                -ms-flex-wrap: nowrap;
                flex-wrap: nowrap;
                -webkit-box-pack: start;
                -ms-flex-pack: start;
                justify-content: flex-start;
            }

            .navbar-expand-lg .navbar-nav {
                -webkit-box-orient: horizontal;
                -webkit-box-direction: normal;
                -ms-flex-direction: row;
                flex-direction: row;
            }

            .navbar-expand-lg .navbar-nav .dropdown-menu {
                position: absolute;
            }

            .navbar-expand-lg .navbar-nav .nav-link {
                padding-left: 0.5rem;
                padding-right: 0.5rem;
            }

            .navbar-expand-lg .navbar-collapse {
                display: -webkit-box !important;
                display: -ms-flexbox !important;
                display: flex !important;
            }

            .navbar-expand-lg .navbar-toggler {
                display: none;
            }
        }

        @media (min-width: 1200px) {
            .navbar-expand-xl {
                -ms-flex-wrap: nowrap;
                flex-wrap: nowrap;
                -webkit-box-pack: start;
                -ms-flex-pack: start;
                justify-content: flex-start;
            }

            .navbar-expand-xl .navbar-nav {
                -webkit-box-orient: horizontal;
                -webkit-box-direction: normal;
                -ms-flex-direction: row;
                flex-direction: row;
            }

            .navbar-expand-xl .navbar-nav .dropdown-menu {
                position: absolute;
            }

            .navbar-expand-xl .navbar-nav .nav-link {
                padding-left: 0.5rem;
                padding-right: 0.5rem;
            }

            .navbar-expand-xl .navbar-collapse {
                display: -webkit-box !important;
                display: -ms-flexbox !important;
                display: flex !important;
            }

            .navbar-expand-xl .navbar-toggler {
                display: none;
            }
        }

        @media (min-width: 1400px) {
            .navbar-expand-xxl {
                -ms-flex-wrap: nowrap;
                flex-wrap: nowrap;
                -webkit-box-pack: start;
                -ms-flex-pack: start;
                justify-content: flex-start;
            }

            .navbar-expand-xxl .navbar-nav {
                -webkit-box-orient: horizontal;
                -webkit-box-direction: normal;
                -ms-flex-direction: row;
                flex-direction: row;
            }

            .navbar-expand-xxl .navbar-nav .dropdown-menu {
                position: absolute;
            }

            .navbar-expand-xxl .navbar-nav .nav-link {
                padding-left: 0.5rem;
                padding-right: 0.5rem;
            }

            .navbar-expand-xxl .navbar-collapse {
                display: -webkit-box !important;
                display: -ms-flexbox !important;
                display: flex !important;
            }

            .navbar-expand-xxl .navbar-toggler {
                display: none;
            }
        }

        .navbar-expand {
            -ms-flex-wrap: nowrap;
            flex-wrap: nowrap;
            -webkit-box-pack: start;
            -ms-flex-pack: start;
            justify-content: flex-start;
        }

        .navbar-expand .navbar-nav {
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -ms-flex-direction: row;
            flex-direction: row;
        }

        .navbar-expand .navbar-nav .dropdown-menu {
            position: absolute;
        }

        .navbar-expand .navbar-nav .nav-link {
            padding-left: 0.5rem;
            padding-right: 0.5rem;
        }

        .navbar-expand .navbar-collapse {
            display: -webkit-box !important;
            display: -ms-flexbox !important;
            display: flex !important;
        }

        .navbar-expand .navbar-toggler {
            display: none;
        }

        .navbar-light .navbar-brand {
            color: rgba(0, 0, 0, 0.9);
        }

        .navbar-light .navbar-brand:hover,
        .navbar-light .navbar-brand:focus {
            color: rgba(0, 0, 0, 0.9);
        }

        .navbar-light .navbar-nav .nav-link {
            color: rgba(0, 0, 0, 0.55);
        }

        .navbar-light .navbar-nav .nav-link:hover,
        .navbar-light .navbar-nav .nav-link:focus {
            color: rgba(0, 0, 0, 0.7);
        }

        .navbar-light .navbar-nav .nav-link.disabled {
            color: rgba(0, 0, 0, 0.3);
        }

        .navbar-light .navbar-nav .show>.nav-link,
        .navbar-light .navbar-nav .nav-link.active {
            color: rgba(0, 0, 0, 0.9);
        }

        .navbar-light .navbar-toggler {
            color: rgba(0, 0, 0, 0.55);
            border-color: rgba(0, 0, 0, 0.1);
        }

        .navbar-light .navbar-toggler-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%280, 0, 0, 0.55%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
        }

        .navbar-light .navbar-text {
            color: rgba(0, 0, 0, 0.55);
        }

        .navbar-light .navbar-text a,
        .navbar-light .navbar-text a:hover,
        .navbar-light .navbar-text a:focus {
            color: rgba(0, 0, 0, 0.9);
        }

        .navbar-dark .navbar-brand {
            color: #fff;
        }

        .navbar-dark .navbar-brand:hover,
        .navbar-dark .navbar-brand:focus {
            color: #fff;
        }

        .navbar-dark .navbar-nav .nav-link {
            color: rgba(255, 255, 255, 0.55);
        }

        .navbar-dark .navbar-nav .nav-link:hover,
        .navbar-dark .navbar-nav .nav-link:focus {
            color: rgba(255, 255, 255, 0.75);
        }

        .navbar-dark .navbar-nav .nav-link.disabled {
            color: rgba(255, 255, 255, 0.25);
        }

        .navbar-dark .navbar-nav .show>.nav-link,
        .navbar-dark .navbar-nav .nav-link.active {
            color: #fff;
        }

        .navbar-dark .navbar-toggler {
            color: rgba(255, 255, 255, 0.55);
            border-color: rgba(255, 255, 255, 0.1);
        }

        .navbar-dark .navbar-toggler-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%28255, 255, 255, 0.55%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
        }

        .navbar-dark .navbar-text {
            color: rgba(255, 255, 255, 0.55);
        }

        .navbar-dark .navbar-text a,
        .navbar-dark .navbar-text a:hover,
        .navbar-dark .navbar-text a:focus {
            color: #fff;
        }

        .card {
            position: relative;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 0 solid #f6f6f6;
            border-radius: 0.25rem;
        }

        .card>hr {
            margin-left: 0;
            margin-right: 0;
        }

        .card>.list-group {
            border-top: inherit;
            border-bottom: inherit;
        }

        .card>.list-group:first-child {
            border-top-width: 0;
            border-top-right-radius: calc(0.25rem - 0);
            border-top-left-radius: calc(0.25rem - 0);
        }

        .card>.list-group:last-child {
            border-bottom-width: 0;
            border-bottom-left-radius: calc(0.25rem - 0);
            border-bottom-right-radius: calc(0.25rem - 0);
        }

        .card>.card-header+.list-group,
        .card>.list-group+.card-footer {
            border-top: 0;
        }

        .card-body {
            -webkit-box-flex: 1;
            -ms-flex: 1 1 auto;
            flex: 1 1 auto;
            padding: 1.25rem 1.25rem;
        }

        .card-title {
            margin-bottom: 0.5rem;
        }

        .card-subtitle {
            margin-top: -0.25rem;
            margin-bottom: 0;
        }

        .card-text:last-child {
            margin-bottom: 0;
        }

        .card-link:hover {
            text-decoration: none;
        }

        .card-link+.card-link {
            margin-left: 1.25rem;
        }

        .card-header {
            padding: 0.625rem 1.25rem;
            margin-bottom: 0;
            background-color: rgba(0, 0, 0, 0.03);
            border-bottom: 0 solid #f6f6f6;
        }

        .card-header:first-child {
            border-radius: calc(0.25rem - 0) calc(0.25rem - 0) 0 0;
        }

        .card-footer {
            padding: 0.625rem 1.25rem;
            background-color: rgba(0, 0, 0, 0.03);
            border-top: 0 solid #f6f6f6;
        }

        .card-footer:last-child {
            border-radius: 0 0 calc(0.25rem - 0) calc(0.25rem - 0);
        }

        .card-header-tabs {
            margin-left: -0.625rem;
            margin-bottom: -0.625rem;
            margin-right: -0.625rem;
            border-bottom: 0;
        }

        .card-header-pills {
            margin-left: -0.625rem;
            margin-right: -0.625rem;
        }

        .card-img-overlay {
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            padding: 1rem;
            border-radius: calc(0.25rem - 0);
        }

        .card-img,
        .card-img-top,
        .card-img-bottom {
            width: 100%;
        }

        .card-img,
        .card-img-top {
            border-top-right-radius: calc(0.25rem - 0);
            border-top-left-radius: calc(0.25rem - 0);
        }

        .card-img,
        .card-img-bottom {
            border-bottom-left-radius: calc(0.25rem - 0);
            border-bottom-right-radius: calc(0.25rem - 0);
        }

        .card-group>.card {
            margin-bottom: 12px;
        }

        @media (min-width: 576px) {
            .card-group {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-orient: horizontal;
                -webkit-box-direction: normal;
                -ms-flex-flow: row wrap;
                flex-flow: row wrap;
            }

            .card-group>.card {
                -webkit-box-flex: 1;
                -ms-flex: 1 0 0%;
                flex: 1 0 0%;
                margin-bottom: 0;
            }

            .card-group>.card+.card {
                margin-right: 0;
                border-right: 0;
            }

            .card-group>.card:not(:last-child) {
                border-top-left-radius: 0;
                border-bottom-left-radius: 0;
            }

            .card-group>.card:not(:last-child) .card-img-top,
            .card-group>.card:not(:last-child) .card-header {
                border-top-left-radius: 0;
            }

            .card-group>.card:not(:last-child) .card-img-bottom,
            .card-group>.card:not(:last-child) .card-footer {
                border-bottom-left-radius: 0;
            }

            .card-group>.card:not(:first-child) {
                border-top-right-radius: 0;
                border-bottom-right-radius: 0;
            }

            .card-group>.card:not(:first-child) .card-img-top,
            .card-group>.card:not(:first-child) .card-header {
                border-top-right-radius: 0;
            }

            .card-group>.card:not(:first-child) .card-img-bottom,
            .card-group>.card:not(:first-child) .card-footer {
                border-bottom-right-radius: 0;
            }
        }

        .accordion-button {
            position: relative;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            width: 100%;
            padding: 1rem 1.25rem;
            font-size: 0.8125rem;
            color: #495057;
            background-color: transparent;
            border: 1px solid rgba(0, 0, 0, 0.125);
            border-radius: 0;
            overflow-anchor: none;
            -webkit-transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, border-radius 0.15s ease, -webkit-box-shadow 0.15s ease-in-out;
            transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, border-radius 0.15s ease, -webkit-box-shadow 0.15s ease-in-out;
            transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, border-radius 0.15s ease;
            transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, border-radius 0.15s ease, -webkit-box-shadow 0.15s ease-in-out;
        }

        @media (prefers-reduced-motion: reduce) {
            .accordion-button {
                -webkit-transition: none;
                transition: none;
            }
        }

        .accordion-button.collapsed {
            border-bottom-width: 0;
        }

        .accordion-button:not(.collapsed) {
            color: #4d63cf;
            background-color: #eef1fd;
        }

        .accordion-button:not(.collapsed)::after {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%234d63cf'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
            -webkit-transform: rotate(-180deg);
            transform: rotate(-180deg);
        }

        .accordion-button::after {
            -ms-flex-negative: 0;
            flex-shrink: 0;
            width: 16px;
            height: 16px;
            margin-right: auto;
            content: "";
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23495057'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
            background-repeat: no-repeat;
            background-size: 16px;
            -webkit-transition: -webkit-transform 0.2s ease-in-out;
            transition: -webkit-transform 0.2s ease-in-out;
            transition: transform 0.2s ease-in-out;
            transition: transform 0.2s ease-in-out, -webkit-transform 0.2s ease-in-out;
        }

        @media (prefers-reduced-motion: reduce) {
            .accordion-button::after {
                -webkit-transition: none;
                transition: none;
            }
        }

        .accordion-button:hover {
            z-index: 2;
        }

        .accordion-button:focus {
            z-index: 3;
            border-color: #b9bfc4;
            outline: 0;
            -webkit-box-shadow: none;
            box-shadow: none;
        }

        .accordion-header {
            margin-bottom: 0;
        }

        .accordion-item:first-of-type .accordion-button {
            border-top-right-radius: 0.25rem;
            border-top-left-radius: 0.25rem;
        }

        .accordion-item:last-of-type .accordion-button.collapsed {
            border-bottom-width: 1px;
            border-bottom-left-radius: 0.25rem;
            border-bottom-right-radius: 0.25rem;
        }

        .accordion-item:last-of-type .accordion-collapse {
            border-bottom-width: 1px;
            border-bottom-left-radius: 0.25rem;
            border-bottom-right-radius: 0.25rem;
        }

        .accordion-collapse {
            border: solid rgba(0, 0, 0, 0.125);
            border-width: 0 1px;
        }

        .accordion-body {
            padding: 1rem 1.25rem;
        }

        .accordion-flush .accordion-button {
            border-left: 0;
            border-right: 0;
            border-radius: 0;
        }

        .accordion-flush .accordion-collapse {
            border-width: 0;
        }

        .accordion-flush .accordion-item:first-of-type .accordion-button {
            border-top-width: 0;
            border-top-right-radius: 0;
            border-top-left-radius: 0;
        }

        .accordion-flush .accordion-item:last-of-type .accordion-button.collapsed {
            border-bottom-width: 0;
            border-bottom-left-radius: 0;
            border-bottom-right-radius: 0;
        }

        .breadcrumb {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            padding: 0.75rem 1rem;
            margin-bottom: 1rem;
            list-style: none;
        }

        .breadcrumb-item+.breadcrumb-item {
            padding-right: 0.5rem;
        }

        .breadcrumb-item+.breadcrumb-item::before {
            float: right;
            padding-left: 0.5rem;
            color: #74788d;
            content: var(--bs-breadcrumb-divider, "/");
        }

        .breadcrumb-item.active {
            color: #74788d;
        }

        .pagination {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            padding-right: 0;
            list-style: none;
        }

        .page-link {
            position: relative;
            display: block;
            color: #74788d;
            background-color: #fff;
            border: 1px solid #ced4da;
            -webkit-transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
            transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
            transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
            transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
        }

        @media (prefers-reduced-motion: reduce) {
            .page-link {
                -webkit-transition: none;
                transition: none;
            }
        }

        .page-link:hover {
            z-index: 2;
            color: #4458b8;
            text-decoration: none;
            background-color: #eff2f7;
            border-color: #ced4da;
        }

        .page-link:focus {
            z-index: 3;
            color: #4458b8;
            background-color: #eff2f7;
            outline: 0;
            -webkit-box-shadow: 0 0 0 0.15rem rgba(85, 110, 230, 0.25);
            box-shadow: 0 0 0 0.15rem rgba(85, 110, 230, 0.25);
        }

        .page-item:not(:first-child) .page-link {
            margin-right: -1px;
        }

        .page-item.active .page-link {
            z-index: 3;
            color: #fff;
            background-color: #556ee6;
            border-color: #556ee6;
        }

        .page-item.disabled .page-link {
            color: #ced4da;
            pointer-events: none;
            background-color: #fff;
            border-color: #ced4da;
        }

        .page-link {
            padding: 0.5rem 0.75rem;
        }

        .page-item:first-child .page-link {
            border-top-right-radius: 0.25rem;
            border-bottom-right-radius: 0.25rem;
        }

        .page-item:last-child .page-link {
            border-top-left-radius: 0.25rem;
            border-bottom-left-radius: 0.25rem;
        }

        .pagination-lg .page-link {
            padding: 0.75rem 1.5rem;
            font-size: 1.01562rem;
        }

        .pagination-lg .page-item:first-child .page-link {
            border-top-right-radius: 0.4rem;
            border-bottom-right-radius: 0.4rem;
        }

        .pagination-lg .page-item:last-child .page-link {
            border-top-left-radius: 0.4rem;
            border-bottom-left-radius: 0.4rem;
        }

        .pagination-sm .page-link {
            padding: 0.25rem 0.5rem;
            font-size: 0.71094rem;
        }

        .pagination-sm .page-item:first-child .page-link {
            border-top-right-radius: 0.2rem;
            border-bottom-right-radius: 0.2rem;
        }

        .pagination-sm .page-item:last-child .page-link {
            border-top-left-radius: 0.2rem;
            border-bottom-left-radius: 0.2rem;
        }

        .badge {
            display: inline-block;
            padding: 0.25em 0.4em;
            font-size: 75%;
            font-weight: 500;
            line-height: 1;
            color: #fff;
            text-align: center;
            white-space: nowrap;
            vertical-align: baseline;
            border-radius: 0.25rem;
        }

        .badge:empty {
            display: none;
        }

        .btn .badge {
            position: relative;
            top: -1px;
        }

        .alert {
            position: relative;
            padding: 0.75rem 1.25rem;
            margin-bottom: 1rem;
            border: 1px solid transparent;
            border-radius: 0.25rem;
        }

        .alert-heading {
            color: inherit;
        }

        .alert-link {
            font-weight: 600;
        }

        .alert-dismissible {
            padding-left: 3.75rem;
        }

        .alert-dismissible .btn-close {
            position: absolute;
            top: 0;
            left: 0;
            z-index: 2;
            padding: 0.9375rem 1.25rem;
        }

        .alert-primary {
            color: #33428a;
            background-color: #dde2fa;
            border-color: #ccd4f8;
        }

        .alert-primary .alert-link {
            color: #29356e;
        }

        .alert-secondary {
            color: #464855;
            background-color: #e3e4e8;
            border-color: #d5d7dd;
        }

        .alert-secondary .alert-link {
            color: #383a44;
        }

        .alert-success {
            color: #1f7556;
            background-color: #d6f3e9;
            border-color: #c2eddd;
        }

        .alert-success .alert-link {
            color: #195e45;
        }

        .alert-info {
            color: #306391;
            background-color: #dcedfc;
            border-color: #cbe4fb;
        }

        .alert-info .alert-link {
            color: #264f74;
        }

        .alert-warning {
            color: #916c2e;
            background-color: #fcf0db;
            border-color: #fbe9c9;
        }

        .alert-warning .alert-link {
            color: #745625;
        }

        .alert-danger {
            color: #924040;
            background-color: #fde1e1;
            border-color: #fcd2d2;
        }

        .alert-danger .alert-link {
            color: #753333;
        }

        .alert-pink {
            color: #8b2554;
            background-color: #fad8e8;
            border-color: #f8c5dd;
        }

        .alert-pink .alert-link {
            color: #6f1e43;
        }

        .alert-light {
            color: #8f9194;
            background-color: #fcfcfd;
            border-color: #fafbfd;
        }

        .alert-light .alert-link {
            color: #727476;
        }

        .alert-dark {
            color: #1f2326;
            background-color: #d6d8d9;
            border-color: #c2c4c6;
        }

        .alert-dark .alert-link {
            color: #191c1e;
        }

        @-webkit-keyframes progress-bar-stripes {
            0% {
                background-position-x: 0.625rem;
            }
        }

        @keyframes progress-bar-stripes {
            0% {
                background-position-x: 0.625rem;
            }
        }

        .progress {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            height: 0.625rem;
            overflow: hidden;
            font-size: 0.60938rem;
            background-color: #f6f6f6;
            border-radius: 0.25rem;
        }

        .progress-bar {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            overflow: hidden;
            color: #fff;
            text-align: center;
            white-space: nowrap;
            background-color: #556ee6;
            -webkit-transition: width 0.6s ease;
            transition: width 0.6s ease;
        }

        @media (prefers-reduced-motion: reduce) {
            .progress-bar {
                -webkit-transition: none;
                transition: none;
            }
        }

        .progress-bar-striped {
            background-image: linear-gradient(-45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
            background-size: 0.625rem 0.625rem;
        }

        .progress-bar-animated {
            -webkit-animation: 1s linear infinite progress-bar-stripes;
            animation: 1s linear infinite progress-bar-stripes;
        }

        @media (prefers-reduced-motion: reduce) {
            .progress-bar-animated {
                -webkit-animation: none;
                animation: none;
            }
        }

        .list-group {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            padding-right: 0;
            margin-bottom: 0;
            border-radius: 0.25rem;
        }

        .list-group-item-action {
            width: 100%;
            color: #495057;
            text-align: inherit;
        }

        .list-group-item-action:hover,
        .list-group-item-action:focus {
            z-index: 1;
            color: #495057;
            text-decoration: none;
            background-color: #f8f9fa;
        }

        .list-group-item-action:active {
            color: #495057;
            background-color: #eff2f7;
        }

        .list-group-item {
            position: relative;
            display: block;
            padding: 0.75rem 1.25rem;
            background-color: #fff;
            border: 1px solid #eff2f7;
        }

        .list-group-item:first-child {
            border-top-right-radius: inherit;
            border-top-left-radius: inherit;
        }

        .list-group-item:last-child {
            border-bottom-left-radius: inherit;
            border-bottom-right-radius: inherit;
        }

        .list-group-item.disabled,
        .list-group-item:disabled {
            color: #74788d;
            pointer-events: none;
            background-color: #fff;
        }

        .list-group-item.active {
            z-index: 2;
            color: #fff;
            background-color: #556ee6;
            border-color: #556ee6;
        }

        .list-group-item+.list-group-item {
            border-top-width: 0;
        }

        .list-group-item+.list-group-item.active {
            margin-top: -1px;
            border-top-width: 1px;
        }

        .list-group-horizontal {
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -ms-flex-direction: row;
            flex-direction: row;
        }

        .list-group-horizontal>.list-group-item:first-child {
            border-bottom-right-radius: 0.25rem;
            border-top-left-radius: 0;
        }

        .list-group-horizontal>.list-group-item:last-child {
            border-top-left-radius: 0.25rem;
            border-bottom-right-radius: 0;
        }

        .list-group-horizontal>.list-group-item.active {
            margin-top: 0;
        }

        .list-group-horizontal>.list-group-item+.list-group-item {
            border-top-width: 1px;
            border-right-width: 0;
        }

        .list-group-horizontal>.list-group-item+.list-group-item.active {
            margin-right: -1px;
            border-right-width: 1px;
        }

        @media (min-width: 576px) {
            .list-group-horizontal-sm {
                -webkit-box-orient: horizontal;
                -webkit-box-direction: normal;
                -ms-flex-direction: row;
                flex-direction: row;
            }

            .list-group-horizontal-sm>.list-group-item:first-child {
                border-bottom-right-radius: 0.25rem;
                border-top-left-radius: 0;
            }

            .list-group-horizontal-sm>.list-group-item:last-child {
                border-top-left-radius: 0.25rem;
                border-bottom-right-radius: 0;
            }

            .list-group-horizontal-sm>.list-group-item.active {
                margin-top: 0;
            }

            .list-group-horizontal-sm>.list-group-item+.list-group-item {
                border-top-width: 1px;
                border-right-width: 0;
            }

            .list-group-horizontal-sm>.list-group-item+.list-group-item.active {
                margin-right: -1px;
                border-right-width: 1px;
            }
        }

        @media (min-width: 768px) {
            .list-group-horizontal-md {
                -webkit-box-orient: horizontal;
                -webkit-box-direction: normal;
                -ms-flex-direction: row;
                flex-direction: row;
            }

            .list-group-horizontal-md>.list-group-item:first-child {
                border-bottom-right-radius: 0.25rem;
                border-top-left-radius: 0;
            }

            .list-group-horizontal-md>.list-group-item:last-child {
                border-top-left-radius: 0.25rem;
                border-bottom-right-radius: 0;
            }

            .list-group-horizontal-md>.list-group-item.active {
                margin-top: 0;
            }

            .list-group-horizontal-md>.list-group-item+.list-group-item {
                border-top-width: 1px;
                border-right-width: 0;
            }

            .list-group-horizontal-md>.list-group-item+.list-group-item.active {
                margin-right: -1px;
                border-right-width: 1px;
            }
        }

        @media (min-width: 992px) {
            .list-group-horizontal-lg {
                -webkit-box-orient: horizontal;
                -webkit-box-direction: normal;
                -ms-flex-direction: row;
                flex-direction: row;
            }

            .list-group-horizontal-lg>.list-group-item:first-child {
                border-bottom-right-radius: 0.25rem;
                border-top-left-radius: 0;
            }

            .list-group-horizontal-lg>.list-group-item:last-child {
                border-top-left-radius: 0.25rem;
                border-bottom-right-radius: 0;
            }

            .list-group-horizontal-lg>.list-group-item.active {
                margin-top: 0;
            }

            .list-group-horizontal-lg>.list-group-item+.list-group-item {
                border-top-width: 1px;
                border-right-width: 0;
            }

            .list-group-horizontal-lg>.list-group-item+.list-group-item.active {
                margin-right: -1px;
                border-right-width: 1px;
            }
        }

        @media (min-width: 1200px) {
            .list-group-horizontal-xl {
                -webkit-box-orient: horizontal;
                -webkit-box-direction: normal;
                -ms-flex-direction: row;
                flex-direction: row;
            }

            .list-group-horizontal-xl>.list-group-item:first-child {
                border-bottom-right-radius: 0.25rem;
                border-top-left-radius: 0;
            }

            .list-group-horizontal-xl>.list-group-item:last-child {
                border-top-left-radius: 0.25rem;
                border-bottom-right-radius: 0;
            }

            .list-group-horizontal-xl>.list-group-item.active {
                margin-top: 0;
            }

            .list-group-horizontal-xl>.list-group-item+.list-group-item {
                border-top-width: 1px;
                border-right-width: 0;
            }

            .list-group-horizontal-xl>.list-group-item+.list-group-item.active {
                margin-right: -1px;
                border-right-width: 1px;
            }
        }

        @media (min-width: 1400px) {
            .list-group-horizontal-xxl {
                -webkit-box-orient: horizontal;
                -webkit-box-direction: normal;
                -ms-flex-direction: row;
                flex-direction: row;
            }

            .list-group-horizontal-xxl>.list-group-item:first-child {
                border-bottom-right-radius: 0.25rem;
                border-top-left-radius: 0;
            }

            .list-group-horizontal-xxl>.list-group-item:last-child {
                border-top-left-radius: 0.25rem;
                border-bottom-right-radius: 0;
            }

            .list-group-horizontal-xxl>.list-group-item.active {
                margin-top: 0;
            }

            .list-group-horizontal-xxl>.list-group-item+.list-group-item {
                border-top-width: 1px;
                border-right-width: 0;
            }

            .list-group-horizontal-xxl>.list-group-item+.list-group-item.active {
                margin-right: -1px;
                border-right-width: 1px;
            }
        }

        .list-group-flush {
            border-radius: 0;
        }

        .list-group-flush>.list-group-item {
            border-width: 0 0 1px;
        }

        .list-group-flush>.list-group-item:last-child {
            border-bottom-width: 0;
        }

        .list-group-item-primary {
            color: #33428a;
            background-color: #dde2fa;
        }

        .list-group-item-primary.list-group-item-action:hover,
        .list-group-item-primary.list-group-item-action:focus {
            color: #33428a;
            background-color: #c7cbe1;
        }

        .list-group-item-primary.list-group-item-action.active {
            color: #fff;
            background-color: #33428a;
            border-color: #33428a;
        }

        .list-group-item-secondary {
            color: #464855;
            background-color: #e3e4e8;
        }

        .list-group-item-secondary.list-group-item-action:hover,
        .list-group-item-secondary.list-group-item-action:focus {
            color: #464855;
            background-color: #cccdd1;
        }

        .list-group-item-secondary.list-group-item-action.active {
            color: #fff;
            background-color: #464855;
            border-color: #464855;
        }

        .list-group-item-success {
            color: #1f7556;
            background-color: #d6f3e9;
        }

        .list-group-item-success.list-group-item-action:hover,
        .list-group-item-success.list-group-item-action:focus {
            color: #1f7556;
            background-color: #c1dbd2;
        }

        .list-group-item-success.list-group-item-action.active {
            color: #fff;
            background-color: #1f7556;
            border-color: #1f7556;
        }

        .list-group-item-info {
            color: #306391;
            background-color: #dcedfc;
        }

        .list-group-item-info.list-group-item-action:hover,
        .list-group-item-info.list-group-item-action:focus {
            color: #306391;
            background-color: #c6d5e3;
        }

        .list-group-item-info.list-group-item-action.active {
            color: #fff;
            background-color: #306391;
            border-color: #306391;
        }

        .list-group-item-warning {
            color: #916c2e;
            background-color: #fcf0db;
        }

        .list-group-item-warning.list-group-item-action:hover,
        .list-group-item-warning.list-group-item-action:focus {
            color: #916c2e;
            background-color: #e3d8c5;
        }

        .list-group-item-warning.list-group-item-action.active {
            color: #fff;
            background-color: #916c2e;
            border-color: #916c2e;
        }

        .list-group-item-danger {
            color: #924040;
            background-color: #fde1e1;
        }

        .list-group-item-danger.list-group-item-action:hover,
        .list-group-item-danger.list-group-item-action:focus {
            color: #924040;
            background-color: #e4cbcb;
        }

        .list-group-item-danger.list-group-item-action.active {
            color: #fff;
            background-color: #924040;
            border-color: #924040;
        }

        .list-group-item-pink {
            color: #8b2554;
            background-color: #fad8e8;
        }

        .list-group-item-pink.list-group-item-action:hover,
        .list-group-item-pink.list-group-item-action:focus {
            color: #8b2554;
            background-color: #e1c2d1;
        }

        .list-group-item-pink.list-group-item-action.active {
            color: #fff;
            background-color: #8b2554;
            border-color: #8b2554;
        }

        .list-group-item-light {
            color: #8f9194;
            background-color: #fcfcfd;
        }

        .list-group-item-light.list-group-item-action:hover,
        .list-group-item-light.list-group-item-action:focus {
            color: #8f9194;
            background-color: #e3e3e4;
        }

        .list-group-item-light.list-group-item-action.active {
            color: #fff;
            background-color: #8f9194;
            border-color: #8f9194;
        }

        .list-group-item-dark {
            color: #1f2326;
            background-color: #d6d8d9;
        }

        .list-group-item-dark.list-group-item-action:hover,
        .list-group-item-dark.list-group-item-action:focus {
            color: #1f2326;
            background-color: #c1c2c3;
        }

        .list-group-item-dark.list-group-item-action.active {
            color: #fff;
            background-color: #1f2326;
            border-color: #1f2326;
        }

        .btn-close {
            -webkit-box-sizing: content-box;
            box-sizing: content-box;
            width: 1em;
            height: 1em;
            padding: 0.25em 0.25em;
            color: #000;
            background: transparent url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23000'%3e%3cpath d='M.293.293a1 1 0 011.414 0L8 6.586 14.293.293a1 1 0 111.414 1.414L9.414 8l6.293 6.293a1 1 0 01-1.414 1.414L8 9.414l-6.293 6.293a1 1 0 01-1.414-1.414L6.586 8 .293 1.707a1 1 0 010-1.414z'/%3e%3c/svg%3e") center/1em auto no-repeat;
            border: 0;
            border-radius: 0.25rem;
            opacity: 0.5;
        }

        .btn-close:hover {
            color: #000;
            text-decoration: none;
            opacity: 0.75;
        }

        .btn-close:focus {
            outline: none;
            -webkit-box-shadow: none;
            box-shadow: none;
            opacity: 1;
        }

        .btn-close:disabled,
        .btn-close.disabled {
            pointer-events: none;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            opacity: 0.25;
        }

        .btn-close-white {
            -webkit-filter: invert(1) grayscale(100%) brightness(200%);
            filter: invert(1) grayscale(100%) brightness(200%);
        }

        .toast {
            width: 350px;
            max-width: 100%;
            font-size: 0.875rem;
            pointer-events: auto;
            background-color: rgba(255, 255, 255, 0.85);
            background-clip: padding-box;
            border: 1px solid rgba(0, 0, 0, 0.1);
            -webkit-box-shadow: 0 0.75rem 1.5rem rgba(18, 38, 63, 0.03);
            box-shadow: 0 0.75rem 1.5rem rgba(18, 38, 63, 0.03);
            border-radius: 0.25rem;
        }

        .toast:not(.showing):not(.show) {
            opacity: 0;
        }

        .toast.hide {
            display: none;
        }

        .toast-container {
            width: -webkit-max-content;
            width: -moz-max-content;
            width: max-content;
            max-width: 100%;
            pointer-events: none;
        }

        .toast-container> :not(:last-child) {
            margin-bottom: 12px;
        }

        .toast-header {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            padding: 0.25rem 0.75rem;
            color: #74788d;
            background-color: rgba(255, 255, 255, 0.85);
            background-clip: padding-box;
            border-bottom: 1px solid rgba(0, 0, 0, 0.05);
            border-top-right-radius: calc(0.25rem - 1px);
            border-top-left-radius: calc(0.25rem - 1px);
        }

        .toast-header .btn-close {
            margin-left: -0.375rem;
            margin-right: 0.75rem;
        }

        .toast-body {
            padding: 0.75rem;
        }

        .modal-open {
            overflow: hidden;
        }

        .modal-open .modal {
            overflow-x: hidden;
            overflow-y: auto;
        }

        .modal {
            position: fixed;
            top: 0;
            right: 0;
            z-index: 1050;
            display: none;
            width: 100%;
            height: 100%;
            overflow: hidden;
            outline: 0;
        }

        .modal-dialog {
            position: relative;
            width: auto;
            margin: 0.5rem;
            pointer-events: none;
        }

        .modal.fade .modal-dialog {
            -webkit-transition: -webkit-transform 0.3s ease-out;
            transition: -webkit-transform 0.3s ease-out;
            transition: transform 0.3s ease-out;
            transition: transform 0.3s ease-out, -webkit-transform 0.3s ease-out;
            -webkit-transform: translate(0, -50px);
            transform: translate(0, -50px);
        }

        @media (prefers-reduced-motion: reduce) {
            .modal.fade .modal-dialog {
                -webkit-transition: none;
                transition: none;
            }
        }

        .modal.show .modal-dialog {
            -webkit-transform: none;
            transform: none;
        }

        .modal.modal-static .modal-dialog {
            -webkit-transform: scale(1.02);
            transform: scale(1.02);
        }

        .modal-dialog-scrollable {
            height: calc(100% - 1rem);
        }

        .modal-dialog-scrollable .modal-content {
            max-height: 100%;
            overflow: hidden;
        }

        .modal-dialog-scrollable .modal-body {
            overflow-y: auto;
        }

        .modal-dialog-centered {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            min-height: calc(100% - 1rem);
        }

        .modal-content {
            position: relative;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            width: 100%;
            pointer-events: auto;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid #f6f6f6;
            border-radius: 0.4rem;
            outline: 0;
        }

        .modal-backdrop {
            position: fixed;
            top: 0;
            right: 0;
            z-index: 1040;
            width: 100vw;
            height: 100vh;
            background-color: #000;
        }

        .modal-backdrop.fade {
            opacity: 0;
        }

        .modal-backdrop.show {
            opacity: 0.5;
        }

        .modal-header {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-negative: 0;
            flex-shrink: 0;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between;
            padding: 1rem 1rem;
            border-bottom: 1px solid #eff2f7;
            border-top-right-radius: calc(0.4rem - 1px);
            border-top-left-radius: calc(0.4rem - 1px);
        }

        .modal-header .btn-close {
            padding: 0.5rem 0.5rem;
            margin: -0.5rem auto -0.5rem -0.5rem;
        }

        .modal-title {
            margin-bottom: 0;
            line-height: 1.5;
        }

        .modal-body {
            position: relative;
            -webkit-box-flex: 1;
            -ms-flex: 1 1 auto;
            flex: 1 1 auto;
            padding: 1rem;
        }

        .modal-footer {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            -ms-flex-negative: 0;
            flex-shrink: 0;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: end;
            -ms-flex-pack: end;
            justify-content: flex-end;
            padding: 0.75rem;
            border-top: 1px solid #eff2f7;
            border-bottom-left-radius: calc(0.4rem - 1px);
            border-bottom-right-radius: calc(0.4rem - 1px);
        }

        .modal-footer>* {
            margin: 0.25rem;
        }

        .modal-scrollbar-measure {
            position: absolute;
            top: -9999px;
            width: 50px;
            height: 50px;
            overflow: scroll;
        }

        @media (min-width: 576px) {
            .modal-dialog {
                max-width: 500px;
                margin: 1.75rem auto;
            }

            .modal-dialog-scrollable {
                height: calc(100% - 3.5rem);
            }

            .modal-dialog-centered {
                min-height: calc(100% - 3.5rem);
            }

            .modal-sm {
                max-width: 300px;
            }
        }

        @media (min-width: 992px) {

            .modal-lg,
            .modal-xl {
                max-width: 800px;
            }
        }

        @media (min-width: 1200px) {
            .modal-xl {
                max-width: 1140px;
            }
        }

        .modal-fullscreen {
            width: 100vw;
            max-width: none;
            height: 100%;
            margin: 0;
        }

        .modal-fullscreen .modal-content {
            height: 100%;
            border: 0;
            border-radius: 0;
        }

        .modal-fullscreen .modal-header {
            border-radius: 0;
        }

        .modal-fullscreen .modal-body {
            overflow-y: auto;
        }

        .modal-fullscreen .modal-footer {
            border-radius: 0;
        }

        @media (max-width: 575.98px) {
            .modal-fullscreen-sm-down {
                width: 100vw;
                max-width: none;
                height: 100%;
                margin: 0;
            }

            .modal-fullscreen-sm-down .modal-content {
                height: 100%;
                border: 0;
                border-radius: 0;
            }

            .modal-fullscreen-sm-down .modal-header {
                border-radius: 0;
            }

            .modal-fullscreen-sm-down .modal-body {
                overflow-y: auto;
            }

            .modal-fullscreen-sm-down .modal-footer {
                border-radius: 0;
            }
        }

        @media (max-width: 767.98px) {
            .modal-fullscreen-md-down {
                width: 100vw;
                max-width: none;
                height: 100%;
                margin: 0;
            }

            .modal-fullscreen-md-down .modal-content {
                height: 100%;
                border: 0;
                border-radius: 0;
            }

            .modal-fullscreen-md-down .modal-header {
                border-radius: 0;
            }

            .modal-fullscreen-md-down .modal-body {
                overflow-y: auto;
            }

            .modal-fullscreen-md-down .modal-footer {
                border-radius: 0;
            }
        }

        @media (max-width: 991.98px) {
            .modal-fullscreen-lg-down {
                width: 100vw;
                max-width: none;
                height: 100%;
                margin: 0;
            }

            .modal-fullscreen-lg-down .modal-content {
                height: 100%;
                border: 0;
                border-radius: 0;
            }

            .modal-fullscreen-lg-down .modal-header {
                border-radius: 0;
            }

            .modal-fullscreen-lg-down .modal-body {
                overflow-y: auto;
            }

            .modal-fullscreen-lg-down .modal-footer {
                border-radius: 0;
            }
        }

        @media (max-width: 1199.98px) {
            .modal-fullscreen-xl-down {
                width: 100vw;
                max-width: none;
                height: 100%;
                margin: 0;
            }

            .modal-fullscreen-xl-down .modal-content {
                height: 100%;
                border: 0;
                border-radius: 0;
            }

            .modal-fullscreen-xl-down .modal-header {
                border-radius: 0;
            }

            .modal-fullscreen-xl-down .modal-body {
                overflow-y: auto;
            }

            .modal-fullscreen-xl-down .modal-footer {
                border-radius: 0;
            }
        }

        @media (max-width: 1399.98px) {
            .modal-fullscreen-xxl-down {
                width: 100vw;
                max-width: none;
                height: 100%;
                margin: 0;
            }

            .modal-fullscreen-xxl-down .modal-content {
                height: 100%;
                border: 0;
                border-radius: 0;
            }

            .modal-fullscreen-xxl-down .modal-header {
                border-radius: 0;
            }

            .modal-fullscreen-xxl-down .modal-body {
                overflow-y: auto;
            }

            .modal-fullscreen-xxl-down .modal-footer {
                border-radius: 0;
            }
        }

        .tooltip {
            position: absolute;
            z-index: 1070;
            display: block;
            margin: 0;
            font-family: var(--bs-font-sans-serif);
            font-style: normal;
            font-weight: 400;
            line-height: 1.5;
            text-align: right;
            text-align: start;
            text-decoration: none;
            text-shadow: none;
            text-transform: none;
            letter-spacing: normal;
            word-break: normal;
            word-spacing: normal;
            white-space: normal;
            line-break: auto;
            font-size: 0.71094rem;
            word-wrap: break-word;
            opacity: 0;
        }

        .tooltip.show {
            opacity: 0.9;
        }

        .tooltip .tooltip-arrow {
            position: absolute;
            display: block;
            width: 0.8rem;
            height: 0.4rem;
        }

        .tooltip .tooltip-arrow::before {
            position: absolute;
            content: "";
            border-color: transparent;
            border-style: solid;
        }

        .bs-tooltip-top,
        .bs-tooltip-auto[data-popper-placement^="top"] {
            padding: 0.4rem 0;
        }

        .bs-tooltip-top .tooltip-arrow,
        .bs-tooltip-auto[data-popper-placement^="top"] .tooltip-arrow {
            bottom: 0;
        }

        .bs-tooltip-top .tooltip-arrow::before,
        .bs-tooltip-auto[data-popper-placement^="top"] .tooltip-arrow::before {
            top: -1px;
            border-width: 0.4rem 0.4rem 0;
            border-top-color: #000;
        }

        .bs-tooltip-end,
        .bs-tooltip-auto[data-popper-placement^="right"] {
            padding: 0 0.4rem;
        }

        .bs-tooltip-end .tooltip-arrow,
        .bs-tooltip-auto[data-popper-placement^="right"] .tooltip-arrow {
            right: 0;
            width: 0.4rem;
            height: 0.8rem;
        }

        .bs-tooltip-end .tooltip-arrow::before,
        .bs-tooltip-auto[data-popper-placement^="right"] .tooltip-arrow::before {
            left: -1px;
            border-width: 0.4rem 0 0.4rem 0.4rem;
            border-left-color: #000;
        }

        .bs-tooltip-bottom,
        .bs-tooltip-auto[data-popper-placement^="bottom"] {
            padding: 0.4rem 0;
        }

        .bs-tooltip-bottom .tooltip-arrow,
        .bs-tooltip-auto[data-popper-placement^="bottom"] .tooltip-arrow {
            top: 0;
        }

        .bs-tooltip-bottom .tooltip-arrow::before,
        .bs-tooltip-auto[data-popper-placement^="bottom"] .tooltip-arrow::before {
            bottom: -1px;
            border-width: 0 0.4rem 0.4rem;
            border-bottom-color: #000;
        }

        .bs-tooltip-start,
        .bs-tooltip-auto[data-popper-placement^="left"] {
            padding: 0 0.4rem;
        }

        .bs-tooltip-start .tooltip-arrow,
        .bs-tooltip-auto[data-popper-placement^="left"] .tooltip-arrow {
            left: 0;
            width: 0.4rem;
            height: 0.8rem;
        }

        .bs-tooltip-start .tooltip-arrow::before,
        .bs-tooltip-auto[data-popper-placement^="left"] .tooltip-arrow::before {
            right: -1px;
            border-width: 0.4rem 0.4rem 0.4rem 0;
            border-right-color: #000;
        }

        .tooltip-inner {
            max-width: 200px;
            padding: 0.4rem 0.7rem;
            color: #fff;
            text-align: center;
            background-color: #000;
            border-radius: 0.25rem;
        }

        .popover {
            position: absolute;
            top: 0;
            left: 0;
            z-index: 1060;
            display: block;
            max-width: 276px;
            font-family: var(--bs-font-sans-serif);
            font-style: normal;
            font-weight: 400;
            line-height: 1.5;
            text-align: right;
            text-align: start;
            text-decoration: none;
            text-shadow: none;
            text-transform: none;
            letter-spacing: normal;
            word-break: normal;
            word-spacing: normal;
            white-space: normal;
            line-break: auto;
            font-size: 0.71094rem;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid #f6f6f6;
            border-radius: 0.4rem;
        }

        .popover .popover-arrow {
            position: absolute;
            display: block;
            width: 1rem;
            height: 0.5rem;
            margin: 0 0.4rem;
        }

        .popover .popover-arrow::before,
        .popover .popover-arrow::after {
            position: absolute;
            display: block;
            content: "";
            border-color: transparent;
            border-style: solid;
        }

        .bs-popover-top,
        .bs-popover-auto[data-popper-placement^="top"] {
            margin-bottom: 0.5rem !important;
        }

        .bs-popover-top>.popover-arrow,
        .bs-popover-auto[data-popper-placement^="top"]>.popover-arrow {
            bottom: calc(-0.5rem - 1px);
        }

        .bs-popover-top>.popover-arrow::before,
        .bs-popover-auto[data-popper-placement^="top"]>.popover-arrow::before {
            bottom: 0;
            border-width: 0.5rem 0.5rem 0;
            border-top-color: #f6f6f6;
        }

        .bs-popover-top>.popover-arrow::after,
        .bs-popover-auto[data-popper-placement^="top"]>.popover-arrow::after {
            bottom: 1px;
            border-width: 0.5rem 0.5rem 0;
            border-top-color: #fff;
        }

        .bs-popover-end,
        .bs-popover-auto[data-popper-placement^="right"] {
            margin-right: 0.5rem !important;
        }

        .bs-popover-end>.popover-arrow,
        .bs-popover-auto[data-popper-placement^="right"]>.popover-arrow {
            right: calc(-0.5rem - 1px);
            width: 0.5rem;
            height: 1rem;
            margin: 0.4rem 0;
        }

        .bs-popover-end>.popover-arrow::before,
        .bs-popover-auto[data-popper-placement^="right"]>.popover-arrow::before {
            right: 0;
            border-width: 0.5rem 0 0.5rem 0.5rem;
            border-left-color: #f6f6f6;
        }

        .bs-popover-end>.popover-arrow::after,
        .bs-popover-auto[data-popper-placement^="right"]>.popover-arrow::after {
            right: 1px;
            border-width: 0.5rem 0 0.5rem 0.5rem;
            border-left-color: #fff;
        }

        .bs-popover-bottom,
        .bs-popover-auto[data-popper-placement^="bottom"] {
            margin-top: 0.5rem !important;
        }

        .bs-popover-bottom>.popover-arrow,
        .bs-popover-auto[data-popper-placement^="bottom"]>.popover-arrow {
            top: calc(-0.5rem - 1px);
        }

        .bs-popover-bottom>.popover-arrow::before,
        .bs-popover-auto[data-popper-placement^="bottom"]>.popover-arrow::before {
            top: 0;
            border-width: 0 0.5rem 0.5rem 0.5rem;
            border-bottom-color: #f6f6f6;
        }

        .bs-popover-bottom>.popover-arrow::after,
        .bs-popover-auto[data-popper-placement^="bottom"]>.popover-arrow::after {
            top: 1px;
            border-width: 0 0.5rem 0.5rem 0.5rem;
            border-bottom-color: #fff;
        }

        .bs-popover-bottom .popover-header::before,
        .bs-popover-auto[data-popper-placement^="bottom"] .popover-header::before {
            position: absolute;
            top: 0;
            right: 50%;
            display: block;
            width: 1rem;
            margin-right: -0.5rem;
            content: "";
            border-bottom: 1px solid whitesmoke;
        }

        .bs-popover-start,
        .bs-popover-auto[data-popper-placement^="left"] {
            margin-left: 0.5rem !important;
        }

        .bs-popover-start>.popover-arrow,
        .bs-popover-auto[data-popper-placement^="left"]>.popover-arrow {
            left: calc(-0.5rem - 1px);
            width: 0.5rem;
            height: 1rem;
            margin: 0.4rem 0;
        }

        .bs-popover-start>.popover-arrow::before,
        .bs-popover-auto[data-popper-placement^="left"]>.popover-arrow::before {
            left: 0;
            border-width: 0.5rem 0.5rem 0.5rem 0;
            border-right-color: #f6f6f6;
        }

        .bs-popover-start>.popover-arrow::after,
        .bs-popover-auto[data-popper-placement^="left"]>.popover-arrow::after {
            left: 1px;
            border-width: 0.5rem 0.5rem 0.5rem 0;
            border-right-color: #fff;
        }

        .popover-header {
            padding: 0.5rem 1rem;
            margin-bottom: 0;
            font-size: 0.8125rem;
            background-color: whitesmoke;
            border-bottom: 1px solid #dddddd;
            border-top-right-radius: calc(0.4rem - 1px);
            border-top-left-radius: calc(0.4rem - 1px);
        }

        .popover-header:empty {
            display: none;
        }

        .popover-body {
            padding: 1rem 1rem;
            color: #495057;
        }

        .carousel {
            position: relative;
        }

        .carousel.pointer-event {
            -ms-touch-action: pan-y;
            touch-action: pan-y;
        }

        .carousel-inner {
            position: relative;
            width: 100%;
            overflow: hidden;
        }

        .carousel-inner::after {
            display: block;
            clear: both;
            content: "";
        }

        .carousel-item {
            position: relative;
            display: none;
            float: right;
            width: 100%;
            margin-left: -100%;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            -webkit-transition: -webkit-transform 0.6s ease-in-out;
            transition: -webkit-transform 0.6s ease-in-out;
            transition: transform 0.6s ease-in-out;
            transition: transform 0.6s ease-in-out, -webkit-transform 0.6s ease-in-out;
        }

        @media (prefers-reduced-motion: reduce) {
            .carousel-item {
                -webkit-transition: none;
                transition: none;
            }
        }

        .carousel-item.active,
        .carousel-item-next,
        .carousel-item-prev {
            display: block;
        }

        .carousel-item-next:not(.carousel-item-start),
        .active.carousel-item-end {
            -webkit-transform: translateX(100%);
            transform: translateX(100%);
        }

        .carousel-item-prev:not(.carousel-item-end),
        .active.carousel-item-start {
            -webkit-transform: translateX(-100%);
            transform: translateX(-100%);
        }

        .carousel-fade .carousel-item {
            opacity: 0;
            -webkit-transition-property: opacity;
            transition-property: opacity;
            -webkit-transform: none;
            transform: none;
        }

        .carousel-fade .carousel-item.active,
        .carousel-fade .carousel-item-next.carousel-item-start,
        .carousel-fade .carousel-item-prev.carousel-item-end {
            z-index: 1;
            opacity: 1;
        }

        .carousel-fade .active.carousel-item-start,
        .carousel-fade .active.carousel-item-end {
            z-index: 0;
            opacity: 0;
            -webkit-transition: opacity 0s 0.6s;
            transition: opacity 0s 0.6s;
        }

        @media (prefers-reduced-motion: reduce) {

            .carousel-fade .active.carousel-item-start,
            .carousel-fade .active.carousel-item-end {
                -webkit-transition: none;
                transition: none;
            }
        }

        .carousel-control-prev,
        .carousel-control-next {
            position: absolute;
            top: 0;
            bottom: 0;
            z-index: 1;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            width: 15%;
            color: #fff;
            text-align: center;
            opacity: 0.5;
            -webkit-transition: opacity 0.15s ease;
            transition: opacity 0.15s ease;
        }

        @media (prefers-reduced-motion: reduce) {

            .carousel-control-prev,
            .carousel-control-next {
                -webkit-transition: none;
                transition: none;
            }
        }

        .carousel-control-prev:hover,
        .carousel-control-prev:focus,
        .carousel-control-next:hover,
        .carousel-control-next:focus {
            color: #fff;
            text-decoration: none;
            outline: 0;
            opacity: 0.9;
        }

        .carousel-control-prev {
            right: 0;
        }

        .carousel-control-next {
            left: 0;
        }

        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            display: inline-block;
            width: 2rem;
            height: 2rem;
            background-repeat: no-repeat;
            background-position: 50%;
            background-size: 100% 100%;
        }

        .carousel-control-next-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23fff'%3e%3cpath d='M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z'/%3e%3c/svg%3e");
        }

        .carousel-control-prev-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23fff'%3e%3cpath d='M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
        }

        .carousel-indicators {
            position: absolute;
            left: 0;
            bottom: 0;
            right: 0;
            z-index: 2;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            padding-right: 0;
            margin-left: 15%;
            margin-right: 15%;
            list-style: none;
        }

        .carousel-indicators li {
            -webkit-box-sizing: content-box;
            box-sizing: content-box;
            -webkit-box-flex: 0;
            -ms-flex: 0 1 auto;
            flex: 0 1 auto;
            width: 30px;
            height: 3px;
            margin-left: 3px;
            margin-right: 3px;
            text-indent: -999px;
            cursor: pointer;
            background-color: #fff;
            background-clip: padding-box;
            border-top: 10px solid transparent;
            border-bottom: 10px solid transparent;
            opacity: 0.5;
            -webkit-transition: opacity 0.6s ease;
            transition: opacity 0.6s ease;
        }

        @media (prefers-reduced-motion: reduce) {
            .carousel-indicators li {
                -webkit-transition: none;
                transition: none;
            }
        }

        .carousel-indicators .active {
            opacity: 1;
        }

        .carousel-caption {
            position: absolute;
            left: 15%;
            bottom: 1.25rem;
            right: 15%;
            padding-top: 1.25rem;
            padding-bottom: 1.25rem;
            color: #fff;
            text-align: center;
        }

        .carousel-dark .carousel-control-next-icon,
        .carousel-dark .carousel-control-prev-icon {
            -webkit-filter: invert(1) grayscale(100);
            filter: invert(1) grayscale(100);
        }

        .carousel-dark .carousel-indicators li {
            background-color: #000;
        }

        .carousel-dark .carousel-caption {
            color: #000;
        }

        @-webkit-keyframes spinner-border {
            to {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }

        @keyframes spinner-border {
            to {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }

        .spinner-border {
            display: inline-block;
            width: 2rem;
            height: 2rem;
            vertical-align: text-bottom;
            border: 0.25em solid currentColor;
            border-left-color: transparent;
            border-radius: 50%;
            -webkit-animation: 0.75s linear infinite spinner-border;
            animation: 0.75s linear infinite spinner-border;
        }

        .spinner-border-sm {
            width: 1rem;
            height: 1rem;
            border-width: 0.2em;
        }

        @-webkit-keyframes spinner-grow {
            0% {
                -webkit-transform: scale(0);
                transform: scale(0);
            }

            50% {
                opacity: 1;
                -webkit-transform: none;
                transform: none;
            }
        }

        @keyframes spinner-grow {
            0% {
                -webkit-transform: scale(0);
                transform: scale(0);
            }

            50% {
                opacity: 1;
                -webkit-transform: none;
                transform: none;
            }
        }

        .spinner-grow {
            display: inline-block;
            width: 2rem;
            height: 2rem;
            vertical-align: text-bottom;
            background-color: currentColor;
            border-radius: 50%;
            opacity: 0;
            -webkit-animation: 0.75s linear infinite spinner-grow;
            animation: 0.75s linear infinite spinner-grow;
        }

        .spinner-grow-sm {
            width: 1rem;
            height: 1rem;
        }

        @media (prefers-reduced-motion: reduce) {

            .spinner-border,
            .spinner-grow {
                -webkit-animation-duration: 1.5s;
                animation-duration: 1.5s;
            }
        }

        .clearfix::after {
            display: block;
            clear: both;
            content: "";
        }

        .link-primary {
            color: #556ee6;
        }

        .link-primary:hover,
        .link-primary:focus {
            color: #4458b8;
        }

        .link-secondary {
            color: #74788d;
        }

        .link-secondary:hover,
        .link-secondary:focus {
            color: #5d6071;
        }

        .link-success {
            color: #34c38f;
        }

        .link-success:hover,
        .link-success:focus {
            color: #2a9c72;
        }

        .link-info {
            color: #50a5f1;
        }

        .link-info:hover,
        .link-info:focus {
            color: #4084c1;
        }

        .link-warning {
            color: #f1b44c;
        }

        .link-warning:hover,
        .link-warning:focus {
            color: #c1903d;
        }

        .link-danger {
            color: #f46a6a;
        }

        .link-danger:hover,
        .link-danger:focus {
            color: #c35555;
        }

        .link-pink {
            color: #e83e8c;
        }

        .link-pink:hover,
        .link-pink:focus {
            color: #ba3270;
        }

        .link-light {
            color: #eff2f7;
        }

        .link-light:hover,
        .link-light:focus {
            color: #f2f5f9;
        }

        .link-dark {
            color: #343a40;
        }

        .link-dark:hover,
        .link-dark:focus {
            color: #2a2e33;
        }

        .ratio {
            position: relative;
            width: 100%;
        }

        .ratio::before {
            display: block;
            padding-top: var(--aspect-ratio);
            content: "";
        }

        .ratio>* {
            position: absolute;
            top: 0;
            right: 0;
            width: 100%;
            height: 100%;
        }

        .ratio-1x1 {
            --aspect-ratio: 100%;
        }

        .ratio-4x3 {
            --aspect-ratio: calc(3 / 4 * 100%);
        }

        .ratio-16x9 {
            --aspect-ratio: calc(9 / 16 * 100%);
        }

        .ratio-21x9 {
            --aspect-ratio: calc(9 / 21 * 100%);
        }

        .fixed-top {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1030;
        }

        .fixed-bottom {
            position: fixed;
            left: 0;
            bottom: 0;
            right: 0;
            z-index: 1030;
        }

        .sticky-top {
            position: sticky;
            top: 0;
            z-index: 1020;
        }

        @media (min-width: 576px) {
            .sticky-sm-top {
                position: sticky;
                top: 0;
                z-index: 1020;
            }
        }

        @media (min-width: 768px) {
            .sticky-md-top {
                position: sticky;
                top: 0;
                z-index: 1020;
            }
        }

        @media (min-width: 992px) {
            .sticky-lg-top {
                position: sticky;
                top: 0;
                z-index: 1020;
            }
        }

        @media (min-width: 1200px) {
            .sticky-xl-top {
                position: sticky;
                top: 0;
                z-index: 1020;
            }
        }

        @media (min-width: 1400px) {
            .sticky-xxl-top {
                position: sticky;
                top: 0;
                z-index: 1020;
            }
        }

        .visually-hidden,
        .visually-hidden-focusable:not(:focus) {
            position: absolute !important;
            width: 1px !important;
            height: 1px !important;
            padding: 0 !important;
            margin: -1px !important;
            overflow: hidden !important;
            clip: rect(0, 0, 0, 0) !important;
            white-space: nowrap !important;
            border: 0 !important;
        }

        .stretched-link::after {
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            z-index: 1;
            content: "";
        }

        .text-truncate {
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        .align-baseline {
            vertical-align: baseline !important;
        }

        .align-top {
            vertical-align: top !important;
        }

        .align-middle {
            vertical-align: middle !important;
        }

        .align-bottom {
            vertical-align: bottom !important;
        }

        .align-text-bottom {
            vertical-align: text-bottom !important;
        }

        .align-text-top {
            vertical-align: text-top !important;
        }

        .float-start {
            float: right !important;
        }

        .float-end {
            float: left !important;
        }

        .float-none {
            float: none !important;
        }

        .overflow-auto {
            overflow: auto !important;
        }

        .overflow-hidden {
            overflow: hidden !important;
        }

        .overflow-visible {
            overflow: visible !important;
        }

        .overflow-scroll {
            overflow: scroll !important;
        }

        .d-inline {
            display: inline !important;
        }

        .d-inline-block {
            display: inline-block !important;
        }

        .d-block {
            display: block !important;
        }

        .d-grid {
            display: grid !important;
        }

        .d-table {
            display: table !important;
        }

        .d-table-row {
            display: table-row !important;
        }

        .d-table-cell {
            display: table-cell !important;
        }

        .d-flex {
            display: -webkit-box !important;
            display: -ms-flexbox !important;
            display: flex !important;
        }

        .d-inline-flex {
            display: -webkit-inline-box !important;
            display: -ms-inline-flexbox !important;
            display: inline-flex !important;
        }

        .d-none {
            display: none !important;
        }

        .shadow {
            -webkit-box-shadow: 0 0.75rem 1.5rem rgba(18, 38, 63, 0.03) !important;
            box-shadow: 0 0.75rem 1.5rem rgba(18, 38, 63, 0.03) !important;
        }

        .shadow-sm {
            -webkit-box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075) !important;
            box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075) !important;
        }

        .shadow-lg {
            -webkit-box-shadow: 0 1rem 3rem rgba(0, 0, 0, 0.175) !important;
            box-shadow: 0 1rem 3rem rgba(0, 0, 0, 0.175) !important;
        }

        .shadow-none {
            -webkit-box-shadow: none !important;
            box-shadow: none !important;
        }

        .position-static {
            position: static !important;
        }

        .position-relative {
            position: relative !important;
        }

        .position-absolute {
            position: absolute !important;
        }

        .position-fixed {
            position: fixed !important;
        }

        .position-sticky {
            position: sticky !important;
        }

        .top-0 {
            top: 0 !important;
        }

        .top-50 {
            top: 50% !important;
        }

        .top-100 {
            top: 100% !important;
        }

        .bottom-0 {
            bottom: 0 !important;
        }

        .bottom-50 {
            bottom: 50% !important;
        }

        .bottom-100 {
            bottom: 100% !important;
        }

        .start-0 {
            right: 0 !important;
        }

        .start-50 {
            right: 50% !important;
        }

        .start-100 {
            right: 100% !important;
        }

        .end-0 {
            left: 0 !important;
        }

        .end-50 {
            left: 50% !important;
        }

        .end-100 {
            left: 100% !important;
        }

        .translate-middle {
            -webkit-transform: translate(50%, -50%) !important;
            transform: translate(50%, -50%) !important;
        }

        .translate-middle-x {
            -webkit-transform: translateX(50%) !important;
            transform: translateX(50%) !important;
        }

        .translate-middle-y {
            -webkit-transform: translateY(-50%) !important;
            transform: translateY(-50%) !important;
        }

        .border {
            border: 1px solid #eff2f7 !important;
        }

        .border-0 {
            border: 0 !important;
        }

        .border-top {
            border-top: 1px solid #eff2f7 !important;
        }

        .border-top-0 {
            border-top: 0 !important;
        }

        .border-end {
            border-left: 1px solid #eff2f7 !important;
        }

        .border-end-0 {
            border-left: 0 !important;
        }

        .border-bottom {
            border-bottom: 1px solid #eff2f7 !important;
        }

        .border-bottom-0 {
            border-bottom: 0 !important;
        }

        .border-start {
            border-right: 1px solid #eff2f7 !important;
        }

        .border-start-0 {
            border-right: 0 !important;
        }

        .border-primary {
            border-color: #556ee6 !important;
        }

        .border-secondary {
            border-color: #74788d !important;
        }

        .border-success {
            border-color: #34c38f !important;
        }

        .border-info {
            border-color: #50a5f1 !important;
        }

        .border-warning {
            border-color: #f1b44c !important;
        }

        .border-danger {
            border-color: #f46a6a !important;
        }

        .border-pink {
            border-color: #e83e8c !important;
        }

        .border-light {
            border-color: #eff2f7 !important;
        }

        .border-dark {
            border-color: #343a40 !important;
        }

        .border-white {
            border-color: #fff !important;
        }

        .border-0 {
            border-width: 0 !important;
        }

        .border-1 {
            border-width: 1px !important;
        }

        .border-2 {
            border-width: 2px !important;
        }

        .border-3 {
            border-width: 3px !important;
        }

        .border-4 {
            border-width: 4px !important;
        }

        .border-5 {
            border-width: 5px !important;
        }

        .w-25 {
            width: 25% !important;
        }

        .w-50 {
            width: 50% !important;
        }

        .w-75 {
            width: 75% !important;
        }

        .w-100 {
            width: 100% !important;
        }

        .w-auto {
            width: auto !important;
        }

        .mw-100 {
            max-width: 100% !important;
        }

        .vw-100 {
            width: 100vw !important;
        }

        .min-vw-100 {
            min-width: 100vw !important;
        }

        .h-25 {
            height: 25% !important;
        }

        .h-50 {
            height: 50% !important;
        }

        .h-75 {
            height: 75% !important;
        }

        .h-100 {
            height: 100% !important;
        }

        .h-auto {
            height: auto !important;
        }

        .mh-100 {
            max-height: 100% !important;
        }

        .vh-100 {
            height: 100vh !important;
        }

        .min-vh-100 {
            min-height: 100vh !important;
        }

        .flex-fill {
            -webkit-box-flex: 1 !important;
            -ms-flex: 1 1 auto !important;
            flex: 1 1 auto !important;
        }

        .flex-row {
            -webkit-box-orient: horizontal !important;
            -webkit-box-direction: normal !important;
            -ms-flex-direction: row !important;
            flex-direction: row !important;
        }

        .flex-column {
            -webkit-box-orient: vertical !important;
            -webkit-box-direction: normal !important;
            -ms-flex-direction: column !important;
            flex-direction: column !important;
        }

        .flex-row-reverse {
            -webkit-box-orient: horizontal !important;
            -webkit-box-direction: reverse !important;
            -ms-flex-direction: row-reverse !important;
            flex-direction: row-reverse !important;
        }

        .flex-column-reverse {
            -webkit-box-orient: vertical !important;
            -webkit-box-direction: reverse !important;
            -ms-flex-direction: column-reverse !important;
            flex-direction: column-reverse !important;
        }

        .flex-grow-0 {
            -webkit-box-flex: 0 !important;
            -ms-flex-positive: 0 !important;
            flex-grow: 0 !important;
        }

        .flex-grow-1 {
            -webkit-box-flex: 1 !important;
            -ms-flex-positive: 1 !important;
            flex-grow: 1 !important;
        }

        .flex-shrink-0 {
            -ms-flex-negative: 0 !important;
            flex-shrink: 0 !important;
        }

        .flex-shrink-1 {
            -ms-flex-negative: 1 !important;
            flex-shrink: 1 !important;
        }

        .flex-wrap {
            -ms-flex-wrap: wrap !important;
            flex-wrap: wrap !important;
        }

        .flex-nowrap {
            -ms-flex-wrap: nowrap !important;
            flex-wrap: nowrap !important;
        }

        .flex-wrap-reverse {
            -ms-flex-wrap: wrap-reverse !important;
            flex-wrap: wrap-reverse !important;
        }

        .gap-0 {
            gap: 0 !important;
        }

        .gap-1 {
            gap: 0.25rem !important;
        }

        .gap-2 {
            gap: 0.5rem !important;
        }

        .gap-3 {
            gap: 1rem !important;
        }

        .gap-4 {
            gap: 1.5rem !important;
        }

        .gap-5 {
            gap: 3rem !important;
        }

        .justify-content-start {
            -webkit-box-pack: start !important;
            -ms-flex-pack: start !important;
            justify-content: flex-start !important;
        }

        .justify-content-end {
            -webkit-box-pack: end !important;
            -ms-flex-pack: end !important;
            justify-content: flex-end !important;
        }

        .justify-content-center {
            -webkit-box-pack: center !important;
            -ms-flex-pack: center !important;
            justify-content: center !important;
        }

        .justify-content-between {
            -webkit-box-pack: justify !important;
            -ms-flex-pack: justify !important;
            justify-content: space-between !important;
        }

        .justify-content-around {
            -ms-flex-pack: distribute !important;
            justify-content: space-around !important;
        }

        .justify-content-evenly {
            -webkit-box-pack: space-evenly !important;
            -ms-flex-pack: space-evenly !important;
            justify-content: space-evenly !important;
        }

        .align-items-start {
            -webkit-box-align: start !important;
            -ms-flex-align: start !important;
            align-items: flex-start !important;
        }

        .align-items-end {
            -webkit-box-align: end !important;
            -ms-flex-align: end !important;
            align-items: flex-end !important;
        }

        .align-items-center {
            -webkit-box-align: center !important;
            -ms-flex-align: center !important;
            align-items: center !important;
        }

        .align-items-baseline {
            -webkit-box-align: baseline !important;
            -ms-flex-align: baseline !important;
            align-items: baseline !important;
        }

        .align-items-stretch {
            -webkit-box-align: stretch !important;
            -ms-flex-align: stretch !important;
            align-items: stretch !important;
        }

        .align-content-start {
            -ms-flex-line-pack: start !important;
            align-content: flex-start !important;
        }

        .align-content-end {
            -ms-flex-line-pack: end !important;
            align-content: flex-end !important;
        }

        .align-content-center {
            -ms-flex-line-pack: center !important;
            align-content: center !important;
        }

        .align-content-between {
            -ms-flex-line-pack: justify !important;
            align-content: space-between !important;
        }

        .align-content-around {
            -ms-flex-line-pack: distribute !important;
            align-content: space-around !important;
        }

        .align-content-stretch {
            -ms-flex-line-pack: stretch !important;
            align-content: stretch !important;
        }

        .align-self-auto {
            -ms-flex-item-align: auto !important;
            align-self: auto !important;
        }

        .align-self-start {
            -ms-flex-item-align: start !important;
            align-self: flex-start !important;
        }

        .align-self-end {
            -ms-flex-item-align: end !important;
            align-self: flex-end !important;
        }

        .align-self-center {
            -ms-flex-item-align: center !important;
            align-self: center !important;
        }

        .align-self-baseline {
            -ms-flex-item-align: baseline !important;
            align-self: baseline !important;
        }

        .align-self-stretch {
            -ms-flex-item-align: stretch !important;
            align-self: stretch !important;
        }

        .order-first {
            -webkit-box-ordinal-group: 0 !important;
            -ms-flex-order: -1 !important;
            order: -1 !important;
        }

        .order-0 {
            -webkit-box-ordinal-group: 1 !important;
            -ms-flex-order: 0 !important;
            order: 0 !important;
        }

        .order-1 {
            -webkit-box-ordinal-group: 2 !important;
            -ms-flex-order: 1 !important;
            order: 1 !important;
        }

        .order-2 {
            -webkit-box-ordinal-group: 3 !important;
            -ms-flex-order: 2 !important;
            order: 2 !important;
        }

        .order-3 {
            -webkit-box-ordinal-group: 4 !important;
            -ms-flex-order: 3 !important;
            order: 3 !important;
        }

        .order-4 {
            -webkit-box-ordinal-group: 5 !important;
            -ms-flex-order: 4 !important;
            order: 4 !important;
        }

        .order-5 {
            -webkit-box-ordinal-group: 6 !important;
            -ms-flex-order: 5 !important;
            order: 5 !important;
        }

        .order-last {
            -webkit-box-ordinal-group: 7 !important;
            -ms-flex-order: 6 !important;
            order: 6 !important;
        }

        .m-0 {
            margin: 0 !important;
        }

        .m-1 {
            margin: 0.25rem !important;
        }

        .m-2 {
            margin: 0.5rem !important;
        }

        .m-3 {
            margin: 1rem !important;
        }

        .m-4 {
            margin: 1.5rem !important;
        }

        .m-5 {
            margin: 3rem !important;
        }

        .m-auto {
            margin: auto !important;
        }

        .mx-0 {
            margin-left: 0 !important;
            margin-right: 0 !important;
        }

        .mx-1 {
            margin-left: 0.25rem !important;
            margin-right: 0.25rem !important;
        }

        .mx-2 {
            margin-left: 0.5rem !important;
            margin-right: 0.5rem !important;
        }

        .mx-3 {
            margin-left: 1rem !important;
            margin-right: 1rem !important;
        }

        .mx-4 {
            margin-left: 1.5rem !important;
            margin-right: 1.5rem !important;
        }

        .mx-5 {
            margin-left: 3rem !important;
            margin-right: 3rem !important;
        }

        .mx-auto {
            margin-left: auto !important;
            margin-right: auto !important;
        }

        .my-0 {
            margin-top: 0 !important;
            margin-bottom: 0 !important;
        }

        .my-1 {
            margin-top: 0.25rem !important;
            margin-bottom: 0.25rem !important;
        }

        .my-2 {
            margin-top: 0.5rem !important;
            margin-bottom: 0.5rem !important;
        }

        .my-3 {
            margin-top: 1rem !important;
            margin-bottom: 1rem !important;
        }

        .my-4 {
            margin-top: 1.5rem !important;
            margin-bottom: 1.5rem !important;
        }

        .my-5 {
            margin-top: 3rem !important;
            margin-bottom: 3rem !important;
        }

        .my-auto {
            margin-top: auto !important;
            margin-bottom: auto !important;
        }

        .mt-0 {
            margin-top: 0 !important;
        }

        .mt-1 {
            margin-top: 0.25rem !important;
        }

        .mt-2 {
            margin-top: 0.5rem !important;
        }

        .mt-3 {
            margin-top: 1rem !important;
        }

        .mt-4 {
            margin-top: 1.5rem !important;
        }

        .mt-5 {
            margin-top: 3rem !important;
        }

        .mt-auto {
            margin-top: auto !important;
        }

        .me-0 {
            margin-left: 0 !important;
        }

        .me-1 {
            margin-left: 0.25rem !important;
        }

        .me-2 {
            margin-left: 0.5rem !important;
        }

        .me-3 {
            margin-left: 1rem !important;
        }

        .me-4 {
            margin-left: 1.5rem !important;
        }

        .me-5 {
            margin-left: 3rem !important;
        }

        .me-auto {
            margin-left: auto !important;
        }

        .mb-0 {
            margin-bottom: 0 !important;
        }

        .mb-1 {
            margin-bottom: 0.25rem !important;
        }

        .mb-2 {
            margin-bottom: 0.5rem !important;
        }

        .mb-3 {
            margin-bottom: 1rem !important;
        }

        .mb-4 {
            margin-bottom: 1.5rem !important;
        }

        .mb-5 {
            margin-bottom: 3rem !important;
        }

        .mb-auto {
            margin-bottom: auto !important;
        }

        .ms-0 {
            margin-right: 0 !important;
        }

        .ms-1 {
            margin-right: 0.25rem !important;
        }

        .ms-2 {
            margin-right: 0.5rem !important;
        }

        .ms-3 {
            margin-right: 1rem !important;
        }

        .ms-4 {
            margin-right: 1.5rem !important;
        }

        .ms-5 {
            margin-right: 3rem !important;
        }

        .ms-auto {
            margin-right: auto !important;
        }

        .m-n1 {
            margin: -0.25rem !important;
        }

        .m-n2 {
            margin: -0.5rem !important;
        }

        .m-n3 {
            margin: -1rem !important;
        }

        .m-n4 {
            margin: -1.5rem !important;
        }

        .m-n5 {
            margin: -3rem !important;
        }

        .mx-n1 {
            margin-left: -0.25rem !important;
            margin-right: -0.25rem !important;
        }

        .mx-n2 {
            margin-left: -0.5rem !important;
            margin-right: -0.5rem !important;
        }

        .mx-n3 {
            margin-left: -1rem !important;
            margin-right: -1rem !important;
        }

        .mx-n4 {
            margin-left: -1.5rem !important;
            margin-right: -1.5rem !important;
        }

        .mx-n5 {
            margin-left: -3rem !important;
            margin-right: -3rem !important;
        }

        .my-n1 {
            margin-top: -0.25rem !important;
            margin-bottom: -0.25rem !important;
        }

        .my-n2 {
            margin-top: -0.5rem !important;
            margin-bottom: -0.5rem !important;
        }

        .my-n3 {
            margin-top: -1rem !important;
            margin-bottom: -1rem !important;
        }

        .my-n4 {
            margin-top: -1.5rem !important;
            margin-bottom: -1.5rem !important;
        }

        .my-n5 {
            margin-top: -3rem !important;
            margin-bottom: -3rem !important;
        }

        .mt-n1 {
            margin-top: -0.25rem !important;
        }

        .mt-n2 {
            margin-top: -0.5rem !important;
        }

        .mt-n3 {
            margin-top: -1rem !important;
        }

        .mt-n4 {
            margin-top: -1.5rem !important;
        }

        .mt-n5 {
            margin-top: -3rem !important;
        }

        .me-n1 {
            margin-left: -0.25rem !important;
        }

        .me-n2 {
            margin-left: -0.5rem !important;
        }

        .me-n3 {
            margin-left: -1rem !important;
        }

        .me-n4 {
            margin-left: -1.5rem !important;
        }

        .me-n5 {
            margin-left: -3rem !important;
        }

        .mb-n1 {
            margin-bottom: -0.25rem !important;
        }

        .mb-n2 {
            margin-bottom: -0.5rem !important;
        }

        .mb-n3 {
            margin-bottom: -1rem !important;
        }

        .mb-n4 {
            margin-bottom: -1.5rem !important;
        }

        .mb-n5 {
            margin-bottom: -3rem !important;
        }

        .ms-n1 {
            margin-right: -0.25rem !important;
        }

        .ms-n2 {
            margin-right: -0.5rem !important;
        }

        .ms-n3 {
            margin-right: -1rem !important;
        }

        .ms-n4 {
            margin-right: -1.5rem !important;
        }

        .ms-n5 {
            margin-right: -3rem !important;
        }

        .p-0 {
            padding: 0 !important;
        }

        .p-1 {
            padding: 0.25rem !important;
        }

        .p-2 {
            padding: 0.5rem !important;
        }

        .p-3 {
            padding: 1rem !important;
        }

        .p-4 {
            padding: 1.5rem !important;
        }

        .p-5 {
            padding: 3rem !important;
        }

        .px-0 {
            padding-left: 0 !important;
            padding-right: 0 !important;
        }

        .px-1 {
            padding-left: 0.25rem !important;
            padding-right: 0.25rem !important;
        }

        .px-2 {
            padding-left: 0.5rem !important;
            padding-right: 0.5rem !important;
        }

        .px-3 {
            padding-left: 1rem !important;
            padding-right: 1rem !important;
        }

        .px-4 {
            padding-left: 1.5rem !important;
            padding-right: 1.5rem !important;
        }

        .px-5 {
            padding-left: 3rem !important;
            padding-right: 3rem !important;
        }

        .py-0 {
            padding-top: 0 !important;
            padding-bottom: 0 !important;
        }

        .py-1 {
            padding-top: 0.25rem !important;
            padding-bottom: 0.25rem !important;
        }

        .py-2 {
            padding-top: 0.5rem !important;
            padding-bottom: 0.5rem !important;
        }

        .py-3 {
            padding-top: 1rem !important;
            padding-bottom: 1rem !important;
        }

        .py-4 {
            padding-top: 1.5rem !important;
            padding-bottom: 1.5rem !important;
        }

        .py-5 {
            padding-top: 3rem !important;
            padding-bottom: 3rem !important;
        }

        .pt-0 {
            padding-top: 0 !important;
        }

        .pt-1 {
            padding-top: 0.25rem !important;
        }

        .pt-2 {
            padding-top: 0.5rem !important;
        }

        .pt-3 {
            padding-top: 1rem !important;
        }

        .pt-4 {
            padding-top: 1.5rem !important;
        }

        .pt-5 {
            padding-top: 3rem !important;
        }

        .pe-0 {
            padding-left: 0 !important;
        }

        .pe-1 {
            padding-left: 0.25rem !important;
        }

        .pe-2 {
            padding-left: 0.5rem !important;
        }

        .pe-3 {
            padding-left: 1rem !important;
        }

        .pe-4 {
            padding-left: 1.5rem !important;
        }

        .pe-5 {
            padding-left: 3rem !important;
        }

        .pb-0 {
            padding-bottom: 0 !important;
        }

        .pb-1 {
            padding-bottom: 0.25rem !important;
        }

        .pb-2 {
            padding-bottom: 0.5rem !important;
        }

        .pb-3 {
            padding-bottom: 1rem !important;
        }

        .pb-4 {
            padding-bottom: 1.5rem !important;
        }

        .pb-5 {
            padding-bottom: 3rem !important;
        }

        .ps-0 {
            padding-right: 0 !important;
        }

        .ps-1 {
            padding-right: 0.25rem !important;
        }

        .ps-2 {
            padding-right: 0.5rem !important;
        }

        .ps-3 {
            padding-right: 1rem !important;
        }

        .ps-4 {
            padding-right: 1.5rem !important;
        }

        .ps-5 {
            padding-right: 3rem !important;
        }

        .fs-1 {
            font-size: calc(1.32812rem + 0.9375vw) !important;
        }

        .fs-2 {
            font-size: calc(1.2875rem + 0.45vw) !important;
        }

        .fs-3 {
            font-size: calc(1.26719rem + 0.20625vw) !important;
        }

        .fs-4 {
            font-size: 1.21875rem !important;
        }

        .fs-5 {
            font-size: 1.01562rem !important;
        }

        .fs-6 {
            font-size: 0.8125rem !important;
        }

        .fst-italic {
            font-style: italic !important;
        }

        .fst-normal {
            font-style: normal !important;
        }

        .fw-light {
            font-weight: 300 !important;
        }

        .fw-lighter {
            font-weight: lighter !important;
        }

        .fw-normal {
            font-weight: 400 !important;
        }

        .fw-bold {
            font-weight: 600 !important;
        }

        .fw-bolder {
            font-weight: bolder !important;
        }

        .text-lowercase {
            text-transform: lowercase !important;
        }

        .text-uppercase {
            text-transform: uppercase !important;
        }

        .text-capitalize {
            text-transform: capitalize !important;
        }

        .text-start {
            text-align: right !important;
        }

        .text-end {
            text-align: left !important;
        }

        .text-center {
            text-align: center !important;
        }

        .text-primary {
            color: #556ee6 !important;
        }

        .text-secondary {
            color: #74788d !important;
        }

        .text-success {
            color: #34c38f !important;
        }

        .text-info {
            color: #50a5f1 !important;
        }

        .text-warning {
            color: #f1b44c !important;
        }

        .text-danger {
            color: #f46a6a !important;
        }

        .text-pink {
            color: #e83e8c !important;
        }

        .text-light {
            color: #eff2f7 !important;
        }

        .text-dark {
            color: #343a40 !important;
        }

        .text-white {
            color: #fff !important;
        }

        .text-body {
            color: #495057 !important;
        }

        .text-muted {
            color: #74788d !important;
        }

        .text-black-50 {
            color: rgba(0, 0, 0, 0.5) !important;
        }

        .text-white-50 {
            color: rgba(255, 255, 255, 0.5) !important;
        }

        .text-reset {
            color: inherit !important;
        }

        .lh-1 {
            line-height: 1 !important;
        }

        .lh-sm {
            line-height: 1.25 !important;
        }

        .lh-base {
            line-height: 1.5 !important;
        }

        .lh-lg {
            line-height: 2 !important;
        }

        .bg-primary {
            background-color: #556ee6 !important;
        }

        .bg-secondary {
            background-color: #74788d !important;
        }

        .bg-success {
            background-color: #34c38f !important;
        }

        .bg-info {
            background-color: #50a5f1 !important;
        }

        .bg-warning {
            background-color: #f1b44c !important;
        }

        .bg-danger {
            background-color: #f46a6a !important;
        }

        .bg-pink {
            background-color: #e83e8c !important;
        }

        .bg-light {
            background-color: #eff2f7 !important;
        }

        .bg-dark {
            background-color: #343a40 !important;
        }

        .bg-body {
            background-color: #f8f8fb !important;
        }

        .bg-white {
            background-color: #fff !important;
        }

        .bg-transparent {
            background-color: transparent !important;
        }

        .bg-gradient {
            background-image: var(--bs-gradient) !important;
        }

        .text-wrap {
            white-space: normal !important;
        }

        .text-nowrap {
            white-space: nowrap !important;
        }

        .text-decoration-none {
            text-decoration: none !important;
        }

        .text-decoration-underline {
            text-decoration: underline !important;
        }

        .text-decoration-line-through {
            text-decoration: line-through !important;
        }

        .font-monospace {
            font-family: var(--bs-font-monospace) !important;
        }

        .user-select-all {
            -webkit-user-select: all !important;
            -moz-user-select: all !important;
            -ms-user-select: all !important;
            user-select: all !important;
        }

        .user-select-auto {
            -webkit-user-select: auto !important;
            -moz-user-select: auto !important;
            -ms-user-select: auto !important;
            user-select: auto !important;
        }

        .user-select-none {
            -webkit-user-select: none !important;
            -moz-user-select: none !important;
            -ms-user-select: none !important;
            user-select: none !important;
        }

        .pe-none {
            pointer-events: none !important;
        }

        .pe-auto {
            pointer-events: auto !important;
        }

        .rounded {
            border-radius: 0.25rem !important;
        }

        .rounded-0 {
            border-radius: 0 !important;
        }

        .rounded-1 {
            border-radius: 0.2rem !important;
        }

        .rounded-2 {
            border-radius: 0.25rem !important;
        }

        .rounded-3 {
            border-radius: 0.4rem !important;
        }

        .rounded-circle {
            border-radius: 50% !important;
        }

        .rounded-pill {
            border-radius: 50rem !important;
        }

        .rounded-top {
            border-top-right-radius: 0.25rem !important;
            border-top-left-radius: 0.25rem !important;
        }

        .rounded-end {
            border-top-left-radius: 0.25rem !important;
            border-bottom-left-radius: 0.25rem !important;
        }

        .rounded-bottom {
            border-bottom-left-radius: 0.25rem !important;
            border-bottom-right-radius: 0.25rem !important;
        }

        .rounded-start {
            border-bottom-right-radius: 0.25rem !important;
            border-top-right-radius: 0.25rem !important;
        }

        .visible {
            visibility: visible !important;
        }

        .invisible {
            visibility: hidden !important;
        }

        @media (min-width: 576px) {
            .float-sm-start {
                float: right !important;
            }

            .float-sm-end {
                float: left !important;
            }

            .float-sm-none {
                float: none !important;
            }

            .d-sm-inline {
                display: inline !important;
            }

            .d-sm-inline-block {
                display: inline-block !important;
            }

            .d-sm-block {
                display: block !important;
            }

            .d-sm-grid {
                display: grid !important;
            }

            .d-sm-table {
                display: table !important;
            }

            .d-sm-table-row {
                display: table-row !important;
            }

            .d-sm-table-cell {
                display: table-cell !important;
            }

            .d-sm-flex {
                display: -webkit-box !important;
                display: -ms-flexbox !important;
                display: flex !important;
            }

            .d-sm-inline-flex {
                display: -webkit-inline-box !important;
                display: -ms-inline-flexbox !important;
                display: inline-flex !important;
            }

            .d-sm-none {
                display: none !important;
            }

            .flex-sm-fill {
                -webkit-box-flex: 1 !important;
                -ms-flex: 1 1 auto !important;
                flex: 1 1 auto !important;
            }

            .flex-sm-row {
                -webkit-box-orient: horizontal !important;
                -webkit-box-direction: normal !important;
                -ms-flex-direction: row !important;
                flex-direction: row !important;
            }

            .flex-sm-column {
                -webkit-box-orient: vertical !important;
                -webkit-box-direction: normal !important;
                -ms-flex-direction: column !important;
                flex-direction: column !important;
            }

            .flex-sm-row-reverse {
                -webkit-box-orient: horizontal !important;
                -webkit-box-direction: reverse !important;
                -ms-flex-direction: row-reverse !important;
                flex-direction: row-reverse !important;
            }

            .flex-sm-column-reverse {
                -webkit-box-orient: vertical !important;
                -webkit-box-direction: reverse !important;
                -ms-flex-direction: column-reverse !important;
                flex-direction: column-reverse !important;
            }

            .flex-sm-grow-0 {
                -webkit-box-flex: 0 !important;
                -ms-flex-positive: 0 !important;
                flex-grow: 0 !important;
            }

            .flex-sm-grow-1 {
                -webkit-box-flex: 1 !important;
                -ms-flex-positive: 1 !important;
                flex-grow: 1 !important;
            }

            .flex-sm-shrink-0 {
                -ms-flex-negative: 0 !important;
                flex-shrink: 0 !important;
            }

            .flex-sm-shrink-1 {
                -ms-flex-negative: 1 !important;
                flex-shrink: 1 !important;
            }

            .flex-sm-wrap {
                -ms-flex-wrap: wrap !important;
                flex-wrap: wrap !important;
            }

            .flex-sm-nowrap {
                -ms-flex-wrap: nowrap !important;
                flex-wrap: nowrap !important;
            }

            .flex-sm-wrap-reverse {
                -ms-flex-wrap: wrap-reverse !important;
                flex-wrap: wrap-reverse !important;
            }

            .gap-sm-0 {
                gap: 0 !important;
            }

            .gap-sm-1 {
                gap: 0.25rem !important;
            }

            .gap-sm-2 {
                gap: 0.5rem !important;
            }

            .gap-sm-3 {
                gap: 1rem !important;
            }

            .gap-sm-4 {
                gap: 1.5rem !important;
            }

            .gap-sm-5 {
                gap: 3rem !important;
            }

            .justify-content-sm-start {
                -webkit-box-pack: start !important;
                -ms-flex-pack: start !important;
                justify-content: flex-start !important;
            }

            .justify-content-sm-end {
                -webkit-box-pack: end !important;
                -ms-flex-pack: end !important;
                justify-content: flex-end !important;
            }

            .justify-content-sm-center {
                -webkit-box-pack: center !important;
                -ms-flex-pack: center !important;
                justify-content: center !important;
            }

            .justify-content-sm-between {
                -webkit-box-pack: justify !important;
                -ms-flex-pack: justify !important;
                justify-content: space-between !important;
            }

            .justify-content-sm-around {
                -ms-flex-pack: distribute !important;
                justify-content: space-around !important;
            }

            .justify-content-sm-evenly {
                -webkit-box-pack: space-evenly !important;
                -ms-flex-pack: space-evenly !important;
                justify-content: space-evenly !important;
            }

            .align-items-sm-start {
                -webkit-box-align: start !important;
                -ms-flex-align: start !important;
                align-items: flex-start !important;
            }

            .align-items-sm-end {
                -webkit-box-align: end !important;
                -ms-flex-align: end !important;
                align-items: flex-end !important;
            }

            .align-items-sm-center {
                -webkit-box-align: center !important;
                -ms-flex-align: center !important;
                align-items: center !important;
            }

            .align-items-sm-baseline {
                -webkit-box-align: baseline !important;
                -ms-flex-align: baseline !important;
                align-items: baseline !important;
            }

            .align-items-sm-stretch {
                -webkit-box-align: stretch !important;
                -ms-flex-align: stretch !important;
                align-items: stretch !important;
            }

            .align-content-sm-start {
                -ms-flex-line-pack: start !important;
                align-content: flex-start !important;
            }

            .align-content-sm-end {
                -ms-flex-line-pack: end !important;
                align-content: flex-end !important;
            }

            .align-content-sm-center {
                -ms-flex-line-pack: center !important;
                align-content: center !important;
            }

            .align-content-sm-between {
                -ms-flex-line-pack: justify !important;
                align-content: space-between !important;
            }

            .align-content-sm-around {
                -ms-flex-line-pack: distribute !important;
                align-content: space-around !important;
            }

            .align-content-sm-stretch {
                -ms-flex-line-pack: stretch !important;
                align-content: stretch !important;
            }

            .align-self-sm-auto {
                -ms-flex-item-align: auto !important;
                align-self: auto !important;
            }

            .align-self-sm-start {
                -ms-flex-item-align: start !important;
                align-self: flex-start !important;
            }

            .align-self-sm-end {
                -ms-flex-item-align: end !important;
                align-self: flex-end !important;
            }

            .align-self-sm-center {
                -ms-flex-item-align: center !important;
                align-self: center !important;
            }

            .align-self-sm-baseline {
                -ms-flex-item-align: baseline !important;
                align-self: baseline !important;
            }

            .align-self-sm-stretch {
                -ms-flex-item-align: stretch !important;
                align-self: stretch !important;
            }

            .order-sm-first {
                -webkit-box-ordinal-group: 0 !important;
                -ms-flex-order: -1 !important;
                order: -1 !important;
            }

            .order-sm-0 {
                -webkit-box-ordinal-group: 1 !important;
                -ms-flex-order: 0 !important;
                order: 0 !important;
            }

            .order-sm-1 {
                -webkit-box-ordinal-group: 2 !important;
                -ms-flex-order: 1 !important;
                order: 1 !important;
            }

            .order-sm-2 {
                -webkit-box-ordinal-group: 3 !important;
                -ms-flex-order: 2 !important;
                order: 2 !important;
            }

            .order-sm-3 {
                -webkit-box-ordinal-group: 4 !important;
                -ms-flex-order: 3 !important;
                order: 3 !important;
            }

            .order-sm-4 {
                -webkit-box-ordinal-group: 5 !important;
                -ms-flex-order: 4 !important;
                order: 4 !important;
            }

            .order-sm-5 {
                -webkit-box-ordinal-group: 6 !important;
                -ms-flex-order: 5 !important;
                order: 5 !important;
            }

            .order-sm-last {
                -webkit-box-ordinal-group: 7 !important;
                -ms-flex-order: 6 !important;
                order: 6 !important;
            }

            .m-sm-0 {
                margin: 0 !important;
            }

            .m-sm-1 {
                margin: 0.25rem !important;
            }

            .m-sm-2 {
                margin: 0.5rem !important;
            }

            .m-sm-3 {
                margin: 1rem !important;
            }

            .m-sm-4 {
                margin: 1.5rem !important;
            }

            .m-sm-5 {
                margin: 3rem !important;
            }

            .m-sm-auto {
                margin: auto !important;
            }

            .mx-sm-0 {
                margin-left: 0 !important;
                margin-right: 0 !important;
            }

            .mx-sm-1 {
                margin-left: 0.25rem !important;
                margin-right: 0.25rem !important;
            }

            .mx-sm-2 {
                margin-left: 0.5rem !important;
                margin-right: 0.5rem !important;
            }

            .mx-sm-3 {
                margin-left: 1rem !important;
                margin-right: 1rem !important;
            }

            .mx-sm-4 {
                margin-left: 1.5rem !important;
                margin-right: 1.5rem !important;
            }

            .mx-sm-5 {
                margin-left: 3rem !important;
                margin-right: 3rem !important;
            }

            .mx-sm-auto {
                margin-left: auto !important;
                margin-right: auto !important;
            }

            .my-sm-0 {
                margin-top: 0 !important;
                margin-bottom: 0 !important;
            }

            .my-sm-1 {
                margin-top: 0.25rem !important;
                margin-bottom: 0.25rem !important;
            }

            .my-sm-2 {
                margin-top: 0.5rem !important;
                margin-bottom: 0.5rem !important;
            }

            .my-sm-3 {
                margin-top: 1rem !important;
                margin-bottom: 1rem !important;
            }

            .my-sm-4 {
                margin-top: 1.5rem !important;
                margin-bottom: 1.5rem !important;
            }

            .my-sm-5 {
                margin-top: 3rem !important;
                margin-bottom: 3rem !important;
            }

            .my-sm-auto {
                margin-top: auto !important;
                margin-bottom: auto !important;
            }

            .mt-sm-0 {
                margin-top: 0 !important;
            }

            .mt-sm-1 {
                margin-top: 0.25rem !important;
            }

            .mt-sm-2 {
                margin-top: 0.5rem !important;
            }

            .mt-sm-3 {
                margin-top: 1rem !important;
            }

            .mt-sm-4 {
                margin-top: 1.5rem !important;
            }

            .mt-sm-5 {
                margin-top: 3rem !important;
            }

            .mt-sm-auto {
                margin-top: auto !important;
            }

            .me-sm-0 {
                margin-left: 0 !important;
            }

            .me-sm-1 {
                margin-left: 0.25rem !important;
            }

            .me-sm-2 {
                margin-left: 0.5rem !important;
            }

            .me-sm-3 {
                margin-left: 1rem !important;
            }

            .me-sm-4 {
                margin-left: 1.5rem !important;
            }

            .me-sm-5 {
                margin-left: 3rem !important;
            }

            .me-sm-auto {
                margin-left: auto !important;
            }

            .mb-sm-0 {
                margin-bottom: 0 !important;
            }

            .mb-sm-1 {
                margin-bottom: 0.25rem !important;
            }

            .mb-sm-2 {
                margin-bottom: 0.5rem !important;
            }

            .mb-sm-3 {
                margin-bottom: 1rem !important;
            }

            .mb-sm-4 {
                margin-bottom: 1.5rem !important;
            }

            .mb-sm-5 {
                margin-bottom: 3rem !important;
            }

            .mb-sm-auto {
                margin-bottom: auto !important;
            }

            .ms-sm-0 {
                margin-right: 0 !important;
            }

            .ms-sm-1 {
                margin-right: 0.25rem !important;
            }

            .ms-sm-2 {
                margin-right: 0.5rem !important;
            }

            .ms-sm-3 {
                margin-right: 1rem !important;
            }

            .ms-sm-4 {
                margin-right: 1.5rem !important;
            }

            .ms-sm-5 {
                margin-right: 3rem !important;
            }

            .ms-sm-auto {
                margin-right: auto !important;
            }

            .m-sm-n1 {
                margin: -0.25rem !important;
            }

            .m-sm-n2 {
                margin: -0.5rem !important;
            }

            .m-sm-n3 {
                margin: -1rem !important;
            }

            .m-sm-n4 {
                margin: -1.5rem !important;
            }

            .m-sm-n5 {
                margin: -3rem !important;
            }

            .mx-sm-n1 {
                margin-left: -0.25rem !important;
                margin-right: -0.25rem !important;
            }

            .mx-sm-n2 {
                margin-left: -0.5rem !important;
                margin-right: -0.5rem !important;
            }

            .mx-sm-n3 {
                margin-left: -1rem !important;
                margin-right: -1rem !important;
            }

            .mx-sm-n4 {
                margin-left: -1.5rem !important;
                margin-right: -1.5rem !important;
            }

            .mx-sm-n5 {
                margin-left: -3rem !important;
                margin-right: -3rem !important;
            }

            .my-sm-n1 {
                margin-top: -0.25rem !important;
                margin-bottom: -0.25rem !important;
            }

            .my-sm-n2 {
                margin-top: -0.5rem !important;
                margin-bottom: -0.5rem !important;
            }

            .my-sm-n3 {
                margin-top: -1rem !important;
                margin-bottom: -1rem !important;
            }

            .my-sm-n4 {
                margin-top: -1.5rem !important;
                margin-bottom: -1.5rem !important;
            }

            .my-sm-n5 {
                margin-top: -3rem !important;
                margin-bottom: -3rem !important;
            }

            .mt-sm-n1 {
                margin-top: -0.25rem !important;
            }

            .mt-sm-n2 {
                margin-top: -0.5rem !important;
            }

            .mt-sm-n3 {
                margin-top: -1rem !important;
            }

            .mt-sm-n4 {
                margin-top: -1.5rem !important;
            }

            .mt-sm-n5 {
                margin-top: -3rem !important;
            }

            .me-sm-n1 {
                margin-left: -0.25rem !important;
            }

            .me-sm-n2 {
                margin-left: -0.5rem !important;
            }

            .me-sm-n3 {
                margin-left: -1rem !important;
            }

            .me-sm-n4 {
                margin-left: -1.5rem !important;
            }

            .me-sm-n5 {
                margin-left: -3rem !important;
            }

            .mb-sm-n1 {
                margin-bottom: -0.25rem !important;
            }

            .mb-sm-n2 {
                margin-bottom: -0.5rem !important;
            }

            .mb-sm-n3 {
                margin-bottom: -1rem !important;
            }

            .mb-sm-n4 {
                margin-bottom: -1.5rem !important;
            }

            .mb-sm-n5 {
                margin-bottom: -3rem !important;
            }

            .ms-sm-n1 {
                margin-right: -0.25rem !important;
            }

            .ms-sm-n2 {
                margin-right: -0.5rem !important;
            }

            .ms-sm-n3 {
                margin-right: -1rem !important;
            }

            .ms-sm-n4 {
                margin-right: -1.5rem !important;
            }

            .ms-sm-n5 {
                margin-right: -3rem !important;
            }

            .p-sm-0 {
                padding: 0 !important;
            }

            .p-sm-1 {
                padding: 0.25rem !important;
            }

            .p-sm-2 {
                padding: 0.5rem !important;
            }

            .p-sm-3 {
                padding: 1rem !important;
            }

            .p-sm-4 {
                padding: 1.5rem !important;
            }

            .p-sm-5 {
                padding: 3rem !important;
            }

            .px-sm-0 {
                padding-left: 0 !important;
                padding-right: 0 !important;
            }

            .px-sm-1 {
                padding-left: 0.25rem !important;
                padding-right: 0.25rem !important;
            }

            .px-sm-2 {
                padding-left: 0.5rem !important;
                padding-right: 0.5rem !important;
            }

            .px-sm-3 {
                padding-left: 1rem !important;
                padding-right: 1rem !important;
            }

            .px-sm-4 {
                padding-left: 1.5rem !important;
                padding-right: 1.5rem !important;
            }

            .px-sm-5 {
                padding-left: 3rem !important;
                padding-right: 3rem !important;
            }

            .py-sm-0 {
                padding-top: 0 !important;
                padding-bottom: 0 !important;
            }

            .py-sm-1 {
                padding-top: 0.25rem !important;
                padding-bottom: 0.25rem !important;
            }

            .py-sm-2 {
                padding-top: 0.5rem !important;
                padding-bottom: 0.5rem !important;
            }

            .py-sm-3 {
                padding-top: 1rem !important;
                padding-bottom: 1rem !important;
            }

            .py-sm-4 {
                padding-top: 1.5rem !important;
                padding-bottom: 1.5rem !important;
            }

            .py-sm-5 {
                padding-top: 3rem !important;
                padding-bottom: 3rem !important;
            }

            .pt-sm-0 {
                padding-top: 0 !important;
            }

            .pt-sm-1 {
                padding-top: 0.25rem !important;
            }

            .pt-sm-2 {
                padding-top: 0.5rem !important;
            }

            .pt-sm-3 {
                padding-top: 1rem !important;
            }

            .pt-sm-4 {
                padding-top: 1.5rem !important;
            }

            .pt-sm-5 {
                padding-top: 3rem !important;
            }

            .pe-sm-0 {
                padding-left: 0 !important;
            }

            .pe-sm-1 {
                padding-left: 0.25rem !important;
            }

            .pe-sm-2 {
                padding-left: 0.5rem !important;
            }

            .pe-sm-3 {
                padding-left: 1rem !important;
            }

            .pe-sm-4 {
                padding-left: 1.5rem !important;
            }

            .pe-sm-5 {
                padding-left: 3rem !important;
            }

            .pb-sm-0 {
                padding-bottom: 0 !important;
            }

            .pb-sm-1 {
                padding-bottom: 0.25rem !important;
            }

            .pb-sm-2 {
                padding-bottom: 0.5rem !important;
            }

            .pb-sm-3 {
                padding-bottom: 1rem !important;
            }

            .pb-sm-4 {
                padding-bottom: 1.5rem !important;
            }

            .pb-sm-5 {
                padding-bottom: 3rem !important;
            }

            .ps-sm-0 {
                padding-right: 0 !important;
            }

            .ps-sm-1 {
                padding-right: 0.25rem !important;
            }

            .ps-sm-2 {
                padding-right: 0.5rem !important;
            }

            .ps-sm-3 {
                padding-right: 1rem !important;
            }

            .ps-sm-4 {
                padding-right: 1.5rem !important;
            }

            .ps-sm-5 {
                padding-right: 3rem !important;
            }

            .text-sm-start {
                text-align: right !important;
            }

            .text-sm-end {
                text-align: right !important;
            }

            .text-sm-center {
                text-align: center !important;
            }
        }

        @media (min-width: 768px) {
            .float-md-start {
                float: right !important;
            }

            .float-md-end {
                float: left !important;
            }

            .float-md-none {
                float: none !important;
            }

            .d-md-inline {
                display: inline !important;
            }

            .d-md-inline-block {
                display: inline-block !important;
            }

            .d-md-block {
                display: block !important;
            }

            .d-md-grid {
                display: grid !important;
            }

            .d-md-table {
                display: table !important;
            }

            .d-md-table-row {
                display: table-row !important;
            }

            .d-md-table-cell {
                display: table-cell !important;
            }

            .d-md-flex {
                display: -webkit-box !important;
                display: -ms-flexbox !important;
                display: flex !important;
            }

            .d-md-inline-flex {
                display: -webkit-inline-box !important;
                display: -ms-inline-flexbox !important;
                display: inline-flex !important;
            }

            .d-md-none {
                display: none !important;
            }

            .flex-md-fill {
                -webkit-box-flex: 1 !important;
                -ms-flex: 1 1 auto !important;
                flex: 1 1 auto !important;
            }

            .flex-md-row {
                -webkit-box-orient: horizontal !important;
                -webkit-box-direction: normal !important;
                -ms-flex-direction: row !important;
                flex-direction: row !important;
            }

            .flex-md-column {
                -webkit-box-orient: vertical !important;
                -webkit-box-direction: normal !important;
                -ms-flex-direction: column !important;
                flex-direction: column !important;
            }

            .flex-md-row-reverse {
                -webkit-box-orient: horizontal !important;
                -webkit-box-direction: reverse !important;
                -ms-flex-direction: row-reverse !important;
                flex-direction: row-reverse !important;
            }

            .flex-md-column-reverse {
                -webkit-box-orient: vertical !important;
                -webkit-box-direction: reverse !important;
                -ms-flex-direction: column-reverse !important;
                flex-direction: column-reverse !important;
            }

            .flex-md-grow-0 {
                -webkit-box-flex: 0 !important;
                -ms-flex-positive: 0 !important;
                flex-grow: 0 !important;
            }

            .flex-md-grow-1 {
                -webkit-box-flex: 1 !important;
                -ms-flex-positive: 1 !important;
                flex-grow: 1 !important;
            }

            .flex-md-shrink-0 {
                -ms-flex-negative: 0 !important;
                flex-shrink: 0 !important;
            }

            .flex-md-shrink-1 {
                -ms-flex-negative: 1 !important;
                flex-shrink: 1 !important;
            }

            .flex-md-wrap {
                -ms-flex-wrap: wrap !important;
                flex-wrap: wrap !important;
            }

            .flex-md-nowrap {
                -ms-flex-wrap: nowrap !important;
                flex-wrap: nowrap !important;
            }

            .flex-md-wrap-reverse {
                -ms-flex-wrap: wrap-reverse !important;
                flex-wrap: wrap-reverse !important;
            }

            .gap-md-0 {
                gap: 0 !important;
            }

            .gap-md-1 {
                gap: 0.25rem !important;
            }

            .gap-md-2 {
                gap: 0.5rem !important;
            }

            .gap-md-3 {
                gap: 1rem !important;
            }

            .gap-md-4 {
                gap: 1.5rem !important;
            }

            .gap-md-5 {
                gap: 3rem !important;
            }

            .justify-content-md-start {
                -webkit-box-pack: start !important;
                -ms-flex-pack: start !important;
                justify-content: flex-start !important;
            }

            .justify-content-md-end {
                -webkit-box-pack: end !important;
                -ms-flex-pack: end !important;
                justify-content: flex-end !important;
            }

            .justify-content-md-center {
                -webkit-box-pack: center !important;
                -ms-flex-pack: center !important;
                justify-content: center !important;
            }

            .justify-content-md-between {
                -webkit-box-pack: justify !important;
                -ms-flex-pack: justify !important;
                justify-content: space-between !important;
            }

            .justify-content-md-around {
                -ms-flex-pack: distribute !important;
                justify-content: space-around !important;
            }

            .justify-content-md-evenly {
                -webkit-box-pack: space-evenly !important;
                -ms-flex-pack: space-evenly !important;
                justify-content: space-evenly !important;
            }

            .align-items-md-start {
                -webkit-box-align: start !important;
                -ms-flex-align: start !important;
                align-items: flex-start !important;
            }

            .align-items-md-end {
                -webkit-box-align: end !important;
                -ms-flex-align: end !important;
                align-items: flex-end !important;
            }

            .align-items-md-center {
                -webkit-box-align: center !important;
                -ms-flex-align: center !important;
                align-items: center !important;
            }

            .align-items-md-baseline {
                -webkit-box-align: baseline !important;
                -ms-flex-align: baseline !important;
                align-items: baseline !important;
            }

            .align-items-md-stretch {
                -webkit-box-align: stretch !important;
                -ms-flex-align: stretch !important;
                align-items: stretch !important;
            }

            .align-content-md-start {
                -ms-flex-line-pack: start !important;
                align-content: flex-start !important;
            }

            .align-content-md-end {
                -ms-flex-line-pack: end !important;
                align-content: flex-end !important;
            }

            .align-content-md-center {
                -ms-flex-line-pack: center !important;
                align-content: center !important;
            }

            .align-content-md-between {
                -ms-flex-line-pack: justify !important;
                align-content: space-between !important;
            }

            .align-content-md-around {
                -ms-flex-line-pack: distribute !important;
                align-content: space-around !important;
            }

            .align-content-md-stretch {
                -ms-flex-line-pack: stretch !important;
                align-content: stretch !important;
            }

            .align-self-md-auto {
                -ms-flex-item-align: auto !important;
                align-self: auto !important;
            }

            .align-self-md-start {
                -ms-flex-item-align: start !important;
                align-self: flex-start !important;
            }

            .align-self-md-end {
                -ms-flex-item-align: end !important;
                align-self: flex-end !important;
            }

            .align-self-md-center {
                -ms-flex-item-align: center !important;
                align-self: center !important;
            }

            .align-self-md-baseline {
                -ms-flex-item-align: baseline !important;
                align-self: baseline !important;
            }

            .align-self-md-stretch {
                -ms-flex-item-align: stretch !important;
                align-self: stretch !important;
            }

            .order-md-first {
                -webkit-box-ordinal-group: 0 !important;
                -ms-flex-order: -1 !important;
                order: -1 !important;
            }

            .order-md-0 {
                -webkit-box-ordinal-group: 1 !important;
                -ms-flex-order: 0 !important;
                order: 0 !important;
            }

            .order-md-1 {
                -webkit-box-ordinal-group: 2 !important;
                -ms-flex-order: 1 !important;
                order: 1 !important;
            }

            .order-md-2 {
                -webkit-box-ordinal-group: 3 !important;
                -ms-flex-order: 2 !important;
                order: 2 !important;
            }

            .order-md-3 {
                -webkit-box-ordinal-group: 4 !important;
                -ms-flex-order: 3 !important;
                order: 3 !important;
            }

            .order-md-4 {
                -webkit-box-ordinal-group: 5 !important;
                -ms-flex-order: 4 !important;
                order: 4 !important;
            }

            .order-md-5 {
                -webkit-box-ordinal-group: 6 !important;
                -ms-flex-order: 5 !important;
                order: 5 !important;
            }

            .order-md-last {
                -webkit-box-ordinal-group: 7 !important;
                -ms-flex-order: 6 !important;
                order: 6 !important;
            }

            .m-md-0 {
                margin: 0 !important;
            }

            .m-md-1 {
                margin: 0.25rem !important;
            }

            .m-md-2 {
                margin: 0.5rem !important;
            }

            .m-md-3 {
                margin: 1rem !important;
            }

            .m-md-4 {
                margin: 1.5rem !important;
            }

            .m-md-5 {
                margin: 3rem !important;
            }

            .m-md-auto {
                margin: auto !important;
            }

            .mx-md-0 {
                margin-left: 0 !important;
                margin-right: 0 !important;
            }

            .mx-md-1 {
                margin-left: 0.25rem !important;
                margin-right: 0.25rem !important;
            }

            .mx-md-2 {
                margin-left: 0.5rem !important;
                margin-right: 0.5rem !important;
            }

            .mx-md-3 {
                margin-left: 1rem !important;
                margin-right: 1rem !important;
            }

            .mx-md-4 {
                margin-left: 1.5rem !important;
                margin-right: 1.5rem !important;
            }

            .mx-md-5 {
                margin-left: 3rem !important;
                margin-right: 3rem !important;
            }

            .mx-md-auto {
                margin-left: auto !important;
                margin-right: auto !important;
            }

            .my-md-0 {
                margin-top: 0 !important;
                margin-bottom: 0 !important;
            }

            .my-md-1 {
                margin-top: 0.25rem !important;
                margin-bottom: 0.25rem !important;
            }

            .my-md-2 {
                margin-top: 0.5rem !important;
                margin-bottom: 0.5rem !important;
            }

            .my-md-3 {
                margin-top: 1rem !important;
                margin-bottom: 1rem !important;
            }

            .my-md-4 {
                margin-top: 1.5rem !important;
                margin-bottom: 1.5rem !important;
            }

            .my-md-5 {
                margin-top: 3rem !important;
                margin-bottom: 3rem !important;
            }

            .my-md-auto {
                margin-top: auto !important;
                margin-bottom: auto !important;
            }

            .mt-md-0 {
                margin-top: 0 !important;
            }

            .mt-md-1 {
                margin-top: 0.25rem !important;
            }

            .mt-md-2 {
                margin-top: 0.5rem !important;
            }

            .mt-md-3 {
                margin-top: 1rem !important;
            }

            .mt-md-4 {
                margin-top: 1.5rem !important;
            }

            .mt-md-5 {
                margin-top: 3rem !important;
            }

            .mt-md-auto {
                margin-top: auto !important;
            }

            .me-md-0 {
                margin-left: 0 !important;
            }

            .me-md-1 {
                margin-left: 0.25rem !important;
            }

            .me-md-2 {
                margin-left: 0.5rem !important;
            }

            .me-md-3 {
                margin-left: 1rem !important;
            }

            .me-md-4 {
                margin-left: 1.5rem !important;
            }

            .me-md-5 {
                margin-left: 3rem !important;
            }

            .me-md-auto {
                margin-left: auto !important;
            }

            .mb-md-0 {
                margin-bottom: 0 !important;
            }

            .mb-md-1 {
                margin-bottom: 0.25rem !important;
            }

            .mb-md-2 {
                margin-bottom: 0.5rem !important;
            }

            .mb-md-3 {
                margin-bottom: 1rem !important;
            }

            .mb-md-4 {
                margin-bottom: 1.5rem !important;
            }

            .mb-md-5 {
                margin-bottom: 3rem !important;
            }

            .mb-md-auto {
                margin-bottom: auto !important;
            }

            .ms-md-0 {
                margin-right: 0 !important;
            }

            .ms-md-1 {
                margin-right: 0.25rem !important;
            }

            .ms-md-2 {
                margin-right: 0.5rem !important;
            }

            .ms-md-3 {
                margin-right: 1rem !important;
            }

            .ms-md-4 {
                margin-right: 1.5rem !important;
            }

            .ms-md-5 {
                margin-right: 3rem !important;
            }

            .ms-md-auto {
                margin-right: auto !important;
            }

            .m-md-n1 {
                margin: -0.25rem !important;
            }

            .m-md-n2 {
                margin: -0.5rem !important;
            }

            .m-md-n3 {
                margin: -1rem !important;
            }

            .m-md-n4 {
                margin: -1.5rem !important;
            }

            .m-md-n5 {
                margin: -3rem !important;
            }

            .mx-md-n1 {
                margin-left: -0.25rem !important;
                margin-right: -0.25rem !important;
            }

            .mx-md-n2 {
                margin-left: -0.5rem !important;
                margin-right: -0.5rem !important;
            }

            .mx-md-n3 {
                margin-left: -1rem !important;
                margin-right: -1rem !important;
            }

            .mx-md-n4 {
                margin-left: -1.5rem !important;
                margin-right: -1.5rem !important;
            }

            .mx-md-n5 {
                margin-left: -3rem !important;
                margin-right: -3rem !important;
            }

            .my-md-n1 {
                margin-top: -0.25rem !important;
                margin-bottom: -0.25rem !important;
            }

            .my-md-n2 {
                margin-top: -0.5rem !important;
                margin-bottom: -0.5rem !important;
            }

            .my-md-n3 {
                margin-top: -1rem !important;
                margin-bottom: -1rem !important;
            }

            .my-md-n4 {
                margin-top: -1.5rem !important;
                margin-bottom: -1.5rem !important;
            }

            .my-md-n5 {
                margin-top: -3rem !important;
                margin-bottom: -3rem !important;
            }

            .mt-md-n1 {
                margin-top: -0.25rem !important;
            }

            .mt-md-n2 {
                margin-top: -0.5rem !important;
            }

            .mt-md-n3 {
                margin-top: -1rem !important;
            }

            .mt-md-n4 {
                margin-top: -1.5rem !important;
            }

            .mt-md-n5 {
                margin-top: -3rem !important;
            }

            .me-md-n1 {
                margin-left: -0.25rem !important;
            }

            .me-md-n2 {
                margin-left: -0.5rem !important;
            }

            .me-md-n3 {
                margin-left: -1rem !important;
            }

            .me-md-n4 {
                margin-left: -1.5rem !important;
            }

            .me-md-n5 {
                margin-left: -3rem !important;
            }

            .mb-md-n1 {
                margin-bottom: -0.25rem !important;
            }

            .mb-md-n2 {
                margin-bottom: -0.5rem !important;
            }

            .mb-md-n3 {
                margin-bottom: -1rem !important;
            }

            .mb-md-n4 {
                margin-bottom: -1.5rem !important;
            }

            .mb-md-n5 {
                margin-bottom: -3rem !important;
            }

            .ms-md-n1 {
                margin-right: -0.25rem !important;
            }

            .ms-md-n2 {
                margin-right: -0.5rem !important;
            }

            .ms-md-n3 {
                margin-right: -1rem !important;
            }

            .ms-md-n4 {
                margin-right: -1.5rem !important;
            }

            .ms-md-n5 {
                margin-right: -3rem !important;
            }

            .p-md-0 {
                padding: 0 !important;
            }

            .p-md-1 {
                padding: 0.25rem !important;
            }

            .p-md-2 {
                padding: 0.5rem !important;
            }

            .p-md-3 {
                padding: 1rem !important;
            }

            .p-md-4 {
                padding: 1.5rem !important;
            }

            .p-md-5 {
                padding: 3rem !important;
            }

            .px-md-0 {
                padding-left: 0 !important;
                padding-right: 0 !important;
            }

            .px-md-1 {
                padding-left: 0.25rem !important;
                padding-right: 0.25rem !important;
            }

            .px-md-2 {
                padding-left: 0.5rem !important;
                padding-right: 0.5rem !important;
            }

            .px-md-3 {
                padding-left: 1rem !important;
                padding-right: 1rem !important;
            }

            .px-md-4 {
                padding-left: 1.5rem !important;
                padding-right: 1.5rem !important;
            }

            .px-md-5 {
                padding-left: 3rem !important;
                padding-right: 3rem !important;
            }

            .py-md-0 {
                padding-top: 0 !important;
                padding-bottom: 0 !important;
            }

            .py-md-1 {
                padding-top: 0.25rem !important;
                padding-bottom: 0.25rem !important;
            }

            .py-md-2 {
                padding-top: 0.5rem !important;
                padding-bottom: 0.5rem !important;
            }

            .py-md-3 {
                padding-top: 1rem !important;
                padding-bottom: 1rem !important;
            }

            .py-md-4 {
                padding-top: 1.5rem !important;
                padding-bottom: 1.5rem !important;
            }

            .py-md-5 {
                padding-top: 3rem !important;
                padding-bottom: 3rem !important;
            }

            .pt-md-0 {
                padding-top: 0 !important;
            }

            .pt-md-1 {
                padding-top: 0.25rem !important;
            }

            .pt-md-2 {
                padding-top: 0.5rem !important;
            }

            .pt-md-3 {
                padding-top: 1rem !important;
            }

            .pt-md-4 {
                padding-top: 1.5rem !important;
            }

            .pt-md-5 {
                padding-top: 3rem !important;
            }

            .pe-md-0 {
                padding-left: 0 !important;
            }

            .pe-md-1 {
                padding-left: 0.25rem !important;
            }

            .pe-md-2 {
                padding-left: 0.5rem !important;
            }

            .pe-md-3 {
                padding-left: 1rem !important;
            }

            .pe-md-4 {
                padding-left: 1.5rem !important;
            }

            .pe-md-5 {
                padding-left: 3rem !important;
            }

            .pb-md-0 {
                padding-bottom: 0 !important;
            }

            .pb-md-1 {
                padding-bottom: 0.25rem !important;
            }

            .pb-md-2 {
                padding-bottom: 0.5rem !important;
            }

            .pb-md-3 {
                padding-bottom: 1rem !important;
            }

            .pb-md-4 {
                padding-bottom: 1.5rem !important;
            }

            .pb-md-5 {
                padding-bottom: 3rem !important;
            }

            .ps-md-0 {
                padding-right: 0 !important;
            }

            .ps-md-1 {
                padding-right: 0.25rem !important;
            }

            .ps-md-2 {
                padding-right: 0.5rem !important;
            }

            .ps-md-3 {
                padding-right: 1rem !important;
            }

            .ps-md-4 {
                padding-right: 1.5rem !important;
            }

            .ps-md-5 {
                padding-right: 3rem !important;
            }

            .text-md-start {
                text-align: right !important;
            }

            .text-md-end {
                text-align: left !important;
            }

            .text-md-center {
                text-align: center !important;
            }
        }

        @media (min-width: 992px) {
            .float-lg-start {
                float: right !important;
            }

            .float-lg-end {
                float: left !important;
            }

            .float-lg-none {
                float: none !important;
            }

            .d-lg-inline {
                display: inline !important;
            }

            .d-lg-inline-block {
                display: inline-block !important;
            }

            .d-lg-block {
                display: block !important;
            }

            .d-lg-grid {
                display: grid !important;
            }

            .d-lg-table {
                display: table !important;
            }

            .d-lg-table-row {
                display: table-row !important;
            }

            .d-lg-table-cell {
                display: table-cell !important;
            }

            .d-lg-flex {
                display: -webkit-box !important;
                display: -ms-flexbox !important;
                display: flex !important;
            }

            .d-lg-inline-flex {
                display: -webkit-inline-box !important;
                display: -ms-inline-flexbox !important;
                display: inline-flex !important;
            }

            .d-lg-none {
                display: none !important;
            }

            .flex-lg-fill {
                -webkit-box-flex: 1 !important;
                -ms-flex: 1 1 auto !important;
                flex: 1 1 auto !important;
            }

            .flex-lg-row {
                -webkit-box-orient: horizontal !important;
                -webkit-box-direction: normal !important;
                -ms-flex-direction: row !important;
                flex-direction: row !important;
            }

            .flex-lg-column {
                -webkit-box-orient: vertical !important;
                -webkit-box-direction: normal !important;
                -ms-flex-direction: column !important;
                flex-direction: column !important;
            }

            .flex-lg-row-reverse {
                -webkit-box-orient: horizontal !important;
                -webkit-box-direction: reverse !important;
                -ms-flex-direction: row-reverse !important;
                flex-direction: row-reverse !important;
            }

            .flex-lg-column-reverse {
                -webkit-box-orient: vertical !important;
                -webkit-box-direction: reverse !important;
                -ms-flex-direction: column-reverse !important;
                flex-direction: column-reverse !important;
            }

            .flex-lg-grow-0 {
                -webkit-box-flex: 0 !important;
                -ms-flex-positive: 0 !important;
                flex-grow: 0 !important;
            }

            .flex-lg-grow-1 {
                -webkit-box-flex: 1 !important;
                -ms-flex-positive: 1 !important;
                flex-grow: 1 !important;
            }

            .flex-lg-shrink-0 {
                -ms-flex-negative: 0 !important;
                flex-shrink: 0 !important;
            }

            .flex-lg-shrink-1 {
                -ms-flex-negative: 1 !important;
                flex-shrink: 1 !important;
            }

            .flex-lg-wrap {
                -ms-flex-wrap: wrap !important;
                flex-wrap: wrap !important;
            }

            .flex-lg-nowrap {
                -ms-flex-wrap: nowrap !important;
                flex-wrap: nowrap !important;
            }

            .flex-lg-wrap-reverse {
                -ms-flex-wrap: wrap-reverse !important;
                flex-wrap: wrap-reverse !important;
            }

            .gap-lg-0 {
                gap: 0 !important;
            }

            .gap-lg-1 {
                gap: 0.25rem !important;
            }

            .gap-lg-2 {
                gap: 0.5rem !important;
            }

            .gap-lg-3 {
                gap: 1rem !important;
            }

            .gap-lg-4 {
                gap: 1.5rem !important;
            }

            .gap-lg-5 {
                gap: 3rem !important;
            }

            .justify-content-lg-start {
                -webkit-box-pack: start !important;
                -ms-flex-pack: start !important;
                justify-content: flex-start !important;
            }

            .justify-content-lg-end {
                -webkit-box-pack: end !important;
                -ms-flex-pack: end !important;
                justify-content: flex-end !important;
            }

            .justify-content-lg-center {
                -webkit-box-pack: center !important;
                -ms-flex-pack: center !important;
                justify-content: center !important;
            }

            .justify-content-lg-between {
                -webkit-box-pack: justify !important;
                -ms-flex-pack: justify !important;
                justify-content: space-between !important;
            }

            .justify-content-lg-around {
                -ms-flex-pack: distribute !important;
                justify-content: space-around !important;
            }

            .justify-content-lg-evenly {
                -webkit-box-pack: space-evenly !important;
                -ms-flex-pack: space-evenly !important;
                justify-content: space-evenly !important;
            }

            .align-items-lg-start {
                -webkit-box-align: start !important;
                -ms-flex-align: start !important;
                align-items: flex-start !important;
            }

            .align-items-lg-end {
                -webkit-box-align: end !important;
                -ms-flex-align: end !important;
                align-items: flex-end !important;
            }

            .align-items-lg-center {
                -webkit-box-align: center !important;
                -ms-flex-align: center !important;
                align-items: center !important;
            }

            .align-items-lg-baseline {
                -webkit-box-align: baseline !important;
                -ms-flex-align: baseline !important;
                align-items: baseline !important;
            }

            .align-items-lg-stretch {
                -webkit-box-align: stretch !important;
                -ms-flex-align: stretch !important;
                align-items: stretch !important;
            }

            .align-content-lg-start {
                -ms-flex-line-pack: start !important;
                align-content: flex-start !important;
            }

            .align-content-lg-end {
                -ms-flex-line-pack: end !important;
                align-content: flex-end !important;
            }

            .align-content-lg-center {
                -ms-flex-line-pack: center !important;
                align-content: center !important;
            }

            .align-content-lg-between {
                -ms-flex-line-pack: justify !important;
                align-content: space-between !important;
            }

            .align-content-lg-around {
                -ms-flex-line-pack: distribute !important;
                align-content: space-around !important;
            }

            .align-content-lg-stretch {
                -ms-flex-line-pack: stretch !important;
                align-content: stretch !important;
            }

            .align-self-lg-auto {
                -ms-flex-item-align: auto !important;
                align-self: auto !important;
            }

            .align-self-lg-start {
                -ms-flex-item-align: start !important;
                align-self: flex-start !important;
            }

            .align-self-lg-end {
                -ms-flex-item-align: end !important;
                align-self: flex-end !important;
            }

            .align-self-lg-center {
                -ms-flex-item-align: center !important;
                align-self: center !important;
            }

            .align-self-lg-baseline {
                -ms-flex-item-align: baseline !important;
                align-self: baseline !important;
            }

            .align-self-lg-stretch {
                -ms-flex-item-align: stretch !important;
                align-self: stretch !important;
            }

            .order-lg-first {
                -webkit-box-ordinal-group: 0 !important;
                -ms-flex-order: -1 !important;
                order: -1 !important;
            }

            .order-lg-0 {
                -webkit-box-ordinal-group: 1 !important;
                -ms-flex-order: 0 !important;
                order: 0 !important;
            }

            .order-lg-1 {
                -webkit-box-ordinal-group: 2 !important;
                -ms-flex-order: 1 !important;
                order: 1 !important;
            }

            .order-lg-2 {
                -webkit-box-ordinal-group: 3 !important;
                -ms-flex-order: 2 !important;
                order: 2 !important;
            }

            .order-lg-3 {
                -webkit-box-ordinal-group: 4 !important;
                -ms-flex-order: 3 !important;
                order: 3 !important;
            }

            .order-lg-4 {
                -webkit-box-ordinal-group: 5 !important;
                -ms-flex-order: 4 !important;
                order: 4 !important;
            }

            .order-lg-5 {
                -webkit-box-ordinal-group: 6 !important;
                -ms-flex-order: 5 !important;
                order: 5 !important;
            }

            .order-lg-last {
                -webkit-box-ordinal-group: 7 !important;
                -ms-flex-order: 6 !important;
                order: 6 !important;
            }

            .m-lg-0 {
                margin: 0 !important;
            }

            .m-lg-1 {
                margin: 0.25rem !important;
            }

            .m-lg-2 {
                margin: 0.5rem !important;
            }

            .m-lg-3 {
                margin: 1rem !important;
            }

            .m-lg-4 {
                margin: 1.5rem !important;
            }

            .m-lg-5 {
                margin: 3rem !important;
            }

            .m-lg-auto {
                margin: auto !important;
            }

            .mx-lg-0 {
                margin-left: 0 !important;
                margin-right: 0 !important;
            }

            .mx-lg-1 {
                margin-left: 0.25rem !important;
                margin-right: 0.25rem !important;
            }

            .mx-lg-2 {
                margin-left: 0.5rem !important;
                margin-right: 0.5rem !important;
            }

            .mx-lg-3 {
                margin-left: 1rem !important;
                margin-right: 1rem !important;
            }

            .mx-lg-4 {
                margin-left: 1.5rem !important;
                margin-right: 1.5rem !important;
            }

            .mx-lg-5 {
                margin-left: 3rem !important;
                margin-right: 3rem !important;
            }

            .mx-lg-auto {
                margin-left: auto !important;
                margin-right: auto !important;
            }

            .my-lg-0 {
                margin-top: 0 !important;
                margin-bottom: 0 !important;
            }

            .my-lg-1 {
                margin-top: 0.25rem !important;
                margin-bottom: 0.25rem !important;
            }

            .my-lg-2 {
                margin-top: 0.5rem !important;
                margin-bottom: 0.5rem !important;
            }

            .my-lg-3 {
                margin-top: 1rem !important;
                margin-bottom: 1rem !important;
            }

            .my-lg-4 {
                margin-top: 1.5rem !important;
                margin-bottom: 1.5rem !important;
            }

            .my-lg-5 {
                margin-top: 3rem !important;
                margin-bottom: 3rem !important;
            }

            .my-lg-auto {
                margin-top: auto !important;
                margin-bottom: auto !important;
            }

            .mt-lg-0 {
                margin-top: 0 !important;
            }

            .mt-lg-1 {
                margin-top: 0.25rem !important;
            }

            .mt-lg-2 {
                margin-top: 0.5rem !important;
            }

            .mt-lg-3 {
                margin-top: 1rem !important;
            }

            .mt-lg-4 {
                margin-top: 1.5rem !important;
            }

            .mt-lg-5 {
                margin-top: 3rem !important;
            }

            .mt-lg-auto {
                margin-top: auto !important;
            }

            .me-lg-0 {
                margin-left: 0 !important;
            }

            .me-lg-1 {
                margin-left: 0.25rem !important;
            }

            .me-lg-2 {
                margin-left: 0.5rem !important;
            }

            .me-lg-3 {
                margin-left: 1rem !important;
            }

            .me-lg-4 {
                margin-left: 1.5rem !important;
            }

            .me-lg-5 {
                margin-left: 3rem !important;
            }

            .me-lg-auto {
                margin-left: auto !important;
            }

            .mb-lg-0 {
                margin-bottom: 0 !important;
            }

            .mb-lg-1 {
                margin-bottom: 0.25rem !important;
            }

            .mb-lg-2 {
                margin-bottom: 0.5rem !important;
            }

            .mb-lg-3 {
                margin-bottom: 1rem !important;
            }

            .mb-lg-4 {
                margin-bottom: 1.5rem !important;
            }

            .mb-lg-5 {
                margin-bottom: 3rem !important;
            }

            .mb-lg-auto {
                margin-bottom: auto !important;
            }

            .ms-lg-0 {
                margin-right: 0 !important;
            }

            .ms-lg-1 {
                margin-right: 0.25rem !important;
            }

            .ms-lg-2 {
                margin-right: 0.5rem !important;
            }

            .ms-lg-3 {
                margin-right: 1rem !important;
            }

            .ms-lg-4 {
                margin-right: 1.5rem !important;
            }

            .ms-lg-5 {
                margin-right: 3rem !important;
            }

            .ms-lg-auto {
                margin-right: auto !important;
            }

            .m-lg-n1 {
                margin: -0.25rem !important;
            }

            .m-lg-n2 {
                margin: -0.5rem !important;
            }

            .m-lg-n3 {
                margin: -1rem !important;
            }

            .m-lg-n4 {
                margin: -1.5rem !important;
            }

            .m-lg-n5 {
                margin: -3rem !important;
            }

            .mx-lg-n1 {
                margin-left: -0.25rem !important;
                margin-right: -0.25rem !important;
            }

            .mx-lg-n2 {
                margin-left: -0.5rem !important;
                margin-right: -0.5rem !important;
            }

            .mx-lg-n3 {
                margin-left: -1rem !important;
                margin-right: -1rem !important;
            }

            .mx-lg-n4 {
                margin-left: -1.5rem !important;
                margin-right: -1.5rem !important;
            }

            .mx-lg-n5 {
                margin-left: -3rem !important;
                margin-right: -3rem !important;
            }

            .my-lg-n1 {
                margin-top: -0.25rem !important;
                margin-bottom: -0.25rem !important;
            }

            .my-lg-n2 {
                margin-top: -0.5rem !important;
                margin-bottom: -0.5rem !important;
            }

            .my-lg-n3 {
                margin-top: -1rem !important;
                margin-bottom: -1rem !important;
            }

            .my-lg-n4 {
                margin-top: -1.5rem !important;
                margin-bottom: -1.5rem !important;
            }

            .my-lg-n5 {
                margin-top: -3rem !important;
                margin-bottom: -3rem !important;
            }

            .mt-lg-n1 {
                margin-top: -0.25rem !important;
            }

            .mt-lg-n2 {
                margin-top: -0.5rem !important;
            }

            .mt-lg-n3 {
                margin-top: -1rem !important;
            }

            .mt-lg-n4 {
                margin-top: -1.5rem !important;
            }

            .mt-lg-n5 {
                margin-top: -3rem !important;
            }

            .me-lg-n1 {
                margin-left: -0.25rem !important;
            }

            .me-lg-n2 {
                margin-left: -0.5rem !important;
            }

            .me-lg-n3 {
                margin-left: -1rem !important;
            }

            .me-lg-n4 {
                margin-left: -1.5rem !important;
            }

            .me-lg-n5 {
                margin-left: -3rem !important;
            }

            .mb-lg-n1 {
                margin-bottom: -0.25rem !important;
            }

            .mb-lg-n2 {
                margin-bottom: -0.5rem !important;
            }

            .mb-lg-n3 {
                margin-bottom: -1rem !important;
            }

            .mb-lg-n4 {
                margin-bottom: -1.5rem !important;
            }

            .mb-lg-n5 {
                margin-bottom: -3rem !important;
            }

            .ms-lg-n1 {
                margin-right: -0.25rem !important;
            }

            .ms-lg-n2 {
                margin-right: -0.5rem !important;
            }

            .ms-lg-n3 {
                margin-right: -1rem !important;
            }

            .ms-lg-n4 {
                margin-right: -1.5rem !important;
            }

            .ms-lg-n5 {
                margin-right: -3rem !important;
            }

            .p-lg-0 {
                padding: 0 !important;
            }

            .p-lg-1 {
                padding: 0.25rem !important;
            }

            .p-lg-2 {
                padding: 0.5rem !important;
            }

            .p-lg-3 {
                padding: 1rem !important;
            }

            .p-lg-4 {
                padding: 1.5rem !important;
            }

            .p-lg-5 {
                padding: 3rem !important;
            }

            .px-lg-0 {
                padding-left: 0 !important;
                padding-right: 0 !important;
            }

            .px-lg-1 {
                padding-left: 0.25rem !important;
                padding-right: 0.25rem !important;
            }

            .px-lg-2 {
                padding-left: 0.5rem !important;
                padding-right: 0.5rem !important;
            }

            .px-lg-3 {
                padding-left: 1rem !important;
                padding-right: 1rem !important;
            }

            .px-lg-4 {
                padding-left: 1.5rem !important;
                padding-right: 1.5rem !important;
            }

            .px-lg-5 {
                padding-left: 3rem !important;
                padding-right: 3rem !important;
            }

            .py-lg-0 {
                padding-top: 0 !important;
                padding-bottom: 0 !important;
            }

            .py-lg-1 {
                padding-top: 0.25rem !important;
                padding-bottom: 0.25rem !important;
            }

            .py-lg-2 {
                padding-top: 0.5rem !important;
                padding-bottom: 0.5rem !important;
            }

            .py-lg-3 {
                padding-top: 1rem !important;
                padding-bottom: 1rem !important;
            }

            .py-lg-4 {
                padding-top: 1.5rem !important;
                padding-bottom: 1.5rem !important;
            }

            .py-lg-5 {
                padding-top: 3rem !important;
                padding-bottom: 3rem !important;
            }

            .pt-lg-0 {
                padding-top: 0 !important;
            }

            .pt-lg-1 {
                padding-top: 0.25rem !important;
            }

            .pt-lg-2 {
                padding-top: 0.5rem !important;
            }

            .pt-lg-3 {
                padding-top: 1rem !important;
            }

            .pt-lg-4 {
                padding-top: 1.5rem !important;
            }

            .pt-lg-5 {
                padding-top: 3rem !important;
            }

            .pe-lg-0 {
                padding-left: 0 !important;
            }

            .pe-lg-1 {
                padding-left: 0.25rem !important;
            }

            .pe-lg-2 {
                padding-left: 0.5rem !important;
            }

            .pe-lg-3 {
                padding-left: 1rem !important;
            }

            .pe-lg-4 {
                padding-left: 1.5rem !important;
            }

            .pe-lg-5 {
                padding-left: 3rem !important;
            }

            .pb-lg-0 {
                padding-bottom: 0 !important;
            }

            .pb-lg-1 {
                padding-bottom: 0.25rem !important;
            }

            .pb-lg-2 {
                padding-bottom: 0.5rem !important;
            }

            .pb-lg-3 {
                padding-bottom: 1rem !important;
            }

            .pb-lg-4 {
                padding-bottom: 1.5rem !important;
            }

            .pb-lg-5 {
                padding-bottom: 3rem !important;
            }

            .ps-lg-0 {
                padding-right: 0 !important;
            }

            .ps-lg-1 {
                padding-right: 0.25rem !important;
            }

            .ps-lg-2 {
                padding-right: 0.5rem !important;
            }

            .ps-lg-3 {
                padding-right: 1rem !important;
            }

            .ps-lg-4 {
                padding-right: 1.5rem !important;
            }

            .ps-lg-5 {
                padding-right: 3rem !important;
            }

            .text-lg-start {
                text-align: right !important;
            }

            .text-lg-end {
                text-align: left !important;
            }

            .text-lg-center {
                text-align: center !important;
            }
        }

        @media (min-width: 1200px) {
            .float-xl-start {
                float: right !important;
            }

            .float-xl-end {
                float: left !important;
            }

            .float-xl-none {
                float: none !important;
            }

            .d-xl-inline {
                display: inline !important;
            }

            .d-xl-inline-block {
                display: inline-block !important;
            }

            .d-xl-block {
                display: block !important;
            }

            .d-xl-grid {
                display: grid !important;
            }

            .d-xl-table {
                display: table !important;
            }

            .d-xl-table-row {
                display: table-row !important;
            }

            .d-xl-table-cell {
                display: table-cell !important;
            }

            .d-xl-flex {
                display: -webkit-box !important;
                display: -ms-flexbox !important;
                display: flex !important;
            }

            .d-xl-inline-flex {
                display: -webkit-inline-box !important;
                display: -ms-inline-flexbox !important;
                display: inline-flex !important;
            }

            .d-xl-none {
                display: none !important;
            }

            .flex-xl-fill {
                -webkit-box-flex: 1 !important;
                -ms-flex: 1 1 auto !important;
                flex: 1 1 auto !important;
            }

            .flex-xl-row {
                -webkit-box-orient: horizontal !important;
                -webkit-box-direction: normal !important;
                -ms-flex-direction: row !important;
                flex-direction: row !important;
            }

            .flex-xl-column {
                -webkit-box-orient: vertical !important;
                -webkit-box-direction: normal !important;
                -ms-flex-direction: column !important;
                flex-direction: column !important;
            }

            .flex-xl-row-reverse {
                -webkit-box-orient: horizontal !important;
                -webkit-box-direction: reverse !important;
                -ms-flex-direction: row-reverse !important;
                flex-direction: row-reverse !important;
            }

            .flex-xl-column-reverse {
                -webkit-box-orient: vertical !important;
                -webkit-box-direction: reverse !important;
                -ms-flex-direction: column-reverse !important;
                flex-direction: column-reverse !important;
            }

            .flex-xl-grow-0 {
                -webkit-box-flex: 0 !important;
                -ms-flex-positive: 0 !important;
                flex-grow: 0 !important;
            }

            .flex-xl-grow-1 {
                -webkit-box-flex: 1 !important;
                -ms-flex-positive: 1 !important;
                flex-grow: 1 !important;
            }

            .flex-xl-shrink-0 {
                -ms-flex-negative: 0 !important;
                flex-shrink: 0 !important;
            }

            .flex-xl-shrink-1 {
                -ms-flex-negative: 1 !important;
                flex-shrink: 1 !important;
            }

            .flex-xl-wrap {
                -ms-flex-wrap: wrap !important;
                flex-wrap: wrap !important;
            }

            .flex-xl-nowrap {
                -ms-flex-wrap: nowrap !important;
                flex-wrap: nowrap !important;
            }

            .flex-xl-wrap-reverse {
                -ms-flex-wrap: wrap-reverse !important;
                flex-wrap: wrap-reverse !important;
            }

            .gap-xl-0 {
                gap: 0 !important;
            }

            .gap-xl-1 {
                gap: 0.25rem !important;
            }

            .gap-xl-2 {
                gap: 0.5rem !important;
            }

            .gap-xl-3 {
                gap: 1rem !important;
            }

            .gap-xl-4 {
                gap: 1.5rem !important;
            }

            .gap-xl-5 {
                gap: 3rem !important;
            }

            .justify-content-xl-start {
                -webkit-box-pack: start !important;
                -ms-flex-pack: start !important;
                justify-content: flex-start !important;
            }

            .justify-content-xl-end {
                -webkit-box-pack: end !important;
                -ms-flex-pack: end !important;
                justify-content: flex-end !important;
            }

            .justify-content-xl-center {
                -webkit-box-pack: center !important;
                -ms-flex-pack: center !important;
                justify-content: center !important;
            }

            .justify-content-xl-between {
                -webkit-box-pack: justify !important;
                -ms-flex-pack: justify !important;
                justify-content: space-between !important;
            }

            .justify-content-xl-around {
                -ms-flex-pack: distribute !important;
                justify-content: space-around !important;
            }

            .justify-content-xl-evenly {
                -webkit-box-pack: space-evenly !important;
                -ms-flex-pack: space-evenly !important;
                justify-content: space-evenly !important;
            }

            .align-items-xl-start {
                -webkit-box-align: start !important;
                -ms-flex-align: start !important;
                align-items: flex-start !important;
            }

            .align-items-xl-end {
                -webkit-box-align: end !important;
                -ms-flex-align: end !important;
                align-items: flex-end !important;
            }

            .align-items-xl-center {
                -webkit-box-align: center !important;
                -ms-flex-align: center !important;
                align-items: center !important;
            }

            .align-items-xl-baseline {
                -webkit-box-align: baseline !important;
                -ms-flex-align: baseline !important;
                align-items: baseline !important;
            }

            .align-items-xl-stretch {
                -webkit-box-align: stretch !important;
                -ms-flex-align: stretch !important;
                align-items: stretch !important;
            }

            .align-content-xl-start {
                -ms-flex-line-pack: start !important;
                align-content: flex-start !important;
            }

            .align-content-xl-end {
                -ms-flex-line-pack: end !important;
                align-content: flex-end !important;
            }

            .align-content-xl-center {
                -ms-flex-line-pack: center !important;
                align-content: center !important;
            }

            .align-content-xl-between {
                -ms-flex-line-pack: justify !important;
                align-content: space-between !important;
            }

            .align-content-xl-around {
                -ms-flex-line-pack: distribute !important;
                align-content: space-around !important;
            }

            .align-content-xl-stretch {
                -ms-flex-line-pack: stretch !important;
                align-content: stretch !important;
            }

            .align-self-xl-auto {
                -ms-flex-item-align: auto !important;
                align-self: auto !important;
            }

            .align-self-xl-start {
                -ms-flex-item-align: start !important;
                align-self: flex-start !important;
            }

            .align-self-xl-end {
                -ms-flex-item-align: end !important;
                align-self: flex-end !important;
            }

            .align-self-xl-center {
                -ms-flex-item-align: center !important;
                align-self: center !important;
            }

            .align-self-xl-baseline {
                -ms-flex-item-align: baseline !important;
                align-self: baseline !important;
            }

            .align-self-xl-stretch {
                -ms-flex-item-align: stretch !important;
                align-self: stretch !important;
            }

            .order-xl-first {
                -webkit-box-ordinal-group: 0 !important;
                -ms-flex-order: -1 !important;
                order: -1 !important;
            }

            .order-xl-0 {
                -webkit-box-ordinal-group: 1 !important;
                -ms-flex-order: 0 !important;
                order: 0 !important;
            }

            .order-xl-1 {
                -webkit-box-ordinal-group: 2 !important;
                -ms-flex-order: 1 !important;
                order: 1 !important;
            }

            .order-xl-2 {
                -webkit-box-ordinal-group: 3 !important;
                -ms-flex-order: 2 !important;
                order: 2 !important;
            }

            .order-xl-3 {
                -webkit-box-ordinal-group: 4 !important;
                -ms-flex-order: 3 !important;
                order: 3 !important;
            }

            .order-xl-4 {
                -webkit-box-ordinal-group: 5 !important;
                -ms-flex-order: 4 !important;
                order: 4 !important;
            }

            .order-xl-5 {
                -webkit-box-ordinal-group: 6 !important;
                -ms-flex-order: 5 !important;
                order: 5 !important;
            }

            .order-xl-last {
                -webkit-box-ordinal-group: 7 !important;
                -ms-flex-order: 6 !important;
                order: 6 !important;
            }

            .m-xl-0 {
                margin: 0 !important;
            }

            .m-xl-1 {
                margin: 0.25rem !important;
            }

            .m-xl-2 {
                margin: 0.5rem !important;
            }

            .m-xl-3 {
                margin: 1rem !important;
            }

            .m-xl-4 {
                margin: 1.5rem !important;
            }

            .m-xl-5 {
                margin: 3rem !important;
            }

            .m-xl-auto {
                margin: auto !important;
            }

            .mx-xl-0 {
                margin-left: 0 !important;
                margin-right: 0 !important;
            }

            .mx-xl-1 {
                margin-left: 0.25rem !important;
                margin-right: 0.25rem !important;
            }

            .mx-xl-2 {
                margin-left: 0.5rem !important;
                margin-right: 0.5rem !important;
            }

            .mx-xl-3 {
                margin-left: 1rem !important;
                margin-right: 1rem !important;
            }

            .mx-xl-4 {
                margin-left: 1.5rem !important;
                margin-right: 1.5rem !important;
            }

            .mx-xl-5 {
                margin-left: 3rem !important;
                margin-right: 3rem !important;
            }

            .mx-xl-auto {
                margin-left: auto !important;
                margin-right: auto !important;
            }

            .my-xl-0 {
                margin-top: 0 !important;
                margin-bottom: 0 !important;
            }

            .my-xl-1 {
                margin-top: 0.25rem !important;
                margin-bottom: 0.25rem !important;
            }

            .my-xl-2 {
                margin-top: 0.5rem !important;
                margin-bottom: 0.5rem !important;
            }

            .my-xl-3 {
                margin-top: 1rem !important;
                margin-bottom: 1rem !important;
            }

            .my-xl-4 {
                margin-top: 1.5rem !important;
                margin-bottom: 1.5rem !important;
            }

            .my-xl-5 {
                margin-top: 3rem !important;
                margin-bottom: 3rem !important;
            }

            .my-xl-auto {
                margin-top: auto !important;
                margin-bottom: auto !important;
            }

            .mt-xl-0 {
                margin-top: 0 !important;
            }

            .mt-xl-1 {
                margin-top: 0.25rem !important;
            }

            .mt-xl-2 {
                margin-top: 0.5rem !important;
            }

            .mt-xl-3 {
                margin-top: 1rem !important;
            }

            .mt-xl-4 {
                margin-top: 1.5rem !important;
            }

            .mt-xl-5 {
                margin-top: 3rem !important;
            }

            .mt-xl-auto {
                margin-top: auto !important;
            }

            .me-xl-0 {
                margin-left: 0 !important;
            }

            .me-xl-1 {
                margin-left: 0.25rem !important;
            }

            .me-xl-2 {
                margin-left: 0.5rem !important;
            }

            .me-xl-3 {
                margin-left: 1rem !important;
            }

            .me-xl-4 {
                margin-left: 1.5rem !important;
            }

            .me-xl-5 {
                margin-left: 3rem !important;
            }

            .me-xl-auto {
                margin-left: auto !important;
            }

            .mb-xl-0 {
                margin-bottom: 0 !important;
            }

            .mb-xl-1 {
                margin-bottom: 0.25rem !important;
            }

            .mb-xl-2 {
                margin-bottom: 0.5rem !important;
            }

            .mb-xl-3 {
                margin-bottom: 1rem !important;
            }

            .mb-xl-4 {
                margin-bottom: 1.5rem !important;
            }

            .mb-xl-5 {
                margin-bottom: 3rem !important;
            }

            .mb-xl-auto {
                margin-bottom: auto !important;
            }

            .ms-xl-0 {
                margin-right: 0 !important;
            }

            .ms-xl-1 {
                margin-right: 0.25rem !important;
            }

            .ms-xl-2 {
                margin-right: 0.5rem !important;
            }

            .ms-xl-3 {
                margin-right: 1rem !important;
            }

            .ms-xl-4 {
                margin-right: 1.5rem !important;
            }

            .ms-xl-5 {
                margin-right: 3rem !important;
            }

            .ms-xl-auto {
                margin-right: auto !important;
            }

            .m-xl-n1 {
                margin: -0.25rem !important;
            }

            .m-xl-n2 {
                margin: -0.5rem !important;
            }

            .m-xl-n3 {
                margin: -1rem !important;
            }

            .m-xl-n4 {
                margin: -1.5rem !important;
            }

            .m-xl-n5 {
                margin: -3rem !important;
            }

            .mx-xl-n1 {
                margin-left: -0.25rem !important;
                margin-right: -0.25rem !important;
            }

            .mx-xl-n2 {
                margin-left: -0.5rem !important;
                margin-right: -0.5rem !important;
            }

            .mx-xl-n3 {
                margin-left: -1rem !important;
                margin-right: -1rem !important;
            }

            .mx-xl-n4 {
                margin-left: -1.5rem !important;
                margin-right: -1.5rem !important;
            }

            .mx-xl-n5 {
                margin-left: -3rem !important;
                margin-right: -3rem !important;
            }

            .my-xl-n1 {
                margin-top: -0.25rem !important;
                margin-bottom: -0.25rem !important;
            }

            .my-xl-n2 {
                margin-top: -0.5rem !important;
                margin-bottom: -0.5rem !important;
            }

            .my-xl-n3 {
                margin-top: -1rem !important;
                margin-bottom: -1rem !important;
            }

            .my-xl-n4 {
                margin-top: -1.5rem !important;
                margin-bottom: -1.5rem !important;
            }

            .my-xl-n5 {
                margin-top: -3rem !important;
                margin-bottom: -3rem !important;
            }

            .mt-xl-n1 {
                margin-top: -0.25rem !important;
            }

            .mt-xl-n2 {
                margin-top: -0.5rem !important;
            }

            .mt-xl-n3 {
                margin-top: -1rem !important;
            }

            .mt-xl-n4 {
                margin-top: -1.5rem !important;
            }

            .mt-xl-n5 {
                margin-top: -3rem !important;
            }

            .me-xl-n1 {
                margin-left: -0.25rem !important;
            }

            .me-xl-n2 {
                margin-left: -0.5rem !important;
            }

            .me-xl-n3 {
                margin-left: -1rem !important;
            }

            .me-xl-n4 {
                margin-left: -1.5rem !important;
            }

            .me-xl-n5 {
                margin-left: -3rem !important;
            }

            .mb-xl-n1 {
                margin-bottom: -0.25rem !important;
            }

            .mb-xl-n2 {
                margin-bottom: -0.5rem !important;
            }

            .mb-xl-n3 {
                margin-bottom: -1rem !important;
            }

            .mb-xl-n4 {
                margin-bottom: -1.5rem !important;
            }

            .mb-xl-n5 {
                margin-bottom: -3rem !important;
            }

            .ms-xl-n1 {
                margin-right: -0.25rem !important;
            }

            .ms-xl-n2 {
                margin-right: -0.5rem !important;
            }

            .ms-xl-n3 {
                margin-right: -1rem !important;
            }

            .ms-xl-n4 {
                margin-right: -1.5rem !important;
            }

            .ms-xl-n5 {
                margin-right: -3rem !important;
            }

            .p-xl-0 {
                padding: 0 !important;
            }

            .p-xl-1 {
                padding: 0.25rem !important;
            }

            .p-xl-2 {
                padding: 0.5rem !important;
            }

            .p-xl-3 {
                padding: 1rem !important;
            }

            .p-xl-4 {
                padding: 1.5rem !important;
            }

            .p-xl-5 {
                padding: 3rem !important;
            }

            .px-xl-0 {
                padding-left: 0 !important;
                padding-right: 0 !important;
            }

            .px-xl-1 {
                padding-left: 0.25rem !important;
                padding-right: 0.25rem !important;
            }

            .px-xl-2 {
                padding-left: 0.5rem !important;
                padding-right: 0.5rem !important;
            }

            .px-xl-3 {
                padding-left: 1rem !important;
                padding-right: 1rem !important;
            }

            .px-xl-4 {
                padding-left: 1.5rem !important;
                padding-right: 1.5rem !important;
            }

            .px-xl-5 {
                padding-left: 3rem !important;
                padding-right: 3rem !important;
            }

            .py-xl-0 {
                padding-top: 0 !important;
                padding-bottom: 0 !important;
            }

            .py-xl-1 {
                padding-top: 0.25rem !important;
                padding-bottom: 0.25rem !important;
            }

            .py-xl-2 {
                padding-top: 0.5rem !important;
                padding-bottom: 0.5rem !important;
            }

            .py-xl-3 {
                padding-top: 1rem !important;
                padding-bottom: 1rem !important;
            }

            .py-xl-4 {
                padding-top: 1.5rem !important;
                padding-bottom: 1.5rem !important;
            }

            .py-xl-5 {
                padding-top: 3rem !important;
                padding-bottom: 3rem !important;
            }

            .pt-xl-0 {
                padding-top: 0 !important;
            }

            .pt-xl-1 {
                padding-top: 0.25rem !important;
            }

            .pt-xl-2 {
                padding-top: 0.5rem !important;
            }

            .pt-xl-3 {
                padding-top: 1rem !important;
            }

            .pt-xl-4 {
                padding-top: 1.5rem !important;
            }

            .pt-xl-5 {
                padding-top: 3rem !important;
            }

            .pe-xl-0 {
                padding-left: 0 !important;
            }

            .pe-xl-1 {
                padding-left: 0.25rem !important;
            }

            .pe-xl-2 {
                padding-left: 0.5rem !important;
            }

            .pe-xl-3 {
                padding-left: 1rem !important;
            }

            .pe-xl-4 {
                padding-left: 1.5rem !important;
            }

            .pe-xl-5 {
                padding-left: 3rem !important;
            }

            .pb-xl-0 {
                padding-bottom: 0 !important;
            }

            .pb-xl-1 {
                padding-bottom: 0.25rem !important;
            }

            .pb-xl-2 {
                padding-bottom: 0.5rem !important;
            }

            .pb-xl-3 {
                padding-bottom: 1rem !important;
            }

            .pb-xl-4 {
                padding-bottom: 1.5rem !important;
            }

            .pb-xl-5 {
                padding-bottom: 3rem !important;
            }

            .ps-xl-0 {
                padding-right: 0 !important;
            }

            .ps-xl-1 {
                padding-right: 0.25rem !important;
            }

            .ps-xl-2 {
                padding-right: 0.5rem !important;
            }

            .ps-xl-3 {
                padding-right: 1rem !important;
            }

            .ps-xl-4 {
                padding-right: 1.5rem !important;
            }

            .ps-xl-5 {
                padding-right: 3rem !important;
            }

            .text-xl-start {
                text-align: right !important;
            }

            .text-xl-end {
                text-align: left !important;
            }

            .text-xl-center {
                text-align: center !important;
            }
        }

        @media (min-width: 1400px) {
            .float-xxl-start {
                float: right !important;
            }

            .float-xxl-end {
                float: left !important;
            }

            .float-xxl-none {
                float: none !important;
            }

            .d-xxl-inline {
                display: inline !important;
            }

            .d-xxl-inline-block {
                display: inline-block !important;
            }

            .d-xxl-block {
                display: block !important;
            }

            .d-xxl-grid {
                display: grid !important;
            }

            .d-xxl-table {
                display: table !important;
            }

            .d-xxl-table-row {
                display: table-row !important;
            }

            .d-xxl-table-cell {
                display: table-cell !important;
            }

            .d-xxl-flex {
                display: -webkit-box !important;
                display: -ms-flexbox !important;
                display: flex !important;
            }

            .d-xxl-inline-flex {
                display: -webkit-inline-box !important;
                display: -ms-inline-flexbox !important;
                display: inline-flex !important;
            }

            .d-xxl-none {
                display: none !important;
            }

            .flex-xxl-fill {
                -webkit-box-flex: 1 !important;
                -ms-flex: 1 1 auto !important;
                flex: 1 1 auto !important;
            }

            .flex-xxl-row {
                -webkit-box-orient: horizontal !important;
                -webkit-box-direction: normal !important;
                -ms-flex-direction: row !important;
                flex-direction: row !important;
            }

            .flex-xxl-column {
                -webkit-box-orient: vertical !important;
                -webkit-box-direction: normal !important;
                -ms-flex-direction: column !important;
                flex-direction: column !important;
            }

            .flex-xxl-row-reverse {
                -webkit-box-orient: horizontal !important;
                -webkit-box-direction: reverse !important;
                -ms-flex-direction: row-reverse !important;
                flex-direction: row-reverse !important;
            }

            .flex-xxl-column-reverse {
                -webkit-box-orient: vertical !important;
                -webkit-box-direction: reverse !important;
                -ms-flex-direction: column-reverse !important;
                flex-direction: column-reverse !important;
            }

            .flex-xxl-grow-0 {
                -webkit-box-flex: 0 !important;
                -ms-flex-positive: 0 !important;
                flex-grow: 0 !important;
            }

            .flex-xxl-grow-1 {
                -webkit-box-flex: 1 !important;
                -ms-flex-positive: 1 !important;
                flex-grow: 1 !important;
            }

            .flex-xxl-shrink-0 {
                -ms-flex-negative: 0 !important;
                flex-shrink: 0 !important;
            }

            .flex-xxl-shrink-1 {
                -ms-flex-negative: 1 !important;
                flex-shrink: 1 !important;
            }

            .flex-xxl-wrap {
                -ms-flex-wrap: wrap !important;
                flex-wrap: wrap !important;
            }

            .flex-xxl-nowrap {
                -ms-flex-wrap: nowrap !important;
                flex-wrap: nowrap !important;
            }

            .flex-xxl-wrap-reverse {
                -ms-flex-wrap: wrap-reverse !important;
                flex-wrap: wrap-reverse !important;
            }

            .gap-xxl-0 {
                gap: 0 !important;
            }

            .gap-xxl-1 {
                gap: 0.25rem !important;
            }

            .gap-xxl-2 {
                gap: 0.5rem !important;
            }

            .gap-xxl-3 {
                gap: 1rem !important;
            }

            .gap-xxl-4 {
                gap: 1.5rem !important;
            }

            .gap-xxl-5 {
                gap: 3rem !important;
            }

            .justify-content-xxl-start {
                -webkit-box-pack: start !important;
                -ms-flex-pack: start !important;
                justify-content: flex-start !important;
            }

            .justify-content-xxl-end {
                -webkit-box-pack: end !important;
                -ms-flex-pack: end !important;
                justify-content: flex-end !important;
            }

            .justify-content-xxl-center {
                -webkit-box-pack: center !important;
                -ms-flex-pack: center !important;
                justify-content: center !important;
            }

            .justify-content-xxl-between {
                -webkit-box-pack: justify !important;
                -ms-flex-pack: justify !important;
                justify-content: space-between !important;
            }

            .justify-content-xxl-around {
                -ms-flex-pack: distribute !important;
                justify-content: space-around !important;
            }

            .justify-content-xxl-evenly {
                -webkit-box-pack: space-evenly !important;
                -ms-flex-pack: space-evenly !important;
                justify-content: space-evenly !important;
            }

            .align-items-xxl-start {
                -webkit-box-align: start !important;
                -ms-flex-align: start !important;
                align-items: flex-start !important;
            }

            .align-items-xxl-end {
                -webkit-box-align: end !important;
                -ms-flex-align: end !important;
                align-items: flex-end !important;
            }

            .align-items-xxl-center {
                -webkit-box-align: center !important;
                -ms-flex-align: center !important;
                align-items: center !important;
            }

            .align-items-xxl-baseline {
                -webkit-box-align: baseline !important;
                -ms-flex-align: baseline !important;
                align-items: baseline !important;
            }

            .align-items-xxl-stretch {
                -webkit-box-align: stretch !important;
                -ms-flex-align: stretch !important;
                align-items: stretch !important;
            }

            .align-content-xxl-start {
                -ms-flex-line-pack: start !important;
                align-content: flex-start !important;
            }

            .align-content-xxl-end {
                -ms-flex-line-pack: end !important;
                align-content: flex-end !important;
            }

            .align-content-xxl-center {
                -ms-flex-line-pack: center !important;
                align-content: center !important;
            }

            .align-content-xxl-between {
                -ms-flex-line-pack: justify !important;
                align-content: space-between !important;
            }

            .align-content-xxl-around {
                -ms-flex-line-pack: distribute !important;
                align-content: space-around !important;
            }

            .align-content-xxl-stretch {
                -ms-flex-line-pack: stretch !important;
                align-content: stretch !important;
            }

            .align-self-xxl-auto {
                -ms-flex-item-align: auto !important;
                align-self: auto !important;
            }

            .align-self-xxl-start {
                -ms-flex-item-align: start !important;
                align-self: flex-start !important;
            }

            .align-self-xxl-end {
                -ms-flex-item-align: end !important;
                align-self: flex-end !important;
            }

            .align-self-xxl-center {
                -ms-flex-item-align: center !important;
                align-self: center !important;
            }

            .align-self-xxl-baseline {
                -ms-flex-item-align: baseline !important;
                align-self: baseline !important;
            }

            .align-self-xxl-stretch {
                -ms-flex-item-align: stretch !important;
                align-self: stretch !important;
            }

            .order-xxl-first {
                -webkit-box-ordinal-group: 0 !important;
                -ms-flex-order: -1 !important;
                order: -1 !important;
            }

            .order-xxl-0 {
                -webkit-box-ordinal-group: 1 !important;
                -ms-flex-order: 0 !important;
                order: 0 !important;
            }

            .order-xxl-1 {
                -webkit-box-ordinal-group: 2 !important;
                -ms-flex-order: 1 !important;
                order: 1 !important;
            }

            .order-xxl-2 {
                -webkit-box-ordinal-group: 3 !important;
                -ms-flex-order: 2 !important;
                order: 2 !important;
            }

            .order-xxl-3 {
                -webkit-box-ordinal-group: 4 !important;
                -ms-flex-order: 3 !important;
                order: 3 !important;
            }

            .order-xxl-4 {
                -webkit-box-ordinal-group: 5 !important;
                -ms-flex-order: 4 !important;
                order: 4 !important;
            }

            .order-xxl-5 {
                -webkit-box-ordinal-group: 6 !important;
                -ms-flex-order: 5 !important;
                order: 5 !important;
            }

            .order-xxl-last {
                -webkit-box-ordinal-group: 7 !important;
                -ms-flex-order: 6 !important;
                order: 6 !important;
            }

            .m-xxl-0 {
                margin: 0 !important;
            }

            .m-xxl-1 {
                margin: 0.25rem !important;
            }

            .m-xxl-2 {
                margin: 0.5rem !important;
            }

            .m-xxl-3 {
                margin: 1rem !important;
            }

            .m-xxl-4 {
                margin: 1.5rem !important;
            }

            .m-xxl-5 {
                margin: 3rem !important;
            }

            .m-xxl-auto {
                margin: auto !important;
            }

            .mx-xxl-0 {
                margin-left: 0 !important;
                margin-right: 0 !important;
            }

            .mx-xxl-1 {
                margin-left: 0.25rem !important;
                margin-right: 0.25rem !important;
            }

            .mx-xxl-2 {
                margin-left: 0.5rem !important;
                margin-right: 0.5rem !important;
            }

            .mx-xxl-3 {
                margin-left: 1rem !important;
                margin-right: 1rem !important;
            }

            .mx-xxl-4 {
                margin-left: 1.5rem !important;
                margin-right: 1.5rem !important;
            }

            .mx-xxl-5 {
                margin-left: 3rem !important;
                margin-right: 3rem !important;
            }

            .mx-xxl-auto {
                margin-left: auto !important;
                margin-right: auto !important;
            }

            .my-xxl-0 {
                margin-top: 0 !important;
                margin-bottom: 0 !important;
            }

            .my-xxl-1 {
                margin-top: 0.25rem !important;
                margin-bottom: 0.25rem !important;
            }

            .my-xxl-2 {
                margin-top: 0.5rem !important;
                margin-bottom: 0.5rem !important;
            }

            .my-xxl-3 {
                margin-top: 1rem !important;
                margin-bottom: 1rem !important;
            }

            .my-xxl-4 {
                margin-top: 1.5rem !important;
                margin-bottom: 1.5rem !important;
            }

            .my-xxl-5 {
                margin-top: 3rem !important;
                margin-bottom: 3rem !important;
            }

            .my-xxl-auto {
                margin-top: auto !important;
                margin-bottom: auto !important;
            }

            .mt-xxl-0 {
                margin-top: 0 !important;
            }

            .mt-xxl-1 {
                margin-top: 0.25rem !important;
            }

            .mt-xxl-2 {
                margin-top: 0.5rem !important;
            }

            .mt-xxl-3 {
                margin-top: 1rem !important;
            }

            .mt-xxl-4 {
                margin-top: 1.5rem !important;
            }

            .mt-xxl-5 {
                margin-top: 3rem !important;
            }

            .mt-xxl-auto {
                margin-top: auto !important;
            }

            .me-xxl-0 {
                margin-left: 0 !important;
            }

            .me-xxl-1 {
                margin-left: 0.25rem !important;
            }

            .me-xxl-2 {
                margin-left: 0.5rem !important;
            }

            .me-xxl-3 {
                margin-left: 1rem !important;
            }

            .me-xxl-4 {
                margin-left: 1.5rem !important;
            }

            .me-xxl-5 {
                margin-left: 3rem !important;
            }

            .me-xxl-auto {
                margin-left: auto !important;
            }

            .mb-xxl-0 {
                margin-bottom: 0 !important;
            }

            .mb-xxl-1 {
                margin-bottom: 0.25rem !important;
            }

            .mb-xxl-2 {
                margin-bottom: 0.5rem !important;
            }

            .mb-xxl-3 {
                margin-bottom: 1rem !important;
            }

            .mb-xxl-4 {
                margin-bottom: 1.5rem !important;
            }

            .mb-xxl-5 {
                margin-bottom: 3rem !important;
            }

            .mb-xxl-auto {
                margin-bottom: auto !important;
            }

            .ms-xxl-0 {
                margin-right: 0 !important;
            }

            .ms-xxl-1 {
                margin-right: 0.25rem !important;
            }

            .ms-xxl-2 {
                margin-right: 0.5rem !important;
            }

            .ms-xxl-3 {
                margin-right: 1rem !important;
            }

            .ms-xxl-4 {
                margin-right: 1.5rem !important;
            }

            .ms-xxl-5 {
                margin-right: 3rem !important;
            }

            .ms-xxl-auto {
                margin-right: auto !important;
            }

            .m-xxl-n1 {
                margin: -0.25rem !important;
            }

            .m-xxl-n2 {
                margin: -0.5rem !important;
            }

            .m-xxl-n3 {
                margin: -1rem !important;
            }

            .m-xxl-n4 {
                margin: -1.5rem !important;
            }

            .m-xxl-n5 {
                margin: -3rem !important;
            }

            .mx-xxl-n1 {
                margin-left: -0.25rem !important;
                margin-right: -0.25rem !important;
            }

            .mx-xxl-n2 {
                margin-left: -0.5rem !important;
                margin-right: -0.5rem !important;
            }

            .mx-xxl-n3 {
                margin-left: -1rem !important;
                margin-right: -1rem !important;
            }

            .mx-xxl-n4 {
                margin-left: -1.5rem !important;
                margin-right: -1.5rem !important;
            }

            .mx-xxl-n5 {
                margin-left: -3rem !important;
                margin-right: -3rem !important;
            }

            .my-xxl-n1 {
                margin-top: -0.25rem !important;
                margin-bottom: -0.25rem !important;
            }

            .my-xxl-n2 {
                margin-top: -0.5rem !important;
                margin-bottom: -0.5rem !important;
            }

            .my-xxl-n3 {
                margin-top: -1rem !important;
                margin-bottom: -1rem !important;
            }

            .my-xxl-n4 {
                margin-top: -1.5rem !important;
                margin-bottom: -1.5rem !important;
            }

            .my-xxl-n5 {
                margin-top: -3rem !important;
                margin-bottom: -3rem !important;
            }

            .mt-xxl-n1 {
                margin-top: -0.25rem !important;
            }

            .mt-xxl-n2 {
                margin-top: -0.5rem !important;
            }

            .mt-xxl-n3 {
                margin-top: -1rem !important;
            }

            .mt-xxl-n4 {
                margin-top: -1.5rem !important;
            }

            .mt-xxl-n5 {
                margin-top: -3rem !important;
            }

            .me-xxl-n1 {
                margin-left: -0.25rem !important;
            }

            .me-xxl-n2 {
                margin-left: -0.5rem !important;
            }

            .me-xxl-n3 {
                margin-left: -1rem !important;
            }

            .me-xxl-n4 {
                margin-left: -1.5rem !important;
            }

            .me-xxl-n5 {
                margin-left: -3rem !important;
            }

            .mb-xxl-n1 {
                margin-bottom: -0.25rem !important;
            }

            .mb-xxl-n2 {
                margin-bottom: -0.5rem !important;
            }

            .mb-xxl-n3 {
                margin-bottom: -1rem !important;
            }

            .mb-xxl-n4 {
                margin-bottom: -1.5rem !important;
            }

            .mb-xxl-n5 {
                margin-bottom: -3rem !important;
            }

            .ms-xxl-n1 {
                margin-right: -0.25rem !important;
            }

            .ms-xxl-n2 {
                margin-right: -0.5rem !important;
            }

            .ms-xxl-n3 {
                margin-right: -1rem !important;
            }

            .ms-xxl-n4 {
                margin-right: -1.5rem !important;
            }

            .ms-xxl-n5 {
                margin-right: -3rem !important;
            }

            .p-xxl-0 {
                padding: 0 !important;
            }

            .p-xxl-1 {
                padding: 0.25rem !important;
            }

            .p-xxl-2 {
                padding: 0.5rem !important;
            }

            .p-xxl-3 {
                padding: 1rem !important;
            }

            .p-xxl-4 {
                padding: 1.5rem !important;
            }

            .p-xxl-5 {
                padding: 3rem !important;
            }

            .px-xxl-0 {
                padding-left: 0 !important;
                padding-right: 0 !important;
            }

            .px-xxl-1 {
                padding-left: 0.25rem !important;
                padding-right: 0.25rem !important;
            }

            .px-xxl-2 {
                padding-left: 0.5rem !important;
                padding-right: 0.5rem !important;
            }

            .px-xxl-3 {
                padding-left: 1rem !important;
                padding-right: 1rem !important;
            }

            .px-xxl-4 {
                padding-left: 1.5rem !important;
                padding-right: 1.5rem !important;
            }

            .px-xxl-5 {
                padding-left: 3rem !important;
                padding-right: 3rem !important;
            }

            .py-xxl-0 {
                padding-top: 0 !important;
                padding-bottom: 0 !important;
            }

            .py-xxl-1 {
                padding-top: 0.25rem !important;
                padding-bottom: 0.25rem !important;
            }

            .py-xxl-2 {
                padding-top: 0.5rem !important;
                padding-bottom: 0.5rem !important;
            }

            .py-xxl-3 {
                padding-top: 1rem !important;
                padding-bottom: 1rem !important;
            }

            .py-xxl-4 {
                padding-top: 1.5rem !important;
                padding-bottom: 1.5rem !important;
            }

            .py-xxl-5 {
                padding-top: 3rem !important;
                padding-bottom: 3rem !important;
            }

            .pt-xxl-0 {
                padding-top: 0 !important;
            }

            .pt-xxl-1 {
                padding-top: 0.25rem !important;
            }

            .pt-xxl-2 {
                padding-top: 0.5rem !important;
            }

            .pt-xxl-3 {
                padding-top: 1rem !important;
            }

            .pt-xxl-4 {
                padding-top: 1.5rem !important;
            }

            .pt-xxl-5 {
                padding-top: 3rem !important;
            }

            .pe-xxl-0 {
                padding-left: 0 !important;
            }

            .pe-xxl-1 {
                padding-left: 0.25rem !important;
            }

            .pe-xxl-2 {
                padding-left: 0.5rem !important;
            }

            .pe-xxl-3 {
                padding-left: 1rem !important;
            }

            .pe-xxl-4 {
                padding-left: 1.5rem !important;
            }

            .pe-xxl-5 {
                padding-left: 3rem !important;
            }

            .pb-xxl-0 {
                padding-bottom: 0 !important;
            }

            .pb-xxl-1 {
                padding-bottom: 0.25rem !important;
            }

            .pb-xxl-2 {
                padding-bottom: 0.5rem !important;
            }

            .pb-xxl-3 {
                padding-bottom: 1rem !important;
            }

            .pb-xxl-4 {
                padding-bottom: 1.5rem !important;
            }

            .pb-xxl-5 {
                padding-bottom: 3rem !important;
            }

            .ps-xxl-0 {
                padding-right: 0 !important;
            }

            .ps-xxl-1 {
                padding-right: 0.25rem !important;
            }

            .ps-xxl-2 {
                padding-right: 0.5rem !important;
            }

            .ps-xxl-3 {
                padding-right: 1rem !important;
            }

            .ps-xxl-4 {
                padding-right: 1.5rem !important;
            }

            .ps-xxl-5 {
                padding-right: 3rem !important;
            }

            .text-xxl-start {
                text-align: right !important;
            }

            .text-xxl-end {
                text-align: left !important;
            }

            .text-xxl-center {
                text-align: center !important;
            }
        }

        @media (min-width: 1200px) {
            .fs-1 {
                font-size: 2.03125rem !important;
            }

            .fs-2 {
                font-size: 1.625rem !important;
            }

            .fs-3 {
                font-size: 1.42188rem !important;
            }

            .fs-sm-1 {
                font-size: 2.03125rem !important;
            }

            .fs-sm-2 {
                font-size: 1.625rem !important;
            }

            .fs-sm-3 {
                font-size: 1.42188rem !important;
            }

            .fs-md-1 {
                font-size: 2.03125rem !important;
            }

            .fs-md-2 {
                font-size: 1.625rem !important;
            }

            .fs-md-3 {
                font-size: 1.42188rem !important;
            }

            .fs-lg-1 {
                font-size: 2.03125rem !important;
            }

            .fs-lg-2 {
                font-size: 1.625rem !important;
            }

            .fs-lg-3 {
                font-size: 1.42188rem !important;
            }
        }

        @media print {
            .d-print-inline {
                display: inline !important;
            }

            .d-print-inline-block {
                display: inline-block !important;
            }

            .d-print-block {
                display: block !important;
            }

            .d-print-grid {
                display: grid !important;
            }

            .d-print-table {
                display: table !important;
            }

            .d-print-table-row {
                display: table-row !important;
            }

            .d-print-table-cell {
                display: table-cell !important;
            }

            .d-print-flex {
                display: -webkit-box !important;
                display: -ms-flexbox !important;
                display: flex !important;
            }

            .d-print-inline-flex {
                display: -webkit-inline-box !important;
                display: -ms-inline-flexbox !important;
                display: inline-flex !important;
            }

            .d-print-none {
                display: none !important;
            }
        }

        /* =============
   General
============= */
        html {
            position: relative;
            min-height: 100%;
        }

        .h1,
        .h2,
        .h3,
        .h4,
        .h5,
        .h6,
        h1,
        .h1,
        h2,
        .h2,
        h3,
        .h3,
        h4,
        .h4,
        h5,
        .h5,
        h6,
        .h6 {
            color: #495057;
        }

        a {
            text-decoration: none !important;
        }

        label {
            font-weight: 500;
            margin-bottom: 0.5rem;
        }

        .blockquote {
            padding: 10px 20px;
            border-right: 4px solid #f6f6f6;
        }

        .blockquote-reverse {
            border-right: 0;
            border-left: 4px solid #f6f6f6;
            text-align: left;
        }

        @media (min-width: 1200px) {

            .container,
            .container-lg,
            .container-md,
            .container-sm,
            .container-xl,
            .container-xxl {
                max-width: 1140px;
            }
        }

        .row>* {
            position: relative;
        }

        .bg-primary.bg-soft {
            background-color: rgba(85, 110, 230, 0.25) !important;
        }

        .bg-secondary.bg-soft {
            background-color: rgba(116, 120, 141, 0.25) !important;
        }

        .bg-success.bg-soft {
            background-color: rgba(52, 195, 143, 0.25) !important;
        }

        .bg-info.bg-soft {
            background-color: rgba(80, 165, 241, 0.25) !important;
        }

        .bg-warning.bg-soft {
            background-color: rgba(241, 180, 76, 0.25) !important;
        }

        .bg-danger.bg-soft {
            background-color: rgba(244, 106, 106, 0.25) !important;
        }

        .bg-pink.bg-soft {
            background-color: rgba(232, 62, 140, 0.25) !important;
        }

        .bg-light.bg-soft {
            background-color: rgba(239, 242, 247, 0.25) !important;
        }

        .bg-dark.bg-soft {
            background-color: rgba(52, 58, 64, 0.25) !important;
        }

        .badge[href]:hover,
        .badge[href]:focus {
            color: #fff;
        }

        .badge.bg-primary[href]:hover,
        .badge.bg-primary[href]:focus {
            background-color: #435fe3 !important;
        }

        .badge.bg-light {
            color: #495057;
        }

        .badge.bg-light[href]:hover,
        .badge.bg-light[href]:focus {
            color: #495057;
        }

        .badge-soft-primary {
            color: #556ee6;
            background-color: rgba(85, 110, 230, 0.18);
        }

        .badge-soft-primary[href]:hover,
        .badge-soft-primary[href]:focus {
            color: #556ee6;
            text-decoration: none;
            background-color: rgba(85, 110, 230, 0.4);
        }

        .badge.bg-secondary[href]:hover,
        .badge.bg-secondary[href]:focus {
            background-color: #6b6e82 !important;
        }

        .badge.bg-light {
            color: #495057;
        }

        .badge.bg-light[href]:hover,
        .badge.bg-light[href]:focus {
            color: #495057;
        }

        .badge-soft-secondary {
            color: #74788d;
            background-color: rgba(116, 120, 141, 0.18);
        }

        .badge-soft-secondary[href]:hover,
        .badge-soft-secondary[href]:focus {
            color: #74788d;
            text-decoration: none;
            background-color: rgba(116, 120, 141, 0.4);
        }

        .badge.bg-success[href]:hover,
        .badge.bg-success[href]:focus {
            background-color: #30b383 !important;
        }

        .badge.bg-light {
            color: #495057;
        }

        .badge.bg-light[href]:hover,
        .badge.bg-light[href]:focus {
            color: #495057;
        }

        .badge-soft-success {
            color: #34c38f;
            background-color: rgba(52, 195, 143, 0.18);
        }

        .badge-soft-success[href]:hover,
        .badge-soft-success[href]:focus {
            color: #34c38f;
            text-decoration: none;
            background-color: rgba(52, 195, 143, 0.4);
        }

        .badge.bg-info[href]:hover,
        .badge.bg-info[href]:focus {
            background-color: #3d9bef !important;
        }

        .badge.bg-light {
            color: #495057;
        }

        .badge.bg-light[href]:hover,
        .badge.bg-light[href]:focus {
            color: #495057;
        }

        .badge-soft-info {
            color: #50a5f1;
            background-color: rgba(80, 165, 241, 0.18);
        }

        .badge-soft-info[href]:hover,
        .badge-soft-info[href]:focus {
            color: #50a5f1;
            text-decoration: none;
            background-color: rgba(80, 165, 241, 0.4);
        }

        .badge.bg-warning[href]:hover,
        .badge.bg-warning[href]:focus {
            background-color: #f0ac39 !important;
        }

        .badge.bg-light {
            color: #495057;
        }

        .badge.bg-light[href]:hover,
        .badge.bg-light[href]:focus {
            color: #495057;
        }

        .badge-soft-warning {
            color: #f1b44c;
            background-color: rgba(241, 180, 76, 0.18);
        }

        .badge-soft-warning[href]:hover,
        .badge-soft-warning[href]:focus {
            color: #f1b44c;
            text-decoration: none;
            background-color: rgba(241, 180, 76, 0.4);
        }

        .badge.bg-danger[href]:hover,
        .badge.bg-danger[href]:focus {
            background-color: #f35757 !important;
        }

        .badge.bg-light {
            color: #495057;
        }

        .badge.bg-light[href]:hover,
        .badge.bg-light[href]:focus {
            color: #495057;
        }

        .badge-soft-danger {
            color: #f46a6a;
            background-color: rgba(244, 106, 106, 0.18);
        }

        .badge-soft-danger[href]:hover,
        .badge-soft-danger[href]:focus {
            color: #f46a6a;
            text-decoration: none;
            background-color: rgba(244, 106, 106, 0.4);
        }

        .badge.bg-pink[href]:hover,
        .badge.bg-pink[href]:focus {
            background-color: #e62c81 !important;
        }

        .badge.bg-light {
            color: #495057;
        }

        .badge.bg-light[href]:hover,
        .badge.bg-light[href]:focus {
            color: #495057;
        }

        .badge-soft-pink {
            color: #e83e8c;
            background-color: rgba(232, 62, 140, 0.18);
        }

        .badge-soft-pink[href]:hover,
        .badge-soft-pink[href]:focus {
            color: #e83e8c;
            text-decoration: none;
            background-color: rgba(232, 62, 140, 0.4);
        }

        .badge.bg-light[href]:hover,
        .badge.bg-light[href]:focus {
            background-color: #e1e7f0 !important;
        }

        .badge.bg-light {
            color: #495057;
        }

        .badge.bg-light[href]:hover,
        .badge.bg-light[href]:focus {
            color: #495057;
        }

        .badge-soft-light {
            color: #eff2f7;
            background-color: rgba(239, 242, 247, 0.18);
        }

        .badge-soft-light[href]:hover,
        .badge-soft-light[href]:focus {
            color: #eff2f7;
            text-decoration: none;
            background-color: rgba(239, 242, 247, 0.4);
        }

        .badge.bg-dark[href]:hover,
        .badge.bg-dark[href]:focus {
            background-color: #2b3035 !important;
        }

        .badge.bg-light {
            color: #495057;
        }

        .badge.bg-light[href]:hover,
        .badge.bg-light[href]:focus {
            color: #495057;
        }

        .badge-soft-dark {
            color: #343a40;
            background-color: rgba(52, 58, 64, 0.18);
        }

        .badge-soft-dark[href]:hover,
        .badge-soft-dark[href]:focus {
            color: #343a40;
            text-decoration: none;
            background-color: rgba(52, 58, 64, 0.4);
        }

        .rounded-pill {
            padding-left: .6em;
            padding-right: .6em;
        }

        .badge.bg-dark {
            color: #eff2f7;
        }

        button,
        a {
            outline: none !important;
        }

        .btn-rounded {
            border-radius: 30px;
        }

        .btn-dark,
        .btn-secondary {
            color: #eff2f7 !important;
        }

        .btn-outline-light {
            color: #212529;
        }

        .btn-outline-dark:not(:disabled):not(.disabled):active,
        .btn-outline-dark:not(:disabled):not(.disabled).active,
        .show>.btn-outline-dark.dropdown-toggle,
        .btn-outline-dark:hover,
        .btn-dark:not(:disabled):not(.disabled):active,
        .btn-dark:not(:disabled):not(.disabled).active,
        .show>.btn-dark.dropdown-toggle,
        .btn-dark:hover {
            color: #eff2f7;
        }

        .btn-group-example .btn {
            position: relative;
        }

        .btn-group-example .btn:first-child::before {
            display: none;
        }

        .btn-group-example .btn:before {
            content: "OR";
            position: absolute;
            font-size: 10px;
            width: 24px;
            height: 24px;
            line-height: 24px;
            border-radius: 50%;
            background-color: #74788d;
            color: #eff2f7;
            border: 1px solid #fff;
            right: -12px;
            top: 50%;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
            z-index: 1;
        }

        .btn-label {
            position: relative;
            padding-right: 44px;
        }

        .btn-label .label-icon {
            position: absolute;
            width: 32px;
            height: 100%;
            right: 0;
            top: 0;
            background-color: rgba(255, 255, 255, 0.1);
            border-left: 1px solid rgba(255, 255, 255, 0.1);
            font-size: 16px;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
        }

        .btn-label.btn-light .label-icon {
            background-color: rgba(52, 58, 64, 0.1);
            border-left: 1px solid rgba(52, 58, 64, 0.2);
        }

        .breadcrumb-item>a {
            color: #495057;
        }

        .breadcrumb-item+.breadcrumb-item::before {
            font-family: "Material Design Icons";
        }

        .card {
            margin-bottom: 24px;
            -webkit-box-shadow: 0 0.75rem 1.5rem rgba(18, 38, 63, 0.03);
            box-shadow: 0 0.75rem 1.5rem rgba(18, 38, 63, 0.03);
        }

        .card-drop {
            color: #495057;
        }

        .card-title {
            font-size: 15px;
            margin: 0 0 7px 0;
            font-weight: 600;
        }

        .card-title-desc {
            color: #74788d;
            margin-bottom: 24px;
        }

        .dropdown-menu {
            -webkit-box-shadow: 0 1rem 3rem rgba(0, 0, 0, 0.175);
            box-shadow: 0 1rem 3rem rgba(0, 0, 0, 0.175);
            -webkit-animation-name: DropDownSlide;
            animation-name: DropDownSlide;
            -webkit-animation-duration: .3s;
            animation-duration: .3s;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
            margin: 0;
            position: absolute;
            z-index: 1000;
        }

        .dropdown-menu.show {
            top: 100% !important;
        }

        .dropdown-menu-end[style] {
            right: auto !important;
            left: 0 !important;
        }

        .dropdown-menu[data-popper-placement^=left],
        .dropdown-menu[data-popper-placement^=top],
        .dropdown-menu[data-popper-placement^=right] {
            top: auto !important;
            -webkit-animation: none !important;
            animation: none !important;
        }

        @-webkit-keyframes DropDownSlide {
            100% {
                -webkit-transform: translateY(0);
                transform: translateY(0);
            }

            0% {
                -webkit-transform: translateY(10px);
                transform: translateY(10px);
            }
        }

        @keyframes DropDownSlide {
            100% {
                -webkit-transform: translateY(0);
                transform: translateY(0);
            }

            0% {
                -webkit-transform: translateY(10px);
                transform: translateY(10px);
            }
        }

        @media (min-width: 600px) {
            .dropdown-menu-lg {
                width: 320px;
            }

            .dropdown-menu-md {
                width: 240px;
            }
        }

        .dropdown-divider {
            border-top-color: #eff2f7;
        }

        .dropdown-mega {
            position: static !important;
        }

        .dropdown-megamenu[style] {
            padding: 20px;
            right: 20px !important;
            left: 20px !important;
        }

        .dropdown-mega-menu-xl {
            width: 40rem;
        }

        .dropdown-mega-menu-lg {
            width: 26rem;
        }

        .nav-tabs>li>a,
        .nav-pills>li>a {
            color: #495057;
            font-weight: 500;
        }

        .nav-pills>a {
            color: #495057;
            font-weight: 500;
        }

        .nav-tabs-custom {
            border-bottom: 2px solid #f6f6f6;
        }

        .nav-tabs-custom .nav-item {
            position: relative;
            color: #343a40;
        }

        .nav-tabs-custom .nav-item .nav-link {
            border: none;
        }

        .nav-tabs-custom .nav-item .nav-link::after {
            content: "";
            background: #556ee6;
            height: 2px;
            position: absolute;
            width: 100%;
            right: 0;
            bottom: -1px;
            -webkit-transition: all 250ms ease 0s;
            transition: all 250ms ease 0s;
            -webkit-transform: scale(0);
            transform: scale(0);
        }

        .nav-tabs-custom .nav-item .nav-link.active {
            color: #556ee6;
        }

        .nav-tabs-custom .nav-item .nav-link.active:after {
            -webkit-transform: scale(1);
            transform: scale(1);
        }

        .vertical-nav .nav .nav-link {
            padding: 24px 16px;
            text-align: center;
            margin-bottom: 8px;
        }

        .vertical-nav .nav .nav-link .nav-icon {
            font-size: 24px;
        }

        .table th {
            font-weight: 600;
        }

        .table .table-light {
            color: #495057;
            border-color: #eff2f7;
            background-color: #f8f9fa;
        }

        .table-bordered {
            border: 1px solid #eff2f7;
        }

        .table-bordered th,
        .table-bordered td {
            border: 1px solid #eff2f7;
        }

        .table-dark> :not(:last-child)> :last-child>* {
            border-bottom-color: #43494e;
        }

        .table-nowrap th,
        .table-nowrap td {
            white-space: nowrap;
        }

        .pagination-rounded .page-link {
            border-radius: 30px !important;
            margin: 0 3px !important;
            border: none;
            width: 32px;
            height: 32px;
            padding: 0;
            text-align: center;
            line-height: 32px;
        }

        .progress-sm {
            height: 5px;
        }

        .progress-md {
            height: 8px;
        }

        .progress-lg {
            height: 12px;
        }

        .progress-xl {
            height: 16px;
        }

        .custom-progess {
            position: relative;
        }

        .custom-progess .progress-icon {
            position: absolute;
            top: -12px;
        }

        .custom-progess .progress-icon .avatar-title {
            background: #fff;
        }

        .animated-progess {
            position: relative;
        }

        .animated-progess .progress-bar {
            position: relative;
            border-radius: 6px;
            -webkit-animation: animate-positive 2s;
            animation: animate-positive 2s;
        }

        @-webkit-keyframes animate-positive {
            0% {
                width: 0;
            }
        }

        @keyframes animate-positive {
            0% {
                width: 0;
            }
        }

        /*# sourceMappingURL=bootstrap-rtl.min.css.map */
        /*
Template Name: Skote - Admin & Dashboard Template
Author: Themesbrand
Version: 3.0.0
Website: https://themesbrand.com/
Contact: themesbrand@gmail.com
File: Main Css File
*/
        @import url("https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&display=swap");

        #page-topbar {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1002;
            background-color: #ffffff;
            -webkit-box-shadow: 0 0.75rem 1.5rem rgba(18, 38, 63, 0.03);
            box-shadow: 0 0.75rem 1.5rem rgba(18, 38, 63, 0.03);
        }

        .navbar-header {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-pack: justify;
            -webkit-box-pack: justify;
            justify-content: space-between;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            margin: 0 auto;
            height: 70px;
            padding: 0 0 0 calc(24px / 2);
        }

        .navbar-header .dropdown .show.header-item {
            background-color: #f8f9fa;
        }

        .navbar-brand-box {
            padding: 0 1.5rem;
            text-align: center;
            width: 250px;
        }

        .logo {
            line-height: 70px;
        }

        .logo .logo-sm {
            display: none;
        }

        .logo-light {
            display: none;
        }

        /* Search */
        .app-search {
            padding: calc(32px / 2) 0;
        }

        .app-search .form-control {
            border: none;
            height: 38px;
            padding-right: 40px;
            padding-left: 20px;
            background-color: #f3f3f9;
            -webkit-box-shadow: none;
            box-shadow: none;
            border-radius: 30px;
        }

        .app-search span {
            position: absolute;
            z-index: 10;
            font-size: 16px;
            line-height: 38px;
            right: 13px;
            top: 0;
            color: #74788d;
        }

        .megamenu-list li {
            position: relative;
            padding: 5px 0px;
        }

        .megamenu-list li a {
            color: #495057;
        }

        @media (max-width: 992px) {
            .navbar-brand-box {
                width: auto;
            }

            .logo span.logo-lg {
                display: none;
            }

            .logo span.logo-sm {
                display: inline-block;
            }
        }

        .page-content {
            padding: calc(70px + 24px) calc(24px / 2) 60px calc(24px / 2);
        }

        .header-item {
            height: 70px;
            -webkit-box-shadow: none !important;
            box-shadow: none !important;
            color: #555b6d;
            border: 0;
            border-radius: 0px;
        }

        .header-item:hover {
            color: #555b6d;
        }

        .header-profile-user {
            height: 36px;
            width: 36px;
            background-color: #f6f6f6;
            padding: 3px;
        }

        .noti-icon i {
            font-size: 22px;
            color: #555b6d;
        }

        .noti-icon .badge {
            position: absolute;
            top: 12px;
            left: 4px;
        }

        .notification-item .media {
            padding: 0.75rem 1rem;
        }

        .notification-item .media:hover {
            background-color: #f6f6f6;
        }

        .dropdown-icon-item {
            display: block;
            border-radius: 3px;
            line-height: 34px;
            text-align: center;
            padding: 15px 0 9px;
            display: block;
            border: 1px solid transparent;
            color: #74788d;
        }

        .dropdown-icon-item img {
            height: 24px;
        }

        .dropdown-icon-item span {
            display: block;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        .dropdown-icon-item:hover {
            border-color: #eff2f7;
        }

        .fullscreen-enable [data-toggle="fullscreen"] .bx-fullscreen::before {
            content: "\ea3f";
        }

        body[data-topbar="dark"] #page-topbar {
            background-color: #2a3042;
        }

        body[data-topbar="dark"] .navbar-header .dropdown .show.header-item {
            background-color: rgba(255, 255, 255, 0.05);
        }

        body[data-topbar="dark"] .navbar-header .waves-effect .waves-ripple {
            background: rgba(255, 255, 255, 0.4);
        }

        body[data-topbar="dark"] .header-item {
            color: #e9ecef;
        }

        body[data-topbar="dark"] .header-item:hover {
            color: #e9ecef;
        }

        body[data-topbar="dark"] .header-profile-user {
            background-color: rgba(255, 255, 255, 0.25);
        }

        body[data-topbar="dark"] .noti-icon i {
            color: #e9ecef;
        }

        body[data-topbar="dark"] .logo-dark {
            display: none;
        }

        body[data-topbar="dark"] .logo-light {
            display: block;
        }

        body[data-topbar="dark"] .app-search .form-control {
            background-color: rgba(243, 243, 249, 0.07);
            color: #fff;
        }

        body[data-topbar="dark"] .app-search span,
        body[data-topbar="dark"] .app-search input.form-control::-webkit-input-placeholder {
            color: rgba(255, 255, 255, 0.5);
        }

        body[data-sidebar="dark"] .navbar-brand-box {
            background: #2a3042;
        }

        body[data-sidebar="dark"] .logo-dark {
            display: none;
        }

        body[data-sidebar="dark"] .logo-light {
            display: block;
        }

        @media (max-width: 600px) {
            .navbar-header .dropdown {
                position: static;
            }

            .navbar-header .dropdown .dropdown-menu {
                right: 10px !important;
                left: 10px !important;
            }
        }

        @media (max-width: 380px) {
            .navbar-brand-box {
                display: none;
            }
        }

        body[data-layout="horizontal"] .navbar-brand-box {
            width: auto;
        }

        body[data-layout="horizontal"] .page-content {
            margin-top: 70px;
            padding: calc(55px + 24px) calc(24px / 2) 60px calc(24px / 2);
        }

        @media (max-width: 992px) {
            body[data-layout="horizontal"] .page-content {
                margin-top: 15px;
            }
        }

        .page-title-box {
            padding-bottom: 24px;
        }

        .page-title-box .breadcrumb {
            background-color: transparent;
            padding: 0;
        }

        .page-title-box h4 {
            text-transform: uppercase;
            font-weight: 600;
            font-size: 16px !important;
        }

        .footer {
            bottom: 0;
            padding: 20px calc(24px / 2);
            position: absolute;
            left: 0;
            color: #74788d;
            right: 250px;
            height: 60px;
            background-color: #f2f2f5;
        }

        @media (max-width: 991.98px) {
            .footer {
                right: 0;
            }
        }

        .footer {
            right: 70px;
        }

        @media (max-width: 991.98px) {
            .vertical-collpsed .footer {
                right: 0;
            }
        }

        body.footer {
            right: 0 !important;
        }

        .right-bar {
            background-color: #fff;
            -webkit-box-shadow: 0 0 24px 0 rgba(0, 0, 0, 0.06), 0 1px 0 0 rgba(0, 0, 0, 0.02);
            box-shadow: 0 0 24px 0 rgba(0, 0, 0, 0.06), 0 1px 0 0 rgba(0, 0, 0, 0.02);
            display: block;
            position: fixed;
            -webkit-transition: all 200ms ease-out;
            transition: all 200ms ease-out;
            width: 280px;
            z-index: 9999;
            float: left !important;
            left: -290px;
            top: 0;
            bottom: 0;
        }

        .right-bar .right-bar-toggle {
            background-color: #444c54;
            height: 24px;
            width: 24px;
            line-height: 24px;
            display: block;
            color: #eff2f7;
            text-align: center;
            border-radius: 50%;
        }

        .right-bar .right-bar-toggle:hover {
            background-color: #4b545c;
        }

        .rightbar-overlay {
            background-color: rgba(52, 58, 64, 0.55);
            position: absolute;
            right: 0;
            left: 0;
            top: 0;
            bottom: 0;
            display: none;
            z-index: 9998;
            -webkit-transition: all .2s ease-out;
            transition: all .2s ease-out;
        }

        .right-bar-enabled .right-bar {
            left: 0;
        }

        .right-bar-enabled .rightbar-overlay {
            display: block;
        }

        @media (max-width: 575.98px) {
            .right-bar {
                overflow: auto;
            }

            .right-bar .slimscroll-menu {
                height: auto !important;
            }
        }

        .metismenu {
            margin: 0;
        }

        .metismenu li {
            display: block;
            width: 100%;
        }

        .metismenu .mm-collapse {
            display: none;
        }

        .metismenu .mm-collapse:not(.mm-show) {
            display: none;
        }

        .metismenu .mm-collapse.mm-show {
            display: block;
        }

        .metismenu .mm-collapsing {
            position: relative;
            height: 0;
            overflow: hidden;
            -webkit-transition-timing-function: ease;
            transition-timing-function: ease;
            -webkit-transition-duration: .35s;
            transition-duration: .35s;
            -webkit-transition-property: height, visibility;
            transition-property: height, visibility;
        }

        .vertical-menu {
            width: 250px;
            z-index: 1001;
            background: #ffffff;
            bottom: 0;
            margin-top: 0;
            position: fixed;
            top: 70px;
            -webkit-box-shadow: 0 0.75rem 1.5rem rgba(18, 38, 63, 0.03);
            box-shadow: 0 0.75rem 1.5rem rgba(18, 38, 63, 0.03);
        }

        .main-content {
            margin-right: 250px;
            overflow: hidden;
        }

        .main-content .content {
            padding: 0 15px 10px 15px;
            margin-top: 70px;
        }

        #sidebar-menu {
            padding: 10px 0 30px 0;
        }

        #sidebar-menu .mm-active>.has-arrow:after {
            -webkit-transform: rotate(180deg);
            transform: rotate(180deg);
        }

        #sidebar-menu .has-arrow:after {
            content: "\F0140";
            font-family: 'Material Design Icons';
            display: block;
            float: left;
            -webkit-transition: -webkit-transform .2s;
            transition: -webkit-transform .2s;
            transition: transform .2s;
            transition: transform .2s, -webkit-transform .2s;
            font-size: 1rem;
        }

        #sidebar-menu ul li a {
            display: block;
            padding: .625rem 1.5rem;
            color: #545a6d;
            position: relative;
            font-size: 13px;
            -webkit-transition: all .4s;
            transition: all .4s;
        }

        #sidebar-menu ul li a i {
            display: inline-block;
            min-width: 1.75rem;
            padding-bottom: .125em;
            font-size: 1.25rem;
            line-height: 1.40625rem;
            vertical-align: middle;
            color: #7f8387;
            -webkit-transition: all .4s;
            transition: all .4s;
        }

        #sidebar-menu ul li a:hover {
            color: #383c40;
        }

        #sidebar-menu ul li a:hover i {
            color: #383c40;
        }

        #sidebar-menu ul li .badge {
            margin-top: 4px;
        }

        #sidebar-menu ul li ul.sub-menu {
            padding: 0;
        }

        #sidebar-menu ul li ul.sub-menu li a {
            padding: .4rem 3.5rem .4rem 1.5rem;
            font-size: 13px;
            color: #545a6d;
        }

        #sidebar-menu ul li ul.sub-menu li a:hover {
            color: #383c40;
        }

        #sidebar-menu ul li ul.sub-menu li ul.sub-menu {
            padding: 0;
        }

        #sidebar-menu ul li ul.sub-menu li ul.sub-menu li a {
            padding: .4rem 4.5rem .4rem 1.5rem;
            font-size: 13px;
        }

        .menu-title {
            padding: 12px 20px !important;
            letter-spacing: .05em;
            pointer-events: none;
            cursor: default;
            font-size: 11px;
            text-transform: uppercase;
            color: #7f8387;
            font-weight: 600;
        }

        .mm-active {
            color: #556ee6 !important;
        }

        .mm-active>a {
            color: #556ee6 !important;
        }

        .mm-active>a i {
            color: #556ee6 !important;
        }

        .mm-active .active {
            color: #556ee6 !important;
        }

        .mm-active .active i {
            color: #556ee6 !important;
        }

        .mm-active>i {
            color: #556ee6 !important;
        }

        @media (max-width: 992px) {
            .vertical-menu {
                display: none;
            }

            .main-content {
                margin-right: 0 !important;
            }

            body.sidebar-enable .vertical-menu {
                display: block;
            }
        }

        .vertical-collpsed .main-content {
            margin-right: 70px;
        }

        .vertical-collpsed .navbar-brand-box {
            width: 70px !important;
        }

        .vertical-collpsed .logo span.logo-lg {
            display: none;
        }

        .vertical-collpsed .logo span.logo-sm {
            display: block;
        }

        .vertical-collpsed .vertical-menu {
            position: absolute;
            width: 70px !important;
            z-index: 5;
        }

        .vertical-collpsed .vertical-menu .simplebar-mask,
        .vertical-collpsed .vertical-menu .simplebar-content-wrapper {
            overflow: visible !important;
        }

        .vertical-collpsed .vertical-menu .simplebar-scrollbar {
            display: none !important;
        }

        .vertical-collpsed .vertical-menu .simplebar-offset {
            bottom: 0 !important;
        }

        .vertical-collpsed .vertical-menu #sidebar-menu .menu-title,
        .vertical-collpsed .vertical-menu #sidebar-menu .badge,
        .vertical-collpsed .vertical-menu #sidebar-menu .collapse.in {
            display: none !important;
        }

        .vertical-collpsed .vertical-menu #sidebar-menu .nav.collapse {
            height: inherit !important;
        }

        .vertical-collpsed .vertical-menu #sidebar-menu .has-arrow:after {
            display: none;
        }

        .vertical-collpsed .vertical-menu #sidebar-menu>ul>li {
            position: relative;
            white-space: nowrap;
        }

        .vertical-collpsed .vertical-menu #sidebar-menu>ul>li>a {
            padding: 15px 20px;
            min-height: 55px;
            -webkit-transition: none;
            transition: none;
        }

        .vertical-collpsed .vertical-menu #sidebar-menu>ul>li>a:hover,
        .vertical-collpsed .vertical-menu #sidebar-menu>ul>li>a:active,
        .vertical-collpsed .vertical-menu #sidebar-menu>ul>li>a:focus {
            color: #383c40;
        }

        .vertical-collpsed .vertical-menu #sidebar-menu>ul>li>a i {
            font-size: 1.45rem;
            margin-right: 4px;
        }

        .vertical-collpsed .vertical-menu #sidebar-menu>ul>li>a span {
            display: none;
            padding-right: 25px;
        }

        .vertical-collpsed .vertical-menu #sidebar-menu>ul>li:hover>a {
            position: relative;
            width: calc(190px + 70px);
            color: #556ee6;
            background-color: whitesmoke;
            -webkit-transition: none;
            transition: none;
        }

        .vertical-collpsed .vertical-menu #sidebar-menu>ul>li:hover>a i {
            color: #556ee6;
        }

        .vertical-collpsed .vertical-menu #sidebar-menu>ul>li:hover>a span {
            display: inline;
        }

        .vertical-collpsed .vertical-menu #sidebar-menu>ul>li:hover>ul {
            display: block;
            right: 70px;
            position: absolute;
            width: 190px;
            height: auto !important;
            -webkit-box-shadow: -3px 5px 10px 0 rgba(54, 61, 71, 0.1);
            box-shadow: -3px 5px 10px 0 rgba(54, 61, 71, 0.1);
        }

        .vertical-collpsed .vertical-menu #sidebar-menu>ul>li:hover>ul ul {
            -webkit-box-shadow: -3px 5px 10px 0 rgba(54, 61, 71, 0.1);
            box-shadow: -3px 5px 10px 0 rgba(54, 61, 71, 0.1);
        }

        .vertical-collpsed .vertical-menu #sidebar-menu>ul>li:hover>ul a {
            -webkit-box-shadow: none;
            box-shadow: none;
            padding: 8px 20px;
            position: relative;
            width: 190px;
            z-index: 6;
            color: #545a6d;
        }

        .vertical-collpsed .vertical-menu #sidebar-menu>ul>li:hover>ul a:hover {
            color: #383c40;
        }

        .vertical-collpsed .vertical-menu #sidebar-menu>ul ul {
            padding: 5px 0;
            z-index: 9999;
            display: none;
            background-color: #ffffff;
        }

        .vertical-collpsed .vertical-menu #sidebar-menu>ul ul li:hover>ul {
            display: block;
            right: 190px;
            height: auto !important;
            margin-top: -36px;
            position: absolute;
            width: 190px;
        }

        .vertical-collpsed .vertical-menu #sidebar-menu>ul ul li>a span.pull-right {
            position: absolute;
            left: 20px;
            top: 12px;
            -webkit-transform: rotate(-270deg);
            transform: rotate(-270deg);
        }

        .vertical-collpsed .vertical-menu #sidebar-menu>ul ul li.active a {
            color: #f8f9fa;
        }

        body[data-sidebar="dark"] .vertical-menu {
            background: #2a3042;
        }

        body[data-sidebar="dark"] #sidebar-menu ul li a {
            color: #a6b0cf;
        }

        body[data-sidebar="dark"] #sidebar-menu ul li a i {
            color: #6a7187;
        }

        body[data-sidebar="dark"] #sidebar-menu ul li a:hover {
            color: #ffffff;
        }

        body[data-sidebar="dark"] #sidebar-menu ul li a:hover i {
            color: #ffffff;
        }

        body[data-sidebar="dark"] #sidebar-menu ul li ul.sub-menu li a {
            color: #79829c;
        }

        body[data-sidebar="dark"] #sidebar-menu ul li ul.sub-menu li a:hover {
            color: #ffffff;
        }

        body[data-sidebar="dark"].vertical-collpsed {
            min-height: 1760px;
        }

        body[data-sidebar="dark"].vertical-collpsed .vertical-menu #sidebar-menu>ul>li:hover>a {
            background: #2e3548;
            color: #ffffff;
        }

        body[data-sidebar="dark"].vertical-collpsed .vertical-menu #sidebar-menu>ul>li:hover>a i {
            color: #ffffff;
        }

        body[data-sidebar="dark"].vertical-collpsed .vertical-menu #sidebar-menu>ul>li:hover>ul a {
            color: #79829c;
        }

        body[data-sidebar="dark"].vertical-collpsed .vertical-menu #sidebar-menu>ul>li:hover>ul a:hover {
            color: #ffffff;
        }

        body[data-sidebar="dark"].vertical-collpsed .vertical-menu #sidebar-menu>ul ul {
            background-color: #2a3042;
        }

        body[data-sidebar="dark"].vertical-collpsed .vertical-menu #sidebar-menu ul li.mm-active .active {
            color: #ffffff !important;
        }

        body[data-sidebar="dark"].vertical-collpsed .vertical-menu #sidebar-menu ul li.mm-active .active i {
            color: #ffffff !important;
        }

        body[data-sidebar="dark"] .mm-active {
            color: #ffffff !important;
        }

        body[data-sidebar="dark"] .mm-active>a {
            color: #ffffff !important;
        }

        body[data-sidebar="dark"] .mm-active>a i {
            color: #ffffff !important;
        }

        body[data-sidebar="dark"] .mm-active>i {
            color: #ffffff !important;
        }

        body[data-sidebar="dark"] .mm-active .active {
            color: #ffffff !important;
        }

        body[data-sidebar="dark"] .mm-active .active i {
            color: #ffffff !important;
        }

        body[data-sidebar="dark"] .menu-title {
            color: #6a7187;
        }

        body[data-layout="horizontal"] .main-content {
            margin-right: 0 !important;
        }

        body[data-sidebar-size="small"] .navbar-brand-box {
            width: 160px;
        }

        body[data-sidebar-size="small"] .vertical-menu {
            width: 160px;
            text-align: center;
        }

        body[data-sidebar-size="small"] .vertical-menu .has-arrow:after,
        body[data-sidebar-size="small"] .vertical-menu .badge {
            display: none !important;
        }

        body[data-sidebar-size="small"] .main-content {
            margin-right: 160px;
        }

        body .footer {
            right: 160px;
        }

        @media (max-width: 991.98px) {
            body .footer {
                right: 0;
            }
        }

        body[data-sidebar-size="small"] #sidebar-menu ul li.menu-title {
            background-color: #2e3548;
        }

        body[data-sidebar-size="small"] #sidebar-menu ul li a i {
            display: block;
        }

        body[data-sidebar-size="small"] #sidebar-menu ul li ul.sub-menu li a {
            padding-right: 1.5rem;
        }

        body[data-sidebar-size="small"] #sidebar-menu ul li ul.sub-menu li ul.sub-menu li a {
            padding-right: 1.5rem;
        }

        body[data-sidebar-size="small"].vertical-collpsed .main-content {
            margin-right: 70px;
        }

        body[data-sidebar-size="small"].vertical-collpsed .vertical-menu #sidebar-menu {
            text-align: right;
        }

        body[data-sidebar-size="small"].vertical-collpsed .vertical-menu #sidebar-menu>ul>li>a i {
            display: inline-block;
        }

        body[data-sidebar-size="small"].vertical-collpsed .footer {
            right: 70px;
        }

        body[data-sidebar="colored"] .vertical-menu {
            background-color: #556ee6;
        }

        body[data-sidebar="colored"] .navbar-brand-box {
            background-color: #556ee6;
        }

        body[data-sidebar="colored"] .navbar-brand-box .logo-dark {
            display: none;
        }

        body[data-sidebar="colored"] .navbar-brand-box .logo-light {
            display: block;
        }

        body[data-sidebar="colored"] .mm-active {
            color: #fff !important;
        }

        body[data-sidebar="colored"] .mm-active>a {
            color: #fff !important;
        }

        body[data-sidebar="colored"] .mm-active>a i {
            color: #fff !important;
        }

        body[data-sidebar="colored"] .mm-active>i,
        body[data-sidebar="colored"] .mm-active .active {
            color: #fff !important;
        }

        body[data-sidebar="colored"] #sidebar-menu ul li.menu-title {
            color: rgba(255, 255, 255, 0.6);
        }

        body[data-sidebar="colored"] #sidebar-menu ul li a {
            color: rgba(255, 255, 255, 0.6);
        }

        body[data-sidebar="colored"] #sidebar-menu ul li a i {
            color: rgba(255, 255, 255, 0.6);
        }

        body[data-sidebar="colored"] #sidebar-menu ul li a.waves-effect .waves-ripple {
            background: rgba(255, 255, 255, 0.1);
        }

        body[data-sidebar="colored"] #sidebar-menu ul li a:hover {
            color: #fff;
        }

        body[data-sidebar="colored"] #sidebar-menu ul li a:hover i {
            color: #fff;
        }

        body[data-sidebar="colored"] #sidebar-menu ul li ul.sub-menu li a {
            color: rgba(255, 255, 255, 0.5);
        }

        body[data-sidebar="colored"] #sidebar-menu ul li ul.sub-menu li a:hover {
            color: #fff;
        }

        body[data-sidebar="colored"].vertical-collpsed .vertical-menu #sidebar-menu>ul>li:hover>a {
            background-color: #5e76e7;
            color: #fff;
        }

        body[data-sidebar="colored"].vertical-collpsed .vertical-menu #sidebar-menu>ul>li:hover>a i {
            color: #fff;
        }

        body[data-sidebar="colored"].vertical-collpsed .vertical-menu #sidebar-menu ul li.mm-active .active {
            color: #556ee6 !important;
        }

        body[data-sidebar="colored"].vertical-collpsed .vertical-menu #sidebar-menu ul li ul.sub-menu li a:hover {
            color: #556ee6;
        }

        body[data-sidebar="colored"].vertical-collpsed .vertical-menu #sidebar-menu ul li ul.sub-menu li.mm-active {
            color: #556ee6 !important;
        }

        body[data-sidebar="colored"].vertical-collpsed .vertical-menu #sidebar-menu ul li ul.sub-menu li.mm-active>a {
            color: #556ee6 !important;
        }

        body[data-sidebar="colored"].vertical-collpsed .vertical-menu #sidebar-menu ul li ul.sub-menu li.mm-active>a i {
            color: #556ee6 !important;
        }

        .topnav {
            background: #fff;
            padding: 0 calc(24px / 2);
            -webkit-box-shadow: 0 0.75rem 1.5rem rgba(18, 38, 63, 0.03);
            box-shadow: 0 0.75rem 1.5rem rgba(18, 38, 63, 0.03);
            margin-top: 70px;
            position: fixed;
            right: 0;
            left: 0;
            z-index: 100;
        }

        .topnav .topnav-menu {
            margin: 0;
            padding: 0;
        }

        .topnav .navbar-nav .nav-link {
            font-size: 14px;
            position: relative;
            padding: 1rem 1.3rem;
            color: #545a6d;
        }

        .topnav .navbar-nav .nav-link i {
            font-size: 15px;
        }

        .topnav .navbar-nav .nav-link:focus,
        .topnav .navbar-nav .nav-link:hover {
            color: #556ee6;
            background-color: transparent;
        }

        .topnav .navbar-nav .dropdown-item {
            color: #545a6d;
        }

        .topnav .navbar-nav .dropdown-item.active,
        .topnav .navbar-nav .dropdown-item:hover {
            color: #556ee6;
        }

        .topnav .navbar-nav .nav-item .nav-link.active {
            color: #556ee6;
        }

        .topnav .navbar-nav .dropdown.active>a {
            color: #556ee6;
            background-color: transparent;
        }

        @media (min-width: 1200px) {

            body[data-layout="horizontal"] .container-fluid,
            body[data-layout="horizontal"] .navbar-header {
                max-width: 85%;
            }
        }

        @media (min-width: 992px) {
            .topnav .navbar-nav .nav-item:first-of-type .nav-link {
                padding-right: 0;
            }

            .topnav .dropdown-item {
                padding: .5rem 1.5rem;
                min-width: 180px;
            }

            .topnav .dropdown.mega-dropdown .mega-dropdown-menu {
                right: 0px;
                left: auto;
            }

            .topnav .dropdown .dropdown-menu {
                margin-top: 0;
                border-radius: 0 0 0.25rem 0.25rem;
            }

            .topnav .dropdown .dropdown-menu .arrow-down::after {
                left: 15px;
                -webkit-transform: rotate(135deg) translateY(-50%);
                transform: rotate(135deg) translateY(-50%);
                position: absolute;
            }

            .topnav .dropdown .dropdown-menu .dropdown .dropdown-menu {
                position: absolute;
                top: 0 !important;
                right: 100%;
                display: none;
            }

            .topnav .dropdown:hover>.dropdown-menu {
                display: block;
            }

            .topnav .dropdown:hover>.dropdown-menu>.dropdown:hover>.dropdown-menu {
                display: block;
            }

            .navbar-toggle {
                display: none;
            }
        }

        .arrow-down {
            display: inline-block;
        }

        .arrow-down:after {
            border-color: initial;
            border-style: solid;
            border-width: 0 1px 1px 0;
            content: "";
            height: .4em;
            display: inline-block;
            left: 5px;
            top: 50%;
            margin-right: 10px;
            -webkit-transform: rotate(45deg) translateY(-50%);
            transform: rotate(45deg) translateY(-50%);
            -webkit-transform-origin: top;
            transform-origin: top;
            -webkit-transition: all .3s ease-out;
            transition: all .3s ease-out;
            width: .4em;
        }

        @media (max-width: 991.98px) {
            .topnav-menu .navbar-nav li:last-of-type .dropdown .dropdown-menu {
                left: 100%;
                right: auto;
            }
        }

        @media (max-width: 767.98px) {
            .navbar-brand-box .logo-dark {
                display: block;
            }

            .navbar-brand-box .logo-dark span.logo-sm {
                display: block;
            }

            .navbar-brand-box .logo-light {
                display: none;
            }

            .topnav {
                max-height: 360px;
                overflow-y: auto;
                padding: 0;
            }

            .topnav .navbar-nav .nav-link {
                padding: 0.75rem 1.1rem;
            }

            .topnav .dropdown .dropdown-menu {
                background-color: transparent;
                border: none;
                -webkit-box-shadow: none;
                box-shadow: none;
                padding-right: 15px;
            }

            .topnav .dropdown .dropdown-menu.dropdown-mega-menu-xl {
                width: auto;
            }

            .topnav .dropdown .dropdown-menu.dropdown-mega-menu-xl .row {
                margin: 0px;
            }

            .topnav .dropdown .dropdown-item {
                position: relative;
                background-color: transparent;
            }

            .topnav .dropdown .dropdown-item.active,
            .topnav .dropdown .dropdown-item:active {
                color: #556ee6;
            }

            .topnav .arrow-down::after {
                left: 15px;
                position: absolute;
            }
        }

        @media (min-width: 992px) {
            body[data-layout="horizontal"][data-topbar="light"] .navbar-brand-box .logo-dark {
                display: block;
            }

            body[data-layout="horizontal"][data-topbar="light"] .navbar-brand-box .logo-light {
                display: none;
            }

            body[data-layout="horizontal"][data-topbar="light"] .topnav {
                background-color: #556ee6;
            }

            body[data-layout="horizontal"][data-topbar="light"] .topnav .navbar-nav .nav-link {
                color: rgba(255, 255, 255, 0.6);
            }

            body[data-layout="horizontal"][data-topbar="light"] .topnav .navbar-nav .nav-link:focus,
            body[data-layout="horizontal"][data-topbar="light"] .topnav .navbar-nav .nav-link:hover {
                color: rgba(255, 255, 255, 0.9);
            }

            body[data-layout="horizontal"][data-topbar="light"] .topnav .navbar-nav>.dropdown.active>a {
                color: rgba(255, 255, 255, 0.9) !important;
            }
        }

        body[data-layout="horizontal"][data-topbar="colored"] #page-topbar {
            background-color: #556ee6;
            -webkit-box-shadow: none;
            box-shadow: none;
        }

        body[data-layout="horizontal"][data-topbar="colored"] .logo-dark {
            display: none;
        }

        body[data-layout="horizontal"][data-topbar="colored"] .logo-light {
            display: block;
        }

        body[data-layout="horizontal"][data-topbar="colored"] .app-search .form-control {
            background-color: rgba(243, 243, 249, 0.07);
            color: #fff;
        }

        body[data-layout="horizontal"][data-topbar="colored"] .app-search span,
        body[data-layout="horizontal"][data-topbar="colored"] .app-search input.form-control::-webkit-input-placeholder {
            color: rgba(255, 255, 255, 0.5);
        }

        body[data-layout="horizontal"][data-topbar="colored"] .header-item {
            color: #e9ecef;
        }

        body[data-layout="horizontal"][data-topbar="colored"] .header-item:hover {
            color: #e9ecef;
        }

        body[data-layout="horizontal"][data-topbar="colored"] .navbar-header .dropdown .show.header-item {
            background-color: rgba(255, 255, 255, 0.1);
        }

        body[data-layout="horizontal"][data-topbar="colored"] .navbar-header .waves-effect .waves-ripple {
            background: rgba(255, 255, 255, 0.4);
        }

        body[data-layout="horizontal"][data-topbar="colored"] .noti-icon i {
            color: #e9ecef;
        }

        @media (min-width: 992px) {
            body[data-layout="horizontal"][data-topbar="colored"] .topnav {
                background-color: #556ee6;
            }

            body[data-layout="horizontal"][data-topbar="colored"] .topnav .navbar-nav .nav-link {
                color: rgba(255, 255, 255, 0.6);
            }

            body[data-layout="horizontal"][data-topbar="colored"] .topnav .navbar-nav .nav-link:focus,
            body[data-layout="horizontal"][data-topbar="colored"] .topnav .navbar-nav .nav-link:hover {
                color: rgba(255, 255, 255, 0.9);
            }

            body[data-layout="horizontal"][data-topbar="colored"] .topnav .navbar-nav>.dropdown.active>a {
                color: rgba(255, 255, 255, 0.9) !important;
            }
        }

        body[data-layout-size="boxed"] {
            background-color: #ebebf4;
        }

        body[data-layout-size="boxed"] #layout-wrapper {
            background-color: #f8f8fb;
            max-width: 1300px;
            margin: 0 auto;
            -webkit-box-shadow: 0 0.75rem 1.5rem rgba(18, 38, 63, 0.03);
            box-shadow: 0 0.75rem 1.5rem rgba(18, 38, 63, 0.03);
        }

        body[data-layout-size="boxed"] #page-topbar {
            max-width: 1300px;
            margin: 0 auto;
        }


        .footer {
            width: 100%;
        }

        body[data-layout="horizontal"][data-layout-size="boxed"] .container-fluid,
        body[data-layout="horizontal"][data-layout-size="boxed"] .navbar-header {
            max-width: 1300px;
        }

        @media (min-width: 992px) {

            body[data-layout-scrollable="true"] #page-topbar,
            body[data-layout-scrollable="true"] .vertical-menu {
                position: absolute;
            }
        }

        @media (min-width: 992px) {

            body[data-layout-scrollable="true"][data-layout="horizontal"] #page-topbar,
            body[data-layout-scrollable="true"][data-layout="horizontal"] .topnav {
                position: absolute;
            }
        }

        /*!
 * Waves v0.7.6
 * http://fian.my.id/Waves 
 * 
 * Copyright 2014-2018 Alfiana E. Sibuea and other contributors 
 * Released under the MIT license 
 * https://github.com/fians/Waves/blob/master/LICENSE */
        .waves-effect {
            position: relative;
            cursor: pointer;
            display: inline-block;
            overflow: hidden;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            -webkit-tap-highlight-color: transparent;
        }

        .waves-effect .waves-ripple {
            position: absolute;
            border-radius: 50%;
            width: 100px;
            height: 100px;
            margin-top: -50px;
            margin-right: -50px;
            opacity: 0;
            background: rgba(0, 0, 0, 0.2);
            background: radial-gradient(rgba(0, 0, 0, 0.2) 0, rgba(0, 0, 0, 0.3) 40%, rgba(0, 0, 0, 0.4) 50%, rgba(0, 0, 0, 0.5) 60%, rgba(255, 255, 255, 0) 70%);
            -webkit-transition: all 0.5s ease-out;
            transition: all 0.5s ease-out;
            -webkit-transition-property: -webkit-transform, opacity;
            -webkit-transition-property: opacity, -webkit-transform;
            transition-property: opacity, -webkit-transform;
            transition-property: transform, opacity;
            transition-property: transform, opacity, -webkit-transform;
            -webkit-transform: scale(0) translate(0, 0);
            transform: scale(0) translate(0, 0);
            pointer-events: none;
        }

        .waves-effect.waves-light .waves-ripple {
            background: rgba(255, 255, 255, 0.4);
            background: radial-gradient(rgba(255, 255, 255, 0.2) 0, rgba(255, 255, 255, 0.3) 40%, rgba(255, 255, 255, 0.4) 50%, rgba(255, 255, 255, 0.5) 60%, rgba(255, 255, 255, 0) 70%);
        }

        .waves-effect.waves-classic .waves-ripple {
            background: rgba(0, 0, 0, 0.2);
        }

        .waves-effect.waves-classic.waves-light .waves-ripple {
            background: rgba(255, 255, 255, 0.4);
        }

        .waves-notransition {
            -webkit-transition: none !important;
            transition: none !important;
        }

        .waves-button,
        .waves-circle {
            -webkit-transform: translateZ(0);
            transform: translateZ(0);
            -webkit-mask-image: -webkit-radial-gradient(circle, white 100%, black 100%);
        }

        .waves-button,
        .waves-button:hover,
        .waves-button:visited,
        .waves-button-input {
            white-space: nowrap;
            vertical-align: middle;
            cursor: pointer;
            border: none;
            outline: none;
            color: inherit;
            background-color: rgba(0, 0, 0, 0);
            font-size: 1em;
            line-height: 1em;
            text-align: center;
            text-decoration: none;
            z-index: 1;
        }

        .waves-button {
            padding: 0.85em 1.1em;
            border-radius: 0.2em;
        }

        .waves-button-input {
            margin: 0;
            padding: 0.85em 1.1em;
        }

        .waves-input-wrapper {
            border-radius: 0.2em;
            vertical-align: bottom;
        }

        .waves-input-wrapper.waves-button {
            padding: 0;
        }

        .waves-input-wrapper .waves-button-input {
            position: relative;
            top: 0;
            right: 0;
            z-index: 1;
        }

        .waves-circle {
            text-align: center;
            width: 2.5em;
            height: 2.5em;
            line-height: 2.5em;
            border-radius: 50%;
        }

        .waves-float {
            -webkit-mask-image: none;
            -webkit-box-shadow: 0px 1px 1.5px 1px rgba(0, 0, 0, 0.12);
            box-shadow: 0px 1px 1.5px 1px rgba(0, 0, 0, 0.12);
            -webkit-transition: all 300ms;
            transition: all 300ms;
        }

        .waves-float:active {
            -webkit-box-shadow: 0px 8px 20px 1px rgba(0, 0, 0, 0.3);
            box-shadow: 0px 8px 20px 1px rgba(0, 0, 0, 0.3);
        }

        .waves-block {
            display: block;
        }

        .waves-effect.waves-light .waves-ripple {
            background-color: rgba(255, 255, 255, 0.4);
        }

        .waves-effect.waves-primary .waves-ripple {
            background-color: rgba(85, 110, 230, 0.4);
        }

        .waves-effect.waves-success .waves-ripple {
            background-color: rgba(52, 195, 143, 0.4);
        }

        .waves-effect.waves-info .waves-ripple {
            background-color: rgba(80, 165, 241, 0.4);
        }

        .waves-effect.waves-warning .waves-ripple {
            background-color: rgba(241, 180, 76, 0.4);
        }

        .waves-effect.waves-danger .waves-ripple {
            background-color: rgba(244, 106, 106, 0.4);
        }

        .avatar-xs {
            height: 2rem;
            width: 2rem;
        }

        .avatar-sm {
            height: 3rem;
            width: 3rem;
        }

        .avatar-md {
            height: 4.5rem;
            width: 4.5rem;
        }

        .avatar-lg {
            height: 6rem;
            width: 6rem;
        }

        .avatar-xl {
            height: 7.5rem;
            width: 7.5rem;
        }

        .avatar-title {
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            background-color: #556ee6;
            color: #fff;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            font-weight: 500;
            height: 100%;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            width: 100%;
        }

        .avatar-group {
            padding-right: 12px;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
        }

        .avatar-group .avatar-group-item {
            margin-right: -12px;
            border: 2px solid #fff;
            border-radius: 50%;
            -webkit-transition: all 0.2s;
            transition: all 0.2s;
        }

        .avatar-group .avatar-group-item:hover {
            position: relative;
            -webkit-transform: translateY(-2px);
            transform: translateY(-2px);
        }

        .custom-accordion .accordion-list {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            border-radius: 7px;
            background-color: #f6f6f6;
            padding: 12px 20px;
            color: #495057;
            font-weight: 600;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between;
        }

        .custom-accordion .accordion-list.collapsed i.accor-plus-icon:before {
            content: "\F0415";
        }

        .custom-accordion .accordion-list .accor-plus-icon {
            display: inline-block;
            font-size: 16px;
            height: 24px;
            width: 24px;
            line-height: 22px;
            background-color: #fff;
            text-align: center;
            border-radius: 50%;
        }

        .custom-accordion a.collapsed i.accor-down-icon:before {
            content: "\F0140";
        }

        .custom-accordion .card-body {
            color: #74788d;
        }

        .font-size-10 {
            font-size: 10px !important;
        }

        .font-size-11 {
            font-size: 11px !important;
        }

        .font-size-12 {
            font-size: 12px !important;
        }

        .font-size-13 {
            font-size: 13px !important;
        }

        .font-size-14 {
            font-size: 14px !important;
        }

        .font-size-15 {
            font-size: 15px !important;
        }

        .font-size-16 {
            font-size: 16px !important;
        }

        .font-size-17 {
            font-size: 17px !important;
        }

        .font-size-18 {
            font-size: 18px !important;
        }

        .font-size-20 {
            font-size: 20px !important;
        }

        .font-size-22 {
            font-size: 22px !important;
        }

        .font-size-24 {
            font-size: 24px !important;
        }

        .fw-medium {
            font-weight: 500;
        }

        .font-weight-semibold {
            font-weight: 600;
        }

        .social-list-item {
            height: 2rem;
            width: 2rem;
            line-height: calc(2rem - 4px);
            display: block;
            border: 2px solid #adb5bd;
            border-radius: 50%;
            color: #adb5bd;
            text-align: center;
            -webkit-transition: all 0.4s;
            transition: all 0.4s;
        }

        .social-list-item:hover {
            color: #74788d;
            background-color: #eff2f7;
        }

        .w-xs {
            min-width: 80px;
        }

        .w-sm {
            min-width: 95px;
        }

        .w-md {
            min-width: 110px;
        }

        .w-lg {
            min-width: 140px;
        }

        .w-xl {
            min-width: 160px;
        }

        .media {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: start;
            -ms-flex-align: start;
            align-items: flex-start;
        }

        .media-body {
            -webkit-box-flex: 1;
            -ms-flex: 1;
            flex: 1;
        }

        .alert-dismissible .btn-close {
            font-size: 10px;
            padding: 1.05rem 1.25rem;
            background: transparent url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23000'%3e%3cpath d='M.293.293a1 1 0 011.414 0L8 6.586 14.293.293a1 1 0 111.414 1.414L9.414 8l6.293 6.293a1 1 0 01-1.414 1.414L8 9.414l-6.293 6.293a1 1 0 01-1.414-1.414L6.586 8 .293 1.707a1 1 0 010-1.414z'/%3e%3c/svg%3e") center/1em auto no-repeat;
        }

        #preloader {
            position: fixed;
            top: 0;
            right: 0;
            left: 0;
            bottom: 0;
            background-color: #fff;
            z-index: 9999;
        }

        #status {
            width: 40px;
            height: 40px;
            position: absolute;
            right: 50%;
            top: 50%;
            margin: -20px -20px 0 0;
        }

        .spinner-chase {
            margin: 0 auto;
            width: 40px;
            height: 40px;
            position: relative;
            -webkit-animation: spinner-chase 2.5s infinite linear both;
            animation: spinner-chase 2.5s infinite linear both;
        }

        .chase-dot {
            width: 100%;
            height: 100%;
            position: absolute;
            right: 0;
            top: 0;
            -webkit-animation: chase-dot 2.0s infinite ease-in-out both;
            animation: chase-dot 2.0s infinite ease-in-out both;
        }

        .chase-dot:before {
            content: '';
            display: block;
            width: 25%;
            height: 25%;
            background-color: #556ee6;
            border-radius: 100%;
            -webkit-animation: chase-dot-before 2.0s infinite ease-in-out both;
            animation: chase-dot-before 2.0s infinite ease-in-out both;
        }

        .chase-dot:nth-child(1) {
            -webkit-animation-delay: -1.1s;
            animation-delay: -1.1s;
        }

        .chase-dot:nth-child(1):before {
            -webkit-animation-delay: -1.1s;
            animation-delay: -1.1s;
        }

        .chase-dot:nth-child(2) {
            -webkit-animation-delay: -1.0s;
            animation-delay: -1.0s;
        }

        .chase-dot:nth-child(2):before {
            -webkit-animation-delay: -1.0s;
            animation-delay: -1.0s;
        }

        .chase-dot:nth-child(3) {
            -webkit-animation-delay: -0.9s;
            animation-delay: -0.9s;
        }

        .chase-dot:nth-child(3):before {
            -webkit-animation-delay: -0.9s;
            animation-delay: -0.9s;
        }

        .chase-dot:nth-child(4) {
            -webkit-animation-delay: -0.8s;
            animation-delay: -0.8s;
        }

        .chase-dot:nth-child(4):before {
            -webkit-animation-delay: -0.8s;
            animation-delay: -0.8s;
        }

        .chase-dot:nth-child(5) {
            -webkit-animation-delay: -0.7s;
            animation-delay: -0.7s;
        }

        .chase-dot:nth-child(5):before {
            -webkit-animation-delay: -0.7s;
            animation-delay: -0.7s;
        }

        .chase-dot:nth-child(6) {
            -webkit-animation-delay: -0.6s;
            animation-delay: -0.6s;
        }

        .chase-dot:nth-child(6):before {
            -webkit-animation-delay: -0.6s;
            animation-delay: -0.6s;
        }

        @-webkit-keyframes spinner-chase {
            100% {
                -webkit-transform: rotate(-360deg);
                transform: rotate(-360deg);
            }
        }

        @keyframes spinner-chase {
            100% {
                -webkit-transform: rotate(-360deg);
                transform: rotate(-360deg);
            }
        }

        @-webkit-keyframes chase-dot {

            80%,
            100% {
                -webkit-transform: rotate(-360deg);
                transform: rotate(-360deg);
            }
        }

        @keyframes chase-dot {

            80%,
            100% {
                -webkit-transform: rotate(-360deg);
                transform: rotate(-360deg);
            }
        }

        @-webkit-keyframes chase-dot-before {
            50% {
                -webkit-transform: scale(0.4);
                transform: scale(0.4);
            }

            100%,
            0% {
                -webkit-transform: scale(1);
                transform: scale(1);
            }
        }

        @keyframes chase-dot-before {
            50% {
                -webkit-transform: scale(0.4);
                transform: scale(0.4);
            }

            100%,
            0% {
                -webkit-transform: scale(1);
                transform: scale(1);
            }
        }

        [type="tel"]::-webkit-input-placeholder,
        [type="url"]::-webkit-input-placeholder,
        [type="email"]::-webkit-input-placeholder,
        [type="number"]::-webkit-input-placeholder {
            text-align: right;
        }

        [type="tel"]::-moz-placeholder,
        [type="url"]::-moz-placeholder,
        [type="email"]::-moz-placeholder,
        [type="number"]::-moz-placeholder {
            text-align: right;
        }

        [type="tel"]:-ms-input-placeholder,
        [type="url"]:-ms-input-placeholder,
        [type="email"]:-ms-input-placeholder,
        [type="number"]:-ms-input-placeholder {
            text-align: right;
        }

        [type="tel"]::-ms-input-placeholder,
        [type="url"]::-ms-input-placeholder,
        [type="email"]::-ms-input-placeholder,
        [type="number"]::-ms-input-placeholder {
            text-align: right;
        }

        [type="tel"]::placeholder,
        [type="url"]::placeholder,
        [type="email"]::placeholder,
        [type="number"]::placeholder {
            text-align: right;
        }

        .form-check {
            position: relative;
            text-align: right;
        }

        .form-check-right {
            padding-right: 0;
            display: inline-block;
            padding-left: 1.5em;
        }

        .form-check-right .form-check-input {
            float: left;
            margin-right: 0;
            margin-left: -1.5em;
        }

        .form-check-right .form-check-label {
            display: block;
        }

        .form-checkbox-outline .form-check-input {
            border-width: 2px;
            background-color: #fff;
        }

        .form-checkbox-outline .form-check-input:active {
            -webkit-filter: none;
            filter: none;
        }

        .form-checkbox-outline .form-check-input:checked {
            background-color: #fff !important;
        }

        .form-checkbox-outline .form-check-input:checked[type=checkbox] {
            background-image: none;
        }

        .form-checkbox-outline .form-check-input:checked:after {
            position: absolute;
            content: '\F012C';
            font-family: "Material Design Icons";
            top: -4px !important;
            right: 1px;
            font-size: 16px;
            color: #343a40;
        }

        .form-radio-outline .form-check-input {
            border-width: 2px;
            background-color: #fff;
        }

        .form-radio-outline .form-check-input:active {
            -webkit-filter: none;
            filter: none;
        }

        .form-radio-outline .form-check-input:checked {
            background-color: #fff !important;
        }

        .form-radio-outline .form-check-input:checked[type=checkbox] {
            background-image: none;
        }

        .form-radio-outline .form-check-input:checked:after {
            position: absolute;
            content: '\F0765';
            font-family: "Material Design Icons";
            top: 6px !important;
            right: 4px;
            font-size: 6px;
        }

        .form-check-primary .form-check-input:checked {
            background-color: #556ee6;
            border-color: #556ee6;
        }

        .form-radio-primary .form-check-input:checked {
            border-color: #556ee6;
            background-color: #556ee6;
        }

        .form-radio-primary .form-check-input:checked:after {
            color: #556ee6;
        }

        .form-check-secondary .form-check-input:checked {
            background-color: #74788d;
            border-color: #74788d;
        }

        .form-radio-secondary .form-check-input:checked {
            border-color: #74788d;
            background-color: #74788d;
        }

        .form-radio-secondary .form-check-input:checked:after {
            color: #74788d;
        }

        .form-check-success .form-check-input:checked {
            background-color: #34c38f;
            border-color: #34c38f;
        }

        .form-radio-success .form-check-input:checked {
            border-color: #34c38f;
            background-color: #34c38f;
        }

        .form-radio-success .form-check-input:checked:after {
            color: #34c38f;
        }

        .form-check-info .form-check-input:checked {
            background-color: #50a5f1;
            border-color: #50a5f1;
        }

        .form-radio-info .form-check-input:checked {
            border-color: #50a5f1;
            background-color: #50a5f1;
        }

        .form-radio-info .form-check-input:checked:after {
            color: #50a5f1;
        }

        .form-check-warning .form-check-input:checked {
            background-color: #f1b44c;
            border-color: #f1b44c;
        }

        .form-radio-warning .form-check-input:checked {
            border-color: #f1b44c;
            background-color: #f1b44c;
        }

        .form-radio-warning .form-check-input:checked:after {
            color: #f1b44c;
        }

        .form-check-danger .form-check-input:checked {
            background-color: #f46a6a;
            border-color: #f46a6a;
        }

        .form-radio-danger .form-check-input:checked {
            border-color: #f46a6a;
            background-color: #f46a6a;
        }

        .form-radio-danger .form-check-input:checked:after {
            color: #f46a6a;
        }

        .form-check-pink .form-check-input:checked {
            background-color: #e83e8c;
            border-color: #e83e8c;
        }

        .form-radio-pink .form-check-input:checked {
            border-color: #e83e8c;
            background-color: #e83e8c;
        }

        .form-radio-pink .form-check-input:checked:after {
            color: #e83e8c;
        }

        .form-check-light .form-check-input:checked {
            background-color: #eff2f7;
            border-color: #eff2f7;
        }

        .form-radio-light .form-check-input:checked {
            border-color: #eff2f7;
            background-color: #eff2f7;
        }

        .form-radio-light .form-check-input:checked:after {
            color: #eff2f7;
        }

        .form-check-dark .form-check-input:checked {
            background-color: #343a40;
            border-color: #343a40;
        }

        .form-radio-dark .form-check-input:checked {
            border-color: #343a40;
            background-color: #343a40;
        }

        .form-radio-dark .form-check-input:checked:after {
            color: #343a40;
        }

        .form-check-label {
            cursor: pointer;
            margin-bottom: 0;
        }

        .form-switch-md {
            padding-right: 2.5rem;
            min-height: 24px;
            line-height: 24px;
        }

        .form-switch-md .form-check-input {
            width: 40px;
            height: 20px;
            right: -0.5rem;
            position: relative;
        }

        .form-switch-md .form-check-label {
            vertical-align: middle;
        }

        .form-switch-lg {
            padding-right: 2.75rem;
            min-height: 28px;
            line-height: 28px;
        }

        .form-switch-lg .form-check-input {
            width: 48px;
            height: 24px;
            right: -0.75rem;
            position: relative;
        }

        .input-group-text {
            margin-bottom: 0px;
        }

        .mini-stats-wid .mini-stat-icon {
            overflow: hidden;
            position: relative;
        }

        .mini-stats-wid .mini-stat-icon:before,
        .mini-stats-wid .mini-stat-icon:after {
            content: "";
            position: absolute;
            width: 8px;
            height: 54px;
            background-color: rgba(255, 255, 255, 0.1);
            right: 16px;
            -webkit-transform: rotate(-32deg);
            transform: rotate(-32deg);
            top: -5px;
            -webkit-transition: all 0.4s;
            transition: all 0.4s;
        }

        .mini-stats-wid .mini-stat-icon::after {
            right: -12px;
            width: 12px;
            -webkit-transition: all 0.2s;
            transition: all 0.2s;
        }

        .mini-stats-wid:hover .mini-stat-icon::after {
            right: 60px;
        }

        .button-items {
            margin-right: -8px;
            margin-bottom: -12px;
        }

        .button-items .btn {
            margin-bottom: 12px;
            margin-right: 8px;
        }

        .mfp-popup-form {
            max-width: 1140px;
        }

        .bs-example-modal {
            position: relative;
            top: auto;
            left: auto;
            bottom: auto;
            right: auto;
            z-index: 1;
            display: block;
        }

        .icon-demo-content {
            text-align: center;
            color: #adb5bd;
        }

        .icon-demo-content i {
            display: block;
            font-size: 24px;
            margin-bottom: 16px;
            color: #74788d;
            -webkit-transition: all 0.4s;
            transition: all 0.4s;
        }

        .icon-demo-content .col-lg-4 {
            margin-top: 24px;
        }

        .icon-demo-content .col-lg-4:hover i {
            color: #556ee6;
            -webkit-transform: scale(1.5);
            transform: scale(1.5);
        }

        .grid-structure .grid-container {
            background-color: #f8f9fa;
            margin-top: 10px;
            font-size: .8rem;
            font-weight: 500;
            padding: 10px 20px;
        }

        .card-radio {
            background-color: #fff;
            border: 2px solid #f6f6f6;
            border-radius: 0.25rem;
            padding: 1rem;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        .card-radio:hover {
            cursor: pointer;
        }

        .card-radio-label {
            display: block;
        }

        .card-radio-input {
            display: none;
        }

        .card-radio-input:checked+.card-radio {
            border-color: #556ee6 !important;
        }

        .navs-carousel .owl-nav {
            margin-top: 16px;
        }

        .navs-carousel .owl-nav button {
            width: 30px;
            height: 30px;
            line-height: 28px !important;
            font-size: 20px !important;
            border-radius: 50% !important;
            background-color: rgba(85, 110, 230, 0.25) !important;
            color: #556ee6 !important;
            margin: 4px 8px !important;
        }

        @media print {

            .vertical-menu,
            .right-bar,
            .page-title-box,
            .navbar-header,
            .footer {
                display: none !important;
            }

            .card-body,
            .main-content,
            .right-bar,
            .page-content,
            body {
                padding: 0;
                margin: 0;
            }

            .card {
                border: 0;
            }
        }

        [data-simplebar] {
            position: relative;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            -webkit-box-pack: start;
            -ms-flex-pack: start;
            justify-content: flex-start;
            -ms-flex-line-pack: start;
            align-content: flex-start;
            -webkit-box-align: start;
            -ms-flex-align: start;
            align-items: flex-start;
        }

        .simplebar-wrapper {
            overflow: hidden;
            width: inherit;
            height: inherit;
            max-width: inherit;
            max-height: inherit;
        }

        .simplebar-mask {
            direction: inherit;
            position: absolute;
            overflow: hidden;
            padding: 0;
            margin: 0;
            right: 0;
            top: 0;
            bottom: 0;
            left: 0;
            width: auto !important;
            height: auto !important;
            z-index: 0;
        }

        .simplebar-offset {
            direction: inherit !important;
            -webkit-box-sizing: inherit !important;
            box-sizing: inherit !important;
            resize: none !important;
            position: absolute;
            top: 0;
            right: 0 !important;
            bottom: 0;
            left: 0 !important;
            padding: 0;
            margin: 0;
            -webkit-overflow-scrolling: touch;
        }

        .simplebar-content-wrapper {
            direction: inherit;
            -webkit-box-sizing: border-box !important;
            box-sizing: border-box !important;
            position: relative;
            display: block;
            height: 100%;
            /* Required for horizontal native scrollbar to not appear if parent is taller than natural height */
            width: auto;
            visibility: visible;
            overflow: auto;
            /* Scroll on this element otherwise element can't have a padding applied properly */
            max-width: 100%;
            /* Not required for horizontal scroll to trigger */
            max-height: 100%;
            /* Needed for vertical scroll to trigger */
            scrollbar-width: none;
            padding: 0px !important;
        }

        .simplebar-content-wrapper::-webkit-scrollbar,
        .simplebar-hide-scrollbar::-webkit-scrollbar {
            display: none;
        }

        .simplebar-content:before,
        .simplebar-content:after {
            content: ' ';
            display: table;
        }

        .simplebar-placeholder {
            max-height: 100%;
            max-width: 100%;
            width: 100%;
            pointer-events: none;
        }

        .simplebar-height-auto-observer-wrapper {
            -webkit-box-sizing: inherit !important;
            box-sizing: inherit !important;
            height: 100%;
            width: 100%;
            max-width: 1px;
            position: relative;
            float: right;
            max-height: 1px;
            overflow: hidden;
            z-index: -1;
            padding: 0;
            margin: 0;
            pointer-events: none;
            -webkit-box-flex: inherit;
            -ms-flex-positive: inherit;
            flex-grow: inherit;
            -ms-flex-negative: 0;
            flex-shrink: 0;
            -ms-flex-preferred-size: 0;
            flex-basis: 0;
        }

        .simplebar-height-auto-observer {
            -webkit-box-sizing: inherit;
            box-sizing: inherit;
            display: block;
            opacity: 0;
            position: absolute;
            top: 0;
            right: 0;
            height: 1000%;
            width: 1000%;
            min-height: 1px;
            min-width: 1px;
            overflow: hidden;
            pointer-events: none;
            z-index: -1;
        }

        .simplebar-track {
            z-index: 1;
            position: absolute;
            left: 0;
            bottom: 0;
            pointer-events: none;
            overflow: hidden;
        }

        [data-simplebar].simplebar-dragging .simplebar-content {
            pointer-events: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            -webkit-user-select: none;
        }

        [data-simplebar].simplebar-dragging .simplebar-track {
            pointer-events: all;
        }

        .simplebar-scrollbar {
            position: absolute;
            left: 2px;
            width: 4px;
            min-height: 10px;
        }

        .simplebar-scrollbar:before {
            position: absolute;
            content: '';
            background: #a2adb7;
            border-radius: 7px;
            right: 0;
            left: 0;
            opacity: 0;
            -webkit-transition: opacity 0.2s linear;
            transition: opacity 0.2s linear;
        }

        .simplebar-scrollbar.simplebar-visible:before {
            /* When hovered, remove all transitions from drag handle */
            opacity: 0.5;
            -webkit-transition: opacity 0s linear;
            transition: opacity 0s linear;
        }

        .simplebar-track.simplebar-vertical {
            top: 0;
            width: 11px;
        }

        .simplebar-track.simplebar-vertical .simplebar-scrollbar:before {
            top: 2px;
            bottom: 2px;
        }

        .simplebar-track.simplebar-horizontal {
            right: 0;
            height: 11px;
        }

        .simplebar-track.simplebar-horizontal .simplebar-scrollbar:before {
            height: 100%;
            right: 2px;
            left: 2px;
        }

        .simplebar-track.simplebar-horizontal .simplebar-scrollbar {
            left: auto;
            right: 0;
            top: 2px;
            height: 7px;
            min-height: 0;
            min-width: 10px;
            width: auto;
        }

        /* Rtl support */
        [data-simplebar-direction='rtl'] .simplebar-track.simplebar-vertical {
            left: auto;
            right: 0;
        }

        .hs-dummy-scrollbar-size {
            direction: ltr;
            position: fixed;
            opacity: 0;
            visibility: hidden;
            height: 500px;
            width: 500px;
            overflow-y: hidden;
            overflow-x: scroll;
        }

        .simplebar-hide-scrollbar {
            position: fixed;
            right: 0;
            visibility: hidden;
            overflow-y: scroll;
            scrollbar-width: none;
        }

        .custom-scroll {
            height: 100%;
        }

        /* ==============
  Calendar
===================*/
        .lnb-calendars-item {
            display: inline-block;
            margin-left: 7px;
        }

        input[type=checkbox].tui-full-calendar-checkbox-round+span {
            margin-left: 4px;
            margin-right: 0;
        }

        .tui-full-calendar-layout,
        .tui-full-calendar-timegrid-timezone {
            background-color: #fff !important;
        }

        .tui-full-calendar-dayname-container,
        .tui-full-calendar-left,
        .tui-full-calendar-splitter,
        .tui-full-calendar-time-date,
        .tui-full-calendar-weekday-grid-line,
        .tui-full-calendar-timegrid-timezone,
        .tui-full-calendar-timegrid-gridline {
            border-color: #f6f6f6 !important;
        }

        .tui-full-calendar-weekday-exceed-in-week {
            text-align: center;
            width: 30px;
            height: 30px;
            line-height: 28px;
            border-radius: 4px;
            background-color: #fff;
            color: #495057;
            border-color: #eff2f7;
        }

        .tui-full-calendar-timegrid-hour {
            color: #495057 !important;
        }

        .tui-full-calendar-weekday-schedule-title,
        .tui-full-calendar-time-schedule {
            font-weight: 600;
        }

        /* ==============
  Druafula
===================*/
        .task-box {
            border: 1px solid #f6f6f6;
        }

        .gu-transit {
            border: 1px dashed #74788d !important;
            background-color: #eff2f7 !important;
        }

        #session-timeout-dialog .close {
            display: none;
        }

        #session-timeout-dialog .countdown-holder {
            color: #f46a6a;
            font-weight: 500;
        }

        #session-timeout-dialog .btn-default {
            background-color: #fff;
            color: #f46a6a;
            -webkit-box-shadow: none;
            box-shadow: none;
        }

        .irs {
            font-family: var(--bs-font-sans-serif);
        }

        .irs--square .irs-bar,
        .irs--square .irs-to,
        .irs--square .irs-from,
        .irs--square .irs-single {
            background: #556ee6 !important;
            font-size: 11px;
        }

        .irs--square .irs-to:before,
        .irs--square .irs-from:before,
        .irs--square .irs-single:before {
            border-top-color: #556ee6;
        }

        .irs--square .irs-line {
            background: #f6f6f6;
            border-color: #f6f6f6;
        }

        .irs--square .irs-grid-text {
            font-size: 11px;
            color: #ced4da;
        }

        .irs--square .irs-min,
        .irs--square .irs-max {
            color: #ced4da;
            background: #f6f6f6;
            font-size: 11px;
        }

        .irs--square .irs-handle {
            border: 2px solid #556ee6;
            width: 12px;
            height: 12px;
            top: 26px;
            background-color: #fff !important;
        }

        .swal2-container .swal2-title {
            font-size: 20px;
            font-weight: 500;
        }

        .swal2-modal {
            font-size: 14px;
        }

        .swal2-icon.swal2-question {
            border-color: #50a5f1;
            color: #50a5f1;
        }

        .swal2-icon.swal2-success [class^=swal2-success-line] {
            background-color: #34c38f;
        }

        .swal2-icon.swal2-success .swal2-success-ring {
            border-color: rgba(52, 195, 143, 0.3);
        }

        .swal2-icon.swal2-warning {
            border-color: #f1b44c;
            color: #f1b44c;
        }

        .swal2-styled:focus {
            -webkit-box-shadow: none;
            box-shadow: none;
        }

        .swal2-progress-steps .swal2-progress-step {
            background: #556ee6;
        }

        .swal2-progress-steps .swal2-progress-step.swal2-active-progress-step {
            background: #556ee6;
        }

        .swal2-progress-steps .swal2-progress-step.swal2-active-progress-step~.swal2-progress-step,
        .swal2-progress-steps .swal2-progress-step.swal2-active-progress-step~.swal2-progress-step-line {
            background: rgba(85, 110, 230, 0.3);
        }

        .swal2-progress-steps .swal2-progress-step-line {
            background: #556ee6;
        }

        .swal2-loader {
            border-color: #556ee6 transparent #556ee6 transparent;
        }

        .symbol {
            border-color: #fff;
        }

        .rating-symbol-background,
        .rating-symbol-foreground {
            font-size: 24px;
        }

        .rating-symbol-foreground {
            top: 0px;
        }

        /* =============
   Notification
============= */
        #toast-container>div {
            -webkit-box-shadow: 0 0.75rem 1.5rem rgba(18, 38, 63, 0.03);
            box-shadow: 0 0.75rem 1.5rem rgba(18, 38, 63, 0.03);
            opacity: 1;
        }

        #toast-container>div:hover {
            -webkit-box-shadow: 0 0.75rem 1.5rem rgba(18, 38, 63, 0.03);
            box-shadow: 0 0.75rem 1.5rem rgba(18, 38, 63, 0.03);
            opacity: 0.9;
        }

        #toast-container.toast-top-full-width>div,
        #toast-container.toast-bottom-full-width>div {
            min-width: 96%;
            margin: 4px auto;
        }

        .toast-primary {
            border: 2px solid #556ee6 !important;
            background-color: rgba(85, 110, 230, 0.8) !important;
        }

        .toast-secondary {
            border: 2px solid #74788d !important;
            background-color: rgba(116, 120, 141, 0.8) !important;
        }

        .toast-success {
            border: 2px solid #34c38f !important;
            background-color: rgba(52, 195, 143, 0.8) !important;
        }

        .toast-info {
            border: 2px solid #50a5f1 !important;
            background-color: rgba(80, 165, 241, 0.8) !important;
        }

        .toast-warning {
            border: 2px solid #f1b44c !important;
            background-color: rgba(241, 180, 76, 0.8) !important;
        }

        .toast-danger {
            border: 2px solid #f46a6a !important;
            background-color: rgba(244, 106, 106, 0.8) !important;
        }

        .toast-pink {
            border: 2px solid #e83e8c !important;
            background-color: rgba(232, 62, 140, 0.8) !important;
        }

        .toast-light {
            border: 2px solid #eff2f7 !important;
            background-color: rgba(239, 242, 247, 0.8) !important;
        }

        .toast-dark {
            border: 2px solid #343a40 !important;
            background-color: rgba(52, 58, 64, 0.8) !important;
        }

        .toast-error {
            background-color: rgba(244, 106, 106, 0.8);
            border: 2px solid #f46a6a;
        }

        .toastr-options {
            padding: 24px;
            background-color: #f6f8fa;
            margin-bottom: 0;
            border: 1px solid #eff2f7;
        }

        .error {
            color: #f46a6a;
        }

        .parsley-error {
            border-color: #f46a6a;
        }

        .parsley-errors-list {
            display: none;
            margin: 0;
            padding: 0;
        }

        .parsley-errors-list.filled {
            display: block;
        }

        .parsley-errors-list>li {
            font-size: 12px;
            list-style: none;
            color: #f46a6a;
            margin-top: 5px;
        }

        .select2-container .select2-selection--single {
            background-color: #fff;
            border: 1px solid #ced4da;
            height: 38px;
        }

        .select2-container .select2-selection--single:focus {
            outline: none;
        }

        .select2-container .select2-selection--single .select2-selection__rendered {
            line-height: 36px;
            padding-right: 0.75rem;
            color: #495057;
        }

        .select2-container .select2-selection--single .select2-selection__arrow {
            height: 34px;
            width: 34px;
            left: 3px;
        }

        .select2-container .select2-selection--single .select2-selection__arrow b {
            border-color: #adb5bd transparent transparent transparent;
            border-width: 6px 6px 0 6px;
        }

        .select2-container .select2-selection--single .select2-selection__placeholder {
            color: #495057;
        }

        .select2-container--open .select2-selection--single .select2-selection__arrow b {
            border-color: transparent transparent #adb5bd transparent !important;
            border-width: 0 6px 6px 6px !important;
        }

        .select2-container--default .select2-search--dropdown {
            padding: 10px;
            background-color: #fff;
        }

        .select2-container--default .select2-search--dropdown .select2-search__field {
            border: 1px solid #ced4da;
            background-color: #fff;
            color: #74788d;
            outline: none;
        }

        .select2-container--default .select2-results__option--highlighted[aria-selected] {
            background-color: #556ee6;
        }

        .select2-container--default .select2-results__option[aria-selected=true] {
            background-color: #f8f9fa;
            color: #343a40;
        }

        .select2-container--default .select2-results__option[aria-selected=true]:hover {
            background-color: #556ee6;
            color: #fff;
        }

        .select2-results__option {
            padding: 6px 12px;
        }

        .select2-container[dir="rtl"] .select2-selection--single .select2-selection__rendered {
            padding-right: 0.75rem;
        }

        .select2-dropdown {
            border: 1px solid rgba(0, 0, 0, 0.15);
            background-color: #fff;
            -webkit-box-shadow: 0 0.75rem 1.5rem rgba(18, 38, 63, 0.03);
            box-shadow: 0 0.75rem 1.5rem rgba(18, 38, 63, 0.03);
        }

        .select2-search input {
            border: 1px solid #f6f6f6;
        }

        .select2-container .select2-selection--multiple {
            min-height: 38px;
            background-color: #fff;
            border: 1px solid #ced4da !important;
        }

        .select2-container .select2-selection--multiple .select2-selection__rendered {
            padding: 2px 0.75rem;
        }

        .select2-container .select2-selection--multiple .select2-search__field {
            border: 0;
            color: #495057;
        }

        .select2-container .select2-selection--multiple .select2-search__field::-webkit-input-placeholder {
            color: #495057;
        }

        .select2-container .select2-selection--multiple .select2-search__field::-moz-placeholder {
            color: #495057;
        }

        .select2-container .select2-selection--multiple .select2-search__field:-ms-input-placeholder {
            color: #495057;
        }

        .select2-container .select2-selection--multiple .select2-search__field::-ms-input-placeholder {
            color: #495057;
        }

        .select2-container .select2-selection--multiple .select2-search__field::placeholder {
            color: #495057;
        }

        .select2-container .select2-selection--multiple .select2-selection__choice {
            background-color: #eff2f7;
            border: 1px solid #f6f6f6;
            border-radius: 1px;
            padding: 0 7px;
        }

        .select2-container--default.select2-container--focus .select2-selection--multiple {
            border-color: #ced4da;
        }

        .select2-container--default .select2-results__group {
            font-weight: 600;
        }

        .select2-result-repository__avatar {
            float: right;
            width: 60px;
            margin-left: 10px;
        }

        .select2-result-repository__avatar img {
            width: 100%;
            height: auto;
            border-radius: 2px;
        }

        .select2-result-repository__statistics {
            margin-top: 7px;
        }

        .select2-result-repository__forks,
        .select2-result-repository__stargazers,
        .select2-result-repository__watchers {
            display: inline-block;
            font-size: 11px;
            margin-left: 1em;
            color: #adb5bd;
        }

        .select2-result-repository__forks .fa,
        .select2-result-repository__stargazers .fa,
        .select2-result-repository__watchers .fa {
            margin-left: 4px;
        }

        .select2-result-repository__forks .fa.fa-flash::before,
        .select2-result-repository__stargazers .fa.fa-flash::before,
        .select2-result-repository__watchers .fa.fa-flash::before {
            content: "\f0e7";
            font-family: 'Font Awesome 5 Free';
        }

        .select2-results__option--highlighted .select2-result-repository__forks,
        .select2-results__option--highlighted .select2-result-repository__stargazers,
        .select2-results__option--highlighted .select2-result-repository__watchers {
            color: rgba(255, 255, 255, 0.8);
        }

        .select2-result-repository__meta {
            overflow: hidden;
        }

        .img-flag {
            margin-left: 7px;
            height: 15px;
            width: 18px;
        }

        /* CSS Switch */
        input[switch] {
            display: none;
        }

        input[switch]+label {
            font-size: 1em;
            line-height: 1;
            width: 56px;
            height: 24px;
            background-color: #ced4da;
            background-image: none;
            border-radius: 2rem;
            padding: 0.16667rem;
            cursor: pointer;
            display: inline-block;
            text-align: center;
            position: relative;
            font-weight: 500;
            -webkit-transition: all 0.1s ease-in-out;
            transition: all 0.1s ease-in-out;
        }

        input[switch]+label:before {
            color: #343a40;
            content: attr(data-off-label);
            display: block;
            font-family: inherit;
            font-weight: 500;
            font-size: 12px;
            line-height: 21px;
            position: absolute;
            left: 1px;
            margin: 3px;
            top: -2px;
            text-align: center;
            min-width: 1.66667rem;
            overflow: hidden;
            -webkit-transition: all 0.1s ease-in-out;
            transition: all 0.1s ease-in-out;
        }

        input[switch]+label:after {
            content: '';
            position: absolute;
            right: 3px;
            background-color: #eff2f7;
            -webkit-box-shadow: none;
            box-shadow: none;
            border-radius: 2rem;
            height: 20px;
            width: 20px;
            top: 2px;
            -webkit-transition: all 0.1s ease-in-out;
            transition: all 0.1s ease-in-out;
        }

        input[switch]:checked+label {
            background-color: #556ee6;
        }

        input[switch]:checked+label {
            background-color: #556ee6;
        }

        input[switch]:checked+label:before {
            color: #fff;
            content: attr(data-on-label);
            left: auto;
            right: 3px;
        }

        input[switch]:checked+label:after {
            right: 33px;
            background-color: #eff2f7;
        }

        input[switch="bool"]+label {
            background-color: #f46a6a;
        }

        input[switch="bool"]+label:before,
        input[switch="bool"]:checked+label:before,
        input[switch="default"]:checked+label:before {
            color: #fff;
        }

        input[switch="bool"]:checked+label {
            background-color: #34c38f;
        }

        input[switch="default"]:checked+label {
            background-color: #a2a2a2;
        }

        input[switch="primary"]:checked+label {
            background-color: #556ee6;
        }

        input[switch="success"]:checked+label {
            background-color: #34c38f;
        }

        input[switch="info"]:checked+label {
            background-color: #50a5f1;
        }

        input[switch="warning"]:checked+label {
            background-color: #f1b44c;
        }

        input[switch="danger"]:checked+label {
            background-color: #f46a6a;
        }

        input[switch="dark"]:checked+label {
            background-color: #343a40;
        }

        input[switch="dark"]:checked+label:before {
            color: #eff2f7;
        }

        .square-switch {
            margin-left: 7px;
        }

        .square-switch input[switch]+label,
        .square-switch input[switch]+label:after {
            border-radius: 4px;
        }

        .sp-container {
            background-color: #fff;
        }

        .sp-container button {
            padding: .25rem .5rem;
            font-size: .71094rem;
            border-radius: .2rem;
            font-weight: 400;
            color: #343a40;
        }

        .sp-container button.sp-palette-toggle {
            background-color: #eff2f7;
        }

        .sp-container button.sp-choose {
            background-color: #34c38f;
            margin-right: 5px;
            margin-left: 0;
        }

        .sp-palette-container {
            border-left: 1px solid #eff2f7;
        }

        .sp-input {
            background-color: #fff;
            border-color: #ced4da !important;
            color: #495057;
        }

        .sp-input:focus {
            outline: none;
        }

        [dir="rtl"] .sp-alpha {
            direction: rtl;
        }

        [dir="rtl"] .sp-original-input-container .sp-add-on {
            border-top-left-radius: 0 !important;
            border-bottom-left-radius: 0 !important;
            border-top-right-radius: 4px !important;
            border-bottom-right-radius: 4px !important;
        }

        [dir="rtl"] input.spectrum.with-add-on {
            border: 1px solid #ced4da;
            border-right: 0;
            border-top-right-radius: 0;
            border-bottom-right-radius: 0;
            border-top-left-radius: 0.25rem;
            border-bottom-left-radius: 0.25rem;
        }

        /* Timepicker */
        .bootstrap-timepicker-widget table td a {
            color: #495057;
        }

        .bootstrap-timepicker-widget table td a:hover {
            background-color: transparent;
            border-color: transparent;
            border-radius: 4px;
            color: #556ee6;
            text-decoration: none;
        }

        .bootstrap-timepicker-widget table td input {
            width: 32px;
            height: 32px;
            border: 0;
            color: #495057;
            border: 1px solid #eff2f7;
            background-color: #fff;
        }

        .bootstrap-timepicker-widget.dropdown-menu:after {
            border-bottom-color: #eff2f7;
        }

        .bootstrap-timepicker-widget.timepicker-orient-bottom:after {
            border-top-color: #eff2f7;
        }

        [dir="rtl"] .bootstrap-timepicker-widget {
            left: 0 !important;
            right: auto;
        }

        [dir="rtl"] .timepicker-orient-top {
            top: calc(1.5em + 0.94rem + 2px) !important;
        }

        [dir="rtl"] .timepicker-orient-bottom {
            top: auto !important;
            bottom: calc(1.5em + 0.94rem + 2px) !important;
        }

        [dir="rtl"] .datepicker {
            left: 0 !important;
            right: auto;
        }

        [dir="rtl"] .bootstrap-timepicker-widget {
            left: 0 !important;
            right: auto;
        }

        [dir="rtl"] .timepicker-orient-top {
            top: calc(1.5em + 0.94rem + 2px) !important;
        }

        [dir="rtl"] .timepicker-orient-bottom {
            top: auto !important;
            bottom: calc(1.5em + 0.94rem + 2px) !important;
        }

        .datepicker {
            border: 1px solid #eff2f7;
            padding: 8px;
            z-index: 999 !important;
        }

        .datepicker table tr th {
            font-weight: 500;
        }

        .datepicker table tr td.active,
        .datepicker table tr td.active:hover,
        .datepicker table tr td .active.disabled,
        .datepicker table tr td.active.disabled:hover,
        .datepicker table tr td.today,
        .datepicker table tr td.today:hover,
        .datepicker table tr td.today.disabled,
        .datepicker table tr td.today.disabled:hover,
        .datepicker table tr td.selected,
        .datepicker table tr td.selected:hover,
        .datepicker table tr td.selected.disabled,
        .datepicker table tr td.selected.disabled:hover,
        .datepicker table tr td span.active.active,
        .datepicker table tr td span.active:hover.active {
            background-color: #556ee6 !important;
            background-image: none;
            -webkit-box-shadow: none;
            box-shadow: none;
            color: #fff !important;
        }

        .datepicker table tr td.day.focused,
        .datepicker table tr td.day:hover,
        .datepicker table tr td span.focused,
        .datepicker table tr td span:hover {
            background: #eff2f7;
        }

        .datepicker table tr td.new,
        .datepicker table tr td.old,
        .datepicker table tr td span.new,
        .datepicker table tr td span.old {
            color: #adb5bd;
            opacity: 0.6;
        }

        .datepicker table tr td.range,
        .datepicker table tr td.range.disabled,
        .datepicker table tr td.range.disabled:hover,
        .datepicker table tr td.range:hover {
            background-color: #f6f6f6;
        }

        .table-condensed>thead>tr>th,
        .table-condensed>tbody>tr>td {
            padding: 7px;
        }

        .bootstrap-datepicker-inline .datepicker-inline {
            width: auto !important;
            display: inline-block;
        }

        .datepicker-container {
            border: 1px solid #eff2f7;
            -webkit-box-shadow: none;
            box-shadow: none;
            background-color: #fff;
        }

        .datepicker-container.datepicker-inline {
            width: 212px;
        }

        .datepicker-panel>ul>li {
            background-color: #fff;
            border-radius: 4px;
        }

        .datepicker-panel>ul>li.picked,
        .datepicker-panel>ul>li.picked:hover {
            background-color: rgba(85, 110, 230, 0.25);
            color: #556ee6;
        }

        .datepicker-panel>ul>li.highlighted,
        .datepicker-panel>ul>li.highlighted:hover,
        .datepicker-panel>ul>li:hover {
            background-color: #556ee6;
            color: #fff;
        }

        .datepicker-panel>ul>li.muted,
        .datepicker-panel>ul>li.muted:hover {
            color: #adb5bd;
            opacity: 0.6;
        }

        .datepicker-panel>ul[data-view=week]>li {
            font-weight: 500;
        }

        .datepicker-panel>ul[data-view=week]>li,
        .datepicker-panel>ul[data-view=week]>li:hover {
            background-color: #fff;
        }

        .bootstrap-touchspin.input-group>.input-group-prepend>.btn,
        .bootstrap-touchspin.input-group>.input-group-prepend>.input-group-text {
            border-top-left-radius: 0;
            border-bottom-left-radius: 0;
        }

        .bootstrap-touchspin.input-group>.input-group-append>.btn,
        .bootstrap-touchspin.input-group>.input-group-append>.input-group-text {
            border-top-right-radius: 0;
            border-bottom-right-radius: 0;
        }

        .tox-tinymce {
            border: 1px solid #ced4da !important;
        }

        .tox .tox-statusbar {
            border-top: 1px solid #eff2f7 !important;
        }

        .tox .tox-menubar,
        .tox .tox-edit-area__iframe,
        .tox .tox-statusbar {
            background-color: #fff !important;
            background: none !important;
        }

        .tox .tox-mbtn {
            color: #495057 !important;
        }

        .tox .tox-mbtn:hover:not(:disabled):not(.tox-mbtn--active) {
            background-color: #eff2f7 !important;
        }

        .tox .tox-tbtn:hover {
            background-color: #eff2f7 !important;
        }

        .tox .tox-toolbar,
        .tox .tox-toolbar__overflow,
        .tox .tox-toolbar__primary {
            background: #eff2f7 !important;
        }

        .tox .tox-toolbar__primary {
            border-top-color: #eff2f7 !important;
        }

        .tox .tox-tbtn {
            color: #495057 !important;
        }

        .tox .tox-tbtn svg {
            fill: #495057 !important;
        }

        .tox .tox-edit-area__iframe {
            background-color: #fff !important;
        }

        .tox .tox-statusbar a,
        .tox .tox-statusbar__path-item,
        .tox .tox-statusbar__wordcount {
            color: #495057 !important;
        }

        .tox:not([dir=rtl]) .tox-toolbar__group:not(:last-of-type) {
            border-left: 1px solid #dee4ef !important;
        }

        .editable-input .form-control {
            display: inline-block;
        }

        .editable-buttons {
            margin-right: 7px;
        }

        .editable-buttons .editable-cancel {
            margin-right: 7px;
        }

        /* Dropzone */
        .dropzone {
            min-height: 230px;
            border: 2px dashed #ced4da;
            background: #fff;
            border-radius: 6px;
        }

        .dropzone .dz-message {
            font-size: 24px;
            width: 100%;
        }

        .form-wizard-wrapper label {
            font-size: 14px;
            text-align: left;
        }

        .wizard .steps>ul {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            padding-right: 0;
            margin-bottom: 0;
            list-style: none;
        }

        @media (max-width: 1199.98px) {
            .wizard .steps>ul {
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                -ms-flex-direction: column;
                flex-direction: column;
            }
        }

        .wizard .steps>ul>a,
        .wizard .steps>ul>li {
            -ms-flex-preferred-size: 0;
            flex-basis: 0;
            -webkit-box-flex: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
        }

        .wizard .steps>ul>li {
            width: 100%;
        }

        .wizard .steps>ul>li a {
            display: block;
            padding: .5rem 1rem;
            color: #495057;
            font-weight: 500;
            background-color: rgba(85, 110, 230, 0.1);
        }

        .wizard .steps>ul .current-info {
            position: absolute;
            right: -999em;
        }

        .wizard .steps .number {
            display: inline-block;
            width: 38px;
            height: 38px;
            line-height: 34px;
            border: 2px solid #556ee6;
            color: #556ee6;
            text-align: center;
            border-radius: 50%;
            margin-left: .5rem;
        }

        .wizard .steps .current a,
        .wizard .steps .current a:active,
        .wizard .steps .current a:hover {
            background-color: rgba(85, 110, 230, 0.2);
            color: #495057;
        }

        .wizard .steps .current a .number,
        .wizard .steps .current a:active .number,
        .wizard .steps .current a:hover .number {
            background-color: #556ee6;
            color: #fff;
        }

        .wizard>.content {
            background-color: transparent;
            padding: 14px;
            margin-top: 0;
            border-radius: 0;
            min-height: 150px;
        }

        .wizard>.content>.title {
            position: absolute;
            right: -999em;
        }

        .wizard>.content>.body {
            width: 100%;
            height: 100%;
            padding: 14px 0 0;
            position: static;
        }

        .wizard>.actions {
            position: relative;
            display: block;
            text-align: left;
            width: 100%;
        }

        .wizard>.actions>ul {
            display: block;
            text-align: left;
            padding-right: 0;
        }

        .wizard>.actions>ul>li {
            display: inline-block;
            margin: 0 0.5em;
        }

        .wizard>.actions a,
        .wizard>.actions a:active,
        .wizard>.actions a:hover {
            background-color: #556ee6;
            border-radius: 4px;
            padding: 8px 15px;
            color: #fff;
        }

        .wizard>.actions .disabled a,
        .wizard>.actions .disabled a:active,
        .wizard>.actions .disabled a:hover {
            opacity: .65;
            background-color: #556ee6;
            color: #fff;
            cursor: not-allowed;
        }

        .wizard.vertical-wizard {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
        }

        .wizard.vertical-wizard .steps>ul {
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
        }

        .wizard.vertical-wizard .steps>ul>li {
            width: 100% !important;
        }

        .wizard.vertical-wizard .steps,
        .wizard.vertical-wizard .content,
        .wizard.vertical-wizard .actions {
            width: 100%;
        }

        @media (min-width: 1200px) {
            .wizard.vertical-wizard .steps {
                width: 25%;
            }
        }

        .wizard.vertical-wizard .content {
            padding: 24px;
        }

        @media (min-width: 1200px) {
            .wizard.vertical-wizard .content {
                width: 75%;
                padding: 12px 24px;
            }
        }

        .wizard.vertical-wizard .content>.body {
            padding: 0;
        }

        /* 
Datatable
*/
        div.dataTables_wrapper div.dataTables_filter {
            text-align: left;
        }

        @media (max-width: 767px) {
            div.dataTables_wrapper div.dataTables_filter {
                text-align: center;
            }
        }

        div.dataTables_wrapper div.dataTables_filter input {
            margin-right: 0.5em;
            margin-left: 0;
        }

        .table.dataTable.dtr-inline.collapsed>tbody>tr>td,
        table.dataTable.dtr-inline.collapsed>tbody>tr>td {
            position: relative;
        }

        .table.dataTable.dtr-inline.collapsed>tbody>tr>td.dtr-control,
        table.dataTable.dtr-inline.collapsed>tbody>tr>td.dtr-control {
            padding-right: 30px;
        }

        .table.dataTable.dtr-inline.collapsed>tbody>tr>td.dtr-control:before,
        table.dataTable.dtr-inline.collapsed>tbody>tr>td.dtr-control:before {
            top: 50%;
            right: 5px;
            height: 14px;
            width: 14px;
            margin-top: -9px;
            display: block;
            position: absolute;
            color: #fff;
            border: 2px solid #fff;
            border-radius: 14px;
            -webkit-box-sizing: content-box;
            box-sizing: content-box;
            text-align: center;
            text-indent: 0 !important;
            line-height: 14px;
            content: '+';
            background-color: #556ee6;
        }

        .table-rep-plugin .btn-toolbar {
            display: block;
        }

        .table-rep-plugin .table-responsive {
            border: none !important;
        }

        .table-rep-plugin .btn-group .btn-default {
            background-color: #74788d;
            color: #eff2f7;
            border: 1px solid #74788d;
        }

        .table-rep-plugin .btn-group .btn-default.btn-primary {
            background-color: #556ee6;
            border-color: #556ee6;
            color: #fff;
            -webkit-box-shadow: 0 0 0 2px rgba(85, 110, 230, 0.5);
            box-shadow: 0 0 0 2px rgba(85, 110, 230, 0.5);
        }

        .table-rep-plugin .btn-group.pull-right {
            float: left;
        }

        .table-rep-plugin .btn-group.pull-right .dropdown-menu {
            left: 0;
            -webkit-transform: none !important;
            transform: none !important;
            top: 100% !important;
        }

        .table-rep-plugin tbody th {
            font-size: 14px;
            font-weight: normal;
        }

        .table-rep-plugin .checkbox-row {
            padding-right: 40px;
            color: #495057 !important;
        }

        .table-rep-plugin .checkbox-row:hover {
            background-color: #f6f8fa !important;
        }

        .table-rep-plugin .checkbox-row label {
            display: inline-block;
            padding-right: 5px;
            position: relative;
        }

        .table-rep-plugin .checkbox-row label::before {
            -o-transition: 0.3s ease-in-out;
            -webkit-transition: 0.3s ease-in-out;
            background-color: #fff;
            border-radius: 3px;
            border: 1px solid #f6f6f6;
            content: "";
            display: inline-block;
            height: 17px;
            right: 0;
            margin-right: -20px;
            position: absolute;
            transition: 0.3s ease-in-out;
            width: 17px;
            outline: none !important;
        }

        .table-rep-plugin .checkbox-row label::after {
            color: #eff2f7;
            display: inline-block;
            font-size: 11px;
            height: 16px;
            right: 0;
            margin-right: -20px;
            padding-right: 3px;
            padding-top: 1px;
            position: absolute;
            top: -1px;
            width: 16px;
        }

        .table-rep-plugin .checkbox-row input[type="checkbox"] {
            cursor: pointer;
            opacity: 0;
            z-index: 1;
            outline: none !important;
        }

        .table-rep-plugin .checkbox-row input[type="checkbox"]:disabled+label {
            opacity: 0.65;
        }

        .table-rep-plugin .checkbox-row input[type="checkbox"]:focus+label::before {
            outline-offset: -2px;
            outline: none;
        }

        .table-rep-plugin .checkbox-row input[type="checkbox"]:checked+label::after {
            content: "\f00c";
            font-family: 'Font Awesome 5 Free';
            font-weight: 900;
        }

        .table-rep-plugin .checkbox-row input[type="checkbox"]:disabled+label::before {
            background-color: #f8f9fa;
            cursor: not-allowed;
        }

        .table-rep-plugin .checkbox-row input[type="checkbox"]:checked+label::before {
            background-color: #556ee6;
            border-color: #556ee6;
        }

        .table-rep-plugin .checkbox-row input[type="checkbox"]:checked+label::after {
            color: #fff;
        }

        .table-rep-plugin .fixed-solution .sticky-table-header {
            top: 70px !important;
            background-color: #556ee6;
        }

        .table-rep-plugin .fixed-solution .sticky-table-header table {
            color: #fff;
        }

        .table-rep-plugin table.focus-on tbody tr.focused th,
        .table-rep-plugin table.focus-on tbody tr.focused td,
        .table-rep-plugin .sticky-table-header {
            background: #556ee6;
            border-color: #556ee6;
            color: #fff;
        }

        .table-rep-plugin table.focus-on tbody tr.focused th table,
        .table-rep-plugin table.focus-on tbody tr.focused td table,
        .table-rep-plugin .sticky-table-header table {
            color: #fff;
        }

        @media (min-width: 992px) {
            body[data-layout="horizontal"] .fixed-solution .sticky-table-header {
                top: 120px !important;
            }
        }

        .table-edits input,
        .table-edits select {
            height: calc(1.5em + 0.5rem + 2px);
            padding: 0.25rem 0.5rem;
            border: 1px solid #ced4da;
            color: #495057;
            border-radius: 0.25rem;
        }

        .table-edits input:focus,
        .table-edits select:focus {
            outline: none;
            border-color: #b9bfc4;
        }

        .apex-charts {
            min-height: 10px !important;
        }

        .apex-charts text {
            font-family: var(--bs-font-sans-serif) !important;
            fill: #adb5bd;
        }

        .apex-charts .apexcharts-canvas {
            margin: 0 auto;
        }

        .apexcharts-tooltip-title,
        .apexcharts-tooltip-text {
            font-family: var(--bs-font-sans-serif) !important;
        }

        .apexcharts-legend-series {
            font-weight: 500;
        }

        .apexcharts-gridline {
            pointer-events: none;
            stroke: #f8f9fa;
        }

        .apexcharts-legend-text {
            color: #74788d !important;
            font-family: var(--bs-font-sans-serif) !important;
            font-size: 13px !important;
        }

        .apexcharts-pie-label {
            fill: #fff !important;
        }

        .apexcharts-yaxis text,
        .apexcharts-xaxis text {
            font-family: var(--bs-font-sans-serif) !important;
            fill: #adb5bd;
        }

        .e-charts {
            height: 350px;
        }

        /* Flot chart */
        .flot-charts-height {
            height: 320px;
        }

        .flotTip {
            padding: 8px 12px;
            background-color: rgba(52, 58, 64, 0.9);
            z-index: 100;
            color: #f8f9fa;
            -webkit-box-shadow: 0 0.75rem 1.5rem rgba(18, 38, 63, 0.03);
            box-shadow: 0 0.75rem 1.5rem rgba(18, 38, 63, 0.03);
            border-radius: 4px;
        }

        .legendLabel {
            color: #adb5bd;
        }

        .jqstooltip {
            -webkit-box-sizing: content-box;
            box-sizing: content-box;
            width: auto !important;
            height: auto !important;
            background-color: #343a40 !important;
            -webkit-box-shadow: 0 1rem 3rem rgba(0, 0, 0, 0.175);
            box-shadow: 0 1rem 3rem rgba(0, 0, 0, 0.175);
            padding: 5px 10px !important;
            border-radius: 3px;
            border-color: #212529 !important;
        }

        .jqsfield {
            color: #eff2f7 !important;
            font-size: 12px !important;
            line-height: 18px !important;
            font-family: var(--bs-font-sans-serif) !important;
            font-weight: 500 !important;
        }

        .gmaps,
        .gmaps-panaroma {
            height: 300px !important;
            background: #f8f9fa;
            border-radius: 3px;
        }

        .gmaps-overlay {
            display: block;
            text-align: center;
            color: #fff;
            font-size: 16px;
            line-height: 40px;
            background: #556ee6;
            border-radius: 4px;
            padding: 10px 20px;
        }

        .gmaps-overlay_arrow {
            right: 50%;
            margin-right: -16px;
            width: 0;
            height: 0;
            position: absolute;
        }

        .gmaps-overlay_arrow.above {
            bottom: -15px;
            border-right: 16px solid transparent;
            border-left: 16px solid transparent;
            border-top: 16px solid #556ee6;
        }

        .gmaps-overlay_arrow.below {
            top: -15px;
            border-right: 16px solid transparent;
            border-left: 16px solid transparent;
            border-bottom: 16px solid #556ee6;
        }

        .jvectormap-label {
            border: none;
            background: #343a40;
            color: #f8f9fa;
            font-family: var(--bs-font-sans-serif);
            font-size: 0.8125rem;
            padding: 5px 8px;
        }

        .leaflet-map {
            height: 300px;
        }

        .leaflet-map.leaflet-container {
            z-index: 99;
        }

        .home-btn {
            position: absolute;
            top: 15px;
            left: 25px;
        }

        .auth-logo .auth-logo-dark {
            display: block;
        }

        .auth-logo .auth-logo-light {
            display: none;
        }

        .auth-body-bg {
            background-color: #fff;
        }

        .auth-pass-inputgroup input[type="input"]+.btn .mdi-eye-outline:before {
            content: "\F06D1";
        }

        .auth-full-bg {
            background-color: rgba(85, 110, 230, 0.25);
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
        }

        @media (min-width: 1200px) {
            .auth-full-bg {
                height: 100vh;
            }
        }

        .auth-full-bg::before {
            content: "";
            position: absolute;
            width: 300px;
            height: 300px;
            border-radius: 50%;
        }

        .auth-full-bg .bg-overlay {
            background: url("../images/bg-auth-overlay.png");
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }

        .auth-full-page-content {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
        }

        @media (min-width: 1200px) {
            .auth-full-page-content {
                min-height: 100vh;
            }
        }

        .auth-review-carousel.owl-theme .owl-dots .owl-dot span {
            background-color: rgba(85, 110, 230, 0.25);
        }

        .auth-review-carousel.owl-theme .owl-dots .owl-dot.active span,
        .auth-review-carousel.owl-theme .owl-dots .owl-dot:hover span {
            background-color: #556ee6;
        }

        .search-box .form-control {
            border-radius: 30px;
            padding-right: 40px;
        }

        .search-box .search-icon {
            font-size: 16px;
            position: absolute;
            right: 13px;
            top: 0;
            line-height: 38px;
        }

        .product-list li a {
            display: block;
            padding: 4px 0px;
            color: #495057;
        }

        .product-view-nav.nav-pills .nav-item {
            margin-right: 4px;
        }

        .product-view-nav.nav-pills .nav-link {
            width: 36px;
            height: 36px;
            font-size: 16px;
            padding: 0;
            line-height: 36px;
            text-align: center;
            border-radius: 50%;
        }

        .product-ribbon {
            position: absolute;
            left: 0px;
            top: 0px;
        }

        .product-detai-imgs .nav .nav-link {
            margin: 7px 0px;
        }

        .product-detai-imgs .nav .nav-link.active {
            background-color: #f6f6f6;
        }

        .product-color a {
            display: inline-block;
            text-align: center;
            color: #495057;
        }

        .product-color a .product-color-item {
            margin: 7px;
        }

        .product-color a.active,
        .product-color a:hover {
            color: #556ee6;
        }

        .product-color a.active .product-color-item,
        .product-color a:hover .product-color-item {
            border-color: #556ee6 !important;
        }

        .visa-card .visa-logo {
            line-height: 0.5;
        }

        .visa-card .visa-pattern {
            position: absolute;
            font-size: 385px;
            color: rgba(255, 255, 255, 0.05);
            line-height: 0.4;
            left: 0px;
            bottom: 0px;
        }

        .checkout-tabs .nav-pills .nav-link {
            margin-bottom: 24px;
            text-align: center;
            background-color: #fff;
            -webkit-box-shadow: 0 0.75rem 1.5rem rgba(18, 38, 63, 0.03);
            box-shadow: 0 0.75rem 1.5rem rgba(18, 38, 63, 0.03);
        }

        .checkout-tabs .nav-pills .nav-link.active {
            background-color: #556ee6;
        }

        .checkout-tabs .nav-pills .nav-link .check-nav-icon {
            font-size: 36px;
        }

        /* ==============
  Email
===================*/
        .email-leftbar {
            width: 236px;
            float: right;
            padding: 20px;
            border-radius: 5px;
        }

        .email-rightbar {
            margin-right: 260px;
        }

        .chat-user-box p.user-title {
            color: #343a40;
            font-weight: 500;
        }

        .chat-user-box p {
            font-size: 12px;
        }

        @media (max-width: 767px) {
            .email-leftbar {
                float: none;
                width: 100%;
            }

            .email-rightbar {
                margin: 0;
            }
        }

        .mail-list a {
            display: block;
            color: #74788d;
            line-height: 24px;
            padding: 8px 5px;
        }

        .mail-list a.active {
            color: #f46a6a;
            font-weight: 500;
        }

        .message-list {
            display: block;
            padding-right: 0;
        }

        .message-list li {
            position: relative;
            display: block;
            height: 50px;
            line-height: 50px;
            cursor: default;
            -webkit-transition-duration: .3s;
            transition-duration: .3s;
        }

        .message-list li a {
            color: #74788d;
        }

        .message-list li:hover {
            background: #f6f6f6;
            -webkit-transition-duration: .05s;
            transition-duration: .05s;
        }

        .message-list li .col-mail {
            float: right;
            position: relative;
        }

        .message-list li .col-mail-1 {
            width: 320px;
        }

        .message-list li .col-mail-1 .star-toggle,
        .message-list li .col-mail-1 .checkbox-wrapper-mail,
        .message-list li .col-mail-1 .dot {
            display: block;
            float: right;
        }

        .message-list li .col-mail-1 .dot {
            border: 4px solid transparent;
            border-radius: 100px;
            margin: 22px 26px 0;
            height: 0;
            width: 0;
            line-height: 0;
            font-size: 0;
        }

        .message-list li .col-mail-1 .checkbox-wrapper-mail {
            margin: 15px 20px 0 10px;
        }

        .message-list li .col-mail-1 .star-toggle {
            margin-top: 18px;
            margin-right: 5px;
        }

        .message-list li .col-mail-1 .title {
            position: absolute;
            top: 0;
            right: 110px;
            left: 0;
            text-overflow: ellipsis;
            overflow: hidden;
            white-space: nowrap;
            margin-bottom: 0;
        }

        .message-list li .col-mail-2 {
            position: absolute;
            top: 0;
            right: 320px;
            left: 0;
            bottom: 0;
        }

        .message-list li .col-mail-2 .subject,
        .message-list li .col-mail-2 .date {
            position: absolute;
            top: 0;
        }

        .message-list li .col-mail-2 .subject {
            right: 0;
            left: 200px;
            text-overflow: ellipsis;
            overflow: hidden;
            white-space: nowrap;
        }

        .message-list li .col-mail-2 .date {
            left: 0;
            width: 170px;
            padding-right: 80px;
        }

        .message-list li.active,
        .message-list li.active:hover {
            -webkit-box-shadow: inset -3px 0 0 #556ee6;
            box-shadow: inset -3px 0 0 #556ee6;
        }

        .message-list li.unread {
            background-color: #f6f6f6;
            font-weight: 500;
            color: #292d32;
        }

        .message-list li.unread a {
            color: #292d32;
            font-weight: 500;
        }

        .message-list .checkbox-wrapper-mail {
            cursor: pointer;
            height: 20px;
            width: 20px;
            position: relative;
            display: inline-block;
            -webkit-box-shadow: inset 0 0 0 1px #ced4da;
            box-shadow: inset 0 0 0 1px #ced4da;
            border-radius: 1px;
        }

        .message-list .checkbox-wrapper-mail input {
            opacity: 0;
            cursor: pointer;
        }

        .message-list .checkbox-wrapper-mail input:checked~label {
            opacity: 1;
        }

        .message-list .checkbox-wrapper-mail label {
            position: absolute;
            height: 20px;
            width: 20px;
            right: 0;
            cursor: pointer;
            opacity: 0;
            margin-bottom: 0;
            -webkit-transition-duration: .05s;
            transition-duration: .05s;
            top: 0;
        }

        .message-list .checkbox-wrapper-mail label:before {
            content: "\F012C";
            font-family: "Material Design Icons";
            top: 0;
            height: 20px;
            color: #292d32;
            width: 20px;
            position: absolute;
            margin-top: -16px;
            right: 4px;
            font-size: 13px;
        }

        @media (max-width: 575.98px) {
            .message-list li .col-mail-1 {
                width: 200px;
            }
        }

        @media (min-width: 1200px) {
            .filemanager-sidebar {
                min-width: 230px;
                max-width: 230px;
            }
        }

        @media (min-width: 1366px) {
            .filemanager-sidebar {
                min-width: 280px;
                max-width: 280px;
            }
        }

        .categories-list {
            padding: 4px 0;
        }

        .categories-list li a {
            display: block;
            padding: 8px 12px;
            color: #495057;
            font-weight: 500;
        }

        .categories-list li.active a {
            color: #556ee6;
        }

        .categories-list li ul {
            padding-right: 16px;
        }

        .categories-list li ul li a {
            padding: 4px 12px;
            color: #74788d;
            font-size: 13px;
            font-weight: 400;
        }

        @media (min-width: 992px) {
            .chat-leftsidebar {
                min-width: 260px;
            }
        }

        @media (min-width: 1200px) {
            .chat-leftsidebar {
                min-width: 380px;
            }
        }

        .chat-leftsidebar .chat-leftsidebar-nav .nav {
            background-color: #fff;
        }

        .chat-leftsidebar .chat-leftsidebar-nav .tab-content {
            min-height: 488px;
        }

        .chat-noti-dropdown.active:before {
            content: "";
            position: absolute;
            width: 8px;
            height: 8px;
            background-color: #f46a6a;
            border-radius: 50%;
            left: 0;
        }

        .chat-noti-dropdown .btn {
            padding: 6px;
            -webkit-box-shadow: none;
            box-shadow: none;
            font-size: 20px;
        }

        .chat-search-box .form-control {
            border: 0;
        }

        .chat-list {
            margin: 0;
        }

        .chat-list li.active a {
            background-color: #fff;
            border-color: transparent;
            -webkit-box-shadow: 0 0.75rem 1.5rem rgba(18, 38, 63, 0.03);
            box-shadow: 0 0.75rem 1.5rem rgba(18, 38, 63, 0.03);
        }

        .chat-list li a {
            display: block;
            padding: 14px 16px;
            color: #74788d;
            -webkit-transition: all 0.4s;
            transition: all 0.4s;
            border-top: 1px solid #eff2f7;
            border-radius: 4px;
        }

        .chat-list li a:hover {
            background-color: #fff;
            border-color: transparent;
            -webkit-box-shadow: 0 0.75rem 1.5rem rgba(18, 38, 63, 0.03);
            box-shadow: 0 0.75rem 1.5rem rgba(18, 38, 63, 0.03);
        }

        .user-chat-nav .dropdown .nav-btn {
            height: 40px;
            width: 40px;
            line-height: 40px;
            -webkit-box-shadow: none;
            box-shadow: none;
            padding: 0;
            font-size: 16px;
            background-color: #eff2f7;
            border-radius: 50%;
        }

        .user-chat-nav .dropdown .dropdown-menu {
            -webkit-box-shadow: 0 0.75rem 1.5rem rgba(18, 38, 63, 0.03);
            box-shadow: 0 0.75rem 1.5rem rgba(18, 38, 63, 0.03);
            border: 1px solid #eff2f7;
        }

        .chat-conversation li {
            clear: both;
        }

        .chat-conversation .chat-day-title {
            position: relative;
            text-align: center;
            margin-bottom: 24px;
        }

        .chat-conversation .chat-day-title .title {
            background-color: #fff;
            position: relative;
            z-index: 1;
            padding: 6px 24px;
        }

        .chat-conversation .chat-day-title:before {
            content: "";
            position: absolute;
            width: 100%;
            height: 1px;
            right: 0;
            left: 0;
            background-color: #eff2f7;
            top: 10px;
        }

        .chat-conversation .chat-day-title .badge {
            font-size: 12px;
        }

        .chat-conversation .conversation-list {
            margin-bottom: 24px;
            display: inline-block;
            position: relative;
        }

        .chat-conversation .conversation-list .ctext-wrap {
            padding: 12px 24px;
            background-color: rgba(85, 110, 230, 0.1);
            border-radius: 8px 8px 0px 8px;
            overflow: hidden;
        }

        .chat-conversation .conversation-list .ctext-wrap .conversation-name {
            font-weight: 600;
            color: #556ee6;
            margin-bottom: 4px;
        }

        .chat-conversation .conversation-list .dropdown {
            float: left;
        }

        .chat-conversation .conversation-list .dropdown .dropdown-toggle {
            font-size: 18px;
            padding: 4px;
            color: #74788d;
        }

        @media (max-width: 575.98px) {
            .chat-conversation .conversation-list .dropdown .dropdown-toggle {
                display: none;
            }
        }

        .chat-conversation .conversation-list .dropdown .dropdown-menu {
            -webkit-box-shadow: 0 0.75rem 1.5rem rgba(18, 38, 63, 0.03);
            box-shadow: 0 0.75rem 1.5rem rgba(18, 38, 63, 0.03);
            border: 1px solid #eff2f7;
        }

        .chat-conversation .conversation-list .chat-time {
            font-size: 12px;
        }

        .chat-conversation .right .conversation-list {
            float: left;
        }

        .chat-conversation .right .conversation-list .ctext-wrap {
            background-color: #eff2f7;
            text-align: left;
            border-radius: 8px 8px 8px 0px;
        }

        .chat-conversation .right .conversation-list .dropdown {
            float: right;
        }

        .chat-conversation .right .conversation-list.last-chat .conversation-list:before {
            left: 0;
            right: auto;
        }

        .chat-conversation .last-chat .conversation-list:before {
            content: "\F0009";
            font-family: "Material Design Icons";
            position: absolute;
            color: #556ee6;
            left: 0;
            bottom: 0;
            font-size: 16px;
        }

        @media (max-width: 575.98px) {
            .chat-conversation .last-chat .conversation-list:before {
                display: none;
            }
        }

        .chat-input-section {
            border-top: 1px solid #eff2f7;
        }

        .chat-input {
            border-radius: 30px;
            background-color: #eff2f7 !important;
            border-color: #eff2f7 !important;
            padding-left: 120px;
        }

        .chat-input-links {
            position: absolute;
            left: 16px;
            top: 50%;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
        }

        .chat-input-links li a {
            font-size: 16px;
            line-height: 36px;
            padding: 0px 4px;
            display: inline-block;
        }

        @media (max-width: 575.98px) {
            .chat-send {
                min-width: auto;
            }
        }

        .project-list-table {
            border-collapse: separate;
            border-spacing: 0 12px;
        }

        .project-list-table tr {
            background-color: #fff;
        }

        .contact-links a {
            color: #495057;
        }

        .profile-user-wid {
            margin-top: -26px;
        }

        @media (min-width: 576px) {
            .currency-value {
                position: relative;
            }

            .currency-value:after {
                content: "\F04E1";
                font-family: "Material Design Icons";
                font-size: 24px;
                position: absolute;
                width: 45px;
                height: 45px;
                line-height: 45px;
                border-radius: 50%;
                text-align: center;
                left: 0;
                top: 50%;
                -webkit-transform: translateY(-50%);
                transform: translateY(-50%);
                background-color: #556ee6;
                color: #fff;
                z-index: 9;
                left: -34px;
            }
        }

        .crypto-buy-sell-nav-content {
            border: 2px solid #f6f6f6;
            border-top: 0;
        }

        .kyc-doc-verification .dropzone {
            min-height: 180px;
        }

        .kyc-doc-verification .dropzone .dz-message {
            margin: 24px 0px;
        }

        /******************
    Ico Landing
*******************/
        .section {
            position: relative;
            padding-top: 80px;
            padding-bottom: 80px;
        }

        .section.bg-white {
            background-color: #fff !important;
        }

        .small-title {
            color: #74788d;
            margin-bottom: 8px;
        }

        .navigation {
            padding: 0 16px;
            width: 100%;
            z-index: 999;
            margin-bottom: 0px;
            -webkit-transition: all 0.5s ease-in-out;
            transition: all 0.5s ease-in-out;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        @media (max-width: 991.98px) {
            .navigation {
                background-color: #fff;
            }
        }

        .navigation .navbar-logo {
            line-height: 70px;
            -webkit-transition: all 0.4s;
            transition: all 0.4s;
        }

        .navigation .navbar-logo .logo-dark {
            display: none;
        }

        @media (max-width: 991.98px) {
            .navigation .navbar-logo .logo-dark {
                display: block;
            }
        }

        .navigation .navbar-logo .logo-light {
            display: block;
        }

        @media (max-width: 991.98px) {
            .navigation .navbar-logo .logo-light {
                display: none;
            }
        }

        .navigation .navbar-nav .nav-item .nav-link {
            color: rgba(255, 255, 255, 0.6);
            line-height: 58px;
            padding: 6px 16px;
            font-weight: 500;
            -webkit-transition: all 0.4s;
            transition: all 0.4s;
        }

        @media (max-width: 991.98px) {
            .navigation .navbar-nav .nav-item .nav-link {
                color: #555b6d;
            }
        }

        .navigation .navbar-nav .nav-item .nav-link:hover,
        .navigation .navbar-nav .nav-item .nav-link.active {
            color: rgba(255, 255, 255, 0.9);
        }

        @media (max-width: 991.98px) {

            .navigation .navbar-nav .nav-item .nav-link:hover,
            .navigation .navbar-nav .nav-item .nav-link.active {
                color: #556ee6;
            }
        }

        @media (max-width: 991.98px) {
            .navigation .navbar-nav .nav-item .nav-link {
                line-height: 28px !important;
            }
        }

        .navigation.nav-sticky {
            background-color: #fff;
            -webkit-box-shadow: 0 0.75rem 1.5rem rgba(18, 38, 63, 0.03);
            box-shadow: 0 0.75rem 1.5rem rgba(18, 38, 63, 0.03);
        }

        .navigation.nav-sticky .navbar-logo {
            line-height: 60px;
        }

        .navigation.nav-sticky .navbar-logo .logo-dark {
            display: block;
        }

        .navigation.nav-sticky .navbar-logo .logo-light {
            display: none;
        }

        .navigation.nav-sticky .navbar-nav .nav-item .nav-link {
            line-height: 48px;
            color: #555b6d;
        }

        .navigation.nav-sticky .navbar-nav .nav-item .nav-link:hover,
        .navigation.nav-sticky .navbar-nav .nav-item .nav-link.active {
            color: #556ee6;
        }

        .bg-overlay {
            position: absolute;
            height: 100%;
            width: 100%;
            left: 0;
            bottom: 0;
            right: 0;
            top: 0;
            opacity: 0.7;
            background-color: #000;
        }

        .hero-section {
            padding-top: 220px;
            padding-bottom: 190px;
        }

        .hero-section.bg-ico-hero {
            background-image: url("../images/crypto/bg-ico-hero.jpg");
            background-size: cover;
            background-position: top;
        }

        @media (max-width: 575.98px) {
            .hero-section {
                padding-top: 140px;
                padding-bottom: 80px;
            }
        }

        .hero-section .hero-title {
            font-size: 42px;
        }

        @media (max-width: 575.98px) {
            .hero-section .hero-title {
                font-size: 26px;
            }
        }

        .hero-section .ico-countdown {
            font-size: 22px;
            margin-left: -12px;
            margin-right: -12px;
        }

        @media (max-width: 575.98px) {
            .hero-section .ico-countdown {
                display: block;
            }
        }

        .hero-section .ico-countdown .coming-box {
            margin-left: 12px;
            margin-right: 12px;
            border: 1px solid #eff2f7;
            border-radius: 4px;
            padding: 8px;
            background-color: #fff;
        }

        @media (max-width: 575.98px) {
            .hero-section .ico-countdown .coming-box {
                display: inline-block;
                width: 40%;
                margin-bottom: 24px;
            }
        }

        .hero-section .ico-countdown .coming-box span {
            background-color: #eff2f7;
            font-size: 12px;
            padding: 4px;
            margin-top: 8px;
        }

        .hero-section .softcap-progress {
            overflow: visible;
        }

        .hero-section .softcap-progress .progress-bar {
            overflow: visible;
        }

        .hero-section .softcap-progress .progress-label {
            position: relative;
            text-align: left;
            color: #495057;
            bottom: 20px;
            font-size: 12px;
            font-weight: 500;
        }

        .currency-price {
            position: relative;
            bottom: 40px;
        }

        .client-images img {
            max-height: 34px;
            width: auto !important;
            margin: 12px auto;
            opacity: 0.7;
            -webkit-transition: all 0.4s;
            transition: all 0.4s;
        }

        .features-number {
            opacity: 0.1;
        }

        .team-box .team-social-links a {
            color: #495057;
            font-size: 14px;
        }

        .blog-box .blog-badge {
            position: absolute;
            top: 12px;
            left: 12px;
        }

        .landing-footer {
            padding: 80px 0 40px;
            background-color: #2a3042;
            color: rgba(255, 255, 255, 0.5);
        }

        .landing-footer .footer-list-title {
            color: rgba(255, 255, 255, 0.9);
        }

        .landing-footer .footer-list-menu li a {
            display: block;
            color: rgba(255, 255, 255, 0.5);
            margin-bottom: 14px;
            -webkit-transition: all 0.4s;
            transition: all 0.4s;
        }

        .landing-footer .footer-list-menu li a:hover {
            color: rgba(255, 255, 255, 0.8);
        }

        .landing-footer .blog-post .post {
            display: block;
            color: rgba(255, 255, 255, 0.5);
            padding: 16px 0px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .landing-footer .blog-post .post .post-title {
            color: rgba(255, 255, 255, 0.8);
            font-size: 14px;
        }

        .landing-footer .blog-post .post:first-of-type {
            padding-top: 0;
        }

        .landing-footer .blog-post .post:last-of-type {
            padding-bottom: 0;
            border-bottom: 0;
        }

        .landing-footer .footer-border {
            border-color: rgba(255, 255, 255, 0.1);
        }

        .counter-number {
            font-size: 32px;
            font-weight: 600;
            text-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
        }

        .counter-number span {
            font-size: 16px;
            font-weight: 400;
            display: block;
            padding-top: 5px;
        }

        .coming-box {
            width: 25%;
        }

        /************** Horizontal timeline **************/
        .hori-timeline .events .event-list {
            text-align: center;
            display: block;
        }

        .hori-timeline .events .event-list .event-down-icon {
            position: relative;
        }

        .hori-timeline .events .event-list .event-down-icon::before {
            content: "";
            position: absolute;
            width: 100%;
            top: 16px;
            right: 0;
            left: 0;
            border-bottom: 3px dashed #f6f6f6;
        }

        .hori-timeline .events .event-list .event-down-icon .down-arrow-icon {
            position: relative;
            background-color: #fff;
            padding: 4px;
        }

        .hori-timeline .events .event-list:hover .down-arrow-icon {
            -webkit-animation: fade-down 1.5s infinite linear;
            animation: fade-down 1.5s infinite linear;
        }

        .hori-timeline .events .event-list.active .down-arrow-icon {
            -webkit-animation: fade-down 1.5s infinite linear;
            animation: fade-down 1.5s infinite linear;
        }

        .hori-timeline .events .event-list.active .down-arrow-icon:before {
            content: "\ec4c";
        }

        /************** vertical timeline **************/
        .verti-timeline {
            border-right: 3px dashed #f6f6f6;
            margin: 0 10px;
        }

        .verti-timeline .event-list {
            position: relative;
            padding: 0px 30px 40px 0px;
        }

        .verti-timeline .event-list .event-timeline-dot {
            position: absolute;
            right: -9px;
            top: 0px;
            z-index: 9;
            font-size: 16px;
        }

        .verti-timeline .event-list .event-content {
            position: relative;
            border: 2px solid #eff2f7;
            border-radius: 7px;
        }

        .verti-timeline .event-list.active .event-timeline-dot {
            color: #556ee6;
        }

        .verti-timeline .event-list:last-child {
            padding-bottom: 0px;
        }

        .plan-box .plan-btn {
            position: relative;
        }

        .plan-box .plan-btn::before {
            content: "";
            position: absolute;
            width: 100%;
            height: 2px;
            background: #f6f6f6;
            right: 0px;
            left: 0px;
            top: 12px;
        }

        .blog-play-icon {
            position: absolute;
            top: 50%;
            right: 0;
            left: 0;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
            margin: 0px auto;
        }

        /*# sourceMappingURL=app-rtl.min.css.map */
        .btn-theme {
            background-color: #3aafa9;
            border-color: #3aafa9;
            color: #fff;
        }

        .btn-theme:hover,
        .btn-theme:focus,
        .btn.btn-theme:focus-visible,
        :not(.btn-check)+.btn.btn-theme:active {
            background-color: #2b7a78;
            border-color: #2b7a78;
            color: #fff;
            box-shadow: none;
        }

        label {
            color: #17252a;
        }

        .line-height-1 {
            line-height: 1;
        }

        img {
            max-width: 100%;
        }

        .h1,
        .h2,
        .h3,
        .h4,
        .h5,
        .h6,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            color: #17252a;
        }

        .navbar-brand-box {
            padding: 0 1.1rem;
        }

        .bg-theme {
            background-color: #3aafa9;
        }

        .bg-theme-soft {
            background-color: rgb(58 175 169 / 20%);
        }

        .text-dark-cstm {
            color: #17252A;
        }

        .text-theme {
            color: #3aafa9;
        }

        .text-theme-dark {
            color: #2b7a78;
        }

        .bg-theme.bg-soft {
            background-color: rgba(58, 175, 169, 0.25) !important;
        }

        .font-weight-400 {
            font-weight: 400;
        }

        .font-weight-500 {
            font-weight: 500;
        }

        .font-weight-600 {
            font-weight: 600;
        }

        .topnav .navbar-nav .dropdown-item.router-link-exact-active,
        .topnav .navbar-nav .dropdown-item:hover {
            color: #3aafa9;
            background-color: #e0f3f2;
        }

        #page-topbar {
            z-index: 1000;
        }

        input.form-control-sm.form-control,
        input.form-control-md.form-control,
        input.form-control-lg.form-control,
        input.form-control-xl.form-control {
            min-height: auto;
        }

        body #page-topbar {
            background-color: #17252A;
        }

        .topnav .navbar-nav .nav-link {
            color: #17252A;
        }

        .background-theme-image {
            background-image: url(./images/submitit/bg-image-card.jpg);
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            position: relative;
        }

        .background-theme-image:before {
            position: absolute;
            content: '';
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            background-color: #17252a;
            opacity: 0.92;
        }

        a.text-theme:hover {
            color: #2b7a78;
        }

        .topnav .navbar-nav .nav-link:focus,
        .topnav .navbar-nav .nav-link:hover,
        .topnav .navbar-nav .nav-link.router-link-exact-active {
            color: #3aafa9;
            background-color: transparent;
        }

        .p-relative {
            position: relative;
        }

        .overlayEffectCircle {
            z-index: 1;
        }

        .overlayEffectCircle:before,
        .overlayEffectCircle:after {

            width: 25px;
            height: 25px;
            border-radius: 50%;
            opacity: 0.8;
            position: absolute;
            top: 25%;
            content: '';
            left: 25%;
            transform: translate(-50%, -50%) scale(1.3);
            z-index: -1;
        }

        .overlaySuccess.overlayEffectCircle:before,
        .overlaySuccess.overlayEffectCircle:after {
            background-color: rgba(52, 195, 143, 0.25) !important;
        }

        .overlayWarning.overlayEffectCircle:before,
        .overlayWarning.overlayEffectCircle:after {
            background-color: rgba(241, 180, 76, 0.25) !important;
        }

        .overlayPrimary.overlayEffectCircle:before,
        .overlayPrimary.overlayEffectCircle:after {
            background-color: rgba(85, 110, 230, 0.25) !important;
        }

        .overlayDanger.overlayEffectCircle:before,
        .overlayDanger.overlayEffectCircle:after {
            background-color: rgba(244, 106, 106, 0.25) !important;
        }

        .overlayEffectCircle:before {
            -webkit-animation: ripple1 3s linear infinite;
            animation: ripple1 3s linear infinite;
        }

        .overlayEffectCircle:after {
            -webkit-animation: ripple2 3s linear infinite;
            animation: ripple2 3s linear infinite;
        }


        @keyframes ripple1 {
            0% {
                transform: scale(3);
                opacity: 0.6;
            }

            100% {
                transform: scale(5);
                opacity: 0;
            }
        }

        @keyframes ripple2 {
            0% {
                transform: scale(2);
            }

            100% {
                transform: scale(3);
            }
        }

        .table-custom-style table th {
            font-weight: 600;
            text-transform: capitalize;
        }

        .table-custom-style>.vue3-easy-data-table__main.fixed-header {
            /* min-height: var(--524b179e); */
            min-height: 100px !important;
        }

        .client-list-card.verti-timeline .event-list {
            padding-bottom: 20px;
        }

        .squareListTask {
            width: 50px;
            height: 45px;
            display: flex;
            padding: 8px;
            align-items: center;
            justify-content: center;
            line-height: 1.2;
            text-align: center;
            border-radius: 4px;
            margin-right: 12px;
            min-width: 50px;
        }

        .list-style-none {
            list-style-type: none;
        }

        .listMainTask li {
            display: flex;
            align-items: center;
        }

        .taskListCard {
            font-size: 14px;
            display: inline-block;
        }

        .listMainTask {
            max-height: 310px;
            overflow-y: auto;
        }

        .labelStyleStory {
            position: relative;
        }

        .labelStyleStory:before {
            position: absolute;
            right: -1px;
            content: '';
            width: 1px;
            height: 10px;
            background-color: #5a6077;
        }

        .labelStyleStory:last-child:before {
            display: none;
        }

        .subject-main-res {
            display: flex;
            align-items: center;
            width: calc(100% - 550px);
            padding: 0 10px;
        }

        .subject-main-res h5,
        .subject-main-res p {
            margin-bottom: 0;
        }

        .name-email-res {
            width: 250px;
        }

        .date-main-res {
            width: 300px;
            justify-content: end;
        }

        .sub-title-inner {
            white-space: nowrap;
            max-width: 200px;
        }

        .card-list-resp {
            transition: 0.38s ease-in-out 0s all;
            background-color: #fff;
        }

        .card-list-resp:hover {
            background-color: #f4ffff;
        }

        .card-list-resp.border-bottom:last-child {
            border-bottom: 0 !important;
        }

        .dateWdthSet {
            min-width: 72px;
        }

        .date-main-res {
            align-items: center;
        }

        .storyListTd>span {
            display: inline-block;
            padding: 0 3px;
        }

        .storyListTd>span:last-child {
            display: none;
        }

        .inputFieldDate {
            width: 100%;
        }

        .inputFieldDate .v3dp__datepicker {
            width: calc(100% - 39px);
        }

        .v3dp__elements button:not(:disabled):hover span {
            background-color: #3aafa9 !important;
            color: #fff;
        }

        .v3dp__elements button.selected span {
            background-color: #3aafa9 !important;
            color: #fff;
        }

        input.form-control {
            min-height: 38px;
        }

        /* Select2 Style Start Custom */


        .select2-container--default .select2-results__option[aria-selected=true] {
            background-color: #e4f7f6 !important;
        }

        .select2-container--default .select2-results__option--highlighted[aria-selected] {
            background-color: #3aafa9 !important;
            color: #fff !important;
        }

        /* Single Select2 Style Start */
        .single-select2-cstm span.select2.select2-container.select2-container--default {
            border: 0;
            width: 100% !important;
        }

        .single-select2-cstm span.select2-selection.select2-selection--single {
            border: 1px solid #ced4da;
            min-height: 38px;
        }

        .single-select2-cstm span.select2-selection.select2-selection--single>span {
            min-height: 38px;
            display: flex !important;
            align-items: center;
        }

        /* Single Select2 Style End */

        /* Multiple Select2 Style Start */
        .multipleSelectCstm .select2-container--default .selection>.select2-selection--multiple {
            min-height: 38px;
            border: 1px solid #ced4da;
            padding: 5px 0;
        }

        .multipleSelectCstm span.selection:before {
            border-color: #888 transparent transparent transparent;
            border-style: solid;
            border-width: 5px 4px 0 4px;
            height: 0;
            right: 25px;
            top: 51%;
            width: 0;
            position: absolute;
            content: '';
            transform: translateY(-50%);
        }

        .multipleSelectCstm span.selection {
            position: relative;
        }

        .multipleSelectCstm .select2-container--default.select2-container--focus .select2-selection--multiple {
            border: solid #b1b1b1 1px;
            outline: 0;
        }

        .multipleSelectCstm .select2-container--default .select2-selection--multiple .select2-selection__rendered {
            max-height: 90px;
            overflow-y: auto;
            padding: 0 15px 0 5px;
        }

        .multipleSelectCstm .select2-selection__rendered>.select2-search.select2-search--inline>input {
            margin-top: 0 !important;
        }

        .multipleSelectCstm .select2-container--default .select2-selection--multiple .select2-selection__choice {
            margin: 3px 5px;
        }

        .multipleSelectCstm .select2-container .select2-search--inline .select2-search__field {
            margin-top: 0;
        }

        .multipleSelectCstm .selection>span.select2-selection.select2-selection--multiple {
            display: flex !important;
            align-items: center !important;
        }

        .multipleSelectCstm .select2-container--default .select2-selection--multiple .select2-selection__rendered>.select2-selection__choice {
            background-color: #3aafa9;
            border: 1px solid #3aafa9;
            color: #fff;
        }

        .multipleSelectCstm .select2-container--default .select2-selection--multiple .select2-selection__rendered .select2-selection__choice__remove {
            color: #fff;
            font-weight: normal;
            margin-right: 3px;
            font-size: 15px;
        }

        /* Multiple Select2 Style End */

        /* Select2 Style End Custom */
        .resize-none {
            resize: none;
        }

        /* Checkbox Custom Style */
        .labelCheckboxCstm {
            position: relative;
            display: flex;
            cursor: pointer;
        }

        .labelCheckboxCstm>input[type="checkbox"] {
            opacity: 0;
            display: none;
        }

        .labelCheckboxCstm>input[type="checkbox"]+.checkmark>i {
            line-height: 1;
        }

        .labelCheckboxCstm>input[type="checkbox"]+.checkmark>.mdi-checkbox-marked-outline,
        .labelCheckboxCstm>input[type="checkbox"]:checked+.checkmark>.mdi-checkbox-blank-outline {
            display: none;
        }

        .labelCheckboxCstm>input[type="checkbox"]:checked+.checkmark>.mdi-checkbox-marked-outline,
        .labelCheckboxCstm>input[type="checkbox"]+.checkmark>.mdi-checkbox-blank-outline {
            display: inline-block;
        }

        /* Checkbox Custom End */
        .form-control:disabled {
            background-color: #f3f5f9;
            opacity: 1;
        }



        .form-control::-webkit-input-placeholder {
            color: #999;
        }

        .form-control::-moz-placeholder {
            color: #999;
        }

        .form-control:-ms-input-placeholder {
            color: #999;
        }

        .form-control:-moz-placeholder {
            color: #999;
        }

        .searchBarStyle span.iconSearch {
            position: absolute;
            z-index: 10;
            font-size: 16px;
            line-height: 38px;
            left: 13px;
            top: 0;
            color: #74788d;
        }

        .searchBarStyle .form-control {
            border: none;
            height: 38px;
            padding-left: 40px;
            padding-right: 20px;
            background-color: #f3f3f9;
            -webkit-box-shadow: none;
            box-shadow: none;
            border-radius: 4px;
        }

        .topBarCstmTable {
            max-width: 360px;
            margin-left: auto;
            min-width: 240px;
        }


        .labelUploadFile>.form-control-file {
            display: none;
        }

        .uploadImageFile {
            display: block;
            width: 100%;
            padding: 10px;
            border: 2px dashed #dcf3f1;
            text-align: center;
            color: #3aafa9;
            font-size: 15px;
            background-color: #f1fffe;
        }

        label.labelUploadFile {
            width: 100%;
            display: block;
            cursor: pointer;
        }

        .uploadImageFile>span {
            display: block;
            font-size: 30px;
        }

        .uploadImageFile>span>i {
            line-height: 1;
        }

        .labelRadioCstm {
            position: relative;
            padding: 12px 12px 12px 35px;
            cursor: pointer;
            border: 1px solid #eff2f7;
            transition: 0.38s ease-in-out 0s all;
            background-color: #f9fbff;
        }

        .labelRadioCstm:has(.inputRadioCstm:checked) {
            border-color: #3aafa9;
        }

        .inputRadioCstm+.radioCircleIcon .mdi-checkbox-marked-circle,
        .inputRadioCstm:checked+.radioCircleIcon .mdi-circle-outline {
            transition: 0.38s ease-in-out 0s all;
            opacity: 0;
            transform: scale(0);
        }

        .inputRadioCstm:checked+.radioCircleIcon .mdi-checkbox-marked-circle,
        .inputRadioCstm+.radioCircleIcon .mdi-circle-outline {
            opacity: 1;
            transform: scale(1);
            transition: 0.38s ease-in-out 0s all;
        }

        .labelStyleRadioCstm {
            position: relative;
            padding-left: 32px;
            padding-top: 15px;
            padding-bottom: 15px;
            padding-right: 12px;
            cursor: pointer;
        }

        .radioCircleIcon {
            position: absolute;
            left: 8px;
            top: 50%;
            transform: translateY(-50%);
            display: inline-block;
            width: 20px;
            height: 30px;
        }

        .radioCircleIcon i {
            position: absolute;
        }

        .imageStyleCstm {
            width: 100%;
            height: 100px;
        }

        .imageStyleCstm>img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .bg-light-custom {
            background-color: #f9fdfd;
        }

        .card-client-info>h2 {
            font-size: 20px;
            margin-bottom: 2px;
        }

        .taskcountinfo>h2 {
            font-size: 17px;
            text-align: center;
            margin-bottom: 20px;
        }

        .taskcountinfo>ul {
            display: flex;
        }

        .taskcountinfo>ul li.main-list-tsk {
            width: 50%;
            text-align: center;
            padding: 5px 0;
        }

        .count-task-cntnt {
            font-size: 24px;
            font-weight: 600;
            color: #17252a;
        }

        .fullCoverImage {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .arrow-style-cstm .carousel__prev,
        .arrow-style-cstm .carousel__next {
            background: #3aafa9 !important;
        }

        .arrow-style-cstm .carousel__pagination-button {
            background-color: rgb(58 175 169 / 30%) !important;
        }

        .arrow-style-cstm .carousel__pagination-button--active {
            background-color: #3aafa9 !important;
        }

        .text-link-cstm {
            color: #17252a;
            transition: 0.38s ease-in-out 0s all;
        }

        .text-link-cstm:hover,
        .text-link-cstm:focus {
            color: #3aafa9;
        }

        .mainCardStoryclnt {
            /* margin:0 -20px; */
            align-items: center;
        }

        /* .imageCardStory {
  width: 40%;
  padding: 0 20px;
}
.contentCardStory {
  width: 60%;
  padding: 0 20px;
} */
        /* .imageStyleClnt{
  width:450px;
  height:340px;
}
.imageStyleClnt >img{
  width:100%;
  height:100%;
  object-fit: cover;
} */
        .contentCardStory h4 {
            font-size: 32px;
            margin-bottom: 5px;
        }

        .contentCardStory h6 {
            font-size: 15px;
        }

        .contentCardStory p {
            font-size: 17px;
        }

        .clntInnerText {
            max-width: 600px;
        }

        .btn-soft-info {
            color: #3aafa9;
            background-color: rgb(58 175 169 / 13%);
            border-color: transparent;
            transition: all .5s ease;
        }

        .btn-soft-info:hover,
        .btn-soft-info:focus {
            background-color: rgb(58 175 169 / 23%);
            color: #3aafa9;
        }

        .btn-soft-danger {
            color: #f46a6a;
            background-color: rgb(244 106 106 / 13%);
            border-color: transparent;
            transition: all .5s ease;
        }

        .btn-soft-danger:hover,
        .btn-soft-danger:hover {
            background-color: rgb(244 106 106 / 23%);
            color: #f46a6a;
        }

        .datetime-picker.custom-datetimepicker>div>input[type="text"] {
            height: auto !important;
            border: 0 !important;
            padding: 0 !important;
        }

        .custom-datetimepicker [type="button"].nav-l,
        .custom-datetimepicker [type="button"].nav-r {
            background-color: #3aafa9 !important;
        }

        .custom-datetimepicker .year-month-wrapper {
            background-color: #3aafa9 !important;
        }

        .custom-datetimepicker .days {
            color: #3aafa9 !important;
            font-weight: 600 !important;
        }

        .custom-datetimepicker .activePort,
        .custom-datetimepicker .activePort:hover {
            background-color: #3aafa9 !important;
            color: #fff !important;
            font-weight: 400 !important;
        }

        .custom-datetimepicker .port:not(.activePort):hover {
            color: #3aafa9 !important;
            font-weight: 400 !important;
        }

        .custom-datetimepicker .okButton {
            color: #3aafa9 !important;
        }

        .custom-datetimepicker .scroll-hider ul>li.active {
            background-color: #3aafa9 !important;
            color: #fff !important;
        }

        .custom-datetimepicker .scroll-hider ul>li {
            padding: 4px;
            font-size: 14px !important;
            font-weight: 500 !important;
            color: #17252a !important;
        }

        .select2-container--default.select2-container .select2-results__group {
            font-weight: 600;
        }

        .innerGroupFeilds {
            border: 1px solid #eff2f7;
            transition: 0.38s ease-in-out 0s all;
            background-color: #f9fbff;
        }

        .labelFieldCol {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding-left: 20px;
            padding: 10px 20px 10px 35px;
            border-radius: 4px;
            background-color: #fff;
            box-shadow: 0 1px 10px 1px rgb(0 0 0 / 5%);
            margin-bottom: 10px !important;
            min-height: 70px;
            cursor: pointer;
            transition: 0.38s ease-in-out 0s all;
        }

        /* 
.light-success-pack label.labelFieldCol:has(input:checked) {
  background-color: #3aafa9;
}
.light-warn-pack label.labelFieldCol:has(input:checked) {
  background-color: #fc8901;
  color:#fff;
} 
.light-blue-pack label.labelFieldCol:has(input:checked) {
  background-color: #5e5ff3;
  color:#fff;
}
*/
        .labelFieldCol span.badge {
            transition: 0.38s ease-in-out 0s all;
        }

        .package-card-main label.labelFieldCol:has(input:checked) {
            background-color: #2b7a78;
            color: #fff;
        }

        .no-select-pack {
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #2b7a78;
            color: #fff;
        }

        /* .not-selected-success {
  background-color: #3aafa9;
}
.not-selected-warning {
  background-color: #fc8901;
  color: #fff;
}
.not-selected-blue {
  background-color: #5e5ff3;
  color:#fff;
} */

        .labelFieldCol:has(input:checked) .text-name-journl {
            color: #fff;
        }

        .labelFieldCol:has(input:checked) .price-style-cstm {
            color: #fff;
        }

        label.labelFieldCol:has(input:checked) span.badge.badge-soft-success,
        label.labelFieldCol:has(input:checked) span.badge.badge-soft-warning {
            color: #fff;
            background-color: rgb(255 255 255 / 24%) !important;
        }

        /* .light-blue-pack .mdi-circle-outline.text-theme {
  color: #5e5ff3;
}
.light-warn-pack .mdi-circle-outline.text-theme {
  color: #fc8901;
}
.light-success-pack .mdi-circle-outline.text-theme {
  color: #3aafa9;
} */
        .package-card-main .mdi-circle-outline.text-theme {
            color: #2b7a78;
        }

        .main-title-head {
            font-size: 20px;
            display: inline-block;
            margin-bottom: 15px;
        }

        .inputRadioCstm:checked+.radioCircleIcon>.mdi.text-theme {
            color: #fff;
        }

        .inputRadioCstm:checked+.radioCircleIcon>.mdi.text-theme.theme-check {
            color: #3aafa9;
        }

        /* .light-blue-pack{
  background-color: rgb(94 95 243 / 12%);
}
.light-warn-pack{
  background-color: rgb(252 137 1 / 12%);
}
.light-success-pack{
  background-color: rgb(0 202 133 / 12%);
} */
        .package-card-main {
            padding: 10px;
            height: 100%;
            background-color: rgb(43 122 120 / 15%);
            /* border: 1px solid #17252a; */
        }

        .text-name-journl {
            font-size: 14px;
        }

        .price-style-cstm {
            font-size: 20px;
            font-weight: 600;
        }

        .flex-1 {
            flex: 1 0 0;
        }

        .subContent {
            display: contents;
        }

        .badge-soft-success .form-control {
            background-color: #b9e3da;
            border-color: #a9ddda;
        }

        .badge-soft-warning .form-control {
            background-color: #f3e3c8;
            border-color: #e9ca97;
        }

        .badge-soft-info .form-control {
            background-color: #cbe0f3;
            border-color: #aecce7;
        }

        .badge-soft-danger .form-control {
            background-color: #ebc8cd;
            border-color: #e3b5bb;
        }

        .badge-soft-primary .form-control {
            background-color: #c8d0ed;
            border-color: #b0bbe1;
        }

        .badge-custom-clr .form-control:disabled {
            opacity: 0.65;
            cursor: no-drop;
        }

        .mainGroupDoc {
            display: flex;
        }

        .innerDocGroup {
            padding: 0 6px;
        }

        .innerDocGroup i {
            font-size: 24px;
        }

        .pagination__rows-per-page .easy-data-table__rows-selector ul.select-items.show {
            overflow-y: auto !important;
            max-height: 100px;
        }

        .vue3-easy-data-table__body tr td {
            font-size: 13px;
        }

        .innerCardScore {
            border-left: 2px solid #17252A;
        }

        .innerCardScore h3 {
            font-size: 18px;
            font-weight: 600;
        }

        .uploadDocumentSingle {
            border-color: #3aafa9 !important;
            background-color: #3aafa9 !important;
            padding: 6px;
            margin: 0 0 5px;
        }

        .uploadDocumentSingle>i {
            font-size: 38px;
            color: #fff;
            line-height: 1;
        }

        .fileMainUpload {
            margin: 0 -10px;
        }

        .uploadLinkSingle {
            color: #17252a;
            width: 50px;
            margin: 0 10px;
        }

        .uploadLinkSingle:hover {
            color: #3aafa9;
        }

        .customListjournal>li {
            display: flex;
            padding: 11px 10px;
            justify-content: space-between;
        }

        .customListjournal>li>h3 {
            font-size: 13px;
            min-width: 180px;
            margin-bottom: 0;
            line-height: 1.42;
            font-weight: 600;
            letter-spacing: 0.2px;
            width: 65%
        }

        .customListjournal>li>span {
            width: 4%;
        }

        .customListjournal>li>p {
            margin-bottom: 0;
            width: 31%;
            text-align: right;
        }

        /* Tabs Design Style Start */
        .tabCstmStyle ul.nav.nav-tabs {
            flex-wrap: nowrap;
        }

        .tabCstmStyle ul.nav.nav-tabs>li {
            width: 50%;
        }

        .tabCstmStyle .nav-tabs .nav-link.active,
        .tabCstmStyle .nav-tabs .nav-item.show .nav-link {
            border: 0;
            border-bottom: 2px solid #3aafa9;
            color: #3aafa9;
        }

        .tabCstmStyle .nav-tabs .nav-link,
        .tabCstmStyle .nav-tabs .nav-item {
            color: #17252A;
            width: 100%;
            border: 0;
            font-weight: 500;
        }

        .tabCstmStyle .nav-tabs .nav-link {
            padding: 15px;
        }

        /* Tabs Design Style End */
        .innerTaskMainLst {
            /* border-bottom: 1px solid #ededed;
  padding: 10px 0; */
            cursor: move;
        }

        .taskTitleCstm {
            margin-bottom: 0;
            font-size: 14px;
            line-height: 1.4;
            letter-spacing: 0.2px;
        }

        .hide-head-table thead.vue3-easy-data-table__header {
            display: none;
        }

        .editButtonIcon {
            background-color: #3aafa9;
            color: #fff;
            font-size: 15px;
            width: 24px;
            height: 24px;
            border: 0;
            border-radius: 50%;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .editButtonIcon:focus,
        .editButtonIcon:hover {
            background-color: #3aafa9;
            color: #fff;
        }

        .buttonPosEdit {
            position: absolute;
            right: 10px;
            top: 10px;
        }

        .task-box-custom {
            border: 1px solid #f6f6f6;
            cursor: move;
        }

        .custom-scroll-list {
            max-height: 655px;
            overflow-y: auto;
        }

        .tagLabelCstm {
            position: absolute;
            top: 0;
            left: 0;
            font-size: 11px;
        }

        .topPosLabel .tagLabelCstm {
            top: -5px;
        }

        .text-no-wrap {
            min-width: 80px;
        }

        .arrow-style-cstm .carousel__prev {
            top: calc(50% - 14px);
        }

        .arrow-style-cstm .carousel__next {
            top: calc(50% - 12px);
        }

        .arrow-style-cstm button.carousel__next--in-active,
        .arrow-style-cstm button.carousel__prev--in-active {
            opacity: 0.6;
        }

        .customColScoreSingle {
            padding: 5px;
            width: 14%;
        }

        .vue-form-wizard .wizard-icon-circle .wizard-icon {
            font-style: normal;
        }

        label.border.labelStyleRadioCstm:has(:checked.inputRadioCstm) {
            border-color: #3aafa9 !important;
        }

        .contentSignUp {
            max-width: 700px;
            margin: 0 auto;
        }

        .mainTitleSize {
            font-size: 28px;
            margin-bottom: 12px;
        }

        .contentSignUp p {
            font-size: 1rem;
            letter-spacing: 0.5px;
            line-height: 1.7;
        }

        .wizard-nav span.stepTitle {
            font-weight: 500;
        }

        .contentServiceCstm h5 {
            font-size: 15px;
            text-align: center;
            margin: 0 auto 30px;
            line-height: 1.5;
            letter-spacing: 0.5px;
        }

        .main-from-group .single-select2-cstm span.select2-selection.select2-selection--single {
            min-height: 46px;
            border-radius: 0;
        }

        .main-from-group .single-select2-cstm span.select2-selection.select2-selection--single>span {
            min-height: 46px;
        }

        .main-from-group input.form-control {
            min-height: 46px;
            border-radius: 0;
        }

        .main-from-group textarea.form-control {
            border-radius: 0;
        }

        .main-from-group textarea#additional-note {
            min-height: 64px;
        }

        .table-bordered.tabelJrnlCstm th,
        .table-bordered.tabelJrnlCstm td {
            padding: 8px;
        }

        .customTabLink>button {
            width: 100%;
            text-align: left;
        }

        .nav-pills .customTabLink>button.nav-link.active {
            background-color: #17252a;
            text-align: left;
            color: #fff;
        }

        .nav-pills .customTabLink>button.nav-link {
            color: #17252a;
        }

        .titleCardStyle {
            font-size: 22px;
            padding-bottom: 8px;
            position: relative;
            margin-bottom: 20px;
        }

        .titleCardStyle:before {
            position: absolute;
            content: '';
            left: 0;
            bottom: 0;
            background-color: #3aafa9;
            width: 30px;
            height: 2px;
        }

        .overflowScrollInputs {
            overflow-y: auto;
            max-height: 110px;
            border: 1px solid #ced4da;
            padding: 10px;
        }

        /* media query start */
        @media only screen and (min-width:1680px) {

            body[data-layout=horizontal] .container-fluid,
            body[data-layout=horizontal] .navbar-header {
                max-width: 1400px;
            }
        }

        @media only screen and (min-width:1200px) and (max-width:1400px) {

            body[data-layout=horizontal] .container-fluid,
            body[data-layout=horizontal] .container-sm,
            body[data-layout=horizontal] .container-md,
            body[data-layout=horizontal] .container-lg,
            body[data-layout=horizontal] .container-xl,
            body[data-layout=horizontal] .container-xxl,
            body[data-layout=horizontal] .navbar-header {
                max-width: 95%;
            }
        }

        @media (min-width: 576px) {
            .col-sm-4-custom {
                flex: 0 0 auto;
                width: 16%;
            }
        }

        @media (min-width: 992px) {
            .col-lg-3-custom {
                flex: 0 0 auto;
                width: 10%;
            }
        }

        @media (min-width: 1200px) {
            .col-xl-2-custom {
                flex: 0 0 auto;
                width: 7.66666667%;
            }
        }

        @media (max-width: 1199px) {
            .customColScoreSingle {
                padding: 5px;
                width: 20%;
            }

            table thead tr th,
            table tbody tr td {
                min-width: 100px;
            }
        }

        @media (max-width: 991px) {

            /* .customColScoreSingle {
      width: 25%;
  } */
            nav.navbar .nav-item.dropdown .arrow-down:after,
            nav.navbar .nav-item.dropdown .arrow-down {
                pointer-events: none;
            }

            .topnav .dropdown .dropdown-menu {
                background-color: transparent;
                border: none;
                box-shadow: none;
                padding-left: 15px;
                position: relative;
            }

            .topnav .arrow-down::after {
                right: 15px;
                position: absolute;
            }

            .mainStartTitle {
                font-size: 32px !important;
            }
        }

        @media (max-width: 575px) {
            .customColScoreSingle {
                width: 33.3%;
            }

            .logo span.logo-sm img {
                max-width: 130px;
                height: auto;
            }

            .userNameStyle {
                display: inline-block;
                max-width: 150px;
            }

            table thead tr th {
                font-size: 13px;
            }

            .mainStartTitle {
                font-size: 26px !important;
            }
        }

        @media (max-width: 480px) {
            .customColScoreSingle {
                width: 50%;
            }
        }
    </style>
</head>


<body>
    <header id="page-topbar">
        <div class="navbar-header">
            <div class="d-flex">
                <!-- LOGO -->
                <h1 class="navbar-brand-box">
                    <div class="logo logo-dark">
                        <span class="logo-lg">
                            <img src="{{ asset('/images/img/logo-header.png') }}" alt height="36" />
                        </span>
                    </div>
                </h1>
            </div>
        </div>
    </header>
    
    <div class="row">
        <div class="col-md-6 mb-4">
            <div class="card h-100 mb-0">
                <div class="card-body p-0">
                    <div class="p-3 border-bottom">
                        <div class="row align-items-center">
                            <div class="col">
                                <h2 class="card-title mb-0">Recent Journals</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <template> -->
    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">{{ date('Y') }} © Submitit.</div>
                <div class="col-sm-6">
                    <div class="text-sm-end d-none d-sm-block">Design & Develop by Midriff</div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end footer -->
    <!-- </template> -->


</body>

</html>