@extends('layouts.app')

@section('content')
    @include('layouts.navbar')

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <div class="card">
            <div class="card-header">
                <h6 class="card-title">List of Exam</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="examListTable" class="display responsive nowrap">
                        <thead style="background-color:#305573 !important; color:aliceblue" >
                            <th>Exam No</th>
                            <th>Exam Name</th>
                            <th>Exam Link</th>
                            <th>Exam Date Created</th>
                            <th>Exam Type</th>
                            <th>No. of Items</th>
                            <th>Passing Rate</th>
                            <th data-priority>Time Limit</th>
                            <th data-priority>Action</th>
                        </thead>
                        <tbody>
                            {{-- @foreach ($subject as $sData) --}}
                                <tr>
                                    <td>1</td>
                                    <td>FS Compiler</td>
                                    <td><a href="http://onlineexampof.kabayantax.com/fscompiler">http://onlineexampof.kabayantax.com/fscompiler</a></td>
                                    <td>11/22/2016</td>
                                    <td>Final</td>
                                    <td>50</td>
                                    <td>70%</td>
                                    <td>120 mins.</td>
                                    <td>
                                        <a href="" class="btn btn-primary btn-sm"><span data-feather="refresh-cw"></span> Disable</a>
                                        <script>feather.replace()</script>
                                    </td>
                                </tr>
                            {{-- @endforeach --}}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>

@endsection

@section('script')
    <script src="{{ asset('js/examListFunction/examlist.js') }}"></script>
@endsection

@section('style')
    <style>
        input {
        border-radius: 5px;
        border: 2px solid #305573;
        }
    </style>
@endsection
