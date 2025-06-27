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
    $data->degree = "MS Computer Science";
    $data->location = "Nuremberg, BY, Germany";

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

    /*
     *******************
     * SECTION CONTENT *
     *******************
     */

    /*
     --------------------
     - Section About me -
     --------------------
     */
    $data->secAboutMe =
        aboutMeParagraphAdd("During my time as a backend web developer, I was always curious about how hardware and software interact in detail.") .
        aboutMeParagraphAdd("Therefore, I delved into microprocessor architecture and design and implemented an Out-of-Order, superscalar RISC-V CPU on an FPGA for my Master’s thesis.") .
        aboutMeParagraphAdd("With a precise understanding of how systems execute code, I now really enjoy designing and writing embedded firmware and software and grasping the complexity of C++.") .
        aboutMeParagraphAdd("As a developer, my passion is to work accurately and solve everyday problems by designing software architectures and writing clean, efficient as well as maintainable code while doing some project management.") .
        aboutMeParagraphAdd("When I’m not coding, you’ll probably find me playing the organ, the piano or visiting some city on a sunny afternoon.");
?>
