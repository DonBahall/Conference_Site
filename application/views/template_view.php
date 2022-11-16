<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"/>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDOKbDWakhtXPqcqcSzyok2qF6eLj-HE18">
            type = "text/javascript" >
        </script>
		<title>Сайт для конференций</title>

	</head>
	<body>
		<div id="wrapper">

			<div id="page">
				<div id="sidebar">
					<div class="side-box">
						<h3>Основное меню</h3>
						<ul class="list">
							<li class="first "><a href="/">Главная</a></li>
                            <li><a href="/services">Создать Конференцию</a></li>
						</ul>
					</div>
				</div>
						<?php include 'application/views/'.$content_view; ?>
			</div>
		</div>
	</body>
</html>