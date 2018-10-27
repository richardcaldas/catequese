<div class="col-lg-3">
    <div class="list-group list-group-border-0 g-mb-40">

        <a href="index.php" class="list-group-item list-group-item-action justify-content-between">
            <span><i class="icon-home g-pos-rel g-top-1 g-mr-8"></i> Home</span>
            <!--  <span class="u-label g-font-size-11 g-bg-gray-dark-v2 g-rounded-20 g-px-10">2</span>-->
        </a>

        <a href="rematricula.php" class="list-group-item list-group-item-action justify-content-between">
            <span><i class="icon-notebook g-pos-rel g-top-1 g-mr-8"></i> Rematricula</span>
        </a>

        <a href="lista-turmas.php" class="list-group-item list-group-item-action justify-content-between ">
            <span><i class="icon-notebook g-pos-rel g-top-1 g-mr-8"></i> Turmas</span>
        </a>


        <?php echo " <a href='functions/logout.php?token=".md5(session_id())."' 
                        class='list-group-item list-group-item-action justify-content-between'>
                        <span><i class='icon-notebook g-pos-rel g-top-1 g-mr-8'></i> Logout</span>
                        </a>"
        ?>


    </div>
</div>
