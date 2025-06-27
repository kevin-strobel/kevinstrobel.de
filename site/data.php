<?php
    /*
     * Copyright (c) 2025 Kevin Strobel
     * SPDX-License-Identifier: MIT
     *
     * This file is licensed under the MIT License.
     * See the LICENSE.txt file in the project root for full license text.
     */

    require('model.php');
    require('templates.php');

    $data = new Model();


    /*
     *************
     * META TAGS *
     *************
     */

    $data->metaDesc = "I’m an embedded software / firmware developer based in Nuremberg. My passion is to work accurately and solve everyday problems by designing software architectures and writing clean, efficient as well as maintainable code while doing some project management.";
    $data->metaKeywords = "Embedded, C, C++, CMake, Compiler, Rust, Microcontroller, FPGA, Docker, Linux, Concurrency, Real-time, Priority inversion";
    $data->metaAuthor = "Kevin Strobel";

    /*
     ***********************
     * GENERAL INFORMATION *
     ***********************
     */

    $data->name = $data->metaAuthor;
    $data->jobTitle = "Embedded Software / Firmware Developer";
    $data->websiteTitle = "$data->name | $data->jobTitle";

    /*
     ********
     * MENU *
     ********
     */

    $data->menu =
        menuEntryAdd("About Me", "aboutMe") .
        menuEntryAdd("Skills", "skills") .
        menuEntryAdd("Career", "career") .
        menuEntryAdd("Talks", "talks") .
        menuEntryAdd("Certificates", "certs") .
        menuEntryAdd("Links", "links");
?>
