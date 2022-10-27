<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
    rel="stylesheet"    crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.6.1.min.js"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/gh/agoenxz2186/submitAjax@develop/submit_ajax.js"
    ></script>
<link href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" rel="stylessheet">
<script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

<div class="container"
<button class="float-end btn btn-sm btn-primary" id="btn-tambah">Tambah</button>

<table id="table-pelanggan" class="datatable table table-bordered">
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
                <h5 class="modal-title">Form Pelanggan</h5>
                <button class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body"></div>
                <form id="formPengguna" method="post" action="<?=base_url('pengguna')?>" >
                    <input type="hidden" name="id" />
                    <div class="mb-3">
                        <label class="form-label">Jenis Kelamin</label>
                        <input type="text" name="nama" class="form-control" />
                    </div>
                </form>
            </div>
            <div class="modal-footer"></div>
        </div>
    </div>
</div>


<script>
    $(document).ready(function(){
        $('button#btn-tambah').on('click', function(){
            $('#modalForm').modal('show');
        });

        $('table#table-pelanggan').DataTable({
        });
    });
</script>