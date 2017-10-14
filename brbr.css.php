/*!
* Broetchen-Bringer CSS Code - Generated from LESS files
* Design by Philip Arnold, Germany 2014
*
* Arguments:  ?debug=true  - regenerate cache file
*             ?compress=1  - minify css file
* Generation Date: Wed, 03 May 2017 20:35:06 +0200
**/

@import "/styles/css.d/jquery/jquery.css"; /*! normalize.css v3.0.0 | MIT License | git.io/normalize */
html {
    font-family: sans-serif;
    -ms-text-size-adjust: 100%;
    -webkit-text-size-adjust: 100%
}

body {
    margin: 0
}

article, aside, details, figcaption, figure, footer, header, hgroup,
main, nav, section, summary {
    display: block
}

audio, canvas, progress, video {
    display: inline-block;
    vertical-align: baseline
}

audio:not([controls]) {
    display: none;
    height: 0
}

[hidden], template {
    display: none
}

a {
    background: transparent
}

a:active, a:hover {
    outline: 0
}

abbr[title] {
    border-bottom: 1px dotted
}

b, strong {
    font-weight: bold
}

dfn {
    font-style: italic
}

h1 {
    font-size: 2em;
    margin: 0.67em 0
}

mark {
    background: #ff0;
    color: #000
}

small {
    font-size: 80%
}

sub, sup {
    font-size: 75%;
    line-height: 0;
    position: relative;
    vertical-align: baseline
}

sup {
    top: -0.5em
}

sub {
    bottom: -0.25em
}

img {
    border: 0
}

svg:not(:root) {
    overflow: hidden
}

figure {
    margin: 1em 40px
}

hr {
    -moz-box-sizing: content-box;
    box-sizing: content-box;
    height: 0
}

pre {
    overflow: auto
}

code, kbd, pre, samp {
    font-family: monospace, monospace;
    font-size: 1em
}

button, input, optgroup, select, textarea {
    color: inherit;
    font: inherit;
    margin: 0
}

button {
    overflow: visible
}

button, select {
    text-transform: none
}

button, html input[type="button"], input[type="reset"], input[type="submit"] {
    -webkit-appearance: button;
    cursor: pointer
}

button[disabled], html input[disabled] {
    cursor: default
}

button::-moz-focus-inner, input::-moz-focus-inner {
    border: 0;
    padding: 0
}

input {
    line-height: normal
}

input[type="checkbox"], input[type="radio"] {
    box-sizing: border-box;
    padding: 0
}

input[type="number"]::-webkit-inner-spin-button, input[type="number"]::-webkit-outer-spin-button {
    height: auto
}

input[type="search"] {
    -webkit-appearance: textfield;
    -moz-box-sizing: content-box;
    -webkit-box-sizing: content-box;
    box-sizing: content-box
}

input[type="search"]::-webkit-search-cancel-button, input[type="search"]::-webkit-search-decoration {
    -webkit-appearance: none
}

fieldset {
    border: 1px solid #c0c0c0;
    margin: 0 2px;
    padding: 0.35em 0.625em 0.75em
}

legend {
    border: 0;
    padding: 0
}

textarea {
    overflow: auto
}

optgroup {
    font-weight: bold
}

table {
    border-collapse: collapse;
    border-spacing: 0
}

td, th {
    padding: 0
}

@media print {
    * {
        text-shadow: none !important;
        color: #000 !important;
        background: transparent !important;
        box-shadow: none !important
    }

    a, a:visited {
        text-decoration: underline
    }

    a[href]:after {
        content: " (" attr(href) ")"
    }

    abbr[title]:after {
        content: " (" attr(title) ")"
    }

    a[href^="javascript:"]:after, a[href^="#"]:after {
        content: ""
    }

    pre, blockquote {
        border: 1px solid #999;
        page-break-inside: avoid
    }

    thead {
        display: table-header-group
    }

    tr, img {
        page-break-inside: avoid
    }

    img {
        max-width: 100% !important
    }

    p, h2, h3 {
        orphans: 3;
        widows: 3
    }

    h2, h3 {
        page-break-after: avoid
    }

    select {
        background: #fff !important
    }

    .navbar {
        display: none
    }

    .table td, .table th {
        background-color: #fff !important
    }

    .btn > .caret, .dropup > .btn > .caret {
        border-top-color: #000 !important
    }

    .label {
        border: 1px solid #000
    }

    .table {
        border-collapse: collapse !important
    }

    .table-bordered th, .table-bordered td {
        border: 1px solid #ddd !important
    }
}

* {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box
}

* :before, * :after {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box
}

html {
    font-size: 62.5%;
    -webkit-tap-highlight-color: rgba(0, 0, 0, 0)
}

body {
    font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
    font-size: 14px;
    line-height: 1.428571429;
    color: #555;
    background-color: #fff8e2
}

input, button, select, textarea {
    font-family: inherit;
    font-size: inherit;
    line-height: inherit
}

a {
    color: #df0028;
    text-decoration: none
}

a:hover, a:focus {
    color: #93001a;
    text-decoration: underline
}

a:focus {
    outline: thin dotted;
    outline: 5px auto -webkit-focus-ring-color;
    outline-offset: -2px
}

figure {
    margin: 0
}

img {
    vertical-align: middle
}

.img-responsive {
    display: block;
    max-width: 100%;
    height: auto
}

.img-rounded {
    border-radius: 4px
}

.img-thumbnail {
    padding: 4px;
    line-height: 1.428571429;
    background-color: #fff8e2;
    border: 1px solid #ddd;
    border-radius: 0px;
    -webkit-transition: all .2s ease-in-out;
    transition: all .2s ease-in-out;
    display: inline-block;
    max-width: 100%;
    height: auto
}

.img-circle {
    border-radius: 50%
}

hr {
    margin-top: 20px;
    margin-bottom: 20px;
    border: 0;
    border-top: 1px solid #eee
}

.sr-only {
    position: absolute;
    width: 1px;
    height: 1px;
    margin: -1px;
    padding: 0;
    overflow: hidden;
    clip: rect(0, 0, 0, 0);
    border: 0
}

h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6 {
    font-family: inherit;
    font-weight: 500;
    line-height: 1.1;
    color: inherit
}

h1 small, h2 small, h3 small, h4 small, h5 small, h6 small, .h1 small, .h2 small,
.h3 small, .h4 small, .h5 small, .h6 small, h1 .small, h2 .small, h3 .small,
h4 .small, h5 .small, h6 .small, .h1 .small, .h2 .small, .h3 .small, .h4 .small,
.h5 .small, .h6 .small {
    font-weight: normal;
    line-height: 1;
    color: #aaa
}

h1, .h1, h2, .h2, h3, .h3 {
    margin-top: 20px;
    margin-bottom: 10px
}

h1 small, .h1 small, h2 small, .h2 small, h3 small, .h3 small, h1 .small,
.h1 .small, h2 .small, .h2 .small, h3 .small, .h3 .small {
    font-size: 65%
}

h4, .h4, h5, .h5, h6, .h6 {
    margin-top: 10px;
    margin-bottom: 10px
}

h4 small, .h4 small, h5 small, .h5 small, h6 small, .h6 small, h4 .small,
.h4 .small, h5 .small, .h5 .small, h6 .small, .h6 .small {
    font-size: 75%
}

h1, .h1 {
    font-size: 36px
}

h2, .h2 {
    font-size: 30px
}

h3, .h3 {
    font-size: 24px
}

h4, .h4 {
    font-size: 18px
}

h5, .h5 {
    font-size: 14px
}

h6, .h6 {
    font-size: 12px
}

p {
    margin: 0 0 10px
}

.lead {
    margin-bottom: 20px;
    font-size: 16px;
    font-weight: 200;
    line-height: 1.4
}

@media (min-width: 768px) {
    .lead {
        font-size: 21px
    }
}

small, .small {
    font-size: 85%
}

cite {
    font-style: normal
}

.text-left {
    text-align: left
}

.text-right {
    text-align: right
}

.text-center {
    text-align: center
}

.text-justify {
    text-align: justify
}

.text-muted {
    color: #aaa
}

.text-primary {
    color: #0098de
}

a.text-primary:hover {
    color: #0075ab
}

.text-success {
    color: #26bd56
}

a.text-success:hover {
    color: #1d9343
}

.text-info {
    color: #3a87ad
}

a.text-info:hover {
    color: #2d6987
}

.text-warning {
    color: #fcc000
}

a.text-warning:hover {
    color: #c99900
}

.text-danger {
    color: #df0028
}

a.text-danger:hover {
    color: #ac001f
}

.bg-primary {
    color: #fff;
    background-color: #0098de
}

a.bg-primary:hover {
    background-color: #0075ab
}

.bg-success {
    background-color: rgba(184, 255, 206, 0.4)
}

a.bg-success:hover {
    background-color: rgba(133, 255, 171, 0.4)
}

.bg-info {
    background-color: rgba(217, 237, 247, 0.5)
}

a.bg-info:hover {
    background-color: rgba(175, 217, 238, 0.5)
}

.bg-warning {
    background-color: rgba(255, 230, 150, 0.5)
}

a.bg-warning:hover {
    background-color: rgba(255, 218, 99, 0.5)
}

.bg-danger {
    background-color: rgba(242, 174, 188, 0.2)
}

a.bg-danger:hover {
    background-color: rgba(235, 130, 152, 0.2)
}

.page-header {
    padding-bottom: 9px;
    margin: 40px 0 20px;
    border-bottom: 1px solid #eee
}

ul, ol {
    margin-top: 0;
    margin-bottom: 10px
}

ul ul, ol ul, ul ol, ol ol {
    margin-bottom: 0
}

.list-unstyled {
    padding-left: 0;
    list-style: none
}

.list-inline {
    padding-left: 0;
    list-style: none
}

.list-inline > li {
    display: inline-block;
    padding-left: 5px;
    padding-right: 5px
}

.list-inline > li:first-child {
    padding-left: 0
}

dl {
    margin-top: 0;
    margin-bottom: 20px
}

dt, dd {
    line-height: 1.428571429
}

dt {
    font-weight: bold
}

dd {
    margin-left: 0
}

@media (min-width: 768px) {
    .dl-horizontal dt {
        float: left;
        width: 160px;
        clear: left;
        text-align: right;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap
    }

    .dl-horizontal dd {
        margin-left: 180px
    }
}

abbr[title], abbr[data-original-title] {
    cursor: help;
    border-bottom: 1px dotted #aaa
}

.initialism {
    font-size: 90%;
    text-transform: uppercase
}

blockquote {
    padding: 10px 20px;
    margin: 0 0 20px;
    font-size: 17.5px;
    border-left: 5px solid #eee
}

blockquote p:last-child, blockquote ul:last-child, blockquote ol:last-child {
    margin-bottom: 0
}

blockquote footer, blockquote small, blockquote .small {
    display: block;
    font-size: 80%;
    line-height: 1.428571429;
    color: #aaa
}

blockquote footer:before, blockquote small:before, blockquote .small:before {
    content: '\2014 \00A0'
}

.blockquote-reverse, blockquote.pull-right {
    padding-right: 15px;
    padding-left: 0;
    border-right: 5px solid #eee;
    border-left: 0;
    text-align: right
}

.blockquote-reverse footer:before, blockquote.pull-right footer:before,
.blockquote-reverse small:before, blockquote.pull-right small:before,
.blockquote-reverse .small:before, blockquote.pull-right .small:before {
    content: ''
}

.blockquote-reverse footer:after, blockquote.pull-right footer:after,
.blockquote-reverse small:after, blockquote.pull-right small:after,
.blockquote-reverse .small:after, blockquote.pull-right .small:after {
    content: '\00A0 \2014'
}

blockquote:before, blockquote:after {
    content: ""
}

address {
    margin-bottom: 20px;
    font-style: normal;
    line-height: 1.428571429
}

code, kbd, pre, samp {
    font-family: Menlo, Monaco, Consolas, "Courier New", monospace
}

code {
    padding: 2px 4px;
    font-size: 90%;
    color: #c7254e;
    background-color: #f9f2f4;
    white-space: nowrap;
    border-radius: 0px
}

kbd {
    padding: 2px 4px;
    font-size: 90%;
    color: #fff;
    background-color: #333;
    border-radius: 2px;
    box-shadow: inset 0 -1px 0 rgba(0, 0, 0, 0.25)
}

pre {
    display: block;
    padding: 9.5px;
    margin: 0 0 10px;
    font-size: 13px;
    line-height: 1.428571429;
    word-break: break-all;
    word-wrap: break-word;
    color: #555;
    background-color: #f5f5f5;
    border: 1px solid #ccc;
    border-radius: 0px
}

pre code {
    padding: 0;
    font-size: inherit;
    color: inherit;
    white-space: pre-wrap;
    background-color: transparent;
    border-radius: 0
}

.pre-scrollable {
    max-height: 340px;
    overflow-y: scroll
}

.container {
    margin-right: auto;
    margin-left: auto;
    padding-left: 15px;
    padding-right: 15px
}

@media (min-width: 768px) {
    .container {
        width: 750px
    }
}

@media (min-width: 992px) {
    .container {
        width: 970px
    }
}

@media (min-width: 1200px) {
    .container {
        width: 1170px
    }
}

.container-fluid {
    margin-right: auto;
    margin-left: auto;
    padding-left: 15px;
    padding-right: 15px
}

.row {
    margin-left: -15px;
    margin-right: -15px
}

.col-xs-1, .col-sm-1, .col-md-1, .col-lg-1, .col-xs-2, .col-sm-2,
.col-md-2, .col-lg-2, .col-xs-3, .col-sm-3, .col-md-3, .col-lg-3, .col-xs-4,
.col-sm-4, .col-md-4, .col-lg-4, .col-xs-5, .col-sm-5, .col-md-5, .col-lg-5,
.col-xs-6, .col-sm-6, .col-md-6, .col-lg-6, .col-xs-7, .col-sm-7, .col-md-7,
.col-lg-7, .col-xs-8, .col-sm-8, .col-md-8, .col-lg-8, .col-xs-9, .col-sm-9,
.col-md-9, .col-lg-9, .col-xs-10, .col-sm-10, .col-md-10, .col-lg-10,
.col-xs-11, .col-sm-11, .col-md-11, .col-lg-11, .col-xs-12, .col-sm-12,
.col-md-12, .col-lg-12 {
    position: relative;
    min-height: 1px;
    padding-left: 15px;
    padding-right: 15px
}

.col-xs-1, .col-xs-2, .col-xs-3, .col-xs-4, .col-xs-5, .col-xs-6,
.col-xs-7, .col-xs-8, .col-xs-9, .col-xs-10, .col-xs-11, .col-xs-12 {
    float: left
}

.col-xs-12 {
    width: 100%
}

.col-xs-11 {
    width: 91.66666666666666%
}

.col-xs-10 {
    width: 83.33333333333334%
}

.col-xs-9 {
    width: 75%
}

.col-xs-8 {
    width: 66.66666666666666%
}

.col-xs-7 {
    width: 58.33333333333334%
}

.col-xs-6 {
    width: 50%
}

.col-xs-5 {
    width: 41.66666666666667%
}

.col-xs-4 {
    width: 33.33333333333333%
}

.col-xs-3 {
    width: 25%
}

.col-xs-2 {
    width: 16.66666666666666%
}

.col-xs-1 {
    width: 8.333333333333332%
}

.col-xs-pull-12 {
    right: 100%
}

.col-xs-pull-11 {
    right: 91.66666666666666%
}

.col-xs-pull-10 {
    right: 83.33333333333334%
}

.col-xs-pull-9 {
    right: 75%
}

.col-xs-pull-8 {
    right: 66.66666666666666%
}

.col-xs-pull-7 {
    right: 58.33333333333334%
}

.col-xs-pull-6 {
    right: 50%
}

.col-xs-pull-5 {
    right: 41.66666666666667%
}

.col-xs-pull-4 {
    right: 33.33333333333333%
}

.col-xs-pull-3 {
    right: 25%
}

.col-xs-pull-2 {
    right: 16.66666666666666%
}

.col-xs-pull-1 {
    right: 8.333333333333332%
}

.col-xs-pull-0 {
    right: 0%
}

.col-xs-push-12 {
    left: 100%
}

.col-xs-push-11 {
    left: 91.66666666666666%
}

.col-xs-push-10 {
    left: 83.33333333333334%
}

.col-xs-push-9 {
    left: 75%
}

.col-xs-push-8 {
    left: 66.66666666666666%
}

.col-xs-push-7 {
    left: 58.33333333333334%
}

.col-xs-push-6 {
    left: 50%
}

.col-xs-push-5 {
    left: 41.66666666666667%
}

.col-xs-push-4 {
    left: 33.33333333333333%
}

.col-xs-push-3 {
    left: 25%
}

.col-xs-push-2 {
    left: 16.66666666666666%
}

.col-xs-push-1 {
    left: 8.333333333333332%
}

.col-xs-push-0 {
    left: 0%
}

.col-xs-offset-12 {
    margin-left: 100%
}

.col-xs-offset-11 {
    margin-left: 91.66666666666666%
}

.col-xs-offset-10 {
    margin-left: 83.33333333333334%
}

.col-xs-offset-9 {
    margin-left: 75%
}

.col-xs-offset-8 {
    margin-left: 66.66666666666666%
}

.col-xs-offset-7 {
    margin-left: 58.33333333333334%
}

.col-xs-offset-6 {
    margin-left: 50%
}

.col-xs-offset-5 {
    margin-left: 41.66666666666667%
}

.col-xs-offset-4 {
    margin-left: 33.33333333333333%
}

.col-xs-offset-3 {
    margin-left: 25%
}

.col-xs-offset-2 {
    margin-left: 16.66666666666666%
}

.col-xs-offset-1 {
    margin-left: 8.333333333333332%
}

.col-xs-offset-0 {
    margin-left: 0%
}

@media (min-width: 768px) {
    .col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6,
    .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12 {
        float: left
    }

    .col-sm-12 {
        width: 100%
    }

    .col-sm-11 {
        width: 91.66666666666666%
    }

    .col-sm-10 {
        width: 83.33333333333334%
    }

    .col-sm-9 {
        width: 75%
    }

    .col-sm-8 {
        width: 66.66666666666666%
    }

    .col-sm-7 {
        width: 58.33333333333334%
    }

    .col-sm-6 {
        width: 50%
    }

    .col-sm-5 {
        width: 41.66666666666667%
    }

    .col-sm-4 {
        width: 33.33333333333333%
    }

    .col-sm-3 {
        width: 25%
    }

    .col-sm-2 {
        width: 16.66666666666666%
    }

    .col-sm-1 {
        width: 8.333333333333332%
    }

    .col-sm-pull-12 {
        right: 100%
    }

    .col-sm-pull-11 {
        right: 91.66666666666666%
    }

    .col-sm-pull-10 {
        right: 83.33333333333334%
    }

    .col-sm-pull-9 {
        right: 75%
    }

    .col-sm-pull-8 {
        right: 66.66666666666666%
    }

    .col-sm-pull-7 {
        right: 58.33333333333334%
    }

    .col-sm-pull-6 {
        right: 50%
    }

    .col-sm-pull-5 {
        right: 41.66666666666667%
    }

    .col-sm-pull-4 {
        right: 33.33333333333333%
    }

    .col-sm-pull-3 {
        right: 25%
    }

    .col-sm-pull-2 {
        right: 16.66666666666666%
    }

    .col-sm-pull-1 {
        right: 8.333333333333332%
    }

    .col-sm-pull-0 {
        right: 0%
    }

    .col-sm-push-12 {
        left: 100%
    }

    .col-sm-push-11 {
        left: 91.66666666666666%
    }

    .col-sm-push-10 {
        left: 83.33333333333334%
    }

    .col-sm-push-9 {
        left: 75%
    }

    .col-sm-push-8 {
        left: 66.66666666666666%
    }

    .col-sm-push-7 {
        left: 58.33333333333334%
    }

    .col-sm-push-6 {
        left: 50%
    }

    .col-sm-push-5 {
        left: 41.66666666666667%
    }

    .col-sm-push-4 {
        left: 33.33333333333333%
    }

    .col-sm-push-3 {
        left: 25%
    }

    .col-sm-push-2 {
        left: 16.66666666666666%
    }

    .col-sm-push-1 {
        left: 8.333333333333332%
    }

    .col-sm-push-0 {
        left: 0%
    }

    .col-sm-offset-12 {
        margin-left: 100%
    }

    .col-sm-offset-11 {
        margin-left: 91.66666666666666%
    }

    .col-sm-offset-10 {
        margin-left: 83.33333333333334%
    }

    .col-sm-offset-9 {
        margin-left: 75%
    }

    .col-sm-offset-8 {
        margin-left: 66.66666666666666%
    }

    .col-sm-offset-7 {
        margin-left: 58.33333333333334%
    }

    .col-sm-offset-6 {
        margin-left: 50%
    }

    .col-sm-offset-5 {
        margin-left: 41.66666666666667%
    }

    .col-sm-offset-4 {
        margin-left: 33.33333333333333%
    }

    .col-sm-offset-3 {
        margin-left: 25%
    }

    .col-sm-offset-2 {
        margin-left: 16.66666666666666%
    }

    .col-sm-offset-1 {
        margin-left: 8.333333333333332%
    }

    .col-sm-offset-0 {
        margin-left: 0%
    }
}

