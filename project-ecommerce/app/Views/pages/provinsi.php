
  
  <div class="container">
    
    <button class=" btn btn-sm btn-primary" id="btn-tambah">Tambah Data</button>
      <table id="table-pengguna" class="datatable table table-bordered">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Gender</th>
            <th>Aksi</th>
          </tr>
        </thead>
      </table>
  </div>
  <div id="modalForm" class="modal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 id="judul-form"> </h5>
          <button class="btn-close" data-bs-dismiss="modal" ></button>
        </div>
        <div class="modal-body">
          <form method="post" action="<?=base_url('pengguna')?>" id="formPengguna">
            <input type="hidden" name="id" />
            <input type="hidden" name="_method" />
            <div class="mb-3">
              <label for="nama" class="form-label">Nama Lengkap</label>
              <input type="text" name="nama" class="form-control">
            </div>
            <div class="mb-3">
              <label for="gender" class="form-label">gender</label>
              <select type="text" name="gender" class="form-control">
                <option value="L">Laki-Laki</option>
                <option value="p">Perempuan</option>
              </select>
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Alamat Email</label>
              <input type="email" name="email" class="form-control">
            </div>
            <div class="mb-3">
              <label for="sandi" class="form-label">Sandi</label>
              <input type="password" name="sandi" id="sandi" class="form-control">
            </div>
            <div class="mb-3">
              <label for="konfirm-sandi" class="form-label">Konfirmasi sandi</label>
              <input type="password" name="konfirm-sandi" id="konfirm-sandi" class="form-control">
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button class="btn btn-success" id="btn-kirim">Kirim</button>
        </div>
      </div>
    </div>
  </div>
  <!-- Script : -->
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
      $("#judul-form").html("menambah data pengguna");
      $("#modalForm").modal("show");
      $("form#modalPengguna").trigger("reset");
      $("#formPengguna input[name=_method]").val("");
    });

    // kirim data 
    $("button#btn-kirim").on("click",function(){
      // periksa apakah sandi dan konfirmasi sandi sama ?
      var pass1= $("#sandi").val();
      var pass2= $("#konfirm-sandi").val();
      if(pass1 != pass2){
        // jika tidak sama maka :
        alert("password yang Anda Masukan Tidak Cocok");
      }else{
        // jika sama maka :
        $("form#formPengguna").submit();
      }
    });

    //sunting data table
    $("table#table-pengguna").on("click",".btn-edit",function(){
      $("h5#judul-form").html("Edit data pengguna");
      let id = $(this).data("id");
      let baseurl ="<?=base_url()?>";
      

      $.get(`${baseurl}/pengguna/${id}`).done((e)=>{
        $("input[name=id]").val(e.id);
        $("input[name=nama]").val(e.nama);
        $("select[name=gender]").val(e.gender);
        $("input[name=email]").val(e.email);
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

        $.post(`${baseurl}/pengguna`,{id:_id, _method:"delete"}).done(function(e){
          $("table#table-pengguna").DataTable().ajax.reload();
        });
      }
    });

    // isi table 
    $('table#table-pengguna').DataTable({
    processing: true,
    serverSide: true,
    ajax:{
      url: "<?=base_url('pengguna/all')?>",method: 'GET'
      },
      columns:
      [
        { data: 'id', sortable:false,searchable:false, 
          render:(data,type,row,meta)=>{
          return meta.settings._iDisplayStart + meta.row + 1;
          } 
        },
        {data: 'nama' },
        {data: 'email' },
        {data: 'gender',render:(data,type,row,meta)=>{
          if(data === "L"){
            return "Laki-Laki";
          }else if(data === "P"){
            return "Perempuan";
          }
          return data;
        } 
        },
        {data: 'id',render:(data,type,row,meta)=>
          {
          var btnEdit = `<button class='btn-edit' data-id='${data}'> Edit </button>`;
          var btnHapus = `<button class='btn-hapus' data-id='${data}'> Hapus </button>`;
          return btnEdit + btnHapus;
          } 
        }
      ]
    });
  });
  </script>



