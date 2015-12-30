<!DOCTYPE html>
<html>
<body>
<?php
echo 'Youtube does it:<br>'?>

<?php
$h = 360;
echo '<iframe height="'.$h.'" src="//www.youtube.com/embed/wujiz8Q_-ZU?autoplay=1" frameborder="0" allowfullscreen id="video"></iframe>';
echo '<script>             (function () {
            console.log("got script?\n");
            var joshnPlay = {josh_go: false, player: false};

            function onPlayerReady(event) {
                console.log("9001", event);
            }

            joshnPlay.player = new YT.Player(\'video\', {events: {\'onReady\': onPlayerReady}});
            window[\'josh_go\'] = joshnPlay.josh_go;
            return window[\'joshnPlay\'] = joshnPlay;
        })();</script>';?>
</body>
</html>