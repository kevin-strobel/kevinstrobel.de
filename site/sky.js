/*
 * Copyright (c) 2025 Kevin Strobel
 * SPDX-License-Identifier: MIT
 *
 * This file is licensed under the MIT License.
 * See the LICENSE.txt file in the project root for full license text.
 */

let canvas = null;
let canvasCtx = null;
let stars = null;
let resized = false;

document.addEventListener('DOMContentLoaded', function() {
    canvas = document.getElementById('sky');
    canvasCtx = canvas.getContext('2d');

    resizeSky();
    animateSky();
});

window.addEventListener('resize', resizeSky);

function resizeSky() {
    canvas.width = window.innerWidth;
    canvas.height = window.innerHeight;
    resized = true;
}

function initSky() {
    const starCount = 50; // Number of stars
    stars = [];

    for (let i = 0; i < starCount; i++) {
        stars.push({
            x: Math.random() * canvas.width,
            y: Math.random() * canvas.height,
            radius: Math.random() * 1.5 + 0.5, // size of star
            opacity: Math.random(), // initial opacity for twinkling
            delta: Math.random() * 0.02 + 0.01 // twinkle speed
        });
    }
}

function animateSky() {
    if(resized) {
        initSky();
        resized = false;
    }

    // blue-950; keep in sync with sky.js, index.php:<body> and index.php:<meta>
    canvasCtx.fillStyle = 'oklch(28.2% 0.091 267.935)';
    canvasCtx.fillRect(0, 0, canvas.width, canvas.height);

    for (let star of stars) {
        // Twinkle effect
        star.opacity += star.delta;
        if (star.opacity <= 0 || star.opacity >= 1) {
            star.delta = -star.delta; // reverse direction
        }

        canvasCtx.globalAlpha = star.opacity;
        canvasCtx.fillStyle = 'white';
        canvasCtx.beginPath();
        canvasCtx.arc(star.x, star.y, star.radius, 0, Math.PI * 2);
        canvasCtx.fill();
    }
    canvasCtx.globalAlpha = 1; // reset alpha

    requestAnimationFrame(animateSky);
}
