<ul>
<?php
$navelements['home'] = array('Home');
$navelements['about'] = array('About');
$navelements['services'] = array('Services');
$navelements['reviews'] = array('Reviews');
$navelements['contact'] = array('Contact');
$navelements['resources'] = array('Resources');
$navelements['policies'] = array('Policies');
//$navelements['Events'] = array('Events');
$navelements['store'] = array('Store');
foreach ($navelements as $page => $display_arr) {
        print "<li><a id=\"$page\"";
        if (preg_match("/$page/i", "$go")) {
                print " class=\"active\"";
        }
        print " href=\"/$page\">";
        foreach ($display_arr as $display_text) {
                print "<span>$display_text</span>";
        }
        print "</a></li>";
}
?>
</ul>
