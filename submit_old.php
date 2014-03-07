<!DOCTYPE HTML>
<html>
<? include 'include/head.php'; ?>
<body>
<div class="wrapper">
  <? include 'include/header_nav.php'; ?>
  <div class="card">
    <? include 'include/submit_serverVal.php'; ?>
    <h3>Submission Form</h3>
    <p><strong>Please submit three images of your design. Front, back and detail.</strong> You have the option to submit a fourth image from the &ldquo;before&rdquo; stage.</p>
    <p>If your application was successfully submitted, you will receive a confirmation message. If you do not receive this message, please contact our team at bloomingtontrashion@gmail.org.</p>
    <p>
    <form role="form" enctype="multipart/form-data" name="input" action="<? echo $_SERVER["../PHP_SELF"]; ?>" method="POST" id="registration">
      <input type="hidden" name="create_csv" value="true" />
      <p> Designer's name(s):
        <input type="text" name="designerName" />
        <br />
        Title of your design:
        <input type="text" name="title" />
      </p>
      <p style="vertical-align: top">Description of materials used:<br />
        <textarea style="width:300px; height:50px;" type="text" name="materials"></textarea>
      </p>
      <p style="vertical-align: top; padding-left:60px;">Description of garment:<br />
        <textarea style="width:300px; height:50px;" type="text" name="description"></textarea>
      </p>
      <p>
        <input type="radio" name="fashion" value="trashion" />
        Trashion
        <input type="radio" name="fashion" value="refashion" />
        Refashion </p>
      <p> Address:
        <input type="text" name="designerAddress" />
        <br/>
        Phone:
        <input type="text" name="designerPhone" />
        <br/>
        Email:
        <input type="text" name="designerEmail" />
      </p>
      <p>For best results when submitting photos, please use live models wearing your designs.<br />
        <strong>Images must be .gif, .jpeg, .png, .bmp and less than 500KB</strong>.</p>
      <input type="hidden" name="MAX_FILE_SIZE" value="500000" />
      <p> Front Image:
        <input name="uploadedfile_front" type="file" />
        Back Image:
        <input name="uploadedfile_back" type="file" />
        Detailed Image:
        <input name="uploadedfile_detail" type="file" />
        Before Image:
        <input name="uploadedfile_before" type="file" />
      </p>
      <p> Designer age group:
        <input type="radio" name="ageGroup" value="middleschool" />
        Middle School
        <input type="radio" name="ageGroup" value="highschool" />
        High School
        <input type="radio" name="ageGroup" value="college" />
        College
        <input type="radio" name="ageGroup" value="adult" />
        Adult </p>
      <p>Do you have a model:
        <input type="radio" name="haveModel" value="yes" />
        Yes
        <input type="radio" name="haveModel" value="no" />
        No </p>
      <p>Model's name:
        <input type="text" name="modelName" />
        <br/>
        Model's age:
        <input type="text" name="modelAge" />
        <br/>
        Guardian Name and Contact (if under 18):
        <input type="text" name="guardianName" />
      </p>
      <p> Are you willing to model for other designers? (for designers who are not modeling for themselves):
        <input type="radio" name="willModel" value="yes" />
        Yes
        <input type="radio" name="willModel" value="no" />
        No </p>
      <input type="submit" value="Submit" />
    </form>
    </p>
  </div>
  <? include 'include/footer.php'; ?>
</div>
</body>
<script type="text/javascript" src="js/submit_localVal.js"></script>
</html>
