<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header ">
          <h5 class="modal-title" id="staticBackdropLabel">
            {{__($titulo_modal)}}
            <i class="{{$icon_titulo_modal}} ms-1"></i>
          </h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
          @yield('modal')
        
      </div>
    </div>
  </div>