<pre>
<?php
$req=$_SERVER;
print_r($req);


?>
<script>
let body=document.body
body.addEventListener('keyup',function(e){
  console.log(e);
  if (e.code=='Space') {
    location.reload()
  }
  })
</script>