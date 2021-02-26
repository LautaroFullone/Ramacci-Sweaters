
<div class="container">
    <div class="row">
      <div class="row" >
        @foreach($imageIg as $image)
                <div class="contenedor-img "  >
                      <a title="Image 1" >
                          <img class="thumbnail img-responsive" id="image-1"  src="images/instagram/{{ $image->src }}">
                      </a>
                </div>
        @endforeach
      </div>

      <hr>

    </div>
</div>

      <div class="hidden" id="img-repo" >
          <!-- #image-1 -->
          
          <div class="item"  id='image-1'>
              <img class="thumbnail img-responsive"  src="images/instagram/{{ $image->src }}">
          </div>
            

      </div>

  <div class="modal" id="modal-gallery" role="dialog" style="overflow-y: scroll;">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
            <button class="close" type="button" data-dismiss="modal">×</button>
            <h3 class="modal-title"></h3>
        </div>
        <div class="modal-body">
            <div id="modal-carousel" class="carousel">

              <div class="carousel-inner">
              </div>

              <a class="carousel-control left" href="#modal-carousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
              <a class="carousel-control right" href="#modal-carousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>

            </div>
        </div>
        <div class="modal-footer">
            <button class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
