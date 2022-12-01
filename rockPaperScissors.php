<?php include 'inc/header.php'; ?>

<link rel="stylesheet" href="rockPaperScissors.css">
    <script>
        function rps(form){
            if(form.elements["p1"].value=="none" || form.elements["p2"].value=="none"){
            document.getElementById("result").innerHTML
            = "Both Players MUST make a selection!";
            }
            else if(form.elements["p1"].value=="Rock" && form.elements["p2"].value=="Rock"){
            document.getElementById("result").innerHTML
            = "Both players chose Rock. <br><br><strong>Tie Game!</strong>";
           }
           else if(form.elements["p1"].value=="Paper" && form.elements["p2"].value=="Paper"){
            document.getElementById("result").innerHTML
            = "Both players chose Paper. <br><br><strong>Tie Game!</strong>";
           }
           else if(form.elements["p1"].value=="Scissors" && form.elements["p2"].value=="Scissors"){
            document.getElementById("result").innerHTML
            = "Both players chose Scissors. <br><br><strong>Tie Game!</strong>";
           }
           else if(form.elements["p1"].value=="Rock" && form.elements["p2"].value=="Paper"){
            document.getElementById("result").innerHTML
            = "Player 1 chose Rock <br> Player 2 chose Paper <br> <strong>Paper covers Rock <br><br> Player 2 wins!</strong>";
           }
           else if(form.elements["p1"].value=="Rock" && form.elements["p2"].value=="Scissors"){
            document.getElementById("result").innerHTML
            = "Player 1 chose Rock <br> Player 2 chose Scissors <br> <strong>Rock breaks Scissors<br><br> Player 1 wins!</strong>";
           }
           else if(form.elements["p1"].value=="Paper" && form.elements["p2"].value=="Rock"){
            document.getElementById("result").innerHTML
            = "Player 1 chose Paper <br> Player 2 chose Rock <br> <strong>Paper covers Rock <br><br> Player 1 wins!</strong>";
           }
           else if(form.elements["p1"].value=="Paper" && form.elements["p2"].value=="Scissors"){
            document.getElementById("result").innerHTML
            = "Player 1 chose Paper <br> Player 2 chose Scissors <br> <strong>Scissors cuts Paper <br><br> Player 2 wins!</strong>";
           }
           else if(form.elements["p1"].value=="Scissors" && form.elements["p2"].value=="Rock"){
            document.getElementById("result").innerHTML
            = "Player 1 chose Scissors <br> Player 2 chose Rock <br> <strong>Rock breaks Scissors <br><br> Player 2 wins!</strong>";
           }
           else if(form.elements["p1"].value=="Scissors" && form.elements["p2"].value=="Paper"){
            document.getElementById("result").innerHTML
            = "Player 1 chose Scissors <br> Player 2 chose Paper <br> <strong>Scissors cuts Paper <br><br> Player 1 wins!</strong>";
           }
        }

        function hidep1(form){
            var x = document.getElementById("p1");
            x.style.display = "none";
        }

        function hidep2(form){
            var y = document.getElementById("p2");
            y.style.display = "none";
            
        }

        function resetGame(form){
            document.getElementById("ropasc").reset();
            var x = document.getElementById("p1");
            if (x.style.display === "none") {
                x.style.display = "inline";
            }
            var y = document.getElementById("p2");
            if (y.style.display === "none") {
                y.style.display = "inline";
            }
            document.getElementById("result").innerHTML
            = " ";      
        }
    </script>
    <div style="background-image: url(assets/rps.jpg); padding-bottom: 125px; margin-bottom: 20px;">
    <header>Rock, Paper, Scissors</header>
        <form id="ropasc" >
            <section class="choose">
                <div>
                    <h2>Player 1</h2>
                    <label for="p1">Rock, Paper, or Scissors?</label>
                    <select name="p1" id="p1" onchange="hidep1(this.form)"> <!--Trying to use onclick to hide choice before player 2-->
                        <option value="none">-</option>
                        <option value="Rock">Rock</option>
                        <option value="Paper">Paper</option>
                        <option value="Scissors">Scissors</option>
                    </select>
                </div>
                <div>
                    <h2>Player 2</h2>
                    <label for="p2">Rock, Paper, or Scissors?</label>
                    <select name="p2" id="p2" onchange="hidep2(this.form)">
                        <option value="none">-</option>
                        <option value="Rock">Rock</option>
                        <option value="Paper">Paper</option>
                        <option value="Scissors">Scissors</option>
                    </select>
                </div>
            </section>

            <br><br>

            <div class="buttonarea">
                <input type="button" class="button" value="Shoot!" onclick="rps(this.form);">
            </div>
            
            
            <p id="result" class="result">

            </p>

            <br>

            <div class="buttonarea">
                <input type="button" class="button" value="Reset Game" onclick="resetGame(this.form);">
            </div>
        </form>
    </div>
    
    <?php include 'inc/footer.php'; ?>