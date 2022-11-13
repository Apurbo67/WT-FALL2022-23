<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<head>
    <body>
        <form action = "" method= "POST" enctype = "multipart/form->data">
            <table>
                <tr>
                <td><h2>Admin Registration Form </h2><td>
            </tr>
            <tr>
                        <td><label><h3>PERSONAL INFORMATION FOR NEW ACCOUNT</h3></label></td>
                    </tr>
                <tr>
                    <td>
                        <label>Firstname:</label>
                    </td>
                    <td> <input type="text" name="fname" placeholder="Enter your firstname" required>
                </td>
                
                <td> 
                </tr>
                 <tr>
                       <td>
                      <label>Lastname: </label> 
                     </td>
                    <td>
                     <input type="text" name="lname" placeholder="Enter your lastname" required> 
                     <td> 
                      </td>
                </tr>
                 <tr><td><label>Gender: </label></td>
                    <td>
                           <input type="radio" name="gender" value="male">Male
                          <input type="radio" name="gender" value="female">Female
                         
                         <td>
                         </td>
                 </td>
                  </tr>
<tr>
<td>
                        <label>Maritial Status:</label>
                    </td>
                    <td> <input type="text" name="fname" placeholder="Enter your maritial status" required>
                </td>
</tr>
                  <tr>
                    <td><label>Date of Birth:</label></td>
                     <td><input type="date" name="dateofbirth" pattern= "dobErr" required></td>
                     <td>
                     </td>
                 </tr>
                 <tr>
                    
                    
                    
                    <tr>
                  <td><label for="Religion">Religion:</label>
                  <td>
                  <select name="Religion" id="religion">
                  <option value="Islam">ISLAM</option>
                  <option value="HINDU">HINDU</option>
                  <option value="CHRISTIAN">CHRISTIAN</option>
                  <option value="BUDDHIST">BUDDHIST</option>
                 
                 </select>
                </td>
                     </td>
                 </tr>
                 <tr>
                        <td><label>Father's Name: </label></td>
                        <td><input type="text" name="fathername" placeholder ="Enter your father's name" required>
                    </td>
                    </tr>
                    <tr>
                     <td><label>Mother's Name: </label></td>
                     <td><input type="text" name="mothername" placeholder ="Enter your mother's name" required>
                    </td>
                 </tr>
                    
                  <tr>
                    <td>
                    <label>User ID: </label>
                       </td>
                       <td>
                       <input type="text" name="uname" placeholder="Enter your ID" required> <td>
                       </td>
                       </td>
                 </tr>
                 
                    <tr>
            <td><label><h3>ADDRESS & CONTACT</h3></label></td>
                    </tr>
                    <td> <label>Address: </label></td>
                    <td><input type="text" name="address" placeholder="Enter your address ">
                   <tr>
                  <td><label for="city">City:</label>
                  <td><input type="text" name="city" placeholder="Enter your city ">
                </td>
                </td>
            </tr>
                <td>
                </td>
            <tr>
                    <td>
                    <label for="postal">Postal Code:</label>
                    <td><select name="postal" id="postal">
                    <option value="5000">5000</option>
                    <option value="5200">5200</option>
                    <option value="5300">53</option>
                    </td>
                    </select>
                    </td>
                </tr>
                   
                    <tr>
                        <td> <label>Email: </label></td>
                        <td><input type="email" name="email"placeholder="Enter your email" required>
                    </td>
                        <td>
                        </td>
                    </tr>
                    
                    <tr>
                        <td>
                        <label for="phone">Phone:</label><br><br>
                    </td>
                        <td>
                        <input type="tel" id="phone" name="phone" placeholder="XXXXXXXXXXX"  required>
                        
                        <td>
                        </td>
                        <tr>
                    </tr>
                    <tr>
                    </tr>
                    </tr>
                    </tr><tr><tr><tr></tr>
                    <tr>
                    <tr></tr><tr></tr><tr></tr><tr></tr>
                
                 </tr>
                    <tr>
                    <tr></tr><tr></tr><tr></tr><tr></tr>
                <td><input type="submit" name="submit1"></td>

                <td><input type="reset" value="Reset"></td>
                 </tr>
</table>
</form>
</body>
<head>