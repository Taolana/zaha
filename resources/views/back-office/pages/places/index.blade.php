@extends('back-office.layouts.app_admin')
@section('content')
    <div class="modal fade" id="showModal" tabindex="-1" aria-labelledby="showModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Detail</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    detail
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="deleteModeratorModal" tabindex="-1" aria-labelledby="deleteModeratorModal" aria-hidden="true">
        <form id="formDecline" class="decline-form">
            @csrf
            @method('PUT')

            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Are you sure ?</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Sure to delete <span id="name" class="modal-name-variance-delete"></span> ?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">NO</button>
                        <button type="submit" class="btn btn-danger">Yes</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="modal fade approuve-modal" id="approuveModeratorModal" tabindex="-1" aria-labelledby="approuveModeratorModal" aria-hidden="true">
        <form id="formApprouve" class="approuve-form">
            @csrf
            @method('PUT')

            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Are you sure?</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Sure to approuve this place:  <span id="name" class="modal-name-variance"></span> ?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">NO</button>
                        <button type="submit" class="btn btn-success">Yes</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        @if($approuved == true && $declined == false)
            <h1 class="h2">Places recently Approuved</h1>
        @elseif($approuved == false && $declined == true)
            <h1 class="h2">Places were Declined</h1>
        @elseif($approuved == false && $declined == false)
            <h1 class="h2">Places newly Added</h1>
        @endif
        <div class="btn-toolbar mb-2 mb-md-0">
        </div>
    </div>
    <table class="table table-striped moderators">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Add by</th>
            <th scope="col">Status</th>
            @if($declined == false)
                <th scope="col">Desactivate</th>
            @endif
            @if($approuved == false)
                <th scope="col">Approuve</th>
            @endif
            <th scope="col">View</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($datas as $data)
            <tr>
                <th scope="row">{{ $data->id }}</th>
                <td>{{ $data->name }}</td>
                <td>{{ $data->guide->pseudo }}</td>
                @if($declined == false && $approuved == false)
                    <td><span class="badge bg-primary">new</span></td>
                    @elseif($declined == true)
                    <td><span class="badge bg-danger">declined</span></td>
                    @elseif($approuved == true)
                    <td><span class="badge bg-success">approuved</span></td>
                @else
                    <td>-</td>
                @endif

                @if($declined == false)
                    <td>
                        <a href="#"
                           id="toDelete"
                           class="btn btn-danger decline"
                           data-bs-toggle="modal" data-bs-target="#deleteModeratorModal"
                           data-name="{{ $data->name }}"
                           data-action="{{ route('admin.places.index.decline', [($data->id), (Auth::guard('admin')->user()->id)] ) }}"
                        >Deactivate</a>
                    </td>
                @endif
                @if($approuved == false)
                    <td>
                        <a href="#"
                           id="toApprouve"
                           class="btn btn-success approuve"
                           data-bs-toggle="modal" data-bs-target="#approuveModeratorModal"
                           data-name="{{ $data->name }}"
                           data-action="{{ route('admin.places.index.approuve', [($data->id), (Auth::guard('admin')->user()->id)] ) }}"
                        >   @if($declined == true)
                                Re-Approuve
                            @else
                                Approuve
                            @endif</a>
                    </td>
                @endif
                <td>
                    <a href="#"
                       id="toShow"
                       class="btn btn-info approuve"
                       data-bs-toggle="modal" data-bs-target="#showModal"
                       data-name="{{ $data->name }}"
{{--                       data-action="{{ route('admin.places.index.approuve', [($data->id), (Auth::guard('admin')->user()->id)] ) }}"--}}
                    >View</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="d-flex">
        {!! $datas->links() !!}
    </div>
@endsection
@section('js')
    <script >
            var approuveModeratorModal = document.querySelector('.approuve-modal');
            var formApprouve = document.querySelector('.approuve-form')
            var formDecline = document.querySelector('.decline-form')
            var approuve = document.querySelectorAll(".approuve");
            var decline = document.querySelectorAll(".decline");
            approuve.forEach(function(button){
               button.addEventListener("click", function (e) {
                    var action = button.getAttribute("data-action");
                    var name = button.getAttribute("data-name");
                   formApprouve.setAttribute('action', action);
                   var variance = document.querySelector('.modal-name-variance');
                   variance.innerHTML = name;
                })
            })
            decline.forEach(function(button){
                button.addEventListener("click", function (e) {
                    var action = button.getAttribute("data-action");
                    var name = button.getAttribute("data-name");
                    formDecline.setAttribute('action', action);
                    var variance = document.querySelector('.modal-name-variance-delete');
                    variance.innerHTML = name;
                })
            })
    </script>
@endsection
