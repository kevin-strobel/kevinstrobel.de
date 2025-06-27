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

    function careerBegin() {
        return <<<EOL
        <div class="mb-20 flex flex-wrap">
        EOL;
    }
    
    // $pos: {'l', 'r'}
    function careerContent($pos, $company, $time, $jobPosition, $details) {
        if ($pos === 'r') {
            $margin = 'md:ml-3'; // Small displays: One column mode - centered entry, so don't apply margin.
            $flexDirection = 'flex-col md:flex-row-reverse'; // When displaying entry's metadata in a row, put date next to timeline.
            $hoverRotate = 'hover:-rotate-1';
            $animation = 'shake-to-left';
        } else {
            $margin = 'md:mr-3'; // Small displays: One column mode - centered entry, so don't apply margin.
            $flexDirection = 'flex-col md:flex-row'; // When displaying entry's metadata in a row, put date next to timeline.
            $hoverRotate = 'hover:rotate-1';
            $animation = 'shake-to-right';
        }
    
        return <<<EOL
        <div class="md:w-1/2 enterAnimation $animation">
            <!-- Small displays: margin bottom separates entries in one column mode -->
            <div class="bg-blue-900/90 p-8 mb-8 md:mb-0 $margin rounded-3xl shadow-lg my-touch-full-opacity opacity-90 transition delay-50 duration-300 ease-in-out hover:opacity-100 $hoverRotate">
                <div class="flex gap-4 md:gap-12 justify-between $flexDirection text-base sm:text-lg mb-4">
                    <div class="text-center">$company</div>
                    <div class="text-center">$time</div>
                </div>
                <h2 class="font-bold text-center text-xl sm:text-3xl mb-8">$jobPosition</h2>
                <ul class="text-base sm:text-lg list-disc my-list">
                    $details
                </ul>
            </div>
        </div>
        EOL;
    }
    
    function careerTimeline($iconType) {
        switch($iconType) {
            case 0:
                // graduation hat
                $iconUnicode = "&#x1F393;";
                break;
            case 1:
                // briefcase
                $iconUnicode = "&#x1F4BC;";
                break;
            default:
                $iconUnicode = "";
        }
    
        return <<<EOL
        <div class="absolute left-1/2 transform -translate-x-1/2 -translate-y-4 w-10 sm:w-12 h-10 sm:h-12 bg-blue-500 rounded-full z-20">
            <div class="my-timelineIcon text-2xl sm:text-3xl text-center relative top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">$iconUnicode</div>
        </div>
        EOL;
    }
    
    function careerEmpty() {
        return <<<EOL
        <div class="w-1/2"></div>
        EOL;
    }
    
    function careerEnd() {
        return <<<EOL
        </div>
        EOL;
    }
?>
