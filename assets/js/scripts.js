// Script to toggle the menu on small devices when the menu icon is pressed
$(function() {
    // When the user click on the menu icon (only for small devices)
    $('.menu-icon').on('click', function() {
        //Display the navigation bar
        $('.nav').toggleClass('displaying');
        $('.nav ul').toggleClass('displaying');
    });

    // JavaScript for the carrousel (given by SlickJs)
    $('.post-wrap').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        nextArrow: $('.next'),
        prevArrow: $('.previous'),
        responsive: [
            {
              breakpoint: 1024,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 2,
                infinite: true,
                dots: true
              }
            },
            {
              breakpoint: 800,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            },
            {
              breakpoint: 480,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            }
          ]
      });

      // When the user clicks on like in the index page
      $('.like').click(function() {
        var post_id = $(this).attr('id'); //Get the id of the post
        //Send informations to like the post in the database
        $.ajax({
          type: 'post',
          async: false,
          data: {
            'liked': 1,
            'post_id': post_id
          }
        })
      });

      // When the user clicks on unlike in the index page
      $('.unlike').click(function() {
        var post_id = $(this).attr('id'); //Get the id of the post
        //Send informations to unlike the post in the database
        $.ajax({
          type: 'post',
          async: false,
          data: {
            'unliked': 1,
            'post_id': post_id
          }
        })
      });

      // // When the user clicks on like in the post page
      // $('.p_like').click(function() {
      //   alert('You clicked on ');
      //   var post_id = $(this).attr('id'); //Get the id of the post
        
      //   //Send informations to like the post in the database
      //   $.ajax({
      //     url: 'index.php?id=' + post_id,
      //     type: 'post',
      //     async: false,
      //     data: {
      //       'liked': 1,
      //       'post_id': post_id
      //     },
      //     success:function(){

      //     }
      //   })
      // });

      // // When the user clicks on unlike in the post page
      // $('.p_unlike').click(function() {
      //   var post_id = $(this).attr('id'); //Get the id of the post
      //   //Send informations to unlike the post in the database
      //   $.ajax({
      //     url: 'index.php',
      //     type: 'post',
      //     async: false,
      //     data: {
      //       'unliked': 1,
      //       'post_id': post_id
      //     },
      //     success:function(){

      //     }
      //   })
      // });

});

//Integrated text editor
ClassicEditor.create( document.querySelector( '#editor' ) ), {
  toolbar: [ 'heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote' ],
  heading: {
      options: [
          { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
          { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
          { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' }
      ]
  }
}
    .catch( error => {
        console.log( error );
    } );
