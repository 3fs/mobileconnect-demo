<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Yolo</title>
    <link rel="stylesheet" href="/stylesheets/app.css" />
    <script src="/bower_components/modernizr/modernizr.js"></script>
</head>
<body>
<header class="titleBack">
    @section('header')

    @show
</header>
<div>
    @yield('content')
</div>

<footer>
    <div class="row text-right topMargin">
        <div class="large-12 column text-center">
            <p>Demo App</p>
        </div>
        <div class="large-12 column text-center">
            <small>
                This is a test application of signing up to a social community
            </small>
            <small>
                You will authenticate to level of assurance 2
            </small>
            <small>
                MCX will return both a  pseudonymous customer reference plus your self-asserted user attributes
            </small>
        </div>
    </div>
</footer>
<script src="/bower_components/jquery/dist/jquery.min.js"></script>
<script src="/bower_components/foundation/js/foundation.min.js"></script>
<script src="/js/app.js"></script>
</body>
</html>
