<?php
print <<<_HTML_
<form method="post" action="$_SERVER[PHP_SELF]">
Your name: <input type="text" name="user" />
<br/>
<button type="submit">Say hello</button>
</form>
_HTML_;
?>
