    <!-- favicon -->
    @php
    $setting = App\Models\Setting::first();
    @endphp
    <link rel="icon" href="{{ url($setting->favicon) }}" type="image/x-icon">
    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{asset('/')}}frontend/assets/css/vendor.css">
    <link rel="stylesheet" href="{{asset('/')}}frontend/assets/css/style.css">
    <link rel="stylesheet" href="{{asset('/')}}frontend/assets/css/responsive.css">
    <!-- Flipbook StyleSheets -->
    <link href="{{asset('/')}}frontend/assets/css/dflip.min.css" rel="stylesheet" type="text/css">
    <!-- themify-icons.min.css is not required in version 2.0 and above -->
    <link href="{{asset('/')}}frontend/assets/css/themify-icons.min.css" rel="stylesheet" type="text/css">