<?php
  header("Content-Type: text/css; charset=utf-8");
  $palette = array('background' => '#6D819C', 'foreground' => '#E4E7EC', 'text' => '#263959', 'highlight' => '#55967E');
  #$palette = array('background' => '#9BAEC8', 'foreground' => '#D9E1E8', 'text' => '#282C37', 'highlight' => '#2B90D9');
  #$palette = array('background' => '#AAABD3', 'foreground' => '#F8FAFF', 'text' => '#353866', 'highlight' => '#CBA6C3');
?>

@import url('https://fonts.googleapis.com/css2?family=Nanum+Gothic&display=swap');

body {
  font-family: 'Nanum Gothic', sans-serif;
  font-size: 12pt;
  color: <?=$palette['text']?>;
  background-color: <?=$palette['background']?>;
}

#layout {
  max-width: 600px;
  width: auto;
  margin: auto;
}

#title {
  padding: 10px;
}

#menu {
  text-align: right;
  padding: 10px;
}

#content {
  background-color: <?=$palette['foreground']?>;
  line-height: 180%;
  text-align: justify;
  font-size: 1em;
  padding: 10px;
}

#footer {
  font-size: 0.8em;
  text-align: center;
  padding: 10px;
  clear: both;
}

h1 {
  font-size: 2em;
  margin: 0px;
}

h2 {
  font-size: 1.5em;
  margin: 0px;
}

hr {
  border: none;
  border: 1px solid <?=$palette['text']?>;
}

p {
  text-align: justify;
  line-height: 180%;
}

p.text {
  text-indent: 0.5em;
}

a {
  color: <?=$palette['text']?>;
  text-decoration: none;
  font-weight: bold;
  padding: 5px;
}

a:hover {
  background: <?=$palette['highlight']?>;
}

ul.menu {
  margin: 0px;
  padding: 0px;
}

ul.menu li {
  display: inline;
}

input {
  background-color: <?=$palette['foreground']?>;
  border: <?=$palette['text']?> solid 1px;
  color: <?=$palette['text']?>;
  font-family: 'Nanum Gothic', sans-serif;
  font-size: 12pt;
}

::placeholder {
  color: <?=$palette['highlight']?>;
}
