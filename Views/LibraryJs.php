
<!-- javascripts -->
<script src="<?php echo $urlViews; ?>js/jquery.js"></script>
<script src="<?php echo $urlViews; ?>js/jquery-ui-1.10.4.min.js"></script>
<script src="<?php echo $urlViews; ?>js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="<?php echo $urlViews; ?>js/jquery-ui-1.9.2.custom.min.js"></script>
<!-- bootstrap -->
<script src="<?php echo $urlViews; ?>js/bootstrap.min.js"></script>
<!-- nice scroll -->
<script src="<?php echo $urlViews; ?>js/jquery.scrollTo.min.js"></script>
<script src="<?php echo $urlViews; ?>js/jquery.nicescroll.js" type="text/javascript"></script>
<!-- charts scripts -->

<script src="<?php echo $urlViews; ?>js/jquery.sparkline.js" type="text/javascript"></script>
<script src="<?php echo $urlViews; ?>js/owl.carousel.js"></script>

<!--script for this page only-->
<!-----------------------------------<script src="js/calendar-custom.js"></script>----->
<script src="<?php echo $urlViews; ?>js/jquery.rateit.min.js"></script>
<!-- custom select -->
<script src="<?php echo $urlViews; ?>js/jquery.customSelect.min.js"></script>


<!--custome script for all page-->
<script src="<?php echo $urlViews; ?>js/scripts.js"></script>
<!-- custom script for this page-->
<script src="<?php echo $urlViews; ?>js/sparkline-chart.js"></script>
<script src="<?php echo $urlViews; ?>js/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo $urlViews; ?>js/jquery-jvectormap-world-mill-en.js"></script>
<script src="<?php echo $urlViews; ?>js/xcharts.min.js"></script>
<script src="<?php echo $urlViews; ?>js/jquery.autosize.min.js"></script>
<script src="<?php echo $urlViews; ?>js/jquery.placeholder.min.js"></script>
<script src="<?php echo $urlViews; ?>js/gdp-data.js"></script>
<script src="<?php echo $urlViews; ?>js/morris.min.js"></script>
<script src="<?php echo $urlViews; ?>js/sparklines.js"></script>
<script src="<?php echo $urlViews; ?>js/charts.js"></script>
<script src="<?php echo $urlViews; ?>js/jquery.slimscroll.min.js"></script>
<script src="<?php echo $urlViews; ?>js/zabuto_calendar.js"></script>
<script src="<?php echo $urlViews; ?>js/ajax.js"></script>
<script language="JavaScript" type="text/javascript"src="<?php echo $urlViews; ?>js/ajaxPos.js" ></script>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>



<script type="application/javascript">
    $(document).ready(function () {
        $("#my-calendar").zabuto_calendar({
            language: "es",
            today: true,
            nav_icon: {
                prev: '<i class="fa fa-chevron-circle-left"></i>',
                next: '<i class="fa fa-chevron-circle-right"></i>'
            }
        });
    });
</script>

<!-- DataTables JavaScript -->
<script src="<?php echo $urlViews; ?>js/jquery.dataTables.min.js"></script>
<script src="<?php echo $urlViews; ?>js/dataTables.bootstrap.min.js"></script>

<script>
    $(document).ready(function () {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
</script>


<!--<script src="--><?php //echo $urlViews; ?><!--/js/print/jquery-1.4.4.min.js" type="text/javascript"></script>-->
<script src="<?php echo $urlViews; ?>/js/print/jquery.printPage.js" type="text/javascript"></script>
<script>
    $(document).ready(function () {
        $(".btnPrint").printPage();
    });
</script>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

