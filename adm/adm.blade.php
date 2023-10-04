<x-app-layout>



    <!--**********************************
        Content body start
    ***********************************-->
    <div class="content-body">
        <div class="container-fluid">
            
            <div class="row page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">ADM Transaction</a></li>
                    
                </ol>
            </div>
            <!-- row -->

            <form>
                <div class="mb-3 mb-0">
                    <label class="radio-inline me-3"><input type="radio" name="optradio"> Data</label>
                    <label class="radio-inline me-3"><input type="radio" name="optradio"> Data Range</label>
                </div>
            </form>

            <div class="card-body">
                <div class="row form-material">
                    <div class="col-xl-3 col-xxl-6 col-md-6 mb-3">
                        <label class="form-label">Select Date </label>
                        <input type="text" class="form-control" placeholder="2017-06-04" id="mdate">
                    </div>   
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example" class="display" style="min-width: 845px">
                                    <thead>
                                        <tr>
                                            <th>Curruncy</th>
                                            <th>Amount</th>
                                            <th>Transaction Type</th>
                                            <th>Comment</th>
                                            <th>Username </th>
                                            <th>Date</th>
                                            <th>Attachment</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
            
            

            
 </x-app-layout>
