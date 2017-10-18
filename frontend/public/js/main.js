$(document).ready(function(){
  $('input[type=button]').on('click', function() {
    var name = $('#login').val();
    var password = $('.password').val();
    console.log(name, password);

    $.post({
      url: '/form.php',
      data: {
        name: name,
        pwd: password
      },
      // dataType: 'json'
    }).done(function(data) {
      var jsoned = JSON.parse(data);
      console.log(data);
      $('.result').html(jsoned.login);
      $('.result2').html(jsoned.password);
    });

  })

  });