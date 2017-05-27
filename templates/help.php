<div id="leftcolumn2" style="width:100%" >
<table width="800" cellpadding="0" cellspacing="0" class="moduletable">
  <tr><th width="800" valign="top"><img src="images/arrow.png" /><?php echo $help_bar ?></th></tr>
  <tr>
  	<td>
	<?php if (!empty($message)){ ?><br /><p class=\"message\"> <?php echo $message ?></p><?php } ?>
            <?php  if (!empty($errors)){ display_errors($errors); }?>
	<table width="800px">
	  <tr align="center">
		<td>
		  <p><h1><?php echo $help_title ?></h1></p>
			<br />
			
			<div id = "accordion">
  <h2><a href = "#" >1 Main Page Guide</a></h2>
      <ul>
        <li><a href = "Basic Ajax.html">1.Select the Period of the Task</a></li>
        <li><a href = "Basic Ajax.html">2.Click Search</a></li>
        <li><a href = "Basic Ajax.html">3.Display Results</a></li>
        <li><a href = "Basic Ajax.html">4.Edit or Delete your task with appropriate button</a></li>
		<li><a href = "Basic Ajax.html">5.How To and Questions</a></li>
        <li><a href = "Basic Ajax.html">6.Print your Tasks for the selected period</a></li>
        
                <li><a href = "Basic Ajax.html">1.Select the Period of the Task</a></li>
        <li><a href = "Basic Ajax.html">2.Click Search</a></li>
        <li><a href = "Basic Ajax.html">3.Display Results</a></li>
        <li><a href = "Basic Ajax.html">4.Edit or Delete your task with appropriate button</a></li>
		<li><a href = "Basic Ajax.html">5.How To and Questions</a></li>
        <li><a href = "Basic Ajax.html">6.Print your Tasks for the selected period</a></li>
      </ul>
  <h2><a href = "#" >2 Adding Task</a></h2>
      <ul>
        <li>Ecrire un programme JavaScript</li>
        <li>Sinitier aux variables</li>
        <li>Utiliser la concat&eacute;nation</li>
        <li>Comprendre les objets de chaine</li>
        <li>G&eacute;rer les types de variables</li>
      </ul>
    <h2><a href = "#" >3 Events</a></h2>
      <ul>
        <li>Travailler avec des nombres al&eacute;atoires</li>
        <li>Utiliser <em>if</em> pour controler le flux</li>
        <li>Utiliser la clause <em>else</em></li>
        <li>Utiliser <em>switch</em> pour les situations plus complexes</li>
        <li>Imbriquer des instructions <em>if</em></li>
      </ul>
    <h2><a href = "#" >4 Small Budget Application</a></h2>
      <ul>
        <li>Travailler avec des nombres al&eacute;atoires</li>
      </ul>
    <h2><a href = "#" >5 Logging Out</a></h2>
      <ul>
        <li>Travailler avec des nombres al&eacute;atoires</li>
      </ul>  
    <h2><a href = "#" >6 Help and Support</a></h2>
      <ul>
        <li>Contact us at: </li>
      </ul>
</div>


			<form name="frm_help" id="frm_help" method="post" action="" ><br /> 
			<div><?php echo $lang_description ?></div><br />
			<textarea name="description" id="description" style="width:400px; height:100px"></textarea>
		  <p>
  			<input type="submit" name="sendMail" class="button" 
  			value="<?php echo $btn["send"]; ?>" style="color:#FFFFFF; background-color:#214020"   /> &nbsp; 
  			<input type="reset" name="reset" class="button" 
  			value="<?php echo $btn["reset"] ?>" style="color:#FFFFFF; background-color:#214020"   /><br />
		  </p>
			</form>
 		</td>
	  </tr>
	</table>
 	</td>
  </tr>
</table>
</div>
<?php require_once('includes/footer.php'); ?>