@media (min-width: 992px) {
    .col-md-1, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6,
    .col-md-7, .col-md-8, .col-md-9, .col-md-10, .col-md-11, .col-md-12 {
        float: left
    }

    .col-md-12 {
        width: 100%
    }

    .col-md-11 {
        width: 91.66666666666666%
    }

    .col-md-10 {
        width: 83.33333333333334%
    }

    .col-md-9 {
        width: 75%
    }

    .col-md-8 {
        width: 66.66666666666666%
    }

    .col-md-7 {
        width: 58.33333333333334%
    }

    .col-md-6 {
        width: 50%
    }

    .col-md-5 {
        width: 41.66666666666667%
    }

    .col-md-4 {
        width: 33.33333333333333%
    }

    .col-md-3 {
        width: 25%
    }

    .col-md-2 {
        width: 16.66666666666666%
    }

    .col-md-1 {
        width: 8.333333333333332%
    }

    .col-md-pull-12 {
        right: 100%
    }

    .col-md-pull-11 {
        right: 91.66666666666666%
    }

    .col-md-pull-10 {
        right: 83.33333333333334%
    }

    .col-md-pull-9 {
        right: 75%
    }

    .col-md-pull-8 {
        right: 66.66666666666666%
    }

    .col-md-pull-7 {
        right: 58.33333333333334%
    }

    .col-md-pull-6 {
        right: 50%
    }

    .col-md-pull-5 {
        right: 41.66666666666667%
    }

    .col-md-pull-4 {
        right: 33.33333333333333%
    }

    .col-md-pull-3 {
        right: 25%
    }

    .col-md-pull-2 {
        right: 16.66666666666666%
    }

    .col-md-pull-1 {
        right: 8.333333333333332%
    }

    .col-md-pull-0 {
        right: 0%
    }

    .col-md-push-12 {
        left: 100%
    }

    .col-md-push-11 {
        left: 91.66666666666666%
    }

    .col-md-push-10 {
        left: 83.33333333333334%
    }

    .col-md-push-9 {
        left: 75%
    }

    .col-md-push-8 {
        left: 66.66666666666666%
    }

    .col-md-push-7 {
        left: 58.33333333333334%
    }

    .col-md-push-6 {
        left: 50%
    }

    .col-md-push-5 {
        left: 41.66666666666667%
    }

    .col-md-push-4 {
        left: 33.33333333333333%
    }

    .col-md-push-3 {
        left: 25%
    }

    .col-md-push-2 {
        left: 16.66666666666666%
    }

    .col-md-push-1 {
        left: 8.333333333333332%
    }

    .col-md-push-0 {
        left: 0%
    }

    .col-md-offset-12 {
        margin-left: 100%
    }

    .col-md-offset-11 {
        margin-left: 91.66666666666666%
    }

    .col-md-offset-10 {
        margin-left: 83.33333333333334%
    }

    .col-md-offset-9 {
        margin-left: 75%
    }

    .col-md-offset-8 {
        margin-left: 66.66666666666666%
    }

    .col-md-offset-7 {
        margin-left: 58.33333333333334%
    }

    .col-md-offset-6 {
        margin-left: 50%
    }

    .col-md-offset-5 {
        margin-left: 41.66666666666667%
    }

    .col-md-offset-4 {
        margin-left: 33.33333333333333%
    }

    .col-md-offset-3 {
        margin-left: 25%
    }

    .col-md-offset-2 {
        margin-left: 16.66666666666666%
    }

    .col-md-offset-1 {
        margin-left: 8.333333333333332%
    }

    .col-md-offset-0 {
        margin-left: 0%
    }
}

@media (min-width: 1200px) {
    .col-lg-1, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6,
    .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-10, .col-lg-11, .col-lg-12 {
        float: left
    }

    .col-lg-12 {
        width: 100%
    }

    .col-lg-11 {
        width: 91.66666666666666%
    }

    .col-lg-10 {
        width: 83.33333333333334%
    }

    .col-lg-9 {
        width: 75%
    }

    .col-lg-8 {
        width: 66.66666666666666%
    }

    .col-lg-7 {
        width: 58.33333333333334%
    }

    .col-lg-6 {
        width: 50%
    }

    .col-lg-5 {
        width: 41.66666666666667%
    }

    .col-lg-4 {
        width: 33.33333333333333%
    }

    .col-lg-3 {
        width: 25%
    }

    .col-lg-2 {
        width: 16.66666666666666%
    }

    .col-lg-1 {
        width: 8.333333333333332%
    }

    .col-lg-pull-12 {
        right: 100%
    }

    .col-lg-pull-11 {
        right: 91.66666666666666%
    }

    .col-lg-pull-10 {
        right: 83.33333333333334%
    }

    .col-lg-pull-9 {
        right: 75%
    }

    .col-lg-pull-8 {
        right: 66.66666666666666%
    }

    .col-lg-pull-7 {
        right: 58.33333333333334%
    }

    .col-lg-pull-6 {
        right: 50%
    }

    .col-lg-pull-5 {
        right: 41.66666666666667%
    }

    .col-lg-pull-4 {
        right: 33.33333333333333%
    }

    .col-lg-pull-3 {
        right: 25%
    }

    .col-lg-pull-2 {
        right: 16.66666666666666%
    }

    .col-lg-pull-1 {
        right: 8.333333333333332%
    }

    .col-lg-pull-0 {
        right: 0%
    }

    .col-lg-push-12 {
        left: 100%
    }

    .col-lg-push-11 {
        left: 91.66666666666666%
    }

    .col-lg-push-10 {
        left: 83.33333333333334%
    }

    .col-lg-push-9 {
        left: 75%
    }

    .col-lg-push-8 {
        left: 66.66666666666666%
    }

    .col-lg-push-7 {
        left: 58.33333333333334%
    }

    .col-lg-push-6 {
        left: 50%
    }

    .col-lg-push-5 {
        left: 41.66666666666667%
    }

    .col-lg-push-4 {
        left: 33.33333333333333%
    }

    .col-lg-push-3 {
        left: 25%
    }

    .col-lg-push-2 {
        left: 16.66666666666666%
    }

    .col-lg-push-1 {
        left: 8.333333333333332%
    }

    .col-lg-push-0 {
        left: 0%
    }

    .col-lg-offset-12 {
        margin-left: 100%
    }

    .col-lg-offset-11 {
        margin-left: 91.66666666666666%
    }

    .col-lg-offset-10 {
        margin-left: 83.33333333333334%
    }

    .col-lg-offset-9 {
        margin-left: 75%
    }

    .col-lg-offset-8 {
        margin-left: 66.66666666666666%
    }

    .col-lg-offset-7 {
        margin-left: 58.33333333333334%
    }

    .col-lg-offset-6 {
        margin-left: 50%
    }

    .col-lg-offset-5 {
        margin-left: 41.66666666666667%
    }

    .col-lg-offset-4 {
        margin-left: 33.33333333333333%
    }

    .col-lg-offset-3 {
        margin-left: 25%
    }

    .col-lg-offset-2 {
        margin-left: 16.66666666666666%
    }

    .col-lg-offset-1 {
        margin-left: 8.333333333333332%
    }

    .col-lg-offset-0 {
        margin-left: 0%
    }
}

table {
    max-width: 100%;
    background-color: transparent
}

th {
    text-align: left
}

.table {
    width: 100%;
    margin-bottom: 20px
}

.table > thead > tr > th, .table > tbody > tr > th, .table > tfoot > tr > th, .table > thead > tr > td,
.table > tbody > tr > td, .table > tfoot > tr > td {
    padding: 8px;
    line-height: 1.428571429;
    vertical-align: top;
    border-top: 1px solid #ddd
}

.table > thead > tr > th {
    vertical-align: bottom;
    border-bottom: 2px solid #ddd
}

.table > caption + thead > tr:first-child > th, .table > colgroup + thead > tr:first-child > th,
.table > thead:first-child > tr:first-child > th, .table > caption + thead > tr:first-child > td,
.table > colgroup + thead > tr:first-child > td, .table > thead:first-child > tr:first-child > td {
    border-top: 0
}

.table > tbody + tbody {
    border-top: 2px solid #ddd
}

.table .table {
    background-color: #fff8e2
}

.table-condensed > thead > tr > th, .table-condensed > tbody > tr > th, .table-condensed > tfoot > tr > th,
.table-condensed > thead > tr > td, .table-condensed > tbody > tr > td, .table-condensed > tfoot > tr > td {
    padding: 5px
}

.table-bordered {
    border: 1px solid #ddd
}

.table-bordered > thead > tr > th, .table-bordered > tbody > tr > th, .table-bordered > tfoot > tr > th,
.table-bordered > thead > tr > td, .table-bordered > tbody > tr > td, .table-bordered > tfoot > tr > td {
    border: 1px solid #ddd
}

.table-bordered > thead > tr > th, .table-bordered > thead > tr > td {
    border-bottom-width: 2px
}

.table-striped > tbody > tr:nth-child(odd) > td, .table-striped > tbody > tr:nth-child(odd) > th {
    background-color: rgba(255, 230, 150, 0.3)
}

.table-hover > tbody > tr:hover > td, .table-hover > tbody > tr:hover > th {
    background-color: rgba(255, 230, 150, 0.8)
}

table col[class * ="col-"] {
    position: static;
    float: none;
    display: table-column
}

table td[class * ="col-"], table th[class * ="col-"] {
    position: static;
    float: none;
    display: table-cell
}

.table > thead > tr > td.active, .table > tbody > tr > td.active, .table > tfoot > tr > td.active,
.table > thead > tr > th.active, .table > tbody > tr > th.active, .table > tfoot > tr > th.active,
.table > thead > tr.active > td, .table > tbody > tr.active > td, .table > tfoot > tr.active > td,
.table > thead > tr.active > th, .table > tbody > tr.active > th, .table > tfoot > tr.active > th {
    background-color: rgba(255, 230, 150, 0.8)
}

.table-hover > tbody > tr > td.active:hover, .table-hover > tbody > tr > th.active:hover,
.table-hover > tbody > tr.active:hover > td, .table-hover > tbody > tr.active:hover > th {
    background-color: rgba(255, 224, 125, 0.8)
}

.table > thead > tr > td.success, .table > tbody > tr > td.success, .table > tfoot > tr > td.success,
.table > thead > tr > th.success, .table > tbody > tr > th.success, .table > tfoot > tr > th.success,
.table > thead > tr.success > td, .table > tbody > tr.success > td, .table > tfoot > tr.success > td,
.table > thead > tr.success > th, .table > tbody > tr.success > th, .table > tfoot > tr.success > th {
    background-color: rgba(184, 255, 206, 0.4)
}

.table-hover > tbody > tr > td.success:hover, .table-hover > tbody > tr > th.success:hover,
.table-hover > tbody > tr.success:hover > td, .table-hover > tbody > tr.success:hover > th {
    background-color: rgba(159, 255, 188, 0.4)
}

.table > thead > tr > td.info, .table > tbody > tr > td.info, .table > tfoot > tr > td.info,
.table > thead > tr > th.info, .table > tbody > tr > th.info, .table > tfoot > tr > th.info,
.table > thead > tr.info > td, .table > tbody > tr.info > td, .table > tfoot > tr.info > td,
.table > thead > tr.info > th, .table > tbody > tr.info > th, .table > tfoot > tr.info > th {
    background-color: rgba(217, 237, 247, 0.5)
}

.table-hover > tbody > tr > td.info:hover, .table-hover > tbody > tr > th.info:hover,
.table-hover > tbody > tr.info:hover > td, .table-hover > tbody > tr.info:hover > th {
    background-color: rgba(196, 227, 243, 0.5)
}

.table > thead > tr > td.warning, .table > tbody > tr > td.warning, .table > tfoot > tr > td.warning,
.table > thead > tr > th.warning, .table > tbody > tr > th.warning, .table > tfoot > tr > th.warning,
.table > thead > tr.warning > td, .table > tbody > tr.warning > td, .table > tfoot > tr.warning > td,
.table > thead > tr.warning > th, .table > tbody > tr.warning > th, .table > tfoot > tr.warning > th {
    background-color: rgba(255, 230, 150, 0.5)
}

.table-hover > tbody > tr > td.warning:hover, .table-hover > tbody > tr > th.warning:hover,
.table-hover > tbody > tr.warning:hover > td, .table-hover > tbody > tr.warning:hover > th {
    background-color: rgba(255, 224, 125, 0.5)
}

.table > thead > tr > td.danger, .table > tbody > tr > td.danger, .table > tfoot > tr > td.danger,
.table > thead > tr > th.danger, .table > tbody > tr > th.danger, .table > tfoot > tr > th.danger,
.table > thead > tr.danger > td, .table > tbody > tr.danger > td, .table > tfoot > tr.danger > td,
.table > thead > tr.danger > th, .table > tbody > tr.danger > th, .table > tfoot > tr.danger > th {
    background-color: rgba(242, 174, 188, 0.2)
}

.table-hover > tbody > tr > td.danger:hover, .table-hover > tbody > tr > th.danger:hover,
.table-hover > tbody > tr.danger:hover > td, .table-hover > tbody > tr.danger:hover > th {
    background-color: rgba(238, 152, 170, 0.2)
}

@media (max-width: 767px) {
    .table-responsive {
        width: 100%;
        margin-bottom: 15px;
        overflow-y: hidden;
        overflow-x: scroll;
        -ms-overflow-style: -ms-autohiding-scrollbar;
        border: 1px solid #ddd;
        -webkit-overflow-scrolling: touch
    }

    .table-responsive > .table {
        margin-bottom: 0
    }

    .table-responsive > .table > thead > tr > th, .table-responsive > .table > tbody > tr > th,
    .table-responsive > .table > tfoot > tr > th, .table-responsive > .table > thead > tr > td,
    .table-responsive > .table > tbody > tr > td, .table-responsive > .table > tfoot > tr > td {
        white-space: nowrap
    }

    .table-responsive > .table-bordered {
        border: 0
    }

    .table-responsive > .table-bordered > thead > tr > th:first-child, .table-responsive > .table-bordered > tbody > tr > th:first-child,
    .table-responsive > .table-bordered > tfoot > tr > th:first-child, .table-responsive > .table-bordered > thead > tr > td:first-child,
    .table-responsive > .table-bordered > tbody > tr > td:first-child, .table-responsive > .table-bordered > tfoot > tr > td:first-child {
        border-left: 0
    }

    .table-responsive > .table-bordered > thead > tr > th:last-child, .table-responsive > .table-bordered > tbody > tr > th:last-child,
    .table-responsive > .table-bordered > tfoot > tr > th:last-child, .table-responsive > .table-bordered > thead > tr > td:last-child,
    .table-responsive > .table-bordered > tbody > tr > td:last-child, .table-responsive > .table-bordered > tfoot > tr > td:last-child {
        border-right: 0
    }

    .table-responsive > .table-bordered > tbody > tr:last-child > th, .table-responsive > .table-bordered > tfoot > tr:last-child > th,
    .table-responsive > .table-bordered > tbody > tr:last-child > td, .table-responsive > .table-bordered > tfoot > tr:last-child > td {
        border-bottom: 0
    }
}

fieldset {
    padding: 0;
    margin: 0;
    border: 0;
    min-width: 0
}

legend {
    display: block;
    width: 100%;
    padding: 0;
    margin-bottom: 20px;
    font-size: 21px;
    line-height: inherit;
    color: #555;
    border: 0;
    border-bottom: 1px solid #e5e5e5
}

label {
    display: inline-block;
    margin-bottom: 5px;
    font-weight: bold
}

input[type="search"] {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box
}

input[type="radio"], input[type="checkbox"] {
    margin: 4px 0 0;
    margin-top: 1px \9;
    line-height: normal
}

input[type="file"] {
    display: block
}

input[type="range"] {
    display: block;
    width: 100%
}

select[multiple], select[size] {
    height: auto
}

input[type="file"]:focus, input[type="radio"]:focus, input[type="checkbox"]:focus {
    outline: thin dotted;
    outline: 5px auto -webkit-focus-ring-color;
    outline-offset: -2px
}

output {
    display: block;
    padding-top: 7px;
    font-size: 14px;
    line-height: 1.428571429;
    color: #333
}

.form-control {
    display: block;
    width: 100%;
    height: 34px;
    padding: 6px 12px;
    font-size: 14px;
    line-height: 1.428571429;
    color: #333;
    background-color: #fff;
    background-image: none;
    border: 1px solid #ddd;
    border-radius: 0px;
    -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
    box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
    -webkit-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
    transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s
}

.form-control:focus {
    border-color: #66afe9;
    outline: 0;
    -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 8px rgba(102, 175, 233, 0.6);
    box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 8px rgba(102, 175, 233, 0.6)
}

.form-control:-moz-placeholder {
    color: #aaa
}

.form-control::-moz-placeholder {
    color: #aaa;
    opacity: 1
}

.form-control:-ms-input-placeholder {
    color: #aaa
}

.form-control::-webkit-input-placeholder {
    color: #aaa
}

.form-control[disabled], .form-control[readonly], fieldset[disabled] .form-control {
    cursor: not-allowed;
    background-color: #eee;
    opacity: 1
}

textarea.form-control {
    height: auto
}

input[type="date"] {
    line-height: 34px
}

.form-group {
    margin-bottom: 15px
}

.radio, .checkbox {
    display: block;
    min-height: 20px;
    margin-top: 10px;
    margin-bottom: 10px;
    padding-left: 20px
}

.radio label, .checkbox label {
    display: inline;
    font-weight: normal;
    cursor: pointer
}

.radio input[type="radio"], .radio-inline input[type="radio"], .checkbox input[type="checkbox"],
.checkbox-inline input[type="checkbox"] {
    float: left;
    margin-left: -20px
}

.radio + .radio, .checkbox + .checkbox {
    margin-top: -5px
}

.radio-inline, .checkbox-inline {
    display: inline-block;
    padding-left: 20px;
    margin-bottom: 0;
    vertical-align: middle;
    font-weight: normal;
    cursor: pointer
}

.radio-inline + .radio-inline, .checkbox-inline + .checkbox-inline {
    margin-top: 0;
    margin-left: 10px
}

input[type="radio"][disabled], input[type="checkbox"][disabled],
.radio[disabled], .radio-inline[disabled], .checkbox[disabled],
.checkbox-inline[disabled], fieldset[disabled] input[type="radio"],
fieldset[disabled] input[type="checkbox"], fieldset[disabled] .radio,
fieldset[disabled] .radio-inline, fieldset[disabled] .checkbox, fieldset[disabled] .checkbox-inline {
    cursor: not-allowed
}

.input-sm {
    height: 30px;
    padding: 5px 10px;
    font-size: 12px;
    line-height: 1.5;
    border-radius: 2px
}

select.input-sm {
    height: 30px;
    line-height: 30px
}

textarea.input-sm, select[multiple].input-sm {
    height: auto
}

.input-lg {
    height: 45px;
    padding: 10px 16px;
    font-size: 18px;
    line-height: 1.33;
    border-radius: 4px
}

select.input-lg {
    height: 45px;
    line-height: 45px
}

textarea.input-lg, select[multiple].input-lg {
    height: auto
}

.has-feedback {
    position: relative
}

.has-feedback .form-control {
    padding-right: 42.5px
}

.has-feedback .form-control-feedback {
    position: absolute;
    top: 25px;
    right: 0;
    display: block;
    width: 34px;
    height: 34px;
    line-height: 34px;
    text-align: center
}

.has-success .help-block, .has-success .control-label, .has-success .radio,
.has-success .checkbox, .has-success .radio-inline, .has-success .checkbox-inline {
    color: #26bd56
}

.has-success .form-control {
    border-color: #26bd56;
    -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
    box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075)
}

.has-success .form-control:focus {
    border-color: #1d9343;
    -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #68e18f;
    box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #68e18f
}

.has-success .input-group-addon {
    color: #26bd56;
    border-color: #26bd56;
    background-color: rgba(184, 255, 206, 0.4)
}

.has-success .form-control-feedback {
    color: #26bd56
}

.has-warning .help-block, .has-warning .control-label, .has-warning .radio,
.has-warning .checkbox, .has-warning .radio-inline, .has-warning .checkbox-inline {
    color: #fcc000
}

.has-warning .form-control {
    border-color: #fcc000;
    -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
    box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075)
}

.has-warning .form-control:focus {
    border-color: #c99900;
    -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #ffda63;
    box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #ffda63
}

.has-warning .input-group-addon {
    color: #fcc000;
    border-color: #fcc000;
    background-color: rgba(255, 230, 150, 0.5)
}

.has-warning .form-control-feedback {
    color: #fcc000
}

.has-error .help-block, .has-error .control-label, .has-error .radio,
.has-error .checkbox, .has-error .radio-inline, .has-error .checkbox-inline {
    color: #df0028
}

.has-error .form-control {
    border-color: #df0028;
    -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
    box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075)
}

.has-error .form-control:focus {
    border-color: #ac001f;
    -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #ff4667;
    box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #ff4667
}

