<div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                Edit User
                            </div>
                            <div class="col-md-6">
                                <a href="{{route('admin.users')}}" class="btn btn-success pull-right">All Users</a>
                            </div>
                        </div>
                    </div>
                        <div class="panel-body">
                        @if(Session::has('message'))
                            <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                        @endif
                            <form action="" class="form-horizontal" wire:submit.prevent="updateUser">
                                <div class="form-group">
                                    <label class="col-md-4 control-label">Name</label>
                                    <div class="col-md-4">
                                        <input type="text" placeholder="Name" class="form-control input-md" wire:model="name" >
                                        @error('name') <p class="text-danger">{{$message}}</p>@enderror
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-4 control-label">Email </label>
                                    <div class="col-md-4">
                                        <input type="email" placeholder="Email" class="form-control input-md" wire:model="email">
                                        @error('email') <p class="text-danger">{{$message}}</p>@enderror
                                    </div>
                                </div>

                                <div class="form-group">
                                <label class="col-md-4 control-label">User Type</label>
                                <div class="col-md-4">
                                <select class="form-control" wire:model="utype">
                                        <option value="USR">Customer</option>
                                        <option value="ADM">Admin</option>
                                    </select>
                                    @error('utype') <p class="text-danger">{{$message}}</p>@enderror
                                </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-4 control-label"></label>
                                    <div class="col-md-4">
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
