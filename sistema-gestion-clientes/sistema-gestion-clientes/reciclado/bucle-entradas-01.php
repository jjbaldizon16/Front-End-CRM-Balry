<?php 
		$entradas = conseguirEntradas($db);
		if(!empty($entradas)):
			while($entrada = mysqli_fetch_assoc($entradas)):
	?>
				<article class="entrada">
					<a href="entrada.php?id=<?=$entrada['id']?>">
						<h2><?=$entrada['direccion_instalacion']?></h2>
						<span class="fecha"><?=$entrada['historial'].' | '.$entrada['fecha_ultimo_cambio']?></span>
						<p>
							<?=substr($entrada['fecha_proximo_cambio'], 0, 180)."..."?>
						</p>
                         <div class="boton boton-verde">Ver registro</div>  

					</a>
                     
					<a href="editar-entrada.php?id=<?=$entrada['id']?>" class="boton boton-verde">Editar registro</a>

				</article>
	<?php
			endwhile;
		endif;
	?>