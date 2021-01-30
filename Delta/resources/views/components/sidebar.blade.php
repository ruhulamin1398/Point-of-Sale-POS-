<!-- Sidebar -->
<ul class="navbar-nav    sidebar sidebar-dark accordion bg-abasas-dark " id="accordionSidebar">

    <!-- Divider -->






    <!-- Nav Item - Dashboard -->
    <li class="nav-item active ">
        <a class="nav-link p-3 " href="{{ route('home') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>{{__('translate.Home')}}</span></a>
    </li>
    <hr class="sidebar-divider m-1 p-0 ">
    <!-- Product Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed  p-3 " href="#" data-toggle="collapse" data-target="#collapseProducts" aria-expanded="true" aria-controls="collapseProducts">
            <i class="fas fa-clipboard-check "></i>
            <span>{{__('translate.Product')}}</span>
        </a>
        <div id="collapseProducts" class="collapse" aria-labelledby="headingProducts" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">



                <a class="collapse-item" href="{{ route('products.index') }}">{{__('translate.All Products')}}</a>
                <a class="collapse-item" href="{{ route('products.create') }}">{{__('translate.Add New')}}</a>
                <a class="collapse-item" href="{{ route('categories.index') }}">{{__('translate.Category')}}</a>
                <a class="collapse-item" href="{{ route('brands.index') }}">{{__('translate.Brands')}}</a>
                <a class="collapse-item" href="{{ route('warrenties.index') }}">{{__('translate.Warrenty')}}</a>
                <a class="collapse-item" href="{{ route('units.index') }}">{{__('translate.Units')}}</a>
                <a class="collapse-item" href="{{ route('stock_alert') }}">{{__('translate.Low Stock Products')}}</a>
                <a class="collapse-item" href="{{ route('drop_products.create') }}">{{__('translate.Drop Product')}}</a>
                <a class="collapse-item" href="{{ route('drop_products.index') }}">{{__('translate.Drop Product List')}}</a>
                <a class="collapse-item" href="{{ route('bar-codes.index') }}">{{__('translate.Code Print')}}</a>
            </div>
        </div>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider m-1 p-0 ">

    <!--sell -->

    <li class="nav-item">
        <a class="nav-link collapsed  p-3 " href="#" data-toggle="collapse" data-target="#collapseSell" aria-expanded="true" aria-controls="collapseSell">
            <i class="fas fa-fw fa-cog"></i>
            <span>{{__('translate.Product Sell')}}</span>
        </a>
        <div id="collapseSell" class="collapse" aria-labelledby="headingSell" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">

                <a class="collapse-item" href="{{ route('orders.create') }}">{{__('translate.Sell')}} </a></a>
                <a class="collapse-item" href="{{ route('orders.index') }}">{{__('translate.Sell List')}} </a>
                <a class="collapse-item" href="{{ route('return-from-customers.index') }}">{{__('translate.Return List')}} </a>
                <a class="collapse-item" href="{{ route('return-from-customers.create') }}">{{__('translate.Return Product')}}  </a>

            </div>
        </div>
    </li>


    <!--sell -->
    <!-- Divider -->

    <hr class="sidebar-divider m-1 p-0 ">

    <!--purchase -->
    <li class="nav-item">
        <a class="nav-link collapsed  p-3 " href="#" data-toggle="collapse" data-target="#collapsePurchase" aria-expanded="true" aria-controls="collapsePurchase">
            <i class="fas fa-fw fa-cog"></i>
            <span>{{__('translate.Purchase')}}</span>
        </a>
        <div id="collapsePurchase" class="collapse" aria-labelledby="headingPurchase" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">

                <a class="collapse-item" href="{{ route('purchases.create') }}">{{__('translate.Buy')}} </a>
                <a class="collapse-item" href="{{ route('purchases.index') }}">{{__('translate.Perchase List')}}  </a>
                <a class="collapse-item" href="{{ route('return-to-suppliers.index') }}">{{__('translate.Return List')}} </a>
                <a class="collapse-item" href="{{ route('return-to-suppliers.create') }}">{{__('translate.Return Product')}}  </a>

            </div>
        </div>
    </li>


    <!--purchase -->

    <!--purchase -->


   
    
        <!-- Divider -->

        <hr class="sidebar-divider m-1 p-0 ">

        <!--purchase -->
        <li class="nav-item">
            <a class="nav-link collapsed  p-3 " href="#" data-toggle="collapse" data-target="#collapseCustomer" aria-expanded="true" aria-controls="collapseCustomer">
                <i class="fas fa-fw fa-cog"></i>
                <span>{{__('translate.Customer')}}</span>
            </a>
            <div id="collapseCustomer" class="collapse" aria-labelledby="headingPurchase" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
    
                    <a class="collapse-item" href="{{ route('customers.index') }}">{{__('translate.Customer')}} </a>
                    <a class="collapse-item" href="{{ route('customer-due-receives.index') }}">{{__('translate.Due Receive List')}} </a>
                    <a class="collapse-item" href="{{ route('customer-due-receives.create') }}">{{__('translate.Due Receive')}}  </a>
    
                </div>
            </div>
        </li>
        <!-- Divider -->

        <hr class="sidebar-divider m-1 p-0 ">

        <!--purchase -->
        <li class="nav-item">
            <a class="nav-link collapsed  p-3 " href="#" data-toggle="collapse" data-target="#collapseSupplier" aria-expanded="true" aria-controls="collapseSupplier">
                <i class="fas fa-fw fa-cog"></i>
                <span>{{__('translate.Supplier')}}</span>
            </a>
            <div id="collapseSupplier" class="collapse" aria-labelledby="headingPurchase" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
    
                    <a class="collapse-item" href="{{ route('suppliers.index') }}">{{__('translate.Supplier')}} </a>
                    <a class="collapse-item" href="{{ route('supplier-due-pays.index') }}">{{__('translate.Due Pay List')}} </a>
                    <a class="collapse-item" href="{{ route('supplier-due-pays.create') }}">{{__('translate.Due Pay')}}  </a>
    
                </div>
            </div>
        </li>
    

    



    <!-- Divider -->
    <hr class="sidebar-divider m-1 p-0 ">

    <!--Category  Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed  p-3 " href="#" data-toggle="collapse" data-target="#collapseStaff" aria-expanded="true" aria-controls="collapseStaff">
            <i class="fas fa-fw fa-cog"></i>
            <span> {{__('translate.Employee')}} </span>
        </a>
        <div id="collapseStaff" class="collapse" aria-labelledby="headingStaff" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('employees.index') }}"> {{__('translate.All Employee')}}</a>
                <a class="collapse-item" href="{{ route('designations.index') }}">{{__('translate.Designations')}}</a>
                <a class="collapse-item" href="{{ route('employee_salaries.index') }}">{{__('translate.Salary')}}</a>
                <a class="collapse-item" href="{{ route('employee_payments.index') }}">{{__('translate.Payments')}}</a>
                <a class="collapse-item" href="{{ route('employee_payment_types.index') }}">{{__('translate.Payment Type')}}</a>
                <a class="collapse-item" href="{{ route('employee_duties.create') }}">{{__('translate.New Duty')}}</a>
                <a class="collapse-item" href="{{ route('employee_duties.index') }}">{{__('translate.Weekly Duty')}}</a>
                <a class="collapse-item" href="{{ route('employee_duties_monthly') }}">{{__('translate.Monthly Duty')}}</a>
                <a class="collapse-item" href="{{ route('duty-statuses.index') }}">{{__('translate.Duty Status')}}</a>

            </div>
        </div>
    </li>


    <!-- Divider -->
    <hr class="sidebar-divider m-1 p-0 ">

    <li class="nav-item">
        <a class="nav-link collapsed  p-3 " href="{{ route('payment_systems.index') }}"   aria-expanded="true" aria-controls="collapseStaff">
            <i class="fas fa-dollar-sign"></i>
            <span> {{__('translate.Payement Systems')}} </span>
        </a>

    </li>



    <!-- ///////////////////////////////////////////////////////////////////////////////////// -->

    <hr class="sidebar-divider m-1 p-0 ">

    <!-- Nav Item - Dashboard -->

    <li class="nav-item">
        <a class="nav-link collapsed  p-3 " href="#" data-toggle="collapse" data-target="#collapseAnalysis" aria-expanded="true" aria-controls="collapseExpenses">
            <i class="fas fa-chart-line"></i>
            <span>{{__('translate.Analysis')}} </span>
        </a>
        <div id="collapseAnalysis" class="collapse" aria-labelledby="headingExpenses" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">


                <a class="collapse-item" href="#">First </a>
                <a class="collapse-item" href="#">Secend</a>
                <a class="collapse-item" href="#">Third</a>

            </div>
        </div>
    </li>



    <hr class="sidebar-divider m-1 p-0 ">

    <!-- Nav Item - Dashboard -->

    <li class="nav-item">
        <a class="nav-link collapsed  p-3 " href="#" data-toggle="collapse" data-target="#collapseExpenses" aria-expanded="true" aria-controls="collapseExpenses">
            <i class="fas fa-clipboard-list"></i>
            <span>{{__('translate.Expense')}} </span>
        </a>
        <div id="collapseExpenses" class="collapse" aria-labelledby="headingExpenses" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">


                <a class="collapse-item" href="{{ route('expenses.index') }}">{{__('translate.Daily')}}</a>
                <a class="collapse-item" href="{{ route('expense-monthlies.index') }}">{{__('translate.Monthly')}}</a>
                <a class="collapse-item" href="{{ route('expense-types.index') }}">{{__('translate.Expense Type')}}</a>

            </div>
        </div>
    </li>

    {{-- <hr class="sidebar-divider m-1 p-0 ">
    <li class="nav-item">
        <a class="nav-link collapsed  p-3 " href="#" data-toggle="collapse" data-target="#collapseRating" aria-expanded="true" aria-controls="collapseSell">
            <i class="fas fa-chart-bar"></i>
            <span>{{__('translate.Rating') }}</span>
        </a>
        <div id="collapseRating" class="collapse" aria-labelledby="headingSell" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">

                <a class="collapse-item" href="{{ route('customer_ratings.index') }}">{{__('translate.Customer Ratings')}} </a></a>
          
            </div> 
        </div>
    </li> --}}

    <!-- Divider -->
    <hr class="sidebar-divider m-1 p-0 ">
    <!-- Nav Item - Dashboard -->
    <li class="nav-item  ">
        <a class="nav-link p-3 " href="{{ route('goals.index') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>{{__('translate.Goal')}}</span></a>
    </li>


       <!-- Divider -->
       <hr class="sidebar-divider m-1 p-0 ">
       <!-- Nav Item - Dashboard -->
   
   
       <li class="nav-item">
           <a class="nav-link collapsed  p-3 " href="#" data-toggle="collapse" data-target="#collapsepermission" aria-expanded="true" aria-controls="collapseExpenses">
               <i class="fas fa-clipboard-list"></i>
               <span>{{__('translate.User Management')}} </span>
           </a>
           <div id="collapsepermission" class="collapse" aria-labelledby="headingExpenses" data-parent="#accordionSidebar">
               <div class="bg-white py-2 collapse-inner rounded">
   
   
                   <a class="collapse-item" href="{{ route('users.index') }}">{{__('translate.Users')}}</a>
                   <a class="collapse-item" href="{{ route('user-roles.index') }}">{{__('translate.Role')}}</a>
                   {{-- <a class="collapse-item" href="{{ route('permission-role.index') }}">{{__('translate.Role')}}</a> --}}
   
               </div>
           </div>
       </li>
   

    <hr class="sidebar-divider m-1 p-0 ">

    <li class="nav-item">
        <a class="nav-link collapsed  p-3 " href="{{ route('pos-setting.index') }}"   aria-expanded="true" aria-controls="collapseStaff">
            <i class="fas fa-dollar-sign"></i>
            <span> {{__('translate.Setting')}} </span>
        </a>

    </li>









    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center  d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>



</ul>
<!-- End of Sidebar -->