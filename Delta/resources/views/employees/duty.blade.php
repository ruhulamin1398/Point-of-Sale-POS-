@extends('includes.app')


@section('content')







<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="card mb-4 shadow">


        <div class="card-header py-3 bg-abasas-dark">
            <nav class="navbar navbar-dark ">
                <a class="navbar-brand"> Duty</a>

            </nav>
        </div>
        <div class="card-body">



            <form method="POST" id="product-create-form" action="{{ route('employee_duties.store') }}">
                @csrf

                <div class="row">
                    <div class="form-group col-md-4 col-sm-12  p-4">
                        <label for="catagory_id">Select Employee Name</label>
                        <select class="form-control form-control" value="" name="employee_id" id="employeeId" required>
                            @foreach ($employees as $employee)
                            @if($loop->first)
                            <option value="{{$employee->id}}" selected="selected"> {{$employee->name}}</option>
                            @else
                            <option value="{{$employee->id}}"> {{$employee->name}}</option>
                            @endif
                            @endforeach
                        </select>
                    </div>



                    <div class="form-group col-md-4 col-sm-12  p-4">
                        <label for="date">Date</label>


                        <input type="date" name="date" id="date" class="form-control" min='0' placeholder="date" required>

                    </div>

                    <div class="form-group col-md-4 col-sm-12  p-4">
                        <label for="catagory_id">Select Duty Status</label>
                        <select class="form-control form-control" name="duty_status_id" id="dutyStatusId" required>
                            @foreach ($dutyStatuses as $dutyStatus)
                            @if($loop->first)
                            <option value="{{$dutyStatus->id}}" selected="selected"> {{$dutyStatus->name}}</option>
                            @else
                            <option value="{{$dutyStatus->id}}"> {{$dutyStatus->name}}</option>
                            @endif
                            @endforeach
                        </select>
                    </div>



                    <div class="form-group col-md-4 col-sm-12  p-4" id="divEnterTime">

                        <label for="catagory_id">Enter Time</label>


                        <input type="datetime-local" name="enter_time" id="enterTime" class="form-control" min='0'
                            placeholder="Enter Time">

                    </div>

                    <div class="form-group col-md-4 col-sm-12  p-4" id="divExitTime">
                        <label for="catagory_id">Exit Time</label>


                        <input type="datetime-local" name="exit_time" id="exitTime" class="form-control" min='0'
                            placeholder="Exit Time">

                    </div>

                    <div class="form-group col-md-4 col-sm-12  p-4">
                        <label for="comment">Comment</label>


                        <input type="text" name="comment" id="comment" class="form-control" min='0'
                            placeholder="comment">

                    </div>

                          
               






                </div>
                <button type="submit" id="product-create-submit-button" class="btn bg-abasas-dark"> সাবমিট</button>

            </form>



        </div>
    </div>




</div>



<script>
    $(document).ready(function () {


        $('#dutyStatusId').on('input', function () {
            if ($(this).val() == 1) {
                $('#divEnterTime').show();
                $('#divExitTime').show();
            } else {
                $('#divEnterTime').hide();
                $('#divExitTime').hide();
            }
        });

    });

</script>


@endsection