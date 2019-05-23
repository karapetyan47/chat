<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
    <title>Чат</title>
    <meta http-equiv="content-type" content="text/html"/>
    <link rel="stylesheet" href="style.css">
</head>
<body onload="chat()">
  <div id="back">
  <h2>Chat</h2>
  <div id="chat">
  </div>
<br>
<table>
  <tr>
    <td>Name:</td>
    <td>
        <input type="text" id="name">
    </td>
  </tr>
  <tr>
    <td>Message:</td>
    <td>
        <input type="text" id="message">
    </td>
  </tr>
  <tr>
    <td colspan="2">
        <input type="button" id="button" value="SEND" onclick="addMessage()">
    </td>
  </tr>
</table>
</div>
<script type="text/javascript" src="script.js"></script>
  </body>
</html>