.has-error .input-group-addon {
    color: #df0028;
    border-color: #df0028;
    background-color: rgba(242, 174, 188, 0.2)
}

.has-error .form-control-feedback {
    color: #df0028
}

.form-control-static {
    margin-bottom: 0
}

.help-block {
    display: block;
    margin-top: 5px;
    margin-bottom: 10px;
    color: #959595
}

@media (min-width: 768px) {
    .form-inline .form-group {
        display: inline-block;
        margin-bottom: 0;
        vertical-align: middle
    }

    .form-inline .form-control {
        display: inline-block;
        width: auto;
        vertical-align: middle
    }

    .form-inline .control-label {
        margin-bottom: 0;
        vertical-align: middle
    }

    .form-inline .radio, .form-inline .checkbox {
        display: inline-block;
        margin-top: 0;
        margin-bottom: 0;
        padding-left: 0;
        vertical-align: middle
    }

    .form-inline .radio input[type="radio"], .form-inline .checkbox input[type="checkbox"] {
        float: none;
        margin-left: 0
    }

    .form-inline .has-feedback .form-control-feedback {
        top: 0
    }
}

.form-horizontal .control-label, .form-horizontal .radio, .form-horizontal .checkbox,
.form-horizontal .radio-inline, .form-horizontal .checkbox-inline {
    margin-top: 0;
    margin-bottom: 0;
    padding-top: 7px
}

.form-horizontal .radio, .form-horizontal .checkbox {
    min-height: 27px
}

.form-horizontal .form-group {
    margin-left: -15px;
    margin-right: -15px
}

.form-horizontal .form-control-static {
    padding-top: 7px
}

@media (min-width: 768px) {
    .form-horizontal .control-label {
        text-align: right
    }
}

.form-horizontal .has-feedback .form-control-feedback {
    top: 0;
    right: 15px
}

.btn {
    display: inline-block;
    margin-bottom: 0;
    font-weight: normal;
    text-align: center;
    vertical-align: middle;
    cursor: pointer;
    background-image: none;
    border: 1px solid transparent;
    white-space: nowrap;
    padding: 6px 12px;
    font-size: 14px;
    line-height: 1.428571429;
    border-radius: 0px;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    -o-user-select: none;
    user-select: none
}

.btn:focus {
    outline: thin dotted;
    outline: 5px auto -webkit-focus-ring-color;
    outline-offset: -2px
}

.btn:hover, .btn:focus {
    color: #e3ad00;
    text-decoration: none
}

.btn:active, .btn.active {
    outline: 0;
    background-image: none;
    -webkit-box-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
    box-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125)
}

.btn.disabled, .btn[disabled], fieldset[disabled] .btn {
    cursor: not-allowed;
    pointer-events: none;
    opacity: .65;
    filter: alpha(opacity=65);
    -webkit-box-shadow: none;
    box-shadow: none
}

.btn-default {
    color: #e3ad00;
    background-color: #fffefc;
    border-color: #e3ad00
}

.btn-default:hover, .btn-default:focus, .btn-default:active, .btn-default.active,
.open .dropdown-toggle.btn-default {
    color: #e3ad00;
    background-color: #fff4d3;
    border-color: #a57e00
}

.btn-default:active, .btn-default.active, .open .dropdown-toggle.btn-default {
    background-image: none
}

.btn-default.disabled, .btn-default[disabled], fieldset[disabled] .btn-default,
.btn-default.disabled:hover, .btn-default[disabled]:hover, fieldset[disabled] .btn-default:hover,
.btn-default.disabled:focus, .btn-default[disabled]:focus, fieldset[disabled] .btn-default:focus,
.btn-default.disabled:active, .btn-default[disabled]:active, fieldset[disabled] .btn-default:active,
.btn-default.disabled.active, .btn-default[disabled].active, fieldset[disabled] .btn-default.active {
    background-color: #fffefc;
    border-color: #e3ad00
}

.btn-default .badge {
    color: #fffefc;
    background-color: #e3ad00
}

.btn-primary {
    color: #0098de;
    background-color: #fffefc;
    border-color: #007cb5
}

.btn-primary:hover, .btn-primary:focus, .btn-primary:active, .btn-primary.active,
.open .dropdown-toggle.btn-primary {
    color: #0098de;
    background-color: #fff4d3;
    border-color: #005278
}

.btn-primary:active, .btn-primary.active, .open .dropdown-toggle.btn-primary {
    background-image: none
}

.btn-primary.disabled, .btn-primary[disabled], fieldset[disabled] .btn-primary,
.btn-primary.disabled:hover, .btn-primary[disabled]:hover, fieldset[disabled] .btn-primary:hover,
.btn-primary.disabled:focus, .btn-primary[disabled]:focus, fieldset[disabled] .btn-primary:focus,
.btn-primary.disabled:active, .btn-primary[disabled]:active, fieldset[disabled] .btn-primary:active,
.btn-primary.disabled.active, .btn-primary[disabled].active, fieldset[disabled] .btn-primary.active {
    background-color: #fffefc;
    border-color: #007cb5
}

.btn-primary .badge {
    color: #fffefc;
    background-color: #0098de
}

.btn-success {
    color: #26bd56;
    background-color: #fffefc;
    border-color: #1f9b47
}

.btn-success:hover, .btn-success:focus, .btn-success:active, .btn-success.active,
.open .dropdown-toggle.btn-success {
    color: #26bd56;
    background-color: #fff4d3;
    border-color: #15682f
}

.btn-success:active, .btn-success.active, .open .dropdown-toggle.btn-success {
    background-image: none
}

.btn-success.disabled, .btn-success[disabled], fieldset[disabled] .btn-success,
.btn-success.disabled:hover, .btn-success[disabled]:hover, fieldset[disabled] .btn-success:hover,
.btn-success.disabled:focus, .btn-success[disabled]:focus, fieldset[disabled] .btn-success:focus,
.btn-success.disabled:active, .btn-success[disabled]:active, fieldset[disabled] .btn-success:active,
.btn-success.disabled.active, .btn-success[disabled].active, fieldset[disabled] .btn-success.active {
    background-color: #fffefc;
    border-color: #1f9b47
}

.btn-success .badge {
    color: #fffefc;
    background-color: #26bd56
}

.btn-info {
    color: #88846f;
    background-color: #fffefc;
    border-color: #716e5c
}

.btn-info:hover, .btn-info:focus, .btn-info:active, .btn-info.active,
.open .dropdown-toggle.btn-info {
    color: #88846f;
    background-color: #fff4d3;
    border-color: #504d41
}

.btn-info:active, .btn-info.active, .open .dropdown-toggle.btn-info {
    background-image: none
}

.btn-info.disabled, .btn-info[disabled], fieldset[disabled] .btn-info,
.btn-info.disabled:hover, .btn-info[disabled]:hover, fieldset[disabled] .btn-info:hover,
.btn-info.disabled:focus, .btn-info[disabled]:focus, fieldset[disabled] .btn-info:focus,
.btn-info.disabled:active, .btn-info[disabled]:active, fieldset[disabled] .btn-info:active,
.btn-info.disabled.active, .btn-info[disabled].active, fieldset[disabled] .btn-info.active {
    background-color: #fffefc;
    border-color: #716e5c
}

.btn-info .badge {
    color: #fffefc;
    background-color: #88846f
}

.btn-warning {
    color: #df0028;
    background-color: #ffe696;
    border-color: #b60021
}

.btn-warning:hover, .btn-warning:focus, .btn-warning:active, .btn-warning.active,
.open .dropdown-toggle.btn-warning {
    color: #df0028;
    background-color: #ffdc6d;
    border-color: #790016
}

.btn-warning:active, .btn-warning.active, .open .dropdown-toggle.btn-warning {
    background-image: none
}

.btn-warning.disabled, .btn-warning[disabled], fieldset[disabled] .btn-warning,
.btn-warning.disabled:hover, .btn-warning[disabled]:hover, fieldset[disabled] .btn-warning:hover,
.btn-warning.disabled:focus, .btn-warning[disabled]:focus, fieldset[disabled] .btn-warning:focus,
.btn-warning.disabled:active, .btn-warning[disabled]:active, fieldset[disabled] .btn-warning:active,
.btn-warning.disabled.active, .btn-warning[disabled].active, fieldset[disabled] .btn-warning.active {
    background-color: #ffe696;
    border-color: #b60021
}

.btn-warning .badge {
    color: #ffe696;
    background-color: #df0028
}

.btn-danger {
    color: #fff;
    background-color: #df0028;
    border-color: #b60021
}

.btn-danger:hover, .btn-danger:focus, .btn-danger:active, .btn-danger.active,
.open .dropdown-toggle.btn-danger {
    color: #fff;
    background-color: #b60021;
    border-color: #790016
}

.btn-danger:active, .btn-danger.active, .open .dropdown-toggle.btn-danger {
    background-image: none
}

.btn-danger.disabled, .btn-danger[disabled], fieldset[disabled] .btn-danger,
.btn-danger.disabled:hover, .btn-danger[disabled]:hover, fieldset[disabled] .btn-danger:hover,
.btn-danger.disabled:focus, .btn-danger[disabled]:focus, fieldset[disabled] .btn-danger:focus,
.btn-danger.disabled:active, .btn-danger[disabled]:active, fieldset[disabled] .btn-danger:active,
.btn-danger.disabled.active, .btn-danger[disabled].active, fieldset[disabled] .btn-danger.active {
    background-color: #df0028;
    border-color: #b60021
}

.btn-danger .badge {
    color: #df0028;
    background-color: #fff
}

.btn-link {
    color: #df0028;
    font-weight: normal;
    cursor: pointer;
    border-radius: 0
}

.btn-link, .btn-link:active, .btn-link[disabled], fieldset[disabled] .btn-link {
    background-color: transparent;
    -webkit-box-shadow: none;
    box-shadow: none
}

.btn-link, .btn-link:hover, .btn-link:focus, .btn-link:active {
    border-color: transparent
}

.btn-link:hover, .btn-link:focus {
    color: #93001a;
    text-decoration: underline;
    background-color: transparent
}

.btn-link[disabled]:hover, fieldset[disabled] .btn-link:hover,
.btn-link[disabled]:focus, fieldset[disabled] .btn-link:focus {
    color: #aaa;
    text-decoration: none
}

.btn-lg {
    padding: 10px 16px;
    font-size: 18px;
    line-height: 1.33;
    border-radius: 4px
}

.btn-sm {
    padding: 5px 10px;
    font-size: 12px;
    line-height: 1.5;
    border-radius: 2px
}

.btn-xs {
    padding: 1px 5px;
    font-size: 12px;
    line-height: 1.5;
    border-radius: 2px
}

.btn-block {
    display: block;
    width: 100%;
    padding-left: 0;
    padding-right: 0
}

.btn-block + .btn-block {
    margin-top: 5px
}

input[type="submit"].btn-block, input[type="reset"].btn-block,
input[type="button"].btn-block {
    width: 100%
}

.fade {
    opacity: 0;
    -webkit-transition: opacity .15s linear;
    transition: opacity .15s linear
}

.fade.in {
    opacity: 1
}

.collapse {
    display: none
}

.collapse.in {
    display: block
}

.collapsing {
    position: relative;
    height: 0;
    overflow: hidden;
    -webkit-transition: height .35s ease;
    transition: height .35s ease
}

@font-face {
    font-family: 'Glyphicons Halflings';
    src: url('fonts/glyphicons-halflings-regular.eot');
    src: url('fonts/glyphicons-halflings-regular.eot?#iefix') format('embedded-opentype'), url('fonts/glyphicons-halflings-regular.woff') format('woff'), url('fonts/glyphicons-halflings-regular.ttf') format('truetype'), url('fonts/glyphicons-halflings-regular.svg#glyphicons_halflingsregular') format('svg')
}

.glyphicon {
    position: relative;
    top: 1px;
    display: inline-block;
    font-family: 'Glyphicons Halflings';
    font-style: normal;
    font-weight: normal;
    line-height: 1;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale
}

.glyphicon-asterisk:before {
    content: "\2a"
}

.glyphicon-plus:before {
    content: "\2b"
}

.glyphicon-euro:before {
    content: "\20ac"
}

.glyphicon-minus:before {
    content: "\2212"
}

.glyphicon-cloud:before {
    content: "\2601"
}

.glyphicon-envelope:before {
    content: "\2709"
}

.glyphicon-pencil:before {
    content: "\270f"
}

.glyphicon-glass:before {
    content: "\e001"
}

.glyphicon-music:before {
    content: "\e002"
}

.glyphicon-search:before {
    content: "\e003"
}

.glyphicon-heart:before {
    content: "\e005"
}

.glyphicon-star:before {
    content: "\e006"
}

.glyphicon-star-empty:before {
    content: "\e007"
}

.glyphicon-user:before {
    content: "\e008"
}

.glyphicon-film:before {
    content: "\e009"
}

.glyphicon-th-large:before {
    content: "\e010"
}

.glyphicon-th:before {
    content: "\e011"
}

.glyphicon-th-list:before {
    content: "\e012"
}

.glyphicon-ok:before {
    content: "\e013"
}

.glyphicon-remove:before {
    content: "\e014"
}

.glyphicon-zoom-in:before {
    content: "\e015"
}

.glyphicon-zoom-out:before {
    content: "\e016"
}

.glyphicon-off:before {
    content: "\e017"
}

.glyphicon-signal:before {
    content: "\e018"
}

.glyphicon-cog:before {
    content: "\e019"
}

.glyphicon-trash:before {
    content: "\e020"
}

.glyphicon-home:before {
    content: "\e021"
}

.glyphicon-file:before {
    content: "\e022"
}

.glyphicon-time:before {
    content: "\e023"
}

.glyphicon-road:before {
    content: "\e024"
}

.glyphicon-download-alt:before {
    content: "\e025"
}

.glyphicon-download:before {
    content: "\e026"
}

.glyphicon-upload:before {
    content: "\e027"
}

.glyphicon-inbox:before {
    content: "\e028"
}

.glyphicon-play-circle:before {
    content: "\e029"
}

.glyphicon-repeat:before {
    content: "\e030"
}

.glyphicon-refresh:before {
    content: "\e031"
}

.glyphicon-list-alt:before {
    content: "\e032"
}

.glyphicon-lock:before {
    content: "\e033"
}

.glyphicon-flag:before {
    content: "\e034"
}

.glyphicon-headphones:before {
    content: "\e035"
}

.glyphicon-volume-off:before {
    content: "\e036"
}

.glyphicon-volume-down:before {
    content: "\e037"
}

.glyphicon-volume-up:before {
    content: "\e038"
}

.glyphicon-qrcode:before {
    content: "\e039"
}

.glyphicon-barcode:before {
    content: "\e040"
}

.glyphicon-tag:before {
    content: "\e041"
}

.glyphicon-tags:before {
    content: "\e042"
}

.glyphicon-book:before {
    content: "\e043"
}

.glyphicon-bookmark:before {
    content: "\e044"
}

.glyphicon-print:before {
    content: "\e045"
}

.glyphicon-camera:before {
    content: "\e046"
}

.glyphicon-font:before {
    content: "\e047"
}

.glyphicon-bold:before {
    content: "\e048"
}

.glyphicon-italic:before {
    content: "\e049"
}

.glyphicon-text-height:before {
    content: "\e050"
}

.glyphicon-text-width:before {
    content: "\e051"
}

.glyphicon-align-left:before {
    content: "\e052"
}

.glyphicon-align-center:before {
    content: "\e053"
}

.glyphicon-align-right:before {
    content: "\e054"
}

.glyphicon-align-justify:before {
    content: "\e055"
}

.glyphicon-list:before {
    content: "\e056"
}

.glyphicon-indent-left:before {
    content: "\e057"
}

.glyphicon-indent-right:before {
    content: "\e058"
}

.glyphicon-facetime-video:before {
    content: "\e059"
}

.glyphicon-picture:before {
    content: "\e060"
}

.glyphicon-map-marker:before {
    content: "\e062"
}

.glyphicon-adjust:before {
    content: "\e063"
}

.glyphicon-tint:before {
    content: "\e064"
}

.glyphicon-edit:before {
    content: "\e065"
}

.glyphicon-share:before {
    content: "\e066"
}

.glyphicon-check:before {
    content: "\e067"
}

.glyphicon-move:before {
    content: "\e068"
}

.glyphicon-step-backward:before {
    content: "\e069"
}

.glyphicon-fast-backward:before {
    content: "\e070"
}

.glyphicon-backward:before {
    content: "\e071"
}

.glyphicon-play:before {
    content: "\e072"
}

.glyphicon-pause:before {
    content: "\e073"
}

.glyphicon-stop:before {
    content: "\e074"
}

.glyphicon-forward:before {
    content: "\e075"
}

.glyphicon-fast-forward:before {
    content: "\e076"
}

.glyphicon-step-forward:before {
    content: "\e077"
}

.glyphicon-eject:before {
    content: "\e078"
}

.glyphicon-chevron-left:before {
    content: "\e079"
}

.glyphicon-chevron-right:before {
    content: "\e080"
}

.glyphicon-plus-sign:before {
    content: "\e081"
}

.glyphicon-minus-sign:before {
    content: "\e082"
}

.glyphicon-remove-sign:before {
    content: "\e083"
}

.glyphicon-ok-sign:before {
    content: "\e084"
}

.glyphicon-question-sign:before {
    content: "\e085"
}

.glyphicon-info-sign:before {
    content: "\e086"
}

.glyphicon-screenshot:before {
    content: "\e087"
}

.glyphicon-remove-circle:before {
    content: "\e088"
}

.glyphicon-ok-circle:before {
    content: "\e089"
}

.glyphicon-ban-circle:before {
    content: "\e090"
}

.glyphicon-arrow-left:before {
    content: "\e091"
}

.glyphicon-arrow-right:before {
    content: "\e092"
}

.glyphicon-arrow-up:before {
    content: "\e093"
}

.glyphicon-arrow-down:before {
    content: "\e094"
}

.glyphicon-share-alt:before {
    content: "\e095"
}

.glyphicon-resize-full:before {
    content: "\e096"
}

.glyphicon-resize-small:before {
    content: "\e097"
}

.glyphicon-exclamation-sign:before {
    content: "\e101"
}

.glyphicon-gift:before {
    content: "\e102"
}

.glyphicon-leaf:before {
    content: "\e103"
}

.glyphicon-fire:before {
    content: "\e104"
}

.glyphicon-eye-open:before {
    content: "\e105"
}

.glyphicon-eye-close:before {
    content: "\e106"
}

.glyphicon-warning-sign:before {
    content: "\e107"
}

.glyphicon-plane:before {
    content: "\e108"
}

.glyphicon-calendar:before {
    content: "\e109"
}

.glyphicon-random:before {
    content: "\e110"
}

.glyphicon-comment:before {
    content: "\e111"
}

.glyphicon-magnet:before {
    content: "\e112"
}

.glyphicon-chevron-up:before {
    content: "\e113"
}

.glyphicon-chevron-down:before {
    content: "\e114"
}

.glyphicon-retweet:before {
    content: "\e115"
}

.glyphicon-shopping-cart:before {
    content: "\e116"
}

.glyphicon-folder-close:before {
    content: "\e117"
}

.glyphicon-folder-open:before {
    content: "\e118"
}

.glyphicon-resize-vertical:before {
    content: "\e119"
}

.glyphicon-resize-horizontal:before {
    content: "\e120"
}

.glyphicon-hdd:before {
    content: "\e121"
}

.glyphicon-bullhorn:before {
    content: "\e122"
}

.glyphicon-bell:before {
    content: "\e123"
}

.glyphicon-certificate:before {
    content: "\e124"
}

.glyphicon-thumbs-up:before {
    content: "\e125"
}

.glyphicon-thumbs-down:before {
    content: "\e126"
}

.glyphicon-hand-right:before {
    content: "\e127"
}

.glyphicon-hand-left:before {
    content: "\e128"
}

.glyphicon-hand-up:before {
    content: "\e129"
}

.glyphicon-hand-down:before {
    content: "\e130"
}

.glyphicon-circle-arrow-right:before {
    content: "\e131"
}

.glyphicon-circle-arrow-left:before {
    content: "\e132"
}

.glyphicon-circle-arrow-up:before {
    content: "\e133"
}

.glyphicon-circle-arrow-down:before {
    content: "\e134"
}

.glyphicon-globe:before {
    content: "\e135"
}

.glyphicon-wrench:before {
    content: "\e136"
}

.glyphicon-tasks:before {
    content: "\e137"
}

.glyphicon-filter:before {
    content: "\e138"
}

.glyphicon-briefcase:before {
    content: "\e139"
}

.glyphicon-fullscreen:before {
    content: "\e140"
}

.glyphicon-dashboard:before {
    content: "\e141"
}

.glyphicon-paperclip:before {
    content: "\e142"
}

.glyphicon-heart-empty:before {
    content: "\e143"
}

.glyphicon-link:before {
    content: "\e144"
}

.glyphicon-phone:before {
    content: "\e145"
}

.glyphicon-pushpin:before {
    content: "\e146"
}

.glyphicon-usd:before {
    content: "\e148"
}

.glyphicon-gbp:before {
    content: "\e149"
}

.glyphicon-sort:before {
    content: "\e150"
}

