<?php

session_start();

if ($_SESSION['logado'] != 1) {
    
    ?>
        <script type="text/javascript">
            document.location.href = "home.php?erro=1";
        </script>
    <?php

} else {
    ?>
<?php

}
	if (isset($_GET["acao"])) {

	    if ($_GET["acao"] == "sair") {
    	    $_SESSION['logado'] = 0;
        	
        	?>
        		<script type="text/javascript">
            		document.location.href = "login.php?erro=2";
        		</script>
        	<?php
    }
}

?>