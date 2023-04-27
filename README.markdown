# WackoPicko Vulnerable Website

WackoPicko is a website that contains known vulnerabilities. It was first used for the paper [Why Johnny Can't Pentest: An Analysis of Black-box Web Vulnerability Scanners](http://adamdoupe.com/publications/black-box-scanners-dimva2010.pdf)

## Objective

This repository is fork of official [WackoPicko application](https://github.com/adamdoupe/WackoPicko). Our team has selected WackoPicko application for our project CA (Continous Assessment) where we need to mitigate all vulnerabilities present in this application.

This repository contains updated patched code & these changes are compiled in the updated docker image which can be found below.

## Original Application Codebase - Docker Image

Link: [wackopicko docker image](https://hub.docker.com/r/adamdoupe/wackopicko/)

## Updated/Patched Application Codebase - Docker Image

Link: [wackopicko-fixed docker image](https://hub.docker.com/r/an0ndb9/wackopicko-fixed)

## Usage:

Simply run the following, which will map your local port `8080` to the
port `80` in the container. Change the `8080` to another port if you
like:

	docker run -p 127.0.0.1:8080:80 -it adamdoupe/wackopicko

Once the docker image is downloaded and running, you should be able to
access wackopicko on your browser:
[http://localhost:8080](http://localhost:8080).

## Credit to contributers for this awesome vulnerable application - Thanks :)

    @adamdoupe - adamdoupe Adam Doupe
    @PinkSheep - PinkSheep Olivier
    @0xch - 0xch Chris
    @stevex86-old - stevex86-old Steve King Jr.
