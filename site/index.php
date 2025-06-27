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
    <script src="sky.js"></script>
</head>

<!--
    blue-950; keep in sync with sky.js, index.php:<body> and index.php:<meta>

    Why? Keep background color in sync with sky.js to avoid white background areas in
    mobile view while the user scrolls the page and the canvas is not yet updated.
-->
<body class="bg-blue-950">
    <canvas id="sky" class="fixed -z-9999"></canvas>
    <!-- Dialog -->
    <div id="modalDialog" class="fixed none inset-0 z-9999 bg-blue-950/50 items-center pointer-events-none opacity-0 transform transition-opacity duration-300">
        <div id="modalDialogInner" class="fixed top-1/2 left-1/2 max-w-[80vw] max-h-[80vh] overflow-auto -translate-1/2 rounded-lg shadow-lg shadow-blue-500/50 bg-gradient-to-r text-white from-blue-800/90 from-10% to-blue-900/90 to-90% p-6 scale-0 transform transition-transform duration-300">
            <h2 id="modalDialogTitle" class="text-3xl font-bold text-center"><!-- filled via JS --></h2>
            <h3 id="modalDialogSubtitle" class="text-2xl text-center mt-4"><!-- filled via JS --></h3>
            <div id="modalDialogText" class="flex flex-col gap-4 mt-10 text-xl"><!-- filled via JS --></div>
        </div>
    </div>

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

    <section id="home" class="flex flex-col sm:flex-row justify-center items-center sm:space-x-12 space-y-12 sm:space-y-0 text-white">
        <img class="w-1/3 min-w-3xs max-w-sm enterAnimation fade-in" src="assets/me.png" alt="me" />
        <div class="flex flex-col gap-y-8 text-center sm:text-start sm:gap-y-12 enterAnimation fade-in animDelayLong">
            <div class="text-xl xl:text-4xl">Hey! I’m</div>
            <h1 class="text-4xl xl:text-8xl font-bold"><?php echo $data->name; ?></h1>
            <div class="text-xl xl:text-4xl"><?php echo $data->jobTitle; ?></div>
            <div class="text-xl xl:text-4xl"><?php echo $data->degree; ?></div>
            <div class="text-lg xl:text-3xl">&#x1F4CD; <?php echo $data->location; ?></div>
        </div>
    </section>

    <section id="aboutMe" class="flex justify-center flex-col space-y-6 w-5/6 xl:w-1/3 m-auto text-white text-2xl enterAnimation fade-in">
        <h1 class="hidden">About me</h1>

        <?php
            echo $data->secAboutMe;
        ?>
    </section>

    <section id="skills" class="flex justify-center flex-col text-white m-auto w-5/6 xl:w-2/3">
        <h1 class="hidden">Skills</h1>

        <div class="flex flex-col gap-26">
            <?php
                echo $data->secSkills;
            ?>
        </div>
    </section>
</body>
</html>
