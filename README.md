# Welcome to Swonkie Challenge

In order to accomplish the task presented bellow you will need the following tools:

 - A cool and functional Code Editor or IDE (we like VSCode, but it's your choice)
 - Docker: [Windows](https://desktop.docker.com/win/stable/Docker%20Desktop%20Installer.exe) ([WSL2](https://docs.microsoft.com/en-us/windows/wsl/install-win10) installation, you will need it), [Mac OS](https://desktop.docker.com/mac/stable/Docker.dmg) and [Linux](https://docs.docker.com/engine/install/ubuntu/)
 - Git: [Windows](https://git-scm.com/download/win), [Mac OS](https://git-scm.com/download/mac) and [Linux](https://git-scm.com/download/linux)

After having everything setup, clone this repo to your local machine and run the command:

> docker-compose up --build -d

This will create a container named "swk-challenge-php", after the container creation you should be able to access the service via [localhost:795](http://localhost:795), if the returns an error maybe the container isn't fully started yet, check the logs with:

> docker logs -f swk-challenge-php

Once it starts this [localhost:795](http://localhost:795) should display `Hello from swk dev team`.

# Challenge
This is where the fun starts 💻🥳

The challenge here is to build a REST API with [Lumen](https://lumen.laravel.com/docs/8.x) that scrapes a Youtube channel's videos and saves them in the database.

This as to be made using:
 - PHP
 - Lumen
 - Laravel Migrations
 - Eloquent

The api must have the following endpoints:

> POST /videos

This endpoint will receive a channel URL (eg. https://www.youtube.com/user/PewDiePie) and scrape the videos to save in the database.

> GET /videos

This endpoint will list all the videos that are saved in the database.

> DELETE /video/<id-video>

This endpoint will delete the video from the database.

> PUT /video/<id-video>

This endpoint will edit the video from the database. The user should only be able to edit the `title` and `description`

You can structure the database as you want using [Laravel Migrations](https://laravel.com/docs/8.x/migrations) and Eloquent Models.

# Helpful Links
 - https://lumen.laravel.com/docs/8.x
 - https://laravel.com/docs/8.x/migrations
 - https://laravel.com/docs/8.x/eloquent
 - https://danielmiessler.com/blog/rss-feed-youtube-channel/

# Tips

## Docker on windows
In windows you should have your projects inside the WSL environment to do this you can open the CMD and type:

> wsl

Then you will enter WSL environment, navigate to you user dir and created a dir named `projects`:

> cd ~
>
> mkdir projects
>
> cd projects

Now you can clone this repo to your dir:

> git clone git@gitlab.com:example-repo.git

## How to use `php artisan`
To use php artisan you must be in the container command line the the base directory of your lumen app,  to do that run the following command:

> docker exec -it swk-challenge-php bash

📝 Note: Now that you are in the container command line you should be able to use `php artisan`