/* 
Shiva 0.1 beta firewall created by Nishant Patar and copyright by Arudh 0.1 license
You can use this free for home, user, student, education, ngo, organization, not allow sell or recopyright but if you want to commercial please Donate us. It will help us to create more awesome stuff than this. [ Beside they are no restriction. ] 

If you put www.arudh.com link it will help to increase Seo ranking to and help us to grow more.

It can help to prevent Xml and Cross Side Php injection in your webpage.

Visit us:
http://www.arudh.com
https://www.ahvan.co
https://www.techgurug.com

Donate on:
http://www.arudh.com/contribute.php
*/
<?php
/* Nish-Html-Filter */
/* Put below Html to Head all code and data */
/* Use to prevent Xml Injection in Header. This give you Anti-Xml injection capability. */
function HtmlFilter()
{
$html=<<<_HTML_
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title></title>
<meta name="keywords" content="free, open, source, download, share,  arudh">
<meta name="description" content="Free Download, Share, Copyright, and Upload with  Arudh.">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="Arudh.css" rel="stylesheet">
<script src="Arudh.js"></script>
</head>
_HTML_;
$HtmlArray=array($html);
foreach($HtmlArray as $Filter)
{ echo $Filter; break; }
}
$HtmlFilter=HtmlFilter();
echo $HtmlFilter;
?>

/* Call all data from another or php file via php include or require function by need ! */
/* Use to prevent Php cross side Injection in Header. This give you Anti-Php injection capability. */

<?php 
function Footer()
{ 
$fo=array(require("./Foldername/FileName.php")); 
foreach($fo as $tr) 
{ return $tr; break; } 
} 
$FooterFilter=Footer(); 
?>
