jQuery(document).ready(function($) {

    // AJAX filter function
    function filter_products() {
      let filters = $('#filters-form').serialize();
      
      $.ajax({
        url: ajax_object.ajax_url,
        data: filters + '&action=filter_products',
        type: 'POST',
        beforeSend: function(xhr) {
          $('#products-container').html('<p class="loading">Loading...</p>');
        },
        success: function(data) {
          $('#products-container').html(data);
        },
        error: function(xhr) {
          alert('There was an error with the AJAX request');
        }
      });
    }
  
    // Call the filter_posts function on submit
    // $('#filters-form').on('submit', function(event) {
    //   event.preventDefault();
    //   filter_products();
    // });
  
    // Call the filter_posts function on change
    $('#filters-form input').on('click', function() {
      filter_products();
    });
  
  });
  