<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                    <svg viewBox="0 0 651 192" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-16 w-auto text-gray-700 sm:h-20">
                        <g clip-path="url(#clip0)" fill="#EF3B2D">
                            <path d="M248.032 44.676h-16.466v100.23h47.394v-14.748h-30.928V44.676zM337.091 87.202c-2.101-3.341-5.083-5.965-8.949-7.875-3.865-1.909-7.756-2.864-11.669-2.864-5.062 0-9.69.931-13.89 2.792-4.201 1.861-7.804 4.417-10.811 7.661-3.007 3.246-5.347 6.993-7.016 11.239-1.672 4.249-2.506 8.713-2.506 13.389 0 4.774.834 9.26 2.506 13.459 1.669 4.202 4.009 7.925 7.016 11.169 3.007 3.246 6.609 5.799 10.811 7.66 4.199 1.861 8.828 2.792 13.89 2.792 3.913 0 7.804-.955 11.669-2.863 3.866-1.908 6.849-4.533 8.949-7.875v9.021h15.607V78.182h-15.607v9.02zm-1.431 32.503c-.955 2.578-2.291 4.821-4.009 6.73-1.719 1.91-3.795 3.437-6.229 4.582-2.435 1.146-5.133 1.718-8.091 1.718-2.96 0-5.633-.572-8.019-1.718-2.387-1.146-4.438-2.672-6.156-4.582-1.719-1.909-3.032-4.152-3.938-6.73-.909-2.577-1.36-5.298-1.36-8.161 0-2.864.451-5.585 1.36-8.162.905-2.577 2.219-4.819 3.938-6.729 1.718-1.908 3.77-3.437 6.156-4.582 2.386-1.146 5.059-1.718 8.019-1.718 2.958 0 5.656.572 8.091 1.718 2.434 1.146 4.51 2.674 6.229 4.582 1.718 1.91 3.054 4.152 4.009 6.729.953 2.577 1.432 5.298 1.432 8.162-.001 2.863-.479 5.584-1.432 8.161zM463.954 87.202c-2.101-3.341-5.083-5.965-8.949-7.875-3.865-1.909-7.756-2.864-11.669-2.864-5.062 0-9.69.931-13.89 2.792-4.201 1.861-7.804 4.417-10.811 7.661-3.007 3.246-5.347 6.993-7.016 11.239-1.672 4.249-2.506 8.713-2.506 13.389 0 4.774.834 9.26 2.506 13.459 1.669 4.202 4.009 7.925 7.016 11.169 3.007 3.246 6.609 5.799 10.811 7.66 4.199 1.861 8.828 2.792 13.89 2.792 3.913 0 7.804-.955 11.669-2.863 3.866-1.908 6.849-4.533 8.949-7.875v9.021h15.607V78.182h-15.607v9.02zm-1.432 32.503c-.955 2.578-2.291 4.821-4.009 6.73-1.719 1.91-3.795 3.437-6.229 4.582-2.435 1.146-5.133 1.718-8.091 1.718-2.96 0-5.633-.572-8.019-1.718-2.387-1.146-4.438-2.672-6.156-4.582-1.719-1.909-3.032-4.152-3.938-6.73-.909-2.577-1.36-5.298-1.36-8.161 0-2.864.451-5.585 1.36-8.162.905-2.577 2.219-4.819 3.938-6.729 1.718-1.908 3.77-3.437 6.156-4.582 2.386-1.146 5.059-1.718 8.019-1.718 2.958 0 5.656.572 8.091 1.718 2.434 1.146 4.51 2.674 6.229 4.582 1.718 1.91 3.054 4.152 4.009 6.729.953 2.577 1.432 5.298 1.432 8.162 0 2.863-.479 5.584-1.432 8.161zM650.772 44.676h-15.606v100.23h15.606V44.676zM365.013 144.906h15.607V93.538h26.776V78.182h-42.383v66.724zM542.133 78.182l-19.616 51.096-19.616-51.096h-15.808l25.617 66.724h19.614l25.617-66.724h-15.808zM591.98 76.466c-19.112 0-34.239 15.706-34.239 35.079 0 21.416 14.641 35.079 36.239 35.079 12.088 0 19.806-4.622 29.234-14.688l-10.544-8.158c-.006.008-7.958 10.449-19.832 10.449-13.802 0-19.612-11.127-19.612-16.884h51.777c2.72-22.043-11.772-40.877-33.023-40.877zm-18.713 29.28c.12-1.284 1.917-16.884 18.589-16.884 16.671 0 18.697 15.598 18.813 16.884h-37.402zM184.068 43.892c-.024-.088-.073-.165-.104-.25-.058-.157-.108-.316-.191-.46-.056-.097-.137-.176-.203-.265-.087-.117-.161-.242-.265-.345-.085-.086-.194-.148-.29-.223-.109-.085-.206-.182-.327-.252l-.002-.001-.002-.002-35.648-20.524a2.971 2.971 0 00-2.964 0l-35.647 20.522-.002.002-.002.001c-.121.07-.219.167-.327.252-.096.075-.205.138-.29.223-.103.103-.178.228-.265.345-.066.089-.147.169-.203.265-.083.144-.133.304-.191.46-.031.085-.08.162-.104.25-.067.249-.103.51-.103.776v38.979l-29.706 17.103V24.493a3 3 0 00-.103-.776c-.024-.088-.073-.165-.104-.25-.058-.157-.108-.316-.191-.46-.056-.097-.137-.176-.203-.265-.087-.117-.161-.242-.265-.345-.085-.086-.194-.148-.29-.223-.109-.085-.206-.182-.327-.252l-.002-.001-.002-.002L40.098 1.396a2.971 2.971 0 00-2.964 0L1.487 21.919l-.002.002-.002.001c-.121.07-.219.167-.327.252-.096.075-.205.138-.29.223-.103.103-.178.228-.265.345-.066.089-.147.169-.203.265-.083.144-.133.304-.191.46-.031.085-.08.162-.104.25-.067.249-.103.51-.103.776v122.09c0 1.063.568 2.044 1.489 2.575l71.293 41.045c.156.089.324.143.49.202.078.028.15.074.23.095a2.98 2.98 0 001.524 0c.069-.018.132-.059.2-.083.176-.061.354-.119.519-.214l71.293-41.045a2.971 2.971 0 001.489-2.575v-38.979l34.158-19.666a2.971 2.971 0 001.489-2.575V44.666a3.075 3.075 0 00-.106-.774zM74.255 143.167l-29.648-16.779 31.136-17.926.001-.001 34.164-19.669 29.674 17.084-21.772 12.428-43.555 24.863zm68.329-76.259v33.841l-12.475-7.182-17.231-9.92V49.806l12.475 7.182 17.231 9.92zm2.97-39.335l29.693 17.095-29.693 17.095-29.693-17.095 29.693-17.095zM54.06 114.089l-12.475 7.182V46.733l17.231-9.92 12.475-7.182v74.537l-17.231 9.921zM38.614 7.398l29.693 17.095-29.693 17.095L8.921 24.493 38.614 7.398zM5.938 29.632l12.475 7.182 17.231 9.92v79.676l.001.005-.001.006c0 .114.032.221.045.333.017.146.021.294.059.434l.002.007c.032.117.094.222.14.334.051.124.088.255.156.371a.036.036 0 00.004.009c.061.105.149.191.222.288.081.105.149.22.244.314l.008.01c.084.083.19.142.284.215.106.083.202.178.32.247l.013.005.011.008 34.139 19.321v34.175L5.939 144.867V29.632h-.001zm136.646 115.235l-65.352 37.625V148.31l48.399-27.628 16.953-9.677v33.862zm35.646-61.22l-29.706 17.102V66.908l17.231-9.92 12.475-7.182v33.841z"/>
                        </g>
                    </svg>
                </div>

                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="p-6">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel.com/docs" class="underline text-gray-900 dark:text-white">Documentation</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel has wonderful, thorough documentation covering every aspect of the framework. Whether you are new to the framework or have previous experience with Laravel, we recommend reading all of the documentation from beginning to end.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path><path d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laracasts.com" class="underline text-gray-900 dark:text-white">Laracasts</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development. Check them out, see for yourself, and massively level up your development skills in the process.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel-news.com/" class="underline text-gray-900 dark:text-white">Laravel News</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel News is a community driven portal and newsletter aggregating all of the latest and most important news in the Laravel ecosystem, including new package releases and tutorials.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white">Vibrant Ecosystem</div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel's robust library of first-party tools and libraries, such as <a href="https://forge.laravel.com" class="underline">Forge</a>, <a href="https://vapor.laravel.com" class="underline">Vapor</a>, <a href="https://nova.laravel.com" class="underline">Nova</a>, and <a href="https://envoyer.io" class="underline">Envoyer</a> help you take your projects to the next level. Pair them with powerful open source libraries like <a href="https://laravel.com/docs/billing" class="underline">Cashier</a>, <a href="https://laravel.com/docs/dusk" class="underline">Dusk</a>, <a href="https://laravel.com/docs/broadcasting" class="underline">Echo</a>, <a href="https://laravel.com/docs/horizon" class="underline">Horizon</a>, <a href="https://laravel.com/docs/sanctum" class="underline">Sanctum</a>, <a href="https://laravel.com/docs/telescope" class="underline">Telescope</a>, and more.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                    <div class="text-center text-sm text-gray-500 sm:text-left">
                        <div class="flex items-center">
                            <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor" class="-mt-px w-5 h-5 text-gray-400">
                                <path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>

                            <a href="https://laravel.bigcartel.com" class="ml-1 underline">
                                Shop
                            </a>

                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="ml-4 -mt-px w-5 h-5 text-gray-400">
                                <path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg>

                            <a href="https://github.com/sponsors/taylorotwell" class="ml-1 underline">
                                Sponsor
                            </a>
                        </div>
                    </div>

                    <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

