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
    $data->websiteInceptionYear = 2025;
    $data->degree = "MS Computer Science";
    $data->location = "Nuremberg, BY, Germany";
    // This is not the real address, see script.js:msg for more details
    $data->mail = "kevi0@kevinstrobel.me";
    $data->url = "https://kevinstrobel.de";

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

    /*
     ------------------
     - Section Skills -
     ------------------
     */
    $data->secSkills =
        skillBegin("Language") .
        skillAdd("Bash", "devicon/bash.svg", "My everyday language for build scripts, environment setup as well as server maintenance.", true) .
        skillAdd("C", "devicon/c.svg", "In the world of microcontrollers, I had to work a lot with C code. Luckily, most of the time, part of the project’s codebase was written in C&NoBreak;+&NoBreak;+ and connected to C functionality.") .
        skillAdd("C++", "devicon/cplusplus.svg", "Despite of its complexity and peculiarities, C&NoBreak;+&NoBreak;+ is my favorite language. I love C&NoBreak;+&NoBreak;+ because it is an established language known for its powerfulness, versatility, performance, and low-level access. Of course, with great power comes great responsibility (carefulness).") .
        skillAdd("CSS", "devicon/css3.svg", "As a (former) backend web developer, I already got in touch with CSS and even learned a lot more when designing this homepage.") .
        skillAdd("HTML", "devicon/html5.svg", "As a (former) backend web developer, I already got in touch with HTML and even learned a lot more when designing this homepage.") .
        skillAdd("Java", "devicon/java.svg", "Java is the first programming language that I taught myself from a book during school. I created several private projects using Java. Having completed my Bachelor’s degree, I worked as a Java backend developer (up to Java 1.8). However, due to my interest in embedded programming, I rarely use Java these days.") .
        skillAdd("JavaScript", "devicon/javascript.svg", "As a (former) backend web developer, I already got in touch with JavaScript and even learned a lot more when designing this homepage.") .
        skillAdd("PHP", "devicon/php.svg", "As a (former) backend web developer, I sometimes got in touch with PHP, although mainly privately. However, I’ve learned a lot when designing this homepage.") .
        skillAdd("Python", "devicon/python.svg", "My preferred language when I need to get small things done in no time; examples: data conversion or IoT device controlling (network stuff).") .
        skillAdd("Rust", "devicon/rust.svg", 'I’m currently learning this cool language from Rust’s offical book "The Rust Programming Language" (which is a great book, by the way).', true) .
        skillAdd("VHDL", "", "I’ve used VHDL to model FPGA designs, including the Out-of-Order CPU for my Master’s thesis.") .
        skillEnd() .

        skillBegin("Build") .
        skillAdd("CMake", "devicon/cmake.svg", "To keep my C&NoBreak;+&NoBreak;+ projects manageable, I always use CMake – be it a small or large project.") .
        skillAdd("Conan 2", "conan/conan.png", "Unlike many other languages, C&NoBreak;/&NoBreak;C&NoBreak;+&NoBreak;+ lacks a dependency manager. I use Conan professionally and privately to pull in external dependencies.") .
        skillEnd() .

        skillBegin("Framework") .
        skillAdd("GoogleTest", "", "High-quality software requires good testing which starts at the unit test level. Therefore, writing C&NoBreak;+&NoBreak;+ unit tests using GoogleTest and GoogleMock is second nature to me.") .
        skillAdd("Qt", "devicon/qt.svg", "Having developed HMIs, I got familiar with Qt (Qt Widgets, Qt Quick) on the PC but also on embedded devices that run Windows Embedded Compact or Raspberry Pi OS. Qt has become my preferred way of developing graphical interfaces using C&NoBreak;+&NoBreak;+.") .
        skillEnd() .

        skillBegin("Environment") .
        skillAdd("Confluence", "devicon/confluence.svg", "I use Confluence wikis in several client projects.") .
        skillAdd("Docker", "devicon/docker.svg", "Containerization is part of nearly every professional and private project I fiddle with because, on the one hand, I’d like to keep my host system’s environment as clean as possible. On the other hand, I use containers locally as well as in the CI (Continuous Integration) to have reproducible builds, no matter on which system they run.") .
        skillAdd("Eclipse", "devicon/eclipse.svg", "I’ve been using the Eclipse IDE for many years in the Java world. Dealing with Eclipse CDT (C&NoBreak;/&NoBreak;C&NoBreak;+&NoBreak;+ Development Tooling) or some IDEs that are based on it (STM32CubeIDE) reminds me of the old Java times.") .
        skillAdd("Gitlab", "devicon/gitlab.svg", "Nearly all of my client projects have a Gitlab instance running for centralized source control and CI (Continuous Integration). I’ve also set up and managed instances.") .
        skillAdd("Jira", "devicon/jira.svg", "I use Jira in several client projects as a ticketing and time tracking system.") .
        skillAdd("PlantUML", "plantuml/plantuml.svg", "When it comes to software architecture creation, putting down architectural decisions, or defining processes, PlantUML is my number one modeling tool for visualizing it all.") .
        skillAdd("Visual Studio Code", "devicon/vscode.svg", "One of my favorite code editors for nearly every language since it includes support for various toolchains via its extension system.") .
        skillAdd("Vim", "devicon/vim.svg", "Definitely my favorite text and code editor when dealing with a few files or simple projects.") .
        skillAdd("Vivado", "", "Being familiar with AMD (formerly Xilinx) FPGAs, I used Vivado for designing and simulating designs as well as uploading them to the FPGA during my Master’s studies and my talks.") .
        skillEnd() .

        skillBegin("OS") .
        skillAdd("Arch Linux", "devicon/archlinux.svg", "My favorite and main operating system in the private environment because it is super lightweight and can be customized very well.") .
        skillAdd("Debian", "devicon/debian.svg", "I’ve used Debian privately before switching to Arch Linux.") .
        skillAdd("FreeRTOS", "", "I’ve gotten in touch with FreeRTOS on an STM32 microcontroller during a client project.") .
        skillAdd("Ubuntu", "devicon/ubuntu.svg", "I use Ubuntu for client projects.") .
        skillAdd("Windows", "devicon/windows11.svg", "My main operating system in former days and currently at work, typically in combination with the WSL (Windows Subsystem for Linux).") .
        skillAdd("Windows Embedded Compact 2013", "", "For a client project with real-time requirements, I’ve been optimizing applications for Windows Embedded Compact 2013, including rewriting kernel drivers and debugging kernel events.") .
        skillEnd();

    /*
     ------------------
     - Section Career -
     ------------------
     */
    $data->secCareer =
        careerBegin() .
        careerContent(
        'l',
        'MATHEMA GmbH',
        '07/2021 - now',
        'Embedded Software / Firmware Developer',
        <<<EOL
        <li>Provide development support for various clients and applications (C / C&NoBreak;+&NoBreak;+, real-time systems, QtQuick)</li>
        <li>Optimize real-time applications</li>
        <li>Create, design, and model software architectures</li>
        <br/>
        <li>Handle communication with the clients</li>
        <li>Perform project management</li>
        <li>Create proposals</li>
        <br/>
        <li>Perform requirements analysis</li>
        <li>Perform effort estimations</li>
        <br/>
        <li>Give technical conference talks</li>
        EOL
        ) .
        careerTimeline(1) .
        careerEmpty() .
        careerEnd() .

        careerBegin() .
        careerContent(
        'l',
        'Friedrich-Alexander-Universität Erlangen-Nürnberg',
        '04/2018 - 03/2021',
        'Computer Science Studies (Master of Science)',
        <<<EOL
        <li>Thesis about developing and benchmarking an Out-of-Order RISC&NoBreak;-&NoBreak;V CPU on an FPGA</li>
        <li>Original thesis title: "Evaluating a Custom-Made Out-of-Order RISC&NoBreak;-&NoBreak;V CPU In Regard to Application Specific Instruction Set Extensions"</li>
        <li>Final grade: 1.0 (German grading system)</li>
        EOL
        ) .
        careerTimeline(0) .
        careerContent(
        'r',
        'Friedrich-Alexander-Universität Erlangen-Nürnberg',
        '03/2019 - 09/2019',
        'Research Assistant at the Chair of Computer Architecture',
        <<<EOL
        <li>Simulate C programs on Verilog-based RISC&NoBreak;-&NoBreak;V processor models using Verilator and VCS</li>
        <li>Create a script environment to automate extensive tests</li>
        <li>Determine the run time (number of processor clock cycles) and power consumption for each program under test</li>
        <br/>
        <li>Motivation: This data will then be used to train AI models predicting runtime and power consumption for arbitrary programs, eliminating the need to execute them on actual hardware</li>
        EOL
        ) .
        careerEnd() .

        careerBegin() .
        careerContent(
        'l',
        'Accenture Technology Solutions GmbH',
        '10/2014 - 03/2018',
        'Software Engineer',
        <<<EOL
        <li>Provide backend development support for a large JavaEE-based, model-driven web application</li>
        <li>Perform bugfixing</li>
        <li>Train new employees in several domains (Spring batch jobs, Unit testing, SOAP web services)</li>
        EOL
        ) .
        careerTimeline(1) .
        careerEmpty() .
        careerEnd() .

        careerBegin() .
        careerContent(
        'l',
        'Duale Hochschule Baden-Württemberg Ravensburg',
        '10/2011 - 09/2014',
        'Business Informatics Studies (Bachelor of Science, "Duales Studium")',
        <<<EOL
        <li>Thesis about managing mutual dependencies between departments in a Scrum-driven project; to visualize those dependencies, I created a web-based tool</li>
        <li>Original thesis title: "Management von wechselseitigen Abhängigkeiten zwischen Scrum-getriebenen Abteilungen in der Bundesagentur für Arbeit und Entwicklung eines Tools zur Visualisierung dieser Interdependenzen"</li>
        <li>Final grade: 1.9 (German grading system)</li>
        EOL
        ) .
        careerTimeline(0) .
        careerContent(
        'r',
        'Accenture Technology Solutions GmbH',
        '10/2011 - 09/2014',
        'Practical Part of the Studies ("Duales Studium")',
        <<<EOL
        <li>Test a large JavaEE-based web application</li>
        <li>Write unit tests</li>
        <li>Support the project management office</li>
        EOL
        ) .
        careerEnd();

    /*
     -----------------
     - Section Talks -
     -----------------
     */
    $singleCycleCpuLink = externalLink("GitHub", "https://github.com/kevin-strobel/single-cycle-cpu");
    $data->secTalks =
        talkAdd(
                'No RISC, no fun',
                'Let’s design our own CPU!',
                '75min',
                'MATHEMA Campus',
                '2024',
                <<<EOL
                <div>
                    As software developers, we are familiar with writing, maintaining, and debugging programs. But have we ever thought about how the computer’s brain - the CPU - executes the code? Let’s dive into the world of processor architectures!
                </div>
                <div>
                    To better understand this theoretical subject, we will have a look at a simplified &quot;softcore&quot;. This is a processor whose circuitry is not &quot;cast in silicon&quot; but modeled using a hardware description language such as VHDL. That allows us to implement the CPU on an FPGA, a chip in which logic circuits can be programmed. Gradually, we will discuss the individual components of the core and extend it with smaller features. On the FPGA, we will then use small C++ programs to test our processor.
                </div>
                <div>
                    Finally, the presentation covers methods for performance optimization, which are also used in modern CPUs.
                </div>
                <div>
                    Not mandatory, but certainly helpful, is basic prior knowledge of digital circuits, VHDL, assembly language (RISC-V), and C++.
                </div>
                <div></div>
                <div></div>
                <div></div>
                <div class="italic">
                    <span>The softcore can be found at </span>
                    $singleCycleCpuLink
                    <span>.</span>
                </div>
                <div></div>
                <div class="italic">
                    The original title of this German talk is: No RISC, no fun - Entwerfen wir unsere eigene CPU!
                </div>
                EOL
        ) .

        talkAdd(
                'Introduction to FPGA development',
                '',
                '75min',
                'MATHEMA Campus',
                '2023',
                <<<EOL
                <div>
                    As software developers in the world of hardware-oriented programming, we occasionally stumble over FPGAs - programmable logic circuits. Usually, they are classified as hardware and not paid any more attention.
                </div>
                <div>
                    In this presentation, we will blur the boundaries between software and hardware development. To do so, we will learn what an FPGA is, how to implement digital circuits on it, and in which problem scenarios an FPGA might be the preferred solution. However, we have to adjust our software-oriented mindset of how to solve problems and learn to think more closely in terms of hardware.
                </div>
                <div>
                    To create FPGA designs, we will get to know the basics of the language VHDL and - building upon that - demonstrate a circuit design we have created using a Xilinx FPGA.
                </div>
                <div>
                    This presentation is aimed at software developers with little to no experience with FPGAs, but it is also suitable for anyone interested in FPGAs.
                </div>
                <div></div>
                <div></div>
                <div></div>
                <div>
                <div class="italic">
                    The original title of this German talk is: Einführung in die FPGA-Entwicklung
                </div>
                EOL
        );

    /*
     ------------------------
     - Section Certificates -
     ------------------------
     */
    $data->secCerts =
        certAdd(
                "iSAQB® Certified Professional for Software Architecture - Foundation Level",
                "2025",
                "assets/cert_cpsa_f.png",
                "https://www.certible.com/badge/4b4b4d4b-1896-477b-a9a6-d35812d77f6e/",
                true
        ) .
        certAdd(
                "Pivotal® Certified Spring Enterprise Integration Specialist",
                "2016",
                "assets/cert_spring_eis.png",
                "assets/cert_spring_eis.pdf",
                false
        );

    /*
     -----------------
     - Section Links -
     -----------------
     */
    $data->secLinks =
        linkAdd("https://www.xing.com/profile/Kevin_Strobel", "assets/tabler-icons/xing.svg", "XING", true) .
        linkAdd("https://www.linkedin.com/in/kevin-strobel-122b9a370", "assets/tabler-icons/linkedin.svg", "LinkedIn", true) .
        linkAdd("https://github.com/kevin-strobel", "assets/tabler-icons/github.svg", "GitHub", true) .
        linkEncryptedMailAdd($data->mail, "assets/tabler-icons/mail.svg", "Mail");
?>
