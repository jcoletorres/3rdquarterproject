<?php
include './includes/header.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Radiohead</title>
  <meta charset="utf-8">
  <link rel="icon" type="image/icon" href="images/icon.png"><!--=====Image Icon at Tab=====-->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Amatic+SC" />
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<!--======Nav Bar=====-->
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">
  <!-- =====Container (Newsletter Section)=====-->
  <div class="container">
    <h3 class="text-center">Join Our Newsletter</h3>
    <p class="text-center"><em>Stay up to date with Radiohead</em>
    </p>
    <div class="row test">
      <div class="col-md-4">
        <p>Leave us a comment!</p>
      </div><!--=====End Comment Quote=====-->
      <div class="col-md-8">
        <div class="row"><!--=====Name Form - Comment Form=====-->
          <div class="col-sm-6 form-group">
            <input class="form-control" id="name" name="name" placeholder="First Name*" type="text" required>
          </div><!--=====End First Name=====-->
          <div class="col-sm-6 form-group">
            <input class="form-control" id="lastname" name="lastname" placeholder="Last Name*" type="text" required>
          </div><!--=====End Last Name=====-->
          <div class="col-sm-6 form-group">
            <input class="form-control" id="email" name="email" placeholder="Email*" type="email" required>
            <div class="form-check-inline">
              <label class="form-check-label" for="check1">
                <input type="checkbox" class="form-check-input" id="check1" name="Plain Text" value="something" checked>Plain Text</label>
            </div><!--=====End Plain Text=====-->
            <div class="form-check-inline">
              <label class="form-check-label" for="check2">
                <input type="checkbox" class="form-check-input" id="check2" name="HTML" value="something">HTML</label>
            </div><!--=====End HTML Checkbox=====-->
          </div><!--=====End Email Checkboxes=====-->
          <div class="col-sm-6 form-group">
            <input class="form-control" name="birthday" type="number" placeholder="Birthday*" required>
          </div><!--=====End Birthday=====-->
          <div class="col-sm-8 form-group">
            <input type="text" class="form-control" id="inputAddress" placeholder="Street Address*">
          </div><!--=====End Address=====-->
          <div class="col-md-4 form-group">
            <input type="text" class="form-control" id="inputCity" placeholder="City*">
          </div><!--=====End City=====-->
          <div class="form-group col-md-4">
            <select id="inputState" class="form-control">
              <option selected>Choose State..*</option>
              <option value="">State</option>
              <option value="AL">Alabama</option>
              <option value="AK">Alaska</option>
              <option value="AZ">Arizona</option>
              <option value="AR">Arkansas</option>
              <option value="CA">California</option>
              <option value="CO">Colorado</option>
              <option value="CT">Connecticut</option>
              <option value="DE">Delaware</option>
              <option value="FL">Florida</option>
              <option value="GA">Georgia</option>
              <option value="HI">Hawaii</option>
              <option value="ID">Idaho</option>
              <option value="IL">Illinois</option>
              <option value="IN">Indiana</option>
              <option value="IA">Iowa</option>
              <option value="KS">Kansas</option>
              <option value="KY">Kentucky</option>
              <option value="LA">Louisiana</option>
              <option value="ME">Maine</option>
              <option value="MD">Maryland</option>
              <option value="MA">Massachusetts</option>
              <option value="MI">Michigan</option>
              <option value="MN">Minnesota</option>
              <option value="MS">Mississippi</option>
              <option value="MO">Missouri</option>
              <option value="MT">Montana</option>
              <option value="NE">Nebraska</option>
              <option value="NV">Nevada</option>
              <option value="NH">New Hampshire</option>
              <option value="NJ">New Jersey</option>
              <option value="NM">New Mexico</option>
              <option value="NY">New York</option>
              <option value="NC">North Carolina</option>
              <option value="ND">North Dakota</option>
              <option value="OH">Ohio</option>
              <option value="OK">Oklahoma</option>
              <option value="OR">Oregon</option>
              <option value="PA">Pennsylvania</option>
              <option value="RI">Rhode Island</option>
              <option value="SC">South Carolina</option>
              <option value="SD">South Dakota</option>
              <option value="TN">Tennessee</option>
              <option value="TX">Texas</option>
              <option value="UT">Utah</option>
              <option value="VA">Vermont</option>
              <option value="VT">Virginia</option>
              <option value="WA">Washington</option>
              <option value="WV">West Virginia</option>
              <option value="WI">Wisconsin</option>
              <option value="WY">Wyoming</option>
            </select>
          </div><!--=====End State======-->
          <div class="form-group col-md-2">
            <input type="text" class="form-control" id="inputZip" placeholder="Zip Code*">
          </div><!--======End Zip Code====-->
        </div><!--=====End Name Form - Comment Form=====-->
        <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea>
        <div class="row">
          <div class="col-md-12 form-group">
            <button class="btn btn-warning pull-right" type="submit"><span class="glyphicon glyphicon-send"></span>
            </button>
          </div><!--=====End Submit Button=====-->
        </div><!--=====End Submit Button Row=====-->
        <br>
        <textarea class="form-control" id="terms" name="terms" rows="4">Terms and Conditions for Company Name Introduction These Website Standard Terms and Conditions written on this webpage shall manage your use of our website, Webiste Name accessible at Website.com. These Terms will be applied fully and affect to your use of this Website. By using this Website, you agreed to accept all terms and conditions written in here. You must not use this Website if you disagree with any of these Website Standard Terms and Conditions. Minors or people below 18 years old are not allowed to use this Website. Intellectual Property Rights Other than the content you own, under these Terms, Company Name and/or its licensors own all the intellectual property rights and materials contained in this Website. You are granted limited license only for purposes of viewing the material contained on this Website. Restrictions You are specifically restricted from all of the following: publishing any Website material in any other media; selling, sublicensing and/or otherwise commercializing any Website material; publicly performing and/or showing any Website material; using this Website in any way that is or may be damaging to this Website; using this Website in any way that impacts user access to this Website; using this Website contrary to applicable laws and regulations, or in any way may cause harm to the Website, or to any person or business entity; engaging in any data mining, data harvesting, data extracting or any other similar activity in relation to this Website; using this Website to engage in any advertising or marketing. Certain areas of this Website are restricted from being access by you and Company Name may further restrict access by you to any areas of this Website, at any time, in absolute discretion. Any user ID and password you may have for this Website are confidential and you must maintain confidentiality as well. Your Content In these Website Standard Terms and Conditions, “Your Content” shall mean any audio, video text, images or other material you choose to display on this Website. By displaying Your Content, you grant Company Name a non-exclusive, worldwide irrevocable, sub licensable license to use, reproduce, adapt, publish, translate and distribute it in any and all media. Your Content must be your own and must not be invading any third-party's rights. Company Name reserves the right to remove any of Your Content from this Website at any time without notice. No warranties This Website is provided “as is,” with all faults, and Company Name express no representations or warranties, of any kind related to this Website or the materials contained on this Website. Also, nothing contained on this Website shall be interpreted as advising you. Limitation of liability In no event shall Company Name, nor any of its officers, directors and employees, shall be held liable for anything arising out of or in any way connected with your use of this Website whether such liability is under contract. Company Name, including its officers, directors and employees shall not be held liable for any indirect, consequential or special liability arising out of or in any way related to your use of this Website. Indemnification You hereby indemnify to the fullest extent Company Name from and against any and/or all liabilities, costs, demands, causes of action, damages and expenses arising in any way related to your breach of any of the provisions of these Terms. Severability If any provision of these Terms is found to be invalid under any applicable law, such provisions shall be deleted without affecting the remaining provisions herein. Variation of Terms Company Name is permitted to revise these Terms at any time as it sees fit, and by using this Website you are expected to review these Terms on a regular basis. Assignment The Company Name is allowed to assign, transfer, and subcontract its rights and/or obligations under these Terms without any notification. However, you are not allowed to assign, transfer, or subcontract any of your rights and/or obligations under these Terms. Entire Agreement These Terms constitute the entire agreement between Company Name and you in relation to your use of this Website, and supersede all prior agreements and understandings. Governing Law & Jurisdiction These Terms will be governed by and interpreted in accordance with the laws of the State of Country, and you submit to the non-exclusive jurisdiction of the state and federal courts located in Country for the resolution of any disputes.</textarea>
        <div class="row">
          <div class="col-md-12 form-group">
          <label for="agree" class="for-check-label">Do you agree to the Terms and Conditions?
            <input type="checkbox" id="agree" name="agree" required>
          </label>
          </div><!--=====End Terms Label======-->
        </div><!--=====End Terms Row=====-->
      </div><!--=====End Newsletter Column======-->
    </div><!--=====End Newsletter Row=====-->
  </div><!--=====END Newsletter CONTAINER=====-->
  <!--=====Footer=====-->
  <?php include './includes/footer.php'; ?>
</body>
</html>