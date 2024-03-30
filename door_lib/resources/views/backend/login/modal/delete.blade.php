
    

<form action="{{ route('user.delete', $user->id) }}" method="post" enctype="multipart/form-data">
    {{ method_field('delete')}}
    {{ csrf_field() }}
    <div class="modal fade" id="ModalDelete{{ $user->id }}" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content" style="border-radius: 2%">
                <div class="modal-header">
                    <h4 class="modal-title">{{ __('حذف مستخدم') }}</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
               <div class="modal-body"> هل انت متأكد من  حذف المستخدم<b>{{' '.$user->name}}</b> ؟</div>

               <div class="modal-footer">
                <button type="button" class="btn gray btn-outline-secondary" data-dismiss="modal">{{_('الغاء')}}</button>
                <button type="submit" class="btn btn-outline-danger">{{_('حذف')}}</button>


               </div>

                    




                </div>
            </div>
        </div>
    </div>
</form>
