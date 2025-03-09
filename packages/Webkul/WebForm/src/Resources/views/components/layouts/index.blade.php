<!DOCTYPE html>

<html
    lang="{{ app()->getLocale() }}"
    dir="{{ in_array(app()->getLocale(), ['fa', 'ar']) ? 'rtl' : 'ltr' }}"
>

<head>
    <meta charset="UTF-8">
    
    @php
        $favicon = core()->getConfigData('general.general.favicon.favicon_image');
        $faviconUrl = $favicon ? Storage::url($favicon) . '?v=' . filemtime(Storage::path($favicon)) : vite()->asset('images/favicon.ico');
    @endphp
    
    <meta http-equiv="Cache-Control" content="public, max-age=31536000">
    <meta http-equiv="Expires" content="{{ date('D, d M Y H:i:s', time() + 31536000) }} GMT">
    <link rel="icon" href="{{ $faviconUrl }}" type="image/x-icon">

    <title>{{ $title ?? '' }}</title>

    <meta
        http-equiv="X-UA-Compatible"
        content="IE=edge"
    >
    
    <meta
        http-equiv="content-language"
        content="{{ app()->getLocale() }}"
    >

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1"
    >
    <meta
        name="base-url"
        content="{{ url()->to('/') }}"
    >

    @stack('meta')

    {{
        vite()->set(['src/Resources/assets/css/app.css', 'src/Resources/assets/js/app.js'], 'webform')
    }}

    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap"
        rel="stylesheet"
    />

    <link
        href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&display=swap"
        rel="stylesheet"
    />

    @stack('styles')

    <style>
        {!! core()->getConfigData('general.content.custom_scripts.custom_css') !!}
    </style>

    {!! view_render_event('webform.layout.head') !!}
</head>

<body>
    {!! view_render_event('webform.layout.body.before') !!}

    <div id="app">
        <!-- Flash Message Blade Component -->
        <x-web_form::flash-group />

        {!! view_render_event('webform.layout.content.before') !!}

        <!-- Page Content Blade Component -->
        {{ $slot }}

        {!! view_render_event('webform.layout.content.after') !!}
    </div>

    {!! view_render_event('webform.layout.body.after') !!}

    @stack('scripts')

    {!! view_render_event('webform.layout.vue-app-mount.before') !!}

    <script>
        /**
         * Load event, the purpose of using the event is to mount the application
         * after all of our Vue components which is present in blade file have
         * been registered in the app. No matter what app.mount() should be
         * called in the last.
         */
        window.addEventListener("load", function(event) {
            app.mount("#app");
        });
    </script>

    {!! view_render_event('webform.layout.vue-app-mount.after') !!}

    <script type="text/javascript">
        {!! core()->getConfigData('general.content.custom_scripts.custom_javascript') !!}
    </script>
</body>

</html>
