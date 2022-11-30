
  <?=$this->extend('backend/template')?>
  <?=$this->section('content')?>

    <!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Data Kategori Produk</h1>
                    <p class="mb-4">Data Kategori Produk untuk mengelola data pengguna yang ada di sistem.</p>


  <div class="container mt-5">

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            
            <button id="btn-tambah" class="btn btn-primary">Tambah data</button>
            <h6 class="m-0 font-weight-bold text-primary">
                
            </h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                                    
          <table id="table-pengguna" class="datatable table table-bordered">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama Mitra</th> 
                <th>Alamat</th> 
                <th>Email</th> 
                <th>Telpon</th> 
                <th>Status</th>
                <th>Logo</th>
                <th>Aksi</th>
              </tr>
            </thead>
          </table>
        </div>
    </div>
  </div>
  <!--  -->
  <div id="modalForm" class="modal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 id="judul-form"> </h5>
          <button class="btn-close" data-bs-dismiss="modal" ></button>
        </div>
        <div class="modal-body">
          <form method="post" action="<?=base_url('mitra')?>" id="formPengguna">
            <input type="hidden" name="id" />
            <input type="hidden" name="_method" />
            <div class="mb-3">
              <label for="nama_mitra" class="form-label">Nama Mitra</label>
              <input type="text" name="nama_mitra" class="form-control">
            </div>
            <div class="mb-3">
              <label for="alamat" class="form-label">Alamat</label>
              <input type="text" name="alamat" class="form-control">
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="text" name="email" class="form-control">
            </div>
            <div class="mb-3">
              <label for="nohp" class="form-label">Telpon</label>
              <input type="text" name="nohp" class="form-control">
            </div>
            <div class="mb-3">
              <label for="aktif" class="form-label">Status</label>
              <input type="text" name="aktif" class="form-control">
            </div>
            <div class="mb-3">
              <label for="foto" class="form-label">Foto</label>
              <input type="text" name="foto" class="form-control">
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button class="btn btn-success" id="btn-kirim">Kirim</button>
        </div>
      </div>
    </div>
  </div>
  <?=$this->endSection()?>
  <!-- Script : -->
  <?=$this->section('script')?>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" 
    crossorigin="anonymous"></script> 
<script src="https://cdn.jsdelivr.net/gh/agoenxz2186/submitAjax@develop/submit_ajax.js" 
    ></script> 
<link href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" rel="stylesheet">
<script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script> 

  <script>
  $(document).ready(function(){

    // proses validasi pengiriman paket data
    $("form#formPengguna").submitAjax({
      pre:()=>{
        $("button#btn-kirim").hide();
      },
      pasca:()=>{
        $("button#btn-kirim").show();
      },
      success:(response,status)=>{
        $("#modalForm").modal("hide");
        $("table#table-pengguna").DataTable().ajax.reload();
      },
      error:(xhr,status)=>{
        alert("maaf , Data anda gagal terkirim")
      }
    })

    // menampilkan isi modal
    $("button#btn-tambah").on("click",function(){
      $("#judul-form").html("menambah data");
      $("#modalForm").modal("show");
      $("form#modalPengguna").trigger("reset");
      $("#formPengguna input[name=_method]").val("");
    });

    // kirim data 
    $("button#btn-kirim").on("click",function(){
        // jika sama maka :
        $("form#formPengguna").submit();
    });

    //sunting data table
    $("table#table-pengguna").on("click",".btn-edit",function(){
      $("h5#judul-form").html("Edit data");
      let id = $(this).data("id");
      let baseurl ="<?=base_url()?>";
      

      $.get(`${baseurl}/mitra/${id}`).done((e)=>{
        $("input[name=id]").val(e.id);
        $("input[name=nama_mitra]").val(e.nama_mitra);
        $("input[name=alamat]").val(e.alamat);
        $("input[name=email]").val(e.email);
        $("input[name=nohp]").val(e.nohp);
        $("input[name=aktif]").val(e.aktif);
        $("input[name=foto]").val(e.foto);
        $("#modalForm").modal("show");
        $("#formPengguna input[name=_method]").val("patch");
      });
    });

    // hapus data
    $("table#table-pengguna").on("click", "btn-hapus",function(){
      let konfirmasi = confirm("Apakah Benar Anda Ingin Menghapus Data ini?");
      //logic
      if(konfirmasi  === true){
        let _id = $(this).data("id");
        let baseurl ="<?=base_url()?>";

        $.post(`${baseurl}/mitra`,{id:_id, _method:"delete"}).done(function(e){
          $("table#table-pengguna").DataTable().ajax.reload();
        });
      }
    });

    // isi table 
    $('table#table-pengguna').DataTable({
    processing: true,
    serverSide: true,
    ajax:{
      url: "<?=base_url('mitra/all')?>",method: 'GET'
      },
      columns:
      [
        { data: 'id', sortable:false,searchable:false, 
          render:(data,type,row,meta)=>{
          return meta.settings._iDisplayStart + meta.row + 1;
          } 
        },
        {data: 'nama_mitra' },
        {data: 'alamat' },
        {data: 'email' },
        {data: 'nohp' },
        {data: 'aktif',render:(data,type,row,meta)=>{
          if(data === "Y"){
            return "Aktif";
          }else if(data === "T"){
            return "Tidak";
          }
          return data;
        } },
        {data: 'foto' },
        {data: 'id',render:(data,type,row,meta)=>
          {
          var btnEdit = `<button class='btn btn-edit btn-sm btn-warning' data-id='${data}'> Edit </button>`;
          var btnHapus = `<button class='btn btn-hapus btn-sm btn-danger' data-id='${data}'> Hapus </button>`;
          return btnEdit + btnHapus;
          } 
        }
      ]
    });
  });
  </script>
  <?=$this->endSection()?>


