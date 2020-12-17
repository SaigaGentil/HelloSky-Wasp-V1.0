<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>HelloSky | Wasp</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%
        }

        body {
            margin: 0
        }

        a {
            background-color: transparent
        }

        [hidden] {
            display: none
        }

        html {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
            line-height: 1.5
        }

        *,
        :after,
        :before {
            box-sizing: border-box;
            border: 0 solid #e2e8f0
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        svg,
        video {
            display: block;
            vertical-align: middle
        }

        video {
            max-width: 100%;
            height: auto
        }

        .bg-white {
            --bg-opacity: 1;
            background-color: #fff;
            background-color: rgba(255, 255, 255, var(--bg-opacity))
        }

        .bg-gray-100 {
            --bg-opacity: 1;
            background-color: #f7fafc;
            background-color: rgba(247, 250, 252, var(--bg-opacity))
        }

        .border-gray-200 {
            --border-opacity: 1;
            border-color: #edf2f7;
            border-color: rgba(237, 242, 247, var(--border-opacity))
        }

        .border-t {
            border-top-width: 1px
        }

        .flex {
            display: flex
        }

        .grid {
            display: grid
        }

        .hidden {
            display: none
        }

        .items-center {
            align-items: center
        }

        .justify-center {
            justify-content: center
        }

        .font-semibold {
            font-weight: 600
        }

        .h-5 {
            height: 1.25rem
        }

        .h-8 {
            height: 2rem
        }

        .h-16 {
            height: 4rem
        }

        .text-sm {
            font-size: .875rem
        }

        .text-lg {
            font-size: 1.125rem
        }

        .leading-7 {
            line-height: 1.75rem
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto
        }

        .ml-1 {
            margin-left: .25rem
        }

        .mt-2 {
            margin-top: .5rem
        }

        .mr-2 {
            margin-right: .5rem
        }

        .ml-2 {
            margin-left: .5rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .ml-4 {
            margin-left: 1rem
        }

        .mt-8 {
            margin-top: 2rem
        }

        .ml-12 {
            margin-left: 3rem
        }

        .-mt-px {
            margin-top: -1px
        }

        .max-w-6xl {
            max-width: 72rem
        }

        .min-h-screen {
            min-height: 100vh
        }

        .overflow-hidden {
            overflow: hidden
        }

        .p-6 {
            padding: 1.5rem
        }

        .py-4 {
            padding-top: 1rem;
            padding-bottom: 1rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .pt-8 {
            padding-top: 2rem
        }

        .fixed {
            position: fixed
        }

        .relative {
            position: relative
        }

        .top-0 {
            top: 0
        }

        .right-0 {
            right: 0
        }

        .shadow {
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06)
        }

        .text-center {
            text-align: center
        }

        .text-gray-200 {
            --text-opacity: 1;
            color: #edf2f7;
            color: rgba(237, 242, 247, var(--text-opacity))
        }

        .text-gray-300 {
            --text-opacity: 1;
            color: #e2e8f0;
            color: rgba(226, 232, 240, var(--text-opacity))
        }

        .text-gray-400 {
            --text-opacity: 1;
            color: #cbd5e0;
            color: rgba(203, 213, 224, var(--text-opacity))
        }

        .text-gray-500 {
            --text-opacity: 1;
            color: #a0aec0;
            color: rgba(160, 174, 192, var(--text-opacity))
        }

        .text-gray-600 {
            --text-opacity: 1;
            color: #718096;
            color: rgba(113, 128, 150, var(--text-opacity))
        }

        .text-gray-700 {
            --text-opacity: 1;
            color: #4a5568;
            color: rgba(74, 85, 104, var(--text-opacity))
        }

        .text-gray-900 {
            --text-opacity: 1;
            color: #1a202c;
            color: rgba(26, 32, 44, var(--text-opacity))
        }

        .underline {
            text-decoration: underline
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .w-5 {
            width: 1.25rem
        }

        .w-8 {
            width: 2rem
        }

        .w-auto {
            width: auto
        }

        .grid-cols-1 {
            grid-template-columns: repeat(1, minmax(0, 1fr))
        }

        @media (min-width:640px) {
            .sm\:rounded-lg {
                border-radius: .5rem
            }

            .sm\:block {
                display: block
            }

            .sm\:items-center {
                align-items: center
            }

            .sm\:justify-start {
                justify-content: flex-start
            }

            .sm\:justify-between {
                justify-content: space-between
            }

            .sm\:h-20 {
                height: 5rem
            }

            .sm\:ml-0 {
                margin-left: 0
            }

            .sm\:px-6 {
                padding-left: 1.5rem;
                padding-right: 1.5rem
            }

            .sm\:pt-0 {
                padding-top: 0
            }

            .sm\:text-left {
                text-align: left
            }

            .sm\:text-right {
                text-align: right
            }
        }

        @media (min-width:768px) {
            .md\:border-t-0 {
                border-top-width: 0
            }

            .md\:border-l {
                border-left-width: 1px
            }

            .md\:grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr))
            }
        }

        @media (min-width:1024px) {
            .lg\:px-8 {
                padding-left: 2rem;
                padding-right: 2rem
            }
        }

        @media (prefers-color-scheme:dark) {
            .dark\:bg-gray-800 {
                --bg-opacity: 1;
                background-color: #2d3748;
                background-color: rgba(45, 55, 72, var(--bg-opacity))
            }

            .dark\:bg-gray-900 {
                --bg-opacity: 1;
                background-color: #000000;
                background-color: rgba(0, 0, 0, var(--bg-opacity))
            }

            .dark\:border-gray-700 {
                --border-opacity: 1;
                border-color: #4a5568;
                border-color: rgba(74, 85, 104, var(--border-opacity))
            }

            .dark\:text-white {
                --text-opacity: 1;
                color: #fff;
                color: rgba(255, 255, 255, var(--text-opacity))
            }

            .dark\:text-gray-400 {
                --text-opacity: 1;
                color: #cbd5e0;
                color: rgba(203, 213, 224, var(--text-opacity))
            }
        }

    </style>

    <style>
        body {
            font-family: 'Nunito';
        }

    </style>
