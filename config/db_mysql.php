&lt;?php
$mysqli = new mysqli(&quot;localhost&quot;, &quot;root&quot;, &quot;tu_contraseña&quot;, &quot;bdnomitec&quot;);
if ($mysqli-&gt;connect_error) {
die(&quot;Error en la conexión MySQL: &quot; . $mysqli-&gt;connect_error);
}
?&gt;