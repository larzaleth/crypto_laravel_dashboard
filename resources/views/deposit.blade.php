@extends('layouts.app')

@section('content')

    <div class="container-fluid p-0">
        <div class="chart-card">
            <h4 class="text-light mb-4">List of Deposit</h4>
            
            <div class="table-responsive">
                <table class="table table-dark-custom align-middle">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Deposit ID</th>
                            <th scope="col">Asset</th>
                            <th scope="col">Amount Nett</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>DEPO-IDR-041024165727</td>
                            <td>IDR</td>
                            <td>95.000</td>
                            <td><span class="badge-rejected">Rejected</span></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>DEPO-IDR-041024165727</td>
                            <td>IDR</td>
                            <td>140.000</td>
                            <td><span class="badge-success">Success</span></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>DEPO-BTC-041024165727</td>
                            <td>BTC</td>
                            <td>0.00018809</td>
                            <td><span class="badge-success">Success</span></td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>DEPO-IDR-041024165727</td>
                            <td>IDR</td>
                            <td>95.000</td>
                            <td><span class="badge-success">Success</span></td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>DEPO-IDR-041024165727</td>
                            <td>IDR</td>
                            <td>295.000</td>
                            <td><span class="badge-success">Success</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
    
@endsection