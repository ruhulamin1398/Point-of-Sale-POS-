@extends('includes.app')


@section('content')

<div class="row">

  <div class="col-8">

    <div class="card mb-4 shadow">

      <div class="card-header py-3 bg-abasas-dark  text-light ">
        <nav class="navbar ">
          <span><a class="navbar-brand">Purchase</a><i class="fas fa-tools pl-2" id="taxCountSetting"></i></span>

        </nav>

      </div>
      <div class="card-body">
        <form id="orderProductInputForm">

          <div class="form-row align-items-center">


            <!-- <div class="col-auto">
        <span class="text-dark  pl-2"> cost</span>
        <input type="text" name="productCost" id="orderProductInputCost" size="10" value="" class="form-control  mb-2">
      </div> -->

            <div class="col-auto">
              <span class="text-dark  pl-2"> পণ্যের আইডি</span>
              <input type="text" name="product_id" id="purchaseProductInputId" size="10" value="" class="form-control  mb-2 inputMinZero " autofocus>
            </div>


            <div class="col-auto">
              <span class="text-dark  pl-2"> পণ্যের নাম</span>
              <input type="text" name="name" id="purchaseProductInputName" size="20" value="" class="form-control  mb-2" readonly>
            </div>
            <div class="col-auto">

              <span class="text-dark pl-1"> মূল্য</span>
              <input type="text" name="price" id="purchaseProductInputPrice" size="6" value=0 min="0" class="form-control  mb-2  inputMinZero">
            </div>

            <div class="col-auto">

              <span class="text-dark pl-1"> ডিসকাউন্ট <span id="percentageIcon"> ( % ) </span> <i class="fas fa-tools" id="disCountSetting"></i></span>
              <input type="text" name="discount" id="purchaseProductInputdiscount" size="6" min="0" value=0 class="form-control  mb-2 inputMinZero">
            </div>




            <!-- <div class="col-auto">
                          
                        <span class="text-dark pl-1"> </span>
                        <select class="form-control form-control" name="discount_type" value="amount" required>
                            <option value="amount">fixed</option>
                            <option value="percentage">%</option>
                        </select>
                        </div> 
                    -->
            <input type="text" name="" id="purchaseProductInputDiscountType" value="1" hidden>
            <input type="text" name="" id="purchaseProductInputDiscountValue" value="0" hidden>

            <div class="col-auto">
              <span class="text-dark pl-1"> পরিমান </span>
              <input type="text" name="quantity" id="purchaseProductInputQuantity" size="6" value=1 min="1" class="form-control  mb-2  inputMinOne">
            </div>




            <div class="col-auto">

              <span class="text-dark pl-1"> মোট</span>
              <input type="text" name="total" id="purchaseProductInputTotal" size="10" value=0 class="form-control  mb-2  inputMinZero ">
            </div>



            <div class="col-auto">
              <button type="button" id="purchaseProductInputSubmit" data-submit-type="create" data-item-id="0" class="btn btn-success mt-3" disabled="true"> সাবমিট</button>
            </div>

          </div>

        </form>
        <div id="purchaseProductError" class="text-danger "> পণ্যটি পাওয়া যায়নি , আবার চেষ্টা করুন !!! </div>



      </div>
    </div>


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-header py-3 bg-abasas-dark">
        <b>পণ্যের লিস্ট</b>

      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-striped table-bordered" id="orderProductTable" width="100%" cellspacing="0">
            <thead class="bg-abasas-dark">


              <tr>
                <th>#</th>
                <th>আইডি</th>
                <th>নাম</th>
                <th> মূল্য</th>
                <th>পরিমান</th>
                <th>Discount</th>
                <th>মোট</th>
                <th> একশন</th>
              </tr>
            </thead>
            <tfoot class="bg-abasas-dark">
              <tr>
                <th>#</th>
                <th>আইডি</th>
                <th>নাম</th>
                <th> মূল্য</th>
                <th>পরিমান</th>
                <th>Discount</th>
                <th>মোট</th>
                <th>একশন</th>
              </tr>

            </tfoot>
            <tbody id="purchaseProductTableTbody">
            </tbody>
          </table>

        </div>
      </div>

    </div>



  </div>
  <div class="col-4 row">

    <x-supplier-phone />





    <div class="col-xl-12 col-md-12 mb-2 mt-2 text-center p-2 ">
      <div class="card border-none   bg-abasas-dark  p-1">
        <div class="card-body">

          <div class="row border-bottom border-dark mb-2">
            <div class="col-6 ">
              <div class="text-left  "> Prodcut Discount</div>
            </div>
            <div class="col-6">
              <div class="text-right " id="ProductDiscountTotal">0</div>
            </div>
          </div>

