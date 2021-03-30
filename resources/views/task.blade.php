@extends('layouts.admin')
@section('content')
<div class="card">
    <div class="card-header">
        Task List
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
                            Due Date
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
                        Jumat, 22 Desember 2020
                        (12.00 WIB)
                    </td>
                </tbody>
                <tbody>
                    <td>
                        2.
                    </td>
                    <td>
                        Pabwe
                    </td>
                    <td>
                        Praktikum Springboot
                    </td>
                    <td>
                        Sabtu, 23 Desember 2020
                        (20.00 WIB)
                    </td>
                </tbody>
                <tbody>
                    <td>
                        3.
                    </td>
                    <td>
                        Probstat
                    </td>
                    <td>
                        Latihan Week 12
                    </td>
                    <td>
                        Senin, 25 Desember 2020
                        (23.00 WIB)
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