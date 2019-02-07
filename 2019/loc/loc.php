<!doctype html>
<html lang="de">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">

	<base href="<?php echo dirname($_SERVER['SCRIPT_NAME']); ?>">
	<title>FOSSGIS 2019 - Team</title>
	<meta name="description" content="Die FOSSGIS-Konferenz ist im D-A-CH Raum die führende Konferenz für Freie und Open Source Software für Geoinformationssysteme OpenStreetMap.">
	<meta name="keywords" content="FOSSGIS, FOSSGIS-Konferenz, 2019, FOSSGIS-Konferenz 2019, Open Source, GIS, Konferenz, Geoinformatik, OpenStreetMap, HTW Dresden">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<?php include "../inc/style.inc"; ?>
</head>

<body id="team">

	<?php include "../inc/header.inc"; ?>

	<h2>Das Konferenz-Team</h2>

	<ul class="tiles">

	<?php

	$file = 'loc.csv';
	$handle = fopen($file, 'r');

	while ($data = fgetcsv($handle, 1000, "|")) {
		$name = $data[0];
		$link = $data[1];
		$img = $data[2] ? $data[2] : './img/fossgis19-logo.png';
		$desc = $data[3];

		if ($link) {
			echo  "<li class='tile team'>"
				. "  <a href='{$link}' target='_blank'>"
				. "    <img src='{$img}' alt='{$name}' />"
				. "  </a>"
				. "  <p>"
				. "    <a href='{$link}' target='_blank'>"
				. "      <b>{$name}</b><br>"
				. "    </a>"
				. "    <small>{$desc}</small>"
				. "  </p>"
				. "</li>";
		} else {
			echo  "<li class='tile team'>"
				. "  <img src='{$img}' alt='{$name}' />"
				. "  <p>"
				. "    <b>{$name}</b><br>"
				. "    <small>{$desc}</small>"
				. "  </p>"
				. "</li>";
		}
	}

	fclose($handle);

	?>

	</ul>


	<?php include('../inc/footer.inc'); ?>

</body>

</html>
