
      <script type="text/javascript" src="/js/jquery.min.js"></script>
      <script type="text/javascript" src="/js/materialize.js"></script>
      <script type="text/javascript" src="/js/materialize.min.js"></script>
      <script type="text/javascript" src="/js/materialforms.js"></script>
      <script type="text/javascript" src="/js/materializecomponents.js"></script>
      <script type="text/javascript" src="/js/materialdate.js"></script>
<script>
  $(document).ready(function() {
      $('select').material_select();
  });
</script>
<script>
    $(document).ready(function(){
      $('.parallax').parallax();
    });
</script>
<script>
  $('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15, // Creates a dropdown of 15 years to control year
    format:'yyyy-mm-dd'
  });
</script>
    </body>
</html>
