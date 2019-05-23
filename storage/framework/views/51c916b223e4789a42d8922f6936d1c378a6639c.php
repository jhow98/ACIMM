<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

        <!-- jQuery REVOLUTION Slider  -->
        <script type="text/javascript" src="<?php echo e(url('rs-plugin/js/jquery.themepunch.plugins.min.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(url('rs-plugin/js/jquery.themepunch.revolution.min.js')); ?>"></script>

        <script src="<?php echo e(url('js/waypoints.min.js')); ?>"></script>

        <script src="<?php echo e(url('js/script.js')); ?>"></script>

        <script>
            $("#openModalSCPC").click(function () {
                $('#modalSCPC').modal();
            });
            $(document).ready(function () {
                appMaster.preLoader();
                appMaster.smoothScroll();
                appMaster.animateScript();
                appMaster.navSpy();
                appMaster.revSlider();
                appMaster.stellar();
                appMaster.skillsChart();
//                appMaster.maps();
                appMaster.isoTop();
                appMaster.canvasHack();

                $('.home-ad .close').on('click', function () {
                    $(this).parent().toggle('fast');
                });
            });
        </script>   