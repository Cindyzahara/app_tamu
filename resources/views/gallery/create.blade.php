<div class="content-body">
    <div class="container-fluid">
        <!-- row -->
        <div class="row">
            <div class="col-12">
                    <div class="card-body">
                        <div class="bootstrap-modal">
                            <!-- Modal -->
                            <div class="modal fade" id="basicModal">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                    <form action="{{ route('gallery.store') }}" enctype="multipart/form-data" method="post">
                                        @csrf
                                        <div class="modal-header">
                                            <h5 class="modal-title">Upload Image</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal">
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="input-group mb-3">
                                                <div class="form-file">
                                                    <img class="img-preview img-fluid mb-3 col-sm-2">
                                                    <input type="file" name="foto" id="foto" class="form-file-input form-control" onchange="previewImage()">
                                                </div>
                                            </div>
                                            <div id="imagePreview"></div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </div>
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>

<script>
    function previewImage() {
        var preview = document.querySelector('#imagePreview');
        var file = document.querySelector('input[type=file]').files[0];
        var reader = new FileReader();

        reader.onloadend = function () {
            var img = document.createElement('img');
            img.src = reader.result;
            img.classList.add('img-fluid');
            preview.innerHTML = '';
            preview.appendChild(img);
        }

        if (file) {
            reader.readAsDataURL(file);
        } else {
            preview.innerHTML = '';
        }
    }
</script>