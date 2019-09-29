<?php
$f_name = $l_name = $dob = $company = $address1 = $address2 = $city = "";
$f_name_err = $l_name_err = $dob_err = $address1_err = $city_err = "";
if($_SERVER['REQUEST_METHOD']=="POST"){
	if(empty($_POST['f_name'])){
		$f_name_err = "First Name cannot be empty!";
	}
	else{
		$f_name = $_POST['f_name'];
	}
	
	if(empty($_POST['l_name'])){
		$l_name_err = "Last Name cannot be empty!";
	}
	else{
		$l_name = $_POST['l_name'];
  }
  
  if(empty($_POST['dob'])){
    $dob_err = "Birthday cannot be empty!";
  }
  else{
    $dob = $_POST['dob'];
  }
  
  if(empty($_POST['company'])){
  }
  else{
    $company = $_POST['company'];
  }

  if(empty($_POST['address1'])){
    $address1_err = "Address cannot be empty!";
  }
  else{
    $address1 = $_POST['address1'];
  }

  if(empty($_POST['address2'])){
  }
  else{
    $address2 = $_POST['address2'];
  }

  if(empty($_POST['city'])){
    $city_err = "City cannot be empty!";
  }
  else{
    $city = $_POST['city'];
  }
}

?> 
<html>
    <head>
      <title>Registration</title>
    </head>
    <body>
      <h2 style="color:red">Donor Information</h2>
      <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <div align="center">
          <table>
            <tr>
              <td align="right">
                <label>First Name</label>
                <label style="color:red">*</label>
              </td>
              <td>
                <input type="text" name="f_name" value="<?php echo $f_name; ?>">
                <label style="color:red"><?php echo $f_name_err; ?></label>
              </td>
            </tr>
            <tr>
              <td align="right">
                <label>Last Name</label>
                <label style="color:red">*</label>
              </td>
              <td>
                <input type="text" name="l_name" value="<?php echo $l_name; ?>">
                <label style="color:red"><?php echo $l_name_err; ?></label>
              </td>
            </tr>
            <tr>
              <td align="right">
                <label>Date of Birth</label>
                <label style="color:red">*</label>
              </td>
              <td>
                <input type="date" name="dob" value="<?php echo $dob; ?>">
                <lable style="color:red"><?php echo $dob_err; ?></label>
              </td>
            </tr>
            <tr>
              <td align="right">
                <label>Company</label>
              </td>
              <td>
                <input type="text" name="company" value = "<?php echo $company; ?>">
              </td>
            </tr>
            <tr>
              <td align="right">
                <label>Address1</label>
                <label style="color:red">*</label>
              </td>
              <td>
                <input type="text" name="address1" value="<?php echo $address1; ?>">
                <lable style="color:red"><?php echo $address1_err; ?></label>
              </td>
            </tr>
            <tr>
              <td align="right">
                <label>Address2</label>
              </td>
              <td>
                <input type="text" name="address2" value="<?php echo $address2; ?>">
              </td>
            </tr>
            <tr>
              <td align="right">
                <label>City</label>
                <label style="color:red">*</label>
              </td>
              <td>
                <input type="text" name="city" value="<?php echo $city; ?>">
                <lable style="color:red"><?php echo $city_err; ?></label>
              </td>
            </tr>
            <tr>
              <td align="right">
                <label>State</label>
                <label style="color:red">*</label>
              </td>
              <td>
                <select name="state">
                  <option value="D" <?php if((isset($_POST['state'])) && ($_POST['state']=="D")) echo "selected" ?>>Dhaka</option>
                  <option value="C" <?php if((isset($_POST['state'])) && ($_POST['state']=="C")) echo "selected" ?>>Comilla</option>
                  <option value="K" <?php if((isset($_POST['state'])) && ($_POST['state']=="K")) echo "selected" ?>>khulna</option>
                </select>
              </td>
            </tr>
            <tr>
              <td align="right">
                <label>Zip Code</label>
                <label style="color:red">*</label>
              </td>
              <td>
                <input type="text" name="zipcode">
              </td>
            </tr>
            <tr>
              <td align="right">
                <label required>Country</label>
                <label style="color:red">*</label>
              </td>
              <td>
                <select name="country">
                  <option value="ban">Bangladesh</option>
                  <option value="in">India</option>
                  <option value="pak">Pakistan</option>
                </select>
              </td>
            </tr>
            <tr>
              <td align="right">
                <label required>Phone</label>
              </td>
              <td>
                <input type="text" name="phone">
              </td>
            </tr>
            <tr>
              <td align="right">
                <label>Fax</label>
              </td>
              <td>
                <input type="text" name="fax">
              </td>
            </tr>
            <tr>
              <td align="right">
                <label>Email</label>
                <label style="color:red">*</label>
              </td>
              <td>
                <input type="text" name="email">
              </td>
            </tr>
            <tr>
              <td align="right">
                <label>Donation Amount</label>
                <label style="color:red">*</label>
              </td>
              <td>
                <input type="radio" name="amount">None
                <input type="radio" name="amount">$50
                <input type="radio" name="amount">$75
                <input type="radio" name="amount">$100
                <input type="radio" name="amount">$250
                <input type="radio" name="amount">Other
              </td>
            </tr>
            <tr>
              <td>
                <h6>(Check a button or type)</h6>
              </td>
              <td>
                <label>Other Amount $</label>
                <input type="text" name="oamount">
              </td>
            </tr>
            <tr>
              <td>
                <label>Recurrign Donation</label>
              </td>
              <td>
                <input type="checkbox" name="rdonation">I am interested in giving on a regular basis.
              </td>
            </tr>
            <tr>
              <td>
                <h6>(Check if yes)</h6>
              </td>
              <td>
                <label>Monthly Credit Card $</label>
                <input type="text" name="cc">
                <label>for</label>
                <input type="text" name="month">
              </td>
            </tr>
          </table>
        </div>
        <h2 style="color:red">Honorarium and Memorial Donation Information</h2>
        <div align="center">
          <table>
            <tr>
              <td align="right">
                <label>I would to make this<br>donation</label>
              </td>
              <td>
                <input type="radio" name="amount">To Honor
                <br>
                <input type="radio" name="amount">In Memory of
              </td>
            </tr>
            <tr>
              <td align="right">
                <label>Name</label>
              </td>
              <td>
                <input type="text" name="name">
              </td>
            </tr>
            <tr>
              <td align="right">
                <label>Acknowledge donation to</label>
              </td>
              <td>
                <input type="text" name="adt">
              </td>
            </tr>
            <tr>
              <td align="right">
                <label>Address</label>
              </td>
              <td>
                <input type="text" name="address">
              </td>
            </tr>
            <tr>
              <td align="right">
                <label>City</label>
              </td>
              <td>
                <input type="text" name="city1">
              </td>
            </tr>
            <tr>
              <td align="right">
                <label>State</label>
              </td>
              <td>
                <select name="state1">
                  <option value="D">Dhaka</option>
                  <option value="C">Comilla</option>
                  <option value="K">khulna</option>
                </select>
              </td>
            </tr>
            <tr>
              <td align="right">
                <label>Zip</label>
              </td>
              <td>
                <input type="text" name="zip">
              </td>
            </tr>
          </table>
        </div>
        <h2 style="color:red">Additional Information</h2>
        <div align="center">
          <table >
            <tr>
              <td colspan="2">
                <label>Please enter your name and organization as you would like it</label>
            </tr>
            <tr>
              <td align="right">
                <label>Name</label>
              </td>
              <td>
                <input type="text" name="name1">
              </td>
            </tr>
            <tr colspan="2">
                <td>
                    <input type="checkbox" name="gift">I would to like my gift to remain anonymous.
                    <br>
                    <input type="checkbox" name="employee">My employee offers a matching gift progrem. I will mail the matching gift.
                    <br>
                    <input type="checkbox" name="cost">Please save the cost of acknowledging this gift.
                  </td>
            </tr>
            <tr>
              <td align="right">
                <label>Comments</label>
                <br>
                <h6>(Please type any ques <br> & feedback)</h6>
                <br>
              </td>
              <td>
                <textarea rows="8" cols="70"></textarea>
              </td>
            </tr>
            <tr>
              <td align="right">
                <label>How may we contact you?</label>
                <br>
                <br>
                <br>
                <br>
              </td>
              <td>
                <input type="checkbox" name="email">E-mail
                <br>
                <input type="checkbox" name="p_mail">Postal Mail
                <br>
                <input type="checkbox" name="telephone">Telephone
                <br>
                <input type="checkbox" name="fax">Fax    
              </td>
            </tr>
            <tr>
                <td colspan="2">
                  <label>I would like to receive newsletters and information about special events by:</label>
                </td>
            </tr>
            <tr>
              <td>
              </td>
              <td>
                <input type="checkbox" name="email1">E-mail
                <br>
                <input type="checkbox" name="p_mail1">Postal Mail
              </td>
            </tr>
            <tr colspan="2">
                <td>
                    <input type="checkbox" name="volunteer">I would like information about volunteering
                </td>
            </tr>
            <tr>
                <td align="right">
                    <input type="submit" value="Submit">
                </td>
                <td>
                    <input type="reset">
                </td>
            </tr>
          </table>
        </div>
      </form>
    </body>
  </html>


