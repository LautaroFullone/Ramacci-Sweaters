<div class="container">
    <div class="row">
      <div class="row" >
        @foreach ($imageIg as $image)
                <div class="contenedor-img "  >
                      <a title="Image 1" data-toggle="modal" data-target="#feed{{ $image->id }}" >
                          <img class="thumbnail img-responsive"  src="images/instagram/{{ $image->src }}">
                      </a>
                </div>
                <div class="modal" id="feed{{ $image->id }}"  style="overflow-y: scroll;">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                            <button class="close" type="button" data-dismiss="modal">×</button>
                            <h3 class="modal-title">Imagen</h3>
                        </div>
                        <div class="modal-body">
                            <img class="thumbnail img-responsive"   src="images/instagram/{{ $image->src }}">
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                      </div>
                    </div>
                  </div>
        @endforeach

      </div>
    </div>
</div>
