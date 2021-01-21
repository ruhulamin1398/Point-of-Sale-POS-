
@extends('includes.app')


@section('content')



@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

@if (session()->has('success'))
<div class="alert alert-success">
    @if(is_array(session('success')))
    <ul>
        @foreach (session('success') as $message)
        <li>{{ $message }}</li>
        @endforeach
    </ul>
    @else
    {{ session('success') }}
    @endif
</div>
@endif









<div class="container-fluid m-0 p-0">
    
    <!-- Begin Page Content -->
    <div class="" id="createNewForm"  style="display: none">
        <div class="card mb-4 shadow">
    
            <div class="card-header py-3  bg-abasas-dark ">
                <nav class="navbar navbar-dark">
                    <a class="navbar-brand text-light"> Add Role </a>
                </nav>
            </div>

           
            <div class="card-body">
                <form method="POST" id="createEventForm" action="{{ route('permission-role.store' ) }}" enctype="multipart/form-data">
                    @csrf
                    @method('post')

                    <div class="row">
                        

                    <div class="form-group col-md-6 col-sm-12 ">
                        <label for="name"> Name of Role <span style="color: red"> *</span></label>
                       <input class="form-control" type="text" name="name" required>
                    </div>

                
                    
                    <div class="form-group col-md-6 col-sm-12 ">
                        <label for="permission">  <span style="color: red"> *</span></label>
                    
                            <label for="permission">Permission</label>
                            <select class="form-control"  id="sel1" name="permission_id" required >
                                <option selected disabled>Select Permission</option>
                                    @foreach ($permissions as $permission)

                                

                                    <option value="{{ $permission->id }}">{{$permission->name  }}</option>
                                    @endforeach 

                 
                        
                            </select>
                          </div> 
                    </div>


                 

                    <button type="submit"  class="btn bg-abasas-dark"> Submit</button>

                </form>
            </div>
        </div>
    </div> 





   


    <div class="card shadow mb-4">

        <div class="card-header py-3 bg-abasas-dark">
            <nav class="navbar  ">
    
                <div class="navbar-brand"><span id="eventList"> Roles</span> </div>
                <div id="AddNewFormButtonDiv"><button type="button" class="btn btn-success btn-lg" id="AddNewFormButton" ><i class="fas fa-plus"
                        id="PlusButton"></i></button></div> 
    
    
            </nav>
        </div>
        <div class="card-body">
    
            <div class="table-responsive">
                <table class="table table-striped table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead class="bg-abasas-dark">
    
                        <tr>
    
                            <th> #</th>
                            <th>Role Name</th>
                            <th>Role have Permissions</th>
                            <th>Action</th>
    
                        </tr>
                    </thead>
                    <tfoot class="bg-abasas-dark">
                        <tr>
    
                            <th> #</th>
                            <th>Role Name</th>
                            <th>Role have Permissions</th>
                            <th>Action</th>
    
                        </tr>
    
                    </tfoot>
    
                    <tbody>

                        @php
                              $itr=1;
                        @endphp
                     
                        @foreach ($all_roles_in_database as $allrole)
                        @php
                      
                        $rolepermissions = $allrole->permissions
                        @endphp
    
                        <tr class="data-row" >
                            <td class="iteration">{{$itr++}}</td>
                            <td class="word-break name">{{ $allrole->name }}</td>
                            <td class="word-break role">
                                
                                @foreach ($rolepermissions as $permissions)
                               
                       
                                {{ $permissions->name }},

                                {{-- <span class="text-danger text-xs-right" >
                                    <i class="fa fa-trash"></i>
                                </span> --}}


                                @endforeach

                               
                            
                            </td>

                    
{{--     
                            <td class="align-middle">

                                <button type="button" class="btn btn-success" id="level-edit-item" data-item-id={{$id}}> <i class="fa fa-edit" aria-hidden="false"> </i></button>



                            <form method="POST" action="{{ route('permissions.destroy',  $user->id )}}" id="delete-form-{{ $user->id }}" style="display:none; ">
                                {{csrf_field() }}
                                {{ method_field("delete") }}
                            </form>
  
 
                                <button title="Delete" id="permissionDeleteButton" class="dataDeleteItemClass btn btn-danger btn-sm" onclick="if(confirm('are you sure to delete this')){
                    document.getElementById('delete-form-{{ $user->id }}').submit();
                }
                else{
                    event.preventDefault();
                }
                " class="btn btn-danger btn-sm btn-raised">
                                    <i class="fa fa-trash" aria-hidden="false">
    
                                    </i>
                                </button> 
   
    
    
    
                            </td> --}}
    
    
                        </tr>
                        @endforeach
    
                    </tbody>
    
    
                </table>
                
            </div>
        </div>
    </div>
    
    
</div>



<script>
        $(document).ready(function(){
        
        $('body').on('click', '#AddNewFormButton', function () {
            $('#createNewForm').toggle();
            $('#PlusButton').toggleClass('fa-plus').toggleClass('fa-minus');
            

        });
        });
</script>



@endsection