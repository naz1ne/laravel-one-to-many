<div class="modal fade" id="deleteType-{{$type->slug}}" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId-{{$type->slug}}" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm" role="document">
            <div class="modal-content">
                  <div class="modal-header">
                        <h5 class="modal-title" id="modalTitleId-{{$type->slug}}">Delete Type</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                        <p>Stai per cancellare definitvamente "{{$type->name}}". Sei Sicuro?</p>
                  </div>
                  <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <form action="{{route('admin.types.destroy', $type->slug)}}" method="post">
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="btn btn-danger">
                                    Confirm
                              </button>
                        </form>
                  </div>
            </div>
      </div>
</div>