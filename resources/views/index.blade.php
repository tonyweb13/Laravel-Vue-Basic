<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate"/>
	<meta http-equiv="Pragma" content="no-cache"/>
	<meta http-equiv="Expires" content="0"/>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>HRMS</title>
    <link href="{{ mix('css/public.css') }}" rel="stylesheet">
</head>
<body>
    <div id="hrms-app"></div>
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
