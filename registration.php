<?php
$f_name = $l_name = $dob = $company = $address1 = $address2 = $city = $zipcode = $phone = $fax = $email = $oamount = $cc = $month = $name = $adt = $address = $city1 = $zip = $name1 = $ques = "";
$f_name_err = $l_name_err = $dob_err = $address1_err = $city_err = $zipcode_err = $email_err = $amount_err = "";
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
  if(empty($_POST['zipcode'])){
    $zipcode_err = "zipcode cannot be empty!";
  }
  else{
    $zipcode = $_POST['zipcode'];
  }
  if(empty($_POST['phone'])){
  }
  else{
    $phone = $_POST['phone'];
  }
  if(empty($_POST['fax'])){
  }
  else{
    $fax = $_POST['fax'];
  }
  if(empty($_POST['email'])){
    $email_err = "email cannot be empty!";
  }
  else{
    $email = $_POST['email'];
  }
  if(empty($_POST['amount'])){
    $amount_err = "amount cannot be empty!";
  }
  if(empty($_POST['oamount'])){
  }
  else{
    $oamount = $_POST['oamount'];
  }
  if(empty($_POST['cc'])){
  }
  else if((isset($_POST['rdonation'])) && ($_POST['rdonation']=="interested")){
    $cc = $_POST['cc'];
  }
  else{
  }
  if(empty($_POST['month'])){
  }
  else if((isset($_POST['rdonation'])) && ($_POST['rdonation']=="interested")){
    $month = $_POST['month'];
  }
  else{
  }
  if(empty($_POST['name'])){
  }
  else{
    $name = $_POST['name'];
  }
  if(empty($_POST['adt'])){
  }
  else{
    $adt = $_POST['adt'];
  }
  if(empty($_POST['address'])){
  }
  else{
    $address = $_POST['address'];
  }
  if(empty($_POST['city1'])){
  }
  else{
    $city1 = $_POST['city1'];
  }
  if(empty($_POST['zip'])){
  }
  else{
    $zip = $_POST['zip'];
  }
  if(empty($_POST['name1'])){
  }
  else{
    $name1 = $_POST['name1'];
  }
  if(empty($_POST['ques'])){
  }
  else{
    $ques = $_POST['ques'];
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
                <input type="text" name="zipcode" value="<?php echo $zipcode; ?>">
				<lable style="color:red"><?php echo $zipcode_err; ?></label>
              </td>
            </tr>
            <tr>
              <td align="right">
                <label required>Country</label>
                <label style="color:red">*</label>
              </td>
              <td>
                <select name="country">
                  <option value="ban" <?php if((isset($_POST['country'])) && ($_POST['country']=="ban")) echo "selected" ?>>Bangladesh</option>
                  <option value="in" <?php if((isset($_POST['country'])) && ($_POST['country']=="in")) echo "selected" ?>>India</option>
                  <option value="pak" <?php if((isset($_POST['country'])) && ($_POST['country']=="pak")) echo "selected" ?>>Pakistan</option>
                </select>
              </td>
            </tr>
            <tr>
              <td align="right">
                <label required>Phone</label>
              </td>
              <td>
                <input type="text" name="phone" value="<?php echo $phone; ?>">
              </td>
            </tr>
            <tr>
              <td align="right">
                <label>Fax</label>
              </td>
              <td>
                <input type="text" name="fax" value="<?php echo $fax; ?>">
              </td>
            </tr>
            <tr>
              <td align="right">
                <label>Email</label>
                <label style="color:red">*</label>
              </td>
              <td>
                <input type="text" name="email"  value="<?php echo $email; ?>">
				<lable style="color:red"><?php echo $email_err; ?></label>
              </td>
            </tr>
            <tr>
              <td align="right">
                <label>Donation Amount</label>
                <label style="color:red">*</label>
              </td>
              <td>
                <input type="radio" name="amount" value="none" <?php if((isset($_POST['amount'])) && ($_POST['amount']=="none")) echo "checked" ?>>None
                <input type="radio" name="amount" value="50" <?php if((isset($_POST['amount'])) && ($_POST['amount']=="50")) echo "checked" ?>>$50
                <input type="radio" name="amount" value="75" <?php if((isset($_POST['amount'])) && ($_POST['amount']=="75")) echo "checked" ?>>$75
                <input type="radio" name="amount" value="100" <?php if((isset($_POST['amount'])) && ($_POST['amount']=="100")) echo "checked" ?>>$100
                <input type="radio" name="amount" value="250" <?php if((isset($_POST['amount'])) && ($_POST['amount']=="250")) echo "checked" ?>>$250
                <input type="radio" name="amount" value="other" <?php if((isset($_POST['amount'])) && ($_POST['amount']=="other")) echo "checked" ?>>Other
				<lable style="color:red"><?php echo $amount_err; ?></label>
              </td>
            </tr>
            <tr>
              <td>
                <h6>(Check a button or type)</h6>
              </td>
              <td>
                <label>Other Amount $</label>
                <input type="text" name="oamount" value="<?php echo $oamount; ?>">
              </td>
            </tr>
            <tr>
              <td>
                <label>Recurrign Donation</label>
              </td>
              <td>
                <input type="checkbox" name="rdonation" value="interested" <?php if((isset($_POST['rdonation'])) && ($_POST['rdonation']=="interested")) echo "checked" ?>>I am interested in giving on a regular basis.
              </td>
            </tr>
            <tr>
              <td>
                <h6>(Check if yes)</h6>
              </td>
              <td>
                <label>Monthly Credit Card $</label>
                <input type="text" name="cc" value="<?php echo $cc; ?>">
                <label>for</label>
                <input type="text" name="month" value="<?php echo $month; ?>">
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
                <input type="radio" name="donation" value="toh" <?php if((isset($_POST['donation'])) && ($_POST['donation']=="toh")) echo "checked" ?>>To Honor
                <br>
                <input type="radio" name="donation" value="inm" <?php if((isset($_POST['donation'])) && ($_POST['donation']=="inm")) echo "checked" ?>>In Memory of
              </td>
            </tr>
            <tr>
              <td align="right">
                <label>Name</label>
              </td>
              <td>
                <input type="text" name="name" value="<?php echo $name; ?>">
              </td>
            </tr>
            <tr>
              <td align="right">
                <label>Acknowledge donation to</label>
              </td>
              <td>
                <input type="text" name="adt" value="<?php echo $adt; ?>">
              </td>
            </tr>
            <tr>
              <td align="right">
                <label>Address</label>
              </td>
              <td>
                <input type="text" name="address" value="<?php echo $address; ?>">
              </td>
            </tr>
            <tr>
              <td align="right">
                <label>City</label>
              </td>
              <td>
                <input type="text" name="city1" value="<?php echo $city1; ?>">
              </td>
            </tr>
            <tr>
              <td align="right">
                <label>State</label>
              </td>
              <td>
                <select name="state1">
                  <option value="Da" <?php if((isset($_POST['state1'])) && ($_POST['state1']=="Da")) echo "selected" ?>>Dhaka</option>
                  <option value="Co" <?php if((isset($_POST['state1'])) && ($_POST['state1']=="Co")) echo "selected" ?>>Comilla</option>
                  <option value="Kh" <?php if((isset($_POST['state1'])) && ($_POST['state1']=="Kh")) echo "selected" ?>>khulna</option>
                </select>
              </td>
            </tr>
            <tr>
              <td align="right">
                <label>Zip</label>
              </td>
              <td>
                <input type="text" name="zip" value="<?php echo $zip; ?>">
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
                <input type="text" name="name1" value="<?php echo $name1; ?>">
              </td>
            </tr>
            <tr colspan="2">
                <td>
                    <input type="checkbox" name="gift" value="gift" <?php if((isset($_POST['gift'])) && ($_POST['gift']=="gift")) echo "checked" ?>>I would to like my gift to remain anonymous.
                    <br>
                    <input type="checkbox" name="employee" value="employee" <?php if((isset($_POST['employee'])) && ($_POST['employee']=="employee")) echo "checked" ?>>My employee offers a matching gift progrem. I will mail the matching gift.
                    <br>
                    <input type="checkbox" name="cost" value="cost" <?php if((isset($_POST['cost'])) && ($_POST['cost']=="cost")) echo "checked" ?>>Please save the cost of acknowledging this gift.
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
                <textarea rows="8" cols="70" name="ques"  value=""><?php echo $ques; ?></textarea>
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
		<br><br><br><br>
		<h1>Domain information</h1>
		<br>
		<p>
		<label><?php echo $f_name; ?></label><br>
		<label><?php echo $l_name; ?></label><br>
		<label><?php echo $dob; ?></label><br>
		<label><?php echo $address1; ?></label><br>
		<label><?php echo $city; ?></label><br>
		<label><?php echo $zipcode; ?></label><br>
		<label><?php echo $email; ?></label><br>
		</p>
    </body>
  </html>
