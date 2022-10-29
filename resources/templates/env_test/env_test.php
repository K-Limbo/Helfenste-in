<ul>
		<?php
        while(current($env)){
		    $key = key($env);
            $value = current($env);
            
            echo "<li> {$key} => {$env[$key]} </li>";
				
		}
		?>
</ul>
