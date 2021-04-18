<div class="row">
    <div class="col-md-12">
        <div class="widget">

            <div class="widget-body">
                <form action="../api/dropzone" class="dropzone" data-plugin="dropzone" data-options="{ url: '../api/dropzone'}">
                    <div class="dz-message">
                        <h3 class="m-h-lg">Drop files here or click to upload.</h3>
                        <p class="m-b-lg text-muted">(This is just a demo dropzone. Selected files are not actually uploaded.)</p>
                    </div>
                </form>
            </div><!-- .widget-body -->
        </div>
    </div><!-- END column -->
</div>


<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">Ürünün Fotoğrafları
            <a href="#" class="btn btn-outline btn-primary btn-xs pull-right"> <i class="fa fa-plus"></i> Yeni Ekle</a>
        </h4>
    </div><!-- END column -->
    <div class="col-md-12">
        <div class="widget">

            <div class="widget-body">
                <table class="table table-bordered table-striped table-hover pictures_list">
                    <thead>
                        <th>#id</th>
                        <th>Görsel</th>
                        <th>Resim Adı</th>
                        <th>Durumu</th>
                        <th>İşlem</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="w100 text-center">#1</td>
                            <td class="w100">
                                <img class="img-responsive" width="50" src="https://i.pinimg.com/originals/83/1a/72/831a7203d26d1cd11604c2bcbbdaabea.png" alt="">
                            </td>
                            <td>deneme.jpg</td>
                            <td class="w100 text-center">
                                <input data-url="<?php echo base_url("product/isActiveSetter/"); ?>" class="isActive" type="checkbox" data-switchery data-color="#10c469" <?php echo (true) ? "checked" :  " "; ?> />

                            </td>
                            <td class="w100 text-center">
                                <a data-url="<?php echo base_url("product/delete/") ?>" type="button" class="btn btn-sm btn-danger btn-outline btn-block remove-btn"><i class="fa fa-trash"></i> Sil</a>

                            </td>
                        </tr>
                    </tbody>
                </table>
            </div><!-- .widget-body -->
        </div>
    </div><!-- END column -->
</div>