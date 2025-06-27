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
</head>

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
    </header>
</body>
</html>