<!DOCTYPE html>
<html lang="en">
<!--[if lte IE 9]><html lang="en" class="lt-ie8"> <![endif]-->
<head>
<title>JQuery lightSlider</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="JQuery lightSlider examples" />
<link rel="shortcut icon" href="static/img/favicon.ico">
<link href="css/base.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.2.19/js/lightgallery-all.min.js"></script> 
<script src="http://sachinchoolur.github.io/lightslider/src/js/lightslider.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.2.19/js/lightgallery-all.min.js"></script> 
<script src="http://sachinchoolur.github.io/lightslider/js/prettify.js"></script> 
<link href='http://fonts.googleapis.com/css?family=Cinzel+Decorative:400,700,900' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700,800|Roboto+Slab:400,300,700,100' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic|Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<style type="text/css">
    .item-a { width:200px; }
    .item-b { width:340px; }
    .item-c { width:290px; }
    .item-d { width:220px; }
    .item-e { width:350px; }
    @media (max-width: 768px) {
        .item-a { width:100px; }
        .item-b { width:240px; }
        .item-c { width:190px; }
        .item-d { width:120px; }
        .item-e { width:250px; }
    }
    .lSAction > a{
        z-index: 99 !important;
    }
</style>
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-49767543-1', 'sachinchoolur.github.io');
  ga('send', 'pageview');

