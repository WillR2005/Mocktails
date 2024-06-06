<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    #searchtext span{
    background-color:#A1F7FA;
    color:#555;
}

div {
    padding: 10px; 
}

</style>
<body>
<div><h2>Find and highlight text in document</h2>
<form action="" method="" id="search" name="search">
<input name="Mocksearch" id="Mocksearch" type="text" size="30" maxlength="30">
<input name="search" type="button" value="Search" onClick="highlightSearch()">
</form></div>
<div id="searchtext">

</div>


<script>
function highlightSearch() {
    var text = document.getElementById("Mocksearch").value;
    var Mocksearch = new RegExp("(\\b" + text + "\\b)", "gim");
    var e = document.getElementById("searchtext").innerHTML;
    var enew = e.replace(/(<span>|<\/span>)/igm, "");
    document.getElementById("searchtext").innerHTML = enew;
    var newe = enew.replace(Mocksearch, "<span>$1</span>");
    document.getElementById("searchtext").innerHTML = newe;

}</script>
</body>
</html>