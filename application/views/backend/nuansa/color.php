<!DOCTYPE html>
<html lang="en">

  <head>

    <?php $this->load->view('backend/_page/head') ?>

  </head>

  <body id="page-top">

    <?php $this->load->view('backend/_page/navbar') ?>

    <div id="wrapper">

      <!-- Sidebar -->
      <?php $this->load->view('backend/_page/sidebar.php') ?>

      <div id="content-wrapper">

        <div class="container-fluid">
          
          <h3>Set Warna <?= $nuansa->nama_nuansa ?></h3>
          <form action="<?= site_url('backend/nuansa/setColor/'.$nuansa->id_nuansa) ?>" method="post" enctype="multipart/form-data" name="add_color" id="add_color">
            <input type="hidden" name="id_nuansa" value="<?= $nuansa->id_nuansa ?>">

            <div class="form-group">
              <label>Gambar :</label><br>
              <img src="<?= base_url('assets/img/upload/'.$nuansa->gambar) ?>" width="40%">
            </div>
            
            <label>Set Warna :</label>
            <div id="dynamic_field">
              <div class="row">
                <div class="col">
                  <input type="text" name="nama_warna[]" id="nama_warna" class="typeahead list_nama" style="height: 45px; width: 170%">
                </div>
                <div class="col">
                  <a href="#" name="add" id="add" class="btn btn-primary">Tambah</a>
                </div>
              </div>
            </div>
            <br>
            <input type="submit" name="btn" value="Simpan" class="btn btn-primary">
          </form>
          <br>

        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        <?php $this->load->view('backend/_page/footer') ?>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <?php $this->load->view('backend/_page/modal') ?>

    <!-- Bootstrap core JavaScript-->
    <?php $this->load->view('backend/_page/js') ?>

    <script type="text/javascript">
      $(document).ready(function(){
        var sample_data = new Bloodhound({
            datumTokenizer: Bloodhound.tokenizers.obj.whitespace,
            queryTokenizer: Bloodhound.tokenizers.whitespace,
            prefetch:'<?php echo base_url(); ?>backend/colorcard/fetch',
            remote:{
              url:'<?php echo base_url(); ?>backend/colorcard/fetch/%QUERY',
              wildcard:'%QUERY'
            }
        });
        

        $('input.list_nama').typeahead(null, {
          name: 'nama_warna',
          displayKey: function(item){return item.nm_barang+'-'+item.nama_warna},
          source:sample_data,
          limit:10,
          templates:{
            suggestion:Handlebars.compile('<div class="row"><div class="col-xs-3" style="padding-right:5px; padding-left:5px;"><img src="<?php echo base_url(); ?>assets/img/upload/cc/{{gambar}}" class="img" width="100" /></div><div class="col-xs-9" style="padding-right:5px; line-height:250%; padding-left:5px;">{{nm_barang}} - {{nama_warna}}</div></div>')
          }
        });
      });

      $(document).ready(function(){
        var i = 1;
        $('#add').click(function(e){
          e.preventDefault();
          i++;
          $('#dynamic_field').append('<br id="br'+i+'"><div class="row" id="row'+i+'"><div class="col"><input type="text" name="nama_warna[]" id="nama_warna'+i+'" class="typeahead list_nama" style="height: 45px; width: 170%"></div><div class="col"><a href="#" name="remove" id="'+i+'" class="btn btn-danger btn-remove">X</a></div></div></div>');
          
          var sample_data = new Bloodhound({
              datumTokenizer: Bloodhound.tokenizers.obj.whitespace,
              queryTokenizer: Bloodhound.tokenizers.whitespace,
              prefetch:'<?php echo base_url(); ?>backend/colorcard/fetch',
              remote:{
                url:'<?php echo base_url(); ?>backend/colorcard/fetch/%QUERY',
                wildcard:'%QUERY'
              }
          });

          $('#nama_warna'+i).typeahead(null, {
            name: 'nama_warna',
            displayKey: function(item){return item.nm_barang+'-'+item.nama_warna},
            source:sample_data,
            limit:10,
            templates:{
              suggestion:Handlebars.compile('<div class="row"><div class="col-md-2" style="padding-right:5px; padding-left:5px;"><img src="<?php echo base_url(); ?>assets/img/upload/cc/{{gambar}}" class="img-thumbnail" width="48" /></div><div class="col-md-10" style="padding-right:5px; padding-left:5px;">{{nm_barang}} - {{nama_warna}}</div></div>')
            }
          });
        });

        $(document).on('click', '.btn-remove', function(e){
          e.preventDefault();
          var button_id = $(this).attr("id");
          $('#row'+button_id+'').remove();
          $('#br'+button_id+'').remove();
        });
      });
    </script>

  </body>

</html>
