

    <form action="{{ route('user.update', $user->id) }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="modal fade text-left" id="ModalEdit{{ $user->id }}" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content" style="border-radius: 2%">
                    <div class="modal-header">
                        <h4 class="modal-title">{{ __('تعديل المستخدم') }}</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
    
                        <div class="container">
                            <div class="row d-flex justify-content-center align-items-center h-100">
                                <div class="col-12">
                                    <br>
    
                                    <div class="card" >
                                        <div class="card-body">
    
                                            <div class="row align-items-center pt-4 pb-3">
                                                <div class="col-md-3 ps-5">
    
                                                    <h6 class="mb-0">اسم المستخدم</h6>
    
                                                </div>
                                                <div class="col-md-9 pe-5">
    
                                                    <input type="text" class="form-control form-control-lg"
                                                        id="user_name" name="user_name" value="{{ $user->name }}" />
    
                                                    @error('user_name')
                                                        <small class="form-text text-danger">{{ $message }}</small>
                                                    @enderror
    
    
                                                </div>
                                            </div>
    
                                            <hr class="mx-n3">
    
                                            <div class="row align-items-center py-3">
                                                <div class="col-md-3 ps-5">
    
                                                    <h6 class="mb-0">الايميل</h6>
    
                                                </div>
                                                <div class="col-md-9 pe-5">
    
                                                    <input type="email" class="form-control form-control-lg"
                                                        id="user_email" name="user_email" value="{{ $user->email }}" />
    
                                                    @error('user_email')
                                                        <small class="form-text text-danger">{{ $message }}</small>
                                                    @enderror
    
    
    
    
                                                </div>
                                            </div>
    
    
                                           
    
    
                                         
    
                                           <br>
    
                                            <div class="px-5 py-4">
    
                                                <button type="submit" class="btn btn-primary" id="but1">تعديل
                                                    المستخدم</button>
    
                                            </div>
    
                                        </div>
                                    </div>
    
                                </div>
                            </div>
                        </div>
    
    
    
    
                    </div>
                </div>
            </div>
        </div>
    </form>