</script>
</head>
<body>
<header id="mast-head">
    <div class="container-fluid">
        <nav class="navbar navbar-default" role="navigation">
            <div class="container-fluid">
                <div class="navbar-collapse"> <a href="https://github.com/sachinchoolur/lightslider/archive/master.zip" class="btn btn-success navbar-btn" type="button">Download</a>
                    <ul class="nav navbar-nav">
                        <li><a href="index.html">Home</a></li>
                        <li class="active"><a href="examples.html">Examples</a></li>
                        <li><a href="settings.html">Settings</a></li>
                        <li><a href="https://github.com/sachinchoolur/lightslider">Github</a></li>
                        <li><a target="blank" href="http://sachinchoolur.github.io/lightGallery/">lightGallery</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>
<div id="site" style="padding-bottom: 60px;">
    <div class="nav-over"></div>
    <div class="hero">
        <div class="container-fluid">
            <div class="navbar-header">
                <div class="pull-left"> <a href="javascript:void(0)" class="pull-left btn-navbar">
                    <button type="button" class="navbar-toggle ib">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <span class="navbar-text ib">Menu</span>
                    </a> </div>
                <a type="button" class="btn btn-success navbar-btn pull-right" href="https://github.com/sachinchoolur/lightslider/archive/master.zip">Download</a> </div>
        </div>
        <div class="container-fluid example">
            <div class="row">
                <div class="col-xs-12">
                    <section class="install">
                        <div style=" padding: 30px 0px 0px; overflow: hidden;">
                          <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- examples -->
<ins class="adsbygoogle"
     style="display:inline-block;width:728px;height:90px"
     data-ad-client="ca-pub-2888290830590449"
     data-ad-slot="2361446618"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
                        </div>
                        <h2>Responsive  <span class="small">Resize your browser to see how responsive option works </span> <span class="small"><b>Window Width:</b> <span class="windowWidh"></span></span> </h2>
                        <div class="demo hasActive">
                            <ul id="responsive" class="gallery content-slider list-unstyled clearfix cS-hidden">
                                <li>
                                    <h3>1</h3>
                                </li>
                                <li>
                                    <h3>2</h3>
                                </li>
                                <li>
                                    <h3>3</h3>
                                </li>
                                <li>
                                    <h3>4</h3>
                                </li>
                                <li>
                                    <h3>5</h3>
                                </li>
                                <li>
                                    <h3>6</h3>
                                </li>
                                <li>
                                    <h3>7</h3>
                                </li>
                                <li>
                                    <h3>8</h3>
                                </li>
                                <li>
                                    <h3>9</h3>
                                </li>
                                <li>
                                    <h3>10</h3>
                                </li>
                            </ul>
                        </div>
                        <div class="call">
                            <pre class="prettyprint linenums" style="margin-top:0;">
  $(document).ready(function() {
    $('#responsive').lightSlider({
        item:4,
        loop:false,
        slideMove:2,
        easing: 'cubic-bezier(0.25, 0, 0.25, 1)',
        speed:600,
        responsive : [
            {
                breakpoint:800,
                settings: {
                    item:3,
                    slideMove:1,
                    slideMargin:6,
                  }
            },
            {
                breakpoint:480,
                settings: {
                    item:2,
                    slideMove:1
                  }
            }
        ]
    });  
  });</pre>
                            <h3>Note</h3>
                            <ul class="pdl0 note">
                                <li>You can add as many breakpoints as you want.</li>
                                <li><b>supports</b> item, slideMove, slideMargin, thumbItem, thumbMargin</li>
                            </ul>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
    <div class="hero" style="margin-top:20px;border-top:1px solid #F1F1F1">
        <div class="container-fluid example">
            <div class="row">
                <div class="col-xs-12">
                    <section class="install">
                        <h2>Auto width <span class="small">this is responsive too! </span> <span class="small"><b>Window Width:</b> <span class="windowWidh"></span></span></h2>
                                <div class="demo">
                                    <ul id="autoWidth" class="content-slider list-unstyled cS-hidden">
                                        <li class="item-a">
                                            <h3>1 
                                                <small style="color: white;" class="hidden-xs">Width : 200</small>
                                                <small style="color: white;" class="hidden-sm hidden-md hidden-lg">Width : 100</small>
                                            </h3>
                                        </li>
                                        <li class="item-b">
                                            <h3>2<small style="color: white;" class="hidden-xs">Width : 340</small>
                                                <small style="color: white;" class="hidden-sm hidden-md hidden-lg">Width : 240</small></h3>
                                        </li>
                                        <li class="item-c">
                                            <h3>3<small style="color: white;" class="hidden-xs">Width : 290</small>
                                                <small style="color: white;" class="hidden-sm hidden-md hidden-lg">Width : 190</small></h3>
                                        </li>
                                        <li class="item-d">
                                            <h3>4<small style="color: white;" class="hidden-xs">Width : 220</small>
                                                <small style="color: white;" class="hidden-sm hidden-md hidden-lg">Width : 120</small></h3>
                                        </li>
                                        <li class="item-e">
                                            <h3>5<small style="color: white;" class="hidden-xs">Width : 350</small>
                                                <small style="color: white;" class="hidden-sm hidden-md hidden-lg">Width : 150</small></h3>
                                        </li>
                                        <li class="item-d">
                                            <h3>6<small style="color: white;" class="hidden-xs">Width : 220</small>
                                                <small style="color: white;" class="hidden-sm hidden-md hidden-lg">Width : 120</small></h3>
                                        </li>
                                        <li class="item-c">
                                            <h3>7<small style="color: white;" class="hidden-xs">Width : 290</small>
                                                <small style="color: white;" class="hidden-sm hidden-md hidden-lg">Width : 190</small></h3>
                                        </li>
                                        <li class="item-e">
                                            <h3>8<small style="color: white;" class="hidden-xs">Width : 350</small>
                                                <small style="color: white;" class="hidden-sm hidden-md hidden-lg">Width : 150</small></h3>
                                        </li>
                                        <li class="item-a">
                                            <h3>9<small style="color: white;" class="hidden-xs">Width : 200</small>
                                                <small style="color: white;" class="hidden-sm hidden-md hidden-lg">Width : 100</small></h3>
                                        </li>
                                        <li class="item-b">
                                            <h3>10<small style="color: white;" class="hidden-xs">Width : 340</small>
                                                <small style="color: white;" class="hidden-sm hidden-md hidden-lg">Width : 240</small></h3>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="call">
                            <pre class="prettyprint linenums">
  $(document).ready(function() {
    $('#autoWidth').lightSlider({
        autoWidth:true,
        loop:true,
        onSliderLoad: function() {
            $('#autoWidth').removeClass('cS-hidden');
        } 
    });  
  });</pre>
