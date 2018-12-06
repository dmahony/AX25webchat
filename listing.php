<?php
// set source file name and path
$source = "messages.txt";

//$file=file("messages.txt");$a = preg_grep("/FAIL|Reset|DEBUG0-1|Slot/",$file,PREG_GREP_INVERT );                                                       websocket_hub.go
// read raw text as array
$raw = file($source) or die("Cannot read file");                                                                                               o                                                                                                                                                port.go// join remaining data into string                                                                                                             e$data = join('', $raw);

// Strip non alphanumeric
//$html = preg_replace("/[^a-zA-Z0-9]/", ' ', $html);
//$html = preg_replace("/[^a-zA-Z0-9]/", $html);                                                                                                      le-gh-pages
//$html = preg_replace("/[\/\&%#()\$^]/", ' ', $html);                                                                                          rayscale-gh-pages.zip// replace special characters with HTML entities                                                                                               g// replace line breaks with <br />                                                                                                              raysca$html = nl2br(htmlspecialchars($data));                                                                                                        g
// replace multiple spaces with single spaces
$html = preg_replace('/\s\s+/', ' ', $html);

//strip lines with slot time
//$html = preg_replace('/DEBUG0-1\n/', ' ', $html);

//$html = preg_replace('/to ^ ( )\n/', ' ', $html);

// Strip non alphanumeric
//$html = preg_replace("/[^a-zA-Z0-9]/", ' ', $html);
// Strip Text$html = preg_replace('/FAIL|830|Reset|time|radio|!0x20|IDENT|pid=F0|:|Text|error|ax0|fm|ctl|UI|Slot/', ' ', $html);

//$html = preg_replace('/DEBUG0-1\n/', ' ', $html);
//remove lines containing DEBUG0-1
$html = preg_replace('/DEBUG0-1.*?\n/','', $html);
$html = preg_replace('/:9.*?\n/','', $html);
$html = preg_replace('/ms.*?\n/','', $html);

// Strip non alphanumeric
//$html = preg_replace("/[^a-zA-Z0-9]/", $html);
// replace URLs with <a href...> elements
//$html = preg_replace('/\s(\w+:\/\/)(\S+)/', ' <a href="\\1\\2" target="_blank">\\1\\2</a>', $html);

// start building output page
// add page header
$output =<<< HEADER
<html>
<head>
//<link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR" rel="stylesheet">
//<link href="https://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet">
//<link href="https://fonts.googleapis.com/css?family=Noto+Sans+TC" rel="stylesheet">
<style>
body {
//      font-family: "Arial",  sans-serif;
//      font-family: 'Noto Sans TC', sans-serif;
//   font-family: 'Inconsolata', monospace;
//font-family: 'Noto Sans KR', sans-serif;
//     font-size: 18px;
//      background-color:#000000;
//      color:#65ed34;
//      color:#ffffff
}

</style>
</head>
<body>
HEADER;

// add page content
$output .= "<div class='slug'>$slug</div>";
//$output .= "<div class='byline'>By $byline</div><p />";
$output .= "<div>$html</div>";

// add page footer
$output .=<<< FOOTER
</body>
</html>
FOOTER;

// display in browser
echo $output;
// AND/OR
//header("refresh: 3;");
?>
<script type="text/javascript">
   window.scrollTo(0,document.body.scrollHeight);
//    window.alert("sometext");
</script>
//"<meta http-equiv='refresh' content='5'>";
