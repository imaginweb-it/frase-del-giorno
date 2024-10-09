<?php
require('aforisma.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex, noarchive">
    <meta name="format-detection" content="telephone=no">
    <title>Start Page</title>
    <link href="css/stylesheet.css" rel="stylesheet">
</head>
<body>
<?php
$m = date("m",time());
$c = count($data);
$row = rand(round(($m*$c/12-$c/12)/2),round(($m*$c/12-2)/2));
?>
<div class="h1">
    <?php echo $data[$row*2];?></br>
    <div class="i">(<?php echo $data[$row*2+1];?>)&nbsp;</div>
    <!-- Start Search Form -->
    <form name="sf" method="get" action="https://duckduckgo.com">
        <input type="hidden" name="kl" value="it-it"/>
        <input type="hidden" name="k8" value="003c82"/>
        <input type="hidden" name="k9" value="9b0909"/>
        <input class="search-input" id="search_form_input_homepage" type="text" placeholder="Cerca…" aria-label="Cerca con DuckDuckGo" name="q" size=31 maxlength=255 onclick="this.value='';" value="">
        <div class="search-btn">
            <button class="btn" type='submit' name="sites" onclick="sf.action='https://duckduckgo.com/?q=">DuckDuckGo</button>
            <button class="btn" type='submit' onclick="sf.action='https://www.google.com/search'; return true;">Google</button>
        </div>
    </form>
    <!-- End Search Form -->
</div>
