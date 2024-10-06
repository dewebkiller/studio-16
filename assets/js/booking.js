$(document).ready(function() {
  $('#booking_btn').click(function(e) {

    //stop the form from being submitted
    e.preventDefault();

    /* declare the variables, var error is the variable that we use on the end
    to determine if there was an error or not */
    var error = false;
    var name = $('#booking_name').val();
    var email = $('#booking_email').val();
    var checkin = $('#booking_checkin').val();
    var checkout = $('#booking_checkout').val();
    var room = $('#booking_room').val();
    var adult = $('#booking_adult').val();
    var child = $('#booking_child').val();

    /* in the next section we do the checking by using VARIABLE.length
    where VARIABLE is the variable we are checking (like name, email),
    length is a javascript function to get the number of characters.
    And as you can see if the num of characters is 0 we set the error
    variable to true and show the name_error div with the fadeIn effect. 
    if it's not 0 then we fadeOut the div( that's if the div is shown and
    the error is fixed it fadesOut. 
    
    The only difference from these checks is the email checking, we have
    email.indexOf('@') which checks if there is @ in the email input field.
    This javascript function will return -1 if no occurence have been found.*/
    if (name.length == 0) {
      var error = true;
      $('#name_error').fadeIn(500);
    } else {
      $('#name_error').fadeOut(500);
    }
    if (email.length == 0 || email.indexOf('@') == '-1') {
      var error = true;
      $('#email_error').fadeIn(500);
    } else {
      $('#email_error').fadeOut(500);
    }
    if (checkin.length == 0) {
      var error = true;
      $('#checkin_error').fadeIn(500);
    } else {
      $('#checkin_error').fadeOut(500);
    }
    if (checkout.length == 0) {
      var error = true;
      $('#checkout_error').fadeIn(500);
    } else {
      $('#checkout_error').fadeOut(500);
    }
    if (room.length == 0) {
      var error = true;
      $('#room_error').fadeIn(500);
    } else {
      $('#room_error').fadeOut(500);
    }
    if (adult.length == 0) {
      var error = true;
      $('#adult_error').fadeIn(500);
    } else {
      $('#adult_error').fadeOut(500);
    }
    if (child.length == 0) {
      var error = true;
      $('#child_error').fadeIn(500);
    } else {
      $('#child_error').fadeOut(500);
    }

    //now when the validation is done we check if the error variable is false (no errors)
    if (error == false) {
      //disable the submit button to avoid spamming
      //and change the button text to Sending...
      $('#booking_btn').attr({
        'disabled': 'true',
        'value': 'Sending...'
      });

      /* using the jquery's post(ajax) function and a lifesaver
      function serialize() which gets all the data from the form
      we submit it to send_email.php */
      $.post("booking_send.php", $("#bookform").serialize(), function(result) {
        //and after the ajax request ends we check the text returned
        if (result == 'sent') {
          //if the mail is sent remove the submit paragraph
          $('#booking_btn').remove();
          //and show the mail success div with fadeIn
          $('#mail_success').fadeIn(500);
        } else {
          //show the mail failed div
          $('#mail_fail').fadeIn(500);
          //reenable the submit button by removing attribute disabled and change the text back to Send The Message
          $('#booking_btn').removeAttr('disabled').attr('value', 'Send The Message');
        }
      });
    }
  });
});