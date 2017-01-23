<!-- Bulletin -->
<div class="modal fade" id="topfix" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div style='background-color:#f8f8f8;' class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 id='news-title' class="modal-title"><span class='glyphicon glyphicon-envelope'></span></h4>
                </div>
                <div class="modal-body">
                    <article>
                        <p id='news-article'></p>
                    </article>
                </div>
                <div class="modal-footer" >
                    <button class = 'btn btn-danger' data-dismiss="modal">Close</button>
                </div>
            </div>     
        </div>
    </div>
<div id="news" class="container fluid container-fluid addGradient">
    
    <aside id="bulletin">
        <button id='btn_news' type="button" class="close">&times;</button>
        <h2 style="text-align:center;">Bulletin <span class="badge"><?php echo $num_items; ?></span> </h2>
        <br>
        <h4>Click on the link to access!</h4>
            <?php foreach($records as $row) :  ?>
                <button type="button" id="<?php echo $row->index; ?>" data-toggle='modal' data-target='#topfix' class='btn btn-link btn-lg news_article'><?php echo $row->title; ?></button><br>
            <?php endforeach; ?>     
    </aside>
    <!-- END OF NEWS MODAL CONTENT -->
</div>

<!-- End of Bulletin -->