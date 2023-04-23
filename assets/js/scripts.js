// Script to toggle the menu on small devices when the menu icon is pressed
$(function() {
    // When the user click on the menu icon (only for small devices)
    $('.menu-icon').on('click', function() {
        //Display the navigation bar
        $('.nav').toggleClass('displaying');
        $('.nav ul').toggleClass('displaying');
    });

    // JavaScript for the carrousel
    $('.post-wrap').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        nextArrow: $('.next'),
        prevArrow: $('.previous'),
        //Responsivity of the carrousel
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

      // When the user clicks on like
      $('.like').click(function() {
        alert('You clicked');
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

      // When the user clicks on unlike
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
