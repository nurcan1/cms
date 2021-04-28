<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg"><?= "<b> $item->title </b>" . " kaydını düzenliyorsunuz.."; ?>
            <a href="#" class="btn btn-outline btn-primary btn-xs pull-right"> <i class="fa fa-plus"></i> Yeni Ekle</a>
        </h4>
    </div><!-- END column -->
    <div class="col-md-12">
        <div class="widget">

            <div class="widget-body">

                <form action="<?php echo base_url("galleries/update/$item->id/$item->gallery_type/$item->folder_name") ?>" method="post">
                    <div class="form-group">
                        <label>Galeri Adı</label>
                        <input class="form-control" placeholder="Galerinin adını giriniz.." name="title" value="<?= $item->title; ?>">
                        <?php if (isset($form_error)) : ?>
                            <small class="pull-right input-form-error "><?php echo form_error("title"); ?></small>
                        <?php endif; ?>
                    </div>

                    <button type="submit" class="btn btn-primary btn-md btn-outline">Kaydet</button>
                    <a href="<?php echo base_url("galleries"); ?>" class="btn btn-md btn-danger btn-outline">İptal</a>
                </form>
            </div><!-- .widget-body -->
        </div>
    </div><!-- END column -->
</div>