<pre class="prettyprint linenums">
&lt;ul id="autoWidth" class="cs-hidden"&gt;
  &lt;li class="item-a"&gt;&lt;/li&gt;
  &lt;li class="item-b"&gt;&lt;/li&gt;
  &lt;li class="item-c"&gt;&lt;/li&gt;
  &lt;li class="item-d"&gt;&lt;/li&gt;
  &lt;li class="item-e"&gt;&lt;/li&gt;
&lt;/ul&gt;</pre>   
                                </div>    
                                </div>
                                <div class="col-md-6"> 
                                    <div class="call">
                            <pre class="prettyprint linenums">
.item-a { width:200px; }
.item-b { width:340px; }
.item-c { width:290px; }
.item-d { width:220px; }
.item-e { width:350px; }
@media (max-width: 768px) {
    .item-a { width:100px; }
    .item-b { width:240px; }
    .item-c { width:190px; }
    .item-d { width:120px; }
    .item-e { width:250px; }
}
</pre>  
                           
                                </div>
                            </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                     <h3>Note</h3>
                            <ul class="pdl0 note">
                                <li>cS-hidden is a utility css class to prevent displaying slider before execution (Optional) </li>
                                <li>It should remove once the slider is fully loaded </li>
                            </ul> 
                                <pre class="prettyprint linenums">
.cS-hidden {
    height: 1px;
    opacity: 0;
    filter: alpha(opacity=0);
    overflow: hidden;
}
</pre>
                                </div>
                            </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12">
            	<section class="install">
                        <h2>rtl mode</h2>
                        <div class="demo hasActive">
                            <ul id="rtl" class="content-slider list-unstyled clearfix cS-hidden">
                                <li>
                                    <h3>1</h3>
                                </li>
                                <li>
                                    <h3>2</h3>
                                </li>
                                <li>
                                    <h3>3</h3>
                                </li>
                                <li>
                                    <h3>4</h3>
                                </li>
                                <li>
                                    <h3>5</h3>
                                </li>
                                <li>
                                    <h3>6</h3>
                                </li>
                            </ul>
                        </div>
                                
                    <div class="call">
                        <pre class="prettyprint linenums" style="margin-top:0;">
$(document).ready(function() {
    $('#rtl').lightSlider({
        rtl:true
    });
});</pre>
                        </div>
                    </section>
                
            </div>
        </div>
    </div>
    <div class="hero" style="margin-top:20px;border-top:1px solid #F1F1F1">
        <div class="container-fluid example">
            <div class="row" >
                <div class="col-xs-12">
                	<section class="install">
                        <h2>Integrate with <a target="_blank" href="http://sachinchoolur.github.io/lightGallery/">lightGallery</a></h2>
                        <div class="row" style="margin-bottom:0;">
                            <div class="col-sm-12">
                                <p>Include lightGallery.js and lightGallery.css into your document.</p>
                                <p>When you use loop true use lightGallery selector property to avoid duplicate slides which is generated by lightslider ex: selector: '#imageGallery .lslide'</p>
                        <pre class="prettyprint linenums">
