<?php
$pdo = require_once 'D:\AMPPS\Ampps\www\application\models\model_conf.php';
$DB = new Model_Conf();
$id = $_GET['id'];
$new_value = $DB->select("SELECT * FROM `conf` where  `conf`.`id` = '$id'");
?>
<body onload="initialize()" onunload="GUnload()">
<form method="get">
    <h1>Детали конференции</h1>
    <input type="text" name="name" value="<?= $new_value[0]['Title'] ?>" readonly placeholder="Введите название"
           class="form-control"><br>
    <label for="start">Start date:</label>

    <input type="date" id="start" name="trip-start"
           value="<?= $new_value[0]['Date'] ?>" readonly><br>
    <br/>
    <select class="form-control" id="select" disabled=disabled>
        <option value="<?=$new_value[0]['Country'] ?>">"<?=$new_value[0]['Country'] ?>"</option>
    </select><br>
    <input type="text" id="xCord" name="xCord" value="<?= $new_value[0]['X_Coord'] ?>" readonly
           placeholder="X Координата" class="form-control"><br>
    <input type="text" id="yCord" name="yCord" value="<?= $new_value[0]['Y_Coord'] ?>" readonly
           placeholder="Y Координата" class="form-control"><br>
    <a href="#" onclick="initialize(); return false;">Set marker</a>
    <div id="map" style="width: 500px; height: 300px"></div>

    <script type="text/javascript">

        function initialize() {
            var x = $("#xCord").val();
            var y = $("#yCord").val();

            var myLatlng = {
                lat: parseInt(x),
                lng: parseInt(y)
            };
            console.log(myLatlng);
            var mapOptions = {
                zoom: 4,
                center: myLatlng
            }
            var map = new google.maps.Map(document.getElementById("map"), mapOptions);

            var marker = new google.maps.Marker({
                position: myLatlng,
                map: map,

            });
            marker.addListener('dragend', function (e) {
                var position = marker.getPosition();
                var lat = position.lat();
                var lng = position.lng();
                $("#xCord").val(lat);
                $("#yCord").val(lng);
            });

        }
    </script>
    <a href="/delete?id=<?= $id ?>"">Delete</a>
    <a href="/" class="btn btn-success">Back</a>
</form>

</body>
