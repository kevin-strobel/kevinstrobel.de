# Developer portfolio homepage

The project contains my developer portfolio which can easily be customized for your own needs.

The homepage is optimized for desktop computers as well as mobile devices (responsive design).

It has been tested on

- Android: Chrome
- Arch Linux: Firefox
- iPad OS: Safari
- Windows 10: Chrome, Edge, Firefox
- Windows 11: Edge, Firefox

Keyboard navigation is supported, too.


## What technologies are used?

Apart from HTML, CSS, and JavaScript, I use PHP for templating, i.e., to avoid code duplication.

For more convenient styling, I included Tailwind CSS.


## How do I setup the environment?

All required tools for developing the homepage are provided by two Docker images.

- npm\_web: This image provides the TailwindCSS build toolchain
- apache-php: This image provides the PHP web server that hosts the homepage

1. Install _Docker_, _Docker Buildx_, and _Docker compose_.

```bash
# Needs to be done only once

# Example: Arch Linux
pacman -Syu docker docker-buildx docker-compose
```

2. Build the _npm_web_ Docker image:

```bash
# Needs to be done only once

./setupDocker.sh`
```

3. Run the TailwindCSS tool and the web server while testing your modifications to the homepage.

```bash
docker compose up
```

4. Visit [http://localhost](http://localhost)


## How do I customize the contents?

Most of the customizable data is stored at _site/data.php_.

It is not necessary to restart the server when you change content (HTML, PHP, JS, CSS, images etc.).
On each modification, TailwindCSS automatically rebuilds the styles.


## How do I deploy to production?

TailwindCSS is already configured to create a minified CSS file.

HTML minification runs on-the-fly whenever the client (browser) requests the web page.

In order to minify JavaScript sources as well, create a production build:

```bash
./buildProd.sh
```

Besides, the production build creates an archive (_build\_prod/homepage.tar.gz_) that only contains relevant files for a production system.

Install a PHP server at your production machine (or use the above-mentioned Docker image) and extract the built archive's _site_ folder to your server's document root.


## What licenses do apply?

**Note: Third party resources (icons / images) that I have used for my specific presentation have their own licenses stored under the LICENSES folder.**

The functional part of the homepage does not use third party resources and is subject to the MIT license (see LICENSE.txt).
