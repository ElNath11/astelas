  <!-- Modal -->
  <div id="lightbox" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <button type="button" class="close hidden" data-dismiss="modal" aria-hidden="true">X</button>
        <div class="modal-content">
            <div class="modal-body">
                <input name="inputID" type="hidden" value="">
                <div class="col col-12">
                    <div class="col col-12">
                        <center><img src="" alt="" class="img-responsive"></center>
                    </div>
                </div>
                <div class="modal-footer">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<!-- Modal -->


<!-- jQuery -->
<script src="<?php echo base_url("asset");?>/js/jquery/dist/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?php echo base_url("asset");?>/js/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="<?php echo base_url("asset");?>/css/metisMenu/dist/metisMenu.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="<?php echo base_url("asset");?>/js/sb-admin-2.js"></script>

<script src="<?php echo base_url("asset");?>/js/tinymce/tinymce.min.js"></script>
<script src="<?php echo base_url("asset");?>/js/tinymce/jquery.tinymce.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        tinyMCE.init({
            selector: "textarea.editor",
            plugins:[
            "advlist autolink lists link image charmap print preview anchor",
            "searchreplace visualblocks code fullscreen",
            "insertdatetime media table contextmenu paste jbimages"
            ],
                //  paste_as_text: true,
                        // menubar : false,
            // ===========================================
            // PUT PLUGIN'S BUTTON on the toolbar
            // ===========================================
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image jbimages",
            // ===========================================
            // SET RELATIVE_URLS to FALSE (This is required for images to display properly)
            // ===========================================
            relative_urls : false,
            remove_script_host : false,
            convert_urls : true,
            setup: function(ed) {
                if($('#'+ed.id).attr('readonly'))
                    ed.settings.readonly = true;
            }
        });
});
</script>
<script src="<?php echo base_url("asset"); ?>/js/bootstrap-lightbox.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        var $lightbox = $('#lightbox');
        $('[data-target="#lightbox"]').on('click', function(event) {
            var $img = $(this).find('img'),
            src = $img.attr('src'),
            alt = $img.attr('alt'),
            title = $(this).attr('data-title'),
            info = $(this).attr('data-desc'),
            css = {
                'maxWidth': $(window).width(700) - 100,
                'maxHeight': $(window).height(700) - 100
            };
            $lightbox.find('.close').addClass('hidden');
            $lightbox.find('img').attr('src', src);
            $lightbox.find('img').attr('alt', alt);
            $lightbox.find('strong').text(title);
            $lightbox.find('p').text(info);
            $lightbox.find('img').css(css);
        });
        $lightbox.on('shown.bs.modal', function (e) {
            var $img = $lightbox.find('img');

            $lightbox.find('.modal-dialog').css({});
            $lightbox.find('.close').removeClass('hidden');
        });
    });
</script>

<!-- DataTables JavaScript -->
<script src="<?php echo base_url("asset"); ?>/js/datatables/media/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url("asset"); ?>/css/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>
<script src="<?php echo base_url("asset"); ?>/css/datatables-responsive/js/dataTables.responsive.js"></script>

<!-- Page-Level Demo Scripts - Tables - Use for reference -->
<script>



$('.btnShare').click(function(){
elem = $(this);
postToFeed(elem.data('title'), elem.data('desc'), elem.prop('href'), elem.data('image'));

return false;
});
</script>
<script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
         $('#dataTables-example2').DataTable({
            responsive: true
        });
    });
</script>



<script>
    $(document).ready(function() {
   var span = 1;
   var tengah = "vertical-align:middle";
   var prevTD = "";
   var prevTDVal = "";
   $("#myTable tr td:first-child").each(function() { //for each first td in every tr
      var $this = $(this);
      if ($this.text() == prevTDVal) { // check value of previous td text
         span++;
         if (prevTD != "") {
            prevTD.attr("rowspan", span); // add attribute to previous td
            prevTD.attr("style", tengah); // add attribute to previous td
            $this.remove(); // remove current td
         }
      } else {
         prevTD     = $this; // store current td
         prevTDVal  = $this.text();
         span       = 1;
      }
   });
});
</script>


</body>

</html>