&lt;link type="text/css" rel="stylesheet" href="css/lightGallery.css" /&gt;                  
&lt;script src="js/lightGallery.js"&gt;&lt;/script&gt;
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="demo">
                                    <ul id="imageGallery" class="gallery list-unstyled">
                                        <li data-thumb="img/thumb/cS-1.jpg" data-src="http://sachinchoolur.github.io/lightslider/img/cS-1.jpg"> 
                                            <img src="img/cS-1.jpg" />
                                            </li>
                                        <li data-thumb="img/thumb/cS-2.jpg" data-src="http://sachinchoolur.github.io/lightslider/img/cS-2.jpg"> 
                                            <img src="img/cS-2.jpg" />
                                            </li>
                                        <li data-thumb="img/thumb/cS-3.jpg" data-src="http://sachinchoolur.github.io/lightslider/img/cS-3.jpg"> 
                                            <img src="img/cS-3.jpg" />
                                            </li>
                                        <li data-thumb="img/thumb/cS-4.jpg" data-src="http://sachinchoolur.github.io/lightslider/img/cS-4.jpg"> 
                                            <img src="img/cS-4.jpg" />
                                            </li>
                                        <li data-thumb="img/thumb/cS-5.jpg" data-src="http://sachinchoolur.github.io/lightslider/img/cS-5.jpg"> 
                                            <img src="img/cS-5.jpg" />
                                            </li>
                                        <li data-thumb="img/thumb/cS-6.jpg" data-src="http://sachinchoolur.github.io/lightslider/img/cS-6.jpg"> 
                                            <img src="img/cS-6.jpg" />
                                            </li>
                                        <li data-thumb="img/thumb/cS-7.jpg" data-src="http://sachinchoolur.github.io/lightslider/img/cS-7.jpg"> 
                                            <img src="img/cS-7.jpg" />
                                            </li>
                                        <li data-thumb="img/thumb/cS-8.jpg" data-src="http://sachinchoolur.github.io/lightslider/img/cS-8.jpg"> 
                                            <img src="img/cS-8.jpg" />
                                            </li>
                                        <li data-thumb="img/thumb/cS-9.jpg" data-src="http://sachinchoolur.github.io/lightslider/img/cS-9.jpg"> 
                                            <img src="img/cS-9.jpg" />
                                            </li>
                                        <li data-thumb="img/thumb/cS-10.jpg" data-src="http://sachinchoolur.github.io/lightslider/img/cS-10.jpg"> 
                                            <img src="img/cS-10.jpg" />
                                            </li>
                                        <li data-thumb="img/thumb/cS-11.jpg" data-src="http://sachinchoolur.github.io/lightslider/img/cS-11.jpg"> 
                                            <img src="img/cS-11.jpg" />
                                            </li>
                                        <li data-thumb="img/thumb/cS-12.jpg" data-src="http://sachinchoolur.github.io/lightslider/img/cS-12.jpg"> 
                                            <img src="img/cS-12.jpg" />
                                            </li>
                                        <li data-thumb="img/thumb/cS-13.jpg" data-src="http://sachinchoolur.github.io/lightslider/img/cS-13.jpg"> 
                                            <img src="img/cS-13.jpg" />
                                            </li>
                                        <li data-thumb="img/thumb/cS-14.jpg" data-src="http://sachinchoolur.github.io/lightslider/img/cS-14.jpg"> 
                                            <img src="img/cS-14.jpg" />
                                            </li>
                                        <li data-thumb="img/thumb/cS-15.jpg" data-src="http://sachinchoolur.github.io/lightslider/img/cS-15.jpg"> 
                                            <img src="img/cS-15.jpg" />
                                            </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="call">
                            <pre class="prettyprint linenums" style="margin-top:0;">
  $(document).ready(function() {
    $('#imageGallery').lightSlider({
        gallery:true,
        item:1,
        loop:true,
        thumbItem:9,
        slideMargin:0,
        enableDrag: false,
        currentPagerPosition:'left',
        onSliderLoad: function(el) {
            el.lightGallery({
                selector: '#imageGallery .lslide'
            });
        }   
    });  
  });</pre>
<pre class="prettyprint linenums">
&lt;ul id="imageGallery"&gt;
  &lt;li data-thumb="img/thumb/cS-1.jpg" data-src="img/largeImage.jpg"&gt;
    &lt;img src="img/cS-1.jpg" /&gt;
  &lt;/li&gt;
  &lt;li data-thumb="img/thumb/cS-2.jpg" data-src="img/largeImage1.jpg"&gt;
    &lt;img src="img/cS-2.jpg" /&gt;
  &lt;/li&gt;
&lt;/ul&gt;</pre>   
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12">
                <section class="install">

                        <h2>AdaptiveHeight</h2>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="demo hasActive">
                                    <ul id="adaptive" class="gallery content-slider list-unstyled clearfix cS-hidden">
                                        <li>
                                            <h3 style="padding:70px 0">1</h3>
                                        </li>
                                        <li>
                                            <h3 style="padding:80px 0">2</h3>
                                        </li>
                                        <li>
                                            <h3 style="padding:75px 0">3</h3>
                                        </li>
                                        <li>
                                            <h3 style="padding:90px 0">4</h3>
                                        </li>
                                        <li>
                                            <h3 style="padding:78px 0">5</h3>
                                        </li>
                                        <li>
                                            <h3 style="padding:86px 0">6</h3>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                
                    <div class="call">
                        <pre class="prettyprint linenums" style="margin-top:0;">
