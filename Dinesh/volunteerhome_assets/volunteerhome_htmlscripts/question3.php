<div>

<fieldset>
    <h3>
    <label for="question3">
        <?php
             //function for getting the text
            get_question_text(21);
        ?> (Required)
</label>
<br>
<br>
    <input hidden type="number" name="qid3" value="21"><!-- Hidden input that carries value of question id (currently manual)-->
<br>
    <input required type="radio" name="question3" value="Sad" id="question3"><img src="volunteerhome_assets/volunteerhome_images/surveyiconsad.png" alt="sad">
    <input required type="radio" name="question3" value="Normal" id="question3"><img src="volunteerhome_assets/volunteerhome_images/surveyiconnomal.png" alt="normal">
    <input required type="radio" name="question3" value="Happy" id="question3"><img src="volunteerhome_assets/volunteerhome_images/surveyiconsmile.png" alt="smile">
<br>
<br>
    <label for="question3">Explain :(Optional)</label>
<br>
    <textarea name="question3_opt" cols="45" rows="5" placeholder="Enter your explanation here"></textarea>
<br>
    </h3>
</fieldset>
</div>
<h5>
    <a href="#bar2"><input class="navbuttonprevious"" type="button" id="previous2" name="previous"></a>
    <a href="#bar4"><input class="navbuttonnext" type="button" id="next4" name="next"></a>
</h5>