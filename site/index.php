<?php
    /*
     * Copyright (c) 2025 Kevin Strobel
     * SPDX-License-Identifier: MIT
     *
     * This file is licensed under the MIT License.
     * See the LICENSE.txt file in the project root for full license text.
     */

    require('data.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="description" content="<?php echo $data->metaDesc; ?>">
    <meta name="keywords" content="<?php echo $data->metaKeywords; ?>">
    <meta name="author" content="<?php echo $data->metaAuthor; ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1" />
    <!-- blue-950; keep in sync with sky.js, index.php:<body> and index.php:<meta> -->
    <meta name="theme-color" content="oklch(28.2% 0.091 267.935)" />

    <title><?php echo $data->websiteTitle; ?></title>

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">

    <!-- Place CSS first, then JS to prevent Firefox FOUC quirks. -->
    <link rel="stylesheet" href="styles.css">

    <script src="script.js"></script>
</head>

<!--
    blue-950; keep in sync with sky.js, index.php:<body> and index.php:<meta>

    Why? Keep background color in sync with sky.js to avoid white background areas in
    mobile view while the user scrolls the page and the canvas is not yet updated.
-->
<body class="bg-blue-950">
    <header class="fixed w-screen top-0 z-9998">
        <noscript>
            <div class="bg-gradient-to-r from-red-400 from-10% via-red-500 via-50% to-red-400 to-90% text-white text-lg sm:text-2xl text-center">
                &#x26A0; Limited website functionality because JavaScript is disabled.
            </div>
        </noscript>
        <div class="bg-blue-950">
            <div id="progressBar" class="h-1.5 shadow-2xl shadow-indigo-100/80 bg-gradient-to-r from-indigo-300 from-1% to-neutral-50 to-90%"></div>
        </div>
        <nav class="shadow-lg shadow-blue-300/50 bg-gradient-to-r from-indigo-200 from-10% via-blue-200 via-50% to-blue-300 to-90%">
            <div class="relative">
                <a id="homeLink" href="#" class="absolute top-1/2 left-4 sm:left-8 -translate-y-1/2 text-blue-900 text-sm sm:text-xl font-bold"><?php echo $data->name; ?></a>
                <div class="text-blue-700 py-2">
                    <div class="hidden xl:flex justify-center w-screen gap-12">
                        <?php
                            echo $data->menu;
                        ?>
                    </div>

                    <div id="currentSection" class="flex justify-center xl:hidden text-base sm:text-lg"></div>
                </div>
                <button id="mobile-menu-button" class="absolute xl:hidden top-1/2 right-4 sm:right-8 -translate-y-1/2">
                    <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                    </svg>
                </button>
            </div>

            <div id="mobile-menu" class="xl:hidden expand-down">
                <div class="text-blue-700 px-2 pt-2 pb-3 space-y-1 [&>a]:block">
                    <?php
                        echo $data->menu;
                    ?>
                </div>
            </div>
        </nav>
    </header>
</body>
</html>
