$(document).ready(function(){

  $(function () {
    $('[data-toggle="tooltip"]').tooltip()
  });

  // Javascript to enable link to tab
  var url = document.location.toString();
  if (url.match('#')) {
      $('.dropdown-menu a[href="#' + url.split('#')[1] + '"]').tab('show');
  }

  // Change hash for page-reload
  $('.dropdown-menu a').on('shown.bs.tab', function (e) {
      window.location.hash = e.target.hash;
  })

});
