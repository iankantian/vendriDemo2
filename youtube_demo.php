<!DOCTYPE html>
<html>
<body>
<?php
echo '<div id="right"> Youtube does it:<br>

    <div id="right_video_pane">
        <iframe width=100% height="320" src="//www.youtube.com/embed/wujiz8Q_-ZU?enablejsapi=1" frameborder="0"
                allowfullscreen id="video"></iframe>
        <script>             (function () {
            console.log("got script?\n");
            var joshnPlay = {josh_go: false, player: false};

            function onPlayerReady(event) {
                console.log("9001", event);
            }

            joshnPlay.player = new YT.Player(\'video\', {events: {\'onReady\': onPlayerReady}});
            window[\'josh_go\'] = joshnPlay.josh_go;
            return window[\'joshnPlay\'] = joshnPlay;
        })();         </script>
    </div>
    <br>

    <h2> Code Required to run Youtube:</h2> <br>
    <pre>     &lt;!-- 1. The &lt;iframe> (and video player) will replace this &lt;div> tag. --><br>         &lt;div id="player">&lt;/div><br>          &lt;script><br>             // 2. This code loads the IFrame Player API code asynchronously.<br>             var tag = document.createElement(\'script\');<br>              tag.src = "https://www.youtube.com/iframe_api";<br>             var firstScriptTag = document.getElementsByTagName(\'script\')[0];<br>             firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);<br>              // 3. This function creates an &lt;iframe> (and YouTube player)<br>             //    after the API code downloads.<br>             var player;<br>             function onYouTubeIframeAPIReady() {<br>                 player = new YT.Player(\'player\', {<br>                     height: \'320\',<br>                     width: \'640\',<br>                     videoId: \'wujiz8Q_-ZU\',<br>                     events: {<br>                         \'onReady\': onPlayerReady,<br>                         \'onStateChange\': onPlayerStateChange<br>                     }<br>                 });<br>             }<br>              // 4. The API will call this function when the video player is ready.<br>             function onPlayerReady(event) {<br>                 event.target.playVideo();<br>             }<br>              // 5. The API calls this function when the player\'s state changes.<br>             //    The function indicates that when playing a video (state=1),<br>             //    the player should play for six seconds and then stop.<br>             var done = false;<br>             function onPlayerStateChange(event) {<br>                 if (event.data == YT.PlayerState.PLAYING && !done) {<br>                     setTimeout(stopVideo, 48000);<br>                     done = true;<br>                 }<br>             }             function stopVideo() {<br>                 player.stopVideo();<br>             }<br>         &lt;/script><br> </pre>
</div>';?>
</body>
</html>