<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">Yeni Haber Ekle
            <a href="#" class="btn btn-outline btn-primary btn-xs pull-right"> <i class="fa fa-plus"></i> Yeni Ekle</a>
        </h4>
    </div><!-- END column -->
    <div class="col-md-12">
        <div class="widget">

            <div class="widget-body">

                <form action="<?php echo base_url("news/save") ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Başlık</label>
                        <input class="form-control" placeholder="Başlık" name="title">
                        <?php if (isset($form_error)) : ?>
                            <small class="pull-right input-form-error "><?php echo form_error("title"); ?></small>
                        <?php endif; ?>
                    </div>
                    <div class="form-group">
                        <label>Açıklama</label>
                        <textarea name="description" class="m-0" data-plugin="summernote" data-options="{height: 250}"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="control-demo-6">Single Select</label>
                        <div id="control-demo-6" style="width: 50%;">
                            <select class="form-control news_type_select" name="news_type">
                                <option value="image" style="display: <?php echo (isset($news_type) && $news_type == "image") ? "selected" : ""; ?>">Resim</option>
                                <option value="video" style="display: <?php echo (isset($news_type) && $news_type == "video") ? "selected" : ""; ?>">Video</option>

                            </select>
                        </div>
                    </div><!-- .form-group -->

                    <?php if (isset($form_error)) : ?>
                        <div class="form-group image_upload_container" style="display: <?php echo ($news_type == "image") ? "block" : "none"; ?>">
                            <label>Görsel Seçiniz</label>
                            <input type="file" name="img_url" class="form-control" style="width: 50%;">
                        </div>

                        <div class="form-group video_url_container" style="display: <?php echo ($news_type == "video") ? "block" : "none"; ?>">
                            <label>Video URL</label>
                            <input class="form-control" placeholder="Video bağlantısını buraya yapıştırınız." name="video_url" style="width: 50%;">
                            <?php if (isset($form_error)) : ?>
                                <small class="pull-right input-form-error "><?php echo form_error("video_url"); ?></small>
                            <?php endif; ?>
                        </div>
                    <?php else : ?>
                        <div class="form-group image_upload_container">
                            <label>Görsel Seçiniz</label>
                            <input type="file" name="img_url" class="form-control" style="width: 50%;">
                        </div>

                        <div class="form-group video_url_container">
                            <label>Video URL</label>
                            <input class="form-control" placeholder="Video bağlantısını buraya yapıştırınız." name="video_url" style="width: 50%;">
                          
                        </div>
                    <?php endif; ?>
                    <button type="submit" class="btn btn-primary btn-md btn-outline">Kaydet</button>
                    <a href="<?php echo base_url("news/index"); ?>" class="btn btn-md btn-danger btn-outline">İptal</a>
                </form>
            </div><!-- .widget-body -->
        </div>
    </div><!-- END column -->
</div>