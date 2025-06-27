#!/bin/bash
# Copyright (c) 2025 Kevin Strobel
# SPDX-License-Identifier: MIT
#
# This file is licensed under the MIT License.
# See the LICENSE.txt file in the project root for full license text.

PROJ_DIR="$(dirname $(realpath $0))"
WEBPAGE_FOLDER="site"
SRC_DIR="$PROJ_DIR/$WEBPAGE_FOLDER"
BUILD_DIR="$PROJ_DIR/build_prod"
BUILD_DIR_SITE="$BUILD_DIR/$WEBPAGE_FOLDER"

CSS_STYLES="$SRC_DIR/styles.css"
CSS_TEMPLATE_STYLES="$SRC_DIR/styles.template.css"

#######################
# Plausibility checks #
#######################

if [[ ! -f "$CSS_TEMPLATE_STYLES" ]] then
    echo "[ERROR] $CSS_TEMPLATE_STYLES does not exist. Have you deleted this file?"
    exit 1
fi
if [[ ! -f "$CSS_STYLES" ]] then
    echo "[ERROR] $CSS_STYLES does not exist. Please run \"docker compose up\" first to generate this file."
    exit 2
fi
if [[ "$CSS_TEMPLATE_STYLES" -nt "$CSS_STYLES" ]] then
    echo "[ERROR] $CSS_TEMPLATE_STYLES is newer than $CSS_STYLES. Please first delete $CSS_STYLES and then run \"docker compose up\" to regenerate $CSS_STYLES."
    exit 3
fi

##############################
# Production code generation #
##############################

rm -rf "$BUILD_DIR"
mkdir -p "$BUILD_DIR_SITE"
cp -rT "$SRC_DIR" "$BUILD_DIR_SITE"
cd "$BUILD_DIR_SITE"

rm *.template.*

# PHP / HTML files are minified by PHP on-the-fly

# CSS file already is minifed by TailwindCSS-CLI

# Minify JS files
docker run -it --rm -v"$BUILD_DIR":/src npm_web:1.0 "find" "-name" "*.js" "-exec" "terser" "{}" "-o" "{}" \;

######################
# Archive generation #
######################

cd "$BUILD_DIR"
tar -czf homepage.tar.gz "$WEBPAGE_FOLDER"
