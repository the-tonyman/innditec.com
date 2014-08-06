<div id="wrapper">
                <div class="callbacks_container">
                  <ul class="rslides" id="slider4">
                  <?php do { ?>
                    <li>
                      <img src="img/slideshow/<?php echo $row_rsslide['img_slide']; ?>" alt="">
                      <p class="caption"><?php echo $row_rsslide['caption']; ?></p>
                    </li>
                   <?php } while ($row_rsslide = mysql_fetch_assoc($rsslide)); ?> 
                    
                    
                    
                    <!--<li>
                      <img src="img/slideshow/2.jpg" alt="">
                      <p class="caption">This is another caption</p>
                    </li>
                    <li>
                      <img src="img/slideshow/3.jpg" alt="">
                      <p class="caption">The third caption</p>
                    </li>-->
                  </ul>
                </div>
            </div>