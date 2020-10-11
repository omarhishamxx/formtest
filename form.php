<!DOCTYPE html>
<html>
   <head>
      <title>Form</title>
   </head>
   <body>
      	<center>
        <h1>Recruiting Form</h1>
        <form autocomplete="off" action="dbphp.php" method="post" enctype="multipart/form-data">
            <table style="width:20%">
               	<tr>
                  	<td><input type="text" name="fname" placeholder="First Name"> </td>
                  	<td><input type="text" name="lname" placeholder="Last Name">  </td>
               	</tr>

               	<tr>
                  	<td>	<input type="text" name="email" placeholder="Email">  </td>
                  	<td>
                     	<select name="gender" id="genderid">
                        	<option value="male">Male</option>
                        	<option value="female">Female</option>
                     	</select>
                  	</td>
               	</tr>

               	<tr>
                  	<td>text area  <br><textarea name="address" rows="5" cols="10" placeholder="address"></textarea> </td>
                  	<td> <input type="text" name="school" placeholder="school"> </td>
               	</tr>

               	<tr>
                  	<td>    </td>
                  	<td><input type="text" name="college" placeholder="college"></td>
               	</tr>

               	<tr>
                  	<td><input type="date" id="dob" name="dob"></td>
               	</tr>

               	
                  <tr>
					<td>
						
						Select image to upload:
						<input type="file" name="fileToUpload">
					</td>
          		</tr>
          		<tr>
                  <td> </td>
					<td>
                  		<input type ="submit" style="width:100px; height:30px;">
                  	</td>
                  </tr>
         </table>
         </form>
      </center>
   </body>
</html>