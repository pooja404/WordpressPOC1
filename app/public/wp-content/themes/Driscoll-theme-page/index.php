<?php get_header(); ?>

  <div class="container-fluid section-img">
        <div class="container ">
          <div class="col-md-6">
            <div class="firstimg">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/1.png" alt="Receta de la semana" height="288" width="485">
            </div>
            <div class="secondimg"> 
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/2.png" alt="Receta de la semana" height= "351" width= "455">
            </div>
          </div>
          <div class=" col-md-6">
              <div class="text-img">
                <div>
                <p>Conoce la vida de</p>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/text1.png">
                <span>UNA Berry</span>
                <span> <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/text2.png"></span>
              
              </div>
                
              </div>
                 <div style="display: inline-block;margin-top: 100px;">
                <div class="backimg" > 
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/4.png" alt="Receta de la semana" class="back-img"> </div>
                <div class="frontimg">
                     <?php echo do_shortcode('[embedyt]https://www.youtube.com/watch?v=B4yV3AO7G6E&width=400&height=330[/embedyt]'); ?>
                   
                  </div>
              </div>       
              
            </div>
        </div>
        <div class="container midsection">
          <!-- <img src="3.png" alt="Calendario" width="1088" height="400"> -->
          <div class="centered">
            <p>CALENDARIO</p>
            <p>NUESTRO CULTIVO DE BAYAS</p>
            <p>REGIONES</p>
          </div>
        </div>
        <div class="sectionenddiv">
            <p style="color: rgb(235, 71, 49);">#DulzuraNatural</p>
            <pm,m style="color: rgb(74,119,60);">Compartenos tu experiencia berry-ciosa</p>

        </div>
        <div class="container side-margin">
          
          <?php echo do_shortcode('[sp_wpcarousel id="20"]'); ?>
        </div>
      </br>
    </br>
    <div>
      <button class="vermas" type="button" onclick=""> VER MAS &gt; </button>
    </div>
  </br>
  <br>
        </div>
      </div>

  <?php get_footer();

?>