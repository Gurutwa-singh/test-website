<?php
// Simple PHP version of your website (no framework)
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Ambrella Creatives</title>

<style>
body { margin:0; font-family: Arial; }
.header { background:#111; color:#fff; padding:10px 40px; display:flex; justify-content:space-between; }
.nav { background:#fff; padding:15px 40px; display:flex; justify-content:space-between; align-items:center; box-shadow:0 2px 5px rgba(0,0,0,0.1);} 
.nav ul { display:flex; list-style:none; gap:20px; }
.nav a { text-decoration:none; color:#333; font-weight:bold; }
.hero { background:url('https://images.unsplash.com/photo-1503387762-592deb58ef4e') center/cover; color:#fff; text-align:center; padding:100px 20px; }
.container { padding:50px 40px; }
.section { margin-bottom:40px; }
.team { display:grid; grid-template-columns:repeat(auto-fit,minmax(200px,1fr)); gap:20px; }
.card { border:1px solid #ddd; padding:15px; text-align:center; }
.card img { width:100%; height:200px; object-fit:cover; }
.footer { background:#111; color:#fff; text-align:center; padding:20px; }
</style>
</head>
<body>

<!-- HEADER -->
<div class="header">
  <div>📞 <?php echo "9911218244, 9599545802"; ?></div>
  <div>✉ <?php echo "marketing@ambrellacreatives.com"; ?></div>
</div>

<!-- NAV -->
<div class="nav">
  <h2>Ambrella</h2>
  <ul>
    <?php
    $menu = ["Home","About","Services","Projects","Contact"];
    foreach($menu as $item){
        echo "<li><a href='#'>$item</a></li>";
    }
    ?>
  </ul>
</div>

<!-- HERO -->
<div class="hero">
  <h1><?php echo "About Us"; ?></h1>
  <p>We build exhibitions & creative experiences</p>
</div>

<!-- CONTENT -->
<div class="container">

<?php
$sections = [
    "Performance Excellence" => "We focus on innovation and high quality.",
    "Client Focus" => "We deliver customized solutions.",
    "Responsible Behaviour" => "We prioritize safety and sustainability."
];

foreach($sections as $title => $desc){
    echo "<div class='section'>";
    echo "<h2>$title</h2>";
    echo "<p>$desc</p>";
    echo "</div>";
}
?>

<!-- TEAM -->
<div class="section">
<h2>Our Team</h2>
<div class="team">

 <?php
$team = [
    ["Vishal Sharma","Director"],
    ["Ashwani Kushwaha","Director"],
    ["Vipin Kumar","Director"],
    ["Yogender Singh","Director"]
];

foreach($team as $member){
    echo "<div class='card'>";
    echo "<img src='https://via.placeholder.com/300x200'>";
    echo "<h3>{$member[0]}</h3>";
    echo "<p>{$member[1]}</p>";
    echo "</div>";
}
?>

</div>
</div>

</div>

<!-- FOOTER -->
<div class="footer">
<p>© <?php echo date("Y"); ?> Ambrella Creatives</p>
</div>

</body>
</html>
