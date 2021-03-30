@extends('layouts.admin')
@section('content')
<div class="card">
    <div class="card-header" >
        Schedule
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Role">
                <thead>
                    <tr>
                        <th width="10">
                            Id.
                        </th>
                        <th>
                            Course
                        </th>
                        <th>
                            Topic
                        </th>
                        <th>
                            DateTime
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <td>
                        1.
                    </td>
                    <td>
                        Appl
                    </td>
                    <td>
                        Design Pattern
                    </td>
                    <td>
                        Senin, 12 November 2020 
                        10.00-12.00 WIB
                    </td>
                </tbody>
                <tbody>
                    <td>
                        2.
                    </td>
                    <td>
                        PABWE
                    </td>
                    <td>
                        Praktikum AJAX
                    </td>
                    <td>
                        Rabu, 14 November 2020 
                        08.00-10.00 WIB
                    </td>
                </tbody>
                <tbody>
                    <td>
                        3.
                    </td>
                    <td>
                        PAM
                    </td>
                    <td>
                        Praktikum Criminal Intent
                    </td>
                    <td>
                        Jumat, 12 November 2020 
                        15.00-17.00 WIB
                    </td>
                </tbody>
            </table>
        </div>
        <div style = "text-align: right;">
            <p> 
                <a href=#>
                    <button class="w3-button w3-blue w3-round-large w3-border w3-border-blue w3-hover-light-blue">
                        Add More..
                    </button>
                </a>
            </p>
        </div>
    </div>
</div>
@endsection