$(document).ready(function() {
    $('#adaptive').lightSlider({
        adaptiveHeight:true,
        item:1,
        slideMargin:0,
        loop:true
    });
});</pre>
                    </div>
                            </div>
                        </div>
                    </section>
                
            </div>
        </div>
    </div>
    <div class="hero" style="margin-top:20px;border-top:1px solid #F1F1F1">
        <div class="container-fluid example">
            <div class="row">
                <div class="col-xs-12">
                    <section class="install">
                        <h2>Vertical mode</h2>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="demo">
                                    <ul id="vertical" class="gallery list-unstyled">
                                        <li data-thumb="img/thumb/cS-1.jpg"> 
                                            <img src="img/cS-1.jpg" />
                                            </li>
                                        <li data-thumb="img/thumb/cS-2.jpg"> 
                                            <img src="img/cS-2.jpg" />
                                            </li>
                                        <li data-thumb="img/thumb/cS-3.jpg"> 
                                            <img src="img/cS-3.jpg" />
                                            </li>
                                        <li data-thumb="img/thumb/cS-4.jpg"> 
                                            <img src="img/cS-4.jpg" />
                                            </li>
                                        <li data-thumb="img/thumb/cS-5.jpg"> 
                                            <img src="img/cS-5.jpg" />
                                            </li>
                                        <li data-thumb="img/thumb/cS-6.jpg"> 
                                            <img src="img/cS-6.jpg" />
                                            </li>
                                        <li data-thumb="img/thumb/cS-7.jpg"> 
                                            <img src="img/cS-7.jpg" />
                                            </li>
                                        <li data-thumb="img/thumb/cS-8.jpg"> 
                                            <img src="img/cS-8.jpg" />
                                            </li>
                                        <li data-thumb="img/thumb/cS-9.jpg"> 
                                            <img src="img/cS-9.jpg" />
                                            </li>
                                        <li data-thumb="img/thumb/cS-10.jpg"> 
                                            <img src="img/cS-10.jpg" />
                                            </li>
                                        <li data-thumb="img/thumb/cS-11.jpg"> 
                                            <img src="img/cS-11.jpg" />
                                            </li>
                                        <li data-thumb="img/thumb/cS-12.jpg"> 
                                            <img src="img/cS-12.jpg" />
                                            </li>
                                        <li data-thumb="img/thumb/cS-13.jpg"> 
                                            <img src="img/cS-13.jpg" />
                                            </li>
                                        <li data-thumb="img/thumb/cS-14.jpg"> 
                                            <img src="img/cS-14.jpg" />
                                            </li>
                                        <li data-thumb="img/thumb/cS-15.jpg"> 
                                            <img src="img/cS-15.jpg" />
                                            </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="call">
                            <pre class="prettyprint linenums" style="margin-top:0;">
  $(document).ready(function() {
    $('#vertical').lightSlider({
      gallery:true,
      item:1,
      vertical:true,
      verticalHeight:295,
      vThumbWidth:50,
      thumbItem:8,
      thumbMargin:4,
      slideMargin:0
    });  
  });</pre>
<pre class="prettyprint linenums">
&lt;ul id="vertical"&gt;
  &lt;li data-thumb="img/thumb/cS-1.jpg"&gt;
    &lt;img src="img/cS-1.jpg" /&gt;
  &lt;/li&gt;
  &lt;li data-thumb="img/thumb/cS-2.jpg"&gt;
    &lt;img src="img/cS-2.jpg" /&gt;
  &lt;/li&gt;
&lt;/ul&gt;</pre>   
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12">
                <section class="install">
                        <h2>Autoplay with loop, pause on hover, display slide count</h2>
                                <h4 style="margin:0 0 10px 0;"><span id="current">1</span> of <span id="total"></span></h4>
                                
                                <div class="demo hasActive">
                                    <ul id="autoplay" class="gallery content-slider list-unstyled clearfix cS-hidden">
                                        <li>
                                            <h3>1</h3>
                                        </li>
                                        <li>
                                            <h3>2</h3>
                                        </li>
                                        <li>
                                            <h3>3</h3>
                                        </li>
                                        <li>
                                            <h3>4</h3>
                                        </li>
                                        <li>
                                            <h3>5</h3>
                                        </li>
                                        <li>
                                            <h3>6</h3>
                                        </li>
                                    </ul>
                                </div>
                                
                    <div class="call">
                        <pre class="prettyprint linenums" style="margin-top:0;">
$(document).ready(function() {
    var autoplaySlider = $('#autoplay').lightSlider({
        auto:true,
        loop:true,
        pauseOnHover: true,
        onBeforeSlide: function (el) {
            $('#current').text(el.getCurrentSlideCount());
        } 
    });
    $('#total').text(autoplaySlider.getTotalSlideCount());
});</pre>
                    </div>
                    </section>
                
            </div>
        </div>
    </div>
    <div class="hero" style="margin-top:20px;border-top:1px solid #F1F1F1" id="relBlock">
        <div class="container-fluid example">
            <div class="row">
                    <div class="col-xs-12 hasActive">
                        <section class="install">
                        <h2>Public Methods</h2>
                        <div class="demo">
                            <ul id="publicMethods" class="gallery list-unstyled clearfix">
                                <li> 
                                    <img src="img/cS-1.jpg" />
                                     </li>
                                <li> 
                                    <img src="img/cS-2.jpg" />
                                     </li>
                                <li> 
                                    <img src="img/cS-3.jpg" />
                                     </li>
                                <li> 
                                    <img src="img/cS-4.jpg" />
                                     </li>
                                <li> 
                                    <img src="img/cS-5.jpg" />
                                     </li>
                                <li> 
                                    <img src="img/cS-6.jpg" />
                                     </li>
                                <li> 
                                    <img src="img/cS-7.jpg" />
                                     </li>
                                <li> 
                                    <img src="img/cS-8.jpg" />
                                     </li>
                                <li> 
                                    <img src="img/cS-9.jpg" />
                                     </li>
                                <li> 
                                    <img src="img/cS-10.jpg" />
                                     </li>
                            </ul>
                            <div class="buttons" style="margin-top: 20px;">
                           		<button class="btn btn-success" type="button" id="goToSlide">Go To Slide</button>
                                <button class="btn btn-success" type="button" id="goToPrevSlide">Go To Prev Slide</button>
                                <button class="btn btn-success" type="button" id="goToNextSlide">Go To Next Slide</button>
                            	<button class="btn btn-success" type="button" id="getCurrentSlideCount">getCurrentSlideCount</button>
                                <button class="btn btn-success" type="button" id="addSlide">add Slide</button>
                                <button class="btn btn-success" type="button" id="play">Play</button>
                                <button class="btn btn-success" type="button" id="pause">Pause</button>
                                <button class="btn btn-success" type="button" id="destroy">Destroy</button>
                                <button class="btn btn-success" type="button" id="rebuild">Rebuild</button>
                            </div>
                        </div>
                        <div class="call">
                            <pre class="prettyprint linenums" style="margin-top:0;">
  $(document).ready(function() {
    var slider = $('#publicMethods').lightSlider({
        slideMargin:4,
        slideWidth:200,
        loop:false
    });
    $('#goToSlide').click(function(){
        slider.goToSlide(3);    
    });
    $('#goToPrevSlide').click(function(){
        slider.goToPrevSlide(); 
    });
    $('#goToNextSlide').click(function(){
        slider.goToNextSlide(); 
    });
    $('#getCurrentSlideCount').click(function(){
        slider.getCurrentSlideCount(); 
    });
    $('#addSlide').click(function() {

        // Class 'lslide' needs to be added with new slide item
        var newEl = ' &lt;li class="lslide"&gt; &lt;a href="javascript:void(0)"&gt;&lt;img src="img/cS-1.jpg" /&gt;&lt;/a&gt; &lt;/li&gt;';
        $('#publicMethods').prepend(newEl);
        slider.refresh();
    });
    $('#play').click(function(){
        slider.play();    
    });
    $('#pause').click(function(){
        slider.pause();    
    });
    $('#destroy').click(function(){
        slider.destroy();    
    });
    $('#rebuild').click(function(){
        if (!slider.lightSlider) {
            slider = $('#publicMethods').lightSlider({
                slideMargin:4,
                slideWidth:200,
                loop:false
            });  
        }
    });
  });</pre>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12">
                <section class="install">
                <div style=" padding: 30px 0px 0px; overflow: hidden;">
                          <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- exampleMiddle -->
