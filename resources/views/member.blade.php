@extends('layouts.app')

@section('content')

    <div class="container-fluid p-0">
        <div class="chart-card">
            <h4 class="text-light mb-4">List of Members</h4>
            
            <div class="table-responsive">
                <table class="table table-dark-custom align-middle">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Email</th>
                            <th scope="col">Username</th>
                            <th scope="col">Name</th>
                            <th scope="col">Status</th>
                            <th scope="col">KYC</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>ronald@example.com</td>
                            <td>Ronald</td>
                            <td>Ronald Watson</td>
                            <td><span class="badge-success">Active</span></td>
                            <td><span class="badge-disabled">No-KYC</span></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>cody@example.com</td>
                            <td>Cody</td>
                            <td>Cody Cooper</td>
                            <td><span class="badge-success">Active</span></td>
                            <td><span class="badge-disabled">No-KYC</span></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>shaw@example.com</td>
                            <td>Shaw</td>
                            <td>Shaw Nguyen</td>
                            <td><span class="badge-success">Active</span></td>
                            <td><span class="badge-disabled">No-KYC</span></td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>ann@example.com</td>
                            <td>Ann</td>
                            <td>Ann Jones</td>
                            <td><span class="badge-success">Active</span></td>
                            <td><span class="badge-disabled">No-KYC</span></td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>mitchell@example.com</td>
                            <td>Mitchell</td>
                            <td>Mitchell Fisher</td>
                            <td><span class="badge-success">Active</span></td>
                            <td><span class="badge-disabled">No-KYC</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
    
@endsection