@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.6/css/dataTables.dataTables.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/3.0.2/css/responsive.dataTables.css">
@endsection

@section('js')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/2.0.6/js/dataTables.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/responsive/3.0.2/js/dataTables.responsive.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/responsive/3.0.2/js/responsive.dataTables.js"></script>

    <script>
        $(document).ready(function() {
            $('#table').DataTable({
                ajax: `{{ route('admin.user.list') }}`,
                responsive: true,
                processing: true,
                serverSide: true,
                columns: [{
                    "data": "name",
                }, {
                    "data": "email",
                }, {
                    "data": "created_at",
                }, {
                    "data": "name",
                    "render": function(name) {
                        return `<div class=" text-center">
                                    <a href="" class="bg-blue-500 p-2 rounded-md">Edit</a>
                                    <a href="" class="bg-red-500 p-2 rounded-md ">Delete</a>
                                </div>`;
                    }
                }, ]
            });
        });
    </script>
@endsection

@section('content')
    <div class="container mx-auto">
        <div class="text-3xl font-bold p-4">
            <h1>User List</h1>
        </div>

        <div class="bg-gray-50 rounded-xl p-4 mt-8">
            <div class="mb-4">
                <a href="{{ route('admin.user.create') }}" class="bg-blue-500 p-2 rounded-md mt-4">Create User</a>
            </div>
            <table class="table-auto w-auto mt-4 display nowrap" style="width:100%" id="table">
                <thead class="" id="">
                    <tr class="">
                        <th class="border-separate border-spacing-2  border border-slate-400">Name</th>
                        <th class="border-separate border-spacing-2 border border-slate-400">Email</th>
                        <th class="border-separate border-spacing-2 border border-slate-400">Created At</th>
                        <th class="border-separate border-spacing-2 border border-slate-400">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="border-separate border-spacing-2 border border-slate-400 p-4">The Sliding Mr. Bones (Next
                            Stop, Pottersville)</td>
                        <td class="border-separate border-spacing-2 border border-slate-400 p-4">Malcolm Lockyer</td>
                        <td class="border-separate border-spacing-2 border border-slate-400 p-4">1961</td>
                        <td class="border-separate border-spacing-2 border border-slate-400 p-4">
                            <div class="text-center">
                                <a href="" class="bg-blue-500 p-2 rounded-md">Edit</a>
                                <a href="" class="bg-red-500 p-2 rounded-md">Delete</a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="border-separate border-spacing-2 border border-slate-400 p-4">The Sliding Mr. Bones (Next
                            Stop, Pottersville)</td>
                        <td class="border-separate border-spacing-2 border border-slate-400 p-4">Malcolm Lockyer</td>
                        <td class="border-separate border-spacing-2 border border-slate-400 p-4">1961</td>
                        <td class="border-separate border-spacing-2 border border-slate-400 p-4">
                            <div class=" text-center">
                                <a href="" class="bg-blue-500 p-2 rounded-md">Edit</a>
                                <a href="" class="bg-red-500 p-2 rounded-md ">Delete</a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="border-separate border-spacing-2 border border-slate-400 p-4">The Sliding Mr. Bones (Next
                            Stop, Pottersville)</td>
                        <td class="border-separate border-spacing-2 border border-slate-400 p-4">Malcolm Lockyer</td>
                        <td class="border-separate border-spacing-2 border border-slate-400 p-4">1961</td>
                        <td class="border-separate border-spacing-2 border border-slate-400 p-4">
                            <div class=" text-center">
                                <a href="" class="bg-blue-500 p-2 rounded-md">Edit</a>
                                <a href="" class="bg-red-500 p-2 rounded-md ">Delete</a>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
