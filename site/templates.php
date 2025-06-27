<?php
    /*
     * Copyright (c) 2025 Kevin Strobel
     * SPDX-License-Identifier: MIT
     *
     * This file is licensed under the MIT License.
     * See the LICENSE.txt file in the project root for full license text.
     */

    function menuEntryAdd($name, $anchor) {
        return <<<EOL
        <a class="my-navlink" href="#$anchor">$name</a>
        EOL;
    }
?>
