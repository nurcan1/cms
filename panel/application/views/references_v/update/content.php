<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">><?= "<b> $item->title </b>" . " kaydını düzenliyorsunuz.."; ?>
            <a href="#" class="btn btn-outline btn-primary btn-xs pull-right"> <i class="fa fa-plus"></i> Yeni Ekle</a>
        </h4>
    </div><!-- END column -->
    <div class="col-md-12">
        <div class="widget">

            <div class="widget-body">

                <form action="<?php echo base_url("references/update/$item->id") ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Başlık</label>
                        <input class="form-control" placeholder="Başlık" name="title" value="<?= $item->title; ?>">
                        <?php if (isset($form_error)) : ?>
                            <small class="pull-right input-form-error "><?php echo form_error("title"); ?></small>
                        <?php endif; ?>
                    </div>
                    <div class="form-group">
                        <label>Açıklama</label>
                        <textarea name="description" class="m-0" data-plugin="summernote" data-options="{height: 250}">
                             <?= $item->description; ?>
                        </textarea>
                    </div>

                    <div class="form-group image_upload_container">
                        <div class="row">
                            <div class="col-md-2">
                                <img height="100" class="img-responsive" src="<?php echo base_url("uploads/$viewFolder/$item->img_url") ?>" alt="">
                            </div>
                            <div class="col-md-8">
                                <label>Görsel Seçiniz</label>
                                <input type="file" name="img_url" class="form-control" style="width: 50%;">
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary btn-md btn-outline">Güncelle</button>
                    <a href="<?php echo base_url("references/index"); ?>" class="btn btn-md btn-danger btn-outline">İptal</a>
                </form>
            </div><!-- .widget-body -->
        </div>
    </div><!-- END column -->
</div>