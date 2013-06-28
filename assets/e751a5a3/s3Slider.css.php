<?php
header('Content-type: text/css');
$_GET = unserialize(base64_decode($_GET['data']));
?>
#<?php echo $_GET['name']; ?> {
   width: <?php echo $_GET['width']; ?>px; /* important to be same as image width */
   height: <?php echo $_GET['height']; ?>px; /* important to be same as image height */
   position: relative;
   overflow: hidden;
}

#<?php echo $_GET['name']; ?>Content {
   width: <?php echo $_GET['width']; ?>px; /* important to be same as image width or wider */
   position: absolute;
   top: 0;
   margin-left: 0;
   padding-left: 0;
   list-type: none inside !important;
}

.<?php echo $_GET['name']; ?>Image {
   float: left;
   position: relative;
   display: none;
}

.<?php echo $_GET['name']; ?>Image span {
   position: absolute;
   left: 0;
   /*font: 10px/15px Arial, Helvetica, sans-serif;*/
   padding: 10px 13px;
   width: <?php echo $_GET['width']; ?>px;
   background-color: #000;
   filter: alpha(opacity=<?php echo $_GET['opacity']*100; ?>); /* here you can set the opacity of box with text */
   -moz-opacity: <?php echo $_GET['opacity']; ?>; /* here you can set the opacity of box with text */
   -khtml-opacity: <?php echo $_GET['opacity']; ?>; /* here you can set the opacity of box with text */
   opacity: <?php echo $_GET['opacity']; ?>; /* here you can set the opacity of box with text */
   color: #fff;
   display: none;
}

.clear {
   clear: both;
}
.top {
    top: 0;
    left: 0;
}
.bottom {
    bottom: 0;
    left: 0;
}
.left {
    top: 0;
    left: 0;
    width: 100px;
    height: <?php echo $_GET['height']; ?>px;
}
.right {
    right: 0;
    bottom: 0;
    width: 100px;
    height: <?php echo $_GET['height']; ?>px;
}