#!/bin/bash
# Copyright (c) 2025 Kevin Strobel
# SPDX-License-Identifier: MIT
#
# This file is licensed under the MIT License.
# See the LICENSE.txt file in the project root for full license text.

DOCKER_NPM_WEB_TARGET="npm_web"
DOCKER_NPM_WEB_TAG="npm_web:1.0" # name:tag

docker build --target $DOCKER_NPM_WEB_TARGET --tag $DOCKER_NPM_WEB_TAG .