</head>

<body class="antialiased">
    <div
        class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
        @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                    <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                    @endif
                @endauth
            </div>
        @endif

        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                <svg xmlns="http://www.w3.org/2000/svg" version="1.0" width="250.000000pt" height="49.000000pt"
                    viewBox="0 0 250.000000 49.000000" preserveAspectRatio="xMidYMid meet"
                    class="h-16 w-auto text-gray-700 sm:h-20">

                    <g transform="translate(0.000000,49.000000) scale(0.100000,-0.100000)" fill="#EF3B2D" stroke="none">
                        <path d="M1474 215 c0 -121 2 -169 3 -107 2 62 2 161 0 220 -1 59 -3 8 -3 -113z" />
                        <path
                            d="M180 230 c0 -60 4 -100 10 -100 6 0 10 23 10 50 l0 50 55 0 55 0 0 -50 c0 -27 5 -50 10 -50 6 0 10 40 10 100 0 60 -4 100 -10 100 -5 0 -10 -18 -10 -40 l0 -40 -55 0 -55 0 0 40 c0 22 -4 40 -10 40 -6 0 -10 -40 -10 -100z" />
                        <path
                            d="M520 230 c0 -60 4 -100 10 -100 6 0 10 40 10 100 0 60 -4 100 -10 100 -6 0 -10 -40 -10 -100z" />
                        <path
                            d="M580 230 c0 -60 4 -100 10 -100 6 0 10 40 10 100 0 60 -4 100 -10 100 -6 0 -10 -40 -10 -100z" />
                        <path
                            d="M810 310 c-37 -37 -22 -66 46 -86 46 -13 54 -19 54 -40 0 -17 -7 -25 -26 -30 -31 -8 -74 10 -74 31 0 8 -4 15 -10 15 -19 0 -10 -39 12 -54 51 -36 121 -7 116 47 -3 28 -8 34 -50 47 -60 19 -76 34 -58 55 18 22 56 19 80 -7 22 -24 34 -21 24 6 -14 37 -83 47 -114 16z" />
                        <path
                            d="M970 230 c0 -60 4 -100 10 -100 6 0 10 16 10 35 0 46 21 46 46 0 10 -19 24 -35 31 -35 9 0 3 17 -14 49 l-28 49 24 26 c35 37 13 32 -26 -6 l-33 -32 0 57 c0 31 -4 57 -10 57 -6 0 -10 -40 -10 -100z" />
                        <path
                            d="M1747 230 c14 -55 31 -100 37 -100 6 0 20 33 30 73 10 39 22 78 26 85 4 8 16 -23 29 -73 13 -47 28 -84 34 -82 6 2 21 41 33 88 26 91 28 109 16 109 -5 0 -17 -37 -29 -82 -11 -46 -23 -76 -26 -68 -3 8 -13 45 -23 83 -26 102 -39 91 -82 -73 -9 -34 -9 -33 -28 49 -11 47 -24 86 -31 88 -7 3 -1 -34 14 -97z" />
                        <path
                            d="M381 254 c-12 -15 -21 -37 -21 -49 0 -31 37 -75 64 -75 26 0 64 25 54 36 -4 4 -14 1 -22 -5 -22 -18 -58 -9 -67 17 -8 21 -6 22 46 22 62 0 68 10 34 54 -26 34 -62 34 -88 0z m79 -14 c10 -18 8 -20 -30 -20 -27 0 -40 4 -40 13 0 33 53 38 70 7z" />
                        <path
                            d="M651 254 c-24 -30 -26 -55 -10 -87 15 -28 28 -37 56 -37 26 0 63 44 63 75 0 32 -37 75 -65 75 -14 0 -32 -11 -44 -26z m81 -19 c18 -41 0 -80 -37 -80 -23 0 -32 6 -39 27 -14 39 6 78 39 78 18 0 29 -8 37 -25z" />
                        <path
                            d="M1115 215 c31 -81 31 -103 3 -114 -15 -5 -18 -10 -9 -15 6 -4 18 -3 26 4 14 11 75 161 75 183 0 23 -20 -10 -39 -63 l-19 -55 -18 63 c-10 35 -23 62 -30 62 -10 0 -6 -18 11 -65z" />
                        <path
                            d="M1998 269 c-10 -5 -18 -17 -18 -24 0 -20 16 -19 24 1 9 24 61 15 61 -11 0 -15 -9 -21 -39 -26 -52 -9 -69 -34 -40 -63 17 -18 42 -20 64 -6 9 5 19 5 27 -2 10 -8 13 3 13 55 0 55 -3 68 -19 77 -25 13 -51 12 -73 -1z m72 -83 c0 -21 -26 -38 -52 -34 -31 4 -29 30 2 39 39 11 50 10 50 -5z" />
                        <path
                            d="M2142 268 c-7 -7 -12 -22 -12 -35 0 -17 9 -25 40 -34 28 -9 40 -17 38 -28 -5 -23 -49 -27 -65 -5 -7 10 -16 15 -20 11 -10 -11 28 -47 49 -47 59 0 82 62 31 80 -40 14 -56 24 -55 35 2 15 41 18 58 4 21 -17 28 -5 9 15 -19 19 -56 21 -73 4z" />
                        <path
                            d="M2271 183 c-1 -63 3 -103 9 -103 6 0 10 14 10 30 0 27 3 30 24 24 60 -15 94 97 41 132 -20 13 -31 15 -50 6 -18 -8 -25 -8 -29 1 -2 7 -5 -34 -5 -90z m77 65 c17 -17 15 -73 -3 -88 -22 -18 -48 -8 -59 22 -19 53 27 101 62 66z" />
                    </g>
                </svg>
            </div>

            <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                <div class="grid grid-cols-1 md:grid-cols-2">
                    <div class="p-6">
                        <div class="flex items-center">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                                <path
                                    d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253">
                                </path>
                            </svg>
                            <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel.com/docs"
                                    class="underline text-gray-900 dark:text-white">About HelloSky Wasp</a></div>
                        </div>

                        <div class="ml-12">
                            <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                HelloSky Wasp's goal is to provide revolutionary smart city solutions, IT infrastructure
                                monitoring and automation solutions
                            </div>
                        </div>
                    </div>

                    <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                        <div class="flex items-center">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                                <path
                                    d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z">
                                </path>
                                <path
                                    d="M7484 12789 c-67 -19 -123 -121 -109 -198 15 -81 61 -135 125 -148 l30 -6 -2 -2120 -3 -2121 -47 3 -48 3 0 -166 0 -166 -195 0 -195 0 -2 163 -3 162 -55 1 -55 1 -3 1128 c-2 1114 -2 1127 18 1152 27 35 43 99 35 142 -10 57 -50 116 -91 136 -49 23 -148 17 -186 -10 -65 -48 -90 -154 -55 -236 20 -50 76 -90 132 -97 l45 -5 -2 -1104 -3 -1105 -85 -2 -85 -1 -3 -162 -2 -163 -195 0 -194 0 0 163 0 162 -83 0 -83 0 -5 720 -5 720 -542 3 -543 2 0 755 0 755 28 42 c23 36 27 52 27 113 0 63 -3 76 -28 108 -38 50 -75 67 -145 67 -45 0 -67 -6 -93 -23 -67 -44 -98 -153 -65 -230 17 -41 76 -93 115 -102 l31 -7 0 -789 0 -789 555 0 555 0 0 -672 0 -673 -52 0 -53 0 -3 -162 -2 -163 -195 0 -195 0 -2 163 -3 162 -48 0 -47 0 0 418 0 417 -633 0 -634 0 -24 26 c-37 40 -73 54 -137 54 -45 0 -67 -5 -93 -23 -110 -74 -104 -253 11 -314 109 -58 238 3 257 122 l6 35 553 0 554 0 -2 -366 -3 -367 -70 -1 -70 -1 -3 -162 -2 -163 -195 0 -195 0 -2 163 -3 162 -30 0 -30 1 -3 182 -2 182 -1093 0 -1092 0 -50 26 c-123 63 -255 -19 -255 -159 0 -62 19 -105 63 -144 93 -82 246 -32 279 91 l12 46 1003 0 1004 0 -3 -111 -3 -111 -95 -1 -95 -2 -3 -162 -2 -163 -240 0 -240 0 0 -345 0 -345 -165 0 -165 0 0 -40 0 -40 -1038 0 -1039 0 -33 41 c-94 117 -272 81 -310 -63 -21 -77 10 -159 79 -205 26 -17 48 -23 91 -23 67 0 111 25 149 83 l24 37 1039 0 1038 0 0 -90 0 -90 165 0 165 0 0 -195 0 -195 -165 0 -165 0 0 -70 0 -70 -1610 0 -1610 0 0 930 0 930 25 16 c41 27 68 96 63 165 -5 62 -23 97 -69 132 -56 41 -152 41 -208 0 -58 -42 -85 -139 -60 -214 13 -38 63 -96 91 -105 17 -5 18 -51 20 -997 l3 -992 1677 -3 1678 -2 0 -60 0 -60 165 0 165 0 0 -195 0 -195 -164 0 -165 0 -3 -47 -3 -48 -1037 -3 -1036 -2 -31 -39 -31 -39 0 -740 0 -740 -35 -6 c-110 -21 -168 -180 -101 -278 35 -51 70 -71 134 -76 100 -7 158 35 184 133 13 50 0 125 -28 156 -12 13 -14 125 -14 753 0 489 -3 744 -10 757 -11 19 4 19 1000 19 l1010 0 0 -95 0 -95 165 0 165 0 0 -285 0 -285 300 0 300 0 0 -165 0 -165 40 0 40 0 0 -779 c0 -772 0 -779 -21 -805 l-20 -26 -657 0 -657 1 -20 31 c-30 48 -78 71 -145 71 -104 0 -173 -71 -174 -178 -1 -197 249 -255 334 -78 l25 53 674 0 673 0 59 51 59 51 0 804 0 804 90 0 90 0 0 165 0 165 195 0 195 0 0 -161 c0 -152 1 -161 20 -166 20 -5 20 -14 20 -1818 l0 -1814 -26 -20 c-26 -21 -36 -21 -550 -21 -330 0 -524 4 -524 10 0 18 -65 83 -97 96 -80 34 -178 2 -221 -71 -33 -58 -28 -157 11 -209 41 -53 78 -69 151 -64 74 4 116 30 143 88 l18 39 541 1 541 0 74 53 74 53 3 1837 2 1836 108 3 107 3 3 163 2 162 195 0 195 0 0 -165 0 -165 50 0 50 0 0 -1520 0 -1519 -42 -12 c-110 -29 -154 -161 -94 -277 32 -62 117 -93 197 -72 116 31 163 186 88 291 -18 26 -19 71 -19 1568 l0 1541 80 0 80 0 0 165 0 165 195 0 195 0 0 -165 0 -165 80 0 80 0 0 -1995 c0 -1961 0 -1994 -19 -2005 -13 -6 -241 -10 -671 -10 -647 0 -651 0 -679 21 -78 57 -194 37 -255 -44 -32 -43 -34 -150 -4 -202 41 -71 143 -104 221 -71 44 18 95 78 103 121 l6 35 650 0 651 0 68 56 69 56 0 2019 0 2019 45 0 45 0 0 165 0 165 195 0 195 0 2 -163 3 -162 195 0 195 0 3 163 2 162 195 0 195 0 0 -165 0 -165 195 0 195 0 0 165 0 165 195 0 195 0 2 -162 3 -163 192 -3 193 -2 2 162 3 163 393 3 392 2 0 490 0 490 160 0 160 0 0 60 0 60 660 0 660 0 0 -770 0 -770 -39 -24 c-77 -49 -103 -161 -58 -247 58 -109 218 -122 293 -23 26 34 29 45 29 114 0 69 -3 80 -29 114 -16 21 -44 44 -62 52 l-34 14 -2 838 -3 837 -707 3 -708 2 0 68 0 67 -160 -3 -160 -3 0 201 0 200 160 0 159 0 3 88 3 87 801 3 801 2 18 -41 c61 -134 254 -130 316 6 65 143 -52 291 -201 255 -44 -11 -110 -59 -110 -81 0 -5 -344 -8 -812 -7 l-813 3 -3 38 -3 37 -160 0 -159 0 0 530 0 530 -450 0 -450 0 -2 163 c-2 123 -6 161 -15 160 -10 -2 -13 184 -13 907 l0 910 900 0 899 0 19 -43 c28 -63 72 -91 152 -95 55 -3 70 0 99 20 62 42 76 70 76 156 0 90 -21 129 -85 162 -70 36 -149 24 -205 -31 l-31 -29 -964 -2 -965 -3 -3 -975 -2 -975 -125 3 -125 3 0 -165 0 -166 -197 0 -198 0 0 163 0 162 -45 1 -45 1 -3 1581 -2 1582 727 2 727 3 -3 446 -3 446 34 24 c46 33 65 58 78 106 31 109 -40 220 -148 231 -65 6 -114 -11 -151 -53 -79 -90 -56 -233 46 -287 l43 -23 0 -398 0 -399 -740 3 -740 2 -3 -1632 -2 -1633 -80 -1 -80 -2 -3 -162 -2 -163 -195 0 -195 0 -2 163 -3 162 -73 1 -72 2 0 2137 c0 2120 0 2137 20 2165 31 44 44 117 31 168 -28 103 -126 153 -237 121z" />
                                <path
                                    d="M7670 4298 c0 -2 -1 -621 -3 -1377 l-2 -1374 -44 -13 c-80 -23 -123 -83 -124 -173 0 -77 32 -134 95 -167 39 -20 122 -18 167 6 98 49 120 206 41 287 l-30 31 -2 1388 -3 1389 -47 3 c-27 2 -48 2 -48 0z" />
                                <path
                                    d="M8510 2775 l0 -1525 873 0 872 -1 20 -41 c31 -65 63 -83 150 -83 59 0 79 4 102 21 104 77 95 255 -17 312 -25 12 -62 22 -85 22 -51 -1 -119 -31 -140 -64 l-17 -26 -809 0 -809 0 -2 1453 -3 1452 -67 3 -68 3 0 -1526z" />
                                <path
                                    d="M9255 4288 c-3 -7 -4 -495 -3 -1083 l3 -1070 932 -5 933 -5 22 -45 c33 -65 76 -90 153 -90 68 0 110 21 149 73 32 43 34 150 4 202 -41 71 -143 104 -221 71 -32 -13 -97 -78 -97 -96 0 -6 -323 -10 -885 -10 l-885 0 -2 1033 -3 1032 -48 3 c-32 2 -49 -1 -52 -10z">
                                </path>
                            </svg>
                            <div class="ml-4 text-lg leading-7 font-semibold"><a href="#"
                                    class="underline text-gray-900 dark:text-white">Our Solutions</a></div>
                        </div>

                        <div class="ml-12">
                            <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                Learn more about our stack of tech solutions.
                            </div>
                        </div>
                    </div>

                    <div class="p-6 border-t border-gray-200 dark:border-gray-700">
                        <div class="flex items-center">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                                <path
                                    d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z">
                                </path>
                            </svg>
                            <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel-news.com/"
                                    class="underline text-gray-900 dark:text-white">News</a></div>
                        </div>

                        <div class="ml-12">
                            <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                Stay up to date with what's going on in HelloSky Group.
                            </div>
                        </div>
                    </div>

                    <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                        <div class="flex items-center">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                                <path
                                    d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                </path>
                            </svg>
                            <div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white">HelloSky
                                Group</div>
                        </div>

                        <div class="ml-12">
                            <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                HelloSky group is a group that is still under development and will focus on developing
                                various sectors from various areas of engineering to shopping malls and real estate. It
                                will have several companies under it like <a href="https://helloskygroup.com"
                                    class="underline">HelloSky Alpha</a> and many more that will be coming in the near
                                future
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                <div class="text-center text-sm text-gray-500 sm:text-left">
                    <div class="flex items-center">
                        <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            viewBox="0 0 24 24" stroke="currentColor" class="-mt-px w-5 h-5 text-gray-400">
                            <path
                                d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z">
                            </path>
                        </svg>

                        <a href="#" class="ml-1 underline">
                            Shop
                        </a>

                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" viewBox="0 0 24 24" class="ml-4 -mt-px w-5 h-5 text-gray-400">
                            <path
                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                            </path>
                        </svg>

                        <a href="#" class="ml-1 underline">
                            Show some love
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