<input type="text" name="" id="productPurchaseTotal" value='0' class="inputMinZero" >

          <div class="row border-bottom border-dark mb-2">
            <div class="col-8 ">
              <div class="text-left  "> Discount More <span id="moreDiscountPercentageIcon"> ( % ) </span>  <i class="fas fa-tools pl-2" id="purchasePageMoreDiscountSetting"></i></div>
            </div>
            <div class="col-4">
              <input type="text" id="moreDiscountInput" class="form-control form-control-sm inputMinZero" value="0"    >
            </div>
          </div>

          <input type="text"  id="productPurchaseMoreDiscountType" value='1' class="inputMinZero" >

          <input type="text" name="" id="discountTotal" value="0" class="inputMinZero" >
          <div class="row border-bottom border-dark mb-2">
            <div class="col-6 ">
              <div class="text-left  "> Total Dioscount</div>
            </div>
            <div class="col-6">
              <div class="text-right " id="totalDiscountInText">0 + 0</div>
            </div>
          </div>


          <div class="row border-bottom border-dark bg-dark mb-2">
            <div class="col-6 ">
              <div class="text-left  "> Sub Total</div>
            </div>
            <div class="col-6">
              <div class="text-right" id="purchaseSubtotal">0</div>
            </div>
          </div>


          <div class="row border-bottom border-dark mb-2">
            <div class="col-6 ">
              <div class="text-left  "> Tax ( 15 %) <i class="fas fa-tools pl-2" id="taxCountSetting"></i></span></div>
            </div>
            <div class="col-6">
              <div class="text-right ">0</div>
            </div>
          </div>



          <div class="row mb-2">
            <div class="col-12 col-md-6 pt-1 pb-1 border-dark bg-dark border-dotted ">
              <div class="text-center h5 "> Total</div>
          <input type="text" name="" id="totalWithDue" value=4100 class="inputMinZero" >
              <div class="text-center h5 text-success ">0</div>
            </div>

            <div class="col-12 col-md-6  border-dark pt-1 pb-1  border-dotted">
              <div class="text-center h5"> Due</div>
              <div class="text-center h5 text-danger">0 </div>
            </div>
          </div>



          <div class="row   mb-2">

            <div class="text-center  border-top border-dark  mb-2 col-12 "> Add Payment</div>
            {{--
              <form>
              @foreach($paymentSystems as $paymentSystem)
  <div class="custom-control custom-radio custom-control-inline">
    <input type="radio" class="custom-control-input" id="customRadio{{$paymentSystem->id}}" name="example" value="{{$paymentSystem->id}}">
            <label class="custom-control-label" for="customRadio{{$paymentSystem->id}}">{{$paymentSystem->payment_system}}</label>
          </div>
          @endforeach
          </form>
          --}}

          <div class="btn-group btn-group-toggle" data-toggle="buttons">
            @foreach($paymentSystems as $paymentSystem)

            <label class="btn btn-dark p-2 m-1 ">
              <input type="radio" name="paymentSystem" id="Radio{{$paymentSystem->id}}" autocomplete="off"> {{$paymentSystem->payment_system}}
            </label>


            @endforeach
          </div>


          <!-- <div class="bs-example">
    <div class="btn-group btn-group-toggle" data-toggle="buttons">
        <label class="btn btn-primary">
            <input type="radio" name="options" autocomplete="off"> Option A
        </label>
        <label class="btn btn-primary active">
            <input type="radio" name="options" autocomplete="off" checked> Option B
        </label>
        <label class="btn btn-primary">
            <input type="radio" name="options" autocomplete="off"> Option C
        </label>
    </div>
</div> -->


          {{---
              @foreach($paymentSystems as $paymentSystem)
              <input type="button" value="{{$paymentSystem->payment_system}}" class="btn btn-dark p-2 m-1">
          @endforeach



        </div>

        --}}



        <div class="row mb-2 mt-4">


          <div class="input-group col-12">
            <input type="text" class="form-control" id="Pay" placeholder="0.00" aria-describedby="inputGroupAppend" inputMinZero  required>
            <div class="input-group-append">
              <span class="btn btn-success" id="inputGroupPrepend">Complete</span>
            </div>
          </div>
        </div>






      </div>
    </div>
  </div>


</div>


</div>





<!-- Select Discount Type Modal -->

<div class="modal fade   " id="discountModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered  border-none " role="document">
    <div class="modal-content bg-abasas-dark">
      <div class="modal-body p-4 border border-light m-2">
        <div class="form-check form-inline justify-content-center p-4 m-4">
          <label class="form-check-label pl-4 pr-4">
            <input type="radio" class="form-check-input purchasePagePercentageSelect" name="optradio" value="1" id="purchaseModalDiscountTypePercentage"> Percentage ( % )
          </label>
          <label class="form-check-label pl-4 pr-4">
            <input type="radio" class="form-check-input purchasePagePercentageSelect" name="optradio" value="2" id="purchaseModalDiscountTypeFixed">Fixed Price
          </label>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- /Select Discount Type Modal-->





<!-- More Discount Type Modal -->

<div class="modal fade   " id="moreDiscountModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered  border-none " role="document">
    <div class="modal-content bg-abasas-dark">
      <div class="modal-body p-4 border border-light m-2">
        <div class="form-check form-inline justify-content-center p-4 m-4">
          <label class="form-check-label pl-4 pr-4">
            <input type="radio" class="form-check-input purchasePageMoreDiscountSelect" name="more-discount" value="1" id="purchaseMoreModalDiscountTypePercentage"> Percentage ( % )
          </label>
          <label class="form-check-label pl-4 pr-4">
            <input type="radio" class="form-check-input purchasePageMoreDiscountSelect" name="more-discount" value="2" id="purchaseMoreModalDiscountTypeFixed">Fixed Price
          </label>
        </div>
      </div>
    </div>
  </div>
</div>

{{--   More  Discount Type Modal --}}








<script src="{{asset('js/abasas/purchase.js')}}"></script>


@endsection