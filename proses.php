<h2>HOBI</h2>
<form action="" method="post">
<input type="checkbox" name="hobi[]" value="olahraga">OLAHRAGA<br/>
<input type="checkbox" name="hobi[]" value="bersepeda">bersepeda<br/>
<input type="checkbox" name="hobi[]" value="memanah">memanah<br/>
<input type="checkbox" name="hobi[]" value="berlari">berlari<br/>
<input type="checkbox" name="hobi[]" value="berenang">berenang<br/>
<input type="reset" value="Hapus Hobi" name="delete"> <br> <br>

    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
    <input type="submit" name="enter" value="KIRIM"
 
  <?php 

if(isset($_POST['enter']))
	$data=$_POST["hobi"];
 			foreach ($data as $nilai){
 			echo $nilai."<br/>";
 }




   ?>
