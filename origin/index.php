<script>

var invocation = new XMLHttpRequest();
invocation.open('GET', 'http://localhost2:9999/index.php', true);
invocation.withCredentials = true; // cookie を送るためのおまじない

//invocation.setRequestHeader( "X-From", location.href );
invocation.send();

</script>