.glyphicon-sort-by-alphabet:before {
    content: "\e151"
}

.glyphicon-sort-by-alphabet-alt:before {
    content: "\e152"
}

.glyphicon-sort-by-order:before {
    content: "\e153"
}

.glyphicon-sort-by-order-alt:before {
    content: "\e154"
}

.glyphicon-sort-by-attributes:before {
    content: "\e155"
}

.glyphicon-sort-by-attributes-alt:before {
    content: "\e156"
}

.glyphicon-unchecked:before {
    content: "\e157"
}

.glyphicon-expand:before {
    content: "\e158"
}

.glyphicon-collapse-down:before {
    content: "\e159"
}

.glyphicon-collapse-up:before {
    content: "\e160"
}

.glyphicon-log-in:before {
    content: "\e161"
}

.glyphicon-flash:before {
    content: "\e162"
}

.glyphicon-log-out:before {
    content: "\e163"
}

.glyphicon-new-window:before {
    content: "\e164"
}

.glyphicon-record:before {
    content: "\e165"
}

.glyphicon-save:before {
    content: "\e166"
}

.glyphicon-open:before {
    content: "\e167"
}

.glyphicon-saved:before {
    content: "\e168"
}

.glyphicon-import:before {
    content: "\e169"
}

.glyphicon-export:before {
    content: "\e170"
}

.glyphicon-send:before {
    content: "\e171"
}

.glyphicon-floppy-disk:before {
    content: "\e172"
}

.glyphicon-floppy-saved:before {
    content: "\e173"
}

.glyphicon-floppy-remove:before {
    content: "\e174"
}

.glyphicon-floppy-save:before {
    content: "\e175"
}

.glyphicon-floppy-open:before {
    content: "\e176"
}

.glyphicon-credit-card:before {
    content: "\e177"
}

.glyphicon-transfer:before {
    content: "\e178"
}

.glyphicon-cutlery:before {
    content: "\e179"
}

.glyphicon-header:before {
    content: "\e180"
}

.glyphicon-compressed:before {
    content: "\e181"
}

.glyphicon-earphone:before {
    content: "\e182"
}

.glyphicon-phone-alt:before {
    content: "\e183"
}

.glyphicon-tower:before {
    content: "\e184"
}

.glyphicon-stats:before {
    content: "\e185"
}

.glyphicon-sd-video:before {
    content: "\e186"
}

.glyphicon-hd-video:before {
    content: "\e187"
}

.glyphicon-subtitles:before {
    content: "\e188"
}

.glyphicon-sound-stereo:before {
    content: "\e189"
}

.glyphicon-sound-dolby:before {
    content: "\e190"
}

.glyphicon-sound-5-1:before {
    content: "\e191"
}

.glyphicon-sound-6-1:before {
    content: "\e192"
}

.glyphicon-sound-7-1:before {
    content: "\e193"
}

.glyphicon-copyright-mark:before {
    content: "\e194"
}

.glyphicon-registration-mark:before {
    content: "\e195"
}

.glyphicon-cloud-download:before {
    content: "\e197"
}

.glyphicon-cloud-upload:before {
    content: "\e198"
}

.glyphicon-tree-conifer:before {
    content: "\e199"
}

.glyphicon-tree-deciduous:before {
    content: "\e200"
}

.caret {
    display: inline-block;
    width: 0;
    height: 0;
    margin-left: 2px;
    vertical-align: middle;
    border-top: 4px solid;
    border-right: 4px solid transparent;
    border-left: 4px solid transparent
}

.dropdown {
    position: relative
}

.dropdown-toggle:focus {
    outline: 0
}

.dropdown-menu {
    position: absolute;
    top: 100%;
    left: 0;
    z-index: 1000;
    display: none;
    float: left;
    min-width: 160px;
    padding: 5px 0;
    margin: 2px 0 0;
    list-style: none;
    font-size: 14px;
    background-color: #fffbef;
    border: 1px solid #ccc;
    border: 1px solid rgba(0, 0, 0, 0.15);
    border-radius: 0px;
    -webkit-box-shadow: 0 6px 12px rgba(0, 0, 0, 0.175);
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.175);
    background-clip: padding-box
}

.dropdown-menu.pull-right {
    right: 0;
    left: auto
}

.dropdown-menu .divider {
    height: 1px;
    margin: 9px 0;
    overflow: hidden;
    background-color: #e5e5e5
}

.dropdown-menu > li > a {
    display: block;
    padding: 3px 20px;
    clear: both;
    font-weight: normal;
    line-height: 1.428571429;
    color: #555;
    white-space: nowrap
}

.dropdown-menu > li > a:hover, .dropdown-menu > li > a:focus {
    text-decoration: none;
    color: #df0028;
    background-color: #ffe696
}

.dropdown-menu > .active > a, .dropdown-menu > .active > a:hover, .dropdown-menu > .active > a:focus {
    color: #df0028;
    text-decoration: none;
    outline: 0;
    background-color: #ffe696
}

.dropdown-menu > .disabled > a, .dropdown-menu > .disabled > a:hover,
.dropdown-menu > .disabled > a:focus {
    color: #aaa
}

.dropdown-menu > .disabled > a:hover, .dropdown-menu > .disabled > a:focus {
    text-decoration: none;
    background-color: transparent;
    background-image: none;
    filter: progid: DXImageTransform.Microsoft.gradient(enabled = false);
    cursor: not-allowed
}

.open > .dropdown-menu {
    display: block
}

.open > a {
    outline: 0
}

.dropdown-menu-right {
    left: auto;
    right: 0
}

.dropdown-menu-left {
    left: 0;
    right: auto
}

.dropdown-header {
    display: block;
    padding: 3px 20px;
    font-size: 12px;
    line-height: 1.428571429;
    color: #aaa
}

.dropdown-backdrop {
    position: fixed;
    left: 0;
    right: 0;
    bottom: 0;
    top: 0;
    z-index: 990
}

.pull-right > .dropdown-menu {
    right: 0;
    left: auto
}

.dropup .caret, .navbar-fixed-bottom .dropdown .caret {
    border-top: 0;
    border-bottom: 4px solid;
    content: ""
}

.dropup .dropdown-menu, .navbar-fixed-bottom .dropdown .dropdown-menu {
    top: auto;
    bottom: 100%;
    margin-bottom: 1px
}

@media (min-width: 768px) {
    .navbar-right .dropdown-menu {
        left: auto;
        right: 0
    }

    .navbar-right .dropdown-menu-left {
        left: 0;
        right: auto
    }
}

.btn-group, .btn-group-vertical {
    position: relative;
    display: inline-block;
    vertical-align: middle
}

.btn-group > .btn, .btn-group-vertical > .btn {
    position: relative;
    float: left
}

.btn-group > .btn:hover, .btn-group-vertical > .btn:hover, .btn-group > .btn:focus,
.btn-group-vertical > .btn:focus, .btn-group > .btn:active, .btn-group-vertical > .btn:active,
.btn-group > .btn.active, .btn-group-vertical > .btn.active {
    z-index: 2
}

.btn-group > .btn:focus, .btn-group-vertical > .btn:focus {
    outline: none
}

.btn-group .btn + .btn, .btn-group .btn + .btn-group, .btn-group .btn-group + .btn,
.btn-group .btn-group + .btn-group {
    margin-left: -1px
}

.btn-toolbar {
    margin-left: -5px
}

.btn-toolbar .btn-group, .btn-toolbar .input-group {
    float: left
}

.btn-toolbar > .btn, .btn-toolbar > .btn-group, .btn-toolbar > .input-group {
    margin-left: 5px
}

.btn-group > .btn:not(:first-child):not(:last-child):not(.dropdown-toggle) {
    border-radius: 0
}

.btn-group > .btn:first-child {
    margin-left: 0
}

.btn-group > .btn:first-child:not(:last-child):not(.dropdown-toggle) {
    border-bottom-right-radius: 0;
    border-top-right-radius: 0
}

.btn-group > .btn:last-child:not(:first-child), .btn-group > .dropdown-toggle:not(:first-child) {
    border-bottom-left-radius: 0;
    border-top-left-radius: 0
}

.btn-group > .btn-group {
    float: left
}

.btn-group > .btn-group:not(:first-child):not(:last-child) > .btn {
    border-radius: 0
}

.btn-group > .btn-group:first-child > .btn:last-child, .btn-group > .btn-group:first-child > .dropdown-toggle {
    border-bottom-right-radius: 0;
    border-top-right-radius: 0
}

.btn-group > .btn-group:last-child > .btn:first-child {
    border-bottom-left-radius: 0;
    border-top-left-radius: 0
}

.btn-group .dropdown-toggle:active, .btn-group.open .dropdown-toggle {
    outline: 0
}

.btn-group-xs > .btn {
    padding: 1px 5px;
    font-size: 12px;
    line-height: 1.5;
    border-radius: 2px
}

.btn-group-sm > .btn {
    padding: 5px 10px;
    font-size: 12px;
    line-height: 1.5;
    border-radius: 2px
}

.btn-group-lg > .btn {
    padding: 10px 16px;
    font-size: 18px;
    line-height: 1.33;
    border-radius: 4px
}

.btn-group > .btn + .dropdown-toggle {
    padding-left: 8px;
    padding-right: 8px
}

.btn-group > .btn-lg + .dropdown-toggle {
    padding-left: 12px;
    padding-right: 12px
}

.btn-group.open .dropdown-toggle {
    -webkit-box-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
    box-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125)
}

.btn-group.open .dropdown-toggle.btn-link {
    -webkit-box-shadow: none;
    box-shadow: none
}

.btn .caret {
    margin-left: 0
}

.btn-lg .caret {
    border-width: 5px 5px 0;
    border-bottom-width: 0
}

.dropup .btn-lg .caret {
    border-width: 0 5px 5px
}

.btn-group-vertical > .btn, .btn-group-vertical > .btn-group, .btn-group-vertical > .btn-group > .btn {
    display: block;
    float: none;
    width: 100%;
    max-width: 100%
}

.btn-group-vertical > .btn-group > .btn {
    float: none
}

.btn-group-vertical > .btn + .btn, .btn-group-vertical > .btn + .btn-group,
.btn-group-vertical > .btn-group + .btn, .btn-group-vertical > .btn-group + .btn-group {
    margin-top: -1px;
    margin-left: 0
}

.btn-group-vertical > .btn:not(:first-child):not(:last-child) {
    border-radius: 0
}

.btn-group-vertical > .btn:first-child:not(:last-child) {
    border-top-right-radius: 0px;
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0
}

.btn-group-vertical > .btn:last-child:not(:first-child) {
    border-bottom-left-radius: 0px;
    border-top-right-radius: 0;
    border-top-left-radius: 0
}

.btn-group-vertical > .btn-group:not(:first-child):not(:last-child) > .btn {
    border-radius: 0
}

.btn-group-vertical > .btn-group:first-child:not(:last-child) > .btn:last-child,
.btn-group-vertical > .btn-group:first-child:not(:last-child) > .dropdown-toggle {
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0
}

.btn-group-vertical > .btn-group:last-child:not(:first-child) > .btn:first-child {
    border-top-right-radius: 0;
    border-top-left-radius: 0
}

.btn-group-justified {
    display: table;
    width: 100%;
    table-layout: fixed;
    border-collapse: separate
}

.btn-group-justified > .btn, .btn-group-justified > .btn-group {
    float: none;
    display: table-cell;
    width: 1%
}

.btn-group-justified > .btn-group .btn {
    width: 100%
}

[data-toggle="buttons"] > .btn > input[type="radio"], [data-toggle="buttons"] > .btn > input[type="checkbox"] {
    display: none
}

.input-group {
    position: relative;
    display: table;
    border-collapse: separate
}

.input-group[class * ="col-"] {
    float: none;
    padding-left: 0;
    padding-right: 0
}

.input-group .form-control {
    float: left;
    width: 100%;
    margin-bottom: 0
}

.input-group-lg > .form-control, .input-group-lg > .input-group-addon,
.input-group-lg > .input-group-btn > .btn {
    height: 45px;
    padding: 10px 16px;
    font-size: 18px;
    line-height: 1.33;
    border-radius: 4px
}

select.input-group-lg > .form-control, select.input-group-lg > .input-group-addon,
select.input-group-lg > .input-group-btn > .btn {
    height: 45px;
    line-height: 45px
}

textarea.input-group-lg > .form-control, textarea.input-group-lg > .input-group-addon,
textarea.input-group-lg > .input-group-btn > .btn, select[multiple].input-group-lg > .form-control,
select[multiple].input-group-lg > .input-group-addon, select[multiple].input-group-lg > .input-group-btn > .btn {
    height: auto
}

.input-group-sm > .form-control, .input-group-sm > .input-group-addon,
.input-group-sm > .input-group-btn > .btn {
    height: 30px;
    padding: 5px 10px;
    font-size: 12px;
    line-height: 1.5;
    border-radius: 2px
}

select.input-group-sm > .form-control, select.input-group-sm > .input-group-addon,
select.input-group-sm > .input-group-btn > .btn {
    height: 30px;
    line-height: 30px
}

textarea.input-group-sm > .form-control, textarea.input-group-sm > .input-group-addon,
textarea.input-group-sm > .input-group-btn > .btn, select[multiple].input-group-sm > .form-control,
select[multiple].input-group-sm > .input-group-addon, select[multiple].input-group-sm > .input-group-btn > .btn {
    height: auto
}

.input-group-addon, .input-group-btn, .input-group .form-control {
    display: table-cell
}

.input-group-addon:not(:first-child):not(:last-child), .input-group-btn:not(:first-child):not(:last-child),
.input-group .form-control:not(:first-child):not(:last-child) {
    border-radius: 0
}

.input-group-addon, .input-group-btn {
    width: 1%;
    white-space: nowrap;
    vertical-align: middle
}

.input-group-addon {
    padding: 6px 12px;
    font-size: 14px;
    font-weight: normal;
    line-height: 1;
    color: #333;
    text-align: center;
    background-color: #eee;
    border: 1px solid #ddd;
    border-radius: 0px
}

.input-group-addon.input-sm {
    padding: 5px 10px;
    font-size: 12px;
    border-radius: 2px
}

.input-group-addon.input-lg {
    padding: 10px 16px;
    font-size: 18px;
    border-radius: 4px
}

.input-group-addon input[type="radio"], .input-group-addon input[type="checkbox"] {
    margin-top: 0
}

.input-group .form-control:first-child, .input-group-addon:first-child,
.input-group-btn:first-child > .btn, .input-group-btn:first-child > .btn-group > .btn,
.input-group-btn:first-child > .dropdown-toggle, .input-group-btn:last-child > .btn:not(:last-child):not(.dropdown-toggle),
.input-group-btn:last-child > .btn-group:not(:last-child) > .btn {
    border-bottom-right-radius: 0;
    border-top-right-radius: 0
}

.input-group-addon:first-child {
    border-right: 0
}

.input-group .form-control:last-child, .input-group-addon:last-child,
.input-group-btn:last-child > .btn, .input-group-btn:last-child > .btn-group > .btn,
.input-group-btn:last-child > .dropdown-toggle, .input-group-btn:first-child > .btn:not(:first-child),
.input-group-btn:first-child > .btn-group:not(:first-child) > .btn {
    border-bottom-left-radius: 0;
    border-top-left-radius: 0
}

.input-group-addon:last-child {
    border-left: 0
}

.input-group-btn {
    position: relative;
    font-size: 0;
    white-space: nowrap
}

.input-group-btn > .btn {
    position: relative
}

.input-group-btn > .btn + .btn {
    margin-left: -1px
}

.input-group-btn > .btn:hover, .input-group-btn > .btn:focus, .input-group-btn > .btn:active {
    z-index: 2
}

.input-group-btn:first-child > .btn, .input-group-btn:first-child > .btn-group {
    margin-right: -1px
}

.input-group-btn:last-child > .btn, .input-group-btn:last-child > .btn-group {
    margin-left: -1px
}

.nav {
    margin-bottom: 0;
    padding-left: 0;
    list-style: none
}

.nav > li {
    position: relative;
    display: block
}

.nav > li > a {
    position: relative;
    display: block;
    padding: 7px 20px
}

.nav > li > a:hover, .nav > li > a:focus {
    text-decoration: none;
    background-color: #eee
}

.nav > li.disabled > a {
    color: #aaa
}

.nav > li.disabled > a:hover, .nav > li.disabled > a:focus {
    color: #aaa;
    text-decoration: none;
    background-color: transparent;
    cursor: not-allowed
}

.nav .open > a, .nav .open > a:hover, .nav .open > a:focus {
    background-color: #eee;
    border-color: #df0028
}

.nav .nav-divider {
    height: 1px;
    margin: 9px 0;
    overflow: hidden;
    background-color: #e5e5e5
}

.nav > li > a > img {
    max-width: none
}

.nav-tabs {
    border-bottom: 1px solid #aaa
}

.nav-tabs > li {
    float: left;
    margin-bottom: -1px
}

.nav-tabs > li > a {
    margin-right: 2px;
    line-height: 1.428571429;
    border: 1px solid transparent;
    border-radius: 0px 0px 0 0
}

.nav-tabs > li > a:hover {
    border-color: #eee #eee #aaa
}

.nav-tabs > li.active > a, .nav-tabs > li.active > a:hover, .nav-tabs > li.active > a:focus {
    color: #777;
    background-color: #fff8e2;
    border: 1px solid #aaa;
    border-bottom-color: transparent;
    cursor: default
}

.nav-tabs.nav-justified {
    width: 100%;
    border-bottom: 0
}

.nav-tabs.nav-justified > li {
    float: none
}

.nav-tabs.nav-justified > li > a {
    text-align: center;
    margin-bottom: 5px
}

.nav-tabs.nav-justified > .dropdown .dropdown-menu {
    top: auto;
    left: auto
}

@media (min-width: 768px) {
    .nav-tabs.nav-justified > li {
        display: table-cell;
        width: 1%
    }

    .nav-tabs.nav-justified > li > a {
        margin-bottom: 0
    }
}

.nav-tabs.nav-justified > li > a {
    margin-right: 0;
    border-radius: 0px
}

.nav-tabs.nav-justified > .active > a, .nav-tabs.nav-justified > .active > a:hover,
.nav-tabs.nav-justified > .active > a:focus {
    border: 1px solid #aaa
}

@media (min-width: 768px) {
    .nav-tabs.nav-justified > li > a {
        border-bottom: 1px solid #aaa;
        border-radius: 0px 0px 0 0
    }

    .nav-tabs.nav-justified > .active > a, .nav-tabs.nav-justified > .active > a:hover,
    .nav-tabs.nav-justified > .active > a:focus {
        border-bottom-color: #fff8e2
    }
}

.nav-pills > li {
    float: left
}

.nav-pills > li > a {
    border-radius: 0px
}

.nav-pills > li + li {
    margin-left: 2px
}

.nav-pills > li.active > a, .nav-pills > li.active > a:hover, .nav-pills > li.active > a:focus {
    color: #df0028;
    background-color: #ffe696
}

.nav-stacked > li {
    float: none
}

.nav-stacked > li + li {
    margin-top: 2px;
    margin-left: 0
}

.nav-justified {
    width: 100%
}

.nav-justified > li {
    float: none
}

.nav-justified > li > a {
    text-align: center;
    margin-bottom: 5px
}

.nav-justified > .dropdown .dropdown-menu {
    top: auto;
    left: auto
}

@media (min-width: 768px) {
    .nav-justified > li {
        display: table-cell;
        width: 1%
    }

    .nav-justified > li > a {
        margin-bottom: 0
    }
}

.nav-tabs-justified {
    border-bottom: 0
}

.nav-tabs-justified > li > a {
    margin-right: 0;
    border-radius: 0px
}

.nav-tabs-justified > .active > a, .nav-tabs-justified > .active > a:hover,
.nav-tabs-justified > .active > a:focus {
    border: 1px solid #aaa
}

@media (min-width: 768px) {
    .nav-tabs-justified > li > a {
        border-bottom: 1px solid #aaa;
        border-radius: 0px 0px 0 0
    }

    .nav-tabs-justified > .active > a, .nav-tabs-justified > .active > a:hover,
    .nav-tabs-justified > .active > a:focus {
        border-bottom-color: #fff8e2
    }
}

.tab-content > .tab-pane {
    display: none
}

.tab-content > .active {
    display: block
}

.nav-tabs .dropdown-menu {
    margin-top: -1px;
    border-top-right-radius: 0;
    border-top-left-radius: 0
}

.navbar {
    position: relative;
    min-height: 110px;
    margin-bottom: 20px;
    border: 1px solid transparent
}

@media (min-width: 768px) {
    .navbar {
        border-radius: 4px
    }
}

@media (min-width: 768px) {
    .navbar-header {
        float: left
    }
}

.navbar-collapse {
    max-height: 340px;
    overflow-x: visible;
    padding-right: 15px;
    padding-left: 15px;
    border-top: 1px solid transparent;
    box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.1);
    -webkit-overflow-scrolling: touch
}

.navbar-collapse.in {
    overflow-y: auto
}

