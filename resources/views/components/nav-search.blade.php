<div class="bg-transparent mb-3 " id="search">
    <div class="container">
        <div class=" row ">

            <div class="col">
                <x-breadcrumb></x-breadcrumb>
            </div>

            <div class="col ">
                 <div class=" search-div ms-auto">
                        <form class="row g-3 needs-validation" novalidate>
                            <div class="col-md-8 offset-md-4 position-relative">
                                    <input type="text" class=" search-input form-control form-control-sm rounded-pill"
                                    id="validationCustom01" placeholder="{{ __('Search service') }}... ">
                                    <i class="search-icon ms-3 fas fa-search  position-absolute"></i>
                                    <div class="valid-feedback"> Looks good! </div>
                            </div>
                       </form>
                 </div>
            </div>

        </div>
    </div>
</div>
