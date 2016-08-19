<!DOCTYPE html>
<html>
    <head>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link href="http://vjs.zencdn.net/5.8.8/video-js.css" rel="stylesheet">

        <title>Laravel Video.js</title>

    </head>
    <body>

        <!--<video controls autoplay>-->
        <video
          controls
          preload="auto"
          poster="http://vjs.zencdn.net/v/oceans.png"
          class="video-js vjs-big-play-centered"
          data-setup="{}"
        >

          <source src="http://vjs.zencdn.net/v/oceans.mp4" type="video/mp4"/>
          <p class="vjs-no-js">
            To view this video please enable JavaScript, and consider upgrading to a web browser that
            <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
          </p>

        </video>

        <script src="http://vjs.zencdn.net/5.8.8/video.js"></script>

    </body>
</html>
