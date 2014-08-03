<?php
//javascript:



?>

<!-- jquery -->
<script src="libraries/jquery-2.1.1/jquery-2.1.1.js"></script>
<!-- jquery ui -->
<script src="libraries/jquery-ui-1.11.0/jquery-ui.js"></script>
<!-- compiled and minified javascript -->
<script src="libraries/bootstrap-3.2.0-dist/js/bootstrap.js"></script>


<script>
    $(document).ready(function(){
        $("#console-debug").hide();
        $("#btn-debug").click(function(){
            $("#console-debug").toggle();
        });
    });
</script>