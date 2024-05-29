<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video Redirect</title>
    <style>
        #video-container {
            position: relative;
            width: 100%;
            max-width: 560px;
            margin: auto;
        }

        #player {
            width: 100%;
            height: 315px;
        }

        #progress-bar {
            width: 100%;
            background-color: #f3f3f3;
        }

        #progress {
            width: 0;
            height: 10px;
            background-color: #4CAF50;
        }
    </style>
</head>
<body>
    <div id="video-container">
        <div id="player"></div>
        <div id="progress-bar">
            <div id="progress"></div>
        </div>
    </div>

    <script>
        // Load the IFrame Player API code asynchronously.
        var tag = document.createElement('script');
        tag.src = "https://www.youtube.com/iframe_api";
        var firstScriptTag = document.getElementsByTagName('script')[0];
        firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

        var player;
        var videoDuration = 0;

        function onYouTubeIframeAPIReady() {
            player = new YT.Player('player', {
                height: '315',
                width: '560',
                videoId: 'QmfMfoOkKw4',
                playerVars: {
                    'start': 8,
                    'autoplay': 1,
                    'controls': 0, // Hide controls
                    'rel': 0,
                    'disablekb': 1,
                    'modestbranding': 1
                },
                events: {
                    'onReady': onPlayerReady,
                    'onStateChange': onPlayerStateChange
                }
            });
        }

        function onPlayerReady(event) {
            videoDuration = player.getDuration();
            setInterval(updateProgressBar, 1000);
        }

        function updateProgressBar() {
            var currentTime = player.getCurrentTime();
            var progress = (currentTime / videoDuration) * 100;
            document.getElementById('progress').style.width = progress + '%';

            // Prevent seeking
            player.seekTo(currentTime, true);
        }

        function onPlayerStateChange(event) {
            if (event.data === YT.PlayerState.ENDED) {
                window.location.href = "/evaluation";
            }
        }
    </script>
</body>
</html>

