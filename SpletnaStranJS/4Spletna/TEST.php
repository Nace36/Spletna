<p>te zanima kaj sm dodov?</p>
                <p id ="Add"style="display: none;">
                    hocem novo kitaro </p>
                <p>
                    <button type="button" onclick='document.getElementById("Add").style.display="block"'>
                    Knof</button>

                 <button type="button" onclick=
		            'document.getElementById("p1").innerHTML = "<p><?php echo $Opis1 ?></p>"';>
                to je gumb</button>

                <button type="button" onclick=
                    'document.getElementById("Povecava").style.fontSize="50px"'>
                povecava</button>



                <p>
                <img id="slika" src="..\2Slike\emoji\happy.png" style="width=80px">
            </p>

            <p>
                <button onclick='document.getElementById("slika").src="../2Slike/emoji/happy.png"'>Vesel</button>
                <button onclick='document.getElementById("slika").src="../2Slike/emoji/sad.jpg"'>zalosten</button>
            </p>




            <p class="txt60" id="removed">
                ce te moti klikn gumb da zbrises
                <button onclick='document.getElementById("removed").style.display="none"'>odstrani</button>

            </p>