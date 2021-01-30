@extends('includes.app')
@section('content')


@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ __('translate.'.$error) }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if (session()->has('success'))
<div class="alert alert-success">
    @if(is_array(session('success')))
        <ul>
            @foreach (session('success') as $message)
                <li>{{  __('translate.'.$message) }}</li>
            @endforeach
        </ul>
    @else
        {{ session('success') }}
    @endif
</div>
@endif


<!-- Content Row -->
<div class="container-fluid ">

    <div class="row ">

        <!-- main body start -->
        <div class="col-xl-8 col-lg-8 col-md-8   ">


            <div class="card mb-4 shadow">

                <div class="card-header bg-abasas-dark py-3">
                    <nav class="navbar navbar-dark">
                        <span>
                            {{ __('translate.Due Receive') }}   @can('Super Admin') <i class="fas fa-tools pl-2"
                            id="pageSetting" data-toggle="modal" data-target="#setting-modal"></i> @endcan  </span>
                        <a href="{{ route('customer-due-receives.index') }}" class="text-light">  <button class="btn btn-success " id="create-button">  {{ __('translate.Due Received List') }} </button></a>

                    </nav>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('customer-due-receives.store') }}">
                        @csrf
                        <div class="form-row align-items-center">

                        
                                <input type="text" name="customer_id" id="CustomerCashcustomerId" value=0 class="form-control mb-2" hidden>
                            
                            <div class="col-12 col-md-4">
                                <label for="CustomerCashAmount"> {{ __('translate.Amount') }}<span class="text-danger">*</span></label>
                                <input type="number" step="any" id="CustomerCashAmount" name="amount" class="form-control mb-2" required>
                            </div>

                            <div class="col-12 col-md-4">

                                <label for="comment"> {{ __('translate.Comment') }}</label>
                                <input type="text" name="comment" id="comment" class="form-control mb-2">
                            </div>


                            <div class="col-12 col-md-4">
                                <button type="submit" class="btn btn-primary btn-block mt-3" id="customerCashReceiveSubmit"> {{ __('translate.Submit') }}</button>
                            </div>

                        </div>

                    </form>
                </div>
            </div>






        </div>

        <!-- Left Sidebar Start -->
        <div class="col-xl-4 col-lg-4 col-md-4   ">

            <x-customer-phone />

        </div>
    </div>
</div>





@can('Super Admin')

 <!-- Attachment Modal -->
 <div class="modal fade" id="setting-modal" tabindex="-1" role="dialog" aria-labelledby="setting-modal-label"
     aria-hidden="true">
     <div class="modal-dialog modal-lg" role="document">
         <div class="modal-content">
             <div class="modal-header bg-abasas-dark">

                <nav class="navbar navbar-light  ">
                    <a class="navbar-brand">{{__('translate.Permission')}}</a>
    
                </nav>
                
            <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close"><span
                    aria-hidden="true">&times;</span>
            </button>

             </div>
             <form action="{{ route('rolepermissionstore') }}" method="post">
                @csrf
                <input type="text" name="page_name" value="Customer Due Receive Create" required hidden>
             <div class="modal-body" >


                
                <div class="table-responsive">
                    <table class="table table-striped table-bordered"  width="100%"
                        cellspacing="0">
                        <thead class="bg-abasas-dark">

                            <tr>

                                <th>{{ __('translate.Permission') }} </th>

                                @for ($i=1 ; $i<5 ; $i++) <th>{{ $roles[$i]->name }}</th>
                                    @endfor
                            </tr>
                        </thead>


                        <tbody>


                            @php
                            $permision_name = "Customer Due Receive Create Page";
                            @endphp
                            
                            <tr class="data-row">
                                <td class="iteration">{{ __('translate.Page Access') }}</td>
                                @for ($i=1 ; $i<5 ; $i++) <td
                                    class="word-break name justify-content-center">
                                    <label class="checkbox-inline"><input type="checkbox"
                                            name="page{{ $i }}"
                                            @if($roles[$i]->hasPermissionTo($permision_name)) checked
                                        @endif></label>
                                    </td>
                                    @endfor

                            </tr>

                        </tbody>



                    </table>
                </div>

             </div>

             <div class="modal-footer">
                <button type="submit"
                                 class="btn bg-abasas-dark btn-block form-control  ">{{ __('translate.Save')  }}</button>
            </div>
             </form>
         </div>
     </div>
 </div>

 @endcan

    <!-- Content Row -->

   <script>
       $(document).ready(function(){
            $('#customerCashReceiveSubmit').on('click',function(){
                var id = $('#customer_input_id').val();
                $('#CustomerCashcustomerId').val(id);
            })
       });
   </script>



    @endsection