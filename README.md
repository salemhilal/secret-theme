This is a repo to develop a theme for Secret Magazine. It contains a theme, and a wordpress container to load that theme.

## Installation
- Copy the `secret-theme` directory into your themes folder as normal

## Usage
The theme doesn't have any out-of-the-ordinary features (yet). Some things to know: 
- Posts all need featured images for now (there isn't any work into how they should look without them yet). They should be **550w x 400h**.  The theme _should_ crop the image to be smaller in case you upload a bigger image, but you'll likely want to control what the crop looks like.
- The theme generally looks best with 9 images per page. Go to [`/wp-admin/options-reading.php`](http://secretmagazine.xyz/wp-admin/options-reading.php) and 
- The theme needs a logo image. Upload it by loading `/wp-admin` and going to `Appearance > Customize > Header Image`.

## Development
The easiest way to work on this theme locally is to use docker to spin up a wordpress instance. This repo has a `docker-compose.yml` file that should take care of starting the site for you.

Make sure you have docker and docker-compose installed, and start the container by running:
```
docker-compose up -d
```

## Still to do
- Install the [Multiple Post Thumbnail](https://wordpress.org/plugins/multiple-post-thumbnails/#installation) plugin

A vanilla copy of wordpress should be hosted at `localhost:8000`. 

You’ll need to upload post content. [WPTest](http://wptest.io/) has a bunch of good test data.
