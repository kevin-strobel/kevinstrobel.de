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

    function aboutMeParagraphAdd($content) {
        return <<<EOL
        <div>
            $content
        </div>
        EOL;
    }

    function skillBegin($name) {
        return <<<EOL
        <div class="relative">
            <!-- MDN: The absolutely positioned element is positioned relative to its nearest positioned ancestor (i.e., the nearest ancestor that is not static). -->
            <div class="absolute top-1/2 left-0 -translate-1/2 rotate-270 origin-top text-2xl sm:text-3xl">$name</div>
            <div class="grid grid-cols-2 md:grid-cols-3 xl:grid-cols-5 gap-4 pl-20">
        EOL;
    }

    function skillEnd() {
        return <<<EOL
            </div>
        </div>
        EOL;
    }

    function skillAdd($skill, $urlPart, $description, $shouldInvertIcon = false) {
        if(empty($urlPart)) {
            $url = "assets/tabler-icons/line-dashed.svg";
            // always invert dashed line
            $shouldInvertIcon = true;
        } else {
            $url = "assets/$urlPart";
        }

        $invert = $shouldInvertIcon ? "invert-60" : "";

        return <<<EOL
        <div class="flex justify-center">
            <template class="my-template">
                $description
            </template>
            <button class="group flex flex-col items-center cursor-pointer mb-8 enterAnimation fade-in" onclick="showDialog('$skill', '', this.parentElement.querySelector('.my-template'))">
                <img class="w-[4rem] text-xs my-touch-full-opacity opacity-90 $invert transition delay-50 duration-300 ease-in-out group-hover:scale-140 group-hover:opacity-100" src="$url" alt="$skill" />
                <span class="text-xl mt-4 text-center">$skill</span>
            </button>
        </div>
        EOL;
    }
?>