@media (min-width: 768px) {
    .navbar-collapse {
        width: auto;
        border-top: 0;
        box-shadow: none
    }

    .navbar-collapse.collapse {
        display: block !important;
        height: auto !important;
        padding-bottom: 0;
        overflow: visible !important
    }

    .navbar-collapse.in {
        overflow-y: visible
    }

    .navbar-fixed-top .navbar-collapse, .navbar-static-top .navbar-collapse,
    .navbar-fixed-bottom .navbar-collapse {
        padding-left: 0;
        padding-right: 0
    }
}

.container > .navbar-header, .container-fluid > .navbar-header, .container > .navbar-collapse,
.container-fluid > .navbar-collapse {
    margin-right: -15px;
    margin-left: -15px
}

@media (min-width: 768px) {
    .container > .navbar-header, .container-fluid > .navbar-header, .container > .navbar-collapse,
    .container-fluid > .navbar-collapse {
        margin-right: 0;
        margin-left: 0
    }
}

.navbar-static-top {
    z-index: 1000;
    border-width: 0 0 1px
}

@media (min-width: 768px) {
    .navbar-static-top {
        border-radius: 0
    }
}

.navbar-fixed-top, .navbar-fixed-bottom {
    position: fixed;
    right: 0;
    left: 0;
    z-index: 1030
}

@media (min-width: 768px) {
    .navbar-fixed-top, .navbar-fixed-bottom {
        border-radius: 0
    }
}

.navbar-fixed-top {
    top: 0;
    border-width: 0 0 1px
}

.navbar-fixed-bottom {
    bottom: 0;
    margin-bottom: 0;
    border-width: 1px 0 0
}

.navbar-brand {
    float: left;
    padding: 45px 15px;
    font-size: 18px;
    line-height: 20px;
    height: 20px
}

.navbar-brand:hover, .navbar-brand:focus {
    text-decoration: none
}

@media (min-width: 768px) {
    .navbar > .container .navbar-brand, .navbar > .container-fluid .navbar-brand {
        margin-left: -15px
    }
}

.navbar-toggle {
    position: relative;
    float: right;
    margin-right: 15px;
    padding: 9px 10px;
    margin-top: 38px;
    margin-bottom: 38px;
    background-color: transparent;
    background-image: none;
    border: 1px solid transparent;
    border-radius: 0px
}

.navbar-toggle:focus {
    outline: none
}

.navbar-toggle .icon-bar {
    display: block;
    width: 22px;
    height: 2px;
    border-radius: 1px
}

.navbar-toggle .icon-bar + .icon-bar {
    margin-top: 4px
}

@media (min-width: 768px) {
    .navbar-toggle {
        display: none
    }
}

.navbar-nav {
    margin: 22.5px -15px
}

.navbar-nav > li > a {
    padding-top: 10px;
    padding-bottom: 10px;
    line-height: 20px
}

@media (max-width: 767px) {
    .navbar-nav .open .dropdown-menu {
        position: static;
        float: none;
        width: auto;
        margin-top: 0;
        background-color: transparent;
        border: 0;
        box-shadow: none
    }

    .navbar-nav .open .dropdown-menu > li > a, .navbar-nav .open .dropdown-menu .dropdown-header {
        padding: 5px 15px 5px 25px
    }

    .navbar-nav .open .dropdown-menu > li > a {
        line-height: 20px
    }

    .navbar-nav .open .dropdown-menu > li > a:hover, .navbar-nav .open .dropdown-menu > li > a:focus {
        background-image: none
    }
}

@media (min-width: 768px) {
    .navbar-nav {
        float: left;
        margin: 0
    }

    .navbar-nav > li {
        float: left
    }

    .navbar-nav > li > a {
        padding-top: 45px;
        padding-bottom: 45px
    }

    .navbar-nav.navbar-right:last-child {
        margin-right: -15px
    }
}

@media (min-width: 768px) {
    .navbar-left {
        float: left !important
    }

    .navbar-right {
        float: right !important
    }
}

.navbar-form {
    margin-left: -15px;
    margin-right: -15px;
    padding: 10px 15px;
    border-top: 1px solid transparent;
    border-bottom: 1px solid transparent;
    -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.1), 0 1px 0 rgba(255, 255, 255, 0.1);
    box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.1), 0 1px 0 rgba(255, 255, 255, 0.1);
    margin-top: 38px;
    margin-bottom: 38px
}

@media (min-width: 768px) {
    .navbar-form .form-group {
        display: inline-block;
        margin-bottom: 0;
        vertical-align: middle
    }

    .navbar-form .form-control {
        display: inline-block;
        width: auto;
        vertical-align: middle
    }

    .navbar-form .control-label {
        margin-bottom: 0;
        vertical-align: middle
    }

    .navbar-form .radio, .navbar-form .checkbox {
        display: inline-block;
        margin-top: 0;
        margin-bottom: 0;
        padding-left: 0;
        vertical-align: middle
    }

    .navbar-form .radio input[type="radio"], .navbar-form .checkbox input[type="checkbox"] {
        float: none;
        margin-left: 0
    }

    .navbar-form .has-feedback .form-control-feedback {
        top: 0
    }
}

@media (max-width: 767px) {
    .navbar-form .form-group {
        margin-bottom: 5px
    }
}

@media (min-width: 768px) {
    .navbar-form {
        width: auto;
        border: 0;
        margin-left: 0;
        margin-right: 0;
        padding-top: 0;
        padding-bottom: 0;
        -webkit-box-shadow: none;
        box-shadow: none
    }

    .navbar-form.navbar-right:last-child {
        margin-right: -15px
    }
}

.navbar-nav > li > .dropdown-menu {
    margin-top: 0;
    border-top-right-radius: 0;
    border-top-left-radius: 0
}

.navbar-fixed-bottom .navbar-nav > li > .dropdown-menu {
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0
}

.navbar-btn {
    margin-top: 38px;
    margin-bottom: 38px
}

.navbar-btn.btn-sm {
    margin-top: 40px;
    margin-bottom: 40px
}

.navbar-btn.btn-xs {
    margin-top: 44px;
    margin-bottom: 44px
}

.navbar-text {
    margin-top: 45px;
    margin-bottom: 45px
}

@media (min-width: 768px) {
    .navbar-text {
        float: left;
        margin-left: 15px;
        margin-right: 15px
    }

    .navbar-text.navbar-right:last-child {
        margin-right: 0
    }
}

.navbar-default {
    background-color: #fff3cb;
    border-color: #ccc
}

.navbar-default .navbar-brand {
    color: #df0028
}

.navbar-default .navbar-brand:hover, .navbar-default .navbar-brand:focus {
    color: #ac001f;
    background-color: transparent
}

.navbar-default .navbar-text {
    color: #df0028
}

.navbar-default .navbar-nav > li > a {
    color: #df0028
}

.navbar-default .navbar-nav > li > a:hover, .navbar-default .navbar-nav > li > a:focus {
    color: #fff3cb;
    background-color: #df0028
}

.navbar-default .navbar-nav > .active > a, .navbar-default .navbar-nav > .active > a:hover,
.navbar-default .navbar-nav > .active > a:focus {
    color: #fff;
    background-color: #fff3cb
}

.navbar-default .navbar-nav > .disabled > a, .navbar-default .navbar-nav > .disabled > a:hover,
.navbar-default .navbar-nav > .disabled > a:focus {
    color: #777;
    background-color: transparent
}

.navbar-default .navbar-toggle {
    border-color: #df0028
}

.navbar-default .navbar-toggle:hover, .navbar-default .navbar-toggle:focus {
    background-color: rgba(255, 230, 150, 0.7)
}

.navbar-default .navbar-toggle .icon-bar {
    background-color: #df0028
}

.navbar-default .navbar-collapse, .navbar-default .navbar-form {
    border-color: #ccc
}

.navbar-default .navbar-nav > .open > a, .navbar-default .navbar-nav > .open > a:hover,
.navbar-default .navbar-nav > .open > a:focus {
    background-color: #fff3cb;
    color: #fff
}

@media (max-width: 767px) {
    .navbar-default .navbar-nav .open .dropdown-menu > li > a {
        color: #df0028
    }

    .navbar-default .navbar-nav .open .dropdown-menu > li > a:hover, .navbar-default .navbar-nav .open .dropdown-menu > li > a:focus {
        color: #fff3cb;
        background-color: #df0028
    }

    .navbar-default .navbar-nav .open .dropdown-menu > .active > a, .navbar-default .navbar-nav .open .dropdown-menu > .active > a:hover,
    .navbar-default .navbar-nav .open .dropdown-menu > .active > a:focus {
        color: #fff;
        background-color: #fff3cb
    }

    .navbar-default .navbar-nav .open .dropdown-menu > .disabled > a, .navbar-default .navbar-nav .open .dropdown-menu > .disabled > a:hover,
    .navbar-default .navbar-nav .open .dropdown-menu > .disabled > a:focus {
        color: #777;
        background-color: transparent
    }
}

.navbar-default .navbar-link {
    color: #df0028
}

.navbar-default .navbar-link:hover {
    color: #fff3cb
}

.navbar-inverse {
    background-color: #222;
    border-color: #080808
}

.navbar-inverse .navbar-brand {
    color: #aaa
}

.navbar-inverse .navbar-brand:hover, .navbar-inverse .navbar-brand:focus {
    color: #fff;
    background-color: transparent
}

.navbar-inverse .navbar-text {
    color: #aaa
}

.navbar-inverse .navbar-nav > li > a {
    color: #aaa
}

.navbar-inverse .navbar-nav > li > a:hover, .navbar-inverse .navbar-nav > li > a:focus {
    color: #fff;
    background-color: transparent
}

.navbar-inverse .navbar-nav > .active > a, .navbar-inverse .navbar-nav > .active > a:hover,
.navbar-inverse .navbar-nav > .active > a:focus {
    color: #fff;
    background-color: #080808
}

.navbar-inverse .navbar-nav > .disabled > a, .navbar-inverse .navbar-nav > .disabled > a:hover,
.navbar-inverse .navbar-nav > .disabled > a:focus {
    color: #444;
    background-color: transparent
}

.navbar-inverse .navbar-toggle {
    border-color: #333
}

.navbar-inverse .navbar-toggle:hover, .navbar-inverse .navbar-toggle:focus {
    background-color: #333
}

.navbar-inverse .navbar-toggle .icon-bar {
    background-color: #fff
}

.navbar-inverse .navbar-collapse, .navbar-inverse .navbar-form {
    border-color: #101010
}

.navbar-inverse .navbar-nav > .open > a, .navbar-inverse .navbar-nav > .open > a:hover,
.navbar-inverse .navbar-nav > .open > a:focus {
    background-color: #080808;
    color: #fff
}

@media (max-width: 767px) {
    .navbar-inverse .navbar-nav .open .dropdown-menu > .dropdown-header {
        border-color: #080808
    }

    .navbar-inverse .navbar-nav .open .dropdown-menu .divider {
        background-color: #080808
    }

    .navbar-inverse .navbar-nav .open .dropdown-menu > li > a {
        color: #aaa
    }

    .navbar-inverse .navbar-nav .open .dropdown-menu > li > a:hover, .navbar-inverse .navbar-nav .open .dropdown-menu > li > a:focus {
        color: #fff;
        background-color: transparent
    }

    .navbar-inverse .navbar-nav .open .dropdown-menu > .active > a, .navbar-inverse .navbar-nav .open .dropdown-menu > .active > a:hover,
    .navbar-inverse .navbar-nav .open .dropdown-menu > .active > a:focus {
        color: #fff;
        background-color: #080808
    }

    .navbar-inverse .navbar-nav .open .dropdown-menu > .disabled > a, .navbar-inverse .navbar-nav .open .dropdown-menu > .disabled > a:hover,
    .navbar-inverse .navbar-nav .open .dropdown-menu > .disabled > a:focus {
        color: #444;
        background-color: transparent
    }
}

.navbar-inverse .navbar-link {
    color: #aaa
}

.navbar-inverse .navbar-link:hover {
    color: #fff
}

.breadcrumb {
    padding: 8px 15px;
    margin-bottom: 20px;
    list-style: none;
    background-color: #f5f5f5;
    border-radius: 0px
}

.breadcrumb > li {
    display: inline-block
}

.breadcrumb > li + li:before {
    content: "/\00a0";
    padding: 0 5px;
    color: #ccc
}

.breadcrumb > .active {
    color: #aaa
}

.label {
    display: inline;
    padding: .2em .6em .3em;
    font-size: 75%;
    font-weight: bold;
    line-height: 1;
    color: #fff;
    text-align: center;
    white-space: nowrap;
    vertical-align: baseline;
    border-radius: .25em
}

.label[href]:hover, .label[href]:focus {
    color: #fff;
    text-decoration: none;
    cursor: pointer
}

.label:empty {
    display: none
}

.btn .label {
    position: relative;
    top: -1px
}

.label-default {
    background-color: #aaa
}

.label-default[href]:hover, .label-default[href]:focus {
    background-color: #919191
}

.label-primary {
    background-color: #0098de
}

.label-primary[href]:hover, .label-primary[href]:focus {
    background-color: #0075ab
}

.label-success {
    background-color: #26bd56
}

.label-success[href]:hover, .label-success[href]:focus {
    background-color: #1d9343
}

.label-info {
    background-color: #aba898
}

.label-info[href]:hover, .label-info[href]:focus {
    background-color: #94907c
}

.label-warning {
    background-color: #ffe696
}

.label-warning[href]:hover, .label-warning[href]:focus {
    background-color: #ffda63
}

.label-danger {
    background-color: #df0028
}

.label-danger[href]:hover, .label-danger[href]:focus {
    background-color: #ac001f
}

.alert {
    padding: 15px;
    margin-bottom: 20px;
    border: 1px solid transparent;
    border-radius: 0px
}

.alert h4 {
    margin-top: 0;
    color: inherit
}

.alert .alert-link {
    font-weight: bold
}

.alert > p, .alert > ul {
    margin-bottom: 0
}

.alert > p + p {
    margin-top: 5px
}

.alert-dismissable {
    padding-right: 35px
}

.alert-dismissable .close {
    position: relative;
    top: -2px;
    right: -21px;
    color: inherit
}

.alert-success {
    background-color: rgba(184, 255, 206, 0.4);
    border-color: rgba(133, 255, 171, 0.4);
    color: #26bd56
}

.alert-success hr {
    border-top-color: rgba(108, 255, 153, 0.4)
}

.alert-success .alert-link {
    color: #1d9343
}

.alert-info {
    background-color: rgba(217, 237, 247, 0.5);
    border-color: rgba(188, 223, 241, 0.5);
    color: #3a87ad
}

.alert-info hr {
    border-top-color: rgba(166, 213, 236, 0.5)
}

.alert-info .alert-link {
    color: #2d6987
}

.alert-warning {
    background-color: rgba(255, 230, 150, 0.5);
    border-color: rgba(255, 220, 109, 0.5);
    color: #fcc000
}

.alert-warning hr {
    border-top-color: rgba(255, 214, 84, 0.5)
}

.alert-warning .alert-link {
    color: #c99900
}

.alert-danger {
    background-color: rgba(242, 174, 188, 0.2);
    border-color: #b60021;
    color: #df0028
}

.alert-danger hr {
    border-top-color: #9d001c
}

.alert-danger .alert-link {
    color: #ac001f
}

.list-group {
    margin-bottom: 20px;
    padding-left: 0
}

.list-group-item {
    position: relative;
    display: block;
    padding: 10px 15px;
    margin-bottom: -1px;
    background-color: #fffbef;
    border: 1px solid #ddd
}

.list-group-item:first-child {
    border-top-right-radius: 0px;
    border-top-left-radius: 0px
}

.list-group-item:last-child {
    margin-bottom: 0;
    border-bottom-right-radius: 0px;
    border-bottom-left-radius: 0px
}

.list-group-item > .badge {
    float: right
}

.list-group-item > .badge + .badge {
    margin-right: 5px
}

a.list-group-item {
    color: #555
}

a.list-group-item .list-group-item-heading {
    color: #333
}

a.list-group-item:hover, a.list-group-item:focus {
    text-decoration: none;
    background-color: #fff
}

a.list-group-item.active, a.list-group-item.active:hover, a.list-group-item.active:focus {
    z-index: 2;
    color: #e38700;
    background-color: #ffe696;
    border-color: #ffe696
}

a.list-group-item.active .list-group-item-heading, a.list-group-item.active:hover .list-group-item-heading,
a.list-group-item.active:focus .list-group-item-heading {
    color: inherit
}

a.list-group-item.active .list-group-item-text, a.list-group-item.active:hover .list-group-item-text,
a.list-group-item.active:focus .list-group-item-text {
    color: #fff
}

.list-group-item-success {
    color: #26bd56;
    background-color: rgba(184, 255, 206, 0.4)
}

a.list-group-item-success {
    color: #26bd56
}

a.list-group-item-success .list-group-item-heading {
    color: inherit
}

a.list-group-item-success:hover, a.list-group-item-success:focus {
    color: #26bd56;
    background-color: rgba(159, 255, 188, 0.4)
}

a.list-group-item-success.active, a.list-group-item-success.active:hover,
a.list-group-item-success.active:focus {
    color: #fff;
    background-color: #26bd56;
    border-color: #26bd56
}

.list-group-item-info {
    color: #3a87ad;
    background-color: rgba(217, 237, 247, 0.5)
}

a.list-group-item-info {
    color: #3a87ad
}

a.list-group-item-info .list-group-item-heading {
    color: inherit
}

a.list-group-item-info:hover, a.list-group-item-info:focus {
    color: #3a87ad;
    background-color: rgba(196, 227, 243, 0.5)
}

a.list-group-item-info.active, a.list-group-item-info.active:hover,
a.list-group-item-info.active:focus {
    color: #fff;
    background-color: #3a87ad;
    border-color: #3a87ad
}

.list-group-item-warning {
    color: #fcc000;
    background-color: rgba(255, 230, 150, 0.5)
}

a.list-group-item-warning {
    color: #fcc000
}

a.list-group-item-warning .list-group-item-heading {
    color: inherit
}

a.list-group-item-warning:hover, a.list-group-item-warning:focus {
    color: #fcc000;
    background-color: rgba(255, 224, 125, 0.5)
}

a.list-group-item-warning.active, a.list-group-item-warning.active:hover,
a.list-group-item-warning.active:focus {
    color: #fff;
    background-color: #fcc000;
    border-color: #fcc000
}

.list-group-item-danger {
    color: #df0028;
    background-color: rgba(242, 174, 188, 0.2)
}

a.list-group-item-danger {
    color: #df0028
}

a.list-group-item-danger .list-group-item-heading {
    color: inherit
}

a.list-group-item-danger:hover, a.list-group-item-danger:focus {
    color: #df0028;
    background-color: rgba(238, 152, 170, 0.2)
}

a.list-group-item-danger.active, a.list-group-item-danger.active:hover,
a.list-group-item-danger.active:focus {
    color: #fff;
    background-color: #df0028;
    border-color: #df0028
}

.list-group-item-heading {
    margin-top: 0;
    margin-bottom: 5px
}

.list-group-item-text {
    margin-bottom: 0;
    line-height: 1.3
}

.panel {
    margin-bottom: 20px;
    background-color: #fff;
    border: 1px solid transparent;
    border-radius: 0px;
    -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
    box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05)
}

.panel-body {
    padding: 15px
}

.panel > .list-group {
    margin-bottom: 0
}

.panel > .list-group .list-group-item {
    border-width: 1px 0;
    border-radius: 0
}

.panel > .list-group .list-group-item:first-child {
    border-top: 0
}

.panel > .list-group .list-group-item:last-child {
    border-bottom: 0
}

.panel > .list-group:first-child .list-group-item:first-child {
    border-top-right-radius: -1px;
    border-top-left-radius: -1px
}

.panel > .list-group:last-child .list-group-item:last-child {
    border-bottom-right-radius: -1px;
    border-bottom-left-radius: -1px
}

.panel-heading + .list-group .list-group-item:first-child {
    border-top-width: 0
}

.panel > .table, .panel > .table-responsive > .table {
    margin-bottom: 0
}

.panel > .table:first-child > thead:first-child > tr:first-child td:first-child,
.panel > .table-responsive:first-child > .table:first-child > thead:first-child > tr:first-child td:first-child,
.panel > .table:first-child > tbody:first-child > tr:first-child td:first-child,
.panel > .table-responsive:first-child > .table:first-child > tbody:first-child > tr:first-child td:first-child,
.panel > .table:first-child > thead:first-child > tr:first-child th:first-child,
.panel > .table-responsive:first-child > .table:first-child > thead:first-child > tr:first-child th:first-child,
.panel > .table:first-child > tbody:first-child > tr:first-child th:first-child,
.panel > .table-responsive:first-child > .table:first-child > tbody:first-child > tr:first-child th:first-child {
    border-top-left-radius: -1px
}

.panel > .table:first-child > thead:first-child > tr:first-child td:last-child,
.panel > .table-responsive:first-child > .table:first-child > thead:first-child > tr:first-child td:last-child,
.panel > .table:first-child > tbody:first-child > tr:first-child td:last-child,
.panel > .table-responsive:first-child > .table:first-child > tbody:first-child > tr:first-child td:last-child,
.panel > .table:first-child > thead:first-child > tr:first-child th:last-child,
.panel > .table-responsive:first-child > .table:first-child > thead:first-child > tr:first-child th:last-child,
.panel > .table:first-child > tbody:first-child > tr:first-child th:last-child,
.panel > .table-responsive:first-child > .table:first-child > tbody:first-child > tr:first-child th:last-child {
    border-top-right-radius: -1px
}

