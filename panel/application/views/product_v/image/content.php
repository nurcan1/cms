<div class="row">
    <div class="col-md-12">
        <div class="widget">
            <div class="widget-body">
                <form action="<?php echo base_url("product/image_upload/$item->id"); ?>" class="dropzone" data-plugin="dropzone" data-options="{ url: '<?php echo base_url("product/image_upload/$item->id"); ?>'}">
                    <div class="dz-message">
                        <h3 class="m-h-lg">Yüklemek istediğiniz resimleri buyara sürükleyiniz</h3>
                        <p class="m-b-lg text-muted">(Yüklemek için dosyalarınızı sürükleyiniz yada buraya tıklayınız)</p>
                    </div>
                </form>
            </div><!-- .widget-body -->
        </div><!-- .widget -->
    </div><!-- END column -->
</div>

<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg"><b><?= $item->title; ?></b> Kaydına Ait Resimler
            <a href="#" class="btn btn-outline btn-primary btn-xs pull-right"> <i class="fa fa-plus"></i> Yeni Ekle</a>
        </h4>
    </div><!-- END column -->
    <div class="col-md-12">
        <div class="widget">

            <div class="widget-body">
                <?php if (empty($item_images)) { ?>
                    <div class="alert alert-info text-center">
                        <p>Burada herhangi bir resim bulunmamaktadır.</p>
                    </div>
                <?php } else { ?>
                    <table class="table table-bordered table-striped table-hover pictures_list">
                        <thead>
                            <th>#id</th>
                            <th>Görsel</th>
                            <th>Resim Adı</th>
                            <th>Durumu</th>
                            <th>İşlem</th>
                        </thead>
                        <tbody>
                            <?php foreach ($item_images as $image) : ?>
                                <tr>
                                    <td class="w100 text-center"><?= $image->id ?></td>
                                    <td class="w100">
                                        <img class="img-responsive" width="50" src="<?= base_url("uploads/{$viewFolder}/$image->img_url"); ?>" alt="<?= $image->img_url ?>">
                                    </td>
                                    <td><?= $image->img_url ?></td>
                                    <td class="w100 text-center">
                                        <input data-url="<?php echo base_url("product/isActiveSetter/"); ?>" class="isActive" type="checkbox" data-switchery data-color="#10c469" <?php echo ($image->id) ? "checked" :  " "; ?> />

                                    </td>
                                    <td class="w100 text-center">
                                        <a data-url="<?php echo base_url("product/delete/") ?>" type="button" class="btn btn-sm btn-danger btn-outline btn-block remove-btn"><i class="fa fa-trash"></i> Sil</a>

                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                <?php }; ?>

            </div><!-- .widget-body -->
        </div>
    </div><!-- END column -->
</div>