<ins class="adsbygoogle"
     style="display:inline-block;width:728px;height:90px"
     data-ad-client="ca-pub-2888290830590449"
     data-ad-slot="6791646212"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
                        </div>
                    <h2>Callbacks</h2>
                    <div class="demo hasActive">
                        <ul id="callback" class="content-slider list-unstyled clearfix">
                            <li>
                                <h3>1</h3>
                            </li>
                            <li>
                                <h3>2</h3>
                            </li>
                            <li>
                                <h3>3</h3>
                            </li>
                            <li>
                                <h3>4</h3>
                            </li>
                            <li>
                                <h3>5</h3>
                            </li>
                            <li>
                                <h3>6</h3>
                            </li>
                        </ul>
                    </div>
                                
                    <div class="call">
                        <pre class="prettyprint linenums" style="margin-top:0;">
$(document).ready(function() {
  $('#callback').lightSlider({
    onBeforeStart: function (el) {
        console.log('onBeforeStart',el);
    },
    onSliderLoad: function (el) {
        el.addClass('classAddedBeforeSliderLoad');
    },
    onBeforeSlide: function (el) {
        alert('onBeforeSlide');
    },
    onAfterSlide: function (el) {
        alert('onAfterSlide');
    },
    onBeforeNextSlide: function (el) {
        alert('onBeforeNextSlide');
    },
    onBeforePrevSlide: function (el) {
        alert('onBeforePrevSlide');
    }
});
});</pre>
                    </div>
                    </section>
                    <div class="follow" style="margin-top:60px; margin-bottom:60px;">
                <a href="https://twitter.com/sachinchoolur" class="twitter-follow-button" data-show-count="false">Follow @sachinchoolur</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
<!-- Place this tag where you want the button to render. -->
<a class="github-button" href="https://github.com/sachinchoolur">Follow @sachinchoolur</a>
<!-- Place this tag right after the last button or just before your close body tag. -->
<script async defer id="github-bjs" src="https://buttons.github.io/buttons.js"></script>
                    <h5 style="margin-top: 20px;">Think you can improve this page? <a target="_blank" href="https://github.com/sachinchoolur/lightslider/fork"> fork me on github</a></h5>
                </div>
                
            </div>
        </div>
    </div>
    <div class="spread">
        <h3>Please spread the word if you like lightSlider</h3>
        <div class="clearfix">
            <div id="twitter" data-url="http://sachinchoolur.github.io/lightslider/" data-text="#jQuery lightSlider - Lightweight responsive content slider with carousel thumbnails navigation #javascript"></div>
            <div id="facebook" data-url="http://sachinchoolur.github.io/lightslider/" data-text="jQuery lightSlider - Lightweight responsive content slider with carousel thumbnails navigation" ></div>
            <div id="googleplus" data-url="http://sachinchoolur.github.io/lightslider/" data-text="#jQuery lightSlider - Lightweight  responsive content slider with carousel thumbnails navigation"></div>    
        </div>
    </div>