.panel > .table:last-child > tbody:last-child > tr:last-child td:first-child,
.panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child td:first-child,
.panel > .table:last-child > tfoot:last-child > tr:last-child td:first-child,
.panel > .table-responsive:last-child > .table:last-child > tfoot:last-child > tr:last-child td:first-child,
.panel > .table:last-child > tbody:last-child > tr:last-child th:first-child,
.panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child th:first-child,
.panel > .table:last-child > tfoot:last-child > tr:last-child th:first-child,
.panel > .table-responsive:last-child > .table:last-child > tfoot:last-child > tr:last-child th:first-child {
    border-bottom-left-radius: -1px
}

.panel > .table:last-child > tbody:last-child > tr:last-child td:last-child,
.panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child td:last-child,
.panel > .table:last-child > tfoot:last-child > tr:last-child td:last-child,
.panel > .table-responsive:last-child > .table:last-child > tfoot:last-child > tr:last-child td:last-child,
.panel > .table:last-child > tbody:last-child > tr:last-child th:last-child,
.panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child th:last-child,
.panel > .table:last-child > tfoot:last-child > tr:last-child th:last-child,
.panel > .table-responsive:last-child > .table:last-child > tfoot:last-child > tr:last-child th:last-child {
    border-bottom-right-radius: -1px
}

.panel > .panel-body + .table, .panel > .panel-body + .table-responsive {
    border-top: 1px solid #ddd
}

.panel > .table > tbody:first-child > tr:first-child th, .panel > .table > tbody:first-child > tr:first-child td {
    border-top: 0
}

.panel > .table-bordered, .panel > .table-responsive > .table-bordered {
    border: 0
}

.panel > .table-bordered > thead > tr > th:first-child, .panel > .table-responsive > .table-bordered > thead > tr > th:first-child,
.panel > .table-bordered > tbody > tr > th:first-child, .panel > .table-responsive > .table-bordered > tbody > tr > th:first-child,
.panel > .table-bordered > tfoot > tr > th:first-child, .panel > .table-responsive > .table-bordered > tfoot > tr > th:first-child,
.panel > .table-bordered > thead > tr > td:first-child, .panel > .table-responsive > .table-bordered > thead > tr > td:first-child,
.panel > .table-bordered > tbody > tr > td:first-child, .panel > .table-responsive > .table-bordered > tbody > tr > td:first-child,
.panel > .table-bordered > tfoot > tr > td:first-child, .panel > .table-responsive > .table-bordered > tfoot > tr > td:first-child {
    border-left: 0
}

.panel > .table-bordered > thead > tr > th:last-child, .panel > .table-responsive > .table-bordered > thead > tr > th:last-child,
.panel > .table-bordered > tbody > tr > th:last-child, .panel > .table-responsive > .table-bordered > tbody > tr > th:last-child,
.panel > .table-bordered > tfoot > tr > th:last-child, .panel > .table-responsive > .table-bordered > tfoot > tr > th:last-child,
.panel > .table-bordered > thead > tr > td:last-child, .panel > .table-responsive > .table-bordered > thead > tr > td:last-child,
.panel > .table-bordered > tbody > tr > td:last-child, .panel > .table-responsive > .table-bordered > tbody > tr > td:last-child,
.panel > .table-bordered > tfoot > tr > td:last-child, .panel > .table-responsive > .table-bordered > tfoot > tr > td:last-child {
    border-right: 0
}

.panel > .table-bordered > thead > tr:first-child > th, .panel > .table-responsive > .table-bordered > thead > tr:first-child > th,
.panel > .table-bordered > tbody > tr:first-child > th, .panel > .table-responsive > .table-bordered > tbody > tr:first-child > th,
.panel > .table-bordered > tfoot > tr:first-child > th, .panel > .table-responsive > .table-bordered > tfoot > tr:first-child > th,
.panel > .table-bordered > thead > tr:first-child > td, .panel > .table-responsive > .table-bordered > thead > tr:first-child > td,
.panel > .table-bordered > tbody > tr:first-child > td, .panel > .table-responsive > .table-bordered > tbody > tr:first-child > td,
.panel > .table-bordered > tfoot > tr:first-child > td, .panel > .table-responsive > .table-bordered > tfoot > tr:first-child > td {
    border-top: 0
}

.panel > .table-bordered > thead > tr:last-child > th, .panel > .table-responsive > .table-bordered > thead > tr:last-child > th,
.panel > .table-bordered > tbody > tr:last-child > th, .panel > .table-responsive > .table-bordered > tbody > tr:last-child > th,
.panel > .table-bordered > tfoot > tr:last-child > th, .panel > .table-responsive > .table-bordered > tfoot > tr:last-child > th,
.panel > .table-bordered > thead > tr:last-child > td, .panel > .table-responsive > .table-bordered > thead > tr:last-child > td,
.panel > .table-bordered > tbody > tr:last-child > td, .panel > .table-responsive > .table-bordered > tbody > tr:last-child > td,
.panel > .table-bordered > tfoot > tr:last-child > td, .panel > .table-responsive > .table-bordered > tfoot > tr:last-child > td {
    border-bottom: 0
}

.panel > .table-responsive {
    border: 0;
    margin-bottom: 0
}

.panel-heading {
    padding: 10px 15px;
    border-bottom: 1px solid transparent;
    border-top-right-radius: -1px;
    border-top-left-radius: -1px
}

.panel-heading > .dropdown .dropdown-toggle {
    color: inherit
}

.panel-title {
    margin-top: 0;
    margin-bottom: 0;
    font-size: 16px;
    color: inherit
}

.panel-title > a {
    color: inherit
}

.panel-footer {
    padding: 10px 15px;
    background-color: #f5f5f5;
    border-top: 1px solid #ddd;
    border-bottom-right-radius: -1px;
    border-bottom-left-radius: -1px
}

.panel-group {
    margin-bottom: 20px
}

.panel-group .panel {
    margin-bottom: 0;
    border-radius: 0px;
    overflow: hidden
}

.panel-group .panel + .panel {
    margin-top: 5px
}

.panel-group .panel-heading {
    border-bottom: 0
}

.panel-group .panel-heading + .panel-collapse .panel-body {
    border-top: 1px solid #ddd
}

.panel-group .panel-footer {
    border-top: 0
}

.panel-group .panel-footer + .panel-collapse .panel-body {
    border-bottom: 1px solid #ddd
}

.panel-default {
    border-color: #ddd
}

.panel-default > .panel-heading {
    color: #555;
    background-color: #f5f5f5;
    border-color: #ddd
}

.panel-default > .panel-heading + .panel-collapse .panel-body {
    border-top-color: #ddd
}

.panel-default > .panel-footer + .panel-collapse .panel-body {
    border-bottom-color: #ddd
}

.panel-primary {
    border-color: #0098de
}

.panel-primary > .panel-heading {
    color: #fff;
    background-color: #0098de;
    border-color: #0098de
}

.panel-primary > .panel-heading + .panel-collapse .panel-body {
    border-top-color: #0098de
}

.panel-primary > .panel-footer + .panel-collapse .panel-body {
    border-bottom-color: #0098de
}

.panel-success {
    border-color: rgba(133, 255, 171, 0.4)
}

.panel-success > .panel-heading {
    color: #26bd56;
    background-color: rgba(184, 255, 206, 0.4);
    border-color: rgba(133, 255, 171, 0.4)
}

.panel-success > .panel-heading + .panel-collapse .panel-body {
    border-top-color: rgba(133, 255, 171, 0.4)
}

.panel-success > .panel-footer + .panel-collapse .panel-body {
    border-bottom-color: rgba(133, 255, 171, 0.4)
}

.panel-info {
    border-color: rgba(188, 223, 241, 0.5)
}

.panel-info > .panel-heading {
    color: #3a87ad;
    background-color: rgba(217, 237, 247, 0.5);
    border-color: rgba(188, 223, 241, 0.5)
}

.panel-info > .panel-heading + .panel-collapse .panel-body {
    border-top-color: rgba(188, 223, 241, 0.5)
}

.panel-info > .panel-footer + .panel-collapse .panel-body {
    border-bottom-color: rgba(188, 223, 241, 0.5)
}

.panel-warning {
    border-color: rgba(255, 220, 109, 0.5)
}

.panel-warning > .panel-heading {
    color: #fcc000;
    background-color: rgba(255, 230, 150, 0.5);
    border-color: rgba(255, 220, 109, 0.5)
}

.panel-warning > .panel-heading + .panel-collapse .panel-body {
    border-top-color: rgba(255, 220, 109, 0.5)
}

.panel-warning > .panel-footer + .panel-collapse .panel-body {
    border-bottom-color: rgba(255, 220, 109, 0.5)
}

.panel-danger {
    border-color: #b60021
}

.panel-danger > .panel-heading {
    color: #df0028;
    background-color: rgba(242, 174, 188, 0.2);
    border-color: #b60021
}

.panel-danger > .panel-heading + .panel-collapse .panel-body {
    border-top-color: #b60021
}

.panel-danger > .panel-footer + .panel-collapse .panel-body {
    border-bottom-color: #b60021
}

.well {
    min-height: 20px;
    padding: 19px;
    margin-bottom: 20px;
    background-color: #f5f5f5;
    border: 1px solid #e3e3e3;
    border-radius: 0px;
    -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.05);
    box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.05)
}

.well blockquote {
    border-color: #ddd;
    border-color: rgba(0, 0, 0, 0.15)
}

.well-lg {
    padding: 24px;
    border-radius: 4px
}

.well-sm {
    padding: 9px;
    border-radius: 2px
}

.close {
    float: right;
    font-size: 21px;
    font-weight: bold;
    line-height: 1;
    color: #000;
    text-shadow: 0 1px 0 #fff;
    opacity: .2;
    filter: alpha(opacity=20)
}

.close:hover, .close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
    opacity: .5;
    filter: alpha(opacity=50)
}

button.close {
    padding: 0;
    cursor: pointer;
    background: transparent;
    border: 0;
    -webkit-appearance: none
}

.modal-open {
    overflow: hidden
}

.modal {
    display: none;
    overflow: auto;
    overflow-y: scroll;
    position: fixed;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 1050;
    -webkit-overflow-scrolling: touch;
    outline: 0
}

.modal.fade .modal-dialog {
    -webkit-transform: translate(0, -25%);
    -ms-transform: translate(0, -25%);
    transform: translate(0, -25%);
    -webkit-transition: -webkit-transform 0.3s ease-out;
    -moz-transition: -moz-transform 0.3s ease-out;
    -o-transition: -o-transform 0.3s ease-out;
    transition: transform 0.3s ease-out
}

.modal.in .modal-dialog {
    -webkit-transform: translate(0, 0);
    -ms-transform: translate(0, 0);
    transform: translate(0, 0)
}

.modal-dialog {
    position: relative;
    width: auto;
    margin: 10px
}

.modal-content {
    position: relative;
    background-color: #fff8e2;
    border: 1px solid #999;
    border: 1px solid rgba(0, 0, 0, 0.2);
    border-radius: 4px;
    -webkit-box-shadow: 0 3px 9px rgba(0, 0, 0, 0.5);
    box-shadow: 0 3px 9px rgba(0, 0, 0, 0.5);
    background-clip: padding-box;
    outline: none
}

.modal-backdrop {
    position: fixed;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 1040;
    background-color: #ffe696
}

.modal-backdrop.fade {
    opacity: 0;
    filter: alpha(opacity=0)
}

.modal-backdrop.in {
    opacity: .7;
    filter: alpha(opacity=70)
}

.modal-header {
    padding: 15px;
    border-bottom: 1px solid #e5e5e5;
    min-height: 16.428571429px
}

.modal-header .close {
    margin-top: -2px
}

.modal-title {
    margin: 0;
    line-height: 1.428571429
}

.modal-body {
    position: relative;
    padding: 20px
}

.modal-footer {
    margin-top: 15px;
    padding: 19px 20px 20px;
    text-align: right;
    border-top: 1px solid #e5e5e5
}

.modal-footer .btn + .btn {
    margin-left: 5px;
    margin-bottom: 0
}

.modal-footer .btn-group .btn + .btn {
    margin-left: -1px
}

.modal-footer .btn-block + .btn-block {
    margin-left: 0
}

@media (min-width: 768px) {
    .modal-dialog {
        width: 600px;
        margin: 30px auto
    }

    .modal-content {
        -webkit-box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5);
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5)
    }

    .modal-sm {
        width: 300px
    }

    .modal-lg {
        width: 900px
    }
}

.popover {
    position: absolute;
    top: 0;
    left: 0;
    z-index: 1010;
    display: none;
    max-width: 276px;
    padding: 1px;
    text-align: left;
    background-color: #fffbef;
    background-clip: padding-box;
    border: 1px solid #ccc;
    border: 1px solid rgba(0, 0, 0, 0.2);
    border-radius: 4px;
    -webkit-box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
    white-space: normal
}

.popover.top {
    margin-top: -10px
}

.popover.right {
    margin-left: 10px
}

.popover.bottom {
    margin-top: 10px
}

.popover.left {
    margin-left: -10px
}

.popover-title {
    margin: 0;
    padding: 8px 14px;
    font-size: 14px;
    font-weight: normal;
    line-height: 18px;
    background-color: #fff7df;
    border-bottom: 1px solid #fff1c6;
    border-radius: 5px 5px 0 0
}

.popover-content {
    padding: 9px 14px
}

.popover .arrow, .popover .arrow:after {
    position: absolute;
    display: block;
    width: 0;
    height: 0;
    border-color: transparent;
    border-style: solid
}

.popover .arrow {
    border-width: 11px
}

.popover .arrow:after {
    border-width: 10px;
    content: ""
}

.popover.top .arrow {
    left: 50%;
    margin-left: -11px;
    border-bottom-width: 0;
    border-top-color: #999;
    border-top-color: rgba(0, 0, 0, 0.25);
    bottom: -11px
}

.popover.top .arrow:after {
    content: " ";
    bottom: 1px;
    margin-left: -10px;
    border-bottom-width: 0;
    border-top-color: #fffbef
}

.popover.right .arrow {
    top: 50%;
    left: -11px;
    margin-top: -11px;
    border-left-width: 0;
    border-right-color: #999;
    border-right-color: rgba(0, 0, 0, 0.25)
}

.popover.right .arrow:after {
    content: " ";
    left: 1px;
    bottom: -10px;
    border-left-width: 0;
    border-right-color: #fffbef
}

.popover.bottom .arrow {
    left: 50%;
    margin-left: -11px;
    border-top-width: 0;
    border-bottom-color: #999;
    border-bottom-color: rgba(0, 0, 0, 0.25);
    top: -11px
}

.popover.bottom .arrow:after {
    content: " ";
    top: 1px;
    margin-left: -10px;
    border-top-width: 0;
    border-bottom-color: #fffbef
}

.popover.left .arrow {
    top: 50%;
    right: -11px;
    margin-top: -11px;
    border-right-width: 0;
    border-left-color: #999;
    border-left-color: rgba(0, 0, 0, 0.25)
}

.popover.left .arrow:after {
    content: " ";
    right: 1px;
    border-right-width: 0;
    border-left-color: #fffbef;
    bottom: -10px
}

.clearfix:before, .clearfix:after, .container:before, .container:after,
.container-fluid:before, .container-fluid:after, .row:before, .row:after,
.form-horizontal .form-group:before, .form-horizontal .form-group:after,
.btn-toolbar:before, .btn-toolbar:after, .btn-group-vertical > .btn-group:before,
.btn-group-vertical > .btn-group:after, .nav:before, .nav:after, .navbar:before,
.navbar:after, .navbar-header:before, .navbar-header:after, .navbar-collapse:before,
.navbar-collapse:after, .panel-body:before, .panel-body:after, .modal-footer:before,
.modal-footer:after {
    content: " ";
    display: table
}

.clearfix:after, .container:after, .container-fluid:after, .row:after,
.form-horizontal .form-group:after, .btn-toolbar:after, .btn-group-vertical > .btn-group:after,
.nav:after, .navbar:after, .navbar-header:after, .navbar-collapse:after,
.panel-body:after, .modal-footer:after {
    clear: both
}

.center-block {
    display: block;
    margin-left: auto;
    margin-right: auto
}

.pull-right {
    float: right !important
}

.pull-left {
    float: left !important
}

.hide {
    display: none !important
}

.show {
    display: block !important
}

.invisible {
    visibility: hidden
}

.text-hide {
    font: 0 / 0 a;
    color: transparent;
    text-shadow: none;
    background-color: transparent;
    border: 0
}

.hidden {
    display: none !important;
    visibility: hidden !important
}

.affix {
    position: fixed
}

@-ms-viewport {
    width: device-width
}

.visible-xs, tr.visible-xs, th.visible-xs, td.visible-xs {
    display: none !important
}

@media (max-width: 767px) {
    .visible-xs {
        display: block !important
    }

    table.visible-xs {
        display: table
    }

    tr.visible-xs {
        display: table-row !important
    }

    th.visible-xs, td.visible-xs {
        display: table-cell !important
    }
}

.visible-sm, tr.visible-sm, th.visible-sm, td.visible-sm {
    display: none !important
}

@media (min-width: 768px) and (max-width: 991px) {
    .visible-sm {
        display: block !important
    }

    table.visible-sm {
        display: table
    }

    tr.visible-sm {
        display: table-row !important
    }

    th.visible-sm, td.visible-sm {
        display: table-cell !important
    }
}

.visible-md, tr.visible-md, th.visible-md, td.visible-md {
    display: none !important
}

@media (min-width: 992px) and (max-width: 1199px) {
    .visible-md {
        display: block !important
    }

    table.visible-md {
        display: table
    }

    tr.visible-md {
        display: table-row !important
    }

    th.visible-md, td.visible-md {
        display: table-cell !important
    }
}

.visible-lg, tr.visible-lg, th.visible-lg, td.visible-lg {
    display: none !important
}

@media (min-width: 1200px) {
    .visible-lg {
        display: block !important
    }

    table.visible-lg {
        display: table
    }

    tr.visible-lg {
        display: table-row !important
    }

    th.visible-lg, td.visible-lg {
        display: table-cell !important
    }
}

@media (max-width: 767px) {
    .hidden-xs, tr.hidden-xs, th.hidden-xs, td.hidden-xs {
        display: none !important
    }
}

@media (min-width: 768px) and (max-width: 991px) {
    .hidden-sm, tr.hidden-sm, th.hidden-sm, td.hidden-sm {
        display: none !important
    }
}

@media (min-width: 992px) and (max-width: 1199px) {
    .hidden-md, tr.hidden-md, th.hidden-md, td.hidden-md {
        display: none !important
    }
}

@media (min-width: 1200px) {
    .hidden-lg, tr.hidden-lg, th.hidden-lg, td.hidden-lg {
        display: none !important
    }
}

.visible-print, tr.visible-print, th.visible-print, td.visible-print {
    display: none !important
}

@media print {
    .visible-print {
        display: block !important
    }

    table.visible-print {
        display: table
    }

    tr.visible-print {
        display: table-row !important
    }

    th.visible-print, td.visible-print {
        display: table-cell !important
    }
}

@media print {
    .hidden-print, tr.hidden-print, th.hidden-print, td.hidden-print {
        display: none !important
    }
}

.btn-group-vertical.my {
    display: block
}

.btn-group-vertical.my > .btn-group > input {
    display: block;
    float: none;
    width: 100%;
    max-width: 100%
}

.btn-group-vertical.my > input:not(:first-child):not(:last-child) {
    border-radius: 0
}

.btn-group-vertical.my > input:first-child:not(:last-child) {
    border-top-right-radius: 0px;
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0
}

.btn-group-vertical.my > input:last-child:not(:first-child) {
    border-bottom-left-radius: 0px;
    border-top-right-radius: 0;
    border-top-left-radius: 0
}

.btn-group-vertical.my > .btn-group:not(:first-child):not(:last-child) > input {
    border-radius: 0
}

.btn-group-vertical.my > .btn-group:first-child:not(:last-child) > input:last-child {
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0
}

.btn-group-vertical.my > .btn-group:last-child:not(:first-child) > input:first-child {
    border-top-right-radius: 0;
    border-top-left-radius: 0
}

.quantity {
    position: relative
}

.quantity input[type=number]::-webkit-inner-spin-button, .quantity input[type=number]::-webkit-outer-spin-button {
    -webkit-appearance: none;
    margin: 0
}

.quantity input[type=number] {
    -moz-appearance: textfield
}

.quantity input {
    width: 60px;
    height: 50px;
    float: left;
    display: block;
    margin: 0;
    padding-right: 32px;
    padding-left: 2px;
    text-align: center
}

.quantity .quantity-nav {
    float: left;
    position: relative;
    height: 50px
}

