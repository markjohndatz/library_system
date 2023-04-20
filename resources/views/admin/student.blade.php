@extends('layouts.master')

@section('content')


           <div class="card-body table-responsive">
                    <table id="ports-table" class="table table-striped">
                        <thead>
                            <tr>
                                <th>Student ID</th>
                                <th>Student Name</th>
                                <th>Course</th>
                                <th>Year</th>
                                <th>Created At</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                    </table>
                </div>
                <script>
                var $j = jQuery.noConflict();
                $j(document).ready(function() {
                    $j('#ports-table').DataTable({
                        processing: true,
                        serverSide:true,
                        ajax: '{{ route('book.index') }}',
                        method: 'get',
                        compact: true,
                        order[[3,"asc"]],
                        columns: [
                            {
                                data: 'id',
                                name: 'id',
                                width: '20%',
                            },
                            {
                                data: 'id',
                                name: 'id',
                                width: '30%',
                                "classname":"text-center",
                            },
                            {   
                                data: 'id',
                                name: 'id',
                                width: '20%',
                            },
                            {
                                data: 'created_at',
                                name: 'created_at',
                                type: 'date',
        
                                orderable: false,
                            },
                            {
                                data: null;
                                orderable: false;
                                searchable: false,
                                width: '20%',
                                render: function(data, type, row){
        
                                    return`
                                        <div class="btn-group">
                                            <button data-id="${data{'id'}}" data-action="view">view</button>
                                            <button data-id="${data{'id'}}" data-action="edit"></button>
                                            <button data-id="${data{'id'}}" data-action="delete">delete</button>
                                        </div>
                                    `;
                                }
                            }
                        ]
                    })
                })
                </script>

@endsection