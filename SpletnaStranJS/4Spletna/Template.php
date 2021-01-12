<!DOCTYPE html>

<!--zacetek html dokumenta-->


 <?php require 'Head.php' ?> <!--Datoteka kjer je head-->


<body> <!--Začetek telesa-->

    <div> <!--začetek dela telesa-->

    <?php require 'Nav.php' ?>  <!--Datoteka kjer je Meni-->
    

        <div class="Row Vi-100 Orang">
                <!--razrez pod menijem-->
                <?php echo $Slika ?>
                <h2 class="Centr"><?php echo $Agencija ?></h2>
                <h3 class="Centrr"><?php echo $Agent ?></h3>
                <?php echo $Java ?>
                <?php echo $Gumb ?>
                
                



        </div>
        
        <div class="Row">

            <div class="Vi-60 Levo">
                <p id="Hide" class="txt60"><?php echo $Opis ?></p>

                <!--zgornji levi-->
	
                    

            </div>
            
            

            <div class="Vi-40 Desno">
                <!--zgornji desni-->
                <?php echo $Slika1 ?>
            </div>

           

        </div>


        <div class="Row AdvancedBela">



            <div class="Vi-40 Levo">
                <!--spodnji levi del-->


                <?php echo $Slika2 ?>

            </div>


            <div class="Vi-60 Desno">
                <!--spodnji desni-->

                <p class="txt60"><?php echo $SpecialNote ?></p>
                
                

            </div>



        </div>

        <div class="Row Vi-100  Grayo Centrrr">
            <!--drugi od uspod del razreza-->

                <?php require 'UpperFooter.php' ?>


        </div>


        <div class="Row Vi-100 ">
            <!--najspodnejsi del razreza-->

           
                <?php require 'Footer.php' ?>
            

        </div>

    </div>
    <!--konec dela telesa-->
</body>
<!--konec telesa-->

</html>
<!--konec html dokumenta-->