<!doctype html>
<html lang="es" ng-app="Client">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Test MultiSafePay</title>
        <base href="/">
        <!-- Style -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css">
    </head>
    <body>
    
    <div ng-view></div>
        
    <!-- Angular -->
	<script src="{{ asset('js/angular.min.js') }}"></script>
	<script src="{{ asset('js/angular-resource.min.js') }}"></script>
	<script src="{{ asset('js/angular-route.min.js') }}"></script>

	<!-- Scripts -->
	<script src="{{ asset('scripts/router.js') }}"></script>
	<script src="{{ asset('scripts/controllers/index.js') }}"></script>
    </body>
</html>