.quantity .quantity-button {
    width: 30px;
    cursor: pointer;
    position: relative;
    text-align: center;
    border-left: 1px solid #ddd;
    color: #888;
    font-size: 8px;
    padding: 0;
    -webkit-transform: translateX(-100%);
    transform: translateX(-100%);
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    -o-user-select: none;
    user-select: none
}

.quantity .quantity-button.quantity-up {
    position: absolute;
    height: 50%;
    top: 0;
    border-bottom: 1px solid #ddd
}

.quantity .quantity-button.quantity-down {
    position: absolute;
    bottom: 0px;
    height: 50%
}

.datepicker {
    border-radius: 0px;
    direction: ltr
}

.datepicker-inline {
    width: 220px
}

.datepicker-rtl {
    direction: rtl
}

.datepicker-rtl.dropdown-menu {
    left: auto
}

.datepicker-rtl table tr td span {
    float: right
}

.datepicker-dropdown {
    top: 0;
    left: 0;
    padding: 4px
}

.datepicker-dropdown:before {
    content: '';
    display: inline-block;
    border-left: 7px solid transparent;
    border-right: 7px solid transparent;
    border-bottom: 7px solid rgba(0, 0, 0, 0.15);
    border-top: 0;
    border-bottom-color: rgba(0, 0, 0, 0.2);
    position: absolute
}

.datepicker-dropdown:after {
    content: '';
    display: inline-block;
    border-left: 6px solid transparent;
    border-right: 6px solid transparent;
    border-bottom: 6px solid #fffbef;
    border-top: 0;
    position: absolute
}

.datepicker-dropdown.datepicker-orient-left:before {
    left: 6px
}

.datepicker-dropdown.datepicker-orient-left:after {
    left: 7px
}

.datepicker-dropdown.datepicker-orient-right:before {
    right: 6px
}

.datepicker-dropdown.datepicker-orient-right:after {
    right: 7px
}

.datepicker-dropdown.datepicker-orient-bottom:before {
    top: -7px
}

.datepicker-dropdown.datepicker-orient-bottom:after {
    top: -6px
}

.datepicker-dropdown.datepicker-orient-top:before {
    bottom: -7px;
    border-bottom: 0;
    border-top: 7px solid rgba(0, 0, 0, 0.15)
}

.datepicker-dropdown.datepicker-orient-top:after {
    bottom: -6px;
    border-bottom: 0;
    border-top: 6px solid #fffbef
}

.datepicker table {
    margin: 0;
    -webkit-touch-callout: none;
    -webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none
}

.datepicker table tr td, .datepicker table tr th {
    text-align: center;
    width: 30px;
    height: 30px;
    border-radius: 0;
    border: none
}

.table-striped .datepicker table tr td, .table-striped .datepicker table tr th {
    background-color: transparent
}

.datepicker table tr td.old, .datepicker table tr td.new {
    color: #ffc817
}

.datepicker table tr td.day:hover, .datepicker table tr td.focused {
    background: #fff0bf;
    box-shadow: inset 0px 0px 10px 0px #ffd03a;
    cursor: pointer
}

.datepicker table tr td.disabled, .datepicker table tr td.disabled:hover {
    background: none;
    box-shadow: none;
    color: #d8d8d8;
    cursor: default
}

.datepicker table tr td.highlighted {
    color: #000;
    background-color: rgba(217, 237, 247, 0.5);
    border-color: rgba(133, 197, 229, 0.5);
    border-radius: 0
}

.datepicker table tr td.highlighted:hover, .datepicker table tr td.highlighted:focus,
.datepicker table tr td.highlighted:active, .datepicker table tr td.highlighted.active,
.open .dropdown-toggle.datepicker table tr td.highlighted {
    color: #000;
    background-color: rgba(183, 221, 240, 0.5);
    border-color: rgba(82, 173, 219, 0.5)
}

.datepicker table tr td.highlighted:active, .datepicker table tr td.highlighted.active,
.open .dropdown-toggle.datepicker table tr td.highlighted {
    background-image: none
}

.datepicker table tr td.highlighted.disabled, .datepicker table tr td.highlighted[disabled],
fieldset[disabled] .datepicker table tr td.highlighted, .datepicker table tr td.highlighted.disabled:hover,
.datepicker table tr td.highlighted[disabled]:hover, fieldset[disabled] .datepicker table tr td.highlighted:hover,
.datepicker table tr td.highlighted.disabled:focus, .datepicker table tr td.highlighted[disabled]:focus,
fieldset[disabled] .datepicker table tr td.highlighted:focus, .datepicker table tr td.highlighted.disabled:active,
.datepicker table tr td.highlighted[disabled]:active, fieldset[disabled] .datepicker table tr td.highlighted:active,
.datepicker table tr td.highlighted.disabled.active, .datepicker table tr td.highlighted[disabled].active,
fieldset[disabled] .datepicker table tr td.highlighted.active {
    background-color: rgba(217, 237, 247, 0.5);
    border-color: rgba(133, 197, 229, 0.5)
}

.datepicker table tr td.highlighted .badge {
    color: rgba(217, 237, 247, 0.5);
    background-color: #000
}

.datepicker table tr td.highlighted.focused {
    background: rgba(175, 217, 238, 0.5)
}

.datepicker table tr td.highlighted.disabled, .datepicker table tr td.highlighted.disabled:active {
    background: rgba(217, 237, 247, 0.5);
    color: #aaa
}

.datepicker table tr td.today {
    color: #000;
    background-color: #eee;
    border-color: #dadada;
    font-style: italic;
    border: 1px solid #c8c8c8
}

.datepicker table tr td.today:hover, .datepicker table tr td.today:focus,
.datepicker table tr td.today:active, .datepicker table tr td.today.active,
.open .dropdown-toggle.datepicker table tr td.today {
    color: #000;
    background-color: #dadada;
    border-color: #bbb
}

.datepicker table tr td.today:active, .datepicker table tr td.today.active,
.open .dropdown-toggle.datepicker table tr td.today {
    background-image: none
}

.datepicker table tr td.today.disabled, .datepicker table tr td.today[disabled],
fieldset[disabled] .datepicker table tr td.today, .datepicker table tr td.today.disabled:hover,
.datepicker table tr td.today[disabled]:hover, fieldset[disabled] .datepicker table tr td.today:hover,
.datepicker table tr td.today.disabled:focus, .datepicker table tr td.today[disabled]:focus,
fieldset[disabled] .datepicker table tr td.today:focus, .datepicker table tr td.today.disabled:active,
.datepicker table tr td.today[disabled]:active, fieldset[disabled] .datepicker table tr td.today:active,
.datepicker table tr td.today.disabled.active, .datepicker table tr td.today[disabled].active,
fieldset[disabled] .datepicker table tr td.today.active {
    background-color: #eee;
    border-color: #dadada
}

.datepicker table tr td.today .badge {
    color: #eee;
    background-color: #000
}

.datepicker table tr td.today.focused {
    background: #eee
}

.datepicker table tr td.today.disabled, .datepicker table tr td.today.disabled:active {
    background: transparent;
    color: #aaa
}

.datepicker table tr td.range {
    color: #000;
    background-color: #eee;
    border-color: #bbb;
    border-radius: 0
}

.datepicker table tr td.range:hover, .datepicker table tr td.range:focus,
.datepicker table tr td.range:active, .datepicker table tr td.range.active,
.open .dropdown-toggle.datepicker table tr td.range {
    color: #000;
    background-color: #dadada;
    border-color: #9c9c9c
}

.datepicker table tr td.range:active, .datepicker table tr td.range.active,
.open .dropdown-toggle.datepicker table tr td.range {
    background-image: none
}

.datepicker table tr td.range.disabled, .datepicker table tr td.range[disabled],
fieldset[disabled] .datepicker table tr td.range, .datepicker table tr td.range.disabled:hover,
.datepicker table tr td.range[disabled]:hover, fieldset[disabled] .datepicker table tr td.range:hover,
.datepicker table tr td.range.disabled:focus, .datepicker table tr td.range[disabled]:focus,
fieldset[disabled] .datepicker table tr td.range:focus, .datepicker table tr td.range.disabled:active,
.datepicker table tr td.range[disabled]:active, fieldset[disabled] .datepicker table tr td.range:active,
.datepicker table tr td.range.disabled.active, .datepicker table tr td.range[disabled].active,
fieldset[disabled] .datepicker table tr td.range.active {
    background-color: #eee;
    border-color: #bbb
}

.datepicker table tr td.range .badge {
    color: #eee;
    background-color: #000
}

.datepicker table tr td.range.focused {
    background: #d5d5d5
}

.datepicker table tr td.range.disabled, .datepicker table tr td.range.disabled:active {
    background: #eee;
    color: #aaa
}

.datepicker table tr td.range.highlighted {
    color: #000;
    background-color: rgba(233, 238, 240, 0.75);
    border-color: rgba(171, 190, 200, 0.75)
}

.datepicker table tr td.range.highlighted:hover, .datepicker table tr td.range.highlighted:focus,
.datepicker table tr td.range.highlighted:active, .datepicker table tr td.range.highlighted.active,
.open .dropdown-toggle.datepicker table tr td.range.highlighted {
    color: #000;
    background-color: rgba(208, 219, 224, 0.75);
    border-color: rgba(135, 162, 175, 0.75)
}

.datepicker table tr td.range.highlighted:active, .datepicker table tr td.range.highlighted.active,
.open .dropdown-toggle.datepicker table tr td.range.highlighted {
    background-image: none
}

.datepicker table tr td.range.highlighted.disabled, .datepicker table tr td.range.highlighted[disabled],
fieldset[disabled] .datepicker table tr td.range.highlighted, .datepicker table tr td.range.highlighted.disabled:hover,
.datepicker table tr td.range.highlighted[disabled]:hover, fieldset[disabled] .datepicker table tr td.range.highlighted:hover,
.datepicker table tr td.range.highlighted.disabled:focus, .datepicker table tr td.range.highlighted[disabled]:focus,
fieldset[disabled] .datepicker table tr td.range.highlighted:focus,
.datepicker table tr td.range.highlighted.disabled:active, .datepicker table tr td.range.highlighted[disabled]:active,
fieldset[disabled] .datepicker table tr td.range.highlighted:active,
.datepicker table tr td.range.highlighted.disabled.active, .datepicker table tr td.range.highlighted[disabled].active,
fieldset[disabled] .datepicker table tr td.range.highlighted.active {
    background-color: rgba(233, 238, 240, 0.75);
    border-color: rgba(171, 190, 200, 0.75)
}

.datepicker table tr td.range.highlighted .badge {
    color: rgba(233, 238, 240, 0.75);
    background-color: #000
}

.datepicker table tr td.range.highlighted.focused {
    background: rgba(202, 214, 220, 0.75)
}

.datepicker table tr td.range.highlighted.disabled, .datepicker table tr td.range.highlighted.disabled:active {
    background: rgba(233, 238, 240, 0.75);
    color: #aaa
}

.datepicker table tr td.range.today {
    color: #000;
    background-color: #f7ca77;
    border-color: #f1a417
}

.datepicker table tr td.range.today:hover, .datepicker table tr td.range.today:focus,
.datepicker table tr td.range.today:active, .datepicker table tr td.range.today.active,
.open .dropdown-toggle.datepicker table tr td.range.today {
    color: #000;
    background-color: #f4ba51;
    border-color: #be7f0c
}

.datepicker table tr td.range.today:active, .datepicker table tr td.range.today.active,
.open .dropdown-toggle.datepicker table tr td.range.today {
    background-image: none
}

.datepicker table tr td.range.today.disabled, .datepicker table tr td.range.today[disabled],
fieldset[disabled] .datepicker table tr td.range.today, .datepicker table tr td.range.today.disabled:hover,
.datepicker table tr td.range.today[disabled]:hover, fieldset[disabled] .datepicker table tr td.range.today:hover,
.datepicker table tr td.range.today.disabled:focus, .datepicker table tr td.range.today[disabled]:focus,
fieldset[disabled] .datepicker table tr td.range.today:focus, .datepicker table tr td.range.today.disabled:active,
.datepicker table tr td.range.today[disabled]:active, fieldset[disabled] .datepicker table tr td.range.today:active,
.datepicker table tr td.range.today.disabled.active, .datepicker table tr td.range.today[disabled].active,
fieldset[disabled] .datepicker table tr td.range.today.active {
    background-color: #f7ca77;
    border-color: #f1a417
}

.datepicker table tr td.range.today .badge {
    color: #f7ca77;
    background-color: #000
}

.datepicker table tr td.range.today.disabled, .datepicker table tr td.range.today.disabled:active {
    background: #f7ca77;
    color: #aaa
}

.datepicker table tr td.selected, .datepicker table tr td.selected.highlighted {
    color: #fff;
    background-color: #aaa;
    border-color: #777
}

.datepicker table tr td.selected:hover, .datepicker table tr td.selected.highlighted:hover,
.datepicker table tr td.selected:focus, .datepicker table tr td.selected.highlighted:focus,
.datepicker table tr td.selected:active, .datepicker table tr td.selected.highlighted:active,
.datepicker table tr td.selected.active, .datepicker table tr td.selected.highlighted.active,
.open .dropdown-toggle.datepicker table tr td.selected, .open .dropdown-toggle.datepicker table tr td.selected.highlighted {
    color: #fff;
    background-color: #969696;
    border-color: #585858
}

.datepicker table tr td.selected:active, .datepicker table tr td.selected.highlighted:active,
.datepicker table tr td.selected.active, .datepicker table tr td.selected.highlighted.active,
.open .dropdown-toggle.datepicker table tr td.selected, .open .dropdown-toggle.datepicker table tr td.selected.highlighted {
    background-image: none
}

.datepicker table tr td.selected.disabled, .datepicker table tr td.selected.highlighted.disabled,
.datepicker table tr td.selected[disabled], .datepicker table tr td.selected.highlighted[disabled],
fieldset[disabled] .datepicker table tr td.selected, fieldset[disabled] .datepicker table tr td.selected.highlighted,
.datepicker table tr td.selected.disabled:hover, .datepicker table tr td.selected.highlighted.disabled:hover,
.datepicker table tr td.selected[disabled]:hover, .datepicker table tr td.selected.highlighted[disabled]:hover,
fieldset[disabled] .datepicker table tr td.selected:hover, fieldset[disabled] .datepicker table tr td.selected.highlighted:hover,
.datepicker table tr td.selected.disabled:focus, .datepicker table tr td.selected.highlighted.disabled:focus,
.datepicker table tr td.selected[disabled]:focus, .datepicker table tr td.selected.highlighted[disabled]:focus,
fieldset[disabled] .datepicker table tr td.selected:focus, fieldset[disabled] .datepicker table tr td.selected.highlighted:focus,
.datepicker table tr td.selected.disabled:active, .datepicker table tr td.selected.highlighted.disabled:active,
.datepicker table tr td.selected[disabled]:active, .datepicker table tr td.selected.highlighted[disabled]:active,
fieldset[disabled] .datepicker table tr td.selected:active, fieldset[disabled] .datepicker table tr td.selected.highlighted:active,
.datepicker table tr td.selected.disabled.active, .datepicker table tr td.selected.highlighted.disabled.active,
.datepicker table tr td.selected[disabled].active, .datepicker table tr td.selected.highlighted[disabled].active,
fieldset[disabled] .datepicker table tr td.selected.active, fieldset[disabled] .datepicker table tr td.selected.highlighted.active {
    background-color: #aaa;
    border-color: #777
}

.datepicker table tr td.selected .badge, .datepicker table tr td.selected.highlighted .badge {
    color: #aaa;
    background-color: #fff
}

.datepicker table tr td.active, .datepicker table tr td.active.highlighted {
    color: #df0028;
    background-color: #ffe696;
    border-color: #b60021;
    font-weight: bold
}

.datepicker table tr td.active:hover, .datepicker table tr td.active.highlighted:hover,
.datepicker table tr td.active:focus, .datepicker table tr td.active.highlighted:focus,
.datepicker table tr td.active:active, .datepicker table tr td.active.highlighted:active,
.datepicker table tr td.active.active, .datepicker table tr td.active.highlighted.active,
.open .dropdown-toggle.datepicker table tr td.active, .open .dropdown-toggle.datepicker table tr td.active.highlighted {
    color: #df0028;
    background-color: #ffdc6d;
    border-color: #790016
}

.datepicker table tr td.active:active, .datepicker table tr td.active.highlighted:active,
.datepicker table tr td.active.active, .datepicker table tr td.active.highlighted.active,
.open .dropdown-toggle.datepicker table tr td.active, .open .dropdown-toggle.datepicker table tr td.active.highlighted {
    background-image: none
}

.datepicker table tr td.active.disabled, .datepicker table tr td.active.highlighted.disabled,
.datepicker table tr td.active[disabled], .datepicker table tr td.active.highlighted[disabled],
fieldset[disabled] .datepicker table tr td.active, fieldset[disabled] .datepicker table tr td.active.highlighted,
.datepicker table tr td.active.disabled:hover, .datepicker table tr td.active.highlighted.disabled:hover,
.datepicker table tr td.active[disabled]:hover, .datepicker table tr td.active.highlighted[disabled]:hover,
fieldset[disabled] .datepicker table tr td.active:hover, fieldset[disabled] .datepicker table tr td.active.highlighted:hover,
.datepicker table tr td.active.disabled:focus, .datepicker table tr td.active.highlighted.disabled:focus,
.datepicker table tr td.active[disabled]:focus, .datepicker table tr td.active.highlighted[disabled]:focus,
fieldset[disabled] .datepicker table tr td.active:focus, fieldset[disabled] .datepicker table tr td.active.highlighted:focus,
.datepicker table tr td.active.disabled:active, .datepicker table tr td.active.highlighted.disabled:active,
.datepicker table tr td.active[disabled]:active, .datepicker table tr td.active.highlighted[disabled]:active,
fieldset[disabled] .datepicker table tr td.active:active, fieldset[disabled] .datepicker table tr td.active.highlighted:active,
.datepicker table tr td.active.disabled.active, .datepicker table tr td.active.highlighted.disabled.active,
.datepicker table tr td.active[disabled].active, .datepicker table tr td.active.highlighted[disabled].active,
fieldset[disabled] .datepicker table tr td.active.active, fieldset[disabled] .datepicker table tr td.active.highlighted.active {
    background-color: #ffe696;
    border-color: #b60021
}

.datepicker table tr td.active .badge, .datepicker table tr td.active.highlighted .badge {
    color: #ffe696;
    background-color: #df0028
}

.datepicker table tr td span {
    display: block;
    width: 23%;
    height: 54px;
    line-height: 54px;
    float: left;
    margin: 1%;
    cursor: pointer;
    border-radius: 4px
}

.datepicker table tr td span:hover, .datepicker table tr td span.focused {
    background: #fff0bf
}

.datepicker table tr td span.disabled, .datepicker table tr td span.disabled:hover {
    background: none;
    color: #aaa;
    cursor: default
}

.datepicker table tr td span.active, .datepicker table tr td span.active:hover,
.datepicker table tr td span.active.disabled, .datepicker table tr td span.active.disabled:hover {
    color: #df0028;
    background-color: #ffe696;
    border-color: #b60021
}

.datepicker table tr td span.active:hover, .datepicker table tr td span.active:hover:hover,
.datepicker table tr td span.active.disabled:hover, .datepicker table tr td span.active.disabled:hover:hover,
.datepicker table tr td span.active:focus, .datepicker table tr td span.active:hover:focus,
.datepicker table tr td span.active.disabled:focus, .datepicker table tr td span.active.disabled:hover:focus,
.datepicker table tr td span.active:active, .datepicker table tr td span.active:hover:active,
.datepicker table tr td span.active.disabled:active, .datepicker table tr td span.active.disabled:hover:active,
.datepicker table tr td span.active.active, .datepicker table tr td span.active:hover.active,
.datepicker table tr td span.active.disabled.active, .datepicker table tr td span.active.disabled:hover.active,
.open .dropdown-toggle.datepicker table tr td span.active, .open .dropdown-toggle.datepicker table tr td span.active:hover,
.open .dropdown-toggle.datepicker table tr td span.active.disabled,
.open .dropdown-toggle.datepicker table tr td span.active.disabled:hover {
    color: #df0028;
    background-color: #ffdc6d;
    border-color: #790016
}

.datepicker table tr td span.active:active, .datepicker table tr td span.active:hover:active,
.datepicker table tr td span.active.disabled:active, .datepicker table tr td span.active.disabled:hover:active,
.datepicker table tr td span.active.active, .datepicker table tr td span.active:hover.active,
.datepicker table tr td span.active.disabled.active, .datepicker table tr td span.active.disabled:hover.active,
.open .dropdown-toggle.datepicker table tr td span.active, .open .dropdown-toggle.datepicker table tr td span.active:hover,
.open .dropdown-toggle.datepicker table tr td span.active.disabled,
.open .dropdown-toggle.datepicker table tr td span.active.disabled:hover {
    background-image: none
}

