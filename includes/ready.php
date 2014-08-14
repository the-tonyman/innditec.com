<figure class="persiana">
                <div class="title_trabajos">
                    <h2>TRABAJOS REALIZADOS</h2>
                    <div class="ver_mas"><a href="portafolio">Ver portafolio</a></div>
                </div>
                <?php do { ?>
                <div class="element">
                  <a href="<?php echo $row_rsproyecto['url_proyecto']; ?>">
                    <div class="img">
                         <img src="Admin/pag/<?php echo $row_rsproyecto['img_proyecto']; ?>" alt="" />
                    </div>
                    <div class="description">
                      <p><?php echo $row_rsproyecto['descrip_proyecto_portada']; ?></p>
                    </div>
                  </a>
                </div> 
                 <?php } while ($row_rsproyecto = mysql_fetch_assoc($rsproyecto)); ?>           
</figure>
            
            