</div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script> 
<script src="src/js/lightslider.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.2.19/js/lightgallery-all.min.js"></script> 
<script src="js/prettify.js"></script> 
<script src="js/jquery.sharrre.min.js"></script>
<script type="text/javascript">
	var site = $('#site');
    
    $(document).ready(function() {
        window.prettyPrint && prettyPrint();
        $('.windowWidh').text($(window).width());
        $('#responsive').lightSlider({
            item:4,
            slideMove:2,
            loop:false,
            cssEasing: 'cubic-bezier(0.25, 0, 0.25, 1)',
            speed:600,
            responsive : [
                {
                    breakpoint:800,
                    settings: {
                        item:3,
                        slideMove:1,
                        slideMargin:6,
                      }
                },
                {
                    breakpoint:480,
                    settings: {
                        item:2,
                        slideMove:1
                      }
                }
            ],
            onSliderLoad: function() {
                $('#responsive').removeClass('cS-hidden');
            } 
        });   
		$('#autoWidth').lightSlider({
            autoWidth:true,
            loop:true,
            onSliderLoad: function() {
                $('#autoWidth').removeClass('cS-hidden');
            } 
        });
        $('#adaptive').lightSlider({
            adaptiveHeight:true,
            item:1,
            slideMargin:0,
            loop:true,
            onSliderLoad: function() {
                $('#adaptive').removeClass('cS-hidden');
            } 
        });
        var autoplaySlider = $('#autoplay').lightSlider({
            auto:true,
            loop:true,
            pauseOnHover: true,
            onSliderLoad: function() {
                $('#autoplay').removeClass('cS-hidden');
            },
            onBeforeSlide: function (el) {
                $('#current').text(el.getCurrentSlideCount());
            } 
        });
        $('#total').text(autoplaySlider.getTotalSlideCount());

        $('#rtl').lightSlider({
			rtl:true,
            onSliderLoad: function() {
                $('#rtl').removeClass('cS-hidden');
            } 
        });
		$('#imageGallery').lightSlider({
            gallery:true,
            item:1,
            loop:true,
            thumbItem:9,
            slideMargin:0,
            enableDrag: false,
            currentPagerPosition:'left',
            onSliderLoad: function(el) {
                el.lightGallery({
                    selector: '#imageGallery .lslide'
                });
            }   
        });
        $('#callback').lightSlider({
            onBeforeStart: function (el) {
                console.log('onBeforeStart',el);
            },
            onSliderLoad: function (el) {
                el.addClass('classAddedBeforeSliderLoad');
            },
            onBeforeSlide: function (el) {
                alert('onBeforeSlide');
            },
            onAfterSlide: function (el) {
                alert('onAfterSlide');
            },
            onBeforeNextSlide: function (el) {
                alert('onBeforeNextSlide');
            },
            onBeforePrevSlide: function (el) {
                alert('onBeforePrevSlide');
            }
        });
        $('#vertical').lightSlider({
            gallery:true,
            item:1,
            vertical:true,
            verticalHeight:295,
            vThumbWidth:50,
            thumbItem:9,
            thumbMargin:4,
            slideMargin:0
        });
		var slider = $('#publicMethods').lightSlider({
			slideMargin:4,
            slideWidth:200,
            item:4
        });
		$('#goToSlide').click(function(){
			slider.goToSlide(3);	
		});
		$('#goToPrevSlide').click(function(){
			slider.goToPrevSlide();	
		});
		$('#goToNextSlide').click(function(){
			slider.goToNextSlide();	
		});
         $('#getCurrentSlideCount').click(function(){
            alert(slider.getCurrentSlideCount());
        });
		$('#addSlide').click(function() {
            var newEl = ' <li class="lslide"> <a href="javascript:void(0)"><img src="img/cS-1.jpg" /></a> </li>';
            $('#publicMethods').prepend(newEl);
            slider.refresh();
        });
        $('#play').click(function(){
            slider.play();    
        });
        $('#pause').click(function(){
            slider.pause();    
        });
        $('#destroy').click(function(){
            slider.destroy();    
        });
        $('#rebuild').click(function(){
            if (!slider.lightSlider) {
                slider = $('#publicMethods').lightSlider({
                    slideMargin:4,
                    slideWidth:200,
                    item:4
                });  
            }
        });
        var clk = true;
        $('.btn-navbar').on('click',function(){
            if(site.hasClass('translate')){
                clk = false;    
                site.removeClass('translate');  
                setTimeout(function(){
                    $("#mast-head").css('display','none');  
                    clk = true;
                },700);
            }else if(clk){
                $("#mast-head").css('display','block'); 
                site.addClass('translate');     
            }
        });
        $('#site').on('touchmove', function(e) {
            if($(this).hasClass('translate')){
                e.preventDefault();
            }
        });
        $('#site > .nav-over').on('click touchstart',function(e){
            e.preventDefault();
            e.stopPropagation();
            clk = false;
            site.removeClass('translate');  
            setTimeout(function(){
                $("#mast-head").css('display','none');  
                clk = true;
            },700); 
        })
        $(window).on("resize orientationchange", function(){
            $('#windowWidh').text($(window).width())
            if($(window).width() > 767){
                $("#mast-head").css('display','block'); 
                site.removeClass('translate');
            }else if(!site.hasClass('translate')){
                $("#mast-head").css('display','none');      
            }
        });
        $('#twitter').sharrre({
          share: {
            twitter: true
          },
          enableHover: false,
          enableTracking: true,
          buttons: { twitter: {}},
          click: function(api, options){
            api.simulateClick();
            api.openPopup('twitter');
          }
        });
        $('#facebook').sharrre({
          share: {
            facebook: true
          },
          enableHover: false,
          enableTracking: true,
          click: function(api, options){
            api.simulateClick();
            api.openPopup('facebook');
          }
        });
        $('#googleplus').sharrre({
          share: {
            googlePlus: true
          },
          enableHover: false,
          enableTracking: true,
          click: function(api, options){
            api.simulateClick();
            api.openPopup('googlePlus');
          }
        });
    });
</script>
</body>
</html>