.datepicker table tr td span.active.disabled, .datepicker table tr td span.active:hover.disabled,
.datepicker table tr td span.active.disabled.disabled, .datepicker table tr td span.active.disabled:hover.disabled,
.datepicker table tr td span.active[disabled], .datepicker table tr td span.active:hover[disabled],
.datepicker table tr td span.active.disabled[disabled], .datepicker table tr td span.active.disabled:hover[disabled],
fieldset[disabled] .datepicker table tr td span.active, fieldset[disabled] .datepicker table tr td span.active:hover,
fieldset[disabled] .datepicker table tr td span.active.disabled, fieldset[disabled] .datepicker table tr td span.active.disabled:hover,
.datepicker table tr td span.active.disabled:hover, .datepicker table tr td span.active:hover.disabled:hover,
.datepicker table tr td span.active.disabled.disabled:hover, .datepicker table tr td span.active.disabled:hover.disabled:hover,
.datepicker table tr td span.active[disabled]:hover, .datepicker table tr td span.active:hover[disabled]:hover,
.datepicker table tr td span.active.disabled[disabled]:hover, .datepicker table tr td span.active.disabled:hover[disabled]:hover,
fieldset[disabled] .datepicker table tr td span.active:hover, fieldset[disabled] .datepicker table tr td span.active:hover:hover,
fieldset[disabled] .datepicker table tr td span.active.disabled:hover,
fieldset[disabled] .datepicker table tr td span.active.disabled:hover:hover,
.datepicker table tr td span.active.disabled:focus, .datepicker table tr td span.active:hover.disabled:focus,
.datepicker table tr td span.active.disabled.disabled:focus, .datepicker table tr td span.active.disabled:hover.disabled:focus,
.datepicker table tr td span.active[disabled]:focus, .datepicker table tr td span.active:hover[disabled]:focus,
.datepicker table tr td span.active.disabled[disabled]:focus, .datepicker table tr td span.active.disabled:hover[disabled]:focus,
fieldset[disabled] .datepicker table tr td span.active:focus, fieldset[disabled] .datepicker table tr td span.active:hover:focus,
fieldset[disabled] .datepicker table tr td span.active.disabled:focus,
fieldset[disabled] .datepicker table tr td span.active.disabled:hover:focus,
.datepicker table tr td span.active.disabled:active, .datepicker table tr td span.active:hover.disabled:active,
.datepicker table tr td span.active.disabled.disabled:active, .datepicker table tr td span.active.disabled:hover.disabled:active,
.datepicker table tr td span.active[disabled]:active, .datepicker table tr td span.active:hover[disabled]:active,
.datepicker table tr td span.active.disabled[disabled]:active, .datepicker table tr td span.active.disabled:hover[disabled]:active,
fieldset[disabled] .datepicker table tr td span.active:active, fieldset[disabled] .datepicker table tr td span.active:hover:active,
fieldset[disabled] .datepicker table tr td span.active.disabled:active,
fieldset[disabled] .datepicker table tr td span.active.disabled:hover:active,
.datepicker table tr td span.active.disabled.active, .datepicker table tr td span.active:hover.disabled.active,
.datepicker table tr td span.active.disabled.disabled.active, .datepicker table tr td span.active.disabled:hover.disabled.active,
.datepicker table tr td span.active[disabled].active, .datepicker table tr td span.active:hover[disabled].active,
.datepicker table tr td span.active.disabled[disabled].active, .datepicker table tr td span.active.disabled:hover[disabled].active,
fieldset[disabled] .datepicker table tr td span.active.active, fieldset[disabled] .datepicker table tr td span.active:hover.active,
fieldset[disabled] .datepicker table tr td span.active.disabled.active,
fieldset[disabled] .datepicker table tr td span.active.disabled:hover.active {
    background-color: #ffe696;
    border-color: #b60021
}

.datepicker table tr td span.active .badge, .datepicker table tr td span.active:hover .badge,
.datepicker table tr td span.active.disabled .badge, .datepicker table tr td span.active.disabled:hover .badge {
    color: #ffe696;
    background-color: #df0028
}

.datepicker table tr td span.old, .datepicker table tr td span.new {
    color: #919191
}

.datepicker .datepicker-switch {
    width: 145px
}

.datepicker .datepicker-switch, .datepicker .prev, .datepicker .next,
.datepicker tfoot tr th {
    cursor: pointer
}

.datepicker .datepicker-switch:hover, .datepicker .prev:hover, .datepicker .next:hover,
.datepicker tfoot tr th:hover {
    background: #fff0bf
}

.datepicker .prev.disabled, .datepicker .next.disabled {
    visibility: hidden
}

.datepicker .cw {
    font-size: 10px;
    color: #aaa;
    width: 12px;
    padding: 0 2px 0 5px;
    vertical-align: middle
}

.input-group.date .input-group-addon {
    cursor: pointer
}

.input-daterange {
    width: 100%
}

.input-daterange input {
    text-align: center
}

.input-daterange input:first-child {
    border-radius: 3px 0 0 3px
}

.input-daterange input:last-child {
    border-radius: 0 3px 3px 0
}

.input-daterange .input-group-addon {
    width: auto;
    min-width: 16px;
    padding: 4px 5px;
    line-height: 1.428571429;
    text-shadow: 0 1px 0 #fff;
    border-width: 1px 0;
    margin-left: -5px;
    margin-right: -5px
}

.hideMe, .hideJS {
    display: none
}

.pointer {
    cursor: pointer
}

html, body {
    height: 100%
}

body {
    padding-top: 0px;
    background-color: #ffe696
}

body > div.container {
    padding-left: 0;
    padding-right: 0;
    background-color: #fff8e2;
    border-left: 1px solid #ccc;
    border-right: 1px solid #ccc
}

a .glyphicon:first-child, span .glyphicon:first-child, button .glyphicon:first-child {
    padding-right: 4px
}

a .glyphicon:last-child, span .glyphicon:last-child, button .glyphicon:last-child {
    padding-left: 4px
}

a {
    font-weight: bold;
    color: #df0028;
    text-decoration: none;
    background: transparent
}

a:hover, a:active {
    color: #a2001d;
    text-decoration: underline
}

a[href^="http"], a[href^="//"] {
    padding-right: 12px;
    background: transparent url('/images/icon/link_extern.gif') 100% 50% no-repeat
}

a[href^="http://broetchen-bringer.de"], a[href^="https://broetchen-bringer.de"] {
    padding-right: 0px;
    background: transparent
}

.inline-block {
    display: inline-block
}

.inline-label {
    display: inline-block
}

.inline-label.right {
    text-align: right;
    margin-right: 8px
}

.full-height {
    min-height: 100%;
    height: auto !important;
    height: 100%
}

.progressbar.btn-group a.btn {
    cursor: default
}

@font-face {
    font-family: BrBrProvidence;
    src: local("Providence"), local("Providence-Bold"), url("/styles/fonts/font1.ttf");
    font-weight: bold
}

.header-brand {
    color: #fff;
    display: block;
    font-weight: bold;
    font-family: BrBrProvidence, Georgia, "Times New Roman", Times, serif;
    padding: 6px 12px 10px 12px;
    background-color: #df0028
}

.header-brand a {
    color: #fff;
    text-decoration: none;
    display: block
}

.header-brand a:hover, .header-brand a:active {
    color: #fff;
    text-decoration: underline
}

h1.welcome {
    color: #000;
    font-size: 2.8em;
    font-weight: bold;
    font-family: BrBrProvidence, Georgia, "Times New Roman", Times, serif
}

h1.header-brand {
    font-size: 22px
}

h2.header-brand {
    font-size: 16px
}

.page-header {
    margin: 0 0 20px;
    border-color: #ddd
}

.alert > h1, .well > h1, .alert > h2, .well > h2, .alert > h3, .well > h3, .alert > h4,
.well > h4 {
    margin-top: 0px
}

#navbar-top {
    margin-bottom: 0;
    background: #fff3cb url(/images/header1170.jpg) top left no-repeat
}

#navbar-top > .container {
    padding-left: 0;
    padding-right: 0
}

#navbar-top .navbar-header {
    margin-left: 0;
    margin-right: 0;
    height: 109px
}

#navbar-top .navbar-brand {
    min-width: 160px;
    height: 109px;
    display: none
}

#navbar-top .navbar-collapse {
    max-height: none
}

#navbar-top .navbar-toggle {
    color: #df0028;
    font-weight: bold;
    margin-bottom: auto;
    background-color: rgba(255, 243, 203, 0.5)
}

#navbar-top .navbar-toggle:hover, #navbar-top .navbar-toggle:focus {
    color: #fff3cb;
    background-color: rgba(223, 0, 40, 0.3)
}

#navbar-top .navbar-toggle .extend {
    display: none
}

#navbar-top .navbar-nav {
    margin-top: 0px;
    margin-bottom: 0px
}

#navbar-top .navbar-nav > li > a {
    padding-left: 15px
}

#navbar-top .navbar-nav .dropdown-menu {
    padding-top: 1px
}

#navbar-top .navbar-nav .dropdown-menu > li > a {
    padding-left: 30px
}

#navbar-top.navbar-default .navbar-nav > .open > a, #navbar-top.navbar-default .navbar-nav > .open > a:hover {
    background-color: #df0028
}

@media (max-width: 767px) {
    #navbar-top.compact {
        min-height: 40px;
        background-color: #ffe696;
        background-image: none;
        background-image: -webkit-linear-gradient(#ffe696, #fff8e2 50%, #ffe696);
        background-image: linear-gradient(#ffe696, #fff8e2 50%, #ffe696);
        background-repeat: no-repeat;
        filter: progid: DXImageTransform.Microsoft.gradient(startColorstr='#ffffe696', endColorstr='#ffffe696', GradientType=0)
    }

    #navbar-top.compact .navbar-header {
        height: 40px
    }

    #navbar-top.compact .navbar-brand {
        height: 40px;
        padding: 8px 10px
    }

    #navbar-top.compact .navbar-toggle {
        margin-top: 4px;
        padding: 4px 5px
    }
}

#navbar-side {
    display: none
}

#navbar-side .nav-sidebar {
    margin-left: 0px
}

#navbar-side .nav-sidebar > li.header {
    padding: 2px 5px;
    text-align: right;
    font-weight: bold;
    border-bottom: 2px solid #555
}

#navbar-side .nav-sidebar > li:not(.header) {
    border-bottom: 1px solid #eee
}

#navbar-side .nav-sidebar > li > a {
    font-size: 11px;
    padding-left: 10px;
    padding-right: 0px;
    font-weight: normal
}

#navbar-side .nav-sidebar > li > a.active {
    color: #fff;
    font-weight: bold;
    background-color: #df0028
}

#navbar-side .nav-sidebar > li > a:not(.active):focus, #navbar-side .nav-sidebar > li > a:not(.active):hover {
    background-color: rgba(255, 230, 150, 0.5);
    border-left: 8px solid #df0028;
    padding-left: 2px
}

#navbar-side .nav-sidebar > a.popup {
    display: block;
    text-align: center;
    background-color: rgba(255, 230, 150, 0.3);
    border-left: 10px solid #df0028
}

#navbar-side .nav-sidebar > a.popup img {
    max-width: 100%
}

#footer {
    bottom: 0;
    position: fixed;
    font-size: 14px;
    padding-left: 1px;
    padding-right: 3px
}

#footer > div {
    background-color: #fff8e2;
    border-top: 1px solid #ddd
}

#footer > div > div {
    width: 32.8%;
    text-align: center;
    display: inline-block
}

#website.container {
    padding-left: 0px;
    padding-right: 0px;
    padding-bottom: 50px
}

#website.container #content {
    padding-left: 5px;
    padding-right: 5px
}

label.control-label.two-liner {
    margin-top: 0;
    padding-top: 0;
    font-size: smaller
}

.bestellung th, .bestellung td {
    vertical-align: middle !important
}

.bestellung th.artikel-input, .bestellung td.artikel-input {
    padding: 4px
}

.bestellung th.artikel-input input, .bestellung td.artikel-input input,
.bestellung th.artikel-input input.artikel-input, .bestellung td.artikel-input input.artikel-input {
    background-color: rgba(255, 255, 255, 0.4);
    text-align: center;
    font-weight: bold
}

.bestellung th.artikel-input input:-moz-placeholder, .bestellung td.artikel-input input:-moz-placeholder,
.bestellung th.artikel-input input.artikel-input:-moz-placeholder,
.bestellung td.artikel-input input.artikel-input:-moz-placeholder {
    color: #d0d0d0
}

.bestellung th.artikel-input input::-moz-placeholder, .bestellung td.artikel-input input::-moz-placeholder,
.bestellung th.artikel-input input.artikel-input::-moz-placeholder,
.bestellung td.artikel-input input.artikel-input::-moz-placeholder {
    color: #d0d0d0;
    opacity: 1
}

.bestellung th.artikel-input input:-ms-input-placeholder, .bestellung td.artikel-input input:-ms-input-placeholder,
.bestellung th.artikel-input input.artikel-input:-ms-input-placeholder,
.bestellung td.artikel-input input.artikel-input:-ms-input-placeholder {
    color: #d0d0d0
}

.bestellung th.artikel-input input::-webkit-input-placeholder,
.bestellung td.artikel-input input::-webkit-input-placeholder, .bestellung th.artikel-input input.artikel-input::-webkit-input-placeholder,
.bestellung td.artikel-input input.artikel-input::-webkit-input-placeholder {
    color: #d0d0d0
}

.bestellung th.artikel-input > input, .bestellung td.artikel-input > input,
.bestellung th.artikel-input input.artikel-input, .bestellung td.artikel-input input.artikel-input {
    padding: 4px;
    width: 30px
}

.bestellung th.artikel-img, .bestellung td.artikel-img {
    text-align: center;
    padding: 4px 0
}

.bestellung th.artikel-img img, .bestellung td.artikel-img img {
    max-height: 38px;
    max-width: 38px
}

@media (min-width: 960px) {
    .bestellung th.artikel-img img, .bestellung td.artikel-img img {
        max-width: 52px
    }
}

.bestellung th.artikel-name, .bestellung td.artikel-name {
    padding: 4px 0
}

.bestellung th.artikel-name a, .bestellung td.artikel-name a {
    font-weight: normal
}

.sonderbestellung#datepicker > div {
    margin: 20px auto
}

.has-error.form-group > div.checkbox, .has-error.form-group > div.radio {
    border: 1px solid #df0028;
    background-color: white;
    padding-left: 30px;
    padding-right: 2px;
    color: inherit
}

.has-error.form-control {
    border-color: #df0028
}

.has-error.help-block {
    color: #df0028
}

.modal.brbrpopup .modal-header {
    padding: 10px 10px 0 20px
}

.modal.brbrpopup .modal-body {
    margin: 10px;
    padding: 0
}

.modal.brbrpopup .modal-body h1, .modal.brbrpopup .modal-body h2,
.modal.brbrpopup .modal-body h3 {
    margin-top: 0
}

.modal.brbrpopup .modal-body .bootbox-close-button {
    margin-top: 5px !important;
    opacity: 0.6
}

.modal.brbrpopup .modal-body .bootbox-close-button:hover {
    opacity: 8
}

.modal.brbrpopup .modal-body .bootbox-body {
    margin: -10px 0;
    padding: 10px 0;
    padding-left: 30px;
    border-left: 10px solid #df0028
}

.panel-brbr {
    border-color: #ddd
}

.panel-brbr > .panel-heading {
    color: #555;
    background-color: #fff5d3;
    border-color: #ddd
}

.panel-brbr > .panel-heading + .panel-collapse .panel-body {
    border-top-color: #ddd
}

.panel-brbr > .panel-footer + .panel-collapse .panel-body {
    border-bottom-color: #ddd
}

a.kalender, a.kalender:hover, a.kalender:focus {
    text-decoration: none !important
}

div.kalender {
    background-color: white;
    border: 1px solid black;
    display: block;
    width: 80px;
    text-align: center;
    margin: 15px
}

div.kalender .kopf {
    display: block;
    background-color: #df0028;
    color: white;
    font-size: 0.9em;
    font-weight: bold;
    border-bottom: 1px solid #ddd
}

div.kalender .koerper {
    display: block;
    background-color: white;
    color: black;
    font-size: 2.5em;
    line-height: 1em;
    font-weight: bold;
    margin: 4px
}

div.kalender .koerper .untertitel {
    display: block;
    color: #777;
    font-size: 0.3em;
    line-height: 1.0em;
    margin: 2px 0
}

@media (min-width: 250px) {
    #navbar-top .navbar-brand {
        display: inline-block
    }
}

@media (min-width: 300px) {
    #navbar-top .navbar-toggle .extend {
        display: inline
    }
}

@media (min-width: 768px) {
    .container {
        width: 100%
    }

    #website.container #content {
        padding-left: 15px;
        padding-right: 5px
    }

    #website.container h1.welcome .welcome {
        margin-top: -10px
    }

    #navbar-side {
        display: block;
        padding: 10px 10px 20px 0px
    }

    .sonderbestellung#datepicker {
        margin: 20px 30px;
        display: inline-block;
        float: left
    }

    .sonderbestellung#datepicker > div {
        margin: 0
    }

    .form-control.auto, .form-control.three-quarters, .form-control.two-thirds,
    .form-control.half, .form-control.third, .form-control.quarter,
    .form-control.fifths, .form-control.tenths {
        margin-left: -1px;
        margin-right: -1px;
        display: inline-block
    }

    .form-control.auto {
        width: auto
    }

    .form-control.three-quarters {
        width: 75%
    }

    .form-control.two-thirds {
        width: 66.666%
    }

    .form-control.half {
        width: 50%
    }

    .form-control.third {
        width: 33.333%
    }

    .form-control.quarter {
        width: 25%
    }

    .form-control.fiths {
        width: 20%
    }

    .form-control.tenths {
        width: 10%
    }

    th.artikel-input > input, td.artikel-input > input, th input.artikel-input,
    td input.artikel-input {
        min-width: 30px;
        max-width: 40px;
        width: 100%
    }
}

@media (max-width: 991px) {
    .row-md.row, .row-lg.row {
        margin-left: 0;
        margin-right: 0
    }

    .row-md > [class * ="col"], .row-lg > [class * ="col"] {
        padding-left: 0;
        padding-right: 0
    }

    .row-md > [class * ="col"]:not(:first-child), .row-lg > [class * ="col"]:not(:first-child) {
        padding-left: 10px
    }

    .table-responsive {
        width: 100%;
        margin-bottom: 15px;
        overflow-y: hidden;
        overflow-x: scroll;
        -ms-overflow-style: -ms-autohiding-scrollbar;
        border: 1px solid #ddd;
        -webkit-overflow-scrolling: touch
    }

    .table-responsive > .table {
        margin-bottom: 0
    }

    .table-responsive > .table > thead > tr > th, .table-responsive > .table > tbody > tr > th,
    .table-responsive > .table > tfoot > tr > th, .table-responsive > .table > thead > tr > td,
    .table-responsive > .table > tbody > tr > td, .table-responsive > .table > tfoot > tr > td {
        white-space: nowrap
    }

    .table-responsive > .table-bordered {
        border: 0
    }

    .table-responsive > .table-bordered > thead > tr > th:first-child, .table-responsive > .table-bordered > tbody > tr > th:first-child,
    .table-responsive > .table-bordered > tfoot > tr > th:first-child, .table-responsive > .table-bordered > thead > tr > td:first-child,
    .table-responsive > .table-bordered > tbody > tr > td:first-child, .table-responsive > .table-bordered > tfoot > tr > td:first-child {
        border-left: 0
    }

    .table-responsive > .table-bordered > thead > tr > th:last-child, .table-responsive > .table-bordered > tbody > tr > th:last-child,
    .table-responsive > .table-bordered > tfoot > tr > th:last-child, .table-responsive > .table-bordered > thead > tr > td:last-child,
    .table-responsive > .table-bordered > tbody > tr > td:last-child, .table-responsive > .table-bordered > tfoot > tr > td:last-child {
        border-right: 0
    }

    .table-responsive > .table-bordered > tbody > tr:last-child > th, .table-responsive > .table-bordered > tfoot > tr:last-child > th,
    .table-responsive > .table-bordered > tbody > tr:last-child > td, .table-responsive > .table-bordered > tfoot > tr:last-child > td {
        border-bottom: 0
    }
}

@media (min-width: 992px) {
    th.artikel-input > input, td.artikel-input > input, th input.artikel-input,
    td input.artikel-input {
        max-width: 50px
    }

    #navbar-side .nav-sidebar > li > a {
        font-size: 14px;
        padding-left: 15px
    }

    #navbar-side .nav-sidebar > li > a:not(.active):focus, #navbar-side .nav-sidebar > li > a:not(.active):hover {
        border-left: 10px solid #df0028;
        padding-left: 5px
    }

    .row-md {
        margin-left: -15px;
        margin-right: -15px
    }
}

@media (min-width: 1170px) {
    .container {
        width: 1170px
    }

    #website.container #content {
        padding-left: 20px;
        padding-right: 25px
    }
}

@media (min-width: 1200px) {
    #navbar-side .nav-sidebar > li > a {
        padding-left: 20px
    }

    #navbar-side .nav-sidebar > li > a:not(.active):focus, #navbar-side .nav-sidebar > li > a:not(.active):hover {
        padding-left: 10px
    }

    .row-lg {
        margin-left: -15px;
        margin-right: -15px
    }
}

@media print {
    a[href]:after {
        content: ""
    }
}