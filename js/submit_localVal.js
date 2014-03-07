// onready
$(document).ready(function() {

  // onsubmit
  $('#registration').submit(function() {

    if ($('#registration input[name=designerName]').val() == '')
    {
      alert('Please provide your name.');
      return false;
    }

	else if ($('#registration input[name=title]').val() == '')
    {
      alert('Please provide the title of your design.');
      return false;
    }

    else if ($('#registration textarea[name=materials]').val() == '')
    {
      alert('Please provide the materials used.');
      return false;
    }
	
	else if ($('#registration textarea[name=description]').val() == '')
    {
      alert('Please provide the description of your garment.');
      return false;
    }
	
	else if (!$('#registration input[name=fashion]').is(':checked'))
    {
        alert ('Please check either trashion or refashion');
        return false;
    }
	
	else if ($('#registration input[name=designerAddress]').val() == '')
    {
      alert('Please provide your address.');
      return false;
    }

    else if ($('#registration input[name=designerPhone]').val() == '')
    {
      alert('Please provide your phone number.');
      return false;
    }

    else if ($('#registration input[name=designerEmail]').val() == '')
    {
      alert('Please provide your email.');
      return false;
    }
	
	// is valid email
    var x = $('#registration input[name=designerEmail]').val();
    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
    {
      alert("Not a valid e-mail address");
      return false;
    }

    else if($.inArray($('#registration input[name=uploadedfile_front]').val().split('.').pop().toLowerCase(), ['gif','png','jpg','jpeg','bmp']) == -1) {
        alert('Not a valid file type for front image');
        return false;
    }

    else if($.inArray($('#registration input[name=uploadedfile_back]').val().split('.').pop().toLowerCase(), ['gif','png','jpg','jpeg','bmp']) == -1) {
        alert('Not a valid file type for back image');
        return false;
    }

    else if($.inArray($('#registration input[name=uploadedfile_detail]').val().split('.').pop().toLowerCase(), ['gif','png','jpg','jpeg','bmp']) == -1) {
        alert('Not a valid file type for detailed image');
        return false;
    }
	
	else if (!$('#registration input[name=ageGroup]').is(':checked'))
    {
        alert ('Please select your age group.');
        return false;
    }
	
	else if (!$('#registration input[name=haveModel]').is(':checked'))
    {
        alert ('Please let us know if you have a model.');
        return false;
    }
	
	else if ($('#registration input[name=modelName]').val() == '' && $('#registration input[name=haveModel]:checked').val() == 'yes')
    {
      alert('Please provide the name of your model.');
      return false;
    }
	
	else if ($('#registration input[name=modelAge]').val() == '' && $('#registration input[name=haveModel]:checked').val() == 'yes')
    {
      alert('Please provide the age of your model.');
      return false;
    }
	
	else if ($('#registration input[name=guardianName]').val() == '' && parseInt($('#registration input[name=modelAge]').val()) < 18 && $('#registration input[name=haveModel]:checked').val() == 'yes')
    {
      alert('Please provide guardian information for your model.');
      return false;
    }
	
	else if (!$('#registration input[name=willModel]').is(':checked'))
    {
        alert ('Please let us know if you are willing to model for other designers.');
        return false;
    }

    // valid!
    return true;
  });
});                       