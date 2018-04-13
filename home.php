<html>
<head>
    <title>My Family</title>
    <style type="text/css">
        body{
            font-family: sans-serif;
            font-size: 10pt;
            margin: 30px;
            background-color: pink;
	    color: black;
        }

		.picture{
			height: 150px;
			width: 150px;
			border: 5px solid dodgerblue;
		}
		
		td{
			width: 260px;
			text-align: center;
		}
		
		tr{
			padding-top: 5px;
		}
		
		a{
			color: blue;
			text-decoration: none;
		}
		
		a:hover{
			color: dodgerblue;
			text-decoration: underline;
		}
    </style>
</head>
<body>
<p>Home</p>
<h2>My Family</h2>
<table>
	<tr>
		<td colspan="4" id="parents">
			<hr>
			<h2><i>My Parents</i></h2>
			<hr>
		</td>
	</tr>
	<tr>
		<td colspan="2">
			<img src="father.jpg" class="picture">
			<p><a href="father.php" target="content">Hermogenes Libre Gordon</a></p>
		</td>
		<td colspan="2">
			<img src="mother.jpg" class="picture">
			<p><a href="mother.php" target="content">Lourdes Sasan Gordon</a></p>
		</td>
	</tr>
	<tr>
		<td colspan="4" id="family">
			<hr>
			<h2><i>Gordon-Chua Family</i></h2>
			<hr>
		</td>
	</tr>
	<tr>
		<td>
			<img src="dave.jpg" class="picture">
			<p><a href="dave.php" target="content">Dave Alcordo Chua</a></p>
		</td>
		<td>
			<img src="https://scontent.fceb2-1.fna.fbcdn.net/v/t1.0-9/26112302_1680651071985110_3944866587685782475_n.jpg?_nc_cat=0&oh=08bc7b427b022209ff02dde62e53c917&oe=5B62CF19" class="picture">
			<p><a href="love.php" target="content">Maria Lovevilla Sasan Gordon</a></p>
		</td>
		<td>
			<img src="dm.jpg" class="picture">
			<p><a href="dm.php" target="content">Devimaer Gordon Chua</a></p>
		</td>
	</tr>
</table>
</body>
</html>