ARG UBUNTU_VERSION=latest
FROM ubuntu:$UBUNTU_VERSION AS npm_web

# The "ubuntu" user already exists (UID 1000)
ARG USERNAME=ubuntu

####################
# Software install #
####################

RUN export DEBIAN_FRONTEND=noninteractive \
 && apt update \
 && apt upgrade -y \
 && apt install -y npm

RUN \
    # JS minifier
    npm install terser -g

USER $USERNAME
WORKDIR /src
